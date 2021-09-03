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
$mail->AddAddress('victorespucoc@gmail.com', 'Teste'); 



// Assunto da mensagem 
$mail->Subject = "Verificação do Login"; 

// Corpo do email 
$mail->Body = '
<link href="https://app.unimidias.com.br/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
<html>
    <div id="validar>
        <h2>Olá "'.$nome.'", </h2><br>
        <p>Valide seu Login</p><br>
        <div>
            <button id="validar" class="btn btn-primary" onClick="Validar();">Validar</button>
        </div>
        <input type="hidden" id="ds_nome" value="'.$nome.'" />
        <input type="hidden" id="ds_email" value="'.$email.'" />
    </div>
    <div id="efetuado" style="display:none;">
    </div>
</html>
<script>
ds_nome = document.getElementsByName("ds_nome").value();
ds_email = document.getElementsByName("ds_email").value();

ds_usuario = ds_email;
id_perfil = 1;


function Validar(){
    redirectTo(`https://app.unimidias.com.br/appUsuario/gravar_usuario.php?ds_nome="`+ds_nome+`"&ds_email="`+ds_email+`"&ds_usuario="`+ds_usuario+`"&id_perfil="`+id_perfil);
    var element = document.getElementById("efetuado");
    element.style.display("flex");
    var validar = document.getElementById("validar");
    validar.style.display("none");
}
</script>
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