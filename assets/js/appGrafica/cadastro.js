$(document).ready(function() {
	    

    $("#cancelar").on("click", function(){
		$('#form_usuario').trigger("reset");
        redirectTo("appGrafica/listar_grafica.php");
    }); 

	$("#salvar").on("click", function(e){ 
		if(validar())
		{ 
			$.ajax({
		        url: 'appGrafica/gravar_grafica.php'
				, data: $("#form_usuario").serialize()
		        , type: 'post'
		        , success: function(html) {
		        	swal.fire({
		                position: 'top-right',
		                type: 'success',
		                title: html,
		                showConfirmButton: true
		            });
		            
					redirectTo("appGrafica/listar_grafica.php");
		        }
				, error: function (data) {
					swal.fire("Erro", data.responseText, "error");
				}
		    });		
		}	
	})
});


function validar()
{
	if($("#ds_grafica").val() == "")
	{
		$("#ds_grafica").focus();
		swal.fire("Erro", "Preencha o Grafica", "error");
		$("#ds_grafica").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_grafica").removeClass("is-invalid");	
		$("#ds_grafica").addClass("is-valid");
	}
    if($("#ds_email").val() == "")
	{
		$("#ds_email").focus();
		swal.fire("Erro", "Preencha o email", "error");
		$("#ds_email").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_email").removeClass("is-invalid");	
		$("#ds_email").addClass("is-valid");
	}

	
	
	

	return true;
}