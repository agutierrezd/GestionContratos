<?php



$tdatacontrato_chart_estado = array();
$tdatacontrato_chart_estado[".searchableFields"] = array();
$tdatacontrato_chart_estado[".ShortName"] = "contrato_chart_estado";
$tdatacontrato_chart_estado[".OwnerID"] = "";
$tdatacontrato_chart_estado[".OriginalTable"] = "cert_status";


$tdatacontrato_chart_estado[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" );
$tdatacontrato_chart_estado[".originalPagesByType"] = $tdatacontrato_chart_estado[".pagesByType"];
$tdatacontrato_chart_estado[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" ) );
$tdatacontrato_chart_estado[".originalPages"] = $tdatacontrato_chart_estado[".pages"];
$tdatacontrato_chart_estado[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"masterchart\":\"masterchart\",\"search\":\"search\"}" );
$tdatacontrato_chart_estado[".originalDefaultPages"] = $tdatacontrato_chart_estado[".defaultPages"];

//	field labels
$fieldLabelscontrato_chart_estado = array();
$fieldToolTipscontrato_chart_estado = array();
$pageTitlescontrato_chart_estado = array();
$placeHolderscontrato_chart_estado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_chart_estado["Spanish"] = array();
	$fieldToolTipscontrato_chart_estado["Spanish"] = array();
	$placeHolderscontrato_chart_estado["Spanish"] = array();
	$pageTitlescontrato_chart_estado["Spanish"] = array();
	$fieldLabelscontrato_chart_estado["Spanish"]["cont_estado"] = "ESTADO";
	$fieldToolTipscontrato_chart_estado["Spanish"]["cont_estado"] = "";
	$placeHolderscontrato_chart_estado["Spanish"]["cont_estado"] = "";
	$fieldLabelscontrato_chart_estado["Spanish"]["qty"] = "CANTIDAD";
	$fieldToolTipscontrato_chart_estado["Spanish"]["qty"] = "";
	$placeHolderscontrato_chart_estado["Spanish"]["qty"] = "";
	$fieldLabelscontrato_chart_estado["Spanish"]["cont_ano"] = "VIGENCIA";
	$fieldToolTipscontrato_chart_estado["Spanish"]["cont_ano"] = "";
	$placeHolderscontrato_chart_estado["Spanish"]["cont_ano"] = "";
	if (count($fieldToolTipscontrato_chart_estado["Spanish"]))
		$tdatacontrato_chart_estado[".isUseToolTips"] = true;
}


	$tdatacontrato_chart_estado[".NCSearch"] = true;

	$tdatacontrato_chart_estado[".ChartRefreshTime"] = 0;


$tdatacontrato_chart_estado[".shortTableName"] = "contrato_chart_estado";
$tdatacontrato_chart_estado[".nSecOptions"] = 0;

$tdatacontrato_chart_estado[".mainTableOwnerID"] = "";
$tdatacontrato_chart_estado[".entityType"] = 3;

$tdatacontrato_chart_estado[".strOriginalTableName"] = "cert_status";

	



$tdatacontrato_chart_estado[".showAddInPopup"] = false;

$tdatacontrato_chart_estado[".showEditInPopup"] = false;

$tdatacontrato_chart_estado[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrato_chart_estado[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrato_chart_estado[".listAjax"] = false;
//	temporary
$tdatacontrato_chart_estado[".listAjax"] = false;

	$tdatacontrato_chart_estado[".audit"] = false;

	$tdatacontrato_chart_estado[".locking"] = false;


$pages = $tdatacontrato_chart_estado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_chart_estado[".edit"] = true;
	$tdatacontrato_chart_estado[".afterEditAction"] = 1;
	$tdatacontrato_chart_estado[".closePopupAfterEdit"] = 1;
	$tdatacontrato_chart_estado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_chart_estado[".add"] = true;
$tdatacontrato_chart_estado[".afterAddAction"] = 1;
$tdatacontrato_chart_estado[".closePopupAfterAdd"] = 1;
$tdatacontrato_chart_estado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_chart_estado[".list"] = true;
}



$tdatacontrato_chart_estado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_chart_estado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_chart_estado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_chart_estado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_chart_estado[".printFriendly"] = true;
}



$tdatacontrato_chart_estado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_chart_estado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_chart_estado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_chart_estado[".isUseAjaxSuggest"] = true;




						

$tdatacontrato_chart_estado[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_chart_estado[".buttonsAdded"] = false;

$tdatacontrato_chart_estado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_chart_estado[".isUseTimeForSearch"] = false;


$tdatacontrato_chart_estado[".badgeColor"] = "4682B4";


$tdatacontrato_chart_estado[".allSearchFields"] = array();
$tdatacontrato_chart_estado[".filterFields"] = array();
$tdatacontrato_chart_estado[".requiredSearchFields"] = array();

$tdatacontrato_chart_estado[".googleLikeFields"] = array();
$tdatacontrato_chart_estado[".googleLikeFields"][] = "cont_estado";
$tdatacontrato_chart_estado[".googleLikeFields"][] = "qty";
$tdatacontrato_chart_estado[".googleLikeFields"][] = "cont_ano";



$tdatacontrato_chart_estado[".tableType"] = "chart";

$tdatacontrato_chart_estado[".printerPageOrientation"] = 0;
$tdatacontrato_chart_estado[".nPrinterPageScale"] = 100;

$tdatacontrato_chart_estado[".nPrinterSplitRecords"] = 40;

$tdatacontrato_chart_estado[".geocodingEnabled"] = false;



// chart settings
$tdatacontrato_chart_estado[".chartType"] = "2DDoughnut";
// end of chart settings








$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrato_chart_estado[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_chart_estado[".orderindexes"] = array();

$tdatacontrato_chart_estado[".sqlHead"] = "SELECT contrato.cont_estado,  Count(contrato.cont_estado) AS qty,  contrato.cont_ano";
$tdatacontrato_chart_estado[".sqlFrom"] = "FROM  contrato";
$tdatacontrato_chart_estado[".sqlWhereExpr"] = "";
$tdatacontrato_chart_estado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_chart_estado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_chart_estado[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_chart_estado[".highlightSearchResults"] = true;

$tableKeyscontrato_chart_estado = array();
$tdatacontrato_chart_estado[".Keys"] = $tableKeyscontrato_chart_estado;


$tdatacontrato_chart_estado[".hideMobileList"] = array();




//	cont_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cont_estado";
	$fdata["GoodName"] = "cont_estado";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_chart_estado","cont_estado");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contrato.cont_estado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contrato_estados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "estado_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "estado_nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatacontrato_chart_estado["cont_estado"] = $fdata;
		$tdatacontrato_chart_estado[".searchableFields"][] = "cont_estado";
//	qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "qty";
	$fdata["GoodName"] = "qty";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("contrato_chart_estado","qty");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "qty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Count(contrato.cont_estado)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatacontrato_chart_estado["qty"] = $fdata;
		$tdatacontrato_chart_estado[".searchableFields"][] = "qty";
//	cont_ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cont_ano";
	$fdata["GoodName"] = "cont_ano";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_chart_estado","cont_ano");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "cont_ano";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contrato.cont_ano";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "vigencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "vigencia";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "vigencia";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatacontrato_chart_estado["cont_ano"] = $fdata;
		$tdatacontrato_chart_estado[".searchableFields"][] = "cont_ano";

	$tdatacontrato_chart_estado[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">contrato_chart_estado</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_doughnut</attr>
		</attr>

		<attr value="parameters">';
	$tdatacontrato_chart_estado[".chartXml"] .= '<attr value="0">
			<attr value="name">qty</attr>';
	$tdatacontrato_chart_estado[".chartXml"] .= '</attr>';
	$tdatacontrato_chart_estado[".chartXml"] .= '<attr value="1">
		<attr value="name">cont_estado</attr>
	</attr>';
	$tdatacontrato_chart_estado[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatacontrato_chart_estado[".chartXml"] .= '<attr value="head">'.xmlencode("Distribución de los contratos por ESTADO").'</attr>
<attr value="foot">'.xmlencode("ESTADO").'</attr>
<attr value="y_axis_label">'.xmlencode("certs_id").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatacontrato_chart_estado[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatacontrato_chart_estado[".chartXml"] .= '<attr value="0">
		<attr value="name">cont_estado</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("contrato_chart_estado","cont_estado")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacontrato_chart_estado[".chartXml"] .= '<attr value="1">
		<attr value="name">qty</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("contrato_chart_estado","qty")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacontrato_chart_estado[".chartXml"] .= '<attr value="2">
		<attr value="name">cont_ano</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("contrato_chart_estado","cont_ano")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatacontrato_chart_estado[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">contrato_chart_estado</attr>
<attr value="short_table_name">contrato_chart_estado</attr>
</attr>

</chart>';

$tables_data["contrato_chart_estado"]=&$tdatacontrato_chart_estado;
$field_labels["contrato_chart_estado"] = &$fieldLabelscontrato_chart_estado;
$fieldToolTips["contrato_chart_estado"] = &$fieldToolTipscontrato_chart_estado;
$placeHolders["contrato_chart_estado"] = &$placeHolderscontrato_chart_estado;
$page_titles["contrato_chart_estado"] = &$pageTitlescontrato_chart_estado;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contrato_chart_estado"] = array();
//	q_001_dashboard_info
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="q_001_dashboard_info";
		$detailsParam["dOriginalTable"] = "q_001_dashboard";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "q_001_dashboard_info";
	$detailsParam["dCaptionTable"] = GetTableCaption("q_001_dashboard_info");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato_chart_estado"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato_chart_estado"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato_chart_estado"][$dIndex]["masterKeys"][]="cont_estado";

				$detailsTablesData["contrato_chart_estado"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato_chart_estado"][$dIndex]["detailKeys"][]="cont_estado";

// tables which are master tables for current table (detail)
$masterTablesData["contrato_chart_estado"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_contrato_chart_estado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "contrato.cont_estado,  Count(contrato.cont_estado) AS qty,  contrato.cont_ano";
$proto0["m_strFrom"] = "FROM  contrato";
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
	"m_strName" => "cont_estado",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_chart_estado"
));

$proto6["m_sql"] = "contrato.cont_estado";
$proto6["m_srcTableName"] = "contrato_chart_estado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_COUNT";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "cont_estado",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_chart_estado"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "Count";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "Count(contrato.cont_estado)";
$proto8["m_srcTableName"] = "contrato_chart_estado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "qty";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_ano",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_chart_estado"
));

$proto11["m_sql"] = "contrato.cont_ano";
$proto11["m_srcTableName"] = "contrato_chart_estado";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "contrato";
$proto14["m_srcTableName"] = "contrato_chart_estado";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id_cont";
$proto14["m_columns"][] = "cont_hash";
$proto14["m_columns"][] = "cont_nit_contra_ta";
$proto14["m_columns"][] = "cont_paa_id";
$proto14["m_columns"][] = "cont_estado";
$proto14["m_columns"][] = "prenumero";
$proto14["m_columns"][] = "numregistro";
$proto14["m_columns"][] = "pre_contnumero";
$proto14["m_columns"][] = "contnumero";
$proto14["m_columns"][] = "cont_unspsc";
$proto14["m_columns"][] = "cont_munejec";
$proto14["m_columns"][] = "cont_tipo";
$proto14["m_columns"][] = "cont_ano";
$proto14["m_columns"][] = "cont_codrubro";
$proto14["m_columns"][] = "cont_tipo_rubro";
$proto14["m_columns"][] = "cont_reg_sigep";
$proto14["m_columns"][] = "cont_catalogo_presupuestal";
$proto14["m_columns"][] = "cont_tipopre";
$proto14["m_columns"][] = "cont_fechaapertura";
$proto14["m_columns"][] = "cont_plazoi";
$proto14["m_columns"][] = "cont_fecha_inicio";
$proto14["m_columns"][] = "cont_fechafinal";
$proto14["m_columns"][] = "cont_valormensual_base";
$proto14["m_columns"][] = "cont_valormensual_iva";
$proto14["m_columns"][] = "cont_fechavigencia";
$proto14["m_columns"][] = "cont_periodicidad";
$proto14["m_columns"][] = "cont_informessug";
$proto14["m_columns"][] = "cont_otrosi";
$proto14["m_columns"][] = "cont_otrosi_type";
$proto14["m_columns"][] = "cont_valorant";
$proto14["m_columns"][] = "cont_valorinicial";
$proto14["m_columns"][] = "cont_valormensual";
$proto14["m_columns"][] = "cont_valorreduc_fecha";
$proto14["m_columns"][] = "cont_valorreduc";
$proto14["m_columns"][] = "cont_valorvigente";
$proto14["m_columns"][] = "cont_valors";
$proto14["m_columns"][] = "cont_lugar";
$proto14["m_columns"][] = "cont_region";
$proto14["m_columns"][] = "cont_requactaliq";
$proto14["m_columns"][] = "cont_plazol";
$proto14["m_columns"][] = "cont_tipoproceso";
$proto14["m_columns"][] = "cont_formapago";
$proto14["m_columns"][] = "cont_tipoc";
$proto14["m_columns"][] = "cont_modalidad";
$proto14["m_columns"][] = "cont_causalc";
$proto14["m_columns"][] = "cont_funcion";
$proto14["m_columns"][] = "cesion_estado";
$proto14["m_columns"][] = "cont_acta_liquidacion";
$proto14["m_columns"][] = "cont_fecha_aprobgarantia";
$proto14["m_columns"][] = "cont_afilia_arl";
$proto14["m_columns"][] = "cont_excluir_notificacion";
$proto14["m_columns"][] = "cont_depsup";
$proto14["m_columns"][] = "cont_dep";
$proto14["m_columns"][] = "cont_lugar_prestacion";
$proto14["m_columns"][] = "cont_objeto";
$proto14["m_columns"][] = "cont_obligaciones";
$proto14["m_columns"][] = "cont_plazo";
$proto14["m_columns"][] = "cont_tipo_regimen";
$proto14["m_columns"][] = "cont_fecha_firma";
$proto14["m_columns"][] = "cont_secop_proceso";
$proto14["m_columns"][] = "cont_secop_enlace";
$proto14["m_columns"][] = "cont_sigep";
$proto14["m_columns"][] = "cont_vigencias_futuras";
$proto14["m_columns"][] = "vf_num_autorizacion";
$proto14["m_columns"][] = "vf_fecha";
$proto14["m_columns"][] = "vf_valor";
$proto14["m_columns"][] = "cont_fechasistema";
$proto14["m_columns"][] = "cont_fase";
$proto14["m_columns"][] = "cont_numpoliza";
$proto14["m_columns"][] = "cont_cesion";
$proto14["m_columns"][] = "cont_modifica";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "contrato";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "contrato_chart_estado";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "cont_estado",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_chart_estado"
));

$proto17["m_column"]=$obj;
$obj = new SQLGroupByItem($proto17);

$proto0["m_groupby"][]=$obj;
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "cont_ano",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_chart_estado"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato_chart_estado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_chart_estado = createSqlQuery_contrato_chart_estado();


	
										;

			

$tdatacontrato_chart_estado[".sqlquery"] = $queryData_contrato_chart_estado;

$tableEvents["contrato_chart_estado"] = new eventsBase;
$tdatacontrato_chart_estado[".hasEvents"] = false;

?>