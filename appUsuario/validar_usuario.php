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
$mail->Username = 'renato.lima@outlook.com'; 
$mail->Password = 'RZw0z8AXIfvHc73M';
$mail->Port = 587;
$mail->IsHTML(true);
$mail->CharSet = 'UTF-8'; 
$mail->setFrom("no-reply@ibranutro.com.br", "Unimídias");

// Define o(s) destinatário(s) 
$mail->AddAddress($email, $nome); 

// Assunto da mensagem 
$mail->Subject = "Verificação do Login"; 

// Corpo do email 
$mail->Body = self::renderView(__DIR__ . '/../appUsuario/_email_cadastro.php', $_REQUEST);

function renderView($path, array $data = []){
    ob_start();
    include $path;
    $response = ob_get_contents();
    ob_end_clean();

    return $response;
}
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