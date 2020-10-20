<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["AfterSuccessfulLogin"]=true;


//	onscreen events


		$this->events["IsRecordEditable"]["informe_intersup"] = true;
		$this->events["IsRecordEditable"]["informe_intersup_oe"] = true;

		}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		$_SESSION["UID"]=$data["idusrglobal"];
$_SESSION["UDOC"]=$data["usr_personalid"];
$_SESSION["UMAIL"]=$data["usr_email"];

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events




	function IsRecordEditable($values, $isEditable, $table = "")
	{
		global $strTableName;
		if($table == "")
			$table = $strTableName;
		if($table == "informe_intersup")
		{
			if ($values['inf_estado'] == 2 and $values['qty_inf'] == $values['qty_inf_verifica'])
return true;
else
return false;

// Place event code here.
// Use "Add Action" button to add code snippets.

return $isEditable;;
		}
		if($table == "informe_intersup_oe")
		{
			if ($values['sup_aprueba'] == 1)
return true;
else
return false;

// Place event code here.
// Use "Add Action" button to add code snippets.

return $isEditable;;
		}
		return $isEditable;
	}
}
?>
