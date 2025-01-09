<?php
    /*
    * Importar planilla
    - Verificar si la cédula se encuentra como usuario, seguidamente verificar si cargó el CV
    - Emitir un mensaje, de que se intentó cargar un postulante sin que cuente con el CV cargado.
    - Agregar una Auditoria -> intento de carga de vacancia con los errores.
    */
    
    
    header('Content-Type: application/json');
    
    // Obtener los datos JSON del cuerpo de la solicitud
    $data = json_decode(file_get_contents('php://input'), true);
    $excelData = $data['excelData'] ?? [];
    $nroPatronal = $data['nroPatronal'] ?? null;
    $anho = $data['anho'] ?? null;

    $errores = [];
    $registrosValidos = [];
    $insertados = 0;

    $falta_datos = 0;

    // Conectar a la base de datos PostgreSQL
    $conn = pg_connect("host=192.168.70.170 dbname=eportal user=franciscocuevas password=3cR561G4MkgnZ6lPy6pm");
    if (!$conn) {
        echo json_encode([
            'success' => false, 
            'message' => 'Error al conectar con la base de datos.'
        ]);
        exit;
    }
    
    
   
    
    
    
    
    
    
    // Array para almacenar documentos ya procesados
    $documentosProcesados = [];
    
    // Validar todos los datos antes de realizar inserciones
    foreach ($excelData as $index => $fila) {
        
        // Validar los campos según la estructura de la tabla
        $documento = $fila['levelType'] ?? null;
        $nombre = $fila['code'] ?? null;
        $apellido = $fila['catalogType'] ?? null;
        $sexo = $fila['name'] ?? null;
        $estadocivil = $fila['description'] ?? null;
        $fechanac = $fila['sourceLink'] ?? null;
        // Validaciones
        if ($documento === null || strlen($documento) > 50) {//levelType
            $errores[] = "Fila " . ($index + 1) . ": Error en el campo 'documento'.";
        } else if (in_array($documento, $documentosProcesados)) {
            // Validar duplicados
            $errores[] = "Fila " . ($index + 1) . ": El documento ".$documento." esta duplicado!, verifique y vuelva a intentar";
        } else {
            // Agregar documento al array de procesados
            $documentosProcesados[] = $documento;
        }

        if ($nombre === null || !is_string($nombre) || strlen($nombre) > 50) {//code
            $errores[] = "Fila " . ($index + 1) . ": Error en el campo 'nombre'.";
        }

        if ($apellido === null || !is_string($apellido) || strlen($apellido) > 50) {//catalogType
            $errores[] = "Fila " . ($index + 1) . ": Error en el campo 'apellido'.";
        }

        if ($sexo === null ) {//name
            $errores[] = "Fila " . ($index + 1) . ": Error en el campo 'sexo'.";
        }

        if ($estadocivil === null ) {//description
            $errores[] = "Fila " . ($index + 1) . ": Error en el campo 'estadocivil'.";
        }

        if ($fechanac === null) {//sourceLink
            $errores[] = "Fila " . ($index + 1) . ": El campo 'fechanac' es obligatorio.";
        }
        
        
        /*
        // Si no hay errores,
        if (empty($errores)) {
            
            //VERIFICAR SI LA CEDULA QUE VIENE EN EL EXCEL SE ENCUENTRA COMO "USUARIO DEL SISTEMA" EN LA TABLA DE "usuarios"
            $sqlString = "SELECT *
                            FROM bolsa_empleo.bolsa_users
                            WHERE nro_documento = '".$documento."'";
            $result = pg_exec($conn, $sqlString);
            $row = pg_fetch_array($result);
            if ($row["personaid"] != null) {
                //VERIFICAR SI LA CEDULA TIENE CARGADO TODOS SUS DATOS DE CURRICULUM
                $rs = DB::Query("SELECT
                                    (SELECT foto FROM eportal.persons WHERE id = '" . pg_escape_string($row["personaid"]) . "') AS existe_foto,
                                    (SELECT resumen FROM eportal.persons WHERE id = '" . pg_escape_string($row["personaid"]) . "') AS existe_resumen,
                                    (SELECT COUNT(*) FROM eportal.persons_phones WHERE type = 2 and person_id = '" . pg_escape_string($row["personaid"]) . "') AS count_phones,
                                    (SELECT city_id FROM eportal.persons WHERE id = '" . pg_escape_string($row["personaid"]) . "') AS existe_city,
                                    (SELECT domicilio FROM eportal.persons WHERE id = '" . pg_escape_string($row["personaid"]) . "') AS existe_domicilio,
                                    (SELECT canthijos FROM eportal.persons WHERE id = '" . pg_escape_string($row["personaid"]) . "') AS existe_canthijos,
                                    (SELECT COUNT(*) FROM bolsa_empleo.vista_estudios_realizados_union_mec WHERE nro_documento = '" . pg_escape_string($row["nro_documento"]) . "') AS count_educacion,
                                    (SELECT COUNT(*) FROM bolsa_empleo.cvc_experiencia_laboral WHERE fk_persona_id = '" . pg_escape_string($row["personaid"]) . "') AS count_experiencia_laboral,
                                    (SELECT COUNT(*) FROM eportal.persons_referencia WHERE id_persona = '" . pg_escape_string($row["personaid"]) . "') AS count_referencias_personales,
                                    (SELECT COUNT(*) FROM bolsa_empleo.cvc_idiomas WHERE fk_personaid = '" . pg_escape_string($row["personaid"]) . "') AS count_idiomas
                                ");
                $datafinal = $rs->fetchAssoc();

                $existe_foto = $datafinal['existe_foto'];
			    $existe_resumen = $datafinal['existe_resumen'];
			    $count_phones = $datafinal['count_phones'];
			    $existe_city = $datafinal['existe_city'];
			    $existe_domicilio = $datafinal['existe_domicilio'];
			    $existe_canthijos = $datafinal['existe_canthijos'];
			    $count_educacion = $datafinal['count_educacion'];
			    $count_experiencia_laboral = $datafinal['count_experiencia_laboral'];
			    $count_referencias_personales = $datafinal['count_referencias_personales'];
			    $count_idiomas = $datafinal['count_idiomas'];

                //Validar que el postulante tenga todos los datos requeridos para poder postularlo a una oferta laboral.
                if ( empty($dataDatosCV['existe_resumen']) == false && 
                    $dataDatosCV['count_phones'] > 0 && 
                    empty($dataDatosCV['existe_city']) == false && 
                    empty($dataDatosCV['existe_domicilio']) == false && 
                    empty($dataDatosCV['existe_canthijos']) == false  && 
                    $dataDatosCV['count_educacion'] > 0 &&
                    $dataDatosCV['count_experiencia_laboral'] > 0 && 
                    $dataDatosCV['count_referencias_personales'] > 0 && 
                    $dataDatosCV['count_idiomas'] > 0 
                ) {
                    
					// Insertar en postulaciones
                    $strSQLInsert = "INSERT INTO bolsa_empleo.postulacion (id_vacancia,
                                                                            id_estado,
                                                                            fecha_postulacion,
                                                                            fk_personaid)
                                            VALUES('".$params["id_vacancias"]."',
                                                    1,
                                                    now(),
                                                    '".$record["personaid"]."') RETURNING id_postulacion;";
                    $resultInsert = pg_exec($conn, $strSQLInsert);
                    $dataInsert = pg_fetch_array($resultInsert);
                    $id_postulacion = $dataInsert['id_postulacion'];


                }


            } //fin personaid

        }// fin empty($errores)
        */

    } //fin foreach

    
    
    /*
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
    */
    
    
    
    /*
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
    */


    /*
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
    */

?>