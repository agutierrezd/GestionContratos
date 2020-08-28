<?php



$tdatatipo_si_no = array();
$tdatatipo_si_no[".searchableFields"] = array();
$tdatatipo_si_no[".ShortName"] = "tipo_si_no";
$tdatatipo_si_no[".OwnerID"] = "";
$tdatatipo_si_no[".OriginalTable"] = "tipo_si_no";


$tdatatipo_si_no[".pagesByType"] = my_json_decode( "{}" );
$tdatatipo_si_no[".originalPagesByType"] = $tdatatipo_si_no[".pagesByType"];
$tdatatipo_si_no[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatipo_si_no[".originalPages"] = $tdatatipo_si_no[".pages"];
$tdatatipo_si_no[".defaultPages"] = my_json_decode( "{}" );
$tdatatipo_si_no[".originalDefaultPages"] = $tdatatipo_si_no[".defaultPages"];

//	field labels
$fieldLabelstipo_si_no = array();
$fieldToolTipstipo_si_no = array();
$pageTitlestipo_si_no = array();
$placeHolderstipo_si_no = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_si_no["Spanish"] = array();
	$fieldToolTipstipo_si_no["Spanish"] = array();
	$placeHolderstipo_si_no["Spanish"] = array();
	$pageTitlestipo_si_no["Spanish"] = array();
	$fieldLabelstipo_si_no["Spanish"]["sn_id"] = "Sn Id";
	$fieldToolTipstipo_si_no["Spanish"]["sn_id"] = "";
	$placeHolderstipo_si_no["Spanish"]["sn_id"] = "";
	$fieldLabelstipo_si_no["Spanish"]["sn_name"] = "Sn Name";
	$fieldToolTipstipo_si_no["Spanish"]["sn_name"] = "";
	$placeHolderstipo_si_no["Spanish"]["sn_name"] = "";
	if (count($fieldToolTipstipo_si_no["Spanish"]))
		$tdatatipo_si_no[".isUseToolTips"] = true;
}


	$tdatatipo_si_no[".NCSearch"] = true;



$tdatatipo_si_no[".shortTableName"] = "tipo_si_no";
$tdatatipo_si_no[".nSecOptions"] = 0;

$tdatatipo_si_no[".mainTableOwnerID"] = "";
$tdatatipo_si_no[".entityType"] = 0;

$tdatatipo_si_no[".strOriginalTableName"] = "tipo_si_no";

	



$tdatatipo_si_no[".showAddInPopup"] = false;

$tdatatipo_si_no[".showEditInPopup"] = false;

