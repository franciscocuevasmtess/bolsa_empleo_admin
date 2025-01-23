<?php
$dalTableseguimientos = array();
$dalTableseguimientos["id_seguimiento"] = array("type"=>3,"varname"=>"id_seguimiento", "name" => "id_seguimiento", "autoInc" => "1");
$dalTableseguimientos["fecha_creacion"] = array("type"=>135,"varname"=>"fecha_creacion", "name" => "fecha_creacion", "autoInc" => "0");
$dalTableseguimientos["id_postulacion"] = array("type"=>20,"varname"=>"id_postulacion", "name" => "id_postulacion", "autoInc" => "0");
$dalTableseguimientos["id_estado_anterior"] = array("type"=>20,"varname"=>"id_estado_anterior", "name" => "id_estado_anterior", "autoInc" => "0");
$dalTableseguimientos["id_nuevo_estado"] = array("type"=>20,"varname"=>"id_nuevo_estado", "name" => "id_nuevo_estado", "autoInc" => "0");
$dalTableseguimientos["usuario_carga_id"] = array("type"=>3,"varname"=>"usuario_carga_id", "name" => "usuario_carga_id", "autoInc" => "0");
$dalTableseguimientos["usuario_carga_nombre"] = array("type"=>200,"varname"=>"usuario_carga_nombre", "name" => "usuario_carga_nombre", "autoInc" => "0");
$dalTableseguimientos["id_vacancia"] = array("type"=>20,"varname"=>"id_vacancia", "name" => "id_vacancia", "autoInc" => "0");
$dalTableseguimientos["id_empresa_sucursal"] = array("type"=>20,"varname"=>"id_empresa_sucursal", "name" => "id_empresa_sucursal", "autoInc" => "0");
$dalTableseguimientos["metodo_insercion"] = array("type"=>200,"varname"=>"metodo_insercion", "name" => "metodo_insercion", "autoInc" => "0");
$dalTableseguimientos["id_seguimiento"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_seguimientos"] = &$dalTableseguimientos;
?>