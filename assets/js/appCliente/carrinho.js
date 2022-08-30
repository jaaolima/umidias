
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

    $("#aplicar_cupom").on("click", function(e){
        ds_codigo = $("#ds_codigo").val(); 
        $.ajax({
            url: 'appCliente/buscar_cupom.php'
            , data: {ds_codigo: ds_codigo}
            , type: 'post'
            , success: function(html) {
                if(!isNaN(html)){
                    $("#porcentagem_cupom").val(html);
                    valor_alugado = $("#valor_alugado").val();
                    valor_cupom = html;
                    valor_retirado = parseInt(valor_alugado) / valor_cupom;
                    valor_final = parseInt(valor_alugado) - valor_retirado;

                    $("#local_valor").html("<h3 style='color:green;'>R$ "+valor_final+",00</h3>");
                    $("#texto_cupom").html("<p style='color:green;'>Cupom adicionado com sucesso!</p>");
                    $("#ds_codigo").val("");
                    
                }else{
                    $("#texto_cupom").html("<p style='color:red;'>"+html+"</p>");
                    $("#ds_codigo").val("");
                }
                
               
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