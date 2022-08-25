
$(document).ready(function() {
	    

    $("#boleto").on("click", function(e){

        $('.card-metodo').hide();
		$('#card_boleto').show();
        
    });
    $("#credito").on("click", function(e){

        $('.card-metodo').hide();
		$('#card_credito').show();
        
    });
    $("#boleto_parcelado").on("click", function(e){ 

        $('.card-metodo').hide();
		$('#card_boleto_parcelado').show();
        
    });
    $("#pix").on("click", function(e){ 

        $('.card-metodo').hide();  
		$('#card_pix').show();
        
    });

    $("#esvaziar").on("click", function(e){
        id_usuario = $("#id_usuario").val();
        $.ajax({
            url: 'appCliente/esvaziar_carrinho.php'
            , data: {id_usuario: id_usuario}
            , type: 'post'
            , success: function(html) {
                swal.fire({
                    position: 'top-right',
                    type: 'success',
                    title: html,
                    showConfirmButton: true
                });
                
                redirectTo("appCliente/carrinho.php");
            }
            , error: function (data) {
                swal.fire("Erro", data.responseText, "error");
            }
        });	
        
    });

    $("#pagamento").on("click", function(e){
        id_usuario = $("#id_usuario").val();
        $.ajax({
            url: 'appPagamento/pagamento.php'
            , data: {id_usuario: id_usuario}
            , type: 'post'
            , success: function(html) {
                window.open(html);
                // redirectTo(html);
            }
            , error: function (data) {
                swal.fire("Erro", data.responseText, "error");
            }
        });	
        
    });
    $("#gravar").on("click", function(e){
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

    $("#ds_codigo").on("change", function(e){
        ds_codigo = $("#ds_codigo").val(); 
        $.ajax({
            url: 'appCliente/buscar_cupom.php'
            , data: {ds_codigo: ds_codigo}
            , type: 'post'
            , success: function(html) {
                console.log(html);
            }
            , error: function (data) {
                swal.fire("Erro", data.responseText, "error");
            }
        });	
        
    });

    $(".excluir").on("click", function(e){
        id_carrinho = $(this).attr("id");
        $.ajax({
            url: 'appCliente/excluir_ponto_carrinho.php'
            , data: {id_carrinho: id_carrinho}
            , type: 'post'
            , success: function(html) {
                swal.fire({
                    position: 'top-right',
                    type: 'success',
                    title: html,
                    showConfirmButton: true
                });
                
                redirectTo("appCliente/carrinho.php");
            }
            , error: function (data) {
                swal.fire("Erro", data.responseText, "error"); 
            }
        });
        
    });
    


});