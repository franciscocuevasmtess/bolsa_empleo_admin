<?php
$dalTablegestores_users = array();
$dalTablegestores_users["id"] = array("type"=>20,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablegestores_users["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTablegestores_users["clave"] = array("type"=>200,"varname"=>"clave", "name" => "clave", "autoInc" => "0");
$dalTablegestores_users["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTablegestores_users["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname", "autoInc" => "0");
$dalTablegestores_users["groupid"] = array("type"=>200,"varname"=>"groupid", "name" => "groupid", "autoInc" => "0");
$dalTablegestores_users["active"] = array("type"=>3,"varname"=>"active", "name" => "active", "autoInc" => "0");
$dalTablegestores_users["nrodocumento"] = array("type"=>200,"varname"=>"nrodocumento", "name" => "nrodocumento", "autoInc" => "0");
$dalTablegestores_users["reset_token"] = array("type"=>200,"varname"=>"reset_token", "name" => "reset_token", "autoInc" => "0");
$dalTablegestores_users["reset_date"] = array("type"=>135,"varname"=>"reset_date", "name" => "reset_date", "autoInc" => "0");
$dalTablegestores_users["fecha_alta"] = array("type"=>135,"varname"=>"fecha_alta", "name" => "fecha_alta", "autoInc" => "0");
$dalTablegestores_users["llave"] = array("type"=>201,"varname"=>"llave", "name" => "llave", "autoInc" => "0");
$dalTablegestores_users["estado_llave"] = array("type"=>3,"varname"=>"estado_llave", "name" => "estado_llave", "autoInc" => "0");
$dalTablegestores_users["apellido"] = array("type"=>200,"varname"=>"apellido", "name" => "apellido", "autoInc" => "0");
$dalTablegestores_users["two_factor"] = array("type"=>3,"varname"=>"two_factor", "name" => "two_factor", "autoInc" => "0");
$dalTablegestores_users["totp_secret"] = array("type"=>200,"varname"=>"totp_secret", "name" => "totp_secret", "autoInc" => "0");
$dalTablegestores_users["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre", "autoInc" => "0");
$dalTablegestores_users["id"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_gestores_users"] = &$dalTablegestores_users;
?>