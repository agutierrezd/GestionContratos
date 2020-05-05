<?php
$dalTablecargo = array();
$dalTablecargo["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablecargo["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre");
$dalTablecargo["cargo"] = array("type"=>200,"varname"=>"cargo", "name" => "cargo");
$dalTablecargo["grado"] = array("type"=>200,"varname"=>"grado", "name" => "grado");
$dalTablecargo["estado"] = array("type"=>20,"varname"=>"estado", "name" => "estado");
$dalTablecargo["propositoPrincipal"] = array("type"=>200,"varname"=>"propositoPrincipal", "name" => "propositoPrincipal");
$dalTablecargo["codcar"] = array("type"=>200,"varname"=>"codcar", "name" => "codcar");
$dalTablecargo["idComportamentalFK"] = array("type"=>3,"varname"=>"idComportamentalFK", "name" => "idComportamentalFK");
$dalTablecargo["ExperienciaMeses"] = array("type"=>14,"varname"=>"ExperienciaMeses", "name" => "ExperienciaMeses");
$dalTablecargo["Directivo"] = array("type"=>16,"varname"=>"Directivo", "name" => "Directivo");
	$dalTablecargo["id"]["key"]=true;

$dal_info["edl_at_localhost__cargo"] = &$dalTablecargo;
?>