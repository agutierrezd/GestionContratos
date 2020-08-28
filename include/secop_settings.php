<?php



$tdatasecop = array();
$tdatasecop[".searchableFields"] = array();
$tdatasecop[".ShortName"] = "secop";
$tdatasecop[".OwnerID"] = "";
$tdatasecop[".OriginalTable"] = "secop";


$tdatasecop[".pagesByType"] = my_json_decode( "{}" );
$tdatasecop[".originalPagesByType"] = $tdatasecop[".pagesByType"];
$tdatasecop[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatasecop[".originalPages"] = $tdatasecop[".pages"];
$tdatasecop[".defaultPages"] = my_json_decode( "{}" );
$tdatasecop[".originalDefaultPages"] = $tdatasecop[".defaultPages"];

//	field labels
$fieldLabelssecop = array();
$fieldToolTipssecop = array();
$pageTitlessecop = array();
$placeHolderssecop = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssecop["Spanish"] = array();
	$fieldToolTipssecop["Spanish"] = array();
	$placeHolderssecop["Spanish"] = array();
	$pageTitlessecop["Spanish"] = array();
	$fieldLabelssecop["Spanish"]["secop_id"] = "Secop Id";
	$fieldToolTipssecop["Spanish"]["secop_id"] = "";
	$placeHolderssecop["Spanish"]["secop_id"] = "";
	$fieldLabelssecop["Spanish"]["secop_nombre_entidad"] = "Secop.nombre Entidad";
	$fieldToolTipssecop["Spanish"]["secop_nombre_entidad"] = "";
	$placeHolderssecop["Spanish"]["secop_nombre_entidad"] = "";
	$fieldLabelssecop["Spanish"]["secop_nit_entidad"] = "Secop.nit Entidad";
	$fieldToolTipssecop["Spanish"]["secop_nit_entidad"] = "";
	$placeHolderssecop["Spanish"]["secop_nit_entidad"] = "";
	$fieldLabelssecop["Spanish"]["secop_departamento"] = "Secop.departamento";
	$fieldToolTipssecop["Spanish"]["secop_departamento"] = "";
	$placeHolderssecop["Spanish"]["secop_departamento"] = "";
	$fieldLabelssecop["Spanish"]["secop_ciudad"] = "Secop.ciudad";
	$fieldToolTipssecop["Spanish"]["secop_ciudad"] = "";
	$placeHolderssecop["Spanish"]["secop_ciudad"] = "";
	$fieldLabelssecop["Spanish"]["secop_localizaci_n"] = "Secop.localizaci N";
	$fieldToolTipssecop["Spanish"]["secop_localizaci_n"] = "";
	$placeHolderssecop["Spanish"]["secop_localizaci_n"] = "";
	$fieldLabelssecop["Spanish"]["secop_orden"] = "Secop.orden";
	$fieldToolTipssecop["Spanish"]["secop_orden"] = "";
	$placeHolderssecop["Spanish"]["secop_orden"] = "";
	$fieldLabelssecop["Spanish"]["secop_sector"] = "Secop.sector";
	$fieldToolTipssecop["Spanish"]["secop_sector"] = "";
	$placeHolderssecop["Spanish"]["secop_sector"] = "";
	$fieldLabelssecop["Spanish"]["secop_rama"] = "Secop.rama";
	$fieldToolTipssecop["Spanish"]["secop_rama"] = "";
	$placeHolderssecop["Spanish"]["secop_rama"] = "";
	$fieldLabelssecop["Spanish"]["secop_entidad_centralizada"] = "Secop.entidad Centralizada";
	$fieldToolTipssecop["Spanish"]["secop_entidad_centralizada"] = "";
	$placeHolderssecop["Spanish"]["secop_entidad_centralizada"] = "";
	$fieldLabelssecop["Spanish"]["secop_proceso_de_compra"] = "Secop.proceso De Compra";
	$fieldToolTipssecop["Spanish"]["secop_proceso_de_compra"] = "";
	$placeHolderssecop["Spanish"]["secop_proceso_de_compra"] = "";
	$fieldLabelssecop["Spanish"]["secop_id_contrato"] = "Secop.id Contrato";
	$fieldToolTipssecop["Spanish"]["secop_id_contrato"] = "";
	$placeHolderssecop["Spanish"]["secop_id_contrato"] = "";
	$fieldLabelssecop["Spanish"]["secop_referencia_del_contrato"] = "Secop.referencia Del Contrato";
	$fieldToolTipssecop["Spanish"]["secop_referencia_del_contrato"] = "";
	$placeHolderssecop["Spanish"]["secop_referencia_del_contrato"] = "";
	$fieldLabelssecop["Spanish"]["secop_estado_contrato"] = "Secop.estado Contrato";
	$fieldToolTipssecop["Spanish"]["secop_estado_contrato"] = "";
	$placeHolderssecop["Spanish"]["secop_estado_contrato"] = "";
	$fieldLabelssecop["Spanish"]["secop_codigo_de_categoria_principal"] = "Secop.codigo De Categoria Principal";
	$fieldToolTipssecop["Spanish"]["secop_codigo_de_categoria_principal"] = "";
	$placeHolderssecop["Spanish"]["secop_codigo_de_categoria_principal"] = "";
	$fieldLabelssecop["Spanish"]["secop_descripcion_del_proceso"] = "Secop.descripcion Del Proceso";
	$fieldToolTipssecop["Spanish"]["secop_descripcion_del_proceso"] = "";
	$placeHolderssecop["Spanish"]["secop_descripcion_del_proceso"] = "";
	$fieldLabelssecop["Spanish"]["secop_tipo_de_contrato"] = "Secop.tipo De Contrato";
	$fieldToolTipssecop["Spanish"]["secop_tipo_de_contrato"] = "";
	$placeHolderssecop["Spanish"]["secop_tipo_de_contrato"] = "";
	$fieldLabelssecop["Spanish"]["secop_modalidad_de_contratacion"] = "Secop.modalidad De Contratacion";
	$fieldToolTipssecop["Spanish"]["secop_modalidad_de_contratacion"] = "";
	$placeHolderssecop["Spanish"]["secop_modalidad_de_contratacion"] = "";
	$fieldLabelssecop["Spanish"]["secop_justificacion_modalidad_de"] = "Secop.justificacion Modalidad De";
	$fieldToolTipssecop["Spanish"]["secop_justificacion_modalidad_de"] = "";
	$placeHolderssecop["Spanish"]["secop_justificacion_modalidad_de"] = "";
	$fieldLabelssecop["Spanish"]["secop_fecha_de_firma"] = "Secop.fecha De Firma";
	$fieldToolTipssecop["Spanish"]["secop_fecha_de_firma"] = "";
	$placeHolderssecop["Spanish"]["secop_fecha_de_firma"] = "";
	$fieldLabelssecop["Spanish"]["secop_fecha_de_inicio_del_contrato"] = "Secop.fecha De Inicio Del Contrato";
	$fieldToolTipssecop["Spanish"]["secop_fecha_de_inicio_del_contrato"] = "";
	$placeHolderssecop["Spanish"]["secop_fecha_de_inicio_del_contrato"] = "";
	$fieldLabelssecop["Spanish"]["secop_fecha_de_fin_del_contrato"] = "Secop.fecha De Fin Del Contrato";
	$fieldToolTipssecop["Spanish"]["secop_fecha_de_fin_del_contrato"] = "";
	$placeHolderssecop["Spanish"]["secop_fecha_de_fin_del_contrato"] = "";
	$fieldLabelssecop["Spanish"]["secop_fecha_de_inicio_de_ejecucion"] = "Secop.fecha De Inicio De Ejecucion";
	$fieldToolTipssecop["Spanish"]["secop_fecha_de_inicio_de_ejecucion"] = "";
	$placeHolderssecop["Spanish"]["secop_fecha_de_inicio_de_ejecucion"] = "";
	$fieldLabelssecop["Spanish"]["secop_fecha_de_fin_de_ejecucion"] = "Secop.fecha De Fin De Ejecucion";
	$fieldToolTipssecop["Spanish"]["secop_fecha_de_fin_de_ejecucion"] = "";
	$placeHolderssecop["Spanish"]["secop_fecha_de_fin_de_ejecucion"] = "";
	$fieldLabelssecop["Spanish"]["secop_condiciones_de_entrega"] = "Secop.condiciones De Entrega";
	$fieldToolTipssecop["Spanish"]["secop_condiciones_de_entrega"] = "";
	$placeHolderssecop["Spanish"]["secop_condiciones_de_entrega"] = "";
	$fieldLabelssecop["Spanish"]["secop_tipodocproveedor"] = "Secop.tipodocproveedor";
	$fieldToolTipssecop["Spanish"]["secop_tipodocproveedor"] = "";
	$placeHolderssecop["Spanish"]["secop_tipodocproveedor"] = "";
	$fieldLabelssecop["Spanish"]["secop_documento_proveedor"] = "Secop.documento Proveedor";
	$fieldToolTipssecop["Spanish"]["secop_documento_proveedor"] = "";
	$placeHolderssecop["Spanish"]["secop_documento_proveedor"] = "";
	$fieldLabelssecop["Spanish"]["secop_proveedor_adjudicado"] = "Secop.proveedor Adjudicado";
	$fieldToolTipssecop["Spanish"]["secop_proveedor_adjudicado"] = "";
	$placeHolderssecop["Spanish"]["secop_proveedor_adjudicado"] = "";
	$fieldLabelssecop["Spanish"]["secop_es_grupo"] = "Secop.es Grupo";
	$fieldToolTipssecop["Spanish"]["secop_es_grupo"] = "";
	$placeHolderssecop["Spanish"]["secop_es_grupo"] = "";
	$fieldLabelssecop["Spanish"]["secop_es_pyme"] = "Secop.es Pyme";
	$fieldToolTipssecop["Spanish"]["secop_es_pyme"] = "";
	$placeHolderssecop["Spanish"]["secop_es_pyme"] = "";
	$fieldLabelssecop["Spanish"]["secop_habilita_pago_adelantado"] = "Secop.habilita Pago Adelantado";
	$fieldToolTipssecop["Spanish"]["secop_habilita_pago_adelantado"] = "";
	$placeHolderssecop["Spanish"]["secop_habilita_pago_adelantado"] = "";
	$fieldLabelssecop["Spanish"]["secop_liquidaci_n"] = "Secop.liquidaci N";
	$fieldToolTipssecop["Spanish"]["secop_liquidaci_n"] = "";
	$placeHolderssecop["Spanish"]["secop_liquidaci_n"] = "";
	$fieldLabelssecop["Spanish"]["secop_obligaci_n_ambiental"] = "Secop.obligaci N Ambiental";
	$fieldToolTipssecop["Spanish"]["secop_obligaci_n_ambiental"] = "";
	$placeHolderssecop["Spanish"]["secop_obligaci_n_ambiental"] = "";
	$fieldLabelssecop["Spanish"]["secop_obligaciones_postconsumo"] = "Secop.obligaciones Postconsumo";
	$fieldToolTipssecop["Spanish"]["secop_obligaciones_postconsumo"] = "";
	$placeHolderssecop["Spanish"]["secop_obligaciones_postconsumo"] = "";
	$fieldLabelssecop["Spanish"]["secop_reversion"] = "Secop.reversion";
	$fieldToolTipssecop["Spanish"]["secop_reversion"] = "";
	$placeHolderssecop["Spanish"]["secop_reversion"] = "";
	$fieldLabelssecop["Spanish"]["secop_valor_del_contrato"] = "Secop.valor Del Contrato";
	$fieldToolTipssecop["Spanish"]["secop_valor_del_contrato"] = "";
	$placeHolderssecop["Spanish"]["secop_valor_del_contrato"] = "";
	$fieldLabelssecop["Spanish"]["secop_valor_de_pago_adelantado"] = "Secop.valor De Pago Adelantado";
	$fieldToolTipssecop["Spanish"]["secop_valor_de_pago_adelantado"] = "";
	$placeHolderssecop["Spanish"]["secop_valor_de_pago_adelantado"] = "";
	$fieldLabelssecop["Spanish"]["secop_valor_facturado"] = "Secop.valor Facturado";
	$fieldToolTipssecop["Spanish"]["secop_valor_facturado"] = "";
	$placeHolderssecop["Spanish"]["secop_valor_facturado"] = "";
	$fieldLabelssecop["Spanish"]["secop_valor_pendiente_de_pago"] = "Secop.valor Pendiente De Pago";
	$fieldToolTipssecop["Spanish"]["secop_valor_pendiente_de_pago"] = "";
	$placeHolderssecop["Spanish"]["secop_valor_pendiente_de_pago"] = "";
	$fieldLabelssecop["Spanish"]["secop_valor_pagado"] = "Secop.valor Pagado";
	$fieldToolTipssecop["Spanish"]["secop_valor_pagado"] = "";
	$placeHolderssecop["Spanish"]["secop_valor_pagado"] = "";
	$fieldLabelssecop["Spanish"]["secop_valor_amortizado"] = "Secop.valor Amortizado";
	$fieldToolTipssecop["Spanish"]["secop_valor_amortizado"] = "";
	$placeHolderssecop["Spanish"]["secop_valor_amortizado"] = "";
	$fieldLabelssecop["Spanish"]["secop_valor_pendiente_de"] = "Secop.valor Pendiente De";
	$fieldToolTipssecop["Spanish"]["secop_valor_pendiente_de"] = "";
	$placeHolderssecop["Spanish"]["secop_valor_pendiente_de"] = "";
	$fieldLabelssecop["Spanish"]["secop_valor_pendiente_de_ejecucion"] = "Secop.valor Pendiente De Ejecucion";
	$fieldToolTipssecop["Spanish"]["secop_valor_pendiente_de_ejecucion"] = "";
	$placeHolderssecop["Spanish"]["secop_valor_pendiente_de_ejecucion"] = "";
	$fieldLabelssecop["Spanish"]["secop_estado_bpin"] = "Secop.estado Bpin";
	$fieldToolTipssecop["Spanish"]["secop_estado_bpin"] = "";
	$placeHolderssecop["Spanish"]["secop_estado_bpin"] = "";
	$fieldLabelssecop["Spanish"]["secop_c_digo_bpin"] = "Secop.c Digo Bpin";
	$fieldToolTipssecop["Spanish"]["secop_c_digo_bpin"] = "";
	$placeHolderssecop["Spanish"]["secop_c_digo_bpin"] = "";
	$fieldLabelssecop["Spanish"]["secop_anno_bpin"] = "Secop.anno Bpin";
	$fieldToolTipssecop["Spanish"]["secop_anno_bpin"] = "";
	$placeHolderssecop["Spanish"]["secop_anno_bpin"] = "";
	$fieldLabelssecop["Spanish"]["secop_saldo_cdp"] = "Secop.saldo Cdp";
	$fieldToolTipssecop["Spanish"]["secop_saldo_cdp"] = "";
	$placeHolderssecop["Spanish"]["secop_saldo_cdp"] = "";
	$fieldLabelssecop["Spanish"]["secop_saldo_vigencia"] = "Secop.saldo Vigencia";
	$fieldToolTipssecop["Spanish"]["secop_saldo_vigencia"] = "";
	$placeHolderssecop["Spanish"]["secop_saldo_vigencia"] = "";
	$fieldLabelssecop["Spanish"]["secop_espostconflicto"] = "Secop.espostconflicto";
	$fieldToolTipssecop["Spanish"]["secop_espostconflicto"] = "";
	$placeHolderssecop["Spanish"]["secop_espostconflicto"] = "";
	$fieldLabelssecop["Spanish"]["secop_urlproceso_url"] = "Secop.urlproceso.url";
	$fieldToolTipssecop["Spanish"]["secop_urlproceso_url"] = "";
	$placeHolderssecop["Spanish"]["secop_urlproceso_url"] = "";
	$fieldLabelssecop["Spanish"]["secop_destino_gasto"] = "Secop.destino Gasto";
	$fieldToolTipssecop["Spanish"]["secop_destino_gasto"] = "";
	$placeHolderssecop["Spanish"]["secop_destino_gasto"] = "";
	$fieldLabelssecop["Spanish"]["secop_origen_de_los_recursos"] = "Secop.origen De Los Recursos";
	$fieldToolTipssecop["Spanish"]["secop_origen_de_los_recursos"] = "";
	$placeHolderssecop["Spanish"]["secop_origen_de_los_recursos"] = "";
	$fieldLabelssecop["Spanish"]["secop_d_as_adicionados"] = "Secop.d As Adicionados";
	$fieldToolTipssecop["Spanish"]["secop_d_as_adicionados"] = "";
	$placeHolderssecop["Spanish"]["secop_d_as_adicionados"] = "";
	$fieldLabelssecop["Spanish"]["secop_puntos_del_acuerdo"] = "Secop.puntos Del Acuerdo";
	$fieldToolTipssecop["Spanish"]["secop_puntos_del_acuerdo"] = "";
	$placeHolderssecop["Spanish"]["secop_puntos_del_acuerdo"] = "";
	$fieldLabelssecop["Spanish"]["secop_pilares_del_acuerdo"] = "Secop.pilares Del Acuerdo";
	$fieldToolTipssecop["Spanish"]["secop_pilares_del_acuerdo"] = "";
	$placeHolderssecop["Spanish"]["secop_pilares_del_acuerdo"] = "";
	if (count($fieldToolTipssecop["Spanish"]))
		$tdatasecop[".isUseToolTips"] = true;
}


	$tdatasecop[".NCSearch"] = true;



