$(document).ready(function() {
	    

    $("#cancelar").on("click", function(){
		$('#form_usuario').trigger("reset");
        redirectTo("appUsuario/listar_usuario.php");
    });  

	$("#salvar").on("click", function(e){ 
		if (validar()){
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