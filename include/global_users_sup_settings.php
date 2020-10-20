<?php



$tdataglobal_users_sup = array();
$tdataglobal_users_sup[".searchableFields"] = array();
$tdataglobal_users_sup[".ShortName"] = "global_users_sup";
$tdataglobal_users_sup[".OwnerID"] = "";
$tdataglobal_users_sup[".OriginalTable"] = "global_users";


$tdataglobal_users_sup[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataglobal_users_sup[".originalPagesByType"] = $tdataglobal_users_sup[".pagesByType"];
$tdataglobal_users_sup[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataglobal_users_sup[".originalPages"] = $tdataglobal_users_sup[".pages"];
$tdataglobal_users_sup[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataglobal_users_sup[".originalDefaultPages"] = $tdataglobal_users_sup[".defaultPages"];

//	field labels
$fieldLabelsglobal_users_sup = array();
$fieldToolTipsglobal_users_sup = array();
$pageTitlesglobal_users_sup = array();
$placeHoldersglobal_users_sup = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_users_sup["Spanish"] = array();
	$fieldToolTipsglobal_users_sup["Spanish"] = array();
	$placeHoldersglobal_users_sup["Spanish"] = array();
	$pageTitlesglobal_users_sup["Spanish"] = array();
	$fieldLabelsglobal_users_sup["Spanish"]["idusrglobal"] = "Idusrglobal";
	$fieldToolTipsglobal_users_sup["Spanish"]["idusrglobal"] = "";
	$placeHoldersglobal_users_sup["Spanish"]["idusrglobal"] = "";
	$fieldLabelsglobal_users_sup["Spanish"]["id_fk"] = "Id Fk";
	$fieldToolTipsglobal_users_sup["Spanish"]["id_fk"] = "";
	$placeHoldersglobal_users_sup["Spanish"]["id_fk"] = "";
	$fieldLabelsglobal_users_sup["Spanish"]["Username"] = "USUARIO";
	$fieldToolTipsglobal_users_sup["Spanish"]["Username"] = "";
	$placeHoldersglobal_users_sup["Spanish"]["Username"] = "";
	$fieldLabelsglobal_users_sup["Spanish"]["usr_email"] = "CORREO";
	$fieldToolTipsglobal_users_sup["Spanish"]["usr_email"] = "";
	$placeHoldersglobal_users_sup["Spanish"]["usr_email"] = "";
	$fieldLabelsglobal_users_sup["Spanish"]["usr_nombresfull"] = "NOMBRES Y APELLIDOS";
	$fieldToolTipsglobal_users_sup["Spanish"]["usr_nombresfull"] = "";
	$placeHoldersglobal_users_sup["Spanish"]["usr_nombresfull"] = "";
	$fieldLabelsglobal_users_sup["Spanish"]["usr_personalid"] = "DOCUMENTO";
	$fieldToolTipsglobal_users_sup["Spanish"]["usr_personalid"] = "";
	$placeHoldersglobal_users_sup["Spanish"]["usr_personalid"] = "";
	$fieldLabelsglobal_users_sup["Spanish"]["global_rol_contratos"] = "Global Rol Contratos";
	$fieldToolTipsglobal_users_sup["Spanish"]["global_rol_contratos"] = "";
	$placeHoldersglobal_users_sup["Spanish"]["global_rol_contratos"] = "";
	$fieldLabelsglobal_users_sup["Spanish"]["usr_dep"] = "DEPENDENCIA";
	$fieldToolTipsglobal_users_sup["Spanish"]["usr_dep"] = "";
	$placeHoldersglobal_users_sup["Spanish"]["usr_dep"] = "";
	$fieldLabelsglobal_users_sup["Spanish"]["usr_cargo"] = "CARGO";
	$fieldToolTipsglobal_users_sup["Spanish"]["usr_cargo"] = "";
	$placeHoldersglobal_users_sup["Spanish"]["usr_cargo"] = "";
	$fieldLabelsglobal_users_sup["Spanish"]["usr_dep_sup"] = "Usr Dep Sup";
	$fieldToolTipsglobal_users_sup["Spanish"]["usr_dep_sup"] = "";
	$placeHoldersglobal_users_sup["Spanish"]["usr_dep_sup"] = "";
	$fieldLabelsglobal_users_sup["Spanish"]["usr_name"] = "Usr Name";
	$fieldToolTipsglobal_users_sup["Spanish"]["usr_name"] = "";
	$placeHoldersglobal_users_sup["Spanish"]["usr_name"] = "";
	$fieldLabelsglobal_users_sup["Spanish"]["usr_lname"] = "Usr Lname";
	$fieldToolTipsglobal_users_sup["Spanish"]["usr_lname"] = "";
	$placeHoldersglobal_users_sup["Spanish"]["usr_lname"] = "";
	if (count($fieldToolTipsglobal_users_sup["Spanish"]))
		$tdataglobal_users_sup[".isUseToolTips"] = true;
}


	$tdataglobal_users_sup[".NCSearch"] = true;



$tdataglobal_users_sup[".shortTableName"] = "global_users_sup";
$tdataglobal_users_sup[".nSecOptions"] = 0;

$tdataglobal_users_sup[".mainTableOwnerID"] = "";
$tdataglobal_users_sup[".entityType"] = 1;

$tdataglobal_users_sup[".strOriginalTableName"] = "global_users";

	



$tdataglobal_users_sup[".showAddInPopup"] = false;

$tdataglobal_users_sup[".showEditInPopup"] = false;

$tdataglobal_users_sup[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataglobal_users_sup[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataglobal_users_sup[".listAjax"] = false;
//	temporary
$tdataglobal_users_sup[".listAjax"] = false;

	$tdataglobal_users_sup[".audit"] = true;

	$tdataglobal_users_sup[".locking"] = true;


$pages = $tdataglobal_users_sup[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_users_sup[".edit"] = true;
	$tdataglobal_users_sup[".afterEditAction"] = 1;
	$tdataglobal_users_sup[".closePopupAfterEdit"] = 1;
	$tdataglobal_users_sup[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_users_sup[".add"] = true;
$tdataglobal_users_sup[".afterAddAction"] = 1;
$tdataglobal_users_sup[".closePopupAfterAdd"] = 1;
$tdataglobal_users_sup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_users_sup[".list"] = true;
}



$tdataglobal_users_sup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_users_sup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_users_sup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_users_sup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_users_sup[".printFriendly"] = true;
}



$tdataglobal_users_sup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_users_sup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_users_sup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_users_sup[".isUseAjaxSuggest"] = true;

$tdataglobal_users_sup[".rowHighlite"] = true;



						

$tdataglobal_users_sup[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_users_sup[".buttonsAdded"] = false;

$tdataglobal_users_sup[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_users_sup[".isUseTimeForSearch"] = false;


$tdataglobal_users_sup[".badgeColor"] = "8FBC8B";


$tdataglobal_users_sup[".allSearchFields"] = array();
$tdataglobal_users_sup[".filterFields"] = array();
$tdataglobal_users_sup[".requiredSearchFields"] = array();

$tdataglobal_users_sup[".googleLikeFields"] = array();
$tdataglobal_users_sup[".googleLikeFields"][] = "idusrglobal";
$tdataglobal_users_sup[".googleLikeFields"][] = "id_fk";
$tdataglobal_users_sup[".googleLikeFields"][] = "Username";
$tdataglobal_users_sup[".googleLikeFields"][] = "usr_email";
$tdataglobal_users_sup[".googleLikeFields"][] = "usr_nombresfull";
$tdataglobal_users_sup[".googleLikeFields"][] = "usr_personalid";
$tdataglobal_users_sup[".googleLikeFields"][] = "usr_dep";
$tdataglobal_users_sup[".googleLikeFields"][] = "usr_dep_sup";
$tdataglobal_users_sup[".googleLikeFields"][] = "usr_cargo";
$tdataglobal_users_sup[".googleLikeFields"][] = "global_rol_contratos";
$tdataglobal_users_sup[".googleLikeFields"][] = "usr_name";
$tdataglobal_users_sup[".googleLikeFields"][] = "usr_lname";



$tdataglobal_users_sup[".tableType"] = "list";

$tdataglobal_users_sup[".printerPageOrientation"] = 0;
$tdataglobal_users_sup[".nPrinterPageScale"] = 100;

$tdataglobal_users_sup[".nPrinterSplitRecords"] = 40;

$tdataglobal_users_sup[".geocodingEnabled"] = false;







$tdataglobal_users_sup[".noRecordsFirstPage"] = true;



$tdataglobal_users_sup[".pageSize"] = 20;

$tdataglobal_users_sup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataglobal_users_sup[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_users_sup[".orderindexes"] = array();

$tdataglobal_users_sup[".sqlHead"] = "SELECT idusrglobal,  id_fk,  Username,  usr_email,  usr_nombresfull,  usr_personalid,  usr_dep,  usr_dep_sup,  usr_cargo,  global_rol_contratos,  usr_name,  usr_lname";
$tdataglobal_users_sup[".sqlFrom"] = "FROM global_users";
$tdataglobal_users_sup[".sqlWhereExpr"] = "(global_rol_contratos = 3)";
$tdataglobal_users_sup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_users_sup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_users_sup[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_users_sup[".highlightSearchResults"] = true;

$tableKeysglobal_users_sup = array();
$tableKeysglobal_users_sup[] = "idusrglobal";
$tdataglobal_users_sup[".Keys"] = $tableKeysglobal_users_sup;


$tdataglobal_users_sup[".hideMobileList"] = array();




//	idusrglobal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idusrglobal";
	$fdata["GoodName"] = "idusrglobal";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_sup","idusrglobal");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idusrglobal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idusrglobal";

	
	
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


	$tdataglobal_users_sup["idusrglobal"] = $fdata;
		$tdataglobal_users_sup[".searchableFields"][] = "idusrglobal";
//	id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_fk";
	$fdata["GoodName"] = "id_fk";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_sup","id_fk");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_fk";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "edl.funcionario";
	$edata["LookupConnId"] = "dbusers_at_localhost";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdataglobal_users_sup["id_fk"] = $fdata;
		$tdataglobal_users_sup[".searchableFields"][] = "id_fk";
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_sup","Username");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Username";

	
	
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


	$tdataglobal_users_sup["Username"] = $fdata;
		$tdataglobal_users_sup[".searchableFields"][] = "Username";
//	usr_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "usr_email";
	$fdata["GoodName"] = "usr_email";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_sup","usr_email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_email";

	
	
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


	$tdataglobal_users_sup["usr_email"] = $fdata;
		$tdataglobal_users_sup[".searchableFields"][] = "usr_email";
//	usr_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usr_nombresfull";
	$fdata["GoodName"] = "usr_nombresfull";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_sup","usr_nombresfull");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_nombresfull";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_nombresfull";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdataglobal_users_sup["usr_nombresfull"] = $fdata;
		$tdataglobal_users_sup[".searchableFields"][] = "usr_nombresfull";
//	usr_personalid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "usr_personalid";
	$fdata["GoodName"] = "usr_personalid";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_sup","usr_personalid");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usr_personalid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_personalid";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdataglobal_users_sup["usr_personalid"] = $fdata;
		$tdataglobal_users_sup[".searchableFields"][] = "usr_personalid";
//	usr_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "usr_dep";
	$fdata["GoodName"] = "usr_dep";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_sup","usr_dep");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usr_dep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_dep";

	
	
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


	$tdataglobal_users_sup["usr_dep"] = $fdata;
		$tdataglobal_users_sup[".searchableFields"][] = "usr_dep";
//	usr_dep_sup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "usr_dep_sup";
	$fdata["GoodName"] = "usr_dep_sup";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_sup","usr_dep_sup");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usr_dep_sup";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_dep_sup";

	
	
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


	$tdataglobal_users_sup["usr_dep_sup"] = $fdata;
		$tdataglobal_users_sup[".searchableFields"][] = "usr_dep_sup";
//	usr_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "usr_cargo";
	$fdata["GoodName"] = "usr_cargo";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_sup","usr_cargo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usr_cargo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_cargo";

	
	
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
	$edata["LookupTable"] = "cargo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
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


	$tdataglobal_users_sup["usr_cargo"] = $fdata;
		$tdataglobal_users_sup[".searchableFields"][] = "usr_cargo";
//	global_rol_contratos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "global_rol_contratos";
	$fdata["GoodName"] = "global_rol_contratos";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_sup","global_rol_contratos");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_contratos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_contratos";

	
	
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


	$tdataglobal_users_sup["global_rol_contratos"] = $fdata;
		$tdataglobal_users_sup[".searchableFields"][] = "global_rol_contratos";
//	usr_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "usr_name";
	$fdata["GoodName"] = "usr_name";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_sup","usr_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_name";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdataglobal_users_sup["usr_name"] = $fdata;
		$tdataglobal_users_sup[".searchableFields"][] = "usr_name";
//	usr_lname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "usr_lname";
	$fdata["GoodName"] = "usr_lname";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_sup","usr_lname");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_lname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_lname";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdataglobal_users_sup["usr_lname"] = $fdata;
		$tdataglobal_users_sup[".searchableFields"][] = "usr_lname";


$tables_data["global_users_sup"]=&$tdataglobal_users_sup;
$field_labels["global_users_sup"] = &$fieldLabelsglobal_users_sup;
$fieldToolTips["global_users_sup"] = &$fieldToolTipsglobal_users_sup;
$placeHolders["global_users_sup"] = &$placeHoldersglobal_users_sup;
$page_titles["global_users_sup"] = &$pageTitlesglobal_users_sup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["global_users_sup"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["global_users_sup"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_global_users_sup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idusrglobal,  id_fk,  Username,  usr_email,  usr_nombresfull,  usr_personalid,  usr_dep,  usr_dep_sup,  usr_cargo,  global_rol_contratos,  usr_name,  usr_lname";
$proto0["m_strFrom"] = "FROM global_users";
$proto0["m_strWhere"] = "(global_rol_contratos = 3)";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "global_rol_contratos = 3";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "global_rol_contratos",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_sup"
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
	"m_strName" => "idusrglobal",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_sup"
));

$proto6["m_sql"] = "idusrglobal";
$proto6["m_srcTableName"] = "global_users_sup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_fk",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_sup"
));

$proto8["m_sql"] = "id_fk";
$proto8["m_srcTableName"] = "global_users_sup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_sup"
));

$proto10["m_sql"] = "Username";
$proto10["m_srcTableName"] = "global_users_sup";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_email",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_sup"
));

$proto12["m_sql"] = "usr_email";
$proto12["m_srcTableName"] = "global_users_sup";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_nombresfull",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_sup"
));

