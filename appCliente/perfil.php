<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	session_start();
	require_once("../Classes/Usuario.php");
	
	$id_usuario = $_SESSION['id_usuario'];
	$usuario = new Usuario();
	$dadosUsuario = $usuario->buscarDadosUsuario($id_usuario);

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
	<head><base href="../../../">
		<meta charset="utf-8" />
		<title>List 4 Columns | Keenthemes</title>
		<meta name="description" content="User 4 columns listing" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed subheader-enabled page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
						
					<div class="d-flex flex-row flex-column-fluid ">
						<!--begin::Content Wrapper-->
						<div class="main d-flex flex-column flex-row-fluid">
							<div class="mb-8 ">
								<h1 class="h1-titulo">Informações pessoais</h1>
							</div>
							<div class="row">
								<div class="col-xl-12">
                                    <div class="card card-custom card-stretch">
                                        <div class="p-10">
                                            <div class="my-6">
                                                <h4 class="font-weight-bolder">Perfil</h4>
                                            </div>
                                            <div class="my-6 d-flex" id="kt_quick_user_toggle">
											 	<div class="dropdown">
													<a class="dropdown symbol symbol-circle symbol-80 symbol-light-success overlay" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
														<img src="assets/media/maria.jpg" class="symbol-label font-size-h5 font-weight-bold overlay-wrapper"alt=""> 
														<span class=" dropdown overlay-layer symbol-circle " >
															<svg class="symbol-circle" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M19.8107 18.3107C20.092 18.0294 20.25 17.6478 20.25 17.25V9C20.25 8.60218 20.092 8.22064 19.8107 7.93934C19.5294 7.65804 19.1478 7.5 18.75 7.5H15.75L14.25 5.25H9.75L8.25 7.5H5.25C4.85218 7.5 4.47064 7.65804 4.18934 7.93934C3.90804 8.22064 3.75 8.60218 3.75 9V17.25C3.75 17.6478 3.90804 18.0294 4.18934 18.3107C4.47064 18.592 4.85218 18.75 5.25 18.75H18.75C19.1478 18.75 19.5294 18.592 19.8107 18.3107ZM15 12.75C15 14.4069 13.6569 15.75 12 15.75C10.3431 15.75 9 14.4069 9 12.75C9 11.0931 10.3431 9.75 12 9.75C13.6569 9.75 15 11.0931 15 12.75Z" fill="white"/>
															</svg>
														</span>																											                                          
													</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#Foto">Trocar foto</a>
														<a class="dropdown-item" href="#">Excluir foto</a>
													</div>														       																									 
												 </div>               										
                                            </div>
											<div class="modal fade" id="Foto">
												<div class="modal-dialog modal-sm" role="document">
													<div class="modal-content">
														<div class="modal-body text-center">
															<div class="my-4">
																<h3 class="texto-negrito">Trocar imagem do perfil</h3>
															</div>
															<div class="my-4 dropzone dropzone-default text-center" >
																<div class="my-4">
																	<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M40 80C62.0914 80 80 62.0914 80 40C80 17.9086 62.0914 0 40 0C17.9086 0 0 17.9086 0 40C0 62.0914 17.9086 80 40 80Z" fill="#B721FF"/>
																		<path d="M56.6101 36.641H43.0101V23.041C43.0101 22.1923 42.673 21.3783 42.0728 20.7781C41.4727 20.178 40.6587 19.8408 39.8099 19.8408C38.9612 19.8408 38.1472 20.178 37.547 20.7781C36.9469 21.3783 36.6097 22.1923 36.6097 23.041V36.641H23.0098C22.161 36.641 21.347 36.9781 20.7469 37.5783C20.1467 38.1785 19.8096 38.9924 19.8096 39.8412C19.8096 40.6899 20.1467 41.5039 20.7469 42.1041C21.347 42.7042 22.161 43.0414 23.0098 43.0414H36.6097V56.6413C36.6097 57.4901 36.9469 58.3041 37.547 58.9042C38.1472 59.5044 38.9612 59.8415 39.8099 59.8415C40.6587 59.8415 41.4727 59.5044 42.0728 58.9042C42.673 58.3041 43.0101 57.4901 43.0101 56.6413V43.0414H56.6101C57.4588 43.0414 58.2728 42.7042 58.873 42.1041C59.4731 41.5039 59.8103 40.6899 59.8103 39.8412C59.8103 38.9924 59.4731 38.1785 58.873 37.5783C58.2728 36.9781 57.4588 36.641 56.6101 36.641Z" fill="white"/>
																	</svg>
																</div>
																<div>
																	<p class="texto-chumbo">Arraste e solte a sua imagem aqui</p>
																</div>
															</div>
															<div class="my-4">
																<p class="texto-fraco">ou</p>
															</div>
															<div class="my4 w-100"style="display:inline-grid;">
																<button class="btn btn-outline-primary mb-4">Escolher foto</button>
																<a class="text-pimary">Cancelar</a>
															</div>
														
														</div>
													</div>
												</div>
											</div>
                                            <div class="my-6 d-flex">
                                                <div class="col-6">
                                                    <span class="texto-chumbo">Nome do usuário</span>
                                                </div>                                                
                                                <div class="col-6">
                                                    <span class="texto-negrito"><?php echo $dadosUsuario['ds_nome'] ?></span>
                                                </div>
                                            </div>
                                            <div class="separator separator-solid"></div>
                                            <div class="my-6 d-flex">
                                                <div class="col-6">
                                                    <span class="texto-chumbo">Email</span>
                                                </div>                                                
                                                <div class="col-6">
                                                    <span class="texto-negrito"><?php echo $dadosUsuario['ds_email'] ?></span>
                                                </div>
                                            </div>
                                            <div class="separator separator-solid"></div>
                                            <div class="my-6 d-flex">
                                                <div class="col-6">
                                                    <span class="texto-chumbo">CPF</span>
                                                </div>                                                
                                                <div class="col-6">
                                                    <span class="texto-negrito">00000000000</span>
                                                </div>
                                            </div>
                                            <div class="separator separator-solid"></div>
                                            <div class="my-6 d-flex">
                                                <div class="col-6">
                                                    <span class="texto-chumbo">Senha</span>
                                                </div>                                                
                                                <div class="col-6">
                                                    <a href="" class="text-primary">Resetar senha</a>
                                                </div>
                                            </div>
                                            <div class="separator separator-solid"></div>
                                            <div class="my-6">
                                                <button type="button"class="btn btn-outline-primary">
                                                    <svg class="mr-1 " width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 20H21" stroke="#B721FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="svg-editar"/>
                                                        <path d="M16.5 3.50023C16.8978 3.1024 17.4374 2.87891 18 2.87891C18.2786 2.87891 18.5544 2.93378 18.8118 3.04038C19.0692 3.14699 19.303 3.30324 19.5 3.50023C19.697 3.69721 19.8532 3.93106 19.9598 4.18843C20.0665 4.4458 20.1213 4.72165 20.1213 5.00023C20.1213 5.2788 20.0665 5.55465 19.9598 5.81202C19.8532 6.06939 19.697 6.30324 19.5 6.50023L7 19.0002L3 20.0002L4 16.0002L16.5 3.50023Z" stroke="#B721FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="svg-editar"/>
                                                    </svg>Editar perfil
                                                </button>
                                            </div>
                                            
                                        </div>
                                    </div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-12">
                                    <div class="card card-custom card-stretch">
                                        <div class="p-10">
                                            <div class="my-6">
                                                <h4 class="font-weight-bolder">Perfil</h4>
                                            </div>
                                            <div class="my-6 d-flex" id="kt_quick_user_toggle">
											 	<div class="dropdown">
													<a class="dropdown symbol symbol-circle symbol-80 symbol-light-success overlay" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
														<img src="assets/media/maria.jpg" class="symbol-label font-size-h5 font-weight-bold overlay-wrapper"alt=""> 
														<span class=" dropdown overlay-layer symbol-circle " >
															<svg class="symbol-circle" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M19.8107 18.3107C20.092 18.0294 20.25 17.6478 20.25 17.25V9C20.25 8.60218 20.092 8.22064 19.8107 7.93934C19.5294 7.65804 19.1478 7.5 18.75 7.5H15.75L14.25 5.25H9.75L8.25 7.5H5.25C4.85218 7.5 4.47064 7.65804 4.18934 7.93934C3.90804 8.22064 3.75 8.60218 3.75 9V17.25C3.75 17.6478 3.90804 18.0294 4.18934 18.3107C4.47064 18.592 4.85218 18.75 5.25 18.75H18.75C19.1478 18.75 19.5294 18.592 19.8107 18.3107ZM15 12.75C15 14.4069 13.6569 15.75 12 15.75C10.3431 15.75 9 14.4069 9 12.75C9 11.0931 10.3431 9.75 12 9.75C13.6569 9.75 15 11.0931 15 12.75Z" fill="white"/>
															</svg>
														</span>																											                                          
													</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#Foto">Trocar foto</a>
														<a class="dropdown-item" href="#">Excluir foto</a>
													</div>														       																									 
												 </div>               										
                                            </div>
											<div class="modal fade" id="Foto">
												<div class="modal-dialog modal-sm" role="document">
													<div class="modal-content">
														<div class="modal-body text-center">
															<div class="my-4">
																<h3 class="texto-negrito">Trocar imagem do perfil</h3>
															</div>
															<div class="my-4 dropzone dropzone-default text-center" >
																<div class="my-4">
																	<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M40 80C62.0914 80 80 62.0914 80 40C80 17.9086 62.0914 0 40 0C17.9086 0 0 17.9086 0 40C0 62.0914 17.9086 80 40 80Z" fill="#B721FF"/>
																		<path d="M56.6101 36.641H43.0101V23.041C43.0101 22.1923 42.673 21.3783 42.0728 20.7781C41.4727 20.178 40.6587 19.8408 39.8099 19.8408C38.9612 19.8408 38.1472 20.178 37.547 20.7781C36.9469 21.3783 36.6097 22.1923 36.6097 23.041V36.641H23.0098C22.161 36.641 21.347 36.9781 20.7469 37.5783C20.1467 38.1785 19.8096 38.9924 19.8096 39.8412C19.8096 40.6899 20.1467 41.5039 20.7469 42.1041C21.347 42.7042 22.161 43.0414 23.0098 43.0414H36.6097V56.6413C36.6097 57.4901 36.9469 58.3041 37.547 58.9042C38.1472 59.5044 38.9612 59.8415 39.8099 59.8415C40.6587 59.8415 41.4727 59.5044 42.0728 58.9042C42.673 58.3041 43.0101 57.4901 43.0101 56.6413V43.0414H56.6101C57.4588 43.0414 58.2728 42.7042 58.873 42.1041C59.4731 41.5039 59.8103 40.6899 59.8103 39.8412C59.8103 38.9924 59.4731 38.1785 58.873 37.5783C58.2728 36.9781 57.4588 36.641 56.6101 36.641Z" fill="white"/>
																	</svg>
																</div>
																<div>
																	<p class="texto-chumbo">Arraste e solte a sua imagem aqui</p>
																</div>
															</div>
															<div class="my-4">
																<p class="texto-fraco">ou</p>
															</div>
															<div class="my4 w-100"style="display:inline-grid;">
																<button class="btn btn-outline-primary mb-4">Escolher foto</button>
																<a class="text-pimary">Cancelar</a>
															</div>
														
														</div>
													</div>
												</div>
											</div>
                                            <div class="my-6 d-flex">
												<fieldset class="fieldset-border ml-4 w-100">
													<legend class="legend-border">Nome Completo</legend>
												</fieldset>
                                            </div>
                                            <div class="separator separator-solid"></div>
											<div class="row">
												<div class="my-6 d-flex col-6">
													<fieldset class="fieldset-border ml-4 w-100">
														<legend class="legend-border">E-mail</legend>
													</fieldset>                                               
												</div>
												<div class="my-6 d-flex col6" >
													<fieldset class="fieldset-border ml-4 w-100">
														<legend class="legend-border">CPF</legend>
													</fieldset>                                                 
												</div>
											</div>	
                                            <div class="separator separator-solid"></div>
                                            <div class="my-6 d-flex">                                           
                                                <a href="" class="text-primary">Resetar senha</a>
                                            </div>
                                            <div class="separator separator-solid"></div>
                                            
                                        </div>
                                    </div>
								</div>
							</div>
							<!--end::Content-->
						</div>
						<!--begin::Content Wrapper-->
					</div>
					
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
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
		<script src="assets/js/scripts.bundle2.min.js"></script>
		<!--end::Global Theme Bundle-->
	</body>
	<!--end::Body-->
</html>