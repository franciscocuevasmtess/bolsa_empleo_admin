<?php
$dalTabledistritos = array();
$dalTabledistritos["id"] = array("type"=>20,"varname"=>"id", "name" => "id", "autoInc" => "0");
$dalTabledistritos["pais_code"] = array("type"=>13,"varname"=>"pais_code", "name" => "pais_code", "autoInc" => "0");
$dalTabledistritos["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTabledistritos["id"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_eportal_distritos"] = &$dalTabledistritos;
?>