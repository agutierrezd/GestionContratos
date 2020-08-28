<?php



$tdatatipo_contrato = array();
$tdatatipo_contrato[".searchableFields"] = array();
$tdatatipo_contrato[".ShortName"] = "tipo_contrato";
$tdatatipo_contrato[".OwnerID"] = "";
$tdatatipo_contrato[".OriginalTable"] = "tipo_contrato";


$tdatatipo_contrato[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatatipo_contrato[".originalPagesByType"] = $tdatatipo_contrato[".pagesByType"];
$tdatatipo_contrato[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatatipo_contrato[".originalPages"] = $tdatatipo_contrato[".pages"];
$tdatatipo_contrato[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatatipo_contrato[".originalDefaultPages"] = $tdatatipo_contrato[".defaultPages"];

//	field labels
$fieldLabelstipo_contrato = array();
$fieldToolTipstipo_contrato = array();
$pageTitlestipo_contrato = array();
$placeHolderstipo_contrato = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_contrato["Spanish"] = array();
	$fieldToolTipstipo_contrato["Spanish"] = array();
	$placeHolderstipo_contrato["Spanish"] = array();
	$pageTitlestipo_contrato["Spanish"] = array();
	$fieldLabelstipo_contrato["Spanish"]["cont_tipo"] = "Cont Tipo";
	$fieldToolTipstipo_contrato["Spanish"]["cont_tipo"] = "";
	$placeHolderstipo_contrato["Spanish"]["cont_tipo"] = "";
	$fieldLabelstipo_contrato["Spanish"]["nom_tipocontrato"] = "Nom Tipocontrato";
	$fieldToolTipstipo_contrato["Spanish"]["nom_tipocontrato"] = "";
	$placeHolderstipo_contrato["Spanish"]["nom_tipocontrato"] = "";
	$fieldLabelstipo_contrato["Spanish"]["ctrl_pago"] = "Ctrl Pago";
	$fieldToolTipstipo_contrato["Spanish"]["ctrl_pago"] = "";
	$placeHolderstipo_contrato["Spanish"]["ctrl_pago"] = "";
	if (count($fieldToolTipstipo_contrato["Spanish"]))
		$tdatatipo_contrato[".isUseToolTips"] = true;
}


	$tdatatipo_contrato[".NCSearch"] = true;



$tdatatipo_contrato[".shortTableName"] = "tipo_contrato";
$tdatatipo_contrato[".nSecOptions"] = 0;

$tdatatipo_contrato[".mainTableOwnerID"] = "";
$tdatatipo_contrato[".entityType"] = 0;

$tdatatipo_contrato[".strOriginalTableName"] = "tipo_contrato";

	



$tdatatipo_contrato[".showAddInPopup"] = false;

$tdatatipo_contrato[".showEditInPopup"] = false;

$tdatatipo_contrato[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatipo_contrato[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatipo_contrato[".listAjax"] = false;
//	temporary
$tdatatipo_contrato[".listAjax"] = false;

	$tdatatipo_contrato[".audit"] = true;

	$tdatatipo_contrato[".locking"] = true;


$pages = $tdatatipo_contrato[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipo_contrato[".edit"] = true;
	$tdatatipo_contrato[".afterEditAction"] = 1;
	$tdatatipo_contrato[".closePopupAfterEdit"] = 1;
	$tdatatipo_contrato[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipo_contrato[".add"] = true;
$tdatatipo_contrato[".afterAddAction"] = 1;
$tdatatipo_contrato[".closePopupAfterAdd"] = 1;
$tdatatipo_contrato[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipo_contrato[".list"] = true;
}



$tdatatipo_contrato[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipo_contrato[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipo_contrato[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipo_contrato[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipo_contrato[".printFriendly"] = true;
}



$tdatatipo_contrato[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipo_contrato[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipo_contrato[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipo_contrato[".isUseAjaxSuggest"] = true;

$tdatatipo_contrato[".rowHighlite"] = true;



						

$tdatatipo_contrato[".ajaxCodeSnippetAdded"] = false;

$tdatatipo_contrato[".buttonsAdded"] = false;

$tdatatipo_contrato[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_contrato[".isUseTimeForSearch"] = false;


$tdatatipo_contrato[".badgeColor"] = "DC143C";


$tdatatipo_contrato[".allSearchFields"] = array();
$tdatatipo_contrato[".filterFields"] = array();
$tdatatipo_contrato[".requiredSearchFields"] = array();

$tdatatipo_contrato[".googleLikeFields"] = array();
$tdatatipo_contrato[".googleLikeFields"][] = "cont_tipo";
$tdatatipo_contrato[".googleLikeFields"][] = "nom_tipocontrato";
$tdatatipo_contrato[".googleLikeFields"][] = "ctrl_pago";



$tdatatipo_contrato[".tableType"] = "list";

$tdatatipo_contrato[".printerPageOrientation"] = 0;
$tdatatipo_contrato[".nPrinterPageScale"] = 100;

$tdatatipo_contrato[".nPrinterSplitRecords"] = 40;

$tdatatipo_contrato[".geocodingEnabled"] = false;










$tdatatipo_contrato[".pageSize"] = 20;

$tdatatipo_contrato[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatipo_contrato[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_contrato[".orderindexes"] = array();

$tdatatipo_contrato[".sqlHead"] = "SELECT cont_tipo,  	nom_tipocontrato,  	ctrl_pago";
$tdatatipo_contrato[".sqlFrom"] = "FROM tipo_contrato";
$tdatatipo_contrato[".sqlWhereExpr"] = "";
$tdatatipo_contrato[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_contrato[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_contrato[".arrGroupsPerPage"] = $arrGPP;

$tdatatipo_contrato[".highlightSearchResults"] = true;

$tableKeystipo_contrato = array();
$tableKeystipo_contrato[] = "cont_tipo";
$tdatatipo_contrato[".Keys"] = $tableKeystipo_contrato;


$tdatatipo_contrato[".hideMobileList"] = array();




//	cont_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cont_tipo";
	$fdata["GoodName"] = "cont_tipo";
	$fdata["ownerTable"] = "tipo_contrato";
	$fdata["Label"] = GetFieldLabel("tipo_contrato","cont_tipo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipo";

	
	
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


	$tdatatipo_contrato["cont_tipo"] = $fdata;
		$tdatatipo_contrato[".searchableFields"][] = "cont_tipo";
//	nom_tipocontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nom_tipocontrato";
	$fdata["GoodName"] = "nom_tipocontrato";
	$fdata["ownerTable"] = "tipo_contrato";
	$fdata["Label"] = GetFieldLabel("tipo_contrato","nom_tipocontrato");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nom_tipocontrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_tipocontrato";

	
	
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


	$tdatatipo_contrato["nom_tipocontrato"] = $fdata;
		$tdatatipo_contrato[".searchableFields"][] = "nom_tipocontrato";
//	ctrl_pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ctrl_pago";
	$fdata["GoodName"] = "ctrl_pago";
	$fdata["ownerTable"] = "tipo_contrato";
	$fdata["Label"] = GetFieldLabel("tipo_contrato","ctrl_pago");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "ctrl_pago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ctrl_pago";

	
	
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


	$tdatatipo_contrato["ctrl_pago"] = $fdata;
		$tdatatipo_contrato[".searchableFields"][] = "ctrl_pago";


$tables_data["tipo_contrato"]=&$tdatatipo_contrato;
$field_labels["tipo_contrato"] = &$fieldLabelstipo_contrato;
$fieldToolTips["tipo_contrato"] = &$fieldToolTipstipo_contrato;
$placeHolders["tipo_contrato"] = &$placeHolderstipo_contrato;
$page_titles["tipo_contrato"] = &$pageTitlestipo_contrato;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tipo_contrato"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tipo_contrato"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tipo_contrato()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cont_tipo,  	nom_tipocontrato,  	ctrl_pago";
$proto0["m_strFrom"] = "FROM tipo_contrato";
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
	"m_strName" => "cont_tipo",
	"m_strTable" => "tipo_contrato",
	"m_srcTableName" => "tipo_contrato"
));

$proto6["m_sql"] = "cont_tipo";
$proto6["m_srcTableName"] = "tipo_contrato";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_tipocontrato",
	"m_strTable" => "tipo_contrato",
	"m_srcTableName" => "tipo_contrato"
));

$proto8["m_sql"] = "nom_tipocontrato";
$proto8["m_srcTableName"] = "tipo_contrato";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ctrl_pago",
	"m_strTable" => "tipo_contrato",
	"m_srcTableName" => "tipo_contrato"
));

$proto10["m_sql"] = "ctrl_pago";
$proto10["m_srcTableName"] = "tipo_contrato";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tipo_contrato";
$proto13["m_srcTableName"] = "tipo_contrato";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "cont_tipo";
$proto13["m_columns"][] = "nom_tipocontrato";
$proto13["m_columns"][] = "ctrl_pago";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tipo_contrato";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tipo_contrato";
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
$proto0["m_srcTableName"]="tipo_contrato";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_contrato = createSqlQuery_tipo_contrato();


	
										;

			

$tdatatipo_contrato[".sqlquery"] = $queryData_tipo_contrato;

$tableEvents["tipo_contrato"] = new eventsBase;
$tdatatipo_contrato[".hasEvents"] = false;

?>