<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once("../Classes/Cliente.php");
require_once("../Classes/Grafica.php");
$id_usuario = $_REQUEST["id_usuario"];
$id_pendente = $_REQUEST["id_pendente"];
$cliente = new Cliente();
$grafica = new Grafica();
$array_id = $cliente->AlugarPendente($id_usuario, $id_pendente);
// $cliente->GravarPagamento($_REQUEST, $id_usuario);


foreach($array_id as $id){
    $cliente->EmailPagamento($id_usuario); //email para o cliente
}


foreach($array_id as $id){
    $grafica->EmailGrafica($id); //email para a gráfica
}
header("location: ../index.php");

?>