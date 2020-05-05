<?php



$tdatainforme_intersup_plan_pagos = array();
$tdatainforme_intersup_plan_pagos[".searchableFields"] = array();
$tdatainforme_intersup_plan_pagos[".ShortName"] = "informe_intersup_plan_pagos";
$tdatainforme_intersup_plan_pagos[".OwnerID"] = "";
$tdatainforme_intersup_plan_pagos[".OriginalTable"] = "informe_intersup_plan_pagos";


$tdatainforme_intersup_plan_pagos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainforme_intersup_plan_pagos[".originalPagesByType"] = $tdatainforme_intersup_plan_pagos[".pagesByType"];
$tdatainforme_intersup_plan_pagos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainforme_intersup_plan_pagos[".originalPages"] = $tdatainforme_intersup_plan_pagos[".pages"];
$tdatainforme_intersup_plan_pagos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainforme_intersup_plan_pagos[".originalDefaultPages"] = $tdatainforme_intersup_plan_pagos[".defaultPages"];

//	field labels
$fieldLabelsinforme_intersup_plan_pagos = array();
$fieldToolTipsinforme_intersup_plan_pagos = array();
$pageTitlesinforme_intersup_plan_pagos = array();
$placeHoldersinforme_intersup_plan_pagos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinforme_intersup_plan_pagos["Spanish"] = array();
	$fieldToolTipsinforme_intersup_plan_pagos["Spanish"] = array();
	$placeHoldersinforme_intersup_plan_pagos["Spanish"] = array();
	$pageTitlesinforme_intersup_plan_pagos["Spanish"] = array();
	$fieldLabelsinforme_intersup_plan_pagos["Spanish"]["inf_id"] = "Inf Id";
	$fieldToolTipsinforme_intersup_plan_pagos["Spanish"]["inf_id"] = "";
	$placeHoldersinforme_intersup_plan_pagos["Spanish"]["inf_id"] = "";
	$fieldLabelsinforme_intersup_plan_pagos["Spanish"]["id_cont_fk"] = "Id";
	$fieldToolTipsinforme_intersup_plan_pagos["Spanish"]["id_cont_fk"] = "";
	$placeHoldersinforme_intersup_plan_pagos["Spanish"]["id_cont_fk"] = "";
	$fieldLabelsinforme_intersup_plan_pagos["Spanish"]["inf_consecutivo"] = "Consecutivo";
	$fieldToolTipsinforme_intersup_plan_pagos["Spanish"]["inf_consecutivo"] = "";
	$placeHoldersinforme_intersup_plan_pagos["Spanish"]["inf_consecutivo"] = "";
	$fieldLabelsinforme_intersup_plan_pagos["Spanish"]["inf_fecharep_i"] = "Fecha de inicio";
	$fieldToolTipsinforme_intersup_plan_pagos["Spanish"]["inf_fecharep_i"] = "";
	$placeHoldersinforme_intersup_plan_pagos["Spanish"]["inf_fecharep_i"] = "";
	$fieldLabelsinforme_intersup_plan_pagos["Spanish"]["inf_fecharep_f"] = "Fecha Final";
	$fieldToolTipsinforme_intersup_plan_pagos["Spanish"]["inf_fecharep_f"] = "";
	$placeHoldersinforme_intersup_plan_pagos["Spanish"]["inf_fecharep_f"] = "";
	$fieldLabelsinforme_intersup_plan_pagos["Spanish"]["inf_valorcontrato"] = "Valor del contrato";
	$fieldToolTipsinforme_intersup_plan_pagos["Spanish"]["inf_valorcontrato"] = "";
	$placeHoldersinforme_intersup_plan_pagos["Spanish"]["inf_valorcontrato"] = "";
	$fieldLabelsinforme_intersup_plan_pagos["Spanish"]["inf_valor_pago"] = "Valor mensual a pagar";
	$fieldToolTipsinforme_intersup_plan_pagos["Spanish"]["inf_valor_pago"] = "";
	$placeHoldersinforme_intersup_plan_pagos["Spanish"]["inf_valor_pago"] = "";
	$fieldLabelsinforme_intersup_plan_pagos["Spanish"]["dias_calculados"] = "Dias Calculados";
	$fieldToolTipsinforme_intersup_plan_pagos["Spanish"]["dias_calculados"] = "";
	$placeHoldersinforme_intersup_plan_pagos["Spanish"]["dias_calculados"] = "";
	$fieldLabelsinforme_intersup_plan_pagos["Spanish"]["dias_fiscales"] = "Dias Fiscales";
	$fieldToolTipsinforme_intersup_plan_pagos["Spanish"]["dias_fiscales"] = "";
	$placeHoldersinforme_intersup_plan_pagos["Spanish"]["dias_fiscales"] = "";
	$fieldLabelsinforme_intersup_plan_pagos["Spanish"]["valor_a_pagar"] = "Valor a Pagar";
	$fieldToolTipsinforme_intersup_plan_pagos["Spanish"]["valor_a_pagar"] = "";
	$placeHoldersinforme_intersup_plan_pagos["Spanish"]["valor_a_pagar"] = "";
	if (count($fieldToolTipsinforme_intersup_plan_pagos["Spanish"]))
		$tdatainforme_intersup_plan_pagos[".isUseToolTips"] = true;
}


	$tdatainforme_intersup_plan_pagos[".NCSearch"] = true;



