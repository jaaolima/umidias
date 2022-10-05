$(document).ready(function() {
	    
	$("#adicionar").on("click", function(e){ 
		if(validar())
		{ 
			$.ajax({
		        url: 'appCliente/gravar_dados_pessoais_cliente.php'
				, data: $("#kt_login_signin_form").serialize() 
		        , type: 'post'
		        , success: function(html) {
		        	swal.fire({
		                position: 'top-right',
		                type: 'success',
		                title: html,
		                showConfirmButton: true 
		            });
		            
					redirectTo("../principal.php");
		        }
				, error: function (data) {
					swal.fire("Erro", data.responseText, "error");
				}
		    });		 
		}	
	});
    $("#nu_cpf").inputmask({
		"mask": "999.999.999-99",
		autoUnmask: true,
	});
});

function validar()
{
	if($("#nu_cpf").val() == "")
	{
		$("#nu_cpf").focus();
		swal.fire("Erro", "Preencha o CPF", "error");
		$("#nu_cpf").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#nu_cpf").removeClass("is-invalid");	
		$("#nu_cpf").addClass("is-valid");
	}

    if($("#ds_endereco").val() == "")
	{
		$("#ds_endereco").focus();
		swal.fire("Erro", "Preencha o endereço", "error");
		$("#ds_endereco").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_endereco").removeClass("is-invalid");	
		$("#ds_endereco").addClass("is-valid");
	}

	
	
	

	return true;
}