$tdatasecop[".shortTableName"] = "secop";
$tdatasecop[".nSecOptions"] = 0;

$tdatasecop[".mainTableOwnerID"] = "";
$tdatasecop[".entityType"] = 0;

$tdatasecop[".strOriginalTableName"] = "secop";

	



$tdatasecop[".showAddInPopup"] = false;

$tdatasecop[".showEditInPopup"] = false;

$tdatasecop[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasecop[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasecop[".listAjax"] = false;
//	temporary
$tdatasecop[".listAjax"] = false;

	$tdatasecop[".audit"] = true;

	$tdatasecop[".locking"] = true;


$pages = $tdatasecop[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasecop[".edit"] = true;
	$tdatasecop[".afterEditAction"] = 1;
	$tdatasecop[".closePopupAfterEdit"] = 1;
	$tdatasecop[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasecop[".add"] = true;
$tdatasecop[".afterAddAction"] = 1;
$tdatasecop[".closePopupAfterAdd"] = 1;
$tdatasecop[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasecop[".list"] = true;
}



$tdatasecop[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasecop[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasecop[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasecop[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasecop[".printFriendly"] = true;
}



$tdatasecop[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasecop[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasecop[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasecop[".isUseAjaxSuggest"] = true;

$tdatasecop[".rowHighlite"] = true;



						

$tdatasecop[".ajaxCodeSnippetAdded"] = false;

$tdatasecop[".buttonsAdded"] = false;

$tdatasecop[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasecop[".isUseTimeForSearch"] = false;


$tdatasecop[".badgeColor"] = "8FBC8B";


$tdatasecop[".allSearchFields"] = array();
$tdatasecop[".filterFields"] = array();
$tdatasecop[".requiredSearchFields"] = array();

$tdatasecop[".googleLikeFields"] = array();
$tdatasecop[".googleLikeFields"][] = "secop_id";
$tdatasecop[".googleLikeFields"][] = "secop.nombre_entidad";
$tdatasecop[".googleLikeFields"][] = "secop.nit_entidad";
$tdatasecop[".googleLikeFields"][] = "secop.departamento";
$tdatasecop[".googleLikeFields"][] = "secop.ciudad";
$tdatasecop[".googleLikeFields"][] = "secop.localizaci_n";
$tdatasecop[".googleLikeFields"][] = "secop.orden";
$tdatasecop[".googleLikeFields"][] = "secop.sector";
$tdatasecop[".googleLikeFields"][] = "secop.rama";
$tdatasecop[".googleLikeFields"][] = "secop.entidad_centralizada";
$tdatasecop[".googleLikeFields"][] = "secop.proceso_de_compra";
$tdatasecop[".googleLikeFields"][] = "secop.id_contrato";
$tdatasecop[".googleLikeFields"][] = "secop.referencia_del_contrato";
$tdatasecop[".googleLikeFields"][] = "secop.estado_contrato";
$tdatasecop[".googleLikeFields"][] = "secop.codigo_de_categoria_principal";
$tdatasecop[".googleLikeFields"][] = "secop.descripcion_del_proceso";
$tdatasecop[".googleLikeFields"][] = "secop.tipo_de_contrato";
$tdatasecop[".googleLikeFields"][] = "secop.modalidad_de_contratacion";
$tdatasecop[".googleLikeFields"][] = "secop.justificacion_modalidad_de";
$tdatasecop[".googleLikeFields"][] = "secop.fecha_de_firma";
$tdatasecop[".googleLikeFields"][] = "secop.fecha_de_inicio_del_contrato";
$tdatasecop[".googleLikeFields"][] = "secop.fecha_de_fin_del_contrato";
$tdatasecop[".googleLikeFields"][] = "secop.fecha_de_inicio_de_ejecucion";
$tdatasecop[".googleLikeFields"][] = "secop.fecha_de_fin_de_ejecucion";
$tdatasecop[".googleLikeFields"][] = "secop.condiciones_de_entrega";
$tdatasecop[".googleLikeFields"][] = "secop.tipodocproveedor";
$tdatasecop[".googleLikeFields"][] = "secop.documento_proveedor";
$tdatasecop[".googleLikeFields"][] = "secop.proveedor_adjudicado";
$tdatasecop[".googleLikeFields"][] = "secop.es_grupo";
$tdatasecop[".googleLikeFields"][] = "secop.es_pyme";
$tdatasecop[".googleLikeFields"][] = "secop.habilita_pago_adelantado";
$tdatasecop[".googleLikeFields"][] = "secop.liquidaci_n";
$tdatasecop[".googleLikeFields"][] = "secop.obligaci_n_ambiental";
$tdatasecop[".googleLikeFields"][] = "secop.obligaciones_postconsumo";
$tdatasecop[".googleLikeFields"][] = "secop.reversion";
$tdatasecop[".googleLikeFields"][] = "secop.valor_del_contrato";
$tdatasecop[".googleLikeFields"][] = "secop.valor_de_pago_adelantado";
$tdatasecop[".googleLikeFields"][] = "secop.valor_facturado";
$tdatasecop[".googleLikeFields"][] = "secop.valor_pendiente_de_pago";
$tdatasecop[".googleLikeFields"][] = "secop.valor_pagado";
$tdatasecop[".googleLikeFields"][] = "secop.valor_amortizado";
$tdatasecop[".googleLikeFields"][] = "secop.valor_pendiente_de";
$tdatasecop[".googleLikeFields"][] = "secop.valor_pendiente_de_ejecucion";
$tdatasecop[".googleLikeFields"][] = "secop.estado_bpin";
$tdatasecop[".googleLikeFields"][] = "secop.c_digo_bpin";
$tdatasecop[".googleLikeFields"][] = "secop.anno_bpin";
$tdatasecop[".googleLikeFields"][] = "secop.saldo_cdp";
$tdatasecop[".googleLikeFields"][] = "secop.saldo_vigencia";
$tdatasecop[".googleLikeFields"][] = "secop.espostconflicto";
$tdatasecop[".googleLikeFields"][] = "secop.urlproceso.url";
$tdatasecop[".googleLikeFields"][] = "secop.destino_gasto";
$tdatasecop[".googleLikeFields"][] = "secop.origen_de_los_recursos";
$tdatasecop[".googleLikeFields"][] = "secop.d_as_adicionados";
$tdatasecop[".googleLikeFields"][] = "secop.puntos_del_acuerdo";
$tdatasecop[".googleLikeFields"][] = "secop.pilares_del_acuerdo";



$tdatasecop[".tableType"] = "list";

$tdatasecop[".printerPageOrientation"] = 0;
$tdatasecop[".nPrinterPageScale"] = 100;

$tdatasecop[".nPrinterSplitRecords"] = 40;

$tdatasecop[".geocodingEnabled"] = false;










$tdatasecop[".pageSize"] = 20;

$tdatasecop[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasecop[".strOrderBy"] = $tstrOrderBy;

$tdatasecop[".orderindexes"] = array();

$tdatasecop[".sqlHead"] = "SELECT secop_id,  	`secop.nombre_entidad`,  	`secop.nit_entidad`,  	`secop.departamento`,  	`secop.ciudad`,  	`secop.localizaci_n`,  	`secop.orden`,  	`secop.sector`,  	`secop.rama`,  	`secop.entidad_centralizada`,  	`secop.proceso_de_compra`,  	`secop.id_contrato`,  	`secop.referencia_del_contrato`,  	`secop.estado_contrato`,  	`secop.codigo_de_categoria_principal`,  	`secop.descripcion_del_proceso`,  	`secop.tipo_de_contrato`,  	`secop.modalidad_de_contratacion`,  	`secop.justificacion_modalidad_de`,  	`secop.fecha_de_firma`,  	`secop.fecha_de_inicio_del_contrato`,  	`secop.fecha_de_fin_del_contrato`,  	`secop.fecha_de_inicio_de_ejecucion`,  	`secop.fecha_de_fin_de_ejecucion`,  	`secop.condiciones_de_entrega`,  	`secop.tipodocproveedor`,  	`secop.documento_proveedor`,  	`secop.proveedor_adjudicado`,  	`secop.es_grupo`,  	`secop.es_pyme`,  	`secop.habilita_pago_adelantado`,  	`secop.liquidaci_n`,  	`secop.obligaci_n_ambiental`,  	`secop.obligaciones_postconsumo`,  	`secop.reversion`,  	`secop.valor_del_contrato`,  	`secop.valor_de_pago_adelantado`,  	`secop.valor_facturado`,  	`secop.valor_pendiente_de_pago`,  	`secop.valor_pagado`,  	`secop.valor_amortizado`,  	`secop.valor_pendiente_de`,  	`secop.valor_pendiente_de_ejecucion`,  	`secop.estado_bpin`,  	`secop.c_digo_bpin`,  	`secop.anno_bpin`,  	`secop.saldo_cdp`,  	`secop.saldo_vigencia`,  	`secop.espostconflicto`,  	`secop.urlproceso.url`,  	`secop.destino_gasto`,  	`secop.origen_de_los_recursos`,  	`secop.d_as_adicionados`,  	`secop.puntos_del_acuerdo`,  	`secop.pilares_del_acuerdo`";
$tdatasecop[".sqlFrom"] = "FROM secop";
$tdatasecop[".sqlWhereExpr"] = "";
$tdatasecop[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasecop[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasecop[".arrGroupsPerPage"] = $arrGPP;

$tdatasecop[".highlightSearchResults"] = true;

$tableKeyssecop = array();
$tableKeyssecop[] = "secop_id";
$tdatasecop[".Keys"] = $tableKeyssecop;


$tdatasecop[".hideMobileList"] = array();




//	secop_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "secop_id";
	$fdata["GoodName"] = "secop_id";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "secop_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "secop_id";

	
	
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


	$tdatasecop["secop_id"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop_id";
//	secop.nombre_entidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "secop.nombre_entidad";
	$fdata["GoodName"] = "secop_nombre_entidad";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_nombre_entidad");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.nombre_entidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.nombre_entidad`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.nombre_entidad"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.nombre_entidad";
//	secop.nit_entidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "secop.nit_entidad";
	$fdata["GoodName"] = "secop_nit_entidad";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_nit_entidad");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.nit_entidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.nit_entidad`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.nit_entidad"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.nit_entidad";
//	secop.departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "secop.departamento";
	$fdata["GoodName"] = "secop_departamento";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_departamento");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.departamento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.departamento`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.departamento"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.departamento";
//	secop.ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "secop.ciudad";
	$fdata["GoodName"] = "secop_ciudad";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_ciudad");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.ciudad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.ciudad`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.ciudad"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.ciudad";
//	secop.localizaci_n
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "secop.localizaci_n";
	$fdata["GoodName"] = "secop_localizaci_n";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_localizaci_n");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.localizaci_n";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.localizaci_n`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.localizaci_n"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.localizaci_n";
//	secop.orden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "secop.orden";
	$fdata["GoodName"] = "secop_orden";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_orden");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.orden";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.orden`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.orden"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.orden";
//	secop.sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "secop.sector";
	$fdata["GoodName"] = "secop_sector";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_sector");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.sector";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.sector`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.sector"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.sector";
//	secop.rama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "secop.rama";
	$fdata["GoodName"] = "secop_rama";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_rama");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.rama";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.rama`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.rama"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.rama";
//	secop.entidad_centralizada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "secop.entidad_centralizada";
	$fdata["GoodName"] = "secop_entidad_centralizada";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_entidad_centralizada");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.entidad_centralizada";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.entidad_centralizada`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.entidad_centralizada"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.entidad_centralizada";
//	secop.proceso_de_compra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "secop.proceso_de_compra";
	$fdata["GoodName"] = "secop_proceso_de_compra";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_proceso_de_compra");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.proceso_de_compra";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.proceso_de_compra`";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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


	$tdatasecop["secop.proceso_de_compra"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.proceso_de_compra";
//	secop.id_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "secop.id_contrato";
	$fdata["GoodName"] = "secop_id_contrato";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_id_contrato");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.id_contrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.id_contrato`";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatasecop["secop.id_contrato"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.id_contrato";
//	secop.referencia_del_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "secop.referencia_del_contrato";
	$fdata["GoodName"] = "secop_referencia_del_contrato";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_referencia_del_contrato");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.referencia_del_contrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.referencia_del_contrato`";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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


	$tdatasecop["secop.referencia_del_contrato"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.referencia_del_contrato";
//	secop.estado_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "secop.estado_contrato";
	$fdata["GoodName"] = "secop_estado_contrato";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_estado_contrato");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.estado_contrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.estado_contrato`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.estado_contrato"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.estado_contrato";
//	secop.codigo_de_categoria_principal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "secop.codigo_de_categoria_principal";
	$fdata["GoodName"] = "secop_codigo_de_categoria_principal";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_codigo_de_categoria_principal");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.codigo_de_categoria_principal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.codigo_de_categoria_principal`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.codigo_de_categoria_principal"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.codigo_de_categoria_principal";
//	secop.descripcion_del_proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "secop.descripcion_del_proceso";
	$fdata["GoodName"] = "secop_descripcion_del_proceso";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_descripcion_del_proceso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.descripcion_del_proceso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.descripcion_del_proceso`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.descripcion_del_proceso"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.descripcion_del_proceso";
//	secop.tipo_de_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "secop.tipo_de_contrato";
	$fdata["GoodName"] = "secop_tipo_de_contrato";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_tipo_de_contrato");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.tipo_de_contrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.tipo_de_contrato`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.tipo_de_contrato"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.tipo_de_contrato";
//	secop.modalidad_de_contratacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "secop.modalidad_de_contratacion";
	$fdata["GoodName"] = "secop_modalidad_de_contratacion";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_modalidad_de_contratacion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.modalidad_de_contratacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.modalidad_de_contratacion`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.modalidad_de_contratacion"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.modalidad_de_contratacion";
//	secop.justificacion_modalidad_de
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "secop.justificacion_modalidad_de";
	$fdata["GoodName"] = "secop_justificacion_modalidad_de";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_justificacion_modalidad_de");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.justificacion_modalidad_de";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.justificacion_modalidad_de`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.justificacion_modalidad_de"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.justificacion_modalidad_de";
//	secop.fecha_de_firma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "secop.fecha_de_firma";
	$fdata["GoodName"] = "secop_fecha_de_firma";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_fecha_de_firma");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.fecha_de_firma";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.fecha_de_firma`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.fecha_de_firma"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.fecha_de_firma";
//	secop.fecha_de_inicio_del_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "secop.fecha_de_inicio_del_contrato";
	$fdata["GoodName"] = "secop_fecha_de_inicio_del_contrato";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_fecha_de_inicio_del_contrato");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "secop.fecha_de_inicio_del_contrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.fecha_de_inicio_del_contrato`";

	
	
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


	$tdatasecop["secop.fecha_de_inicio_del_contrato"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.fecha_de_inicio_del_contrato";
//	secop.fecha_de_fin_del_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "secop.fecha_de_fin_del_contrato";
	$fdata["GoodName"] = "secop_fecha_de_fin_del_contrato";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_fecha_de_fin_del_contrato");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "secop.fecha_de_fin_del_contrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.fecha_de_fin_del_contrato`";

	
	
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


	$tdatasecop["secop.fecha_de_fin_del_contrato"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.fecha_de_fin_del_contrato";
//	secop.fecha_de_inicio_de_ejecucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "secop.fecha_de_inicio_de_ejecucion";
	$fdata["GoodName"] = "secop_fecha_de_inicio_de_ejecucion";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_fecha_de_inicio_de_ejecucion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.fecha_de_inicio_de_ejecucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.fecha_de_inicio_de_ejecucion`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.fecha_de_inicio_de_ejecucion"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.fecha_de_inicio_de_ejecucion";
//	secop.fecha_de_fin_de_ejecucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "secop.fecha_de_fin_de_ejecucion";
	$fdata["GoodName"] = "secop_fecha_de_fin_de_ejecucion";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_fecha_de_fin_de_ejecucion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.fecha_de_fin_de_ejecucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.fecha_de_fin_de_ejecucion`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.fecha_de_fin_de_ejecucion"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.fecha_de_fin_de_ejecucion";
//	secop.condiciones_de_entrega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "secop.condiciones_de_entrega";
	$fdata["GoodName"] = "secop_condiciones_de_entrega";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_condiciones_de_entrega");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.condiciones_de_entrega";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.condiciones_de_entrega`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.condiciones_de_entrega"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.condiciones_de_entrega";
//	secop.tipodocproveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "secop.tipodocproveedor";
	$fdata["GoodName"] = "secop_tipodocproveedor";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_tipodocproveedor");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.tipodocproveedor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.tipodocproveedor`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.tipodocproveedor"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.tipodocproveedor";
//	secop.documento_proveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "secop.documento_proveedor";
	$fdata["GoodName"] = "secop_documento_proveedor";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_documento_proveedor");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.documento_proveedor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.documento_proveedor`";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatasecop["secop.documento_proveedor"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.documento_proveedor";
//	secop.proveedor_adjudicado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "secop.proveedor_adjudicado";
	$fdata["GoodName"] = "secop_proveedor_adjudicado";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_proveedor_adjudicado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.proveedor_adjudicado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.proveedor_adjudicado`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.proveedor_adjudicado"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.proveedor_adjudicado";
//	secop.es_grupo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "secop.es_grupo";
	$fdata["GoodName"] = "secop_es_grupo";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_es_grupo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.es_grupo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.es_grupo`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.es_grupo"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.es_grupo";
//	secop.es_pyme
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "secop.es_pyme";
	$fdata["GoodName"] = "secop_es_pyme";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_es_pyme");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.es_pyme";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.es_pyme`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.es_pyme"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.es_pyme";
//	secop.habilita_pago_adelantado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "secop.habilita_pago_adelantado";
	$fdata["GoodName"] = "secop_habilita_pago_adelantado";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_habilita_pago_adelantado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.habilita_pago_adelantado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.habilita_pago_adelantado`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.habilita_pago_adelantado"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.habilita_pago_adelantado";
//	secop.liquidaci_n
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "secop.liquidaci_n";
	$fdata["GoodName"] = "secop_liquidaci_n";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_liquidaci_n");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.liquidaci_n";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.liquidaci_n`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.liquidaci_n"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.liquidaci_n";
//	secop.obligaci_n_ambiental
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "secop.obligaci_n_ambiental";
	$fdata["GoodName"] = "secop_obligaci_n_ambiental";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_obligaci_n_ambiental");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.obligaci_n_ambiental";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.obligaci_n_ambiental`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.obligaci_n_ambiental"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.obligaci_n_ambiental";
//	secop.obligaciones_postconsumo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "secop.obligaciones_postconsumo";
	$fdata["GoodName"] = "secop_obligaciones_postconsumo";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_obligaciones_postconsumo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.obligaciones_postconsumo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.obligaciones_postconsumo`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.obligaciones_postconsumo"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.obligaciones_postconsumo";
//	secop.reversion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "secop.reversion";
	$fdata["GoodName"] = "secop_reversion";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_reversion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.reversion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.reversion`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.reversion"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.reversion";
//	secop.valor_del_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "secop.valor_del_contrato";
	$fdata["GoodName"] = "secop_valor_del_contrato";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_valor_del_contrato");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.valor_del_contrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.valor_del_contrato`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.valor_del_contrato"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.valor_del_contrato";
//	secop.valor_de_pago_adelantado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "secop.valor_de_pago_adelantado";
	$fdata["GoodName"] = "secop_valor_de_pago_adelantado";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_valor_de_pago_adelantado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.valor_de_pago_adelantado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.valor_de_pago_adelantado`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.valor_de_pago_adelantado"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.valor_de_pago_adelantado";
//	secop.valor_facturado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "secop.valor_facturado";
	$fdata["GoodName"] = "secop_valor_facturado";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_valor_facturado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.valor_facturado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.valor_facturado`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.valor_facturado"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.valor_facturado";
//	secop.valor_pendiente_de_pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "secop.valor_pendiente_de_pago";
	$fdata["GoodName"] = "secop_valor_pendiente_de_pago";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_valor_pendiente_de_pago");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.valor_pendiente_de_pago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.valor_pendiente_de_pago`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.valor_pendiente_de_pago"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.valor_pendiente_de_pago";
//	secop.valor_pagado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "secop.valor_pagado";
	$fdata["GoodName"] = "secop_valor_pagado";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_valor_pagado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.valor_pagado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.valor_pagado`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.valor_pagado"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.valor_pagado";
//	secop.valor_amortizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "secop.valor_amortizado";
	$fdata["GoodName"] = "secop_valor_amortizado";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_valor_amortizado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.valor_amortizado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.valor_amortizado`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.valor_amortizado"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.valor_amortizado";
//	secop.valor_pendiente_de
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "secop.valor_pendiente_de";
	$fdata["GoodName"] = "secop_valor_pendiente_de";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_valor_pendiente_de");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.valor_pendiente_de";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.valor_pendiente_de`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.valor_pendiente_de"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.valor_pendiente_de";
//	secop.valor_pendiente_de_ejecucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "secop.valor_pendiente_de_ejecucion";
	$fdata["GoodName"] = "secop_valor_pendiente_de_ejecucion";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_valor_pendiente_de_ejecucion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.valor_pendiente_de_ejecucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.valor_pendiente_de_ejecucion`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.valor_pendiente_de_ejecucion"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.valor_pendiente_de_ejecucion";
//	secop.estado_bpin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "secop.estado_bpin";
	$fdata["GoodName"] = "secop_estado_bpin";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_estado_bpin");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.estado_bpin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.estado_bpin`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.estado_bpin"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.estado_bpin";
//	secop.c_digo_bpin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "secop.c_digo_bpin";
	$fdata["GoodName"] = "secop_c_digo_bpin";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_c_digo_bpin");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.c_digo_bpin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.c_digo_bpin`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.c_digo_bpin"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.c_digo_bpin";
//	secop.anno_bpin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "secop.anno_bpin";
	$fdata["GoodName"] = "secop_anno_bpin";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_anno_bpin");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.anno_bpin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.anno_bpin`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.anno_bpin"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.anno_bpin";
//	secop.saldo_cdp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "secop.saldo_cdp";
	$fdata["GoodName"] = "secop_saldo_cdp";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_saldo_cdp");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.saldo_cdp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.saldo_cdp`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.saldo_cdp"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.saldo_cdp";
//	secop.saldo_vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "secop.saldo_vigencia";
	$fdata["GoodName"] = "secop_saldo_vigencia";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_saldo_vigencia");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.saldo_vigencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.saldo_vigencia`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.saldo_vigencia"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.saldo_vigencia";
//	secop.espostconflicto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "secop.espostconflicto";
	$fdata["GoodName"] = "secop_espostconflicto";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_espostconflicto");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.espostconflicto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.espostconflicto`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.espostconflicto"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.espostconflicto";
//	secop.urlproceso.url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "secop.urlproceso.url";
	$fdata["GoodName"] = "secop_urlproceso_url";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_urlproceso_url");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.urlproceso.url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.urlproceso.url`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.urlproceso.url"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.urlproceso.url";
//	secop.destino_gasto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "secop.destino_gasto";
	$fdata["GoodName"] = "secop_destino_gasto";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_destino_gasto");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.destino_gasto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.destino_gasto`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.destino_gasto"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.destino_gasto";
//	secop.origen_de_los_recursos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "secop.origen_de_los_recursos";
	$fdata["GoodName"] = "secop_origen_de_los_recursos";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_origen_de_los_recursos");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.origen_de_los_recursos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.origen_de_los_recursos`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.origen_de_los_recursos"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.origen_de_los_recursos";
//	secop.d_as_adicionados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "secop.d_as_adicionados";
	$fdata["GoodName"] = "secop_d_as_adicionados";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_d_as_adicionados");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.d_as_adicionados";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.d_as_adicionados`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.d_as_adicionados"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.d_as_adicionados";
//	secop.puntos_del_acuerdo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "secop.puntos_del_acuerdo";
	$fdata["GoodName"] = "secop_puntos_del_acuerdo";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_puntos_del_acuerdo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.puntos_del_acuerdo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.puntos_del_acuerdo`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.puntos_del_acuerdo"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.puntos_del_acuerdo";
//	secop.pilares_del_acuerdo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "secop.pilares_del_acuerdo";
	$fdata["GoodName"] = "secop_pilares_del_acuerdo";
	$fdata["ownerTable"] = "secop";
	$fdata["Label"] = GetFieldLabel("secop","secop_pilares_del_acuerdo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "secop.pilares_del_acuerdo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`secop.pilares_del_acuerdo`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasecop["secop.pilares_del_acuerdo"] = $fdata;
		$tdatasecop[".searchableFields"][] = "secop.pilares_del_acuerdo";


$tables_data["secop"]=&$tdatasecop;
$field_labels["secop"] = &$fieldLabelssecop;
$fieldToolTips["secop"] = &$fieldToolTipssecop;
$placeHolders["secop"] = &$placeHolderssecop;
$page_titles["secop"] = &$pageTitlessecop;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["secop"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["secop"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_secop()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "secop_id,  	`secop.nombre_entidad`,  	`secop.nit_entidad`,  	`secop.departamento`,  	`secop.ciudad`,  	`secop.localizaci_n`,  	`secop.orden`,  	`secop.sector`,  	`secop.rama`,  	`secop.entidad_centralizada`,  	`secop.proceso_de_compra`,  	`secop.id_contrato`,  	`secop.referencia_del_contrato`,  	`secop.estado_contrato`,  	`secop.codigo_de_categoria_principal`,  	`secop.descripcion_del_proceso`,  	`secop.tipo_de_contrato`,  	`secop.modalidad_de_contratacion`,  	`secop.justificacion_modalidad_de`,  	`secop.fecha_de_firma`,  	`secop.fecha_de_inicio_del_contrato`,  	`secop.fecha_de_fin_del_contrato`,  	`secop.fecha_de_inicio_de_ejecucion`,  	`secop.fecha_de_fin_de_ejecucion`,  	`secop.condiciones_de_entrega`,  	`secop.tipodocproveedor`,  	`secop.documento_proveedor`,  	`secop.proveedor_adjudicado`,  	`secop.es_grupo`,  	`secop.es_pyme`,  	`secop.habilita_pago_adelantado`,  	`secop.liquidaci_n`,  	`secop.obligaci_n_ambiental`,  	`secop.obligaciones_postconsumo`,  	`secop.reversion`,  	`secop.valor_del_contrato`,  	`secop.valor_de_pago_adelantado`,  	`secop.valor_facturado`,  	`secop.valor_pendiente_de_pago`,  	`secop.valor_pagado`,  	`secop.valor_amortizado`,  	`secop.valor_pendiente_de`,  	`secop.valor_pendiente_de_ejecucion`,  	`secop.estado_bpin`,  	`secop.c_digo_bpin`,  	`secop.anno_bpin`,  	`secop.saldo_cdp`,  	`secop.saldo_vigencia`,  	`secop.espostconflicto`,  	`secop.urlproceso.url`,  	`secop.destino_gasto`,  	`secop.origen_de_los_recursos`,  	`secop.d_as_adicionados`,  	`secop.puntos_del_acuerdo`,  	`secop.pilares_del_acuerdo`";
$proto0["m_strFrom"] = "FROM secop";
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
	"m_strName" => "secop_id",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto6["m_sql"] = "secop_id";
$proto6["m_srcTableName"] = "secop";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.nombre_entidad",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto8["m_sql"] = "`secop.nombre_entidad`";
$proto8["m_srcTableName"] = "secop";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.nit_entidad",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto10["m_sql"] = "`secop.nit_entidad`";
$proto10["m_srcTableName"] = "secop";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.departamento",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto12["m_sql"] = "`secop.departamento`";
$proto12["m_srcTableName"] = "secop";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.ciudad",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto14["m_sql"] = "`secop.ciudad`";
$proto14["m_srcTableName"] = "secop";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.localizaci_n",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto16["m_sql"] = "`secop.localizaci_n`";
$proto16["m_srcTableName"] = "secop";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.orden",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto18["m_sql"] = "`secop.orden`";
$proto18["m_srcTableName"] = "secop";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.sector",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto20["m_sql"] = "`secop.sector`";
$proto20["m_srcTableName"] = "secop";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.rama",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto22["m_sql"] = "`secop.rama`";
$proto22["m_srcTableName"] = "secop";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.entidad_centralizada",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto24["m_sql"] = "`secop.entidad_centralizada`";
$proto24["m_srcTableName"] = "secop";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.proceso_de_compra",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto26["m_sql"] = "`secop.proceso_de_compra`";
$proto26["m_srcTableName"] = "secop";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.id_contrato",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto28["m_sql"] = "`secop.id_contrato`";
$proto28["m_srcTableName"] = "secop";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.referencia_del_contrato",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto30["m_sql"] = "`secop.referencia_del_contrato`";
$proto30["m_srcTableName"] = "secop";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.estado_contrato",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto32["m_sql"] = "`secop.estado_contrato`";
$proto32["m_srcTableName"] = "secop";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.codigo_de_categoria_principal",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto34["m_sql"] = "`secop.codigo_de_categoria_principal`";
$proto34["m_srcTableName"] = "secop";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.descripcion_del_proceso",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto36["m_sql"] = "`secop.descripcion_del_proceso`";
$proto36["m_srcTableName"] = "secop";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.tipo_de_contrato",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto38["m_sql"] = "`secop.tipo_de_contrato`";
$proto38["m_srcTableName"] = "secop";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.modalidad_de_contratacion",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto40["m_sql"] = "`secop.modalidad_de_contratacion`";
$proto40["m_srcTableName"] = "secop";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.justificacion_modalidad_de",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto42["m_sql"] = "`secop.justificacion_modalidad_de`";
$proto42["m_srcTableName"] = "secop";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.fecha_de_firma",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto44["m_sql"] = "`secop.fecha_de_firma`";
$proto44["m_srcTableName"] = "secop";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.fecha_de_inicio_del_contrato",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto46["m_sql"] = "`secop.fecha_de_inicio_del_contrato`";
$proto46["m_srcTableName"] = "secop";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.fecha_de_fin_del_contrato",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto48["m_sql"] = "`secop.fecha_de_fin_del_contrato`";
$proto48["m_srcTableName"] = "secop";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.fecha_de_inicio_de_ejecucion",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto50["m_sql"] = "`secop.fecha_de_inicio_de_ejecucion`";
$proto50["m_srcTableName"] = "secop";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.fecha_de_fin_de_ejecucion",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto52["m_sql"] = "`secop.fecha_de_fin_de_ejecucion`";
$proto52["m_srcTableName"] = "secop";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.condiciones_de_entrega",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto54["m_sql"] = "`secop.condiciones_de_entrega`";
$proto54["m_srcTableName"] = "secop";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.tipodocproveedor",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto56["m_sql"] = "`secop.tipodocproveedor`";
$proto56["m_srcTableName"] = "secop";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.documento_proveedor",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto58["m_sql"] = "`secop.documento_proveedor`";
$proto58["m_srcTableName"] = "secop";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.proveedor_adjudicado",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto60["m_sql"] = "`secop.proveedor_adjudicado`";
$proto60["m_srcTableName"] = "secop";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.es_grupo",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto62["m_sql"] = "`secop.es_grupo`";
$proto62["m_srcTableName"] = "secop";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.es_pyme",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto64["m_sql"] = "`secop.es_pyme`";
$proto64["m_srcTableName"] = "secop";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.habilita_pago_adelantado",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto66["m_sql"] = "`secop.habilita_pago_adelantado`";
$proto66["m_srcTableName"] = "secop";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.liquidaci_n",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto68["m_sql"] = "`secop.liquidaci_n`";
$proto68["m_srcTableName"] = "secop";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.obligaci_n_ambiental",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto70["m_sql"] = "`secop.obligaci_n_ambiental`";
$proto70["m_srcTableName"] = "secop";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.obligaciones_postconsumo",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto72["m_sql"] = "`secop.obligaciones_postconsumo`";
$proto72["m_srcTableName"] = "secop";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.reversion",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto74["m_sql"] = "`secop.reversion`";
$proto74["m_srcTableName"] = "secop";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.valor_del_contrato",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto76["m_sql"] = "`secop.valor_del_contrato`";
$proto76["m_srcTableName"] = "secop";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.valor_de_pago_adelantado",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto78["m_sql"] = "`secop.valor_de_pago_adelantado`";
$proto78["m_srcTableName"] = "secop";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.valor_facturado",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto80["m_sql"] = "`secop.valor_facturado`";
$proto80["m_srcTableName"] = "secop";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.valor_pendiente_de_pago",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto82["m_sql"] = "`secop.valor_pendiente_de_pago`";
$proto82["m_srcTableName"] = "secop";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.valor_pagado",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto84["m_sql"] = "`secop.valor_pagado`";
$proto84["m_srcTableName"] = "secop";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.valor_amortizado",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto86["m_sql"] = "`secop.valor_amortizado`";
$proto86["m_srcTableName"] = "secop";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.valor_pendiente_de",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto88["m_sql"] = "`secop.valor_pendiente_de`";
$proto88["m_srcTableName"] = "secop";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.valor_pendiente_de_ejecucion",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto90["m_sql"] = "`secop.valor_pendiente_de_ejecucion`";
$proto90["m_srcTableName"] = "secop";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.estado_bpin",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto92["m_sql"] = "`secop.estado_bpin`";
$proto92["m_srcTableName"] = "secop";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.c_digo_bpin",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto94["m_sql"] = "`secop.c_digo_bpin`";
$proto94["m_srcTableName"] = "secop";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.anno_bpin",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto96["m_sql"] = "`secop.anno_bpin`";
$proto96["m_srcTableName"] = "secop";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.saldo_cdp",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto98["m_sql"] = "`secop.saldo_cdp`";
$proto98["m_srcTableName"] = "secop";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.saldo_vigencia",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto100["m_sql"] = "`secop.saldo_vigencia`";
$proto100["m_srcTableName"] = "secop";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.espostconflicto",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto102["m_sql"] = "`secop.espostconflicto`";
$proto102["m_srcTableName"] = "secop";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.urlproceso.url",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto104["m_sql"] = "`secop.urlproceso.url`";
$proto104["m_srcTableName"] = "secop";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.destino_gasto",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto106["m_sql"] = "`secop.destino_gasto`";
$proto106["m_srcTableName"] = "secop";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.origen_de_los_recursos",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto108["m_sql"] = "`secop.origen_de_los_recursos`";
$proto108["m_srcTableName"] = "secop";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.d_as_adicionados",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto110["m_sql"] = "`secop.d_as_adicionados`";
$proto110["m_srcTableName"] = "secop";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.puntos_del_acuerdo",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto112["m_sql"] = "`secop.puntos_del_acuerdo`";
$proto112["m_srcTableName"] = "secop";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "secop.pilares_del_acuerdo",
	"m_strTable" => "secop",
	"m_srcTableName" => "secop"
));

$proto114["m_sql"] = "`secop.pilares_del_acuerdo`";
$proto114["m_srcTableName"] = "secop";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto116=array();
$proto116["m_link"] = "SQLL_MAIN";
			$proto117=array();
$proto117["m_strName"] = "secop";
$proto117["m_srcTableName"] = "secop";
$proto117["m_columns"] = array();
$proto117["m_columns"][] = "secop_id";
$proto117["m_columns"][] = "secop.nombre_entidad";
$proto117["m_columns"][] = "secop.nit_entidad";
$proto117["m_columns"][] = "secop.departamento";
$proto117["m_columns"][] = "secop.ciudad";
$proto117["m_columns"][] = "secop.localizaci_n";
$proto117["m_columns"][] = "secop.orden";
$proto117["m_columns"][] = "secop.sector";
$proto117["m_columns"][] = "secop.rama";
$proto117["m_columns"][] = "secop.entidad_centralizada";
$proto117["m_columns"][] = "secop.proceso_de_compra";
$proto117["m_columns"][] = "secop.id_contrato";
$proto117["m_columns"][] = "secop.referencia_del_contrato";
$proto117["m_columns"][] = "secop.estado_contrato";
$proto117["m_columns"][] = "secop.codigo_de_categoria_principal";
$proto117["m_columns"][] = "secop.descripcion_del_proceso";
$proto117["m_columns"][] = "secop.tipo_de_contrato";
$proto117["m_columns"][] = "secop.modalidad_de_contratacion";
$proto117["m_columns"][] = "secop.justificacion_modalidad_de";
$proto117["m_columns"][] = "secop.fecha_de_firma";
$proto117["m_columns"][] = "secop.fecha_de_inicio_del_contrato";
$proto117["m_columns"][] = "secop.fecha_de_fin_del_contrato";
$proto117["m_columns"][] = "secop.fecha_de_inicio_de_ejecucion";
$proto117["m_columns"][] = "secop.fecha_de_fin_de_ejecucion";
$proto117["m_columns"][] = "secop.condiciones_de_entrega";
$proto117["m_columns"][] = "secop.tipodocproveedor";
$proto117["m_columns"][] = "secop.documento_proveedor";
$proto117["m_columns"][] = "secop.proveedor_adjudicado";
$proto117["m_columns"][] = "secop.es_grupo";
$proto117["m_columns"][] = "secop.es_pyme";
$proto117["m_columns"][] = "secop.habilita_pago_adelantado";
$proto117["m_columns"][] = "secop.liquidaci_n";
$proto117["m_columns"][] = "secop.obligaci_n_ambiental";
$proto117["m_columns"][] = "secop.obligaciones_postconsumo";
$proto117["m_columns"][] = "secop.reversion";
$proto117["m_columns"][] = "secop.valor_del_contrato";
$proto117["m_columns"][] = "secop.valor_de_pago_adelantado";
$proto117["m_columns"][] = "secop.valor_facturado";
$proto117["m_columns"][] = "secop.valor_pendiente_de_pago";
$proto117["m_columns"][] = "secop.valor_pagado";
$proto117["m_columns"][] = "secop.valor_amortizado";
$proto117["m_columns"][] = "secop.valor_pendiente_de";
$proto117["m_columns"][] = "secop.valor_pendiente_de_ejecucion";
$proto117["m_columns"][] = "secop.estado_bpin";
$proto117["m_columns"][] = "secop.c_digo_bpin";
$proto117["m_columns"][] = "secop.anno_bpin";
$proto117["m_columns"][] = "secop.saldo_cdp";
$proto117["m_columns"][] = "secop.saldo_vigencia";
$proto117["m_columns"][] = "secop.espostconflicto";
$proto117["m_columns"][] = "secop.urlproceso.url";
$proto117["m_columns"][] = "secop.destino_gasto";
$proto117["m_columns"][] = "secop.origen_de_los_recursos";
$proto117["m_columns"][] = "secop.d_as_adicionados";
$proto117["m_columns"][] = "secop.puntos_del_acuerdo";
$proto117["m_columns"][] = "secop.pilares_del_acuerdo";
$obj = new SQLTable($proto117);

$proto116["m_table"] = $obj;
$proto116["m_sql"] = "secop";
$proto116["m_alias"] = "";
$proto116["m_srcTableName"] = "secop";
$proto118=array();
$proto118["m_sql"] = "";
$proto118["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto118["m_column"]=$obj;
$proto118["m_contained"] = array();
$proto118["m_strCase"] = "";
$proto118["m_havingmode"] = false;
$proto118["m_inBrackets"] = false;
$proto118["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto118);

$proto116["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto116);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="secop";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_secop = createSqlQuery_secop();


	
										;

																																																							

$tdatasecop[".sqlquery"] = $queryData_secop;

$tableEvents["secop"] = new eventsBase;
$tdatasecop[".hasEvents"] = false;

?>