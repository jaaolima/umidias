<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

$email = $_REQUEST['ds_email'];
$nome = $_REQUEST['ds_nome'];

// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
require_once('../assets/media/PHPMailer-master/PHPMailerAutoload.php');

// Inicia a classe PHPMailer 
$mail = new PHPMailer(); 

// Método de envio 
$mail->IsSMTP(); 

// // Enviar por SMTP 
$mail->Host = "smtp-relay.sendinblue.com"; 
$mail->SMTPAuth = true;
$mail->SMTPDebug = 2;
$mail->SMTPAutoTLS = false ; 
$mail->Username = 'victorespucoc@gmail.com'; 
$mail->Password = '85664147';
$mail->Port = 587;
$mail->IsHTML(true);
$mail->CharSet = 'UTF-8'; 
$mail->setFrom("no-reply@ibranutro.com.br", "Ibranutro");

// Define o(s) destinatário(s) 
$mail->AddAddress('victorespucoc@gmail.com', '85664147'); 



// Assunto da mensagem 
$mail->Subject = "Verificação do Login"; 

// Corpo do email 
$mail->Body = '
<link href="https://app.unimidias.com.br/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
<html>
    <div>
        <button id="validar" class="btn btn-primary" onClick="validar();">Validar</button>
    </div>
    <input type="hidden" id="ds_nome" value="'.$nome.'" />
    <input type="hidden" id="ds_email" value="'.$email.'" />
</html>
<script src="https://app.unimidias.com.br/assets/js/appUsuario/validar_usuario.js"></script>
'; 

// Opcional: Anexos 
// $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 

// Envia o e-mail 
$enviado = $mail->Send(); 

// Exibe uma mensagem de resultado 
if ($enviado) 
{ 
    echo "Seu email foi enviado com sucesso!"; 
} else { 
    echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
    return false;
} 


?>