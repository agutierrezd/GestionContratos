<?php



$tdatacontrato = array();
$tdatacontrato[".searchableFields"] = array();
$tdatacontrato[".ShortName"] = "contrato";
$tdatacontrato[".OwnerID"] = "";
$tdatacontrato[".OriginalTable"] = "contrato";


$tdatacontrato[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato[".originalPagesByType"] = $tdatacontrato[".pagesByType"];
$tdatacontrato[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato[".originalPages"] = $tdatacontrato[".pages"];
$tdatacontrato[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato[".originalDefaultPages"] = $tdatacontrato[".defaultPages"];

//	field labels
$fieldLabelscontrato = array();
$fieldToolTipscontrato = array();
$pageTitlescontrato = array();
$placeHolderscontrato = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato["Spanish"] = array();
	$fieldToolTipscontrato["Spanish"] = array();
	$placeHolderscontrato["Spanish"] = array();
	$pageTitlescontrato["Spanish"] = array();
	$fieldLabelscontrato["Spanish"]["id_cont"] = "ID";
	$fieldToolTipscontrato["Spanish"]["id_cont"] = "";
	$placeHolderscontrato["Spanish"]["id_cont"] = "";
	$fieldLabelscontrato["Spanish"]["cont_hash"] = "Cont Hash";
	$fieldToolTipscontrato["Spanish"]["cont_hash"] = "";
	$placeHolderscontrato["Spanish"]["cont_hash"] = "";
	$fieldLabelscontrato["Spanish"]["cont_nit_contra_ta"] = "Contratista";
	$fieldToolTipscontrato["Spanish"]["cont_nit_contra_ta"] = "";
	$placeHolderscontrato["Spanish"]["cont_nit_contra_ta"] = "";
	$fieldLabelscontrato["Spanish"]["cont_paa_id"] = "PAA";
	$fieldToolTipscontrato["Spanish"]["cont_paa_id"] = "";
	$placeHolderscontrato["Spanish"]["cont_paa_id"] = "";
	$fieldLabelscontrato["Spanish"]["cont_estado"] = "Estado";
	$fieldToolTipscontrato["Spanish"]["cont_estado"] = "";
	$placeHolderscontrato["Spanish"]["cont_estado"] = "";
	$fieldLabelscontrato["Spanish"]["prenumero"] = "Registro presupuestal";
	$fieldToolTipscontrato["Spanish"]["prenumero"] = "";
	$placeHolderscontrato["Spanish"]["prenumero"] = "";
	$fieldLabelscontrato["Spanish"]["numregistro"] = "CDP";
	$fieldToolTipscontrato["Spanish"]["numregistro"] = "";
	$placeHolderscontrato["Spanish"]["numregistro"] = "";
	$fieldLabelscontrato["Spanish"]["pre_contnumero"] = "Pre número";
	$fieldToolTipscontrato["Spanish"]["pre_contnumero"] = "";
	$placeHolderscontrato["Spanish"]["pre_contnumero"] = "";
	$fieldLabelscontrato["Spanish"]["contnumero"] = "Número de contrato";
	$fieldToolTipscontrato["Spanish"]["contnumero"] = "";
	$placeHolderscontrato["Spanish"]["contnumero"] = "";
	$fieldLabelscontrato["Spanish"]["cont_tipo"] = "Tipo de CDP";
	$fieldToolTipscontrato["Spanish"]["cont_tipo"] = "";
	$placeHolderscontrato["Spanish"]["cont_tipo"] = "";
	$fieldLabelscontrato["Spanish"]["cont_ano"] = "Vigencia";
	$fieldToolTipscontrato["Spanish"]["cont_ano"] = "";
	$placeHolderscontrato["Spanish"]["cont_ano"] = "";
	$fieldLabelscontrato["Spanish"]["cont_codrubro"] = "Rubro / uso presupuestal";
	$fieldToolTipscontrato["Spanish"]["cont_codrubro"] = "";
	$placeHolderscontrato["Spanish"]["cont_codrubro"] = "";
	$fieldLabelscontrato["Spanish"]["cont_catalogo_presupuestal"] = "Catalogo Presupuestal";
	$fieldToolTipscontrato["Spanish"]["cont_catalogo_presupuestal"] = "";
	$placeHolderscontrato["Spanish"]["cont_catalogo_presupuestal"] = "";
	$fieldLabelscontrato["Spanish"]["cont_tipopre"] = "Unidad ejecutora";
	$fieldToolTipscontrato["Spanish"]["cont_tipopre"] = "";
	$placeHolderscontrato["Spanish"]["cont_tipopre"] = "";
	$fieldLabelscontrato["Spanish"]["cont_fechaapertura"] = "Fecha suscripción";
	$fieldToolTipscontrato["Spanish"]["cont_fechaapertura"] = "";
	$placeHolderscontrato["Spanish"]["cont_fechaapertura"] = "";
	$fieldLabelscontrato["Spanish"]["cont_fecha_inicio"] = "Fecha de inicio";
	$fieldToolTipscontrato["Spanish"]["cont_fecha_inicio"] = "";
	$placeHolderscontrato["Spanish"]["cont_fecha_inicio"] = "";
	$fieldLabelscontrato["Spanish"]["cont_fechafinal"] = "Fecha final";
	$fieldToolTipscontrato["Spanish"]["cont_fechafinal"] = "";
	$placeHolderscontrato["Spanish"]["cont_fechafinal"] = "";
	$fieldLabelscontrato["Spanish"]["cont_fechavigencia"] = "Fecha vigencia del contrato";
	$fieldToolTipscontrato["Spanish"]["cont_fechavigencia"] = "";
	$placeHolderscontrato["Spanish"]["cont_fechavigencia"] = "";
	$fieldLabelscontrato["Spanish"]["cont_periodicidad"] = "Periodicidad";
	$fieldToolTipscontrato["Spanish"]["cont_periodicidad"] = "";
	$placeHolderscontrato["Spanish"]["cont_periodicidad"] = "";
	$fieldLabelscontrato["Spanish"]["cont_informessug"] = "Informes sugeridos";
	$fieldToolTipscontrato["Spanish"]["cont_informessug"] = "";
	$placeHolderscontrato["Spanish"]["cont_informessug"] = "";
	$fieldLabelscontrato["Spanish"]["cont_valorant"] = "Valor anterior";
	$fieldToolTipscontrato["Spanish"]["cont_valorant"] = "";
	$placeHolderscontrato["Spanish"]["cont_valorant"] = "";
	$fieldLabelscontrato["Spanish"]["cont_valorinicial"] = "Valor inicial del contrato";
	$fieldToolTipscontrato["Spanish"]["cont_valorinicial"] = "";
	$placeHolderscontrato["Spanish"]["cont_valorinicial"] = "";
	$fieldLabelscontrato["Spanish"]["cont_valormensual"] = "Valor mensual a pagar";
	$fieldToolTipscontrato["Spanish"]["cont_valormensual"] = "";
	$placeHolderscontrato["Spanish"]["cont_valormensual"] = "";
	$fieldLabelscontrato["Spanish"]["cont_modalidad"] = "Modalidad";
	$fieldToolTipscontrato["Spanish"]["cont_modalidad"] = "";
	$placeHolderscontrato["Spanish"]["cont_modalidad"] = "";
	$fieldLabelscontrato["Spanish"]["cont_objeto"] = "Objeto del contrato";
	$fieldToolTipscontrato["Spanish"]["cont_objeto"] = "";
	$placeHolderscontrato["Spanish"]["cont_objeto"] = "";
	$fieldLabelscontrato["Spanish"]["cont_tipoproceso"] = "Tipo de proceso";
	$fieldToolTipscontrato["Spanish"]["cont_tipoproceso"] = "";
	$placeHolderscontrato["Spanish"]["cont_tipoproceso"] = "";
	$fieldLabelscontrato["Spanish"]["cont_formapago"] = "Forma de pago";
	$fieldToolTipscontrato["Spanish"]["cont_formapago"] = "";
	$placeHolderscontrato["Spanish"]["cont_formapago"] = "";
	$fieldLabelscontrato["Spanish"]["cont_fechasistema"] = "Fecha del sistema";
	$fieldToolTipscontrato["Spanish"]["cont_fechasistema"] = "";
	$placeHolderscontrato["Spanish"]["cont_fechasistema"] = "";
	$fieldLabelscontrato["Spanish"]["cont_acta_liquidacion"] = "Requiere acta de liquidación?";
	$fieldToolTipscontrato["Spanish"]["cont_acta_liquidacion"] = "";
	$placeHolderscontrato["Spanish"]["cont_acta_liquidacion"] = "";
	$fieldLabelscontrato["Spanish"]["cont_tipoc"] = "Tipo de contrato";
	$fieldToolTipscontrato["Spanish"]["cont_tipoc"] = "";
	$placeHolderscontrato["Spanish"]["cont_tipoc"] = "";
	$fieldLabelscontrato["Spanish"]["cont_causalc"] = "Causal";
	$fieldToolTipscontrato["Spanish"]["cont_causalc"] = "";
	$placeHolderscontrato["Spanish"]["cont_causalc"] = "";
	$fieldLabelscontrato["Spanish"]["nombre_cont"] = "Razón social / Nombre";
	$fieldToolTipscontrato["Spanish"]["nombre_cont"] = "";
	$placeHolderscontrato["Spanish"]["nombre_cont"] = "";
	$fieldLabelscontrato["Spanish"]["cont_obligaciones"] = "Obligaciones";
	$fieldToolTipscontrato["Spanish"]["cont_obligaciones"] = "";
	$placeHolderscontrato["Spanish"]["cont_obligaciones"] = "";
	$fieldLabelscontrato["Spanish"]["cont_plazo"] = "Plazo";
	$fieldToolTipscontrato["Spanish"]["cont_plazo"] = "";
	$placeHolderscontrato["Spanish"]["cont_plazo"] = "";
	$fieldLabelscontrato["Spanish"]["cont_vigencias_futuras"] = "¿Contrato con vigencias futuras?";
	$fieldToolTipscontrato["Spanish"]["cont_vigencias_futuras"] = "";
	$placeHolderscontrato["Spanish"]["cont_vigencias_futuras"] = "";
	$fieldLabelscontrato["Spanish"]["cont_secop_proceso"] = "Número de proceso SECOP";
	$fieldToolTipscontrato["Spanish"]["cont_secop_proceso"] = "";
	$placeHolderscontrato["Spanish"]["cont_secop_proceso"] = "";
	$fieldLabelscontrato["Spanish"]["cont_secop_enlace"] = "Enlace a SECOP";
	$fieldToolTipscontrato["Spanish"]["cont_secop_enlace"] = "";
	$placeHolderscontrato["Spanish"]["cont_secop_enlace"] = "";
	$fieldLabelscontrato["Spanish"]["cont_sigep"] = "¿ Información en SIGEP?";
	$fieldToolTipscontrato["Spanish"]["cont_sigep"] = "";
	$placeHolderscontrato["Spanish"]["cont_sigep"] = "";
	$fieldLabelscontrato["Spanish"]["vf_num_autorizacion"] = "Número de autorizacion";
	$fieldToolTipscontrato["Spanish"]["vf_num_autorizacion"] = "";
	$placeHolderscontrato["Spanish"]["vf_num_autorizacion"] = "";
	$fieldLabelscontrato["Spanish"]["vf_fecha"] = "Fecha de autorización";
	$fieldToolTipscontrato["Spanish"]["vf_fecha"] = "";
	$placeHolderscontrato["Spanish"]["vf_fecha"] = "";
	$fieldLabelscontrato["Spanish"]["vf_valor"] = "Valor de la vigencia futura";
	$fieldToolTipscontrato["Spanish"]["vf_valor"] = "";
	$placeHolderscontrato["Spanish"]["vf_valor"] = "";
	$fieldLabelscontrato["Spanish"]["cont_unspsc"] = "Códigos UNSPSC";
	$fieldToolTipscontrato["Spanish"]["cont_unspsc"] = "";
	$placeHolderscontrato["Spanish"]["cont_unspsc"] = "";
	$pageTitlescontrato["Spanish"]["view"] = "Contrato {%id_cont}{%pre_contnumero}{%contnumero}";
	$pageTitlescontrato["Spanish"]["add"] = "Registrar un nuevo contrato";
	if (count($fieldToolTipscontrato["Spanish"]))
		$tdatacontrato[".isUseToolTips"] = true;
}


	$tdatacontrato[".NCSearch"] = true;



$tdatacontrato[".shortTableName"] = "contrato";
$tdatacontrato[".nSecOptions"] = 0;

$tdatacontrato[".mainTableOwnerID"] = "";
$tdatacontrato[".entityType"] = 0;

$tdatacontrato[".strOriginalTableName"] = "contrato";

	



$tdatacontrato[".showAddInPopup"] = false;

$tdatacontrato[".showEditInPopup"] = false;

$tdatacontrato[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrato[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrato[".listAjax"] = false;
//	temporary
$tdatacontrato[".listAjax"] = false;

	$tdatacontrato[".audit"] = true;

	$tdatacontrato[".locking"] = true;


$pages = $tdatacontrato[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato[".edit"] = true;
	$tdatacontrato[".afterEditAction"] = 1;
	$tdatacontrato[".closePopupAfterEdit"] = 1;
	$tdatacontrato[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato[".add"] = true;
$tdatacontrato[".afterAddAction"] = 1;
$tdatacontrato[".closePopupAfterAdd"] = 1;
$tdatacontrato[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato[".list"] = true;
}



$tdatacontrato[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato[".printFriendly"] = true;
}



$tdatacontrato[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato[".isUseAjaxSuggest"] = true;

$tdatacontrato[".rowHighlite"] = true;



			

$tdatacontrato[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato[".buttonsAdded"] = false;

$tdatacontrato[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato[".isUseTimeForSearch"] = false;


$tdatacontrato[".badgeColor"] = "E8926F";


$tdatacontrato[".allSearchFields"] = array();
$tdatacontrato[".filterFields"] = array();
$tdatacontrato[".requiredSearchFields"] = array();

$tdatacontrato[".googleLikeFields"] = array();
$tdatacontrato[".googleLikeFields"][] = "id_cont";
$tdatacontrato[".googleLikeFields"][] = "cont_hash";
$tdatacontrato[".googleLikeFields"][] = "cont_ano";
$tdatacontrato[".googleLikeFields"][] = "cont_paa_id";
$tdatacontrato[".googleLikeFields"][] = "cont_nit_contra_ta";
$tdatacontrato[".googleLikeFields"][] = "nombre_cont";
$tdatacontrato[".googleLikeFields"][] = "cont_estado";
$tdatacontrato[".googleLikeFields"][] = "prenumero";
$tdatacontrato[".googleLikeFields"][] = "numregistro";
$tdatacontrato[".googleLikeFields"][] = "pre_contnumero";
$tdatacontrato[".googleLikeFields"][] = "contnumero";
$tdatacontrato[".googleLikeFields"][] = "cont_tipo";
$tdatacontrato[".googleLikeFields"][] = "cont_codrubro";
$tdatacontrato[".googleLikeFields"][] = "cont_catalogo_presupuestal";
$tdatacontrato[".googleLikeFields"][] = "cont_tipopre";
$tdatacontrato[".googleLikeFields"][] = "cont_fechaapertura";
$tdatacontrato[".googleLikeFields"][] = "cont_fecha_inicio";
$tdatacontrato[".googleLikeFields"][] = "cont_fechafinal";
$tdatacontrato[".googleLikeFields"][] = "cont_fechavigencia";
$tdatacontrato[".googleLikeFields"][] = "cont_periodicidad";
$tdatacontrato[".googleLikeFields"][] = "cont_informessug";
$tdatacontrato[".googleLikeFields"][] = "cont_valorant";
$tdatacontrato[".googleLikeFields"][] = "cont_valorinicial";
$tdatacontrato[".googleLikeFields"][] = "cont_valormensual";
$tdatacontrato[".googleLikeFields"][] = "cont_tipoc";
$tdatacontrato[".googleLikeFields"][] = "cont_modalidad";
$tdatacontrato[".googleLikeFields"][] = "cont_causalc";
$tdatacontrato[".googleLikeFields"][] = "cont_objeto";
$tdatacontrato[".googleLikeFields"][] = "cont_tipoproceso";
$tdatacontrato[".googleLikeFields"][] = "cont_formapago";
$tdatacontrato[".googleLikeFields"][] = "cont_fechasistema";
$tdatacontrato[".googleLikeFields"][] = "cont_acta_liquidacion";
$tdatacontrato[".googleLikeFields"][] = "cont_obligaciones";
$tdatacontrato[".googleLikeFields"][] = "cont_plazo";
$tdatacontrato[".googleLikeFields"][] = "cont_vigencias_futuras";
$tdatacontrato[".googleLikeFields"][] = "cont_secop_proceso";
$tdatacontrato[".googleLikeFields"][] = "cont_secop_enlace";
$tdatacontrato[".googleLikeFields"][] = "cont_sigep";
$tdatacontrato[".googleLikeFields"][] = "vf_num_autorizacion";
$tdatacontrato[".googleLikeFields"][] = "vf_fecha";
$tdatacontrato[".googleLikeFields"][] = "vf_valor";
$tdatacontrato[".googleLikeFields"][] = "cont_unspsc";



$tdatacontrato[".tableType"] = "list";

$tdatacontrato[".printerPageOrientation"] = 0;
$tdatacontrato[".nPrinterPageScale"] = 100;

$tdatacontrato[".nPrinterSplitRecords"] = 40;

$tdatacontrato[".geocodingEnabled"] = false;




$tdatacontrato[".isDisplayLoading"] = true;

$tdatacontrato[".isResizeColumns"] = true;





$tdatacontrato[".pageSize"] = 20;

$tdatacontrato[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrato[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato[".orderindexes"] = array();

$tdatacontrato[".sqlHead"] = "SELECT id_cont,  cont_hash,  cont_ano,  cont_paa_id,  cont_nit_contra_ta,  cont_nit_contra_ta AS nombre_cont,  cont_estado,  prenumero,  numregistro,  pre_contnumero,  contnumero,  cont_tipo,  cont_codrubro,  cont_catalogo_presupuestal,  cont_tipopre,  cont_fechaapertura,  cont_fecha_inicio,  cont_fechafinal,  cont_fechavigencia,  cont_periodicidad,  cont_informessug,  cont_valorant,  cont_valorinicial,  cont_valormensual,  cont_tipoc,  cont_modalidad,  cont_causalc,  cont_objeto,  cont_tipoproceso,  cont_formapago,  cont_fechasistema,  cont_acta_liquidacion,  cont_obligaciones,  cont_plazo,  cont_vigencias_futuras,  cont_secop_proceso,  cont_secop_enlace,  cont_sigep,  vf_num_autorizacion,  vf_fecha,  vf_valor,  cont_unspsc";
$tdatacontrato[".sqlFrom"] = "FROM contrato";
$tdatacontrato[".sqlWhereExpr"] = "";
$tdatacontrato[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato[".highlightSearchResults"] = true;

$tableKeyscontrato = array();
$tableKeyscontrato[] = "id_cont";
$tdatacontrato[".Keys"] = $tableKeyscontrato;


$tdatacontrato[".hideMobileList"] = array();




//	id_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cont";
	$fdata["GoodName"] = "id_cont";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","id_cont");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_cont";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont";

	
	
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


	$tdatacontrato["id_cont"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "id_cont";
//	cont_hash
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cont_hash";
	$fdata["GoodName"] = "cont_hash";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_hash");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_hash";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_hash";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatacontrato["cont_hash"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_hash";
//	cont_ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cont_ano";
	$fdata["GoodName"] = "cont_ano";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_ano");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "cont_ano";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_ano";

	
	
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
	$edata["LookupTable"] = "vigencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "vigencia";
	$edata["LinkFieldType"] = 2;
	$edata["DisplayField"] = "vigencia";

	

	
	$edata["LookupOrderBy"] = "vigencia";

		$edata["LookupDesc"] = true;

	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "cont_paa_id";

	
	
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


	$tdatacontrato["cont_ano"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_ano";
//	cont_paa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cont_paa_id";
	$fdata["GoodName"] = "cont_paa_id";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_paa_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_paa_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_paa_id";

	
	
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
	$edata["LookupTable"] = "paa_master";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "PAA_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "PAA_ID";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "cont_ano", "lookup" => "vigencia" );

	
	

	
	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "El Número PAA %value% ya se encuentra asociado a otro proceso", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatacontrato["cont_paa_id"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_paa_id";
//	cont_nit_contra_ta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cont_nit_contra_ta";
	$fdata["GoodName"] = "cont_nit_contra_ta";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_nit_contra_ta");
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
	$edata["DisplayField"] = "contractor_doc_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "prenumero";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "numregistro";

	
	
	
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


	$tdatacontrato["cont_nit_contra_ta"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_nit_contra_ta";
//	nombre_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nombre_cont";
	$fdata["GoodName"] = "nombre_cont";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","nombre_cont");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contractor_master";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "contractor_doc_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "contractor_nombresfull";

	

	
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


	$tdatacontrato["nombre_cont"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "nombre_cont";
//	cont_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cont_estado";
	$fdata["GoodName"] = "cont_estado";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_estado");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_estado";

	
	
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
	$edata["LookupTable"] = "contrato_estados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "estado_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "estado_nombre";

	

	
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


	$tdatacontrato["cont_estado"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_estado";
//	prenumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "prenumero";
	$fdata["GoodName"] = "prenumero";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","prenumero");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "prenumero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prenumero";

	
	
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
	$edata["LookupTable"] = "ep_compromisos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Compromisos";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Compromisos";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "cont_nit_contra_ta", "lookup" => "Identificacion" );

	
	

	
		$edata["Multiselect"] = true;

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


	$tdatacontrato["prenumero"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "prenumero";
//	numregistro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "numregistro";
	$fdata["GoodName"] = "numregistro";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","numregistro");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "numregistro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numregistro";

	
	
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
	$edata["LookupTable"] = "ep_compromisos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CDP";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CDP";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "cont_nit_contra_ta", "lookup" => "Identificacion" );

	
	

	
		$edata["Multiselect"] = true;

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


	$tdatacontrato["numregistro"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "numregistro";
//	pre_contnumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "pre_contnumero";
	$fdata["GoodName"] = "pre_contnumero";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","pre_contnumero");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pre_contnumero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pre_contnumero";

	
	
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
	$edata["LookupTable"] = "contrato_pre";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "codigo";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "codigo";

	

	
	$edata["LookupOrderBy"] = "nombre";

	
	
	
	

	
	
	
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


	$tdatacontrato["pre_contnumero"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "pre_contnumero";
//	contnumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "contnumero";
	$fdata["GoodName"] = "contnumero";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","contnumero");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contnumero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contnumero";

	
	
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


	$tdatacontrato["contnumero"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "contnumero";
//	cont_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cont_tipo";
	$fdata["GoodName"] = "cont_tipo";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_tipo");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "cont_tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipo";

	
	
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
	$edata["LookupTable"] = "contrato_tipo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "codigo";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdatacontrato["cont_tipo"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_tipo";
//	cont_codrubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cont_codrubro";
	$fdata["GoodName"] = "cont_codrubro";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_codrubro");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_codrubro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_codrubro";

	
	
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
	$edata["LookupTable"] = "q_usos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "RUBRO";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "RUBRO";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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


	$tdatacontrato["cont_codrubro"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_codrubro";
//	cont_catalogo_presupuestal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cont_catalogo_presupuestal";
	$fdata["GoodName"] = "cont_catalogo_presupuestal";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_catalogo_presupuestal");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_catalogo_presupuestal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_catalogo_presupuestal";

	
	
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
	$edata["LookupTable"] = "rep_prg001_catalogopresupuestal";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "Identificacion";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Identificacion";

	

	
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


	$tdatacontrato["cont_catalogo_presupuestal"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_catalogo_presupuestal";
//	cont_tipopre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cont_tipopre";
	$fdata["GoodName"] = "cont_tipopre";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_tipopre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_tipopre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipopre";

	
	
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
	$edata["LookupTable"] = "contrato_tipo_unidad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cod_tipounidad";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "cod_tipounidad";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

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


	$tdatacontrato["cont_tipopre"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_tipopre";
//	cont_fechaapertura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cont_fechaapertura";
	$fdata["GoodName"] = "cont_fechaapertura";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_fechaapertura");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "cont_fechaapertura";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fechaapertura";

	
	
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
	$edata["InitialYearFactor"] = 10;
	$edata["LastYearFactor"] = 0;

	
	
	
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


	$tdatacontrato["cont_fechaapertura"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_fechaapertura";
//	cont_fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "cont_fecha_inicio";
	$fdata["GoodName"] = "cont_fecha_inicio";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_fecha_inicio");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 5;
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


	$tdatacontrato["cont_fecha_inicio"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_fecha_inicio";
//	cont_fechafinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "cont_fechafinal";
	$fdata["GoodName"] = "cont_fechafinal";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_fechafinal");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 5;
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


	$tdatacontrato["cont_fechafinal"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_fechafinal";
//	cont_fechavigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "cont_fechavigencia";
	$fdata["GoodName"] = "cont_fechavigencia";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_fechavigencia");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "cont_fechavigencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fechavigencia";

	
	
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


	$tdatacontrato["cont_fechavigencia"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_fechavigencia";
//	cont_periodicidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cont_periodicidad";
	$fdata["GoodName"] = "cont_periodicidad";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_periodicidad");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_periodicidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_periodicidad";

	
	
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
	$edata["LookupTable"] = "interventor_periodos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_periodo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "periodo_name";

	

	
	$edata["LookupOrderBy"] = "periodo_name";

	
	
	
	

	
	
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


	$tdatacontrato["cont_periodicidad"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_periodicidad";
//	cont_informessug
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "cont_informessug";
	$fdata["GoodName"] = "cont_informessug";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_informessug");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_informessug";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_informessug";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatacontrato["cont_informessug"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_informessug";
//	cont_valorant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "cont_valorant";
	$fdata["GoodName"] = "cont_valorant";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_valorant");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "cont_valorant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valorant";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
							
	
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


	$tdatacontrato["cont_valorant"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_valorant";
//	cont_valorinicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "cont_valorinicial";
	$fdata["GoodName"] = "cont_valorinicial";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_valorinicial");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "cont_valorinicial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valorinicial";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatacontrato["cont_valorinicial"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_valorinicial";
//	cont_valormensual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "cont_valormensual";
	$fdata["GoodName"] = "cont_valormensual";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_valormensual");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "cont_valormensual";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valormensual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatacontrato["cont_valormensual"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_valormensual";
//	cont_tipoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "cont_tipoc";
	$fdata["GoodName"] = "cont_tipoc";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_tipoc");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_tipoc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipoc";

	
	
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
	$edata["LookupTable"] = "tparam_tipo_ct_000";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ct_tipo_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ct_tipo_nombre";

	

	
	$edata["LookupOrderBy"] = "ct_tipo_nombre";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "cont_modalidad";

	
	
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


	$tdatacontrato["cont_tipoc"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_tipoc";
//	cont_modalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "cont_modalidad";
	$fdata["GoodName"] = "cont_modalidad";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_modalidad");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_modalidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_modalidad";

	
	
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
	$edata["LookupTable"] = "tparam_tipo_ct_001";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cta_tipo_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cta_tipo_nombre";

	

	
	$edata["LookupOrderBy"] = "cta_tipo_nombre";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "cont_tipoc", "lookup" => "ct_tipo_id_fk" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "cont_causalc";

	
	
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


	$tdatacontrato["cont_modalidad"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_modalidad";
//	cont_causalc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cont_causalc";
	$fdata["GoodName"] = "cont_causalc";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_causalc");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_causalc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_causalc";

	
	
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
	$edata["LookupTable"] = "tparam_tipo_ct_002";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ctb_tipo_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ctb_tipo_nombre";

	

	
	$edata["LookupOrderBy"] = "ctb_tipo_nombre";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "cont_modalidad", "lookup" => "cta_tipo_id_fk" );

	
	

	
	
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


	$tdatacontrato["cont_causalc"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_causalc";
//	cont_objeto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "cont_objeto";
	$fdata["GoodName"] = "cont_objeto";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_objeto");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "cont_objeto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_objeto";

	
	
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


	$tdatacontrato["cont_objeto"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_objeto";
//	cont_tipoproceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "cont_tipoproceso";
	$fdata["GoodName"] = "cont_tipoproceso";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_tipoproceso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_tipoproceso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipoproceso";

	
	
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
	$edata["LookupTable"] = "tipo_contrato";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cont_tipo";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "nom_tipocontrato";

	

	
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


	$tdatacontrato["cont_tipoproceso"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_tipoproceso";
//	cont_formapago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "cont_formapago";
	$fdata["GoodName"] = "cont_formapago";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_formapago");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "cont_formapago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_formapago";

	
	
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
	$edata["LookupTable"] = "contrato_forma_pago";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "codigo";
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


	$tdatacontrato["cont_formapago"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_formapago";
//	cont_fechasistema
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "cont_fechasistema";
	$fdata["GoodName"] = "cont_fechasistema";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_fechasistema");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "cont_fechasistema";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fechasistema";

	
	
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


	$tdatacontrato["cont_fechasistema"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_fechasistema";
//	cont_acta_liquidacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "cont_acta_liquidacion";
	$fdata["GoodName"] = "cont_acta_liquidacion";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_acta_liquidacion");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "cont_acta_liquidacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_acta_liquidacion";

	
	
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
	$edata["LookupTable"] = "tipo_si_no";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "sn_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "sn_name";

	

	
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


	$tdatacontrato["cont_acta_liquidacion"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_acta_liquidacion";
//	cont_obligaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "cont_obligaciones";
	$fdata["GoodName"] = "cont_obligaciones";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_obligaciones");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "cont_obligaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_obligaciones";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
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


	$tdatacontrato["cont_obligaciones"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_obligaciones";
//	cont_plazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "cont_plazo";
	$fdata["GoodName"] = "cont_plazo";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_plazo");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "cont_plazo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_plazo";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatacontrato["cont_plazo"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_plazo";
//	cont_vigencias_futuras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "cont_vigencias_futuras";
	$fdata["GoodName"] = "cont_vigencias_futuras";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_vigencias_futuras");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "cont_vigencias_futuras";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_vigencias_futuras";

	
	
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
	$edata["LookupTable"] = "tipo_si_no";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "sn_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "sn_name";

	

	
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


	$tdatacontrato["cont_vigencias_futuras"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_vigencias_futuras";
//	cont_secop_proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "cont_secop_proceso";
	$fdata["GoodName"] = "cont_secop_proceso";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_secop_proceso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_secop_proceso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_secop_proceso";

	
	
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


	$tdatacontrato["cont_secop_proceso"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_secop_proceso";
//	cont_secop_enlace
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "cont_secop_enlace";
	$fdata["GoodName"] = "cont_secop_enlace";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_secop_enlace");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_secop_enlace";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_secop_enlace";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "QRCode");

	
	
	
	
	
	
	
	
	
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "url";

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


	$tdatacontrato["cont_secop_enlace"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_secop_enlace";
//	cont_sigep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "cont_sigep";
	$fdata["GoodName"] = "cont_sigep";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_sigep");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "cont_sigep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_sigep";

	
	
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
	$edata["LookupTable"] = "tipo_si_no";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "sn_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "sn_name";

	

	
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


	$tdatacontrato["cont_sigep"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_sigep";
//	vf_num_autorizacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "vf_num_autorizacion";
	$fdata["GoodName"] = "vf_num_autorizacion";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","vf_num_autorizacion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "vf_num_autorizacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vf_num_autorizacion";

	
	
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


	$tdatacontrato["vf_num_autorizacion"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "vf_num_autorizacion";
//	vf_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "vf_fecha";
	$fdata["GoodName"] = "vf_fecha";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","vf_fecha");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "vf_fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vf_fecha";

	
	
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


	$tdatacontrato["vf_fecha"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "vf_fecha";
//	vf_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "vf_valor";
	$fdata["GoodName"] = "vf_valor";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","vf_valor");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "vf_valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vf_valor";

	
	
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


	$tdatacontrato["vf_valor"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "vf_valor";
//	cont_unspsc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "cont_unspsc";
	$fdata["GoodName"] = "cont_unspsc";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","cont_unspsc");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_unspsc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_unspsc";

	
	
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
			$edata["EditParams"].= " maxlength=48";

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


	$tdatacontrato["cont_unspsc"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "cont_unspsc";


$tables_data["contrato"]=&$tdatacontrato;
$field_labels["contrato"] = &$fieldLabelscontrato;
$fieldToolTips["contrato"] = &$fieldToolTipscontrato;
$placeHolders["contrato"] = &$placeHolderscontrato;
$page_titles["contrato"] = &$pageTitlescontrato;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contrato"] = array();
//	contrato_attached
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="contrato_attached";
		$detailsParam["dOriginalTable"] = "contrato_attached";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contrato_attached";
	$detailsParam["dCaptionTable"] = GetTableCaption("contrato_attached");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato"][$dIndex]["masterKeys"][]="id_cont";

				$detailsTablesData["contrato"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato"][$dIndex]["detailKeys"][]="id_cont_fk";
//	polizas_master
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="polizas_master";
		$detailsParam["dOriginalTable"] = "polizas_master";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "polizas_master";
	$detailsParam["dCaptionTable"] = GetTableCaption("polizas_master");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato"][$dIndex]["masterKeys"][]="id_cont";

				$detailsTablesData["contrato"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato"][$dIndex]["detailKeys"][]="id_cont_fk";
//	interventor_interno
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="interventor_interno";
		$detailsParam["dOriginalTable"] = "interventor_interno";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "interventor_interno";
	$detailsParam["dCaptionTable"] = GetTableCaption("interventor_interno");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato"][$dIndex]["masterKeys"][]="id_cont";

				$detailsTablesData["contrato"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato"][$dIndex]["detailKeys"][]="id_cont_fk";
//	contrato_cdp
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="contrato_cdp";
		$detailsParam["dOriginalTable"] = "contrato_cdp";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contrato_cdp";
	$detailsParam["dCaptionTable"] = GetTableCaption("contrato_cdp");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato"][$dIndex]["masterKeys"][]="id_cont";

				$detailsTablesData["contrato"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato"][$dIndex]["detailKeys"][]="id_cont_FK";
//	contrato_rp
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="contrato_rp";
		$detailsParam["dOriginalTable"] = "contrato_rp";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contrato_rp";
	$detailsParam["dCaptionTable"] = GetTableCaption("contrato_rp");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato"][$dIndex]["masterKeys"][]="id_cont";

				$detailsTablesData["contrato"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato"][$dIndex]["detailKeys"][]="id_cont_FK";
//	ep_compromisos
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ep_compromisos";
		$detailsParam["dOriginalTable"] = "ep_compromisos";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ep_compromisos";
	$detailsParam["dCaptionTable"] = GetTableCaption("ep_compromisos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato"][$dIndex]["masterKeys"][]="cont_nit_contra_ta";

				$detailsTablesData["contrato"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato"][$dIndex]["detailKeys"][]="Identificacion";
//	ep_obligaciones
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ep_obligaciones";
		$detailsParam["dOriginalTable"] = "ep_obligaciones";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ep_obligaciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("ep_obligaciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato"][$dIndex]["masterKeys"][]="cont_nit_contra_ta";

				$detailsTablesData["contrato"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato"][$dIndex]["detailKeys"][]="Identificacion";

// tables which are master tables for current table (detail)
$masterTablesData["contrato"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_contrato()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cont,  cont_hash,  cont_ano,  cont_paa_id,  cont_nit_contra_ta,  cont_nit_contra_ta AS nombre_cont,  cont_estado,  prenumero,  numregistro,  pre_contnumero,  contnumero,  cont_tipo,  cont_codrubro,  cont_catalogo_presupuestal,  cont_tipopre,  cont_fechaapertura,  cont_fecha_inicio,  cont_fechafinal,  cont_fechavigencia,  cont_periodicidad,  cont_informessug,  cont_valorant,  cont_valorinicial,  cont_valormensual,  cont_tipoc,  cont_modalidad,  cont_causalc,  cont_objeto,  cont_tipoproceso,  cont_formapago,  cont_fechasistema,  cont_acta_liquidacion,  cont_obligaciones,  cont_plazo,  cont_vigencias_futuras,  cont_secop_proceso,  cont_secop_enlace,  cont_sigep,  vf_num_autorizacion,  vf_fecha,  vf_valor,  cont_unspsc";
$proto0["m_strFrom"] = "FROM contrato";
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
	"m_strName" => "id_cont",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto6["m_sql"] = "id_cont";
$proto6["m_srcTableName"] = "contrato";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_hash",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto8["m_sql"] = "cont_hash";
$proto8["m_srcTableName"] = "contrato";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_ano",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto10["m_sql"] = "cont_ano";
$proto10["m_srcTableName"] = "contrato";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_paa_id",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto12["m_sql"] = "cont_paa_id";
$proto12["m_srcTableName"] = "contrato";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_nit_contra_ta",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto14["m_sql"] = "cont_nit_contra_ta";
$proto14["m_srcTableName"] = "contrato";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_nit_contra_ta",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto16["m_sql"] = "cont_nit_contra_ta";
$proto16["m_srcTableName"] = "contrato";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "nombre_cont";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_estado",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto18["m_sql"] = "cont_estado";
$proto18["m_srcTableName"] = "contrato";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "prenumero",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto20["m_sql"] = "prenumero";
$proto20["m_srcTableName"] = "contrato";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "numregistro",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto22["m_sql"] = "numregistro";
$proto22["m_srcTableName"] = "contrato";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "pre_contnumero",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto24["m_sql"] = "pre_contnumero";
$proto24["m_srcTableName"] = "contrato";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "contnumero",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto26["m_sql"] = "contnumero";
$proto26["m_srcTableName"] = "contrato";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipo",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto28["m_sql"] = "cont_tipo";
$proto28["m_srcTableName"] = "contrato";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_codrubro",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto30["m_sql"] = "cont_codrubro";
$proto30["m_srcTableName"] = "contrato";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_catalogo_presupuestal",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto32["m_sql"] = "cont_catalogo_presupuestal";
$proto32["m_srcTableName"] = "contrato";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipopre",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto34["m_sql"] = "cont_tipopre";
$proto34["m_srcTableName"] = "contrato";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechaapertura",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto36["m_sql"] = "cont_fechaapertura";
$proto36["m_srcTableName"] = "contrato";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fecha_inicio",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto38["m_sql"] = "cont_fecha_inicio";
$proto38["m_srcTableName"] = "contrato";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechafinal",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto40["m_sql"] = "cont_fechafinal";
$proto40["m_srcTableName"] = "contrato";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechavigencia",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto42["m_sql"] = "cont_fechavigencia";
$proto42["m_srcTableName"] = "contrato";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_periodicidad",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto44["m_sql"] = "cont_periodicidad";
$proto44["m_srcTableName"] = "contrato";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_informessug",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto46["m_sql"] = "cont_informessug";
$proto46["m_srcTableName"] = "contrato";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valorant",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto48["m_sql"] = "cont_valorant";
$proto48["m_srcTableName"] = "contrato";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valorinicial",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto50["m_sql"] = "cont_valorinicial";
$proto50["m_srcTableName"] = "contrato";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valormensual",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto52["m_sql"] = "cont_valormensual";
$proto52["m_srcTableName"] = "contrato";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipoc",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto54["m_sql"] = "cont_tipoc";
$proto54["m_srcTableName"] = "contrato";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_modalidad",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto56["m_sql"] = "cont_modalidad";
$proto56["m_srcTableName"] = "contrato";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_causalc",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto58["m_sql"] = "cont_causalc";
$proto58["m_srcTableName"] = "contrato";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_objeto",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto60["m_sql"] = "cont_objeto";
$proto60["m_srcTableName"] = "contrato";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipoproceso",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto62["m_sql"] = "cont_tipoproceso";
$proto62["m_srcTableName"] = "contrato";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_formapago",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto64["m_sql"] = "cont_formapago";
$proto64["m_srcTableName"] = "contrato";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechasistema",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto66["m_sql"] = "cont_fechasistema";
$proto66["m_srcTableName"] = "contrato";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_acta_liquidacion",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto68["m_sql"] = "cont_acta_liquidacion";
$proto68["m_srcTableName"] = "contrato";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_obligaciones",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto70["m_sql"] = "cont_obligaciones";
$proto70["m_srcTableName"] = "contrato";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_plazo",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto72["m_sql"] = "cont_plazo";
$proto72["m_srcTableName"] = "contrato";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_vigencias_futuras",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto74["m_sql"] = "cont_vigencias_futuras";
$proto74["m_srcTableName"] = "contrato";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_secop_proceso",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto76["m_sql"] = "cont_secop_proceso";
$proto76["m_srcTableName"] = "contrato";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_secop_enlace",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto78["m_sql"] = "cont_secop_enlace";
$proto78["m_srcTableName"] = "contrato";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_sigep",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto80["m_sql"] = "cont_sigep";
$proto80["m_srcTableName"] = "contrato";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "vf_num_autorizacion",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto82["m_sql"] = "vf_num_autorizacion";
$proto82["m_srcTableName"] = "contrato";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "vf_fecha",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto84["m_sql"] = "vf_fecha";
$proto84["m_srcTableName"] = "contrato";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "vf_valor",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto86["m_sql"] = "vf_valor";
$proto86["m_srcTableName"] = "contrato";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_unspsc",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto88["m_sql"] = "cont_unspsc";
$proto88["m_srcTableName"] = "contrato";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto90=array();
$proto90["m_link"] = "SQLL_MAIN";
			$proto91=array();
$proto91["m_strName"] = "contrato";
$proto91["m_srcTableName"] = "contrato";
$proto91["m_columns"] = array();
$proto91["m_columns"][] = "id_cont";
$proto91["m_columns"][] = "cont_hash";
$proto91["m_columns"][] = "cont_nit_contra_ta";
$proto91["m_columns"][] = "cont_paa_id";
$proto91["m_columns"][] = "cont_estado";
$proto91["m_columns"][] = "prenumero";
$proto91["m_columns"][] = "numregistro";
$proto91["m_columns"][] = "pre_contnumero";
$proto91["m_columns"][] = "contnumero";
$proto91["m_columns"][] = "cont_unspsc";
$proto91["m_columns"][] = "cont_tipo";
$proto91["m_columns"][] = "cont_ano";
$proto91["m_columns"][] = "cont_codrubro";
$proto91["m_columns"][] = "cont_tipo_rubro";
$proto91["m_columns"][] = "cont_reg_sigep";
$proto91["m_columns"][] = "cont_catalogo_presupuestal";
$proto91["m_columns"][] = "cont_tipopre";
$proto91["m_columns"][] = "cont_fechaapertura";
$proto91["m_columns"][] = "cont_plazoi";
$proto91["m_columns"][] = "cont_fecha_inicio";
$proto91["m_columns"][] = "cont_fechafinal";
$proto91["m_columns"][] = "cont_valormensual_base";
$proto91["m_columns"][] = "cont_valormensual_iva";
$proto91["m_columns"][] = "cont_fechavigencia";
$proto91["m_columns"][] = "cont_periodicidad";
$proto91["m_columns"][] = "cont_informessug";
$proto91["m_columns"][] = "cont_otrosi";
$proto91["m_columns"][] = "cont_otrosi_type";
$proto91["m_columns"][] = "cont_valorant";
$proto91["m_columns"][] = "cont_valorinicial";
$proto91["m_columns"][] = "cont_valormensual";
$proto91["m_columns"][] = "cont_valoradic_fecha";
$proto91["m_columns"][] = "cont_valoradic";
$proto91["m_columns"][] = "cont_valorreduc_fecha";
$proto91["m_columns"][] = "cont_valorreduc";
$proto91["m_columns"][] = "cont_valorvigente";
$proto91["m_columns"][] = "cont_valors";
$proto91["m_columns"][] = "cont_lugar";
$proto91["m_columns"][] = "cont_region";
$proto91["m_columns"][] = "cont_requactaliq";
$proto91["m_columns"][] = "cont_plazol";
$proto91["m_columns"][] = "cont_tipoproceso";
$proto91["m_columns"][] = "cont_formapago";
$proto91["m_columns"][] = "cont_tipoc";
$proto91["m_columns"][] = "cont_modalidad";
$proto91["m_columns"][] = "cont_causalc";
$proto91["m_columns"][] = "cont_funcion";
$proto91["m_columns"][] = "cesion_estado";
$proto91["m_columns"][] = "cont_acta_liquidacion";
$proto91["m_columns"][] = "cont_fecha_aprobgarantia";
$proto91["m_columns"][] = "cont_afilia_arl";
$proto91["m_columns"][] = "cont_excluir_notificacion";
$proto91["m_columns"][] = "cont_depsup";
$proto91["m_columns"][] = "cont_dep";
$proto91["m_columns"][] = "cont_lugar_prestacion";
$proto91["m_columns"][] = "cont_objeto";
$proto91["m_columns"][] = "cont_obligaciones";
$proto91["m_columns"][] = "cont_plazo";
$proto91["m_columns"][] = "cont_tipo_regimen";
$proto91["m_columns"][] = "cont_fecha_firma";
$proto91["m_columns"][] = "cont_secop_proceso";
$proto91["m_columns"][] = "cont_secop_enlace";
$proto91["m_columns"][] = "cont_sigep";
$proto91["m_columns"][] = "cont_vigencias_futuras";
$proto91["m_columns"][] = "vf_num_autorizacion";
$proto91["m_columns"][] = "vf_fecha";
$proto91["m_columns"][] = "vf_valor";
$proto91["m_columns"][] = "cont_fechasistema";
$proto91["m_columns"][] = "cont_cesion";
$obj = new SQLTable($proto91);

$proto90["m_table"] = $obj;
$proto90["m_sql"] = "contrato";
$proto90["m_alias"] = "";
$proto90["m_srcTableName"] = "contrato";
$proto92=array();
$proto92["m_sql"] = "";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
$proto92["m_strCase"] = "";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

$proto90["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto90);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato = createSqlQuery_contrato();


	
										;

																																										

$tdatacontrato[".sqlquery"] = $queryData_contrato;

$tableEvents["contrato"] = new eventsBase;
$tdatacontrato[".hasEvents"] = false;

?>