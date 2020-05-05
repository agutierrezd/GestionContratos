<?php
$strTableName="informe_intersup_plan_pagos";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="informe_intersup_plan_pagos";

$gstrOrderBy="ORDER BY inf_consecutivo";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("informe_intersup_plan_pagos");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["informe_intersup_plan_pagos"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>