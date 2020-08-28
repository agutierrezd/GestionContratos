<?php



$tdataq_000_control_informes = array();
$tdataq_000_control_informes[".searchableFields"] = array();
$tdataq_000_control_informes[".ShortName"] = "q_000_control_informes";
$tdataq_000_control_informes[".OwnerID"] = "";
$tdataq_000_control_informes[".OriginalTable"] = "q_000_control_informes";


$tdataq_000_control_informes[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataq_000_control_informes[".originalPagesByType"] = $tdataq_000_control_informes[".pagesByType"];
$tdataq_000_control_informes[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataq_000_control_informes[".originalPages"] = $tdataq_000_control_informes[".pages"];
$tdataq_000_control_informes[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataq_000_control_informes[".originalDefaultPages"] = $tdataq_000_control_informes[".defaultPages"];

//	field labels
$fieldLabelsq_000_control_informes = array();
$fieldToolTipsq_000_control_informes = array();
$pageTitlesq_000_control_informes = array();
$placeHoldersq_000_control_informes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_000_control_informes["Spanish"] = array();
	$fieldToolTipsq_000_control_informes["Spanish"] = array();
	$placeHoldersq_000_control_informes["Spanish"] = array();
	$pageTitlesq_000_control_informes["Spanish"] = array();
	$fieldLabelsq_000_control_informes["Spanish"]["id_cont"] = "Id Cont";
	$fieldToolTipsq_000_control_informes["Spanish"]["id_cont"] = "";
	$placeHoldersq_000_control_informes["Spanish"]["id_cont"] = "";
	$fieldLabelsq_000_control_informes["Spanish"]["qty_informes_actuales"] = "Qty Informes Actuales";
	$fieldToolTipsq_000_control_informes["Spanish"]["qty_informes_actuales"] = "";
	$placeHoldersq_000_control_informes["Spanish"]["qty_informes_actuales"] = "";
	$fieldLabelsq_000_control_informes["Spanish"]["csc_id"] = "Csc Id";
	$fieldToolTipsq_000_control_informes["Spanish"]["csc_id"] = "";
	$placeHoldersq_000_control_informes["Spanish"]["csc_id"] = "";
	$fieldLabelsq_000_control_informes["Spanish"]["primer_informe"] = "Primer Informe";
	$fieldToolTipsq_000_control_informes["Spanish"]["primer_informe"] = "";
	$placeHoldersq_000_control_informes["Spanish"]["primer_informe"] = "";
	$fieldLabelsq_000_control_informes["Spanish"]["ultimo_informe"] = "Ultimo Informe";
	$fieldToolTipsq_000_control_informes["Spanish"]["ultimo_informe"] = "";
	$placeHoldersq_000_control_informes["Spanish"]["ultimo_informe"] = "";
	$fieldLabelsq_000_control_informes["Spanish"]["ultimo_informeA"] = "Ultimo InformeA";
	$fieldToolTipsq_000_control_informes["Spanish"]["ultimo_informeA"] = "";
	$placeHoldersq_000_control_informes["Spanish"]["ultimo_informeA"] = "";
	if (count($fieldToolTipsq_000_control_informes["Spanish"]))
		$tdataq_000_control_informes[".isUseToolTips"] = true;
}


	$tdataq_000_control_informes[".NCSearch"] = true;



$tdataq_000_control_informes[".shortTableName"] = "q_000_control_informes";
$tdataq_000_control_informes[".nSecOptions"] = 0;

$tdataq_000_control_informes[".mainTableOwnerID"] = "";
$tdataq_000_control_informes[".entityType"] = 0;

$tdataq_000_control_informes[".strOriginalTableName"] = "q_000_control_informes";

	



$tdataq_000_control_informes[".showAddInPopup"] = false;

$tdataq_000_control_informes[".showEditInPopup"] = false;

$tdataq_000_control_informes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataq_000_control_informes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataq_000_control_informes[".listAjax"] = false;
//	temporary
$tdataq_000_control_informes[".listAjax"] = false;

	$tdataq_000_control_informes[".audit"] = true;

	$tdataq_000_control_informes[".locking"] = true;


$pages = $tdataq_000_control_informes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_000_control_informes[".edit"] = true;
	$tdataq_000_control_informes[".afterEditAction"] = 1;
	$tdataq_000_control_informes[".closePopupAfterEdit"] = 1;
	$tdataq_000_control_informes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_000_control_informes[".add"] = true;
$tdataq_000_control_informes[".afterAddAction"] = 1;
$tdataq_000_control_informes[".closePopupAfterAdd"] = 1;
$tdataq_000_control_informes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_000_control_informes[".list"] = true;
}



$tdataq_000_control_informes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_000_control_informes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_000_control_informes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_000_control_informes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_000_control_informes[".printFriendly"] = true;
}



