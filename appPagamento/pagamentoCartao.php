<?php
    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
    require_once '../vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("TEST-c0243d75-0f12-467e-a415-722af22246b9");

    $preference = new MercadoPago\Preference();

    $item = new MercadoPago\Item();
    $item->title = 'Titulo do item'; //titulo
    $item->quantity = 1; //quantidade
    $item->unit_price = (double)75.00; //preço
    $preference->items = array($item);

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