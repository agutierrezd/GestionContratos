<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */
 
 class eventclass_informe_intersup3  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;


		$this->events["BeforeShowEdit"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["BeforeEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		$sql = DB::prepareSQL("UPDATE
dbct.informe_intersup_plan_pagos
INNER JOIN dbct.informe_intersup ON dbct.informe_intersup_plan_pagos.id_cont_fk = dbct.informe_intersup.id_cont_fk AND dbct.informe_intersup_plan_pagos.inf_consecutivo = dbct.informe_intersup.inf_consecutivo
SET
dbct.informe_intersup_plan_pagos.inf_st = 1
WHERE
dbct.informe_intersup.inf_estado = 1;");
DB::Exec( $sql );

$sql = DB::prepareSQL("UPDATE
dbct.informe_intersup_plan_pagos
LEFT JOIN dbct.informe_intersup ON dbct.informe_intersup_plan_pagos.id_cont_fk = dbct.informe_intersup.id_cont_fk AND dbct.informe_intersup_plan_pagos.inf_consecutivo = dbct.informe_intersup.inf_consecutivo
SET
dbct.informe_intersup_plan_pagos.inf_st = 0
WHERE
dbct.informe_intersup.inf_estado IS NULL;");
DB::Exec( $sql );

$sql = DB::prepareSQL("UPDATE
dbct.informe_intersup_plan_pagos
INNER JOIN dbct.informe_intersup ON dbct.informe_intersup_plan_pagos.id_cont_fk = dbct.informe_intersup.id_cont_fk AND dbct.informe_intersup_plan_pagos.inf_consecutivo = dbct.informe_intersup.inf_consecutivo
SET
dbct.informe_intersup_plan_pagos.inf_st = 2
WHERE
dbct.informe_intersup.inf_estado = 2;");
DB::Exec( $sql );

$sql = DB::prepareSQL("INSERT IGNORE INTO dbct.informe_intersup_oe (
dbct.informe_intersup_oe.inf_id_fk,
dbct.informe_intersup_oe.oe_id_fk,
dbct.informe_intersup_oe.id_cont_fk,
dbct.informe_intersup_oe.cont_nit_contra_ta_fk,
dbct.informe_intersup_oe.oe_ordinal,
dbct.informe_intersup_oe.oe)
SELECT
dbct.q_oe_informe.inf_id,
dbct.q_oe_informe.oe_id,
dbct.q_oe_informe.id_cont_fk,
dbct.q_oe_informe.cont_nit_contra_ta_fk,
dbct.q_oe_informe.oe_ordinal,
dbct.q_oe_informe.oe
FROM
dbct.q_oe_informe");
DB::Exec( $sql );

$sql = DB::prepareSQL("UPDATE
dbct.informe_intersup
INNER JOIN dbct.q_qty_info_inf ON dbct.informe_intersup.inf_id = dbct.q_qty_info_inf.inf_id_fk
SET
dbct.informe_intersup.qty_inf = dbct.q_qty_info_inf.qty;");
DB::Exec( $sql );
//**********  Send email with new data  ************

$email=$values['inf_mail_a'].",".$values['inf_mail_b'];
$from="notificacionsiseg@mindeporte.gov.co";
$fromName="SISEG | INFORMES SUPERVISIÓN ";
$msg="Se ha habilitado un nuevo informe para su gestión con el código de verificación: ".$values['inf_hash']." revisa tu bandeja de entrada en el módulo de contratistas"."\r\n";
$subject="Nuevo informe de supervisión | Persona Natural :: Código de verificación: ".$values['inf_hash'];

$msg.= "Número de nforme: ".$values['inf_consecutivo']."\r\n";
$msg.= "Periodo: ".$values['inf_fecharep_i']." al ".$values['inf_fecharep_f']."\r\n";
//$msg.= "Asunto: ".$values['hr_asunto']."\r\n";
$msg.= "Para atender este requerimiento ingrese a: https://sisecg.mindeporte.gov.co/athena/GestionContratistas"."\r\n";
//$msg.= "Age: ".$values["age"]."\r\n";

$ret=runner_mail(array('to' => $email, 'cc' => 'dito73@gmail.com', 'subject' => $subject, 'body' => $msg, 'fromName'=> $fromName, 'from'=>$from));
if(!$ret["mailed"])
	echo $ret["message"];


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		$pageObject->hideField("sign_hash");
$pageObject->hideField("sign_file");

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		$email=$values['sign_mailnot'];
$from="notificacionsiseg@mindeporte.gov.co";
$fromName="SISEG | FIRMA ";
$msg="Se ha FIRMADO el siguiente código para validación de informe de supervisión:  cópielo y peguelo en el campo correspondiente de validación"."\r\n";
$subject="Nuevo código para validación de informe | Persona Natural :: Código de verificación: ";

//$msg.= "Número de nforme: ".$values['inf_consecutivo']."\r\n";
//$msg.= "Periodo: ".$values['inf_fecharep_i']." al ".$values['inf_fecharep_f']."\r\n";
//$msg.= "Asunto: ".$values['hr_asunto']."\r\n";
$msg.= "Para atender este requerimiento ingrese a: https://sisecg.mindeporte.gov.co/athena/GestionContratos/"."\r\n";
//$msg.= "Age: ".$values["age"]."\r\n";

$ret=runner_mail(array('to' => $email, 'cc' => 'dito73@gmail.com', 'subject' => $subject, 'body' => $msg, 'fromName'=> $fromName, 'from'=>$from));
if(!$ret["mailed"])
	echo $ret["message"];

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		$return = true;
if($values['sign_verificacert'] != $values['sign_hash']){
$message = "La clave dinámica suministrada no es válida para el presente documento, por favor intente nuevamente";
$return = false;
}

// Place event code here.
// Use "Add Action" button to add code snippets.

return $return;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
