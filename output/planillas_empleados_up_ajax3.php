<?php
    header('Content-Type: application/json');
    include("include/dbcommon.php");
    
    // Configuración de estados de vacancia cerrados
    define('ESTADOS_CERRADOS', [5, 6]);

    /** FUNCIONES AUXILIARES **/
    // Responder con JSON
    function respond($success, $message, $data = null)
    {
        //echo json_encode(compact('success', 'message', 'data'));
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
            error_log("No se encontraron datos para person_id: $person_id, code: $code");
            return false;
        }
    
        return $data; 
        //return pg_fetch_assoc($result); // Devuelve los datos como un arreglo asociativo.
    }

    // Insertar postulaciones y seguimientos
    function insertPostulacion($id_vacancias, $person_id, $usuario_carga_id, $usuario_carga_nombre, $conn)
    {
        /*
        $query = "INSERT INTO bolsa_empleo.postulacion (id_vacancia, 
                                                        id_estado, 
                                                        fecha_postulacion, 
                                                        fk_personaid) 
                    VALUES ($1, 1, now(), $2) RETURNING id_postulacion";
        $result = pg_query_params($conn, $query, [$id_vacancias, $person_id]);
        if ($result) {
            $postulacion = pg_fetch_assoc($result);
            // Insertar seguimiento
            $seguimientoQuery = "INSERT INTO bolsa_empleo.seguimientos (fecha_creacion, 
                                                                        id_postulacion, 
                                                                        id_estado_anterior, 
                                                                        id_nuevo_estado, 
                                                                        usuario_carga_id, 
                                                                        usuario_carga_nombre, 
                                                                        id_vacancia) 
                                    VALUES (now(), $1, 1, 1, $2, $3, $4)";
            pg_query_params($conn, $seguimientoQuery, [$postulacion['id_postulacion'], 
                                                        $usuario_carga_id, 
                                                        $usuario_carga_nombre, 
                                                        $id_vacancias]);
            return true;
        }
        return false;
        */
        /********/
        
        // Obtener datos adicionales
        /*$selectDatosAdicionales = "SELECT p.id_postulacion, 
                                            ve.id_empresa_sucursal, 
                                            per.nombre || ' ' || per.apellidos as nombre_completo, 
                                            ocupn.descripcion
                                    FROM bolsa_empleo.vacancia v 
                                        JOIN eportal.bolsa_empleo.postulacion p ON p.id_vacancia = v.id_vacancias
                                        JOIN eportal.bolsa_empleo.vacancia_empresa ve ON p.id_vacancia = ve.id_vacancia 
                                        JOIN eportal.eportal.persons per ON per.id = p.fk_personaid
                                        JOIN eportal.bolsa_empleo.vacancia_puesto vp ON v.id_vacancias = vp.id_vacancia
                                        JOIN eportal.bolsa_empleo.ocupaciones_nuevas ocupn ON vp.fk_ocupacion_puesto = ocupn.id_ocu_puest_clasic
                                    WHERE v.id_vacancias = $1
                                    AND p.fk_personaid = $2";
        $result_select_datos_adicionales = pg_query_params($conn, $selectDatosAdicionales, [$id_vacancias, $person_id]);*/
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
        //$nombre_completo = $data_select_datos_adicionales['nombre_completo'];
        //$descripcion_puesto = $data_select_datos_adicionales['descripcion'];

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
            'totalrows' => 0,
            'fila' => []
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
                //$errors[] = "Fila $index: Error al verificar datos de la persona con cédula número $code.";
                $results['errors'][] = "Fila $index: Error al verificar datos de la persona con cédula número <b>$code</b>.";
                //continue;
            }
            
            if (/*$personData['existe_resumen'] !== null && $personData['existe_resumen'] !== '' && 
                $personData['count_phones'] > 0 && 
                $personData['existe_city'] !== null && $personData['existe_city'] !== '' && 
                $personData['existe_domicilio'] !== null && $personData['existe_domicilio'] !== '' && 
                $personData['existe_canthijos'] !== null && $personData['existe_canthijos'] !== '' && 
                $personData['count_educacion'] > 0 &&
                $personData['count_experiencia_laboral'] > 0 && 
                $personData['count_referencias_personales'] > 0 && 
                $personData['count_idiomas'] > 0*/
                /*$personData['existe_resumen'] == null || $personData['existe_resumen'] == '' || 
                $personData['count_phones'] <= 0 || 
                $personData['existe_city'] == null || $personData['existe_city'] == '' || 
                $personData['existe_domicilio'] == null || $personData['existe_domicilio'] == '' || 
                $personData['existe_canthijos'] == null || $personData['existe_canthijos'] == '' || 
                $personData['count_educacion'] <= 0 ||
                $personData['count_experiencia_laboral'] <= 0 || 
                $personData['count_referencias_personales'] <= 0 || 
                $personData['count_idiomas'] <= 0*/
                empty($personData['existe_resumen']) || 
                $personData['count_phones'] == 0 || 
                empty($personData['existe_city']) || 
                empty($personData['existe_domicilio']) || 
                empty($personData['existe_canthijos']) || 
                $personData['count_educacion'] == 0 || 
                $personData['count_experiencia_laboral'] == 0 || 
                $personData['count_referencias_personales'] == 0 || 
                $personData['count_idiomas'] == 0
            ) {
                //$errors[] = "Fila $index: Datos incompletos para la persona con cédula número $code.";
                $results['errors'][] = "Fila $index: Datos incompletos para la persona con cédula número <b>$code</b>.";
                continue;
            }

            
            if (insertPostulacion($id_vacancias, $person_id, $usuario_carga_id, $usuario_carga_nombre, $conn)) {
                $results['inserted']++;
            }
            /**/
            $results['processed']++;
            //$results['fila'] .= " FILA $index, Persona $person_id, Code $code, Processed ".$results['processed'].", Total $totalRows existe_resumen ".$personData['existe_resumen'];
            //$results['fila'][] =  "FILA $index, Code $code, Total $totalRows resumen ".$personData['existe_resumen'];
            $resumen = $personData['existe_resumen'];
            $results['fila'][] = "Fila $index Code $code resumen $resumen";
        }

        return $results;
    }

    // Generar resumen del procesamiento
    function generateSummary($results)
    {
        //$message = "processed: {$results['processed']} inserted, {$results['inserted']}";
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

        //$totalRows = count($fileData);
        if (count($fileData) <= 0) {
            respond(false, 'El archivo no contiene filas para procesar');
        }
    
        $conn = pg_connect("host=192.168.70.170 dbname=eportal user=franciscocuevas password=6XP4fJe8tX7sdTaL6Rfk");
        if (!$conn) {
            respond(false, 'Error al conectar con la base de datos.');
        }
        //respond(true, 'Paso todo la prueba1.');

        
        // Verificar el estado de la vacancia
        $vacancia = getSingleResult($conn, "SELECT id_estado_vacancia FROM bolsa_empleo.vacancia WHERE id_vacancias = $1", [$id_vacancias]);
        if (!$vacancia) {
            respond(false, 'No existe la vacancia.');
        }
    
        if (in_array($vacancia['id_estado_vacancia'], ESTADOS_CERRADOS)) {
            respond(false, 'La vacancia ya está cerrada.');
        }
        //respond(true, 'Paso todo la prueba2.');
        
        // Procesar archivo
        $results = processFile($fileData, $id_vacancias, $usuario_carga_id, $usuario_carga_nombre, $conn);
        //respond(true, 'Paso todo la prueba3.',  $results['fila']);
        
        // Resumen final
        $summary = generateSummary($results);
        respond(true, $summary['message'], $summary['data']);
        /**/
    } else {
        respond(false, 'Método no soportado.');
    }





    



