<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */
 
 class eventclass_informe_intersup_oe  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["IsRecordEditable"]=true;

		$this->events["AfterEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Is Record Editable
function IsRecordEditable($values, $isEditable)
{

		if ($values['sup_aprueba'] == 1)
return true;
else
return false;

// Place event code here.
// Use "Add Action" button to add code snippets.

return $isEditable;
;		
} // function IsRecordEditable

		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		$sql = DB::prepareSQL("UPDATE
dbct.informe_intersup
INNER JOIN dbct.q_qty_ctrl_inf_sup ON dbct.informe_intersup.inf_id = dbct.q_qty_ctrl_inf_sup.inf_id_fk
SET
dbct.informe_intersup.qty_inf_verifica = dbct.q_qty_ctrl_inf_sup.qty;");
DB::Exec( $sql );



// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
