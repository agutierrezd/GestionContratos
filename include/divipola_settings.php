<?php



$tdatadivipola = array();
$tdatadivipola[".searchableFields"] = array();
$tdatadivipola[".ShortName"] = "divipola";
$tdatadivipola[".OwnerID"] = "";
$tdatadivipola[".OriginalTable"] = "divipola";


$tdatadivipola[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"view\":[\"view\"]}" );
$tdatadivipola[".originalPagesByType"] = $tdatadivipola[".pagesByType"];
$tdatadivipola[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"view\":[\"view\"]}" ) );
$tdatadivipola[".originalPages"] = $tdatadivipola[".pages"];
$tdatadivipola[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"view\":\"view\"}" );
$tdatadivipola[".originalDefaultPages"] = $tdatadivipola[".defaultPages"];

//	field labels
$fieldLabelsdivipola = array();
$fieldToolTipsdivipola = array();
$pageTitlesdivipola = array();
$placeHoldersdivipola = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdivipola["Spanish"] = array();
	$fieldToolTipsdivipola["Spanish"] = array();
	$placeHoldersdivipola["Spanish"] = array();
	$pageTitlesdivipola["Spanish"] = array();
	$fieldLabelsdivipola["Spanish"]["CODDPTO"] = "COD. DPTO";
	$fieldToolTipsdivipola["Spanish"]["CODDPTO"] = "";
	$placeHoldersdivipola["Spanish"]["CODDPTO"] = "";
	$fieldLabelsdivipola["Spanish"]["CODMUN"] = "COD. MUN";
	$fieldToolTipsdivipola["Spanish"]["CODMUN"] = "";
	$placeHoldersdivipola["Spanish"]["CODMUN"] = "";
	$fieldLabelsdivipola["Spanish"]["NOMDPTO"] = "NOM DPTO";
	$fieldToolTipsdivipola["Spanish"]["NOMDPTO"] = "";
	$placeHoldersdivipola["Spanish"]["NOMDPTO"] = "";
	$fieldLabelsdivipola["Spanish"]["NOMMUNICIPIO"] = "NOM MUNICIPIO";
	$fieldToolTipsdivipola["Spanish"]["NOMMUNICIPIO"] = "";
	$placeHoldersdivipola["Spanish"]["NOMMUNICIPIO"] = "";
	$fieldLabelsdivipola["Spanish"]["TIPOCENTPOBLADO"] = "TIPOCENTPOBLADO";
	$fieldToolTipsdivipola["Spanish"]["TIPOCENTPOBLADO"] = "";
	$placeHoldersdivipola["Spanish"]["TIPOCENTPOBLADO"] = "";
	if (count($fieldToolTipsdivipola["Spanish"]))
		$tdatadivipola[".isUseToolTips"] = true;
}


	$tdatadivipola[".NCSearch"] = true;



$tdatadivipola[".shortTableName"] = "divipola";
$tdatadivipola[".nSecOptions"] = 0;

$tdatadivipola[".mainTableOwnerID"] = "";
$tdatadivipola[".entityType"] = 0;

$tdatadivipola[".strOriginalTableName"] = "divipola";

	



$tdatadivipola[".showAddInPopup"] = false;

$tdatadivipola[".showEditInPopup"] = false;

