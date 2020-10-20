<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 


if(!isLogged())
{ 
	return;
}
if(!IsAdmin())
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "global_users";
$nonAdminTablesArr[] = "contrato";
$nonAdminTablesArr[] = "contractor_master";
$nonAdminTablesArr[] = "tipo_docidentidad";
$nonAdminTablesArr[] = "tipo_banco";
$nonAdminTablesArr[] = "tipo_cta_banco";
$nonAdminTablesArr[] = "global_status";
$nonAdminTablesArr[] = "divipola";
$nonAdminTablesArr[] = "contractor_master_vinc";
$nonAdminTablesArr[] = "paa_master";
$nonAdminTablesArr[] = "vigencia";
$nonAdminTablesArr[] = "contrato_tipo";
$nonAdminTablesArr[] = "q_rubros";
$nonAdminTablesArr[] = "q_usos";
$nonAdminTablesArr[] = "rep_prg001_catalogopresupuestal";
$nonAdminTablesArr[] = "contrato_tipo_unidad";
$nonAdminTablesArr[] = "interventor_periodos";
$nonAdminTablesArr[] = "tparam_tipo_ct_000";
$nonAdminTablesArr[] = "tparam_tipo_ct_001";
$nonAdminTablesArr[] = "tparam_tipo_ct_002";
$nonAdminTablesArr[] = "tipo_contrato";
$nonAdminTablesArr[] = "contrato_forma_pago";
$nonAdminTablesArr[] = "tipo_si_no";
$nonAdminTablesArr[] = "contrato_estados";
$nonAdminTablesArr[] = "contrato_pre";
$nonAdminTablesArr[] = "contrato_attached";
$nonAdminTablesArr[] = "contrato_attached_type";
$nonAdminTablesArr[] = "polizas_master";
$nonAdminTablesArr[] = "polizas_tipo";
$nonAdminTablesArr[] = "polizas_aseguradoras";
$nonAdminTablesArr[] = "info_secop";
$nonAdminTablesArr[] = "interventor_interno";
$nonAdminTablesArr[] = "tparam_habilita";
$nonAdminTablesArr[] = "contrato_cdp";
$nonAdminTablesArr[] = "dependencia";
$nonAdminTablesArr[] = "contrato_rp";
$nonAdminTablesArr[] = "dependencias_001";
$nonAdminTablesArr[] = "tparam_tipo_ct_regimen_tribut";
$nonAdminTablesArr[] = "global_unspsc";
$nonAdminTablesArr[] = "cargo";
$nonAdminTablesArr[] = "tparam_sn";
$nonAdminTablesArr[] = "informe_intersup_plan_pagos";
$nonAdminTablesArr[] = "informe_intersup_admin";
$nonAdminTablesArr[] = "q_001_dashboard";
$nonAdminTablesArr[] = "informe_intersup_estado";
$nonAdminTablesArr[] = "informe_tipo";
$nonAdminTablesArr[] = "contrato_chart_tiporubro";
$nonAdminTablesArr[] = "contrato_chart_estado";
$nonAdminTablesArr[] = "contrato_chart_tipocont";
$nonAdminTablesArr[] = "contrato_chart_dependencia";
$nonAdminTablesArr[] = "contrato_chart_supjer";
$nonAdminTablesArr[] = "secop";
$nonAdminTablesArr[] = "tparam_tipo_ct_rubro";
$nonAdminTablesArr[] = "q_001_dashboard_info";
$nonAdminTablesArr[] = "q_bandejaentrada_supervisores";
$nonAdminTablesArr[] = "q_000_control_informes";
$nonAdminTablesArr[] = "informe_intersup_plan_pagos_st";
$nonAdminTablesArr[] = "contrato_oe";
$nonAdminTablesArr[] = "q_oe_ordinal";
$nonAdminTablesArr[] = "q_bandejaentrada_supervisores1";
$nonAdminTablesArr[] = "informe_intersup";
$nonAdminTablesArr[] = "q_bandejaentrada_supervisores2";
$nonAdminTablesArr[] = "q_divipola";
$nonAdminTablesArr[] = "informe_intersup_oe";
$nonAdminTablesArr[] = "tparam_sn_oe";
$nonAdminTablesArr[] = "contrato_modifica";
$nonAdminTablesArr[] = "contrato_modifica_type";
$nonAdminTablesArr[] = "contrato_modifica_prorroga";
$nonAdminTablesArr[] = "contrato_modifica_cesion";
$nonAdminTablesArr[] = "contrato_modifica_track";
$nonAdminTablesArr[] = "q_info_registros";
$nonAdminTablesArr[] = "q_info_obligacion";
$nonAdminTablesArr[] = "q_info_ordenpago";
$nonAdminTablesArr[] = "q_bandejaentrada_supervisores3";
$nonAdminTablesArr[] = "informe_intersup3";
$nonAdminTablesArr[] = "contrato_dependencia";
$nonAdminTablesArr[] = "global_users_sup";

