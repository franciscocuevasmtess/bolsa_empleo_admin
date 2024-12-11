<?php
$dalTablevacancia_estado = array();
$dalTablevacancia_estado["id_vacancia_estado"] = array("type"=>20,"varname"=>"id_vacancia_estado", "name" => "id_vacancia_estado", "autoInc" => "1");
$dalTablevacancia_estado["estado"] = array("type"=>200,"varname"=>"estado", "name" => "estado", "autoInc" => "0");
$dalTablevacancia_estado["descripcion_estado"] = array("type"=>200,"varname"=>"descripcion_estado", "name" => "descripcion_estado", "autoInc" => "0");
$dalTablevacancia_estado["id_vacancia_estado"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_vacancia_estado"] = &$dalTablevacancia_estado;
?>