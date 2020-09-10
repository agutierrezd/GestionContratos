<?php



$tdataq_info_ordenpago = array();
$tdataq_info_ordenpago[".searchableFields"] = array();
$tdataq_info_ordenpago[".ShortName"] = "q_info_ordenpago";
$tdataq_info_ordenpago[".OwnerID"] = "";
$tdataq_info_ordenpago[".OriginalTable"] = "q_info_ordenpago";


$tdataq_info_ordenpago[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataq_info_ordenpago[".originalPagesByType"] = $tdataq_info_ordenpago[".pagesByType"];
$tdataq_info_ordenpago[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataq_info_ordenpago[".originalPages"] = $tdataq_info_ordenpago[".pages"];
$tdataq_info_ordenpago[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataq_info_ordenpago[".originalDefaultPages"] = $tdataq_info_ordenpago[".defaultPages"];

//	field labels
$fieldLabelsq_info_ordenpago = array();
$fieldToolTipsq_info_ordenpago = array();
$pageTitlesq_info_ordenpago = array();
$placeHoldersq_info_ordenpago = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_info_ordenpago["Spanish"] = array();
	$fieldToolTipsq_info_ordenpago["Spanish"] = array();
	$placeHoldersq_info_ordenpago["Spanish"] = array();
	$pageTitlesq_info_ordenpago["Spanish"] = array();
	$fieldLabelsq_info_ordenpago["Spanish"]["Numero_Documento"] = "Numero Documento";
	$fieldToolTipsq_info_ordenpago["Spanish"]["Numero_Documento"] = "";
	$placeHoldersq_info_ordenpago["Spanish"]["Numero_Documento"] = "";
	$fieldLabelsq_info_ordenpago["Spanish"]["Fecha_de_Registro"] = "Fecha de Registro";
	$fieldToolTipsq_info_ordenpago["Spanish"]["Fecha_de_Registro"] = "";
	$placeHoldersq_info_ordenpago["Spanish"]["Fecha_de_Registro"] = "";
	$fieldLabelsq_info_ordenpago["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipsq_info_ordenpago["Spanish"]["vigencia"] = "";
	$placeHoldersq_info_ordenpago["Spanish"]["vigencia"] = "";
	$fieldLabelsq_info_ordenpago["Spanish"]["Fecha_de_pago"] = "Fecha de pago";
	$fieldToolTipsq_info_ordenpago["Spanish"]["Fecha_de_pago"] = "";
	$placeHoldersq_info_ordenpago["Spanish"]["Fecha_de_pago"] = "";
	$fieldLabelsq_info_ordenpago["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsq_info_ordenpago["Spanish"]["Estado"] = "";
	$placeHoldersq_info_ordenpago["Spanish"]["Estado"] = "";
	$fieldLabelsq_info_ordenpago["Spanish"]["Valor_Bruto"] = "Valor Bruto";
	$fieldToolTipsq_info_ordenpago["Spanish"]["Valor_Bruto"] = "";
	$placeHoldersq_info_ordenpago["Spanish"]["Valor_Bruto"] = "";
	$fieldLabelsq_info_ordenpago["Spanish"]["Valor_Deducciones"] = "Valor Deducciones";
	$fieldToolTipsq_info_ordenpago["Spanish"]["Valor_Deducciones"] = "";
	$placeHoldersq_info_ordenpago["Spanish"]["Valor_Deducciones"] = "";
	$fieldLabelsq_info_ordenpago["Spanish"]["Identificacion"] = "Identificacion";
	$fieldToolTipsq_info_ordenpago["Spanish"]["Identificacion"] = "";
	$placeHoldersq_info_ordenpago["Spanish"]["Identificacion"] = "";
	$fieldLabelsq_info_ordenpago["Spanish"]["Tesoreria_Pagadora"] = "Tesoreria Pagadora";
	$fieldToolTipsq_info_ordenpago["Spanish"]["Tesoreria_Pagadora"] = "";
	$placeHoldersq_info_ordenpago["Spanish"]["Tesoreria_Pagadora"] = "";
	$fieldLabelsq_info_ordenpago["Spanish"]["Identificacion_Pagaduria"] = "Identificacion Pagaduria";
	$fieldToolTipsq_info_ordenpago["Spanish"]["Identificacion_Pagaduria"] = "";
	$placeHoldersq_info_ordenpago["Spanish"]["Identificacion_Pagaduria"] = "";
	$fieldLabelsq_info_ordenpago["Spanish"]["Obligaciones"] = "Obligaciones";
	$fieldToolTipsq_info_ordenpago["Spanish"]["Obligaciones"] = "";
	$placeHoldersq_info_ordenpago["Spanish"]["Obligaciones"] = "";
	$fieldLabelsq_info_ordenpago["Spanish"]["Tipo_Doc_Soporte_Compromiso"] = "Tipo Doc Soporte Compromiso";
	$fieldToolTipsq_info_ordenpago["Spanish"]["Tipo_Doc_Soporte_Compromiso"] = "";
	$placeHoldersq_info_ordenpago["Spanish"]["Tipo_Doc_Soporte_Compromiso"] = "";
	$fieldLabelsq_info_ordenpago["Spanish"]["Num_Doc_Soporte_Compromiso"] = "Num Doc Soporte Compromiso";
	$fieldToolTipsq_info_ordenpago["Spanish"]["Num_Doc_Soporte_Compromiso"] = "";
	$placeHoldersq_info_ordenpago["Spanish"]["Num_Doc_Soporte_Compromiso"] = "";
	$fieldLabelsq_info_ordenpago["Spanish"]["Objeto_del_Compromiso"] = "Objeto del Compromiso";
	$fieldToolTipsq_info_ordenpago["Spanish"]["Objeto_del_Compromiso"] = "";
	$placeHoldersq_info_ordenpago["Spanish"]["Objeto_del_Compromiso"] = "";
	if (count($fieldToolTipsq_info_ordenpago["Spanish"]))
		$tdataq_info_ordenpago[".isUseToolTips"] = true;
}


	$tdataq_info_ordenpago[".NCSearch"] = true;



$tdataq_info_ordenpago[".shortTableName"] = "q_info_ordenpago";
$tdataq_info_ordenpago[".nSecOptions"] = 0;

$tdataq_info_ordenpago[".mainTableOwnerID"] = "";
$tdataq_info_ordenpago[".entityType"] = 0;

$tdataq_info_ordenpago[".strOriginalTableName"] = "q_info_ordenpago";

	



$tdataq_info_ordenpago[".showAddInPopup"] = false;

$tdataq_info_ordenpago[".showEditInPopup"] = false;

$tdataq_info_ordenpago[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataq_info_ordenpago[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataq_info_ordenpago[".listAjax"] = false;
//	temporary
$tdataq_info_ordenpago[".listAjax"] = false;

	$tdataq_info_ordenpago[".audit"] = false;

	$tdataq_info_ordenpago[".locking"] = false;


$pages = $tdataq_info_ordenpago[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_info_ordenpago[".edit"] = true;
	$tdataq_info_ordenpago[".afterEditAction"] = 1;
	$tdataq_info_ordenpago[".closePopupAfterEdit"] = 1;
	$tdataq_info_ordenpago[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_info_ordenpago[".add"] = true;
$tdataq_info_ordenpago[".afterAddAction"] = 1;
$tdataq_info_ordenpago[".closePopupAfterAdd"] = 1;
$tdataq_info_ordenpago[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_info_ordenpago[".list"] = true;
}



$tdataq_info_ordenpago[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_info_ordenpago[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_info_ordenpago[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_info_ordenpago[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_info_ordenpago[".printFriendly"] = true;
}



$tdataq_info_ordenpago[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_info_ordenpago[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_info_ordenpago[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_info_ordenpago[".isUseAjaxSuggest"] = true;

$tdataq_info_ordenpago[".rowHighlite"] = true;



												

$tdataq_info_ordenpago[".ajaxCodeSnippetAdded"] = false;

$tdataq_info_ordenpago[".buttonsAdded"] = false;

$tdataq_info_ordenpago[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_info_ordenpago[".isUseTimeForSearch"] = false;


$tdataq_info_ordenpago[".badgeColor"] = "7b68ee";


$tdataq_info_ordenpago[".allSearchFields"] = array();
$tdataq_info_ordenpago[".filterFields"] = array();
$tdataq_info_ordenpago[".requiredSearchFields"] = array();

$tdataq_info_ordenpago[".googleLikeFields"] = array();
$tdataq_info_ordenpago[".googleLikeFields"][] = "Numero Documento";
$tdataq_info_ordenpago[".googleLikeFields"][] = "Fecha de Registro";
$tdataq_info_ordenpago[".googleLikeFields"][] = "vigencia";
$tdataq_info_ordenpago[".googleLikeFields"][] = "Fecha de pago";
$tdataq_info_ordenpago[".googleLikeFields"][] = "Estado";
$tdataq_info_ordenpago[".googleLikeFields"][] = "Valor Bruto";
$tdataq_info_ordenpago[".googleLikeFields"][] = "Valor Deducciones";
$tdataq_info_ordenpago[".googleLikeFields"][] = "Identificacion";
$tdataq_info_ordenpago[".googleLikeFields"][] = "Tesoreria Pagadora";
$tdataq_info_ordenpago[".googleLikeFields"][] = "Identificacion Pagaduria";
$tdataq_info_ordenpago[".googleLikeFields"][] = "Obligaciones";
$tdataq_info_ordenpago[".googleLikeFields"][] = "Tipo Doc Soporte Compromiso";
$tdataq_info_ordenpago[".googleLikeFields"][] = "Num Doc Soporte Compromiso";
$tdataq_info_ordenpago[".googleLikeFields"][] = "Objeto del Compromiso";



$tdataq_info_ordenpago[".tableType"] = "list";

$tdataq_info_ordenpago[".printerPageOrientation"] = 0;
$tdataq_info_ordenpago[".nPrinterPageScale"] = 100;

$tdataq_info_ordenpago[".nPrinterSplitRecords"] = 40;

$tdataq_info_ordenpago[".geocodingEnabled"] = false;










$tdataq_info_ordenpago[".pageSize"] = 20;

$tdataq_info_ordenpago[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_info_ordenpago[".strOrderBy"] = $tstrOrderBy;

$tdataq_info_ordenpago[".orderindexes"] = array();

$tdataq_info_ordenpago[".sqlHead"] = "SELECT `Numero Documento`,  	`Fecha de Registro`,  	vigencia,  	`Fecha de pago`,  	Estado,  	`Valor Bruto`,  	`Valor Deducciones`,  	Identificacion,  	`Tesoreria Pagadora`,  	`Identificacion Pagaduria`,  	Obligaciones,  	`Tipo Doc Soporte Compromiso`,  	`Num Doc Soporte Compromiso`,  	`Objeto del Compromiso`";
$tdataq_info_ordenpago[".sqlFrom"] = "FROM q_info_ordenpago";
$tdataq_info_ordenpago[".sqlWhereExpr"] = "";
$tdataq_info_ordenpago[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_info_ordenpago[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_info_ordenpago[".arrGroupsPerPage"] = $arrGPP;

$tdataq_info_ordenpago[".highlightSearchResults"] = true;

$tableKeysq_info_ordenpago = array();
$tdataq_info_ordenpago[".Keys"] = $tableKeysq_info_ordenpago;


$tdataq_info_ordenpago[".hideMobileList"] = array();




//	Numero Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Numero Documento";
	$fdata["GoodName"] = "Numero_Documento";
	$fdata["ownerTable"] = "q_info_ordenpago";
	$fdata["Label"] = GetFieldLabel("q_info_ordenpago","Numero_Documento");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Numero Documento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Numero Documento`";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdataq_info_ordenpago["Numero Documento"] = $fdata;
		$tdataq_info_ordenpago[".searchableFields"][] = "Numero Documento";
//	Fecha de Registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha de Registro";
	$fdata["GoodName"] = "Fecha_de_Registro";
	$fdata["ownerTable"] = "q_info_ordenpago";
	$fdata["Label"] = GetFieldLabel("q_info_ordenpago","Fecha_de_Registro");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "Fecha de Registro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha de Registro`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataq_info_ordenpago["Fecha de Registro"] = $fdata;
		$tdataq_info_ordenpago[".searchableFields"][] = "Fecha de Registro";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "q_info_ordenpago";
	$fdata["Label"] = GetFieldLabel("q_info_ordenpago","vigencia");
	$fdata["FieldType"] = 3;

	
	
	
			

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


	$tdataq_info_ordenpago["vigencia"] = $fdata;
		$tdataq_info_ordenpago[".searchableFields"][] = "vigencia";
//	Fecha de pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha de pago";
	$fdata["GoodName"] = "Fecha_de_pago";
	$fdata["ownerTable"] = "q_info_ordenpago";
	$fdata["Label"] = GetFieldLabel("q_info_ordenpago","Fecha_de_pago");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "Fecha de pago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha de pago`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataq_info_ordenpago["Fecha de pago"] = $fdata;
		$tdataq_info_ordenpago[".searchableFields"][] = "Fecha de pago";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "q_info_ordenpago";
	$fdata["Label"] = GetFieldLabel("q_info_ordenpago","Estado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Estado";

	
	
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


	$tdataq_info_ordenpago["Estado"] = $fdata;
		$tdataq_info_ordenpago[".searchableFields"][] = "Estado";
//	Valor Bruto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Valor Bruto";
	$fdata["GoodName"] = "Valor_Bruto";
	$fdata["ownerTable"] = "q_info_ordenpago";
	$fdata["Label"] = GetFieldLabel("q_info_ordenpago","Valor_Bruto");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Valor Bruto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Bruto`";

	
	
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


	$tdataq_info_ordenpago["Valor Bruto"] = $fdata;
		$tdataq_info_ordenpago[".searchableFields"][] = "Valor Bruto";
//	Valor Deducciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Valor Deducciones";
	$fdata["GoodName"] = "Valor_Deducciones";
	$fdata["ownerTable"] = "q_info_ordenpago";
	$fdata["Label"] = GetFieldLabel("q_info_ordenpago","Valor_Deducciones");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Valor Deducciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Deducciones`";

	
	
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


	$tdataq_info_ordenpago["Valor Deducciones"] = $fdata;
		$tdataq_info_ordenpago[".searchableFields"][] = "Valor Deducciones";
//	Identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Identificacion";
	$fdata["GoodName"] = "Identificacion";
	$fdata["ownerTable"] = "q_info_ordenpago";
	$fdata["Label"] = GetFieldLabel("q_info_ordenpago","Identificacion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Identificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Identificacion";

	
	
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


	$tdataq_info_ordenpago["Identificacion"] = $fdata;
		$tdataq_info_ordenpago[".searchableFields"][] = "Identificacion";
//	Tesoreria Pagadora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Tesoreria Pagadora";
	$fdata["GoodName"] = "Tesoreria_Pagadora";
	$fdata["ownerTable"] = "q_info_ordenpago";
	$fdata["Label"] = GetFieldLabel("q_info_ordenpago","Tesoreria_Pagadora");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Tesoreria Pagadora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tesoreria Pagadora`";

	
	
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


	$tdataq_info_ordenpago["Tesoreria Pagadora"] = $fdata;
		$tdataq_info_ordenpago[".searchableFields"][] = "Tesoreria Pagadora";
//	Identificacion Pagaduria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Identificacion Pagaduria";
	$fdata["GoodName"] = "Identificacion_Pagaduria";
	$fdata["ownerTable"] = "q_info_ordenpago";
	$fdata["Label"] = GetFieldLabel("q_info_ordenpago","Identificacion_Pagaduria");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Identificacion Pagaduria";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Identificacion Pagaduria`";

	
	
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


	$tdataq_info_ordenpago["Identificacion Pagaduria"] = $fdata;
		$tdataq_info_ordenpago[".searchableFields"][] = "Identificacion Pagaduria";
//	Obligaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Obligaciones";
	$fdata["GoodName"] = "Obligaciones";
	$fdata["ownerTable"] = "q_info_ordenpago";
	$fdata["Label"] = GetFieldLabel("q_info_ordenpago","Obligaciones");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Obligaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Obligaciones";

	
	
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


	$tdataq_info_ordenpago["Obligaciones"] = $fdata;
		$tdataq_info_ordenpago[".searchableFields"][] = "Obligaciones";
//	Tipo Doc Soporte Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Tipo Doc Soporte Compromiso";
	$fdata["GoodName"] = "Tipo_Doc_Soporte_Compromiso";
	$fdata["ownerTable"] = "q_info_ordenpago";
	$fdata["Label"] = GetFieldLabel("q_info_ordenpago","Tipo_Doc_Soporte_Compromiso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Tipo Doc Soporte Compromiso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo Doc Soporte Compromiso`";

	
	
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


	$tdataq_info_ordenpago["Tipo Doc Soporte Compromiso"] = $fdata;
		$tdataq_info_ordenpago[".searchableFields"][] = "Tipo Doc Soporte Compromiso";
//	Num Doc Soporte Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Num Doc Soporte Compromiso";
	$fdata["GoodName"] = "Num_Doc_Soporte_Compromiso";
	$fdata["ownerTable"] = "q_info_ordenpago";
	$fdata["Label"] = GetFieldLabel("q_info_ordenpago","Num_Doc_Soporte_Compromiso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Num Doc Soporte Compromiso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Num Doc Soporte Compromiso`";

	
	
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


	$tdataq_info_ordenpago["Num Doc Soporte Compromiso"] = $fdata;
		$tdataq_info_ordenpago[".searchableFields"][] = "Num Doc Soporte Compromiso";
//	Objeto del Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Objeto del Compromiso";
	$fdata["GoodName"] = "Objeto_del_Compromiso";
	$fdata["ownerTable"] = "q_info_ordenpago";
	$fdata["Label"] = GetFieldLabel("q_info_ordenpago","Objeto_del_Compromiso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Objeto del Compromiso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Objeto del Compromiso`";

	
	
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


	$tdataq_info_ordenpago["Objeto del Compromiso"] = $fdata;
		$tdataq_info_ordenpago[".searchableFields"][] = "Objeto del Compromiso";


$tables_data["q_info_ordenpago"]=&$tdataq_info_ordenpago;
$field_labels["q_info_ordenpago"] = &$fieldLabelsq_info_ordenpago;
$fieldToolTips["q_info_ordenpago"] = &$fieldToolTipsq_info_ordenpago;
$placeHolders["q_info_ordenpago"] = &$placeHoldersq_info_ordenpago;
$page_titles["q_info_ordenpago"] = &$pageTitlesq_info_ordenpago;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_info_ordenpago"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["q_info_ordenpago"] = array();



	
				$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["q_info_ordenpago"][0] = $masterParams;
				$masterTablesData["q_info_ordenpago"][0]["masterKeys"] = array();
	$masterTablesData["q_info_ordenpago"][0]["masterKeys"][]="cont_nit_contra_ta";
				$masterTablesData["q_info_ordenpago"][0]["masterKeys"][]="cont_ano";
				$masterTablesData["q_info_ordenpago"][0]["detailKeys"] = array();
	$masterTablesData["q_info_ordenpago"][0]["detailKeys"][]="Identificacion";
				$masterTablesData["q_info_ordenpago"][0]["detailKeys"][]="vigencia";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_info_ordenpago()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Numero Documento`,  	`Fecha de Registro`,  	vigencia,  	`Fecha de pago`,  	Estado,  	`Valor Bruto`,  	`Valor Deducciones`,  	Identificacion,  	`Tesoreria Pagadora`,  	`Identificacion Pagaduria`,  	Obligaciones,  	`Tipo Doc Soporte Compromiso`,  	`Num Doc Soporte Compromiso`,  	`Objeto del Compromiso`";
$proto0["m_strFrom"] = "FROM q_info_ordenpago";
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
	"m_strName" => "Numero Documento",
	"m_strTable" => "q_info_ordenpago",
	"m_srcTableName" => "q_info_ordenpago"
));

$proto6["m_sql"] = "`Numero Documento`";
$proto6["m_srcTableName"] = "q_info_ordenpago";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Registro",
	"m_strTable" => "q_info_ordenpago",
	"m_srcTableName" => "q_info_ordenpago"
));

$proto8["m_sql"] = "`Fecha de Registro`";
$proto8["m_srcTableName"] = "q_info_ordenpago";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "q_info_ordenpago",
	"m_srcTableName" => "q_info_ordenpago"
));

$proto10["m_sql"] = "vigencia";
$proto10["m_srcTableName"] = "q_info_ordenpago";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de pago",
	"m_strTable" => "q_info_ordenpago",
	"m_srcTableName" => "q_info_ordenpago"
));

$proto12["m_sql"] = "`Fecha de pago`";
$proto12["m_srcTableName"] = "q_info_ordenpago";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "q_info_ordenpago",
	"m_srcTableName" => "q_info_ordenpago"
));

$proto14["m_sql"] = "Estado";
$proto14["m_srcTableName"] = "q_info_ordenpago";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Bruto",
	"m_strTable" => "q_info_ordenpago",
	"m_srcTableName" => "q_info_ordenpago"
));

$proto16["m_sql"] = "`Valor Bruto`";
$proto16["m_srcTableName"] = "q_info_ordenpago";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Deducciones",
	"m_strTable" => "q_info_ordenpago",
	"m_srcTableName" => "q_info_ordenpago"
));

$proto18["m_sql"] = "`Valor Deducciones`";
$proto18["m_srcTableName"] = "q_info_ordenpago";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Identificacion",
	"m_strTable" => "q_info_ordenpago",
	"m_srcTableName" => "q_info_ordenpago"
));

$proto20["m_sql"] = "Identificacion";
$proto20["m_srcTableName"] = "q_info_ordenpago";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Tesoreria Pagadora",
	"m_strTable" => "q_info_ordenpago",
	"m_srcTableName" => "q_info_ordenpago"
));

$proto22["m_sql"] = "`Tesoreria Pagadora`";
$proto22["m_srcTableName"] = "q_info_ordenpago";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Identificacion Pagaduria",
	"m_strTable" => "q_info_ordenpago",
	"m_srcTableName" => "q_info_ordenpago"
));

$proto24["m_sql"] = "`Identificacion Pagaduria`";
$proto24["m_srcTableName"] = "q_info_ordenpago";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligaciones",
	"m_strTable" => "q_info_ordenpago",
	"m_srcTableName" => "q_info_ordenpago"
));

$proto26["m_sql"] = "Obligaciones";
$proto26["m_srcTableName"] = "q_info_ordenpago";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Doc Soporte Compromiso",
	"m_strTable" => "q_info_ordenpago",
	"m_srcTableName" => "q_info_ordenpago"
));

$proto28["m_sql"] = "`Tipo Doc Soporte Compromiso`";
$proto28["m_srcTableName"] = "q_info_ordenpago";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Num Doc Soporte Compromiso",
	"m_strTable" => "q_info_ordenpago",
	"m_srcTableName" => "q_info_ordenpago"
));

$proto30["m_sql"] = "`Num Doc Soporte Compromiso`";
$proto30["m_srcTableName"] = "q_info_ordenpago";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Objeto del Compromiso",
	"m_strTable" => "q_info_ordenpago",
	"m_srcTableName" => "q_info_ordenpago"
));

$proto32["m_sql"] = "`Objeto del Compromiso`";
$proto32["m_srcTableName"] = "q_info_ordenpago";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "q_info_ordenpago";
$proto35["m_srcTableName"] = "q_info_ordenpago";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "Numero Documento";
$proto35["m_columns"][] = "Fecha de Registro";
$proto35["m_columns"][] = "vigencia";
$proto35["m_columns"][] = "Fecha de pago";
$proto35["m_columns"][] = "Estado";
$proto35["m_columns"][] = "Valor Bruto";
$proto35["m_columns"][] = "Valor Deducciones";
$proto35["m_columns"][] = "Identificacion";
$proto35["m_columns"][] = "Tesoreria Pagadora";
$proto35["m_columns"][] = "Identificacion Pagaduria";
$proto35["m_columns"][] = "Obligaciones";
$proto35["m_columns"][] = "Tipo Doc Soporte Compromiso";
$proto35["m_columns"][] = "Num Doc Soporte Compromiso";
$proto35["m_columns"][] = "Objeto del Compromiso";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "q_info_ordenpago";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "q_info_ordenpago";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_info_ordenpago";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_info_ordenpago = createSqlQuery_q_info_ordenpago();


	
										;

														

$tdataq_info_ordenpago[".sqlquery"] = $queryData_q_info_ordenpago;

$tableEvents["q_info_ordenpago"] = new eventsBase;
$tdataq_info_ordenpago[".hasEvents"] = false;

?>