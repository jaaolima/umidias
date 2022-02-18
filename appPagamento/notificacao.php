<?php 

$colletion_id = $_REQUEST["collection_id"];

$access_token = "";

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.mercadopago.com/v1/payments/".$colletion_id,
    CURLOPT_RETURNTRANSFER => true, 
    CURLOPT_ENCODING => "",
    CURLOPT_MACREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURL_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer ". $access_tokker
    ),
));

$payments_info = json_decode(curl_exec($curl), true);
curl_close($curl);

echo '<pre>';
var_dump($payments_info);
?>