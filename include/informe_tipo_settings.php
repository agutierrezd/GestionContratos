<?php



$tdatainforme_tipo = array();
$tdatainforme_tipo[".searchableFields"] = array();
$tdatainforme_tipo[".ShortName"] = "informe_tipo";
$tdatainforme_tipo[".OwnerID"] = "";
$tdatainforme_tipo[".OriginalTable"] = "informe_tipo";


$tdatainforme_tipo[".pagesByType"] = my_json_decode( "{}" );
$tdatainforme_tipo[".originalPagesByType"] = $tdatainforme_tipo[".pagesByType"];
$tdatainforme_tipo[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatainforme_tipo[".originalPages"] = $tdatainforme_tipo[".pages"];
$tdatainforme_tipo[".defaultPages"] = my_json_decode( "{}" );
$tdatainforme_tipo[".originalDefaultPages"] = $tdatainforme_tipo[".defaultPages"];

//	field labels
$fieldLabelsinforme_tipo = array();
$fieldToolTipsinforme_tipo = array();
$pageTitlesinforme_tipo = array();
$placeHoldersinforme_tipo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinforme_tipo["Spanish"] = array();
	$fieldToolTipsinforme_tipo["Spanish"] = array();
	$placeHoldersinforme_tipo["Spanish"] = array();
	$pageTitlesinforme_tipo["Spanish"] = array();
	$fieldLabelsinforme_tipo["Spanish"]["code_tipo"] = "Code Tipo";
	$fieldToolTipsinforme_tipo["Spanish"]["code_tipo"] = "";
	$placeHoldersinforme_tipo["Spanish"]["code_tipo"] = "";
	$fieldLabelsinforme_tipo["Spanish"]["name_tipo"] = "Name Tipo";
	$fieldToolTipsinforme_tipo["Spanish"]["name_tipo"] = "";
	$placeHoldersinforme_tipo["Spanish"]["name_tipo"] = "";
	if (count($fieldToolTipsinforme_tipo["Spanish"]))
		$tdatainforme_tipo[".isUseToolTips"] = true;
}


	$tdatainforme_tipo[".NCSearch"] = true;



$tdatainforme_tipo[".shortTableName"] = "informe_tipo";
$tdatainforme_tipo[".nSecOptions"] = 0;

$tdatainforme_tipo[".mainTableOwnerID"] = "";
$tdatainforme_tipo[".entityType"] = 0;

$tdatainforme_tipo[".strOriginalTableName"] = "informe_tipo";

	



$tdatainforme_tipo[".showAddInPopup"] = false;

$tdatainforme_tipo[".showEditInPopup"] = false;

$tdatainforme_tipo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainforme_tipo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainforme_tipo[".listAjax"] = false;
//	temporary
$tdatainforme_tipo[".listAjax"] = false;

	$tdatainforme_tipo[".audit"] = true;

	$tdatainforme_tipo[".locking"] = true;


$pages = $tdatainforme_tipo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainforme_tipo[".edit"] = true;
	$tdatainforme_tipo[".afterEditAction"] = 1;
	$tdatainforme_tipo[".closePopupAfterEdit"] = 1;
	$tdatainforme_tipo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainforme_tipo[".add"] = true;
$tdatainforme_tipo[".afterAddAction"] = 1;
$tdatainforme_tipo[".closePopupAfterAdd"] = 1;
$tdatainforme_tipo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainforme_tipo[".list"] = true;
}



$tdatainforme_tipo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainforme_tipo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainforme_tipo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainforme_tipo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainforme_tipo[".printFriendly"] = true;
}



$tdatainforme_tipo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainforme_tipo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainforme_tipo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainforme_tipo[".isUseAjaxSuggest"] = true;

$tdatainforme_tipo[".rowHighlite"] = true;



						

$tdatainforme_tipo[".ajaxCodeSnippetAdded"] = false;

$tdatainforme_tipo[".buttonsAdded"] = false;

$tdatainforme_tipo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainforme_tipo[".isUseTimeForSearch"] = false;


$tdatainforme_tipo[".badgeColor"] = "DAA520";


