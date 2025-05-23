<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_vacancia_tmp  extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["BeforeAdd"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["ProcessValuesAdd"]=true;

		$this->events["BeforeShowAdd"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$sqlValues, &$message, $inline, $pageObject)
{

		//insertar nuevos ids si son detectados en requisitos, se detectan por sus ids no son numericos
$id_valores_multi_ocupacion_puesto_todos = explode(",", $_REQUEST["valores_multi_ocupacion_puesto_todos"]);
$id_valores_multi_descripcion_salario_todos = explode(",", $_REQUEST["valores_multi_descripcion_salario_todos"]);
$id_requisitos_multi_todos = explode(",", $_REQUEST["valores_multi_requisitos_todos"]);
$id_valores_multi_habilidades_conocimiento_todos = explode(",", $_REQUEST["valores_multi_habilidades_conocimiento_todos"]);

$rray_nuevos_puestos_id = [];
$rray_nuevos_des_salario_id = [];
$rray_nuevos_requisitos_id = [];
$rray_nuevos_habilidades_id = [];

//proceso de puestos
foreach ($id_valores_multi_ocupacion_puesto_todos as $valuetoinsert1) {
	if (!is_numeric($valuetoinsert1)) {
		$sqlinsert1 = DB::PrepareSQL("INSERT INTO bolsa_empleo.ocupaciones_nuevas(descripcion) 
																					VALUES (':1') 
																					ON CONFLICT 
																					ON CONSTRAINT ocupaciones_nuevas_un 
																					DO UPDATE 
																					SET descripcion = excluded.descripcion  
																					RETURNING id_ocu_puest_clasic", $valuetoinsert1);
		$rx1 = DB::Query($sqlinsert1);
		$row1 = $rx1->fetchAssoc(); 
		$new_id_ocupacion_puesto_nuevos = $row1['id_ocu_puest_clasic'];
		array_push($rray_nuevos_puestos_id, $new_id_ocupacion_puesto_nuevos);
	}
}
//crear el array con los posibles id ya existentes
foreach ($id_valores_multi_ocupacion_puesto_todos as  $valuetoinsert1) {
	if (is_numeric($valuetoinsert1)) {
		array_push($rray_nuevos_puestos_id, $valuetoinsert1);
	}
}


//proceso de descrip salario
foreach ($id_valores_multi_descripcion_salario_todos as  $valuetoinsert4) {
	if (!is_numeric($valuetoinsert4)){
		$sqlinsert4 = DB::PrepareSQL("INSERT INTO bolsa_empleo.vacancia_salario_descripcion(descripcion_salario) 
																				VALUES (':1') 
																				ON CONFLICT 
																				ON CONSTRAINT vacancia_salario_descripcion_un 
																				DO UPDATE 
																				SET descripcion_salario = excluded.descripcion_salario  
																				RETURNING id_va_salario_desc", $valuetoinsert4);
		$rx4 = DB::Query($sqlinsert4);
		$row4 = $rx4->fetchAssoc(); 
		$new_id_desc_salario_nuevos = $row4['id_va_salario_desc'];
		array_push($rray_nuevos_des_salario_id, $new_id_desc_salario_nuevos);
	}
}
//crear el array con los posibles id ya existentes
foreach ($id_valores_multi_descripcion_salario_todos as $valuetoinsert4) {
	if (is_numeric($valuetoinsert4)) {
		array_push($rray_nuevos_des_salario_id, $valuetoinsert4);
	}
}


//proceso de requisitos
foreach ($id_requisitos_multi_todos as $valuetoinsert) {
	if (!is_numeric($valuetoinsert)) {
		$sqlinsert = DB::PrepareSQL("INSERT INTO bolsa_empleo.vacancia_requisitos_excluyentes(descripcion) 
																				VALUES (':1') 
																				ON CONFLICT 
																				ON CONSTRAINT vacancia_requisitos_excluyentes_descripcion_key 
																				DO UPDATE SET descripcion = excluded.descripcion  
																				RETURNING id_requisitos_vacancia", $valuetoinsert);
		$rx = DB::Query($sqlinsert);
		$row = $rx->fetchAssoc(); 
		$new_id_requisitos_nuevos = $row['id_requisitos_vacancia'];
		array_push($rray_nuevos_requisitos_id, $new_id_requisitos_nuevos);
	}
}
//crear el array con los posibles id ya existentes
foreach ($id_requisitos_multi_todos as $valuetoinsert) {
	if (is_numeric($valuetoinsert)) {
		array_push($rray_nuevos_requisitos_id, $valuetoinsert);
	}
}


//aqui empieza procesamiento de habilidades
foreach ($id_valores_multi_habilidades_conocimiento_todos as $valuetoinsert2) {
	if (!is_numeric($valuetoinsert2)) {
		$sqlinsert2 = DB::PrepareSQL("INSERT INTO bolsa_empleo.habilidades(descripcion) 
																			VALUES (':1') 
																			ON CONFLICT 
																			ON CONSTRAINT habilidades_descripcion_key 
																			DO UPDATE SET descripcion = excluded.descripcion  
																			RETURNING id_habilidad", $valuetoinsert2);
		$rx2 = DB::Query($sqlinsert2);
		$row2 = $rx2->fetchAssoc(); 
		$new_id_habilidades_nuevos = $row2['id_habilidad'];
		array_push($rray_nuevos_habilidades_id, $new_id_habilidades_nuevos);
	}
}
//crear el array con los posibles id ya existentes
foreach ($id_valores_multi_habilidades_conocimiento_todos as $valuetoinsert3) {
	if (is_numeric($valuetoinsert3)) {
		array_push($rray_nuevos_habilidades_id, $valuetoinsert3);
	}
}


$values["fk_ocupacion_puesto"] = implode(',', $rray_nuevos_puestos_id);
$values["descripcion_salario"] = implode(',', $rray_nuevos_des_salario_id);
$values["requisitos_exclu_formacion"] = implode(',', $rray_nuevos_requisitos_id);
$values["habilidades_conocimiento"] = implode(',', $rray_nuevos_habilidades_id);

//$values["salario"] = str_replace('.', '', $values["salario"]);
$values["id_formacion_academica"] = ucfirst($values["id_formacion_academica"]);
$values["tipo_movilidad"] = ucfirst($values["tipo_movilidad"]);
$values["descripcion_puesto"] = ucfirst($values["descripcion_puesto"]);
$values["requisitos_exclu_formacion"] = ucfirst($values["requisitos_exclu_formacion"]);
$values["habilidades_conocimiento"] = ucfirst($values["habilidades_conocimiento"]);
$values["fk_ocupacion_puesto"] = ucfirst($values["fk_ocupacion_puesto"]);

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		/*
DB::Exec($auditoria);

$vacancia = DB::PrepareSQL("update bolsa_empleo.vacancia_tmp 
																	set origen = 'DGE-MTESS'
																	where id_vacancias = ':1'",
$keys["id_vacancias"]);
DB::Exec($vacancia);
*/
//**********  Redirect to another page  ************
//header("Location: vacancia_list.php");
//exit();

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, $pageObject)
{

		$userData = Security::currentUserData();
global $cman;

$values['usuario'] = $userData["id"];
$values['origen'] = 'DGE-MTESS';

//Empresa sucursal
;		
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, $pageObject)
{

		$pageObject->hideItem("integrated_edit_field", $recordId); 
   
$pageObject->hideItem("integrated_edit_field1", $recordId); 
   
$pageObject->hideItem("integrated_edit_field5", $recordId); 
   
$pageObject->hideItem("integrated_edit_field31", $recordId);
;		
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
