<?php



$tdatacargo = array();
$tdatacargo[".searchableFields"] = array();
$tdatacargo[".ShortName"] = "cargo";
$tdatacargo[".OwnerID"] = "";
$tdatacargo[".OriginalTable"] = "cargo";


$tdatacargo[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatacargo[".originalPagesByType"] = $tdatacargo[".pagesByType"];
$tdatacargo[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatacargo[".originalPages"] = $tdatacargo[".pages"];
$tdatacargo[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatacargo[".originalDefaultPages"] = $tdatacargo[".defaultPages"];

//	field labels
$fieldLabelscargo = array();
$fieldToolTipscargo = array();
$pageTitlescargo = array();
$placeHolderscargo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscargo["Spanish"] = array();
	$fieldToolTipscargo["Spanish"] = array();
	$placeHolderscargo["Spanish"] = array();
	$pageTitlescargo["Spanish"] = array();
	$fieldLabelscargo["Spanish"]["id"] = "Id";
	$fieldToolTipscargo["Spanish"]["id"] = "";
	$placeHolderscargo["Spanish"]["id"] = "";
	$fieldLabelscargo["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipscargo["Spanish"]["nombre"] = "";
	$placeHolderscargo["Spanish"]["nombre"] = "";
	$fieldLabelscargo["Spanish"]["cargo"] = "Cargo";
	$fieldToolTipscargo["Spanish"]["cargo"] = "";
	$placeHolderscargo["Spanish"]["cargo"] = "";
	$fieldLabelscargo["Spanish"]["grado"] = "Grado";
	$fieldToolTipscargo["Spanish"]["grado"] = "";
	$placeHolderscargo["Spanish"]["grado"] = "";
	$fieldLabelscargo["Spanish"]["estado"] = "Estado";
	$fieldToolTipscargo["Spanish"]["estado"] = "";
	$placeHolderscargo["Spanish"]["estado"] = "";
	$fieldLabelscargo["Spanish"]["propositoPrincipal"] = "Proposito Principal";
	$fieldToolTipscargo["Spanish"]["propositoPrincipal"] = "";
	$placeHolderscargo["Spanish"]["propositoPrincipal"] = "";
	$fieldLabelscargo["Spanish"]["codcar"] = "Codcar";
	$fieldToolTipscargo["Spanish"]["codcar"] = "";
	$placeHolderscargo["Spanish"]["codcar"] = "";
	$fieldLabelscargo["Spanish"]["idComportamentalFK"] = "Id Comportamental FK";
	$fieldToolTipscargo["Spanish"]["idComportamentalFK"] = "";
	$placeHolderscargo["Spanish"]["idComportamentalFK"] = "";
	$fieldLabelscargo["Spanish"]["ExperienciaMeses"] = "Experiencia Meses";
	$fieldToolTipscargo["Spanish"]["ExperienciaMeses"] = "";
	$placeHolderscargo["Spanish"]["ExperienciaMeses"] = "";
	$fieldLabelscargo["Spanish"]["Directivo"] = "Directivo";
	$fieldToolTipscargo["Spanish"]["Directivo"] = "";
	$placeHolderscargo["Spanish"]["Directivo"] = "";
	if (count($fieldToolTipscargo["Spanish"]))
		$tdatacargo[".isUseToolTips"] = true;
}


	$tdatacargo[".NCSearch"] = true;



$tdatacargo[".shortTableName"] = "cargo";
$tdatacargo[".nSecOptions"] = 0;

$tdatacargo[".mainTableOwnerID"] = "";
$tdatacargo[".entityType"] = 0;

$tdatacargo[".strOriginalTableName"] = "cargo";

	



$tdatacargo[".showAddInPopup"] = false;

$tdatacargo[".showEditInPopup"] = false;

$tdatacargo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacargo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacargo[".listAjax"] = false;
//	temporary
$tdatacargo[".listAjax"] = false;

	$tdatacargo[".audit"] = true;

	$tdatacargo[".locking"] = true;


$pages = $tdatacargo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacargo[".edit"] = true;
	$tdatacargo[".afterEditAction"] = 1;
	$tdatacargo[".closePopupAfterEdit"] = 1;
	$tdatacargo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacargo[".add"] = true;
$tdatacargo[".afterAddAction"] = 1;
$tdatacargo[".closePopupAfterAdd"] = 1;
$tdatacargo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacargo[".list"] = true;
}



$tdatacargo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacargo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacargo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacargo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacargo[".printFriendly"] = true;
}



$tdatacargo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacargo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacargo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacargo[".isUseAjaxSuggest"] = true;

$tdatacargo[".rowHighlite"] = true;



						

$tdatacargo[".ajaxCodeSnippetAdded"] = false;

$tdatacargo[".buttonsAdded"] = false;

$tdatacargo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacargo[".isUseTimeForSearch"] = false;


$tdatacargo[".badgeColor"] = "3CB371";


$tdatacargo[".allSearchFields"] = array();
$tdatacargo[".filterFields"] = array();
$tdatacargo[".requiredSearchFields"] = array();

$tdatacargo[".googleLikeFields"] = array();
$tdatacargo[".googleLikeFields"][] = "id";
$tdatacargo[".googleLikeFields"][] = "nombre";
$tdatacargo[".googleLikeFields"][] = "cargo";
$tdatacargo[".googleLikeFields"][] = "grado";
$tdatacargo[".googleLikeFields"][] = "estado";
$tdatacargo[".googleLikeFields"][] = "propositoPrincipal";
$tdatacargo[".googleLikeFields"][] = "codcar";
$tdatacargo[".googleLikeFields"][] = "idComportamentalFK";
$tdatacargo[".googleLikeFields"][] = "ExperienciaMeses";
$tdatacargo[".googleLikeFields"][] = "Directivo";



$tdatacargo[".tableType"] = "list";

$tdatacargo[".printerPageOrientation"] = 0;
$tdatacargo[".nPrinterPageScale"] = 100;

$tdatacargo[".nPrinterSplitRecords"] = 40;

$tdatacargo[".geocodingEnabled"] = false;










$tdatacargo[".pageSize"] = 20;

$tdatacargo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacargo[".strOrderBy"] = $tstrOrderBy;

$tdatacargo[".orderindexes"] = array();

$tdatacargo[".sqlHead"] = "SELECT id,  	nombre,  	cargo,  	grado,  	estado,  	propositoPrincipal,  	codcar,  	idComportamentalFK,  	ExperienciaMeses,  	Directivo";
$tdatacargo[".sqlFrom"] = "FROM cargo";
$tdatacargo[".sqlWhereExpr"] = "";
$tdatacargo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacargo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacargo[".arrGroupsPerPage"] = $arrGPP;

$tdatacargo[".highlightSearchResults"] = true;

$tableKeyscargo = array();
$tableKeyscargo[] = "id";
$tdatacargo[".Keys"] = $tableKeyscargo;


$tdatacargo[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatacargo["id"] = $fdata;
		$tdatacargo[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo","nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatacargo["nombre"] = $fdata;
		$tdatacargo[".searchableFields"][] = "nombre";
//	cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cargo";
	$fdata["GoodName"] = "cargo";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo","cargo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cargo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cargo";

	
	
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
			$edata["EditParams"].= " maxlength=6";

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


	$tdatacargo["cargo"] = $fdata;
		$tdatacargo[".searchableFields"][] = "cargo";
//	grado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "grado";
	$fdata["GoodName"] = "grado";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo","grado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "grado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grado";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatacargo["grado"] = $fdata;
		$tdatacargo[".searchableFields"][] = "grado";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo","estado");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
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


	$tdatacargo["estado"] = $fdata;
		$tdatacargo[".searchableFields"][] = "estado";
//	propositoPrincipal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "propositoPrincipal";
	$fdata["GoodName"] = "propositoPrincipal";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo","propositoPrincipal");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "propositoPrincipal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "propositoPrincipal";

	
	
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


	$tdatacargo["propositoPrincipal"] = $fdata;
		$tdatacargo[".searchableFields"][] = "propositoPrincipal";
//	codcar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "codcar";
	$fdata["GoodName"] = "codcar";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo","codcar");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "codcar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codcar";

	
	
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


	$tdatacargo["codcar"] = $fdata;
		$tdatacargo[".searchableFields"][] = "codcar";
//	idComportamentalFK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idComportamentalFK";
	$fdata["GoodName"] = "idComportamentalFK";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo","idComportamentalFK");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "idComportamentalFK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idComportamentalFK";

	
	
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
	$edata["LookupTable"] = "comportamental";
	$edata["LookupConnId"] = "edl_at_localhost";
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


	$tdatacargo["idComportamentalFK"] = $fdata;
		$tdatacargo[".searchableFields"][] = "idComportamentalFK";
//	ExperienciaMeses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ExperienciaMeses";
	$fdata["GoodName"] = "ExperienciaMeses";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo","ExperienciaMeses");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "ExperienciaMeses";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ExperienciaMeses";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
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


	$tdatacargo["ExperienciaMeses"] = $fdata;
		$tdatacargo[".searchableFields"][] = "ExperienciaMeses";
//	Directivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Directivo";
	$fdata["GoodName"] = "Directivo";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo","Directivo");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "Directivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Directivo";

	
	
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


	$tdatacargo["Directivo"] = $fdata;
		$tdatacargo[".searchableFields"][] = "Directivo";


$tables_data["cargo"]=&$tdatacargo;
$field_labels["cargo"] = &$fieldLabelscargo;
$fieldToolTips["cargo"] = &$fieldToolTipscargo;
$placeHolders["cargo"] = &$placeHolderscargo;
$page_titles["cargo"] = &$pageTitlescargo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cargo"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["cargo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_cargo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	cargo,  	grado,  	estado,  	propositoPrincipal,  	codcar,  	idComportamentalFK,  	ExperienciaMeses,  	Directivo";
$proto0["m_strFrom"] = "FROM cargo";
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
	"m_strName" => "id",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "cargo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "cargo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo"
));

$proto10["m_sql"] = "cargo";
$proto10["m_srcTableName"] = "cargo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "grado",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo"
));

