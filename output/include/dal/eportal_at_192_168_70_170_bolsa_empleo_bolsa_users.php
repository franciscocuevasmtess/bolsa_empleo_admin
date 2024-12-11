<?php
$dalTablebolsa_users = array();
$dalTablebolsa_users["id"] = array("type"=>20,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablebolsa_users["nro_documento"] = array("type"=>200,"varname"=>"nro_documento", "name" => "nro_documento", "autoInc" => "0");
$dalTablebolsa_users["clave"] = array("type"=>200,"varname"=>"clave", "name" => "clave", "autoInc" => "0");
$dalTablebolsa_users["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTablebolsa_users["groupid"] = array("type"=>200,"varname"=>"groupid", "name" => "groupid", "autoInc" => "0");
$dalTablebolsa_users["active"] = array("type"=>3,"varname"=>"active", "name" => "active", "autoInc" => "0");
$dalTablebolsa_users["reset_token"] = array("type"=>200,"varname"=>"reset_token", "name" => "reset_token", "autoInc" => "0");
$dalTablebolsa_users["reset_date"] = array("type"=>135,"varname"=>"reset_date", "name" => "reset_date", "autoInc" => "0");
$dalTablebolsa_users["fecha_alta"] = array("type"=>135,"varname"=>"fecha_alta", "name" => "fecha_alta", "autoInc" => "0");
$dalTablebolsa_users["llave"] = array("type"=>201,"varname"=>"llave", "name" => "llave", "autoInc" => "0");
$dalTablebolsa_users["estado_llave"] = array("type"=>3,"varname"=>"estado_llave", "name" => "estado_llave", "autoInc" => "0");
$dalTablebolsa_users["senadis"] = array("type"=>200,"varname"=>"senadis", "name" => "senadis", "autoInc" => "0");
$dalTablebolsa_users["trabajo_antes"] = array("type"=>200,"varname"=>"trabajo_antes", "name" => "trabajo_antes", "autoInc" => "0");
$dalTablebolsa_users["userpic"] = array("type"=>128,"varname"=>"userpic", "name" => "userpic", "autoInc" => "0");
$dalTablebolsa_users["personaid"] = array("type"=>20,"varname"=>"personaid", "name" => "personaid", "autoInc" => "0");
$dalTablebolsa_users["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname", "autoInc" => "0");
$dalTablebolsa_users["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTablebolsa_users["hash_generado"] = array("type"=>200,"varname"=>"hash_generado", "name" => "hash_generado", "autoInc" => "0");
$dalTablebolsa_users["adjunto_foto_perfil"] = array("type"=>201,"varname"=>"adjunto_foto_perfil", "name" => "adjunto_foto_perfil", "autoInc" => "0");
$dalTablebolsa_users["cantidad_omision_cambio_password"] = array("type"=>3,"varname"=>"cantidad_omision_cambio_password", "name" => "cantidad_omision_cambio_password", "autoInc" => "0");
$dalTablebolsa_users["id"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_bolsa_users"] = &$dalTablebolsa_users;
?>