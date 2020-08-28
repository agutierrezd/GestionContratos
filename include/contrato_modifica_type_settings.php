<?php



$tdatacontrato_modifica_type = array();
$tdatacontrato_modifica_type[".searchableFields"] = array();
$tdatacontrato_modifica_type[".ShortName"] = "contrato_modifica_type";
$tdatacontrato_modifica_type[".OwnerID"] = "";
$tdatacontrato_modifica_type[".OriginalTable"] = "contrato_modifica_type";


$tdatacontrato_modifica_type[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatacontrato_modifica_type[".originalPagesByType"] = $tdatacontrato_modifica_type[".pagesByType"];
$tdatacontrato_modifica_type[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatacontrato_modifica_type[".originalPages"] = $tdatacontrato_modifica_type[".pages"];
$tdatacontrato_modifica_type[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatacontrato_modifica_type[".originalDefaultPages"] = $tdatacontrato_modifica_type[".defaultPages"];

//	field labels
$fieldLabelscontrato_modifica_type = array();
$fieldToolTipscontrato_modifica_type = array();
$pageTitlescontrato_modifica_type = array();
$placeHolderscontrato_modifica_type = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_modifica_type["Spanish"] = array();
	$fieldToolTipscontrato_modifica_type["Spanish"] = array();
	$placeHolderscontrato_modifica_type["Spanish"] = array();
	$pageTitlescontrato_modifica_type["Spanish"] = array();
	$fieldLabelscontrato_modifica_type["Spanish"]["modt_id"] = "Modt Id";
	$fieldToolTipscontrato_modifica_type["Spanish"]["modt_id"] = "";
	$placeHolderscontrato_modifica_type["Spanish"]["modt_id"] = "";
	$fieldLabelscontrato_modifica_type["Spanish"]["modt_name"] = "Modt Name";
	$fieldToolTipscontrato_modifica_type["Spanish"]["modt_name"] = "";
	$placeHolderscontrato_modifica_type["Spanish"]["modt_name"] = "";
	$fieldLabelscontrato_modifica_type["Spanish"]["modt_grupo"] = "Modt Grupo";
	$fieldToolTipscontrato_modifica_type["Spanish"]["modt_grupo"] = "";
	$placeHolderscontrato_modifica_type["Spanish"]["modt_grupo"] = "";
	if (count($fieldToolTipscontrato_modifica_type["Spanish"]))
		$tdatacontrato_modifica_type[".isUseToolTips"] = true;
}


	$tdatacontrato_modifica_type[".NCSearch"] = true;



$tdatacontrato_modifica_type[".shortTableName"] = "contrato_modifica_type";
$tdatacontrato_modifica_type[".nSecOptions"] = 0;

$tdatacontrato_modifica_type[".mainTableOwnerID"] = "";
$tdatacontrato_modifica_type[".entityType"] = 0;

$tdatacontrato_modifica_type[".strOriginalTableName"] = "contrato_modifica_type";

	



$tdatacontrato_modifica_type[".showAddInPopup"] = false;

$tdatacontrato_modifica_type[".showEditInPopup"] = false;

$tdatacontrato_modifica_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrato_modifica_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrato_modifica_type[".listAjax"] = false;
//	temporary
$tdatacontrato_modifica_type[".listAjax"] = false;

	$tdatacontrato_modifica_type[".audit"] = true;

	$tdatacontrato_modifica_type[".locking"] = true;


$pages = $tdatacontrato_modifica_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_modifica_type[".edit"] = true;
	$tdatacontrato_modifica_type[".afterEditAction"] = 1;
	$tdatacontrato_modifica_type[".closePopupAfterEdit"] = 1;
	$tdatacontrato_modifica_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_modifica_type[".add"] = true;
$tdatacontrato_modifica_type[".afterAddAction"] = 1;
$tdatacontrato_modifica_type[".closePopupAfterAdd"] = 1;
$tdatacontrato_modifica_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_modifica_type[".list"] = true;
}



$tdatacontrato_modifica_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_modifica_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_modifica_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_modifica_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_modifica_type[".printFriendly"] = true;
}



$tdatacontrato_modifica_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_modifica_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_modifica_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_modifica_type[".isUseAjaxSuggest"] = true;

$tdatacontrato_modifica_type[".rowHighlite"] = true;



						

