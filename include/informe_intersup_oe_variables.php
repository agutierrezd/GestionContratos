<?php
$strTableName="informe_intersup_oe";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="informe_intersup_oe";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("informe_intersup_oe");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["informe_intersup_oe"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>