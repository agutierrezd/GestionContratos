<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers("global_users");
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tbldbct_at_localhost__cert_status;
	var $tbldbct_at_localhost__contractor_master;
	var $tbldbct_at_localhost__contrato;
	var $tbldbct_at_localhost__contrato_attached;
	var $tbldbct_at_localhost__contrato_attached_type;
	var $tbldbct_at_localhost__contrato_cdp;
	var $tbldbct_at_localhost__contrato_dependencia;
	var $tbldbct_at_localhost__contrato_estados;
	var $tbldbct_at_localhost__contrato_forma_pago;
	var $tbldbct_at_localhost__contrato_modifica;
	var $tbldbct_at_localhost__contrato_modifica_track;
	var $tbldbct_at_localhost__contrato_modifica_type;
	var $tbldbct_at_localhost__contrato_oe;
	var $tbldbct_at_localhost__contrato_pre;
	var $tbldbct_at_localhost__contrato_rp;
	var $tbldbct_at_localhost__contrato_tipo;
	var $tbldbct_at_localhost__contrato_tipo_unidad;
	var $tbldbct_at_localhost__gestioncontratos_ver_103_audit;
	var $tbldbct_at_localhost__gestioncontratos_ver_103_locking;
	var $tbldbct_at_localhost__gestioncontratos_ver_103_settings;
	var $tbldbct_at_localhost__info_secop;
	var $tbldbct_at_localhost__informe_intersup;
	var $tbldbct_at_localhost__informe_intersup_estado;
	var $tbldbct_at_localhost__informe_intersup_oe;
	var $tbldbct_at_localhost__informe_intersup_plan_pagos;
	var $tbldbct_at_localhost__informe_intersup_plan_pagos_st;
	var $tbldbct_at_localhost__informe_tipo;
	var $tbldbct_at_localhost__interventor_interno;
	var $tbldbct_at_localhost__interventor_periodos;
	var $tbldbct_at_localhost__polizas_aseguradoras;
	var $tbldbct_at_localhost__polizas_master;
	var $tbldbct_at_localhost__polizas_tipo;
	var $tbldbct_at_localhost__q_000_control_informes;
	var $tbldbct_at_localhost__q_001_dashboard;
	var $tbldbct_at_localhost__q_bandejaentrada_supervisores;
	var $tbldbct_at_localhost__q_oe_ordinal;
	var $tbldbct_at_localhost__tipo_banco;
	var $tbldbct_at_localhost__tipo_contrato;
	var $tbldbct_at_localhost__tipo_cta_banco;
	var $tbldbct_at_localhost__tipo_docidentidad;
	var $tbldbct_at_localhost__tipo_si_no;
	var $tbldbct_at_localhost__tparam_habilita;
	var $tbldbct_at_localhost__tparam_sn_oe;
	var $tbldbct_at_localhost__tparam_tipo_ct_000;
	var $tbldbct_at_localhost__tparam_tipo_ct_001;
	var $tbldbct_at_localhost__tparam_tipo_ct_002;
	var $tbldbct_at_localhost__tparam_tipo_ct_regimen_tribut;
	var $tbldbct_at_localhost__tparam_tipo_ct_rubro;
	var $tbldbct_at_localhost__vigencia;
	var $tbldbusers_at_localhost__divipola;
	var $tbldbusers_at_localhost_edl_funcionario;
	var $tbldbusers_at_localhost__gestioncontratos_ver_103_uggroups;
	var $tbldbusers_at_localhost__gestioncontratos_ver_103_ugmembers;
	var $tbldbusers_at_localhost__gestioncontratos_ver_103_ugrights;
	var $tbldbusers_at_localhost__global_status;
	var $tbldbusers_at_localhost__global_users;
	var $tbldbusers_at_localhost__q_divipola;
	var $tblmincit_global_at_localhost__global_unspsc;
	var $tblmincit_global_at_localhost__paa_master;
	var $tblsep2_at_localhost__q_info_obligacion;
	var $tblsep2_at_localhost__q_info_ordenpago;
	var $tblsep2_at_localhost__q_info_registros;
	var $tblsep2_at_localhost__q_rubros;
	var $tblsep2_at_localhost__q_usos;
	var $tblsep2_at_localhost__rep_prg001_catalogopresupuestal;
	var $tblsep2_at_localhost__secop;
	var $tbledl_at_localhost__cargo;
	var $tbledl_at_localhost__comportamental;
	var $tbledl_at_localhost__dependencia;
	var $tbledl_at_localhost__dependencias_001;
	var $tbledl_at_localhost__tparam_sn;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "cert_status", "varname" => "dbct_at_localhost__cert_status", "altvarname" => "cert_status", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "contractor_master", "varname" => "dbct_at_localhost__contractor_master", "altvarname" => "contractor_master", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "contrato", "varname" => "dbct_at_localhost__contrato", "altvarname" => "contrato", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "contrato_attached", "varname" => "dbct_at_localhost__contrato_attached", "altvarname" => "contrato_attached", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "contrato_attached_type", "varname" => "dbct_at_localhost__contrato_attached_type", "altvarname" => "contrato_attached_type", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "contrato_cdp", "varname" => "dbct_at_localhost__contrato_cdp", "altvarname" => "contrato_cdp", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "contrato_dependencia", "varname" => "dbct_at_localhost__contrato_dependencia", "altvarname" => "contrato_dependencia", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "contrato_estados", "varname" => "dbct_at_localhost__contrato_estados", "altvarname" => "contrato_estados", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "contrato_forma_pago", "varname" => "dbct_at_localhost__contrato_forma_pago", "altvarname" => "contrato_forma_pago", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "contrato_modifica", "varname" => "dbct_at_localhost__contrato_modifica", "altvarname" => "contrato_modifica", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "contrato_modifica_track", "varname" => "dbct_at_localhost__contrato_modifica_track", "altvarname" => "contrato_modifica_track", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "contrato_modifica_type", "varname" => "dbct_at_localhost__contrato_modifica_type", "altvarname" => "contrato_modifica_type", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "contrato_oe", "varname" => "dbct_at_localhost__contrato_oe", "altvarname" => "contrato_oe", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "contrato_pre", "varname" => "dbct_at_localhost__contrato_pre", "altvarname" => "contrato_pre", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "contrato_rp", "varname" => "dbct_at_localhost__contrato_rp", "altvarname" => "contrato_rp", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "contrato_tipo", "varname" => "dbct_at_localhost__contrato_tipo", "altvarname" => "contrato_tipo", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "contrato_tipo_unidad", "varname" => "dbct_at_localhost__contrato_tipo_unidad", "altvarname" => "contrato_tipo_unidad", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "gestioncontratos_ver_103_audit", "varname" => "dbct_at_localhost__gestioncontratos_ver_103_audit", "altvarname" => "gestioncontratos_ver_103_audit", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "gestioncontratos_ver_103_locking", "varname" => "dbct_at_localhost__gestioncontratos_ver_103_locking", "altvarname" => "gestioncontratos_ver_103_locking", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "gestioncontratos_ver_103_settings", "varname" => "dbct_at_localhost__gestioncontratos_ver_103_settings", "altvarname" => "gestioncontratos_ver_103_settings", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "info_secop", "varname" => "dbct_at_localhost__info_secop", "altvarname" => "info_secop", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "informe_intersup", "varname" => "dbct_at_localhost__informe_intersup", "altvarname" => "informe_intersup", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "informe_intersup_estado", "varname" => "dbct_at_localhost__informe_intersup_estado", "altvarname" => "informe_intersup_estado", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "informe_intersup_oe", "varname" => "dbct_at_localhost__informe_intersup_oe", "altvarname" => "informe_intersup_oe", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "informe_intersup_plan_pagos", "varname" => "dbct_at_localhost__informe_intersup_plan_pagos", "altvarname" => "informe_intersup_plan_pagos", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "informe_intersup_plan_pagos_st", "varname" => "dbct_at_localhost__informe_intersup_plan_pagos_st", "altvarname" => "informe_intersup_plan_pagos_st", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "informe_tipo", "varname" => "dbct_at_localhost__informe_tipo", "altvarname" => "informe_tipo", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "interventor_interno", "varname" => "dbct_at_localhost__interventor_interno", "altvarname" => "interventor_interno", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "interventor_periodos", "varname" => "dbct_at_localhost__interventor_periodos", "altvarname" => "interventor_periodos", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "polizas_aseguradoras", "varname" => "dbct_at_localhost__polizas_aseguradoras", "altvarname" => "polizas_aseguradoras", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "polizas_master", "varname" => "dbct_at_localhost__polizas_master", "altvarname" => "polizas_master", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "polizas_tipo", "varname" => "dbct_at_localhost__polizas_tipo", "altvarname" => "polizas_tipo", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "q_000_control_informes", "varname" => "dbct_at_localhost__q_000_control_informes", "altvarname" => "q_000_control_informes", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "q_001_dashboard", "varname" => "dbct_at_localhost__q_001_dashboard", "altvarname" => "q_001_dashboard", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "q_bandejaentrada_supervisores", "varname" => "dbct_at_localhost__q_bandejaentrada_supervisores", "altvarname" => "q_bandejaentrada_supervisores", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "q_oe_ordinal", "varname" => "dbct_at_localhost__q_oe_ordinal", "altvarname" => "q_oe_ordinal", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "tipo_banco", "varname" => "dbct_at_localhost__tipo_banco", "altvarname" => "tipo_banco", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "tipo_contrato", "varname" => "dbct_at_localhost__tipo_contrato", "altvarname" => "tipo_contrato", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "tipo_cta_banco", "varname" => "dbct_at_localhost__tipo_cta_banco", "altvarname" => "tipo_cta_banco", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "tipo_docidentidad", "varname" => "dbct_at_localhost__tipo_docidentidad", "altvarname" => "tipo_docidentidad", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "tipo_si_no", "varname" => "dbct_at_localhost__tipo_si_no", "altvarname" => "tipo_si_no", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "tparam_habilita", "varname" => "dbct_at_localhost__tparam_habilita", "altvarname" => "tparam_habilita", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "tparam_sn_oe", "varname" => "dbct_at_localhost__tparam_sn_oe", "altvarname" => "tparam_sn_oe", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "tparam_tipo_ct_000", "varname" => "dbct_at_localhost__tparam_tipo_ct_000", "altvarname" => "tparam_tipo_ct_000", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "tparam_tipo_ct_001", "varname" => "dbct_at_localhost__tparam_tipo_ct_001", "altvarname" => "tparam_tipo_ct_001", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "tparam_tipo_ct_002", "varname" => "dbct_at_localhost__tparam_tipo_ct_002", "altvarname" => "tparam_tipo_ct_002", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "tparam_tipo_ct_regimen_tribut", "varname" => "dbct_at_localhost__tparam_tipo_ct_regimen_tribut", "altvarname" => "tparam_tipo_ct_regimen_tribut", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "tparam_tipo_ct_rubro", "varname" => "dbct_at_localhost__tparam_tipo_ct_rubro", "altvarname" => "tparam_tipo_ct_rubro", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "vigencia", "varname" => "dbct_at_localhost__vigencia", "altvarname" => "vigencia", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "divipola", "varname" => "dbusers_at_localhost__divipola", "altvarname" => "divipola", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at localhost");
		$this->lstTables[] = array("name" => "funcionario", "varname" => "dbusers_at_localhost_edl_funcionario", "altvarname" => "funcionario", "connId" => "dbusers_at_localhost", "schema" => "edl", "connName" => "dbusers at localhost");
		$this->lstTables[] = array("name" => "gestioncontratos_ver_103_uggroups", "varname" => "dbusers_at_localhost__gestioncontratos_ver_103_uggroups", "altvarname" => "gestioncontratos_ver_103_uggroups", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at localhost");
		$this->lstTables[] = array("name" => "gestioncontratos_ver_103_ugmembers", "varname" => "dbusers_at_localhost__gestioncontratos_ver_103_ugmembers", "altvarname" => "gestioncontratos_ver_103_ugmembers", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at localhost");
		$this->lstTables[] = array("name" => "gestioncontratos_ver_103_ugrights", "varname" => "dbusers_at_localhost__gestioncontratos_ver_103_ugrights", "altvarname" => "gestioncontratos_ver_103_ugrights", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at localhost");
		$this->lstTables[] = array("name" => "global_status", "varname" => "dbusers_at_localhost__global_status", "altvarname" => "global_status", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at localhost");
		$this->lstTables[] = array("name" => "global_users", "varname" => "dbusers_at_localhost__global_users", "altvarname" => "global_users", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at localhost");
		$this->lstTables[] = array("name" => "q_divipola", "varname" => "dbusers_at_localhost__q_divipola", "altvarname" => "q_divipola", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at localhost");
		$this->lstTables[] = array("name" => "global_unspsc", "varname" => "mincit_global_at_localhost__global_unspsc", "altvarname" => "global_unspsc", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "paa_master", "varname" => "mincit_global_at_localhost__paa_master", "altvarname" => "paa_master", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "q_info_obligacion", "varname" => "sep2_at_localhost__q_info_obligacion", "altvarname" => "q_info_obligacion", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "sep2 at localhost");
		$this->lstTables[] = array("name" => "q_info_ordenpago", "varname" => "sep2_at_localhost__q_info_ordenpago", "altvarname" => "q_info_ordenpago", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "sep2 at localhost");
		$this->lstTables[] = array("name" => "q_info_registros", "varname" => "sep2_at_localhost__q_info_registros", "altvarname" => "q_info_registros", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "sep2 at localhost");
		$this->lstTables[] = array("name" => "q_rubros", "varname" => "sep2_at_localhost__q_rubros", "altvarname" => "q_rubros", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "sep2 at localhost");
		$this->lstTables[] = array("name" => "q_usos", "varname" => "sep2_at_localhost__q_usos", "altvarname" => "q_usos", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "sep2 at localhost");
		$this->lstTables[] = array("name" => "rep_prg001_catalogopresupuestal", "varname" => "sep2_at_localhost__rep_prg001_catalogopresupuestal", "altvarname" => "rep_prg001_catalogopresupuestal", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "sep2 at localhost");
		$this->lstTables[] = array("name" => "secop", "varname" => "sep2_at_localhost__secop", "altvarname" => "secop", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "sep2 at localhost");
		$this->lstTables[] = array("name" => "cargo", "varname" => "edl_at_localhost__cargo", "altvarname" => "cargo", "connId" => "edl_at_localhost", "schema" => "", "connName" => "edl at localhost");
		$this->lstTables[] = array("name" => "comportamental", "varname" => "edl_at_localhost__comportamental", "altvarname" => "comportamental", "connId" => "edl_at_localhost", "schema" => "", "connName" => "edl at localhost");
		$this->lstTables[] = array("name" => "dependencia", "varname" => "edl_at_localhost__dependencia", "altvarname" => "dependencia", "connId" => "edl_at_localhost", "schema" => "", "connName" => "edl at localhost");
		$this->lstTables[] = array("name" => "dependencias_001", "varname" => "edl_at_localhost__dependencias_001", "altvarname" => "dependencias_001", "connId" => "edl_at_localhost", "schema" => "", "connName" => "edl at localhost");
		$this->lstTables[] = array("name" => "tparam_sn", "varname" => "edl_at_localhost__tparam_sn", "altvarname" => "tparam_sn", "connId" => "edl_at_localhost", "schema" => "", "connName" => "edl at localhost");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>