<?php



$tdataq_informes_supervision_activos = array();
$tdataq_informes_supervision_activos[".searchableFields"] = array();
$tdataq_informes_supervision_activos[".ShortName"] = "q_informes_supervision_activos";
$tdataq_informes_supervision_activos[".OwnerID"] = "cont_hash_fk";
$tdataq_informes_supervision_activos[".OriginalTable"] = "q_informes_supervision_activos";


$tdataq_informes_supervision_activos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataq_informes_supervision_activos[".originalPagesByType"] = $tdataq_informes_supervision_activos[".pagesByType"];
$tdataq_informes_supervision_activos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataq_informes_supervision_activos[".originalPages"] = $tdataq_informes_supervision_activos[".pages"];
$tdataq_informes_supervision_activos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataq_informes_supervision_activos[".originalDefaultPages"] = $tdataq_informes_supervision_activos[".defaultPages"];

//	field labels
$fieldLabelsq_informes_supervision_activos = array();
$fieldToolTipsq_informes_supervision_activos = array();
$pageTitlesq_informes_supervision_activos = array();
$placeHoldersq_informes_supervision_activos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_informes_supervision_activos["Spanish"] = array();
	$fieldToolTipsq_informes_supervision_activos["Spanish"] = array();
	$placeHoldersq_informes_supervision_activos["Spanish"] = array();
	$pageTitlesq_informes_supervision_activos["Spanish"] = array();
	$fieldLabelsq_informes_supervision_activos["Spanish"]["interventor_id"] = "Interventor Id";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["interventor_id"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["interventor_id"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["sys_user"] = "Sys User";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["sys_user"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["sys_user"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["id_cont_fk"] = "Id Cont Fk";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["id_cont_fk"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["id_cont_fk"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["documento_id"] = "Documento Id";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["documento_id"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["documento_id"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["nombres"] = "Nombres";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["nombres"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["nombres"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["apellidos"] = "Apellidos";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["apellidos"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["apellidos"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["sup_mailnot"] = "Sup Mailnot";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["sup_mailnot"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["sup_mailnot"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["documento"] = "Documento";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["documento"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["documento"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["nombre_razon"] = "Nombre / Razón Social";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["nombre_razon"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["nombre_razon"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["cont_estado"] = "Estado";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["cont_estado"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["cont_estado"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["contnumero"] = "Número de contrato";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["contnumero"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["contnumero"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["cont_fecha_inicio"] = "Fecha inicio";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["cont_fecha_inicio"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["cont_fecha_inicio"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["cont_fechafinal"] = "Fecha final";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["cont_fechafinal"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["cont_fechafinal"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["cont_valormensual_base"] = "Valor mensual Base";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["cont_valormensual_base"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["cont_valormensual_base"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["cont_valormensual_iva"] = "Valor mensual Iva";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["cont_valormensual_iva"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["cont_valormensual_iva"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["cont_valormensual"] = "Pago mensual";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["cont_valormensual"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["cont_valormensual"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["sup_status"] = "Sup Status";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["sup_status"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["sup_status"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["cont_hash_fk"] = "Username";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["cont_hash_fk"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["cont_hash_fk"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["idusrglobal_fk"] = "Idusrglobal Fk";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["idusrglobal_fk"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["idusrglobal_fk"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["cont_ano"] = "Vigencia";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["cont_ano"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["cont_ano"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["prenumero"] = "CDP";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["prenumero"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["prenumero"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["numregistro"] = "RP";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["numregistro"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["numregistro"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["cont_periodicidad"] = "Periodicidad";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["cont_periodicidad"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["cont_periodicidad"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["cont_informessug"] = "Informes sugeridos";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["cont_informessug"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["cont_informessug"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["cont_valorinicial"] = "Valor del contrato";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["cont_valorinicial"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["cont_valorinicial"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["cont_acta_liquidacion"] = "Requiere acta de liquidación";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["cont_acta_liquidacion"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["cont_acta_liquidacion"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["cont_objeto"] = "Objeto";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["cont_objeto"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["cont_objeto"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["cont_obligaciones"] = "Obligaciones";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["cont_obligaciones"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["cont_obligaciones"] = "";
	$fieldLabelsq_informes_supervision_activos["Spanish"]["cont_plazo"] = "Plazo";
	$fieldToolTipsq_informes_supervision_activos["Spanish"]["cont_plazo"] = "";
	$placeHoldersq_informes_supervision_activos["Spanish"]["cont_plazo"] = "";
	$pageTitlesq_informes_supervision_activos["Spanish"]["view"] = "Información del contrato:";
	if (count($fieldToolTipsq_informes_supervision_activos["Spanish"]))
		$tdataq_informes_supervision_activos[".isUseToolTips"] = true;
}


	$tdataq_informes_supervision_activos[".NCSearch"] = true;



$tdataq_informes_supervision_activos[".shortTableName"] = "q_informes_supervision_activos";
$tdataq_informes_supervision_activos[".nSecOptions"] = 1;

$tdataq_informes_supervision_activos[".mainTableOwnerID"] = "cont_hash_fk";
$tdataq_informes_supervision_activos[".entityType"] = 0;

$tdataq_informes_supervision_activos[".strOriginalTableName"] = "q_informes_supervision_activos";

	



$tdataq_informes_supervision_activos[".showAddInPopup"] = false;

$tdataq_informes_supervision_activos[".showEditInPopup"] = false;

$tdataq_informes_supervision_activos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataq_informes_supervision_activos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataq_informes_supervision_activos[".listAjax"] = false;
//	temporary
$tdataq_informes_supervision_activos[".listAjax"] = false;

	$tdataq_informes_supervision_activos[".audit"] = false;

	$tdataq_informes_supervision_activos[".locking"] = false;


$pages = $tdataq_informes_supervision_activos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_informes_supervision_activos[".edit"] = true;
	$tdataq_informes_supervision_activos[".afterEditAction"] = 1;
	$tdataq_informes_supervision_activos[".closePopupAfterEdit"] = 1;
	$tdataq_informes_supervision_activos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_informes_supervision_activos[".add"] = true;
$tdataq_informes_supervision_activos[".afterAddAction"] = 1;
$tdataq_informes_supervision_activos[".closePopupAfterAdd"] = 1;
$tdataq_informes_supervision_activos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_informes_supervision_activos[".list"] = true;
}



$tdataq_informes_supervision_activos[".strSortControlSettingsJSON"] = "";

$tdataq_informes_supervision_activos[".strClickActionJSON"] = "{\"fields\":{\"apellidos\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cont_acta_liquidacion\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cont_ano\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cont_estado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cont_fecha_inicio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cont_fechafinal\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cont_hash_fk\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cont_informessug\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cont_objeto\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cont_obligaciones\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cont_periodicidad\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cont_plazo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cont_valorinicial\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cont_valormensual\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cont_valormensual_base\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cont_valormensual_iva\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"contnumero\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"documento\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"documento_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id_cont_fk\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"idusrglobal_fk\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"interventor_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"nombre_razon\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}},\"nombres\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"numregistro\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"prenumero\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sup_mailnot\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sup_status\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sys_user\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdataq_informes_supervision_activos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_informes_supervision_activos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_informes_supervision_activos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_informes_supervision_activos[".printFriendly"] = true;
}



$tdataq_informes_supervision_activos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_informes_supervision_activos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_informes_supervision_activos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_informes_supervision_activos[".isUseAjaxSuggest"] = true;

$tdataq_informes_supervision_activos[".rowHighlite"] = true;



			

$tdataq_informes_supervision_activos[".ajaxCodeSnippetAdded"] = false;

$tdataq_informes_supervision_activos[".buttonsAdded"] = false;

$tdataq_informes_supervision_activos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_informes_supervision_activos[".isUseTimeForSearch"] = false;


$tdataq_informes_supervision_activos[".badgeColor"] = "DC143C";


$tdataq_informes_supervision_activos[".allSearchFields"] = array();
$tdataq_informes_supervision_activos[".filterFields"] = array();
$tdataq_informes_supervision_activos[".requiredSearchFields"] = array();

$tdataq_informes_supervision_activos[".googleLikeFields"] = array();
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "interventor_id";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "cont_hash_fk";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "sys_user";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "idusrglobal_fk";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "id_cont_fk";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "documento_id";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "nombres";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "apellidos";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "sup_mailnot";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "documento";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "nombre_razon";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "cont_estado";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "contnumero";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "cont_fecha_inicio";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "cont_fechafinal";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "cont_valormensual_base";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "cont_valormensual_iva";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "cont_valormensual";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "sup_status";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "cont_ano";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "prenumero";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "numregistro";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "cont_periodicidad";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "cont_informessug";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "cont_valorinicial";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "cont_acta_liquidacion";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "cont_objeto";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "cont_obligaciones";
$tdataq_informes_supervision_activos[".googleLikeFields"][] = "cont_plazo";



$tdataq_informes_supervision_activos[".tableType"] = "list";

$tdataq_informes_supervision_activos[".printerPageOrientation"] = 0;
$tdataq_informes_supervision_activos[".nPrinterPageScale"] = 100;

$tdataq_informes_supervision_activos[".nPrinterSplitRecords"] = 40;

$tdataq_informes_supervision_activos[".geocodingEnabled"] = false;




$tdataq_informes_supervision_activos[".isDisplayLoading"] = true;






$tdataq_informes_supervision_activos[".pageSize"] = 20;

$tdataq_informes_supervision_activos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_informes_supervision_activos[".strOrderBy"] = $tstrOrderBy;

$tdataq_informes_supervision_activos[".orderindexes"] = array();

$tdataq_informes_supervision_activos[".sqlHead"] = "SELECT interventor_id,  	cont_hash_fk,  	sys_user,  	idusrglobal_fk,  	id_cont_fk,  	documento_id,  	nombres,  	apellidos,  	sup_mailnot,  	documento,  	nombre_razon,  	cont_estado,  	contnumero,  	cont_fecha_inicio,  	cont_fechafinal,  	cont_valormensual_base,  	cont_valormensual_iva,  	cont_valormensual,  	sup_status,  	cont_ano,  	prenumero,  	numregistro,  	cont_periodicidad,  	cont_informessug,  	cont_valorinicial,  	cont_acta_liquidacion,  	cont_objeto,  	cont_obligaciones,  	cont_plazo";
$tdataq_informes_supervision_activos[".sqlFrom"] = "FROM q_informes_supervision_activos";
$tdataq_informes_supervision_activos[".sqlWhereExpr"] = "";
$tdataq_informes_supervision_activos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_informes_supervision_activos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_informes_supervision_activos[".arrGroupsPerPage"] = $arrGPP;

$tdataq_informes_supervision_activos[".highlightSearchResults"] = true;

$tableKeysq_informes_supervision_activos = array();
$tableKeysq_informes_supervision_activos[] = "interventor_id";
$tdataq_informes_supervision_activos[".Keys"] = $tableKeysq_informes_supervision_activos;


$tdataq_informes_supervision_activos[".hideMobileList"] = array();




//	interventor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "interventor_id";
	$fdata["GoodName"] = "interventor_id";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","interventor_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "interventor_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "interventor_id";

	
	
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


	$tdataq_informes_supervision_activos["interventor_id"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "interventor_id";
//	cont_hash_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cont_hash_fk";
	$fdata["GoodName"] = "cont_hash_fk";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","cont_hash_fk");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_hash_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_hash_fk";

	
	
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


	$tdataq_informes_supervision_activos["cont_hash_fk"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "cont_hash_fk";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","sys_user");
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


	$tdataq_informes_supervision_activos["sys_user"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "sys_user";
//	idusrglobal_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idusrglobal_fk";
	$fdata["GoodName"] = "idusrglobal_fk";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","idusrglobal_fk");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "idusrglobal_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idusrglobal_fk";

	
	
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


	$tdataq_informes_supervision_activos["idusrglobal_fk"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "idusrglobal_fk";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","id_cont_fk");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_cont_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont_fk";

	
	
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


	$tdataq_informes_supervision_activos["id_cont_fk"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "id_cont_fk";
//	documento_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "documento_id";
	$fdata["GoodName"] = "documento_id";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","documento_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "documento_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documento_id";

	
	
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


	$tdataq_informes_supervision_activos["documento_id"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "documento_id";
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","nombres");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombres";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombres";

	
	
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


	$tdataq_informes_supervision_activos["nombres"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "nombres";
//	apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "apellidos";
	$fdata["GoodName"] = "apellidos";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","apellidos");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "apellidos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apellidos";

	
	
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


	$tdataq_informes_supervision_activos["apellidos"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "apellidos";
//	sup_mailnot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sup_mailnot";
	$fdata["GoodName"] = "sup_mailnot";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","sup_mailnot");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sup_mailnot";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sup_mailnot";

	
	
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


	$tdataq_informes_supervision_activos["sup_mailnot"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "sup_mailnot";
//	documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "documento";
	$fdata["GoodName"] = "documento";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","documento");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "documento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documento";

	
	
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


	$tdataq_informes_supervision_activos["documento"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "documento";
//	nombre_razon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "nombre_razon";
	$fdata["GoodName"] = "nombre_razon";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","nombre_razon");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre_razon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_razon";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contractor_master";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "contractor_doc_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "contractor_nombresfull";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataq_informes_supervision_activos["nombre_razon"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "nombre_razon";
//	cont_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cont_estado";
	$fdata["GoodName"] = "cont_estado";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","cont_estado");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_estado";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contrato_estados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "estado_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "estado_nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataq_informes_supervision_activos["cont_estado"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "cont_estado";
//	contnumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "contnumero";
	$fdata["GoodName"] = "contnumero";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","contnumero");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contnumero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contnumero";

	
	
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


	$tdataq_informes_supervision_activos["contnumero"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "contnumero";
//	cont_fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cont_fecha_inicio";
	$fdata["GoodName"] = "cont_fecha_inicio";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","cont_fecha_inicio");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "cont_fecha_inicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fecha_inicio";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdataq_informes_supervision_activos["cont_fecha_inicio"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "cont_fecha_inicio";
//	cont_fechafinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cont_fechafinal";
	$fdata["GoodName"] = "cont_fechafinal";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","cont_fechafinal");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "cont_fechafinal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fechafinal";

	
	
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


	$tdataq_informes_supervision_activos["cont_fechafinal"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "cont_fechafinal";
//	cont_valormensual_base
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cont_valormensual_base";
	$fdata["GoodName"] = "cont_valormensual_base";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","cont_valormensual_base");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "cont_valormensual_base";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valormensual_base";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataq_informes_supervision_activos["cont_valormensual_base"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "cont_valormensual_base";
//	cont_valormensual_iva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "cont_valormensual_iva";
	$fdata["GoodName"] = "cont_valormensual_iva";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","cont_valormensual_iva");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "cont_valormensual_iva";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valormensual_iva";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataq_informes_supervision_activos["cont_valormensual_iva"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "cont_valormensual_iva";
//	cont_valormensual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "cont_valormensual";
	$fdata["GoodName"] = "cont_valormensual";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","cont_valormensual");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "cont_valormensual";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valormensual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataq_informes_supervision_activos["cont_valormensual"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "cont_valormensual";
//	sup_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "sup_status";
	$fdata["GoodName"] = "sup_status";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","sup_status");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "sup_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sup_status";

	
	
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


	$tdataq_informes_supervision_activos["sup_status"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "sup_status";
//	cont_ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cont_ano";
	$fdata["GoodName"] = "cont_ano";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","cont_ano");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "cont_ano";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_ano";

	
	
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


	$tdataq_informes_supervision_activos["cont_ano"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "cont_ano";
//	prenumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "prenumero";
	$fdata["GoodName"] = "prenumero";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","prenumero");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "prenumero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prenumero";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdataq_informes_supervision_activos["prenumero"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "prenumero";
//	numregistro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "numregistro";
	$fdata["GoodName"] = "numregistro";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","numregistro");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "numregistro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numregistro";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdataq_informes_supervision_activos["numregistro"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "numregistro";
//	cont_periodicidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "cont_periodicidad";
	$fdata["GoodName"] = "cont_periodicidad";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","cont_periodicidad");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_periodicidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_periodicidad";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "interventor_periodos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_periodo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "periodo_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataq_informes_supervision_activos["cont_periodicidad"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "cont_periodicidad";
//	cont_informessug
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "cont_informessug";
	$fdata["GoodName"] = "cont_informessug";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","cont_informessug");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_informessug";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_informessug";

	
	
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


	$tdataq_informes_supervision_activos["cont_informessug"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "cont_informessug";
//	cont_valorinicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "cont_valorinicial";
	$fdata["GoodName"] = "cont_valorinicial";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","cont_valorinicial");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "cont_valorinicial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valorinicial";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataq_informes_supervision_activos["cont_valorinicial"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "cont_valorinicial";
//	cont_acta_liquidacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "cont_acta_liquidacion";
	$fdata["GoodName"] = "cont_acta_liquidacion";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","cont_acta_liquidacion");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "cont_acta_liquidacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_acta_liquidacion";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tipo_si_no";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "sn_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "sn_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataq_informes_supervision_activos["cont_acta_liquidacion"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "cont_acta_liquidacion";
//	cont_objeto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cont_objeto";
	$fdata["GoodName"] = "cont_objeto";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","cont_objeto");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "cont_objeto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_objeto";

	
	
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


	$tdataq_informes_supervision_activos["cont_objeto"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "cont_objeto";
//	cont_obligaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "cont_obligaciones";
	$fdata["GoodName"] = "cont_obligaciones";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","cont_obligaciones");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "cont_obligaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_obligaciones";

	
	
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


	$tdataq_informes_supervision_activos["cont_obligaciones"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "cont_obligaciones";
//	cont_plazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "cont_plazo";
	$fdata["GoodName"] = "cont_plazo";
	$fdata["ownerTable"] = "q_informes_supervision_activos";
	$fdata["Label"] = GetFieldLabel("q_informes_supervision_activos","cont_plazo");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "cont_plazo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_plazo";

	
	
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


	$tdataq_informes_supervision_activos["cont_plazo"] = $fdata;
		$tdataq_informes_supervision_activos[".searchableFields"][] = "cont_plazo";


$tables_data["q_informes_supervision_activos"]=&$tdataq_informes_supervision_activos;
$field_labels["q_informes_supervision_activos"] = &$fieldLabelsq_informes_supervision_activos;
$fieldToolTips["q_informes_supervision_activos"] = &$fieldToolTipsq_informes_supervision_activos;
$placeHolders["q_informes_supervision_activos"] = &$placeHoldersq_informes_supervision_activos;
$page_titles["q_informes_supervision_activos"] = &$pageTitlesq_informes_supervision_activos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_informes_supervision_activos"] = array();
//	informe_intersup_plan_pagos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="informe_intersup_plan_pagos";
		$detailsParam["dOriginalTable"] = "informe_intersup_plan_pagos";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "informe_intersup_plan_pagos";
	$detailsParam["dCaptionTable"] = GetTableCaption("informe_intersup_plan_pagos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["q_informes_supervision_activos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["q_informes_supervision_activos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["q_informes_supervision_activos"][$dIndex]["masterKeys"][]="id_cont_fk";

				$detailsTablesData["q_informes_supervision_activos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["q_informes_supervision_activos"][$dIndex]["detailKeys"][]="id_cont_fk";

// tables which are master tables for current table (detail)
$masterTablesData["q_informes_supervision_activos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_informes_supervision_activos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "interventor_id,  	cont_hash_fk,  	sys_user,  	idusrglobal_fk,  	id_cont_fk,  	documento_id,  	nombres,  	apellidos,  	sup_mailnot,  	documento,  	nombre_razon,  	cont_estado,  	contnumero,  	cont_fecha_inicio,  	cont_fechafinal,  	cont_valormensual_base,  	cont_valormensual_iva,  	cont_valormensual,  	sup_status,  	cont_ano,  	prenumero,  	numregistro,  	cont_periodicidad,  	cont_informessug,  	cont_valorinicial,  	cont_acta_liquidacion,  	cont_objeto,  	cont_obligaciones,  	cont_plazo";
$proto0["m_strFrom"] = "FROM q_informes_supervision_activos";
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
	"m_strName" => "interventor_id",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto6["m_sql"] = "interventor_id";
$proto6["m_srcTableName"] = "q_informes_supervision_activos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_hash_fk",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto8["m_sql"] = "cont_hash_fk";
$proto8["m_srcTableName"] = "q_informes_supervision_activos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto10["m_sql"] = "sys_user";
$proto10["m_srcTableName"] = "q_informes_supervision_activos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idusrglobal_fk",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto12["m_sql"] = "idusrglobal_fk";
$proto12["m_srcTableName"] = "q_informes_supervision_activos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto14["m_sql"] = "id_cont_fk";
$proto14["m_srcTableName"] = "q_informes_supervision_activos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "documento_id",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto16["m_sql"] = "documento_id";
$proto16["m_srcTableName"] = "q_informes_supervision_activos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto18["m_sql"] = "nombres";
$proto18["m_srcTableName"] = "q_informes_supervision_activos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "apellidos",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto20["m_sql"] = "apellidos";
$proto20["m_srcTableName"] = "q_informes_supervision_activos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_mailnot",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto22["m_sql"] = "sup_mailnot";
$proto22["m_srcTableName"] = "q_informes_supervision_activos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "documento",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto24["m_sql"] = "documento";
$proto24["m_srcTableName"] = "q_informes_supervision_activos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_razon",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto26["m_sql"] = "nombre_razon";
$proto26["m_srcTableName"] = "q_informes_supervision_activos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_estado",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto28["m_sql"] = "cont_estado";
$proto28["m_srcTableName"] = "q_informes_supervision_activos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "contnumero",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto30["m_sql"] = "contnumero";
$proto30["m_srcTableName"] = "q_informes_supervision_activos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fecha_inicio",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto32["m_sql"] = "cont_fecha_inicio";
$proto32["m_srcTableName"] = "q_informes_supervision_activos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechafinal",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto34["m_sql"] = "cont_fechafinal";
$proto34["m_srcTableName"] = "q_informes_supervision_activos";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valormensual_base",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto36["m_sql"] = "cont_valormensual_base";
$proto36["m_srcTableName"] = "q_informes_supervision_activos";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valormensual_iva",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto38["m_sql"] = "cont_valormensual_iva";
$proto38["m_srcTableName"] = "q_informes_supervision_activos";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valormensual",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto40["m_sql"] = "cont_valormensual";
$proto40["m_srcTableName"] = "q_informes_supervision_activos";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_status",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto42["m_sql"] = "sup_status";
$proto42["m_srcTableName"] = "q_informes_supervision_activos";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_ano",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto44["m_sql"] = "cont_ano";
$proto44["m_srcTableName"] = "q_informes_supervision_activos";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "prenumero",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto46["m_sql"] = "prenumero";
$proto46["m_srcTableName"] = "q_informes_supervision_activos";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "numregistro",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto48["m_sql"] = "numregistro";
$proto48["m_srcTableName"] = "q_informes_supervision_activos";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_periodicidad",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto50["m_sql"] = "cont_periodicidad";
$proto50["m_srcTableName"] = "q_informes_supervision_activos";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_informessug",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto52["m_sql"] = "cont_informessug";
$proto52["m_srcTableName"] = "q_informes_supervision_activos";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valorinicial",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto54["m_sql"] = "cont_valorinicial";
$proto54["m_srcTableName"] = "q_informes_supervision_activos";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_acta_liquidacion",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto56["m_sql"] = "cont_acta_liquidacion";
$proto56["m_srcTableName"] = "q_informes_supervision_activos";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_objeto",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto58["m_sql"] = "cont_objeto";
$proto58["m_srcTableName"] = "q_informes_supervision_activos";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_obligaciones",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto60["m_sql"] = "cont_obligaciones";
$proto60["m_srcTableName"] = "q_informes_supervision_activos";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_plazo",
	"m_strTable" => "q_informes_supervision_activos",
	"m_srcTableName" => "q_informes_supervision_activos"
));

$proto62["m_sql"] = "cont_plazo";
$proto62["m_srcTableName"] = "q_informes_supervision_activos";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto64=array();
$proto64["m_link"] = "SQLL_MAIN";
			$proto65=array();
$proto65["m_strName"] = "q_informes_supervision_activos";
$proto65["m_srcTableName"] = "q_informes_supervision_activos";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "interventor_id";
$proto65["m_columns"][] = "cont_hash_fk";
$proto65["m_columns"][] = "sys_user";
$proto65["m_columns"][] = "idusrglobal_fk";
$proto65["m_columns"][] = "id_cont_fk";
$proto65["m_columns"][] = "documento_id";
$proto65["m_columns"][] = "nombres";
$proto65["m_columns"][] = "apellidos";
$proto65["m_columns"][] = "sup_mailnot";
$proto65["m_columns"][] = "documento";
$proto65["m_columns"][] = "nombre_razon";
$proto65["m_columns"][] = "cont_estado";
$proto65["m_columns"][] = "contnumero";
$proto65["m_columns"][] = "cont_fecha_inicio";
$proto65["m_columns"][] = "cont_fechafinal";
$proto65["m_columns"][] = "cont_valormensual_base";
$proto65["m_columns"][] = "cont_valormensual_iva";
$proto65["m_columns"][] = "cont_valormensual";
$proto65["m_columns"][] = "sup_status";
$proto65["m_columns"][] = "cont_ano";
$proto65["m_columns"][] = "prenumero";
$proto65["m_columns"][] = "numregistro";
$proto65["m_columns"][] = "cont_periodicidad";
$proto65["m_columns"][] = "cont_informessug";
$proto65["m_columns"][] = "cont_valorinicial";
$proto65["m_columns"][] = "cont_acta_liquidacion";
$proto65["m_columns"][] = "cont_objeto";
$proto65["m_columns"][] = "cont_obligaciones";
$proto65["m_columns"][] = "cont_plazo";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "q_informes_supervision_activos";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "q_informes_supervision_activos";
$proto66=array();
$proto66["m_sql"] = "";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_informes_supervision_activos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_informes_supervision_activos = createSqlQuery_q_informes_supervision_activos();


	
										;

																													

$tdataq_informes_supervision_activos[".sqlquery"] = $queryData_q_informes_supervision_activos;

$tableEvents["q_informes_supervision_activos"] = new eventsBase;
$tdataq_informes_supervision_activos[".hasEvents"] = false;

?>