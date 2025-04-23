<?php
$dalTablearchivo = array();
$dalTablearchivo["id_archivo"] = array("type"=>3,"varname"=>"id_archivo", "name" => "id_archivo", "autoInc" => "1");
$dalTablearchivo["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre", "autoInc" => "0");
$dalTablearchivo["archivo"] = array("type"=>201,"varname"=>"archivo", "name" => "archivo", "autoInc" => "0");
$dalTablearchivo["fecha_creacion"] = array("type"=>135,"varname"=>"fecha_creacion", "name" => "fecha_creacion", "autoInc" => "0");
$dalTablearchivo["usuario_creacion"] = array("type"=>200,"varname"=>"usuario_creacion", "name" => "usuario_creacion", "autoInc" => "0");
$dalTablearchivo["id_tipo_archivo"] = array("type"=>3,"varname"=>"id_tipo_archivo", "name" => "id_tipo_archivo", "autoInc" => "0");
$dalTablearchivo["person_id"] = array("type"=>3,"varname"=>"person_id", "name" => "person_id", "autoInc" => "0");
$dalTablearchivo["postulacion_id"] = array("type"=>200,"varname"=>"postulacion_id", "name" => "postulacion_id", "autoInc" => "0");
$dalTablearchivo["id_archivo"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_archivo"] = &$dalTablearchivo;
?>