

$(document).ready(function() {
	$("#entrar").on("click", function(e){
		e.preventDefault();
		if (validar())
		{
			var ds_usuario 	= $('#ds_usuario').val();
			var ds_senha    = $('#ds_senha').val();
			
			$.ajax({
				url: 'appUsuario/login.php'
				, type:'post'
				, data:{ ds_usuario : ds_usuario, ds_senha : ds_senha}
				, success: function(xhr) {
					$(location).attr('href', 'index.php');  
				}, 
				error: function(data){
					swal.fire("Erro", data.responseText, "error");	
				}
			});
		}
	});	 

	$("#entrar_ponto").on("click", function(e){
		e.preventDefault();
		if (validar())
		{
			var ds_usuario 	= $('#ds_usuario').val();
			var ds_senha    = $('#ds_senha').val();
			var id_ponto    = $('#id_ponto').val();
			var id_midia    = $('#id_midia').val();
			
			$.ajax({
				url: 'appUsuario/login.php'
				, type:'post'
				, data:{ ds_usuario : ds_usuario, ds_senha : ds_senha}
				, success: function(xhr) {
					$(location).attr('href', 'index.php?id_ponto='+id_ponto+"&id_midia="+id_midia);  
				},
				error: function(data){
					swal.fire("Erro", data.responseText, "error");	
				}
			});
		}
	});	

	$("#nu_cpf").inputmask({
		"mask": "999.999.999-99",
		autoUnmask: true,
	});

	/*$("#cancelar").on("click", function(){
		$('#form_esqueci_senha').trigger("reset");
        redirectTo("index.php");
	});*/


	
	$("#resetar").on("click", function(e){
		e.preventDefault();
		if ($("#ds_email_resetar").val() == "")
		{
			$("#ds_email_resetar").focus();
			//swal("Erro", "Preencha o Email", "error");
			alert('preencha o email'); 
		}
		else
		{
			email = $("#ds_email_resetar").val();
			$.ajax({
				url: 'appUsuario/validar_usuario_existente.php'
				, data: {email: email}
				, type: 'post'
				, success: function(html) {
					$.ajax({
						url: 'appUsuario/email_alterar_senha.php' 
						, data: {email: email}
						, type: 'post'
						, success: function(html) {
							_login = $('#kt_login');
							_login.removeClass('login-forgot-on');
							_login.removeClass('login-signin-on');
							_login.removeClass('login-signup-on'); 
							_login.removeClass('login-validate-on');
							_login.removeClass('login-senha-on');
			
							_login.addClass('login-senha-on');
		
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
});


$('#kt_login_signup_submit').on('click', function (e) {
			
	e.preventDefault();
	var cpf = $("#nu_cpf").val();
	if (validarUsuario() && validarCPF(cpf)){
		email = $("#ds_email").val();
		$.ajax({
			url: 'appUsuario/validar_usuario.php'
			, data: {email: email} 
			, type: 'post'
			, success: function(html) {
				$.ajax({
					url: 'appUsuario/email_usuario.php'
					, data: $("#form_validate").serialize() 
					, type: 'post'
					, success: function(html) {
						_login = $('#kt_login');
						_login.removeClass('login-forgot-on');
						_login.removeClass('login-signin-on');
						_login.removeClass('login-signup-on');
						_login.removeClass('login-validate-on');
		
						_login.addClass('login-validate-on');
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

$('#kt_login_signup_cancel').on('click', function (e) {

	_login = $('#kt_login');
	_login.removeClass('login-forgot-on');
	_login.removeClass('login-signin-on');
	_login.removeClass('login-signup-on');
	_login.removeClass('login-validate-on');

	_login.addClass('login-signin-on');
});
// Handle cancel button
$('#kt_login_forgot_cancel').on('click', function (e) {
	_login = $('#kt_login');
	_login.removeClass('login-forgot-on');
	_login.removeClass('login-signin-on');
	_login.removeClass('login-signup-on');
	_login.removeClass('login-validate-on');

	_login.addClass('login-signin-on');
});

function validar()
{
	
	if ($("#ds_usuario").val() == "")
	{
		$("#ds_usuario").focus();
		swal.fire("Erro", "Preencha o Usuário", "error");
		return false;	
	}
	
	if ($("#ds_senha").val() == "")
	{
		$("#ds_senha").focus();
		swal.fire("Erro", "Preencha a senha", "error");
		return false;	
	}
	
	return true;
	
}

function validarUsuario()
{
	
	if ($("#ds_nome").val() == "")
	{
		$("#ds_nome").focus();
		swal.fire("Erro", "Preencha o Nome", "error");
		return false;	
	}

	if ($("#ds_email").val() == "")
	{
		$("#ds_email").focus();
		swal.fire("Erro", "Preencha o Email", "error");
		return false;	
	}
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

	

	if($('input[name="termos"]:checked').length == 0)
	{
		$("input[name='termos']").focus();
		swal.fire("Erro", "Precisamos que você aceite os termos e Condições", "error");
		return false;	
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


