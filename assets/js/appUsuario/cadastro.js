$(document).ready(function() {
	    

    $("#cancelar").on("click", function(){
		$('#form_usuario').trigger("reset");
        redirectTo("appUsuario/listar_usuario.php");
    });  

	$("#salvar").on("click", function(e){ 
		var cpf = $("#nu_cpf").val();
		if (validar() && validarCPF(cpf)){
			email = $("#ds_email").val();
			$.ajax({
				url: 'appUsuario/validar_usuario.php'
				, data: {email: email} 
				, type: 'post'
				, success: function(html) {
					$.ajax({
						url: 'appUsuario/gravar_usuario.php'
						, data: $("#form_usuario").serialize()
						, type: 'post'
						, success: function(html) {
							swal.fire({
								position: 'top-right',
								type: 'success',
								title: html,
								showConfirmButton: true
							});
							
							redirectTo("appUsuario/listar_usuario.php");
						}
						, error: function (data) {
							swal.fire("Erro", data.responseText, "error");
						}
					});		
				}
				, error: function (data) {
					swal.fire("Erro", data.responseText, "error"); 
				}
			});	
			
		}	
	});
	$("#id_perfil").on("change", function(e){
		if($(this).val() === "1"){
			$("#cliente").show();
		}else{
			$("#cliente").hide();
		}
	});
	$("#nu_cpf").inputmask({
		"mask": "999.999.999-99",
		autoUnmask: true,
	});
});

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

	if($("#id_perfil").val() == "")
	{
		$("#id_perfil").focus();
		swal.fire("Erro", "Preencha a senha", "error");
		$("#id_perfil").addClass("is-invalid");
		return false;		
	}
	else
	{
		$("#id_perfil").removeClass("is-invalid");	
		$("#id_perfil").addClass("is-valid");
	}
	if($("#id_perfil").val() == "1"){

		if ($("#ds_endereco").val() == "")
		{
			$("#ds_endereco").focus();
			swal.fire("Erro", "Preencha o Endereço", "error");
			return false;	
		}

		if ($("#nu_cpf").val() == "")
		{
			$("#nu_cpf").focus();
			swal.fire("Erro", "Preencha o Email", "error");
			return false;	
		}
		
		if ($("#nu_senha").val() == "")
		{
			$("#nu_senha").focus();
			swal.fire("Erro", "Preencha a senha", "error");
			return false;	
		}
		var Tamanhosenha = $("#nu_senha").val().toString();
		if (Tamanhosenha.length < 8)
		{
			$("#nu_senha").focus();
			swal.fire("Erro", "A senha precisa ter 8 dígitos ou mais", "error");
			return false;	
		}

		if ($("#nu_senhaconfirmada").val() == "")
		{
			$("#nu_senhaconfirmada").focus();
			swal.fire("Erro", "Confirme a senha", "error");
			return false;

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