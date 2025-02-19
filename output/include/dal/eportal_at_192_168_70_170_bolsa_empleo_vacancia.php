<?php
$dalTablevacancia = array();
$dalTablevacancia["id_vacancias"] = array("type"=>20,"varname"=>"id_vacancias", "name" => "id_vacancias", "autoInc" => "1");
$dalTablevacancia["fecha_creacion_vacancia"] = array("type"=>135,"varname"=>"fecha_creacion_vacancia", "name" => "fecha_creacion_vacancia", "autoInc" => "0");
$dalTablevacancia["id_estado_vacancia"] = array("type"=>200,"varname"=>"id_estado_vacancia", "name" => "id_estado_vacancia", "autoInc" => "0");
$dalTablevacancia["fecha_expiracion_vacancia"] = array("type"=>135,"varname"=>"fecha_expiracion_vacancia", "name" => "fecha_expiracion_vacancia", "autoInc" => "0");
$dalTablevacancia["cantidad_vacancia"] = array("type"=>3,"varname"=>"cantidad_vacancia", "name" => "cantidad_vacancia", "autoInc" => "0");
$dalTablevacancia["geolocation"] = array("type"=>13,"varname"=>"geolocation", "name" => "geolocation", "autoInc" => "0");
$dalTablevacancia["fk_id_feria_empleo"] = array("type"=>3,"varname"=>"fk_id_feria_empleo", "name" => "fk_id_feria_empleo", "autoInc" => "0");
$dalTablevacancia["usuario"] = array("type"=>200,"varname"=>"usuario", "name" => "usuario", "autoInc" => "0");
$dalTablevacancia["origen"] = array("type"=>200,"varname"=>"origen", "name" => "origen", "autoInc" => "0");
$dalTablevacancia["imagen_perfil"] = array("type"=>128,"varname"=>"imagen_perfil", "name" => "imagen_perfil", "autoInc" => "0");
$dalTablevacancia["id_vacancias"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_vacancia"] = &$dalTablevacancia;
?>