<?php



$tdatacontrato_chart_tiporubro = array();
$tdatacontrato_chart_tiporubro[".searchableFields"] = array();
$tdatacontrato_chart_tiporubro[".ShortName"] = "contrato_chart_tiporubro";
$tdatacontrato_chart_tiporubro[".OwnerID"] = "";
$tdatacontrato_chart_tiporubro[".OriginalTable"] = "contrato";


$tdatacontrato_chart_tiporubro[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" );
$tdatacontrato_chart_tiporubro[".originalPagesByType"] = $tdatacontrato_chart_tiporubro[".pagesByType"];
$tdatacontrato_chart_tiporubro[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" ) );
$tdatacontrato_chart_tiporubro[".originalPages"] = $tdatacontrato_chart_tiporubro[".pages"];
$tdatacontrato_chart_tiporubro[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"masterchart\":\"masterchart\",\"search\":\"search\"}" );
$tdatacontrato_chart_tiporubro[".originalDefaultPages"] = $tdatacontrato_chart_tiporubro[".defaultPages"];

//	field labels
$fieldLabelscontrato_chart_tiporubro = array();
$fieldToolTipscontrato_chart_tiporubro = array();
$pageTitlescontrato_chart_tiporubro = array();
$placeHolderscontrato_chart_tiporubro = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_chart_tiporubro["Spanish"] = array();
	$fieldToolTipscontrato_chart_tiporubro["Spanish"] = array();
	$placeHolderscontrato_chart_tiporubro["Spanish"] = array();
	$pageTitlescontrato_chart_tiporubro["Spanish"] = array();
	$fieldLabelscontrato_chart_tiporubro["Spanish"]["cont_tipo_rubro"] = "TIPO RUBRO";
	$fieldToolTipscontrato_chart_tiporubro["Spanish"]["cont_tipo_rubro"] = "";
	$placeHolderscontrato_chart_tiporubro["Spanish"]["cont_tipo_rubro"] = "";
	$fieldLabelscontrato_chart_tiporubro["Spanish"]["qty"] = "CANTIDAD";
	$fieldToolTipscontrato_chart_tiporubro["Spanish"]["qty"] = "";
	$placeHolderscontrato_chart_tiporubro["Spanish"]["qty"] = "";
	$fieldLabelscontrato_chart_tiporubro["Spanish"]["cont_ano"] = "VIGENCIA";
	$fieldToolTipscontrato_chart_tiporubro["Spanish"]["cont_ano"] = "";
	$placeHolderscontrato_chart_tiporubro["Spanish"]["cont_ano"] = "";
	if (count($fieldToolTipscontrato_chart_tiporubro["Spanish"]))
		$tdatacontrato_chart_tiporubro[".isUseToolTips"] = true;
}


	$tdatacontrato_chart_tiporubro[".NCSearch"] = true;

	$tdatacontrato_chart_tiporubro[".ChartRefreshTime"] = 0;


$tdatacontrato_chart_tiporubro[".shortTableName"] = "contrato_chart_tiporubro";
$tdatacontrato_chart_tiporubro[".nSecOptions"] = 0;

$tdatacontrato_chart_tiporubro[".mainTableOwnerID"] = "";
$tdatacontrato_chart_tiporubro[".entityType"] = 3;

$tdatacontrato_chart_tiporubro[".strOriginalTableName"] = "contrato";

	



$tdatacontrato_chart_tiporubro[".showAddInPopup"] = false;

$tdatacontrato_chart_tiporubro[".showEditInPopup"] = false;

$tdatacontrato_chart_tiporubro[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrato_chart_tiporubro[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrato_chart_tiporubro[".listAjax"] = false;
//	temporary
$tdatacontrato_chart_tiporubro[".listAjax"] = false;

	$tdatacontrato_chart_tiporubro[".audit"] = false;

	$tdatacontrato_chart_tiporubro[".locking"] = false;


$pages = $tdatacontrato_chart_tiporubro[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_chart_tiporubro[".edit"] = true;
	$tdatacontrato_chart_tiporubro[".afterEditAction"] = 1;
	$tdatacontrato_chart_tiporubro[".closePopupAfterEdit"] = 1;
	$tdatacontrato_chart_tiporubro[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_chart_tiporubro[".add"] = true;
$tdatacontrato_chart_tiporubro[".afterAddAction"] = 1;
$tdatacontrato_chart_tiporubro[".closePopupAfterAdd"] = 1;
$tdatacontrato_chart_tiporubro[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_chart_tiporubro[".list"] = true;
}



$tdatacontrato_chart_tiporubro[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_chart_tiporubro[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_chart_tiporubro[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_chart_tiporubro[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_chart_tiporubro[".printFriendly"] = true;
}



$tdatacontrato_chart_tiporubro[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_chart_tiporubro[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_chart_tiporubro[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_chart_tiporubro[".isUseAjaxSuggest"] = true;




						

$tdatacontrato_chart_tiporubro[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_chart_tiporubro[".buttonsAdded"] = false;

$tdatacontrato_chart_tiporubro[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_chart_tiporubro[".isUseTimeForSearch"] = false;


$tdatacontrato_chart_tiporubro[".badgeColor"] = "6B8E23";


$tdatacontrato_chart_tiporubro[".allSearchFields"] = array();
$tdatacontrato_chart_tiporubro[".filterFields"] = array();
$tdatacontrato_chart_tiporubro[".requiredSearchFields"] = array();

$tdatacontrato_chart_tiporubro[".googleLikeFields"] = array();
$tdatacontrato_chart_tiporubro[".googleLikeFields"][] = "cont_tipo_rubro";
$tdatacontrato_chart_tiporubro[".googleLikeFields"][] = "qty";
$tdatacontrato_chart_tiporubro[".googleLikeFields"][] = "cont_ano";



$tdatacontrato_chart_tiporubro[".tableType"] = "chart";

$tdatacontrato_chart_tiporubro[".printerPageOrientation"] = 0;
$tdatacontrato_chart_tiporubro[".nPrinterPageScale"] = 100;

$tdatacontrato_chart_tiporubro[".nPrinterSplitRecords"] = 40;

$tdatacontrato_chart_tiporubro[".geocodingEnabled"] = false;



// chart settings
$tdatacontrato_chart_tiporubro[".chartType"] = "2DDoughnut";
// end of chart settings

$tdatacontrato_chart_tiporubro[".isDisplayLoading"] = true;







$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrato_chart_tiporubro[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_chart_tiporubro[".orderindexes"] = array();

$tdatacontrato_chart_tiporubro[".sqlHead"] = "SELECT contrato.cont_tipo_rubro,  Count(contrato.cont_tipo_rubro) AS qty,  contrato.cont_ano";
$tdatacontrato_chart_tiporubro[".sqlFrom"] = "FROM  contrato";
$tdatacontrato_chart_tiporubro[".sqlWhereExpr"] = "";
$tdatacontrato_chart_tiporubro[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_chart_tiporubro[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_chart_tiporubro[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_chart_tiporubro[".highlightSearchResults"] = true;

$tableKeyscontrato_chart_tiporubro = array();
$tdatacontrato_chart_tiporubro[".Keys"] = $tableKeyscontrato_chart_tiporubro;


$tdatacontrato_chart_tiporubro[".hideMobileList"] = array();




//	cont_tipo_rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cont_tipo_rubro";
	$fdata["GoodName"] = "cont_tipo_rubro";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_chart_tiporubro","cont_tipo_rubro");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_tipo_rubro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contrato.cont_tipo_rubro";

	
	
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
	$edata["LookupTable"] = "tparam_tipo_ct_rubro";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "rubro_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "tipo_rubro";

	

	
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


	$tdatacontrato_chart_tiporubro["cont_tipo_rubro"] = $fdata;
		$tdatacontrato_chart_tiporubro[".searchableFields"][] = "cont_tipo_rubro";
//	qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "qty";
	$fdata["GoodName"] = "qty";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("contrato_chart_tiporubro","qty");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "qty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Count(contrato.cont_tipo_rubro)";

	
	
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


	$tdatacontrato_chart_tiporubro["qty"] = $fdata;
		$tdatacontrato_chart_tiporubro[".searchableFields"][] = "qty";
//	cont_ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cont_ano";
	$fdata["GoodName"] = "cont_ano";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_chart_tiporubro","cont_ano");
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
	$edata["LinkFieldType"] = 2;
	$edata["DisplayField"] = "vigencia";

	

	
	$edata["LookupOrderBy"] = "vigencia";

		$edata["LookupDesc"] = true;

	
	
	

	
	
	
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


	$tdatacontrato_chart_tiporubro["cont_ano"] = $fdata;
		$tdatacontrato_chart_tiporubro[".searchableFields"][] = "cont_ano";

	$tdatacontrato_chart_tiporubro[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">contrato_chart_tiporubro</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_doughnut</attr>
		</attr>

		<attr value="parameters">';
	$tdatacontrato_chart_tiporubro[".chartXml"] .= '<attr value="0">
			<attr value="name">qty</attr>';
	$tdatacontrato_chart_tiporubro[".chartXml"] .= '</attr>';
	$tdatacontrato_chart_tiporubro[".chartXml"] .= '<attr value="1">
		<attr value="name">cont_tipo_rubro</attr>
	</attr>';
	$tdatacontrato_chart_tiporubro[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatacontrato_chart_tiporubro[".chartXml"] .= '<attr value="head">'.xmlencode("Distribución de los contratos por tipo de RUBRO | VIGENCIA").'</attr>
<attr value="foot">'.xmlencode("Tipo de rubro").'</attr>
<attr value="y_axis_label">'.xmlencode("cont_paa_id").'</attr>


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
$tdatacontrato_chart_tiporubro[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatacontrato_chart_tiporubro[".chartXml"] .= '<attr value="0">
		<attr value="name">cont_tipo_rubro</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("contrato_chart_tiporubro","cont_tipo_rubro")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacontrato_chart_tiporubro[".chartXml"] .= '<attr value="1">
		<attr value="name">qty</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("contrato_chart_tiporubro","qty")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacontrato_chart_tiporubro[".chartXml"] .= '<attr value="2">
		<attr value="name">cont_ano</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("contrato_chart_tiporubro","cont_ano")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatacontrato_chart_tiporubro[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">contrato_chart_tiporubro</attr>
<attr value="short_table_name">contrato_chart_tiporubro</attr>
</attr>

</chart>';

$tables_data["contrato_chart_tiporubro"]=&$tdatacontrato_chart_tiporubro;
$field_labels["contrato_chart_tiporubro"] = &$fieldLabelscontrato_chart_tiporubro;
$fieldToolTips["contrato_chart_tiporubro"] = &$fieldToolTipscontrato_chart_tiporubro;
$placeHolders["contrato_chart_tiporubro"] = &$placeHolderscontrato_chart_tiporubro;
$page_titles["contrato_chart_tiporubro"] = &$pageTitlescontrato_chart_tiporubro;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contrato_chart_tiporubro"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["contrato_chart_tiporubro"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_contrato_chart_tiporubro()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "contrato.cont_tipo_rubro,  Count(contrato.cont_tipo_rubro) AS qty,  contrato.cont_ano";
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
	"m_strName" => "cont_tipo_rubro",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_chart_tiporubro"
));

$proto6["m_sql"] = "contrato.cont_tipo_rubro";
$proto6["m_srcTableName"] = "contrato_chart_tiporubro";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_COUNT";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "cont_tipo_rubro",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_chart_tiporubro"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "Count";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "Count(contrato.cont_tipo_rubro)";
$proto8["m_srcTableName"] = "contrato_chart_tiporubro";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "qty";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_ano",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_chart_tiporubro"
));

$proto11["m_sql"] = "contrato.cont_ano";
$proto11["m_srcTableName"] = "contrato_chart_tiporubro";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "contrato";
$proto14["m_srcTableName"] = "contrato_chart_tiporubro";
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
$proto13["m_srcTableName"] = "contrato_chart_tiporubro";
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
	"m_strName" => "cont_tipo_rubro",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_chart_tiporubro"
));

$proto17["m_column"]=$obj;
$obj = new SQLGroupByItem($proto17);

$proto0["m_groupby"][]=$obj;
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "cont_ano",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_chart_tiporubro"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato_chart_tiporubro";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_chart_tiporubro = createSqlQuery_contrato_chart_tiporubro();


	
										;

			

$tdatacontrato_chart_tiporubro[".sqlquery"] = $queryData_contrato_chart_tiporubro;

$tableEvents["contrato_chart_tiporubro"] = new eventsBase;
$tdatacontrato_chart_tiporubro[".hasEvents"] = false;

?>