<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");

//	CSRF protection
if( !isPostRequest() )
	return;

$params = (array)my_json_decode(postvalue('params'));

if( $params["_base64fields"] ) {
	foreach( $params["_base64fields"] as $f ) {
		$params[$f] = base64_str2bin( $params[$f] );
	}
}

$buttId = $params['buttId'];
$eventId = postvalue('event');
$table = $params['table'];
if( !GetTableURL( $table ) ) {
	exit;
}
$page = $params['page'];
if( !Security::userCanSeePage($table, $page ) ) {
	exit;
}

$pSet = new ProjectSettings( $table, "", $page );
if( $buttId ) {
	$pageButtons = $pSet->customButtons();
	if( array_search( $buttId , $pageButtons ) === false ) {
		exit;
	}
}

$params["masterTable"] = postValue("masterTable");;
$params["masterKeys"] = array();
// RunnerPage::readMasterKeysFromRequest
$i = 1;
while( isset( $_REQUEST["masterkey".$i] ) ) {
	$params["masterKeys"][ $i ] = $_REQUEST["masterkey".$i];
	$i++;
}


if($buttId=='Activar')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Activar($params);
}
if($buttId=='Cerrar')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Cerrar($params);
}
if($buttId=='New_Button')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button($params);
}
if($buttId=='New_Button2')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button2($params);
}
if($buttId=='btn_redirige_users_edit')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_btn_redirige_users_edit($params);
}
if($buttId=='btn_guardar_cambio_contrasenha')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_btn_guardar_cambio_contrasenha($params);
}
if($buttId=='Change_estado')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Change_estado($params);
}
if($buttId=='New_Button4')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button4($params);
}
if($buttId=='agg_postulante')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_agg_postulante($params);
}
if($buttId=='agregar_postulante')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_agregar_postulante($params);
}
if($buttId=='Importar_Planilla')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Importar_Planilla($params);
}
if($buttId=='btn_importar_planilla')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_btn_importar_planilla($params);
}
if($buttId=='btn_importar_planilla1')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_btn_importar_planilla1($params);
}
if($buttId=='btn_cambiar_estado2')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_btn_cambiar_estado2($params);
}
if($buttId=='New_Button1')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button1($params);
}
if($buttId=='New_Button5')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button5($params);
}
if($buttId=='New_Button3')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button3($params);
}





