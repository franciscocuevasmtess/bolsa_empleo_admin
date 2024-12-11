<?php
$dalTableempresas_bolsa = array();
$dalTableempresas_bolsa["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableempresas_bolsa["ruc"] = array("type"=>200,"varname"=>"ruc", "name" => "ruc", "autoInc" => "0");
$dalTableempresas_bolsa["legal"] = array("type"=>200,"varname"=>"legal", "name" => "legal", "autoInc" => "0");
$dalTableempresas_bolsa["fantasy"] = array("type"=>200,"varname"=>"fantasy", "name" => "fantasy", "autoInc" => "0");
$dalTableempresas_bolsa["fecha_creacion"] = array("type"=>7,"varname"=>"fecha_creacion", "name" => "fecha_creacion", "autoInc" => "0");
$dalTableempresas_bolsa["id_estado"] = array("type"=>3,"varname"=>"id_estado", "name" => "id_estado", "autoInc" => "0");
$dalTableempresas_bolsa["id_rubro"] = array("type"=>3,"varname"=>"id_rubro", "name" => "id_rubro", "autoInc" => "0");
$dalTableempresas_bolsa["color"] = array("type"=>200,"varname"=>"color", "name" => "color", "autoInc" => "0");
$dalTableempresas_bolsa["id"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_empresas_bolsa"] = &$dalTableempresas_bolsa;
?>