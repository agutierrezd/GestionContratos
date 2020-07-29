<?php



$tdatainterventor_interno_sup = array();
$tdatainterventor_interno_sup[".searchableFields"] = array();
$tdatainterventor_interno_sup[".ShortName"] = "interventor_interno_sup";
$tdatainterventor_interno_sup[".OwnerID"] = "idusrglobal_fk";
$tdatainterventor_interno_sup[".OriginalTable"] = "interventor_interno";


$tdatainterventor_interno_sup[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainterventor_interno_sup[".originalPagesByType"] = $tdatainterventor_interno_sup[".pagesByType"];
$tdatainterventor_interno_sup[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainterventor_interno_sup[".originalPages"] = $tdatainterventor_interno_sup[".pages"];
$tdatainterventor_interno_sup[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainterventor_interno_sup[".originalDefaultPages"] = $tdatainterventor_interno_sup[".defaultPages"];

//	field labels
$fieldLabelsinterventor_interno_sup = array();
$fieldToolTipsinterventor_interno_sup = array();
$pageTitlesinterventor_interno_sup = array();
$placeHoldersinterventor_interno_sup = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinterventor_interno_sup["Spanish"] = array();
	$fieldToolTipsinterventor_interno_sup["Spanish"] = array();
	$placeHoldersinterventor_interno_sup["Spanish"] = array();
	$pageTitlesinterventor_interno_sup["Spanish"] = array();
	$fieldLabelsinterventor_interno_sup["Spanish"]["interventor_id"] = "Interventor Id";
	$fieldToolTipsinterventor_interno_sup["Spanish"]["interventor_id"] = "";
	$placeHoldersinterventor_interno_sup["Spanish"]["interventor_id"] = "";
	$fieldLabelsinterventor_interno_sup["Spanish"]["id_cont_fk"] = "Id Cont Fk";
	$fieldToolTipsinterventor_interno_sup["Spanish"]["id_cont_fk"] = "";
	$placeHoldersinterventor_interno_sup["Spanish"]["id_cont_fk"] = "";
	$fieldLabelsinterventor_interno_sup["Spanish"]["cont_hash_fk"] = "Usuario";
	$fieldToolTipsinterventor_interno_sup["Spanish"]["cont_hash_fk"] = "";
	$placeHoldersinterventor_interno_sup["Spanish"]["cont_hash_fk"] = "";
	$fieldLabelsinterventor_interno_sup["Spanish"]["idusrglobal_fk"] = "Supervisor";
	$fieldToolTipsinterventor_interno_sup["Spanish"]["idusrglobal_fk"] = "";
	$placeHoldersinterventor_interno_sup["Spanish"]["idusrglobal_fk"] = "";
	$fieldLabelsinterventor_interno_sup["Spanish"]["sys_date"] = "Fecha";
	$fieldToolTipsinterventor_interno_sup["Spanish"]["sys_date"] = "";
	$placeHoldersinterventor_interno_sup["Spanish"]["sys_date"] = "";
	$fieldLabelsinterventor_interno_sup["Spanish"]["sys_user"] = "Usuario";
	$fieldToolTipsinterventor_interno_sup["Spanish"]["sys_user"] = "";
	$placeHoldersinterventor_interno_sup["Spanish"]["sys_user"] = "";
	$fieldLabelsinterventor_interno_sup["Spanish"]["sup_status"] = "Habilitado";
	$fieldToolTipsinterventor_interno_sup["Spanish"]["sup_status"] = "";
	$placeHoldersinterventor_interno_sup["Spanish"]["sup_status"] = "";
	$fieldLabelsinterventor_interno_sup["Spanish"]["sup_fechanot"] = "Fecha notificación";
	$fieldToolTipsinterventor_interno_sup["Spanish"]["sup_fechanot"] = "";
	$placeHoldersinterventor_interno_sup["Spanish"]["sup_fechanot"] = "";
	$fieldLabelsinterventor_interno_sup["Spanish"]["sup_mailnot"] = "Email notificación";
	$fieldToolTipsinterventor_interno_sup["Spanish"]["sup_mailnot"] = "";
	$placeHoldersinterventor_interno_sup["Spanish"]["sup_mailnot"] = "";
	$fieldLabelsinterventor_interno_sup["Spanish"]["documento_id"] = "Documento";
	$fieldToolTipsinterventor_interno_sup["Spanish"]["documento_id"] = "";
	$placeHoldersinterventor_interno_sup["Spanish"]["documento_id"] = "";
	$fieldLabelsinterventor_interno_sup["Spanish"]["nombres"] = "Nombres";
	$fieldToolTipsinterventor_interno_sup["Spanish"]["nombres"] = "";
	$placeHoldersinterventor_interno_sup["Spanish"]["nombres"] = "";
	$fieldLabelsinterventor_interno_sup["Spanish"]["apellidos"] = "Apellidos";
	$fieldToolTipsinterventor_interno_sup["Spanish"]["apellidos"] = "";
	$placeHoldersinterventor_interno_sup["Spanish"]["apellidos"] = "";
	$fieldLabelsinterventor_interno_sup["Spanish"]["cargo_id"] = "Cargo";
	$fieldToolTipsinterventor_interno_sup["Spanish"]["cargo_id"] = "";
	$placeHoldersinterventor_interno_sup["Spanish"]["cargo_id"] = "";
	$fieldLabelsinterventor_interno_sup["Spanish"]["dependencia_id"] = "Dependencia";
	$fieldToolTipsinterventor_interno_sup["Spanish"]["dependencia_id"] = "";
	$placeHoldersinterventor_interno_sup["Spanish"]["dependencia_id"] = "";
	if (count($fieldToolTipsinterventor_interno_sup["Spanish"]))
		$tdatainterventor_interno_sup[".isUseToolTips"] = true;
}


	$tdatainterventor_interno_sup[".NCSearch"] = true;



$tdatainterventor_interno_sup[".shortTableName"] = "interventor_interno_sup";
$tdatainterventor_interno_sup[".nSecOptions"] = 1;

$tdatainterventor_interno_sup[".mainTableOwnerID"] = "idusrglobal_fk";
$tdatainterventor_interno_sup[".entityType"] = 1;

$tdatainterventor_interno_sup[".strOriginalTableName"] = "interventor_interno";

	



$tdatainterventor_interno_sup[".showAddInPopup"] = false;

$tdatainterventor_interno_sup[".showEditInPopup"] = false;

$tdatainterventor_interno_sup[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainterventor_interno_sup[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainterventor_interno_sup[".listAjax"] = false;
//	temporary
$tdatainterventor_interno_sup[".listAjax"] = false;

	$tdatainterventor_interno_sup[".audit"] = false;

	$tdatainterventor_interno_sup[".locking"] = false;


$pages = $tdatainterventor_interno_sup[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainterventor_interno_sup[".edit"] = true;
	$tdatainterventor_interno_sup[".afterEditAction"] = 1;
	$tdatainterventor_interno_sup[".closePopupAfterEdit"] = 1;
	$tdatainterventor_interno_sup[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainterventor_interno_sup[".add"] = true;
$tdatainterventor_interno_sup[".afterAddAction"] = 1;
$tdatainterventor_interno_sup[".closePopupAfterAdd"] = 1;
$tdatainterventor_interno_sup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainterventor_interno_sup[".list"] = true;
}



$tdatainterventor_interno_sup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainterventor_interno_sup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainterventor_interno_sup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainterventor_interno_sup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainterventor_interno_sup[".printFriendly"] = true;
}



$tdatainterventor_interno_sup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainterventor_interno_sup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainterventor_interno_sup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainterventor_interno_sup[".isUseAjaxSuggest"] = true;

$tdatainterventor_interno_sup[".rowHighlite"] = true;



			

$tdatainterventor_interno_sup[".ajaxCodeSnippetAdded"] = false;

$tdatainterventor_interno_sup[".buttonsAdded"] = false;

$tdatainterventor_interno_sup[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainterventor_interno_sup[".isUseTimeForSearch"] = false;


$tdatainterventor_interno_sup[".badgeColor"] = "00C2C5";


$tdatainterventor_interno_sup[".allSearchFields"] = array();
$tdatainterventor_interno_sup[".filterFields"] = array();
$tdatainterventor_interno_sup[".requiredSearchFields"] = array();

$tdatainterventor_interno_sup[".googleLikeFields"] = array();
$tdatainterventor_interno_sup[".googleLikeFields"][] = "interventor_id";
$tdatainterventor_interno_sup[".googleLikeFields"][] = "id_cont_fk";
$tdatainterventor_interno_sup[".googleLikeFields"][] = "cont_hash_fk";
$tdatainterventor_interno_sup[".googleLikeFields"][] = "idusrglobal_fk";
$tdatainterventor_interno_sup[".googleLikeFields"][] = "documento_id";
$tdatainterventor_interno_sup[".googleLikeFields"][] = "nombres";
$tdatainterventor_interno_sup[".googleLikeFields"][] = "apellidos";
$tdatainterventor_interno_sup[".googleLikeFields"][] = "cargo_id";
$tdatainterventor_interno_sup[".googleLikeFields"][] = "dependencia_id";
$tdatainterventor_interno_sup[".googleLikeFields"][] = "sys_date";
$tdatainterventor_interno_sup[".googleLikeFields"][] = "sys_user";
$tdatainterventor_interno_sup[".googleLikeFields"][] = "sup_status";
$tdatainterventor_interno_sup[".googleLikeFields"][] = "sup_fechanot";
$tdatainterventor_interno_sup[".googleLikeFields"][] = "sup_mailnot";



$tdatainterventor_interno_sup[".tableType"] = "list";

$tdatainterventor_interno_sup[".printerPageOrientation"] = 0;
$tdatainterventor_interno_sup[".nPrinterPageScale"] = 100;

$tdatainterventor_interno_sup[".nPrinterSplitRecords"] = 40;

$tdatainterventor_interno_sup[".geocodingEnabled"] = false;










$tdatainterventor_interno_sup[".pageSize"] = 20;

$tdatainterventor_interno_sup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainterventor_interno_sup[".strOrderBy"] = $tstrOrderBy;

$tdatainterventor_interno_sup[".orderindexes"] = array();

$tdatainterventor_interno_sup[".sqlHead"] = "SELECT interventor_id,  id_cont_fk,  cont_hash_fk,  idusrglobal_fk,  documento_id,  nombres,  apellidos,  cargo_id,  dependencia_id,  sys_date,  sys_user,  sup_status,  sup_fechanot,  sup_mailnot";
$tdatainterventor_interno_sup[".sqlFrom"] = "FROM interventor_interno";
$tdatainterventor_interno_sup[".sqlWhereExpr"] = "(sup_status = 1)";
$tdatainterventor_interno_sup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainterventor_interno_sup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainterventor_interno_sup[".arrGroupsPerPage"] = $arrGPP;

$tdatainterventor_interno_sup[".highlightSearchResults"] = true;

$tableKeysinterventor_interno_sup = array();
$tableKeysinterventor_interno_sup[] = "interventor_id";
$tdatainterventor_interno_sup[".Keys"] = $tableKeysinterventor_interno_sup;


$tdatainterventor_interno_sup[".hideMobileList"] = array();




//	interventor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "interventor_id";
	$fdata["GoodName"] = "interventor_id";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno_sup","interventor_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "interventor_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "interventor_id";

	
	
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


	$tdatainterventor_interno_sup["interventor_id"] = $fdata;
		$tdatainterventor_interno_sup[".searchableFields"][] = "interventor_id";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno_sup","id_cont_fk");
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


	$tdatainterventor_interno_sup["id_cont_fk"] = $fdata;
		$tdatainterventor_interno_sup[".searchableFields"][] = "id_cont_fk";
//	cont_hash_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cont_hash_fk";
	$fdata["GoodName"] = "cont_hash_fk";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno_sup","cont_hash_fk");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_hash_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_hash_fk";

	
	
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


	$tdatainterventor_interno_sup["cont_hash_fk"] = $fdata;
		$tdatainterventor_interno_sup[".searchableFields"][] = "cont_hash_fk";
//	idusrglobal_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idusrglobal_fk";
	$fdata["GoodName"] = "idusrglobal_fk";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno_sup","idusrglobal_fk");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "idusrglobal_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idusrglobal_fk";

	
	
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
	$edata["LookupTable"] = "global_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"cont_hash_fk", 'lookupF'=>"Username");
	$edata["autoCompleteFields"][] = array('masterF'=>"documento_id", 'lookupF'=>"usr_personalid");
	$edata["autoCompleteFields"][] = array('masterF'=>"nombres", 'lookupF'=>"usr_name");
	$edata["autoCompleteFields"][] = array('masterF'=>"apellidos", 'lookupF'=>"usr_lname");
	$edata["autoCompleteFields"][] = array('masterF'=>"cargo_id", 'lookupF'=>"usr_cargo");
	$edata["autoCompleteFields"][] = array('masterF'=>"dependencia_id", 'lookupF'=>"usr_dep");
	$edata["autoCompleteFields"][] = array('masterF'=>"sup_mailnot", 'lookupF'=>"usr_email");
	$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "idusrglobal";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

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


	$tdatainterventor_interno_sup["idusrglobal_fk"] = $fdata;
		$tdatainterventor_interno_sup[".searchableFields"][] = "idusrglobal_fk";
//	documento_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "documento_id";
	$fdata["GoodName"] = "documento_id";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno_sup","documento_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "documento_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documento_id";

	
	
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


	$tdatainterventor_interno_sup["documento_id"] = $fdata;
		$tdatainterventor_interno_sup[".searchableFields"][] = "documento_id";
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno_sup","nombres");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombres";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombres";

	
	
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


	$tdatainterventor_interno_sup["nombres"] = $fdata;
		$tdatainterventor_interno_sup[".searchableFields"][] = "nombres";
//	apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "apellidos";
	$fdata["GoodName"] = "apellidos";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno_sup","apellidos");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "apellidos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apellidos";

	
	
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


	$tdatainterventor_interno_sup["apellidos"] = $fdata;
		$tdatainterventor_interno_sup[".searchableFields"][] = "apellidos";
//	cargo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cargo_id";
	$fdata["GoodName"] = "cargo_id";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno_sup","cargo_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cargo_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cargo_id";

	
	
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

	$edata = array("EditFormat" => "HiddenField");

	
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


	$tdatainterventor_interno_sup["cargo_id"] = $fdata;
		$tdatainterventor_interno_sup[".searchableFields"][] = "cargo_id";
//	dependencia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dependencia_id";
	$fdata["GoodName"] = "dependencia_id";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno_sup","dependencia_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dependencia_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dependencia_id";

	
	
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

	$edata = array("EditFormat" => "HiddenField");

	
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


	$tdatainterventor_interno_sup["dependencia_id"] = $fdata;
		$tdatainterventor_interno_sup[".searchableFields"][] = "dependencia_id";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno_sup","sys_date");
	$fdata["FieldType"] = 7;

	
	
	
			

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

	$edata = array("EditFormat" => "HiddenField");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
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


	$tdatainterventor_interno_sup["sys_date"] = $fdata;
		$tdatainterventor_interno_sup[".searchableFields"][] = "sys_date";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno_sup","sys_user");
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

	$edata = array("EditFormat" => "HiddenField");

	
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


	$tdatainterventor_interno_sup["sys_user"] = $fdata;
		$tdatainterventor_interno_sup[".searchableFields"][] = "sys_user";
//	sup_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "sup_status";
	$fdata["GoodName"] = "sup_status";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno_sup","sup_status");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "sup_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sup_status";

	
	
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
	$edata["LookupTable"] = "tparam_habilita";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "habilitado_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "habilitado_name";

	

	
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


	$tdatainterventor_interno_sup["sup_status"] = $fdata;
		$tdatainterventor_interno_sup[".searchableFields"][] = "sup_status";
//	sup_fechanot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sup_fechanot";
	$fdata["GoodName"] = "sup_fechanot";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno_sup","sup_fechanot");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "sup_fechanot";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sup_fechanot";

	
	
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


	$tdatainterventor_interno_sup["sup_fechanot"] = $fdata;
		$tdatainterventor_interno_sup[".searchableFields"][] = "sup_fechanot";
//	sup_mailnot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sup_mailnot";
	$fdata["GoodName"] = "sup_mailnot";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno_sup","sup_mailnot");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sup_mailnot";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sup_mailnot";

	
	
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


	$tdatainterventor_interno_sup["sup_mailnot"] = $fdata;
		$tdatainterventor_interno_sup[".searchableFields"][] = "sup_mailnot";


$tables_data["interventor_interno_sup"]=&$tdatainterventor_interno_sup;
$field_labels["interventor_interno_sup"] = &$fieldLabelsinterventor_interno_sup;
$fieldToolTips["interventor_interno_sup"] = &$fieldToolTipsinterventor_interno_sup;
$placeHolders["interventor_interno_sup"] = &$placeHoldersinterventor_interno_sup;
$page_titles["interventor_interno_sup"] = &$pageTitlesinterventor_interno_sup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["interventor_interno_sup"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["interventor_interno_sup"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_interventor_interno_sup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "interventor_id,  id_cont_fk,  cont_hash_fk,  idusrglobal_fk,  documento_id,  nombres,  apellidos,  cargo_id,  dependencia_id,  sys_date,  sys_user,  sup_status,  sup_fechanot,  sup_mailnot";
$proto0["m_strFrom"] = "FROM interventor_interno";
$proto0["m_strWhere"] = "(sup_status = 1)";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "sup_status = 1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sup_status",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno_sup"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 1";
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
	"m_strName" => "interventor_id",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno_sup"
));

$proto6["m_sql"] = "interventor_id";
$proto6["m_srcTableName"] = "interventor_interno_sup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno_sup"
));

$proto8["m_sql"] = "id_cont_fk";
$proto8["m_srcTableName"] = "interventor_interno_sup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_hash_fk",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno_sup"
));

$proto10["m_sql"] = "cont_hash_fk";
$proto10["m_srcTableName"] = "interventor_interno_sup";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idusrglobal_fk",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno_sup"
));

