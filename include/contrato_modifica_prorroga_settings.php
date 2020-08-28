<?php



$tdatacontrato_modifica_prorroga = array();
$tdatacontrato_modifica_prorroga[".searchableFields"] = array();
$tdatacontrato_modifica_prorroga[".ShortName"] = "contrato_modifica_prorroga";
$tdatacontrato_modifica_prorroga[".OwnerID"] = "";
$tdatacontrato_modifica_prorroga[".OriginalTable"] = "contrato_modifica";


$tdatacontrato_modifica_prorroga[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_modifica_prorroga[".originalPagesByType"] = $tdatacontrato_modifica_prorroga[".pagesByType"];
$tdatacontrato_modifica_prorroga[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_modifica_prorroga[".originalPages"] = $tdatacontrato_modifica_prorroga[".pages"];
$tdatacontrato_modifica_prorroga[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_modifica_prorroga[".originalDefaultPages"] = $tdatacontrato_modifica_prorroga[".defaultPages"];

//	field labels
$fieldLabelscontrato_modifica_prorroga = array();
$fieldToolTipscontrato_modifica_prorroga = array();
$pageTitlescontrato_modifica_prorroga = array();
$placeHolderscontrato_modifica_prorroga = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_modifica_prorroga["Spanish"] = array();
	$fieldToolTipscontrato_modifica_prorroga["Spanish"] = array();
	$placeHolderscontrato_modifica_prorroga["Spanish"] = array();
	$pageTitlescontrato_modifica_prorroga["Spanish"] = array();
	$fieldLabelscontrato_modifica_prorroga["Spanish"]["mod_id"] = "Mod Id";
	$fieldToolTipscontrato_modifica_prorroga["Spanish"]["mod_id"] = "";
	$placeHolderscontrato_modifica_prorroga["Spanish"]["mod_id"] = "";
	$fieldLabelscontrato_modifica_prorroga["Spanish"]["id_cont_fk"] = "Id Cont Fk";
	$fieldToolTipscontrato_modifica_prorroga["Spanish"]["id_cont_fk"] = "";
	$placeHolderscontrato_modifica_prorroga["Spanish"]["id_cont_fk"] = "";
	$fieldLabelscontrato_modifica_prorroga["Spanish"]["mod_tipo"] = "Tipo de modificación";
	$fieldToolTipscontrato_modifica_prorroga["Spanish"]["mod_tipo"] = "";
	$placeHolderscontrato_modifica_prorroga["Spanish"]["mod_tipo"] = "";
	$fieldLabelscontrato_modifica_prorroga["Spanish"]["mod_fecha_suscripcion"] = "Fecha Suscripcion";
	$fieldToolTipscontrato_modifica_prorroga["Spanish"]["mod_fecha_suscripcion"] = "";
	$placeHolderscontrato_modifica_prorroga["Spanish"]["mod_fecha_suscripcion"] = "";
	$fieldLabelscontrato_modifica_prorroga["Spanish"]["mod_fecha_ini"] = "Fecha inicial";
	$fieldToolTipscontrato_modifica_prorroga["Spanish"]["mod_fecha_ini"] = "";
	$placeHolderscontrato_modifica_prorroga["Spanish"]["mod_fecha_ini"] = "";
	$fieldLabelscontrato_modifica_prorroga["Spanish"]["mod_fecha_fin"] = "Fecha final";
	$fieldToolTipscontrato_modifica_prorroga["Spanish"]["mod_fecha_fin"] = "";
	$placeHolderscontrato_modifica_prorroga["Spanish"]["mod_fecha_fin"] = "";
	$fieldLabelscontrato_modifica_prorroga["Spanish"]["mod_observ"] = "Observaciones";
	$fieldToolTipscontrato_modifica_prorroga["Spanish"]["mod_observ"] = "";
	$placeHolderscontrato_modifica_prorroga["Spanish"]["mod_observ"] = "";
	$fieldLabelscontrato_modifica_prorroga["Spanish"]["mod_valor"] = "Valor";
	$fieldToolTipscontrato_modifica_prorroga["Spanish"]["mod_valor"] = "";
	$placeHolderscontrato_modifica_prorroga["Spanish"]["mod_valor"] = "";
	$fieldLabelscontrato_modifica_prorroga["Spanish"]["sys_user"] = "Registrado por";
	$fieldToolTipscontrato_modifica_prorroga["Spanish"]["sys_user"] = "";
	$placeHolderscontrato_modifica_prorroga["Spanish"]["sys_user"] = "";
	$fieldLabelscontrato_modifica_prorroga["Spanish"]["sys_date"] = "Fecha";
	$fieldToolTipscontrato_modifica_prorroga["Spanish"]["sys_date"] = "";
	$placeHolderscontrato_modifica_prorroga["Spanish"]["sys_date"] = "";
	if (count($fieldToolTipscontrato_modifica_prorroga["Spanish"]))
		$tdatacontrato_modifica_prorroga[".isUseToolTips"] = true;
}


	$tdatacontrato_modifica_prorroga[".NCSearch"] = true;



$tdatacontrato_modifica_prorroga[".shortTableName"] = "contrato_modifica_prorroga";
$tdatacontrato_modifica_prorroga[".nSecOptions"] = 0;

$tdatacontrato_modifica_prorroga[".mainTableOwnerID"] = "";
$tdatacontrato_modifica_prorroga[".entityType"] = 1;

$tdatacontrato_modifica_prorroga[".strOriginalTableName"] = "contrato_modifica";

	



$tdatacontrato_modifica_prorroga[".showAddInPopup"] = false;

$tdatacontrato_modifica_prorroga[".showEditInPopup"] = false;

$tdatacontrato_modifica_prorroga[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrato_modifica_prorroga[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrato_modifica_prorroga[".listAjax"] = false;
//	temporary
$tdatacontrato_modifica_prorroga[".listAjax"] = false;

	$tdatacontrato_modifica_prorroga[".audit"] = true;

	$tdatacontrato_modifica_prorroga[".locking"] = true;


$pages = $tdatacontrato_modifica_prorroga[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_modifica_prorroga[".edit"] = true;
	$tdatacontrato_modifica_prorroga[".afterEditAction"] = 1;
	$tdatacontrato_modifica_prorroga[".closePopupAfterEdit"] = 1;
	$tdatacontrato_modifica_prorroga[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_modifica_prorroga[".add"] = true;
$tdatacontrato_modifica_prorroga[".afterAddAction"] = 1;
$tdatacontrato_modifica_prorroga[".closePopupAfterAdd"] = 1;
$tdatacontrato_modifica_prorroga[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_modifica_prorroga[".list"] = true;
}



$tdatacontrato_modifica_prorroga[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_modifica_prorroga[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_modifica_prorroga[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_modifica_prorroga[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_modifica_prorroga[".printFriendly"] = true;
}



$tdatacontrato_modifica_prorroga[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_modifica_prorroga[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_modifica_prorroga[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_modifica_prorroga[".isUseAjaxSuggest"] = true;

$tdatacontrato_modifica_prorroga[".rowHighlite"] = true;



																		

$tdatacontrato_modifica_prorroga[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_modifica_prorroga[".buttonsAdded"] = false;

$tdatacontrato_modifica_prorroga[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_modifica_prorroga[".isUseTimeForSearch"] = false;


$tdatacontrato_modifica_prorroga[".badgeColor"] = "9acd32";


$tdatacontrato_modifica_prorroga[".allSearchFields"] = array();
$tdatacontrato_modifica_prorroga[".filterFields"] = array();
$tdatacontrato_modifica_prorroga[".requiredSearchFields"] = array();

$tdatacontrato_modifica_prorroga[".googleLikeFields"] = array();
$tdatacontrato_modifica_prorroga[".googleLikeFields"][] = "mod_id";
$tdatacontrato_modifica_prorroga[".googleLikeFields"][] = "id_cont_fk";
$tdatacontrato_modifica_prorroga[".googleLikeFields"][] = "mod_tipo";
$tdatacontrato_modifica_prorroga[".googleLikeFields"][] = "mod_fecha_suscripcion";
$tdatacontrato_modifica_prorroga[".googleLikeFields"][] = "mod_fecha_ini";
$tdatacontrato_modifica_prorroga[".googleLikeFields"][] = "mod_fecha_fin";
$tdatacontrato_modifica_prorroga[".googleLikeFields"][] = "mod_observ";
$tdatacontrato_modifica_prorroga[".googleLikeFields"][] = "mod_valor";
$tdatacontrato_modifica_prorroga[".googleLikeFields"][] = "sys_user";
$tdatacontrato_modifica_prorroga[".googleLikeFields"][] = "sys_date";



$tdatacontrato_modifica_prorroga[".tableType"] = "list";

$tdatacontrato_modifica_prorroga[".printerPageOrientation"] = 0;
$tdatacontrato_modifica_prorroga[".nPrinterPageScale"] = 100;

$tdatacontrato_modifica_prorroga[".nPrinterSplitRecords"] = 40;

$tdatacontrato_modifica_prorroga[".geocodingEnabled"] = false;










$tdatacontrato_modifica_prorroga[".pageSize"] = 20;

$tdatacontrato_modifica_prorroga[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrato_modifica_prorroga[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_modifica_prorroga[".orderindexes"] = array();

$tdatacontrato_modifica_prorroga[".sqlHead"] = "SELECT mod_id,  id_cont_fk,  mod_tipo,  mod_fecha_suscripcion,  mod_fecha_ini,  mod_fecha_fin,  mod_observ,  mod_valor,  sys_user,  sys_date";
$tdatacontrato_modifica_prorroga[".sqlFrom"] = "FROM contrato_modifica";
$tdatacontrato_modifica_prorroga[".sqlWhereExpr"] = "(mod_tipo = 3)";
$tdatacontrato_modifica_prorroga[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_modifica_prorroga[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_modifica_prorroga[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_modifica_prorroga[".highlightSearchResults"] = true;

$tableKeyscontrato_modifica_prorroga = array();
$tableKeyscontrato_modifica_prorroga[] = "mod_id";
$tdatacontrato_modifica_prorroga[".Keys"] = $tableKeyscontrato_modifica_prorroga;


$tdatacontrato_modifica_prorroga[".hideMobileList"] = array();




//	mod_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "mod_id";
	$fdata["GoodName"] = "mod_id";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_prorroga","mod_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "mod_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_id";

	
	
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


	$tdatacontrato_modifica_prorroga["mod_id"] = $fdata;
		$tdatacontrato_modifica_prorroga[".searchableFields"][] = "mod_id";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_prorroga","id_cont_fk");
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


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatacontrato_modifica_prorroga["id_cont_fk"] = $fdata;
		$tdatacontrato_modifica_prorroga[".searchableFields"][] = "id_cont_fk";
//	mod_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mod_tipo";
	$fdata["GoodName"] = "mod_tipo";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_prorroga","mod_tipo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "mod_tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_tipo";

	
	
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
	$edata["LookupTable"] = "contrato_modifica_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "modt_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "modt_name";

				$edata["LookupWhereCode"] = true;


	
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
		
		$edata["autoUpdatable"] = true;

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


	$tdatacontrato_modifica_prorroga["mod_tipo"] = $fdata;
		$tdatacontrato_modifica_prorroga[".searchableFields"][] = "mod_tipo";
//	mod_fecha_suscripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mod_fecha_suscripcion";
	$fdata["GoodName"] = "mod_fecha_suscripcion";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_prorroga","mod_fecha_suscripcion");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "mod_fecha_suscripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_fecha_suscripcion";

	
	
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


	$tdatacontrato_modifica_prorroga["mod_fecha_suscripcion"] = $fdata;
		$tdatacontrato_modifica_prorroga[".searchableFields"][] = "mod_fecha_suscripcion";
//	mod_fecha_ini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mod_fecha_ini";
	$fdata["GoodName"] = "mod_fecha_ini";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_prorroga","mod_fecha_ini");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "mod_fecha_ini";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_fecha_ini";

	
	
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


	$tdatacontrato_modifica_prorroga["mod_fecha_ini"] = $fdata;
		$tdatacontrato_modifica_prorroga[".searchableFields"][] = "mod_fecha_ini";
//	mod_fecha_fin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mod_fecha_fin";
	$fdata["GoodName"] = "mod_fecha_fin";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_prorroga","mod_fecha_fin");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "mod_fecha_fin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_fecha_fin";

	
	
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


	$tdatacontrato_modifica_prorroga["mod_fecha_fin"] = $fdata;
		$tdatacontrato_modifica_prorroga[".searchableFields"][] = "mod_fecha_fin";
//	mod_observ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "mod_observ";
	$fdata["GoodName"] = "mod_observ";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_prorroga","mod_observ");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mod_observ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_observ";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatacontrato_modifica_prorroga["mod_observ"] = $fdata;
		$tdatacontrato_modifica_prorroga[".searchableFields"][] = "mod_observ";
//	mod_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mod_valor";
	$fdata["GoodName"] = "mod_valor";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_prorroga","mod_valor");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "mod_valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_valor";

	
	
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


	$tdatacontrato_modifica_prorroga["mod_valor"] = $fdata;
		$tdatacontrato_modifica_prorroga[".searchableFields"][] = "mod_valor";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_prorroga","sys_user");
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


	$tdatacontrato_modifica_prorroga["sys_user"] = $fdata;
		$tdatacontrato_modifica_prorroga[".searchableFields"][] = "sys_user";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_prorroga","sys_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "sys_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_date";

	
	
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


	$tdatacontrato_modifica_prorroga["sys_date"] = $fdata;
		$tdatacontrato_modifica_prorroga[".searchableFields"][] = "sys_date";


$tables_data["contrato_modifica_prorroga"]=&$tdatacontrato_modifica_prorroga;
$field_labels["contrato_modifica_prorroga"] = &$fieldLabelscontrato_modifica_prorroga;
$fieldToolTips["contrato_modifica_prorroga"] = &$fieldToolTipscontrato_modifica_prorroga;
$placeHolders["contrato_modifica_prorroga"] = &$placeHolderscontrato_modifica_prorroga;
$page_titles["contrato_modifica_prorroga"] = &$pageTitlescontrato_modifica_prorroga;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contrato_modifica_prorroga"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["contrato_modifica_prorroga"] = array();



	
				$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_modifica_prorroga"][0] = $masterParams;
				$masterTablesData["contrato_modifica_prorroga"][0]["masterKeys"] = array();
	$masterTablesData["contrato_modifica_prorroga"][0]["masterKeys"][]="id_cont";
				$masterTablesData["contrato_modifica_prorroga"][0]["detailKeys"] = array();
	$masterTablesData["contrato_modifica_prorroga"][0]["detailKeys"][]="id_cont_fk";
		
	
				$strOriginalDetailsTable="contrato_modifica_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato_modifica_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato_modifica_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_modifica_prorroga"][1] = $masterParams;
				$masterTablesData["contrato_modifica_prorroga"][1]["masterKeys"] = array();
	$masterTablesData["contrato_modifica_prorroga"][1]["masterKeys"][]="modt_id";
				$masterTablesData["contrato_modifica_prorroga"][1]["detailKeys"] = array();
	$masterTablesData["contrato_modifica_prorroga"][1]["detailKeys"][]="mod_tipo";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_contrato_modifica_prorroga()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "mod_id,  id_cont_fk,  mod_tipo,  mod_fecha_suscripcion,  mod_fecha_ini,  mod_fecha_fin,  mod_observ,  mod_valor,  sys_user,  sys_date";
$proto0["m_strFrom"] = "FROM contrato_modifica";
$proto0["m_strWhere"] = "(mod_tipo = 3)";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "mod_tipo = 3";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "mod_tipo",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_prorroga"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 3";
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
	"m_strName" => "mod_id",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_prorroga"
));

$proto6["m_sql"] = "mod_id";
$proto6["m_srcTableName"] = "contrato_modifica_prorroga";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_prorroga"
));

$proto8["m_sql"] = "id_cont_fk";
$proto8["m_srcTableName"] = "contrato_modifica_prorroga";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_tipo",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_prorroga"
));

$proto10["m_sql"] = "mod_tipo";
$proto10["m_srcTableName"] = "contrato_modifica_prorroga";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_fecha_suscripcion",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_prorroga"
));

$proto12["m_sql"] = "mod_fecha_suscripcion";
$proto12["m_srcTableName"] = "contrato_modifica_prorroga";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_fecha_ini",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_prorroga"
));

$proto14["m_sql"] = "mod_fecha_ini";
$proto14["m_srcTableName"] = "contrato_modifica_prorroga";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_fecha_fin",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_prorroga"
));

$proto16["m_sql"] = "mod_fecha_fin";
$proto16["m_srcTableName"] = "contrato_modifica_prorroga";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_observ",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_prorroga"
));

$proto18["m_sql"] = "mod_observ";
$proto18["m_srcTableName"] = "contrato_modifica_prorroga";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_valor",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_prorroga"
));

$proto20["m_sql"] = "mod_valor";
$proto20["m_srcTableName"] = "contrato_modifica_prorroga";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_prorroga"
));

