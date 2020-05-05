<?php



$tdatacontrato_fase = array();
$tdatacontrato_fase[".searchableFields"] = array();
$tdatacontrato_fase[".ShortName"] = "contrato_fase";
$tdatacontrato_fase[".OwnerID"] = "";
$tdatacontrato_fase[".OriginalTable"] = "contrato_fase";


$tdatacontrato_fase[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatacontrato_fase[".originalPagesByType"] = $tdatacontrato_fase[".pagesByType"];
$tdatacontrato_fase[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatacontrato_fase[".originalPages"] = $tdatacontrato_fase[".pages"];
$tdatacontrato_fase[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatacontrato_fase[".originalDefaultPages"] = $tdatacontrato_fase[".defaultPages"];

//	field labels
$fieldLabelscontrato_fase = array();
$fieldToolTipscontrato_fase = array();
$pageTitlescontrato_fase = array();
$placeHolderscontrato_fase = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_fase["Spanish"] = array();
	$fieldToolTipscontrato_fase["Spanish"] = array();
	$placeHolderscontrato_fase["Spanish"] = array();
	$pageTitlescontrato_fase["Spanish"] = array();
	$fieldLabelscontrato_fase["Spanish"]["cont_fase"] = "Cont Fase";
	$fieldToolTipscontrato_fase["Spanish"]["cont_fase"] = "";
	$placeHolderscontrato_fase["Spanish"]["cont_fase"] = "";
	$fieldLabelscontrato_fase["Spanish"]["fase_nombre"] = "Fase Nombre";
	$fieldToolTipscontrato_fase["Spanish"]["fase_nombre"] = "";
	$placeHolderscontrato_fase["Spanish"]["fase_nombre"] = "";
	if (count($fieldToolTipscontrato_fase["Spanish"]))
		$tdatacontrato_fase[".isUseToolTips"] = true;
}


	$tdatacontrato_fase[".NCSearch"] = true;



$tdatacontrato_fase[".shortTableName"] = "contrato_fase";
$tdatacontrato_fase[".nSecOptions"] = 0;

$tdatacontrato_fase[".mainTableOwnerID"] = "";
$tdatacontrato_fase[".entityType"] = 0;

$tdatacontrato_fase[".strOriginalTableName"] = "contrato_fase";

	



$tdatacontrato_fase[".showAddInPopup"] = false;

$tdatacontrato_fase[".showEditInPopup"] = false;

$tdatacontrato_fase[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrato_fase[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrato_fase[".listAjax"] = false;
//	temporary
$tdatacontrato_fase[".listAjax"] = false;

	$tdatacontrato_fase[".audit"] = false;

	$tdatacontrato_fase[".locking"] = false;


$pages = $tdatacontrato_fase[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_fase[".edit"] = true;
	$tdatacontrato_fase[".afterEditAction"] = 1;
	$tdatacontrato_fase[".closePopupAfterEdit"] = 1;
	$tdatacontrato_fase[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_fase[".add"] = true;
$tdatacontrato_fase[".afterAddAction"] = 1;
$tdatacontrato_fase[".closePopupAfterAdd"] = 1;
$tdatacontrato_fase[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_fase[".list"] = true;
}



$tdatacontrato_fase[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_fase[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_fase[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_fase[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_fase[".printFriendly"] = true;
}



$tdatacontrato_fase[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_fase[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_fase[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_fase[".isUseAjaxSuggest"] = true;

$tdatacontrato_fase[".rowHighlite"] = true;



			

$tdatacontrato_fase[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_fase[".buttonsAdded"] = false;

$tdatacontrato_fase[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_fase[".isUseTimeForSearch"] = false;


$tdatacontrato_fase[".badgeColor"] = "6B8E23";


$tdatacontrato_fase[".allSearchFields"] = array();
$tdatacontrato_fase[".filterFields"] = array();
$tdatacontrato_fase[".requiredSearchFields"] = array();

$tdatacontrato_fase[".googleLikeFields"] = array();
$tdatacontrato_fase[".googleLikeFields"][] = "cont_fase";
$tdatacontrato_fase[".googleLikeFields"][] = "fase_nombre";



$tdatacontrato_fase[".tableType"] = "list";

$tdatacontrato_fase[".printerPageOrientation"] = 0;
$tdatacontrato_fase[".nPrinterPageScale"] = 100;

$tdatacontrato_fase[".nPrinterSplitRecords"] = 40;

$tdatacontrato_fase[".geocodingEnabled"] = false;










$tdatacontrato_fase[".pageSize"] = 20;

$tdatacontrato_fase[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrato_fase[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_fase[".orderindexes"] = array();

$tdatacontrato_fase[".sqlHead"] = "SELECT cont_fase,  	fase_nombre";
$tdatacontrato_fase[".sqlFrom"] = "FROM contrato_fase";
$tdatacontrato_fase[".sqlWhereExpr"] = "";
$tdatacontrato_fase[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_fase[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_fase[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_fase[".highlightSearchResults"] = true;

$tableKeyscontrato_fase = array();
$tdatacontrato_fase[".Keys"] = $tableKeyscontrato_fase;


$tdatacontrato_fase[".hideMobileList"] = array();




//	cont_fase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cont_fase";
	$fdata["GoodName"] = "cont_fase";
	$fdata["ownerTable"] = "contrato_fase";
	$fdata["Label"] = GetFieldLabel("contrato_fase","cont_fase");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_fase";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fase";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatacontrato_fase["cont_fase"] = $fdata;
		$tdatacontrato_fase[".searchableFields"][] = "cont_fase";
//	fase_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fase_nombre";
	$fdata["GoodName"] = "fase_nombre";
	$fdata["ownerTable"] = "contrato_fase";
	$fdata["Label"] = GetFieldLabel("contrato_fase","fase_nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "fase_nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fase_nombre";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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


	$tdatacontrato_fase["fase_nombre"] = $fdata;
		$tdatacontrato_fase[".searchableFields"][] = "fase_nombre";


$tables_data["contrato_fase"]=&$tdatacontrato_fase;
$field_labels["contrato_fase"] = &$fieldLabelscontrato_fase;
$fieldToolTips["contrato_fase"] = &$fieldToolTipscontrato_fase;
$placeHolders["contrato_fase"] = &$placeHolderscontrato_fase;
$page_titles["contrato_fase"] = &$pageTitlescontrato_fase;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contrato_fase"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["contrato_fase"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_contrato_fase()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cont_fase,  	fase_nombre";
$proto0["m_strFrom"] = "FROM contrato_fase";
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
	"m_strName" => "cont_fase",
	"m_strTable" => "contrato_fase",
	"m_srcTableName" => "contrato_fase"
));

$proto6["m_sql"] = "cont_fase";
$proto6["m_srcTableName"] = "contrato_fase";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fase_nombre",
	"m_strTable" => "contrato_fase",
	"m_srcTableName" => "contrato_fase"
));

$proto8["m_sql"] = "fase_nombre";
$proto8["m_srcTableName"] = "contrato_fase";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "contrato_fase";
$proto11["m_srcTableName"] = "contrato_fase";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "cont_fase";
$proto11["m_columns"][] = "fase_nombre";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "contrato_fase";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "contrato_fase";
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
$proto0["m_srcTableName"]="contrato_fase";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_fase = createSqlQuery_contrato_fase();


	
								;

		

$tdatacontrato_fase[".sqlquery"] = $queryData_contrato_fase;

$tableEvents["contrato_fase"] = new eventsBase;
$tdatacontrato_fase[".hasEvents"] = false;

?>