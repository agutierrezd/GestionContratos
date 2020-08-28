<?php



$tdatapolizas_master = array();
$tdatapolizas_master[".searchableFields"] = array();
$tdatapolizas_master[".ShortName"] = "polizas_master";
$tdatapolizas_master[".OwnerID"] = "";
$tdatapolizas_master[".OriginalTable"] = "polizas_master";


$tdatapolizas_master[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapolizas_master[".originalPagesByType"] = $tdatapolizas_master[".pagesByType"];
$tdatapolizas_master[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapolizas_master[".originalPages"] = $tdatapolizas_master[".pages"];
$tdatapolizas_master[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapolizas_master[".originalDefaultPages"] = $tdatapolizas_master[".defaultPages"];

//	field labels
$fieldLabelspolizas_master = array();
$fieldToolTipspolizas_master = array();
$pageTitlespolizas_master = array();
$placeHolderspolizas_master = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspolizas_master["Spanish"] = array();
	$fieldToolTipspolizas_master["Spanish"] = array();
	$placeHolderspolizas_master["Spanish"] = array();
	$pageTitlespolizas_master["Spanish"] = array();
	$fieldLabelspolizas_master["Spanish"]["poliza_id"] = "Poliza Id";
	$fieldToolTipspolizas_master["Spanish"]["poliza_id"] = "";
	$placeHolderspolizas_master["Spanish"]["poliza_id"] = "";
	$fieldLabelspolizas_master["Spanish"]["id_cont_fk"] = "Número interno";
	$fieldToolTipspolizas_master["Spanish"]["id_cont_fk"] = "";
	$placeHolderspolizas_master["Spanish"]["id_cont_fk"] = "";
	$fieldLabelspolizas_master["Spanish"]["id_att_fk"] = "Documento soporte";
	$fieldToolTipspolizas_master["Spanish"]["id_att_fk"] = "";
	$placeHolderspolizas_master["Spanish"]["id_att_fk"] = "";
	$fieldLabelspolizas_master["Spanish"]["poli_numero"] = "Número de póliza";
	$fieldToolTipspolizas_master["Spanish"]["poli_numero"] = "";
	$placeHolderspolizas_master["Spanish"]["poli_numero"] = "";
	$fieldLabelspolizas_master["Spanish"]["poli_compania"] = "Aseguradora";
	$fieldToolTipspolizas_master["Spanish"]["poli_compania"] = "";
	$placeHolderspolizas_master["Spanish"]["poli_compania"] = "";
	$fieldLabelspolizas_master["Spanish"]["poli_fechaexpedicion"] = "Fecha de Expedición";
	$fieldToolTipspolizas_master["Spanish"]["poli_fechaexpedicion"] = "";
	$placeHolderspolizas_master["Spanish"]["poli_fechaexpedicion"] = "";
	$fieldLabelspolizas_master["Spanish"]["poli_codamparo"] = "Amparo";
	$fieldToolTipspolizas_master["Spanish"]["poli_codamparo"] = "";
	$placeHolderspolizas_master["Spanish"]["poli_codamparo"] = "";
	$fieldLabelspolizas_master["Spanish"]["poli_fechaaprobacion"] = "Fecha de aprobación";
	$fieldToolTipspolizas_master["Spanish"]["poli_fechaaprobacion"] = "";
	$placeHolderspolizas_master["Spanish"]["poli_fechaaprobacion"] = "";
	$fieldLabelspolizas_master["Spanish"]["poli_porcentaje"] = "Porcentaje";
	$fieldToolTipspolizas_master["Spanish"]["poli_porcentaje"] = "";
	$placeHolderspolizas_master["Spanish"]["poli_porcentaje"] = "";
	$fieldLabelspolizas_master["Spanish"]["poli_valor"] = "Valor";
	$fieldToolTipspolizas_master["Spanish"]["poli_valor"] = "";
	$placeHolderspolizas_master["Spanish"]["poli_valor"] = "";
	$fieldLabelspolizas_master["Spanish"]["poli_vigenciadesde"] = "Vigente desde";
	$fieldToolTipspolizas_master["Spanish"]["poli_vigenciadesde"] = "";
	$placeHolderspolizas_master["Spanish"]["poli_vigenciadesde"] = "";
	$fieldLabelspolizas_master["Spanish"]["poli_vigenciahasta"] = "Vigente hasta";
	$fieldToolTipspolizas_master["Spanish"]["poli_vigenciahasta"] = "";
	$placeHolderspolizas_master["Spanish"]["poli_vigenciahasta"] = "";
	$fieldLabelspolizas_master["Spanish"]["sys_user"] = "Registrado por";
	$fieldToolTipspolizas_master["Spanish"]["sys_user"] = "";
	$placeHolderspolizas_master["Spanish"]["sys_user"] = "";
	$fieldLabelspolizas_master["Spanish"]["sys_time"] = "Fecha registro en sistema";
	$fieldToolTipspolizas_master["Spanish"]["sys_time"] = "";
	$placeHolderspolizas_master["Spanish"]["sys_time"] = "";
	if (count($fieldToolTipspolizas_master["Spanish"]))
		$tdatapolizas_master[".isUseToolTips"] = true;
}


	$tdatapolizas_master[".NCSearch"] = true;



$tdatapolizas_master[".shortTableName"] = "polizas_master";
$tdatapolizas_master[".nSecOptions"] = 0;

$tdatapolizas_master[".mainTableOwnerID"] = "";
$tdatapolizas_master[".entityType"] = 0;

$tdatapolizas_master[".strOriginalTableName"] = "polizas_master";

	



$tdatapolizas_master[".showAddInPopup"] = false;

$tdatapolizas_master[".showEditInPopup"] = false;

$tdatapolizas_master[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapolizas_master[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapolizas_master[".listAjax"] = false;
//	temporary
$tdatapolizas_master[".listAjax"] = false;

	$tdatapolizas_master[".audit"] = true;

	$tdatapolizas_master[".locking"] = true;


$pages = $tdatapolizas_master[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapolizas_master[".edit"] = true;
	$tdatapolizas_master[".afterEditAction"] = 1;
	$tdatapolizas_master[".closePopupAfterEdit"] = 1;
	$tdatapolizas_master[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapolizas_master[".add"] = true;
$tdatapolizas_master[".afterAddAction"] = 1;
$tdatapolizas_master[".closePopupAfterAdd"] = 1;
$tdatapolizas_master[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapolizas_master[".list"] = true;
}



$tdatapolizas_master[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapolizas_master[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapolizas_master[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapolizas_master[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapolizas_master[".printFriendly"] = true;
}



$tdatapolizas_master[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapolizas_master[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapolizas_master[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapolizas_master[".isUseAjaxSuggest"] = true;

$tdatapolizas_master[".rowHighlite"] = true;



												

$tdatapolizas_master[".ajaxCodeSnippetAdded"] = false;

$tdatapolizas_master[".buttonsAdded"] = false;

$tdatapolizas_master[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapolizas_master[".isUseTimeForSearch"] = false;


$tdatapolizas_master[".badgeColor"] = "DC143C";


$tdatapolizas_master[".allSearchFields"] = array();
$tdatapolizas_master[".filterFields"] = array();
$tdatapolizas_master[".requiredSearchFields"] = array();

$tdatapolizas_master[".googleLikeFields"] = array();
$tdatapolizas_master[".googleLikeFields"][] = "poliza_id";
$tdatapolizas_master[".googleLikeFields"][] = "id_cont_fk";
$tdatapolizas_master[".googleLikeFields"][] = "id_att_fk";
$tdatapolizas_master[".googleLikeFields"][] = "poli_numero";
$tdatapolizas_master[".googleLikeFields"][] = "poli_compania";
$tdatapolizas_master[".googleLikeFields"][] = "poli_fechaexpedicion";
$tdatapolizas_master[".googleLikeFields"][] = "poli_codamparo";
$tdatapolizas_master[".googleLikeFields"][] = "poli_fechaaprobacion";
$tdatapolizas_master[".googleLikeFields"][] = "poli_porcentaje";
$tdatapolizas_master[".googleLikeFields"][] = "poli_valor";
$tdatapolizas_master[".googleLikeFields"][] = "poli_vigenciadesde";
$tdatapolizas_master[".googleLikeFields"][] = "poli_vigenciahasta";
$tdatapolizas_master[".googleLikeFields"][] = "sys_user";
$tdatapolizas_master[".googleLikeFields"][] = "sys_time";



$tdatapolizas_master[".tableType"] = "list";

$tdatapolizas_master[".printerPageOrientation"] = 0;
$tdatapolizas_master[".nPrinterPageScale"] = 100;

$tdatapolizas_master[".nPrinterSplitRecords"] = 40;

$tdatapolizas_master[".geocodingEnabled"] = false;










$tdatapolizas_master[".pageSize"] = 20;

$tdatapolizas_master[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapolizas_master[".strOrderBy"] = $tstrOrderBy;

$tdatapolizas_master[".orderindexes"] = array();

$tdatapolizas_master[".sqlHead"] = "SELECT poliza_id,  id_cont_fk,  id_att_fk,  poli_numero,  poli_compania,  poli_fechaexpedicion,  poli_codamparo,  poli_fechaaprobacion,  poli_porcentaje,  poli_valor,  poli_vigenciadesde,  poli_vigenciahasta,  sys_user,  sys_time";
$tdatapolizas_master[".sqlFrom"] = "FROM polizas_master";
$tdatapolizas_master[".sqlWhereExpr"] = "";
$tdatapolizas_master[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapolizas_master[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapolizas_master[".arrGroupsPerPage"] = $arrGPP;

$tdatapolizas_master[".highlightSearchResults"] = true;

$tableKeyspolizas_master = array();
$tableKeyspolizas_master[] = "poliza_id";
$tdatapolizas_master[".Keys"] = $tableKeyspolizas_master;


$tdatapolizas_master[".hideMobileList"] = array();




//	poliza_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "poliza_id";
	$fdata["GoodName"] = "poliza_id";
	$fdata["ownerTable"] = "polizas_master";
	$fdata["Label"] = GetFieldLabel("polizas_master","poliza_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "poliza_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "poliza_id";

	
	
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


	$tdatapolizas_master["poliza_id"] = $fdata;
		$tdatapolizas_master[".searchableFields"][] = "poliza_id";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "polizas_master";
	$fdata["Label"] = GetFieldLabel("polizas_master","id_cont_fk");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contrato";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_cont";

	

	
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


	$tdatapolizas_master["id_cont_fk"] = $fdata;
		$tdatapolizas_master[".searchableFields"][] = "id_cont_fk";
//	id_att_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_att_fk";
	$fdata["GoodName"] = "id_att_fk";
	$fdata["ownerTable"] = "polizas_master";
	$fdata["Label"] = GetFieldLabel("polizas_master","id_att_fk");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_att_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_att_fk";

	
	
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
	$edata["LookupTable"] = "contrato_attached";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_att";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_att";

				$edata["LookupWhereCode"] = true;


	
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


	$tdatapolizas_master["id_att_fk"] = $fdata;
		$tdatapolizas_master[".searchableFields"][] = "id_att_fk";
//	poli_numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "poli_numero";
	$fdata["GoodName"] = "poli_numero";
	$fdata["ownerTable"] = "polizas_master";
	$fdata["Label"] = GetFieldLabel("polizas_master","poli_numero");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "poli_numero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "poli_numero";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatapolizas_master["poli_numero"] = $fdata;
		$tdatapolizas_master[".searchableFields"][] = "poli_numero";
//	poli_compania
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "poli_compania";
	$fdata["GoodName"] = "poli_compania";
	$fdata["ownerTable"] = "polizas_master";
	$fdata["Label"] = GetFieldLabel("polizas_master","poli_compania");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "poli_compania";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "poli_compania";

	
	
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
	$edata["LookupTable"] = "polizas_aseguradoras";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "aseguradora_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nom_aseguradora";

	

	
	$edata["LookupOrderBy"] = "nom_aseguradora";

	
	
	
	

	
	
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


	$tdatapolizas_master["poli_compania"] = $fdata;
		$tdatapolizas_master[".searchableFields"][] = "poli_compania";
//	poli_fechaexpedicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "poli_fechaexpedicion";
	$fdata["GoodName"] = "poli_fechaexpedicion";
	$fdata["ownerTable"] = "polizas_master";
	$fdata["Label"] = GetFieldLabel("polizas_master","poli_fechaexpedicion");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "poli_fechaexpedicion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "poli_fechaexpedicion";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatapolizas_master["poli_fechaexpedicion"] = $fdata;
		$tdatapolizas_master[".searchableFields"][] = "poli_fechaexpedicion";
//	poli_codamparo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "poli_codamparo";
	$fdata["GoodName"] = "poli_codamparo";
	$fdata["ownerTable"] = "polizas_master";
	$fdata["Label"] = GetFieldLabel("polizas_master","poli_codamparo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "poli_codamparo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "poli_codamparo";

	
	
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
	$edata["LookupTable"] = "polizas_tipo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "poliza_type_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "poliza_type_name";

	

	
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


	$tdatapolizas_master["poli_codamparo"] = $fdata;
		$tdatapolizas_master[".searchableFields"][] = "poli_codamparo";
//	poli_fechaaprobacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "poli_fechaaprobacion";
	$fdata["GoodName"] = "poli_fechaaprobacion";
	$fdata["ownerTable"] = "polizas_master";
	$fdata["Label"] = GetFieldLabel("polizas_master","poli_fechaaprobacion");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "poli_fechaaprobacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "poli_fechaaprobacion";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatapolizas_master["poli_fechaaprobacion"] = $fdata;
		$tdatapolizas_master[".searchableFields"][] = "poli_fechaaprobacion";
//	poli_porcentaje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "poli_porcentaje";
	$fdata["GoodName"] = "poli_porcentaje";
	$fdata["ownerTable"] = "polizas_master";
	$fdata["Label"] = GetFieldLabel("polizas_master","poli_porcentaje");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "poli_porcentaje";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "poli_porcentaje";

	
	
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


	$tdatapolizas_master["poli_porcentaje"] = $fdata;
		$tdatapolizas_master[".searchableFields"][] = "poli_porcentaje";
//	poli_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "poli_valor";
	$fdata["GoodName"] = "poli_valor";
	$fdata["ownerTable"] = "polizas_master";
	$fdata["Label"] = GetFieldLabel("polizas_master","poli_valor");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "poli_valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "poli_valor";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
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


	$tdatapolizas_master["poli_valor"] = $fdata;
		$tdatapolizas_master[".searchableFields"][] = "poli_valor";
//	poli_vigenciadesde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "poli_vigenciadesde";
	$fdata["GoodName"] = "poli_vigenciadesde";
	$fdata["ownerTable"] = "polizas_master";
	$fdata["Label"] = GetFieldLabel("polizas_master","poli_vigenciadesde");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "poli_vigenciadesde";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "poli_vigenciadesde";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 20;

	
	
	
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


	$tdatapolizas_master["poli_vigenciadesde"] = $fdata;
		$tdatapolizas_master[".searchableFields"][] = "poli_vigenciadesde";
//	poli_vigenciahasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "poli_vigenciahasta";
	$fdata["GoodName"] = "poli_vigenciahasta";
	$fdata["ownerTable"] = "polizas_master";
	$fdata["Label"] = GetFieldLabel("polizas_master","poli_vigenciahasta");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "poli_vigenciahasta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "poli_vigenciahasta";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 20;

	
	
	
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


	$tdatapolizas_master["poli_vigenciahasta"] = $fdata;
		$tdatapolizas_master[".searchableFields"][] = "poli_vigenciahasta";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "polizas_master";
	$fdata["Label"] = GetFieldLabel("polizas_master","sys_user");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sys_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

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


	$tdatapolizas_master["sys_user"] = $fdata;
		$tdatapolizas_master[".searchableFields"][] = "sys_user";
//	sys_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sys_time";
	$fdata["GoodName"] = "sys_time";
	$fdata["ownerTable"] = "polizas_master";
	$fdata["Label"] = GetFieldLabel("polizas_master","sys_time");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "sys_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

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


	$tdatapolizas_master["sys_time"] = $fdata;
		$tdatapolizas_master[".searchableFields"][] = "sys_time";


$tables_data["polizas_master"]=&$tdatapolizas_master;
$field_labels["polizas_master"] = &$fieldLabelspolizas_master;
$fieldToolTips["polizas_master"] = &$fieldToolTipspolizas_master;
$placeHolders["polizas_master"] = &$placeHolderspolizas_master;
$page_titles["polizas_master"] = &$pageTitlespolizas_master;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["polizas_master"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["polizas_master"] = array();



	
				$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["polizas_master"][0] = $masterParams;
				$masterTablesData["polizas_master"][0]["masterKeys"] = array();
	$masterTablesData["polizas_master"][0]["masterKeys"][]="id_cont";
				$masterTablesData["polizas_master"][0]["detailKeys"] = array();
	$masterTablesData["polizas_master"][0]["detailKeys"][]="id_cont_fk";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_polizas_master()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "poliza_id,  id_cont_fk,  id_att_fk,  poli_numero,  poli_compania,  poli_fechaexpedicion,  poli_codamparo,  poli_fechaaprobacion,  poli_porcentaje,  poli_valor,  poli_vigenciadesde,  poli_vigenciahasta,  sys_user,  sys_time";
$proto0["m_strFrom"] = "FROM polizas_master";
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
	"m_strName" => "poliza_id",
	"m_strTable" => "polizas_master",
	"m_srcTableName" => "polizas_master"
));

$proto6["m_sql"] = "poliza_id";
$proto6["m_srcTableName"] = "polizas_master";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "polizas_master",
	"m_srcTableName" => "polizas_master"
));

$proto8["m_sql"] = "id_cont_fk";
$proto8["m_srcTableName"] = "polizas_master";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_att_fk",
	"m_strTable" => "polizas_master",
	"m_srcTableName" => "polizas_master"
));

$proto10["m_sql"] = "id_att_fk";
$proto10["m_srcTableName"] = "polizas_master";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "poli_numero",
	"m_strTable" => "polizas_master",
	"m_srcTableName" => "polizas_master"
));

$proto12["m_sql"] = "poli_numero";
$proto12["m_srcTableName"] = "polizas_master";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "poli_compania",
	"m_strTable" => "polizas_master",
	"m_srcTableName" => "polizas_master"
));

$proto14["m_sql"] = "poli_compania";
$proto14["m_srcTableName"] = "polizas_master";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "poli_fechaexpedicion",
	"m_strTable" => "polizas_master",
	"m_srcTableName" => "polizas_master"
));

$proto16["m_sql"] = "poli_fechaexpedicion";
$proto16["m_srcTableName"] = "polizas_master";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "poli_codamparo",
	"m_strTable" => "polizas_master",
	"m_srcTableName" => "polizas_master"
));

$proto18["m_sql"] = "poli_codamparo";
$proto18["m_srcTableName"] = "polizas_master";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "poli_fechaaprobacion",
	"m_strTable" => "polizas_master",
	"m_srcTableName" => "polizas_master"
));

$proto20["m_sql"] = "poli_fechaaprobacion";
$proto20["m_srcTableName"] = "polizas_master";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "poli_porcentaje",
	"m_strTable" => "polizas_master",
	"m_srcTableName" => "polizas_master"
));

$proto22["m_sql"] = "poli_porcentaje";
$proto22["m_srcTableName"] = "polizas_master";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "poli_valor",
	"m_strTable" => "polizas_master",
	"m_srcTableName" => "polizas_master"
));

