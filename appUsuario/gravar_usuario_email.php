<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	require_once("../Classes/Usuario.php");
	$usuario = new Usuario();
	$gravar = $usuario->gravarUsuarioEmail($_REQUEST);

	var_dump($gravar);
    if($gravar){
        header("../Usuario.php");
    }
    
?> 