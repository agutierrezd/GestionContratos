<?php



$tdataglobal_unspsc = array();
$tdataglobal_unspsc[".searchableFields"] = array();
$tdataglobal_unspsc[".ShortName"] = "global_unspsc";
$tdataglobal_unspsc[".OwnerID"] = "";
$tdataglobal_unspsc[".OriginalTable"] = "global_unspsc";


$tdataglobal_unspsc[".pagesByType"] = my_json_decode( "{}" );
$tdataglobal_unspsc[".originalPagesByType"] = $tdataglobal_unspsc[".pagesByType"];
$tdataglobal_unspsc[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataglobal_unspsc[".originalPages"] = $tdataglobal_unspsc[".pages"];
$tdataglobal_unspsc[".defaultPages"] = my_json_decode( "{}" );
$tdataglobal_unspsc[".originalDefaultPages"] = $tdataglobal_unspsc[".defaultPages"];

//	field labels
$fieldLabelsglobal_unspsc = array();
$fieldToolTipsglobal_unspsc = array();
$pageTitlesglobal_unspsc = array();
$placeHoldersglobal_unspsc = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_unspsc["Spanish"] = array();
	$fieldToolTipsglobal_unspsc["Spanish"] = array();
	$placeHoldersglobal_unspsc["Spanish"] = array();
	$pageTitlesglobal_unspsc["Spanish"] = array();
	$fieldLabelsglobal_unspsc["Spanish"]["COD_UNSPSC"] = "COD UNSPSC";
	$fieldToolTipsglobal_unspsc["Spanish"]["COD_UNSPSC"] = "";
	$placeHoldersglobal_unspsc["Spanish"]["COD_UNSPSC"] = "";
	$fieldLabelsglobal_unspsc["Spanish"]["DESC_UNSPSC"] = "DESC UNSPSC";
	$fieldToolTipsglobal_unspsc["Spanish"]["DESC_UNSPSC"] = "";
	$placeHoldersglobal_unspsc["Spanish"]["DESC_UNSPSC"] = "";
	if (count($fieldToolTipsglobal_unspsc["Spanish"]))
		$tdataglobal_unspsc[".isUseToolTips"] = true;
}


	$tdataglobal_unspsc[".NCSearch"] = true;



$tdataglobal_unspsc[".shortTableName"] = "global_unspsc";
$tdataglobal_unspsc[".nSecOptions"] = 0;

$tdataglobal_unspsc[".mainTableOwnerID"] = "";
$tdataglobal_unspsc[".entityType"] = 0;

$tdataglobal_unspsc[".strOriginalTableName"] = "global_unspsc";

	



$tdataglobal_unspsc[".showAddInPopup"] = false;

$tdataglobal_unspsc[".showEditInPopup"] = false;

