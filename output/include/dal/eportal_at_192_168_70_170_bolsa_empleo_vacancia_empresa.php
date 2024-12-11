<?php
$dalTablevacancia_empresa = array();
$dalTablevacancia_empresa["id_empresa_vacancia"] = array("type"=>20,"varname"=>"id_empresa_vacancia", "name" => "id_empresa_vacancia", "autoInc" => "1");
$dalTablevacancia_empresa["id_empresa_sucursal"] = array("type"=>20,"varname"=>"id_empresa_sucursal", "name" => "id_empresa_sucursal", "autoInc" => "0");
$dalTablevacancia_empresa["id_contacto_sucursal"] = array("type"=>20,"varname"=>"id_contacto_sucursal", "name" => "id_contacto_sucursal", "autoInc" => "0");
$dalTablevacancia_empresa["id_cidudad"] = array("type"=>20,"varname"=>"id_cidudad", "name" => "id_cidudad", "autoInc" => "0");
$dalTablevacancia_empresa["id_departamento"] = array("type"=>20,"varname"=>"id_departamento", "name" => "id_departamento", "autoInc" => "0");
$dalTablevacancia_empresa["id_vacancia"] = array("type"=>20,"varname"=>"id_vacancia", "name" => "id_vacancia", "autoInc" => "0");
$dalTablevacancia_empresa["id_empresa_vacancia"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_vacancia_empresa"] = &$dalTablevacancia_empresa;
?>