$tdatainforme_intersup_plan_pagos[".shortTableName"] = "informe_intersup_plan_pagos";
$tdatainforme_intersup_plan_pagos[".nSecOptions"] = 0;

$tdatainforme_intersup_plan_pagos[".mainTableOwnerID"] = "";
$tdatainforme_intersup_plan_pagos[".entityType"] = 0;

$tdatainforme_intersup_plan_pagos[".strOriginalTableName"] = "informe_intersup_plan_pagos";

	



$tdatainforme_intersup_plan_pagos[".showAddInPopup"] = false;

$tdatainforme_intersup_plan_pagos[".showEditInPopup"] = false;

$tdatainforme_intersup_plan_pagos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainforme_intersup_plan_pagos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainforme_intersup_plan_pagos[".listAjax"] = false;
//	temporary
$tdatainforme_intersup_plan_pagos[".listAjax"] = false;

	$tdatainforme_intersup_plan_pagos[".audit"] = false;

	$tdatainforme_intersup_plan_pagos[".locking"] = false;


$pages = $tdatainforme_intersup_plan_pagos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainforme_intersup_plan_pagos[".edit"] = true;
	$tdatainforme_intersup_plan_pagos[".afterEditAction"] = 1;
	$tdatainforme_intersup_plan_pagos[".closePopupAfterEdit"] = 1;
	$tdatainforme_intersup_plan_pagos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainforme_intersup_plan_pagos[".add"] = true;
$tdatainforme_intersup_plan_pagos[".afterAddAction"] = 1;
$tdatainforme_intersup_plan_pagos[".closePopupAfterAdd"] = 1;
$tdatainforme_intersup_plan_pagos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainforme_intersup_plan_pagos[".list"] = true;
}



$tdatainforme_intersup_plan_pagos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainforme_intersup_plan_pagos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainforme_intersup_plan_pagos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainforme_intersup_plan_pagos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainforme_intersup_plan_pagos[".printFriendly"] = true;
}



$tdatainforme_intersup_plan_pagos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainforme_intersup_plan_pagos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainforme_intersup_plan_pagos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainforme_intersup_plan_pagos[".isUseAjaxSuggest"] = true;

$tdatainforme_intersup_plan_pagos[".rowHighlite"] = true;



						

$tdatainforme_intersup_plan_pagos[".ajaxCodeSnippetAdded"] = false;

$tdatainforme_intersup_plan_pagos[".buttonsAdded"] = false;

$tdatainforme_intersup_plan_pagos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainforme_intersup_plan_pagos[".isUseTimeForSearch"] = false;


$tdatainforme_intersup_plan_pagos[".badgeColor"] = "ff8000";


