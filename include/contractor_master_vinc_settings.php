<?php



$tdatacontractor_master_vinc = array();
$tdatacontractor_master_vinc[".searchableFields"] = array();
$tdatacontractor_master_vinc[".ShortName"] = "contractor_master_vinc";
$tdatacontractor_master_vinc[".OwnerID"] = "";
$tdatacontractor_master_vinc[".OriginalTable"] = "contractor_master";


$tdatacontractor_master_vinc[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacontractor_master_vinc[".originalPagesByType"] = $tdatacontractor_master_vinc[".pagesByType"];
$tdatacontractor_master_vinc[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacontractor_master_vinc[".originalPages"] = $tdatacontractor_master_vinc[".pages"];
$tdatacontractor_master_vinc[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacontractor_master_vinc[".originalDefaultPages"] = $tdatacontractor_master_vinc[".defaultPages"];

//	field labels
$fieldLabelscontractor_master_vinc = array();
$fieldToolTipscontractor_master_vinc = array();
$pageTitlescontractor_master_vinc = array();
$placeHolderscontractor_master_vinc = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontractor_master_vinc["Spanish"] = array();
	$fieldToolTipscontractor_master_vinc["Spanish"] = array();
	$placeHolderscontractor_master_vinc["Spanish"] = array();
	$pageTitlescontractor_master_vinc["Spanish"] = array();
	$fieldLabelscontractor_master_vinc["Spanish"]["contractor_id"] = "ID";
	$fieldToolTipscontractor_master_vinc["Spanish"]["contractor_id"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["contractor_id"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["contractor_type"] = "Tipo de documento";
	$fieldToolTipscontractor_master_vinc["Spanish"]["contractor_type"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["contractor_type"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["contractor_doc_id"] = "NIT / Documento";
	$fieldToolTipscontractor_master_vinc["Spanish"]["contractor_doc_id"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["contractor_doc_id"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["contractor_doc_id_dv"] = "Dígito de verificación";
	$fieldToolTipscontractor_master_vinc["Spanish"]["contractor_doc_id_dv"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["contractor_doc_id_dv"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["contractor_nombresfull"] = "Razón Social / Nombre";
	$fieldToolTipscontractor_master_vinc["Spanish"]["contractor_nombresfull"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["contractor_nombresfull"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["contractor_email"] = "Correo personal";
	$fieldToolTipscontractor_master_vinc["Spanish"]["contractor_email"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["contractor_email"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["contractor_email_mincit"] = "Correo institucional";
	$fieldToolTipscontractor_master_vinc["Spanish"]["contractor_email_mincit"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["contractor_email_mincit"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["contractor_address"] = "Dirección postal";
	$fieldToolTipscontractor_master_vinc["Spanish"]["contractor_address"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["contractor_address"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["contractor_phone"] = "Teléfono fijo";
	$fieldToolTipscontractor_master_vinc["Spanish"]["contractor_phone"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["contractor_phone"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["contractor_mobile"] = "Celular";
	$fieldToolTipscontractor_master_vinc["Spanish"]["contractor_mobile"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["contractor_mobile"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["contractor_city"] = "Ciudad residencia";
	$fieldToolTipscontractor_master_vinc["Spanish"]["contractor_city"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["contractor_city"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["bank_name"] = "Banco";
	$fieldToolTipscontractor_master_vinc["Spanish"]["bank_name"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["bank_name"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["bank_cta_type"] = "Tipo de cuenta";
	$fieldToolTipscontractor_master_vinc["Spanish"]["bank_cta_type"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["bank_cta_type"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["bank_cta_number"] = "Número de cuenta";
	$fieldToolTipscontractor_master_vinc["Spanish"]["bank_cta_number"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["bank_cta_number"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["sys_user"] = "Sys User";
	$fieldToolTipscontractor_master_vinc["Spanish"]["sys_user"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["sys_user"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["sys_level"] = "Sys Level";
	$fieldToolTipscontractor_master_vinc["Spanish"]["sys_level"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["sys_level"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["sys_status"] = "Sys Status";
	$fieldToolTipscontractor_master_vinc["Spanish"]["sys_status"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["sys_status"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["sys_last_upd"] = "Fecha de registro";
	$fieldToolTipscontractor_master_vinc["Spanish"]["sys_last_upd"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["sys_last_upd"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["groupid"] = "Groupid";
	$fieldToolTipscontractor_master_vinc["Spanish"]["groupid"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["groupid"] = "";
	$fieldLabelscontractor_master_vinc["Spanish"]["active"] = "Estado";
	$fieldToolTipscontractor_master_vinc["Spanish"]["active"] = "";
	$placeHolderscontractor_master_vinc["Spanish"]["active"] = "";
	if (count($fieldToolTipscontractor_master_vinc["Spanish"]))
		$tdatacontractor_master_vinc[".isUseToolTips"] = true;
}


	$tdatacontractor_master_vinc[".NCSearch"] = true;



$tdatacontractor_master_vinc[".shortTableName"] = "contractor_master_vinc";
$tdatacontractor_master_vinc[".nSecOptions"] = 0;

$tdatacontractor_master_vinc[".mainTableOwnerID"] = "";
$tdatacontractor_master_vinc[".entityType"] = 1;

$tdatacontractor_master_vinc[".strOriginalTableName"] = "contractor_master";

	



$tdatacontractor_master_vinc[".showAddInPopup"] = false;

$tdatacontractor_master_vinc[".showEditInPopup"] = false;

$tdatacontractor_master_vinc[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontractor_master_vinc[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontractor_master_vinc[".listAjax"] = false;
//	temporary
$tdatacontractor_master_vinc[".listAjax"] = false;

	$tdatacontractor_master_vinc[".audit"] = true;

	$tdatacontractor_master_vinc[".locking"] = true;


$pages = $tdatacontractor_master_vinc[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontractor_master_vinc[".edit"] = true;
	$tdatacontractor_master_vinc[".afterEditAction"] = 1;
	$tdatacontractor_master_vinc[".closePopupAfterEdit"] = 1;
	$tdatacontractor_master_vinc[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontractor_master_vinc[".add"] = true;
$tdatacontractor_master_vinc[".afterAddAction"] = 1;
$tdatacontractor_master_vinc[".closePopupAfterAdd"] = 1;
$tdatacontractor_master_vinc[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontractor_master_vinc[".list"] = true;
}



$tdatacontractor_master_vinc[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontractor_master_vinc[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontractor_master_vinc[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontractor_master_vinc[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontractor_master_vinc[".printFriendly"] = true;
}



$tdatacontractor_master_vinc[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontractor_master_vinc[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontractor_master_vinc[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontractor_master_vinc[".isUseAjaxSuggest"] = true;

$tdatacontractor_master_vinc[".rowHighlite"] = true;



		
					

$tdatacontractor_master_vinc[".ajaxCodeSnippetAdded"] = false;

$tdatacontractor_master_vinc[".buttonsAdded"] = true;

$tdatacontractor_master_vinc[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacontractor_master_vinc[".isUseTimeForSearch"] = false;


$tdatacontractor_master_vinc[".badgeColor"] = "D2AF80";


$tdatacontractor_master_vinc[".allSearchFields"] = array();
$tdatacontractor_master_vinc[".filterFields"] = array();
$tdatacontractor_master_vinc[".requiredSearchFields"] = array();

$tdatacontractor_master_vinc[".googleLikeFields"] = array();
$tdatacontractor_master_vinc[".googleLikeFields"][] = "contractor_id";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "contractor_type";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "contractor_doc_id";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "contractor_doc_id_dv";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "contractor_nombresfull";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "contractor_email";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "contractor_email_mincit";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "contractor_address";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "contractor_phone";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "contractor_mobile";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "contractor_city";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "bank_name";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "bank_cta_type";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "bank_cta_number";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "sys_user";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "sys_level";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "sys_status";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "sys_last_upd";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "groupid";
$tdatacontractor_master_vinc[".googleLikeFields"][] = "active";



$tdatacontractor_master_vinc[".tableType"] = "list";

$tdatacontractor_master_vinc[".printerPageOrientation"] = 0;
$tdatacontractor_master_vinc[".nPrinterPageScale"] = 100;

$tdatacontractor_master_vinc[".nPrinterSplitRecords"] = 40;

$tdatacontractor_master_vinc[".geocodingEnabled"] = false;




$tdatacontractor_master_vinc[".isDisplayLoading"] = true;






$tdatacontractor_master_vinc[".pageSize"] = 20;

$tdatacontractor_master_vinc[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontractor_master_vinc[".strOrderBy"] = $tstrOrderBy;

$tdatacontractor_master_vinc[".orderindexes"] = array();

$tdatacontractor_master_vinc[".sqlHead"] = "SELECT contractor_id,  contractor_type,  contractor_doc_id,  contractor_doc_id_dv,  contractor_nombresfull,  contractor_email,  contractor_email_mincit,  contractor_address,  contractor_phone,  contractor_mobile,  contractor_city,  bank_name,  bank_cta_type,  bank_cta_number,  sys_user,  sys_level,  sys_status,  sys_last_upd,  groupid,  active";
$tdatacontractor_master_vinc[".sqlFrom"] = "FROM contractor_master";
$tdatacontractor_master_vinc[".sqlWhereExpr"] = "";
$tdatacontractor_master_vinc[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontractor_master_vinc[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontractor_master_vinc[".arrGroupsPerPage"] = $arrGPP;

$tdatacontractor_master_vinc[".highlightSearchResults"] = true;

$tableKeyscontractor_master_vinc = array();
$tableKeyscontractor_master_vinc[] = "contractor_id";
$tableKeyscontractor_master_vinc[] = "contractor_doc_id";
$tdatacontractor_master_vinc[".Keys"] = $tableKeyscontractor_master_vinc;


$tdatacontractor_master_vinc[".hideMobileList"] = array();




//	contractor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "contractor_id";
	$fdata["GoodName"] = "contractor_id";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","contractor_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "contractor_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_id";

	
	
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


	$tdatacontractor_master_vinc["contractor_id"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "contractor_id";
//	contractor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "contractor_type";
	$fdata["GoodName"] = "contractor_type";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","contractor_type");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_type";

	
	
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
	$edata["LookupTable"] = "tipo_docidentidad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nombre";
	$edata["LinkFieldType"] = 200;
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


	$tdatacontractor_master_vinc["contractor_type"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "contractor_type";
//	contractor_doc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "contractor_doc_id";
	$fdata["GoodName"] = "contractor_doc_id";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","contractor_doc_id");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_doc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_doc_id";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatacontractor_master_vinc["contractor_doc_id"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "contractor_doc_id";
//	contractor_doc_id_dv
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "contractor_doc_id_dv";
	$fdata["GoodName"] = "contractor_doc_id_dv";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","contractor_doc_id_dv");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "contractor_doc_id_dv";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_doc_id_dv";

	
	
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


	$tdatacontractor_master_vinc["contractor_doc_id_dv"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "contractor_doc_id_dv";
//	contractor_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "contractor_nombresfull";
	$fdata["GoodName"] = "contractor_nombresfull";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","contractor_nombresfull");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_nombresfull";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_nombresfull";

	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "contractor_nombresfull_event", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;




		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

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


	$tdatacontractor_master_vinc["contractor_nombresfull"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "contractor_nombresfull";
//	contractor_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "contractor_email";
	$fdata["GoodName"] = "contractor_email";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","contractor_email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_email";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
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


	$tdatacontractor_master_vinc["contractor_email"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "contractor_email";
//	contractor_email_mincit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "contractor_email_mincit";
	$fdata["GoodName"] = "contractor_email_mincit";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","contractor_email_mincit");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_email_mincit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_email_mincit";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Correo %value% ya existe", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatacontractor_master_vinc["contractor_email_mincit"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "contractor_email_mincit";
//	contractor_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "contractor_address";
	$fdata["GoodName"] = "contractor_address";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","contractor_address");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_address";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatacontractor_master_vinc["contractor_address"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "contractor_address";
//	contractor_phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "contractor_phone";
	$fdata["GoodName"] = "contractor_phone";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","contractor_phone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_phone";

	
	
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


	$tdatacontractor_master_vinc["contractor_phone"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "contractor_phone";
//	contractor_mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "contractor_mobile";
	$fdata["GoodName"] = "contractor_mobile";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","contractor_mobile");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_mobile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_mobile";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdatacontractor_master_vinc["contractor_mobile"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "contractor_mobile";
//	contractor_city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "contractor_city";
	$fdata["GoodName"] = "contractor_city";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","contractor_city");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_city";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_city";

	
	
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
	$edata["LookupTable"] = "divipola";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CODMUN";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "NOMMUNICIPIO";

	

	
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


	$tdatacontractor_master_vinc["contractor_city"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "contractor_city";
//	bank_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "bank_name";
	$fdata["GoodName"] = "bank_name";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","bank_name");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "bank_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_name";

	
	
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
	$edata["LookupTable"] = "tipo_banco";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "codigo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nom_banco";

	

	
	$edata["LookupOrderBy"] = "nom_banco";

	
	
	
	

	
	
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


	$tdatacontractor_master_vinc["bank_name"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "bank_name";
//	bank_cta_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "bank_cta_type";
	$fdata["GoodName"] = "bank_cta_type";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","bank_cta_type");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "bank_cta_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_cta_type";

	
	
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
	$edata["LookupTable"] = "tipo_cta_banco";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "cta_numero";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "des_cuenta";

	

	
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


	$tdatacontractor_master_vinc["bank_cta_type"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "bank_cta_type";
//	bank_cta_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "bank_cta_number";
	$fdata["GoodName"] = "bank_cta_number";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","bank_cta_number");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "bank_cta_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_cta_number";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatacontractor_master_vinc["bank_cta_number"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "bank_cta_number";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","sys_user");
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


	$tdatacontractor_master_vinc["sys_user"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "sys_user";
//	sys_level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "sys_level";
	$fdata["GoodName"] = "sys_level";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","sys_level");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "sys_level";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_level";

	
	
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


	$tdatacontractor_master_vinc["sys_level"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "sys_level";
//	sys_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "sys_status";
	$fdata["GoodName"] = "sys_status";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","sys_status");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "sys_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_status";

	
	
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


	$tdatacontractor_master_vinc["sys_status"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "sys_status";
//	sys_last_upd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "sys_last_upd";
	$fdata["GoodName"] = "sys_last_upd";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","sys_last_upd");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "sys_last_upd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_last_upd";

	
	
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


	$tdatacontractor_master_vinc["sys_last_upd"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "sys_last_upd";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","groupid");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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


	$tdatacontractor_master_vinc["groupid"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_vinc","active");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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
	$edata["LookupTable"] = "global_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id_status";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "status_name";

	

	
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


	$tdatacontractor_master_vinc["active"] = $fdata;
		$tdatacontractor_master_vinc[".searchableFields"][] = "active";


$tables_data["contractor_master_vinc"]=&$tdatacontractor_master_vinc;
$field_labels["contractor_master_vinc"] = &$fieldLabelscontractor_master_vinc;
$fieldToolTips["contractor_master_vinc"] = &$fieldToolTipscontractor_master_vinc;
$placeHolders["contractor_master_vinc"] = &$placeHolderscontractor_master_vinc;
$page_titles["contractor_master_vinc"] = &$pageTitlescontractor_master_vinc;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contractor_master_vinc"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["contractor_master_vinc"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_contractor_master_vinc()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "contractor_id,  contractor_type,  contractor_doc_id,  contractor_doc_id_dv,  contractor_nombresfull,  contractor_email,  contractor_email_mincit,  contractor_address,  contractor_phone,  contractor_mobile,  contractor_city,  bank_name,  bank_cta_type,  bank_cta_number,  sys_user,  sys_level,  sys_status,  sys_last_upd,  groupid,  active";
$proto0["m_strFrom"] = "FROM contractor_master";
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
	"m_strName" => "contractor_id",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto6["m_sql"] = "contractor_id";
$proto6["m_srcTableName"] = "contractor_master_vinc";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_type",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto8["m_sql"] = "contractor_type";
$proto8["m_srcTableName"] = "contractor_master_vinc";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_doc_id",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto10["m_sql"] = "contractor_doc_id";
$proto10["m_srcTableName"] = "contractor_master_vinc";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_doc_id_dv",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto12["m_sql"] = "contractor_doc_id_dv";
$proto12["m_srcTableName"] = "contractor_master_vinc";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_nombresfull",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto14["m_sql"] = "contractor_nombresfull";
$proto14["m_srcTableName"] = "contractor_master_vinc";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto16["m_sql"] = "contractor_email";
$proto16["m_srcTableName"] = "contractor_master_vinc";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email_mincit",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto18["m_sql"] = "contractor_email_mincit";
$proto18["m_srcTableName"] = "contractor_master_vinc";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_address",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto20["m_sql"] = "contractor_address";
$proto20["m_srcTableName"] = "contractor_master_vinc";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_phone",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto22["m_sql"] = "contractor_phone";
$proto22["m_srcTableName"] = "contractor_master_vinc";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_mobile",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto24["m_sql"] = "contractor_mobile";
$proto24["m_srcTableName"] = "contractor_master_vinc";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_city",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto26["m_sql"] = "contractor_city";
$proto26["m_srcTableName"] = "contractor_master_vinc";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_name",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto28["m_sql"] = "bank_name";
$proto28["m_srcTableName"] = "contractor_master_vinc";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_cta_type",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto30["m_sql"] = "bank_cta_type";
$proto30["m_srcTableName"] = "contractor_master_vinc";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_cta_number",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto32["m_sql"] = "bank_cta_number";
$proto32["m_srcTableName"] = "contractor_master_vinc";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto34["m_sql"] = "sys_user";
$proto34["m_srcTableName"] = "contractor_master_vinc";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_level",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto36["m_sql"] = "sys_level";
$proto36["m_srcTableName"] = "contractor_master_vinc";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_status",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto38["m_sql"] = "sys_status";
$proto38["m_srcTableName"] = "contractor_master_vinc";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_last_upd",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto40["m_sql"] = "sys_last_upd";
$proto40["m_srcTableName"] = "contractor_master_vinc";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto42["m_sql"] = "groupid";
$proto42["m_srcTableName"] = "contractor_master_vinc";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_vinc"
));

$proto44["m_sql"] = "active";
$proto44["m_srcTableName"] = "contractor_master_vinc";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "contractor_master";
$proto47["m_srcTableName"] = "contractor_master_vinc";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "contractor_id";
$proto47["m_columns"][] = "contractor_type";
$proto47["m_columns"][] = "contractor_doc_id";
$proto47["m_columns"][] = "contractor_doc_dv";
$proto47["m_columns"][] = "contractor_pwd";
$proto47["m_columns"][] = "contractor_doc_id_dv";
$proto47["m_columns"][] = "contractor_image";
$proto47["m_columns"][] = "contractor_name";
$proto47["m_columns"][] = "contractor_lname";
$proto47["m_columns"][] = "contractor_nombresfull";
$proto47["m_columns"][] = "enlace_sigep";
$proto47["m_columns"][] = "contractor_email";
$proto47["m_columns"][] = "contractor_email_mincit";
$proto47["m_columns"][] = "contractor_address";
$proto47["m_columns"][] = "contractor_phone";
$proto47["m_columns"][] = "contractor_mobile";
$proto47["m_columns"][] = "contractor_city";
$proto47["m_columns"][] = "bank_name";
$proto47["m_columns"][] = "bank_cta_type";
$proto47["m_columns"][] = "bank_cta_number";
$proto47["m_columns"][] = "iva_regimen";
$proto47["m_columns"][] = "sys_update";
$proto47["m_columns"][] = "sys_user";
$proto47["m_columns"][] = "sys_date";
$proto47["m_columns"][] = "sys_time";
$proto47["m_columns"][] = "sys_level";
$proto47["m_columns"][] = "sys_status";
$proto47["m_columns"][] = "sys_rdn";
$proto47["m_columns"][] = "sys_last_upd";
$proto47["m_columns"][] = "groupid";
$proto47["m_columns"][] = "active";
$proto47["m_columns"][] = "contractor_medicinapre";
$proto47["m_columns"][] = "contractor_picmonetaria";
$proto47["m_columns"][] = "contractor_dependientes";
$proto47["m_columns"][] = "contractor_medicinapre_file";
$proto47["m_columns"][] = "contractor_picmonetaria_file";
$proto47["m_columns"][] = "contractor_decljur";
$proto47["m_columns"][] = "milmillas_reg";
$proto47["m_columns"][] = "milmillas_date";
$proto47["m_columns"][] = "a";
$proto47["m_columns"][] = "b";
$proto47["m_columns"][] = "c";
$proto47["m_columns"][] = "d";
$proto47["m_columns"][] = "e";
$proto47["m_columns"][] = "f";
$proto47["m_columns"][] = "g";
$proto47["m_columns"][] = "h";
$proto47["m_columns"][] = "i";
$proto47["m_columns"][] = "contractor_eps";
$proto47["m_columns"][] = "contractor_fondopensiones";
$proto47["m_columns"][] = "contractor_cajacompensacion";
$proto47["m_columns"][] = "contractor_arl";
$proto47["m_columns"][] = "ubica_dep";
$proto47["m_columns"][] = "ubica_extension";
$proto47["m_columns"][] = "dem_genero";
$proto47["m_columns"][] = "dem_ocupacion";
$proto47["m_columns"][] = "ct_fecha_nacimiento";
$proto47["m_columns"][] = "ct_nacionalidad";
$proto47["m_columns"][] = "contractor_dpto";
$proto47["m_columns"][] = "dem_edad";
$proto47["m_columns"][] = "dem_educacion";
$proto47["m_columns"][] = "dem_discapacidad";
$proto47["m_columns"][] = "emergencia";
$proto47["m_columns"][] = "vigencia";
$proto47["m_columns"][] = "dj_11";
$proto47["m_columns"][] = "dj_12";
$proto47["m_columns"][] = "dj_21";
$proto47["m_columns"][] = "dj_22";
$proto47["m_columns"][] = "dj_30";
$proto47["m_columns"][] = "dj_40";
$proto47["m_columns"][] = "dj_50";
$proto47["m_columns"][] = "dj_60";
$proto47["m_columns"][] = "dj_70";
$proto47["m_columns"][] = "dj_80";
$proto47["m_columns"][] = "dj_90";
$proto47["m_columns"][] = "dj_100";
$proto47["m_columns"][] = "terms_msj";
$proto47["m_columns"][] = "terms_acepta";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "contractor_master";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "contractor_master_vinc";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contractor_master_vinc";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contractor_master_vinc = createSqlQuery_contractor_master_vinc();


	
										;

																				

$tdatacontractor_master_vinc[".sqlquery"] = $queryData_contractor_master_vinc;

$tableEvents["contractor_master_vinc"] = new eventsBase;
$tdatacontractor_master_vinc[".hasEvents"] = false;

?>