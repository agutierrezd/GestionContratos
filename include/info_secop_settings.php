<?php



$tdatainfo_secop = array();
$tdatainfo_secop[".searchableFields"] = array();
$tdatainfo_secop[".ShortName"] = "info_secop";
$tdatainfo_secop[".OwnerID"] = "";
$tdatainfo_secop[".OriginalTable"] = "info_secop";


$tdatainfo_secop[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainfo_secop[".originalPagesByType"] = $tdatainfo_secop[".pagesByType"];
$tdatainfo_secop[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainfo_secop[".originalPages"] = $tdatainfo_secop[".pages"];
$tdatainfo_secop[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainfo_secop[".originalDefaultPages"] = $tdatainfo_secop[".defaultPages"];

//	field labels
$fieldLabelsinfo_secop = array();
$fieldToolTipsinfo_secop = array();
$pageTitlesinfo_secop = array();
$placeHoldersinfo_secop = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinfo_secop["Spanish"] = array();
	$fieldToolTipsinfo_secop["Spanish"] = array();
	$placeHoldersinfo_secop["Spanish"] = array();
	$pageTitlesinfo_secop["Spanish"] = array();
	$fieldLabelsinfo_secop["Spanish"]["id"] = "Id";
	$fieldToolTipsinfo_secop["Spanish"]["id"] = "";
	$placeHoldersinfo_secop["Spanish"]["id"] = "";
	$fieldLabelsinfo_secop["Spanish"]["nit_entidad"] = "Nit Entidad";
	$fieldToolTipsinfo_secop["Spanish"]["nit_entidad"] = "";
	$placeHoldersinfo_secop["Spanish"]["nit_entidad"] = "";
	$fieldLabelsinfo_secop["Spanish"]["proceso_de_compra"] = "Proceso De Compra";
	$fieldToolTipsinfo_secop["Spanish"]["proceso_de_compra"] = "";
	$placeHoldersinfo_secop["Spanish"]["proceso_de_compra"] = "";
	$fieldLabelsinfo_secop["Spanish"]["id_contrato"] = "Id Contrato";
	$fieldToolTipsinfo_secop["Spanish"]["id_contrato"] = "";
	$placeHoldersinfo_secop["Spanish"]["id_contrato"] = "";
	$fieldLabelsinfo_secop["Spanish"]["referencia_del_contrato"] = "Referencia Del Contrato";
	$fieldToolTipsinfo_secop["Spanish"]["referencia_del_contrato"] = "";
	$placeHoldersinfo_secop["Spanish"]["referencia_del_contrato"] = "";
	$fieldLabelsinfo_secop["Spanish"]["estado_contrato"] = "Estado Contrato";
	$fieldToolTipsinfo_secop["Spanish"]["estado_contrato"] = "";
	$placeHoldersinfo_secop["Spanish"]["estado_contrato"] = "";
	$fieldLabelsinfo_secop["Spanish"]["codigo_de_categoria_principal"] = "Codigo De Categoria Principal";
	$fieldToolTipsinfo_secop["Spanish"]["codigo_de_categoria_principal"] = "";
	$placeHoldersinfo_secop["Spanish"]["codigo_de_categoria_principal"] = "";
	$fieldLabelsinfo_secop["Spanish"]["descripcion_del_proceso"] = "Descripcion Del Proceso";
	$fieldToolTipsinfo_secop["Spanish"]["descripcion_del_proceso"] = "";
	$placeHoldersinfo_secop["Spanish"]["descripcion_del_proceso"] = "";
	$fieldLabelsinfo_secop["Spanish"]["tipo_de_contrato"] = "Tipo De Contrato";
	$fieldToolTipsinfo_secop["Spanish"]["tipo_de_contrato"] = "";
	$placeHoldersinfo_secop["Spanish"]["tipo_de_contrato"] = "";
	$fieldLabelsinfo_secop["Spanish"]["modalidad_de_contratacion"] = "Modalidad De Contratacion";
	$fieldToolTipsinfo_secop["Spanish"]["modalidad_de_contratacion"] = "";
	$placeHoldersinfo_secop["Spanish"]["modalidad_de_contratacion"] = "";
	$fieldLabelsinfo_secop["Spanish"]["justificacion_modalidad_de"] = "Justificacion Modalidad De";
	$fieldToolTipsinfo_secop["Spanish"]["justificacion_modalidad_de"] = "";
	$placeHoldersinfo_secop["Spanish"]["justificacion_modalidad_de"] = "";
	$fieldLabelsinfo_secop["Spanish"]["fecha_de_firma"] = "Fecha De Firma";
	$fieldToolTipsinfo_secop["Spanish"]["fecha_de_firma"] = "";
	$placeHoldersinfo_secop["Spanish"]["fecha_de_firma"] = "";
	$fieldLabelsinfo_secop["Spanish"]["fecha_de_inicio_del_contrato"] = "Fecha De Inicio Del Contrato";
	$fieldToolTipsinfo_secop["Spanish"]["fecha_de_inicio_del_contrato"] = "";
	$placeHoldersinfo_secop["Spanish"]["fecha_de_inicio_del_contrato"] = "";
	$fieldLabelsinfo_secop["Spanish"]["fecha_de_fin_del_contrato"] = "Fecha De Fin Del Contrato";
	$fieldToolTipsinfo_secop["Spanish"]["fecha_de_fin_del_contrato"] = "";
	$placeHoldersinfo_secop["Spanish"]["fecha_de_fin_del_contrato"] = "";
	$fieldLabelsinfo_secop["Spanish"]["fecha_de_inicio_de_ejecucion"] = "Fecha De Inicio De Ejecucion";
	$fieldToolTipsinfo_secop["Spanish"]["fecha_de_inicio_de_ejecucion"] = "";
	$placeHoldersinfo_secop["Spanish"]["fecha_de_inicio_de_ejecucion"] = "";
	$fieldLabelsinfo_secop["Spanish"]["fecha_de_fin_de_ejecucion"] = "Fecha De Fin De Ejecucion";
	$fieldToolTipsinfo_secop["Spanish"]["fecha_de_fin_de_ejecucion"] = "";
	$placeHoldersinfo_secop["Spanish"]["fecha_de_fin_de_ejecucion"] = "";
	$fieldLabelsinfo_secop["Spanish"]["condiciones_de_entrega"] = "Condiciones De Entrega";
	$fieldToolTipsinfo_secop["Spanish"]["condiciones_de_entrega"] = "";
	$placeHoldersinfo_secop["Spanish"]["condiciones_de_entrega"] = "";
	$fieldLabelsinfo_secop["Spanish"]["tipodocproveedor"] = "Tipodocproveedor";
	$fieldToolTipsinfo_secop["Spanish"]["tipodocproveedor"] = "";
	$placeHoldersinfo_secop["Spanish"]["tipodocproveedor"] = "";
	$fieldLabelsinfo_secop["Spanish"]["documento_proveedor"] = "Documento Proveedor";
	$fieldToolTipsinfo_secop["Spanish"]["documento_proveedor"] = "";
	$placeHoldersinfo_secop["Spanish"]["documento_proveedor"] = "";
	$fieldLabelsinfo_secop["Spanish"]["proveedor_adjudicado"] = "Proveedor Adjudicado";
	$fieldToolTipsinfo_secop["Spanish"]["proveedor_adjudicado"] = "";
	$placeHoldersinfo_secop["Spanish"]["proveedor_adjudicado"] = "";
	$fieldLabelsinfo_secop["Spanish"]["es_grupo"] = "Es Grupo";
	$fieldToolTipsinfo_secop["Spanish"]["es_grupo"] = "";
	$placeHoldersinfo_secop["Spanish"]["es_grupo"] = "";
	$fieldLabelsinfo_secop["Spanish"]["es_pyme"] = "Es Pyme";
	$fieldToolTipsinfo_secop["Spanish"]["es_pyme"] = "";
	$placeHoldersinfo_secop["Spanish"]["es_pyme"] = "";
	$fieldLabelsinfo_secop["Spanish"]["habilita_pago_adelantado"] = "Habilita Pago Adelantado";
	$fieldToolTipsinfo_secop["Spanish"]["habilita_pago_adelantado"] = "";
	$placeHoldersinfo_secop["Spanish"]["habilita_pago_adelantado"] = "";
	$fieldLabelsinfo_secop["Spanish"]["liquidaci_n"] = "Liquidaci N";
	$fieldToolTipsinfo_secop["Spanish"]["liquidaci_n"] = "";
	$placeHoldersinfo_secop["Spanish"]["liquidaci_n"] = "";
	$fieldLabelsinfo_secop["Spanish"]["obligaci_n_ambiental"] = "Obligaci N Ambiental";
	$fieldToolTipsinfo_secop["Spanish"]["obligaci_n_ambiental"] = "";
	$placeHoldersinfo_secop["Spanish"]["obligaci_n_ambiental"] = "";
	$fieldLabelsinfo_secop["Spanish"]["obligaciones_postconsumo"] = "Obligaciones Postconsumo";
	$fieldToolTipsinfo_secop["Spanish"]["obligaciones_postconsumo"] = "";
	$placeHoldersinfo_secop["Spanish"]["obligaciones_postconsumo"] = "";
	$fieldLabelsinfo_secop["Spanish"]["reversion"] = "Reversion";
	$fieldToolTipsinfo_secop["Spanish"]["reversion"] = "";
	$placeHoldersinfo_secop["Spanish"]["reversion"] = "";
	$fieldLabelsinfo_secop["Spanish"]["valor_del_contrato"] = "Valor Del Contrato";
	$fieldToolTipsinfo_secop["Spanish"]["valor_del_contrato"] = "";
	$placeHoldersinfo_secop["Spanish"]["valor_del_contrato"] = "";
	$fieldLabelsinfo_secop["Spanish"]["valor_de_pago_adelantado"] = "Valor De Pago Adelantado";
	$fieldToolTipsinfo_secop["Spanish"]["valor_de_pago_adelantado"] = "";
	$placeHoldersinfo_secop["Spanish"]["valor_de_pago_adelantado"] = "";
	$fieldLabelsinfo_secop["Spanish"]["valor_facturado"] = "Valor Facturado";
	$fieldToolTipsinfo_secop["Spanish"]["valor_facturado"] = "";
	$placeHoldersinfo_secop["Spanish"]["valor_facturado"] = "";
	$fieldLabelsinfo_secop["Spanish"]["valor_pendiente_de_pago"] = "Valor Pendiente De Pago";
	$fieldToolTipsinfo_secop["Spanish"]["valor_pendiente_de_pago"] = "";
	$placeHoldersinfo_secop["Spanish"]["valor_pendiente_de_pago"] = "";
	$fieldLabelsinfo_secop["Spanish"]["valor_pagado"] = "Valor Pagado";
	$fieldToolTipsinfo_secop["Spanish"]["valor_pagado"] = "";
	$placeHoldersinfo_secop["Spanish"]["valor_pagado"] = "";
	$fieldLabelsinfo_secop["Spanish"]["valor_amortizado"] = "Valor Amortizado";
	$fieldToolTipsinfo_secop["Spanish"]["valor_amortizado"] = "";
	$placeHoldersinfo_secop["Spanish"]["valor_amortizado"] = "";
	$fieldLabelsinfo_secop["Spanish"]["valor_pendiente_de"] = "Valor Pendiente De";
	$fieldToolTipsinfo_secop["Spanish"]["valor_pendiente_de"] = "";
	$placeHoldersinfo_secop["Spanish"]["valor_pendiente_de"] = "";
	$fieldLabelsinfo_secop["Spanish"]["valor_pendiente_de_ejecucion"] = "Valor Pendiente De Ejecucion";
	$fieldToolTipsinfo_secop["Spanish"]["valor_pendiente_de_ejecucion"] = "";
	$placeHoldersinfo_secop["Spanish"]["valor_pendiente_de_ejecucion"] = "";
	$fieldLabelsinfo_secop["Spanish"]["estado_bpin"] = "Estado Bpin";
	$fieldToolTipsinfo_secop["Spanish"]["estado_bpin"] = "";
	$placeHoldersinfo_secop["Spanish"]["estado_bpin"] = "";
	$fieldLabelsinfo_secop["Spanish"]["c_digo_bpin"] = "C Digo Bpin";
	$fieldToolTipsinfo_secop["Spanish"]["c_digo_bpin"] = "";
	$placeHoldersinfo_secop["Spanish"]["c_digo_bpin"] = "";
	$fieldLabelsinfo_secop["Spanish"]["anno_bpin"] = "Anno Bpin";
	$fieldToolTipsinfo_secop["Spanish"]["anno_bpin"] = "";
	$placeHoldersinfo_secop["Spanish"]["anno_bpin"] = "";
	$fieldLabelsinfo_secop["Spanish"]["saldo_cdp"] = "Saldo Cdp";
	$fieldToolTipsinfo_secop["Spanish"]["saldo_cdp"] = "";
	$placeHoldersinfo_secop["Spanish"]["saldo_cdp"] = "";
	$fieldLabelsinfo_secop["Spanish"]["saldo_vigencia"] = "Saldo Vigencia";
	$fieldToolTipsinfo_secop["Spanish"]["saldo_vigencia"] = "";
	$placeHoldersinfo_secop["Spanish"]["saldo_vigencia"] = "";
	$fieldLabelsinfo_secop["Spanish"]["espostconflicto"] = "Espostconflicto";
	$fieldToolTipsinfo_secop["Spanish"]["espostconflicto"] = "";
	$placeHoldersinfo_secop["Spanish"]["espostconflicto"] = "";
	$fieldLabelsinfo_secop["Spanish"]["urlproceso"] = "Urlproceso";
	$fieldToolTipsinfo_secop["Spanish"]["urlproceso"] = "";
	$placeHoldersinfo_secop["Spanish"]["urlproceso"] = "";
	$fieldLabelsinfo_secop["Spanish"]["destino_gasto"] = "Destino Gasto";
	$fieldToolTipsinfo_secop["Spanish"]["destino_gasto"] = "";
	$placeHoldersinfo_secop["Spanish"]["destino_gasto"] = "";
	$fieldLabelsinfo_secop["Spanish"]["origen_de_los_recursos"] = "Origen De Los Recursos";
	$fieldToolTipsinfo_secop["Spanish"]["origen_de_los_recursos"] = "";
	$placeHoldersinfo_secop["Spanish"]["origen_de_los_recursos"] = "";
	$fieldLabelsinfo_secop["Spanish"]["d_as_adicionados"] = "D As Adicionados";
	$fieldToolTipsinfo_secop["Spanish"]["d_as_adicionados"] = "";
	$placeHoldersinfo_secop["Spanish"]["d_as_adicionados"] = "";
	$fieldLabelsinfo_secop["Spanish"]["puntos_del_acuerdo"] = "Puntos Del Acuerdo";
	$fieldToolTipsinfo_secop["Spanish"]["puntos_del_acuerdo"] = "";
	$placeHoldersinfo_secop["Spanish"]["puntos_del_acuerdo"] = "";
	$fieldLabelsinfo_secop["Spanish"]["pilares_del_acuerdo"] = "Pilares Del Acuerdo";
	$fieldToolTipsinfo_secop["Spanish"]["pilares_del_acuerdo"] = "";
	$placeHoldersinfo_secop["Spanish"]["pilares_del_acuerdo"] = "";
	if (count($fieldToolTipsinfo_secop["Spanish"]))
		$tdatainfo_secop[".isUseToolTips"] = true;
}


	$tdatainfo_secop[".NCSearch"] = true;



$tdatainfo_secop[".shortTableName"] = "info_secop";
$tdatainfo_secop[".nSecOptions"] = 0;

$tdatainfo_secop[".mainTableOwnerID"] = "";
$tdatainfo_secop[".entityType"] = 0;

$tdatainfo_secop[".strOriginalTableName"] = "info_secop";

	



$tdatainfo_secop[".showAddInPopup"] = false;

$tdatainfo_secop[".showEditInPopup"] = false;

$tdatainfo_secop[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainfo_secop[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainfo_secop[".listAjax"] = false;
//	temporary
$tdatainfo_secop[".listAjax"] = false;

	$tdatainfo_secop[".audit"] = true;

	$tdatainfo_secop[".locking"] = true;


$pages = $tdatainfo_secop[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainfo_secop[".edit"] = true;
	$tdatainfo_secop[".afterEditAction"] = 1;
	$tdatainfo_secop[".closePopupAfterEdit"] = 1;
	$tdatainfo_secop[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainfo_secop[".add"] = true;
$tdatainfo_secop[".afterAddAction"] = 1;
$tdatainfo_secop[".closePopupAfterAdd"] = 1;
$tdatainfo_secop[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainfo_secop[".list"] = true;
}



$tdatainfo_secop[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainfo_secop[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainfo_secop[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainfo_secop[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainfo_secop[".printFriendly"] = true;
}



$tdatainfo_secop[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainfo_secop[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainfo_secop[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainfo_secop[".isUseAjaxSuggest"] = true;

$tdatainfo_secop[".rowHighlite"] = true;



						

$tdatainfo_secop[".ajaxCodeSnippetAdded"] = false;

$tdatainfo_secop[".buttonsAdded"] = false;

$tdatainfo_secop[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainfo_secop[".isUseTimeForSearch"] = false;


$tdatainfo_secop[".badgeColor"] = "008B8B";


$tdatainfo_secop[".allSearchFields"] = array();
$tdatainfo_secop[".filterFields"] = array();
$tdatainfo_secop[".requiredSearchFields"] = array();

$tdatainfo_secop[".googleLikeFields"] = array();
$tdatainfo_secop[".googleLikeFields"][] = "id";
$tdatainfo_secop[".googleLikeFields"][] = "nit_entidad";
$tdatainfo_secop[".googleLikeFields"][] = "proceso_de_compra";
$tdatainfo_secop[".googleLikeFields"][] = "id_contrato";
$tdatainfo_secop[".googleLikeFields"][] = "referencia_del_contrato";
$tdatainfo_secop[".googleLikeFields"][] = "estado_contrato";
$tdatainfo_secop[".googleLikeFields"][] = "codigo_de_categoria_principal";
$tdatainfo_secop[".googleLikeFields"][] = "descripcion_del_proceso";
$tdatainfo_secop[".googleLikeFields"][] = "tipo_de_contrato";
$tdatainfo_secop[".googleLikeFields"][] = "modalidad_de_contratacion";
$tdatainfo_secop[".googleLikeFields"][] = "justificacion_modalidad_de";
$tdatainfo_secop[".googleLikeFields"][] = "fecha_de_firma";
$tdatainfo_secop[".googleLikeFields"][] = "fecha_de_inicio_del_contrato";
$tdatainfo_secop[".googleLikeFields"][] = "fecha_de_fin_del_contrato";
$tdatainfo_secop[".googleLikeFields"][] = "fecha_de_inicio_de_ejecucion";
$tdatainfo_secop[".googleLikeFields"][] = "fecha_de_fin_de_ejecucion";
$tdatainfo_secop[".googleLikeFields"][] = "condiciones_de_entrega";
$tdatainfo_secop[".googleLikeFields"][] = "tipodocproveedor";
$tdatainfo_secop[".googleLikeFields"][] = "documento_proveedor";
$tdatainfo_secop[".googleLikeFields"][] = "proveedor_adjudicado";
$tdatainfo_secop[".googleLikeFields"][] = "es_grupo";
$tdatainfo_secop[".googleLikeFields"][] = "es_pyme";
$tdatainfo_secop[".googleLikeFields"][] = "habilita_pago_adelantado";
$tdatainfo_secop[".googleLikeFields"][] = "liquidaci_n";
$tdatainfo_secop[".googleLikeFields"][] = "obligaci_n_ambiental";
$tdatainfo_secop[".googleLikeFields"][] = "obligaciones_postconsumo";
$tdatainfo_secop[".googleLikeFields"][] = "reversion";
$tdatainfo_secop[".googleLikeFields"][] = "valor_del_contrato";
$tdatainfo_secop[".googleLikeFields"][] = "valor_de_pago_adelantado";
$tdatainfo_secop[".googleLikeFields"][] = "valor_facturado";
$tdatainfo_secop[".googleLikeFields"][] = "valor_pendiente_de_pago";
$tdatainfo_secop[".googleLikeFields"][] = "valor_pagado";
$tdatainfo_secop[".googleLikeFields"][] = "valor_amortizado";
$tdatainfo_secop[".googleLikeFields"][] = "valor_pendiente_de";
$tdatainfo_secop[".googleLikeFields"][] = "valor_pendiente_de_ejecucion";
$tdatainfo_secop[".googleLikeFields"][] = "estado_bpin";
$tdatainfo_secop[".googleLikeFields"][] = "c_digo_bpin";
$tdatainfo_secop[".googleLikeFields"][] = "anno_bpin";
$tdatainfo_secop[".googleLikeFields"][] = "saldo_cdp";
$tdatainfo_secop[".googleLikeFields"][] = "saldo_vigencia";
$tdatainfo_secop[".googleLikeFields"][] = "espostconflicto";
$tdatainfo_secop[".googleLikeFields"][] = "urlproceso";
$tdatainfo_secop[".googleLikeFields"][] = "destino_gasto";
$tdatainfo_secop[".googleLikeFields"][] = "origen_de_los_recursos";
$tdatainfo_secop[".googleLikeFields"][] = "d_as_adicionados";
$tdatainfo_secop[".googleLikeFields"][] = "puntos_del_acuerdo";
$tdatainfo_secop[".googleLikeFields"][] = "pilares_del_acuerdo";



$tdatainfo_secop[".tableType"] = "list";

$tdatainfo_secop[".printerPageOrientation"] = 0;
$tdatainfo_secop[".nPrinterPageScale"] = 100;

$tdatainfo_secop[".nPrinterSplitRecords"] = 40;

$tdatainfo_secop[".geocodingEnabled"] = false;










$tdatainfo_secop[".pageSize"] = 20;

$tdatainfo_secop[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainfo_secop[".strOrderBy"] = $tstrOrderBy;

$tdatainfo_secop[".orderindexes"] = array();

$tdatainfo_secop[".sqlHead"] = "SELECT id,  nit_entidad,  proceso_de_compra,  id_contrato,  referencia_del_contrato,  estado_contrato,  codigo_de_categoria_principal,  descripcion_del_proceso,  tipo_de_contrato,  modalidad_de_contratacion,  justificacion_modalidad_de,  fecha_de_firma,  fecha_de_inicio_del_contrato,  fecha_de_fin_del_contrato,  fecha_de_inicio_de_ejecucion,  fecha_de_fin_de_ejecucion,  condiciones_de_entrega,  tipodocproveedor,  documento_proveedor,  proveedor_adjudicado,  es_grupo,  es_pyme,  habilita_pago_adelantado,  liquidaci_n,  obligaci_n_ambiental,  obligaciones_postconsumo,  reversion,  valor_del_contrato,  valor_de_pago_adelantado,  valor_facturado,  valor_pendiente_de_pago,  valor_pagado,  valor_amortizado,  valor_pendiente_de,  valor_pendiente_de_ejecucion,  estado_bpin,  c_digo_bpin,  anno_bpin,  saldo_cdp,  saldo_vigencia,  espostconflicto,  urlproceso,  destino_gasto,  origen_de_los_recursos,  d_as_adicionados,  puntos_del_acuerdo,  pilares_del_acuerdo";
$tdatainfo_secop[".sqlFrom"] = "FROM info_secop";
$tdatainfo_secop[".sqlWhereExpr"] = "(nit_entidad = '899999306') AND (estado_contrato = 'Activo')";
$tdatainfo_secop[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainfo_secop[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainfo_secop[".arrGroupsPerPage"] = $arrGPP;

$tdatainfo_secop[".highlightSearchResults"] = true;

$tableKeysinfo_secop = array();
$tableKeysinfo_secop[] = "id";
$tdatainfo_secop[".Keys"] = $tableKeysinfo_secop;


$tdatainfo_secop[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","id");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatainfo_secop["id"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "id";
//	nit_entidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nit_entidad";
	$fdata["GoodName"] = "nit_entidad";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","nit_entidad");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nit_entidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nit_entidad";

	
	
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


	$tdatainfo_secop["nit_entidad"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "nit_entidad";
//	proceso_de_compra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "proceso_de_compra";
	$fdata["GoodName"] = "proceso_de_compra";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","proceso_de_compra");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "proceso_de_compra";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "proceso_de_compra";

	
	
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


	$tdatainfo_secop["proceso_de_compra"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "proceso_de_compra";
//	id_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_contrato";
	$fdata["GoodName"] = "id_contrato";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","id_contrato");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "id_contrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_contrato";

	
	
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


	$tdatainfo_secop["id_contrato"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "id_contrato";
//	referencia_del_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "referencia_del_contrato";
	$fdata["GoodName"] = "referencia_del_contrato";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","referencia_del_contrato");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "referencia_del_contrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "referencia_del_contrato";

	
	
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


	$tdatainfo_secop["referencia_del_contrato"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "referencia_del_contrato";
//	estado_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "estado_contrato";
	$fdata["GoodName"] = "estado_contrato";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","estado_contrato");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "estado_contrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_contrato";

	
	
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


	$tdatainfo_secop["estado_contrato"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "estado_contrato";
//	codigo_de_categoria_principal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "codigo_de_categoria_principal";
	$fdata["GoodName"] = "codigo_de_categoria_principal";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","codigo_de_categoria_principal");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "codigo_de_categoria_principal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo_de_categoria_principal";

	
	
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


	$tdatainfo_secop["codigo_de_categoria_principal"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "codigo_de_categoria_principal";
//	descripcion_del_proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "descripcion_del_proceso";
	$fdata["GoodName"] = "descripcion_del_proceso";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","descripcion_del_proceso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "descripcion_del_proceso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_del_proceso";

	
	
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


	$tdatainfo_secop["descripcion_del_proceso"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "descripcion_del_proceso";
//	tipo_de_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tipo_de_contrato";
	$fdata["GoodName"] = "tipo_de_contrato";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","tipo_de_contrato");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "tipo_de_contrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_de_contrato";

	
	
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


	$tdatainfo_secop["tipo_de_contrato"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "tipo_de_contrato";
//	modalidad_de_contratacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "modalidad_de_contratacion";
	$fdata["GoodName"] = "modalidad_de_contratacion";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","modalidad_de_contratacion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "modalidad_de_contratacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "modalidad_de_contratacion";

	
	
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


	$tdatainfo_secop["modalidad_de_contratacion"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "modalidad_de_contratacion";
//	justificacion_modalidad_de
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "justificacion_modalidad_de";
	$fdata["GoodName"] = "justificacion_modalidad_de";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","justificacion_modalidad_de");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "justificacion_modalidad_de";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "justificacion_modalidad_de";

	
	
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


	$tdatainfo_secop["justificacion_modalidad_de"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "justificacion_modalidad_de";
//	fecha_de_firma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "fecha_de_firma";
	$fdata["GoodName"] = "fecha_de_firma";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","fecha_de_firma");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha_de_firma";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_firma";

	
	
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


	$tdatainfo_secop["fecha_de_firma"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "fecha_de_firma";
//	fecha_de_inicio_del_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "fecha_de_inicio_del_contrato";
	$fdata["GoodName"] = "fecha_de_inicio_del_contrato";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","fecha_de_inicio_del_contrato");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha_de_inicio_del_contrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_inicio_del_contrato";

	
	
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


	$tdatainfo_secop["fecha_de_inicio_del_contrato"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "fecha_de_inicio_del_contrato";
//	fecha_de_fin_del_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "fecha_de_fin_del_contrato";
	$fdata["GoodName"] = "fecha_de_fin_del_contrato";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","fecha_de_fin_del_contrato");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha_de_fin_del_contrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_fin_del_contrato";

	
	
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


	$tdatainfo_secop["fecha_de_fin_del_contrato"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "fecha_de_fin_del_contrato";
//	fecha_de_inicio_de_ejecucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "fecha_de_inicio_de_ejecucion";
	$fdata["GoodName"] = "fecha_de_inicio_de_ejecucion";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","fecha_de_inicio_de_ejecucion");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha_de_inicio_de_ejecucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_inicio_de_ejecucion";

	
	
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


	$tdatainfo_secop["fecha_de_inicio_de_ejecucion"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "fecha_de_inicio_de_ejecucion";
//	fecha_de_fin_de_ejecucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "fecha_de_fin_de_ejecucion";
	$fdata["GoodName"] = "fecha_de_fin_de_ejecucion";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","fecha_de_fin_de_ejecucion");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha_de_fin_de_ejecucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_fin_de_ejecucion";

	
	
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


	$tdatainfo_secop["fecha_de_fin_de_ejecucion"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "fecha_de_fin_de_ejecucion";
//	condiciones_de_entrega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "condiciones_de_entrega";
	$fdata["GoodName"] = "condiciones_de_entrega";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","condiciones_de_entrega");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "condiciones_de_entrega";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "condiciones_de_entrega";

	
	
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


	$tdatainfo_secop["condiciones_de_entrega"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "condiciones_de_entrega";
//	tipodocproveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "tipodocproveedor";
	$fdata["GoodName"] = "tipodocproveedor";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","tipodocproveedor");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "tipodocproveedor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipodocproveedor";

	
	
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


	$tdatainfo_secop["tipodocproveedor"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "tipodocproveedor";
//	documento_proveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "documento_proveedor";
	$fdata["GoodName"] = "documento_proveedor";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","documento_proveedor");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "documento_proveedor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documento_proveedor";

	
	
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


	$tdatainfo_secop["documento_proveedor"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "documento_proveedor";
//	proveedor_adjudicado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "proveedor_adjudicado";
	$fdata["GoodName"] = "proveedor_adjudicado";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","proveedor_adjudicado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "proveedor_adjudicado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "proveedor_adjudicado";

	
	
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


	$tdatainfo_secop["proveedor_adjudicado"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "proveedor_adjudicado";
//	es_grupo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "es_grupo";
	$fdata["GoodName"] = "es_grupo";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","es_grupo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "es_grupo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "es_grupo";

	
	
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


	$tdatainfo_secop["es_grupo"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "es_grupo";
//	es_pyme
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "es_pyme";
	$fdata["GoodName"] = "es_pyme";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","es_pyme");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "es_pyme";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "es_pyme";

	
	
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


	$tdatainfo_secop["es_pyme"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "es_pyme";
//	habilita_pago_adelantado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "habilita_pago_adelantado";
	$fdata["GoodName"] = "habilita_pago_adelantado";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","habilita_pago_adelantado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "habilita_pago_adelantado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "habilita_pago_adelantado";

	
	
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


	$tdatainfo_secop["habilita_pago_adelantado"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "habilita_pago_adelantado";
//	liquidaci_n
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "liquidaci_n";
	$fdata["GoodName"] = "liquidaci_n";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","liquidaci_n");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "liquidaci_n";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "liquidaci_n";

	
	
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


	$tdatainfo_secop["liquidaci_n"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "liquidaci_n";
//	obligaci_n_ambiental
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "obligaci_n_ambiental";
	$fdata["GoodName"] = "obligaci_n_ambiental";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","obligaci_n_ambiental");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "obligaci_n_ambiental";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "obligaci_n_ambiental";

	
	
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


	$tdatainfo_secop["obligaci_n_ambiental"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "obligaci_n_ambiental";
//	obligaciones_postconsumo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "obligaciones_postconsumo";
	$fdata["GoodName"] = "obligaciones_postconsumo";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","obligaciones_postconsumo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "obligaciones_postconsumo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "obligaciones_postconsumo";

	
	
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


	$tdatainfo_secop["obligaciones_postconsumo"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "obligaciones_postconsumo";
//	reversion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "reversion";
	$fdata["GoodName"] = "reversion";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","reversion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "reversion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reversion";

	
	
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


	$tdatainfo_secop["reversion"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "reversion";
//	valor_del_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "valor_del_contrato";
	$fdata["GoodName"] = "valor_del_contrato";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","valor_del_contrato");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "valor_del_contrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_del_contrato";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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


	$tdatainfo_secop["valor_del_contrato"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "valor_del_contrato";
//	valor_de_pago_adelantado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "valor_de_pago_adelantado";
	$fdata["GoodName"] = "valor_de_pago_adelantado";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","valor_de_pago_adelantado");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "valor_de_pago_adelantado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_de_pago_adelantado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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


	$tdatainfo_secop["valor_de_pago_adelantado"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "valor_de_pago_adelantado";
//	valor_facturado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "valor_facturado";
	$fdata["GoodName"] = "valor_facturado";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","valor_facturado");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "valor_facturado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_facturado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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


	$tdatainfo_secop["valor_facturado"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "valor_facturado";
//	valor_pendiente_de_pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "valor_pendiente_de_pago";
	$fdata["GoodName"] = "valor_pendiente_de_pago";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","valor_pendiente_de_pago");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "valor_pendiente_de_pago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_pendiente_de_pago";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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


	$tdatainfo_secop["valor_pendiente_de_pago"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "valor_pendiente_de_pago";
//	valor_pagado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "valor_pagado";
	$fdata["GoodName"] = "valor_pagado";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","valor_pagado");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "valor_pagado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_pagado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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


	$tdatainfo_secop["valor_pagado"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "valor_pagado";
//	valor_amortizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "valor_amortizado";
	$fdata["GoodName"] = "valor_amortizado";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","valor_amortizado");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "valor_amortizado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_amortizado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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


	$tdatainfo_secop["valor_amortizado"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "valor_amortizado";
//	valor_pendiente_de
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "valor_pendiente_de";
	$fdata["GoodName"] = "valor_pendiente_de";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","valor_pendiente_de");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "valor_pendiente_de";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_pendiente_de";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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


	$tdatainfo_secop["valor_pendiente_de"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "valor_pendiente_de";
//	valor_pendiente_de_ejecucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "valor_pendiente_de_ejecucion";
	$fdata["GoodName"] = "valor_pendiente_de_ejecucion";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","valor_pendiente_de_ejecucion");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "valor_pendiente_de_ejecucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_pendiente_de_ejecucion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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


	$tdatainfo_secop["valor_pendiente_de_ejecucion"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "valor_pendiente_de_ejecucion";
//	estado_bpin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "estado_bpin";
	$fdata["GoodName"] = "estado_bpin";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","estado_bpin");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "estado_bpin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_bpin";

	
	
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


	$tdatainfo_secop["estado_bpin"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "estado_bpin";
//	c_digo_bpin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "c_digo_bpin";
	$fdata["GoodName"] = "c_digo_bpin";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","c_digo_bpin");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "c_digo_bpin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c_digo_bpin";

	
	
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


	$tdatainfo_secop["c_digo_bpin"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "c_digo_bpin";
//	anno_bpin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "anno_bpin";
	$fdata["GoodName"] = "anno_bpin";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","anno_bpin");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "anno_bpin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anno_bpin";

	
	
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


	$tdatainfo_secop["anno_bpin"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "anno_bpin";
//	saldo_cdp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "saldo_cdp";
	$fdata["GoodName"] = "saldo_cdp";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","saldo_cdp");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "saldo_cdp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "saldo_cdp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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


	$tdatainfo_secop["saldo_cdp"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "saldo_cdp";
//	saldo_vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "saldo_vigencia";
	$fdata["GoodName"] = "saldo_vigencia";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","saldo_vigencia");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "saldo_vigencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "saldo_vigencia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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


	$tdatainfo_secop["saldo_vigencia"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "saldo_vigencia";
//	espostconflicto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "espostconflicto";
	$fdata["GoodName"] = "espostconflicto";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","espostconflicto");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "espostconflicto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "espostconflicto";

	
	
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


	$tdatainfo_secop["espostconflicto"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "espostconflicto";
//	urlproceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "urlproceso";
	$fdata["GoodName"] = "urlproceso";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","urlproceso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "urlproceso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "urlproceso";

	
	
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


	$tdatainfo_secop["urlproceso"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "urlproceso";
//	destino_gasto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "destino_gasto";
	$fdata["GoodName"] = "destino_gasto";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","destino_gasto");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "destino_gasto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "destino_gasto";

	
	
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


	$tdatainfo_secop["destino_gasto"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "destino_gasto";
//	origen_de_los_recursos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "origen_de_los_recursos";
	$fdata["GoodName"] = "origen_de_los_recursos";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","origen_de_los_recursos");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "origen_de_los_recursos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "origen_de_los_recursos";

	
	
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


	$tdatainfo_secop["origen_de_los_recursos"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "origen_de_los_recursos";
//	d_as_adicionados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "d_as_adicionados";
	$fdata["GoodName"] = "d_as_adicionados";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","d_as_adicionados");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "d_as_adicionados";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "d_as_adicionados";

	
	
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


	$tdatainfo_secop["d_as_adicionados"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "d_as_adicionados";
//	puntos_del_acuerdo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "puntos_del_acuerdo";
	$fdata["GoodName"] = "puntos_del_acuerdo";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","puntos_del_acuerdo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "puntos_del_acuerdo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "puntos_del_acuerdo";

	
	
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


	$tdatainfo_secop["puntos_del_acuerdo"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "puntos_del_acuerdo";
//	pilares_del_acuerdo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "pilares_del_acuerdo";
	$fdata["GoodName"] = "pilares_del_acuerdo";
	$fdata["ownerTable"] = "info_secop";
	$fdata["Label"] = GetFieldLabel("info_secop","pilares_del_acuerdo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pilares_del_acuerdo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pilares_del_acuerdo";

	
	
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


	$tdatainfo_secop["pilares_del_acuerdo"] = $fdata;
		$tdatainfo_secop[".searchableFields"][] = "pilares_del_acuerdo";


$tables_data["info_secop"]=&$tdatainfo_secop;
$field_labels["info_secop"] = &$fieldLabelsinfo_secop;
$fieldToolTips["info_secop"] = &$fieldToolTipsinfo_secop;
$placeHolders["info_secop"] = &$placeHoldersinfo_secop;
$page_titles["info_secop"] = &$pageTitlesinfo_secop;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["info_secop"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["info_secop"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_info_secop()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  nit_entidad,  proceso_de_compra,  id_contrato,  referencia_del_contrato,  estado_contrato,  codigo_de_categoria_principal,  descripcion_del_proceso,  tipo_de_contrato,  modalidad_de_contratacion,  justificacion_modalidad_de,  fecha_de_firma,  fecha_de_inicio_del_contrato,  fecha_de_fin_del_contrato,  fecha_de_inicio_de_ejecucion,  fecha_de_fin_de_ejecucion,  condiciones_de_entrega,  tipodocproveedor,  documento_proveedor,  proveedor_adjudicado,  es_grupo,  es_pyme,  habilita_pago_adelantado,  liquidaci_n,  obligaci_n_ambiental,  obligaciones_postconsumo,  reversion,  valor_del_contrato,  valor_de_pago_adelantado,  valor_facturado,  valor_pendiente_de_pago,  valor_pagado,  valor_amortizado,  valor_pendiente_de,  valor_pendiente_de_ejecucion,  estado_bpin,  c_digo_bpin,  anno_bpin,  saldo_cdp,  saldo_vigencia,  espostconflicto,  urlproceso,  destino_gasto,  origen_de_los_recursos,  d_as_adicionados,  puntos_del_acuerdo,  pilares_del_acuerdo";
$proto0["m_strFrom"] = "FROM info_secop";
$proto0["m_strWhere"] = "(nit_entidad = '899999306') AND (estado_contrato = 'Activo')";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(nit_entidad = '899999306') AND (estado_contrato = 'Activo')";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(nit_entidad = '899999306') AND (estado_contrato = 'Activo')"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "nit_entidad = '899999306'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "nit_entidad",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= '899999306'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "estado_contrato = 'Activo'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "estado_contrato",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= 'Activo'";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto10["m_sql"] = "id";
$proto10["m_srcTableName"] = "info_secop";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nit_entidad",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto12["m_sql"] = "nit_entidad";
$proto12["m_srcTableName"] = "info_secop";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "proceso_de_compra",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto14["m_sql"] = "proceso_de_compra";
$proto14["m_srcTableName"] = "info_secop";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id_contrato",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto16["m_sql"] = "id_contrato";
$proto16["m_srcTableName"] = "info_secop";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "referencia_del_contrato",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto18["m_sql"] = "referencia_del_contrato";
$proto18["m_srcTableName"] = "info_secop";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_contrato",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto20["m_sql"] = "estado_contrato";
$proto20["m_srcTableName"] = "info_secop";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo_de_categoria_principal",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto22["m_sql"] = "codigo_de_categoria_principal";
$proto22["m_srcTableName"] = "info_secop";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_del_proceso",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto24["m_sql"] = "descripcion_del_proceso";
$proto24["m_srcTableName"] = "info_secop";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_de_contrato",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto26["m_sql"] = "tipo_de_contrato";
$proto26["m_srcTableName"] = "info_secop";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "modalidad_de_contratacion",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto28["m_sql"] = "modalidad_de_contratacion";
$proto28["m_srcTableName"] = "info_secop";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "justificacion_modalidad_de",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto30["m_sql"] = "justificacion_modalidad_de";
$proto30["m_srcTableName"] = "info_secop";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_firma",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto32["m_sql"] = "fecha_de_firma";
$proto32["m_srcTableName"] = "info_secop";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_inicio_del_contrato",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto34["m_sql"] = "fecha_de_inicio_del_contrato";
$proto34["m_srcTableName"] = "info_secop";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_fin_del_contrato",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto36["m_sql"] = "fecha_de_fin_del_contrato";
$proto36["m_srcTableName"] = "info_secop";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_inicio_de_ejecucion",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto38["m_sql"] = "fecha_de_inicio_de_ejecucion";
$proto38["m_srcTableName"] = "info_secop";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_fin_de_ejecucion",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto40["m_sql"] = "fecha_de_fin_de_ejecucion";
$proto40["m_srcTableName"] = "info_secop";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "condiciones_de_entrega",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto42["m_sql"] = "condiciones_de_entrega";
$proto42["m_srcTableName"] = "info_secop";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "tipodocproveedor",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto44["m_sql"] = "tipodocproveedor";
$proto44["m_srcTableName"] = "info_secop";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "documento_proveedor",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto46["m_sql"] = "documento_proveedor";
$proto46["m_srcTableName"] = "info_secop";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "proveedor_adjudicado",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto48["m_sql"] = "proveedor_adjudicado";
$proto48["m_srcTableName"] = "info_secop";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "es_grupo",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto50["m_sql"] = "es_grupo";
$proto50["m_srcTableName"] = "info_secop";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "es_pyme",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto52["m_sql"] = "es_pyme";
$proto52["m_srcTableName"] = "info_secop";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "habilita_pago_adelantado",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto54["m_sql"] = "habilita_pago_adelantado";
$proto54["m_srcTableName"] = "info_secop";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "liquidaci_n",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto56["m_sql"] = "liquidaci_n";
$proto56["m_srcTableName"] = "info_secop";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "obligaci_n_ambiental",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto58["m_sql"] = "obligaci_n_ambiental";
$proto58["m_srcTableName"] = "info_secop";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "obligaciones_postconsumo",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto60["m_sql"] = "obligaciones_postconsumo";
$proto60["m_srcTableName"] = "info_secop";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "reversion",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto62["m_sql"] = "reversion";
$proto62["m_srcTableName"] = "info_secop";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_del_contrato",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto64["m_sql"] = "valor_del_contrato";
$proto64["m_srcTableName"] = "info_secop";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_de_pago_adelantado",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto66["m_sql"] = "valor_de_pago_adelantado";
$proto66["m_srcTableName"] = "info_secop";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_facturado",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto68["m_sql"] = "valor_facturado";
$proto68["m_srcTableName"] = "info_secop";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_pendiente_de_pago",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto70["m_sql"] = "valor_pendiente_de_pago";
$proto70["m_srcTableName"] = "info_secop";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_pagado",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto72["m_sql"] = "valor_pagado";
$proto72["m_srcTableName"] = "info_secop";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_amortizado",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto74["m_sql"] = "valor_amortizado";
$proto74["m_srcTableName"] = "info_secop";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_pendiente_de",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto76["m_sql"] = "valor_pendiente_de";
$proto76["m_srcTableName"] = "info_secop";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_pendiente_de_ejecucion",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto78["m_sql"] = "valor_pendiente_de_ejecucion";
$proto78["m_srcTableName"] = "info_secop";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_bpin",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto80["m_sql"] = "estado_bpin";
$proto80["m_srcTableName"] = "info_secop";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "c_digo_bpin",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto82["m_sql"] = "c_digo_bpin";
$proto82["m_srcTableName"] = "info_secop";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "anno_bpin",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto84["m_sql"] = "anno_bpin";
$proto84["m_srcTableName"] = "info_secop";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "saldo_cdp",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto86["m_sql"] = "saldo_cdp";
$proto86["m_srcTableName"] = "info_secop";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "saldo_vigencia",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto88["m_sql"] = "saldo_vigencia";
$proto88["m_srcTableName"] = "info_secop";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "espostconflicto",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto90["m_sql"] = "espostconflicto";
$proto90["m_srcTableName"] = "info_secop";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "urlproceso",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto92["m_sql"] = "urlproceso";
$proto92["m_srcTableName"] = "info_secop";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "destino_gasto",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto94["m_sql"] = "destino_gasto";
$proto94["m_srcTableName"] = "info_secop";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "origen_de_los_recursos",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto96["m_sql"] = "origen_de_los_recursos";
$proto96["m_srcTableName"] = "info_secop";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "d_as_adicionados",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto98["m_sql"] = "d_as_adicionados";
$proto98["m_srcTableName"] = "info_secop";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "puntos_del_acuerdo",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto100["m_sql"] = "puntos_del_acuerdo";
$proto100["m_srcTableName"] = "info_secop";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "pilares_del_acuerdo",
	"m_strTable" => "info_secop",
	"m_srcTableName" => "info_secop"
));

$proto102["m_sql"] = "pilares_del_acuerdo";
$proto102["m_srcTableName"] = "info_secop";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto104=array();
$proto104["m_link"] = "SQLL_MAIN";
			$proto105=array();
$proto105["m_strName"] = "info_secop";
$proto105["m_srcTableName"] = "info_secop";
$proto105["m_columns"] = array();
$proto105["m_columns"][] = "autonum";
$proto105["m_columns"][] = "id";
$proto105["m_columns"][] = "nombre_entidad";
$proto105["m_columns"][] = "nit_entidad";
$proto105["m_columns"][] = "departamento";
$proto105["m_columns"][] = "ciudad";
$proto105["m_columns"][] = "localizaci_n";
$proto105["m_columns"][] = "orden";
$proto105["m_columns"][] = "sector";
$proto105["m_columns"][] = "rama";
$proto105["m_columns"][] = "entidad_centralizada";
$proto105["m_columns"][] = "proceso_de_compra";
$proto105["m_columns"][] = "id_contrato";
$proto105["m_columns"][] = "referencia_del_contrato";
$proto105["m_columns"][] = "estado_contrato";
$proto105["m_columns"][] = "codigo_de_categoria_principal";
$proto105["m_columns"][] = "descripcion_del_proceso";
$proto105["m_columns"][] = "tipo_de_contrato";
$proto105["m_columns"][] = "modalidad_de_contratacion";
$proto105["m_columns"][] = "justificacion_modalidad_de";
$proto105["m_columns"][] = "fecha_de_firma";
$proto105["m_columns"][] = "fecha_de_inicio_del_contrato";
$proto105["m_columns"][] = "fecha_de_fin_del_contrato";
$proto105["m_columns"][] = "fecha_de_inicio_de_ejecucion";
$proto105["m_columns"][] = "fecha_de_fin_de_ejecucion";
$proto105["m_columns"][] = "condiciones_de_entrega";
$proto105["m_columns"][] = "tipodocproveedor";
$proto105["m_columns"][] = "documento_proveedor";
$proto105["m_columns"][] = "proveedor_adjudicado";
$proto105["m_columns"][] = "es_grupo";
$proto105["m_columns"][] = "es_pyme";
$proto105["m_columns"][] = "habilita_pago_adelantado";
$proto105["m_columns"][] = "liquidaci_n";
$proto105["m_columns"][] = "obligaci_n_ambiental";
$proto105["m_columns"][] = "obligaciones_postconsumo";
$proto105["m_columns"][] = "reversion";
$proto105["m_columns"][] = "valor_del_contrato";
$proto105["m_columns"][] = "valor_de_pago_adelantado";
$proto105["m_columns"][] = "valor_facturado";
$proto105["m_columns"][] = "valor_pendiente_de_pago";
$proto105["m_columns"][] = "valor_pagado";
$proto105["m_columns"][] = "valor_amortizado";
$proto105["m_columns"][] = "valor_pendiente_de";
$proto105["m_columns"][] = "valor_pendiente_de_ejecucion";
$proto105["m_columns"][] = "estado_bpin";
$proto105["m_columns"][] = "c_digo_bpin";
$proto105["m_columns"][] = "anno_bpin";
$proto105["m_columns"][] = "saldo_cdp";
$proto105["m_columns"][] = "saldo_vigencia";
$proto105["m_columns"][] = "espostconflicto";
$proto105["m_columns"][] = "urlproceso";
$proto105["m_columns"][] = "destino_gasto";
$proto105["m_columns"][] = "origen_de_los_recursos";
$proto105["m_columns"][] = "d_as_adicionados";
$proto105["m_columns"][] = "puntos_del_acuerdo";
$proto105["m_columns"][] = "pilares_del_acuerdo";
$obj = new SQLTable($proto105);

$proto104["m_table"] = $obj;
$proto104["m_sql"] = "info_secop";
$proto104["m_alias"] = "";
$proto104["m_srcTableName"] = "info_secop";
$proto106=array();
$proto106["m_sql"] = "";
$proto106["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto106["m_column"]=$obj;
$proto106["m_contained"] = array();
$proto106["m_strCase"] = "";
$proto106["m_havingmode"] = false;
$proto106["m_inBrackets"] = false;
$proto106["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto106);

$proto104["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto104);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="info_secop";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_info_secop = createSqlQuery_info_secop();


	
										;

																																															

$tdatainfo_secop[".sqlquery"] = $queryData_info_secop;

$tableEvents["info_secop"] = new eventsBase;
$tdatainfo_secop[".hasEvents"] = false;

?>