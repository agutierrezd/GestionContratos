<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["edl.funcionario"] ) ) {
			$lookupTableLinks["edl.funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["edl.funcionario"]["global_users.id_fk"] )) {
			$lookupTableLinks["edl.funcionario"]["global_users.id_fk"] = array();
		}
		$lookupTableLinks["edl.funcionario"]["global_users.id_fk"]["edit"] = array("table" => "global_users", "field" => "id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["global_users.usr_dep"] )) {
			$lookupTableLinks["dependencia"]["global_users.usr_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["global_users.usr_dep"]["edit"] = array("table" => "global_users", "field" => "usr_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["global_users.usr_cargo"] )) {
			$lookupTableLinks["cargo"]["global_users.usr_cargo"] = array();
		}
		$lookupTableLinks["cargo"]["global_users.usr_cargo"]["edit"] = array("table" => "global_users", "field" => "usr_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["vigencia"] ) ) {
			$lookupTableLinks["vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["vigencia"]["contrato.cont_ano"] )) {
			$lookupTableLinks["vigencia"]["contrato.cont_ano"] = array();
		}
		$lookupTableLinks["vigencia"]["contrato.cont_ano"]["edit"] = array("table" => "contrato", "field" => "cont_ano", "page" => "edit");
		if( !isset( $lookupTableLinks["paa_master"] ) ) {
			$lookupTableLinks["paa_master"] = array();
		}
		if( !isset( $lookupTableLinks["paa_master"]["contrato.cont_paa_id"] )) {
			$lookupTableLinks["paa_master"]["contrato.cont_paa_id"] = array();
		}
		$lookupTableLinks["paa_master"]["contrato.cont_paa_id"]["edit"] = array("table" => "contrato", "field" => "cont_paa_id", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["contrato.cont_nit_contra_ta"] )) {
			$lookupTableLinks["contractor_master"]["contrato.cont_nit_contra_ta"] = array();
		}
		$lookupTableLinks["contractor_master"]["contrato.cont_nit_contra_ta"]["edit"] = array("table" => "contrato", "field" => "cont_nit_contra_ta", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["contrato.nombre_cont"] )) {
			$lookupTableLinks["contractor_master"]["contrato.nombre_cont"] = array();
		}
		$lookupTableLinks["contractor_master"]["contrato.nombre_cont"]["edit"] = array("table" => "contrato", "field" => "nombre_cont", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_estados"] ) ) {
			$lookupTableLinks["contrato_estados"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_estados"]["contrato.cont_estado"] )) {
			$lookupTableLinks["contrato_estados"]["contrato.cont_estado"] = array();
		}
		$lookupTableLinks["contrato_estados"]["contrato.cont_estado"]["edit"] = array("table" => "contrato", "field" => "cont_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_pre"] ) ) {
			$lookupTableLinks["contrato_pre"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_pre"]["contrato.pre_contnumero"] )) {
			$lookupTableLinks["contrato_pre"]["contrato.pre_contnumero"] = array();
		}
		$lookupTableLinks["contrato_pre"]["contrato.pre_contnumero"]["edit"] = array("table" => "contrato", "field" => "pre_contnumero", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_tipo"] ) ) {
			$lookupTableLinks["contrato_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_tipo"]["contrato.cont_tipo"] )) {
			$lookupTableLinks["contrato_tipo"]["contrato.cont_tipo"] = array();
		}
		$lookupTableLinks["contrato_tipo"]["contrato.cont_tipo"]["edit"] = array("table" => "contrato", "field" => "cont_tipo", "page" => "edit");
		if( !isset( $lookupTableLinks["q_usos"] ) ) {
			$lookupTableLinks["q_usos"] = array();
		}
		if( !isset( $lookupTableLinks["q_usos"]["contrato.cont_codrubro"] )) {
			$lookupTableLinks["q_usos"]["contrato.cont_codrubro"] = array();
		}
		$lookupTableLinks["q_usos"]["contrato.cont_codrubro"]["edit"] = array("table" => "contrato", "field" => "cont_codrubro", "page" => "edit");
		if( !isset( $lookupTableLinks["rep_prg001_catalogopresupuestal"] ) ) {
			$lookupTableLinks["rep_prg001_catalogopresupuestal"] = array();
		}
		if( !isset( $lookupTableLinks["rep_prg001_catalogopresupuestal"]["contrato.cont_catalogo_presupuestal"] )) {
			$lookupTableLinks["rep_prg001_catalogopresupuestal"]["contrato.cont_catalogo_presupuestal"] = array();
		}
		$lookupTableLinks["rep_prg001_catalogopresupuestal"]["contrato.cont_catalogo_presupuestal"]["edit"] = array("table" => "contrato", "field" => "cont_catalogo_presupuestal", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_tipo_unidad"] ) ) {
			$lookupTableLinks["contrato_tipo_unidad"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_tipo_unidad"]["contrato.cont_tipopre"] )) {
			$lookupTableLinks["contrato_tipo_unidad"]["contrato.cont_tipopre"] = array();
		}
		$lookupTableLinks["contrato_tipo_unidad"]["contrato.cont_tipopre"]["edit"] = array("table" => "contrato", "field" => "cont_tipopre", "page" => "edit");
		if( !isset( $lookupTableLinks["interventor_periodos"] ) ) {
			$lookupTableLinks["interventor_periodos"] = array();
		}
		if( !isset( $lookupTableLinks["interventor_periodos"]["contrato.cont_periodicidad"] )) {
			$lookupTableLinks["interventor_periodos"]["contrato.cont_periodicidad"] = array();
		}
		$lookupTableLinks["interventor_periodos"]["contrato.cont_periodicidad"]["edit"] = array("table" => "contrato", "field" => "cont_periodicidad", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_000"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"]["contrato.cont_tipoc"] )) {
			$lookupTableLinks["tparam_tipo_ct_000"]["contrato.cont_tipoc"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_000"]["contrato.cont_tipoc"]["edit"] = array("table" => "contrato", "field" => "cont_tipoc", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_001"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"]["contrato.cont_modalidad"] )) {
			$lookupTableLinks["tparam_tipo_ct_001"]["contrato.cont_modalidad"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_001"]["contrato.cont_modalidad"]["edit"] = array("table" => "contrato", "field" => "cont_modalidad", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_002"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"]["contrato.cont_causalc"] )) {
			$lookupTableLinks["tparam_tipo_ct_002"]["contrato.cont_causalc"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_002"]["contrato.cont_causalc"]["edit"] = array("table" => "contrato", "field" => "cont_causalc", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_contrato"] ) ) {
			$lookupTableLinks["tipo_contrato"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_contrato"]["contrato.cont_tipoproceso"] )) {
			$lookupTableLinks["tipo_contrato"]["contrato.cont_tipoproceso"] = array();
		}
		$lookupTableLinks["tipo_contrato"]["contrato.cont_tipoproceso"]["edit"] = array("table" => "contrato", "field" => "cont_tipoproceso", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_forma_pago"] ) ) {
			$lookupTableLinks["contrato_forma_pago"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_forma_pago"]["contrato.cont_formapago"] )) {
			$lookupTableLinks["contrato_forma_pago"]["contrato.cont_formapago"] = array();
		}
		$lookupTableLinks["contrato_forma_pago"]["contrato.cont_formapago"]["edit"] = array("table" => "contrato", "field" => "cont_formapago", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_si_no"] ) ) {
			$lookupTableLinks["tipo_si_no"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_si_no"]["contrato.cont_acta_liquidacion"] )) {
			$lookupTableLinks["tipo_si_no"]["contrato.cont_acta_liquidacion"] = array();
		}
		$lookupTableLinks["tipo_si_no"]["contrato.cont_acta_liquidacion"]["edit"] = array("table" => "contrato", "field" => "cont_acta_liquidacion", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_si_no"] ) ) {
			$lookupTableLinks["tipo_si_no"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_si_no"]["contrato.cont_vigencias_futuras"] )) {
			$lookupTableLinks["tipo_si_no"]["contrato.cont_vigencias_futuras"] = array();
		}
		$lookupTableLinks["tipo_si_no"]["contrato.cont_vigencias_futuras"]["edit"] = array("table" => "contrato", "field" => "cont_vigencias_futuras", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_si_no"] ) ) {
			$lookupTableLinks["tipo_si_no"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_si_no"]["contrato.cont_sigep"] )) {
			$lookupTableLinks["tipo_si_no"]["contrato.cont_sigep"] = array();
		}
		$lookupTableLinks["tipo_si_no"]["contrato.cont_sigep"]["edit"] = array("table" => "contrato", "field" => "cont_sigep", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_rubro"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_rubro"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_rubro"]["contrato.cont_tipo_rubro"] )) {
			$lookupTableLinks["tparam_tipo_ct_rubro"]["contrato.cont_tipo_rubro"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_rubro"]["contrato.cont_tipo_rubro"]["edit"] = array("table" => "contrato", "field" => "cont_tipo_rubro", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["contrato.cont_munejec"] )) {
			$lookupTableLinks["q_divipola"]["contrato.cont_munejec"] = array();
		}
		$lookupTableLinks["q_divipola"]["contrato.cont_munejec"]["edit"] = array("table" => "contrato", "field" => "cont_munejec", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_docidentidad"] ) ) {
			$lookupTableLinks["tipo_docidentidad"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_docidentidad"]["contractor_master.contractor_type"] )) {
			$lookupTableLinks["tipo_docidentidad"]["contractor_master.contractor_type"] = array();
		}
		$lookupTableLinks["tipo_docidentidad"]["contractor_master.contractor_type"]["edit"] = array("table" => "contractor_master", "field" => "contractor_type", "page" => "edit");
		if( !isset( $lookupTableLinks["divipola"] ) ) {
			$lookupTableLinks["divipola"] = array();
		}
		if( !isset( $lookupTableLinks["divipola"]["contractor_master.contractor_city"] )) {
			$lookupTableLinks["divipola"]["contractor_master.contractor_city"] = array();
		}
		$lookupTableLinks["divipola"]["contractor_master.contractor_city"]["edit"] = array("table" => "contractor_master", "field" => "contractor_city", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_banco"] ) ) {
			$lookupTableLinks["tipo_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_banco"]["contractor_master.bank_name"] )) {
			$lookupTableLinks["tipo_banco"]["contractor_master.bank_name"] = array();
		}
		$lookupTableLinks["tipo_banco"]["contractor_master.bank_name"]["edit"] = array("table" => "contractor_master", "field" => "bank_name", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_cta_banco"] ) ) {
			$lookupTableLinks["tipo_cta_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_cta_banco"]["contractor_master.bank_cta_type"] )) {
			$lookupTableLinks["tipo_cta_banco"]["contractor_master.bank_cta_type"] = array();
		}
		$lookupTableLinks["tipo_cta_banco"]["contractor_master.bank_cta_type"]["edit"] = array("table" => "contractor_master", "field" => "bank_cta_type", "page" => "edit");
		if( !isset( $lookupTableLinks["global_status"] ) ) {
			$lookupTableLinks["global_status"] = array();
		}
		if( !isset( $lookupTableLinks["global_status"]["contractor_master.active"] )) {
			$lookupTableLinks["global_status"]["contractor_master.active"] = array();
		}
		$lookupTableLinks["global_status"]["contractor_master.active"]["edit"] = array("table" => "contractor_master", "field" => "active", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_regimen_tribut"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_regimen_tribut"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_regimen_tribut"]["contractor_master.iva_regimen"] )) {
			$lookupTableLinks["tparam_tipo_ct_regimen_tribut"]["contractor_master.iva_regimen"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_regimen_tribut"]["contractor_master.iva_regimen"]["edit"] = array("table" => "contractor_master", "field" => "iva_regimen", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_docidentidad"] ) ) {
			$lookupTableLinks["tipo_docidentidad"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_docidentidad"]["contractor_master_vinc.contractor_type"] )) {
			$lookupTableLinks["tipo_docidentidad"]["contractor_master_vinc.contractor_type"] = array();
		}
		$lookupTableLinks["tipo_docidentidad"]["contractor_master_vinc.contractor_type"]["edit"] = array("table" => "contractor_master_vinc", "field" => "contractor_type", "page" => "edit");
		if( !isset( $lookupTableLinks["divipola"] ) ) {
			$lookupTableLinks["divipola"] = array();
		}
		if( !isset( $lookupTableLinks["divipola"]["contractor_master_vinc.contractor_city"] )) {
			$lookupTableLinks["divipola"]["contractor_master_vinc.contractor_city"] = array();
		}
		$lookupTableLinks["divipola"]["contractor_master_vinc.contractor_city"]["edit"] = array("table" => "contractor_master_vinc", "field" => "contractor_city", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_banco"] ) ) {
			$lookupTableLinks["tipo_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_banco"]["contractor_master_vinc.bank_name"] )) {
			$lookupTableLinks["tipo_banco"]["contractor_master_vinc.bank_name"] = array();
		}
		$lookupTableLinks["tipo_banco"]["contractor_master_vinc.bank_name"]["edit"] = array("table" => "contractor_master_vinc", "field" => "bank_name", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_cta_banco"] ) ) {
			$lookupTableLinks["tipo_cta_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_cta_banco"]["contractor_master_vinc.bank_cta_type"] )) {
			$lookupTableLinks["tipo_cta_banco"]["contractor_master_vinc.bank_cta_type"] = array();
		}
		$lookupTableLinks["tipo_cta_banco"]["contractor_master_vinc.bank_cta_type"]["edit"] = array("table" => "contractor_master_vinc", "field" => "bank_cta_type", "page" => "edit");
		if( !isset( $lookupTableLinks["global_status"] ) ) {
			$lookupTableLinks["global_status"] = array();
		}
		if( !isset( $lookupTableLinks["global_status"]["contractor_master_vinc.active"] )) {
			$lookupTableLinks["global_status"]["contractor_master_vinc.active"] = array();
		}
		$lookupTableLinks["global_status"]["contractor_master_vinc.active"]["edit"] = array("table" => "contractor_master_vinc", "field" => "active", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_000"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"]["tparam_tipo_ct_001.ct_tipo_id_fk"] )) {
			$lookupTableLinks["tparam_tipo_ct_000"]["tparam_tipo_ct_001.ct_tipo_id_fk"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_000"]["tparam_tipo_ct_001.ct_tipo_id_fk"]["edit"] = array("table" => "tparam_tipo_ct_001", "field" => "ct_tipo_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_001"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"]["tparam_tipo_ct_002.cta_tipo_id_fk"] )) {
			$lookupTableLinks["tparam_tipo_ct_001"]["tparam_tipo_ct_002.cta_tipo_id_fk"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_001"]["tparam_tipo_ct_002.cta_tipo_id_fk"]["edit"] = array("table" => "tparam_tipo_ct_002", "field" => "cta_tipo_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["contrato_attached.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["contrato_attached.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["contrato_attached.id_cont_fk"]["edit"] = array("table" => "contrato_attached", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_attached_type"] ) ) {
			$lookupTableLinks["contrato_attached_type"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_attached_type"]["contrato_attached.att_type"] )) {
			$lookupTableLinks["contrato_attached_type"]["contrato_attached.att_type"] = array();
		}
		$lookupTableLinks["contrato_attached_type"]["contrato_attached.att_type"]["edit"] = array("table" => "contrato_attached", "field" => "att_type", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["polizas_master.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["polizas_master.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["polizas_master.id_cont_fk"]["edit"] = array("table" => "polizas_master", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_attached"] ) ) {
			$lookupTableLinks["contrato_attached"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_attached"]["polizas_master.id_att_fk"] )) {
			$lookupTableLinks["contrato_attached"]["polizas_master.id_att_fk"] = array();
		}
		$lookupTableLinks["contrato_attached"]["polizas_master.id_att_fk"]["edit"] = array("table" => "polizas_master", "field" => "id_att_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["polizas_aseguradoras"] ) ) {
			$lookupTableLinks["polizas_aseguradoras"] = array();
		}
		if( !isset( $lookupTableLinks["polizas_aseguradoras"]["polizas_master.poli_compania"] )) {
			$lookupTableLinks["polizas_aseguradoras"]["polizas_master.poli_compania"] = array();
		}
		$lookupTableLinks["polizas_aseguradoras"]["polizas_master.poli_compania"]["edit"] = array("table" => "polizas_master", "field" => "poli_compania", "page" => "edit");
		if( !isset( $lookupTableLinks["polizas_tipo"] ) ) {
			$lookupTableLinks["polizas_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["polizas_tipo"]["polizas_master.poli_codamparo"] )) {
			$lookupTableLinks["polizas_tipo"]["polizas_master.poli_codamparo"] = array();
		}
		$lookupTableLinks["polizas_tipo"]["polizas_master.poli_codamparo"]["edit"] = array("table" => "polizas_master", "field" => "poli_codamparo", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["interventor_interno.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["interventor_interno.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["interventor_interno.id_cont_fk"]["edit"] = array("table" => "interventor_interno", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["interventor_interno.idusrglobal_fk"] )) {
			$lookupTableLinks["global_users"]["interventor_interno.idusrglobal_fk"] = array();
		}
		$lookupTableLinks["global_users"]["interventor_interno.idusrglobal_fk"]["edit"] = array("table" => "interventor_interno", "field" => "idusrglobal_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_habilita"] ) ) {
			$lookupTableLinks["tparam_habilita"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_habilita"]["interventor_interno.sup_status"] )) {
			$lookupTableLinks["tparam_habilita"]["interventor_interno.sup_status"] = array();
		}
		$lookupTableLinks["tparam_habilita"]["interventor_interno.sup_status"]["edit"] = array("table" => "interventor_interno", "field" => "sup_status", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["contrato_cdp.id_cont_FK"] )) {
			$lookupTableLinks["contrato"]["contrato_cdp.id_cont_FK"] = array();
		}
		$lookupTableLinks["contrato"]["contrato_cdp.id_cont_FK"]["edit"] = array("table" => "contrato_cdp", "field" => "id_cont_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["contrato_cdp.dependencias"] )) {
			$lookupTableLinks["dependencia"]["contrato_cdp.dependencias"] = array();
		}
		$lookupTableLinks["dependencia"]["contrato_cdp.dependencias"]["edit"] = array("table" => "contrato_cdp", "field" => "dependencias", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"] )) {
			$lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"] = array();
		}
		$lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"]["edit"] = array("table" => "dependencia", "field" => "id_depto_superior", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["contrato_rp.id_cont_FK"] )) {
			$lookupTableLinks["contrato"]["contrato_rp.id_cont_FK"] = array();
		}
		$lookupTableLinks["contrato"]["contrato_rp.id_cont_FK"]["edit"] = array("table" => "contrato_rp", "field" => "id_cont_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["contrato_rp.dependencias_rp"] )) {
			$lookupTableLinks["dependencia"]["contrato_rp.dependencias_rp"] = array();
		}
		$lookupTableLinks["dependencia"]["contrato_rp.dependencias_rp"]["edit"] = array("table" => "contrato_rp", "field" => "dependencias_rp", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["cargo.idComportamentalFK"] )) {
			$lookupTableLinks["comportamental"]["cargo.idComportamentalFK"] = array();
		}
		$lookupTableLinks["comportamental"]["cargo.idComportamentalFK"]["edit"] = array("table" => "cargo", "field" => "idComportamentalFK", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["informe_intersup_plan_pagos.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["informe_intersup_plan_pagos.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["informe_intersup_plan_pagos.id_cont_fk"]["edit"] = array("table" => "informe_intersup_plan_pagos", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_000_control_informes"] ) ) {
			$lookupTableLinks["q_000_control_informes"] = array();
		}
		if( !isset( $lookupTableLinks["q_000_control_informes"]["informe_intersup_plan_pagos.inf_consecutivo"] )) {
			$lookupTableLinks["q_000_control_informes"]["informe_intersup_plan_pagos.inf_consecutivo"] = array();
		}
		$lookupTableLinks["q_000_control_informes"]["informe_intersup_plan_pagos.inf_consecutivo"]["add"] = array("table" => "informe_intersup_plan_pagos", "field" => "inf_consecutivo", "page" => "add");
		if( !isset( $lookupTableLinks["q_000_control_informes"] ) ) {
			$lookupTableLinks["q_000_control_informes"] = array();
		}
		if( !isset( $lookupTableLinks["q_000_control_informes"]["informe_intersup_plan_pagos.inf_consecutivo"] )) {
			$lookupTableLinks["q_000_control_informes"]["informe_intersup_plan_pagos.inf_consecutivo"] = array();
		}
		$lookupTableLinks["q_000_control_informes"]["informe_intersup_plan_pagos.inf_consecutivo"]["search"] = array("table" => "informe_intersup_plan_pagos", "field" => "inf_consecutivo", "page" => "search");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"]["edit"] = array("table" => "informe_intersup_plan_pagos", "field" => "inf_st", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"]["add"] = array("table" => "informe_intersup_plan_pagos", "field" => "inf_st", "page" => "add");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"]["search"] = array("table" => "informe_intersup_plan_pagos", "field" => "inf_st", "page" => "search");
		if( !isset( $lookupTableLinks["q_001_dashboard"] ) ) {
			$lookupTableLinks["q_001_dashboard"] = array();
		}
		if( !isset( $lookupTableLinks["q_001_dashboard"]["informe_intersup_admin.id_cont_fk"] )) {
			$lookupTableLinks["q_001_dashboard"]["informe_intersup_admin.id_cont_fk"] = array();
		}
		$lookupTableLinks["q_001_dashboard"]["informe_intersup_admin.id_cont_fk"]["edit"] = array("table" => "informe_intersup_admin", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_estado"] ) ) {
			$lookupTableLinks["informe_intersup_estado"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_estado"]["informe_intersup_admin.inf_estado"] )) {
			$lookupTableLinks["informe_intersup_estado"]["informe_intersup_admin.inf_estado"] = array();
		}
		$lookupTableLinks["informe_intersup_estado"]["informe_intersup_admin.inf_estado"]["edit"] = array("table" => "informe_intersup_admin", "field" => "inf_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["interventor_periodos"] ) ) {
			$lookupTableLinks["interventor_periodos"] = array();
		}
		if( !isset( $lookupTableLinks["interventor_periodos"]["informe_intersup_admin.inf_periodicidad"] )) {
			$lookupTableLinks["interventor_periodos"]["informe_intersup_admin.inf_periodicidad"] = array();
		}
		$lookupTableLinks["interventor_periodos"]["informe_intersup_admin.inf_periodicidad"]["edit"] = array("table" => "informe_intersup_admin", "field" => "inf_periodicidad", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_tipo"] ) ) {
			$lookupTableLinks["informe_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["informe_tipo"]["informe_intersup_admin.inf_declarainconf"] )) {
			$lookupTableLinks["informe_tipo"]["informe_intersup_admin.inf_declarainconf"] = array();
		}
		$lookupTableLinks["informe_tipo"]["informe_intersup_admin.inf_declarainconf"]["edit"] = array("table" => "informe_intersup_admin", "field" => "inf_declarainconf", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_tipo"] ) ) {
			$lookupTableLinks["informe_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["informe_tipo"]["informe_intersup_admin.inf_incumplimiento"] )) {
			$lookupTableLinks["informe_tipo"]["informe_intersup_admin.inf_incumplimiento"] = array();
		}
		$lookupTableLinks["informe_tipo"]["informe_intersup_admin.inf_incumplimiento"]["edit"] = array("table" => "informe_intersup_admin", "field" => "inf_incumplimiento", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_rubro"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_rubro"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_rubro"]["contrato_chart_tiporubro.cont_tipo_rubro"] )) {
			$lookupTableLinks["tparam_tipo_ct_rubro"]["contrato_chart_tiporubro.cont_tipo_rubro"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_rubro"]["contrato_chart_tiporubro.cont_tipo_rubro"]["search"] = array("table" => "contrato_chart_tiporubro", "field" => "cont_tipo_rubro", "page" => "search");
		if( !isset( $lookupTableLinks["vigencia"] ) ) {
			$lookupTableLinks["vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["vigencia"]["contrato_chart_tiporubro.cont_ano"] )) {
			$lookupTableLinks["vigencia"]["contrato_chart_tiporubro.cont_ano"] = array();
		}
		$lookupTableLinks["vigencia"]["contrato_chart_tiporubro.cont_ano"]["search"] = array("table" => "contrato_chart_tiporubro", "field" => "cont_ano", "page" => "search");
		if( !isset( $lookupTableLinks["contrato_estados"] ) ) {
			$lookupTableLinks["contrato_estados"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_estados"]["contrato_chart_estado.cont_estado"] )) {
			$lookupTableLinks["contrato_estados"]["contrato_chart_estado.cont_estado"] = array();
		}
		$lookupTableLinks["contrato_estados"]["contrato_chart_estado.cont_estado"]["search"] = array("table" => "contrato_chart_estado", "field" => "cont_estado", "page" => "search");
		if( !isset( $lookupTableLinks["vigencia"] ) ) {
			$lookupTableLinks["vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["vigencia"]["contrato_chart_estado.cont_ano"] )) {
			$lookupTableLinks["vigencia"]["contrato_chart_estado.cont_ano"] = array();
		}
		$lookupTableLinks["vigencia"]["contrato_chart_estado.cont_ano"]["search"] = array("table" => "contrato_chart_estado", "field" => "cont_ano", "page" => "search");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_002"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"]["contrato_chart_tipocont.cont_causalc"] )) {
			$lookupTableLinks["tparam_tipo_ct_002"]["contrato_chart_tipocont.cont_causalc"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_002"]["contrato_chart_tipocont.cont_causalc"]["search"] = array("table" => "contrato_chart_tipocont", "field" => "cont_causalc", "page" => "search");
		if( !isset( $lookupTableLinks["vigencia"] ) ) {
			$lookupTableLinks["vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["vigencia"]["contrato_chart_tipocont.cont_ano"] )) {
			$lookupTableLinks["vigencia"]["contrato_chart_tipocont.cont_ano"] = array();
		}
		$lookupTableLinks["vigencia"]["contrato_chart_tipocont.cont_ano"]["search"] = array("table" => "contrato_chart_tipocont", "field" => "cont_ano", "page" => "search");
		if( !isset( $lookupTableLinks["vigencia"] ) ) {
			$lookupTableLinks["vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["vigencia"]["contrato_chart_dependencia.cont_ano"] )) {
			$lookupTableLinks["vigencia"]["contrato_chart_dependencia.cont_ano"] = array();
		}
		$lookupTableLinks["vigencia"]["contrato_chart_dependencia.cont_ano"]["search"] = array("table" => "contrato_chart_dependencia", "field" => "cont_ano", "page" => "search");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["contrato_chart_dependencia.contractor_dependencia"] )) {
			$lookupTableLinks["dependencia"]["contrato_chart_dependencia.contractor_dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["contrato_chart_dependencia.contractor_dependencia"]["search"] = array("table" => "contrato_chart_dependencia", "field" => "contractor_dependencia", "page" => "search");
		if( !isset( $lookupTableLinks["vigencia"] ) ) {
			$lookupTableLinks["vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["vigencia"]["contrato_chart_supjer.cont_ano"] )) {
			$lookupTableLinks["vigencia"]["contrato_chart_supjer.cont_ano"] = array();
		}
		$lookupTableLinks["vigencia"]["contrato_chart_supjer.cont_ano"]["search"] = array("table" => "contrato_chart_supjer", "field" => "cont_ano", "page" => "search");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["contrato_chart_supjer.contractor_sup_jerarquico"] )) {
			$lookupTableLinks["dependencias_001"]["contrato_chart_supjer.contractor_sup_jerarquico"] = array();
		}
		$lookupTableLinks["dependencias_001"]["contrato_chart_supjer.contractor_sup_jerarquico"]["search"] = array("table" => "contrato_chart_supjer", "field" => "contractor_sup_jerarquico", "page" => "search");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores.cont_nit_contra_taname"] )) {
			$lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores.cont_nit_contra_taname"] = array();
		}
		$lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores.cont_nit_contra_taname"]["edit"] = array("table" => "q_bandejaentrada_supervisores", "field" => "cont_nit_contra_taname", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_estados"] ) ) {
			$lookupTableLinks["contrato_estados"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores.cont_estado"] )) {
			$lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores.cont_estado"] = array();
		}
		$lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores.cont_estado"]["edit"] = array("table" => "q_bandejaentrada_supervisores", "field" => "cont_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["interventor_periodos"] ) ) {
			$lookupTableLinks["interventor_periodos"] = array();
		}
		if( !isset( $lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores.cont_periodicidad"] )) {
			$lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores.cont_periodicidad"] = array();
		}
		$lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores.cont_periodicidad"]["edit"] = array("table" => "q_bandejaentrada_supervisores", "field" => "cont_periodicidad", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["q_bandejaentrada_supervisores.cargo_id"] )) {
			$lookupTableLinks["cargo"]["q_bandejaentrada_supervisores.cargo_id"] = array();
		}
		$lookupTableLinks["cargo"]["q_bandejaentrada_supervisores.cargo_id"]["edit"] = array("table" => "q_bandejaentrada_supervisores", "field" => "cargo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores.dependencia_id"] )) {
			$lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores.dependencia_id"] = array();
		}
		$lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores.dependencia_id"]["edit"] = array("table" => "q_bandejaentrada_supervisores", "field" => "dependencia_id", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["contrato_oe.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["contrato_oe.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["contrato_oe.id_cont_fk"]["edit"] = array("table" => "contrato_oe", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_oe_ordinal"] ) ) {
			$lookupTableLinks["q_oe_ordinal"] = array();
		}
		if( !isset( $lookupTableLinks["q_oe_ordinal"]["contrato_oe.oe_ordinal"] )) {
			$lookupTableLinks["q_oe_ordinal"]["contrato_oe.oe_ordinal"] = array();
		}
		$lookupTableLinks["q_oe_ordinal"]["contrato_oe.oe_ordinal"]["add"] = array("table" => "contrato_oe", "field" => "oe_ordinal", "page" => "add");
		if( !isset( $lookupTableLinks["q_oe_ordinal"] ) ) {
			$lookupTableLinks["q_oe_ordinal"] = array();
		}
		if( !isset( $lookupTableLinks["q_oe_ordinal"]["contrato_oe.oe_ordinal"] )) {
			$lookupTableLinks["q_oe_ordinal"]["contrato_oe.oe_ordinal"] = array();
		}
		$lookupTableLinks["q_oe_ordinal"]["contrato_oe.oe_ordinal"]["search"] = array("table" => "contrato_oe", "field" => "oe_ordinal", "page" => "search");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores1.cont_nit_contra_taname"] )) {
			$lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores1.cont_nit_contra_taname"] = array();
		}
		$lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores1.cont_nit_contra_taname"]["edit"] = array("table" => "q_bandejaentrada_supervisores1", "field" => "cont_nit_contra_taname", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_estados"] ) ) {
			$lookupTableLinks["contrato_estados"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores1.cont_estado"] )) {
			$lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores1.cont_estado"] = array();
		}
		$lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores1.cont_estado"]["edit"] = array("table" => "q_bandejaentrada_supervisores1", "field" => "cont_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["interventor_periodos"] ) ) {
			$lookupTableLinks["interventor_periodos"] = array();
		}
		if( !isset( $lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores1.cont_periodicidad"] )) {
			$lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores1.cont_periodicidad"] = array();
		}
		$lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores1.cont_periodicidad"]["edit"] = array("table" => "q_bandejaentrada_supervisores1", "field" => "cont_periodicidad", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["q_bandejaentrada_supervisores1.cargo_id"] )) {
			$lookupTableLinks["cargo"]["q_bandejaentrada_supervisores1.cargo_id"] = array();
		}
		$lookupTableLinks["cargo"]["q_bandejaentrada_supervisores1.cargo_id"]["edit"] = array("table" => "q_bandejaentrada_supervisores1", "field" => "cargo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores1.dependencia_id"] )) {
			$lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores1.dependencia_id"] = array();
		}
		$lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores1.dependencia_id"]["edit"] = array("table" => "q_bandejaentrada_supervisores1", "field" => "dependencia_id", "page" => "edit");
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores2"] ) ) {
			$lookupTableLinks["q_bandejaentrada_supervisores2"] = array();
		}
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup.id_cont_fk"] )) {
			$lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup.id_cont_fk"] = array();
		}
		$lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup.id_cont_fk"]["edit"] = array("table" => "informe_intersup", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup.inf_consecutivo"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup.inf_consecutivo"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup.inf_consecutivo"]["edit"] = array("table" => "informe_intersup", "field" => "inf_consecutivo", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_estado"] ) ) {
			$lookupTableLinks["informe_intersup_estado"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_estado"]["informe_intersup.inf_estado"] )) {
			$lookupTableLinks["informe_intersup_estado"]["informe_intersup.inf_estado"] = array();
		}
		$lookupTableLinks["informe_intersup_estado"]["informe_intersup.inf_estado"]["edit"] = array("table" => "informe_intersup", "field" => "inf_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["informe_intersup.inf_declarainconf"] )) {
			$lookupTableLinks["tparam_sn"]["informe_intersup.inf_declarainconf"] = array();
		}
		$lookupTableLinks["tparam_sn"]["informe_intersup.inf_declarainconf"]["edit"] = array("table" => "informe_intersup", "field" => "inf_declarainconf", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["informe_intersup.inf_incumplimiento"] )) {
			$lookupTableLinks["tparam_sn"]["informe_intersup.inf_incumplimiento"] = array();
		}
		$lookupTableLinks["tparam_sn"]["informe_intersup.inf_incumplimiento"]["edit"] = array("table" => "informe_intersup", "field" => "inf_incumplimiento", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores2.cont_nit_contra_taname"] )) {
			$lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores2.cont_nit_contra_taname"] = array();
		}
		$lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores2.cont_nit_contra_taname"]["edit"] = array("table" => "q_bandejaentrada_supervisores2", "field" => "cont_nit_contra_taname", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_estados"] ) ) {
			$lookupTableLinks["contrato_estados"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores2.cont_estado"] )) {
			$lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores2.cont_estado"] = array();
		}
		$lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores2.cont_estado"]["edit"] = array("table" => "q_bandejaentrada_supervisores2", "field" => "cont_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["interventor_periodos"] ) ) {
			$lookupTableLinks["interventor_periodos"] = array();
		}
		if( !isset( $lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores2.cont_periodicidad"] )) {
			$lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores2.cont_periodicidad"] = array();
		}
		$lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores2.cont_periodicidad"]["edit"] = array("table" => "q_bandejaentrada_supervisores2", "field" => "cont_periodicidad", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["q_bandejaentrada_supervisores2.cargo_id"] )) {
			$lookupTableLinks["cargo"]["q_bandejaentrada_supervisores2.cargo_id"] = array();
		}
		$lookupTableLinks["cargo"]["q_bandejaentrada_supervisores2.cargo_id"]["edit"] = array("table" => "q_bandejaentrada_supervisores2", "field" => "cargo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores2.dependencia_id"] )) {
			$lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores2.dependencia_id"] = array();
		}
		$lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores2.dependencia_id"]["edit"] = array("table" => "q_bandejaentrada_supervisores2", "field" => "dependencia_id", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup"] ) ) {
			$lookupTableLinks["informe_intersup"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup"]["informe_intersup_oe.inf_id_fk"] )) {
			$lookupTableLinks["informe_intersup"]["informe_intersup_oe.inf_id_fk"] = array();
		}
		$lookupTableLinks["informe_intersup"]["informe_intersup_oe.inf_id_fk"]["edit"] = array("table" => "informe_intersup_oe", "field" => "inf_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_oe"] ) ) {
			$lookupTableLinks["contrato_oe"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_oe"]["informe_intersup_oe.oe_id_fk"] )) {
			$lookupTableLinks["contrato_oe"]["informe_intersup_oe.oe_id_fk"] = array();
		}
		$lookupTableLinks["contrato_oe"]["informe_intersup_oe.oe_id_fk"]["edit"] = array("table" => "informe_intersup_oe", "field" => "oe_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn_oe"] ) ) {
			$lookupTableLinks["tparam_sn_oe"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe.sup_aprueba"] )) {
			$lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe.sup_aprueba"] = array();
		}
		$lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe.sup_aprueba"]["edit"] = array("table" => "informe_intersup_oe", "field" => "sup_aprueba", "page" => "edit");
}

?>