// create table and non table handlers
function buttonHandler_Activar($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
$userData = Security::currentUserData();
/*print_r($userData["id"] );*/
$result["id_vacancias"] = $record["id_vacancias"];

$strSQLExists = DB::PrepareSQL("UPDATE bolsa_empleo.vacancia 
																			SET id_estado_vacancia = 2 
																			WHERE bolsa_empleo.vacancia.id_vacancias = ':1'", $record["id_vacancias"]);
DB::Exec($strSQLExists);

$strSQLExistscambio = DB::PrepareSQL("INSERT INTO bolsa_empleo.vacancia_cambio_estado(id_vacancia, 
																																																	estado_vacancia, 
																																																	fecha_cambio, 
																																																	estado_anterior, 
																																																	usuario) 
																						VALUES (':1',':2',':3',':4',':5');",
																											$result["id_vacancias"],
																											2,
																											now(),
																											5,
																											$userData["id"]);
DB::Exec($strSQLExistscambio);;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Cerrar($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
$userData = Security::currentUserData();

/* print_r($userData["id"] ); */
$result["id_vacancias"] = $record["id_vacancias"];

$strSQLExists = DB::PrepareSQL("UPDATE bolsa_empleo.vacancia 
																					SET id_estado_vacancia = 5
																					WHERE bolsa_empleo.vacancia.id_vacancias = ':1'", 
																					$record["id_vacancias"]);
DB::Exec($strSQLExists);

$strSQLExistscambio = DB::PrepareSQL("INSERT INTO bolsa_empleo.vacancia_cambio_estado(id_vacancia,
																																																		estado_vacancia,
																																																		fecha_cambio,
																																																		estado_anterior,
																																																		usuario) 
																							VALUES (':1',':2',':3',':4',':5');",
																												$result["id_vacancias"],
																												5,
																												now(),
																												2,
																												$userData["id"]);
DB::Exec($strSQLExistscambio);
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
$result["id_vacancias"] = $record["id_vacancias"];;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button2($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_btn_redirige_users_edit($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
//$result["txt"] = $params["txt"]." world!";

//$record = $button->getCurrentRecord();
//$userData = Security::currentUserData();
//print_r($userData["cedula"]);
//$result["cedula"] = $record["id"];
//$result["cedula"] = 154797;
/*$rs = DB::Query("SELECT bolsa_empleo.bolsa_users.id
										FROM bolsa_empleo.bolsa_users 
										WHERE bolsa_empleo.bolsa_users.nro_documento = '" . $result["cedula"]  . "'");
$data = $rs->fetchAssoc();
$result["bolsa_users_id"] = $data["id"];*/
//if (!$data) {
//	$message = "Usuario INACTIVO, por favor contactarse a sistemas@mtess.gov.py";
//	return false;
//}
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_btn_guardar_cambio_contrasenha($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Change_estado($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
$result["id_vacancias"] = $record["id_vacancias"];
$result["id_postulacion"] = $record["id_postulacion"];

//Obtener registro actual para insertar en seguimiento el estado anterior al cambio.
//$strSQL = "SELECT *
//							FROM bolsa_empleo.postulacion
//							WHERE id_vacancia = '" . pg_escape_string($result["id_vacancias"]) . "' 
//							AND id_postulacion = '" . pg_escape_string($result["id_postulacion"]) . "'";
$strSQL = "SELECT p.*, ve.id_empresa_sucursal
							FROM bolsa_empleo.postulacion p join bolsa_empleo.vacancia_empresa ve ON p.id_vacancia = ve.id_vacancia 
							WHERE p.id_vacancia = '" . pg_escape_string($result["id_vacancias"]) . "' 
							AND p.id_postulacion = '" . pg_escape_string($result["id_postulacion"]) . "'";
$rsExists = db_query($strSQL, $conn);
$data = db_fetch_array($rsExists);


//Actualizar el nuevo estado en la tabla "postulacion".
$strSqlUpdate = DB::PrepareSQL("UPDATE bolsa_empleo.postulacion 
																			SET id_estado = ':1' 
																			WHERE bolsa_empleo.postulacion.id_vacancia = ':2'
																			AND bolsa_empleo.postulacion.id_postulacion = ':3'", 
																			$params["nuevo_estado"], 
																			$result["id_vacancias"], 
																			$result["id_postulacion"]);
DB::Exec($strSqlUpdate);
	
	
//Insertar la nueva accion en la tabla de Historicos o Seguimientos.
$strSqlInsert = DB::PrepareSQL("INSERT INTO bolsa_empleo.seguimientos(fecha_creacion, 
																																								id_postulacion,
																																								id_vacancia,
																																								id_estado_anterior, 
																																								id_nuevo_estado, 
																																								usuario_carga_id,
																																								usuario_carga_nombre,
																																								id_empresa_sucursal) 
																			VALUES (':1', ':2', ':3', ':4', ':5', ':6', ':7', ':8');",
																								now(),
																								$result["id_postulacion"],
																								$result["id_vacancias"],
																								$data["id_estado"],
																								$params["nuevo_estado"], 
																								$_SESSION["UserData"]["id"], 
																								$_SESSION["UserData"]["username"], 
																								$data["id_empresa_sucursal"]);
DB::Exec($strSqlInsert);
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button4($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
//$result["txt"] = $params["txt"]." world!";

$sql = "UPDATE bolsa_empleo.vacancia 
					SET id_estado_vacancia = 2 
					WHERE id_vacancias = '" . pg_escape_string($result["id_vacancia"]) . "'";
CustomQuery($sql);
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_agg_postulante($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	//// Put your code here.
//$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_agregar_postulante($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Constantes o configuración de estados de la vacancia
define('ESTADOS_CERRADOS', [5, 6]);

// Obtener registro actual
$record = $button->getCurrentRecord();
$result["bandera"] = $params["bandera"]; // Valor por defecto

// Verificar el estado de la vacancia
$strSQLExists = DB::PrepareSQL("SELECT * 
																			FROM bolsa_empleo.vacancia 
																			WHERE id_vacancias = " . $params["id_vacancias"]);
$rsExists = DB::Query($strSQLExists);
$data = $rsExists->fetchAssoc();
if ($data && is_array($data)) {
	// Si el estado de la oferta No está cerrado.
	if (!in_array($data["id_estado_vacancia"], ESTADOS_CERRADOS)) {
		
		// Verificar si la persona ya está en la tabla postulacion.
		$strSQLExistsPostulacion = DB::PrepareSQL("SELECT count(*) as total
																											FROM bolsa_empleo.postulacion 
																											WHERE id_vacancia = " . $params["id_vacancias"] . " 
																											AND fk_personaid = " . $record["personaid"]);
		$rsExistsPostulacion = DB::Query($strSQLExistsPostulacion);
		$dataPostulacion = $rsExistsPostulacion->fetchAssoc();
		if ($dataPostulacion["total"] == 0) {
			//Verificar que el postulante reuna todos los requisito para postularse a una oferta, debe tener todos sus datos cargados en el sistema.
			$strSQLExistsDatosCV = DB::PrepareSQL("SELECT	(SELECT resumen 
																														FROM eportal.persons 
																														WHERE id = " . $record["personaid"] . ") AS existe_resumen,
																													(SELECT COUNT(*) 
																														FROM eportal.persons_phones 
																														WHERE type = 2 
																														AND person_id = " . $record["personaid"] . ") AS count_phones,
																													(SELECT city_id 
																														FROM eportal.persons 
																														WHERE id = " . $record["personaid"] . ") AS existe_city,
																													(SELECT domicilio  
																														FROM eportal.persons 
																														WHERE id = " . $record["personaid"] . ") AS existe_domicilio,
																													(SELECT canthijos 
																														FROM eportal.persons 
																														WHERE id = " . $record["personaid"] . ") AS existe_canthijos,
																													(SELECT COUNT(*) 
																														FROM bolsa_empleo.vista_estudios_realizados_union_mec 
																														WHERE nro_documento = '" . $record["nro_documento"] . "') AS count_educacion,
																													(SELECT COUNT(*) 
																														FROM bolsa_empleo.cvc_experiencia_laboral 
																														WHERE fk_persona_id = " . $record["personaid"] . ") AS count_experiencia_laboral,
																													(SELECT COUNT(*) 
																														FROM eportal.persons_referencia 
																														WHERE id_persona = " . $record["personaid"] . ") AS count_referencias_personales,
																													(SELECT COUNT(*) 
																														FROM bolsa_empleo.cvc_idiomas 
																														WHERE fk_personaid = " . $record["personaid"] . ") AS count_idiomas"
																									);
			$rsExistsDatosCV = DB::Query($strSQLExistsDatosCV);
			$dataDatosCV = $rsExistsDatosCV->fetchAssoc();
			
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
					$strSQLInsert = DB::PrepareSQL("INSERT INTO bolsa_empleo.postulacion (id_vacancia,
																																													id_estado,
																																													fecha_postulacion,
																																													fk_personaid) 
																								VALUES (':1', ':2', ':3', ':4')",
																													$params["id_vacancias"],
																													1,
																													now(),
																													$record["personaid"]);
					DB::Exec($strSQLInsert);
					
					// Obtener el ID de la nueva postulacion y datos adicionales
					$strSQLInserted = DB::PrepareSQL("SELECT p.id_postulacion, 
																													ve.id_empresa_sucursal, 
																													per.nombre || ' ' || per.apellidos as nombre_completo, 
																													ocupn.descripcion
																									FROM bolsa_empleo.vacancia v 
																											JOIN eportal.bolsa_empleo.postulacion p ON p.id_vacancia = v.id_vacancias
																											JOIN eportal.bolsa_empleo.vacancia_empresa ve ON p.id_vacancia = ve.id_vacancia 
																											JOIN eportal.eportal.persons per ON per.id = p.fk_personaid
																											JOIN eportal.bolsa_empleo.vacancia_puesto vp ON v.id_vacancias = vp.id_vacancia
																											JOIN eportal.bolsa_empleo.ocupaciones_nuevas ocupn ON vp.fk_ocupacion_puesto = ocupn.id_ocu_puest_clasic
																									WHERE v.id_vacancias = '" . $params["id_vacancias"] . "'
																									AND p.fk_personaid = '" . $record["personaid"] ."'");
					$resultInserted = DB::Query($strSQLInserted);
					$dataInserted = $resultInserted->fetchAssoc();
					if ($dataInserted) {
						// Insertar en seguimientos
						$strSqlInsertSeguimiento = DB::PrepareSQL("INSERT INTO bolsa_empleo.seguimientos (fecha_creacion, 
																																																					id_postulacion, 
																																																					id_estado_anterior, 
																																																					id_nuevo_estado,
																																																					usuario_carga_id, 
																																																					usuario_carga_nombre, 
																																																					id_vacancia, 
																																																					id_empresa_sucursal) 
																															VALUES (':1', ':2', ':3', ':4', ':5', ':6', ':7', ':8')",
																																				now(),
																																				$dataInserted["id_postulacion"],
																																				1,
																																				1,
																																				$_SESSION["UserData"]["id"],
																																				$_SESSION["UserData"]["username"],
																																				$params["id_vacancias"],
																																				$dataInserted["id_empresa_sucursal"]);
						DB::Exec($strSqlInsertSeguimiento);

						// Éxito
						$result["descripcion"] = $dataInserted["descripcion"];
						$result["nombre_completo"] = $dataInserted["nombre_completo"];
						$result["bandera"] = 1;
					} //End if - $dataInserted
			} else {
				//El postulante no cumple con todos los requisitos solicitados, no tiene cargados todos sus datos.
				$result["bandera"] = 2;
			}//End if validacion datos requeridos postulante
		} //End if - $dataPostulacion["total"]==0
	} //End if - !in_array(ESTADOS_CERRADOS)
} //End if - $data && is_array($data)
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Importar_Planilla($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_btn_importar_planilla($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
//$result["txt"] = $params["txt"]." world!";
$result["clave"] = $params["clave"];

/*
$strSQLTotalPostulacion = DB::PrepareSQL("SELECT count(*) as total
																								FROM bolsa_empleo.postulacion
																								WHERE bolsa_empleo.postulacion.id_vacancia = '". $data["id_vacancias"] ."'
																								AND id_estado in(1, 2, 3)");
$rsExistsTotalPostulacion = DB::Query($strSQLTotalPostulacion);
$dataTotalPostulacion = $rsExistsTotalPostulacion->fetchAssoc();  
if ($dataTotalPostulacion["total"] == 0) {
	$pageObject->hideItem("custom_button4"); //ocultar boton
} else {
	$pageObject->showItem("custom_button4"); //mostrar boton
}
*/;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_btn_importar_planilla1($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
$userData = Security::currentUserData();
$result["id"] = $userData["id"]; //Utilizado en el evento Client After.
//$result["UserID"] = $_SESSION["UserID"];

//
$strSQL = DB::PrepareSQL("SELECT bolsa_empleo.gestores_users.username
															FROM bolsa_empleo.gestores_users
															WHERE bolsa_empleo.gestores_users.id = '" . $result["id"] . "'");
$resultSQL = DB::Query($strSQL);
$data = $resultSQL->fetchAssoc();
$result["username"] = $data["username"]; //Utilizado en el evento Client After.;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_btn_cambiar_estado2($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$result["bandera"] = 0;

/*
 * Limpiar el array con los ID-Postulacion sacandole la coma[,] al final.
 * Iterar los ID y realizar Update en la tabla "postulacion" y Insertar como nuevo historico o "seguimiento".
*/
$array_cboxes = explode(",", $params["cboxes"]); //array que contiene los ID de postulacion.
array_pop($array_cboxes); // Eliminar el último elemento vacío(la coma[,] al final)

foreach ($array_cboxes as $idPostulacion) {
	//Obtener cada postulacion por ID-Postulacion.
	$strSQL = "SELECT p.*, ve.id_empresa_sucursal
								FROM bolsa_empleo.postulacion p 
												JOIN bolsa_empleo.vacancia_empresa ve ON p.id_vacancia = ve.id_vacancia 
								WHERE p.id_postulacion = '" . $idPostulacion . "'";
	$rsExists = db_query($strSQL, $conn);
	$data = db_fetch_array($rsExists);
	
	
	//Actualizar el nuevo estado en la tabla "postulacion".
	$strSqlUpdate = DB::PrepareSQL("UPDATE bolsa_empleo.postulacion 
																				SET id_estado = ':1' 
																				WHERE bolsa_empleo.postulacion.id_vacancia = ':2'
																				AND bolsa_empleo.postulacion.id_postulacion = ':3'",
																					$params["id_nuevo_estado"],
																					$data["id_vacancia"], 
																					$idPostulacion);
	DB::Exec($strSqlUpdate);
	
	//Insertar la nueva accion en la tabla Seguimientos.
	$strSqlInsert = DB::PrepareSQL("INSERT INTO bolsa_empleo.seguimientos(fecha_creacion, 
																																									id_postulacion,
																																									id_vacancia,
																																									id_estado_anterior, 
																																									id_nuevo_estado,
																																									usuario_carga_id,
																																									usuario_carga_nombre,
																																									id_empresa_sucursal) 
																				VALUES (':1', ':2', ':3', ':4', ':5', ':6', ':7', ':8');",
																									now(),
																									$idPostulacion,
																									$data["id_vacancia"],
																									$data["id_estado"],
																									$params["id_nuevo_estado"],
																									$_SESSION["UserData"]["id"],
																									$_SESSION["UserData"]["username"],
																									$data["id_empresa_sucursal"]);
	DB::Exec($strSqlInsert);
	
}

//$result["id_vacancias"] = $data["id_vacancia"];
$result["bandera"] = 1;;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button1($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	/*
 * Limpiar el array con los ID-Postulacion sacandole la coma[,] al final.
 * Iterar los ID y realizar Update en la tabla "postulacion" y Insertar como nuevo historico o "seguimiento".
*/

$array_cboxes = explode(",", $params["cboxes"]); //array que contiene los ID de postulacion.
array_pop($array_cboxes); // Eliminar el último elemento vacío(la coma[,] al final)

foreach ($array_cboxes as $idPostulacion) {
	//Obtener cada postulacion por ID-Postulacion.
	$strSQL = "SELECT p.*, ve.id_empresa_sucursal
								FROM bolsa_empleo.postulacion p 
												join bolsa_empleo.vacancia_empresa ve ON p.id_vacancia = ve.id_vacancia 
								WHERE p.id_postulacion = '" . $idPostulacion . "'";
	$rsExists = db_query($strSQL, $conn);
	$data = db_fetch_array($rsExists);
	
	//Actualizar el nuevo estado en la tabla "postulacion".
	$strSqlUpdate = DB::PrepareSQL("UPDATE bolsa_empleo.postulacion 
																			SET id_estado = ':1' 
																			WHERE bolsa_empleo.postulacion.id_vacancia = ':2'
																			AND bolsa_empleo.postulacion.id_postulacion = ':3'",
																				$params["id_nuevo_estado"],
																				$data["id_vacancia"], 
																				$idPostulacion);
	DB::Exec($strSqlUpdate);
	
	//Insertar la nueva accion en la tabla Seguimientos.
	$strSqlInsert = DB::PrepareSQL("INSERT INTO bolsa_empleo.seguimientos(fecha_creacion, 
																																								id_postulacion,
																																								id_vacancia,
																																								id_estado_anterior, 
																																								id_nuevo_estado,
																																								usuario_carga_id,
																																								usuario_carga_nombre,
																																								id_empresa_sucursal) 
																			VALUES (':1', ':2', ':3', ':4', ':5', ':6', ':7', ':8');",
																								now(),
																								$idPostulacion,
																								$data["id_vacancia"],
																								$data["id_estado"],
																								$params["id_nuevo_estado"],
																								$_SESSION["UserData"]["id"],
																								$_SESSION["UserData"]["username"],
																								$data["id_empresa_sucursal"]);
	DB::Exec($strSqlInsert);
	
	$result["bandera"] = 1;
}
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button5($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$result["bandera"] = 0;

/*
 * Limpiar el array con los ID-Postulacion sacandole la coma[,] al final.
 * Iterar los ID y realizar Update en la tabla "postulacion" y Insertar como nuevo historico o "seguimiento".
*/

$array_cboxes = explode(",", $params["cboxes"]); //array que contiene los ID de postulacion.
array_pop($array_cboxes); // Eliminar el último elemento vacío(la coma[,] al final)

foreach ($array_cboxes as $idPostulacion) {
	//Obtener cada postulacion por ID-Postulacion.
	$strSQL = "SELECT p.*, ve.id_empresa_sucursal
								FROM bolsa_empleo.postulacion p 
												join bolsa_empleo.vacancia_empresa ve ON p.id_vacancia = ve.id_vacancia 
								WHERE p.id_postulacion = '" . $idPostulacion . "'";
	$rsExists = db_query($strSQL, $conn);
	$data = db_fetch_array($rsExists);
	
	//Actualizar el nuevo estado en la tabla "postulacion".
	$strSqlUpdate = DB::PrepareSQL("UPDATE bolsa_empleo.postulacion 
																			SET id_estado = ':1' 
																			WHERE bolsa_empleo.postulacion.id_vacancia = ':2'
																			AND bolsa_empleo.postulacion.id_postulacion = ':3'",
																			$params["id_nuevo_estado"],
																			$data["id_vacancia"], 
																			$idPostulacion);
	DB::Exec($strSqlUpdate);
	
	//Insertar la nueva accion en la tabla Seguimientos.
	$strSqlInsert = DB::PrepareSQL("INSERT INTO bolsa_empleo.seguimientos(fecha_creacion, 
																																								id_postulacion,
																																								id_vacancia,
																																								id_estado_anterior, 
																																								id_nuevo_estado,
																																								usuario_carga_id,
																																								usuario_carga_nombre,
																																									id_empresa_sucursal) 
																			VALUES (':1', ':2', ':3', ':4', ':5', ':6', ':7', ':8');",
																								now(),
																								$idPostulacion,
																								$data["id_vacancia"],
																								$data["id_estado"],
																								$params["id_nuevo_estado"],
																								$_SESSION["UserData"]["id"],
																								$_SESSION["UserData"]["username"],
																								$data["id_empresa_sucursal"]);
	DB::Exec($strSqlInsert);
	
	$result["bandera"] = 1;
}

;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button3($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
$userData = Security::currentUserData();
$result["id_vacancias"] = $record["id_vacancias"];
/*print_r($userData["id"] );*/

//Primero obtener el estado actual de la vacancia que se quiere cambiar.
$strSQL = DB::PrepareSQL("SELECT bolsa_empleo.vacancia.id_estado_vacancia
															FROM bolsa_empleo.vacancia
															WHERE bolsa_empleo.vacancia.id_vacancias = '" . $record["id_vacancias"] . "'");
$resultSQL = DB::Query($strSQL);
$data = $resultSQL->fetchAssoc();  

//Actualizar la vacancia con el nuevo estado
$strSQLUpdate = DB::PrepareSQL("UPDATE bolsa_empleo.vacancia 
																			SET id_estado_vacancia = 3 
																			WHERE bolsa_empleo.vacancia.id_vacancias = ':1'", 
																			$record["id_vacancias"]);
DB::Exec($strSQLUpdate);

//Registrar el nuevo cambio de estado en vacancia_cambio_estado
$strSQLInsert = DB::PrepareSQL("INSERT INTO bolsa_empleo.vacancia_cambio_estado(id_vacancia, 
																																														estado_vacancia, 
																																														fecha_cambio, 
																																														estado_anterior, 
																																														usuario) 
																			VALUES (':1',':2',':3',':4',':5');",
																								$result["id_vacancias"],
																								3,
																								now(),
																								$data["id_estado_vacancia"],
																								$userData["id"]);
DB::Exec($strSQLInsert);;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}


		
?>