$tdatainforme_tipo[".allSearchFields"] = array();
$tdatainforme_tipo[".filterFields"] = array();
$tdatainforme_tipo[".requiredSearchFields"] = array();

$tdatainforme_tipo[".googleLikeFields"] = array();
$tdatainforme_tipo[".googleLikeFields"][] = "code_tipo";
$tdatainforme_tipo[".googleLikeFields"][] = "name_tipo";



$tdatainforme_tipo[".tableType"] = "list";

$tdatainforme_tipo[".printerPageOrientation"] = 0;
$tdatainforme_tipo[".nPrinterPageScale"] = 100;

$tdatainforme_tipo[".nPrinterSplitRecords"] = 40;

$tdatainforme_tipo[".geocodingEnabled"] = false;










$tdatainforme_tipo[".pageSize"] = 20;

$tdatainforme_tipo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainforme_tipo[".strOrderBy"] = $tstrOrderBy;

$tdatainforme_tipo[".orderindexes"] = array();

$tdatainforme_tipo[".sqlHead"] = "SELECT code_tipo,  	name_tipo";
$tdatainforme_tipo[".sqlFrom"] = "FROM informe_tipo";
$tdatainforme_tipo[".sqlWhereExpr"] = "";
$tdatainforme_tipo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainforme_tipo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainforme_tipo[".arrGroupsPerPage"] = $arrGPP;

$tdatainforme_tipo[".highlightSearchResults"] = true;

$tableKeysinforme_tipo = array();
$tableKeysinforme_tipo[] = "code_tipo";
$tdatainforme_tipo[".Keys"] = $tableKeysinforme_tipo;


$tdatainforme_tipo[".hideMobileList"] = array();




//	code_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "code_tipo";
	$fdata["GoodName"] = "code_tipo";
	$fdata["ownerTable"] = "informe_tipo";
	$fdata["Label"] = GetFieldLabel("informe_tipo","code_tipo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "code_tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "code_tipo";

	
	
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


	$tdatainforme_tipo["code_tipo"] = $fdata;
		$tdatainforme_tipo[".searchableFields"][] = "code_tipo";
//	name_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name_tipo";
	$fdata["GoodName"] = "name_tipo";
	$fdata["ownerTable"] = "informe_tipo";
	$fdata["Label"] = GetFieldLabel("informe_tipo","name_tipo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "name_tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name_tipo";

	
	
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


	$tdatainforme_tipo["name_tipo"] = $fdata;
		$tdatainforme_tipo[".searchableFields"][] = "name_tipo";


$tables_data["informe_tipo"]=&$tdatainforme_tipo;
$field_labels["informe_tipo"] = &$fieldLabelsinforme_tipo;
$fieldToolTips["informe_tipo"] = &$fieldToolTipsinforme_tipo;
$placeHolders["informe_tipo"] = &$placeHoldersinforme_tipo;
$page_titles["informe_tipo"] = &$pageTitlesinforme_tipo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["informe_tipo"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["informe_tipo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_informe_tipo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "code_tipo,  	name_tipo";
$proto0["m_strFrom"] = "FROM informe_tipo";
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
	"m_strName" => "code_tipo",
	"m_strTable" => "informe_tipo",
	"m_srcTableName" => "informe_tipo"
));

$proto6["m_sql"] = "code_tipo";
$proto6["m_srcTableName"] = "informe_tipo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name_tipo",
	"m_strTable" => "informe_tipo",
	"m_srcTableName" => "informe_tipo"
));

$proto8["m_sql"] = "name_tipo";
$proto8["m_srcTableName"] = "informe_tipo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "informe_tipo";
$proto11["m_srcTableName"] = "informe_tipo";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "code_tipo";
$proto11["m_columns"][] = "name_tipo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "informe_tipo";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "informe_tipo";
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
$proto0["m_srcTableName"]="informe_tipo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_informe_tipo = createSqlQuery_informe_tipo();


	
										;

		

$tdatainforme_tipo[".sqlquery"] = $queryData_informe_tipo;

$tableEvents["informe_tipo"] = new eventsBase;
$tdatainforme_tipo[".hasEvents"] = false;

?>