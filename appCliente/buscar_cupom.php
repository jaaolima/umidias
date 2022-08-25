<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	require_once("../Classes/Cliente.php");
	$cliente = new Cliente();
	$cupom = $cliente->buscarCupom($_POST["ds_codigo"]);
    var_dump($cupom);
    // echo $cupom["nu_porcentagem"];
?> 