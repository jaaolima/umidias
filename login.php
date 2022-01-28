<?php

session_start();
if ( $_SESSION['autenticado'] ==='validado') {
	header("location: index.php");
	exit(); 
}

?>
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 10 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head>
		<meta charset="utf-8" />
		<title>Unimidias | Login</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="assets/css/pages/login/classic/login-1.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" /> 
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="assets/media/favicon.ico" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed subheader-enabled page-loading" >
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid main" id="kt_login" style="background-image: url(assets/media/BG.png);background-size: 100%;background-size: cover;">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-row-fluid position-relative p-7 overflow-hidden">
					<!--begin::Content body-->
					<div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
						<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white w-100 box-shadow"  style="max-width: 400px;left:300px;">
							<!--begin::Signin-->
							<div class=" login-signin">
								<div class="mx-8 mt-8">
									<div>
										<div class="mb-8"> 
											<h4 class="font-weight-bold texto-preto">Bem-vindo de volta!</h4>
											<span class="texto-chumbo">Insira seus dados abaixo para continuar</span> 
										</div>
									</div>
									<!--<div class="d-none" id="erro-login">
										<div class="erro-login">
											<span class="texto-preto">Parece que você inseriu um email ou senha errado.</span>
										</div>
									</div>-->								
									<!--begin::Form-->
									<div>
										<form class="form" novalidate="novalidate" id="kt_login_signin_form">
											<div class="form-group" >
												<fieldset class="fieldset-border w-100" style=" padding-bottom: 8px !important;">
													<legend class="legend-border mb-0">E-mail</legend>
													<input class="border-0 w-100 form-control rounded-0" type="text " style="height: 27px;"  name="ds_usuario" id="ds_usuario" autocomplete="off">
												</fieldset> 
												<fieldset class="fieldset-border w-100" style=" padding-bottom: 8px !important;">
													<legend class="legend-border mb-0">Senha</legend>
													<input class="border-0 w-100 form-control rounded-0" style="height: 27px;"  type="password"  name="ds_senha" id="ds_senha" >
												</fieldset> 
											</div>
											<div class="form-group d-flex flex-wrap justify-content-end align-items-center">
												<a href="javascript:;" class="text-primary my-3 mr-2" id="kt_login_forgot">Esqueceu a senha?</a>
											</div>	
											<div class="form-group d-flex flex-wrap justify-content-center align-items-center">	
												<button type="button" id="entrar" class="btn btn-primary disable font-weight-bold px-30 py-4 text-white" >ENTRAR</button>
											</div>									
										</form>
									</div>
								</div>
								<div class="separator separator-solid"></div>
								<div class="text-center my-8">
									<span class="texto-chubo">Ainda não tem uma conta?</span>
									<a href="javascript:;" class="text-primary" id="kt_login_signup">Registre-se</a>
								</div>								
							</div>
							
							<!--end::Signin-->
							<!--begin::Signup-->
							<div class=" login-signup m-8">
								<div class="text-center mb-10 mb-lg-20">
									<h3 class="font-size-h1">Inscreva-se</h3>
									<p class="text-muted font-weight-bold">Insira seus dados para criar sua conta</p>
								</div>
								<!--begin::Form-->
								<form class="form" id="form_validate" novalidate="novalidate" id="kt_login_signup_form">
									<div class="form-group">
										<fieldset class="fieldset-border w-100" style=" padding-bottom: 8px !important;">
											<legend class="legend-border mb-0">Nome</legend>
											<input class="border-0 w-100 form-control rounded-0" type="text " style="height: 27px;" name="ds_nome" id="ds_nome" autocomplete="off" >
										</fieldset> 
									</div>
									<div class="form-group">
										<fieldset class="fieldset-border w-100" style=" padding-bottom: 8px !important;">
											<legend class="legend-border mb-0">Email</legend>
											<input class="border-0 w-100 form-control rounded-0" type="email" style="height: 27px;" name="ds_email" id="ds_email" autocomplete="off">
										</fieldset> 
									</div>
									<div class="form-group">
										<fieldset class="fieldset-border w-100" style=" padding-bottom: 8px !important;">
											<legend class="legend-border mb-0">CPF</legend>
											<input class="border-0 w-100 form-control rounded-0" type="text" style="height: 27px;" name="nu_cpf" id="nu_cpf" autocomplete="off">
										</fieldset> 
									</div>
									<div class="form-group">
										<fieldset class="fieldset-border w-100" style=" padding-bottom: 8px !important;">
											<legend class="legend-border mb-0">Senha</legend>
											<input class="border-0 w-100 form-control rounded-0" type="password" style="height: 27px;" name="nu_senha" id="nu_senha" autocomplete="off">
										</fieldset> 
									</div>
									<div class="form-group">
										<fieldset class="fieldset-border w-100" style=" padding-bottom: 8px !important;">
											<legend class="legend-border mb-0">Confirmar senha</legend>
											<input class="border-0 w-100 form-control rounded-0" type="password" style="height: 27px;"  name="nu_senhaconfirmada" id="nu_senhaconfirmada" autocomplete="off" >
										</fieldset> 
									</div>
									<div class="form-group">
										<label class="checkbox mb-0">
										<input type="checkbox" name="termos" id="termos" /> 
										<span></span>Eu concordo  
										<a href="#">termos e Condições</a></label>
									</div>
									<div class="form-group d-flex flex-wrap flex-center">
										<button type="button" id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Enviar</button>
										<button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-4">Cancelar</button>
									</div>
								</form>
								<!--end::Form-->
							</div>

							<!--end::Signup-->
							<!--begin::validation-->
							<div class=" login-validate m-8">
								<!--begin::Form-->
								<form class="form text-center p-4" id="form_validate" novalidate="novalidate" id="kt_login_validate_form">
									<img src="assets\media\Ilustração - Email.png" alt="" class="my-3">
									<h3 class="font-weight-bolder my-3">Confira seu E-mail</h3>
									<p class="text-gray my-3">Se você possui uma conta, logo receberá um email para a corfirmação do seu login!</p>
									<button class="btn btn-primary my-3" id="voltar">Voltar para o login</button>
								</form> 
								<!--end::Form-->
							</div>

							<div class=" login-senha m-8">
								<!--begin::Form-->
								<form class="form text-center p-4" id="form_senha" novalidate="novalidate" id="kt_login_senha_form">
									<img src="assets\media\Ilustração - Email.png" alt="" class="my-3">
									<h3 class="font-weight-bolder my-3">Confira seu E-mail</h3>
									<p class="text-gray my-3">Se você possui uma conta, logo receberá um email com sua nova senha!</p>
									<button class="btn btn-primary my-3" id="voltar">Voltar para o login</button>
								</form> 
								<!--end::Form-->
							</div>

							<!--end::validation-->
							<!--begin::Forgot-->
							<div class=" login-forgot m-8">
								<div class="text-left mb-10 mt-4">
									<h3 class="texto-preto">Esqueceu a senha?</h3>
									<p class="texto-chumbo">Naõ se preocupe, nós vamos te ajudar a resetá-la</p>
								</div>
								<!--begin::Form-->
								<form class="form_esqueci_senha" novalidate="novalidate" id="form_esqueci_senha">
									<div class="form-group">
										<fieldset class="fieldset-border w-100" style=" padding-bottom: 8px !important;">
											<legend class="legend-border mb-0">Email</legend>
											<input class="border-0 w-100 form-control rounded-0" type="email" style="height: 27px;"  name="ds_email_resetar" id="ds_email_resetar" autocomplete="off"  >
										</fieldset> 
									</div>
									<div class="form-group flex-wrap flex-center text-center">
										<div>
											<button type="button" id="resetar" class="btn btn-primary font-weight-bold px-22 py-4 my-3 mx-4">resetar senha</button><br>
										</div>
										<div class="mt-4">
											<a href="javascript:;" id="cancelar" class="font-weight-bold text-primary">Voltar</a>
										</div>																			
									</div>
								</form>
								<!--end::Form-->
							</div> 
							
							<!--end::Forgot-->

						</div>
						
					</div>
					<!--end::Content body-->
					<!--begin::Content footer for mobile-->
					<div class="d-flex d-lg-none flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
						<div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">©<?php echo Date('Y'); ?> Unimidias</div>
						<div class="d-flex order-1 order-sm-2 my-2">
							<a href="#" class="text-dark-75 text-hover-primary">Sobre</a>
							<a href="#" class="text-dark-75 text-hover-primary ml-4">Parceiros</a>
							<a href="#" class="text-dark-75 text-hover-primary ml-4">Contato</a>
						</div>
					</div>
					<!--end::Content footer for mobile-->
				</div>
				<!--end::Content-->
				<!--<div>
					<img class="GRADIENTE_BARRA" src="assets/css/bottons/GRADIENTEBARRA.png"/>
				</div>-->
			</div>
			<!--end::Login-->
			

		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#8950FC", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#EEE5FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/appLogin/login.js"></script>
		<script src="assets/js/appLogin/valida_login.js"></script>
		<script src="assets/js/pages/widgets.js"></script>
		<script src="assets/js/custom.js"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html> 