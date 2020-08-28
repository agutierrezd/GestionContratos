<?php



$tdatainforme_intersup_plan_pagos_st = array();
$tdatainforme_intersup_plan_pagos_st[".searchableFields"] = array();
$tdatainforme_intersup_plan_pagos_st[".ShortName"] = "informe_intersup_plan_pagos_st";
$tdatainforme_intersup_plan_pagos_st[".OwnerID"] = "";
$tdatainforme_intersup_plan_pagos_st[".OriginalTable"] = "informe_intersup_plan_pagos_st";


$tdatainforme_intersup_plan_pagos_st[".pagesByType"] = my_json_decode( "{}" );
$tdatainforme_intersup_plan_pagos_st[".originalPagesByType"] = $tdatainforme_intersup_plan_pagos_st[".pagesByType"];
$tdatainforme_intersup_plan_pagos_st[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatainforme_intersup_plan_pagos_st[".originalPages"] = $tdatainforme_intersup_plan_pagos_st[".pages"];
$tdatainforme_intersup_plan_pagos_st[".defaultPages"] = my_json_decode( "{}" );
$tdatainforme_intersup_plan_pagos_st[".originalDefaultPages"] = $tdatainforme_intersup_plan_pagos_st[".defaultPages"];

//	field labels
$fieldLabelsinforme_intersup_plan_pagos_st = array();
$fieldToolTipsinforme_intersup_plan_pagos_st = array();
$pageTitlesinforme_intersup_plan_pagos_st = array();
$placeHoldersinforme_intersup_plan_pagos_st = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinforme_intersup_plan_pagos_st["Spanish"] = array();
	$fieldToolTipsinforme_intersup_plan_pagos_st["Spanish"] = array();
	$placeHoldersinforme_intersup_plan_pagos_st["Spanish"] = array();
	$pageTitlesinforme_intersup_plan_pagos_st["Spanish"] = array();
	$fieldLabelsinforme_intersup_plan_pagos_st["Spanish"]["st_id"] = "St Id";
	$fieldToolTipsinforme_intersup_plan_pagos_st["Spanish"]["st_id"] = "";
	$placeHoldersinforme_intersup_plan_pagos_st["Spanish"]["st_id"] = "";
	$fieldLabelsinforme_intersup_plan_pagos_st["Spanish"]["st_name"] = "St Name";
	$fieldToolTipsinforme_intersup_plan_pagos_st["Spanish"]["st_name"] = "";
	$placeHoldersinforme_intersup_plan_pagos_st["Spanish"]["st_name"] = "";
	if (count($fieldToolTipsinforme_intersup_plan_pagos_st["Spanish"]))
		$tdatainforme_intersup_plan_pagos_st[".isUseToolTips"] = true;
}


	$tdatainforme_intersup_plan_pagos_st[".NCSearch"] = true;



$tdatainforme_intersup_plan_pagos_st[".shortTableName"] = "informe_intersup_plan_pagos_st";
$tdatainforme_intersup_plan_pagos_st[".nSecOptions"] = 0;

$tdatainforme_intersup_plan_pagos_st[".mainTableOwnerID"] = "";
$tdatainforme_intersup_plan_pagos_st[".entityType"] = 0;

$tdatainforme_intersup_plan_pagos_st[".strOriginalTableName"] = "informe_intersup_plan_pagos_st";

	



$tdatainforme_intersup_plan_pagos_st[".showAddInPopup"] = false;

$tdatainforme_intersup_plan_pagos_st[".showEditInPopup"] = false;