$proto14["m_sql"] = "usr_nombresfull";
$proto14["m_srcTableName"] = "global_users_sup";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_personalid",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_sup"
));

$proto16["m_sql"] = "usr_personalid";
$proto16["m_srcTableName"] = "global_users_sup";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_dep",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_sup"
));

$proto18["m_sql"] = "usr_dep";
$proto18["m_srcTableName"] = "global_users_sup";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_dep_sup",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_sup"
));

$proto20["m_sql"] = "usr_dep_sup";
$proto20["m_srcTableName"] = "global_users_sup";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_cargo",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_sup"
));

$proto22["m_sql"] = "usr_cargo";
$proto22["m_srcTableName"] = "global_users_sup";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_contratos",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_sup"
));

$proto24["m_sql"] = "global_rol_contratos";
$proto24["m_srcTableName"] = "global_users_sup";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_name",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_sup"
));

$proto26["m_sql"] = "usr_name";
$proto26["m_srcTableName"] = "global_users_sup";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_lname",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_sup"
));

$proto28["m_sql"] = "usr_lname";
$proto28["m_srcTableName"] = "global_users_sup";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "global_users";
$proto31["m_srcTableName"] = "global_users_sup";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "idusrglobal";
$proto31["m_columns"][] = "id_fk";
$proto31["m_columns"][] = "Username";
$proto31["m_columns"][] = "Password";
$proto31["m_columns"][] = "usr_email";
$proto31["m_columns"][] = "usr_name";
$proto31["m_columns"][] = "usr_lname";
$proto31["m_columns"][] = "usr_nombresfull";
$proto31["m_columns"][] = "usr_personalid";
$proto31["m_columns"][] = "usr_inicial";
$proto31["m_columns"][] = "usr_sessini";
$proto31["m_columns"][] = "usr_image";
$proto31["m_columns"][] = "usr_status_nomina";
$proto31["m_columns"][] = "usr_status";
$proto31["m_columns"][] = "usr_rdnkey";
$proto31["m_columns"][] = "usr_type_vinc";
$proto31["m_columns"][] = "usr_type_vinculacion";
$proto31["m_columns"][] = "usr_status_sol";
$proto31["m_columns"][] = "usr_dependencia";
$proto31["m_columns"][] = "user_dep";
$proto31["m_columns"][] = "usr_entidad";
$proto31["m_columns"][] = "usr_not";
$proto31["m_columns"][] = "usr_not_msj";
$proto31["m_columns"][] = "usr_jefe";
$proto31["m_columns"][] = "usr_minequipo_lider";
$proto31["m_columns"][] = "usr_minequipo_grupo";
$proto31["m_columns"][] = "global_rol_me";
$proto31["m_columns"][] = "global_rol_gh";
$proto31["m_columns"][] = "global_rol_almacen";
$proto31["m_columns"][] = "global_rol_ci";
$proto31["m_columns"][] = "global_rol_contratos";
$proto31["m_columns"][] = "global_rol_hojar";
$proto31["m_columns"][] = "global_rol_inmuebles";
$proto31["m_columns"][] = "global_rol_siis";
$proto31["m_columns"][] = "global_rol_cpanel";
$proto31["m_columns"][] = "global_rol_dashboard";
$proto31["m_columns"][] = "global_rol_zf";
$proto31["m_columns"][] = "global_rol_sipi";
$proto31["m_columns"][] = "global_rol_cej";
$proto31["m_columns"][] = "global_rol_jc3";
$proto31["m_columns"][] = "global_rol_th";
$proto31["m_columns"][] = "global_rol_sid";
$proto31["m_columns"][] = "global_rol";
$proto31["m_columns"][] = "global_rol_cont";
$proto31["m_columns"][] = "globla_rol_ct";
$proto31["m_columns"][] = "global_rol_procjur";
$proto31["m_columns"][] = "global_rol_comacc";
$proto31["m_columns"][] = "global_rol_gestion";
$proto31["m_columns"][] = "global_rol_ciudadano";
$proto31["m_columns"][] = "global_rol_ciudadano_dep";
$proto31["m_columns"][] = "sys_user";
$proto31["m_columns"][] = "sys_date";
$proto31["m_columns"][] = "sys_time";
$proto31["m_columns"][] = "sys_ntries_usr";
$proto31["m_columns"][] = "sys_registrationdate_usr";
$proto31["m_columns"][] = "sys_expiration_usr";
$proto31["m_columns"][] = "sys_disabledate_usr";
$proto31["m_columns"][] = "sys_upd_fecha";
$proto31["m_columns"][] = "sys_upd_user";
$proto31["m_columns"][] = "sys_upd_time";
$proto31["m_columns"][] = "sys_update_info";
$proto31["m_columns"][] = "sys_update_family_info";
$proto31["m_columns"][] = "usr_update_almacen";
$proto31["m_columns"][] = "sys_anio";
$proto31["m_columns"][] = "ctrl";
$proto31["m_columns"][] = "usr_directivo";
$proto31["m_columns"][] = "usr_dep";
$proto31["m_columns"][] = "usr_dep_sup";
$proto31["m_columns"][] = "usr_cargo";
$proto31["m_columns"][] = "usr_regpago";
$proto31["m_columns"][] = "usr_extension";
$proto31["m_columns"][] = "usr_piso";
$proto31["m_columns"][] = "usr_datebirth";
$proto31["m_columns"][] = "ctrl_pedidoalmacen";
$proto31["m_columns"][] = "ctrl_contacto";
$proto31["m_columns"][] = "usr_emergencia";
$proto31["m_columns"][] = "active";
$proto31["m_columns"][] = "groupid";
$proto31["m_columns"][] = "habilita_almacen";
$proto31["m_columns"][] = "estado_vinculacion_mincit";
$proto31["m_columns"][] = "upd_date";
$proto31["m_columns"][] = "phone";
$proto31["m_columns"][] = "phone1";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "global_users";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "global_users_sup";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_users_sup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_users_sup = createSqlQuery_global_users_sup();


	
										;

												

$tdataglobal_users_sup[".sqlquery"] = $queryData_global_users_sup;

$tableEvents["global_users_sup"] = new eventsBase;
$tdataglobal_users_sup[".hasEvents"] = false;

?>