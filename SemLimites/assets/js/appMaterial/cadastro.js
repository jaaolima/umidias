$(document).ready(function() {
	    

    $("#cancelar").on("click", function(){
		$('#form_usuario').trigger("reset");
        redirectTo("appMaterial/listar_material.php");
    }); 

	$("#salvar").on("click", function(e){ 
		if(validar())
		{ 
			$.ajax({
		        url: 'appMaterial/gravar_material.php'
				, data: $("#form_usuario").serialize()
		        , type: 'post'
		        , success: function(html) {
		        	swal.fire({
		                position: 'top-right',
		                type: 'success',
		                title: html,
		                showConfirmButton: true
		            });
		            
					redirectTo("appMaterial/listar_material.php");
		        }
				, error: function (data) {
					swal.fire("Erro", data.responseText, "error");
				}
		    });		
		}	
	});
	$("#nu_valor").inputmask({
		"mask": "999",
		numericInput: true, 
	});
});


function validar()
{
	if($("#ds_material").val() == "")
	{
		$("#ds_material").focus();
		swal.fire("Erro", "Preencha o Material", "error");
		$("#ds_material").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_material").removeClass("is-invalid");	
		$("#ds_material").addClass("is-valid");
	}
    if($("#nu_valor").val() == "")
	{
		$("#nu_valor").focus();
		swal.fire("Erro", "Preencha o valor", "error");
		$("#nu_valor").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#nu_valor").removeClass("is-invalid");	
		$("#nu_valor").addClass("is-valid");
	}

	
	
	

	return true;
}