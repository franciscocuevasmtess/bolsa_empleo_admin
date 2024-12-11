<?php
$dalTablevacancia_puesto = array();
$dalTablevacancia_puesto["id_puesto_vacancia"] = array("type"=>20,"varname"=>"id_puesto_vacancia", "name" => "id_puesto_vacancia", "autoInc" => "1");
$dalTablevacancia_puesto["nombre_puesto"] = array("type"=>200,"varname"=>"nombre_puesto", "name" => "nombre_puesto", "autoInc" => "0");
$dalTablevacancia_puesto["salario"] = array("type"=>3,"varname"=>"salario", "name" => "salario", "autoInc" => "0");
$dalTablevacancia_puesto["tipo_contrato"] = array("type"=>200,"varname"=>"tipo_contrato", "name" => "tipo_contrato", "autoInc" => "0");
$dalTablevacancia_puesto["descripcion_puesto"] = array("type"=>201,"varname"=>"descripcion_puesto", "name" => "descripcion_puesto", "autoInc" => "0");
$dalTablevacancia_puesto["id_vacancia"] = array("type"=>20,"varname"=>"id_vacancia", "name" => "id_vacancia", "autoInc" => "0");
$dalTablevacancia_puesto["id_rubro"] = array("type"=>20,"varname"=>"id_rubro", "name" => "id_rubro", "autoInc" => "0");
$dalTablevacancia_puesto["anos_experiencia_vacancia"] = array("type"=>3,"varname"=>"anos_experiencia_vacancia", "name" => "anos_experiencia_vacancia", "autoInc" => "0");
$dalTablevacancia_puesto["fk_ocupacion_puesto"] = array("type"=>3,"varname"=>"fk_ocupacion_puesto", "name" => "fk_ocupacion_puesto", "autoInc" => "0");
$dalTablevacancia_puesto["meses_experiencia_vacancia"] = array("type"=>3,"varname"=>"meses_experiencia_vacancia", "name" => "meses_experiencia_vacancia", "autoInc" => "0");
$dalTablevacancia_puesto["horario_rotativo"] = array("type"=>11,"varname"=>"horario_rotativo", "name" => "horario_rotativo", "autoInc" => "0");
$dalTablevacancia_puesto["beneficios"] = array("type"=>200,"varname"=>"beneficios", "name" => "beneficios", "autoInc" => "0");
$dalTablevacancia_puesto["modalidad_trabajo"] = array("type"=>200,"varname"=>"modalidad_trabajo", "name" => "modalidad_trabajo", "autoInc" => "0");
$dalTablevacancia_puesto["descripcion_salario"] = array("type"=>3,"varname"=>"descripcion_salario", "name" => "descripcion_salario", "autoInc" => "0");
$dalTablevacancia_puesto["color"] = array("type"=>200,"varname"=>"color", "name" => "color", "autoInc" => "0");
$dalTablevacancia_puesto["tipo_remuneracion"] = array("type"=>3,"varname"=>"tipo_remuneracion", "name" => "tipo_remuneracion", "autoInc" => "0");
$dalTablevacancia_puesto["id_puesto_vacancia"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_vacancia_puesto"] = &$dalTablevacancia_puesto;
?>