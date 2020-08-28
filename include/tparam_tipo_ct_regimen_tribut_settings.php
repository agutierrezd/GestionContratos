<?php



$tdatatparam_tipo_ct_regimen_tribut = array();
$tdatatparam_tipo_ct_regimen_tribut[".searchableFields"] = array();
$tdatatparam_tipo_ct_regimen_tribut[".ShortName"] = "tparam_tipo_ct_regimen_tribut";
$tdatatparam_tipo_ct_regimen_tribut[".OwnerID"] = "";
$tdatatparam_tipo_ct_regimen_tribut[".OriginalTable"] = "tparam_tipo_ct_regimen_tribut";


$tdatatparam_tipo_ct_regimen_tribut[".pagesByType"] = my_json_decode( "{}" );
$tdatatparam_tipo_ct_regimen_tribut[".originalPagesByType"] = $tdatatparam_tipo_ct_regimen_tribut[".pagesByType"];
$tdatatparam_tipo_ct_regimen_tribut[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatparam_tipo_ct_regimen_tribut[".originalPages"] = $tdatatparam_tipo_ct_regimen_tribut[".pages"];
$tdatatparam_tipo_ct_regimen_tribut[".defaultPages"] = my_json_decode( "{}" );
$tdatatparam_tipo_ct_regimen_tribut[".originalDefaultPages"] = $tdatatparam_tipo_ct_regimen_tribut[".defaultPages"];

//	field labels
$fieldLabelstparam_tipo_ct_regimen_tribut = array();
$fieldToolTipstparam_tipo_ct_regimen_tribut = array();
$pageTitlestparam_tipo_ct_regimen_tribut = array();
$placeHolderstparam_tipo_ct_regimen_tribut = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_tipo_ct_regimen_tribut["Spanish"] = array();
	$fieldToolTipstparam_tipo_ct_regimen_tribut["Spanish"] = array();
	$placeHolderstparam_tipo_ct_regimen_tribut["Spanish"] = array();
	$pageTitlestparam_tipo_ct_regimen_tribut["Spanish"] = array();
	$fieldLabelstparam_tipo_ct_regimen_tribut["Spanish"]["rt_id"] = "Rt Id";
	$fieldToolTipstparam_tipo_ct_regimen_tribut["Spanish"]["rt_id"] = "";
	$placeHolderstparam_tipo_ct_regimen_tribut["Spanish"]["rt_id"] = "";
	$fieldLabelstparam_tipo_ct_regimen_tribut["Spanish"]["Regimen_Tributario"] = "Regimen Tributario";
	$fieldToolTipstparam_tipo_ct_regimen_tribut["Spanish"]["Regimen_Tributario"] = "";
	$placeHolderstparam_tipo_ct_regimen_tribut["Spanish"]["Regimen_Tributario"] = "";
	if (count($fieldToolTipstparam_tipo_ct_regimen_tribut["Spanish"]))
		$tdatatparam_tipo_ct_regimen_tribut[".isUseToolTips"] = true;
}


	$tdatatparam_tipo_ct_regimen_tribut[".NCSearch"] = true;



$tdatatparam_tipo_ct_regimen_tribut[".shortTableName"] = "tparam_tipo_ct_regimen_tribut";
$tdatatparam_tipo_ct_regimen_tribut[".nSecOptions"] = 0;

$tdatatparam_tipo_ct_regimen_tribut[".mainTableOwnerID"] = "";
$tdatatparam_tipo_ct_regimen_tribut[".entityType"] = 0;

$tdatatparam_tipo_ct_regimen_tribut[".strOriginalTableName"] = "tparam_tipo_ct_regimen_tribut";

	



$tdatatparam_tipo_ct_regimen_tribut[".showAddInPopup"] = false;

$tdatatparam_tipo_ct_regimen_tribut[".showEditInPopup"] = false;