$proto12["m_sql"] = "grado";
$proto12["m_srcTableName"] = "cargo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo"
));

$proto14["m_sql"] = "estado";
$proto14["m_srcTableName"] = "cargo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "propositoPrincipal",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo"
));

$proto16["m_sql"] = "propositoPrincipal";
$proto16["m_srcTableName"] = "cargo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "codcar",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo"
));

$proto18["m_sql"] = "codcar";
$proto18["m_srcTableName"] = "cargo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "idComportamentalFK",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo"
));

$proto20["m_sql"] = "idComportamentalFK";
$proto20["m_srcTableName"] = "cargo";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ExperienciaMeses",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo"
));

$proto22["m_sql"] = "ExperienciaMeses";
$proto22["m_srcTableName"] = "cargo";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Directivo",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo"
));

$proto24["m_sql"] = "Directivo";
$proto24["m_srcTableName"] = "cargo";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "cargo";
$proto27["m_srcTableName"] = "cargo";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "nombre";
$proto27["m_columns"][] = "cargo";
$proto27["m_columns"][] = "grado";
$proto27["m_columns"][] = "estado";
$proto27["m_columns"][] = "propositoPrincipal";
$proto27["m_columns"][] = "codcar";
$proto27["m_columns"][] = "idComportamentalFK";
$proto27["m_columns"][] = "ExperienciaMeses";
$proto27["m_columns"][] = "Directivo";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "cargo";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "cargo";
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
$proto0["m_srcTableName"]="cargo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cargo = createSqlQuery_cargo();


	
										;

										

$tdatacargo[".sqlquery"] = $queryData_cargo;

$tableEvents["cargo"] = new eventsBase;
$tdatacargo[".hasEvents"] = false;

?>