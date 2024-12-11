<?php
$dalTablepersons_phones = array();
$dalTablepersons_phones["id"] = array("type"=>20,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablepersons_phones["person_id"] = array("type"=>20,"varname"=>"person_id", "name" => "person_id", "autoInc" => "0");
$dalTablepersons_phones["type"] = array("type"=>20,"varname"=>"type", "name" => "type", "autoInc" => "0");
$dalTablepersons_phones["phone"] = array("type"=>200,"varname"=>"phone", "name" => "phone", "autoInc" => "0");
$dalTablepersons_phones["id"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_eportal_persons_phones"] = &$dalTablepersons_phones;
?>