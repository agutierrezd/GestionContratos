<?php



$tdataq_usos = array();
$tdataq_usos[".searchableFields"] = array();
$tdataq_usos[".ShortName"] = "q_usos";
$tdataq_usos[".OwnerID"] = "";
$tdataq_usos[".OriginalTable"] = "q_usos";


$tdataq_usos[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataq_usos[".originalPagesByType"] = $tdataq_usos[".pagesByType"];
$tdataq_usos[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataq_usos[".originalPages"] = $tdataq_usos[".pages"];
$tdataq_usos[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataq_usos[".originalDefaultPages"] = $tdataq_usos[".defaultPages"];

//	field labels
$fieldLabelsq_usos = array();
$fieldToolTipsq_usos = array();
$pageTitlesq_usos = array();
$placeHoldersq_usos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_usos["Spanish"] = array();
	$fieldToolTipsq_usos["Spanish"] = array();
	$placeHoldersq_usos["Spanish"] = array();
	$pageTitlesq_usos["Spanish"] = array();
	$fieldLabelsq_usos["Spanish"]["RUBRO"] = "RUBRO";
	$fieldToolTipsq_usos["Spanish"]["RUBRO"] = "";
	$placeHoldersq_usos["Spanish"]["RUBRO"] = "";
	$fieldLabelsq_usos["Spanish"]["qtyusos"] = "Qtyusos";
	$fieldToolTipsq_usos["Spanish"]["qtyusos"] = "";
	$placeHoldersq_usos["Spanish"]["qtyusos"] = "";
	if (count($fieldToolTipsq_usos["Spanish"]))
		$tdataq_usos[".isUseToolTips"] = true;
}


	$tdataq_usos[".NCSearch"] = true;



$tdataq_usos[".shortTableName"] = "q_usos";
$tdataq_usos[".nSecOptions"] = 0;

$tdataq_usos[".mainTableOwnerID"] = "";
$tdataq_usos[".entityType"] = 0;

$tdataq_usos[".strOriginalTableName"] = "q_usos";

	



$tdataq_usos[".showAddInPopup"] = false;

$tdataq_usos[".showEditInPopup"] = false;

$tdataq_usos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataq_usos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataq_usos[".listAjax"] = false;
//	temporary
$tdataq_usos[".listAjax"] = false;

	$tdataq_usos[".audit"] = true;

	$tdataq_usos[".locking"] = true;


$pages = $tdataq_usos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_usos[".edit"] = true;
	$tdataq_usos[".afterEditAction"] = 1;
	$tdataq_usos[".closePopupAfterEdit"] = 1;
	$tdataq_usos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_usos[".add"] = true;
$tdataq_usos[".afterAddAction"] = 1;
$tdataq_usos[".closePopupAfterAdd"] = 1;
$tdataq_usos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_usos[".list"] = true;
}



$tdataq_usos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_usos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_usos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_usos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_usos[".printFriendly"] = true;
}



$tdataq_usos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_usos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_usos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_usos[".isUseAjaxSuggest"] = true;

$tdataq_usos[".rowHighlite"] = true;



						

$tdataq_usos[".ajaxCodeSnippetAdded"] = false;

$tdataq_usos[".buttonsAdded"] = false;

$tdataq_usos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_usos[".isUseTimeForSearch"] = false;


$tdataq_usos[".badgeColor"] = "B22222";


$tdataq_usos[".allSearchFields"] = array();
$tdataq_usos[".filterFields"] = array();
$tdataq_usos[".requiredSearchFields"] = array();

$tdataq_usos[".googleLikeFields"] = array();
$tdataq_usos[".googleLikeFields"][] = "RUBRO";
$tdataq_usos[".googleLikeFields"][] = "qtyusos";



$tdataq_usos[".tableType"] = "list";

$tdataq_usos[".printerPageOrientation"] = 0;
$tdataq_usos[".nPrinterPageScale"] = 100;

$tdataq_usos[".nPrinterSplitRecords"] = 40;

$tdataq_usos[".geocodingEnabled"] = false;










$tdataq_usos[".pageSize"] = 20;

$tdataq_usos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_usos[".strOrderBy"] = $tstrOrderBy;

$tdataq_usos[".orderindexes"] = array();

$tdataq_usos[".sqlHead"] = "SELECT RUBRO,  	qtyusos";
$tdataq_usos[".sqlFrom"] = "FROM q_usos";
$tdataq_usos[".sqlWhereExpr"] = "";
$tdataq_usos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_usos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_usos[".arrGroupsPerPage"] = $arrGPP;

$tdataq_usos[".highlightSearchResults"] = true;

$tableKeysq_usos = array();
$tdataq_usos[".Keys"] = $tableKeysq_usos;


$tdataq_usos[".hideMobileList"] = array();




//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "q_usos";
	$fdata["Label"] = GetFieldLabel("q_usos","RUBRO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "RUBRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RUBRO";

	
	
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


	$tdataq_usos["RUBRO"] = $fdata;
		$tdataq_usos[".searchableFields"][] = "RUBRO";
//	qtyusos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "qtyusos";
	$fdata["GoodName"] = "qtyusos";
	$fdata["ownerTable"] = "q_usos";
	$fdata["Label"] = GetFieldLabel("q_usos","qtyusos");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "qtyusos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qtyusos";

	
	
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


	$tdataq_usos["qtyusos"] = $fdata;
		$tdataq_usos[".searchableFields"][] = "qtyusos";


$tables_data["q_usos"]=&$tdataq_usos;
$field_labels["q_usos"] = &$fieldLabelsq_usos;
$fieldToolTips["q_usos"] = &$fieldToolTipsq_usos;
$placeHolders["q_usos"] = &$placeHoldersq_usos;
$page_titles["q_usos"] = &$pageTitlesq_usos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_usos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["q_usos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_usos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "RUBRO,  	qtyusos";
$proto0["m_strFrom"] = "FROM q_usos";
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
	"m_strName" => "RUBRO",
	"m_strTable" => "q_usos",
	"m_srcTableName" => "q_usos"
));

$proto6["m_sql"] = "RUBRO";
$proto6["m_srcTableName"] = "q_usos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "qtyusos",
	"m_strTable" => "q_usos",
	"m_srcTableName" => "q_usos"
));

$proto8["m_sql"] = "qtyusos";
$proto8["m_srcTableName"] = "q_usos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "q_usos";
$proto11["m_srcTableName"] = "q_usos";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "RUBRO";
$proto11["m_columns"][] = "qtyusos";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "q_usos";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "q_usos";
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
$proto0["m_srcTableName"]="q_usos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_usos = createSqlQuery_q_usos();


	
										;

		

$tdataq_usos[".sqlquery"] = $queryData_q_usos;

$tableEvents["q_usos"] = new eventsBase;
$tdataq_usos[".hasEvents"] = false;

?>