$tdatacontrato_modifica_type[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_modifica_type[".buttonsAdded"] = false;

$tdatacontrato_modifica_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_modifica_type[".isUseTimeForSearch"] = false;


$tdatacontrato_modifica_type[".badgeColor"] = "CD5C5C";


$tdatacontrato_modifica_type[".allSearchFields"] = array();
$tdatacontrato_modifica_type[".filterFields"] = array();
$tdatacontrato_modifica_type[".requiredSearchFields"] = array();

$tdatacontrato_modifica_type[".googleLikeFields"] = array();
$tdatacontrato_modifica_type[".googleLikeFields"][] = "modt_id";
$tdatacontrato_modifica_type[".googleLikeFields"][] = "modt_name";
$tdatacontrato_modifica_type[".googleLikeFields"][] = "modt_grupo";



$tdatacontrato_modifica_type[".tableType"] = "list";

$tdatacontrato_modifica_type[".printerPageOrientation"] = 0;
$tdatacontrato_modifica_type[".nPrinterPageScale"] = 100;

$tdatacontrato_modifica_type[".nPrinterSplitRecords"] = 40;

$tdatacontrato_modifica_type[".geocodingEnabled"] = false;










$tdatacontrato_modifica_type[".pageSize"] = 20;

$tdatacontrato_modifica_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrato_modifica_type[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_modifica_type[".orderindexes"] = array();

$tdatacontrato_modifica_type[".sqlHead"] = "SELECT modt_id,  	modt_name,  	modt_grupo";
$tdatacontrato_modifica_type[".sqlFrom"] = "FROM contrato_modifica_type";
$tdatacontrato_modifica_type[".sqlWhereExpr"] = "";
$tdatacontrato_modifica_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_modifica_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_modifica_type[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_modifica_type[".highlightSearchResults"] = true;

$tableKeyscontrato_modifica_type = array();
$tableKeyscontrato_modifica_type[] = "modt_id";
$tdatacontrato_modifica_type[".Keys"] = $tableKeyscontrato_modifica_type;


$tdatacontrato_modifica_type[".hideMobileList"] = array();




//	modt_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "modt_id";
	$fdata["GoodName"] = "modt_id";
	$fdata["ownerTable"] = "contrato_modifica_type";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_type","modt_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "modt_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "modt_id";

	
	
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


	$tdatacontrato_modifica_type["modt_id"] = $fdata;
		$tdatacontrato_modifica_type[".searchableFields"][] = "modt_id";
//	modt_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "modt_name";
	$fdata["GoodName"] = "modt_name";
	$fdata["ownerTable"] = "contrato_modifica_type";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_type","modt_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "modt_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "modt_name";

	
	
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


	$tdatacontrato_modifica_type["modt_name"] = $fdata;
		$tdatacontrato_modifica_type[".searchableFields"][] = "modt_name";
//	modt_grupo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "modt_grupo";
	$fdata["GoodName"] = "modt_grupo";
	$fdata["ownerTable"] = "contrato_modifica_type";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_type","modt_grupo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "modt_grupo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "modt_grupo";

	
	
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


	$tdatacontrato_modifica_type["modt_grupo"] = $fdata;
		$tdatacontrato_modifica_type[".searchableFields"][] = "modt_grupo";


$tables_data["contrato_modifica_type"]=&$tdatacontrato_modifica_type;
$field_labels["contrato_modifica_type"] = &$fieldLabelscontrato_modifica_type;
$fieldToolTips["contrato_modifica_type"] = &$fieldToolTipscontrato_modifica_type;
$placeHolders["contrato_modifica_type"] = &$placeHolderscontrato_modifica_type;
$page_titles["contrato_modifica_type"] = &$pageTitlescontrato_modifica_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contrato_modifica_type"] = array();
//	contrato_modifica_prorroga
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="contrato_modifica_prorroga";
		$detailsParam["dOriginalTable"] = "contrato_modifica";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contrato_modifica_prorroga";
	$detailsParam["dCaptionTable"] = GetTableCaption("contrato_modifica_prorroga");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato_modifica_type"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato_modifica_type"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato_modifica_type"][$dIndex]["masterKeys"][]="modt_id";

				$detailsTablesData["contrato_modifica_type"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato_modifica_type"][$dIndex]["detailKeys"][]="mod_tipo";
//	contrato_modifica_cesion
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="contrato_modifica_cesion";
		$detailsParam["dOriginalTable"] = "contrato_modifica";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contrato_modifica_cesion";
	$detailsParam["dCaptionTable"] = GetTableCaption("contrato_modifica_cesion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato_modifica_type"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato_modifica_type"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato_modifica_type"][$dIndex]["masterKeys"][]="modt_id";

				$detailsTablesData["contrato_modifica_type"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato_modifica_type"][$dIndex]["detailKeys"][]="mod_tipo";

// tables which are master tables for current table (detail)
$masterTablesData["contrato_modifica_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_contrato_modifica_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "modt_id,  	modt_name,  	modt_grupo";
$proto0["m_strFrom"] = "FROM contrato_modifica_type";
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
	"m_strName" => "modt_id",
	"m_strTable" => "contrato_modifica_type",
	"m_srcTableName" => "contrato_modifica_type"
));

$proto6["m_sql"] = "modt_id";
$proto6["m_srcTableName"] = "contrato_modifica_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "modt_name",
	"m_strTable" => "contrato_modifica_type",
	"m_srcTableName" => "contrato_modifica_type"
));

$proto8["m_sql"] = "modt_name";
$proto8["m_srcTableName"] = "contrato_modifica_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "modt_grupo",
	"m_strTable" => "contrato_modifica_type",
	"m_srcTableName" => "contrato_modifica_type"
));

$proto10["m_sql"] = "modt_grupo";
$proto10["m_srcTableName"] = "contrato_modifica_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "contrato_modifica_type";
$proto13["m_srcTableName"] = "contrato_modifica_type";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "modt_id";
$proto13["m_columns"][] = "modt_name";
$proto13["m_columns"][] = "modt_grupo";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "contrato_modifica_type";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "contrato_modifica_type";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato_modifica_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_modifica_type = createSqlQuery_contrato_modifica_type();


	
										;

			

$tdatacontrato_modifica_type[".sqlquery"] = $queryData_contrato_modifica_type;

$tableEvents["contrato_modifica_type"] = new eventsBase;
$tdatacontrato_modifica_type[".hasEvents"] = false;

?>