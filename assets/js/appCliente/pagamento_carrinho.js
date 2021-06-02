
$(document).ready(function() {
	    

    $("#gerar_boleto").on("click", function(e){
        id_usuario = $("#id_usuario").val();
        $.ajax({
            url: 'appCliente/gravar_carrinho.php'
            , data: {id_usuario: id_usuario}
            , type: 'post'
            , success: function(html) {
                swal.fire({
                    position: 'top-right',
                    type: 'success',
                    title: html,
                    showConfirmButton: true
                });
                
                redirectTo("appCliente/listar_minhas_midias.php");
            }
            , error: function (data) {
                swal.fire("Erro", data.responseText, "error");
            }
        });	
        
    });
    


});