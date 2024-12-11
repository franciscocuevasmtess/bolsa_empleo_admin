<?php
$strTableName="vacancia_pendiente";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="bolsa_empleo.vacancia";

$gstrOrderBy="ORDER BY bolsa_empleo.vacancia.fecha_creacion_vacancia DESC, bolsa_empleo.vacancia.id_estado_vacancia";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>