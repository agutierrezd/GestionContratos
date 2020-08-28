<?php



$tdatatparam_habilita = array();
$tdatatparam_habilita[".searchableFields"] = array();
$tdatatparam_habilita[".ShortName"] = "tparam_habilita";
$tdatatparam_habilita[".OwnerID"] = "";
$tdatatparam_habilita[".OriginalTable"] = "tparam_habilita";


$tdatatparam_habilita[".pagesByType"] = my_json_decode( "{}" );
$tdatatparam_habilita[".originalPagesByType"] = $tdatatparam_habilita[".pagesByType"];
$tdatatparam_habilita[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatparam_habilita[".originalPages"] = $tdatatparam_habilita[".pages"];
$tdatatparam_habilita[".defaultPages"] = my_json_decode( "{}" );
$tdatatparam_habilita[".originalDefaultPages"] = $tdatatparam_habilita[".defaultPages"];

//	field labels
$fieldLabelstparam_habilita = array();
$fieldToolTipstparam_habilita = array();
$pageTitlestparam_habilita = array();
$placeHolderstparam_habilita = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_habilita["Spanish"] = array();
	$fieldToolTipstparam_habilita["Spanish"] = array();
	$placeHolderstparam_habilita["Spanish"] = array();
	$pageTitlestparam_habilita["Spanish"] = array();
	$fieldLabelstparam_habilita["Spanish"]["habilitado_id"] = "Habilitado Id";
	$fieldToolTipstparam_habilita["Spanish"]["habilitado_id"] = "";
	$placeHolderstparam_habilita["Spanish"]["habilitado_id"] = "";
	$fieldLabelstparam_habilita["Spanish"]["habilitado_name"] = "Habilitado Name";
	$fieldToolTipstparam_habilita["Spanish"]["habilitado_name"] = "";
	$placeHolderstparam_habilita["Spanish"]["habilitado_name"] = "";
	if (count($fieldToolTipstparam_habilita["Spanish"]))
		$tdatatparam_habilita[".isUseToolTips"] = true;
}


	$tdatatparam_habilita[".NCSearch"] = true;



$tdatatparam_habilita[".shortTableName"] = "tparam_habilita";
$tdatatparam_habilita[".nSecOptions"] = 0;

$tdatatparam_habilita[".mainTableOwnerID"] = "";
$tdatatparam_habilita[".entityType"] = 0;

$tdatatparam_habilita[".strOriginalTableName"] = "tparam_habilita";

	



$tdatatparam_habilita[".showAddInPopup"] = false;

$tdatatparam_habilita[".showEditInPopup"] = false;

