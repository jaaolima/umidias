<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	require_once("../Classes/Grafica.php");
	$grafica = new Grafica();
	$grafica->ExcluirGrafica($_REQUEST); 
?> 