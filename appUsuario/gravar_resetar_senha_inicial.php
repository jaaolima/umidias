<?php
    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);

    require_once("../Classes/Usuario.php");
    
    
    $usuario 		= new Usuario();
    $ds_email    = $_REQUEST['ds_email_resetar'];
    $usuario->resetarSenhaInicial($ds_email);
?>