$tdatatipo_si_no[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatipo_si_no[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatipo_si_no[".listAjax"] = false;
//	temporary
$tdatatipo_si_no[".listAjax"] = false;

	$tdatatipo_si_no[".audit"] = true;

	$tdatatipo_si_no[".locking"] = true;


$pages = $tdatatipo_si_no[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipo_si_no[".edit"] = true;
	$tdatatipo_si_no[".afterEditAction"] = 1;
	$tdatatipo_si_no[".closePopupAfterEdit"] = 1;
	$tdatatipo_si_no[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipo_si_no[".add"] = true;
$tdatatipo_si_no[".afterAddAction"] = 1;
$tdatatipo_si_no[".closePopupAfterAdd"] = 1;
$tdatatipo_si_no[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipo_si_no[".list"] = true;
}



$tdatatipo_si_no[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipo_si_no[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipo_si_no[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipo_si_no[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipo_si_no[".printFriendly"] = true;
}



$tdatatipo_si_no[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipo_si_no[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipo_si_no[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipo_si_no[".isUseAjaxSuggest"] = true;

$tdatatipo_si_no[".rowHighlite"] = true;



						

$tdatatipo_si_no[".ajaxCodeSnippetAdded"] = false;

$tdatatipo_si_no[".buttonsAdded"] = false;

$tdatatipo_si_no[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_si_no[".isUseTimeForSearch"] = false;


$tdatatipo_si_no[".badgeColor"] = "5F9EA0";


$tdatatipo_si_no[".allSearchFields"] = array();
$tdatatipo_si_no[".filterFields"] = array();
$tdatatipo_si_no[".requiredSearchFields"] = array();

$tdatatipo_si_no[".googleLikeFields"] = array();
$tdatatipo_si_no[".googleLikeFields"][] = "sn_id";
$tdatatipo_si_no[".googleLikeFields"][] = "sn_name";



$tdatatipo_si_no[".tableType"] = "list";

$tdatatipo_si_no[".printerPageOrientation"] = 0;
$tdatatipo_si_no[".nPrinterPageScale"] = 100;

$tdatatipo_si_no[".nPrinterSplitRecords"] = 40;

$tdatatipo_si_no[".geocodingEnabled"] = false;










$tdatatipo_si_no[".pageSize"] = 20;

$tdatatipo_si_no[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatipo_si_no[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_si_no[".orderindexes"] = array();

$tdatatipo_si_no[".sqlHead"] = "SELECT sn_id,  	sn_name";
$tdatatipo_si_no[".sqlFrom"] = "FROM tipo_si_no";
$tdatatipo_si_no[".sqlWhereExpr"] = "";
$tdatatipo_si_no[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_si_no[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_si_no[".arrGroupsPerPage"] = $arrGPP;

$tdatatipo_si_no[".highlightSearchResults"] = true;

$tableKeystipo_si_no = array();
$tableKeystipo_si_no[] = "sn_id";
$tdatatipo_si_no[".Keys"] = $tableKeystipo_si_no;


$tdatatipo_si_no[".hideMobileList"] = array();




//	sn_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sn_id";
	$fdata["GoodName"] = "sn_id";
	$fdata["ownerTable"] = "tipo_si_no";
	$fdata["Label"] = GetFieldLabel("tipo_si_no","sn_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "sn_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sn_id";

	
	
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


	$tdatatipo_si_no["sn_id"] = $fdata;
		$tdatatipo_si_no[".searchableFields"][] = "sn_id";
//	sn_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sn_name";
	$fdata["GoodName"] = "sn_name";
	$fdata["ownerTable"] = "tipo_si_no";
	$fdata["Label"] = GetFieldLabel("tipo_si_no","sn_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sn_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sn_name";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatatipo_si_no["sn_name"] = $fdata;
		$tdatatipo_si_no[".searchableFields"][] = "sn_name";


$tables_data["tipo_si_no"]=&$tdatatipo_si_no;
$field_labels["tipo_si_no"] = &$fieldLabelstipo_si_no;
$fieldToolTips["tipo_si_no"] = &$fieldToolTipstipo_si_no;
$placeHolders["tipo_si_no"] = &$placeHolderstipo_si_no;
$page_titles["tipo_si_no"] = &$pageTitlestipo_si_no;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tipo_si_no"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tipo_si_no"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tipo_si_no()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sn_id,  	sn_name";
$proto0["m_strFrom"] = "FROM tipo_si_no";
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
	"m_strName" => "sn_id",
	"m_strTable" => "tipo_si_no",
	"m_srcTableName" => "tipo_si_no"
));

$proto6["m_sql"] = "sn_id";
$proto6["m_srcTableName"] = "tipo_si_no";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sn_name",
	"m_strTable" => "tipo_si_no",
	"m_srcTableName" => "tipo_si_no"
));

$proto8["m_sql"] = "sn_name";
$proto8["m_srcTableName"] = "tipo_si_no";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tipo_si_no";
$proto11["m_srcTableName"] = "tipo_si_no";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "sn_id";
$proto11["m_columns"][] = "sn_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tipo_si_no";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tipo_si_no";
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
$proto0["m_srcTableName"]="tipo_si_no";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_si_no = createSqlQuery_tipo_si_no();


	
										;

		

$tdatatipo_si_no[".sqlquery"] = $queryData_tipo_si_no;

$tableEvents["tipo_si_no"] = new eventsBase;
$tdatatipo_si_no[".hasEvents"] = false;

?>