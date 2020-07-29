<?php
$strTableName="tparam_tipo_ct_rubro";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tparam_tipo_ct_rubro";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tparam_tipo_ct_rubro");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tparam_tipo_ct_rubro"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>