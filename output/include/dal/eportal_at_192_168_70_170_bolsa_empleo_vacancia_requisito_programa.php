<?php
$dalTablevacancia_requisito_programa = array();
$dalTablevacancia_requisito_programa["id_vacancia_requisito_programa"] = array("type"=>20,"varname"=>"id_vacancia_requisito_programa", "name" => "id_vacancia_requisito_programa", "autoInc" => "1");
$dalTablevacancia_requisito_programa["fk_id_vacancia"] = array("type"=>20,"varname"=>"fk_id_vacancia", "name" => "fk_id_vacancia", "autoInc" => "0");
$dalTablevacancia_requisito_programa["id_programa"] = array("type"=>20,"varname"=>"id_programa", "name" => "id_programa", "autoInc" => "0");
$dalTablevacancia_requisito_programa["id_nivel_programa"] = array("type"=>20,"varname"=>"id_nivel_programa", "name" => "id_nivel_programa", "autoInc" => "0");
$dalTablevacancia_requisito_programa["id_vacancia_requisito_programa"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_vacancia_requisito_programa"] = &$dalTablevacancia_requisito_programa;
?>