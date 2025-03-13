<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

try {
    // 1. Verificamos que sea POST
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception("Método no permitido");
    }

    // 2. Recibimos los datos
    $id_feria_empleo = $_POST['id_feria_empleo'] ?? null;

    // 3. Conexión a la base de datos
    $host = '192.168.70.170';
    $db = 'eportal';
    $user = 'franciscocuevas';
    $pass = '6XP4fJe8tX7sdTaL6Rfk';
    $dsn = "pgsql:host=$host;dbname=$db";

    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 4. Construimos y ejecutamos la consulta (ejemplo; ajusta a tu lógica real)
    //    Si deseas usar la variable $id_vacancias en la query, hazlo de forma segura:
    $sql = " SELECT pd.valor AS cedula,
        p.nombre || ' ' || p.apellidos as nombres,
        afe.fecha_hora_asistencia,
        fe.nombre AS feria 
    FROM bolsa_empleo.asistenciaferiaempleo afe 
        JOIN bolsa_empleo.feria_empleo fe ON afe.fk_id_feria_empleo = fe.id_feria_empleo
        JOIN eportal.persons p ON p.id = afe.fk_persona_id
        JOIN eportal.persons_docs pd ON pd.person_id = p.id
    WHERE fe.id_feria_empleo = :id_feria_empleo
    ORDER BY afe.fecha_hora_asistencia;
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id_feria_empleo', $id_feria_empleo, PDO::PARAM_STR);
    $stmt->execute();
    $datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Log the fetched data into a log file
    file_put_contents('log.txt', print_r($datos, true), FILE_APPEND);
    
    // 5. Cargamos la plantilla Excel
    $spreadsheet = IOFactory::load('planilla_emplea_asistencia_modelo.xlsx');
    $sheet = $spreadsheet->getActiveSheet();

    if (count($datos) === 0) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'error' => "No se encontraron datos para ID Feria de Empleo: $id_feria_empleo"
        ]);
        exit;
    } else {
        // 6. Insertamos los datos a partir de la celda A5
        $sheet->fromArray($datos, null, 'A5');

        // Obtener el rango donde se insertaron los datos
        $ultimaFilaColumnaA = $sheet->getHighestDataRow('A');
        $dataRange = "A5:D" . $ultimaFilaColumnaA;

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
        $sheet->setSelectedCell('A5');
    }

    if (ob_get_length()) {
        ob_end_clean();
    }

    // 7. Configuramos headers para forzar la descarga de un .xlsx
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="archivo_modificado.xlsx"');
    header('Cache-Control: max-age=0');

    // 8. Generamos el archivo Excel y lo enviamos al navegador
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