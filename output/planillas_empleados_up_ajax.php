<?php
    header('Content-Type: application/json');

    // Función para convertir un número de serie de Excel a una fecha 'YYYY-MM-DD'
    function excelDateToDate($serial) {
        if (is_numeric($serial)) {
            $unixDate = ($serial - 25569) * 86400;
            return gmdate("Y-m-d", $unixDate);
        }
        return false;
    }

    // Obtener los datos JSON del cuerpo de la solicitud
    $data = json_decode(file_get_contents('php://input'), true);
    $excelData = $data['excelData'] ?? [];
    $nroPatronal = $data['nroPatronal'] ?? null;
    $anho = $data['anho'] ?? null;

    $errores = [];
    $registrosValidos = [];
    $insertados = 0;

    // Conectar a la base de datos PostgreSQL
    $conn = pg_connect("host=192.168.70.186 dbname=eportal user=postgres password=tu_contraseña");
    if (!$conn) {
        echo json_encode(['success' => false, 'message' => 'Error al conectar con la base de datos.']);
        exit;
    }
    
    // Verificar si existe el nropatronal y anho en public.cabsueldos con empleadopresentado = 1
    $queryVerificacion = "SELECT 1
                            FROM public.cabsueldos
                            WHERE nropatronal = $1 
                            AND anho = $2 
                            AND empleadopresentado = 1
                            LIMIT 1";
    $resultVerificacion = pg_query_params($conn, $queryVerificacion, [$nroPatronal, $anho]);
    if (pg_num_rows($resultVerificacion) == 1) {
        echo json_encode([
            'success' => false, 
            'message' => 'No se puede insertar. YA PRESENTO ESTA PLANILLA PARA EL AÑO SELECCIONADO.'
        ]);
        pg_close($conn);
        exit;
    }

    // Consulta para verificar si la empresa actualizó sus datos en el año actual
    $sql = "SELECT * 
            FROM public.actualizacion_datos_empresas 
            WHERE nro_patronal = $1 
            AND EXTRACT(YEAR FROM fecha_actualizacion) = date_part('year', CURRENT_DATE) 
            AND ant_tel IS NOT NULL 
            AND ant_direccion IS NOT NULL 
            AND ant_email IS NOT NULL 
            AND ant_geo IS NOT NULL 
            ORDER BY fecha_actualizacion DESC 
            LIMIT 1";
    // Preparar y ejecutar la consulta
    $result = pg_prepare($conn, "check_update", $sql);
    $result = pg_execute($conn, "check_update", array($nroPatronal));

    // Obtener los datos
    $datacamb = pg_fetch_assoc($result);

    // Si no hay registro de actualización de datos
    if (!$datacamb) {
        echo json_encode([
            'success' => false, 
            'message' => 'NO ACTUALIZÓ SU DATOS !!!. Verifique en DATOS DE PATRONAL que tenga datos actualizados de: tel, dirección, email, geolocalización, etc.'
        ]);
        pg_close($conn);
        exit;
    }

    // Array para almacenar documentos ya procesados
    $documentosProcesados = [];

    // Validar todos los datos antes de realizar inserciones
    foreach ($excelData as $index => $fila) {
        // Validar los campos según la estructura de la tabla
        $documento = $fila['documento'] ?? null;
        $nombre = $fila['nombre'] ?? null;
        $apellido = $fila['apellido'] ?? null;
        $sexo = $fila['sexo'] ?? null;
        $estadocivil = $fila['estadocivil'] ?? null;
        $fechanac = $fila['fechanac'] ?? null;
        $nacionalidad = $fila['nacionalidad'] ?? null;
        $domicilio = $fila['domicilio'] ?? null;
        $fechanacmenor = $fila['fechanacmenor'] ?? null;
        $hijosmenores = $fila['hijosmenores'] ?? null;
        $cargo = $fila['cargo'] ?? null;
        $profesion = $fila['profesion'] ?? null;
        $fechaentrada = $fila['fechaentrada'] ?? null;
        $horariotrabajo = $fila['horariotrabajo'] ?? null;
        $fechasalida = $fila['fechasalida'] ?? null;
        $motivosalida = $fila['motivosalida'] ?? null;

        // Validaciones
        if ($documento === null || strlen($documento) > 50) {
            $errores[] = "Fila " . ($index + 1) . ": Error en el campo 'documento'.";
        } else if (in_array($documento, $documentosProcesados)) {
            // Validar duplicados
            $errores[] = "Fila " . ($index + 1) . ": El documento ".$documento." esta duplicado!, verifique y vuelva a intentar";
        } else {
            // Agregar documento al array de procesados
            $documentosProcesados[] = $documento;
        }

        if ($nombre === null || !is_string($nombre) || strlen($nombre) > 50) {
            $errores[] = "Fila " . ($index + 1) . ": Error en el campo 'nombre'.";
        }

        if ($apellido === null || !is_string($apellido) || strlen($apellido) > 50) {
            $errores[] = "Fila " . ($index + 1) . ": Error en el campo 'apellido'.";
        }

        if ($sexo === null || !in_array($sexo, ['M', 'F'])) {
            $errores[] = "Fila " . ($index + 1) . ": Error en el campo 'sexo'.";
        }

        if ($estadocivil !== null && !in_array($estadocivil, ['S', 'C', 'D', 'V'])) {
            $errores[] = "Fila " . ($index + 1) . ": Error en el campo 'estadocivil'.";
        }

        // Validación y conversión de fechanac
        if ($fechanac === null) {
            $errores[] = "Fila " . ($index + 1) . ": El campo 'fechanac' es obligatorio.";
            continue;
        } else {
            if (is_numeric($fechanac)) {
                $fechanac = excelDateToDate($fechanac);
            } else {
                $fechaNac = DateTime::createFromFormat('Y-m-d', $fechanac);
                if (!$fechaNac) {
                    $fechaNac = DateTime::createFromFormat('d-m-Y', $fechanac);
                }
                if (!$fechaNac) {
                    $fechaNac = DateTime::createFromFormat('d/m/Y', $fechanac);
                }
                if (!$fechaNac) {
                    $fechaNac = DateTime::createFromFormat('m/d/Y', $fechanac);
                }
                if (!$fechaNac) {
                    $errores[] = "Fila " . ($index + 1) . ": Formato incorrecto para 'fechanac'.";
                    continue;
                } else {
                    $fechanac = $fechaNac->format('Y-m-d'); // Convertir a formato 'YYYY-MM-DD'
                }
            }
        }

        if ($nacionalidad !== null && (!is_string($nacionalidad) || strlen($nacionalidad) > 20)) {
            $errores[] = "Fila " . ($index + 1) . ": Error en el campo 'nacionalidad'.";
        }

        if ($domicilio !== null && (!is_string($domicilio) || strlen($domicilio) > 100)) {
            $errores[] = "Fila " . ($index + 1) . ": Error en el campo 'domicilio'.";
        }

        // Verificación y formato del campo 'fechanacmenor'
        if ($fechanacmenor !== null) {
            if (is_numeric($fechanacmenor)) {
                $fechanacmenor = excelDateToDate($fechanacmenor);
            } else {
                $fechaNacMenor = DateTime::createFromFormat('Y-m-d', $fechanacmenor);
                if (!$fechaNacMenor) {
                    $fechaNacMenor = DateTime::createFromFormat('d-m-Y', $fechanacmenor);
                }
                if (!$fechaNacMenor) {
                    $fechaNacMenor = DateTime::createFromFormat('d/m/Y', $fechanacmenor);
                }
                if (!$fechaNacMenor) {
                    $fechaNacMenor = DateTime::createFromFormat('m/d/Y', $fechanacmenor);
                }

                if (!$fechaNacMenor) {
                    $errores[] = "Fila " . ($index + 1) . ": Formato incorrecto para 'fechanacmenor'.";
                    continue;
                } else {
                    $fechanacmenor = $fechaNacMenor->format('Y-m-d'); // Convertir a formato 'YYYY-MM-DD'
                }
            }
        }

        if ($hijosmenores === null || !is_numeric($hijosmenores)) {
            $errores[] = "Fila " . ($index + 1) . ": Error en el campo 'hijosmenores'.";
        }

        if ($cargo !== null && (!is_string($cargo) || strlen($cargo) > 100)) {
            $errores[] = "Fila " . ($index + 1) . ": Error en el campo 'cargo'.";
        }

        if ($profesion !== null && (!is_string($profesion) || strlen($profesion) > 100)) {
            $errores[] = "Fila " . ($index + 1) . ": Error en el campo 'profesion'.";
        }

        // Validación y conversión de fechaentrada
        if ($fechaentrada === null) {
            $errores[] = "Fila " . ($index + 1) . ": El campo 'fechaentrada' es obligatorio.";
            continue;
        } else {
            if (is_numeric($fechaentrada)) {
                $fechaentrada = excelDateToDate($fechaentrada);
            } else {
                $fechaEntrada = DateTime::createFromFormat('Y-m-d', $fechaentrada);
                if (!$fechaEntrada) {
                    $fechaEntrada = DateTime::createFromFormat('d-m-Y', $fechaentrada);
                }
                if (!$fechaEntrada) {
                    $fechaEntrada = DateTime::createFromFormat('d/m/Y', $fechaentrada);
                }
                if (!$fechaEntrada) {
                    $fechaEntrada = DateTime::createFromFormat('m/d/Y', $fechaentrada);
                }

                if (!$fechaEntrada) {
                    $errores[] = "Fila " . ($index + 1) . ": Formato incorrecto para 'fechaentrada'.";
                    continue;
                } else {
                    $fechaentrada = $fechaEntrada->format('Y-m-d'); // Convertir a formato 'YYYY-MM-DD'
                }
            }
        }

        if ($horariotrabajo !== null && (!is_string($horariotrabajo) || strlen($horariotrabajo) > 50)) {
            $errores[] = "Fila " . ($index + 1) . ": Error en el campo 'horariotrabajo'.";
        }

        // Verificación y formato de fechasalida
        if ($fechasalida !== null) {
            if (is_numeric($fechasalida)) {
                $fechasalida = excelDateToDate($fechasalida);
            } else {
                $fechaSalida = DateTime::createFromFormat('Y-m-d', $fechasalida);
                if (!$fechaSalida) {
                    $fechaSalida = DateTime::createFromFormat('d-m-Y', $fechasalida);
                }
                if (!$fechaSalida) {
                    $fechaSalida = DateTime::createFromFormat('d/m/Y', $fechasalida);
                }
                if (!$fechaSalida) {
                    $fechaSalida = DateTime::createFromFormat('m/d/Y', $fechasalida);
                }

                if (!$fechaSalida) {
                    $errores[] = "Fila " . ($index + 1) . ": Formato incorrecto para 'fechasalida'.";
                    continue;
                } else {
                    $fechasalida = $fechaSalida->format('Y-m-d'); // Convertir a formato 'YYYY-MM-DD'
                }
            }
        }

        // Validar que motivosalida no exceda los 100 caracteres si no es null
        if ($motivosalida !== null && strlen($motivosalida) > 100) {
            $errores[] = "Fila " . ($index + 1) . ": motivo salida excede el número máximo de 100 caracteres.";
        }

        // Si no hay errores, agregar al array de registros válidos
        if (empty($errores)) {
            $registrosValidos[] = [
                'documento' => $documento,
                'nombre' => $nombre,
                'apellido' => $apellido,
                'sexo' => $sexo,
                'estadocivil' => $estadocivil,
                'fechanac' => $fechanac,
                'nacionalidad' => $nacionalidad,
                'domicilio' => $domicilio,
                'fechanacmenor' => $fechanacmenor,
                'hijosmenores' => $hijosmenores,
                'cargo' => $cargo,
                'profesion' => $profesion,
                'fechaentrada' => $fechaentrada,
                'horariotrabajo' => $horariotrabajo,
                'fechasalida' => $fechasalida,
                'motivosalida' => $motivosalida,
            ];
        }
    }

    // Insertar los registros válidos
    if (empty($errores) && !empty($registrosValidos)) {
        $insertQuery = "INSERT INTO empleado (documento, 
                                                nombre, 
                                                apellido, 
                                                sexo, 
                                                estadocivil, 
                                                fechanac, 
                                                nacionalidad, 
                                                domicilio,
                                                fechanacmenor, 
                                                hijosmenores, 
                                                cargo, 
                                                profesion, 
                                                fechaentrada, 
                                                horariotrabajo, 
                                                fechasalida, 
                                                nropatronal, 
                                                anho, 
                                                motivosalida) 
                        VALUES ";
        $values = [];
        foreach ($registrosValidos as $registro) {
            $values[] = sprintf("('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', %s, %d, '%s', '%s', %s, '%s', %s, %d, %d, '%s')",
                pg_escape_string($registro['documento']),
                pg_escape_string($registro['nombre']),
                pg_escape_string($registro['apellido']),
                pg_escape_string($registro['sexo']),
                pg_escape_string($registro['estadocivil']),
                pg_escape_string($registro['fechanac']),
                pg_escape_string($registro['nacionalidad']),
                pg_escape_string($registro['domicilio']),
                empty($registro['fechanacmenor']) ? 'NULL' : "'" . pg_escape_string($registro['fechanacmenor']) . "'",
                $registro['hijosmenores'],
                pg_escape_string($registro['cargo']),
                pg_escape_string($registro['profesion']),
                empty($registro['fechaentrada']) ? 'NULL' : "'" . pg_escape_string($registro['fechaentrada']) . "'",
                pg_escape_string($registro['horariotrabajo']),
                empty($registro['fechasalida']) ? 'NULL' : "'" . pg_escape_string($registro['fechasalida']) . "'",
                $nroPatronal,
                $anho,
                pg_escape_string($registro['motivosalida'])
            );
        }
        
        $insertQuery .= implode(", ", $values);

        $resultInsert = pg_query($conn, $insertQuery);
        if ($resultInsert) {
            $insertados = pg_affected_rows($resultInsert);
        } else {
            $errores[] = "Error al insertar datos en la base de datos.";
        }
    }
    
    
    // Verificar si existe un registro en la tabla cabsueldos
    $queryExists = "SELECT * 
                    FROM public.cabsueldos 
                    WHERE nropatronal = $1 
                    AND anho = $2";
    $resultExists = pg_query_params($conn, $queryExists, [$nroPatronal, $anho]);

    if ($resultExists && pg_num_rows($resultExists) > 0 && empty($errores)) {
        // Si existe, actualizar el registro
        $queryUpdate = "UPDATE public.cabsueldos
                        SET empleadopresentado = 1
                        WHERE nropatronal = $1 
                        AND anho = $2";
        $resultUpdate = pg_query_params($conn, $queryUpdate, [$nroPatronal, $anho]);

        if (!$resultUpdate) {
            $errores[] = "Error al actualizar la tabla cabsueldos.";
        }
    } else if(empty($errores)) {
        // Si no existe, insertar un nuevo registro
        $queryInsert = "INSERT INTO public.cabsueldos(nropatronal, anho, empleadopresentado) 
                        VALUES ($1, $2, 1)";
        $resultInsert = pg_query_params($conn, $queryInsert, [$nroPatronal, $anho]);
        
        if (!$resultInsert) {
            $errores[] = "Error al insertar en la tabla cabsueldos.";
        }
    }

    // Cerrar la conexión
    pg_close($conn);

    // Responder con el resultado
    if (!empty($errores)) {
        echo json_encode([
            'success' => false,
            'message' => implode(" ", $errores),
            'insertados' => $insertados
        ]);
    } else {
        echo json_encode([
            'success' => true,
            'message' => 'Datos procesados correctamente.',
            'insertados' => $insertados
        ]);
    }
?>