/**********************************************************************************************/
    /*
    * Importar planilla
    - Verificar si la cédula se encuentra como usuario, seguidamente verificar si cargó el CV
    - Emitir un mensaje, de que se intentó cargar un postulante sin que cuente con el CV cargado.
    - Agregar una Auditoria -> intento de carga de vacancia con los errores.
    */
    /* 
    header('Content-Type: application/json');
    include("include/dbcommon.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        // Constantes o configuración de estados de la vacancia
        define('ESTADOS_CERRADOS', [5, 6]);
        
        $fileData = json_decode($_POST['fileData'], true);
        $id_vacancias = json_decode($_POST['id_vacancias'], true);
        $usuario_carga_id = json_decode($_POST['usuario_carga_id'], true);
        $usuario_carga_nombre = $_POST['usuario_carga_nombre'];
        
        // Validar que se haya enviado el archivo Excel o CSV.
        if (!$fileData) {
            echo json_encode([
                'success' => false, 
                'message' => 'No se recibió el archivo a procesar.', 
                'data' => 0
            ]);
            exit; // Detener la ejecución y retornar respuesta de error.
        }
        
        // Conectar a la base de datos PostgreSQL
        $conn = pg_connect("host=192.168.70.170 dbname=eportal user=franciscocuevas password=6XP4fJe8tX7sdTaL6Rfk");
        if (!$conn) {
            echo json_encode([
                'success' => false, 
                'message' => 'Error al conectar con la base de datos.',
                'data' => 0
            ]);
            exit; // Detener la ejecución y retornar respuesta de error.
        }
        
        // Verificar el estado de la vacancia.
        $queryEstadoActualVacancia = "SELECT id_estado_vacancia
                                        FROM bolsa_empleo.vacancia
                                        WHERE id_vacancias = $1";
        $resultEstadoActualVacancia = pg_query_params($conn, $queryEstadoActualVacancia, [$id_vacancias]);
        if (pg_num_rows($resultEstadoActualVacancia) > 0) {

            // Obtener el resultado como un arreglo asociativo.
            $rowEstadoActualVacancia = pg_fetch_assoc($resultEstadoActualVacancia);
            $id_estado_vacancia = $rowEstadoActualVacancia['id_estado_vacancia']; // Obtener el valor de la columna.
            
            // Si el estado de la vacancia No está cerrado.
	        if (!in_array($id_estado_vacancia, ESTADOS_CERRADOS)) {
                
                // iterar por las filas del archivo.
                $result = [];
                foreach ($fileData as $index => $rowEstadoActualVacancia) {
                    
                    // Saltear encabezados si la primera fila contiene nombres de columnas.
                    if ($index === 0) {
                        continue; // O usa `continue` si quieres omitirla.
                    }

                    
                    // Validar cada campo.
                    $levelType = isset($rowEstadoActualVacancia[0]) ? trim($rowEstadoActualVacancia[0]) : null;
                    $code = isset($rowEstadoActualVacancia[1]) ? trim($rowEstadoActualVacancia[1]) : null;
                    $catalogType = isset($rowEstadoActualVacancia[2]) ? trim($rowEstadoActualVacancia[2]) : null;
                    $name = isset($rowEstadoActualVacancia[3]) ? trim($rowEstadoActualVacancia[3]) : null;
                    $description = isset($rowEstadoActualVacancia[4]) ? trim($rowEstadoActualVacancia[4]) : null;
                    $sourceLink = isset($rowEstadoActualVacancia[5]) ? trim($rowEstadoActualVacancia[5]) : null;
                    // Validar campos obligatorios.
                    if (empty($levelType) || empty($code) || empty($catalogType) || empty($name) 
                        || empty($description) || empty($sourceLink)) {
                        $result[] = "Fila $index: Error - Hay campos vacíos.";
                        continue; // Pasar a la siguiente fila
                    }
                    
                    //Obtener datos de la persona por su número de cedula que debe venir en el archivo.
                    $queryVerificaPersona = "SELECT person_id
                                                FROM eportal.eportal.persons_docs
                                                WHERE valor = $1";
                    $resultVerificaPersona = pg_query_params($conn, $queryVerificaPersona, [$code]);
                    if (pg_num_rows($resultVerificaPersona) > 0) {//Se encontró a la persona por su número de cédula.
                        // Obtener el resultado como un arreglo asociativo.
                        $rowVerificaPersona = pg_fetch_assoc($resultVerificaPersona);
                        $person_id = $rowVerificaPersona['person_id']; // Obtener el valor de la columna.
                        
                        // Verificar si la persona ya está en la tabla postulacion.
                        $queryVerificaPostulacion = "SELECT count(*) as total
                                                        FROM bolsa_empleo.postulacion
                                                        WHERE id_vacancia = $1 
                                                        AND fk_personaid = $2";
                        $resultVerificaPostulacion = pg_query_params($conn, $queryVerificaPostulacion, [$id_vacancias, $person_id]);
                        $rowVerificaPostulacion = pg_fetch_assoc($resultVerificaPostulacion);
                        $totalPostulacion = $rowVerificaPostulacion['total']; // Obtener el valor de la columna.
                        if ($totalPostulacion == 0) {

                            //Verificar que el postulante reuna todos los requisito para postularse a una oferta, debe tener todos sus datos cargados en el sistema.
			                $queryVerificaDatosCV = "SELECT	(SELECT resumen 
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
                            $resultVerificaDatosCV = pg_query_params($conn, $queryVerificaDatosCV, [$person_id, $code]);
                            $rowVerificaDatosCV = pg_fetch_assoc($resultVerificaDatosCV);
                            $existe_resumen = $rowVerificaDatosCV['existe_resumen'];
                            $count_phones = $rowVerificaDatosCV['count_phones'];
                            $existe_city = $rowVerificaDatosCV['existe_city'];
                            $existe_domicilio = $rowVerificaDatosCV['existe_domicilio'];
                            $existe_canthijos = $rowVerificaDatosCV['existe_canthijos'];
                            $count_educacion = $rowVerificaDatosCV['count_educacion'];
                            $count_experiencia_laboral = $rowVerificaDatosCV['count_experiencia_laboral'];
                            $count_referencias_personales = $rowVerificaDatosCV['count_referencias_personales'];
                            $count_idiomas = $rowVerificaDatosCV['count_idiomas'];

                            //Validar que el postulante tenga todos los datos requeridos para poder postularlo a una oferta laboral.
			                if ( $existe_resumen !== null && $existe_resumen !== '' && 
                                    $count_phones > 0 && 
                                    $existe_city !== null && $existe_city !== '' && 
                                    $existe_domicilio !== null && $existe_domicilio !== '' && 
                                    $existe_canthijos !== null && $existe_canthijos !== '' && 
                                    $count_educacion > 0 &&
                                    $count_experiencia_laboral > 0 && 
                                    $count_referencias_personales > 0 && 
                                    $count_idiomas > 0
                                ) {

                                    $insert_postulacion = "INSERT INTO bolsa_empleo.postulacion(id_vacancia,
                                                                                                id_estado,
                                                                                                fecha_postulacion,
                                                                                                fk_personaid) 
                                                            VALUES ('".$id_vacancias."',
                                                                    1, 
                                                                    now(),
                                                                    '".$person_id."')RETURNING id_postulacion;";
                                                            $result_insert_postulacion = pg_exec($conn, $insert_postulacion);
                                                            $data_id_postulacion = pg_fetch_array($result_insert_postulacion);
                                                            $id_postulacion = $data_id_postulacion['id_postulacion'];
                                                            //$result[] = "Fila $index procesada correctamente: $code, $person_id, $id_postulacion";

                                                            // Obtener datos adicionales(empresa)
                                                            $selectDatosAdicionales = "SELECT p.id_postulacion, 
                                                                        ve.id_empresa_sucursal, 
                                                                        per.nombre || ' ' || per.apellidos as nombre_completo, 
                                                                        ocupn.descripcion
                                                                FROM bolsa_empleo.vacancia v 
                                                                        JOIN eportal.bolsa_empleo.postulacion p ON p.id_vacancia = v.id_vacancias
                                                                        JOIN eportal.bolsa_empleo.vacancia_empresa ve ON p.id_vacancia = ve.id_vacancia 
                                                                        JOIN eportal.eportal.persons per ON per.id = p.fk_personaid
                                                                        JOIN eportal.bolsa_empleo.vacancia_puesto vp ON v.id_vacancias = vp.id_vacancia
                                                                        JOIN eportal.bolsa_empleo.ocupaciones_nuevas ocupn ON vp.fk_ocupacion_puesto = ocupn.id_ocu_puest_clasic
                                                                WHERE v.id_vacancias = '" . $id_vacancias . "'
                                                                AND p.fk_personaid = '" . $person_id ."'";
                                                            $result_select_datos_adicionales = pg_exec($conn, $selectDatosAdicionales);
                                                            $data_select_datos_adicionales = pg_fetch_array($result_select_datos_adicionales);
                                                            $id_empresa_sucursal = $data_select_datos_adicionales['id_empresa_sucursal'];

                                    $insert_seguimientos = "INSERT INTO bolsa_empleo.seguimientos(fecha_creacion, 
                                                                                                    id_postulacion, 
                                                                                                    id_estado_anterior, 
                                                                                                    id_nuevo_estado,
                                                                                                    usuario_carga_id, 
                                                                                                    usuario_carga_nombre, 
                                                                                                    id_vacancia, 
                                                                                                    id_empresa_sucursal) 
                                                            VALUES (now(),
                                                                    '".$id_postulacion."',
                                                                    1, 
                                                                    1,
                                                                    ".$usuario_carga_id.",
                                                                    '".$usuario_carga_nombre."',
                                                                    '".$id_vacancias."',
                                                                    ".$id_empresa_sucursal.")RETURNING id_seguimiento;";
                                                            $result_insert_seguimientos = pg_exec($conn, $insert_seguimientos);
                                                            $data_id_seguimientos = pg_fetch_array($result_insert_seguimientos);
                                                            $id_seguimiento = $data_id_seguimientos['id_seguimiento'];
                                                            $result[] = "Fila $index procesada correctamente: $code, $person_id, $id_postulacion, $id_seguimiento";

                            } //end empty($existe_resumen) == false
                        } //end $totalPostulacion==0
                    } //end pg_num_rows($resultVerificaPersona) > 0

                }//end foreach

                echo json_encode([
                    'success' => true, 
                    'message' => 'Datos procesados correctamente.', 
                    'data' => $result
                ]);
            } else { //End if - !in_array(ESTADOS_CERRADOS)
                echo json_encode([
                    'success' => false, 
                    'message' => 'La vacancia ya esta cerrada',
                    'data' => 0
                ]);
                exit;
            }
        } else {
            echo json_encode([
                'success' => false, 
                'message' => 'No existe la vacancia',
                'data' => 0
            ]);
            pg_close($conn);
        }
    } else {
        echo json_encode([
            'success' => false, 
            'message' => 'Método no soportado.',
            'data' => 0
        ]);
    }
    */
?>