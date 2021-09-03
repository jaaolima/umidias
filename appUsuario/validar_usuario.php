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

$mensagem = '
<link href="https://app.unimidias.com.br/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
<style>
.btn {
    display: inline-block;
    font-weight: normal;
    color: #3F4254;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.65rem 1rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 16px !important;
    -webkit-transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, -webkit-box-shadow 0.3s ease-in-out;
    transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, -webkit-box-shadow 0.3s ease-in-out;
    transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out, -webkit-box-shadow 0.3s ease-in-out; }
</style>
<html>
    <div id="validar>
        <h2>Olá "'.$nome.'", </h2><br>
        <p>Valide seu Login</p><br>
        <div>
            <a href="https://app.unimidias.com.br/appUsuario/gravar_usuario.php?ds_nome="'.$nome.'"&ds_email="'.$email.'"&ds_usuario="'.$email.'"&id_perfil="1" id="validar" class="btn btn-primary">Validar</a>
        </div>
        <input type="hidden" id="ds_nome" value="'.$nome.'" />
        <input type="hidden" id="ds_email" value="'.$email.'" />
    </div>
    <div id="efetuado" style="display:none;">
    </div>
</html>
';

// Assunto da mensagem 
$mail->Subject = "Verificação do Login"; 

// Corpo do email 
$mail->Body = nl2br($mensagem);

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