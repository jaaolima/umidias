Olá, <?php echo $_REQUEST['ds_nome']; ?> <br>

<p>
    Recebemos um pedido para redefinir sua senha na Unimídias.
</p>

<p>

    <a
    style="
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
    href="https://app.unimidias.com.br/recuperar_senha.php?e=<?php echo $_REQUEST['ds_email']; ?>">Clique aqui para redefinir sua senha</a>
</p>

<p>
    Atenção! Caso não tenha solicitado a alteração da senha, por favor, desconsidere esta mensagem e sua senha atual será mantida.
</p>

<p>
    Atenciosamente<br>Equipe Unimídias
</p>