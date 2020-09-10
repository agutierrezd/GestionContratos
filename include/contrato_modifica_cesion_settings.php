<?php



$tdatacontrato_modifica_cesion = array();
$tdatacontrato_modifica_cesion[".searchableFields"] = array();
$tdatacontrato_modifica_cesion[".ShortName"] = "contrato_modifica_cesion";
$tdatacontrato_modifica_cesion[".OwnerID"] = "";
$tdatacontrato_modifica_cesion[".OriginalTable"] = "contrato_modifica";


$tdatacontrato_modifica_cesion[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_modifica_cesion[".originalPagesByType"] = $tdatacontrato_modifica_cesion[".pagesByType"];
$tdatacontrato_modifica_cesion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_modifica_cesion[".originalPages"] = $tdatacontrato_modifica_cesion[".pages"];
$tdatacontrato_modifica_cesion[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_modifica_cesion[".originalDefaultPages"] = $tdatacontrato_modifica_cesion[".defaultPages"];

//	field labels
$fieldLabelscontrato_modifica_cesion = array();
$fieldToolTipscontrato_modifica_cesion = array();
$pageTitlescontrato_modifica_cesion = array();
$placeHolderscontrato_modifica_cesion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_modifica_cesion["Spanish"] = array();
	$fieldToolTipscontrato_modifica_cesion["Spanish"] = array();
	$placeHolderscontrato_modifica_cesion["Spanish"] = array();
	$pageTitlescontrato_modifica_cesion["Spanish"] = array();
	$fieldLabelscontrato_modifica_cesion["Spanish"]["mod_id"] = "Mod Id";
	$fieldToolTipscontrato_modifica_cesion["Spanish"]["mod_id"] = "";
	$placeHolderscontrato_modifica_cesion["Spanish"]["mod_id"] = "";
	$fieldLabelscontrato_modifica_cesion["Spanish"]["id_cont_fk"] = "Número interno";
	$fieldToolTipscontrato_modifica_cesion["Spanish"]["id_cont_fk"] = "";
	$placeHolderscontrato_modifica_cesion["Spanish"]["id_cont_fk"] = "";
	$fieldLabelscontrato_modifica_cesion["Spanish"]["mod_tipo"] = "Tipo de modificación";
	$fieldToolTipscontrato_modifica_cesion["Spanish"]["mod_tipo"] = "";
	$placeHolderscontrato_modifica_cesion["Spanish"]["mod_tipo"] = "";
	$fieldLabelscontrato_modifica_cesion["Spanish"]["mod_fecha_suscripcion"] = "Fecha Suscripción";
	$fieldToolTipscontrato_modifica_cesion["Spanish"]["mod_fecha_suscripcion"] = "";
	$placeHolderscontrato_modifica_cesion["Spanish"]["mod_fecha_suscripcion"] = "";
	$fieldLabelscontrato_modifica_cesion["Spanish"]["mod_fecha_ini"] = "Fecha inicio cesión";
	$fieldToolTipscontrato_modifica_cesion["Spanish"]["mod_fecha_ini"] = "";
	$placeHolderscontrato_modifica_cesion["Spanish"]["mod_fecha_ini"] = "";
	$fieldLabelscontrato_modifica_cesion["Spanish"]["mod_fecha_fin"] = "Fecha final cesión";
	$fieldToolTipscontrato_modifica_cesion["Spanish"]["mod_fecha_fin"] = "";
	$placeHolderscontrato_modifica_cesion["Spanish"]["mod_fecha_fin"] = "";
	$fieldLabelscontrato_modifica_cesion["Spanish"]["mod_observ"] = "Observaciones";
	$fieldToolTipscontrato_modifica_cesion["Spanish"]["mod_observ"] = "";
	$placeHolderscontrato_modifica_cesion["Spanish"]["mod_observ"] = "";
	$fieldLabelscontrato_modifica_cesion["Spanish"]["mod_valor"] = "Valor de la cesión";
	$fieldToolTipscontrato_modifica_cesion["Spanish"]["mod_valor"] = "";
	$placeHolderscontrato_modifica_cesion["Spanish"]["mod_valor"] = "";
	$fieldLabelscontrato_modifica_cesion["Spanish"]["sys_user"] = "Registrado por";
	$fieldToolTipscontrato_modifica_cesion["Spanish"]["sys_user"] = "";
	$placeHolderscontrato_modifica_cesion["Spanish"]["sys_user"] = "";
	$fieldLabelscontrato_modifica_cesion["Spanish"]["sys_date"] = "Fecha";
	$fieldToolTipscontrato_modifica_cesion["Spanish"]["sys_date"] = "";
	$placeHolderscontrato_modifica_cesion["Spanish"]["sys_date"] = "";
	$fieldLabelscontrato_modifica_cesion["Spanish"]["mod_cedente"] = "Cedente";
	$fieldToolTipscontrato_modifica_cesion["Spanish"]["mod_cedente"] = "";
	$placeHolderscontrato_modifica_cesion["Spanish"]["mod_cedente"] = "";
	$fieldLabelscontrato_modifica_cesion["Spanish"]["mod_decente_cedula"] = "Cédula Cedente";
	$fieldToolTipscontrato_modifica_cesion["Spanish"]["mod_decente_cedula"] = "";
	$placeHolderscontrato_modifica_cesion["Spanish"]["mod_decente_cedula"] = "";
	$fieldLabelscontrato_modifica_cesion["Spanish"]["mod_cesionario"] = "Cesionario";
	$fieldToolTipscontrato_modifica_cesion["Spanish"]["mod_cesionario"] = "";
	$placeHolderscontrato_modifica_cesion["Spanish"]["mod_cesionario"] = "";
	$fieldLabelscontrato_modifica_cesion["Spanish"]["mod_cesionario_cedula"] = "Cédula Cesionario";
	$fieldToolTipscontrato_modifica_cesion["Spanish"]["mod_cesionario_cedula"] = "";
	$placeHolderscontrato_modifica_cesion["Spanish"]["mod_cesionario_cedula"] = "";
	if (count($fieldToolTipscontrato_modifica_cesion["Spanish"]))
		$tdatacontrato_modifica_cesion[".isUseToolTips"] = true;
}


	$tdatacontrato_modifica_cesion[".NCSearch"] = true;



$tdatacontrato_modifica_cesion[".shortTableName"] = "contrato_modifica_cesion";
$tdatacontrato_modifica_cesion[".nSecOptions"] = 0;

$tdatacontrato_modifica_cesion[".mainTableOwnerID"] = "";
$tdatacontrato_modifica_cesion[".entityType"] = 1;

$tdatacontrato_modifica_cesion[".strOriginalTableName"] = "contrato_modifica";

	



$tdatacontrato_modifica_cesion[".showAddInPopup"] = false;

$tdatacontrato_modifica_cesion[".showEditInPopup"] = false;

$tdatacontrato_modifica_cesion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrato_modifica_cesion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrato_modifica_cesion[".listAjax"] = false;
//	temporary
$tdatacontrato_modifica_cesion[".listAjax"] = false;

	$tdatacontrato_modifica_cesion[".audit"] = true;

	$tdatacontrato_modifica_cesion[".locking"] = true;


$pages = $tdatacontrato_modifica_cesion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_modifica_cesion[".edit"] = true;
	$tdatacontrato_modifica_cesion[".afterEditAction"] = 1;
	$tdatacontrato_modifica_cesion[".closePopupAfterEdit"] = 1;
	$tdatacontrato_modifica_cesion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_modifica_cesion[".add"] = true;
$tdatacontrato_modifica_cesion[".afterAddAction"] = 1;
$tdatacontrato_modifica_cesion[".closePopupAfterAdd"] = 1;
$tdatacontrato_modifica_cesion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_modifica_cesion[".list"] = true;
}



