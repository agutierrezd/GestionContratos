<?php



$tdatacontrato_rp = array();
$tdatacontrato_rp[".searchableFields"] = array();
$tdatacontrato_rp[".ShortName"] = "contrato_rp";
$tdatacontrato_rp[".OwnerID"] = "";
$tdatacontrato_rp[".OriginalTable"] = "contrato_rp";


$tdatacontrato_rp[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_rp[".originalPagesByType"] = $tdatacontrato_rp[".pagesByType"];
$tdatacontrato_rp[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_rp[".originalPages"] = $tdatacontrato_rp[".pages"];
$tdatacontrato_rp[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_rp[".originalDefaultPages"] = $tdatacontrato_rp[".defaultPages"];

//	field labels
$fieldLabelscontrato_rp = array();
$fieldToolTipscontrato_rp = array();
$pageTitlescontrato_rp = array();
$placeHolderscontrato_rp = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_rp["Spanish"] = array();
	$fieldToolTipscontrato_rp["Spanish"] = array();
	$placeHolderscontrato_rp["Spanish"] = array();
	$pageTitlescontrato_rp["Spanish"] = array();
	$fieldLabelscontrato_rp["Spanish"]["rp_id"] = "Rp Id";
	$fieldToolTipscontrato_rp["Spanish"]["rp_id"] = "";
	$placeHolderscontrato_rp["Spanish"]["rp_id"] = "";
	$fieldLabelscontrato_rp["Spanish"]["id_cont_FK"] = "Id Cont FK";
	$fieldToolTipscontrato_rp["Spanish"]["id_cont_FK"] = "";
	$placeHolderscontrato_rp["Spanish"]["id_cont_FK"] = "";
	$fieldLabelscontrato_rp["Spanish"]["num_rp"] = "Número de RP";
	$fieldToolTipscontrato_rp["Spanish"]["num_rp"] = "";
	$placeHolderscontrato_rp["Spanish"]["num_rp"] = "";
	$fieldLabelscontrato_rp["Spanish"]["fecha_rp"] = "Fecha de Registro";
	$fieldToolTipscontrato_rp["Spanish"]["fecha_rp"] = "";
	$placeHolderscontrato_rp["Spanish"]["fecha_rp"] = "";
	$fieldLabelscontrato_rp["Spanish"]["dependencias_rp"] = "Dependencias";
	$fieldToolTipscontrato_rp["Spanish"]["dependencias_rp"] = "";
	$placeHolderscontrato_rp["Spanish"]["dependencias_rp"] = "";
	$fieldLabelscontrato_rp["Spanish"]["avg_participacion"] = "% Participación";
	$fieldToolTipscontrato_rp["Spanish"]["avg_participacion"] = "";
	$placeHolderscontrato_rp["Spanish"]["avg_participacion"] = "";
	$fieldLabelscontrato_rp["Spanish"]["valor_participacion"] = "Valor participación";
	$fieldToolTipscontrato_rp["Spanish"]["valor_participacion"] = "";
	$placeHolderscontrato_rp["Spanish"]["valor_participacion"] = "";
	$fieldLabelscontrato_rp["Spanish"]["valor_total_cdp"] = "Valor Total RP";
	$fieldToolTipscontrato_rp["Spanish"]["valor_total_cdp"] = "";
	$placeHolderscontrato_rp["Spanish"]["valor_total_cdp"] = "";
	$fieldLabelscontrato_rp["Spanish"]["cdp_obs"] = "Novedades";
	$fieldToolTipscontrato_rp["Spanish"]["cdp_obs"] = "";
	$placeHolderscontrato_rp["Spanish"]["cdp_obs"] = "";
	$fieldLabelscontrato_rp["Spanish"]["sys_last_upd"] = "Sys Last Upd";
	$fieldToolTipscontrato_rp["Spanish"]["sys_last_upd"] = "";
	$placeHolderscontrato_rp["Spanish"]["sys_last_upd"] = "";
	if (count($fieldToolTipscontrato_rp["Spanish"]))
		$tdatacontrato_rp[".isUseToolTips"] = true;
}


	$tdatacontrato_rp[".NCSearch"] = true;



$tdatacontrato_rp[".shortTableName"] = "contrato_rp";
$tdatacontrato_rp[".nSecOptions"] = 0;

$tdatacontrato_rp[".mainTableOwnerID"] = "";
$tdatacontrato_rp[".entityType"] = 0;

$tdatacontrato_rp[".strOriginalTableName"] = "contrato_rp";

	



$tdatacontrato_rp[".showAddInPopup"] = false;

$tdatacontrato_rp[".showEditInPopup"] = false;

$tdatacontrato_rp[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrato_rp[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrato_rp[".listAjax"] = false;
//	temporary
$tdatacontrato_rp[".listAjax"] = false;

	$tdatacontrato_rp[".audit"] = true;

	$tdatacontrato_rp[".locking"] = true;


$pages = $tdatacontrato_rp[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_rp[".edit"] = true;
	$tdatacontrato_rp[".afterEditAction"] = 1;
	$tdatacontrato_rp[".closePopupAfterEdit"] = 1;
	$tdatacontrato_rp[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_rp[".add"] = true;
$tdatacontrato_rp[".afterAddAction"] = 1;
$tdatacontrato_rp[".closePopupAfterAdd"] = 1;
$tdatacontrato_rp[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_rp[".list"] = true;
}



$tdatacontrato_rp[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_rp[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_rp[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_rp[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_rp[".printFriendly"] = true;
}



$tdatacontrato_rp[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_rp[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_rp[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_rp[".isUseAjaxSuggest"] = true;

$tdatacontrato_rp[".rowHighlite"] = true;



												

$tdatacontrato_rp[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_rp[".buttonsAdded"] = false;

$tdatacontrato_rp[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_rp[".isUseTimeForSearch"] = false;


$tdatacontrato_rp[".badgeColor"] = "bc8f8f";


$tdatacontrato_rp[".allSearchFields"] = array();
$tdatacontrato_rp[".filterFields"] = array();
$tdatacontrato_rp[".requiredSearchFields"] = array();

$tdatacontrato_rp[".googleLikeFields"] = array();
$tdatacontrato_rp[".googleLikeFields"][] = "rp_id";
$tdatacontrato_rp[".googleLikeFields"][] = "id_cont_FK";
$tdatacontrato_rp[".googleLikeFields"][] = "num_rp";
$tdatacontrato_rp[".googleLikeFields"][] = "fecha_rp";
$tdatacontrato_rp[".googleLikeFields"][] = "dependencias_rp";
$tdatacontrato_rp[".googleLikeFields"][] = "avg_participacion";
$tdatacontrato_rp[".googleLikeFields"][] = "valor_participacion";
$tdatacontrato_rp[".googleLikeFields"][] = "valor_total_cdp";
$tdatacontrato_rp[".googleLikeFields"][] = "cdp_obs";
$tdatacontrato_rp[".googleLikeFields"][] = "sys_last_upd";



$tdatacontrato_rp[".tableType"] = "list";

$tdatacontrato_rp[".printerPageOrientation"] = 0;
$tdatacontrato_rp[".nPrinterPageScale"] = 100;

$tdatacontrato_rp[".nPrinterSplitRecords"] = 40;

$tdatacontrato_rp[".geocodingEnabled"] = false;










$tdatacontrato_rp[".pageSize"] = 20;

$tdatacontrato_rp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrato_rp[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_rp[".orderindexes"] = array();

$tdatacontrato_rp[".sqlHead"] = "SELECT rp_id,  	id_cont_FK,  	num_rp,  	fecha_rp,  	dependencias_rp,  	avg_participacion,  	valor_participacion,  	valor_total_cdp,  	cdp_obs,  	sys_last_upd";
$tdatacontrato_rp[".sqlFrom"] = "FROM contrato_rp";
$tdatacontrato_rp[".sqlWhereExpr"] = "";
$tdatacontrato_rp[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_rp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_rp[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_rp[".highlightSearchResults"] = true;

$tableKeyscontrato_rp = array();
$tableKeyscontrato_rp[] = "rp_id";
$tdatacontrato_rp[".Keys"] = $tableKeyscontrato_rp;


$tdatacontrato_rp[".hideMobileList"] = array();




//	rp_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rp_id";
	$fdata["GoodName"] = "rp_id";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","rp_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "rp_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rp_id";

	
	
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


	$tdatacontrato_rp["rp_id"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "rp_id";
//	id_cont_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_FK";
	$fdata["GoodName"] = "id_cont_FK";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","id_cont_FK");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_cont_FK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont_FK";

	
	
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_cont";

	

	
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


	$tdatacontrato_rp["id_cont_FK"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "id_cont_FK";
//	num_rp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "num_rp";
	$fdata["GoodName"] = "num_rp";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","num_rp");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "num_rp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "num_rp";

	
	
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


	$tdatacontrato_rp["num_rp"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "num_rp";
//	fecha_rp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_rp";
	$fdata["GoodName"] = "fecha_rp";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","fecha_rp");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha_rp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_rp";

	
	
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


	$tdatacontrato_rp["fecha_rp"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "fecha_rp";
//	dependencias_rp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dependencias_rp";
	$fdata["GoodName"] = "dependencias_rp";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","dependencias_rp");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dependencias_rp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dependencias_rp";

	
	
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
	$edata["LookupTable"] = "dependencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatacontrato_rp["dependencias_rp"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "dependencias_rp";
//	avg_participacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "avg_participacion";
	$fdata["GoodName"] = "avg_participacion";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","avg_participacion");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "avg_participacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "avg_participacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 3;

	
	
	
	
	
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


	$tdatacontrato_rp["avg_participacion"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "avg_participacion";
//	valor_participacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "valor_participacion";
	$fdata["GoodName"] = "valor_participacion";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","valor_participacion");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "valor_participacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_participacion";

	
	
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


	$tdatacontrato_rp["valor_participacion"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "valor_participacion";
//	valor_total_cdp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "valor_total_cdp";
	$fdata["GoodName"] = "valor_total_cdp";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","valor_total_cdp");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "valor_total_cdp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_total_cdp";

	
	
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


	$tdatacontrato_rp["valor_total_cdp"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "valor_total_cdp";
//	cdp_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cdp_obs";
	$fdata["GoodName"] = "cdp_obs";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","cdp_obs");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cdp_obs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cdp_obs";

	
	
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


	$tdatacontrato_rp["cdp_obs"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "cdp_obs";
//	sys_last_upd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sys_last_upd";
	$fdata["GoodName"] = "sys_last_upd";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","sys_last_upd");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "sys_last_upd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_last_upd";

	
	
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


	$tdatacontrato_rp["sys_last_upd"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "sys_last_upd";


$tables_data["contrato_rp"]=&$tdatacontrato_rp;
$field_labels["contrato_rp"] = &$fieldLabelscontrato_rp;
$fieldToolTips["contrato_rp"] = &$fieldToolTipscontrato_rp;
$placeHolders["contrato_rp"] = &$placeHolderscontrato_rp;
$page_titles["contrato_rp"] = &$pageTitlescontrato_rp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contrato_rp"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["contrato_rp"] = array();



	
				$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_rp"][0] = $masterParams;
				$masterTablesData["contrato_rp"][0]["masterKeys"] = array();
	$masterTablesData["contrato_rp"][0]["masterKeys"][]="id_cont";
				$masterTablesData["contrato_rp"][0]["detailKeys"] = array();
	$masterTablesData["contrato_rp"][0]["detailKeys"][]="id_cont_FK";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_contrato_rp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rp_id,  	id_cont_FK,  	num_rp,  	fecha_rp,  	dependencias_rp,  	avg_participacion,  	valor_participacion,  	valor_total_cdp,  	cdp_obs,  	sys_last_upd";
$proto0["m_strFrom"] = "FROM contrato_rp";
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
	"m_strName" => "rp_id",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto6["m_sql"] = "rp_id";
$proto6["m_srcTableName"] = "contrato_rp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_FK",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto8["m_sql"] = "id_cont_FK";
$proto8["m_srcTableName"] = "contrato_rp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "num_rp",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto10["m_sql"] = "num_rp";
$proto10["m_srcTableName"] = "contrato_rp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_rp",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto12["m_sql"] = "fecha_rp";
$proto12["m_srcTableName"] = "contrato_rp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dependencias_rp",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto14["m_sql"] = "dependencias_rp";
$proto14["m_srcTableName"] = "contrato_rp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "avg_participacion",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto16["m_sql"] = "avg_participacion";
$proto16["m_srcTableName"] = "contrato_rp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_participacion",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto18["m_sql"] = "valor_participacion";
$proto18["m_srcTableName"] = "contrato_rp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_total_cdp",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto20["m_sql"] = "valor_total_cdp";
$proto20["m_srcTableName"] = "contrato_rp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cdp_obs",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto22["m_sql"] = "cdp_obs";
$proto22["m_srcTableName"] = "contrato_rp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_last_upd",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto24["m_sql"] = "sys_last_upd";
$proto24["m_srcTableName"] = "contrato_rp";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "contrato_rp";
$proto27["m_srcTableName"] = "contrato_rp";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "rp_id";
$proto27["m_columns"][] = "id_cont_FK";
$proto27["m_columns"][] = "num_rp";
$proto27["m_columns"][] = "fecha_rp";
$proto27["m_columns"][] = "dependencias_rp";
$proto27["m_columns"][] = "avg_participacion";
$proto27["m_columns"][] = "valor_participacion";
$proto27["m_columns"][] = "valor_total_cdp";
$proto27["m_columns"][] = "cdp_obs";
$proto27["m_columns"][] = "sys_last_upd";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "contrato_rp";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "contrato_rp";
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
$proto0["m_srcTableName"]="contrato_rp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_rp = createSqlQuery_contrato_rp();


	
										;

										

$tdatacontrato_rp[".sqlquery"] = $queryData_contrato_rp;

$tableEvents["contrato_rp"] = new eventsBase;
$tdatacontrato_rp[".hasEvents"] = false;

?>