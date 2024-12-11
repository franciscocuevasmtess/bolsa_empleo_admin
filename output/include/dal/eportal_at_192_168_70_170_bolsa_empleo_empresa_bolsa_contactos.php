<?php
$dalTableempresa_bolsa_contactos = array();
$dalTableempresa_bolsa_contactos["empresa_bolsa_id_contacto"] = array("type"=>20,"varname"=>"empresa_bolsa_id_contacto", "name" => "empresa_bolsa_id_contacto", "autoInc" => "0");
$dalTableempresa_bolsa_contactos["id_cargo"] = array("type"=>20,"varname"=>"id_cargo", "name" => "id_cargo", "autoInc" => "0");
$dalTableempresa_bolsa_contactos["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTableempresa_bolsa_contactos["telefono"] = array("type"=>200,"varname"=>"telefono", "name" => "telefono", "autoInc" => "0");
$dalTableempresa_bolsa_contactos["ruc"] = array("type"=>200,"varname"=>"ruc", "name" => "ruc", "autoInc" => "0");
$dalTableempresa_bolsa_contactos["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre", "autoInc" => "0");
$dalTableempresa_bolsa_contactos["empresas_bolsa_sucursales_id"] = array("type"=>3,"varname"=>"empresas_bolsa_sucursales_id", "name" => "empresas_bolsa_sucursales_id", "autoInc" => "0");
$dalTableempresa_bolsa_contactos["empresa_bolsa_id_contacto"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_empresa_bolsa_contactos"] = &$dalTableempresa_bolsa_contactos;
?>