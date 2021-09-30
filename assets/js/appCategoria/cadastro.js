$(document).ready(function() {
	    

    $("#cancelar").on("click", function(){
		$('#form_usuario').trigger("reset");
        redirectTo("appCategoria/listar_categoria.php");
    }); 

	$("#salvar").on("click", function(e){ 
		if(validar())
		{ 
			$.ajax({
		        url: 'appCategoria/gravar_categoria.php'
				, data: $("#form_usuario").serialize()
		        , type: 'post'
		        , success: function(html) {
		        	swal.fire({
		                position: 'top-right',
		                type: 'success',
		                title: html,
		                showConfirmButton: true
		            });
		            
					redirectTo("appCategoria/listar_categoria.php");
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
	if($("#ds_tipo").val() == "")
	{
		$("#ds_tipo").focus();
		swal.fire("Erro", "Preencha a descrição", "error");
		$("#ds_tipo").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_tipo").removeClass("is-invalid");	
		$("#ds_tipo").addClass("is-valid");
	}

	
	
	

	return true;
}