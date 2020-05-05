<?php
$dalTableinterventor_periodos = array();
$dalTableinterventor_periodos["id_periodo"] = array("type"=>3,"varname"=>"id_periodo", "name" => "id_periodo");
$dalTableinterventor_periodos["periodo_name"] = array("type"=>200,"varname"=>"periodo_name", "name" => "periodo_name");
$dalTableinterventor_periodos["periodo_value"] = array("type"=>3,"varname"=>"periodo_value", "name" => "periodo_value");
$dalTableinterventor_periodos["periodo_dias"] = array("type"=>3,"varname"=>"periodo_dias", "name" => "periodo_dias");
$dalTableinterventor_periodos["periodo_meses"] = array("type"=>3,"varname"=>"periodo_meses", "name" => "periodo_meses");
	$dalTableinterventor_periodos["id_periodo"]["key"]=true;

$dal_info["dbct_at_localhost__interventor_periodos"] = &$dalTableinterventor_periodos;
?>