$tdataq_000_control_informes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_000_control_informes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_000_control_informes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_000_control_informes[".isUseAjaxSuggest"] = true;

$tdataq_000_control_informes[".rowHighlite"] = true;



						

$tdataq_000_control_informes[".ajaxCodeSnippetAdded"] = false;

$tdataq_000_control_informes[".buttonsAdded"] = false;

$tdataq_000_control_informes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_000_control_informes[".isUseTimeForSearch"] = false;


$tdataq_000_control_informes[".badgeColor"] = "E8926F";


$tdataq_000_control_informes[".allSearchFields"] = array();
$tdataq_000_control_informes[".filterFields"] = array();
$tdataq_000_control_informes[".requiredSearchFields"] = array();

$tdataq_000_control_informes[".googleLikeFields"] = array();
$tdataq_000_control_informes[".googleLikeFields"][] = "id_cont";
$tdataq_000_control_informes[".googleLikeFields"][] = "qty_informes_actuales";
$tdataq_000_control_informes[".googleLikeFields"][] = "csc_id";
$tdataq_000_control_informes[".googleLikeFields"][] = "primer_informe";
$tdataq_000_control_informes[".googleLikeFields"][] = "ultimo_informe";
$tdataq_000_control_informes[".googleLikeFields"][] = "ultimo_informeA";



$tdataq_000_control_informes[".tableType"] = "list";

$tdataq_000_control_informes[".printerPageOrientation"] = 0;
$tdataq_000_control_informes[".nPrinterPageScale"] = 100;

$tdataq_000_control_informes[".nPrinterSplitRecords"] = 40;

$tdataq_000_control_informes[".geocodingEnabled"] = false;










$tdataq_000_control_informes[".pageSize"] = 20;

$tdataq_000_control_informes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_000_control_informes[".strOrderBy"] = $tstrOrderBy;

$tdataq_000_control_informes[".orderindexes"] = array();

$tdataq_000_control_informes[".sqlHead"] = "SELECT id_cont,  	qty_informes_actuales,  	csc_id,  	primer_informe,  	ultimo_informe,  	ultimo_informeA";
$tdataq_000_control_informes[".sqlFrom"] = "FROM q_000_control_informes";
$tdataq_000_control_informes[".sqlWhereExpr"] = "";
$tdataq_000_control_informes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_000_control_informes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_000_control_informes[".arrGroupsPerPage"] = $arrGPP;

$tdataq_000_control_informes[".highlightSearchResults"] = true;

$tableKeysq_000_control_informes = array();
$tdataq_000_control_informes[".Keys"] = $tableKeysq_000_control_informes;


$tdataq_000_control_informes[".hideMobileList"] = array();




//	id_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cont";
	$fdata["GoodName"] = "id_cont";
	$fdata["ownerTable"] = "q_000_control_informes";
	$fdata["Label"] = GetFieldLabel("q_000_control_informes","id_cont");
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


	$tdataq_000_control_informes["id_cont"] = $fdata;
		$tdataq_000_control_informes[".searchableFields"][] = "id_cont";
//	qty_informes_actuales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "qty_informes_actuales";
	$fdata["GoodName"] = "qty_informes_actuales";
	$fdata["ownerTable"] = "q_000_control_informes";
	$fdata["Label"] = GetFieldLabel("q_000_control_informes","qty_informes_actuales");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "qty_informes_actuales";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qty_informes_actuales";

	
	
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


	$tdataq_000_control_informes["qty_informes_actuales"] = $fdata;
		$tdataq_000_control_informes[".searchableFields"][] = "qty_informes_actuales";