$proto24["m_sql"] = "poli_valor";
$proto24["m_srcTableName"] = "polizas_master";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "poli_vigenciadesde",
	"m_strTable" => "polizas_master",
	"m_srcTableName" => "polizas_master"
));

$proto26["m_sql"] = "poli_vigenciadesde";
$proto26["m_srcTableName"] = "polizas_master";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "poli_vigenciahasta",
	"m_strTable" => "polizas_master",
	"m_srcTableName" => "polizas_master"
));

$proto28["m_sql"] = "poli_vigenciahasta";
$proto28["m_srcTableName"] = "polizas_master";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "polizas_master",
	"m_srcTableName" => "polizas_master"
));

$proto30["m_sql"] = "sys_user";
$proto30["m_srcTableName"] = "polizas_master";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_time",
	"m_strTable" => "polizas_master",
	"m_srcTableName" => "polizas_master"
));

$proto32["m_sql"] = "sys_time";
$proto32["m_srcTableName"] = "polizas_master";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "polizas_master";
$proto35["m_srcTableName"] = "polizas_master";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "poliza_id";
$proto35["m_columns"][] = "id_cont_fk";
$proto35["m_columns"][] = "id_att_fk";
$proto35["m_columns"][] = "poli_numero";
$proto35["m_columns"][] = "poli_compania";
$proto35["m_columns"][] = "poli_fechaexpedicion";
$proto35["m_columns"][] = "poli_codamparo";
$proto35["m_columns"][] = "poli_fechaaprobacion";
$proto35["m_columns"][] = "poli_porcentaje";
$proto35["m_columns"][] = "poli_valor";
$proto35["m_columns"][] = "poli_vigenciadesde";
$proto35["m_columns"][] = "poli_vigenciahasta";
$proto35["m_columns"][] = "sys_user";
$proto35["m_columns"][] = "sys_date";
$proto35["m_columns"][] = "sys_time";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "polizas_master";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "polizas_master";
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
$proto0["m_srcTableName"]="polizas_master";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_polizas_master = createSqlQuery_polizas_master();


	
										;

														

$tdatapolizas_master[".sqlquery"] = $queryData_polizas_master;

$tableEvents["polizas_master"] = new eventsBase;
$tdatapolizas_master[".hasEvents"] = false;

?>