$tdatacontrato_modifica_cesion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_modifica_cesion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_modifica_cesion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_modifica_cesion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_modifica_cesion[".printFriendly"] = true;
}



$tdatacontrato_modifica_cesion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_modifica_cesion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_modifica_cesion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_modifica_cesion[".isUseAjaxSuggest"] = true;

$tdatacontrato_modifica_cesion[".rowHighlite"] = true;



																		

$tdatacontrato_modifica_cesion[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_modifica_cesion[".buttonsAdded"] = false;

$tdatacontrato_modifica_cesion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_modifica_cesion[".isUseTimeForSearch"] = false;


$tdatacontrato_modifica_cesion[".badgeColor"] = "6493ea";


$tdatacontrato_modifica_cesion[".allSearchFields"] = array();
$tdatacontrato_modifica_cesion[".filterFields"] = array();
$tdatacontrato_modifica_cesion[".requiredSearchFields"] = array();

$tdatacontrato_modifica_cesion[".googleLikeFields"] = array();
$tdatacontrato_modifica_cesion[".googleLikeFields"][] = "mod_id";
$tdatacontrato_modifica_cesion[".googleLikeFields"][] = "id_cont_fk";
$tdatacontrato_modifica_cesion[".googleLikeFields"][] = "mod_tipo";
$tdatacontrato_modifica_cesion[".googleLikeFields"][] = "mod_fecha_suscripcion";
$tdatacontrato_modifica_cesion[".googleLikeFields"][] = "mod_fecha_ini";
$tdatacontrato_modifica_cesion[".googleLikeFields"][] = "mod_fecha_fin";
$tdatacontrato_modifica_cesion[".googleLikeFields"][] = "mod_observ";
$tdatacontrato_modifica_cesion[".googleLikeFields"][] = "mod_valor";
$tdatacontrato_modifica_cesion[".googleLikeFields"][] = "sys_user";
$tdatacontrato_modifica_cesion[".googleLikeFields"][] = "sys_date";
$tdatacontrato_modifica_cesion[".googleLikeFields"][] = "mod_cedente";
$tdatacontrato_modifica_cesion[".googleLikeFields"][] = "mod_decente_cedula";
$tdatacontrato_modifica_cesion[".googleLikeFields"][] = "mod_cesionario";
$tdatacontrato_modifica_cesion[".googleLikeFields"][] = "mod_cesionario_cedula";



$tdatacontrato_modifica_cesion[".tableType"] = "list";

$tdatacontrato_modifica_cesion[".printerPageOrientation"] = 0;
$tdatacontrato_modifica_cesion[".nPrinterPageScale"] = 100;

$tdatacontrato_modifica_cesion[".nPrinterSplitRecords"] = 40;

$tdatacontrato_modifica_cesion[".geocodingEnabled"] = false;










$tdatacontrato_modifica_cesion[".pageSize"] = 20;

$tdatacontrato_modifica_cesion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrato_modifica_cesion[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_modifica_cesion[".orderindexes"] = array();

$tdatacontrato_modifica_cesion[".sqlHead"] = "SELECT mod_id,  id_cont_fk,  mod_tipo,  mod_fecha_suscripcion,  mod_fecha_ini,  mod_fecha_fin,  mod_observ,  mod_valor,  sys_user,  sys_date,  mod_cedente,  mod_decente_cedula,  mod_cesionario,  mod_cesionario_cedula";
$tdatacontrato_modifica_cesion[".sqlFrom"] = "FROM contrato_modifica";
$tdatacontrato_modifica_cesion[".sqlWhereExpr"] = "(mod_tipo = 4)";
$tdatacontrato_modifica_cesion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_modifica_cesion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_modifica_cesion[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_modifica_cesion[".highlightSearchResults"] = true;

$tableKeyscontrato_modifica_cesion = array();
$tableKeyscontrato_modifica_cesion[] = "mod_id";
$tdatacontrato_modifica_cesion[".Keys"] = $tableKeyscontrato_modifica_cesion;


$tdatacontrato_modifica_cesion[".hideMobileList"] = array();




//	mod_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "mod_id";
	$fdata["GoodName"] = "mod_id";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_cesion","mod_id");
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


	$tdatacontrato_modifica_cesion["mod_id"] = $fdata;
		$tdatacontrato_modifica_cesion[".searchableFields"][] = "mod_id";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_cesion","id_cont_fk");
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
		$edata["autoCompleteFields"][] = array('masterF'=>"mod_cedente", 'lookupF'=>"cont_nit_contra_ta");
	$edata["autoCompleteFields"][] = array('masterF'=>"mod_decente_cedula", 'lookupF'=>"cont_nit_contra_ta");
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


	$tdatacontrato_modifica_cesion["id_cont_fk"] = $fdata;
		$tdatacontrato_modifica_cesion[".searchableFields"][] = "id_cont_fk";
//	mod_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mod_tipo";
	$fdata["GoodName"] = "mod_tipo";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_cesion","mod_tipo");
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


	$tdatacontrato_modifica_cesion["mod_tipo"] = $fdata;
		$tdatacontrato_modifica_cesion[".searchableFields"][] = "mod_tipo";
//	mod_fecha_suscripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mod_fecha_suscripcion";
	$fdata["GoodName"] = "mod_fecha_suscripcion";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_cesion","mod_fecha_suscripcion");
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


	$tdatacontrato_modifica_cesion["mod_fecha_suscripcion"] = $fdata;
		$tdatacontrato_modifica_cesion[".searchableFields"][] = "mod_fecha_suscripcion";
//	mod_fecha_ini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mod_fecha_ini";
	$fdata["GoodName"] = "mod_fecha_ini";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_cesion","mod_fecha_ini");
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

	
	
		$edata["DateEditType"] = 5;
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


	$tdatacontrato_modifica_cesion["mod_fecha_ini"] = $fdata;
		$tdatacontrato_modifica_cesion[".searchableFields"][] = "mod_fecha_ini";
//	mod_fecha_fin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mod_fecha_fin";
	$fdata["GoodName"] = "mod_fecha_fin";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_cesion","mod_fecha_fin");
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


	$tdatacontrato_modifica_cesion["mod_fecha_fin"] = $fdata;
		$tdatacontrato_modifica_cesion[".searchableFields"][] = "mod_fecha_fin";
//	mod_observ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "mod_observ";
	$fdata["GoodName"] = "mod_observ";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_cesion","mod_observ");
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


	$tdatacontrato_modifica_cesion["mod_observ"] = $fdata;
		$tdatacontrato_modifica_cesion[".searchableFields"][] = "mod_observ";
//	mod_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mod_valor";
	$fdata["GoodName"] = "mod_valor";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_cesion","mod_valor");
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


	$tdatacontrato_modifica_cesion["mod_valor"] = $fdata;
		$tdatacontrato_modifica_cesion[".searchableFields"][] = "mod_valor";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_cesion","sys_user");
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


	$tdatacontrato_modifica_cesion["sys_user"] = $fdata;
		$tdatacontrato_modifica_cesion[".searchableFields"][] = "sys_user";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_cesion","sys_date");
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


	$tdatacontrato_modifica_cesion["sys_date"] = $fdata;
		$tdatacontrato_modifica_cesion[".searchableFields"][] = "sys_date";
//	mod_cedente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "mod_cedente";
	$fdata["GoodName"] = "mod_cedente";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_cesion","mod_cedente");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "mod_cedente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_cedente";

	
	
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
	$edata["LookupTable"] = "contractor_master";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "contractor_doc_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "contractor_nombresfull";

	

	
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


	$tdatacontrato_modifica_cesion["mod_cedente"] = $fdata;
		$tdatacontrato_modifica_cesion[".searchableFields"][] = "mod_cedente";
//	mod_decente_cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "mod_decente_cedula";
	$fdata["GoodName"] = "mod_decente_cedula";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_cesion","mod_decente_cedula");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mod_decente_cedula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_decente_cedula";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatacontrato_modifica_cesion["mod_decente_cedula"] = $fdata;
		$tdatacontrato_modifica_cesion[".searchableFields"][] = "mod_decente_cedula";
//	mod_cesionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "mod_cesionario";
	$fdata["GoodName"] = "mod_cesionario";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_cesion","mod_cesionario");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "mod_cesionario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_cesionario";

	
	
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
	$edata["LookupTable"] = "contractor_master";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"mod_cesionario_cedula", 'lookupF'=>"contractor_doc_id");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "contractor_doc_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "contractor_nombresfull";

	

	
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


	$tdatacontrato_modifica_cesion["mod_cesionario"] = $fdata;
		$tdatacontrato_modifica_cesion[".searchableFields"][] = "mod_cesionario";
//	mod_cesionario_cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "mod_cesionario_cedula";
	$fdata["GoodName"] = "mod_cesionario_cedula";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_cesion","mod_cesionario_cedula");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mod_cesionario_cedula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_cesionario_cedula";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatacontrato_modifica_cesion["mod_cesionario_cedula"] = $fdata;
		$tdatacontrato_modifica_cesion[".searchableFields"][] = "mod_cesionario_cedula";


$tables_data["contrato_modifica_cesion"]=&$tdatacontrato_modifica_cesion;
$field_labels["contrato_modifica_cesion"] = &$fieldLabelscontrato_modifica_cesion;
$fieldToolTips["contrato_modifica_cesion"] = &$fieldToolTipscontrato_modifica_cesion;
$placeHolders["contrato_modifica_cesion"] = &$placeHolderscontrato_modifica_cesion;
$page_titles["contrato_modifica_cesion"] = &$pageTitlescontrato_modifica_cesion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contrato_modifica_cesion"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["contrato_modifica_cesion"] = array();



	
				$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_modifica_cesion"][0] = $masterParams;
				$masterTablesData["contrato_modifica_cesion"][0]["masterKeys"] = array();
	$masterTablesData["contrato_modifica_cesion"][0]["masterKeys"][]="id_cont";
				$masterTablesData["contrato_modifica_cesion"][0]["detailKeys"] = array();
	$masterTablesData["contrato_modifica_cesion"][0]["detailKeys"][]="id_cont_fk";
		
	
				$strOriginalDetailsTable="contrato_modifica_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato_modifica_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato_modifica_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_modifica_cesion"][1] = $masterParams;
				$masterTablesData["contrato_modifica_cesion"][1]["masterKeys"] = array();
	$masterTablesData["contrato_modifica_cesion"][1]["masterKeys"][]="modt_id";
				$masterTablesData["contrato_modifica_cesion"][1]["detailKeys"] = array();
	$masterTablesData["contrato_modifica_cesion"][1]["detailKeys"][]="mod_tipo";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_contrato_modifica_cesion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "mod_id,  id_cont_fk,  mod_tipo,  mod_fecha_suscripcion,  mod_fecha_ini,  mod_fecha_fin,  mod_observ,  mod_valor,  sys_user,  sys_date,  mod_cedente,  mod_decente_cedula,  mod_cesionario,  mod_cesionario_cedula";
$proto0["m_strFrom"] = "FROM contrato_modifica";
$proto0["m_strWhere"] = "(mod_tipo = 4)";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "mod_tipo = 4";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "mod_tipo",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_cesion"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 4";
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
	"m_srcTableName" => "contrato_modifica_cesion"
));

