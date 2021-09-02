<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


$email = $_REQUEST['ds_email'];
$nome = $_REQUEST['ds_nome'];

// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
include "/var/www/app.unimidias.com.br/assets\media\PHPMailer-master\PHPMailerAutoload.php"; 

// Inicia a classe PHPMailer 
$mail = new PHPMailer(); 

// Método de envio 
$mail->IsSMTP(); 

// Enviar por SMTP 
$mail->Host = "victorespucoc@gmail.com"; 

// Você pode alterar este parametro para o endereço de SMTP do seu provedor 
$mail->Port = 25; 


// Usar autenticação SMTP (obrigatório) 
$mail->SMTPAuth = true; 

// Usuário do servidor SMTP (endereço de email) 
// obs: Use a mesma senha da sua conta de email 
$mail->Username = 'victorespucoc@gmail.com'; 
$mail->Password = '85664147'; 

// Configurações de compatibilidade para autenticação em TLS 
$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 

// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
$mail->SMTPDebug = 2; 

// Define o remetente 
// Seu e-mail 
$mail->From = "victorespucoc@gmail.com"; 

// Seu nome 
$mail->FromName = "Unimídias"; 

// Define o(s) destinatário(s) 
$mail->AddAddress($email, $nome); 

// Opcional: mais de um destinatário
// $mail->AddAddress('fernando@email.com'); 

// Opcionais: CC e BCC
// $mail->AddCC('joana@provedor.com', 'Joana'); 
// $mail->AddBCC('roberto@gmail.com', 'Roberto'); 

// Definir se o e-mail é em formato HTML ou texto plano 
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
$mail->IsHTML(true); 

// Charset (opcional) 
$mail->CharSet = 'UTF-8'; 

// Assunto da mensagem 
$mail->Subject = "Verificação do Login"; 

// Corpo do email 
$mail->Body = '

<html>
    <div>
        <button id="validar">Validar</button>
    </div>
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