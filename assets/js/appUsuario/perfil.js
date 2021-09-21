$(document).ready(function(){
    $("#botao_editar").on("click", function(){

        $("#perfil").addClass("d-none");
        $("#editar").removeClass("d-none");
    });

    $("#ds_senha").on("keyup", function(e){ 

        $("#confirmar").removeClass("d-none");
        $("#confirmar").addClass("d-flex");
    })

	$("#botao_voltar").on("click", function(){

        $("#editar").addClass("d-none");
        $("#perfil").removeClass("d-none"); 
    })

	$("#modalFechar").on("click", function(){
		$('#Foto').modal('hide'); 
    })


	$("#nu_cpf").inputmask({
		"mask": "999.999.999-99",
		autoUnmask: true,
	});

    $("#salvar").on("click", function(e){ 
		var cpf = $("#nu_cpf").val();
		if(validar() && validarCPF(cpf))
		{ 
			$.ajax({
		        url: 'appUsuario/gravar_alterar_perfil.php'
				, data: $("#form_usuario").serialize() 
		        , type: 'post'
		        , success: function(html) {
		        	swal.fire({
		                position: 'top-right',
		                type: 'success',
		                title: html,
		                showConfirmButton: true
		            });
		            
					redirectTo("appUsuario/perfil.php");
		        }
				, error: function (data) {
					swal.fire("Erro", data.responseText, "error");
				}
		    });		
		}	
	});

	$("#salvarFoto").on("click", function(e){ 
		if(validarFoto())
		{ 
			var form = $("#form_foto").get(0);  
				$.ajax({
					url: 'appUsuario/alterar_foto.php'
					, data: $("#form_foto").serialize()
					, type: 'post'
					, data: new FormData(form)
					, mimeType: 'multipart/form-data'
					, processData: false
					, contentType: false
					, success: function(html) { 
						$('#Foto').modal('hide');
						swal.fire({ 
							position: 'top-right',
							type: 'success',
							title: html,
							showConfirmButton: true
						});
						
						redirectTo("appUsuario/perfil.php");
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

function validarFoto()
{
	if($("#ds_foto").val() == "")
	{
		$("#ds_foto").focus();
		swal.fire("Erro", "Adicione uma foto", "error");
		$("#ds_foto").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_foto").removeClass("is-invalid");	
		$("#ds_foto").addClass("is-valid");
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