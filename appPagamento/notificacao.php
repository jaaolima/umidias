<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


$colletion_id = $_REQUEST["collection_id"];

$access_token = "APP_USR-5721848615320701-071216-416b0bfa5065f0c6e58905f287f862d7-1158768746";

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.mercadopago.com/v1/payments/".$colletion_id,
    CURLOPT_RETURNTRANSFER => true,  
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer APP_USR-5721848615320701-071216-416b0bfa5065f0c6e58905f287f862d7-1158768746"
    ),
));

$payments_info = json_decode(curl_exec($curl), true);
curl_close($curl);

session_start();
require_once("../Classes/Cliente.php");
require_once("../Classes/Grafica.php");
$id_usuario = $_SESSION["id_usuario"];
$cliente = new Cliente();
$grafica = new Grafica();
$array_id = $cliente->AlugarCarrinho($id_usuario, $_REQUEST["status"]);
$cliente->GravarPagamento($_REQUEST, $id_usuario);


foreach($array_id as $id){
    $cliente->EmailPagamento($id_usuario); //email para o cliente
}


foreach($array_id as $id){
    $grafica->EmailGrafica($id); //email para a gráfica
}
header("location: ../index.php");

?>