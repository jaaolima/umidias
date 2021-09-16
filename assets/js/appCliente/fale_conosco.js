$(document).ready(function(){

    $("#enviar").on("click", function(e){ 
		var cpf = $("#nu_cpf").val();
		if(validar() && validarCPF(cpf))
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

	if($("#ds_usuario").val() == "")
	{
		$("#ds_usuario").focus();
		swal.fire("Erro", "Preencha o usuario", "error");
		$("#ds_usuario").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_usuario").removeClass("is-invalid");	
		$("#ds_usuario").addClass("is-valid");
	}

	if($("#ds_senha").val() == "")
	{
		$("#ds_senha").focus();
		swal.fire("Erro", "Preencha a senha", "error");
		$("#ds_senha").addClass("is-invalid");
		return false;		
	}
	else
	{
		$("#ds_senha").removeClass("is-invalid");	
		$("#ds_senha").addClass("is-valid");
	}

	if($("#ds_senha").val() !== "********")
	{
		var Tamanhosenha = $("#ds_senha").val().toString();
		if (Tamanhosenha.length < 8)
		{
			$("#ds_senha").focus();
			swal.fire("Erro", "A senha precisa ter 8 dígitos ou mais", "error");
			return false;	
		}

		if($("#ds_senha_confirmada").val() == "")
		{
			$("#ds_senha_confirmada").focus();
			swal.fire("Erro", "Confirme a senha", "error");
			$("#ds_senha_confirmada").addClass("is-invalid");
			return false;		
		}
		else
		{
			$("#ds_senha_confirmada").removeClass("is-invalid");	
			$("#ds_senha_confirmada").addClass("is-valid");
		}	
		
		
		if($("#nu_senhaconfirmada").val() !== $("#nu_senha").val()){
			$("#nu_senhaconfirmada").focus();
			swal.fire("Erro", "A senha e sua confirmação não são iguais", "error");
			return false;
		}
	
	}


	

	return true;
}

function validarCPF(cpf) {	

	cpf = cpf.replace(/[^\d]+/g,'');
	// Elimina CPFs invalidos conhecidos	
	if (cpf.length != 11 || 
		cpf == "00000000000" || 
		cpf == "11111111111" || 
		cpf == "22222222222" || 
		cpf == "33333333333" || 
		cpf == "44444444444" || 
		cpf == "55555555555" || 
		cpf == "66666666666" || 
		cpf == "77777777777" || 
		cpf == "88888888888" || 
		cpf == "99999999999")
	{
		$("#nu_cpf").focus();
		swal.fire("Erro", "CPF inválido", "error");
		$("#nu_cpf").addClass("is-invalid");
		return false;		
	}	
	// Valida 1o digito	
	add = 0;	
	for (i=0; i < 9; i ++)		
		add += parseInt(cpf.charAt(i)) * (10 - i);	
		rev = 11 - (add % 11);	
		if (rev == 10 || rev == 11)		
			rev = 0;	
		if (rev != parseInt(cpf.charAt(9)))		
		{
			$("#nu_cpf").focus();
			swal.fire("Erro", "CPF inválido", "error");
			$("#nu_cpf").addClass("is-invalid");
			return false;		
		}			
	// Valida 2o digito	
	add = 0;	
	for (i = 0; i < 10; i ++)		
		add += parseInt(cpf.charAt(i)) * (11 - i);	
	rev = 11 - (add % 11);	
	if (rev == 10 || rev == 11)	
		rev = 0;	
	if (rev != parseInt(cpf.charAt(10)))
	{
		$("#nu_cpf").focus();
		swal.fire("Erro", "CPF inválido", "error");
		$("#nu_cpf").addClass("is-invalid");
		return false;		
	}			
	return true;   

}