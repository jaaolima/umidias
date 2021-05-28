
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
    


});