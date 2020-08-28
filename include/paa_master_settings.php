<?php



$tdatapaa_master = array();
$tdatapaa_master[".searchableFields"] = array();
$tdatapaa_master[".ShortName"] = "paa_master";
$tdatapaa_master[".OwnerID"] = "";
$tdatapaa_master[".OriginalTable"] = "paa_master";


$tdatapaa_master[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapaa_master[".originalPagesByType"] = $tdatapaa_master[".pagesByType"];
$tdatapaa_master[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapaa_master[".originalPages"] = $tdatapaa_master[".pages"];
$tdatapaa_master[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapaa_master[".originalDefaultPages"] = $tdatapaa_master[".defaultPages"];

//	field labels
$fieldLabelspaa_master = array();
$fieldToolTipspaa_master = array();
$pageTitlespaa_master = array();
$placeHolderspaa_master = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspaa_master["Spanish"] = array();
	$fieldToolTipspaa_master["Spanish"] = array();
	$placeHolderspaa_master["Spanish"] = array();
	$pageTitlespaa_master["Spanish"] = array();
	$fieldLabelspaa_master["Spanish"]["PAA_ID"] = "PAA ID";
	$fieldToolTipspaa_master["Spanish"]["PAA_ID"] = "";
	$placeHolderspaa_master["Spanish"]["PAA_ID"] = "";
	$fieldLabelspaa_master["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipspaa_master["Spanish"]["DESCRIPCION"] = "";
	$placeHolderspaa_master["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelspaa_master["Spanish"]["VALOR"] = "VALOR";
	$fieldToolTipspaa_master["Spanish"]["VALOR"] = "";
	$placeHolderspaa_master["Spanish"]["VALOR"] = "";
	$fieldLabelspaa_master["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipspaa_master["Spanish"]["vigencia"] = "";
	$placeHolderspaa_master["Spanish"]["vigencia"] = "";
	$fieldLabelspaa_master["Spanish"]["sys_status"] = "Sys Status";
	$fieldToolTipspaa_master["Spanish"]["sys_status"] = "";
	$placeHolderspaa_master["Spanish"]["sys_status"] = "";
	if (count($fieldToolTipspaa_master["Spanish"]))
		$tdatapaa_master[".isUseToolTips"] = true;
}


	$tdatapaa_master[".NCSearch"] = true;



$tdatapaa_master[".shortTableName"] = "paa_master";
$tdatapaa_master[".nSecOptions"] = 0;

$tdatapaa_master[".mainTableOwnerID"] = "";
$tdatapaa_master[".entityType"] = 0;

$tdatapaa_master[".strOriginalTableName"] = "paa_master";

	



$tdatapaa_master[".showAddInPopup"] = false;

$tdatapaa_master[".showEditInPopup"] = false;

$tdatapaa_master[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapaa_master[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapaa_master[".listAjax"] = false;
//	temporary
$tdatapaa_master[".listAjax"] = false;

	$tdatapaa_master[".audit"] = true;

	$tdatapaa_master[".locking"] = true;


$pages = $tdatapaa_master[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapaa_master[".edit"] = true;
	$tdatapaa_master[".afterEditAction"] = 1;
	$tdatapaa_master[".closePopupAfterEdit"] = 1;
	$tdatapaa_master[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapaa_master[".add"] = true;
$tdatapaa_master[".afterAddAction"] = 1;
$tdatapaa_master[".closePopupAfterAdd"] = 1;
$tdatapaa_master[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapaa_master[".list"] = true;
}



$tdatapaa_master[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapaa_master[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapaa_master[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapaa_master[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapaa_master[".printFriendly"] = true;
}



$tdatapaa_master[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapaa_master[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapaa_master[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapaa_master[".isUseAjaxSuggest"] = true;

$tdatapaa_master[".rowHighlite"] = true;



						

$tdatapaa_master[".ajaxCodeSnippetAdded"] = false;

$tdatapaa_master[".buttonsAdded"] = false;

$tdatapaa_master[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapaa_master[".isUseTimeForSearch"] = false;


$tdatapaa_master[".badgeColor"] = "E67349";


$tdatapaa_master[".allSearchFields"] = array();
$tdatapaa_master[".filterFields"] = array();
$tdatapaa_master[".requiredSearchFields"] = array();

$tdatapaa_master[".googleLikeFields"] = array();
$tdatapaa_master[".googleLikeFields"][] = "PAA_ID";
$tdatapaa_master[".googleLikeFields"][] = "DESCRIPCION";
$tdatapaa_master[".googleLikeFields"][] = "VALOR";
$tdatapaa_master[".googleLikeFields"][] = "vigencia";
$tdatapaa_master[".googleLikeFields"][] = "sys_status";



$tdatapaa_master[".tableType"] = "list";

$tdatapaa_master[".printerPageOrientation"] = 0;
$tdatapaa_master[".nPrinterPageScale"] = 100;

$tdatapaa_master[".nPrinterSplitRecords"] = 40;

$tdatapaa_master[".geocodingEnabled"] = false;










$tdatapaa_master[".pageSize"] = 20;

$tdatapaa_master[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapaa_master[".strOrderBy"] = $tstrOrderBy;

$tdatapaa_master[".orderindexes"] = array();

$tdatapaa_master[".sqlHead"] = "SELECT PAA_ID,  DESCRIPCION,  VALOR,  vigencia,  sys_status";
$tdatapaa_master[".sqlFrom"] = "FROM paa_master";
$tdatapaa_master[".sqlWhereExpr"] = "(sys_status = 4)";
$tdatapaa_master[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaa_master[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaa_master[".arrGroupsPerPage"] = $arrGPP;

$tdatapaa_master[".highlightSearchResults"] = true;

$tableKeyspaa_master = array();
$tableKeyspaa_master[] = "PAA_ID";
$tdatapaa_master[".Keys"] = $tableKeyspaa_master;


$tdatapaa_master[".hideMobileList"] = array();




//	PAA_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAA_ID";
	$fdata["GoodName"] = "PAA_ID";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","PAA_ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "PAA_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAA_ID";

	
	
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


	$tdatapaa_master["PAA_ID"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "PAA_ID";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","DESCRIPCION");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "DESCRIPCION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatapaa_master["DESCRIPCION"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "DESCRIPCION";
//	VALOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "VALOR";
	$fdata["GoodName"] = "VALOR";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","VALOR");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "VALOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALOR";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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


	$tdatapaa_master["VALOR"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "VALOR";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","vigencia");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "vigencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia";

	
	
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


	$tdatapaa_master["vigencia"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "vigencia";
//	sys_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sys_status";
	$fdata["GoodName"] = "sys_status";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master","sys_status");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "sys_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_status";

	
	
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


	$tdatapaa_master["sys_status"] = $fdata;
		$tdatapaa_master[".searchableFields"][] = "sys_status";


$tables_data["paa_master"]=&$tdatapaa_master;
$field_labels["paa_master"] = &$fieldLabelspaa_master;
$fieldToolTips["paa_master"] = &$fieldToolTipspaa_master;
$placeHolders["paa_master"] = &$placeHolderspaa_master;
$page_titles["paa_master"] = &$pageTitlespaa_master;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["paa_master"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["paa_master"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_paa_master()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PAA_ID,  DESCRIPCION,  VALOR,  vigencia,  sys_status";
$proto0["m_strFrom"] = "FROM paa_master";
$proto0["m_strWhere"] = "(sys_status = 4)";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "sys_status = 4";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sys_status",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 4";
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
	"m_strName" => "PAA_ID",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto6["m_sql"] = "PAA_ID";
$proto6["m_srcTableName"] = "paa_master";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto8["m_sql"] = "DESCRIPCION";
$proto8["m_srcTableName"] = "paa_master";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto10["m_sql"] = "VALOR";
$proto10["m_srcTableName"] = "paa_master";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto12["m_sql"] = "vigencia";
$proto12["m_srcTableName"] = "paa_master";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_status",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master"
));

$proto14["m_sql"] = "sys_status";
$proto14["m_srcTableName"] = "paa_master";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "paa_master";
$proto17["m_srcTableName"] = "paa_master";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "PAA_ID";
$proto17["m_columns"][] = "COD_UNSPSC";
$proto17["m_columns"][] = "DESCRIPCION";
$proto17["m_columns"][] = "DESCRIPCION_NEW";
$proto17["m_columns"][] = "MES_INICIO";
$proto17["m_columns"][] = "MES_PRESENTA";
$proto17["m_columns"][] = "DURACION_CONTRATO";
$proto17["m_columns"][] = "DURACION_ESTIMADA_DMA";
$proto17["m_columns"][] = "MODALIDAD";
$proto17["m_columns"][] = "FUENTE_RECURSOS";
$proto17["m_columns"][] = "VALOR";
$proto17["m_columns"][] = "VALOR_VIGENCIA";
$proto17["m_columns"][] = "VALOR_VIGENCIA_FUTURA";
$proto17["m_columns"][] = "VF";
$proto17["m_columns"][] = "ESTADO_VF";
$proto17["m_columns"][] = "UNIDAD_CONTRATACION";
$proto17["m_columns"][] = "COD_UBICACION";
$proto17["m_columns"][] = "RESPONSABLE_NOMBRE";
$proto17["m_columns"][] = "RESPONSABLE_TELEFONO";
$proto17["m_columns"][] = "RESPONSABLE_EMAIL";
$proto17["m_columns"][] = "responsable";
$proto17["m_columns"][] = "vigencia";
$proto17["m_columns"][] = "sys_user";
$proto17["m_columns"][] = "sys_date";
$proto17["m_columns"][] = "sys_status";
$proto17["m_columns"][] = "REQ_OBS";
$proto17["m_columns"][] = "REQ_DATE";
$proto17["m_columns"][] = "REQ_MAILNOT";
$proto17["m_columns"][] = "SolModifica";
$proto17["m_columns"][] = "ContIdFK";
$proto17["m_columns"][] = "OBS_anulacion";
$proto17["m_columns"][] = "TIPOSOL";
$proto17["m_columns"][] = "USOS_TOTAL";
$proto17["m_columns"][] = "responsable_dep";
$proto17["m_columns"][] = "responsable_depsup";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "paa_master";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "paa_master";
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
$proto0["m_srcTableName"]="paa_master";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paa_master = createSqlQuery_paa_master();


	
										;

					

$tdatapaa_master[".sqlquery"] = $queryData_paa_master;

$tableEvents["paa_master"] = new eventsBase;
$tdatapaa_master[".hasEvents"] = false;

?>