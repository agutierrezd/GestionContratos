<?php
$dalTablepolizas_master = array();
$dalTablepolizas_master["poliza_id"] = array("type"=>3,"varname"=>"poliza_id", "name" => "poliza_id");
$dalTablepolizas_master["id_cont_fk"] = array("type"=>3,"varname"=>"id_cont_fk", "name" => "id_cont_fk");
$dalTablepolizas_master["id_att_fk"] = array("type"=>3,"varname"=>"id_att_fk", "name" => "id_att_fk");
$dalTablepolizas_master["poli_numero"] = array("type"=>200,"varname"=>"poli_numero", "name" => "poli_numero");
$dalTablepolizas_master["poli_compania"] = array("type"=>3,"varname"=>"poli_compania", "name" => "poli_compania");
$dalTablepolizas_master["poli_fechaexpedicion"] = array("type"=>7,"varname"=>"poli_fechaexpedicion", "name" => "poli_fechaexpedicion");
$dalTablepolizas_master["poli_codamparo"] = array("type"=>3,"varname"=>"poli_codamparo", "name" => "poli_codamparo");
$dalTablepolizas_master["poli_fechaaprobacion"] = array("type"=>7,"varname"=>"poli_fechaaprobacion", "name" => "poli_fechaaprobacion");
$dalTablepolizas_master["poli_porcentaje"] = array("type"=>5,"varname"=>"poli_porcentaje", "name" => "poli_porcentaje");
$dalTablepolizas_master["poli_valor"] = array("type"=>5,"varname"=>"poli_valor", "name" => "poli_valor");
$dalTablepolizas_master["poli_vigenciadesde"] = array("type"=>7,"varname"=>"poli_vigenciadesde", "name" => "poli_vigenciadesde");
$dalTablepolizas_master["poli_vigenciahasta"] = array("type"=>7,"varname"=>"poli_vigenciahasta", "name" => "poli_vigenciahasta");
$dalTablepolizas_master["sys_user"] = array("type"=>200,"varname"=>"sys_user", "name" => "sys_user");
$dalTablepolizas_master["sys_date"] = array("type"=>135,"varname"=>"sys_date", "name" => "sys_date");
$dalTablepolizas_master["sys_time"] = array("type"=>135,"varname"=>"sys_time", "name" => "sys_time");
	$dalTablepolizas_master["poliza_id"]["key"]=true;

$dal_info["dbct_at_localhost__polizas_master"] = &$dalTablepolizas_master;
?>