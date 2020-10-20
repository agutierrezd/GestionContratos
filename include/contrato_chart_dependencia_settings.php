<?php



$tdatacontrato_chart_dependencia = array();
$tdatacontrato_chart_dependencia[".searchableFields"] = array();
$tdatacontrato_chart_dependencia[".ShortName"] = "contrato_chart_dependencia";
$tdatacontrato_chart_dependencia[".OwnerID"] = "";
$tdatacontrato_chart_dependencia[".OriginalTable"] = "cert_status";


$tdatacontrato_chart_dependencia[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" );
$tdatacontrato_chart_dependencia[".originalPagesByType"] = $tdatacontrato_chart_dependencia[".pagesByType"];
$tdatacontrato_chart_dependencia[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" ) );
$tdatacontrato_chart_dependencia[".originalPages"] = $tdatacontrato_chart_dependencia[".pages"];
$tdatacontrato_chart_dependencia[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"masterchart\":\"masterchart\",\"search\":\"search\"}" );
$tdatacontrato_chart_dependencia[".originalDefaultPages"] = $tdatacontrato_chart_dependencia[".defaultPages"];

//	field labels
$fieldLabelscontrato_chart_dependencia = array();
$fieldToolTipscontrato_chart_dependencia = array();
$pageTitlescontrato_chart_dependencia = array();
$placeHolderscontrato_chart_dependencia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_chart_dependencia["Spanish"] = array();
	$fieldToolTipscontrato_chart_dependencia["Spanish"] = array();
	$placeHolderscontrato_chart_dependencia["Spanish"] = array();
	$pageTitlescontrato_chart_dependencia["Spanish"] = array();
	$fieldLabelscontrato_chart_dependencia["Spanish"]["cont_ano"] = "VIGENCIA";
	$fieldToolTipscontrato_chart_dependencia["Spanish"]["cont_ano"] = "";
	$placeHolderscontrato_chart_dependencia["Spanish"]["cont_ano"] = "";
	$fieldLabelscontrato_chart_dependencia["Spanish"]["contractor_dependencia"] = "GRUPO INTERNO DE TRABAJO";
	$fieldToolTipscontrato_chart_dependencia["Spanish"]["contractor_dependencia"] = "";
	$placeHolderscontrato_chart_dependencia["Spanish"]["contractor_dependencia"] = "";
	$fieldLabelscontrato_chart_dependencia["Spanish"]["qty"] = "# CONTRATOS";
	$fieldToolTipscontrato_chart_dependencia["Spanish"]["qty"] = "";
	$placeHolderscontrato_chart_dependencia["Spanish"]["qty"] = "";
	if (count($fieldToolTipscontrato_chart_dependencia["Spanish"]))
		$tdatacontrato_chart_dependencia[".isUseToolTips"] = true;
}


	$tdatacontrato_chart_dependencia[".NCSearch"] = true;

	$tdatacontrato_chart_dependencia[".ChartRefreshTime"] = 0;


$tdatacontrato_chart_dependencia[".shortTableName"] = "contrato_chart_dependencia";
$tdatacontrato_chart_dependencia[".nSecOptions"] = 0;

$tdatacontrato_chart_dependencia[".mainTableOwnerID"] = "";
$tdatacontrato_chart_dependencia[".entityType"] = 3;

$tdatacontrato_chart_dependencia[".strOriginalTableName"] = "cert_status";

	



$tdatacontrato_chart_dependencia[".showAddInPopup"] = false;

$tdatacontrato_chart_dependencia[".showEditInPopup"] = false;

$tdatacontrato_chart_dependencia[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrato_chart_dependencia[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrato_chart_dependencia[".listAjax"] = false;
//	temporary
$tdatacontrato_chart_dependencia[".listAjax"] = false;

	$tdatacontrato_chart_dependencia[".audit"] = false;

	$tdatacontrato_chart_dependencia[".locking"] = false;


$pages = $tdatacontrato_chart_dependencia[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_chart_dependencia[".edit"] = true;
	$tdatacontrato_chart_dependencia[".afterEditAction"] = 1;
	$tdatacontrato_chart_dependencia[".closePopupAfterEdit"] = 1;
	$tdatacontrato_chart_dependencia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_chart_dependencia[".add"] = true;
$tdatacontrato_chart_dependencia[".afterAddAction"] = 1;
$tdatacontrato_chart_dependencia[".closePopupAfterAdd"] = 1;
$tdatacontrato_chart_dependencia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_chart_dependencia[".list"] = true;
}



$tdatacontrato_chart_dependencia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_chart_dependencia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_chart_dependencia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_chart_dependencia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_chart_dependencia[".printFriendly"] = true;
}



$tdatacontrato_chart_dependencia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_chart_dependencia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_chart_dependencia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_chart_dependencia[".isUseAjaxSuggest"] = true;




						

$tdatacontrato_chart_dependencia[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_chart_dependencia[".buttonsAdded"] = false;

$tdatacontrato_chart_dependencia[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_chart_dependencia[".isUseTimeForSearch"] = false;


$tdatacontrato_chart_dependencia[".badgeColor"] = "CD853F";


$tdatacontrato_chart_dependencia[".allSearchFields"] = array();
$tdatacontrato_chart_dependencia[".filterFields"] = array();
$tdatacontrato_chart_dependencia[".requiredSearchFields"] = array();

$tdatacontrato_chart_dependencia[".googleLikeFields"] = array();
$tdatacontrato_chart_dependencia[".googleLikeFields"][] = "cont_ano";
$tdatacontrato_chart_dependencia[".googleLikeFields"][] = "contractor_dependencia";
$tdatacontrato_chart_dependencia[".googleLikeFields"][] = "qty";



$tdatacontrato_chart_dependencia[".tableType"] = "chart";

$tdatacontrato_chart_dependencia[".printerPageOrientation"] = 0;
$tdatacontrato_chart_dependencia[".nPrinterPageScale"] = 100;

$tdatacontrato_chart_dependencia[".nPrinterSplitRecords"] = 40;

$tdatacontrato_chart_dependencia[".geocodingEnabled"] = false;



// chart settings
$tdatacontrato_chart_dependencia[".chartType"] = "2DBar";
// end of chart settings

$tdatacontrato_chart_dependencia[".isDisplayLoading"] = true;







$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrato_chart_dependencia[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_chart_dependencia[".orderindexes"] = array();

$tdatacontrato_chart_dependencia[".sqlHead"] = "SELECT contrato.cont_ano,  contractor_master.contractor_dependencia,  Count(contractor_master.contractor_dependencia) as qty";
$tdatacontrato_chart_dependencia[".sqlFrom"] = "FROM  contrato  INNER JOIN contractor_master ON contrato.cont_nit_contra_ta = contractor_master.contractor_doc_id";
$tdatacontrato_chart_dependencia[".sqlWhereExpr"] = "";
$tdatacontrato_chart_dependencia[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_chart_dependencia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_chart_dependencia[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_chart_dependencia[".highlightSearchResults"] = true;

$tableKeyscontrato_chart_dependencia = array();
$tdatacontrato_chart_dependencia[".Keys"] = $tableKeyscontrato_chart_dependencia;


$tdatacontrato_chart_dependencia[".hideMobileList"] = array();




//	cont_ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cont_ano";
	$fdata["GoodName"] = "cont_ano";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_chart_dependencia","cont_ano");
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

	
		
	$edata["LinkField"] = "vigencia";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "vigencia";

	

	
	$edata["LookupOrderBy"] = "vigencia";

	
	
	
	

	
	
	
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


	$tdatacontrato_chart_dependencia["cont_ano"] = $fdata;
		$tdatacontrato_chart_dependencia[".searchableFields"][] = "cont_ano";
//	contractor_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "contractor_dependencia";
	$fdata["GoodName"] = "contractor_dependencia";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contrato_chart_dependencia","contractor_dependencia");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "contractor_dependencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_master.contractor_dependencia";

	
	
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
	$edata["LookupTable"] = "dependencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdatacontrato_chart_dependencia["contractor_dependencia"] = $fdata;
		$tdatacontrato_chart_dependencia[".searchableFields"][] = "contractor_dependencia";
//	qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "qty";
	$fdata["GoodName"] = "qty";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("contrato_chart_dependencia","qty");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "qty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Count(contractor_master.contractor_dependencia)";

	
	
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


	$tdatacontrato_chart_dependencia["qty"] = $fdata;
		$tdatacontrato_chart_dependencia[".searchableFields"][] = "qty";

	$tdatacontrato_chart_dependencia[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">contrato_chart_dependencia</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_bar</attr>
		</attr>

		<attr value="parameters">';
	$tdatacontrato_chart_dependencia[".chartXml"] .= '<attr value="0">
			<attr value="name">qty</attr>';
	$tdatacontrato_chart_dependencia[".chartXml"] .= '</attr>';
	$tdatacontrato_chart_dependencia[".chartXml"] .= '<attr value="1">
		<attr value="name">contractor_dependencia</attr>
	</attr>';
	$tdatacontrato_chart_dependencia[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatacontrato_chart_dependencia[".chartXml"] .= '<attr value="head">'.xmlencode("Distribución de los contratos por G.I.T").'</attr>
<attr value="foot">'.xmlencode("G.I.T").'</attr>
<attr value="y_axis_label">'.xmlencode("certs_id").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
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
$tdatacontrato_chart_dependencia[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatacontrato_chart_dependencia[".chartXml"] .= '<attr value="0">
		<attr value="name">cont_ano</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("contrato_chart_dependencia","cont_ano")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacontrato_chart_dependencia[".chartXml"] .= '<attr value="1">
		<attr value="name">contractor_dependencia</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("contrato_chart_dependencia","contractor_dependencia")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacontrato_chart_dependencia[".chartXml"] .= '<attr value="2">
		<attr value="name">qty</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("contrato_chart_dependencia","qty")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatacontrato_chart_dependencia[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">contrato_chart_dependencia</attr>
<attr value="short_table_name">contrato_chart_dependencia</attr>
</attr>

</chart>';

$tables_data["contrato_chart_dependencia"]=&$tdatacontrato_chart_dependencia;
$field_labels["contrato_chart_dependencia"] = &$fieldLabelscontrato_chart_dependencia;
$fieldToolTips["contrato_chart_dependencia"] = &$fieldToolTipscontrato_chart_dependencia;
$placeHolders["contrato_chart_dependencia"] = &$placeHolderscontrato_chart_dependencia;
$page_titles["contrato_chart_dependencia"] = &$pageTitlescontrato_chart_dependencia;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contrato_chart_dependencia"] = array();
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


		
	$detailsTablesData["contrato_chart_dependencia"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato_chart_dependencia"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato_chart_dependencia"][$dIndex]["masterKeys"][]="contractor_dependencia";

				$detailsTablesData["contrato_chart_dependencia"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato_chart_dependencia"][$dIndex]["detailKeys"][]="cont_dep";

// tables which are master tables for current table (detail)
$masterTablesData["contrato_chart_dependencia"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_contrato_chart_dependencia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "contrato.cont_ano,  contractor_master.contractor_dependencia,  Count(contractor_master.contractor_dependencia) as qty";
$proto0["m_strFrom"] = "FROM  contrato  INNER JOIN contractor_master ON contrato.cont_nit_contra_ta = contractor_master.contractor_doc_id";
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
	"m_strName" => "cont_ano",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_chart_dependencia"
));

$proto6["m_sql"] = "contrato.cont_ano";
$proto6["m_srcTableName"] = "contrato_chart_dependencia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_dependencia",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contrato_chart_dependencia"
));

$proto8["m_sql"] = "contractor_master.contractor_dependencia";
$proto8["m_srcTableName"] = "contrato_chart_dependencia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_COUNT";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "contractor_dependencia",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contrato_chart_dependencia"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "Count";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "Count(contractor_master.contractor_dependencia)";
$proto10["m_srcTableName"] = "contrato_chart_dependencia";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "qty";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "contrato";
$proto14["m_srcTableName"] = "contrato_chart_dependencia";
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
$proto13["m_srcTableName"] = "contrato_chart_dependencia";
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
												$proto17=array();
$proto17["m_link"] = "SQLL_INNERJOIN";
			$proto18=array();
$proto18["m_strName"] = "contractor_master";
$proto18["m_srcTableName"] = "contrato_chart_dependencia";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "contractor_id";
$proto18["m_columns"][] = "contractor_type";
$proto18["m_columns"][] = "contractor_doc_id";
$proto18["m_columns"][] = "contractor_doc_dv";
$proto18["m_columns"][] = "contractor_pwd";
$proto18["m_columns"][] = "contractor_image";
$proto18["m_columns"][] = "contractor_name";
$proto18["m_columns"][] = "contractor_lname";
$proto18["m_columns"][] = "contractor_nombresfull";
$proto18["m_columns"][] = "enlace_sigep";
$proto18["m_columns"][] = "contractor_email";
$proto18["m_columns"][] = "contractor_email_mincit";
$proto18["m_columns"][] = "contractor_address";
$proto18["m_columns"][] = "contractor_phone";
$proto18["m_columns"][] = "contractor_mobile";
$proto18["m_columns"][] = "contractor_city";
$proto18["m_columns"][] = "contractor_sup_jerarquico";
$proto18["m_columns"][] = "contractor_dependencia";
$proto18["m_columns"][] = "bank_name";
$proto18["m_columns"][] = "bank_cta_type";
$proto18["m_columns"][] = "bank_cta_number";
$proto18["m_columns"][] = "iva_regimen";
$proto18["m_columns"][] = "sys_update";
$proto18["m_columns"][] = "sys_user";
$proto18["m_columns"][] = "sys_date";
$proto18["m_columns"][] = "sys_level";
$proto18["m_columns"][] = "sys_status";
$proto18["m_columns"][] = "sys_last_upd";
$proto18["m_columns"][] = "groupid";
$proto18["m_columns"][] = "active";
$proto18["m_columns"][] = "contractor_dependientes";
$proto18["m_columns"][] = "contractor_medicinapre_file";
$proto18["m_columns"][] = "contractor_picmonetaria_file";
$proto18["m_columns"][] = "contractor_decljur";
$proto18["m_columns"][] = "contractor_eps";
$proto18["m_columns"][] = "contractor_fondopensiones";
$proto18["m_columns"][] = "contractor_cajacompensacion";
$proto18["m_columns"][] = "contractor_arl";
$proto18["m_columns"][] = "ubica_dep";
$proto18["m_columns"][] = "ubica_extension";
$proto18["m_columns"][] = "dem_genero";
$proto18["m_columns"][] = "dem_ocupacion";
$proto18["m_columns"][] = "dem_profesion";
$proto18["m_columns"][] = "ct_fecha_nacimiento";
$proto18["m_columns"][] = "ct_fecha_nacimiento_mun";
$proto18["m_columns"][] = "ct_nacionalidad";
$proto18["m_columns"][] = "dem_edad";
$proto18["m_columns"][] = "dem_educacion";
$proto18["m_columns"][] = "dem_discapacidad";
$proto18["m_columns"][] = "emergencia";
$proto18["m_columns"][] = "terms_msj";
$proto18["m_columns"][] = "terms_acepta";
$proto18["m_columns"][] = "signature";
$proto18["m_columns"][] = "pin";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "INNER JOIN contractor_master ON contrato.cont_nit_contra_ta = contractor_master.contractor_doc_id";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "contrato_chart_dependencia";
$proto19=array();
$proto19["m_sql"] = "contrato.cont_nit_contra_ta = contractor_master.contractor_doc_id";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cont_nit_contra_ta",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_chart_dependencia"
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "= contractor_master.contractor_doc_id";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto21=array();
						$obj = new SQLField(array(
	"m_strName" => "cont_ano",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_chart_dependencia"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "contractor_dependencia",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contrato_chart_dependencia"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato_chart_dependencia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_chart_dependencia = createSqlQuery_contrato_chart_dependencia();


	
										;

			

$tdatacontrato_chart_dependencia[".sqlquery"] = $queryData_contrato_chart_dependencia;

$tableEvents["contrato_chart_dependencia"] = new eventsBase;
$tdatacontrato_chart_dependencia[".hasEvents"] = false;

?>