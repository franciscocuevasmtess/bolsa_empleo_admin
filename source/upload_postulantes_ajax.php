<?php
    // Configuración de la cabecera para respuestas JSON
    header('Content-Type: application/json');

    // Incluir archivo de conexión a la base de datos
    include("include/dbcommon.php");

    /*
    * Importar planilla de postulantes.
    * ----------------------------------
    * Este script procesa un archivo cargado por el usuario y realiza las siguientes acciones:
    * 1. Valida los datos del archivo y verifica que no estén vacíos.
    * 2. Verificación del estado de la vacancia antes de permitir nuevas postulaciones.
    * 3. Comprueba que la persona existe en la base de datos mediante su número de cédula.
    * 4. Verifica que no haya duplicados en la tabla de postulaciones para la vacancia seleccionada.
    * 5. Valida que la persona tenga todos los datos obligatorios cargados:
    *    - Teléfonos, dirección, educación, experiencia laboral, referencias personales, idiomas, etc.
    * 6. Inserta los datos en las tablas relacionadas (`postulacion`, `seguimientos`).
    */
    
    
    // Configuración de estados de vacancia cerrados.
    define('ESTADOS_CERRADOS', [5, 6]);

    /** FUNCIONES AUXILIARES **/
    /** 
     * Responder con JSON.
     * @param bool $success Éxito o fallo de la operación.
     * @param string $message Mensaje para el usuario.
     * @param array|null $data Datos adicionales opcionales.
    */
    function respond($success, $message, $data = null)
    {
        echo json_encode([
            'success' => $success, 
            'message' => $message, 
            'data' => $data
        ]);
        exit;
    }

    /** 
     * Ejecutar una consulta y devolver un solo resultado.
     * @param resource $conn Conexión a la base de datos.
     * @param string $query Consulta SQL parametrizada.
     * @param array $params Parámetros para la consulta.
     * @return array|null Resultado de la consulta o `null` si no se encuentra.
    */
    function getSingleResult($conn, $query, $params)
    {
        $result = pg_query_params($conn, $query, $params);
        return $result && pg_num_rows($result) > 0 ? pg_fetch_assoc($result) : null;
    }

    /** 
     * Validar datos de una persona.
     * 
     * @param int $person_id ID de la persona en la base de datos.
     * @param string $code Número de cédula.
     * @param resource $conn Conexión a la base de datos.
     * @return array|false Datos de la persona o `false` si no se encontraron.
    */
    function validatePersonData($person_id, $code, $conn)
    {
        // Consulta para verificar múltiples aspectos de los datos de la persona.
        $query = "SELECT p.resumen AS existe_resumen,
                        (SELECT COUNT(*) FROM eportal.persons_phones WHERE type = 2 AND person_id = $1) AS count_phones,
                        p.city_id AS existe_city,
                        p.domicilio AS existe_domicilio,
                        p.canthijos AS existe_canthijos,
                        (SELECT COUNT(*) FROM bolsa_empleo.vista_estudios_realizados_union_mec WHERE nro_documento = $2) AS count_educacion,
                        (SELECT COUNT(*) FROM bolsa_empleo.cvc_experiencia_laboral WHERE fk_persona_id = $1) AS count_experiencia_laboral,
                        (SELECT COUNT(*) FROM eportal.persons_referencia WHERE id_persona = $1) AS count_referencias_personales,
                        (SELECT COUNT(*) FROM bolsa_empleo.cvc_idiomas WHERE fk_personaid = $1) AS count_idiomas
                    FROM eportal.persons p
                    WHERE p.id = $1";
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

    /**
     * Insertar postulaciones y seguimientos.
     *
     * @param int $id_vacancias ID de la vacancia.
     * @param int $person_id ID de la persona.
     * @param int $usuario_carga_id ID del usuario que carga el archivo.
     * @param string $usuario_carga_nombre Nombre del usuario que carga el archivo.
     * @param resource $conn Conexión a la base de datos.
     * @return bool `true` si la inserción fue exitosa; `false` en caso contrario.
    */
    function insertPostulacion($id_vacancias, $person_id, $usuario_carga_id, $usuario_carga_nombre, $conn)
    {
        // Obtener información adicional de la vacancia.
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

        // Insertar en `postulacion`.
        $query = "INSERT INTO bolsa_empleo.postulacion (id_vacancia, 
                                                        id_estado, 
                                                        fecha_postulacion, 
                                                        fk_personaid) 
                    VALUES ($1, 1, now(), $2) RETURNING id_postulacion";

        $result = pg_query_params($conn, $query, [$id_vacancias, $person_id]);

        if ($result) {
            $postulacion = pg_fetch_assoc($result);

            // Insertar en la tabla de seguimientos.
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

    /** 
     * Procesar el archivo cargado y validar cada registro.
     * 
     * @param array $fileData Archivo subido ($_FILES['fileInput']).
     * @param resource $conn Conexión a la base de datos.
     * @param int $id_vacancias ID de la vacancia seleccionada.
     * @param int $usuario_carga_id ID del usuario que carga el archivo.
     * @param string $usuario_carga_nombre Nombre del usuario que carga el archivo.
     * @return array Resultados del proceso (total, procesados, insertados, errores).
    */
    function processFile($fileData, $id_vacancias, $usuario_carga_id, $usuario_carga_nombre, $conn)
    {
        // Variables para el resumen de resultados
        $results = [
            'processed' => 0, // Total de filas procesadas.
            'inserted' => 0, // Total de inserciones exitosas.
            'errors' => [], // Lista de errores encontrados.
            'totalrows' => 0 // Total de filas del archivo (excluyendo encabezado).
            ,'grupo_error' => []
        ];

        // Calcular filas totales (excluyendo el encabezado).
        $totalRows = count($fileData) - 1; // Asumiendo que el encabezado está en la primera fila.
        $results['totalrows'] = $totalRows;

        // Iterar sobre cada fila del archivo.
        foreach ($fileData as $index => $row) {
            if ($index === 0) continue; // Omitir encabezado.

            // Validar que el campo "Número de cédula" no esté vacío.
            $code = trim($row[1] ?? '');
            if (empty($code)) {
                $results['errors'][] = "Fila $index: El campo Número de cédula esta vacío.";
                $results['grupo_error'][] = "El número de cédula esta vacío en la fila:$index";
                continue;
            }

            // Buscar persona por cédula.
            //La persona existe en la tabla de personas..., pero debe ser un usuario del sistema???
            $person = getSingleResult($conn, "SELECT person_id FROM eportal.eportal.persons_docs WHERE valor = $1", [$code]);
            if (!$person) {
                $results['errors'][] = "Fila $index: Persona con cédula número $code no encontrada en la base de datos del sistema.";
                $results['grupo_error'][] = "Persona no encontrada en la base de datos con número de cédula:$code";
                continue;
            }
            $person_id = $person['person_id'];
            
            // Verificar si la persona ya está postulada en esta vacancia.
            $postulacion = getSingleResult($conn, "SELECT count(*) as total FROM bolsa_empleo.postulacion WHERE id_vacancia = $1 AND fk_personaid = $2", [$id_vacancias, $person_id]);
            if ($postulacion['total'] > 0) {
                $results['errors'][] = "Fila $index: Persona con numero de cédula <b>$code</b> ya postulada en esta vacancia.";
                $results['grupo_error'][] = "Persona con número de cédula ya postulada en esta vacancia:$code";
                continue;
            }
            
            // Validar datos obligatorios de la persona.
            $personData = validatePersonData($person_id, $code, $conn);
            if (!$personData) {
                $results['errors'][] = "Fila $index: Error al verificar datos de la persona con cédula número <b>$code</b>.";
                $results['grupo_error'][] = "Error al verificar datos de la persona con número de cédula:$code";
                continue;
            }
            
            // Validar que todos los datos requeridos estén completos.
            if (empty($personData['existe_resumen']) || 
                $personData['count_phones'] == 0 || 
                empty($personData['existe_city']) || 
                empty($personData['existe_domicilio']) || 
                //empty($personData['existe_canthijos']) || 
                (!isset($personData['existe_canthijos']) || $personData['existe_canthijos'] === null) ||
                $personData['count_educacion'] == 0 || 
                $personData['count_experiencia_laboral'] == 0 || 
                $personData['count_referencias_personales'] == 0 || 
                $personData['count_idiomas'] == 0
            ) {
                $results['errors'][] = "Fila $index: Datos incompletos para la persona con cédula número <b>$code</b>.";
                $results['grupo_error'][] = "Datos incompletos para la persona con número de cédula:$code";
                continue;
            }

            // Intentar insertar la postulación.
            if (insertPostulacion($id_vacancias, $person_id, $usuario_carga_id, $usuario_carga_nombre, $conn)) {
                $results['inserted']++;
            } else {
                $results['errors'][] = "Fila $index: Error al insertar la postulación para la persona con cédula número <b>$code</b>.";
                $results['grupo_error'][] = "Error al insertar la postulación para la persona con número de cédula:$code";
            }
            
            $results['processed']++;
        }

        return $results;
    }

    /**
     * Generar un resumen del proceso de archivo.
     *
     * @param array $results Array que contiene los resultados del procesamiento.
     * @return array Un array con el mensaje final y los datos detallados.
    */
    function generateSummary($results)
    {
        //$message = "Proceso Completado <br>Filas Procesadas: <b>{$results['processed']}</b>, Filas Insertadas:  <b>{$results['inserted']}</b>, Total de registros: <b>{$results['totalrows']}</b>";
        //if (!empty($results['errors'])) {
        //    $message .= "<br>Verifique las siguientes filas del archivo:<br>" . implode("<br>", $results['errors']);
        //}
        //return ['message' => $message, 'data' => $results];
        
        // Mensaje inicial del resumen.
        $message = "Proceso Completado<br>";
        $message .= "Total de registros en el archivo: <b>{$results['totalrows']}</b><br>";
        $message .= "Filas procesadas correctamente: <b>{$results['processed']}</b><br>";
        $message .= "Filas insertadas en la base de datos: <b>{$results['inserted']}</b><br>";

        // Verificar si hubo errores y añadirlos al mensaje.
        if (!empty($results['errors'])) {
            $errorCount = count($results['errors']);
            $message .= "<br>Errores encontrados: <b>{$errorCount}</b><br>";
            $message .= "Detalles de los errores:<br>";
            $message .= "<ul>";

            // Incluir cada error en una lista ordenada.
            foreach ($results['errors'] as $error) {
                $message .= "<li>{$error}</li>";
            }

            $message .= "</ul>";
        } else {
            $message .= "<br>El proceso se completó sin errores.";
        }

        // Retornar el mensaje y los datos detallados.
        return [
            'message' => $message,
            'data' => $results,
        ];
    }

    function generateSummary2($results)
    {
        // 1. Crear el mensaje inicial del resumen.
        $message = "Proceso Completado<br>";
        $message .= "Total de registros en el archivo: <b>{$results['totalrows']}</b><br>";
        $message .= "Filas insertadas en la base de datos: <b>{$results['inserted']}</b><br>";

        // 2. Comprobar si hay errores.
        if (!empty($results['grupo_error'])) {
            $errorGroups = []; // Array para agrupar los errores por tipo.

            // 3. Iterar por cada error para agruparlos.
            foreach ($results['grupo_error'] as $error) {
                // a) Usar una expresión regular para separar el tipo de error y la cédula.
                if (preg_match('/^(.*?):\s*(.*)$/', $error, $matches)) {
                    $errorType = $matches[1]; // Tipo de error (Ej: "Datos incompletos para la persona con cédula número").
                    $cedula = $matches[2];    // Número de cédula (Ej: "2196920").

                    // b) Agrupar las cédulas bajo el tipo de error.
                    $errorGroups[$errorType][] = $cedula;
                }
            }

            // 4. Construir el mensaje de errores agrupados.
            $message .= "<br>Errores encontrados: <b>" . count($results['grupo_error']) . "</b><br>";
            $message .= "Detalles de los errores agrupados:<br>";

            // 5. Iterar por cada grupo de errores para añadir al mensaje
            foreach ($errorGroups as $type => $cedulas) {
                $message .= "<b>$type</b>:<br>";                  // Título del error.
                $message .= implode(", ", $cedulas) . "<br>";    // Lista de cédulas separadas por comas.
            }
        } else {
            // 6. Si no hay errores, indicar que todo se completó sin problemas.
            $message .= "<br>El proceso se completó sin errores.";
        }

        // 7. Retornar el mensaje final y los datos procesados
        return [
            'message' => $message,
            'data' => $results,
        ];
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        /**
         * Proceso principal para manejar el archivo de postulaciones enviado por el cliente.
        */

        // Decodificar los datos enviados desde el cliente
        $fileData = json_decode($_POST['fileData'], true);
        $id_vacancias = json_decode($_POST['id_vacancias'], true);
        $usuario_carga_id = json_decode($_POST['usuario_carga_id'], true);
        $usuario_carga_nombre = $_POST['usuario_carga_nombre'];
    
        // Validar datos iniciales.
        if (!$fileData) {
            respond(false, 'No se recibió el archivo a procesar.');
        }

        if (count($fileData) <= 1) { // El archivo debe contener al menos una fila de datos además del encabezado.
            respond(false, 'El archivo no contiene filas para procesar');
        }
    
        // Conexión a la base de datos.
        $conn = pg_connect("host=192.168.70.170 dbname=eportal user=franciscocuevas password=6XP4fJe8tX7sdTaL6Rfk");
        if (!$conn) {
            respond(false, 'Error al conectar con la base de datos.');
        }
        
        // Verificar el estado de la vacancia.
        $vacancia = getSingleResult($conn, "SELECT id_estado_vacancia FROM bolsa_empleo.vacancia WHERE id_vacancias = $1", [$id_vacancias]);
        if (!$vacancia) {
            respond(false, 'La vacancia seleccionada no existe.');
        }
    
        // Validar que la vacancia esté abierta para postulaciones.
        if (in_array($vacancia['id_estado_vacancia'], ESTADOS_CERRADOS)) {
            respond(false, 'La vacancia seleccionada está cerrada y no acepta más postulaciones.');
        }
        
        // Procesar archivo.
        $results = processFile($fileData, $id_vacancias, $usuario_carga_id, $usuario_carga_nombre, $conn);
        
        // Generar resumen del proceso.
        //$summary = generateSummary($results);
        $summary = generateSummary2($results);

        // Responder al cliente con el resultado del proceso.
        respond(true, $summary['message'], $summary['data']);
    } else {
        // Método HTTP no permitido.
        respond(false, 'Método no permitido. Use POST para enviar los datos.');
    }
?>