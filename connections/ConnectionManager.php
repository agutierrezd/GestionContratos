<?php
class ConnectionManager
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();

	
	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */	
	protected $_tablesConnectionIds;
	
	
	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}
	
	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */	
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}
	
	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */	
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}
	
	/**
	 * Get connection object by the connection id 
	 * @param String connId
	 * @return Connection
	 */	
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) )
			$this->cache[ $connId ] = $this->getConnection( $connId );

		return $this->cache[ $connId ];
	}
	
	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "dbct_at_localhost" );
	}

	/**
	 * Get the users table db connection 
	 * @return Connection
	 */	
	public function getForLogin()
	{
		return $this->byId( "dbusers_at_localhost" );
	}
	
	/**
	 * Get the log table db connection 
	 * @return Connection
	 */	
	public function getForAudit()
	{
		return $this->byId( "dbct_at_localhost" );
	}
	
	/**
	 * Get the locking table db connection 
	 * @return Connection
	 */		
	public function getForLocking()
	{
		return $this->byId( "dbct_at_localhost" );
	}	
	
	/**
	 * Get the 'ug_groups' table db connection 
	 * @return Connection
	 */	
	public function getForUserGroups()
	{
		return $this->byId( "dbusers_at_localhost" );
	}		

	/**
	 * Get the saved searches table db connection 
	 * @return Connection
	 */	
	public function getForSavedSearches()
	{
		return $this->byId( "dbct_at_localhost" );
	}

	/**
	 * Get the webreports tables db connection 
	 * @return Connection
	 */		
	public function getForWebReports()
	{
		return $this->getDefault();
	}
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		include_once getabspath("connections/Connection.php");
		
		$data = $this->_connectionsData[ $connId ];	
		switch( $data["connStringType"] )
		{
			case "mysql":
				if( useMySQLiLib() )
				{
					include_once getabspath("connections/MySQLiConnection.php");
					return new MySQLiConnection( $data );
				}
				
				include_once getabspath("connections/MySQLConnection.php");	
				return new MySQLConnection( $data );	

			case "mssql":
			case "compact":
				if( useMSSQLWinConnect() )
				{
					include_once getabspath("connections/MSSQLWinConnection.php");
					return new MSSQLWinConnection( $data );
				}
				if( isSqlsrvExtLoaded() )
				{
					include_once getabspath("connections/MSSQLSrvConnection.php");	
					return new MSSQLSrvConnection( $data );
				}
				
				if( function_exists("mssql_connect") ) {
					include_once getabspath("connections/MSSQLUnixConnection.php");
					return new MSSQLUnixConnection( $data );			
				}

				if( class_exists("PDO") ) {
					include_once getabspath("connections/PDOConnection.php");
					$drivers = pdo_drivers();
					if( in_array( "sqlsrv", $drivers) )
					{
						$data["PDOString"] = "sqlsrv:Server=" . $data["connInfo"][0] . ";Database=" . $data["connInfo"][3];
						$data["PDOUser"] = $data["connInfo"][1];
						$data["PDOPass"] = $data["connInfo"][2];
						return new PDOConnection( $data );			
					}
					if( in_array( "dblib", $drivers) )
					{
						$data["PDOString"] = "dblib:host=" . $data["connInfo"][0] . ";dbname=" . $data["connInfo"][3];
						$data["PDOUser"] = $data["connInfo"][1];
						$data["PDOPass"] = $data["connInfo"][2];
						return new PDOConnection( $data );			
					}
				}
				echo "No SQL Server driver found in your PHP settings.";
				if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
					echo "<br>To enable SQL Server support add the following line to php.ini file:";
					echo "<br>extension=php_com_dotnet.dll";
				}
				exit();

			case "msaccess":
			case "odbc":
			case "odbcdsn":
			case "custom":
			case "file":
				if( stripos($data["ODBCString"], 'Provider=') !== false )
				{
					include_once getabspath("connections/ADOConnection.php");
					return new ADOConnection( $data );
				}
				
				include_once getabspath("connections/ODBCConnection.php");
				return new ODBCConnection( $data );
			
			case "oracle":
				include_once getabspath("connections/OracleConnection.php");
				return new OracleConnection( $data );

			case "postgre":
				include_once getabspath("connections/PostgreConnection.php");
				return new PostgreConnection( $data );

			case "db2":
				include_once getabspath("connections/DB2Connection.php");
				return new DB2Connection( $data );

			case "informix":
				include_once getabspath("connections/InformixConnection.php");
				return new InformixConnection( $data );

			case "sqlite":
				include_once getabspath("connections/SQLite3Connection.php");
				return new SQLite3Connection( $data );
			case "pdo":
				include_once getabspath("connections/PDOConnection.php");
				return new PDOConnection( $data );
		}
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's 
	 * db connection properties
	 */	 
	protected function _setConnectionsData()
	{
		// content of this function can be modified on demo account
		// variable names $data and $connectionsData are important

		$connectionsData = array();
		
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "dbct_at_localhost";
		$data["connName"] = "dbct at localhost";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;localhost;root;1qaz2wsx;;dbct;;1"; //currently unused

		$this->_connectionsIdByName["dbct at localhost"] = "dbct_at_localhost";
		
		$data["connInfo"] = array();
		$data["ODBCUID"] = "root";
		$data["ODBCPWD"] = "1qaz2wsx";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused
		
		$data["connInfo"][0] = "localhost";
		$data["connInfo"][1] = "root";
		$data["connInfo"][2] = "1qaz2wsx";
		$data["connInfo"][3] = "";
		$data["connInfo"][4] = "dbct";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 8.0 Unicode Driver};Server=localhost;Uid=root;Pwd=1qaz2wsx;Database=dbct;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["dbct_at_localhost"] = $data;
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "dbusers_at_localhost";
		$data["connName"] = "dbusers at localhost";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;localhost;root;1qaz2wsx;;dbusers;;1"; //currently unused

		$this->_connectionsIdByName["dbusers at localhost"] = "dbusers_at_localhost";
		
		$data["connInfo"] = array();
		$data["ODBCUID"] = "root";
		$data["ODBCPWD"] = "1qaz2wsx";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused
		
		$data["connInfo"][0] = "localhost";
		$data["connInfo"][1] = "root";
		$data["connInfo"][2] = "1qaz2wsx";
		$data["connInfo"][3] = "";
		$data["connInfo"][4] = "dbusers";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 8.0 Unicode Driver};Server=localhost;Uid=root;Pwd=1qaz2wsx;Database=dbusers;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["dbusers_at_localhost"] = $data;
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "mincit_global_at_localhost";
		$data["connName"] = "mincit_global at localhost";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;localhost;root;1qaz2wsx;;mincit_global;;1"; //currently unused

		$this->_connectionsIdByName["mincit_global at localhost"] = "mincit_global_at_localhost";
		
		$data["connInfo"] = array();
		$data["ODBCUID"] = "root";
		$data["ODBCPWD"] = "1qaz2wsx";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused
		
		$data["connInfo"][0] = "localhost";
		$data["connInfo"][1] = "root";
		$data["connInfo"][2] = "1qaz2wsx";
		$data["connInfo"][3] = "";
		$data["connInfo"][4] = "mincit_global";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 8.0 Unicode Driver};Server=localhost;Uid=root;Pwd=1qaz2wsx;Database=mincit_global;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["mincit_global_at_localhost"] = $data;
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "sep2_at_localhost";
		$data["connName"] = "sep2 at localhost";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;localhost;root;1qaz2wsx;;sep2;;1"; //currently unused

		$this->_connectionsIdByName["sep2 at localhost"] = "sep2_at_localhost";
		
		$data["connInfo"] = array();
		$data["ODBCUID"] = "root";
		$data["ODBCPWD"] = "1qaz2wsx";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused
		
		$data["connInfo"][0] = "localhost";
		$data["connInfo"][1] = "root";
		$data["connInfo"][2] = "1qaz2wsx";
		$data["connInfo"][3] = "";
		$data["connInfo"][4] = "sep2";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 8.0 Unicode Driver};Server=localhost;Uid=root;Pwd=1qaz2wsx;Database=sep2;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["sep2_at_localhost"] = $data;
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "edl_at_localhost";
		$data["connName"] = "edl at localhost";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;localhost;root;1qaz2wsx;;edl;;1"; //currently unused

		$this->_connectionsIdByName["edl at localhost"] = "edl_at_localhost";
		
		$data["connInfo"] = array();
		$data["ODBCUID"] = "root";
		$data["ODBCPWD"] = "1qaz2wsx";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused
		
		$data["connInfo"][0] = "localhost";
		$data["connInfo"][1] = "root";
		$data["connInfo"][2] = "1qaz2wsx";
		$data["connInfo"][3] = "";
		$data["connInfo"][4] = "edl";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 8.0 Unicode Driver};Server=localhost;Uid=root;Pwd=1qaz2wsx;Database=edl;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["edl_at_localhost"] = $data;
		$this->_connectionsData = $connectionsData;
	}
	
	/**
	 * Set the data representing the correspondence between 
	 * the project's table names and db connections
	 */	 
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["global_users"] = "dbusers_at_localhost";
		$connectionsIds["contrato"] = "dbct_at_localhost";
		$connectionsIds["admin_rights"] = "dbusers_at_localhost";
		$connectionsIds["admin_members"] = "dbusers_at_localhost";
		$connectionsIds["admin_users"] = "dbusers_at_localhost";
		$connectionsIds["contractor_master"] = "dbct_at_localhost";
		$connectionsIds["tipo_docidentidad"] = "dbct_at_localhost";
		$connectionsIds["tipo_banco"] = "dbct_at_localhost";
		$connectionsIds["tipo_cta_banco"] = "dbct_at_localhost";
		$connectionsIds["global_status"] = "dbusers_at_localhost";
		$connectionsIds["divipola"] = "dbusers_at_localhost";
		$connectionsIds["contractor_master_vinc"] = "dbct_at_localhost";
		$connectionsIds["paa_master"] = "mincit_global_at_localhost";
		$connectionsIds["vigencia"] = "dbct_at_localhost";
		$connectionsIds["contrato_tipo"] = "dbct_at_localhost";
		$connectionsIds["q_rubros"] = "sep2_at_localhost";
		$connectionsIds["q_usos"] = "sep2_at_localhost";
		$connectionsIds["rep_prg001_catalogopresupuestal"] = "sep2_at_localhost";
		$connectionsIds["contrato_tipo_unidad"] = "dbct_at_localhost";
		$connectionsIds["interventor_periodos"] = "dbct_at_localhost";
		$connectionsIds["tparam_tipo_ct_000"] = "dbct_at_localhost";
		$connectionsIds["tparam_tipo_ct_001"] = "dbct_at_localhost";
		$connectionsIds["tparam_tipo_ct_002"] = "dbct_at_localhost";
		$connectionsIds["tipo_contrato"] = "dbct_at_localhost";
		$connectionsIds["contrato_forma_pago"] = "dbct_at_localhost";
		$connectionsIds["tipo_si_no"] = "dbct_at_localhost";
		$connectionsIds["contrato_estados"] = "dbct_at_localhost";
		$connectionsIds["contrato_pre"] = "dbct_at_localhost";
		$connectionsIds["contrato_attached"] = "dbct_at_localhost";
		$connectionsIds["contrato_attached_type"] = "dbct_at_localhost";
		$connectionsIds["polizas_master"] = "dbct_at_localhost";
		$connectionsIds["polizas_tipo"] = "dbct_at_localhost";
		$connectionsIds["polizas_aseguradoras"] = "dbct_at_localhost";
		$connectionsIds["info_secop"] = "dbct_at_localhost";
		$connectionsIds["interventor_interno"] = "dbct_at_localhost";
		$connectionsIds["tparam_habilita"] = "dbct_at_localhost";
		$connectionsIds["contrato_cdp"] = "dbct_at_localhost";
		$connectionsIds["dependencia"] = "edl_at_localhost";
		$connectionsIds["contrato_rp"] = "dbct_at_localhost";
		$connectionsIds["dependencias_001"] = "edl_at_localhost";
		$connectionsIds["tparam_tipo_ct_regimen_tribut"] = "dbct_at_localhost";
		$connectionsIds["global_unspsc"] = "mincit_global_at_localhost";
		$connectionsIds["cargo"] = "edl_at_localhost";
		$connectionsIds["tparam_sn"] = "edl_at_localhost";
		$connectionsIds["informe_intersup_plan_pagos"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_admin"] = "dbct_at_localhost";
		$connectionsIds["q_001_dashboard"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_estado"] = "dbct_at_localhost";
		$connectionsIds["informe_tipo"] = "dbct_at_localhost";
		$connectionsIds["contrato_chart_tiporubro"] = "dbct_at_localhost";
		$connectionsIds["contrato_chart_estado"] = "dbct_at_localhost";
		$connectionsIds["contrato_chart_tipocont"] = "dbct_at_localhost";
		$connectionsIds["contrato_chart_dependencia"] = "dbct_at_localhost";
		$connectionsIds["contrato_chart_supjer"] = "dbct_at_localhost";
		$connectionsIds["secop"] = "sep2_at_localhost";
		$connectionsIds["tparam_tipo_ct_rubro"] = "dbct_at_localhost";
		$connectionsIds["q_001_dashboard_info"] = "dbct_at_localhost";
		$connectionsIds["q_bandejaentrada_supervisores"] = "dbct_at_localhost";
		$connectionsIds["q_000_control_informes"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_plan_pagos_st"] = "dbct_at_localhost";
		$connectionsIds["contrato_oe"] = "dbct_at_localhost";
		$connectionsIds["q_oe_ordinal"] = "dbct_at_localhost";
		$connectionsIds["q_bandejaentrada_supervisores1"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup"] = "dbct_at_localhost";
		$connectionsIds["q_bandejaentrada_supervisores2"] = "dbct_at_localhost";
		$connectionsIds["q_divipola"] = "dbusers_at_localhost";
		$connectionsIds["informe_intersup_oe"] = "dbct_at_localhost";
		$connectionsIds["tparam_sn_oe"] = "dbct_at_localhost";
		$connectionsIds["contrato_modifica"] = "dbct_at_localhost";
		$connectionsIds["contrato_modifica_type"] = "dbct_at_localhost";
		$connectionsIds["contrato_modifica_prorroga"] = "dbct_at_localhost";
		$connectionsIds["contrato_modifica_cesion"] = "dbct_at_localhost";
		$connectionsIds["contrato_modifica_track"] = "dbct_at_localhost";
		$connectionsIds["q_info_registros"] = "sep2_at_localhost";
		$connectionsIds["q_info_obligacion"] = "sep2_at_localhost";
		$connectionsIds["q_info_ordenpago"] = "sep2_at_localhost";
		$connectionsIds["q_bandejaentrada_supervisores3"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup3"] = "dbct_at_localhost";
		$connectionsIds["contrato_dependencia"] = "dbct_at_localhost";
		$connectionsIds["global_users_sup"] = "dbusers_at_localhost";
		$this->_tablesConnectionIds = $connectionsIds;
	}
	
	/**
	 * Check if It's possible to add to one table's sql query 
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];
		
		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;
			
		return true;	
	}
	
	/**
	 * Close db connections
	 * @destructor
	 */
	function __desctruct() 
	{
		foreach( $this->cache as $connection )
		{
			$connection->close();
		}
	}
}
?>