$tdatainforme_intersup_plan_pagos[".allSearchFields"] = array();
$tdatainforme_intersup_plan_pagos[".filterFields"] = array();
$tdatainforme_intersup_plan_pagos[".requiredSearchFields"] = array();

$tdatainforme_intersup_plan_pagos[".googleLikeFields"] = array();
$tdatainforme_intersup_plan_pagos[".googleLikeFields"][] = "inf_id";
$tdatainforme_intersup_plan_pagos[".googleLikeFields"][] = "id_cont_fk";
$tdatainforme_intersup_plan_pagos[".googleLikeFields"][] = "inf_consecutivo";
$tdatainforme_intersup_plan_pagos[".googleLikeFields"][] = "inf_fecharep_i";
$tdatainforme_intersup_plan_pagos[".googleLikeFields"][] = "inf_fecharep_f";
$tdatainforme_intersup_plan_pagos[".googleLikeFields"][] = "inf_valorcontrato";
$tdatainforme_intersup_plan_pagos[".googleLikeFields"][] = "inf_valor_pago";
$tdatainforme_intersup_plan_pagos[".googleLikeFields"][] = "dias_calculados";
$tdatainforme_intersup_plan_pagos[".googleLikeFields"][] = "dias_fiscales";
$tdatainforme_intersup_plan_pagos[".googleLikeFields"][] = "valor_a_pagar";



$tdatainforme_intersup_plan_pagos[".tableType"] = "list";

$tdatainforme_intersup_plan_pagos[".printerPageOrientation"] = 0;
$tdatainforme_intersup_plan_pagos[".nPrinterPageScale"] = 100;

$tdatainforme_intersup_plan_pagos[".nPrinterSplitRecords"] = 40;

$tdatainforme_intersup_plan_pagos[".geocodingEnabled"] = false;










$tdatainforme_intersup_plan_pagos[".pageSize"] = 20;

$tdatainforme_intersup_plan_pagos[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY inf_consecutivo";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainforme_intersup_plan_pagos[".strOrderBy"] = $tstrOrderBy;

$tdatainforme_intersup_plan_pagos[".orderindexes"] = array();
	$tdatainforme_intersup_plan_pagos[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "inf_consecutivo");


$tdatainforme_intersup_plan_pagos[".sqlHead"] = "SELECT inf_id,  id_cont_fk,  inf_consecutivo,  inf_fecharep_i,  inf_fecharep_f,  inf_valorcontrato,  inf_valor_pago,  dias_calculados,  dias_fiscales,  valor_a_pagar";
$tdatainforme_intersup_plan_pagos[".sqlFrom"] = "FROM informe_intersup_plan_pagos";
$tdatainforme_intersup_plan_pagos[".sqlWhereExpr"] = "";
$tdatainforme_intersup_plan_pagos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainforme_intersup_plan_pagos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainforme_intersup_plan_pagos[".arrGroupsPerPage"] = $arrGPP;

$tdatainforme_intersup_plan_pagos[".highlightSearchResults"] = true;

$tableKeysinforme_intersup_plan_pagos = array();
$tableKeysinforme_intersup_plan_pagos[] = "inf_id";
$tdatainforme_intersup_plan_pagos[".Keys"] = $tableKeysinforme_intersup_plan_pagos;


$tdatainforme_intersup_plan_pagos[".hideMobileList"] = array();




//	inf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "inf_id";
	$fdata["GoodName"] = "inf_id";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos","inf_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "inf_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_id";

	
	
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


	$tdatainforme_intersup_plan_pagos["inf_id"] = $fdata;
		$tdatainforme_intersup_plan_pagos[".searchableFields"][] = "inf_id";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos","id_cont_fk");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contrato";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"inf_valorcontrato", 'lookupF'=>"cont_valorinicial");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_valor_pago", 'lookupF'=>"cont_valormensual");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_cont";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "inf_consecutivo";

	
	
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


	$tdatainforme_intersup_plan_pagos["id_cont_fk"] = $fdata;
		$tdatainforme_intersup_plan_pagos[".searchableFields"][] = "id_cont_fk";
