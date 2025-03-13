<?php
$dalTablecity = array();
$dalTablecity["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablecity["name"] = array("type"=>13,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTablecity["countrycode"] = array("type"=>13,"varname"=>"countrycode", "name" => "countrycode", "autoInc" => "0");
$dalTablecity["distrito_id"] = array("type"=>20,"varname"=>"distrito_id", "name" => "distrito_id", "autoInc" => "0");
$dalTablecity["cod_ine_ciudad"] = array("type"=>200,"varname"=>"cod_ine_ciudad", "name" => "cod_ine_ciudad", "autoInc" => "0");
$dalTablecity["id"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_eportal_city"] = &$dalTablecity;
?>