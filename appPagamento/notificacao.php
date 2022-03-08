<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


// $colletion_id = $_REQUEST["collection_id"];

// $access_token = "TEST-7295345192603478-021818-84abf249ade799c52fe9448499b4d47f-220722926";

// $curl = curl_init();

// curl_setopt_array($curl, array(
//     CURLOPT_URL => "https://api.mercadopago.com/v1/payments/".$colletion_id,
//     CURLOPT_RETURNTRANSFER => true, 
//     CURLOPT_ENCODING => "",
//     CURLOPT_MAXREDIRS => 10,
//     CURLOPT_TIMEOUT => 0,
//     CURLOPT_FOLLOWLOCATION => true,
//     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//     CURLOPT_CUSTOMREQUEST => "GET",
//     CURLOPT_HTTPHEADER => array(
//         "Authorization: Bearer TEST-7295345192603478-021818-84abf249ade799c52fe9448499b4d47f-220722926"
//     ),
// ));

// $payments_info = json_decode(curl_exec($curl), true);
// curl_close($curl);

session_start();
require_once("../Classes/Cliente.php");
$id_usuario = $_SESSION["id_usuario"];
$cliente = new Cliente();
// $cliente->AlugarCarrinho($id_usuario, $_REQUEST["status"]);
// $cliente->GravarPagamento($_REQUEST, $id_usuario);
$cliente->EmailPagamento($id_usuario);
// header("location: ../index.php");

?>