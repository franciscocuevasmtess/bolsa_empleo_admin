<?php
$dalTablevacancia_dias_horas = array();
$dalTablevacancia_dias_horas["id_vacancia_dias_horas_trabajo"] = array("type"=>3,"varname"=>"id_vacancia_dias_horas_trabajo", "name" => "id_vacancia_dias_horas_trabajo", "autoInc" => "1");
$dalTablevacancia_dias_horas["vacancia_dias"] = array("type"=>2,"varname"=>"vacancia_dias", "name" => "vacancia_dias", "autoInc" => "0");
$dalTablevacancia_dias_horas["vacancia_horas"] = array("type"=>200,"varname"=>"vacancia_horas", "name" => "vacancia_horas", "autoInc" => "0");
$dalTablevacancia_dias_horas["id_vacancias"] = array("type"=>3,"varname"=>"id_vacancias", "name" => "id_vacancias", "autoInc" => "0");
$dalTablevacancia_dias_horas["id_vacancia_dias_horas_trabajo"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_vacancia_dias_horas"] = &$dalTablevacancia_dias_horas;
?>