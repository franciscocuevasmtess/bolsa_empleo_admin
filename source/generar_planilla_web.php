<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;



try {
    // 1. Verificamos que sea POST
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception("Método no permitido");
    }

    // 2. Recibimos los datos
    $id_vacancias = $_POST['id_vacancias'] ?? null;
    $id_estado = $_POST['id_estado'] ?? null;
    $descripcion = $_POST['descripcion'] ?? null;
    $empresa = $_POST['empresa'] ?? null;
    $fullname = $_POST['fullname'] ?? null;

    // 3. Conexión a la base de datos
    $host = '192.168.70.186';
    $db = 'eportal';
    $user = 'postgres';
    $pass = 'i54R1943cMzrkbH1';
    $dsn = "pgsql:host=$host;dbname=$db";

    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 4. Construimos y ejecutamos la consulta (ejemplo; ajusta a tu lógica real)
    //    Si deseas usar la variable $id_vacancias en la query, hazlo de forma segura:
   
    $sql = " SELECT 
        ROW_NUMBER() OVER () AS nro_de_orden,
        x.nro_documento,
        x.fullname AS nombre_completo,
        /* EXPERIENCIA LABORAL */
        concat_ws (
        ' | ',
        (
            SELECT string_agg(
                concat_ws(' | ', M.empresa, M.descripcion_puesto, 
                    concat(M.anhos_de_experiencia, ' años ', M.meses_de_experiencia, ' meses')
                ),
                ', '
            )
            FROM bolsa_empleo.cvc_experiencia_laboral M 
            WHERE M.fk_persona_id = x.personaid AND M.proveedor::TEXT = 'REOP'::TEXT
        ),
        (
            SELECT string_agg(
                concat_ws(' | ', M.empresa, M.descripcion_puesto, 
                    concat(M.anhos_de_experiencia, ' años ', M.meses_de_experiencia, ' meses')
                ),
                ', '
            )
            FROM bolsa_empleo.cvc_experiencia_laboral M 
            WHERE M.fk_persona_id = x.personaid AND M.proveedor::TEXT = 'IPS'::TEXT
        ),
        (
            SELECT string_agg(
                concat_ws(' | ', M.empresa, M.descripcion_puesto, 
                    concat(M.anhos_de_experiencia, ' años ', M.meses_de_experiencia, ' meses')
                ),
                ', '
            )
            FROM bolsa_empleo.cvc_experiencia_laboral M 
            WHERE M.fk_persona_id = x.personaid AND M.proveedor::TEXT = 'Usuario'::TEXT
        )
    ) AS experiencia_laboral,
    COALESCE(eportal.persons_phones.phone, '') AS telefono,
    eportal.city.name AS ciudad,
    eportal.distritos.name AS departamento,
    /* FORMACION ACADEMICA */
    concat_ws(' | ',
        (
            SELECT string_agg(
                concat_ws('|', j.titulo_obtenido, j.institucion_eucativa, j.nivel_academico), 
                ', '
            )
            FROM bolsa_empleo.vista_materializada_union_mec j
            WHERE j.fk_personaid = x.personaid AND j.proveedor = 'MEC'::text
        ),
        (
            SELECT string_agg(
                concat_ws('|', j.titulo_obtenido, j.institucion_eucativa, j.nivel_academico), 
                ', '
            )
            FROM bolsa_empleo.vista_materializada_union_mec j
            WHERE j.fk_personaid = x.personaid AND j.proveedor = 'SNPP'::text
        ),
        (
            SELECT string_agg(
                concat_ws('|', j.titulo_obtenido, j.institucion_eucativa, j.nivel_academico), 
                ', '
            )
            FROM bolsa_empleo.vista_materializada_union_mec j
            WHERE j.fk_personaid = x.personaid AND j.proveedor = 'Usuario'::text
        )
    ) AS formacion_academica,
    date_part('year', age(CURRENT_DATE, persons.fechanac))::integer AS edad_postulante,
    eportal.persons.sexo,
    empresa_sucursal.legal AS razon_social,
    empresa_sucursal.ruc,
    bolsa_empleo.ocupaciones_nuevas.descripcion AS vacancia_laboral,
    bolsa_empleo.postulacion.id_vacancia AS codigo,
    bolsa_empleo.postulacion.fecha_postulacion AS fecha,
    discap_type.descripcion AS discapacidad,
	eportal.persons.porcentaje_discapacidad AS porcentaje_discapacidad,
    /* TIPO DE MOVILIDAD */
	(SELECT STRING_AGG(CONCAT_WS(' | ', 
									'TIPO_MOVILIDAD: ' || bolsa_empleo.tipo_movilidad.descripcion, 
									'TIPO_REGISTRO_CONDUCIR: ' || bolsa_empleo.tipo_registro_conducir.nombre, 
									'TIENE_REGISTRO_CONDUCIR: ' || bolsa_empleo.cvc_movilidad.registro_conducir, 
									'TIENE_MOVILIDAD_PROPIA: ' || bolsa_empleo.cvc_movilidad.movilidad_propia
								), ', '
						)
		FROM bolsa_empleo.cvc_movilidad
				INNER JOIN bolsa_empleo.movilidad_detalle_cvc ON bolsa_empleo.cvc_movilidad.fk_persona_id = bolsa_empleo.movilidad_detalle_cvc.id_persona_pk
				INNER JOIN bolsa_empleo.tipo_movilidad ON bolsa_empleo.movilidad_detalle_cvc.id_tipo_movilidad_cvc = bolsa_empleo.tipo_movilidad.id_tipo_movilidad
				INNER JOIN bolsa_empleo.registro_conducir_detalle_cvc ON bolsa_empleo.cvc_movilidad.fk_persona_id = bolsa_empleo.registro_conducir_detalle_cvc.id_persona_pk
				INNER JOIN bolsa_empleo.tipo_registro_conducir ON bolsa_empleo.registro_conducir_detalle_cvc.id_tipo_registro_conducir_cvc = bolsa_empleo.tipo_registro_conducir.id_registro_conducir
		WHERE bolsa_empleo.cvc_movilidad.fk_persona_id = x.personaid
	) AS movilidad_propia
    FROM bolsa_empleo.postulacion
        JOIN bolsa_empleo.bolsa_users x 
            ON postulacion.fk_personaid = x.personaid
        JOIN eportal.persons 
            ON x.personaid = persons.id 
        -- Cambiar este JOIN por LEFT JOIN para que se incluya el registro aún sin teléfono
        LEFT JOIN eportal.persons_phones 
            ON x.personaid = eportal.persons_phones.person_id
        JOIN bolsa_empleo.vacancia_empresa AS vacancia_empresa 
            ON vacancia_empresa.id_vacancia = bolsa_empleo.postulacion.id_vacancia
        JOIN eportal.city 
            ON persons.city_id = eportal.city.id
        JOIN eportal.distritos 
            ON persons.distrito_id = eportal.distritos.id
        JOIN bolsa_empleo.empresas_bolsa_sucursales AS empresa_sucursal 
            ON vacancia_empresa.id_empresa_sucursal = empresa_sucursal.id
        JOIN bolsa_empleo.vacancia_puesto 
            ON bolsa_empleo.vacancia_puesto.id_vacancia = bolsa_empleo.postulacion.id_vacancia
        JOIN bolsa_empleo.ocupaciones_nuevas 
            ON bolsa_empleo.ocupaciones_nuevas.id_ocu_puest_clasic = bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto
        LEFT JOIN eportal.eportal.persons_discapacidades AS discap ON discap.person_id = eportal.persons.id
        LEFT JOIN eportal.eportal.persons_discap_types AS  discap_type ON discap_type.persons_discap_types_id = discap.tipo_discapacidad_id
    WHERE bolsa_empleo.postulacion.id_vacancia = :id_vacancias
    AND id_estado = :id_estado;
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id_vacancias', $id_vacancias, PDO::PARAM_STR);
    $stmt->bindValue(':id_estado', $id_estado, PDO::PARAM_STR);
    $stmt->execute();
    $datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Log the fetched data into a log file
    file_put_contents('log.txt', print_r($datos, true), FILE_APPEND);

    // 5. Cargamos la plantilla Excel
    $spreadsheet = IOFactory::load('planilla_emplea_modelo.xlsx');
    $sheet = $spreadsheet->getActiveSheet();

    // 6. Rellenamos celdas fijas
    $sheet->setCellValue('C4', $empresa);
    $sheet->setCellValue('C5', $descripcion);
    $sheet->setCellValue('F5', $id_vacancias);

    if (count($datos) === 0) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'error' => "No se encontraron datos para la vacancia $id_vacancias y estado $id_estado"
        ]);
        exit;
    } else {
        // 7. Ajustamos el array de datos (añadir fullname)
        foreach ($datos as &$fila) {
            // Añadimos dos celdas vacías y el fullname al final de cada fila
            array_push($fila, "", "", $fullname);
        }
        unset($fila);

        // 8. Insertamos los datos a partir de la celda A7
        $sheet->fromArray($datos, null, 'A7');


        // Obtener el rango donde se insertaron los datos
        $ultimaFilaColumnaA = $sheet->getHighestDataRow('A');
        $dataRange = "A7:U" . $ultimaFilaColumnaA;


        // Aplicar bordes al rango de datos
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN, // Borde delgado
                    'color' => ['rgb' => '000000'], // Color negro
                ],
            ],
        ];

        $sheet->getStyle($dataRange)->applyFromArray($styleArray);

        $sheet->setSelectedCell('A7');
    }

    if (ob_get_length()) {
        ob_end_clean();
    }

    // 9. Configuramos headers para forzar la descarga de un .xlsx
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="archivo_modificado.xlsx"');
    header('Cache-Control: max-age=0');

    // 10. Generamos el archivo Excel y lo enviamos al navegador
    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
    $writer->save('php://output');
    exit; // Importantísimo para que no se envíe más nada
} catch (Exception $e) {
    // Si algo falla, enviamos JSON de error en lugar de mezclarlo con el binario del Excel
    http_response_code(500); 
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
    exit;
}