$proto22["m_sql"] = "sys_user";
$proto22["m_srcTableName"] = "contrato_modifica_prorroga";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_prorroga"
));

$proto24["m_sql"] = "sys_date";
$proto24["m_srcTableName"] = "contrato_modifica_prorroga";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "contrato_modifica";
$proto27["m_srcTableName"] = "contrato_modifica_prorroga";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "mod_id";
$proto27["m_columns"][] = "id_cont_fk";
$proto27["m_columns"][] = "mod_tipo";
$proto27["m_columns"][] = "mod_fecha_suscripcion";
$proto27["m_columns"][] = "mod_fecha_ini";
$proto27["m_columns"][] = "mod_fecha_fin";
$proto27["m_columns"][] = "mod_observ";
$proto27["m_columns"][] = "mod_valor";
$proto27["m_columns"][] = "mod_cedente";
$proto27["m_columns"][] = "mod_decente_cedula";
$proto27["m_columns"][] = "mod_cesionario";
$proto27["m_columns"][] = "mod_cesionario_cedula";
$proto27["m_columns"][] = "sys_user";
$proto27["m_columns"][] = "sys_date";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "contrato_modifica";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "contrato_modifica_prorroga";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato_modifica_prorroga";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_modifica_prorroga = createSqlQuery_contrato_modifica_prorroga();


	
										;

										

$tdatacontrato_modifica_prorroga[".sqlquery"] = $queryData_contrato_modifica_prorroga;

$tableEvents["contrato_modifica_prorroga"] = new eventsBase;
$tdatacontrato_modifica_prorroga[".hasEvents"] = false;

?>