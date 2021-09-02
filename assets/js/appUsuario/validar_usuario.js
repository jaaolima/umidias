ds_nome = document.getElementsByName("ds_nome").value();
ds_email = document.getElementsByName("ds_email").value();

ds_usuario = ds_email;
id_perfil = 1;


function Validar(){
    redirectTo('https://app.unimidias.com.br/appUsuario/gravar_usuario.php?ds_nome="'+ds_nome+'"&ds_email="'+ds_email+'"&ds_usuario="'+ds_usuario+'"&id_perfil="'+id_perfil)
}