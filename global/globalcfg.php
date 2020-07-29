<?php 
date_default_timezone_set("America/Bogota");
$fecha = date("Y-m-d"); 
$ano = date("Y");
$mes = date("m");
$dia = date("d");
$hora = date("H:i:s"); 
$fechac = date("Y-m-d H:i:s"); 

$numero = mt_rand(10000000,99999999); 
$numeroa = mt_rand(1000,9999); 
$numerob = mt_rand(1000,9999); 
$letra = chr(rand(ord("A"), ord("Z"))); //En este caso de 'A' hasta 'Z'
$letrab = chr(rand(ord("Q"), ord("Z"))); //En este caso de 'A' hasta 'Z'
$letrac = chr(rand(ord("A"), ord("Z"))); //En este caso de 'A' hasta 'Z'
?>
