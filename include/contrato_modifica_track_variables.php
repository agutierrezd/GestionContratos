<?php
$strTableName="contrato_modifica_track";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="contrato_modifica_track";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("contrato_modifica_track");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["contrato_modifica_track"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>