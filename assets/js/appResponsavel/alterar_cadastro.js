$(document).ready(function() {
	    

    $("#cancelar").on("click", function(){
		$('#form_usuario').trigger("reset");
        redirectTo("appResponsavel/listar_responsavel.php");
    }); 

	$("#salvar").on("click", function(e){ 
		if(validar())
		{ 
			$.ajax({
		        url: 'appResponsavel/gravar_alterar_responsavel.php'
				, data: $("#form_usuario").serialize()
		        , type: 'post'
		        , success: function(html) {
		        	swal.fire({
		                position: 'top-right',
		                type: 'success',
		                title: html,
		                showConfirmButton: true
		            });
		            
					redirectTo("appResponsavel/listar_responsavel.php");
		        }
				, error: function (data) {
					swal.fire("Erro", data.responseText, "error");
				}
		    });		
		}	
	});
});

function validar()
{
	if($("#ds_descricao").val() == "")
	{
		$("#ds_descricao").focus();
		swal.fire("Erro", "Preencha a descrição", "error");
		$("#ds_descricao").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_descricao").removeClass("is-invalid");	
		$("#ds_descricao").addClass("is-valid");
	}

	
	
	

	return true;
}