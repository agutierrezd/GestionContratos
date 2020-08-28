<?php



$tdatacontrato_oe = array();
$tdatacontrato_oe[".searchableFields"] = array();
$tdatacontrato_oe[".ShortName"] = "contrato_oe";
$tdatacontrato_oe[".OwnerID"] = "";
$tdatacontrato_oe[".OriginalTable"] = "contrato_oe";


$tdatacontrato_oe[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_oe[".originalPagesByType"] = $tdatacontrato_oe[".pagesByType"];
$tdatacontrato_oe[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_oe[".originalPages"] = $tdatacontrato_oe[".pages"];
$tdatacontrato_oe[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_oe[".originalDefaultPages"] = $tdatacontrato_oe[".defaultPages"];

//	field labels
$fieldLabelscontrato_oe = array();
$fieldToolTipscontrato_oe = array();
$pageTitlescontrato_oe = array();
$placeHolderscontrato_oe = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_oe["Spanish"] = array();
	$fieldToolTipscontrato_oe["Spanish"] = array();
	$placeHolderscontrato_oe["Spanish"] = array();
	$pageTitlescontrato_oe["Spanish"] = array();
	$fieldLabelscontrato_oe["Spanish"]["oe_id"] = "Oe Id";
	$fieldToolTipscontrato_oe["Spanish"]["oe_id"] = "";
	$placeHolderscontrato_oe["Spanish"]["oe_id"] = "";
	$fieldLabelscontrato_oe["Spanish"]["id_cont_fk"] = "ID";
	$fieldToolTipscontrato_oe["Spanish"]["id_cont_fk"] = "";
	$placeHolderscontrato_oe["Spanish"]["id_cont_fk"] = "";
	$fieldLabelscontrato_oe["Spanish"]["cont_nit_contra_ta_fk"] = "Documento";
	$fieldToolTipscontrato_oe["Spanish"]["cont_nit_contra_ta_fk"] = "";
	$placeHolderscontrato_oe["Spanish"]["cont_nit_contra_ta_fk"] = "";
	$fieldLabelscontrato_oe["Spanish"]["oe_ordinal"] = "Ordinal";
	$fieldToolTipscontrato_oe["Spanish"]["oe_ordinal"] = "";
	$placeHolderscontrato_oe["Spanish"]["oe_ordinal"] = "";
	$fieldLabelscontrato_oe["Spanish"]["oe"] = "Obligación";
	$fieldToolTipscontrato_oe["Spanish"]["oe"] = "";
	$placeHolderscontrato_oe["Spanish"]["oe"] = "";
	$fieldLabelscontrato_oe["Spanish"]["sys_last_upd"] = "Fecha registro";
	$fieldToolTipscontrato_oe["Spanish"]["sys_last_upd"] = "";
	$placeHolderscontrato_oe["Spanish"]["sys_last_upd"] = "";
	$fieldLabelscontrato_oe["Spanish"]["sys_user"] = "Usuario";
	$fieldToolTipscontrato_oe["Spanish"]["sys_user"] = "";
	$placeHolderscontrato_oe["Spanish"]["sys_user"] = "";
	if (count($fieldToolTipscontrato_oe["Spanish"]))
		$tdatacontrato_oe[".isUseToolTips"] = true;
}


	$tdatacontrato_oe[".NCSearch"] = true;



$tdatacontrato_oe[".shortTableName"] = "contrato_oe";
$tdatacontrato_oe[".nSecOptions"] = 0;

$tdatacontrato_oe[".mainTableOwnerID"] = "";
$tdatacontrato_oe[".entityType"] = 0;

$tdatacontrato_oe[".strOriginalTableName"] = "contrato_oe";

	



$tdatacontrato_oe[".showAddInPopup"] = false;

$tdatacontrato_oe[".showEditInPopup"] = false;

$tdatacontrato_oe[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrato_oe[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrato_oe[".listAjax"] = false;
//	temporary
$tdatacontrato_oe[".listAjax"] = false;

	$tdatacontrato_oe[".audit"] = true;

	$tdatacontrato_oe[".locking"] = true;


$pages = $tdatacontrato_oe[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_oe[".edit"] = true;
	$tdatacontrato_oe[".afterEditAction"] = 1;
	$tdatacontrato_oe[".closePopupAfterEdit"] = 1;
	$tdatacontrato_oe[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_oe[".add"] = true;
$tdatacontrato_oe[".afterAddAction"] = 1;
$tdatacontrato_oe[".closePopupAfterAdd"] = 1;
$tdatacontrato_oe[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_oe[".list"] = true;
}



$tdatacontrato_oe[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_oe[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_oe[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_oe[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_oe[".printFriendly"] = true;
}



$tdatacontrato_oe[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_oe[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_oe[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_oe[".isUseAjaxSuggest"] = true;

$tdatacontrato_oe[".rowHighlite"] = true;



																		

$tdatacontrato_oe[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_oe[".buttonsAdded"] = false;

$tdatacontrato_oe[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_oe[".isUseTimeForSearch"] = false;


$tdatacontrato_oe[".badgeColor"] = "db7093";


$tdatacontrato_oe[".allSearchFields"] = array();
$tdatacontrato_oe[".filterFields"] = array();
$tdatacontrato_oe[".requiredSearchFields"] = array();

$tdatacontrato_oe[".googleLikeFields"] = array();
$tdatacontrato_oe[".googleLikeFields"][] = "oe_id";
$tdatacontrato_oe[".googleLikeFields"][] = "id_cont_fk";
$tdatacontrato_oe[".googleLikeFields"][] = "cont_nit_contra_ta_fk";
$tdatacontrato_oe[".googleLikeFields"][] = "oe_ordinal";
$tdatacontrato_oe[".googleLikeFields"][] = "oe";
$tdatacontrato_oe[".googleLikeFields"][] = "sys_last_upd";
$tdatacontrato_oe[".googleLikeFields"][] = "sys_user";



$tdatacontrato_oe[".tableType"] = "list";

$tdatacontrato_oe[".printerPageOrientation"] = 0;
$tdatacontrato_oe[".nPrinterPageScale"] = 100;

$tdatacontrato_oe[".nPrinterSplitRecords"] = 40;

$tdatacontrato_oe[".geocodingEnabled"] = false;










$tdatacontrato_oe[".pageSize"] = 20;

$tdatacontrato_oe[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY oe_ordinal";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrato_oe[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_oe[".orderindexes"] = array();
	$tdatacontrato_oe[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "oe_ordinal");


$tdatacontrato_oe[".sqlHead"] = "SELECT oe_id,  id_cont_fk,  cont_nit_contra_ta_fk,  oe_ordinal,  oe,  sys_last_upd,  sys_user";
$tdatacontrato_oe[".sqlFrom"] = "FROM contrato_oe";
$tdatacontrato_oe[".sqlWhereExpr"] = "";
$tdatacontrato_oe[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_oe[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_oe[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_oe[".highlightSearchResults"] = true;

$tableKeyscontrato_oe = array();
$tableKeyscontrato_oe[] = "oe_id";
$tdatacontrato_oe[".Keys"] = $tableKeyscontrato_oe;


$tdatacontrato_oe[".hideMobileList"] = array();




//	oe_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "oe_id";
	$fdata["GoodName"] = "oe_id";
	$fdata["ownerTable"] = "contrato_oe";
	$fdata["Label"] = GetFieldLabel("contrato_oe","oe_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "oe_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oe_id";

	
	
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


	$tdatacontrato_oe["oe_id"] = $fdata;
		$tdatacontrato_oe[".searchableFields"][] = "oe_id";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "contrato_oe";
	$fdata["Label"] = GetFieldLabel("contrato_oe","id_cont_fk");
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
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"cont_nit_contra_ta_fk", 'lookupF'=>"cont_nit_contra_ta");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "id_cont";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "oe_ordinal";
				$edata["DependentLookups"][] = "oe_ordinal";

	
	
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


	$tdatacontrato_oe["id_cont_fk"] = $fdata;
		$tdatacontrato_oe[".searchableFields"][] = "id_cont_fk";
//	cont_nit_contra_ta_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cont_nit_contra_ta_fk";
	$fdata["GoodName"] = "cont_nit_contra_ta_fk";
	$fdata["ownerTable"] = "contrato_oe";
	$fdata["Label"] = GetFieldLabel("contrato_oe","cont_nit_contra_ta_fk");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_nit_contra_ta_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_nit_contra_ta_fk";

	
	
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


	$tdatacontrato_oe["cont_nit_contra_ta_fk"] = $fdata;
		$tdatacontrato_oe[".searchableFields"][] = "cont_nit_contra_ta_fk";
//	oe_ordinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "oe_ordinal";
	$fdata["GoodName"] = "oe_ordinal";
	$fdata["ownerTable"] = "contrato_oe";
	$fdata["Label"] = GetFieldLabel("contrato_oe","oe_ordinal");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "oe_ordinal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oe_ordinal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_oe_ordinal";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "qty";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "qty";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_cont_fk", "lookup" => "id_cont" );

	
	

	
	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_oe_ordinal";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "qty";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "qty";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_cont_fk", "lookup" => "id_cont" );

	
	

	
	
	
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


	$fdata["isSeparate"] = true;




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


	$tdatacontrato_oe["oe_ordinal"] = $fdata;
		$tdatacontrato_oe[".searchableFields"][] = "oe_ordinal";
//	oe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "oe";
	$fdata["GoodName"] = "oe";
	$fdata["ownerTable"] = "contrato_oe";
	$fdata["Label"] = GetFieldLabel("contrato_oe","oe");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "oe";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oe";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 150;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatacontrato_oe["oe"] = $fdata;
		$tdatacontrato_oe[".searchableFields"][] = "oe";
//	sys_last_upd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sys_last_upd";
	$fdata["GoodName"] = "sys_last_upd";
	$fdata["ownerTable"] = "contrato_oe";
	$fdata["Label"] = GetFieldLabel("contrato_oe","sys_last_upd");
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


	$tdatacontrato_oe["sys_last_upd"] = $fdata;
		$tdatacontrato_oe[".searchableFields"][] = "sys_last_upd";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "contrato_oe";
	$fdata["Label"] = GetFieldLabel("contrato_oe","sys_user");
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


	$tdatacontrato_oe["sys_user"] = $fdata;
		$tdatacontrato_oe[".searchableFields"][] = "sys_user";


$tables_data["contrato_oe"]=&$tdatacontrato_oe;
$field_labels["contrato_oe"] = &$fieldLabelscontrato_oe;
$fieldToolTips["contrato_oe"] = &$fieldToolTipscontrato_oe;
$placeHolders["contrato_oe"] = &$placeHolderscontrato_oe;
$page_titles["contrato_oe"] = &$pageTitlescontrato_oe;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contrato_oe"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["contrato_oe"] = array();



	
				$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_oe"][0] = $masterParams;
				$masterTablesData["contrato_oe"][0]["masterKeys"] = array();
	$masterTablesData["contrato_oe"][0]["masterKeys"][]="id_cont";
				$masterTablesData["contrato_oe"][0]["detailKeys"] = array();
	$masterTablesData["contrato_oe"][0]["detailKeys"][]="id_cont_fk";
		
	
				$strOriginalDetailsTable="q_bandejaentrada_supervisores";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_bandejaentrada_supervisores";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_bandejaentrada_supervisores";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_oe"][1] = $masterParams;
				$masterTablesData["contrato_oe"][1]["masterKeys"] = array();
	$masterTablesData["contrato_oe"][1]["masterKeys"][]="id_cont";
				$masterTablesData["contrato_oe"][1]["detailKeys"] = array();
	$masterTablesData["contrato_oe"][1]["detailKeys"][]="id_cont_fk";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_contrato_oe()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "oe_id,  id_cont_fk,  cont_nit_contra_ta_fk,  oe_ordinal,  oe,  sys_last_upd,  sys_user";
$proto0["m_strFrom"] = "FROM contrato_oe";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY oe_ordinal";
	
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
	"m_strName" => "oe_id",
	"m_strTable" => "contrato_oe",
	"m_srcTableName" => "contrato_oe"
));

$proto6["m_sql"] = "oe_id";
$proto6["m_srcTableName"] = "contrato_oe";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "contrato_oe",
	"m_srcTableName" => "contrato_oe"
));

$proto8["m_sql"] = "id_cont_fk";
$proto8["m_srcTableName"] = "contrato_oe";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_nit_contra_ta_fk",
	"m_strTable" => "contrato_oe",
	"m_srcTableName" => "contrato_oe"
));

$proto10["m_sql"] = "cont_nit_contra_ta_fk";
$proto10["m_srcTableName"] = "contrato_oe";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "oe_ordinal",
	"m_strTable" => "contrato_oe",
	"m_srcTableName" => "contrato_oe"
));

$proto12["m_sql"] = "oe_ordinal";
$proto12["m_srcTableName"] = "contrato_oe";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "oe",
	"m_strTable" => "contrato_oe",
	"m_srcTableName" => "contrato_oe"
));

$proto14["m_sql"] = "oe";
$proto14["m_srcTableName"] = "contrato_oe";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_last_upd",
	"m_strTable" => "contrato_oe",
	"m_srcTableName" => "contrato_oe"
));

$proto16["m_sql"] = "sys_last_upd";
$proto16["m_srcTableName"] = "contrato_oe";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "contrato_oe",
	"m_srcTableName" => "contrato_oe"
));

$proto18["m_sql"] = "sys_user";
$proto18["m_srcTableName"] = "contrato_oe";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "contrato_oe";
$proto21["m_srcTableName"] = "contrato_oe";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "oe_id";
$proto21["m_columns"][] = "id_cont_fk";
$proto21["m_columns"][] = "cont_nit_contra_ta_fk";
$proto21["m_columns"][] = "oe_ordinal";
$proto21["m_columns"][] = "oe";
$proto21["m_columns"][] = "sys_last_upd";
$proto21["m_columns"][] = "sys_user";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "contrato_oe";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "contrato_oe";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "oe_ordinal",
	"m_strTable" => "contrato_oe",
	"m_srcTableName" => "contrato_oe"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="contrato_oe";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_oe = createSqlQuery_contrato_oe();


	
										;

							

$tdatacontrato_oe[".sqlquery"] = $queryData_contrato_oe;

$tableEvents["contrato_oe"] = new eventsBase;
$tdatacontrato_oe[".hasEvents"] = false;

?>