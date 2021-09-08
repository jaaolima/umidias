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

    $("#salvar").on("click", function(e){ 
		if(validar())
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
		var Tamanhosenha = $("#nu_senha").val().toString();
		if (Tamanhosenha.length < 8)
		{
			$("#nu_senha").focus();
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