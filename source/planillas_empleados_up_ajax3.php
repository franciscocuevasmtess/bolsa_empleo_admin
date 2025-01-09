<?php
    header('Content-Type: application/json');
    include("include/dbcommon.php");

    /*
    * Importar planilla
    - -------------------

    - Procesar el archivo de datos.
        - Validar campos vacios del archivo.
    - Verificar que exista la persona en la BD por su numero de cedula que viene en el archivo.
    - Verificar que la persona no exista en la tabla de postulaciones vinculada a esta 
    vacancia para evitar registros duplicados.
    - Verificar que la persona o postulante tenga todos sus datos cargados(numero de telefono, 
    domicilio, educacion, cantidad de hijos, ciudad, experiencia laboral, referencias personales, 
    idiomas que habla).
    - Finalmente insertar datos en las tablas de: postulacion, seguimientos.
    */
    
    // Configuración de estados de vacancia cerrados
    define('ESTADOS_CERRADOS', [5, 6]);

    /** FUNCIONES AUXILIARES **/
    // Responder con JSON
    function respond($success, $message, $data = null)
    {
        echo json_encode([
            'success' => $success, 
            'message' => $message, 
            'data' => $data
        ]);
        exit;
    }

    // Ejecutar una consulta y devolver un solo resultado
    function getSingleResult($conn, $query, $params)
    {
        $result = pg_query_params($conn, $query, $params);
        return $result && pg_num_rows($result) > 0 ? pg_fetch_assoc($result) : null;
    }

    // Validar datos de la persona
    function validatePersonData($person_id, $code, $conn)
    {
        $query = "SELECT	(SELECT resumen 
                                FROM eportal.persons 
                                WHERE id = $1) AS existe_resumen,
                            (SELECT COUNT(*) 
                                FROM eportal.persons_phones 
                                WHERE type = 2 
                                AND person_id = $1) AS count_phones,
                            (SELECT city_id 
                                FROM eportal.persons 
                                WHERE id = $1) AS existe_city,
                            (SELECT domicilio  
                                FROM eportal.persons 
                                WHERE id = $1) AS existe_domicilio,
                            (SELECT canthijos 
                                FROM eportal.persons 
                                WHERE id = $1) AS existe_canthijos,
                            (SELECT COUNT(*) 
                                FROM bolsa_empleo.vista_estudios_realizados_union_mec 
                                WHERE nro_documento = $2) AS count_educacion,
                            (SELECT COUNT(*) 
                                FROM bolsa_empleo.cvc_experiencia_laboral 
                                WHERE fk_persona_id = $1) AS count_experiencia_laboral,
                            (SELECT COUNT(*) 
                                FROM eportal.persons_referencia 
                                WHERE id_persona = $1) AS count_referencias_personales,
                            (SELECT COUNT(*) 
                                FROM bolsa_empleo.cvc_idiomas 
                                WHERE fk_personaid = $1) AS count_idiomas";
        $result = pg_query_params($conn, $query, [$person_id, $code]);
        if (!$result) {
            return false; // Si la consulta falla, devuelve `false`.
        }

        $data = pg_fetch_assoc($result);
        if (!$data) {
            //error_log("No se encontraron datos para person_id: $person_id, code: $code");
            return false;
        }
    
        return $data; // Devuelve los datos como un arreglo asociativo.
    }

    // Insertar postulaciones y seguimientos
    function insertPostulacion($id_vacancias, $person_id, $usuario_carga_id, $usuario_carga_nombre, $conn)
    {
        // Obtener datos adicionales
        $selectDatosAdicionales = "SELECT ve.id_empresa_sucursal
                                    FROM bolsa_empleo.vacancia v 
                                        JOIN eportal.bolsa_empleo.vacancia_empresa ve ON v.id_vacancias = ve.id_vacancia
                                    WHERE v.id_vacancias = $1";
        $result_select_datos_adicionales = pg_query_params($conn, $selectDatosAdicionales, [$id_vacancias]);

        if (!$result_select_datos_adicionales) {
            //error_log("Error al obtener datos adicionales: " . pg_last_error($conn));
            return false;
        }

        $data_select_datos_adicionales = pg_fetch_assoc($result_select_datos_adicionales);

        if (!$data_select_datos_adicionales) {
            //error_log("No se encontraron datos adicionales para la vacancia: $id_vacancias y persona: $person_id.");
            return false;
        }

        $id_empresa_sucursal = $data_select_datos_adicionales['id_empresa_sucursal'];

        // Insertar en la tabla de postulaciones
        $query = "INSERT INTO bolsa_empleo.postulacion (id_vacancia, 
                                                        id_estado, 
                                                        fecha_postulacion, 
                                                        fk_personaid) 
        VALUES ($1, 1, now(), $2) RETURNING id_postulacion";

        $result = pg_query_params($conn, $query, [$id_vacancias, $person_id]);

        if ($result) {
            $postulacion = pg_fetch_assoc($result);

            // Insertar en la tabla de seguimientos
            $seguimientoQuery = "INSERT INTO bolsa_empleo.seguimientos (fecha_creacion, 
                                                                        id_postulacion, 
                                                                        id_estado_anterior, 
                                                                        id_nuevo_estado, 
                                                                        usuario_carga_id, 
                                                                        usuario_carga_nombre, 
                                                                        id_vacancia, 
                                                                        id_empresa_sucursal) 
                                    VALUES (now(), $1, 1, 1, $2, $3, $4, $5)";

            $result_seguimiento = pg_query_params($conn, $seguimientoQuery, [
                $postulacion['id_postulacion'], 
                $usuario_carga_id, 
                $usuario_carga_nombre, 
                $id_vacancias, 
                $id_empresa_sucursal
            ]);

            if ($result_seguimiento) {
                return true;
            } else {
                //error_log("Error al insertar seguimiento: " . pg_last_error($conn));
                return false;
            }
        } else {
            //error_log("Error al insertar postulación: " . pg_last_error($conn));
            return false;
        }

        return false;
    }


    // Procesar archivo de datos
    function processFile($fileData, $id_vacancias, $usuario_carga_id, $usuario_carga_nombre, $conn)
    {
        $results = [
            'processed' => 0,
            'inserted' => 0,
            'errors' => [],
            'totalrows' => 0
        ];

        $totalRows = count($fileData) - 1; // Asumiendo que el encabezado está en la primera fila
        $results['totalrows'] = $totalRows;

        foreach ($fileData as $index => $row) {
            if ($index === 0) continue; // Omitir encabezado

            $code = trim($row[1] ?? '');
            if (empty($code)) {
                $results['errors'][] = "Fila $index: El campo Número de cédula esta vacío.";
                continue;
            }

            $person = getSingleResult($conn, "SELECT person_id FROM eportal.eportal.persons_docs WHERE valor = $1", [$code]);
            if (!$person) {
                $results['errors'][] = "Fila $index: Persona con cédula número $code no encontrada en la base de datos del sistema.";
                continue;
            }
            $person_id = $person['person_id'];
            
            $postulacion = getSingleResult($conn, "SELECT count(*) as total FROM bolsa_empleo.postulacion WHERE id_vacancia = $1 AND fk_personaid = $2", [$id_vacancias, $person_id]);
            if ($postulacion['total'] > 0) {
                $results['errors'][] = "Fila $index: Persona con numero de cédula <b>$code</b> ya postulada en esta vacancia.";
                continue;
            }
            
            $personData = validatePersonData($person_id, $code, $conn);
            if (!$personData) {
                $results['errors'][] = "Fila $index: Error al verificar datos de la persona con cédula número <b>$code</b>.";
                continue;
            }
            
            if (empty($personData['existe_resumen']) || 
                $personData['count_phones'] == 0 || 
                empty($personData['existe_city']) || 
                empty($personData['existe_domicilio']) || 
                empty($personData['existe_canthijos']) || 
                $personData['count_educacion'] == 0 || 
                $personData['count_experiencia_laboral'] == 0 || 
                $personData['count_referencias_personales'] == 0 || 
                $personData['count_idiomas'] == 0
            ) {
                $results['errors'][] = "Fila $index: Datos incompletos para la persona con cédula número <b>$code</b>.";
                continue;
            }

            
            if (insertPostulacion($id_vacancias, $person_id, $usuario_carga_id, $usuario_carga_nombre, $conn)) {
                $results['inserted']++;
            }
            
            $results['processed']++;
        }

        return $results;
    }

    // Generar resumen del procesamiento
    function generateSummary($results)
    {
        $message = "Proceso Completado <br>Filas Procesadas: <b>{$results['processed']}</b>, Filas Insertadas:  <b>{$results['inserted']}</b>, Total de registros: <b>{$results['totalrows']}</b>";
        if (!empty($results['errors'])) {
            $message .= "<br>Verifique las siguientes filas del archivo:<br>" . implode("<br>", $results['errors']);
        }
        return ['message' => $message, 'data' => $results];
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fileData = json_decode($_POST['fileData'], true);
        $id_vacancias = json_decode($_POST['id_vacancias'], true);
        $usuario_carga_id = json_decode($_POST['usuario_carga_id'], true);
        $usuario_carga_nombre = $_POST['usuario_carga_nombre'];
    
        // Validar datos iniciales
        if (!$fileData) {
            respond(false, 'No se recibió el archivo a procesar.');
        }

        if (count($fileData) <= 0) {
            respond(false, 'El archivo no contiene filas para procesar');
        }
    
        $conn = pg_connect("host=192.168.70.170 dbname=eportal user=franciscocuevas password=6XP4fJe8tX7sdTaL6Rfk");
        if (!$conn) {
            respond(false, 'Error al conectar con la base de datos.');
        }
        
        // Verificar el estado de la vacancia
        $vacancia = getSingleResult($conn, "SELECT id_estado_vacancia FROM bolsa_empleo.vacancia WHERE id_vacancias = $1", [$id_vacancias]);
        if (!$vacancia) {
            respond(false, 'No existe la vacancia.');
        }
    
        if (in_array($vacancia['id_estado_vacancia'], ESTADOS_CERRADOS)) {
            respond(false, 'La vacancia ya está cerrada.');
        }
        
        // Procesar archivo
        $results = processFile($fileData, $id_vacancias, $usuario_carga_id, $usuario_carga_nombre, $conn);
        
        // Resumen final
        $summary = generateSummary($results);
        respond(true, $summary['message'], $summary['data']);
    } else {
        respond(false, 'Método no soportado.');
    }

?>