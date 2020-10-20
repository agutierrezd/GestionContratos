<?php



$tdatacontrato_chart_supjer = array();
$tdatacontrato_chart_supjer[".searchableFields"] = array();
$tdatacontrato_chart_supjer[".ShortName"] = "contrato_chart_supjer";
$tdatacontrato_chart_supjer[".OwnerID"] = "";
$tdatacontrato_chart_supjer[".OriginalTable"] = "cert_status";


$tdatacontrato_chart_supjer[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatacontrato_chart_supjer[".originalPagesByType"] = $tdatacontrato_chart_supjer[".pagesByType"];
$tdatacontrato_chart_supjer[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatacontrato_chart_supjer[".originalPages"] = $tdatacontrato_chart_supjer[".pages"];
$tdatacontrato_chart_supjer[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatacontrato_chart_supjer[".originalDefaultPages"] = $tdatacontrato_chart_supjer[".defaultPages"];

//	field labels
$fieldLabelscontrato_chart_supjer = array();
$fieldToolTipscontrato_chart_supjer = array();
$pageTitlescontrato_chart_supjer = array();
$placeHolderscontrato_chart_supjer = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_chart_supjer["Spanish"] = array();
	$fieldToolTipscontrato_chart_supjer["Spanish"] = array();
	$placeHolderscontrato_chart_supjer["Spanish"] = array();
	$pageTitlescontrato_chart_supjer["Spanish"] = array();
	$fieldLabelscontrato_chart_supjer["Spanish"]["cont_ano"] = "VIGENCIA";
	$fieldToolTipscontrato_chart_supjer["Spanish"]["cont_ano"] = "";
	$placeHolderscontrato_chart_supjer["Spanish"]["cont_ano"] = "";
	$fieldLabelscontrato_chart_supjer["Spanish"]["contractor_sup_jerarquico"] = "DESPACHO | DIRECCIÓN";
	$fieldToolTipscontrato_chart_supjer["Spanish"]["contractor_sup_jerarquico"] = "";
	$placeHolderscontrato_chart_supjer["Spanish"]["contractor_sup_jerarquico"] = "";
	$fieldLabelscontrato_chart_supjer["Spanish"]["qty"] = "# CONTRATOS";
	$fieldToolTipscontrato_chart_supjer["Spanish"]["qty"] = "";
	$placeHolderscontrato_chart_supjer["Spanish"]["qty"] = "";
	if (count($fieldToolTipscontrato_chart_supjer["Spanish"]))
		$tdatacontrato_chart_supjer[".isUseToolTips"] = true;
}


	$tdatacontrato_chart_supjer[".NCSearch"] = true;

	$tdatacontrato_chart_supjer[".ChartRefreshTime"] = 0;


$tdatacontrato_chart_supjer[".shortTableName"] = "contrato_chart_supjer";
$tdatacontrato_chart_supjer[".nSecOptions"] = 0;

$tdatacontrato_chart_supjer[".mainTableOwnerID"] = "";
$tdatacontrato_chart_supjer[".entityType"] = 3;

$tdatacontrato_chart_supjer[".strOriginalTableName"] = "cert_status";

	



$tdatacontrato_chart_supjer[".showAddInPopup"] = false;

$tdatacontrato_chart_supjer[".showEditInPopup"] = false;

$tdatacontrato_chart_supjer[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrato_chart_supjer[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrato_chart_supjer[".listAjax"] = false;
//	temporary
$tdatacontrato_chart_supjer[".listAjax"] = false;

	$tdatacontrato_chart_supjer[".audit"] = false;

	$tdatacontrato_chart_supjer[".locking"] = false;


$pages = $tdatacontrato_chart_supjer[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_chart_supjer[".edit"] = true;
	$tdatacontrato_chart_supjer[".afterEditAction"] = 1;
	$tdatacontrato_chart_supjer[".closePopupAfterEdit"] = 1;
	$tdatacontrato_chart_supjer[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_chart_supjer[".add"] = true;
$tdatacontrato_chart_supjer[".afterAddAction"] = 1;
$tdatacontrato_chart_supjer[".closePopupAfterAdd"] = 1;
$tdatacontrato_chart_supjer[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_chart_supjer[".list"] = true;
}



$tdatacontrato_chart_supjer[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_chart_supjer[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_chart_supjer[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_chart_supjer[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_chart_supjer[".printFriendly"] = true;
}



$tdatacontrato_chart_supjer[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_chart_supjer[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_chart_supjer[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_chart_supjer[".isUseAjaxSuggest"] = true;




						

$tdatacontrato_chart_supjer[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_chart_supjer[".buttonsAdded"] = false;

$tdatacontrato_chart_supjer[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_chart_supjer[".isUseTimeForSearch"] = false;


$tdatacontrato_chart_supjer[".badgeColor"] = "1E90FF";


$tdatacontrato_chart_supjer[".allSearchFields"] = array();
$tdatacontrato_chart_supjer[".filterFields"] = array();
$tdatacontrato_chart_supjer[".requiredSearchFields"] = array();

$tdatacontrato_chart_supjer[".googleLikeFields"] = array();
$tdatacontrato_chart_supjer[".googleLikeFields"][] = "cont_ano";
$tdatacontrato_chart_supjer[".googleLikeFields"][] = "contractor_sup_jerarquico";
$tdatacontrato_chart_supjer[".googleLikeFields"][] = "qty";



$tdatacontrato_chart_supjer[".tableType"] = "chart";

$tdatacontrato_chart_supjer[".printerPageOrientation"] = 0;
$tdatacontrato_chart_supjer[".nPrinterPageScale"] = 100;

$tdatacontrato_chart_supjer[".nPrinterSplitRecords"] = 40;

$tdatacontrato_chart_supjer[".geocodingEnabled"] = false;



// chart settings
$tdatacontrato_chart_supjer[".chartType"] = "2DColumn";
// end of chart settings

$tdatacontrato_chart_supjer[".isDisplayLoading"] = true;







$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrato_chart_supjer[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_chart_supjer[".orderindexes"] = array();

$tdatacontrato_chart_supjer[".sqlHead"] = "SELECT contrato.cont_ano,  contractor_master.contractor_sup_jerarquico,  Count(contractor_master.contractor_dependencia) as qty";
$tdatacontrato_chart_supjer[".sqlFrom"] = "FROM  contrato  INNER JOIN contractor_master ON contrato.cont_nit_contra_ta = contractor_master.contractor_doc_id";
$tdatacontrato_chart_supjer[".sqlWhereExpr"] = "";
$tdatacontrato_chart_supjer[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_chart_supjer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_chart_supjer[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_chart_supjer[".highlightSearchResults"] = true;

$tableKeyscontrato_chart_supjer = array();
$tdatacontrato_chart_supjer[".Keys"] = $tableKeyscontrato_chart_supjer;


$tdatacontrato_chart_supjer[".hideMobileList"] = array();




//	cont_ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cont_ano";
	$fdata["GoodName"] = "cont_ano";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_chart_supjer","cont_ano");
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


	$tdatacontrato_chart_supjer["cont_ano"] = $fdata;
		$tdatacontrato_chart_supjer[".searchableFields"][] = "cont_ano";
//	contractor_sup_jerarquico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "contractor_sup_jerarquico";
	$fdata["GoodName"] = "contractor_sup_jerarquico";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contrato_chart_supjer","contractor_sup_jerarquico");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "contractor_sup_jerarquico";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_master.contractor_sup_jerarquico";

	
	
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
	$edata["LookupTable"] = "dependencias_001";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_depto_superior";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Departamento_superior";

	

	
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


	$tdatacontrato_chart_supjer["contractor_sup_jerarquico"] = $fdata;
		$tdatacontrato_chart_supjer[".searchableFields"][] = "contractor_sup_jerarquico";
//	qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "qty";
	$fdata["GoodName"] = "qty";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("contrato_chart_supjer","qty");
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


	$tdatacontrato_chart_supjer["qty"] = $fdata;
		$tdatacontrato_chart_supjer[".searchableFields"][] = "qty";

	$tdatacontrato_chart_supjer[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">contrato_chart_supjer</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatacontrato_chart_supjer[".chartXml"] .= '<attr value="0">
			<attr value="name">qty</attr>';
	$tdatacontrato_chart_supjer[".chartXml"] .= '</attr>';
	$tdatacontrato_chart_supjer[".chartXml"] .= '<attr value="1">
		<attr value="name">contractor_sup_jerarquico</attr>
	</attr>';
	$tdatacontrato_chart_supjer[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatacontrato_chart_supjer[".chartXml"] .= '<attr value="head">'.xmlencode("Distribución de los contratos por DESPACHO | DRECCIÓN").'</attr>
<attr value="foot">'.xmlencode("NOMBRE").'</attr>
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
$tdatacontrato_chart_supjer[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatacontrato_chart_supjer[".chartXml"] .= '<attr value="0">
		<attr value="name">cont_ano</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("contrato_chart_supjer","cont_ano")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacontrato_chart_supjer[".chartXml"] .= '<attr value="1">
		<attr value="name">contractor_sup_jerarquico</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("contrato_chart_supjer","contractor_sup_jerarquico")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacontrato_chart_supjer[".chartXml"] .= '<attr value="2">
		<attr value="name">qty</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("contrato_chart_supjer","qty")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatacontrato_chart_supjer[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">contrato_chart_supjer</attr>
<attr value="short_table_name">contrato_chart_supjer</attr>
</attr>

</chart>';

$tables_data["contrato_chart_supjer"]=&$tdatacontrato_chart_supjer;
$field_labels["contrato_chart_supjer"] = &$fieldLabelscontrato_chart_supjer;
$fieldToolTips["contrato_chart_supjer"] = &$fieldToolTipscontrato_chart_supjer;
$placeHolders["contrato_chart_supjer"] = &$placeHolderscontrato_chart_supjer;
$page_titles["contrato_chart_supjer"] = &$pageTitlescontrato_chart_supjer;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contrato_chart_supjer"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["contrato_chart_supjer"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_contrato_chart_supjer()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "contrato.cont_ano,  contractor_master.contractor_sup_jerarquico,  Count(contractor_master.contractor_dependencia) as qty";
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
	"m_srcTableName" => "contrato_chart_supjer"
));

$proto6["m_sql"] = "contrato.cont_ano";
$proto6["m_srcTableName"] = "contrato_chart_supjer";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_sup_jerarquico",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contrato_chart_supjer"
));

$proto8["m_sql"] = "contractor_master.contractor_sup_jerarquico";
$proto8["m_srcTableName"] = "contrato_chart_supjer";
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
	"m_srcTableName" => "contrato_chart_supjer"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "Count";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "Count(contractor_master.contractor_dependencia)";
$proto10["m_srcTableName"] = "contrato_chart_supjer";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "qty";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "contrato";
$proto14["m_srcTableName"] = "contrato_chart_supjer";
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
$proto13["m_srcTableName"] = "contrato_chart_supjer";
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
$proto18["m_srcTableName"] = "contrato_chart_supjer";
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
$proto17["m_srcTableName"] = "contrato_chart_supjer";
$proto19=array();
$proto19["m_sql"] = "contrato.cont_nit_contra_ta = contractor_master.contractor_doc_id";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cont_nit_contra_ta",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_chart_supjer"
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
	"m_srcTableName" => "contrato_chart_supjer"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "contractor_sup_jerarquico",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contrato_chart_supjer"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato_chart_supjer";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_chart_supjer = createSqlQuery_contrato_chart_supjer();


	
										;

			

$tdatacontrato_chart_supjer[".sqlquery"] = $queryData_contrato_chart_supjer;

$tableEvents["contrato_chart_supjer"] = new eventsBase;
$tdatacontrato_chart_supjer[".hasEvents"] = false;

?>