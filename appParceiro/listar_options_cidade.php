<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	require_once("../Classes/Parceiro.php");
	$parceiro = new Parceiro();
    $id_estado = $_REQUEST['id_estado'];
    $options = $parceiro->listarOptionsCidade($id_estado, null);
    echo $options;
?>