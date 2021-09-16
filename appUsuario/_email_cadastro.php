<?php


?>

<style>
.btn a{
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
Olá, <?php echo $_REQUEST['ds_nome']; ?> <br>

<p>
    Valide seu Login
</p>
<br> 
<?php 
$senha = hash("SHA512",$_REQUEST['nu_senha']);
?>
<a style="
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
    transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out, -webkit-box-shadow 0.3s ease-in-out;
color: #ffffff;
  background-color: #B721FF;
  border-color: #B721FF;
  -webkit-box-shadow: none;
  box-shadow: none;" 
   href="https://app.unimidias.com.br/appUsuario/gravar_usuario_email.php?ds_nome=<?php echo $_REQUEST['ds_nome']; ?>&ds_email=<?php echo $_REQUEST['ds_email']; ?>&ds_usuario=<?php echo $_REQUEST['ds_email']; ?>&id_perfil=1&s=<?php echo $senha; ?>&nu_cpf=<?php echo $_REQUEST['nu_cpf']; ?>" id="validar" class="btn btn-primary">Validar</a>