$proto6["m_sql"] = "mod_id";
$proto6["m_srcTableName"] = "contrato_modifica_cesion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_cesion"
));

$proto8["m_sql"] = "id_cont_fk";
$proto8["m_srcTableName"] = "contrato_modifica_cesion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_tipo",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_cesion"
));

$proto10["m_sql"] = "mod_tipo";
$proto10["m_srcTableName"] = "contrato_modifica_cesion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_fecha_suscripcion",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_cesion"
));

$proto12["m_sql"] = "mod_fecha_suscripcion";
$proto12["m_srcTableName"] = "contrato_modifica_cesion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_fecha_ini",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_cesion"
));

$proto14["m_sql"] = "mod_fecha_ini";
$proto14["m_srcTableName"] = "contrato_modifica_cesion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_fecha_fin",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_cesion"
));

$proto16["m_sql"] = "mod_fecha_fin";
$proto16["m_srcTableName"] = "contrato_modifica_cesion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_observ",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_cesion"
));

$proto18["m_sql"] = "mod_observ";
$proto18["m_srcTableName"] = "contrato_modifica_cesion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_valor",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_cesion"
));

$proto20["m_sql"] = "mod_valor";
$proto20["m_srcTableName"] = "contrato_modifica_cesion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_cesion"
));

$proto22["m_sql"] = "sys_user";
$proto22["m_srcTableName"] = "contrato_modifica_cesion";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_cesion"
));