$ug_connection = $cman->getForUserGroups();

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));

$wGroupTableName = $ug_connection->addTableWrappers( "gestioncontratos_ver_103_uggroups" );
	
switch(postvalue("a"))
{
	case "add":
		$sql = "insert into ". $wGroupTableName ." (". $ug_connection->addFieldWrappers( "Label" ) .")"
			." values (". $ug_connection->prepareString( postvalue("name") ). ")";		
		$ug_connection->exec( $sql );

		$sql = "select max(". $ug_connection->addFieldWrappers( "GroupID") .") from ". $wGroupTableName;
		$data = $ug_connection->query( $sql )->fetchNumeric();
		
		echo printJSON( array('success' => true, 'id' => $data[0]) );
		break;
		
	case "del":
		$sql = "delete from ". $wGroupTableName ." where ". $ug_connection->addFieldWrappers("GroupID") ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		$sql = "delete from ". $ug_connection->addTableWrappers( "gestioncontratos_ver_103_ugrights" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		$sql = "delete from ".$ug_connection->addTableWrappers( "gestioncontratos_ver_103_ugmembers" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
		
	case "rename":
		$sql = "update ". $wGroupTableName  
			." set ". $ug_connection->addFieldWrappers( "Label" ) ."=". $ug_connection->prepareString( postvalue("name") )
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
	
	// @deprecated 
	// see ug_rights
	case 'saveRights':
		$error = '';
		if( postvalue('state') )
		{	
			$allRights = array();
			$sql = "select ". $ug_connection->addFieldWrappers( "GroupID" ) 
				.", ". $ug_connection->addFieldWrappers( "TableName" ) 
				.", ". $ug_connection->addFieldWrappers( "AccessMask" ) ." from ". $wGroupTableName;
			
			$qResult = $ug_connection->query( $sql );
			// don't use fetchAssoc! because of ORACLE and PostgreSQL
			while( $rightsRow = $qResult->fetchNumeric() )
			{
				$allRights[] = $rightsRow;
			}
			
			$wRightsTableName = $ug_connection->addTableWrappers( "gestioncontratos_ver_103_ugrights" );
			
			$delGroupId = 0;
			$state = my_json_decode( postvalue('state') );
			// delete all extra permissions from db
			foreach($allRights as $i => $rightValue)
			{
				$groupIDInt = (int) $rightValue[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if( !array_key_exists($groupIDInt, $state) )
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt;
					$ug_connection->exec( $sql );
				}
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt 
						." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=".$ug_connection->prepareString( html_special_decode($data[1]) );				
					$ug_connection->exec( $sql );
				}
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if( !array_key_exists($table, $realTables) )
						continue;
					
					$ins = true;
					foreach($allRights as $i => $rightValue)
					{	
						if($rightValue[0] == $groupId && $rightValue[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
							{
								$sql ="update". $wRightsTableName 
									." set ". $ug_connection->addFieldWrappers( "AccessMask" ) ."=". $ug_connection->prepareString( $mask )
									." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupId 
									." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=". $ug_connection->prepareString( html_special_decode($realTables[$table]) );
								$ug_connection->exec( $sql );
							}
						}
					}
					if($ins)
					{
						$sql = "insert into ". $wRightsTableName
							." (". $ug_connection->addFieldWrappers( "TableName" ) 
							.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
							.", ". $ug_connection->addFieldWrappers( "AccessMask" ) .") " 
							."values (". $ug_connection->prepareString(html_special_decode($realTables[$table])) .", ". $groupId .", ". $ug_connection->prepareString($mask)  .")";
						$ug_connection->exec( $sql );
					}
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo printJSON($result);
}