//	csc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "csc_id";
	$fdata["GoodName"] = "csc_id";
	$fdata["ownerTable"] = "q_000_control_informes";
	$fdata["Label"] = GetFieldLabel("q_000_control_informes","csc_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "csc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "csc_id";

	
	
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


	$tdataq_000_control_informes["csc_id"] = $fdata;
		$tdataq_000_control_informes[".searchableFields"][] = "csc_id";
//	primer_informe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "primer_informe";
	$fdata["GoodName"] = "primer_informe";
	$fdata["ownerTable"] = "q_000_control_informes";
	$fdata["Label"] = GetFieldLabel("q_000_control_informes","primer_informe");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "primer_informe";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "primer_informe";

	
	
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


	$tdataq_000_control_informes["primer_informe"] = $fdata;
		$tdataq_000_control_informes[".searchableFields"][] = "primer_informe";
//	ultimo_informe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ultimo_informe";
	$fdata["GoodName"] = "ultimo_informe";
	$fdata["ownerTable"] = "q_000_control_informes";
	$fdata["Label"] = GetFieldLabel("q_000_control_informes","ultimo_informe");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "ultimo_informe";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ultimo_informe";

	
	
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


	$tdataq_000_control_informes["ultimo_informe"] = $fdata;
		$tdataq_000_control_informes[".searchableFields"][] = "ultimo_informe";
//	ultimo_informeA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ultimo_informeA";
	$fdata["GoodName"] = "ultimo_informeA";
	$fdata["ownerTable"] = "q_000_control_informes";
	$fdata["Label"] = GetFieldLabel("q_000_control_informes","ultimo_informeA");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "ultimo_informeA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ultimo_informeA";

	
	
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


	$tdataq_000_control_informes["ultimo_informeA"] = $fdata;
		$tdataq_000_control_informes[".searchableFields"][] = "ultimo_informeA";


$tables_data["q_000_control_informes"]=&$tdataq_000_control_informes;
$field_labels["q_000_control_informes"] = &$fieldLabelsq_000_control_informes;
$fieldToolTips["q_000_control_informes"] = &$fieldToolTipsq_000_control_informes;
$placeHolders["q_000_control_informes"] = &$placeHoldersq_000_control_informes;
$page_titles["q_000_control_informes"] = &$pageTitlesq_000_control_informes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_000_control_informes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["q_000_control_informes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_000_control_informes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cont,  	qty_informes_actuales,  	csc_id,  	primer_informe,  	ultimo_informe,  	ultimo_informeA";
$proto0["m_strFrom"] = "FROM q_000_control_informes";
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
	"m_strTable" => "q_000_control_informes",
	"m_srcTableName" => "q_000_control_informes"
));

$proto6["m_sql"] = "id_cont";
$proto6["m_srcTableName"] = "q_000_control_informes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "qty_informes_actuales",
	"m_strTable" => "q_000_control_informes",
	"m_srcTableName" => "q_000_control_informes"
));

$proto8["m_sql"] = "qty_informes_actuales";
$proto8["m_srcTableName"] = "q_000_control_informes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "csc_id",
	"m_strTable" => "q_000_control_informes",
	"m_srcTableName" => "q_000_control_informes"
));

$proto10["m_sql"] = "csc_id";
$proto10["m_srcTableName"] = "q_000_control_informes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "primer_informe",
	"m_strTable" => "q_000_control_informes",
	"m_srcTableName" => "q_000_control_informes"
));

$proto12["m_sql"] = "primer_informe";
$proto12["m_srcTableName"] = "q_000_control_informes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ultimo_informe",
	"m_strTable" => "q_000_control_informes",
	"m_srcTableName" => "q_000_control_informes"
));

$proto14["m_sql"] = "ultimo_informe";
$proto14["m_srcTableName"] = "q_000_control_informes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ultimo_informeA",
	"m_strTable" => "q_000_control_informes",
	"m_srcTableName" => "q_000_control_informes"
));

$proto16["m_sql"] = "ultimo_informeA";
$proto16["m_srcTableName"] = "q_000_control_informes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "q_000_control_informes";
$proto19["m_srcTableName"] = "q_000_control_informes";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id_cont";
$proto19["m_columns"][] = "qty_informes_actuales";
$proto19["m_columns"][] = "csc_id";
$proto19["m_columns"][] = "primer_informe";
$proto19["m_columns"][] = "ultimo_informe";
$proto19["m_columns"][] = "ultimo_informeA";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "q_000_control_informes";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "q_000_control_informes";
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
$proto0["m_srcTableName"]="q_000_control_informes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_000_control_informes = createSqlQuery_q_000_control_informes();


	
										;

						

$tdataq_000_control_informes[".sqlquery"] = $queryData_q_000_control_informes;

$tableEvents["q_000_control_informes"] = new eventsBase;
$tdataq_000_control_informes[".hasEvents"] = false;

?>