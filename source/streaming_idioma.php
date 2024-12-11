<?php
// Configurar las cabeceras HTTP para indicar que la página utiliza UTF-8
header('Content-Type: text/html; charset=utf-8');

// También puedes configurar otras cabeceras para evitar problemas de caché
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');


include("include/dbcommon.php");

// Tu código de conexión a la base de datos
$host = "192.168.70.186";
$dbname = "eportal";
$user = "postgres";
$password = "i54R1943cMzrkbH1";


// Establecer la conexión
$conn_string = "host=$host dbname=$dbname user=$user password=$password";
$connection = pg_connect($conn_string);

if (!$connection) {
    die('Error al conectar con la base de datos: ' . pg_last_error());
}

// Obtener el número de página y el término de búsqueda desde el cliente
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$searchTerm = isset($_GET['term']) ? $_GET['term'] : '';
$records_per_page = 10;

// Calcular el offset para la consulta
$offset = ($page - 1) * $records_per_page;

// Construir la parte de búsqueda de la consulta SQL si hay un término de búsqueda
$searchCondition = '';
if (!empty($searchTerm)) {
    $searchCondition = "WHERE descripcion ILIKE '%$searchTerm%'";
}

// Consulta para obtener el total de registros (para la paginación)
$totalRecordsQuery = "SELECT COUNT(*) AS total FROM bolsa_empleo.idioma $searchCondition";
$totalRecordsResult = pg_query($connection, $totalRecordsQuery);
$totalRecords = pg_fetch_assoc($totalRecordsResult)['total'];

// Calcular el número total de páginas
$totalPages = ceil($totalRecords / $records_per_page);

// Consulta para obtener los datos paginados y filtrados por búsqueda si corresponde
$query = "SELECT id_idioma as id, descripcion as text FROM bolsa_empleo.idioma $searchCondition ORDER BY descripcion LIMIT $records_per_page OFFSET $offset";
$result = pg_query($connection, $query);

// Procesar los resultados
$response = array();
while ($row = pg_fetch_assoc($result)) {
    $response[] = array(
        'id' => $row['id'],
        'text' => $row['text'] // Usamos 'text' para mostrar el nombre en Select2
    );
}

// Devolver los datos y la información de paginación en formato JSON
echo json_encode(array('results' => $response, 'pagination' => array('more' => ($page < $totalPages))));


// Cerrar la conexión a la base de datos
pg_close($connection);



?>