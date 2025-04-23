<?php
// Requiere archivos necesarios para la conexión con la base de datos y la exportación de Excel
require_once("include/dbcommon.php"); // Archivo común para la base de datos
require 'vendor/autoload.php'; // Autoload de Composer para cargar las clases de PhpSpreadsheet

use PhpOffice\PhpSpreadsheet\Spreadsheet; // Importa la clase Spreadsheet de PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; // Importa el escritor para archivos XLSX

header('Content-Type: application/json; charset=utf-8'); // Establece que la respuesta será en formato JSON

// Consulta SQL para obtener los datos necesarios para la exportación
$sql = "
SELECT DISTINCT ON(cib.ruc)
    cib.id_integracion_bolsa as id_integracion,
    cib.fecha as fecha_integracion,
    ebs.ruc as empresa_ruc,
    ebs.legal as empresa_legal,
    ebs.fantasy as empresa_fantasia,
    c.name as empresa_ciudad,
    d.name as empresa_distrito,
    ebs.tel as empresa_tel,
    ebs.email as empresa_email,
    ebs.direccion as empresa_direccion,
    ebt.descripcion as tipo_sucursal, 
    cib.nro_patronal,
    CASE cib.confirmacion
	    WHEN TRUE THEN 'SI'
	    WHEN FALSE THEN 'NO'
	    ELSE '' -- O cualquier otro valor por defecto si 'confirmacion' puede ser nulo o tener otros valores
	END AS confirmacion, 
    cib.usuario as usuario_confirmacion 
FROM eportal.eportal.confirmacion_integracion_bolsa cib 
    JOIN eportal.bolsa_empleo.empresas_bolsa_sucursales ebs ON cib.ruc = ebs.ruc
    JOIN eportal.eportal.city c ON ebs.city_id = c.id
    JOIN eportal.eportal.distritos d ON ebs.distrito_id = d.id
    JOIN bolsa_empleo.empresa_bolsa_tipo ebt ON ebs.id_tipo_sucursal = ebs.id_tipo_sucursal
ORDER BY cib.ruc;
";

// Ejecuta la consulta y guarda los resultados en el arreglo $data
$rs = DB::Query($sql);
$data = [];
while ($row = $rs->fetchAssoc()) {
    $data[] = $row; // Agrega cada fila al arreglo de datos
}

// Log the fetched data into a log file
//file_put_contents('log.txt', print_r($data, true), FILE_APPEND);

// Verifica si no hay datos para exportar
if (count($data) === 0) {
    echo json_encode(['status' => 'empty']); // Responde con 'empty' si no hay datos
    exit; // Detiene la ejecución del script si no hay datos
}

// Crea una nueva instancia de Spreadsheet (Hoja de cálculo)
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet(); // Obtiene la hoja activa

// Establece los encabezados de las columnas en la primera fila
$headers = array_keys($data[0]); // Obtiene las claves del primer elemento (encabezados)
$col = 'A'; // Comienza desde la columna A
foreach ($headers as $header) {
    $sheet->setCellValue($col . '1', $header); // Establece cada encabezado en la primera fila
    $col++; // Mueve a la siguiente columna
}

// Escribe los datos en las filas siguientes
$rowNum = 2; // Empieza en la fila 2
foreach ($data as $fila) {
    $col = 'A'; // Empieza en la columna A
    foreach ($fila as $valor) {
        $sheet->setCellValue($col . $rowNum, $valor); // Establece el valor de cada celda
        $col++; // Mueve a la siguiente columna
    }
    $rowNum++; // Mueve a la siguiente fila
}

// Define el nombre del archivo de exportación con una marca de tiempo única
$filename = "files/confirmacion_" . date("Ymd_His") . ".xlsx";

// Crea el escritor XLSX y guarda el archivo en el servidor
$writer = new Xlsx($spreadsheet);
$writer->save($filename);

// Responde con el estado 'ok' y la ruta del archivo generado para la descarga
echo json_encode([
    'status' => 'ok',
    'file' => $filename // Ruta al archivo generado
]);

?>