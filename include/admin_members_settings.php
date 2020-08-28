<?php



$tdataadmin_members = array();
$tdataadmin_members[".searchableFields"] = array();
$tdataadmin_members[".ShortName"] = "admin_members";
$tdataadmin_members[".OwnerID"] = "";
$tdataadmin_members[".OriginalTable"] = "global_users";


$tdataadmin_members[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataadmin_members[".originalPagesByType"] = $tdataadmin_members[".pagesByType"];
$tdataadmin_members[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataadmin_members[".originalPages"] = $tdataadmin_members[".pages"];
$tdataadmin_members[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataadmin_members[".originalDefaultPages"] = $tdataadmin_members[".defaultPages"];

//	field labels
$fieldLabelsadmin_members = array();
$fieldToolTipsadmin_members = array();
$pageTitlesadmin_members = array();
$placeHoldersadmin_members = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsadmin_members["Spanish"] = array();
	$fieldToolTipsadmin_members["Spanish"] = array();
	$placeHoldersadmin_members["Spanish"] = array();
	$pageTitlesadmin_members["Spanish"] = array();
	$fieldLabelsadmin_members["Spanish"]["idusrglobal"] = "Idusrglobal";
	$fieldToolTipsadmin_members["Spanish"]["idusrglobal"] = "";
	$placeHoldersadmin_members["Spanish"]["idusrglobal"] = "";
	$fieldLabelsadmin_members["Spanish"]["id_fk"] = "Id Fk";
	$fieldToolTipsadmin_members["Spanish"]["id_fk"] = "";
	$placeHoldersadmin_members["Spanish"]["id_fk"] = "";
	$fieldLabelsadmin_members["Spanish"]["Username"] = "Username";
	$fieldToolTipsadmin_members["Spanish"]["Username"] = "";
	$placeHoldersadmin_members["Spanish"]["Username"] = "";
	$fieldLabelsadmin_members["Spanish"]["Password"] = "Password";
	$fieldToolTipsadmin_members["Spanish"]["Password"] = "";
	$placeHoldersadmin_members["Spanish"]["Password"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_email"] = "Usr Email";
	$fieldToolTipsadmin_members["Spanish"]["usr_email"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_email"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_name"] = "Usr Name";
	$fieldToolTipsadmin_members["Spanish"]["usr_name"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_name"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_lname"] = "Usr Lname";
	$fieldToolTipsadmin_members["Spanish"]["usr_lname"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_lname"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_nombresfull"] = "Usr Nombresfull";
	$fieldToolTipsadmin_members["Spanish"]["usr_nombresfull"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_nombresfull"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_personalid"] = "Usr Personalid";
	$fieldToolTipsadmin_members["Spanish"]["usr_personalid"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_personalid"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_inicial"] = "Usr Inicial";
	$fieldToolTipsadmin_members["Spanish"]["usr_inicial"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_inicial"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_sessini"] = "Usr Sessini";
	$fieldToolTipsadmin_members["Spanish"]["usr_sessini"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_sessini"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_image"] = "Usr Image";
	$fieldToolTipsadmin_members["Spanish"]["usr_image"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_image"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_status_nomina"] = "Usr Status Nomina";
	$fieldToolTipsadmin_members["Spanish"]["usr_status_nomina"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_status_nomina"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_status"] = "Usr Status";
	$fieldToolTipsadmin_members["Spanish"]["usr_status"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_status"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_rdnkey"] = "Usr Rdnkey";
	$fieldToolTipsadmin_members["Spanish"]["usr_rdnkey"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_rdnkey"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_type_vinc"] = "Usr Type Vinc";
	$fieldToolTipsadmin_members["Spanish"]["usr_type_vinc"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_type_vinc"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_type_vinculacion"] = "Usr Type Vinculacion";
	$fieldToolTipsadmin_members["Spanish"]["usr_type_vinculacion"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_type_vinculacion"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_status_sol"] = "Usr Status Sol";
	$fieldToolTipsadmin_members["Spanish"]["usr_status_sol"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_status_sol"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_dependencia"] = "Usr Dependencia";
	$fieldToolTipsadmin_members["Spanish"]["usr_dependencia"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_dependencia"] = "";
	$fieldLabelsadmin_members["Spanish"]["user_dep"] = "User Dep";
	$fieldToolTipsadmin_members["Spanish"]["user_dep"] = "";
	$placeHoldersadmin_members["Spanish"]["user_dep"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_entidad"] = "Usr Entidad";
	$fieldToolTipsadmin_members["Spanish"]["usr_entidad"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_entidad"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_not"] = "Usr Not";
	$fieldToolTipsadmin_members["Spanish"]["usr_not"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_not"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_not_msj"] = "Usr Not Msj";
	$fieldToolTipsadmin_members["Spanish"]["usr_not_msj"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_not_msj"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_jefe"] = "Usr Jefe";
	$fieldToolTipsadmin_members["Spanish"]["usr_jefe"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_jefe"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_minequipo_lider"] = "Usr Minequipo Lider";
	$fieldToolTipsadmin_members["Spanish"]["usr_minequipo_lider"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_minequipo_lider"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_minequipo_grupo"] = "Usr Minequipo Grupo";
	$fieldToolTipsadmin_members["Spanish"]["usr_minequipo_grupo"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_minequipo_grupo"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_me"] = "Global Rol Me";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_me"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_me"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_gh"] = "Global Rol Gh";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_gh"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_gh"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_almacen"] = "Global Rol Almacen";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_almacen"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_almacen"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_ci"] = "Global Rol Ci";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_ci"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_ci"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_contratos"] = "Global Rol Contratos";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_contratos"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_contratos"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_hojar"] = "Global Rol Hojar";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_hojar"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_hojar"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_inmuebles"] = "Global Rol Inmuebles";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_inmuebles"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_inmuebles"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_siis"] = "Global Rol Siis";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_siis"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_siis"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_cpanel"] = "Global Rol Cpanel";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_cpanel"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_cpanel"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_dashboard"] = "Global Rol Dashboard";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_dashboard"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_dashboard"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_zf"] = "Global Rol Zf";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_zf"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_zf"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_sipi"] = "Global Rol Sipi";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_sipi"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_sipi"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_cej"] = "Global Rol Cej";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_cej"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_cej"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_jc3"] = "Global Rol Jc3";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_jc3"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_jc3"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_th"] = "Global Rol Th";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_th"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_th"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_sid"] = "Global Rol Sid";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_sid"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_sid"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol"] = "Global Rol";
	$fieldToolTipsadmin_members["Spanish"]["global_rol"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_cont"] = "Global Rol Cont";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_cont"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_cont"] = "";
	$fieldLabelsadmin_members["Spanish"]["globla_rol_ct"] = "Globla Rol Ct";
	$fieldToolTipsadmin_members["Spanish"]["globla_rol_ct"] = "";
	$placeHoldersadmin_members["Spanish"]["globla_rol_ct"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_procjur"] = "Global Rol Procjur";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_procjur"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_procjur"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_comacc"] = "Global Rol Comacc";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_comacc"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_comacc"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_gestion"] = "Global Rol Gestion";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_gestion"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_gestion"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_ciudadano"] = "Global Rol Ciudadano";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_ciudadano"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_ciudadano"] = "";
	$fieldLabelsadmin_members["Spanish"]["global_rol_ciudadano_dep"] = "Global Rol Ciudadano Dep";
	$fieldToolTipsadmin_members["Spanish"]["global_rol_ciudadano_dep"] = "";
	$placeHoldersadmin_members["Spanish"]["global_rol_ciudadano_dep"] = "";
	$fieldLabelsadmin_members["Spanish"]["sys_user"] = "Sys User";
	$fieldToolTipsadmin_members["Spanish"]["sys_user"] = "";
	$placeHoldersadmin_members["Spanish"]["sys_user"] = "";
	$fieldLabelsadmin_members["Spanish"]["sys_date"] = "Sys Date";
	$fieldToolTipsadmin_members["Spanish"]["sys_date"] = "";
	$placeHoldersadmin_members["Spanish"]["sys_date"] = "";
	$fieldLabelsadmin_members["Spanish"]["sys_time"] = "Sys Time";
	$fieldToolTipsadmin_members["Spanish"]["sys_time"] = "";
	$placeHoldersadmin_members["Spanish"]["sys_time"] = "";
	$fieldLabelsadmin_members["Spanish"]["sys_ntries_usr"] = "Sys Ntries Usr";
	$fieldToolTipsadmin_members["Spanish"]["sys_ntries_usr"] = "";
	$placeHoldersadmin_members["Spanish"]["sys_ntries_usr"] = "";
	$fieldLabelsadmin_members["Spanish"]["sys_registrationdate_usr"] = "Sys Registrationdate Usr";
	$fieldToolTipsadmin_members["Spanish"]["sys_registrationdate_usr"] = "";
	$placeHoldersadmin_members["Spanish"]["sys_registrationdate_usr"] = "";
	$fieldLabelsadmin_members["Spanish"]["sys_expiration_usr"] = "Sys Expiration Usr";
	$fieldToolTipsadmin_members["Spanish"]["sys_expiration_usr"] = "";
	$placeHoldersadmin_members["Spanish"]["sys_expiration_usr"] = "";
	$fieldLabelsadmin_members["Spanish"]["sys_disabledate_usr"] = "Sys Disabledate Usr";
	$fieldToolTipsadmin_members["Spanish"]["sys_disabledate_usr"] = "";
	$placeHoldersadmin_members["Spanish"]["sys_disabledate_usr"] = "";
	$fieldLabelsadmin_members["Spanish"]["sys_upd_fecha"] = "Sys Upd Fecha";
	$fieldToolTipsadmin_members["Spanish"]["sys_upd_fecha"] = "";
	$placeHoldersadmin_members["Spanish"]["sys_upd_fecha"] = "";
	$fieldLabelsadmin_members["Spanish"]["sys_upd_user"] = "Sys Upd User";
	$fieldToolTipsadmin_members["Spanish"]["sys_upd_user"] = "";
	$placeHoldersadmin_members["Spanish"]["sys_upd_user"] = "";
	$fieldLabelsadmin_members["Spanish"]["sys_upd_time"] = "Sys Upd Time";
	$fieldToolTipsadmin_members["Spanish"]["sys_upd_time"] = "";
	$placeHoldersadmin_members["Spanish"]["sys_upd_time"] = "";
	$fieldLabelsadmin_members["Spanish"]["sys_update_info"] = "Sys Update Info";
	$fieldToolTipsadmin_members["Spanish"]["sys_update_info"] = "";
	$placeHoldersadmin_members["Spanish"]["sys_update_info"] = "";
	$fieldLabelsadmin_members["Spanish"]["sys_update_family_info"] = "Sys Update Family Info";
	$fieldToolTipsadmin_members["Spanish"]["sys_update_family_info"] = "";
	$placeHoldersadmin_members["Spanish"]["sys_update_family_info"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_update_almacen"] = "Usr Update Almacen";
	$fieldToolTipsadmin_members["Spanish"]["usr_update_almacen"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_update_almacen"] = "";
	$fieldLabelsadmin_members["Spanish"]["sys_anio"] = "Sys Anio";
	$fieldToolTipsadmin_members["Spanish"]["sys_anio"] = "";
	$placeHoldersadmin_members["Spanish"]["sys_anio"] = "";
	$fieldLabelsadmin_members["Spanish"]["ctrl"] = "Ctrl";
	$fieldToolTipsadmin_members["Spanish"]["ctrl"] = "";
	$placeHoldersadmin_members["Spanish"]["ctrl"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_dep"] = "Usr Dep";
	$fieldToolTipsadmin_members["Spanish"]["usr_dep"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_dep"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_cargo"] = "Usr Cargo";
	$fieldToolTipsadmin_members["Spanish"]["usr_cargo"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_cargo"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_regpago"] = "Usr Regpago";
	$fieldToolTipsadmin_members["Spanish"]["usr_regpago"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_regpago"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_extension"] = "Usr Extension";
	$fieldToolTipsadmin_members["Spanish"]["usr_extension"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_extension"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_piso"] = "Usr Piso";
	$fieldToolTipsadmin_members["Spanish"]["usr_piso"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_piso"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_datebirth"] = "Usr Datebirth";
	$fieldToolTipsadmin_members["Spanish"]["usr_datebirth"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_datebirth"] = "";
	$fieldLabelsadmin_members["Spanish"]["ctrl_pedidoalmacen"] = "Ctrl Pedidoalmacen";
	$fieldToolTipsadmin_members["Spanish"]["ctrl_pedidoalmacen"] = "";
	$placeHoldersadmin_members["Spanish"]["ctrl_pedidoalmacen"] = "";
	$fieldLabelsadmin_members["Spanish"]["ctrl_contacto"] = "Ctrl Contacto";
	$fieldToolTipsadmin_members["Spanish"]["ctrl_contacto"] = "";
	$placeHoldersadmin_members["Spanish"]["ctrl_contacto"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_emergencia"] = "Usr Emergencia";
	$fieldToolTipsadmin_members["Spanish"]["usr_emergencia"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_emergencia"] = "";
	$fieldLabelsadmin_members["Spanish"]["active"] = "Active";
	$fieldToolTipsadmin_members["Spanish"]["active"] = "";
	$placeHoldersadmin_members["Spanish"]["active"] = "";
	$fieldLabelsadmin_members["Spanish"]["groupid"] = "Groupid";
	$fieldToolTipsadmin_members["Spanish"]["groupid"] = "";
	$placeHoldersadmin_members["Spanish"]["groupid"] = "";
	$fieldLabelsadmin_members["Spanish"]["habilita_almacen"] = "Habilita Almacen";
	$fieldToolTipsadmin_members["Spanish"]["habilita_almacen"] = "";
	$placeHoldersadmin_members["Spanish"]["habilita_almacen"] = "";
	$fieldLabelsadmin_members["Spanish"]["estado_vinculacion_mincit"] = "Estado Vinculacion Mincit";
	$fieldToolTipsadmin_members["Spanish"]["estado_vinculacion_mincit"] = "";
	$placeHoldersadmin_members["Spanish"]["estado_vinculacion_mincit"] = "";
	$fieldLabelsadmin_members["Spanish"]["upd_date"] = "Upd Date";
	$fieldToolTipsadmin_members["Spanish"]["upd_date"] = "";
	$placeHoldersadmin_members["Spanish"]["upd_date"] = "";
	$fieldLabelsadmin_members["Spanish"]["phone"] = "Phone";
	$fieldToolTipsadmin_members["Spanish"]["phone"] = "";
	$placeHoldersadmin_members["Spanish"]["phone"] = "";
	$fieldLabelsadmin_members["Spanish"]["phone1"] = "Phone1";
	$fieldToolTipsadmin_members["Spanish"]["phone1"] = "";
	$placeHoldersadmin_members["Spanish"]["phone1"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_directivo"] = "Usr Directivo";
	$fieldToolTipsadmin_members["Spanish"]["usr_directivo"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_directivo"] = "";
	$fieldLabelsadmin_members["Spanish"]["usr_dep_sup"] = "Usr Dep Sup";
	$fieldToolTipsadmin_members["Spanish"]["usr_dep_sup"] = "";
	$placeHoldersadmin_members["Spanish"]["usr_dep_sup"] = "";
	if (count($fieldToolTipsadmin_members["Spanish"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}


	$tdataadmin_members[".NCSearch"] = true;



$tdataadmin_members[".shortTableName"] = "admin_members";
$tdataadmin_members[".nSecOptions"] = 0;

$tdataadmin_members[".mainTableOwnerID"] = "";
$tdataadmin_members[".entityType"] = 1;

$tdataadmin_members[".strOriginalTableName"] = "global_users";

	



$tdataadmin_members[".showAddInPopup"] = false;

$tdataadmin_members[".showEditInPopup"] = false;

$tdataadmin_members[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_members[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_members[".listAjax"] = false;
//	temporary
$tdataadmin_members[".listAjax"] = false;

	$tdataadmin_members[".audit"] = true;

	$tdataadmin_members[".locking"] = true;


$pages = $tdataadmin_members[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadmin_members[".edit"] = true;
	$tdataadmin_members[".afterEditAction"] = 1;
	$tdataadmin_members[".closePopupAfterEdit"] = 1;
	$tdataadmin_members[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadmin_members[".add"] = true;
$tdataadmin_members[".afterAddAction"] = 1;
$tdataadmin_members[".closePopupAfterAdd"] = 1;
$tdataadmin_members[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadmin_members[".list"] = true;
}



$tdataadmin_members[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadmin_members[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadmin_members[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadmin_members[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadmin_members[".printFriendly"] = true;
}



$tdataadmin_members[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadmin_members[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadmin_members[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadmin_members[".isUseAjaxSuggest"] = true;

$tdataadmin_members[".rowHighlite"] = true;



						

$tdataadmin_members[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_members[".buttonsAdded"] = false;

$tdataadmin_members[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_members[".isUseTimeForSearch"] = false;


$tdataadmin_members[".badgeColor"] = "CFAE83";


$tdataadmin_members[".allSearchFields"] = array();
$tdataadmin_members[".filterFields"] = array();
$tdataadmin_members[".requiredSearchFields"] = array();

$tdataadmin_members[".googleLikeFields"] = array();
$tdataadmin_members[".googleLikeFields"][] = "idusrglobal";
$tdataadmin_members[".googleLikeFields"][] = "id_fk";
$tdataadmin_members[".googleLikeFields"][] = "Username";
$tdataadmin_members[".googleLikeFields"][] = "Password";
$tdataadmin_members[".googleLikeFields"][] = "usr_email";
$tdataadmin_members[".googleLikeFields"][] = "usr_name";
$tdataadmin_members[".googleLikeFields"][] = "usr_lname";
$tdataadmin_members[".googleLikeFields"][] = "usr_nombresfull";
$tdataadmin_members[".googleLikeFields"][] = "usr_personalid";
$tdataadmin_members[".googleLikeFields"][] = "usr_inicial";
$tdataadmin_members[".googleLikeFields"][] = "usr_sessini";
$tdataadmin_members[".googleLikeFields"][] = "usr_image";
$tdataadmin_members[".googleLikeFields"][] = "usr_status_nomina";
$tdataadmin_members[".googleLikeFields"][] = "usr_status";
$tdataadmin_members[".googleLikeFields"][] = "usr_rdnkey";
$tdataadmin_members[".googleLikeFields"][] = "usr_type_vinc";
$tdataadmin_members[".googleLikeFields"][] = "usr_type_vinculacion";
$tdataadmin_members[".googleLikeFields"][] = "usr_status_sol";
$tdataadmin_members[".googleLikeFields"][] = "usr_dependencia";
$tdataadmin_members[".googleLikeFields"][] = "user_dep";
$tdataadmin_members[".googleLikeFields"][] = "usr_entidad";
$tdataadmin_members[".googleLikeFields"][] = "usr_not";
$tdataadmin_members[".googleLikeFields"][] = "usr_not_msj";
$tdataadmin_members[".googleLikeFields"][] = "usr_jefe";
$tdataadmin_members[".googleLikeFields"][] = "usr_minequipo_lider";
$tdataadmin_members[".googleLikeFields"][] = "usr_minequipo_grupo";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_me";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_gh";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_almacen";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_ci";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_contratos";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_hojar";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_inmuebles";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_siis";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_cpanel";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_dashboard";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_zf";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_sipi";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_cej";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_jc3";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_th";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_sid";
$tdataadmin_members[".googleLikeFields"][] = "global_rol";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_cont";
$tdataadmin_members[".googleLikeFields"][] = "globla_rol_ct";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_procjur";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_comacc";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_gestion";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_ciudadano";
$tdataadmin_members[".googleLikeFields"][] = "global_rol_ciudadano_dep";
$tdataadmin_members[".googleLikeFields"][] = "sys_user";
$tdataadmin_members[".googleLikeFields"][] = "sys_date";
$tdataadmin_members[".googleLikeFields"][] = "sys_time";
$tdataadmin_members[".googleLikeFields"][] = "sys_ntries_usr";
$tdataadmin_members[".googleLikeFields"][] = "sys_registrationdate_usr";
$tdataadmin_members[".googleLikeFields"][] = "sys_expiration_usr";
$tdataadmin_members[".googleLikeFields"][] = "sys_disabledate_usr";
$tdataadmin_members[".googleLikeFields"][] = "sys_upd_fecha";
$tdataadmin_members[".googleLikeFields"][] = "sys_upd_user";
$tdataadmin_members[".googleLikeFields"][] = "sys_upd_time";
$tdataadmin_members[".googleLikeFields"][] = "sys_update_info";
$tdataadmin_members[".googleLikeFields"][] = "sys_update_family_info";
$tdataadmin_members[".googleLikeFields"][] = "usr_update_almacen";
$tdataadmin_members[".googleLikeFields"][] = "sys_anio";
$tdataadmin_members[".googleLikeFields"][] = "ctrl";
$tdataadmin_members[".googleLikeFields"][] = "usr_directivo";
$tdataadmin_members[".googleLikeFields"][] = "usr_dep";
$tdataadmin_members[".googleLikeFields"][] = "usr_dep_sup";
$tdataadmin_members[".googleLikeFields"][] = "usr_cargo";
$tdataadmin_members[".googleLikeFields"][] = "usr_regpago";
$tdataadmin_members[".googleLikeFields"][] = "usr_extension";
$tdataadmin_members[".googleLikeFields"][] = "usr_piso";
$tdataadmin_members[".googleLikeFields"][] = "usr_datebirth";
$tdataadmin_members[".googleLikeFields"][] = "ctrl_pedidoalmacen";
$tdataadmin_members[".googleLikeFields"][] = "ctrl_contacto";
$tdataadmin_members[".googleLikeFields"][] = "usr_emergencia";
$tdataadmin_members[".googleLikeFields"][] = "active";
$tdataadmin_members[".googleLikeFields"][] = "groupid";
$tdataadmin_members[".googleLikeFields"][] = "habilita_almacen";
$tdataadmin_members[".googleLikeFields"][] = "estado_vinculacion_mincit";
$tdataadmin_members[".googleLikeFields"][] = "upd_date";
$tdataadmin_members[".googleLikeFields"][] = "phone";
$tdataadmin_members[".googleLikeFields"][] = "phone1";



$tdataadmin_members[".tableType"] = "list";

$tdataadmin_members[".printerPageOrientation"] = 0;
$tdataadmin_members[".nPrinterPageScale"] = 100;

$tdataadmin_members[".nPrinterSplitRecords"] = 40;

$tdataadmin_members[".geocodingEnabled"] = false;










$tdataadmin_members[".pageSize"] = 20;

$tdataadmin_members[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_members[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_members[".orderindexes"] = array();

$tdataadmin_members[".sqlHead"] = "SELECT idusrglobal,  	id_fk,  	Username,  	Password,  	usr_email,  	usr_name,  	usr_lname,  	usr_nombresfull,  	usr_personalid,  	usr_inicial,  	usr_sessini,  	usr_image,  	usr_status_nomina,  	usr_status,  	usr_rdnkey,  	usr_type_vinc,  	usr_type_vinculacion,  	usr_status_sol,  	usr_dependencia,  	user_dep,  	usr_entidad,  	usr_not,  	usr_not_msj,  	usr_jefe,  	usr_minequipo_lider,  	usr_minequipo_grupo,  	global_rol_me,  	global_rol_gh,  	global_rol_almacen,  	global_rol_ci,  	global_rol_contratos,  	global_rol_hojar,  	global_rol_inmuebles,  	global_rol_siis,  	global_rol_cpanel,  	global_rol_dashboard,  	global_rol_zf,  	global_rol_sipi,  	global_rol_cej,  	global_rol_jc3,  	global_rol_th,  	global_rol_sid,  	global_rol,  	global_rol_cont,  	globla_rol_ct,  	global_rol_procjur,  	global_rol_comacc,  	global_rol_gestion,  	global_rol_ciudadano,  	global_rol_ciudadano_dep,  	sys_user,  	sys_date,  	sys_time,  	sys_ntries_usr,  	sys_registrationdate_usr,  	sys_expiration_usr,  	sys_disabledate_usr,  	sys_upd_fecha,  	sys_upd_user,  	sys_upd_time,  	sys_update_info,  	sys_update_family_info,  	usr_update_almacen,  	sys_anio,  	ctrl,  	usr_directivo,  	usr_dep,  	usr_dep_sup,  	usr_cargo,  	usr_regpago,  	usr_extension,  	usr_piso,  	usr_datebirth,  	ctrl_pedidoalmacen,  	ctrl_contacto,  	usr_emergencia,  	active,  	groupid,  	habilita_almacen,  	estado_vinculacion_mincit,  	upd_date,  	phone,  	phone1";
$tdataadmin_members[".sqlFrom"] = "FROM global_users";
$tdataadmin_members[".sqlWhereExpr"] = "";
$tdataadmin_members[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_members[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_members[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_members[".highlightSearchResults"] = true;

$tableKeysadmin_members = array();
$tableKeysadmin_members[] = "idusrglobal";
$tdataadmin_members[".Keys"] = $tableKeysadmin_members;


$tdataadmin_members[".hideMobileList"] = array();




//	idusrglobal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idusrglobal";
	$fdata["GoodName"] = "idusrglobal";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","idusrglobal");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idusrglobal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idusrglobal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["idusrglobal"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "idusrglobal";
//	id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_fk";
	$fdata["GoodName"] = "id_fk";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","id_fk");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_fk";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["id_fk"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "id_fk";
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","Username");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Username";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["Username"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "Username";
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","Password");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Password";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=35";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["Password"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "Password";
//	usr_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usr_email";
	$fdata["GoodName"] = "usr_email";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_email"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_email";
//	usr_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "usr_name";
	$fdata["GoodName"] = "usr_name";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_name"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_name";
//	usr_lname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "usr_lname";
	$fdata["GoodName"] = "usr_lname";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_lname");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_lname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_lname";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_lname"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_lname";
//	usr_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "usr_nombresfull";
	$fdata["GoodName"] = "usr_nombresfull";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_nombresfull");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_nombresfull";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_nombresfull";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_nombresfull"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_nombresfull";
//	usr_personalid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "usr_personalid";
	$fdata["GoodName"] = "usr_personalid";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_personalid");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usr_personalid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_personalid";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=15";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_personalid"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_personalid";
//	usr_inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "usr_inicial";
	$fdata["GoodName"] = "usr_inicial";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_inicial");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_inicial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_inicial";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=2";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_inicial"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_inicial";
//	usr_sessini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "usr_sessini";
	$fdata["GoodName"] = "usr_sessini";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_sessini");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "usr_sessini";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_sessini";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_sessini"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_sessini";
//	usr_image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "usr_image";
	$fdata["GoodName"] = "usr_image";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_image");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_image";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_image";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_image"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_image";
//	usr_status_nomina
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "usr_status_nomina";
	$fdata["GoodName"] = "usr_status_nomina";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_status_nomina");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usr_status_nomina";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_status_nomina";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_status_nomina"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_status_nomina";
//	usr_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "usr_status";
	$fdata["GoodName"] = "usr_status";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_status");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "usr_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_status"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_status";
//	usr_rdnkey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "usr_rdnkey";
	$fdata["GoodName"] = "usr_rdnkey";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_rdnkey");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_rdnkey";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_rdnkey";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_rdnkey"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_rdnkey";
//	usr_type_vinc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "usr_type_vinc";
	$fdata["GoodName"] = "usr_type_vinc";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_type_vinc");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_type_vinc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_type_vinc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=4";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_type_vinc"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_type_vinc";
//	usr_type_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "usr_type_vinculacion";
	$fdata["GoodName"] = "usr_type_vinculacion";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_type_vinculacion");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "usr_type_vinculacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_type_vinculacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_type_vinculacion"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_type_vinculacion";
//	usr_status_sol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "usr_status_sol";
	$fdata["GoodName"] = "usr_status_sol";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_status_sol");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "usr_status_sol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_status_sol";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_status_sol"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_status_sol";
//	usr_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "usr_dependencia";
	$fdata["GoodName"] = "usr_dependencia";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_dependencia");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_dependencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_dependencia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=3";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_dependencia"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_dependencia";
//	user_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "user_dep";
	$fdata["GoodName"] = "user_dep";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","user_dep");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "user_dep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_dep";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["user_dep"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "user_dep";
//	usr_entidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "usr_entidad";
	$fdata["GoodName"] = "usr_entidad";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_entidad");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usr_entidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_entidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_entidad"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_entidad";
//	usr_not
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "usr_not";
	$fdata["GoodName"] = "usr_not";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_not");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "usr_not";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_not";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_not"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_not";
//	usr_not_msj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "usr_not_msj";
	$fdata["GoodName"] = "usr_not_msj";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_not_msj");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "usr_not_msj";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_not_msj";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_not_msj"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_not_msj";
//	usr_jefe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "usr_jefe";
	$fdata["GoodName"] = "usr_jefe";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_jefe");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usr_jefe";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_jefe";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_jefe"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_jefe";
//	usr_minequipo_lider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "usr_minequipo_lider";
	$fdata["GoodName"] = "usr_minequipo_lider";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_minequipo_lider");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "usr_minequipo_lider";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_minequipo_lider";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_minequipo_lider"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_minequipo_lider";
//	usr_minequipo_grupo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "usr_minequipo_grupo";
	$fdata["GoodName"] = "usr_minequipo_grupo";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_minequipo_grupo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usr_minequipo_grupo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_minequipo_grupo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_minequipo_grupo"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_minequipo_grupo";
//	global_rol_me
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "global_rol_me";
	$fdata["GoodName"] = "global_rol_me";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_me");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_me";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_me";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_me"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_me";
//	global_rol_gh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "global_rol_gh";
	$fdata["GoodName"] = "global_rol_gh";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_gh");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_gh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_gh";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_gh"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_gh";
//	global_rol_almacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "global_rol_almacen";
	$fdata["GoodName"] = "global_rol_almacen";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_almacen");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_almacen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_almacen";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_almacen"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_almacen";
//	global_rol_ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "global_rol_ci";
	$fdata["GoodName"] = "global_rol_ci";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_ci");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_ci";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_ci";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_ci"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_ci";
//	global_rol_contratos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "global_rol_contratos";
	$fdata["GoodName"] = "global_rol_contratos";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_contratos");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_contratos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_contratos";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_contratos"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_contratos";
//	global_rol_hojar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "global_rol_hojar";
	$fdata["GoodName"] = "global_rol_hojar";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_hojar");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_hojar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_hojar";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_hojar"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_hojar";
//	global_rol_inmuebles
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "global_rol_inmuebles";
	$fdata["GoodName"] = "global_rol_inmuebles";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_inmuebles");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_inmuebles";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_inmuebles";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_inmuebles"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_inmuebles";
//	global_rol_siis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "global_rol_siis";
	$fdata["GoodName"] = "global_rol_siis";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_siis");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_siis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_siis";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_siis"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_siis";
//	global_rol_cpanel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "global_rol_cpanel";
	$fdata["GoodName"] = "global_rol_cpanel";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_cpanel");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_cpanel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_cpanel";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_cpanel"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_cpanel";
//	global_rol_dashboard
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "global_rol_dashboard";
	$fdata["GoodName"] = "global_rol_dashboard";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_dashboard");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_dashboard";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_dashboard";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_dashboard"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_dashboard";
//	global_rol_zf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "global_rol_zf";
	$fdata["GoodName"] = "global_rol_zf";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_zf");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_zf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_zf";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_zf"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_zf";
//	global_rol_sipi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "global_rol_sipi";
	$fdata["GoodName"] = "global_rol_sipi";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_sipi");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_sipi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_sipi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_sipi"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_sipi";
//	global_rol_cej
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "global_rol_cej";
	$fdata["GoodName"] = "global_rol_cej";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_cej");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_cej";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_cej";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_cej"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_cej";
//	global_rol_jc3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "global_rol_jc3";
	$fdata["GoodName"] = "global_rol_jc3";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_jc3");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_jc3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_jc3";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_jc3"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_jc3";
//	global_rol_th
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "global_rol_th";
	$fdata["GoodName"] = "global_rol_th";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_th");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_th";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_th";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_th"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_th";
//	global_rol_sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "global_rol_sid";
	$fdata["GoodName"] = "global_rol_sid";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_sid");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_sid";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_sid"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_sid";
//	global_rol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "global_rol";
	$fdata["GoodName"] = "global_rol";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol";
//	global_rol_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "global_rol_cont";
	$fdata["GoodName"] = "global_rol_cont";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_cont");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "global_rol_cont";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_cont";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=2";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_cont"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_cont";
//	globla_rol_ct
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "globla_rol_ct";
	$fdata["GoodName"] = "globla_rol_ct";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","globla_rol_ct");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "globla_rol_ct";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "globla_rol_ct";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["globla_rol_ct"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "globla_rol_ct";
//	global_rol_procjur
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "global_rol_procjur";
	$fdata["GoodName"] = "global_rol_procjur";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_procjur");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_procjur";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_procjur";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_procjur"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_procjur";
//	global_rol_comacc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "global_rol_comacc";
	$fdata["GoodName"] = "global_rol_comacc";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_comacc");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_comacc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_comacc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_comacc"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_comacc";
//	global_rol_gestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "global_rol_gestion";
	$fdata["GoodName"] = "global_rol_gestion";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_gestion");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_gestion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_gestion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_gestion"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_gestion";
//	global_rol_ciudadano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "global_rol_ciudadano";
	$fdata["GoodName"] = "global_rol_ciudadano";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_ciudadano");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_ciudadano";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_ciudadano";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_ciudadano"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_ciudadano";
//	global_rol_ciudadano_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "global_rol_ciudadano_dep";
	$fdata["GoodName"] = "global_rol_ciudadano_dep";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","global_rol_ciudadano_dep");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "global_rol_ciudadano_dep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_ciudadano_dep";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["global_rol_ciudadano_dep"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "global_rol_ciudadano_dep";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","sys_user");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sys_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["sys_user"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "sys_user";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","sys_date");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "sys_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["sys_date"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "sys_date";
//	sys_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "sys_time";
	$fdata["GoodName"] = "sys_time";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","sys_time");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "sys_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["sys_time"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "sys_time";
//	sys_ntries_usr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "sys_ntries_usr";
	$fdata["GoodName"] = "sys_ntries_usr";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","sys_ntries_usr");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "sys_ntries_usr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_ntries_usr";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["sys_ntries_usr"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "sys_ntries_usr";
//	sys_registrationdate_usr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "sys_registrationdate_usr";
	$fdata["GoodName"] = "sys_registrationdate_usr";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","sys_registrationdate_usr");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "sys_registrationdate_usr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_registrationdate_usr";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["sys_registrationdate_usr"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "sys_registrationdate_usr";
//	sys_expiration_usr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "sys_expiration_usr";
	$fdata["GoodName"] = "sys_expiration_usr";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","sys_expiration_usr");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "sys_expiration_usr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_expiration_usr";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["sys_expiration_usr"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "sys_expiration_usr";
//	sys_disabledate_usr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "sys_disabledate_usr";
	$fdata["GoodName"] = "sys_disabledate_usr";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","sys_disabledate_usr");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "sys_disabledate_usr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_disabledate_usr";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["sys_disabledate_usr"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "sys_disabledate_usr";
//	sys_upd_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "sys_upd_fecha";
	$fdata["GoodName"] = "sys_upd_fecha";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","sys_upd_fecha");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "sys_upd_fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_upd_fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["sys_upd_fecha"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "sys_upd_fecha";
//	sys_upd_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "sys_upd_user";
	$fdata["GoodName"] = "sys_upd_user";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","sys_upd_user");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sys_upd_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_upd_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["sys_upd_user"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "sys_upd_user";
//	sys_upd_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "sys_upd_time";
	$fdata["GoodName"] = "sys_upd_time";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","sys_upd_time");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "sys_upd_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_upd_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["sys_upd_time"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "sys_upd_time";
//	sys_update_info
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "sys_update_info";
	$fdata["GoodName"] = "sys_update_info";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","sys_update_info");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "sys_update_info";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_update_info";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["sys_update_info"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "sys_update_info";
//	sys_update_family_info
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "sys_update_family_info";
	$fdata["GoodName"] = "sys_update_family_info";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","sys_update_family_info");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "sys_update_family_info";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_update_family_info";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["sys_update_family_info"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "sys_update_family_info";
//	usr_update_almacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "usr_update_almacen";
	$fdata["GoodName"] = "usr_update_almacen";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_update_almacen");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "usr_update_almacen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_update_almacen";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_update_almacen"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_update_almacen";
//	sys_anio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "sys_anio";
	$fdata["GoodName"] = "sys_anio";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","sys_anio");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "sys_anio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_anio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["sys_anio"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "sys_anio";
//	ctrl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "ctrl";
	$fdata["GoodName"] = "ctrl";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","ctrl");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ctrl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ctrl";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["ctrl"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "ctrl";
//	usr_directivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "usr_directivo";
	$fdata["GoodName"] = "usr_directivo";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_directivo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usr_directivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_directivo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_directivo"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_directivo";
//	usr_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "usr_dep";
	$fdata["GoodName"] = "usr_dep";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_dep");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usr_dep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_dep";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_dep"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_dep";
//	usr_dep_sup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "usr_dep_sup";
	$fdata["GoodName"] = "usr_dep_sup";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_dep_sup");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usr_dep_sup";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_dep_sup";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_dep_sup"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_dep_sup";
//	usr_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "usr_cargo";
	$fdata["GoodName"] = "usr_cargo";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_cargo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usr_cargo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_cargo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_cargo"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_cargo";
//	usr_regpago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "usr_regpago";
	$fdata["GoodName"] = "usr_regpago";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_regpago");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "usr_regpago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_regpago";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_regpago"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_regpago";
//	usr_extension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "usr_extension";
	$fdata["GoodName"] = "usr_extension";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_extension");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_extension";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_extension";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=16";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_extension"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_extension";
//	usr_piso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "usr_piso";
	$fdata["GoodName"] = "usr_piso";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_piso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_piso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_piso";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_piso"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_piso";
//	usr_datebirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "usr_datebirth";
	$fdata["GoodName"] = "usr_datebirth";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_datebirth");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "usr_datebirth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_datebirth";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_datebirth"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_datebirth";
//	ctrl_pedidoalmacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "ctrl_pedidoalmacen";
	$fdata["GoodName"] = "ctrl_pedidoalmacen";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","ctrl_pedidoalmacen");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "ctrl_pedidoalmacen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ctrl_pedidoalmacen";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["ctrl_pedidoalmacen"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "ctrl_pedidoalmacen";
//	ctrl_contacto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "ctrl_contacto";
	$fdata["GoodName"] = "ctrl_contacto";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","ctrl_contacto");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "ctrl_contacto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ctrl_contacto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["ctrl_contacto"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "ctrl_contacto";
//	usr_emergencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "usr_emergencia";
	$fdata["GoodName"] = "usr_emergencia";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","usr_emergencia");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_emergencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_emergencia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["usr_emergencia"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usr_emergencia";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","active");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["active"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "active";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","groupid");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["groupid"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "groupid";
//	habilita_almacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "habilita_almacen";
	$fdata["GoodName"] = "habilita_almacen";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","habilita_almacen");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "habilita_almacen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "habilita_almacen";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["habilita_almacen"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "habilita_almacen";
//	estado_vinculacion_mincit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "estado_vinculacion_mincit";
	$fdata["GoodName"] = "estado_vinculacion_mincit";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","estado_vinculacion_mincit");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "estado_vinculacion_mincit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_vinculacion_mincit";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["estado_vinculacion_mincit"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "estado_vinculacion_mincit";
//	upd_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "upd_date";
	$fdata["GoodName"] = "upd_date";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","upd_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "upd_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "upd_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["upd_date"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "upd_date";
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","phone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["phone"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "phone";
//	phone1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "phone1";
	$fdata["GoodName"] = "phone1";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_members","phone1");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "phone1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone1";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_members["phone1"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "phone1";


$tables_data["admin_members"]=&$tdataadmin_members;
$field_labels["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips["admin_members"] = &$fieldToolTipsadmin_members;
$placeHolders["admin_members"] = &$placeHoldersadmin_members;
$page_titles["admin_members"] = &$pageTitlesadmin_members;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_members"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_members"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_members()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idusrglobal,  	id_fk,  	Username,  	Password,  	usr_email,  	usr_name,  	usr_lname,  	usr_nombresfull,  	usr_personalid,  	usr_inicial,  	usr_sessini,  	usr_image,  	usr_status_nomina,  	usr_status,  	usr_rdnkey,  	usr_type_vinc,  	usr_type_vinculacion,  	usr_status_sol,  	usr_dependencia,  	user_dep,  	usr_entidad,  	usr_not,  	usr_not_msj,  	usr_jefe,  	usr_minequipo_lider,  	usr_minequipo_grupo,  	global_rol_me,  	global_rol_gh,  	global_rol_almacen,  	global_rol_ci,  	global_rol_contratos,  	global_rol_hojar,  	global_rol_inmuebles,  	global_rol_siis,  	global_rol_cpanel,  	global_rol_dashboard,  	global_rol_zf,  	global_rol_sipi,  	global_rol_cej,  	global_rol_jc3,  	global_rol_th,  	global_rol_sid,  	global_rol,  	global_rol_cont,  	globla_rol_ct,  	global_rol_procjur,  	global_rol_comacc,  	global_rol_gestion,  	global_rol_ciudadano,  	global_rol_ciudadano_dep,  	sys_user,  	sys_date,  	sys_time,  	sys_ntries_usr,  	sys_registrationdate_usr,  	sys_expiration_usr,  	sys_disabledate_usr,  	sys_upd_fecha,  	sys_upd_user,  	sys_upd_time,  	sys_update_info,  	sys_update_family_info,  	usr_update_almacen,  	sys_anio,  	ctrl,  	usr_directivo,  	usr_dep,  	usr_dep_sup,  	usr_cargo,  	usr_regpago,  	usr_extension,  	usr_piso,  	usr_datebirth,  	ctrl_pedidoalmacen,  	ctrl_contacto,  	usr_emergencia,  	active,  	groupid,  	habilita_almacen,  	estado_vinculacion_mincit,  	upd_date,  	phone,  	phone1";
$proto0["m_strFrom"] = "FROM global_users";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "idusrglobal",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto6["m_sql"] = "idusrglobal";
$proto6["m_srcTableName"] = "admin_members";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_fk",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto8["m_sql"] = "id_fk";
$proto8["m_srcTableName"] = "admin_members";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto10["m_sql"] = "Username";
$proto10["m_srcTableName"] = "admin_members";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto12["m_sql"] = "Password";
$proto12["m_srcTableName"] = "admin_members";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_email",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto14["m_sql"] = "usr_email";
$proto14["m_srcTableName"] = "admin_members";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_name",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto16["m_sql"] = "usr_name";
$proto16["m_srcTableName"] = "admin_members";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_lname",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto18["m_sql"] = "usr_lname";
$proto18["m_srcTableName"] = "admin_members";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_nombresfull",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto20["m_sql"] = "usr_nombresfull";
$proto20["m_srcTableName"] = "admin_members";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_personalid",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto22["m_sql"] = "usr_personalid";
$proto22["m_srcTableName"] = "admin_members";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_inicial",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto24["m_sql"] = "usr_inicial";
$proto24["m_srcTableName"] = "admin_members";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_sessini",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto26["m_sql"] = "usr_sessini";
$proto26["m_srcTableName"] = "admin_members";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_image",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto28["m_sql"] = "usr_image";
$proto28["m_srcTableName"] = "admin_members";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_status_nomina",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto30["m_sql"] = "usr_status_nomina";
$proto30["m_srcTableName"] = "admin_members";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_status",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto32["m_sql"] = "usr_status";
$proto32["m_srcTableName"] = "admin_members";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_rdnkey",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto34["m_sql"] = "usr_rdnkey";
$proto34["m_srcTableName"] = "admin_members";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_type_vinc",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto36["m_sql"] = "usr_type_vinc";
$proto36["m_srcTableName"] = "admin_members";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_type_vinculacion",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto38["m_sql"] = "usr_type_vinculacion";
$proto38["m_srcTableName"] = "admin_members";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_status_sol",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto40["m_sql"] = "usr_status_sol";
$proto40["m_srcTableName"] = "admin_members";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_dependencia",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto42["m_sql"] = "usr_dependencia";
$proto42["m_srcTableName"] = "admin_members";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "user_dep",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto44["m_sql"] = "user_dep";
$proto44["m_srcTableName"] = "admin_members";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_entidad",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto46["m_sql"] = "usr_entidad";
$proto46["m_srcTableName"] = "admin_members";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_not",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto48["m_sql"] = "usr_not";
$proto48["m_srcTableName"] = "admin_members";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_not_msj",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto50["m_sql"] = "usr_not_msj";
$proto50["m_srcTableName"] = "admin_members";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_jefe",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto52["m_sql"] = "usr_jefe";
$proto52["m_srcTableName"] = "admin_members";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_minequipo_lider",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto54["m_sql"] = "usr_minequipo_lider";
$proto54["m_srcTableName"] = "admin_members";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_minequipo_grupo",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto56["m_sql"] = "usr_minequipo_grupo";
$proto56["m_srcTableName"] = "admin_members";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_me",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto58["m_sql"] = "global_rol_me";
$proto58["m_srcTableName"] = "admin_members";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_gh",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto60["m_sql"] = "global_rol_gh";
$proto60["m_srcTableName"] = "admin_members";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_almacen",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto62["m_sql"] = "global_rol_almacen";
$proto62["m_srcTableName"] = "admin_members";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_ci",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto64["m_sql"] = "global_rol_ci";
$proto64["m_srcTableName"] = "admin_members";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_contratos",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto66["m_sql"] = "global_rol_contratos";
$proto66["m_srcTableName"] = "admin_members";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_hojar",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto68["m_sql"] = "global_rol_hojar";
$proto68["m_srcTableName"] = "admin_members";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_inmuebles",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto70["m_sql"] = "global_rol_inmuebles";
$proto70["m_srcTableName"] = "admin_members";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_siis",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto72["m_sql"] = "global_rol_siis";
$proto72["m_srcTableName"] = "admin_members";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_cpanel",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto74["m_sql"] = "global_rol_cpanel";
$proto74["m_srcTableName"] = "admin_members";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_dashboard",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto76["m_sql"] = "global_rol_dashboard";
$proto76["m_srcTableName"] = "admin_members";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_zf",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto78["m_sql"] = "global_rol_zf";
$proto78["m_srcTableName"] = "admin_members";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_sipi",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto80["m_sql"] = "global_rol_sipi";
$proto80["m_srcTableName"] = "admin_members";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_cej",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto82["m_sql"] = "global_rol_cej";
$proto82["m_srcTableName"] = "admin_members";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_jc3",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto84["m_sql"] = "global_rol_jc3";
$proto84["m_srcTableName"] = "admin_members";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_th",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto86["m_sql"] = "global_rol_th";
$proto86["m_srcTableName"] = "admin_members";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_sid",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto88["m_sql"] = "global_rol_sid";
$proto88["m_srcTableName"] = "admin_members";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto90["m_sql"] = "global_rol";
$proto90["m_srcTableName"] = "admin_members";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_cont",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto92["m_sql"] = "global_rol_cont";
$proto92["m_srcTableName"] = "admin_members";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "globla_rol_ct",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto94["m_sql"] = "globla_rol_ct";
$proto94["m_srcTableName"] = "admin_members";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_procjur",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto96["m_sql"] = "global_rol_procjur";
$proto96["m_srcTableName"] = "admin_members";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_comacc",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto98["m_sql"] = "global_rol_comacc";
$proto98["m_srcTableName"] = "admin_members";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_gestion",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto100["m_sql"] = "global_rol_gestion";
$proto100["m_srcTableName"] = "admin_members";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_ciudadano",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto102["m_sql"] = "global_rol_ciudadano";
$proto102["m_srcTableName"] = "admin_members";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_ciudadano_dep",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto104["m_sql"] = "global_rol_ciudadano_dep";
$proto104["m_srcTableName"] = "admin_members";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto106["m_sql"] = "sys_user";
$proto106["m_srcTableName"] = "admin_members";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto108["m_sql"] = "sys_date";
$proto108["m_srcTableName"] = "admin_members";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_time",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto110["m_sql"] = "sys_time";
$proto110["m_srcTableName"] = "admin_members";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_ntries_usr",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto112["m_sql"] = "sys_ntries_usr";
$proto112["m_srcTableName"] = "admin_members";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_registrationdate_usr",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto114["m_sql"] = "sys_registrationdate_usr";
$proto114["m_srcTableName"] = "admin_members";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_expiration_usr",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto116["m_sql"] = "sys_expiration_usr";
$proto116["m_srcTableName"] = "admin_members";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_disabledate_usr",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto118["m_sql"] = "sys_disabledate_usr";
$proto118["m_srcTableName"] = "admin_members";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_upd_fecha",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto120["m_sql"] = "sys_upd_fecha";
$proto120["m_srcTableName"] = "admin_members";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_upd_user",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto122["m_sql"] = "sys_upd_user";
$proto122["m_srcTableName"] = "admin_members";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_upd_time",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto124["m_sql"] = "sys_upd_time";
$proto124["m_srcTableName"] = "admin_members";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_update_info",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto126["m_sql"] = "sys_update_info";
$proto126["m_srcTableName"] = "admin_members";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_update_family_info",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto128["m_sql"] = "sys_update_family_info";
$proto128["m_srcTableName"] = "admin_members";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_update_almacen",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto130["m_sql"] = "usr_update_almacen";
$proto130["m_srcTableName"] = "admin_members";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_anio",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto132["m_sql"] = "sys_anio";
$proto132["m_srcTableName"] = "admin_members";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "ctrl",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto134["m_sql"] = "ctrl";
$proto134["m_srcTableName"] = "admin_members";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_directivo",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto136["m_sql"] = "usr_directivo";
$proto136["m_srcTableName"] = "admin_members";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_dep",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto138["m_sql"] = "usr_dep";
$proto138["m_srcTableName"] = "admin_members";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_dep_sup",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto140["m_sql"] = "usr_dep_sup";
$proto140["m_srcTableName"] = "admin_members";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_cargo",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto142["m_sql"] = "usr_cargo";
$proto142["m_srcTableName"] = "admin_members";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_regpago",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto144["m_sql"] = "usr_regpago";
$proto144["m_srcTableName"] = "admin_members";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_extension",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto146["m_sql"] = "usr_extension";
$proto146["m_srcTableName"] = "admin_members";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_piso",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto148["m_sql"] = "usr_piso";
$proto148["m_srcTableName"] = "admin_members";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_datebirth",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto150["m_sql"] = "usr_datebirth";
$proto150["m_srcTableName"] = "admin_members";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "ctrl_pedidoalmacen",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto152["m_sql"] = "ctrl_pedidoalmacen";
$proto152["m_srcTableName"] = "admin_members";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "ctrl_contacto",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto154["m_sql"] = "ctrl_contacto";
$proto154["m_srcTableName"] = "admin_members";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_emergencia",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto156["m_sql"] = "usr_emergencia";
$proto156["m_srcTableName"] = "admin_members";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto158["m_sql"] = "active";
$proto158["m_srcTableName"] = "admin_members";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto160["m_sql"] = "groupid";
$proto160["m_srcTableName"] = "admin_members";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "habilita_almacen",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto162["m_sql"] = "habilita_almacen";
$proto162["m_srcTableName"] = "admin_members";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_vinculacion_mincit",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto164["m_sql"] = "estado_vinculacion_mincit";
$proto164["m_srcTableName"] = "admin_members";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "upd_date",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto166["m_sql"] = "upd_date";
$proto166["m_srcTableName"] = "admin_members";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto168["m_sql"] = "phone";
$proto168["m_srcTableName"] = "admin_members";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "phone1",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_members"
));

$proto170["m_sql"] = "phone1";
$proto170["m_srcTableName"] = "admin_members";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto172=array();
$proto172["m_link"] = "SQLL_MAIN";
			$proto173=array();
$proto173["m_strName"] = "global_users";
$proto173["m_srcTableName"] = "admin_members";
$proto173["m_columns"] = array();
$proto173["m_columns"][] = "idusrglobal";
$proto173["m_columns"][] = "id_fk";
$proto173["m_columns"][] = "Username";
$proto173["m_columns"][] = "Password";
$proto173["m_columns"][] = "usr_email";
$proto173["m_columns"][] = "usr_name";
$proto173["m_columns"][] = "usr_lname";
$proto173["m_columns"][] = "usr_nombresfull";
$proto173["m_columns"][] = "usr_personalid";
$proto173["m_columns"][] = "usr_inicial";
$proto173["m_columns"][] = "usr_sessini";
$proto173["m_columns"][] = "usr_image";
$proto173["m_columns"][] = "usr_status_nomina";
$proto173["m_columns"][] = "usr_status";
$proto173["m_columns"][] = "usr_rdnkey";
$proto173["m_columns"][] = "usr_type_vinc";
$proto173["m_columns"][] = "usr_type_vinculacion";
$proto173["m_columns"][] = "usr_status_sol";
$proto173["m_columns"][] = "usr_dependencia";
$proto173["m_columns"][] = "user_dep";
$proto173["m_columns"][] = "usr_entidad";
$proto173["m_columns"][] = "usr_not";
$proto173["m_columns"][] = "usr_not_msj";
$proto173["m_columns"][] = "usr_jefe";
$proto173["m_columns"][] = "usr_minequipo_lider";
$proto173["m_columns"][] = "usr_minequipo_grupo";
$proto173["m_columns"][] = "global_rol_me";
$proto173["m_columns"][] = "global_rol_gh";
$proto173["m_columns"][] = "global_rol_almacen";
$proto173["m_columns"][] = "global_rol_ci";
$proto173["m_columns"][] = "global_rol_contratos";
$proto173["m_columns"][] = "global_rol_hojar";
$proto173["m_columns"][] = "global_rol_inmuebles";
$proto173["m_columns"][] = "global_rol_siis";
$proto173["m_columns"][] = "global_rol_cpanel";
$proto173["m_columns"][] = "global_rol_dashboard";
$proto173["m_columns"][] = "global_rol_zf";
$proto173["m_columns"][] = "global_rol_sipi";
$proto173["m_columns"][] = "global_rol_cej";
$proto173["m_columns"][] = "global_rol_jc3";
$proto173["m_columns"][] = "global_rol_th";
$proto173["m_columns"][] = "global_rol_sid";
$proto173["m_columns"][] = "global_rol";
$proto173["m_columns"][] = "global_rol_cont";
$proto173["m_columns"][] = "globla_rol_ct";
$proto173["m_columns"][] = "global_rol_procjur";
$proto173["m_columns"][] = "global_rol_comacc";
$proto173["m_columns"][] = "global_rol_gestion";
$proto173["m_columns"][] = "global_rol_ciudadano";
$proto173["m_columns"][] = "global_rol_ciudadano_dep";
$proto173["m_columns"][] = "sys_user";
$proto173["m_columns"][] = "sys_date";
$proto173["m_columns"][] = "sys_time";
$proto173["m_columns"][] = "sys_ntries_usr";
$proto173["m_columns"][] = "sys_registrationdate_usr";
$proto173["m_columns"][] = "sys_expiration_usr";
$proto173["m_columns"][] = "sys_disabledate_usr";
$proto173["m_columns"][] = "sys_upd_fecha";
$proto173["m_columns"][] = "sys_upd_user";
$proto173["m_columns"][] = "sys_upd_time";
$proto173["m_columns"][] = "sys_update_info";
$proto173["m_columns"][] = "sys_update_family_info";
$proto173["m_columns"][] = "usr_update_almacen";
$proto173["m_columns"][] = "sys_anio";
$proto173["m_columns"][] = "ctrl";
$proto173["m_columns"][] = "usr_directivo";
$proto173["m_columns"][] = "usr_dep";
$proto173["m_columns"][] = "usr_dep_sup";
$proto173["m_columns"][] = "usr_cargo";
$proto173["m_columns"][] = "usr_regpago";
$proto173["m_columns"][] = "usr_extension";
$proto173["m_columns"][] = "usr_piso";
$proto173["m_columns"][] = "usr_datebirth";
$proto173["m_columns"][] = "ctrl_pedidoalmacen";
$proto173["m_columns"][] = "ctrl_contacto";
$proto173["m_columns"][] = "usr_emergencia";
$proto173["m_columns"][] = "active";
$proto173["m_columns"][] = "groupid";
$proto173["m_columns"][] = "habilita_almacen";
$proto173["m_columns"][] = "estado_vinculacion_mincit";
$proto173["m_columns"][] = "upd_date";
$proto173["m_columns"][] = "phone";
$proto173["m_columns"][] = "phone1";
$obj = new SQLTable($proto173);

$proto172["m_table"] = $obj;
$proto172["m_sql"] = "global_users";
$proto172["m_alias"] = "";
$proto172["m_srcTableName"] = "admin_members";
$proto174=array();
$proto174["m_sql"] = "";
$proto174["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto174["m_column"]=$obj;
$proto174["m_contained"] = array();
$proto174["m_strCase"] = "";
$proto174["m_havingmode"] = false;
$proto174["m_inBrackets"] = false;
$proto174["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto174);

$proto172["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto172);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="admin_members";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_members = createSqlQuery_admin_members();


	
										;

																																																																																			

$tdataadmin_members[".sqlquery"] = $queryData_admin_members;

$tableEvents["admin_members"] = new eventsBase;
$tdataadmin_members[".hasEvents"] = false;

?>