<?php



$tdatacontrato_dependencia = array();
$tdatacontrato_dependencia[".searchableFields"] = array();
$tdatacontrato_dependencia[".ShortName"] = "contrato_dependencia";
$tdatacontrato_dependencia[".OwnerID"] = "";
$tdatacontrato_dependencia[".OriginalTable"] = "contrato_dependencia";


$tdatacontrato_dependencia[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_dependencia[".originalPagesByType"] = $tdatacontrato_dependencia[".pagesByType"];
$tdatacontrato_dependencia[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_dependencia[".originalPages"] = $tdatacontrato_dependencia[".pages"];
$tdatacontrato_dependencia[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_dependencia[".originalDefaultPages"] = $tdatacontrato_dependencia[".defaultPages"];

//	field labels
$fieldLabelscontrato_dependencia = array();
$fieldToolTipscontrato_dependencia = array();
$pageTitlescontrato_dependencia = array();
$placeHolderscontrato_dependencia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_dependencia["Spanish"] = array();
	$fieldToolTipscontrato_dependencia["Spanish"] = array();
	$placeHolderscontrato_dependencia["Spanish"] = array();
	$pageTitlescontrato_dependencia["Spanish"] = array();
	$fieldLabelscontrato_dependencia["Spanish"]["dep_id"] = "Dep Id";
	$fieldToolTipscontrato_dependencia["Spanish"]["dep_id"] = "";
	$placeHolderscontrato_dependencia["Spanish"]["dep_id"] = "";
	$fieldLabelscontrato_dependencia["Spanish"]["id_cont_fk"] = "Id Cont Fk";
	$fieldToolTipscontrato_dependencia["Spanish"]["id_cont_fk"] = "";
	$placeHolderscontrato_dependencia["Spanish"]["id_cont_fk"] = "";
	$fieldLabelscontrato_dependencia["Spanish"]["dep_sup"] = "Dependencia general";
	$fieldToolTipscontrato_dependencia["Spanish"]["dep_sup"] = "";
	$placeHolderscontrato_dependencia["Spanish"]["dep_sup"] = "";
	$fieldLabelscontrato_dependencia["Spanish"]["dep"] = "Dependencia específica";
	$fieldToolTipscontrato_dependencia["Spanish"]["dep"] = "";
	$placeHolderscontrato_dependencia["Spanish"]["dep"] = "";
	if (count($fieldToolTipscontrato_dependencia["Spanish"]))
		$tdatacontrato_dependencia[".isUseToolTips"] = true;
}


	$tdatacontrato_dependencia[".NCSearch"] = true;



$tdatacontrato_dependencia[".shortTableName"] = "contrato_dependencia";
$tdatacontrato_dependencia[".nSecOptions"] = 0;

$tdatacontrato_dependencia[".mainTableOwnerID"] = "";
$tdatacontrato_dependencia[".entityType"] = 0;

$tdatacontrato_dependencia[".strOriginalTableName"] = "contrato_dependencia";

	



$tdatacontrato_dependencia[".showAddInPopup"] = false;

$tdatacontrato_dependencia[".showEditInPopup"] = false;

$tdatacontrato_dependencia[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrato_dependencia[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrato_dependencia[".listAjax"] = false;
//	temporary
$tdatacontrato_dependencia[".listAjax"] = false;

	$tdatacontrato_dependencia[".audit"] = false;

	$tdatacontrato_dependencia[".locking"] = false;


$pages = $tdatacontrato_dependencia[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_dependencia[".edit"] = true;
	$tdatacontrato_dependencia[".afterEditAction"] = 1;
	$tdatacontrato_dependencia[".closePopupAfterEdit"] = 1;
	$tdatacontrato_dependencia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_dependencia[".add"] = true;
$tdatacontrato_dependencia[".afterAddAction"] = 1;
$tdatacontrato_dependencia[".closePopupAfterAdd"] = 1;
$tdatacontrato_dependencia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_dependencia[".list"] = true;
}



$tdatacontrato_dependencia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_dependencia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_dependencia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_dependencia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_dependencia[".printFriendly"] = true;
}



$tdatacontrato_dependencia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_dependencia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_dependencia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_dependencia[".isUseAjaxSuggest"] = true;

$tdatacontrato_dependencia[".rowHighlite"] = true;



												

$tdatacontrato_dependencia[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_dependencia[".buttonsAdded"] = false;

$tdatacontrato_dependencia[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_dependencia[".isUseTimeForSearch"] = false;


$tdatacontrato_dependencia[".badgeColor"] = "00ff00";


$tdatacontrato_dependencia[".allSearchFields"] = array();
$tdatacontrato_dependencia[".filterFields"] = array();
$tdatacontrato_dependencia[".requiredSearchFields"] = array();

$tdatacontrato_dependencia[".googleLikeFields"] = array();
$tdatacontrato_dependencia[".googleLikeFields"][] = "dep_id";
$tdatacontrato_dependencia[".googleLikeFields"][] = "id_cont_fk";
$tdatacontrato_dependencia[".googleLikeFields"][] = "dep_sup";
$tdatacontrato_dependencia[".googleLikeFields"][] = "dep";



$tdatacontrato_dependencia[".tableType"] = "list";

$tdatacontrato_dependencia[".printerPageOrientation"] = 0;
$tdatacontrato_dependencia[".nPrinterPageScale"] = 100;

$tdatacontrato_dependencia[".nPrinterSplitRecords"] = 40;

$tdatacontrato_dependencia[".geocodingEnabled"] = false;










$tdatacontrato_dependencia[".pageSize"] = 20;

$tdatacontrato_dependencia[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrato_dependencia[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_dependencia[".orderindexes"] = array();

$tdatacontrato_dependencia[".sqlHead"] = "SELECT dep_id,  	id_cont_fk,  	dep_sup,  	dep";
$tdatacontrato_dependencia[".sqlFrom"] = "FROM contrato_dependencia";
$tdatacontrato_dependencia[".sqlWhereExpr"] = "";
$tdatacontrato_dependencia[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_dependencia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_dependencia[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_dependencia[".highlightSearchResults"] = true;

$tableKeyscontrato_dependencia = array();
$tableKeyscontrato_dependencia[] = "dep_id";
$tdatacontrato_dependencia[".Keys"] = $tableKeyscontrato_dependencia;


$tdatacontrato_dependencia[".hideMobileList"] = array();




//	dep_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dep_id";
	$fdata["GoodName"] = "dep_id";
	$fdata["ownerTable"] = "contrato_dependencia";
	$fdata["Label"] = GetFieldLabel("contrato_dependencia","dep_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "dep_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dep_id";

	
	
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


	$tdatacontrato_dependencia["dep_id"] = $fdata;
		$tdatacontrato_dependencia[".searchableFields"][] = "dep_id";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "contrato_dependencia";
	$fdata["Label"] = GetFieldLabel("contrato_dependencia","id_cont_fk");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_cont_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont_fk";

	
	
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


	$tdatacontrato_dependencia["id_cont_fk"] = $fdata;
		$tdatacontrato_dependencia[".searchableFields"][] = "id_cont_fk";
//	dep_sup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dep_sup";
	$fdata["GoodName"] = "dep_sup";
	$fdata["ownerTable"] = "contrato_dependencia";
	$fdata["Label"] = GetFieldLabel("contrato_dependencia","dep_sup");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dep_sup";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dep_sup";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencias_001";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_depto_superior";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Departamento_superior";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "dep";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacontrato_dependencia["dep_sup"] = $fdata;
		$tdatacontrato_dependencia[".searchableFields"][] = "dep_sup";
//	dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dep";
	$fdata["GoodName"] = "dep";
	$fdata["ownerTable"] = "contrato_dependencia";
	$fdata["Label"] = GetFieldLabel("contrato_dependencia","dep");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dep";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "nombre";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "dep_sup", "lookup" => "id_depto_superior" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacontrato_dependencia["dep"] = $fdata;
		$tdatacontrato_dependencia[".searchableFields"][] = "dep";


$tables_data["contrato_dependencia"]=&$tdatacontrato_dependencia;
$field_labels["contrato_dependencia"] = &$fieldLabelscontrato_dependencia;
$fieldToolTips["contrato_dependencia"] = &$fieldToolTipscontrato_dependencia;
$placeHolders["contrato_dependencia"] = &$placeHolderscontrato_dependencia;
$page_titles["contrato_dependencia"] = &$pageTitlescontrato_dependencia;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contrato_dependencia"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["contrato_dependencia"] = array();



	
				$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_dependencia"][0] = $masterParams;
				$masterTablesData["contrato_dependencia"][0]["masterKeys"] = array();
	$masterTablesData["contrato_dependencia"][0]["masterKeys"][]="id_cont";
				$masterTablesData["contrato_dependencia"][0]["detailKeys"] = array();
	$masterTablesData["contrato_dependencia"][0]["detailKeys"][]="id_cont_fk";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_contrato_dependencia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dep_id,  	id_cont_fk,  	dep_sup,  	dep";
$proto0["m_strFrom"] = "FROM contrato_dependencia";
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
	"m_strName" => "dep_id",
	"m_strTable" => "contrato_dependencia",
	"m_srcTableName" => "contrato_dependencia"
));

$proto6["m_sql"] = "dep_id";
$proto6["m_srcTableName"] = "contrato_dependencia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "contrato_dependencia",
	"m_srcTableName" => "contrato_dependencia"
));

$proto8["m_sql"] = "id_cont_fk";
$proto8["m_srcTableName"] = "contrato_dependencia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_sup",
	"m_strTable" => "contrato_dependencia",
	"m_srcTableName" => "contrato_dependencia"
));

$proto10["m_sql"] = "dep_sup";
$proto10["m_srcTableName"] = "contrato_dependencia";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dep",
	"m_strTable" => "contrato_dependencia",
	"m_srcTableName" => "contrato_dependencia"
));

$proto12["m_sql"] = "dep";
$proto12["m_srcTableName"] = "contrato_dependencia";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "contrato_dependencia";
$proto15["m_srcTableName"] = "contrato_dependencia";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "dep_id";
$proto15["m_columns"][] = "id_cont_fk";
$proto15["m_columns"][] = "dep_sup";
$proto15["m_columns"][] = "dep";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "contrato_dependencia";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "contrato_dependencia";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato_dependencia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_dependencia = createSqlQuery_contrato_dependencia();


	
										;

				

$tdatacontrato_dependencia[".sqlquery"] = $queryData_contrato_dependencia;

$tableEvents["contrato_dependencia"] = new eventsBase;
$tdatacontrato_dependencia[".hasEvents"] = false;

?>