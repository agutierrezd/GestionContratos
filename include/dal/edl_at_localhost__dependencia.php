<?php
$dalTabledependencia = array();
$dalTabledependencia["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTabledependencia["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre");
$dalTabledependencia["estado"] = array("type"=>20,"varname"=>"estado", "name" => "estado");
$dalTabledependencia["id_depto_superior"] = array("type"=>3,"varname"=>"id_depto_superior", "name" => "id_depto_superior");
$dalTabledependencia["proceso"] = array("type"=>200,"varname"=>"proceso", "name" => "proceso");
	$dalTabledependencia["id"]["key"]=true;

$dal_info["edl_at_localhost__dependencia"] = &$dalTabledependencia;
?>