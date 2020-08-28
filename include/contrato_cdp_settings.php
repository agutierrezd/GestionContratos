<?php



$tdatacontrato_cdp = array();
$tdatacontrato_cdp[".searchableFields"] = array();
$tdatacontrato_cdp[".ShortName"] = "contrato_cdp";
$tdatacontrato_cdp[".OwnerID"] = "";
$tdatacontrato_cdp[".OriginalTable"] = "contrato_cdp";


$tdatacontrato_cdp[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_cdp[".originalPagesByType"] = $tdatacontrato_cdp[".pagesByType"];
$tdatacontrato_cdp[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_cdp[".originalPages"] = $tdatacontrato_cdp[".pages"];
$tdatacontrato_cdp[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_cdp[".originalDefaultPages"] = $tdatacontrato_cdp[".defaultPages"];

//	field labels
$fieldLabelscontrato_cdp = array();
$fieldToolTipscontrato_cdp = array();
$pageTitlescontrato_cdp = array();
$placeHolderscontrato_cdp = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_cdp["Spanish"] = array();
	$fieldToolTipscontrato_cdp["Spanish"] = array();
	$placeHolderscontrato_cdp["Spanish"] = array();
	$pageTitlescontrato_cdp["Spanish"] = array();
	$fieldLabelscontrato_cdp["Spanish"]["cdp_id"] = "Cdp Id";
	$fieldToolTipscontrato_cdp["Spanish"]["cdp_id"] = "";
	$placeHolderscontrato_cdp["Spanish"]["cdp_id"] = "";
	$fieldLabelscontrato_cdp["Spanish"]["id_cont_FK"] = "Id Cont FK";
	$fieldToolTipscontrato_cdp["Spanish"]["id_cont_FK"] = "";
	$placeHolderscontrato_cdp["Spanish"]["id_cont_FK"] = "";
	$fieldLabelscontrato_cdp["Spanish"]["num_cdp"] = "Número de CDP";
	$fieldToolTipscontrato_cdp["Spanish"]["num_cdp"] = "";
	$placeHolderscontrato_cdp["Spanish"]["num_cdp"] = "";
	$fieldLabelscontrato_cdp["Spanish"]["fecha_cdp"] = "Fecha CDP";
	$fieldToolTipscontrato_cdp["Spanish"]["fecha_cdp"] = "";
	$placeHolderscontrato_cdp["Spanish"]["fecha_cdp"] = "";
	$fieldLabelscontrato_cdp["Spanish"]["dependencias"] = "Dependencias";
	$fieldToolTipscontrato_cdp["Spanish"]["dependencias"] = "";
	$placeHolderscontrato_cdp["Spanish"]["dependencias"] = "";
	$fieldLabelscontrato_cdp["Spanish"]["avg_participacion"] = "% Participación";
	$fieldToolTipscontrato_cdp["Spanish"]["avg_participacion"] = "";
	$placeHolderscontrato_cdp["Spanish"]["avg_participacion"] = "";
	$fieldLabelscontrato_cdp["Spanish"]["valor_participacion"] = "Valor Participación";
	$fieldToolTipscontrato_cdp["Spanish"]["valor_participacion"] = "";
	$placeHolderscontrato_cdp["Spanish"]["valor_participacion"] = "";
	$fieldLabelscontrato_cdp["Spanish"]["valor_total_cdp"] = "Valor Total CDP";
	$fieldToolTipscontrato_cdp["Spanish"]["valor_total_cdp"] = "";
	$placeHolderscontrato_cdp["Spanish"]["valor_total_cdp"] = "";
	$fieldLabelscontrato_cdp["Spanish"]["cdp_obs"] = "Novedades";
	$fieldToolTipscontrato_cdp["Spanish"]["cdp_obs"] = "";
	$placeHolderscontrato_cdp["Spanish"]["cdp_obs"] = "";
	$fieldLabelscontrato_cdp["Spanish"]["sys_last_upd"] = "Sys Last Upd";
	$fieldToolTipscontrato_cdp["Spanish"]["sys_last_upd"] = "";
	$placeHolderscontrato_cdp["Spanish"]["sys_last_upd"] = "";
	if (count($fieldToolTipscontrato_cdp["Spanish"]))
		$tdatacontrato_cdp[".isUseToolTips"] = true;
}


	$tdatacontrato_cdp[".NCSearch"] = true;



$tdatacontrato_cdp[".shortTableName"] = "contrato_cdp";
$tdatacontrato_cdp[".nSecOptions"] = 0;

$tdatacontrato_cdp[".mainTableOwnerID"] = "";
$tdatacontrato_cdp[".entityType"] = 0;

$tdatacontrato_cdp[".strOriginalTableName"] = "contrato_cdp";

	



$tdatacontrato_cdp[".showAddInPopup"] = false;

$tdatacontrato_cdp[".showEditInPopup"] = false;

$tdatacontrato_cdp[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrato_cdp[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrato_cdp[".listAjax"] = false;
//	temporary
$tdatacontrato_cdp[".listAjax"] = false;

	$tdatacontrato_cdp[".audit"] = true;

	$tdatacontrato_cdp[".locking"] = true;


$pages = $tdatacontrato_cdp[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_cdp[".edit"] = true;
	$tdatacontrato_cdp[".afterEditAction"] = 1;
	$tdatacontrato_cdp[".closePopupAfterEdit"] = 1;
	$tdatacontrato_cdp[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_cdp[".add"] = true;
$tdatacontrato_cdp[".afterAddAction"] = 1;
$tdatacontrato_cdp[".closePopupAfterAdd"] = 1;
$tdatacontrato_cdp[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_cdp[".list"] = true;
}



$tdatacontrato_cdp[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_cdp[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_cdp[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_cdp[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_cdp[".printFriendly"] = true;
}



$tdatacontrato_cdp[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_cdp[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_cdp[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_cdp[".isUseAjaxSuggest"] = true;

$tdatacontrato_cdp[".rowHighlite"] = true;



												

$tdatacontrato_cdp[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_cdp[".buttonsAdded"] = false;

$tdatacontrato_cdp[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_cdp[".isUseTimeForSearch"] = false;


$tdatacontrato_cdp[".badgeColor"] = "2f4f4f";


$tdatacontrato_cdp[".allSearchFields"] = array();
$tdatacontrato_cdp[".filterFields"] = array();
$tdatacontrato_cdp[".requiredSearchFields"] = array();

$tdatacontrato_cdp[".googleLikeFields"] = array();
$tdatacontrato_cdp[".googleLikeFields"][] = "cdp_id";
$tdatacontrato_cdp[".googleLikeFields"][] = "id_cont_FK";
$tdatacontrato_cdp[".googleLikeFields"][] = "num_cdp";
$tdatacontrato_cdp[".googleLikeFields"][] = "fecha_cdp";
$tdatacontrato_cdp[".googleLikeFields"][] = "dependencias";
$tdatacontrato_cdp[".googleLikeFields"][] = "avg_participacion";
$tdatacontrato_cdp[".googleLikeFields"][] = "valor_participacion";
$tdatacontrato_cdp[".googleLikeFields"][] = "valor_total_cdp";
$tdatacontrato_cdp[".googleLikeFields"][] = "cdp_obs";
$tdatacontrato_cdp[".googleLikeFields"][] = "sys_last_upd";



$tdatacontrato_cdp[".tableType"] = "list";

$tdatacontrato_cdp[".printerPageOrientation"] = 0;
$tdatacontrato_cdp[".nPrinterPageScale"] = 100;

$tdatacontrato_cdp[".nPrinterSplitRecords"] = 40;

$tdatacontrato_cdp[".geocodingEnabled"] = false;










$tdatacontrato_cdp[".pageSize"] = 20;

$tdatacontrato_cdp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrato_cdp[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_cdp[".orderindexes"] = array();

$tdatacontrato_cdp[".sqlHead"] = "SELECT cdp_id,  	id_cont_FK,  	num_cdp,  	fecha_cdp,  	dependencias,  	avg_participacion,  	valor_participacion,  	valor_total_cdp,  	cdp_obs,  	sys_last_upd";
$tdatacontrato_cdp[".sqlFrom"] = "FROM contrato_cdp";
$tdatacontrato_cdp[".sqlWhereExpr"] = "";
$tdatacontrato_cdp[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_cdp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_cdp[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_cdp[".highlightSearchResults"] = true;

$tableKeyscontrato_cdp = array();
$tableKeyscontrato_cdp[] = "cdp_id";
$tdatacontrato_cdp[".Keys"] = $tableKeyscontrato_cdp;


$tdatacontrato_cdp[".hideMobileList"] = array();




//	cdp_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cdp_id";
	$fdata["GoodName"] = "cdp_id";
	$fdata["ownerTable"] = "contrato_cdp";
	$fdata["Label"] = GetFieldLabel("contrato_cdp","cdp_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cdp_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cdp_id";

	
	
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


	$tdatacontrato_cdp["cdp_id"] = $fdata;
		$tdatacontrato_cdp[".searchableFields"][] = "cdp_id";
//	id_cont_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_FK";
	$fdata["GoodName"] = "id_cont_FK";
	$fdata["ownerTable"] = "contrato_cdp";
	$fdata["Label"] = GetFieldLabel("contrato_cdp","id_cont_FK");
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


	$tdatacontrato_cdp["id_cont_FK"] = $fdata;
		$tdatacontrato_cdp[".searchableFields"][] = "id_cont_FK";
//	num_cdp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "num_cdp";
	$fdata["GoodName"] = "num_cdp";
	$fdata["ownerTable"] = "contrato_cdp";
	$fdata["Label"] = GetFieldLabel("contrato_cdp","num_cdp");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "num_cdp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "num_cdp";

	
	
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


	$tdatacontrato_cdp["num_cdp"] = $fdata;
		$tdatacontrato_cdp[".searchableFields"][] = "num_cdp";
//	fecha_cdp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_cdp";
	$fdata["GoodName"] = "fecha_cdp";
	$fdata["ownerTable"] = "contrato_cdp";
	$fdata["Label"] = GetFieldLabel("contrato_cdp","fecha_cdp");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha_cdp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_cdp";

	
	
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


	$tdatacontrato_cdp["fecha_cdp"] = $fdata;
		$tdatacontrato_cdp[".searchableFields"][] = "fecha_cdp";
//	dependencias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dependencias";
	$fdata["GoodName"] = "dependencias";
	$fdata["ownerTable"] = "contrato_cdp";
	$fdata["Label"] = GetFieldLabel("contrato_cdp","dependencias");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dependencias";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dependencias";

	
	
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
	$edata["LinkFieldType"] = 3;
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


	$tdatacontrato_cdp["dependencias"] = $fdata;
		$tdatacontrato_cdp[".searchableFields"][] = "dependencias";
//	avg_participacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "avg_participacion";
	$fdata["GoodName"] = "avg_participacion";
	$fdata["ownerTable"] = "contrato_cdp";
	$fdata["Label"] = GetFieldLabel("contrato_cdp","avg_participacion");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "avg_participacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "avg_participacion";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdatacontrato_cdp["avg_participacion"] = $fdata;
		$tdatacontrato_cdp[".searchableFields"][] = "avg_participacion";
//	valor_participacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "valor_participacion";
	$fdata["GoodName"] = "valor_participacion";
	$fdata["ownerTable"] = "contrato_cdp";
	$fdata["Label"] = GetFieldLabel("contrato_cdp","valor_participacion");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "valor_participacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_participacion";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
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


	$tdatacontrato_cdp["valor_participacion"] = $fdata;
		$tdatacontrato_cdp[".searchableFields"][] = "valor_participacion";
//	valor_total_cdp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "valor_total_cdp";
	$fdata["GoodName"] = "valor_total_cdp";
	$fdata["ownerTable"] = "contrato_cdp";
	$fdata["Label"] = GetFieldLabel("contrato_cdp","valor_total_cdp");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
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


	$tdatacontrato_cdp["valor_total_cdp"] = $fdata;
		$tdatacontrato_cdp[".searchableFields"][] = "valor_total_cdp";
//	cdp_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cdp_obs";
	$fdata["GoodName"] = "cdp_obs";
	$fdata["ownerTable"] = "contrato_cdp";
	$fdata["Label"] = GetFieldLabel("contrato_cdp","cdp_obs");
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatacontrato_cdp["cdp_obs"] = $fdata;
		$tdatacontrato_cdp[".searchableFields"][] = "cdp_obs";
//	sys_last_upd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sys_last_upd";
	$fdata["GoodName"] = "sys_last_upd";
	$fdata["ownerTable"] = "contrato_cdp";
	$fdata["Label"] = GetFieldLabel("contrato_cdp","sys_last_upd");
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


	$tdatacontrato_cdp["sys_last_upd"] = $fdata;
		$tdatacontrato_cdp[".searchableFields"][] = "sys_last_upd";


$tables_data["contrato_cdp"]=&$tdatacontrato_cdp;
$field_labels["contrato_cdp"] = &$fieldLabelscontrato_cdp;
$fieldToolTips["contrato_cdp"] = &$fieldToolTipscontrato_cdp;
$placeHolders["contrato_cdp"] = &$placeHolderscontrato_cdp;
$page_titles["contrato_cdp"] = &$pageTitlescontrato_cdp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contrato_cdp"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["contrato_cdp"] = array();



	
				$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_cdp"][0] = $masterParams;
				$masterTablesData["contrato_cdp"][0]["masterKeys"] = array();
	$masterTablesData["contrato_cdp"][0]["masterKeys"][]="id_cont";
				$masterTablesData["contrato_cdp"][0]["detailKeys"] = array();
	$masterTablesData["contrato_cdp"][0]["detailKeys"][]="id_cont_FK";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_contrato_cdp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cdp_id,  	id_cont_FK,  	num_cdp,  	fecha_cdp,  	dependencias,  	avg_participacion,  	valor_participacion,  	valor_total_cdp,  	cdp_obs,  	sys_last_upd";
$proto0["m_strFrom"] = "FROM contrato_cdp";
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
	"m_strName" => "cdp_id",
	"m_strTable" => "contrato_cdp",
	"m_srcTableName" => "contrato_cdp"
));

$proto6["m_sql"] = "cdp_id";
$proto6["m_srcTableName"] = "contrato_cdp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_FK",
	"m_strTable" => "contrato_cdp",
	"m_srcTableName" => "contrato_cdp"
));

$proto8["m_sql"] = "id_cont_FK";
$proto8["m_srcTableName"] = "contrato_cdp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "num_cdp",
	"m_strTable" => "contrato_cdp",
	"m_srcTableName" => "contrato_cdp"
));

$proto10["m_sql"] = "num_cdp";
$proto10["m_srcTableName"] = "contrato_cdp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_cdp",
	"m_strTable" => "contrato_cdp",
	"m_srcTableName" => "contrato_cdp"
));

$proto12["m_sql"] = "fecha_cdp";
$proto12["m_srcTableName"] = "contrato_cdp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dependencias",
	"m_strTable" => "contrato_cdp",
	"m_srcTableName" => "contrato_cdp"
));

$proto14["m_sql"] = "dependencias";
$proto14["m_srcTableName"] = "contrato_cdp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "avg_participacion",
	"m_strTable" => "contrato_cdp",
	"m_srcTableName" => "contrato_cdp"
));

$proto16["m_sql"] = "avg_participacion";
$proto16["m_srcTableName"] = "contrato_cdp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_participacion",
	"m_strTable" => "contrato_cdp",
	"m_srcTableName" => "contrato_cdp"
));

$proto18["m_sql"] = "valor_participacion";
$proto18["m_srcTableName"] = "contrato_cdp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_total_cdp",
	"m_strTable" => "contrato_cdp",
	"m_srcTableName" => "contrato_cdp"
));

$proto20["m_sql"] = "valor_total_cdp";
$proto20["m_srcTableName"] = "contrato_cdp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cdp_obs",
	"m_strTable" => "contrato_cdp",
	"m_srcTableName" => "contrato_cdp"
));

