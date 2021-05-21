$(document).ready(function() {
	    

	/*$("#pagamento").on("click", function(e){ 
		if(validar())
		{ 
			$.ajax({
		        url: 'appCliente/gravar_alterar_cliente.php'
				, data: $("#form_detalhe").serialize()
		        , type: 'post'
		    });		
		}	
	});
    $("#voltar").on("click", function(){
		$('#form_detalhe').trigger("reset");
        var id_ponto = $("#id_ponto").val();
        redirectTo(`appCliente/ver_midia?id_ponto=`+id_ponto+`.php`);
    }); */
});

function validar()
{
	if($("#ds_arte").val() == "")
	{
		$("#ds_arte").focus();
		swal.fire("Erro", "Adicione uma arte", "error");
		$("#ds_arte").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_arte").removeClass("is-invalid");	
		$("#ds_arte").addClass("is-valid");
	}

	
	
	

	return true;
}