$tdatatparam_tipo_ct_regimen_tribut[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatparam_tipo_ct_regimen_tribut[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatparam_tipo_ct_regimen_tribut[".listAjax"] = false;
//	temporary
$tdatatparam_tipo_ct_regimen_tribut[".listAjax"] = false;

	$tdatatparam_tipo_ct_regimen_tribut[".audit"] = true;

	$tdatatparam_tipo_ct_regimen_tribut[".locking"] = true;


$pages = $tdatatparam_tipo_ct_regimen_tribut[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_tipo_ct_regimen_tribut[".edit"] = true;
	$tdatatparam_tipo_ct_regimen_tribut[".afterEditAction"] = 1;
	$tdatatparam_tipo_ct_regimen_tribut[".closePopupAfterEdit"] = 1;
	$tdatatparam_tipo_ct_regimen_tribut[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_tipo_ct_regimen_tribut[".add"] = true;
$tdatatparam_tipo_ct_regimen_tribut[".afterAddAction"] = 1;
$tdatatparam_tipo_ct_regimen_tribut[".closePopupAfterAdd"] = 1;
$tdatatparam_tipo_ct_regimen_tribut[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_tipo_ct_regimen_tribut[".list"] = true;
}



$tdatatparam_tipo_ct_regimen_tribut[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_tipo_ct_regimen_tribut[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_tipo_ct_regimen_tribut[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_tipo_ct_regimen_tribut[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_tipo_ct_regimen_tribut[".printFriendly"] = true;
}



$tdatatparam_tipo_ct_regimen_tribut[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_tipo_ct_regimen_tribut[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_tipo_ct_regimen_tribut[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_tipo_ct_regimen_tribut[".isUseAjaxSuggest"] = true;

$tdatatparam_tipo_ct_regimen_tribut[".rowHighlite"] = true;



						

$tdatatparam_tipo_ct_regimen_tribut[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_tipo_ct_regimen_tribut[".buttonsAdded"] = false;

$tdatatparam_tipo_ct_regimen_tribut[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_tipo_ct_regimen_tribut[".isUseTimeForSearch"] = false;


$tdatatparam_tipo_ct_regimen_tribut[".badgeColor"] = "CD853F";


$tdatatparam_tipo_ct_regimen_tribut[".allSearchFields"] = array();
$tdatatparam_tipo_ct_regimen_tribut[".filterFields"] = array();
$tdatatparam_tipo_ct_regimen_tribut[".requiredSearchFields"] = array();

$tdatatparam_tipo_ct_regimen_tribut[".googleLikeFields"] = array();
$tdatatparam_tipo_ct_regimen_tribut[".googleLikeFields"][] = "rt_id";
$tdatatparam_tipo_ct_regimen_tribut[".googleLikeFields"][] = "Regimen_Tributario";



$tdatatparam_tipo_ct_regimen_tribut[".tableType"] = "list";

$tdatatparam_tipo_ct_regimen_tribut[".printerPageOrientation"] = 0;
$tdatatparam_tipo_ct_regimen_tribut[".nPrinterPageScale"] = 100;

$tdatatparam_tipo_ct_regimen_tribut[".nPrinterSplitRecords"] = 40;

$tdatatparam_tipo_ct_regimen_tribut[".geocodingEnabled"] = false;










$tdatatparam_tipo_ct_regimen_tribut[".pageSize"] = 20;

$tdatatparam_tipo_ct_regimen_tribut[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatparam_tipo_ct_regimen_tribut[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_tipo_ct_regimen_tribut[".orderindexes"] = array();

$tdatatparam_tipo_ct_regimen_tribut[".sqlHead"] = "SELECT rt_id,  	Regimen_Tributario";
$tdatatparam_tipo_ct_regimen_tribut[".sqlFrom"] = "FROM tparam_tipo_ct_regimen_tribut";
$tdatatparam_tipo_ct_regimen_tribut[".sqlWhereExpr"] = "";
$tdatatparam_tipo_ct_regimen_tribut[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_tipo_ct_regimen_tribut[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_tipo_ct_regimen_tribut[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_tipo_ct_regimen_tribut[".highlightSearchResults"] = true;

$tableKeystparam_tipo_ct_regimen_tribut = array();
$tdatatparam_tipo_ct_regimen_tribut[".Keys"] = $tableKeystparam_tipo_ct_regimen_tribut;


$tdatatparam_tipo_ct_regimen_tribut[".hideMobileList"] = array();




//	rt_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rt_id";
	$fdata["GoodName"] = "rt_id";
	$fdata["ownerTable"] = "tparam_tipo_ct_regimen_tribut";
	$fdata["Label"] = GetFieldLabel("tparam_tipo_ct_regimen_tribut","rt_id");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "rt_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rt_id";

	
	
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


	$tdatatparam_tipo_ct_regimen_tribut["rt_id"] = $fdata;
		$tdatatparam_tipo_ct_regimen_tribut[".searchableFields"][] = "rt_id";
//	Regimen_Tributario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Regimen_Tributario";
	$fdata["GoodName"] = "Regimen_Tributario";
	$fdata["ownerTable"] = "tparam_tipo_ct_regimen_tribut";
	$fdata["Label"] = GetFieldLabel("tparam_tipo_ct_regimen_tribut","Regimen_Tributario");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Regimen_Tributario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Regimen_Tributario";

	
	
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


	$tdatatparam_tipo_ct_regimen_tribut["Regimen_Tributario"] = $fdata;
		$tdatatparam_tipo_ct_regimen_tribut[".searchableFields"][] = "Regimen_Tributario";


$tables_data["tparam_tipo_ct_regimen_tribut"]=&$tdatatparam_tipo_ct_regimen_tribut;
$field_labels["tparam_tipo_ct_regimen_tribut"] = &$fieldLabelstparam_tipo_ct_regimen_tribut;
$fieldToolTips["tparam_tipo_ct_regimen_tribut"] = &$fieldToolTipstparam_tipo_ct_regimen_tribut;
$placeHolders["tparam_tipo_ct_regimen_tribut"] = &$placeHolderstparam_tipo_ct_regimen_tribut;
$page_titles["tparam_tipo_ct_regimen_tribut"] = &$pageTitlestparam_tipo_ct_regimen_tribut;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tparam_tipo_ct_regimen_tribut"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tparam_tipo_ct_regimen_tribut"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tparam_tipo_ct_regimen_tribut()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rt_id,  	Regimen_Tributario";
$proto0["m_strFrom"] = "FROM tparam_tipo_ct_regimen_tribut";
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
	"m_strName" => "rt_id",
	"m_strTable" => "tparam_tipo_ct_regimen_tribut",
	"m_srcTableName" => "tparam_tipo_ct_regimen_tribut"
));

$proto6["m_sql"] = "rt_id";
$proto6["m_srcTableName"] = "tparam_tipo_ct_regimen_tribut";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Regimen_Tributario",
	"m_strTable" => "tparam_tipo_ct_regimen_tribut",
	"m_srcTableName" => "tparam_tipo_ct_regimen_tribut"
));

$proto8["m_sql"] = "Regimen_Tributario";
$proto8["m_srcTableName"] = "tparam_tipo_ct_regimen_tribut";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_tipo_ct_regimen_tribut";
$proto11["m_srcTableName"] = "tparam_tipo_ct_regimen_tribut";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "rt_id";
$proto11["m_columns"][] = "Regimen_Tributario";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_tipo_ct_regimen_tribut";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_tipo_ct_regimen_tribut";
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
$proto0["m_srcTableName"]="tparam_tipo_ct_regimen_tribut";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_tipo_ct_regimen_tribut = createSqlQuery_tparam_tipo_ct_regimen_tribut();


	
										;

		

$tdatatparam_tipo_ct_regimen_tribut[".sqlquery"] = $queryData_tparam_tipo_ct_regimen_tribut;

$tableEvents["tparam_tipo_ct_regimen_tribut"] = new eventsBase;
$tdatatparam_tipo_ct_regimen_tribut[".hasEvents"] = false;

?>