$proto22["m_sql"] = "cdp_obs";
$proto22["m_srcTableName"] = "contrato_cdp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_last_upd",
	"m_strTable" => "contrato_cdp",
	"m_srcTableName" => "contrato_cdp"
));

$proto24["m_sql"] = "sys_last_upd";
$proto24["m_srcTableName"] = "contrato_cdp";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "contrato_cdp";
$proto27["m_srcTableName"] = "contrato_cdp";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "cdp_id";
$proto27["m_columns"][] = "id_cont_FK";
$proto27["m_columns"][] = "num_cdp";
$proto27["m_columns"][] = "fecha_cdp";
$proto27["m_columns"][] = "dependencias";
$proto27["m_columns"][] = "avg_participacion";
$proto27["m_columns"][] = "valor_participacion";
$proto27["m_columns"][] = "valor_total_cdp";
$proto27["m_columns"][] = "cdp_obs";
$proto27["m_columns"][] = "sys_last_upd";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "contrato_cdp";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "contrato_cdp";
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
$proto0["m_srcTableName"]="contrato_cdp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_cdp = createSqlQuery_contrato_cdp();


	
										;

										

$tdatacontrato_cdp[".sqlquery"] = $queryData_contrato_cdp;

$tableEvents["contrato_cdp"] = new eventsBase;
$tdatacontrato_cdp[".hasEvents"] = false;

?>