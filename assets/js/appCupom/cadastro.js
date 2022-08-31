$(document).ready(function() {
	    

    $("#cancelar").on("click", function(){
		$('#form_usuario').trigger("reset");
        redirectTo("appCupom/listar_cupom.php");
    }); 

	$("#salvar").on("click", function(e){ 
		if(validar())
		{ 
			$.ajax({
		        url: 'appCupom/gravar_cupom.php'
				, data: $("#form_usuario").serialize()
		        , type: 'post'
		        , success: function(html) {
		        	swal.fire({
		                position: 'top-right',
		                type: 'success',
		                title: html,
		                showConfirmButton: true
		            });
		            
					redirectTo("appCupom/listar_cupom.php");
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
	if($("#ds_codigo").val() == "")
	{
		$("#ds_codigo").focus();
		swal.fire("Erro", "Preencha o código", "error");
		$("#ds_codigo").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_codigo").removeClass("is-invalid");	
		$("#ds_codigo").addClass("is-valid");
	}
    if($("#nu_porcentagem").val() == "")
	{
		$("#nu_porcentagem").focus();
		swal.fire("Erro", "Preencha a porcentagem", "error");
		$("#nu_porcentagem").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#nu_porcentagem").removeClass("is-invalid");	
		$("#nu_porcentagem").addClass("is-valid");
	}
	
	
	

	return true;
}