$tdatainforme_intersup_plan_pagos_st[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainforme_intersup_plan_pagos_st[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainforme_intersup_plan_pagos_st[".listAjax"] = false;
//	temporary
$tdatainforme_intersup_plan_pagos_st[".listAjax"] = false;

	$tdatainforme_intersup_plan_pagos_st[".audit"] = true;

	$tdatainforme_intersup_plan_pagos_st[".locking"] = true;


$pages = $tdatainforme_intersup_plan_pagos_st[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainforme_intersup_plan_pagos_st[".edit"] = true;
	$tdatainforme_intersup_plan_pagos_st[".afterEditAction"] = 1;
	$tdatainforme_intersup_plan_pagos_st[".closePopupAfterEdit"] = 1;
	$tdatainforme_intersup_plan_pagos_st[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainforme_intersup_plan_pagos_st[".add"] = true;
$tdatainforme_intersup_plan_pagos_st[".afterAddAction"] = 1;
$tdatainforme_intersup_plan_pagos_st[".closePopupAfterAdd"] = 1;
$tdatainforme_intersup_plan_pagos_st[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainforme_intersup_plan_pagos_st[".list"] = true;
}



$tdatainforme_intersup_plan_pagos_st[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainforme_intersup_plan_pagos_st[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainforme_intersup_plan_pagos_st[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainforme_intersup_plan_pagos_st[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainforme_intersup_plan_pagos_st[".printFriendly"] = true;
}



$tdatainforme_intersup_plan_pagos_st[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainforme_intersup_plan_pagos_st[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainforme_intersup_plan_pagos_st[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainforme_intersup_plan_pagos_st[".isUseAjaxSuggest"] = true;

$tdatainforme_intersup_plan_pagos_st[".rowHighlite"] = true;



						

$tdatainforme_intersup_plan_pagos_st[".ajaxCodeSnippetAdded"] = false;

$tdatainforme_intersup_plan_pagos_st[".buttonsAdded"] = false;

$tdatainforme_intersup_plan_pagos_st[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainforme_intersup_plan_pagos_st[".isUseTimeForSearch"] = false;


$tdatainforme_intersup_plan_pagos_st[".badgeColor"] = "6DA5C8";


$tdatainforme_intersup_plan_pagos_st[".allSearchFields"] = array();
$tdatainforme_intersup_plan_pagos_st[".filterFields"] = array();
$tdatainforme_intersup_plan_pagos_st[".requiredSearchFields"] = array();

$tdatainforme_intersup_plan_pagos_st[".googleLikeFields"] = array();
$tdatainforme_intersup_plan_pagos_st[".googleLikeFields"][] = "st_id";
$tdatainforme_intersup_plan_pagos_st[".googleLikeFields"][] = "st_name";



$tdatainforme_intersup_plan_pagos_st[".tableType"] = "list";

$tdatainforme_intersup_plan_pagos_st[".printerPageOrientation"] = 0;
$tdatainforme_intersup_plan_pagos_st[".nPrinterPageScale"] = 100;

$tdatainforme_intersup_plan_pagos_st[".nPrinterSplitRecords"] = 40;

$tdatainforme_intersup_plan_pagos_st[".geocodingEnabled"] = false;










$tdatainforme_intersup_plan_pagos_st[".pageSize"] = 20;

$tdatainforme_intersup_plan_pagos_st[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainforme_intersup_plan_pagos_st[".strOrderBy"] = $tstrOrderBy;

$tdatainforme_intersup_plan_pagos_st[".orderindexes"] = array();

$tdatainforme_intersup_plan_pagos_st[".sqlHead"] = "SELECT st_id,  	st_name";
$tdatainforme_intersup_plan_pagos_st[".sqlFrom"] = "FROM informe_intersup_plan_pagos_st";
$tdatainforme_intersup_plan_pagos_st[".sqlWhereExpr"] = "";
$tdatainforme_intersup_plan_pagos_st[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainforme_intersup_plan_pagos_st[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainforme_intersup_plan_pagos_st[".arrGroupsPerPage"] = $arrGPP;

$tdatainforme_intersup_plan_pagos_st[".highlightSearchResults"] = true;

$tableKeysinforme_intersup_plan_pagos_st = array();
$tableKeysinforme_intersup_plan_pagos_st[] = "st_id";
$tdatainforme_intersup_plan_pagos_st[".Keys"] = $tableKeysinforme_intersup_plan_pagos_st;


$tdatainforme_intersup_plan_pagos_st[".hideMobileList"] = array();




//	st_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "st_id";
	$fdata["GoodName"] = "st_id";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos_st";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos_st","st_id");
	$fdata["FieldType"] = 16;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "st_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "st_id";

	
	
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


	$tdatainforme_intersup_plan_pagos_st["st_id"] = $fdata;
		$tdatainforme_intersup_plan_pagos_st[".searchableFields"][] = "st_id";
//	st_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "st_name";
	$fdata["GoodName"] = "st_name";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos_st";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos_st","st_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "st_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "st_name";

	
	
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


	$tdatainforme_intersup_plan_pagos_st["st_name"] = $fdata;
		$tdatainforme_intersup_plan_pagos_st[".searchableFields"][] = "st_name";


$tables_data["informe_intersup_plan_pagos_st"]=&$tdatainforme_intersup_plan_pagos_st;
$field_labels["informe_intersup_plan_pagos_st"] = &$fieldLabelsinforme_intersup_plan_pagos_st;
$fieldToolTips["informe_intersup_plan_pagos_st"] = &$fieldToolTipsinforme_intersup_plan_pagos_st;
$placeHolders["informe_intersup_plan_pagos_st"] = &$placeHoldersinforme_intersup_plan_pagos_st;
$page_titles["informe_intersup_plan_pagos_st"] = &$pageTitlesinforme_intersup_plan_pagos_st;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["informe_intersup_plan_pagos_st"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["informe_intersup_plan_pagos_st"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_informe_intersup_plan_pagos_st()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "st_id,  	st_name";
$proto0["m_strFrom"] = "FROM informe_intersup_plan_pagos_st";
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
	"m_strName" => "st_id",
	"m_strTable" => "informe_intersup_plan_pagos_st",
	"m_srcTableName" => "informe_intersup_plan_pagos_st"
));

$proto6["m_sql"] = "st_id";
$proto6["m_srcTableName"] = "informe_intersup_plan_pagos_st";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "st_name",
	"m_strTable" => "informe_intersup_plan_pagos_st",
	"m_srcTableName" => "informe_intersup_plan_pagos_st"
));

$proto8["m_sql"] = "st_name";
$proto8["m_srcTableName"] = "informe_intersup_plan_pagos_st";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "informe_intersup_plan_pagos_st";
$proto11["m_srcTableName"] = "informe_intersup_plan_pagos_st";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "st_id";
$proto11["m_columns"][] = "st_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "informe_intersup_plan_pagos_st";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "informe_intersup_plan_pagos_st";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="informe_intersup_plan_pagos_st";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_informe_intersup_plan_pagos_st = createSqlQuery_informe_intersup_plan_pagos_st();


	
										;

		

$tdatainforme_intersup_plan_pagos_st[".sqlquery"] = $queryData_informe_intersup_plan_pagos_st;

$tableEvents["informe_intersup_plan_pagos_st"] = new eventsBase;
$tdatainforme_intersup_plan_pagos_st[".hasEvents"] = false;

?>