//	inf_consecutivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "inf_consecutivo";
	$fdata["GoodName"] = "inf_consecutivo";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos","inf_consecutivo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "inf_consecutivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_consecutivo";

	
	
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
	$edata["LookupTable"] = "q_000_control_informes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "csc_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "csc_id";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_cont_fk", "lookup" => "id_cont" );

	
	

	
	
	
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


	$tdatainforme_intersup_plan_pagos["inf_consecutivo"] = $fdata;
		$tdatainforme_intersup_plan_pagos[".searchableFields"][] = "inf_consecutivo";
//	inf_fecharep_i
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "inf_fecharep_i";
	$fdata["GoodName"] = "inf_fecharep_i";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos","inf_fecharep_i");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "inf_fecharep_i";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fecharep_i";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 10;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatainforme_intersup_plan_pagos["inf_fecharep_i"] = $fdata;
		$tdatainforme_intersup_plan_pagos[".searchableFields"][] = "inf_fecharep_i";
//	inf_fecharep_f
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inf_fecharep_f";
	$fdata["GoodName"] = "inf_fecharep_f";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos","inf_fecharep_f");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "inf_fecharep_f";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fecharep_f";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 10;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatainforme_intersup_plan_pagos["inf_fecharep_f"] = $fdata;
		$tdatainforme_intersup_plan_pagos[".searchableFields"][] = "inf_fecharep_f";
//	inf_valorcontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "inf_valorcontrato";
	$fdata["GoodName"] = "inf_valorcontrato";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos","inf_valorcontrato");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "inf_valorcontrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_valorcontrato";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatainforme_intersup_plan_pagos["inf_valorcontrato"] = $fdata;
		$tdatainforme_intersup_plan_pagos[".searchableFields"][] = "inf_valorcontrato";
//	inf_valor_pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "inf_valor_pago";
	$fdata["GoodName"] = "inf_valor_pago";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos","inf_valor_pago");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "inf_valor_pago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_valor_pago";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatainforme_intersup_plan_pagos["inf_valor_pago"] = $fdata;
		$tdatainforme_intersup_plan_pagos[".searchableFields"][] = "inf_valor_pago";
//	dias_calculados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dias_calculados";
	$fdata["GoodName"] = "dias_calculados";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos","dias_calculados");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dias_calculados";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dias_calculados";

	
	
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


	$tdatainforme_intersup_plan_pagos["dias_calculados"] = $fdata;
		$tdatainforme_intersup_plan_pagos[".searchableFields"][] = "dias_calculados";
//	dias_fiscales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dias_fiscales";
	$fdata["GoodName"] = "dias_fiscales";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos","dias_fiscales");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dias_fiscales";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dias_fiscales";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatainforme_intersup_plan_pagos["dias_fiscales"] = $fdata;
		$tdatainforme_intersup_plan_pagos[".searchableFields"][] = "dias_fiscales";
//	valor_a_pagar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "valor_a_pagar";
	$fdata["GoodName"] = "valor_a_pagar";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos","valor_a_pagar");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "valor_a_pagar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_a_pagar";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatainforme_intersup_plan_pagos["valor_a_pagar"] = $fdata;
		$tdatainforme_intersup_plan_pagos[".searchableFields"][] = "valor_a_pagar";


