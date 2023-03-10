
<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	session_start();

	require_once("../Classes/Ponto.php");

   	$id_parceiro = $_SESSION['id_parceiro'];

	$ponto = new Ponto();

	$meusPontos = $ponto->listarMeusPontosParceiro($id_parceiro);
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
								<h1 class="h1-titulo">Minhas m??dias</h1>
							</div>
							<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white"  >
								<div class="card-body">											
									<table class="table table-hover" id="table_ponto">
										<thead>
											<tr>
												<th>Id Ponto</th>
												<th>Minhas M??dias</th>
												<th>Descri????o</th>
												<th>Valor</th>
												<th>Tipo de M??dia</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>  
										<tbody>
											<?php
												
												while($dados = $meusPontos->fetch()){
													
													$status = "";
													switch ($dados['st_status']) {
														case 'D':
															$status = "<span class='label label-gray label-pill label-inline mr-2 py-6'>Desativado</span>";
															break;
														
														case 'A':
															$status = "<span class='label label-success label-pill label-inline mr-2 py-6'>Ativo</span>";
															break;
													}
													echo "
															<tr>
																<td>".$dados['id_ponto']."</td>
																<td>
																	<div class='d-flex'>
																		<div class='d-flex'>
																			<span class='symbol symbol-lg-50 symbol-circle symbol-40 symbol-light-success'>
																				<img class='symbol-label img-fluid' src='".$dados["ds_foto"]."'>
																			</span>
																			<div class='ml-3 mt-2'>
																				<span class='texto-negrito'>".$dados["ds_tipo"]."</span><br>																				
																				<svg class='mr-1' width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'>
																					<g clip-path='url(#clip0)'>
																					<path d='M14 6.66675C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66675C2 5.07545 2.63214 3.54933 3.75736 2.42411C4.88258 1.29889 6.4087 0.666748 8 0.666748C9.5913 0.666748 11.1174 1.29889 12.2426 2.42411C13.3679 3.54933 14 5.07545 14 6.66675Z' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
																					<path d='M8 8.66675C9.10457 8.66675 10 7.77132 10 6.66675C10 5.56218 9.10457 4.66675 8 4.66675C6.89543 4.66675 6 5.56218 6 6.66675C6 7.77132 6.89543 8.66675 8 8.66675Z' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
																					</g>
																					<defs>
																					<clipPath id='clip0'>
																					<rect width='16' height='16' fill='white'/>
																					</clipPath>
																					</defs>
																				</svg>
																				<span>".$dados["ds_bairro"]."</span>	
																			</div>
																		</div>
																	</div>
																</td> 
																<td>".$dados['ds_descricao']."</td>
																<td>".$dados['nu_valor']."</td>
																<td>".$dados['ds_tipo']."</td>
																<td>".$status."</td> 
																<td class='py-8'><a href='appParceiro/ver_minha_midia.php?id_ponto=".$dados["id_ponto"]."'>
																	<svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
																		<path d='M5 12H19' stroke='#B721FF' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
																		<path d='M12 5L19 12L12 19' stroke='#B721FF' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
																	</svg>
																</a></td>
															</tr>
														";
												}
												
											?>
										</tbody>
									</table>
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
		<script src="./assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
		<script src="./assets/js/datatables/appParceiro/lista_minhas_midias.js" type="text/javascript"></script> 
		<!--end::Global Theme Bundle-->
	</body>
	<!--end::Body-->
</html>