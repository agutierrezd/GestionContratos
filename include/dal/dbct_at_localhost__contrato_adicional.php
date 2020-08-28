<?php
$dalTablecontrato_adicional = array();
$dalTablecontrato_adicional["adic_id"] = array("type"=>3,"varname"=>"adic_id", "name" => "adic_id");
$dalTablecontrato_adicional["id_cont_fk"] = array("type"=>3,"varname"=>"id_cont_fk", "name" => "id_cont_fk");
$dalTablecontrato_adicional["adi_fecha_suscri"] = array("type"=>7,"varname"=>"adi_fecha_suscri", "name" => "adi_fecha_suscri");
$dalTablecontrato_adicional["adi_fecha_ini"] = array("type"=>7,"varname"=>"adi_fecha_ini", "name" => "adi_fecha_ini");
$dalTablecontrato_adicional["adi_observ"] = array("type"=>200,"varname"=>"adi_observ", "name" => "adi_observ");
$dalTablecontrato_adicional["adi_valor"] = array("type"=>14,"varname"=>"adi_valor", "name" => "adi_valor");
	$dalTablecontrato_adicional["adic_id"]["key"]=true;

$dal_info["dbct_at_localhost__contrato_adicional"] = &$dalTablecontrato_adicional;
?>