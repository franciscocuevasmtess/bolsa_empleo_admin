<?php
$dalTableempresa_estado = array();
$dalTableempresa_estado["id_empresa_estado"] = array("type"=>2,"varname"=>"id_empresa_estado", "name" => "id_empresa_estado", "autoInc" => "1");
$dalTableempresa_estado["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre", "autoInc" => "0");
$dalTableempresa_estado["id_empresa_estado"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_empresa_estado"] = &$dalTableempresa_estado;
?>