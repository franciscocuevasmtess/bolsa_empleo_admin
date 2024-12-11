<?php
$dalTableferia_empleo = array();
$dalTableferia_empleo["id_feria_empleo"] = array("type"=>3,"varname"=>"id_feria_empleo", "name" => "id_feria_empleo", "autoInc" => "1");
$dalTableferia_empleo["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre", "autoInc" => "0");
$dalTableferia_empleo["fecha_inicio"] = array("type"=>135,"varname"=>"fecha_inicio", "name" => "fecha_inicio", "autoInc" => "0");
$dalTableferia_empleo["fecha_fin"] = array("type"=>135,"varname"=>"fecha_fin", "name" => "fecha_fin", "autoInc" => "0");
$dalTableferia_empleo["locacion"] = array("type"=>200,"varname"=>"locacion", "name" => "locacion", "autoInc" => "0");
$dalTableferia_empleo["asistentes"] = array("type"=>3,"varname"=>"asistentes", "name" => "asistentes", "autoInc" => "0");
$dalTableferia_empleo["id_feria_empleo"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_feria_empleo"] = &$dalTableferia_empleo;
?>