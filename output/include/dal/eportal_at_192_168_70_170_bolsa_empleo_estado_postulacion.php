<?php
$dalTableestado_postulacion = array();
$dalTableestado_postulacion["id_estado_postulacion"] = array("type"=>3,"varname"=>"id_estado_postulacion", "name" => "id_estado_postulacion", "autoInc" => "1");
$dalTableestado_postulacion["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion", "autoInc" => "0");
$dalTableestado_postulacion["id_estado_postulacion"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_estado_postulacion"] = &$dalTableestado_postulacion;
?>