$tables_data["informe_intersup_plan_pagos"]=&$tdatainforme_intersup_plan_pagos;
$field_labels["informe_intersup_plan_pagos"] = &$fieldLabelsinforme_intersup_plan_pagos;
$fieldToolTips["informe_intersup_plan_pagos"] = &$fieldToolTipsinforme_intersup_plan_pagos;
$placeHolders["informe_intersup_plan_pagos"] = &$placeHoldersinforme_intersup_plan_pagos;
$page_titles["informe_intersup_plan_pagos"] = &$pageTitlesinforme_intersup_plan_pagos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["informe_intersup_plan_pagos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["informe_intersup_plan_pagos"] = array();



	
				$strOriginalDetailsTable="q_informes_supervision_activos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_informes_supervision_activos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_informes_supervision_activos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["informe_intersup_plan_pagos"][0] = $masterParams;
				$masterTablesData["informe_intersup_plan_pagos"][0]["masterKeys"] = array();
	$masterTablesData["informe_intersup_plan_pagos"][0]["masterKeys"][]="id_cont_fk";
				$masterTablesData["informe_intersup_plan_pagos"][0]["detailKeys"] = array();
	$masterTablesData["informe_intersup_plan_pagos"][0]["detailKeys"][]="id_cont_fk";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_informe_intersup_plan_pagos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inf_id,  id_cont_fk,  inf_consecutivo,  inf_fecharep_i,  inf_fecharep_f,  inf_valorcontrato,  inf_valor_pago,  dias_calculados,  dias_fiscales,  valor_a_pagar";
$proto0["m_strFrom"] = "FROM informe_intersup_plan_pagos";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY inf_consecutivo";
	
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
	"m_strName" => "inf_id",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos"
));

$proto6["m_sql"] = "inf_id";
$proto6["m_srcTableName"] = "informe_intersup_plan_pagos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos"
));

$proto8["m_sql"] = "id_cont_fk";
$proto8["m_srcTableName"] = "informe_intersup_plan_pagos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_consecutivo",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos"
));

$proto10["m_sql"] = "inf_consecutivo";
$proto10["m_srcTableName"] = "informe_intersup_plan_pagos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fecharep_i",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos"
));

$proto12["m_sql"] = "inf_fecharep_i";
$proto12["m_srcTableName"] = "informe_intersup_plan_pagos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fecharep_f",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos"
));

$proto14["m_sql"] = "inf_fecharep_f";
$proto14["m_srcTableName"] = "informe_intersup_plan_pagos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_valorcontrato",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos"
));

$proto16["m_sql"] = "inf_valorcontrato";
$proto16["m_srcTableName"] = "informe_intersup_plan_pagos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_valor_pago",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos"
));

$proto18["m_sql"] = "inf_valor_pago";
$proto18["m_srcTableName"] = "informe_intersup_plan_pagos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dias_calculados",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos"
));

$proto20["m_sql"] = "dias_calculados";
$proto20["m_srcTableName"] = "informe_intersup_plan_pagos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dias_fiscales",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos"
));

$proto22["m_sql"] = "dias_fiscales";
$proto22["m_srcTableName"] = "informe_intersup_plan_pagos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_a_pagar",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos"
));

$proto24["m_sql"] = "valor_a_pagar";
$proto24["m_srcTableName"] = "informe_intersup_plan_pagos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "informe_intersup_plan_pagos";
$proto27["m_srcTableName"] = "informe_intersup_plan_pagos";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "inf_id";
$proto27["m_columns"][] = "id_cont_fk";
$proto27["m_columns"][] = "inf_consecutivo";
$proto27["m_columns"][] = "inf_fecharep_i";
$proto27["m_columns"][] = "inf_fecharep_f";
$proto27["m_columns"][] = "inf_valorcontrato";
$proto27["m_columns"][] = "inf_valor_pago";
$proto27["m_columns"][] = "dias_calculados";
$proto27["m_columns"][] = "dias_fiscales";
$proto27["m_columns"][] = "valor_a_pagar";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "informe_intersup_plan_pagos";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "informe_intersup_plan_pagos";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "inf_consecutivo",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 1;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="informe_intersup_plan_pagos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_informe_intersup_plan_pagos = createSqlQuery_informe_intersup_plan_pagos();


	
										;

										

$tdatainforme_intersup_plan_pagos[".sqlquery"] = $queryData_informe_intersup_plan_pagos;

include_once(getabspath("include/informe_intersup_plan_pagos_events.php"));
$tableEvents["informe_intersup_plan_pagos"] = new eventclass_informe_intersup_plan_pagos;
$tdatainforme_intersup_plan_pagos[".hasEvents"] = true;

?>