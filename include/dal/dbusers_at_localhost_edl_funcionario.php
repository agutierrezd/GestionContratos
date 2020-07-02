<?php
$dalTablefuncionario = array();
$dalTablefuncionario["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablefuncionario["idEvaluador"] = array("type"=>3,"varname"=>"idEvaluador", "name" => "idEvaluador");
$dalTablefuncionario["IdEvaluador_c"] = array("type"=>3,"varname"=>"IdEvaluador_c", "name" => "IdEvaluador_c");
$dalTablefuncionario["cedula"] = array("type"=>3,"varname"=>"cedula", "name" => "cedula");
$dalTablefuncionario["lugarExpedicion"] = array("type"=>200,"varname"=>"lugarExpedicion", "name" => "lugarExpedicion");
$dalTablefuncionario["refer"] = array("type"=>200,"varname"=>"refer", "name" => "refer");
$dalTablefuncionario["fechaIngreso"] = array("type"=>7,"varname"=>"fechaIngreso", "name" => "fechaIngreso");
$dalTablefuncionario["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre");
$dalTablefuncionario["apellidos"] = array("type"=>200,"varname"=>"apellidos", "name" => "apellidos");
$dalTablefuncionario["ubicacionFisica"] = array("type"=>200,"varname"=>"ubicacionFisica", "name" => "ubicacionFisica");
$dalTablefuncionario["idCargo"] = array("type"=>3,"varname"=>"idCargo", "name" => "idCargo");
$dalTablefuncionario["idDependencia"] = array("type"=>3,"varname"=>"idDependencia", "name" => "idDependencia");
$dalTablefuncionario["idContrato"] = array("type"=>200,"varname"=>"idContrato", "name" => "idContrato");
$dalTablefuncionario["idNombramiento"] = array("type"=>200,"varname"=>"idNombramiento", "name" => "idNombramiento");
$dalTablefuncionario["sueldo"] = array("type"=>5,"varname"=>"sueldo", "name" => "sueldo");
$dalTablefuncionario["estado"] = array("type"=>20,"varname"=>"estado", "name" => "estado");
$dalTablefuncionario["estado_funcionario"] = array("type"=>16,"varname"=>"estado_funcionario", "name" => "estado_funcionario");
$dalTablefuncionario["CargoProp"] = array("type"=>200,"varname"=>"CargoProp", "name" => "CargoProp");
$dalTablefuncionario["GradoProp"] = array("type"=>200,"varname"=>"GradoProp", "name" => "GradoProp");
$dalTablefuncionario["signpad"] = array("type"=>200,"varname"=>"signpad", "name" => "signpad");
$dalTablefuncionario["photo"] = array("type"=>200,"varname"=>"photo", "name" => "photo");
	$dalTablefuncionario["id"]["key"]=true;

$dal_info["dbusers_at_localhost_edl_funcionario"] = &$dalTablefuncionario;
?>