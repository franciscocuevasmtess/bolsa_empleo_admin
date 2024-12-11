<?php
$dalTableprogramas = array();
$dalTableprogramas["id_programas"] = array("type"=>2,"varname"=>"id_programas", "name" => "id_programas", "autoInc" => "1");
$dalTableprogramas["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre", "autoInc" => "0");
$dalTableprogramas["id_programas"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_programas"] = &$dalTableprogramas;
?>