$proto24["m_sql"] = "sys_date";
$proto24["m_srcTableName"] = "contrato_modifica_cesion";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_cedente",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_cesion"
));

$proto26["m_sql"] = "mod_cedente";
$proto26["m_srcTableName"] = "contrato_modifica_cesion";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_decente_cedula",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_cesion"
));

$proto28["m_sql"] = "mod_decente_cedula";
$proto28["m_srcTableName"] = "contrato_modifica_cesion";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_cesionario",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_cesion"
));

$proto30["m_sql"] = "mod_cesionario";
$proto30["m_srcTableName"] = "contrato_modifica_cesion";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_cesionario_cedula",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_cesion"
));

$proto32["m_sql"] = "mod_cesionario_cedula";
$proto32["m_srcTableName"] = "contrato_modifica_cesion";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "contrato_modifica";
$proto35["m_srcTableName"] = "contrato_modifica_cesion";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "mod_id";
$proto35["m_columns"][] = "id_cont_fk";
$proto35["m_columns"][] = "mod_tipo";
$proto35["m_columns"][] = "mod_fecha_suscripcion";
$proto35["m_columns"][] = "mod_fecha_ini";
$proto35["m_columns"][] = "mod_fecha_fin";
$proto35["m_columns"][] = "mod_observ";
$proto35["m_columns"][] = "mod_valor";
$proto35["m_columns"][] = "mod_cedente";
$proto35["m_columns"][] = "mod_decente_cedula";
$proto35["m_columns"][] = "mod_cesionario";
$proto35["m_columns"][] = "mod_cesionario_cedula";
$proto35["m_columns"][] = "sys_user";
$proto35["m_columns"][] = "sys_date";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "contrato_modifica";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "contrato_modifica_cesion";
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
$proto0["m_srcTableName"]="contrato_modifica_cesion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_modifica_cesion = createSqlQuery_contrato_modifica_cesion();


	
										;

														

$tdatacontrato_modifica_cesion[".sqlquery"] = $queryData_contrato_modifica_cesion;

$tableEvents["contrato_modifica_cesion"] = new eventsBase;
$tdatacontrato_modifica_cesion[".hasEvents"] = false;

?>