$proto12["m_sql"] = "idusrglobal_fk";
$proto12["m_srcTableName"] = "interventor_interno_sup";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "documento_id",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno_sup"
));

$proto14["m_sql"] = "documento_id";
$proto14["m_srcTableName"] = "interventor_interno_sup";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno_sup"
));

$proto16["m_sql"] = "nombres";
$proto16["m_srcTableName"] = "interventor_interno_sup";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "apellidos",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno_sup"
));

$proto18["m_sql"] = "apellidos";
$proto18["m_srcTableName"] = "interventor_interno_sup";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo_id",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno_sup"
));

$proto20["m_sql"] = "cargo_id";
$proto20["m_srcTableName"] = "interventor_interno_sup";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dependencia_id",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno_sup"
));

$proto22["m_sql"] = "dependencia_id";
$proto22["m_srcTableName"] = "interventor_interno_sup";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno_sup"
));

$proto24["m_sql"] = "sys_date";
$proto24["m_srcTableName"] = "interventor_interno_sup";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno_sup"
));

$proto26["m_sql"] = "sys_user";
$proto26["m_srcTableName"] = "interventor_interno_sup";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_status",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno_sup"
));

$proto28["m_sql"] = "sup_status";
$proto28["m_srcTableName"] = "interventor_interno_sup";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_fechanot",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno_sup"
));

