
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

    $("#gerar_boleto").on("click", function(e){ 

        id_ponto = $("#id_ponto").val();
        id_midia = $("#id_midia").val();
        $.ajax({
            url: 'appPonto/alugar.php'
            , data: $("#form_alugar").serialize()
            , type: 'post'
            , success: function(html) {
                redirectTo("appCliente/ver_midia.php?id_ponto="+id_ponto+"&id_midia="+id_midia);
            }
            , error: function (data) {
                swal.fire("Erro", data.responseText, "error");
            }
        });	
        
    });
    


});