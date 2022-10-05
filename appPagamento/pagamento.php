<?php


    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);

    session_start();
    require_once("../Classes/Cliente.php");

    $id_usuario = $_SESSION["id_usuario"];

    $valor_cupom = $_SESSION["valor_cupom"];


	$cliente = new Cliente();

	$retorno = $cliente->BuscarCarrinho($id_usuario);
    require_once '../vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("APP_USR-5721848615320701-071216-416b0bfa5065f0c6e58905f287f862d7-1158768746");
    // MercadoPago\SDK::setAccessToken("APP_USR-7295345192603478-021818-e4b4e3e21521fe4fae9448f266a12d77-220722926");

    $preference = new MercadoPago\Preference();
   
    $array = array();
    $quantidade = 1;
    while($dados = $retorno->fetch()){
        $$quantidade = new MercadoPago\Item(); 
        $$quantidade->title = $dados["ds_bairro"]; //titulo
        $$quantidade->quantity = 1; //quantidade
        $Rvirgula = str_replace(".", "", $dados["nu_valor_alugado"]); 
        $Rzero = str_replace(",00", "", $Rvirgula); 
        $Rrs = str_replace("R$ ", "", $Rzero);
        $valor_retirado = $Rrs / $valor_cupom; 
        $valor_final = $Rrs - $valor_retirado;
        $$quantidade->unit_price = (double)$valor_final; //preço
        array_push($array, $$quantidade);
        $quantidade++;
    }

    $preference->items = $array; 
    

    $preference->back_urls = array(
        "success" => 'https://app.unimidias.com.br/appPagamento/notificacao.php',
        "faiture" => 'https://app.unimidias.com.br/',
        "pending" => 'https://app.unimidias.com.br/appPagamento/pendente.php' 
    ); //links para cada situação

    $preference->auto_return = "approved";
    $preference->notification_url = 'https://app.unimidias.com.br/appPagamento/notificacao.php'; //link para receber que o pagamento foi aprovado
    $preference->external_reference = 0; //id da compra para mandar pro mercado pago
    $preference->save();

    $link = $preference->init_point;

    echo $link;

    // $payment = new MercadoPago\Payment();
    // $payment->transaction_amount = (float)$_POST['transactionAmount'];
    // $payment->token = $_POST['token'];
    // $payment->description = $_POST['description'];
    // $payment->installments = (int)$_POST['installments'];
    // $payment->payment_method_id = $_POST['paymentMethodId'];
    // $payment->issuer_id = (int)$_POST['issuer']; 

    // $payer = new MercadoPago\Payer();
    // $payer->email = $_POST['cardholderEmail'];
    // $payer->identification = array(
    //     "type" => $_POST['identificationType'],
    //     "number" => $_POST['identificationNumber']
    // );
    // $payer->first_name = $_POST['cardholderName'];
    // $payment->payer = $payer;

    // $payment->save();

    // $response = array(
    //     'status' => $payment->status,
    //     'status_detail' => $payment->status_detail,
    //     'id' => $payment->id
    // );
    // echo json_encode($response);

?>