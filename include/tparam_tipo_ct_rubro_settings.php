<?php



$tdatatparam_tipo_ct_rubro = array();
$tdatatparam_tipo_ct_rubro[".searchableFields"] = array();
$tdatatparam_tipo_ct_rubro[".ShortName"] = "tparam_tipo_ct_rubro";
$tdatatparam_tipo_ct_rubro[".OwnerID"] = "";
$tdatatparam_tipo_ct_rubro[".OriginalTable"] = "tparam_tipo_ct_rubro";


$tdatatparam_tipo_ct_rubro[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatatparam_tipo_ct_rubro[".originalPagesByType"] = $tdatatparam_tipo_ct_rubro[".pagesByType"];
$tdatatparam_tipo_ct_rubro[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatatparam_tipo_ct_rubro[".originalPages"] = $tdatatparam_tipo_ct_rubro[".pages"];
$tdatatparam_tipo_ct_rubro[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatatparam_tipo_ct_rubro[".originalDefaultPages"] = $tdatatparam_tipo_ct_rubro[".defaultPages"];

//	field labels
$fieldLabelstparam_tipo_ct_rubro = array();
$fieldToolTipstparam_tipo_ct_rubro = array();
$pageTitlestparam_tipo_ct_rubro = array();
$placeHolderstparam_tipo_ct_rubro = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_tipo_ct_rubro["Spanish"] = array();
	$fieldToolTipstparam_tipo_ct_rubro["Spanish"] = array();
	$placeHolderstparam_tipo_ct_rubro["Spanish"] = array();
	$pageTitlestparam_tipo_ct_rubro["Spanish"] = array();
	$fieldLabelstparam_tipo_ct_rubro["Spanish"]["rubro_id"] = "Rubro Id";
	$fieldToolTipstparam_tipo_ct_rubro["Spanish"]["rubro_id"] = "";
	$placeHolderstparam_tipo_ct_rubro["Spanish"]["rubro_id"] = "";
	$fieldLabelstparam_tipo_ct_rubro["Spanish"]["tipo_rubro"] = "Tipo Rubro";
	$fieldToolTipstparam_tipo_ct_rubro["Spanish"]["tipo_rubro"] = "";
	$placeHolderstparam_tipo_ct_rubro["Spanish"]["tipo_rubro"] = "";
	if (count($fieldToolTipstparam_tipo_ct_rubro["Spanish"]))
		$tdatatparam_tipo_ct_rubro[".isUseToolTips"] = true;
}


	$tdatatparam_tipo_ct_rubro[".NCSearch"] = true;



$tdatatparam_tipo_ct_rubro[".shortTableName"] = "tparam_tipo_ct_rubro";
$tdatatparam_tipo_ct_rubro[".nSecOptions"] = 0;

$tdatatparam_tipo_ct_rubro[".mainTableOwnerID"] = "";
$tdatatparam_tipo_ct_rubro[".entityType"] = 0;

$tdatatparam_tipo_ct_rubro[".strOriginalTableName"] = "tparam_tipo_ct_rubro";

	



$tdatatparam_tipo_ct_rubro[".showAddInPopup"] = false;

$tdatatparam_tipo_ct_rubro[".showEditInPopup"] = false;

$tdatatparam_tipo_ct_rubro[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatparam_tipo_ct_rubro[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatparam_tipo_ct_rubro[".listAjax"] = false;
//	temporary
$tdatatparam_tipo_ct_rubro[".listAjax"] = false;

	$tdatatparam_tipo_ct_rubro[".audit"] = true;

	$tdatatparam_tipo_ct_rubro[".locking"] = true;


$pages = $tdatatparam_tipo_ct_rubro[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_tipo_ct_rubro[".edit"] = true;
	$tdatatparam_tipo_ct_rubro[".afterEditAction"] = 1;
	$tdatatparam_tipo_ct_rubro[".closePopupAfterEdit"] = 1;
	$tdatatparam_tipo_ct_rubro[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_tipo_ct_rubro[".add"] = true;
$tdatatparam_tipo_ct_rubro[".afterAddAction"] = 1;
$tdatatparam_tipo_ct_rubro[".closePopupAfterAdd"] = 1;
$tdatatparam_tipo_ct_rubro[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_tipo_ct_rubro[".list"] = true;
}



$tdatatparam_tipo_ct_rubro[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_tipo_ct_rubro[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_tipo_ct_rubro[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_tipo_ct_rubro[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_tipo_ct_rubro[".printFriendly"] = true;
}



$tdatatparam_tipo_ct_rubro[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_tipo_ct_rubro[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_tipo_ct_rubro[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_tipo_ct_rubro[".isUseAjaxSuggest"] = true;

$tdatatparam_tipo_ct_rubro[".rowHighlite"] = true;



						

$tdatatparam_tipo_ct_rubro[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_tipo_ct_rubro[".buttonsAdded"] = false;

$tdatatparam_tipo_ct_rubro[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_tipo_ct_rubro[".isUseTimeForSearch"] = false;


$tdatatparam_tipo_ct_rubro[".badgeColor"] = "DAA520";


$tdatatparam_tipo_ct_rubro[".allSearchFields"] = array();
$tdatatparam_tipo_ct_rubro[".filterFields"] = array();
$tdatatparam_tipo_ct_rubro[".requiredSearchFields"] = array();

$tdatatparam_tipo_ct_rubro[".googleLikeFields"] = array();
$tdatatparam_tipo_ct_rubro[".googleLikeFields"][] = "rubro_id";
$tdatatparam_tipo_ct_rubro[".googleLikeFields"][] = "tipo_rubro";



$tdatatparam_tipo_ct_rubro[".tableType"] = "list";

$tdatatparam_tipo_ct_rubro[".printerPageOrientation"] = 0;
$tdatatparam_tipo_ct_rubro[".nPrinterPageScale"] = 100;

$tdatatparam_tipo_ct_rubro[".nPrinterSplitRecords"] = 40;

$tdatatparam_tipo_ct_rubro[".geocodingEnabled"] = false;










$tdatatparam_tipo_ct_rubro[".pageSize"] = 20;

$tdatatparam_tipo_ct_rubro[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatparam_tipo_ct_rubro[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_tipo_ct_rubro[".orderindexes"] = array();

$tdatatparam_tipo_ct_rubro[".sqlHead"] = "SELECT rubro_id,  	tipo_rubro";
$tdatatparam_tipo_ct_rubro[".sqlFrom"] = "FROM tparam_tipo_ct_rubro";
$tdatatparam_tipo_ct_rubro[".sqlWhereExpr"] = "";
$tdatatparam_tipo_ct_rubro[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_tipo_ct_rubro[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_tipo_ct_rubro[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_tipo_ct_rubro[".highlightSearchResults"] = true;

$tableKeystparam_tipo_ct_rubro = array();
$tdatatparam_tipo_ct_rubro[".Keys"] = $tableKeystparam_tipo_ct_rubro;


$tdatatparam_tipo_ct_rubro[".hideMobileList"] = array();




//	rubro_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rubro_id";
	$fdata["GoodName"] = "rubro_id";
	$fdata["ownerTable"] = "tparam_tipo_ct_rubro";
	$fdata["Label"] = GetFieldLabel("tparam_tipo_ct_rubro","rubro_id");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "rubro_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rubro_id";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdatatparam_tipo_ct_rubro["rubro_id"] = $fdata;
		$tdatatparam_tipo_ct_rubro[".searchableFields"][] = "rubro_id";
//	tipo_rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo_rubro";
	$fdata["GoodName"] = "tipo_rubro";
	$fdata["ownerTable"] = "tparam_tipo_ct_rubro";
	$fdata["Label"] = GetFieldLabel("tparam_tipo_ct_rubro","tipo_rubro");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "tipo_rubro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_rubro";

	
	
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


	$tdatatparam_tipo_ct_rubro["tipo_rubro"] = $fdata;
		$tdatatparam_tipo_ct_rubro[".searchableFields"][] = "tipo_rubro";


$tables_data["tparam_tipo_ct_rubro"]=&$tdatatparam_tipo_ct_rubro;
$field_labels["tparam_tipo_ct_rubro"] = &$fieldLabelstparam_tipo_ct_rubro;
$fieldToolTips["tparam_tipo_ct_rubro"] = &$fieldToolTipstparam_tipo_ct_rubro;
$placeHolders["tparam_tipo_ct_rubro"] = &$placeHolderstparam_tipo_ct_rubro;
$page_titles["tparam_tipo_ct_rubro"] = &$pageTitlestparam_tipo_ct_rubro;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tparam_tipo_ct_rubro"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tparam_tipo_ct_rubro"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tparam_tipo_ct_rubro()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rubro_id,  	tipo_rubro";
$proto0["m_strFrom"] = "FROM tparam_tipo_ct_rubro";
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
	"m_strName" => "rubro_id",
	"m_strTable" => "tparam_tipo_ct_rubro",
	"m_srcTableName" => "tparam_tipo_ct_rubro"
));

$proto6["m_sql"] = "rubro_id";
$proto6["m_srcTableName"] = "tparam_tipo_ct_rubro";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_rubro",
	"m_strTable" => "tparam_tipo_ct_rubro",
	"m_srcTableName" => "tparam_tipo_ct_rubro"
));

$proto8["m_sql"] = "tipo_rubro";
$proto8["m_srcTableName"] = "tparam_tipo_ct_rubro";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_tipo_ct_rubro";
$proto11["m_srcTableName"] = "tparam_tipo_ct_rubro";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "rubro_id";
$proto11["m_columns"][] = "tipo_rubro";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_tipo_ct_rubro";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_tipo_ct_rubro";
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
$proto0["m_srcTableName"]="tparam_tipo_ct_rubro";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_tipo_ct_rubro = createSqlQuery_tparam_tipo_ct_rubro();


	
										;

		

$tdatatparam_tipo_ct_rubro[".sqlquery"] = $queryData_tparam_tipo_ct_rubro;

$tableEvents["tparam_tipo_ct_rubro"] = new eventsBase;
$tdatatparam_tipo_ct_rubro[".hasEvents"] = false;

?>