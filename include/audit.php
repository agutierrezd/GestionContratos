<?php
class AuditTrailTable
{
	var $logTableName="gestioncontratos_ver_103_audit";
	var $params;
	
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $attLogin=0;
	var $timeLogin=0;
	var $maxFieldLength;

	/**
	 * @type Connection
	 */
	protected $connection;
	
	function __construct()
	{
		global $cman;
		global $auditMaxFieldLength;
		
		$this->connection = $cman->getForAudit();		
		$this->attLogin=3;
		$this->timeLogin=5;
		$userid="";
		if(@$_SESSION["UserID"])
			$userid=$_SESSION["UserID"];
			
		$this->params=array($_SERVER["REMOTE_ADDR"],$userid);
		
		$this->maxFieldLength = $auditMaxFieldLength;
	}
	
    function LogLogin($pUsername)
    {
		global $globalEvents;
		$retval=true;
		$table="global_users";
		$this->params[1]=$pUsername;
		$arr=array();
		$this->params=array($_SERVER["REMOTE_ADDR"],$_SESSION["UserID"]);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strLogin, "");
		}
		return $retval;
    }
	
    function LogLoginFailed($pUsername)
    {
		global $globalEvents;
		$retval=true;
		$table="global_users";
		$this->params[1]=$pUsername;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strFailLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strFailLogin, "");
		}
		$this->params=array($_SERVER["REMOTE_ADDR"],"");
		return $retval;
    }
	
    function LogLogout()
    {
	global $globalEvents;
	if($_SESSION["UserID"]!="")
	{
		$retval=true;
		$table="global_users";
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogout, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strLogout, "");
		}
		return $retval;
	}
    }
	
    function LogChPassword()
    {
		global $globalEvents;
		$retval=true;
		$table="global_users";
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strChPass, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strChPass, "");
		}
		return $retval;
    }
	
    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$val);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strAdd, $str);
		}
		return $retval;
    }
	
    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($newvalues as $idx=>$val)
				{
					if(array_key_exists($idx,$keys))
					{
						if($val!=$oldvalues[$idx])
						{
							$str.=$idx." [old]: ".$oldvalues[$idx]."\r\n";
							$str.=$idx." [new]: ".$val."\r\n";
						}
						else
							$str.=$idx." : ".$val."\r\n";
					}
				}
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$strFields.=$v."\r\n";
												
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$newvalue);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$strFields.=$v."\r\n";
					}
				}
				$v="";
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strEdit, $str);
		}
		return $retval;
    }
	
    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{	
							$v = str_replace(array("\r\n","\n","\t")," ",$val);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strDelete, $str);
		}
		return $retval;
    }
    
    function LogAddEvent($message,$description="",$stable="")
    {
		global $globalEvents;
		$retval=true;
		$table=$stable;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $stable, $message, $description);
		}
		return $retval;
    }
	
    function LoginSuccessful()
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]). 
				" AND " .$this->connection->addFieldWrappers("action"). "=" .$this->connection->prepareString($this->strAccess);
			$sql = "DELETE FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where;
			
			$this->connection->exec( $sql );
		}
		
    }
	
    function LoginUnsuccessful($pUsername)
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$this->insert(now(), $_SERVER["REMOTE_ADDR"], $pUsername, "", $this->strAccess, "");
		}
    }
    
	function LoginAccess()
	{
		if( $this->attLogin > 0 && $this->timeLogin > 0 )
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]). 
				" AND " .$this->connection->addFieldWrappers("action"). "=".$this->connection->prepareString("access");
			$orderBy = $this->connection->addFieldWrappers("id")." asc";
			$sql = "SELECT * FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where. " ORDER BY " .$orderBy;
			
			$qResult = $this->connection->query( $sql );
			
			$i = 0;
			while( $data = $qResult->fetchAssoc() )
			{
				if( secondsPassedFrom($data["datetime"]) / 60 <= $this->timeLogin )
				{
					if($i==0)
						$firstAccess=$data["datetime"];
					$i+=1;
				}
			}
			
			if( $i >= $this->attLogin )
				return ceil($this->timeLogin-secondsPassedFrom($firstAccess) / 60);
		}

		return false;
	}
	
	function logValueEnable($table)
	{
		if($table=="global_users")
		{
			return true;
		}
		if($table=="contrato")
		{
			return true;
		}
		if($table=="admin_rights")
		{
			return true;
		}
		if($table=="admin_members")
		{
			return true;
		}
		if($table=="admin_users")
		{
			return true;
		}
		if($table=="contractor_master")
		{
			return true;
		}
		if($table=="tipo_docidentidad")
		{
			return true;
		}
		if($table=="tipo_banco")
		{
			return true;
		}
		if($table=="tipo_cta_banco")
		{
			return true;
		}
		if($table=="global_status")
		{
			return true;
		}
		if($table=="divipola")
		{
			return true;
		}
		if($table=="contractor_master_vinc")
		{
			return true;
		}
		if($table=="paa_master")
		{
			return true;
		}
		if($table=="vigencia")
		{
			return true;
		}
		if($table=="contrato_tipo")
		{
			return true;
		}
		if($table=="q_rubros")
		{
			return true;
		}
		if($table=="q_usos")
		{
			return true;
		}
		if($table=="rep_prg001_catalogopresupuestal")
		{
			return true;
		}
		if($table=="contrato_tipo_unidad")
		{
			return true;
		}
		if($table=="interventor_periodos")
		{
			return true;
		}
		if($table=="tparam_tipo_ct_000")
		{
			return true;
		}
		if($table=="tparam_tipo_ct_001")
		{
			return true;
		}
		if($table=="tparam_tipo_ct_002")
		{
			return true;
		}
		if($table=="tipo_contrato")
		{
			return true;
		}
		if($table=="contrato_forma_pago")
		{
			return true;
		}
		if($table=="tipo_si_no")
		{
			return true;
		}
		if($table=="contrato_estados")
		{
			return true;
		}
		if($table=="contrato_pre")
		{
			return true;
		}
		if($table=="contrato_attached")
		{
			return true;
		}
		if($table=="contrato_attached_type")
		{
			return true;
		}
		if($table=="polizas_master")
		{
			return true;
		}
		if($table=="polizas_tipo")
		{
			return true;
		}
		if($table=="polizas_aseguradoras")
		{
			return true;
		}
		if($table=="info_secop")
		{
			return true;
		}
		if($table=="interventor_interno")
		{
			return true;
		}
		if($table=="tparam_habilita")
		{
			return true;
		}
		if($table=="contrato_cdp")
		{
			return true;
		}
		if($table=="dependencia")
		{
			return true;
		}
		if($table=="contrato_rp")
		{
			return true;
		}
		if($table=="dependencias_001")
		{
			return true;
		}
		if($table=="tparam_tipo_ct_regimen_tribut")
		{
			return true;
		}
		if($table=="global_unspsc")
		{
			return true;
		}
		if($table=="cargo")
		{
			return true;
		}
		if($table=="tparam_sn")
		{
			return true;
		}
		if($table=="informe_intersup_plan_pagos")
		{
			return true;
		}
		if($table=="informe_intersup_admin")
		{
			return true;
		}
		if($table=="q_001_dashboard")
		{
			return true;
		}
		if($table=="informe_intersup_estado")
		{
			return true;
		}
		if($table=="informe_tipo")
		{
			return true;
		}
		if($table=="contrato_chart_tiporubro")
		{
			return false;
		}
		if($table=="contrato_chart_estado")
		{
			return false;
		}
		if($table=="contrato_chart_tipocont")
		{
			return false;
		}
		if($table=="contrato_chart_dependencia")
		{
			return false;
		}
		if($table=="contrato_chart_supjer")
		{
			return false;
		}
		if($table=="secop")
		{
			return true;
		}
		if($table=="tparam_tipo_ct_rubro")
		{
			return true;
		}
		if($table=="q_001_dashboard_info")
		{
			return true;
		}
		if($table=="q_bandejaentrada_supervisores")
		{
			return true;
		}
		if($table=="q_000_control_informes")
		{
			return true;
		}
		if($table=="informe_intersup_plan_pagos_st")
		{
			return true;
		}
		if($table=="contrato_oe")
		{
			return true;
		}
		if($table=="q_oe_ordinal")
		{
			return true;
		}
		if($table=="q_bandejaentrada_supervisores1")
		{
			return true;
		}
		if($table=="informe_intersup")
		{
			return true;
		}
		if($table=="q_bandejaentrada_supervisores2")
		{
			return true;
		}
		if($table=="q_divipola")
		{
			return true;
		}
		if($table=="informe_intersup_oe")
		{
			return true;
		}
		if($table=="tparam_sn_oe")
		{
			return true;
		}
		if($table=="contrato_modifica")
		{
			return true;
		}
		if($table=="contrato_modifica_type")
		{
			return true;
		}
		if($table=="contrato_modifica_prorroga")
		{
			return true;
		}
		if($table=="contrato_modifica_cesion")
		{
			return true;
		}
		if($table=="contrato_modifica_track")
		{
			return false;
		}
		if($table=="q_info_registros")
		{
			return false;
		}
		if($table=="q_info_obligacion")
		{
			return false;
		}
		if($table=="q_info_ordenpago")
		{
			return false;
		}
		if($table=="q_bandejaentrada_supervisores3")
		{
			return true;
		}
		if($table=="informe_intersup3")
		{
			return true;
		}
		if($table=="contrato_dependencia")
		{
			return false;
		}
		if($table=="global_users_sup")
		{
			return true;
		}
	}
	
	protected function insert($datetime, $ip, $user, $table, $action, $description)
	{
		$sql = "INSERT INTO " .$this->connection->addTableWrappers( $this->logTableName ).
			" (" .$this->connection->addFieldWrappers("datetime").
			"," .$this->connection->addFieldWrappers("ip").
			"," .$this->connection->addFieldWrappers("user").
			"," .$this->connection->addFieldWrappers("table"). 
			"," .$this->connection->addFieldWrappers("action").
			"," .$this->connection->addFieldWrappers("description").
			") VALUES (" .$this->connection->addDateQuotes($datetime).
			"," .$this->connection->prepareString($ip). 
			"," .$this->connection->prepareString($user).
			"," .$this->connection->prepareString($table).
			"," .$this->connection->prepareString($action). 
			"," .$this->connection->prepareString($description).
			")";
		
		return $this->connection->exec( $sql );
	}
	
	protected function getMaxLengthSubstr( $value )
	{		
		if( $this->maxFieldLength && strlen($value) > $this->maxFieldLength )
			return runner_substr($value, 0, $this->maxFieldLength);
		
		return $value;
	}	
}