$tdatatparam_habilita[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatparam_habilita[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatparam_habilita[".listAjax"] = false;
//	temporary
$tdatatparam_habilita[".listAjax"] = false;

	$tdatatparam_habilita[".audit"] = true;

	$tdatatparam_habilita[".locking"] = true;


$pages = $tdatatparam_habilita[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_habilita[".edit"] = true;
	$tdatatparam_habilita[".afterEditAction"] = 1;
	$tdatatparam_habilita[".closePopupAfterEdit"] = 1;
	$tdatatparam_habilita[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_habilita[".add"] = true;
$tdatatparam_habilita[".afterAddAction"] = 1;
$tdatatparam_habilita[".closePopupAfterAdd"] = 1;
$tdatatparam_habilita[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_habilita[".list"] = true;
}



$tdatatparam_habilita[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_habilita[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_habilita[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_habilita[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_habilita[".printFriendly"] = true;
}



$tdatatparam_habilita[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_habilita[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_habilita[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_habilita[".isUseAjaxSuggest"] = true;

$tdatatparam_habilita[".rowHighlite"] = true;



						

$tdatatparam_habilita[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_habilita[".buttonsAdded"] = false;

$tdatatparam_habilita[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_habilita[".isUseTimeForSearch"] = false;


$tdatatparam_habilita[".badgeColor"] = "DAA520";


$tdatatparam_habilita[".allSearchFields"] = array();
$tdatatparam_habilita[".filterFields"] = array();
$tdatatparam_habilita[".requiredSearchFields"] = array();

$tdatatparam_habilita[".googleLikeFields"] = array();
$tdatatparam_habilita[".googleLikeFields"][] = "habilitado_id";
$tdatatparam_habilita[".googleLikeFields"][] = "habilitado_name";



$tdatatparam_habilita[".tableType"] = "list";

$tdatatparam_habilita[".printerPageOrientation"] = 0;
$tdatatparam_habilita[".nPrinterPageScale"] = 100;

$tdatatparam_habilita[".nPrinterSplitRecords"] = 40;

$tdatatparam_habilita[".geocodingEnabled"] = false;










$tdatatparam_habilita[".pageSize"] = 20;

$tdatatparam_habilita[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatparam_habilita[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_habilita[".orderindexes"] = array();

$tdatatparam_habilita[".sqlHead"] = "SELECT habilitado_id,  	habilitado_name";
$tdatatparam_habilita[".sqlFrom"] = "FROM tparam_habilita";
$tdatatparam_habilita[".sqlWhereExpr"] = "";
$tdatatparam_habilita[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_habilita[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_habilita[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_habilita[".highlightSearchResults"] = true;

$tableKeystparam_habilita = array();
$tableKeystparam_habilita[] = "habilitado_id";
$tdatatparam_habilita[".Keys"] = $tableKeystparam_habilita;


$tdatatparam_habilita[".hideMobileList"] = array();




//	habilitado_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "habilitado_id";
	$fdata["GoodName"] = "habilitado_id";
	$fdata["ownerTable"] = "tparam_habilita";
	$fdata["Label"] = GetFieldLabel("tparam_habilita","habilitado_id");
	$fdata["FieldType"] = 16;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "habilitado_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "habilitado_id";

	
	
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


	$tdatatparam_habilita["habilitado_id"] = $fdata;
		$tdatatparam_habilita[".searchableFields"][] = "habilitado_id";
//	habilitado_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "habilitado_name";
	$fdata["GoodName"] = "habilitado_name";
	$fdata["ownerTable"] = "tparam_habilita";
	$fdata["Label"] = GetFieldLabel("tparam_habilita","habilitado_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "habilitado_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "habilitado_name";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatparam_habilita["habilitado_name"] = $fdata;
		$tdatatparam_habilita[".searchableFields"][] = "habilitado_name";


$tables_data["tparam_habilita"]=&$tdatatparam_habilita;
$field_labels["tparam_habilita"] = &$fieldLabelstparam_habilita;
$fieldToolTips["tparam_habilita"] = &$fieldToolTipstparam_habilita;
$placeHolders["tparam_habilita"] = &$placeHolderstparam_habilita;
$page_titles["tparam_habilita"] = &$pageTitlestparam_habilita;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tparam_habilita"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tparam_habilita"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tparam_habilita()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "habilitado_id,  	habilitado_name";
$proto0["m_strFrom"] = "FROM tparam_habilita";
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
	"m_strName" => "habilitado_id",
	"m_strTable" => "tparam_habilita",
	"m_srcTableName" => "tparam_habilita"
));

$proto6["m_sql"] = "habilitado_id";
$proto6["m_srcTableName"] = "tparam_habilita";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "habilitado_name",
	"m_strTable" => "tparam_habilita",
	"m_srcTableName" => "tparam_habilita"
));

$proto8["m_sql"] = "habilitado_name";
$proto8["m_srcTableName"] = "tparam_habilita";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_habilita";
$proto11["m_srcTableName"] = "tparam_habilita";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "habilitado_id";
$proto11["m_columns"][] = "habilitado_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_habilita";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_habilita";
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
$proto0["m_srcTableName"]="tparam_habilita";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_habilita = createSqlQuery_tparam_habilita();


	
										;

		

$tdatatparam_habilita[".sqlquery"] = $queryData_tparam_habilita;

$tableEvents["tparam_habilita"] = new eventsBase;
$tdatatparam_habilita[".hasEvents"] = false;

?>