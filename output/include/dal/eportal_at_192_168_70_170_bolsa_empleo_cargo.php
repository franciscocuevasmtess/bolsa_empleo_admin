<?php
$dalTablecargo = array();
$dalTablecargo["id_cargo"] = array("type"=>3,"varname"=>"id_cargo", "name" => "id_cargo", "autoInc" => "1");
$dalTablecargo["descripcion_cargo"] = array("type"=>200,"varname"=>"descripcion_cargo", "name" => "descripcion_cargo", "autoInc" => "0");
$dalTablecargo["id_cargo"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_cargo"] = &$dalTablecargo;
?>