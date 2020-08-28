<?php



$tdataq_oe_ordinal = array();
$tdataq_oe_ordinal[".searchableFields"] = array();
$tdataq_oe_ordinal[".ShortName"] = "q_oe_ordinal";
$tdataq_oe_ordinal[".OwnerID"] = "";
$tdataq_oe_ordinal[".OriginalTable"] = "q_oe_ordinal";


$tdataq_oe_ordinal[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataq_oe_ordinal[".originalPagesByType"] = $tdataq_oe_ordinal[".pagesByType"];
$tdataq_oe_ordinal[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataq_oe_ordinal[".originalPages"] = $tdataq_oe_ordinal[".pages"];
$tdataq_oe_ordinal[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataq_oe_ordinal[".originalDefaultPages"] = $tdataq_oe_ordinal[".defaultPages"];

//	field labels
$fieldLabelsq_oe_ordinal = array();
$fieldToolTipsq_oe_ordinal = array();
$pageTitlesq_oe_ordinal = array();
$placeHoldersq_oe_ordinal = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_oe_ordinal["Spanish"] = array();
	$fieldToolTipsq_oe_ordinal["Spanish"] = array();
	$placeHoldersq_oe_ordinal["Spanish"] = array();
	$pageTitlesq_oe_ordinal["Spanish"] = array();
	$fieldLabelsq_oe_ordinal["Spanish"]["qty"] = "Qty";
	$fieldToolTipsq_oe_ordinal["Spanish"]["qty"] = "";
	$placeHoldersq_oe_ordinal["Spanish"]["qty"] = "";
	$fieldLabelsq_oe_ordinal["Spanish"]["id_cont"] = "Id Cont";
	$fieldToolTipsq_oe_ordinal["Spanish"]["id_cont"] = "";
	$placeHoldersq_oe_ordinal["Spanish"]["id_cont"] = "";
	if (count($fieldToolTipsq_oe_ordinal["Spanish"]))
		$tdataq_oe_ordinal[".isUseToolTips"] = true;
}


	$tdataq_oe_ordinal[".NCSearch"] = true;



$tdataq_oe_ordinal[".shortTableName"] = "q_oe_ordinal";
$tdataq_oe_ordinal[".nSecOptions"] = 0;

$tdataq_oe_ordinal[".mainTableOwnerID"] = "";
$tdataq_oe_ordinal[".entityType"] = 0;

$tdataq_oe_ordinal[".strOriginalTableName"] = "q_oe_ordinal";

	



$tdataq_oe_ordinal[".showAddInPopup"] = false;

$tdataq_oe_ordinal[".showEditInPopup"] = false;

$tdataq_oe_ordinal[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataq_oe_ordinal[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataq_oe_ordinal[".listAjax"] = false;
//	temporary
$tdataq_oe_ordinal[".listAjax"] = false;

	$tdataq_oe_ordinal[".audit"] = true;

	$tdataq_oe_ordinal[".locking"] = true;


$pages = $tdataq_oe_ordinal[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_oe_ordinal[".edit"] = true;
	$tdataq_oe_ordinal[".afterEditAction"] = 1;
	$tdataq_oe_ordinal[".closePopupAfterEdit"] = 1;
	$tdataq_oe_ordinal[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_oe_ordinal[".add"] = true;
$tdataq_oe_ordinal[".afterAddAction"] = 1;
$tdataq_oe_ordinal[".closePopupAfterAdd"] = 1;
$tdataq_oe_ordinal[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_oe_ordinal[".list"] = true;
}



$tdataq_oe_ordinal[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_oe_ordinal[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_oe_ordinal[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_oe_ordinal[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_oe_ordinal[".printFriendly"] = true;
}



$tdataq_oe_ordinal[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_oe_ordinal[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_oe_ordinal[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_oe_ordinal[".isUseAjaxSuggest"] = true;

$tdataq_oe_ordinal[".rowHighlite"] = true;



						

$tdataq_oe_ordinal[".ajaxCodeSnippetAdded"] = false;

$tdataq_oe_ordinal[".buttonsAdded"] = false;

$tdataq_oe_ordinal[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_oe_ordinal[".isUseTimeForSearch"] = false;


$tdataq_oe_ordinal[".badgeColor"] = "E07878";


$tdataq_oe_ordinal[".allSearchFields"] = array();
$tdataq_oe_ordinal[".filterFields"] = array();
$tdataq_oe_ordinal[".requiredSearchFields"] = array();

$tdataq_oe_ordinal[".googleLikeFields"] = array();
$tdataq_oe_ordinal[".googleLikeFields"][] = "id_cont";
$tdataq_oe_ordinal[".googleLikeFields"][] = "qty";



$tdataq_oe_ordinal[".tableType"] = "list";

$tdataq_oe_ordinal[".printerPageOrientation"] = 0;
$tdataq_oe_ordinal[".nPrinterPageScale"] = 100;

$tdataq_oe_ordinal[".nPrinterSplitRecords"] = 40;

$tdataq_oe_ordinal[".geocodingEnabled"] = false;










$tdataq_oe_ordinal[".pageSize"] = 20;

$tdataq_oe_ordinal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_oe_ordinal[".strOrderBy"] = $tstrOrderBy;

$tdataq_oe_ordinal[".orderindexes"] = array();

$tdataq_oe_ordinal[".sqlHead"] = "SELECT id_cont,  	qty";
$tdataq_oe_ordinal[".sqlFrom"] = "FROM q_oe_ordinal";
$tdataq_oe_ordinal[".sqlWhereExpr"] = "";
$tdataq_oe_ordinal[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_oe_ordinal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_oe_ordinal[".arrGroupsPerPage"] = $arrGPP;

$tdataq_oe_ordinal[".highlightSearchResults"] = true;

$tableKeysq_oe_ordinal = array();
$tdataq_oe_ordinal[".Keys"] = $tableKeysq_oe_ordinal;


$tdataq_oe_ordinal[".hideMobileList"] = array();




//	id_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cont";
	$fdata["GoodName"] = "id_cont";
	$fdata["ownerTable"] = "q_oe_ordinal";
	$fdata["Label"] = GetFieldLabel("q_oe_ordinal","id_cont");
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


	$tdataq_oe_ordinal["id_cont"] = $fdata;
		$tdataq_oe_ordinal[".searchableFields"][] = "id_cont";
//	qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "qty";
	$fdata["GoodName"] = "qty";
	$fdata["ownerTable"] = "q_oe_ordinal";
	$fdata["Label"] = GetFieldLabel("q_oe_ordinal","qty");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "qty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qty";

	
	
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


	$tdataq_oe_ordinal["qty"] = $fdata;
		$tdataq_oe_ordinal[".searchableFields"][] = "qty";


$tables_data["q_oe_ordinal"]=&$tdataq_oe_ordinal;
$field_labels["q_oe_ordinal"] = &$fieldLabelsq_oe_ordinal;
$fieldToolTips["q_oe_ordinal"] = &$fieldToolTipsq_oe_ordinal;
$placeHolders["q_oe_ordinal"] = &$placeHoldersq_oe_ordinal;
$page_titles["q_oe_ordinal"] = &$pageTitlesq_oe_ordinal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_oe_ordinal"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["q_oe_ordinal"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_oe_ordinal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cont,  	qty";
$proto0["m_strFrom"] = "FROM q_oe_ordinal";
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
	"m_strTable" => "q_oe_ordinal",
	"m_srcTableName" => "q_oe_ordinal"
));

$proto6["m_sql"] = "id_cont";
$proto6["m_srcTableName"] = "q_oe_ordinal";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "qty",
	"m_strTable" => "q_oe_ordinal",
	"m_srcTableName" => "q_oe_ordinal"
));

$proto8["m_sql"] = "qty";
$proto8["m_srcTableName"] = "q_oe_ordinal";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "q_oe_ordinal";
$proto11["m_srcTableName"] = "q_oe_ordinal";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_cont";
$proto11["m_columns"][] = "qty";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "q_oe_ordinal";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "q_oe_ordinal";
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
$proto0["m_srcTableName"]="q_oe_ordinal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_oe_ordinal = createSqlQuery_q_oe_ordinal();


	
										;

		

$tdataq_oe_ordinal[".sqlquery"] = $queryData_q_oe_ordinal;

$tableEvents["q_oe_ordinal"] = new eventsBase;
$tdataq_oe_ordinal[".hasEvents"] = false;

?>