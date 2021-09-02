<?php 

$email = $_REQUEST['ds_email'];

// Corpo E-mail
$arquivo = "
    <style type='text/css'>
    body {
    margin:0px;
    font-family:Verdane;
    font-size:12px;
    color: #666666;
    }
    a{
    color: #666666;
    text-decoration: none;
    }
    a:hover {
    color: #FF0000;
    text-decoration: none;
    }
    </style>
    <html>
        <div>
            <button id='validar'>Validar</button>
        </div>
    </html>
    <script src='https://app.unimidias.com.br/assets/js/appUsuario/validar_usuario.js'></script>
    ";

// emails para quem será enviado o formulário
$emailenviar = "victorespucoc@gmail.com";
$destino = $email;
$assunto = "Contato pelo Site";

// É necessário indicar que o formato do e-mail é html
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: $nome <$email>';
//$headers .= "Bcc: $EmailPadrao\r\n";

$enviaremail = mail($destino, $assunto, $arquivo, $headers);
if($enviaremail){
    return true;
}else{
    $mgm = "ERRO AO ENVIAR E-MAIL!";
    echo $mgm;
    return false;
}
    
?>