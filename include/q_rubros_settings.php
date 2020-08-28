<?php



$tdataq_rubros = array();
$tdataq_rubros[".searchableFields"] = array();
$tdataq_rubros[".ShortName"] = "q_rubros";
$tdataq_rubros[".OwnerID"] = "";
$tdataq_rubros[".OriginalTable"] = "q_rubros";


$tdataq_rubros[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataq_rubros[".originalPagesByType"] = $tdataq_rubros[".pagesByType"];
$tdataq_rubros[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataq_rubros[".originalPages"] = $tdataq_rubros[".pages"];
$tdataq_rubros[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataq_rubros[".originalDefaultPages"] = $tdataq_rubros[".defaultPages"];

//	field labels
$fieldLabelsq_rubros = array();
$fieldToolTipsq_rubros = array();
$pageTitlesq_rubros = array();
$placeHoldersq_rubros = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_rubros["Spanish"] = array();
	$fieldToolTipsq_rubros["Spanish"] = array();
	$placeHoldersq_rubros["Spanish"] = array();
	$pageTitlesq_rubros["Spanish"] = array();
	$fieldLabelsq_rubros["Spanish"]["RUBRO"] = "RUBRO";
	$fieldToolTipsq_rubros["Spanish"]["RUBRO"] = "";
	$placeHoldersq_rubros["Spanish"]["RUBRO"] = "";
	$fieldLabelsq_rubros["Spanish"]["QTYRUBROS"] = "QTYRUBROS";
	$fieldToolTipsq_rubros["Spanish"]["QTYRUBROS"] = "";
	$placeHoldersq_rubros["Spanish"]["QTYRUBROS"] = "";
	if (count($fieldToolTipsq_rubros["Spanish"]))
		$tdataq_rubros[".isUseToolTips"] = true;
}


	$tdataq_rubros[".NCSearch"] = true;



$tdataq_rubros[".shortTableName"] = "q_rubros";
$tdataq_rubros[".nSecOptions"] = 0;

$tdataq_rubros[".mainTableOwnerID"] = "";
$tdataq_rubros[".entityType"] = 0;

$tdataq_rubros[".strOriginalTableName"] = "q_rubros";

	



$tdataq_rubros[".showAddInPopup"] = false;

$tdataq_rubros[".showEditInPopup"] = false;

$tdataq_rubros[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataq_rubros[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataq_rubros[".listAjax"] = false;
//	temporary
$tdataq_rubros[".listAjax"] = false;

	$tdataq_rubros[".audit"] = true;

	$tdataq_rubros[".locking"] = true;


$pages = $tdataq_rubros[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_rubros[".edit"] = true;
	$tdataq_rubros[".afterEditAction"] = 1;
	$tdataq_rubros[".closePopupAfterEdit"] = 1;
	$tdataq_rubros[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_rubros[".add"] = true;
$tdataq_rubros[".afterAddAction"] = 1;
$tdataq_rubros[".closePopupAfterAdd"] = 1;
$tdataq_rubros[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_rubros[".list"] = true;
}



$tdataq_rubros[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_rubros[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_rubros[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_rubros[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_rubros[".printFriendly"] = true;
}



$tdataq_rubros[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_rubros[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_rubros[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_rubros[".isUseAjaxSuggest"] = true;

$tdataq_rubros[".rowHighlite"] = true;



						

$tdataq_rubros[".ajaxCodeSnippetAdded"] = false;

$tdataq_rubros[".buttonsAdded"] = false;

$tdataq_rubros[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_rubros[".isUseTimeForSearch"] = false;


$tdataq_rubros[".badgeColor"] = "008B8B";


$tdataq_rubros[".allSearchFields"] = array();
$tdataq_rubros[".filterFields"] = array();
$tdataq_rubros[".requiredSearchFields"] = array();

$tdataq_rubros[".googleLikeFields"] = array();
$tdataq_rubros[".googleLikeFields"][] = "RUBRO";
$tdataq_rubros[".googleLikeFields"][] = "QTYRUBROS";



$tdataq_rubros[".tableType"] = "list";

$tdataq_rubros[".printerPageOrientation"] = 0;
$tdataq_rubros[".nPrinterPageScale"] = 100;

$tdataq_rubros[".nPrinterSplitRecords"] = 40;

$tdataq_rubros[".geocodingEnabled"] = false;










$tdataq_rubros[".pageSize"] = 20;

$tdataq_rubros[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_rubros[".strOrderBy"] = $tstrOrderBy;

$tdataq_rubros[".orderindexes"] = array();

$tdataq_rubros[".sqlHead"] = "SELECT RUBRO,  	QTYRUBROS";
$tdataq_rubros[".sqlFrom"] = "FROM q_rubros";
$tdataq_rubros[".sqlWhereExpr"] = "";
$tdataq_rubros[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_rubros[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_rubros[".arrGroupsPerPage"] = $arrGPP;

$tdataq_rubros[".highlightSearchResults"] = true;

$tableKeysq_rubros = array();
$tdataq_rubros[".Keys"] = $tableKeysq_rubros;


$tdataq_rubros[".hideMobileList"] = array();




//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "q_rubros";
	$fdata["Label"] = GetFieldLabel("q_rubros","RUBRO");
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


	$tdataq_rubros["RUBRO"] = $fdata;
		$tdataq_rubros[".searchableFields"][] = "RUBRO";
//	QTYRUBROS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "QTYRUBROS";
	$fdata["GoodName"] = "QTYRUBROS";
	$fdata["ownerTable"] = "q_rubros";
	$fdata["Label"] = GetFieldLabel("q_rubros","QTYRUBROS");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "QTYRUBROS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "QTYRUBROS";

	
	
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


	$tdataq_rubros["QTYRUBROS"] = $fdata;
		$tdataq_rubros[".searchableFields"][] = "QTYRUBROS";


$tables_data["q_rubros"]=&$tdataq_rubros;
$field_labels["q_rubros"] = &$fieldLabelsq_rubros;
$fieldToolTips["q_rubros"] = &$fieldToolTipsq_rubros;
$placeHolders["q_rubros"] = &$placeHoldersq_rubros;
$page_titles["q_rubros"] = &$pageTitlesq_rubros;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_rubros"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["q_rubros"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_rubros()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "RUBRO,  	QTYRUBROS";
$proto0["m_strFrom"] = "FROM q_rubros";
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
	"m_strTable" => "q_rubros",
	"m_srcTableName" => "q_rubros"
));

$proto6["m_sql"] = "RUBRO";
$proto6["m_srcTableName"] = "q_rubros";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "QTYRUBROS",
	"m_strTable" => "q_rubros",
	"m_srcTableName" => "q_rubros"
));

$proto8["m_sql"] = "QTYRUBROS";
$proto8["m_srcTableName"] = "q_rubros";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "q_rubros";
$proto11["m_srcTableName"] = "q_rubros";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "RUBRO";
$proto11["m_columns"][] = "QTYRUBROS";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "q_rubros";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "q_rubros";
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
$proto0["m_srcTableName"]="q_rubros";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_rubros = createSqlQuery_q_rubros();


	
										;

		

$tdataq_rubros[".sqlquery"] = $queryData_q_rubros;

$tableEvents["q_rubros"] = new eventsBase;
$tdataq_rubros[".hasEvents"] = false;

?>