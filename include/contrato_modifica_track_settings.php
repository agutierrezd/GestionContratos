<?php



$tdatacontrato_modifica_track = array();
$tdatacontrato_modifica_track[".searchableFields"] = array();
$tdatacontrato_modifica_track[".ShortName"] = "contrato_modifica_track";
$tdatacontrato_modifica_track[".OwnerID"] = "";
$tdatacontrato_modifica_track[".OriginalTable"] = "contrato_modifica_track";


$tdatacontrato_modifica_track[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_modifica_track[".originalPagesByType"] = $tdatacontrato_modifica_track[".pagesByType"];
$tdatacontrato_modifica_track[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_modifica_track[".originalPages"] = $tdatacontrato_modifica_track[".pages"];
$tdatacontrato_modifica_track[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_modifica_track[".originalDefaultPages"] = $tdatacontrato_modifica_track[".defaultPages"];

//	field labels
$fieldLabelscontrato_modifica_track = array();
$fieldToolTipscontrato_modifica_track = array();
$pageTitlescontrato_modifica_track = array();
$placeHolderscontrato_modifica_track = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_modifica_track["Spanish"] = array();
	$fieldToolTipscontrato_modifica_track["Spanish"] = array();
	$placeHolderscontrato_modifica_track["Spanish"] = array();
	$pageTitlescontrato_modifica_track["Spanish"] = array();
	$fieldLabelscontrato_modifica_track["Spanish"]["track_id"] = "Track Id";
	$fieldToolTipscontrato_modifica_track["Spanish"]["track_id"] = "";
	$placeHolderscontrato_modifica_track["Spanish"]["track_id"] = "";
	$fieldLabelscontrato_modifica_track["Spanish"]["id_cont_fk"] = "Id Cont Fk";
	$fieldToolTipscontrato_modifica_track["Spanish"]["id_cont_fk"] = "";
	$placeHolderscontrato_modifica_track["Spanish"]["id_cont_fk"] = "";
	$fieldLabelscontrato_modifica_track["Spanish"]["cont_nit_contra_ta"] = "Documento";
	$fieldToolTipscontrato_modifica_track["Spanish"]["cont_nit_contra_ta"] = "";
	$placeHolderscontrato_modifica_track["Spanish"]["cont_nit_contra_ta"] = "";
	$fieldLabelscontrato_modifica_track["Spanish"]["cont_fecha_inicio"] = "Fecha Inicio";
	$fieldToolTipscontrato_modifica_track["Spanish"]["cont_fecha_inicio"] = "";
	$placeHolderscontrato_modifica_track["Spanish"]["cont_fecha_inicio"] = "";
	$fieldLabelscontrato_modifica_track["Spanish"]["cont_fechafinal"] = "Fecha Final";
	$fieldToolTipscontrato_modifica_track["Spanish"]["cont_fechafinal"] = "";
	$placeHolderscontrato_modifica_track["Spanish"]["cont_fechafinal"] = "";
	$fieldLabelscontrato_modifica_track["Spanish"]["cont_valorinicial"] = "Valor inicial";
	$fieldToolTipscontrato_modifica_track["Spanish"]["cont_valorinicial"] = "";
	$placeHolderscontrato_modifica_track["Spanish"]["cont_valorinicial"] = "";
	$fieldLabelscontrato_modifica_track["Spanish"]["cont_valormensual"] = "Valor mensual";
	$fieldToolTipscontrato_modifica_track["Spanish"]["cont_valormensual"] = "";
	$placeHolderscontrato_modifica_track["Spanish"]["cont_valormensual"] = "";
	$fieldLabelscontrato_modifica_track["Spanish"]["cont_cesion"] = "Cesion";
	$fieldToolTipscontrato_modifica_track["Spanish"]["cont_cesion"] = "";
	$placeHolderscontrato_modifica_track["Spanish"]["cont_cesion"] = "";
	$fieldLabelscontrato_modifica_track["Spanish"]["cont_modifica"] = "Modificación";
	$fieldToolTipscontrato_modifica_track["Spanish"]["cont_modifica"] = "";
	$placeHolderscontrato_modifica_track["Spanish"]["cont_modifica"] = "";
	$fieldLabelscontrato_modifica_track["Spanish"]["sys_last_upd"] = "Fecha de actividad";
	$fieldToolTipscontrato_modifica_track["Spanish"]["sys_last_upd"] = "";
	$placeHolderscontrato_modifica_track["Spanish"]["sys_last_upd"] = "";
	if (count($fieldToolTipscontrato_modifica_track["Spanish"]))
		$tdatacontrato_modifica_track[".isUseToolTips"] = true;
}


	$tdatacontrato_modifica_track[".NCSearch"] = true;



$tdatacontrato_modifica_track[".shortTableName"] = "contrato_modifica_track";
$tdatacontrato_modifica_track[".nSecOptions"] = 0;

$tdatacontrato_modifica_track[".mainTableOwnerID"] = "";
$tdatacontrato_modifica_track[".entityType"] = 0;

$tdatacontrato_modifica_track[".strOriginalTableName"] = "contrato_modifica_track";

	



$tdatacontrato_modifica_track[".showAddInPopup"] = false;

$tdatacontrato_modifica_track[".showEditInPopup"] = false;

$tdatacontrato_modifica_track[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrato_modifica_track[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrato_modifica_track[".listAjax"] = false;
//	temporary
$tdatacontrato_modifica_track[".listAjax"] = false;

	$tdatacontrato_modifica_track[".audit"] = false;

	$tdatacontrato_modifica_track[".locking"] = false;


$pages = $tdatacontrato_modifica_track[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_modifica_track[".edit"] = true;
	$tdatacontrato_modifica_track[".afterEditAction"] = 1;
	$tdatacontrato_modifica_track[".closePopupAfterEdit"] = 1;
	$tdatacontrato_modifica_track[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_modifica_track[".add"] = true;
$tdatacontrato_modifica_track[".afterAddAction"] = 1;
$tdatacontrato_modifica_track[".closePopupAfterAdd"] = 1;
$tdatacontrato_modifica_track[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_modifica_track[".list"] = true;
}



$tdatacontrato_modifica_track[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_modifica_track[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_modifica_track[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_modifica_track[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_modifica_track[".printFriendly"] = true;
}



$tdatacontrato_modifica_track[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_modifica_track[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_modifica_track[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_modifica_track[".isUseAjaxSuggest"] = true;

$tdatacontrato_modifica_track[".rowHighlite"] = true;



												

$tdatacontrato_modifica_track[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_modifica_track[".buttonsAdded"] = false;

$tdatacontrato_modifica_track[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_modifica_track[".isUseTimeForSearch"] = false;


$tdatacontrato_modifica_track[".badgeColor"] = "c0c0c0";


$tdatacontrato_modifica_track[".allSearchFields"] = array();
$tdatacontrato_modifica_track[".filterFields"] = array();
$tdatacontrato_modifica_track[".requiredSearchFields"] = array();

$tdatacontrato_modifica_track[".googleLikeFields"] = array();
$tdatacontrato_modifica_track[".googleLikeFields"][] = "track_id";
$tdatacontrato_modifica_track[".googleLikeFields"][] = "id_cont_fk";
$tdatacontrato_modifica_track[".googleLikeFields"][] = "cont_nit_contra_ta";
$tdatacontrato_modifica_track[".googleLikeFields"][] = "cont_fecha_inicio";
$tdatacontrato_modifica_track[".googleLikeFields"][] = "cont_fechafinal";
$tdatacontrato_modifica_track[".googleLikeFields"][] = "cont_valorinicial";
$tdatacontrato_modifica_track[".googleLikeFields"][] = "cont_valormensual";
$tdatacontrato_modifica_track[".googleLikeFields"][] = "cont_cesion";
$tdatacontrato_modifica_track[".googleLikeFields"][] = "cont_modifica";
$tdatacontrato_modifica_track[".googleLikeFields"][] = "sys_last_upd";



$tdatacontrato_modifica_track[".tableType"] = "list";

$tdatacontrato_modifica_track[".printerPageOrientation"] = 0;
$tdatacontrato_modifica_track[".nPrinterPageScale"] = 100;

$tdatacontrato_modifica_track[".nPrinterSplitRecords"] = 40;

$tdatacontrato_modifica_track[".geocodingEnabled"] = false;










$tdatacontrato_modifica_track[".pageSize"] = 20;

$tdatacontrato_modifica_track[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrato_modifica_track[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_modifica_track[".orderindexes"] = array();

$tdatacontrato_modifica_track[".sqlHead"] = "SELECT track_id,  	id_cont_fk,  	cont_nit_contra_ta,  	cont_fecha_inicio,  	cont_fechafinal,  	cont_valorinicial,  	cont_valormensual,  	cont_cesion,  	cont_modifica,  	sys_last_upd";
$tdatacontrato_modifica_track[".sqlFrom"] = "FROM contrato_modifica_track";
$tdatacontrato_modifica_track[".sqlWhereExpr"] = "";
$tdatacontrato_modifica_track[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_modifica_track[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_modifica_track[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_modifica_track[".highlightSearchResults"] = true;

$tableKeyscontrato_modifica_track = array();
$tableKeyscontrato_modifica_track[] = "track_id";
$tdatacontrato_modifica_track[".Keys"] = $tableKeyscontrato_modifica_track;


$tdatacontrato_modifica_track[".hideMobileList"] = array();




//	track_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "track_id";
	$fdata["GoodName"] = "track_id";
	$fdata["ownerTable"] = "contrato_modifica_track";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_track","track_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "track_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "track_id";

	
	
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


	$tdatacontrato_modifica_track["track_id"] = $fdata;
		$tdatacontrato_modifica_track[".searchableFields"][] = "track_id";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "contrato_modifica_track";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_track","id_cont_fk");
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


	$tdatacontrato_modifica_track["id_cont_fk"] = $fdata;
		$tdatacontrato_modifica_track[".searchableFields"][] = "id_cont_fk";
//	cont_nit_contra_ta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cont_nit_contra_ta";
	$fdata["GoodName"] = "cont_nit_contra_ta";
	$fdata["ownerTable"] = "contrato_modifica_track";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_track","cont_nit_contra_ta");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_nit_contra_ta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_nit_contra_ta";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatacontrato_modifica_track["cont_nit_contra_ta"] = $fdata;
		$tdatacontrato_modifica_track[".searchableFields"][] = "cont_nit_contra_ta";
//	cont_fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cont_fecha_inicio";
	$fdata["GoodName"] = "cont_fecha_inicio";
	$fdata["ownerTable"] = "contrato_modifica_track";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_track","cont_fecha_inicio");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "cont_fecha_inicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fecha_inicio";

	
	
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


	$tdatacontrato_modifica_track["cont_fecha_inicio"] = $fdata;
		$tdatacontrato_modifica_track[".searchableFields"][] = "cont_fecha_inicio";
//	cont_fechafinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cont_fechafinal";
	$fdata["GoodName"] = "cont_fechafinal";
	$fdata["ownerTable"] = "contrato_modifica_track";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_track","cont_fechafinal");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "cont_fechafinal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fechafinal";

	
	
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


	$tdatacontrato_modifica_track["cont_fechafinal"] = $fdata;
		$tdatacontrato_modifica_track[".searchableFields"][] = "cont_fechafinal";
//	cont_valorinicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cont_valorinicial";
	$fdata["GoodName"] = "cont_valorinicial";
	$fdata["ownerTable"] = "contrato_modifica_track";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_track","cont_valorinicial");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "cont_valorinicial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valorinicial";

	
	
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


	$tdatacontrato_modifica_track["cont_valorinicial"] = $fdata;
		$tdatacontrato_modifica_track[".searchableFields"][] = "cont_valorinicial";
//	cont_valormensual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cont_valormensual";
	$fdata["GoodName"] = "cont_valormensual";
	$fdata["ownerTable"] = "contrato_modifica_track";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_track","cont_valormensual");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "cont_valormensual";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valormensual";

	
	
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


	$tdatacontrato_modifica_track["cont_valormensual"] = $fdata;
		$tdatacontrato_modifica_track[".searchableFields"][] = "cont_valormensual";
//	cont_cesion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cont_cesion";
	$fdata["GoodName"] = "cont_cesion";
	$fdata["ownerTable"] = "contrato_modifica_track";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_track","cont_cesion");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "cont_cesion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_cesion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatacontrato_modifica_track["cont_cesion"] = $fdata;
		$tdatacontrato_modifica_track[".searchableFields"][] = "cont_cesion";
//	cont_modifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cont_modifica";
	$fdata["GoodName"] = "cont_modifica";
	$fdata["ownerTable"] = "contrato_modifica_track";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_track","cont_modifica");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "cont_modifica";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_modifica";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatacontrato_modifica_track["cont_modifica"] = $fdata;
		$tdatacontrato_modifica_track[".searchableFields"][] = "cont_modifica";
//	sys_last_upd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sys_last_upd";
	$fdata["GoodName"] = "sys_last_upd";
	$fdata["ownerTable"] = "contrato_modifica_track";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_track","sys_last_upd");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "sys_last_upd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_last_upd";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatacontrato_modifica_track["sys_last_upd"] = $fdata;
		$tdatacontrato_modifica_track[".searchableFields"][] = "sys_last_upd";


$tables_data["contrato_modifica_track"]=&$tdatacontrato_modifica_track;
$field_labels["contrato_modifica_track"] = &$fieldLabelscontrato_modifica_track;
$fieldToolTips["contrato_modifica_track"] = &$fieldToolTipscontrato_modifica_track;
$placeHolders["contrato_modifica_track"] = &$placeHolderscontrato_modifica_track;
$page_titles["contrato_modifica_track"] = &$pageTitlescontrato_modifica_track;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contrato_modifica_track"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["contrato_modifica_track"] = array();



	
				$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_modifica_track"][0] = $masterParams;
				$masterTablesData["contrato_modifica_track"][0]["masterKeys"] = array();
	$masterTablesData["contrato_modifica_track"][0]["masterKeys"][]="id_cont";
				$masterTablesData["contrato_modifica_track"][0]["detailKeys"] = array();
	$masterTablesData["contrato_modifica_track"][0]["detailKeys"][]="id_cont_fk";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_contrato_modifica_track()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "track_id,  	id_cont_fk,  	cont_nit_contra_ta,  	cont_fecha_inicio,  	cont_fechafinal,  	cont_valorinicial,  	cont_valormensual,  	cont_cesion,  	cont_modifica,  	sys_last_upd";
$proto0["m_strFrom"] = "FROM contrato_modifica_track";
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
	"m_strName" => "track_id",
	"m_strTable" => "contrato_modifica_track",
	"m_srcTableName" => "contrato_modifica_track"
));

$proto6["m_sql"] = "track_id";
$proto6["m_srcTableName"] = "contrato_modifica_track";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "contrato_modifica_track",
	"m_srcTableName" => "contrato_modifica_track"
));

$proto8["m_sql"] = "id_cont_fk";
$proto8["m_srcTableName"] = "contrato_modifica_track";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_nit_contra_ta",
	"m_strTable" => "contrato_modifica_track",
	"m_srcTableName" => "contrato_modifica_track"
));

$proto10["m_sql"] = "cont_nit_contra_ta";
$proto10["m_srcTableName"] = "contrato_modifica_track";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fecha_inicio",
	"m_strTable" => "contrato_modifica_track",
	"m_srcTableName" => "contrato_modifica_track"
));

$proto12["m_sql"] = "cont_fecha_inicio";
$proto12["m_srcTableName"] = "contrato_modifica_track";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechafinal",
	"m_strTable" => "contrato_modifica_track",
	"m_srcTableName" => "contrato_modifica_track"
));

$proto14["m_sql"] = "cont_fechafinal";
$proto14["m_srcTableName"] = "contrato_modifica_track";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valorinicial",
	"m_strTable" => "contrato_modifica_track",
	"m_srcTableName" => "contrato_modifica_track"
));

$proto16["m_sql"] = "cont_valorinicial";
$proto16["m_srcTableName"] = "contrato_modifica_track";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valormensual",
	"m_strTable" => "contrato_modifica_track",
	"m_srcTableName" => "contrato_modifica_track"
));

$proto18["m_sql"] = "cont_valormensual";
$proto18["m_srcTableName"] = "contrato_modifica_track";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_cesion",
	"m_strTable" => "contrato_modifica_track",
	"m_srcTableName" => "contrato_modifica_track"
));

$proto20["m_sql"] = "cont_cesion";
$proto20["m_srcTableName"] = "contrato_modifica_track";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_modifica",
	"m_strTable" => "contrato_modifica_track",
	"m_srcTableName" => "contrato_modifica_track"
));

$proto22["m_sql"] = "cont_modifica";
$proto22["m_srcTableName"] = "contrato_modifica_track";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_last_upd",
	"m_strTable" => "contrato_modifica_track",
	"m_srcTableName" => "contrato_modifica_track"
));

$proto24["m_sql"] = "sys_last_upd";
$proto24["m_srcTableName"] = "contrato_modifica_track";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "contrato_modifica_track";
$proto27["m_srcTableName"] = "contrato_modifica_track";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "track_id";
$proto27["m_columns"][] = "id_cont_fk";
$proto27["m_columns"][] = "cont_nit_contra_ta";
$proto27["m_columns"][] = "cont_fecha_inicio";
$proto27["m_columns"][] = "cont_fechafinal";
$proto27["m_columns"][] = "cont_valorinicial";
$proto27["m_columns"][] = "cont_valormensual";
$proto27["m_columns"][] = "cont_cesion";
$proto27["m_columns"][] = "cont_modifica";
$proto27["m_columns"][] = "sys_last_upd";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "contrato_modifica_track";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "contrato_modifica_track";
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
$proto0["m_srcTableName"]="contrato_modifica_track";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_modifica_track = createSqlQuery_contrato_modifica_track();


	
										;

										

$tdatacontrato_modifica_track[".sqlquery"] = $queryData_contrato_modifica_track;

$tableEvents["contrato_modifica_track"] = new eventsBase;
$tdatacontrato_modifica_track[".hasEvents"] = false;

?>