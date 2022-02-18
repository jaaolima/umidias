<?php


    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);

    session_start();
    require_once("../Classes/Cliente.php");

    $id_usuario = $_SESSION["id_usuario"];

	$cliente = new Cliente();

	$retorno = $cliente->BuscarCarrinho($id_usuario);
    require_once '../vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("TEST-7295345192603478-021818-84abf249ade799c52fe9448499b4d47f-220722926");

    $preference = new MercadoPago\Preference();
   

    while($dados = $retorno->fetch()){
        "\$item".$dados["id_carrinho"] = new MercadoPago\Item(); 
        "\$item".$dados["id_carrinho"]->title = $dados["ds_bairro"]; //titulo
        "\$item".$dados["id_carrinho"]->quantity = 1; //quantidade
        $Rvirgula = str_replace(".", "", $dados["nu_valor_alugado"]); 
        $Rzero = str_replace(",00", "", $Rvirgula); 
        $Rrs = str_replace("R$ ", "", $Rzero);
        $valor = $Rrs; 
        "\$item".$dados["id_carrinho"]->unit_price = (double)$valor; //preço
        $preference->items = array("\$item".$dados["id_carrinho"]);
    }
    

    $preference->back_urls = array(
        "success" => 'https://app.unimidias.com.br/',
        "faiture" => 'https://app.unimidias.com.br/',
        "pending" => 'https://app.unimidias.com.br/'
    ); //links para cada situação

    $preference->notification_url = 'https://app.unimidias.com.br/'; //link para receber que o pagamento foi aprovado
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