$tdataglobal_unspsc[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataglobal_unspsc[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataglobal_unspsc[".listAjax"] = false;
//	temporary
$tdataglobal_unspsc[".listAjax"] = false;

	$tdataglobal_unspsc[".audit"] = true;

	$tdataglobal_unspsc[".locking"] = true;


$pages = $tdataglobal_unspsc[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_unspsc[".edit"] = true;
	$tdataglobal_unspsc[".afterEditAction"] = 1;
	$tdataglobal_unspsc[".closePopupAfterEdit"] = 1;
	$tdataglobal_unspsc[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_unspsc[".add"] = true;
$tdataglobal_unspsc[".afterAddAction"] = 1;
$tdataglobal_unspsc[".closePopupAfterAdd"] = 1;
$tdataglobal_unspsc[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_unspsc[".list"] = true;
}



$tdataglobal_unspsc[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_unspsc[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_unspsc[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_unspsc[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_unspsc[".printFriendly"] = true;
}



$tdataglobal_unspsc[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_unspsc[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_unspsc[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_unspsc[".isUseAjaxSuggest"] = true;

$tdataglobal_unspsc[".rowHighlite"] = true;



						

$tdataglobal_unspsc[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_unspsc[".buttonsAdded"] = false;

$tdataglobal_unspsc[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_unspsc[".isUseTimeForSearch"] = false;


$tdataglobal_unspsc[".badgeColor"] = "DB7093";


$tdataglobal_unspsc[".allSearchFields"] = array();
$tdataglobal_unspsc[".filterFields"] = array();
$tdataglobal_unspsc[".requiredSearchFields"] = array();

$tdataglobal_unspsc[".googleLikeFields"] = array();
$tdataglobal_unspsc[".googleLikeFields"][] = "COD_UNSPSC";
$tdataglobal_unspsc[".googleLikeFields"][] = "DESC_UNSPSC";



$tdataglobal_unspsc[".tableType"] = "list";

$tdataglobal_unspsc[".printerPageOrientation"] = 0;
$tdataglobal_unspsc[".nPrinterPageScale"] = 100;

$tdataglobal_unspsc[".nPrinterSplitRecords"] = 40;

$tdataglobal_unspsc[".geocodingEnabled"] = false;










$tdataglobal_unspsc[".pageSize"] = 20;

$tdataglobal_unspsc[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataglobal_unspsc[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_unspsc[".orderindexes"] = array();

$tdataglobal_unspsc[".sqlHead"] = "SELECT COD_UNSPSC,  	DESC_UNSPSC";
$tdataglobal_unspsc[".sqlFrom"] = "FROM global_unspsc";
$tdataglobal_unspsc[".sqlWhereExpr"] = "";
$tdataglobal_unspsc[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_unspsc[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_unspsc[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_unspsc[".highlightSearchResults"] = true;

$tableKeysglobal_unspsc = array();
$tdataglobal_unspsc[".Keys"] = $tableKeysglobal_unspsc;


$tdataglobal_unspsc[".hideMobileList"] = array();




//	COD_UNSPSC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "COD_UNSPSC";
	$fdata["GoodName"] = "COD_UNSPSC";
	$fdata["ownerTable"] = "global_unspsc";
	$fdata["Label"] = GetFieldLabel("global_unspsc","COD_UNSPSC");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "COD_UNSPSC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COD_UNSPSC";

	
	
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


	$tdataglobal_unspsc["COD_UNSPSC"] = $fdata;
		$tdataglobal_unspsc[".searchableFields"][] = "COD_UNSPSC";
//	DESC_UNSPSC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DESC_UNSPSC";
	$fdata["GoodName"] = "DESC_UNSPSC";
	$fdata["ownerTable"] = "global_unspsc";
	$fdata["Label"] = GetFieldLabel("global_unspsc","DESC_UNSPSC");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DESC_UNSPSC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESC_UNSPSC";

	
	
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


	$tdataglobal_unspsc["DESC_UNSPSC"] = $fdata;
		$tdataglobal_unspsc[".searchableFields"][] = "DESC_UNSPSC";


$tables_data["global_unspsc"]=&$tdataglobal_unspsc;
$field_labels["global_unspsc"] = &$fieldLabelsglobal_unspsc;
$fieldToolTips["global_unspsc"] = &$fieldToolTipsglobal_unspsc;
$placeHolders["global_unspsc"] = &$placeHoldersglobal_unspsc;
$page_titles["global_unspsc"] = &$pageTitlesglobal_unspsc;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["global_unspsc"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["global_unspsc"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_global_unspsc()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COD_UNSPSC,  	DESC_UNSPSC";
$proto0["m_strFrom"] = "FROM global_unspsc";
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
	"m_strName" => "COD_UNSPSC",
	"m_strTable" => "global_unspsc",
	"m_srcTableName" => "global_unspsc"
));

$proto6["m_sql"] = "COD_UNSPSC";
$proto6["m_srcTableName"] = "global_unspsc";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DESC_UNSPSC",
	"m_strTable" => "global_unspsc",
	"m_srcTableName" => "global_unspsc"
));

$proto8["m_sql"] = "DESC_UNSPSC";
$proto8["m_srcTableName"] = "global_unspsc";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "global_unspsc";
$proto11["m_srcTableName"] = "global_unspsc";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "COD_UNSPSC";
$proto11["m_columns"][] = "DESC_UNSPSC";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "global_unspsc";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "global_unspsc";
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
$proto0["m_srcTableName"]="global_unspsc";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_unspsc = createSqlQuery_global_unspsc();


	
										;

		

$tdataglobal_unspsc[".sqlquery"] = $queryData_global_unspsc;

$tableEvents["global_unspsc"] = new eventsBase;
$tdataglobal_unspsc[".hasEvents"] = false;

?>