class AuditTrailFile
{
	var $logfile="audit.log";
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $params;
	var $maxFieldLength;
	
	function __construct()
	{
		global $auditMaxFieldLength;
		
		$userid = "";
		if(@$_SESSION["UserID"])
			$userid = $_SESSION["UserID"];
		
		$this->params = array($_SERVER["REMOTE_ADDR"], $userid);
		
		$this->maxFieldLength = $auditMaxFieldLength;
	}
	
    function LogLogin($pUsername)
    {
				global $globalEvents;
		$retval=true;
		$table="global_users";
		$this->params[1]=$pUsername;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strLogin."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }
	
    function LogLoginFailed($pUsername)
    {
				global $globalEvents;
		$retval=true;
		$table="global_users";
		$this->params[1]=$pUsername;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strFailLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strFailLogin."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }
	
    function LogLogout()
    {
		global $globalEvents;
		if($_SESSION["UserID"]!="")
		{
			$retval=true;
			$table="global_users";
			$arr=array();
			if($globalEvents->exists("OnAuditLog"))
				$retval=$globalEvents->OnAuditLog($this->strLogout, $this->params, $table, $arr, $arr, $arr);
			if($retval)
			{
				$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strLogout."\r\n";
				$this->writeToLogFile( $str );
			}
			return $retval;
		}
    }
	
    function LogChPassword()
    {
		global $globalEvents;
		$retval=true;
		$table="global_users";
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strChPass, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strChPass."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }
	
    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strAdd.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$v="";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>"."\r\n";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$val);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$str_add.=$str.chr(9).$idx.chr(9).chr(9).$v."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strEdit.chr(9).$key;
			$putsValue=true;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue)
					{
						$v1="";
						if(IsBinaryType($type))
							$v1="<binary value>";
						else
						{
							$v1 = str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							$v = $this->getMaxLengthSubstr( $v );
						}
						
						$v2="";
						if(IsBinaryType($type))
							$v2="<binary value>";
						else
						{
							$v2 = str_replace(array("\r\n","\n","\t")," ",$newvalue);
							$v2 = $this->getMaxLengthSubstr( $v2 );
						}
						$str_add.=$str.chr(9).$idx.chr(9).$v1.chr(9).$v2."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strDelete.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					$v="";
					if(IsBinaryType($pSet->getFieldType($idx)))
						$v="<binary value>";
					else
					{
						$v = str_replace(array("\r\n","\n","\t")," ",$val);
						$v = $this->getMaxLengthSubstr( $v );
					}
					$str_add.=$str.chr(9).$idx.chr(9).$v."\r\n";
				}
			}
			else
				$str_add=$str."\r\n";
				
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
	function writeToLogFile( $str )
	{
		$p=strrpos($this->logfile,".");
		$logfileName=runner_substr($this->logfile,0,$p);
		$logfileExt=runner_substr($this->logfile,$p+1, strlen($this->logfile)-1);
		$tn=$logfileName."_".format_datetime_custom(db2time(now()),"yyyyMMdd").".".$logfileExt;
		
		$fullname = getabspath($tn);
		$fsize = 0;
		if (file_exists($fullname)){
			$fsize = filesize($fullname);
		}
		$str_to_append = "";
		if( !$fsize )
		{
			$str_to_append = $this->columnDate.chr(9).$this->columnTime.chr(9).$this->columnIP.chr(9).$this->columnUser.chr(9).$this->columnTable.chr(9).$this->columnAction.chr(9).$this->columnKey.chr(9).$this->columnField.chr(9).$this->columnOldValue.chr(9).$this->columnNewValue."\r\n";
		}
		$str_to_append .= $str;
		append_to_file( $fullname, $str_to_append );
		
	}
	
	function LogAddEvent($message,$description="",$str_table="")
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$params[0].chr(9).$params[1].chr(9).$table.chr(9).$message.chr(9).$description."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }
    
    function LoginAccess()
	{
		return false;
	}
	
	function LoginSuccessful()
    {
		return true;
    }
	
    function LoginUnsuccessful($pUsername)
    {	
		return true;
	}
	
	function logValueEnable($table)
	{
		if($table=="global_users")
		{
			return true;
		}
		if($table=="contrato")
		{
			return true;
		}
		if($table=="admin_rights")
		{
			return true;
		}
		if($table=="admin_members")
		{
			return true;
		}
		if($table=="admin_users")
		{
			return true;
		}
		if($table=="contractor_master")
		{
			return true;
		}
		if($table=="tipo_docidentidad")
		{
			return true;
		}
		if($table=="tipo_banco")
		{
			return true;
		}
		if($table=="tipo_cta_banco")
		{
			return true;
		}
		if($table=="global_status")
		{
			return true;
		}
		if($table=="divipola")
		{
			return true;
		}
		if($table=="contractor_master_vinc")
		{
			return true;
		}
		if($table=="paa_master")
		{
			return true;
		}
		if($table=="vigencia")
		{
			return true;
		}
		if($table=="contrato_tipo")
		{
			return true;
		}
		if($table=="q_rubros")
		{
			return true;
		}
		if($table=="q_usos")
		{
			return true;
		}
		if($table=="rep_prg001_catalogopresupuestal")
		{
			return true;
		}
		if($table=="contrato_tipo_unidad")
		{
			return true;
		}
		if($table=="interventor_periodos")
		{
			return true;
		}
		if($table=="tparam_tipo_ct_000")
		{
			return true;
		}
		if($table=="tparam_tipo_ct_001")
		{
			return true;
		}
		if($table=="tparam_tipo_ct_002")
		{
			return true;
		}
		if($table=="tipo_contrato")
		{
			return true;
		}
		if($table=="contrato_forma_pago")
		{
			return true;
		}
		if($table=="tipo_si_no")
		{
			return true;
		}
		if($table=="contrato_estados")
		{
			return true;
		}
		if($table=="contrato_pre")
		{
			return true;
		}
		if($table=="contrato_attached")
		{
			return true;
		}
		if($table=="contrato_attached_type")
		{
			return true;
		}
		if($table=="polizas_master")
		{
			return true;
		}
		if($table=="polizas_tipo")
		{
			return true;
		}
		if($table=="polizas_aseguradoras")
		{
			return true;
		}
		if($table=="info_secop")
		{
			return true;
		}
		if($table=="interventor_interno")
		{
			return true;
		}
		if($table=="tparam_habilita")
		{
			return true;
		}
		if($table=="contrato_cdp")
		{
			return true;
		}
		if($table=="dependencia")
		{
			return true;
		}
		if($table=="contrato_rp")
		{
			return true;
		}
		if($table=="dependencias_001")
		{
			return true;
		}
		if($table=="tparam_tipo_ct_regimen_tribut")
		{
			return true;
		}
		if($table=="global_unspsc")
		{
			return true;
		}
		if($table=="cargo")
		{
			return true;
		}
		if($table=="tparam_sn")
		{
			return true;
		}
		if($table=="informe_intersup_plan_pagos")
		{
			return true;
		}
		if($table=="informe_intersup_admin")
		{
			return true;
		}
		if($table=="q_001_dashboard")
		{
			return true;
		}
		if($table=="informe_intersup_estado")
		{
			return true;
		}
		if($table=="informe_tipo")
		{
			return true;
		}
		if($table=="contrato_chart_tiporubro")
		{
			return false;
		}
		if($table=="contrato_chart_estado")
		{
			return false;
		}
		if($table=="contrato_chart_tipocont")
		{
			return false;
		}
		if($table=="contrato_chart_dependencia")
		{
			return false;
		}
		if($table=="contrato_chart_supjer")
		{
			return false;
		}
		if($table=="secop")
		{
			return true;
		}
		if($table=="tparam_tipo_ct_rubro")
		{
			return true;
		}
		if($table=="q_001_dashboard_info")
		{
			return true;
		}
		if($table=="q_bandejaentrada_supervisores")
		{
			return true;
		}
		if($table=="q_000_control_informes")
		{
			return true;
		}
		if($table=="informe_intersup_plan_pagos_st")
		{
			return true;
		}
		if($table=="contrato_oe")
		{
			return true;
		}
		if($table=="q_oe_ordinal")
		{
			return true;
		}
		if($table=="q_bandejaentrada_supervisores1")
		{
			return true;
		}
		if($table=="informe_intersup")
		{
			return true;
		}
		if($table=="q_bandejaentrada_supervisores2")
		{
			return true;
		}
		if($table=="q_divipola")
		{
			return true;
		}
		if($table=="informe_intersup_oe")
		{
			return true;
		}
		if($table=="tparam_sn_oe")
		{
			return true;
		}
		if($table=="contrato_modifica")
		{
			return true;
		}
		if($table=="contrato_modifica_type")
		{
			return true;
		}
		if($table=="contrato_modifica_prorroga")
		{
			return true;
		}
		if($table=="contrato_modifica_cesion")
		{
			return true;
		}
		if($table=="contrato_modifica_track")
		{
			return false;
		}
		if($table=="q_info_registros")
		{
			return false;
		}
		if($table=="q_info_obligacion")
		{
			return false;
		}
		if($table=="q_info_ordenpago")
		{
			return false;
		}
		if($table=="q_bandejaentrada_supervisores3")
		{
			return true;
		}
		if($table=="informe_intersup3")
		{
			return true;
		}
		if($table=="contrato_dependencia")
		{
			return false;
		}
		if($table=="global_users_sup")
		{
			return true;
		}
	}
	
	protected function getMaxLengthSubstr( $value )
	{		
		if( $this->maxFieldLength && strlen($value) > $this->maxFieldLength )
			return runner_substr($value, 0, $this->maxFieldLength);
		
		return $value;
	}
}
?>