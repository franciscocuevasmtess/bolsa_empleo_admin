<?php
$dalTableseguimiento_resumen = array();
$dalTableseguimiento_resumen["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableseguimiento_resumen["fecha_hora"] = array("type"=>135,"varname"=>"fecha_hora", "name" => "fecha_hora", "autoInc" => "0");
$dalTableseguimiento_resumen["total_registros"] = array("type"=>3,"varname"=>"total_registros", "name" => "total_registros", "autoInc" => "0");
$dalTableseguimiento_resumen["registros_fallidos"] = array("type"=>3,"varname"=>"registros_fallidos", "name" => "registros_fallidos", "autoInc" => "0");
$dalTableseguimiento_resumen["usuario_id"] = array("type"=>3,"varname"=>"usuario_id", "name" => "usuario_id", "autoInc" => "0");
$dalTableseguimiento_resumen["usuario_nombre"] = array("type"=>200,"varname"=>"usuario_nombre", "name" => "usuario_nombre", "autoInc" => "0");
$dalTableseguimiento_resumen["registros_insertados"] = array("type"=>3,"varname"=>"registros_insertados", "name" => "registros_insertados", "autoInc" => "0");
$dalTableseguimiento_resumen["id_vacancia"] = array("type"=>3,"varname"=>"id_vacancia", "name" => "id_vacancia", "autoInc" => "0");
$dalTableseguimiento_resumen["nombre_archivo"] = array("type"=>200,"varname"=>"nombre_archivo", "name" => "nombre_archivo", "autoInc" => "0");
$dalTableseguimiento_resumen["errores"] = array("type"=>201,"varname"=>"errores", "name" => "errores", "autoInc" => "0");
$dalTableseguimiento_resumen["id"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_seguimiento_resumen"] = &$dalTableseguimiento_resumen;
?>