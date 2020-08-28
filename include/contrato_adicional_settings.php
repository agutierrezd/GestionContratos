<?php



$tdatacontrato_adicional = array();
$tdatacontrato_adicional[".searchableFields"] = array();
$tdatacontrato_adicional[".ShortName"] = "contrato_adicional";
$tdatacontrato_adicional[".OwnerID"] = "";
$tdatacontrato_adicional[".OriginalTable"] = "contrato_adicional";


$tdatacontrato_adicional[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_adicional[".originalPagesByType"] = $tdatacontrato_adicional[".pagesByType"];
$tdatacontrato_adicional[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_adicional[".originalPages"] = $tdatacontrato_adicional[".pages"];
$tdatacontrato_adicional[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_adicional[".originalDefaultPages"] = $tdatacontrato_adicional[".defaultPages"];

//	field labels
$fieldLabelscontrato_adicional = array();
$fieldToolTipscontrato_adicional = array();
$pageTitlescontrato_adicional = array();
$placeHolderscontrato_adicional = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_adicional["Spanish"] = array();
	$fieldToolTipscontrato_adicional["Spanish"] = array();
	$placeHolderscontrato_adicional["Spanish"] = array();
	$pageTitlescontrato_adicional["Spanish"] = array();
	$fieldLabelscontrato_adicional["Spanish"]["adic_id"] = "Adic Id";
	$fieldToolTipscontrato_adicional["Spanish"]["adic_id"] = "";
	$placeHolderscontrato_adicional["Spanish"]["adic_id"] = "";
	$fieldLabelscontrato_adicional["Spanish"]["id_cont_fk"] = "Id Cont Fk";
	$fieldToolTipscontrato_adicional["Spanish"]["id_cont_fk"] = "";
	$placeHolderscontrato_adicional["Spanish"]["id_cont_fk"] = "";
	$fieldLabelscontrato_adicional["Spanish"]["adi_fecha_suscri"] = "Adi Fecha Suscri";
	$fieldToolTipscontrato_adicional["Spanish"]["adi_fecha_suscri"] = "";
	$placeHolderscontrato_adicional["Spanish"]["adi_fecha_suscri"] = "";
	$fieldLabelscontrato_adicional["Spanish"]["adi_fecha_ini"] = "Adi Fecha Ini";
	$fieldToolTipscontrato_adicional["Spanish"]["adi_fecha_ini"] = "";
	$placeHolderscontrato_adicional["Spanish"]["adi_fecha_ini"] = "";
	$fieldLabelscontrato_adicional["Spanish"]["adi_observ"] = "Adi Observ";
	$fieldToolTipscontrato_adicional["Spanish"]["adi_observ"] = "";
	$placeHolderscontrato_adicional["Spanish"]["adi_observ"] = "";
	$fieldLabelscontrato_adicional["Spanish"]["adi_valor"] = "Adi Valor";
	$fieldToolTipscontrato_adicional["Spanish"]["adi_valor"] = "";
	$placeHolderscontrato_adicional["Spanish"]["adi_valor"] = "";
	if (count($fieldToolTipscontrato_adicional["Spanish"]))
		$tdatacontrato_adicional[".isUseToolTips"] = true;
}


	$tdatacontrato_adicional[".NCSearch"] = true;



$tdatacontrato_adicional[".shortTableName"] = "contrato_adicional";
$tdatacontrato_adicional[".nSecOptions"] = 0;

$tdatacontrato_adicional[".mainTableOwnerID"] = "";
$tdatacontrato_adicional[".entityType"] = 0;

$tdatacontrato_adicional[".strOriginalTableName"] = "contrato_adicional";

	



$tdatacontrato_adicional[".showAddInPopup"] = false;

$tdatacontrato_adicional[".showEditInPopup"] = false;

$tdatacontrato_adicional[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrato_adicional[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrato_adicional[".listAjax"] = false;
//	temporary
$tdatacontrato_adicional[".listAjax"] = false;

	$tdatacontrato_adicional[".audit"] = false;

	$tdatacontrato_adicional[".locking"] = false;


$pages = $tdatacontrato_adicional[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_adicional[".edit"] = true;
	$tdatacontrato_adicional[".afterEditAction"] = 1;
	$tdatacontrato_adicional[".closePopupAfterEdit"] = 1;
	$tdatacontrato_adicional[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_adicional[".add"] = true;
$tdatacontrato_adicional[".afterAddAction"] = 1;
$tdatacontrato_adicional[".closePopupAfterAdd"] = 1;
$tdatacontrato_adicional[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_adicional[".list"] = true;
}



$tdatacontrato_adicional[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_adicional[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_adicional[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_adicional[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_adicional[".printFriendly"] = true;
}



$tdatacontrato_adicional[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_adicional[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_adicional[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_adicional[".isUseAjaxSuggest"] = true;

$tdatacontrato_adicional[".rowHighlite"] = true;



												

$tdatacontrato_adicional[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_adicional[".buttonsAdded"] = false;

$tdatacontrato_adicional[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_adicional[".isUseTimeForSearch"] = false;


$tdatacontrato_adicional[".badgeColor"] = "edca00";


$tdatacontrato_adicional[".allSearchFields"] = array();
$tdatacontrato_adicional[".filterFields"] = array();
$tdatacontrato_adicional[".requiredSearchFields"] = array();

$tdatacontrato_adicional[".googleLikeFields"] = array();
$tdatacontrato_adicional[".googleLikeFields"][] = "adic_id";
$tdatacontrato_adicional[".googleLikeFields"][] = "id_cont_fk";
$tdatacontrato_adicional[".googleLikeFields"][] = "adi_fecha_suscri";
$tdatacontrato_adicional[".googleLikeFields"][] = "adi_fecha_ini";
$tdatacontrato_adicional[".googleLikeFields"][] = "adi_observ";
$tdatacontrato_adicional[".googleLikeFields"][] = "adi_valor";



$tdatacontrato_adicional[".tableType"] = "list";

$tdatacontrato_adicional[".printerPageOrientation"] = 0;
$tdatacontrato_adicional[".nPrinterPageScale"] = 100;

$tdatacontrato_adicional[".nPrinterSplitRecords"] = 40;

$tdatacontrato_adicional[".geocodingEnabled"] = false;










$tdatacontrato_adicional[".pageSize"] = 20;

$tdatacontrato_adicional[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrato_adicional[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_adicional[".orderindexes"] = array();

$tdatacontrato_adicional[".sqlHead"] = "SELECT adic_id,  	id_cont_fk,  	adi_fecha_suscri,  	adi_fecha_ini,  	adi_observ,  	adi_valor";
$tdatacontrato_adicional[".sqlFrom"] = "FROM contrato_adicional";
$tdatacontrato_adicional[".sqlWhereExpr"] = "";
$tdatacontrato_adicional[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_adicional[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_adicional[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_adicional[".highlightSearchResults"] = true;

$tableKeyscontrato_adicional = array();
$tableKeyscontrato_adicional[] = "adic_id";
$tdatacontrato_adicional[".Keys"] = $tableKeyscontrato_adicional;


$tdatacontrato_adicional[".hideMobileList"] = array();




//	adic_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "adic_id";
	$fdata["GoodName"] = "adic_id";
	$fdata["ownerTable"] = "contrato_adicional";
	$fdata["Label"] = GetFieldLabel("contrato_adicional","adic_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "adic_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adic_id";

	
	
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


	$tdatacontrato_adicional["adic_id"] = $fdata;
		$tdatacontrato_adicional[".searchableFields"][] = "adic_id";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "contrato_adicional";
	$fdata["Label"] = GetFieldLabel("contrato_adicional","id_cont_fk");
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


	$tdatacontrato_adicional["id_cont_fk"] = $fdata;
		$tdatacontrato_adicional[".searchableFields"][] = "id_cont_fk";
//	adi_fecha_suscri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "adi_fecha_suscri";
	$fdata["GoodName"] = "adi_fecha_suscri";
	$fdata["ownerTable"] = "contrato_adicional";
	$fdata["Label"] = GetFieldLabel("contrato_adicional","adi_fecha_suscri");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "adi_fecha_suscri";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adi_fecha_suscri";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatacontrato_adicional["adi_fecha_suscri"] = $fdata;
		$tdatacontrato_adicional[".searchableFields"][] = "adi_fecha_suscri";
//	adi_fecha_ini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "adi_fecha_ini";
	$fdata["GoodName"] = "adi_fecha_ini";
	$fdata["ownerTable"] = "contrato_adicional";
	$fdata["Label"] = GetFieldLabel("contrato_adicional","adi_fecha_ini");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "adi_fecha_ini";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adi_fecha_ini";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatacontrato_adicional["adi_fecha_ini"] = $fdata;
		$tdatacontrato_adicional[".searchableFields"][] = "adi_fecha_ini";
//	adi_observ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "adi_observ";
	$fdata["GoodName"] = "adi_observ";
	$fdata["ownerTable"] = "contrato_adicional";
	$fdata["Label"] = GetFieldLabel("contrato_adicional","adi_observ");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "adi_observ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adi_observ";

	
	
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
			$edata["EditParams"].= " maxlength=5000";

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


	$tdatacontrato_adicional["adi_observ"] = $fdata;
		$tdatacontrato_adicional[".searchableFields"][] = "adi_observ";
//	adi_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "adi_valor";
	$fdata["GoodName"] = "adi_valor";
	$fdata["ownerTable"] = "contrato_adicional";
	$fdata["Label"] = GetFieldLabel("contrato_adicional","adi_valor");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "adi_valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adi_valor";

	
	
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


	$tdatacontrato_adicional["adi_valor"] = $fdata;
		$tdatacontrato_adicional[".searchableFields"][] = "adi_valor";


$tables_data["contrato_adicional"]=&$tdatacontrato_adicional;
$field_labels["contrato_adicional"] = &$fieldLabelscontrato_adicional;
$fieldToolTips["contrato_adicional"] = &$fieldToolTipscontrato_adicional;
$placeHolders["contrato_adicional"] = &$placeHolderscontrato_adicional;
$page_titles["contrato_adicional"] = &$pageTitlescontrato_adicional;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contrato_adicional"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["contrato_adicional"] = array();



	
				$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_adicional"][0] = $masterParams;
				$masterTablesData["contrato_adicional"][0]["masterKeys"] = array();
	$masterTablesData["contrato_adicional"][0]["masterKeys"][]="id_cont";
				$masterTablesData["contrato_adicional"][0]["detailKeys"] = array();
	$masterTablesData["contrato_adicional"][0]["detailKeys"][]="id_cont_fk";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_contrato_adicional()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "adic_id,  	id_cont_fk,  	adi_fecha_suscri,  	adi_fecha_ini,  	adi_observ,  	adi_valor";
$proto0["m_strFrom"] = "FROM contrato_adicional";
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
	"m_strName" => "adic_id",
	"m_strTable" => "contrato_adicional",
	"m_srcTableName" => "contrato_adicional"
));

$proto6["m_sql"] = "adic_id";
$proto6["m_srcTableName"] = "contrato_adicional";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "contrato_adicional",
	"m_srcTableName" => "contrato_adicional"
));

$proto8["m_sql"] = "id_cont_fk";
$proto8["m_srcTableName"] = "contrato_adicional";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "adi_fecha_suscri",
	"m_strTable" => "contrato_adicional",
	"m_srcTableName" => "contrato_adicional"
));

$proto10["m_sql"] = "adi_fecha_suscri";
$proto10["m_srcTableName"] = "contrato_adicional";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "adi_fecha_ini",
	"m_strTable" => "contrato_adicional",
	"m_srcTableName" => "contrato_adicional"
));

$proto12["m_sql"] = "adi_fecha_ini";
$proto12["m_srcTableName"] = "contrato_adicional";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "adi_observ",
	"m_strTable" => "contrato_adicional",
	"m_srcTableName" => "contrato_adicional"
));

$proto14["m_sql"] = "adi_observ";
$proto14["m_srcTableName"] = "contrato_adicional";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "adi_valor",
	"m_strTable" => "contrato_adicional",
	"m_srcTableName" => "contrato_adicional"
));

$proto16["m_sql"] = "adi_valor";
$proto16["m_srcTableName"] = "contrato_adicional";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "contrato_adicional";
$proto19["m_srcTableName"] = "contrato_adicional";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "adic_id";
$proto19["m_columns"][] = "id_cont_fk";
$proto19["m_columns"][] = "adi_fecha_suscri";
$proto19["m_columns"][] = "adi_fecha_ini";
$proto19["m_columns"][] = "adi_observ";
$proto19["m_columns"][] = "adi_valor";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "contrato_adicional";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "contrato_adicional";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato_adicional";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_adicional = createSqlQuery_contrato_adicional();


	
										;

						

$tdatacontrato_adicional[".sqlquery"] = $queryData_contrato_adicional;

$tableEvents["contrato_adicional"] = new eventsBase;
$tdatacontrato_adicional[".hasEvents"] = false;

?>