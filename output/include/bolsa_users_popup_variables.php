<?php
$strTableName="bolsa_empleo.bolsa_users_popup";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="bolsa_empleo.bolsa_users";

$gstrOrderBy="ORDER BY bolsa_empleo.bolsa_users.id DESC, bolsa_empleo.vacancia.id_vacancias DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>