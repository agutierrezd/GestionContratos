<?php



$tdataq_001_dashboard_info = array();
$tdataq_001_dashboard_info[".searchableFields"] = array();
$tdataq_001_dashboard_info[".ShortName"] = "q_001_dashboard_info";
$tdataq_001_dashboard_info[".OwnerID"] = "";
$tdataq_001_dashboard_info[".OriginalTable"] = "q_001_dashboard";


$tdataq_001_dashboard_info[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataq_001_dashboard_info[".originalPagesByType"] = $tdataq_001_dashboard_info[".pagesByType"];
$tdataq_001_dashboard_info[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataq_001_dashboard_info[".originalPages"] = $tdataq_001_dashboard_info[".pages"];
$tdataq_001_dashboard_info[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataq_001_dashboard_info[".originalDefaultPages"] = $tdataq_001_dashboard_info[".defaultPages"];

//	field labels
$fieldLabelsq_001_dashboard_info = array();
$fieldToolTipsq_001_dashboard_info = array();
$pageTitlesq_001_dashboard_info = array();
$placeHoldersq_001_dashboard_info = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_001_dashboard_info["Spanish"] = array();
	$fieldToolTipsq_001_dashboard_info["Spanish"] = array();
	$placeHoldersq_001_dashboard_info["Spanish"] = array();
	$pageTitlesq_001_dashboard_info["Spanish"] = array();
	$fieldLabelsq_001_dashboard_info["Spanish"]["id_cont"] = "Id Cont";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["id_cont"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["id_cont"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["CONTRATOID"] = "CONTRATO";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["CONTRATOID"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["CONTRATOID"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["VIGENCIA"] = "VIGENCIA";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["VIGENCIA"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["VIGENCIA"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_estado"] = "Cont Estado";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_estado"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_estado"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["estado_nombre"] = "Estado Nombre";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["estado_nombre"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["estado_nombre"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["contractor_type"] = "Contractor Type";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["contractor_type"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["contractor_type"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["DOCID"] = "DOCUMENTO";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["DOCID"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["DOCID"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["contractor_nombresfull"] = "NOMBRE | RAZON SOCIAL";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["contractor_nombresfull"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["contractor_nombresfull"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["contractor_email"] = "Contractor Email";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["contractor_email"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["contractor_email"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["CODC"] = "CODC";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["CODC"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["CODC"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["NUMC"] = "NUMC";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["NUMC"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["NUMC"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_tipo"] = "Cont Tipo";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_tipo"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_tipo"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["nombre"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["nombre"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_codrubro"] = "Cont Codrubro";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_codrubro"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_codrubro"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_tipopre"] = "Cont Tipopre";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_tipopre"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_tipopre"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_catalogo_presupuestal"] = "Cont Catalogo Presupuestal";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_catalogo_presupuestal"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_catalogo_presupuestal"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_fase"] = "Cont Fase";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_fase"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_fase"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["FECHAI"] = "FECHA INICIO";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["FECHAI"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["FECHAI"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["FECHAF"] = "FECHA FINAL";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["FECHAF"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["FECHAF"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["VALORI"] = "VALOR INICIAL";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["VALORI"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["VALORI"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_fechaapertura"] = "Cont Fechaapertura";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_fechaapertura"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_fechaapertura"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["CDP"] = "CDP";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["CDP"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["CDP"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["RP"] = "RP";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["RP"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["RP"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_modalidad"] = "Cont Modalidad";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_modalidad"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_modalidad"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["des_mod_proceso"] = "Des Mod Proceso";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["des_mod_proceso"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["des_mod_proceso"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_tipoproceso"] = "Cont Tipoproceso";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_tipoproceso"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_tipoproceso"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_periodicidad"] = "Cont Periodicidad";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_periodicidad"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_periodicidad"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["periodo_name"] = "Periodo Name";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["periodo_name"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["periodo_name"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["periodo_value"] = "Periodo Value";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["periodo_value"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["periodo_value"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["periodo_dias"] = "Periodo Dias";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["periodo_dias"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["periodo_dias"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_informessug"] = "Cont Informessug";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_informessug"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_informessug"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["periodo_meses"] = "Periodo Meses";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["periodo_meses"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["periodo_meses"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_objeto"] = "Cont Objeto";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_objeto"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_objeto"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_fechavigencia"] = "Cont Fechavigencia";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_fechavigencia"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_fechavigencia"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["VALORINICIAL"] = "VALORINICIAL";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["VALORINICIAL"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["VALORINICIAL"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_valormensual"] = "Cont Valormensual";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_valormensual"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_valormensual"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["iva_regimen"] = "Iva Regimen";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["iva_regimen"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["iva_regimen"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["CONTVINCULADO"] = "CONTVINCULADO";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["CONTVINCULADO"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["CONTVINCULADO"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_paa_id"] = "Cont Paa Id";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_paa_id"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_paa_id"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_tipoc"] = "Cont Tipoc";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_tipoc"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_tipoc"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["ct_tipo_nombre"] = "Ct Tipo Nombre";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["ct_tipo_nombre"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["ct_tipo_nombre"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_causalc"] = "Cont Causalc";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_causalc"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_causalc"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["ctb_tipo_nombre"] = "MODALIDAD";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["ctb_tipo_nombre"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["ctb_tipo_nombre"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_secop_enlace"] = "ENLACE SECOP";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_secop_enlace"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_secop_enlace"] = "";
	$fieldLabelsq_001_dashboard_info["Spanish"]["cont_dep"] = "Cont Dep";
	$fieldToolTipsq_001_dashboard_info["Spanish"]["cont_dep"] = "";
	$placeHoldersq_001_dashboard_info["Spanish"]["cont_dep"] = "";
	if (count($fieldToolTipsq_001_dashboard_info["Spanish"]))
		$tdataq_001_dashboard_info[".isUseToolTips"] = true;
}


	$tdataq_001_dashboard_info[".NCSearch"] = true;



$tdataq_001_dashboard_info[".shortTableName"] = "q_001_dashboard_info";
$tdataq_001_dashboard_info[".nSecOptions"] = 0;

$tdataq_001_dashboard_info[".mainTableOwnerID"] = "";
$tdataq_001_dashboard_info[".entityType"] = 1;

$tdataq_001_dashboard_info[".strOriginalTableName"] = "q_001_dashboard";

	



$tdataq_001_dashboard_info[".showAddInPopup"] = false;

$tdataq_001_dashboard_info[".showEditInPopup"] = false;

$tdataq_001_dashboard_info[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataq_001_dashboard_info[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataq_001_dashboard_info[".listAjax"] = false;
//	temporary
$tdataq_001_dashboard_info[".listAjax"] = false;

	$tdataq_001_dashboard_info[".audit"] = true;

	$tdataq_001_dashboard_info[".locking"] = true;


$pages = $tdataq_001_dashboard_info[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_001_dashboard_info[".edit"] = true;
	$tdataq_001_dashboard_info[".afterEditAction"] = 1;
	$tdataq_001_dashboard_info[".closePopupAfterEdit"] = 1;
	$tdataq_001_dashboard_info[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_001_dashboard_info[".add"] = true;
$tdataq_001_dashboard_info[".afterAddAction"] = 1;
$tdataq_001_dashboard_info[".closePopupAfterAdd"] = 1;
$tdataq_001_dashboard_info[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_001_dashboard_info[".list"] = true;
}



$tdataq_001_dashboard_info[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_001_dashboard_info[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_001_dashboard_info[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_001_dashboard_info[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_001_dashboard_info[".printFriendly"] = true;
}



$tdataq_001_dashboard_info[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_001_dashboard_info[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_001_dashboard_info[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_001_dashboard_info[".isUseAjaxSuggest"] = true;

$tdataq_001_dashboard_info[".rowHighlite"] = true;



																								

$tdataq_001_dashboard_info[".ajaxCodeSnippetAdded"] = false;

$tdataq_001_dashboard_info[".buttonsAdded"] = false;

$tdataq_001_dashboard_info[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_001_dashboard_info[".isUseTimeForSearch"] = false;


$tdataq_001_dashboard_info[".badgeColor"] = "00c2c5";


$tdataq_001_dashboard_info[".allSearchFields"] = array();
$tdataq_001_dashboard_info[".filterFields"] = array();
$tdataq_001_dashboard_info[".requiredSearchFields"] = array();

$tdataq_001_dashboard_info[".googleLikeFields"] = array();
$tdataq_001_dashboard_info[".googleLikeFields"][] = "id_cont";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "CONTRATOID";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "CONTVINCULADO";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_paa_id";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "VIGENCIA";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_estado";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "estado_nombre";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "contractor_type";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "DOCID";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "contractor_nombresfull";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "contractor_email";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "CODC";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "NUMC";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_tipo";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "nombre";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_codrubro";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_tipopre";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_catalogo_presupuestal";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_fase";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "FECHAI";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "FECHAF";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "VALORI";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_fechaapertura";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "CDP";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "RP";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_tipoproceso";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_periodicidad";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "periodo_name";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "periodo_value";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "periodo_dias";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_informessug";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "periodo_meses";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_objeto";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_fechavigencia";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "VALORINICIAL";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_valormensual";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "iva_regimen";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_tipoc";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "ct_tipo_nombre";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_modalidad";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "des_mod_proceso";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_causalc";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "ctb_tipo_nombre";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_secop_enlace";
$tdataq_001_dashboard_info[".googleLikeFields"][] = "cont_dep";



$tdataq_001_dashboard_info[".tableType"] = "list";

$tdataq_001_dashboard_info[".printerPageOrientation"] = 0;
$tdataq_001_dashboard_info[".nPrinterPageScale"] = 100;

$tdataq_001_dashboard_info[".nPrinterSplitRecords"] = 40;

$tdataq_001_dashboard_info[".geocodingEnabled"] = false;










$tdataq_001_dashboard_info[".pageSize"] = 20;

$tdataq_001_dashboard_info[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_001_dashboard_info[".strOrderBy"] = $tstrOrderBy;

$tdataq_001_dashboard_info[".orderindexes"] = array();

$tdataq_001_dashboard_info[".sqlHead"] = "SELECT id_cont,  CONTRATOID,  CONTVINCULADO,  cont_paa_id,  VIGENCIA,  cont_estado,  estado_nombre,  contractor_type,  DOCID,  contractor_nombresfull,  contractor_email,  CODC,  NUMC,  cont_tipo,  nombre,  cont_codrubro,  cont_tipopre,  cont_catalogo_presupuestal,  cont_fase,  FECHAI,  FECHAF,  VALORI,  cont_fechaapertura,  CDP,  RP,  cont_tipoproceso,  cont_periodicidad,  periodo_name,  periodo_value,  periodo_dias,  cont_informessug,  periodo_meses,  cont_objeto,  cont_fechavigencia,  VALORINICIAL,  cont_valormensual,  iva_regimen,  cont_tipoc,  ct_tipo_nombre,  cont_modalidad,  des_mod_proceso,  cont_causalc,  ctb_tipo_nombre,  cont_secop_enlace,  cont_dep";
$tdataq_001_dashboard_info[".sqlFrom"] = "FROM q_001_dashboard";
$tdataq_001_dashboard_info[".sqlWhereExpr"] = "";
$tdataq_001_dashboard_info[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_001_dashboard_info[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_001_dashboard_info[".arrGroupsPerPage"] = $arrGPP;

$tdataq_001_dashboard_info[".highlightSearchResults"] = true;

$tableKeysq_001_dashboard_info = array();
$tableKeysq_001_dashboard_info[] = "id_cont";
$tdataq_001_dashboard_info[".Keys"] = $tableKeysq_001_dashboard_info;


$tdataq_001_dashboard_info[".hideMobileList"] = array();




//	id_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cont";
	$fdata["GoodName"] = "id_cont";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","id_cont");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_cont";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont";

	
	
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


	$tdataq_001_dashboard_info["id_cont"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "id_cont";
//	CONTRATOID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CONTRATOID";
	$fdata["GoodName"] = "CONTRATOID";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","CONTRATOID");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CONTRATOID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONTRATOID";

	
	
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
			$edata["EditParams"].= " maxlength=26";

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


	$tdataq_001_dashboard_info["CONTRATOID"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "CONTRATOID";
//	CONTVINCULADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CONTVINCULADO";
	$fdata["GoodName"] = "CONTVINCULADO";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","CONTVINCULADO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CONTVINCULADO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONTVINCULADO";

	
	
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
			$edata["EditParams"].= " maxlength=133";

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


	$tdataq_001_dashboard_info["CONTVINCULADO"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "CONTVINCULADO";
//	cont_paa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cont_paa_id";
	$fdata["GoodName"] = "cont_paa_id";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_paa_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_paa_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_paa_id";

	
	
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


	$tdataq_001_dashboard_info["cont_paa_id"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_paa_id";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","VIGENCIA");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "VIGENCIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VIGENCIA";

	
	
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


	$tdataq_001_dashboard_info["VIGENCIA"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "VIGENCIA";
//	cont_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cont_estado";
	$fdata["GoodName"] = "cont_estado";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_estado");
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


	$tdataq_001_dashboard_info["cont_estado"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_estado";
//	estado_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "estado_nombre";
	$fdata["GoodName"] = "estado_nombre";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","estado_nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "estado_nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_nombre";

	
	
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


	$tdataq_001_dashboard_info["estado_nombre"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "estado_nombre";
//	contractor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "contractor_type";
	$fdata["GoodName"] = "contractor_type";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","contractor_type");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_type";

	
	
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


	$tdataq_001_dashboard_info["contractor_type"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "contractor_type";
//	DOCID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DOCID";
	$fdata["GoodName"] = "DOCID";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","DOCID");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DOCID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DOCID";

	
	
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


	$tdataq_001_dashboard_info["DOCID"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "DOCID";
//	contractor_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "contractor_nombresfull";
	$fdata["GoodName"] = "contractor_nombresfull";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","contractor_nombresfull");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_nombresfull";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_nombresfull";

	
	
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


	$tdataq_001_dashboard_info["contractor_nombresfull"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "contractor_nombresfull";
//	contractor_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "contractor_email";
	$fdata["GoodName"] = "contractor_email";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","contractor_email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_email";

	
	
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


	$tdataq_001_dashboard_info["contractor_email"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "contractor_email";
//	CODC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CODC";
	$fdata["GoodName"] = "CODC";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","CODC");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CODC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CODC";

	
	
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
			$edata["EditParams"].= " maxlength=6";

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


	$tdataq_001_dashboard_info["CODC"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "CODC";
//	NUMC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "NUMC";
	$fdata["GoodName"] = "NUMC";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","NUMC");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NUMC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NUMC";

	
	
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


	$tdataq_001_dashboard_info["NUMC"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "NUMC";
//	cont_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cont_tipo";
	$fdata["GoodName"] = "cont_tipo";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_tipo");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "cont_tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipo";

	
	
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


	$tdataq_001_dashboard_info["cont_tipo"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_tipo";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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


	$tdataq_001_dashboard_info["nombre"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "nombre";
//	cont_codrubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cont_codrubro";
	$fdata["GoodName"] = "cont_codrubro";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_codrubro");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_codrubro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_codrubro";

	
	
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


	$tdataq_001_dashboard_info["cont_codrubro"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_codrubro";
//	cont_tipopre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "cont_tipopre";
	$fdata["GoodName"] = "cont_tipopre";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_tipopre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_tipopre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipopre";

	
	
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


	$tdataq_001_dashboard_info["cont_tipopre"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_tipopre";
//	cont_catalogo_presupuestal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "cont_catalogo_presupuestal";
	$fdata["GoodName"] = "cont_catalogo_presupuestal";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_catalogo_presupuestal");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_catalogo_presupuestal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_catalogo_presupuestal";

	
	
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


	$tdataq_001_dashboard_info["cont_catalogo_presupuestal"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_catalogo_presupuestal";
//	cont_fase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "cont_fase";
	$fdata["GoodName"] = "cont_fase";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_fase");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_fase";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fase";

	
	
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


	$tdataq_001_dashboard_info["cont_fase"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_fase";
//	FECHAI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "FECHAI";
	$fdata["GoodName"] = "FECHAI";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","FECHAI");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "FECHAI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHAI";

	
	
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


	$tdataq_001_dashboard_info["FECHAI"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "FECHAI";
//	FECHAF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "FECHAF";
	$fdata["GoodName"] = "FECHAF";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","FECHAF");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "FECHAF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHAF";

	
	
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


	$tdataq_001_dashboard_info["FECHAF"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "FECHAF";
//	VALORI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "VALORI";
	$fdata["GoodName"] = "VALORI";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","VALORI");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "VALORI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALORI";

	
	
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


	$tdataq_001_dashboard_info["VALORI"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "VALORI";
//	cont_fechaapertura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "cont_fechaapertura";
	$fdata["GoodName"] = "cont_fechaapertura";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_fechaapertura");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "cont_fechaapertura";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fechaapertura";

	
	
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


	$tdataq_001_dashboard_info["cont_fechaapertura"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_fechaapertura";
//	CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "CDP";
	$fdata["GoodName"] = "CDP";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","CDP");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CDP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CDP";

	
	
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


	$tdataq_001_dashboard_info["CDP"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "CDP";
//	RP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "RP";
	$fdata["GoodName"] = "RP";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","RP");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "RP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RP";

	
	
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


	$tdataq_001_dashboard_info["RP"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "RP";
//	cont_tipoproceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "cont_tipoproceso";
	$fdata["GoodName"] = "cont_tipoproceso";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_tipoproceso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_tipoproceso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipoproceso";

	
	
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


	$tdataq_001_dashboard_info["cont_tipoproceso"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_tipoproceso";
//	cont_periodicidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cont_periodicidad";
	$fdata["GoodName"] = "cont_periodicidad";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_periodicidad");
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


	$tdataq_001_dashboard_info["cont_periodicidad"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_periodicidad";
//	periodo_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "periodo_name";
	$fdata["GoodName"] = "periodo_name";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","periodo_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "periodo_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_name";

	
	
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


	$tdataq_001_dashboard_info["periodo_name"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "periodo_name";
//	periodo_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "periodo_value";
	$fdata["GoodName"] = "periodo_value";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","periodo_value");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "periodo_value";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_value";

	
	
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


	$tdataq_001_dashboard_info["periodo_value"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "periodo_value";
//	periodo_dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "periodo_dias";
	$fdata["GoodName"] = "periodo_dias";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","periodo_dias");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "periodo_dias";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_dias";

	
	
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


	$tdataq_001_dashboard_info["periodo_dias"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "periodo_dias";
//	cont_informessug
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "cont_informessug";
	$fdata["GoodName"] = "cont_informessug";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_informessug");
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


	$tdataq_001_dashboard_info["cont_informessug"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_informessug";
//	periodo_meses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "periodo_meses";
	$fdata["GoodName"] = "periodo_meses";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","periodo_meses");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "periodo_meses";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_meses";

	
	
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


	$tdataq_001_dashboard_info["periodo_meses"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "periodo_meses";
//	cont_objeto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "cont_objeto";
	$fdata["GoodName"] = "cont_objeto";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_objeto");
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


	$tdataq_001_dashboard_info["cont_objeto"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_objeto";
//	cont_fechavigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "cont_fechavigencia";
	$fdata["GoodName"] = "cont_fechavigencia";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_fechavigencia");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "cont_fechavigencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fechavigencia";

	
	
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


	$tdataq_001_dashboard_info["cont_fechavigencia"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_fechavigencia";
//	VALORINICIAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "VALORINICIAL";
	$fdata["GoodName"] = "VALORINICIAL";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","VALORINICIAL");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "VALORINICIAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALORINICIAL";

	
	
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


	$tdataq_001_dashboard_info["VALORINICIAL"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "VALORINICIAL";
//	cont_valormensual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "cont_valormensual";
	$fdata["GoodName"] = "cont_valormensual";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_valormensual");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "cont_valormensual";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valormensual";

	
	
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


	$tdataq_001_dashboard_info["cont_valormensual"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_valormensual";
//	iva_regimen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "iva_regimen";
	$fdata["GoodName"] = "iva_regimen";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","iva_regimen");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "iva_regimen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "iva_regimen";

	
	
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


	$tdataq_001_dashboard_info["iva_regimen"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "iva_regimen";
//	cont_tipoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "cont_tipoc";
	$fdata["GoodName"] = "cont_tipoc";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_tipoc");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_tipoc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipoc";

	
	
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


	$tdataq_001_dashboard_info["cont_tipoc"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_tipoc";
//	ct_tipo_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "ct_tipo_nombre";
	$fdata["GoodName"] = "ct_tipo_nombre";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","ct_tipo_nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ct_tipo_nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ct_tipo_nombre";

	
	
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


	$tdataq_001_dashboard_info["ct_tipo_nombre"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "ct_tipo_nombre";
//	cont_modalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "cont_modalidad";
	$fdata["GoodName"] = "cont_modalidad";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_modalidad");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_modalidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_modalidad";

	
	
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


	$tdataq_001_dashboard_info["cont_modalidad"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_modalidad";
//	des_mod_proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "des_mod_proceso";
	$fdata["GoodName"] = "des_mod_proceso";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","des_mod_proceso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "des_mod_proceso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "des_mod_proceso";

	
	
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


	$tdataq_001_dashboard_info["des_mod_proceso"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "des_mod_proceso";
//	cont_causalc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "cont_causalc";
	$fdata["GoodName"] = "cont_causalc";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_causalc");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_causalc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_causalc";

	
	
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


	$tdataq_001_dashboard_info["cont_causalc"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_causalc";
//	ctb_tipo_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "ctb_tipo_nombre";
	$fdata["GoodName"] = "ctb_tipo_nombre";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","ctb_tipo_nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ctb_tipo_nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ctb_tipo_nombre";

	
	
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


	$tdataq_001_dashboard_info["ctb_tipo_nombre"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "ctb_tipo_nombre";
//	cont_secop_enlace
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "cont_secop_enlace";
	$fdata["GoodName"] = "cont_secop_enlace";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_secop_enlace");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_secop_enlace";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_secop_enlace";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Ver en SECOP";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
	
	
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


	$tdataq_001_dashboard_info["cont_secop_enlace"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_secop_enlace";
//	cont_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "cont_dep";
	$fdata["GoodName"] = "cont_dep";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_info","cont_dep");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_dep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_dep";

	
	
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


	$tdataq_001_dashboard_info["cont_dep"] = $fdata;
		$tdataq_001_dashboard_info[".searchableFields"][] = "cont_dep";


$tables_data["q_001_dashboard_info"]=&$tdataq_001_dashboard_info;
$field_labels["q_001_dashboard_info"] = &$fieldLabelsq_001_dashboard_info;
$fieldToolTips["q_001_dashboard_info"] = &$fieldToolTipsq_001_dashboard_info;
$placeHolders["q_001_dashboard_info"] = &$placeHoldersq_001_dashboard_info;
$page_titles["q_001_dashboard_info"] = &$pageTitlesq_001_dashboard_info;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_001_dashboard_info"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["q_001_dashboard_info"] = array();



	
				$strOriginalDetailsTable="cert_status";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato_chart_estado";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato_chart_estado";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
			$masterParams["type"] = PAGE_CHART;
			$masterTablesData["q_001_dashboard_info"][0] = $masterParams;
				$masterTablesData["q_001_dashboard_info"][0]["masterKeys"] = array();
	$masterTablesData["q_001_dashboard_info"][0]["masterKeys"][]="cont_estado";
				$masterTablesData["q_001_dashboard_info"][0]["detailKeys"] = array();
	$masterTablesData["q_001_dashboard_info"][0]["detailKeys"][]="cont_estado";
		
	
				$strOriginalDetailsTable="cert_status";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato_chart_tipocont";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato_chart_tipocont";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
			$masterParams["type"] = PAGE_CHART;
			$masterTablesData["q_001_dashboard_info"][1] = $masterParams;
				$masterTablesData["q_001_dashboard_info"][1]["masterKeys"] = array();
	$masterTablesData["q_001_dashboard_info"][1]["masterKeys"][]="cont_causalc";
				$masterTablesData["q_001_dashboard_info"][1]["detailKeys"] = array();
	$masterTablesData["q_001_dashboard_info"][1]["detailKeys"][]="cont_causalc";
		
	
				$strOriginalDetailsTable="cert_status";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato_chart_dependencia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato_chart_dependencia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
			$masterParams["type"] = PAGE_CHART;
			$masterTablesData["q_001_dashboard_info"][2] = $masterParams;
				$masterTablesData["q_001_dashboard_info"][2]["masterKeys"] = array();
	$masterTablesData["q_001_dashboard_info"][2]["masterKeys"][]="contractor_dependencia";
				$masterTablesData["q_001_dashboard_info"][2]["detailKeys"] = array();
	$masterTablesData["q_001_dashboard_info"][2]["detailKeys"][]="cont_dep";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_001_dashboard_info()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cont,  CONTRATOID,  CONTVINCULADO,  cont_paa_id,  VIGENCIA,  cont_estado,  estado_nombre,  contractor_type,  DOCID,  contractor_nombresfull,  contractor_email,  CODC,  NUMC,  cont_tipo,  nombre,  cont_codrubro,  cont_tipopre,  cont_catalogo_presupuestal,  cont_fase,  FECHAI,  FECHAF,  VALORI,  cont_fechaapertura,  CDP,  RP,  cont_tipoproceso,  cont_periodicidad,  periodo_name,  periodo_value,  periodo_dias,  cont_informessug,  periodo_meses,  cont_objeto,  cont_fechavigencia,  VALORINICIAL,  cont_valormensual,  iva_regimen,  cont_tipoc,  ct_tipo_nombre,  cont_modalidad,  des_mod_proceso,  cont_causalc,  ctb_tipo_nombre,  cont_secop_enlace,  cont_dep";
$proto0["m_strFrom"] = "FROM q_001_dashboard";
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
	"m_strName" => "id_cont",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto6["m_sql"] = "id_cont";
$proto6["m_srcTableName"] = "q_001_dashboard_info";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CONTRATOID",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto8["m_sql"] = "CONTRATOID";
$proto8["m_srcTableName"] = "q_001_dashboard_info";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CONTVINCULADO",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto10["m_sql"] = "CONTVINCULADO";
$proto10["m_srcTableName"] = "q_001_dashboard_info";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_paa_id",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto12["m_sql"] = "cont_paa_id";
$proto12["m_srcTableName"] = "q_001_dashboard_info";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto14["m_sql"] = "VIGENCIA";
$proto14["m_srcTableName"] = "q_001_dashboard_info";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_estado",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto16["m_sql"] = "cont_estado";
$proto16["m_srcTableName"] = "q_001_dashboard_info";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_nombre",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto18["m_sql"] = "estado_nombre";
$proto18["m_srcTableName"] = "q_001_dashboard_info";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_type",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto20["m_sql"] = "contractor_type";
$proto20["m_srcTableName"] = "q_001_dashboard_info";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DOCID",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto22["m_sql"] = "DOCID";
$proto22["m_srcTableName"] = "q_001_dashboard_info";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_nombresfull",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto24["m_sql"] = "contractor_nombresfull";
$proto24["m_srcTableName"] = "q_001_dashboard_info";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto26["m_sql"] = "contractor_email";
$proto26["m_srcTableName"] = "q_001_dashboard_info";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CODC",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto28["m_sql"] = "CODC";
$proto28["m_srcTableName"] = "q_001_dashboard_info";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "NUMC",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto30["m_sql"] = "NUMC";
$proto30["m_srcTableName"] = "q_001_dashboard_info";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipo",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto32["m_sql"] = "cont_tipo";
$proto32["m_srcTableName"] = "q_001_dashboard_info";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto34["m_sql"] = "nombre";
$proto34["m_srcTableName"] = "q_001_dashboard_info";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_codrubro",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto36["m_sql"] = "cont_codrubro";
$proto36["m_srcTableName"] = "q_001_dashboard_info";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipopre",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto38["m_sql"] = "cont_tipopre";
$proto38["m_srcTableName"] = "q_001_dashboard_info";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_catalogo_presupuestal",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto40["m_sql"] = "cont_catalogo_presupuestal";
$proto40["m_srcTableName"] = "q_001_dashboard_info";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fase",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto42["m_sql"] = "cont_fase";
$proto42["m_srcTableName"] = "q_001_dashboard_info";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHAI",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto44["m_sql"] = "FECHAI";
$proto44["m_srcTableName"] = "q_001_dashboard_info";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHAF",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto46["m_sql"] = "FECHAF";
$proto46["m_srcTableName"] = "q_001_dashboard_info";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "VALORI",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto48["m_sql"] = "VALORI";
$proto48["m_srcTableName"] = "q_001_dashboard_info";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechaapertura",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto50["m_sql"] = "cont_fechaapertura";
$proto50["m_srcTableName"] = "q_001_dashboard_info";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "CDP",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto52["m_sql"] = "CDP";
$proto52["m_srcTableName"] = "q_001_dashboard_info";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "RP",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto54["m_sql"] = "RP";
$proto54["m_srcTableName"] = "q_001_dashboard_info";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipoproceso",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto56["m_sql"] = "cont_tipoproceso";
$proto56["m_srcTableName"] = "q_001_dashboard_info";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_periodicidad",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto58["m_sql"] = "cont_periodicidad";
$proto58["m_srcTableName"] = "q_001_dashboard_info";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_name",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto60["m_sql"] = "periodo_name";
$proto60["m_srcTableName"] = "q_001_dashboard_info";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_value",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto62["m_sql"] = "periodo_value";
$proto62["m_srcTableName"] = "q_001_dashboard_info";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_dias",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto64["m_sql"] = "periodo_dias";
$proto64["m_srcTableName"] = "q_001_dashboard_info";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_informessug",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto66["m_sql"] = "cont_informessug";
$proto66["m_srcTableName"] = "q_001_dashboard_info";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_meses",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto68["m_sql"] = "periodo_meses";
$proto68["m_srcTableName"] = "q_001_dashboard_info";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_objeto",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto70["m_sql"] = "cont_objeto";
$proto70["m_srcTableName"] = "q_001_dashboard_info";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechavigencia",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto72["m_sql"] = "cont_fechavigencia";
$proto72["m_srcTableName"] = "q_001_dashboard_info";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "VALORINICIAL",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto74["m_sql"] = "VALORINICIAL";
$proto74["m_srcTableName"] = "q_001_dashboard_info";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valormensual",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto76["m_sql"] = "cont_valormensual";
$proto76["m_srcTableName"] = "q_001_dashboard_info";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "iva_regimen",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto78["m_sql"] = "iva_regimen";
$proto78["m_srcTableName"] = "q_001_dashboard_info";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipoc",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto80["m_sql"] = "cont_tipoc";
$proto80["m_srcTableName"] = "q_001_dashboard_info";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "ct_tipo_nombre",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto82["m_sql"] = "ct_tipo_nombre";
$proto82["m_srcTableName"] = "q_001_dashboard_info";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_modalidad",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto84["m_sql"] = "cont_modalidad";
$proto84["m_srcTableName"] = "q_001_dashboard_info";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "des_mod_proceso",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto86["m_sql"] = "des_mod_proceso";
$proto86["m_srcTableName"] = "q_001_dashboard_info";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_causalc",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto88["m_sql"] = "cont_causalc";
$proto88["m_srcTableName"] = "q_001_dashboard_info";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "ctb_tipo_nombre",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto90["m_sql"] = "ctb_tipo_nombre";
$proto90["m_srcTableName"] = "q_001_dashboard_info";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_secop_enlace",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto92["m_sql"] = "cont_secop_enlace";
$proto92["m_srcTableName"] = "q_001_dashboard_info";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_dep",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_info"
));

$proto94["m_sql"] = "cont_dep";
$proto94["m_srcTableName"] = "q_001_dashboard_info";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto96=array();
$proto96["m_link"] = "SQLL_MAIN";
			$proto97=array();
$proto97["m_strName"] = "q_001_dashboard";
$proto97["m_srcTableName"] = "q_001_dashboard_info";
$proto97["m_columns"] = array();
$proto97["m_columns"][] = "id_cont";
$proto97["m_columns"][] = "CONTRATOID";
$proto97["m_columns"][] = "LOGINLEVEL";
$proto97["m_columns"][] = "VIGENCIA";
$proto97["m_columns"][] = "cont_hash";
$proto97["m_columns"][] = "cont_estado";
$proto97["m_columns"][] = "estado_nombre";
$proto97["m_columns"][] = "estado_img";
$proto97["m_columns"][] = "estado_lnk";
$proto97["m_columns"][] = "contractor_type";
$proto97["m_columns"][] = "DOCID";
$proto97["m_columns"][] = "contractor_name";
$proto97["m_columns"][] = "contractor_lname";
$proto97["m_columns"][] = "contractor_nombresfull";
$proto97["m_columns"][] = "contractor_email";
$proto97["m_columns"][] = "contractor_email_mincit";
$proto97["m_columns"][] = "contractor_phone";
$proto97["m_columns"][] = "contractor_mobile";
$proto97["m_columns"][] = "CODC";
$proto97["m_columns"][] = "NUMC";
$proto97["m_columns"][] = "cont_tipo";
$proto97["m_columns"][] = "nombre";
$proto97["m_columns"][] = "cont_codrubro";
$proto97["m_columns"][] = "cont_tipopre";
$proto97["m_columns"][] = "cont_catalogo_presupuestal";
$proto97["m_columns"][] = "cont_fase";
$proto97["m_columns"][] = "FECHAI";
$proto97["m_columns"][] = "FECHAINICIO";
$proto97["m_columns"][] = "FECHAF";
$proto97["m_columns"][] = "FECHAFINAL";
$proto97["m_columns"][] = "QTYDIAS";
$proto97["m_columns"][] = "QTYMESES";
$proto97["m_columns"][] = "VALORI";
$proto97["m_columns"][] = "cont_fechaapertura";
$proto97["m_columns"][] = "CDP";
$proto97["m_columns"][] = "RP";
$proto97["m_columns"][] = "cont_tipoproceso";
$proto97["m_columns"][] = "cont_periodicidad";
$proto97["m_columns"][] = "periodo_name";
$proto97["m_columns"][] = "periodo_value";
$proto97["m_columns"][] = "periodo_dias";
$proto97["m_columns"][] = "cont_informessug";
$proto97["m_columns"][] = "periodo_meses";
$proto97["m_columns"][] = "cont_objeto";
$proto97["m_columns"][] = "cont_fechavigencia";
$proto97["m_columns"][] = "VALORINICIAL";
$proto97["m_columns"][] = "cont_valormensual";
$proto97["m_columns"][] = "iva_regimen";
$proto97["m_columns"][] = "CONTVINCULADO";
$proto97["m_columns"][] = "cont_paa_id";
$proto97["m_columns"][] = "cont_tipoc";
$proto97["m_columns"][] = "ct_tipo_nombre";
$proto97["m_columns"][] = "cont_modalidad";
$proto97["m_columns"][] = "des_mod_proceso";
$proto97["m_columns"][] = "cont_causalc";
$proto97["m_columns"][] = "ctb_tipo_nombre";
$proto97["m_columns"][] = "cont_secop_enlace";
$proto97["m_columns"][] = "cont_dep";
$obj = new SQLTable($proto97);

$proto96["m_table"] = $obj;
$proto96["m_sql"] = "q_001_dashboard";
$proto96["m_alias"] = "";
$proto96["m_srcTableName"] = "q_001_dashboard_info";
$proto98=array();
$proto98["m_sql"] = "";
$proto98["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto98["m_column"]=$obj;
$proto98["m_contained"] = array();
$proto98["m_strCase"] = "";
$proto98["m_havingmode"] = false;
$proto98["m_inBrackets"] = false;
$proto98["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto98);

$proto96["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto96);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_001_dashboard_info";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_001_dashboard_info = createSqlQuery_q_001_dashboard_info();


	
										;

																																													

$tdataq_001_dashboard_info[".sqlquery"] = $queryData_q_001_dashboard_info;

$tableEvents["q_001_dashboard_info"] = new eventsBase;
$tdataq_001_dashboard_info[".hasEvents"] = false;

?>