$tdatadivipola[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadivipola[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadivipola[".listAjax"] = false;
//	temporary
$tdatadivipola[".listAjax"] = false;

	$tdatadivipola[".audit"] = true;

	$tdatadivipola[".locking"] = true;


$pages = $tdatadivipola[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadivipola[".edit"] = true;
	$tdatadivipola[".afterEditAction"] = 1;
	$tdatadivipola[".closePopupAfterEdit"] = 1;
	$tdatadivipola[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadivipola[".add"] = true;
$tdatadivipola[".afterAddAction"] = 1;
$tdatadivipola[".closePopupAfterAdd"] = 1;
$tdatadivipola[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadivipola[".list"] = true;
}



$tdatadivipola[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadivipola[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadivipola[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadivipola[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadivipola[".printFriendly"] = true;
}



$tdatadivipola[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadivipola[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadivipola[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadivipola[".isUseAjaxSuggest"] = true;

$tdatadivipola[".rowHighlite"] = true;



						

$tdatadivipola[".ajaxCodeSnippetAdded"] = false;

$tdatadivipola[".buttonsAdded"] = false;

$tdatadivipola[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadivipola[".isUseTimeForSearch"] = false;


$tdatadivipola[".badgeColor"] = "DC143C";


$tdatadivipola[".allSearchFields"] = array();
$tdatadivipola[".filterFields"] = array();
$tdatadivipola[".requiredSearchFields"] = array();

$tdatadivipola[".googleLikeFields"] = array();
$tdatadivipola[".googleLikeFields"][] = "CODDPTO";
$tdatadivipola[".googleLikeFields"][] = "CODMUN";
$tdatadivipola[".googleLikeFields"][] = "NOMDPTO";
$tdatadivipola[".googleLikeFields"][] = "NOMMUNICIPIO";
$tdatadivipola[".googleLikeFields"][] = "TIPOCENTPOBLADO";



$tdatadivipola[".tableType"] = "list";

$tdatadivipola[".printerPageOrientation"] = 0;
$tdatadivipola[".nPrinterPageScale"] = 100;

$tdatadivipola[".nPrinterSplitRecords"] = 40;

$tdatadivipola[".geocodingEnabled"] = false;










$tdatadivipola[".pageSize"] = 20;

$tdatadivipola[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadivipola[".strOrderBy"] = $tstrOrderBy;

$tdatadivipola[".orderindexes"] = array();

$tdatadivipola[".sqlHead"] = "SELECT CODDPTO,  CODMUN,  NOMDPTO,  NOMMUNICIPIO,  TIPOCENTPOBLADO";
$tdatadivipola[".sqlFrom"] = "FROM divipola";
$tdatadivipola[".sqlWhereExpr"] = "(TIPOCENTPOBLADO = 'CABECERA MUNICIPAL (CM)')";
$tdatadivipola[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadivipola[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadivipola[".arrGroupsPerPage"] = $arrGPP;

$tdatadivipola[".highlightSearchResults"] = true;

$tableKeysdivipola = array();
$tableKeysdivipola[] = "CODMUN";
$tdatadivipola[".Keys"] = $tableKeysdivipola;


$tdatadivipola[".hideMobileList"] = array();




//	CODDPTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CODDPTO";
	$fdata["GoodName"] = "CODDPTO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","CODDPTO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CODDPTO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CODDPTO";

	
	
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


	$tdatadivipola["CODDPTO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "CODDPTO";
//	CODMUN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CODMUN";
	$fdata["GoodName"] = "CODMUN";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","CODMUN");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CODMUN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CODMUN";

	
	
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


	$tdatadivipola["CODMUN"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "CODMUN";
//	NOMDPTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOMDPTO";
	$fdata["GoodName"] = "NOMDPTO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","NOMDPTO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NOMDPTO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMDPTO";

	
	
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


	$tdatadivipola["NOMDPTO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "NOMDPTO";
//	NOMMUNICIPIO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NOMMUNICIPIO";
	$fdata["GoodName"] = "NOMMUNICIPIO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","NOMMUNICIPIO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NOMMUNICIPIO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMMUNICIPIO";

	
	
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


	$tdatadivipola["NOMMUNICIPIO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "NOMMUNICIPIO";
//	TIPOCENTPOBLADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TIPOCENTPOBLADO";
	$fdata["GoodName"] = "TIPOCENTPOBLADO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","TIPOCENTPOBLADO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TIPOCENTPOBLADO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPOCENTPOBLADO";

	
	
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


	$tdatadivipola["TIPOCENTPOBLADO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "TIPOCENTPOBLADO";


$tables_data["divipola"]=&$tdatadivipola;
$field_labels["divipola"] = &$fieldLabelsdivipola;
$fieldToolTips["divipola"] = &$fieldToolTipsdivipola;
$placeHolders["divipola"] = &$placeHoldersdivipola;
$page_titles["divipola"] = &$pageTitlesdivipola;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["divipola"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["divipola"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_divipola()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CODDPTO,  CODMUN,  NOMDPTO,  NOMMUNICIPIO,  TIPOCENTPOBLADO";
$proto0["m_strFrom"] = "FROM divipola";
$proto0["m_strWhere"] = "(TIPOCENTPOBLADO = 'CABECERA MUNICIPAL (CM)')";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "TIPOCENTPOBLADO = 'CABECERA MUNICIPAL (CM)'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TIPOCENTPOBLADO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'CABECERA MUNICIPAL (CM)'";
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
	"m_strName" => "CODDPTO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto6["m_sql"] = "CODDPTO";
$proto6["m_srcTableName"] = "divipola";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CODMUN",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto8["m_sql"] = "CODMUN";
$proto8["m_srcTableName"] = "divipola";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMDPTO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto10["m_sql"] = "NOMDPTO";
$proto10["m_srcTableName"] = "divipola";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMMUNICIPIO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto12["m_sql"] = "NOMMUNICIPIO";
$proto12["m_srcTableName"] = "divipola";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPOCENTPOBLADO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto14["m_sql"] = "TIPOCENTPOBLADO";
$proto14["m_srcTableName"] = "divipola";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "divipola";
$proto17["m_srcTableName"] = "divipola";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "CODDPTO";
$proto17["m_columns"][] = "CODMUN";
$proto17["m_columns"][] = "CODCENTPOBLADO";
$proto17["m_columns"][] = "NOMDPTO";
$proto17["m_columns"][] = "NOMMUNICIPIO";
$proto17["m_columns"][] = "NOMCENTPOBLADO";
$proto17["m_columns"][] = "TIPOCENTPOBLADO";
$proto17["m_columns"][] = "LON";
$proto17["m_columns"][] = "F9";
$proto17["m_columns"][] = "LAT";
$proto17["m_columns"][] = "DISTRITO";
$proto17["m_columns"][] = "TIPOMUN";
$proto17["m_columns"][] = "AREAMETRO";
$proto17["m_columns"][] = "CENSO";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "divipola";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "divipola";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="divipola";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_divipola = createSqlQuery_divipola();


	
										;

					

$tdatadivipola[".sqlquery"] = $queryData_divipola;

$tableEvents["divipola"] = new eventsBase;
$tdatadivipola[".hasEvents"] = false;

?>