$proto30["m_sql"] = "sup_fechanot";
$proto30["m_srcTableName"] = "interventor_interno_sup";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_mailnot",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno_sup"
));

$proto32["m_sql"] = "sup_mailnot";
$proto32["m_srcTableName"] = "interventor_interno_sup";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "interventor_interno";
$proto35["m_srcTableName"] = "interventor_interno_sup";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "interventor_id";
$proto35["m_columns"][] = "id_cont_fk";
$proto35["m_columns"][] = "cont_hash_fk";
$proto35["m_columns"][] = "idusrglobal_fk";
$proto35["m_columns"][] = "documento_id";
$proto35["m_columns"][] = "nombres";
$proto35["m_columns"][] = "apellidos";
$proto35["m_columns"][] = "cargo_id";
$proto35["m_columns"][] = "dependencia_id";
$proto35["m_columns"][] = "sys_date";
$proto35["m_columns"][] = "sys_time";
$proto35["m_columns"][] = "sys_user";
$proto35["m_columns"][] = "sup_status";
$proto35["m_columns"][] = "sup_fechanot";
$proto35["m_columns"][] = "sup_horanot";
$proto35["m_columns"][] = "sup_mailnot";
$proto35["m_columns"][] = "sup_fechanot2";
$proto35["m_columns"][] = "sup_mailnot2";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "interventor_interno";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "interventor_interno_sup";
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
$proto0["m_srcTableName"]="interventor_interno_sup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_interventor_interno_sup = createSqlQuery_interventor_interno_sup();


	
										;

														

$tdatainterventor_interno_sup[".sqlquery"] = $queryData_interventor_interno_sup;

$tableEvents["interventor_interno_sup"] = new eventsBase;
$tdatainterventor_interno_sup[".hasEvents"] = false;

?>