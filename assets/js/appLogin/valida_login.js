

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
					$(location).attr('href', 'principal.php');  
				},
				error: function(data){
					swal.fire("Erro", data.responseText, "error");	
				}
			});
		}
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
			$.ajax({
		        url: 'appUsuario/gravar_resetar_senha_inicial.php'
		        , type: 'post'
		        , data: $("#form_esqueci_senha").serialize()
		        , success: function(html) {
		        	/*swal({
		                position: 'top-right',
		                type: 'success',
		                title: html,
		                showConfirmButton: true
					});*/
					alert(html);
					$('#form_esqueci_senha').trigger("reset");
					
					/*var login = $('#m_login');
					login.removeClass('m-login--forget-password');
					login.removeClass('m-login--signup');

					login.addClass('m-login--signin');
					mUtil.animateClass(login.find('.m-login__signin')[0], 'flipInX animated');*/
		            
		        }
		        , error: function(xhr, status, error) {
				  	swal("Erro", xhr.responseText, "error");
				}
		    });
			
		}

	});
});

$('#kt_login_signup_submit').on('click', function (e) {
			
	e.preventDefault();
	if (validarUsuario()){

		$.ajax({
			url: 'appUsuario/validar_usuario.php'
			, data: $("#form_validate").serialize() 
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

$('#kt_login_signup_submit').on('click', function (e) {
			
	e.preventDefault();
	if (validarUsuario()){

		$.ajax({
			url: 'appUsuario/validar_usuario.php'
			, data: $("#form_validate").serialize() 
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

$('#kt_login_forgot_submit').on('click', function (e) {
	e.preventDefault();
	if (validarResetar()){

		$.ajax({
			url: 'appUsuario/validar_usuario.php'
			, data: $("#form_esqueci_senha").serialize() 
			, type: 'post'
			, success: function(html) {
				$.ajax({
					url: 'appUsuario/recuperar_senha_usuario.php'
					, data: $("#form_esqueci_senha").serialize() 
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


function validarResetar()
{

	if ($("#ds_email").val() == "")
	{
		$("#ds_email").focus();
		swal.fire("Erro", "Preencha o Email", "error");
		return false;	
	}
	
	
	return true;
	
}

