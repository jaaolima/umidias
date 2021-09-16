$(document).ready(function(){

    $("#enviar").on("click", function(e){ 
		var cpf = $("#nu_cpf").val();
		if(validar())
		{ 
			$.ajax({
		        url: 'appCliente/email_fale_conosco.php'
				, data: $("#form_usuario").serialize() 
		        , type: 'post'
		        , success: function(html) {
		        	swal.fire({
		                position: 'top-right',
		                type: 'success',
		                title: 'Email Enviado com sucesso!',
		                showConfirmButton: true
		            });
		            $("#form_usuario").reset();
		        }
				, error: function (data) {
					swal.fire("Erro", data.responseText, "error");
				}
		    });		
		}	
	});


})


function validar()
{
	if($("#ds_nome").val() == "")
	{
		$("#ds_nome").focus();
		swal.fire("Erro", "Preencha o nome ", "error");
		$("#ds_nome").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_nome").removeClass("is-invalid");	
		$("#ds_nome").addClass("is-valid");
	}

	if($("#ds_email").val() == "")
	{
		$("#ds_email").focus();
		swal.fire("Erro", "Preencha o Email", "error");
		$("#ds_email").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_email").removeClass("is-invalid");	
		$("#ds_email").addClass("is-valid");
	}

    if($("#ds_mensagem").val() == "")
	{
		$("#ds_mensagem").focus();
		swal.fire("Erro", "Coloque uma mensagem", "error");
		$("#ds_mensagem").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_mensagem").removeClass("is-invalid");	
		$("#ds_mensagem").addClass("is-valid");
	}

	

	return true;
}
