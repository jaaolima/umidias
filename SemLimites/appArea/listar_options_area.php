<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	require_once("../Classes/Exercicio.php");
	$exercicio = new Exercicio();
    $id_tipo = $_REQUEST['id_tipo'];
    $options = $exercicio->OptionsArea($id_tipo, null);
    echo $options;
?>