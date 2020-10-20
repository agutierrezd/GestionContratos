<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');


Security::processLogoutRequest();
if( !isLogged() || isLoggedAsGuest() ) 
{
	Security::tryRelogin();
}

if( !isLogged() )
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}





require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/contrato_events.php"));
$tableEvents["contrato"] = new eventclass_contrato;
include_once(getabspath("include/contrato_attached_events.php"));
$tableEvents["contrato_attached"] = new eventclass_contrato_attached;
include_once(getabspath("include/informe_intersup_plan_pagos_events.php"));
$tableEvents["informe_intersup_plan_pagos"] = new eventclass_informe_intersup_plan_pagos;
include_once(getabspath("include/informe_intersup_events.php"));
$tableEvents["informe_intersup"] = new eventclass_informe_intersup;
include_once(getabspath("include/informe_intersup_oe_events.php"));
$tableEvents["informe_intersup_oe"] = new eventclass_informe_intersup_oe;
include_once(getabspath("include/contrato_modifica_events.php"));
$tableEvents["contrato_modifica"] = new eventclass_contrato_modifica;
include_once(getabspath("include/informe_intersup3_events.php"));
$tableEvents["informe_intersup3"] = new eventclass_informe_intersup3;

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$params["pageName"] = postvalue("page"); 

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>