<?php
$dalTablepersons = array();
$dalTablepersons["id"] = array("type"=>20,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablepersons["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre", "autoInc" => "0");
$dalTablepersons["apellidos"] = array("type"=>200,"varname"=>"apellidos", "name" => "apellidos", "autoInc" => "0");
$dalTablepersons["nacionalidad"] = array("type"=>200,"varname"=>"nacionalidad", "name" => "nacionalidad", "autoInc" => "0");
$dalTablepersons["fechanac"] = array("type"=>135,"varname"=>"fechanac", "name" => "fechanac", "autoInc" => "0");
$dalTablepersons["sexo"] = array("type"=>200,"varname"=>"sexo", "name" => "sexo", "autoInc" => "0");
$dalTablepersons["estado_civil"] = array("type"=>3,"varname"=>"estado_civil", "name" => "estado_civil", "autoInc" => "0");
$dalTablepersons["canthijos"] = array("type"=>3,"varname"=>"canthijos", "name" => "canthijos", "autoInc" => "0");
$dalTablepersons["domicilio"] = array("type"=>201,"varname"=>"domicilio", "name" => "domicilio", "autoInc" => "0");
$dalTablepersons["city_id"] = array("type"=>3,"varname"=>"city_id", "name" => "city_id", "autoInc" => "0");
$dalTablepersons["distrito_id"] = array("type"=>3,"varname"=>"distrito_id", "name" => "distrito_id", "autoInc" => "0");
$dalTablepersons["esindigena"] = array("type"=>3,"varname"=>"esindigena", "name" => "esindigena", "autoInc" => "0");
$dalTablepersons["id_profesion"] = array("type"=>20,"varname"=>"id_profesion", "name" => "id_profesion", "autoInc" => "0");
$dalTablepersons["actualizado"] = array("type"=>2,"varname"=>"actualizado", "name" => "actualizado", "autoInc" => "0");
$dalTablepersons["porcentaje_discapacidad"] = array("type"=>3,"varname"=>"porcentaje_discapacidad", "name" => "porcentaje_discapacidad", "autoInc" => "0");
$dalTablepersons["adjunto_potencial_discapacidad"] = array("type"=>201,"varname"=>"adjunto_potencial_discapacidad", "name" => "adjunto_potencial_discapacidad", "autoInc" => "0");
$dalTablepersons["adjunto_certificado_discapacidad"] = array("type"=>201,"varname"=>"adjunto_certificado_discapacidad", "name" => "adjunto_certificado_discapacidad", "autoInc" => "0");
$dalTablepersons["foto"] = array("type"=>128,"varname"=>"foto", "name" => "foto", "autoInc" => "0");
$dalTablepersons["resumen"] = array("type"=>201,"varname"=>"resumen", "name" => "resumen", "autoInc" => "0");
$dalTablepersons["fk_habilidades"] = array("type"=>200,"varname"=>"fk_habilidades", "name" => "fk_habilidades", "autoInc" => "0");
$dalTablepersons["id"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_eportal_persons"] = &$dalTablepersons;
?>