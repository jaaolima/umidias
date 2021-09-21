<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	session_start();
	require_once("../Classes/Usuario.php");
	require_once("../Classes/Ponto.php");
	require_once("../Classes/Midia.php");
	
	$id_usuario = $_SESSION['id_usuario'];
	$usuario = new Usuario();
	$midia = new Midia();
	$ponto = new Ponto();

	$dadosUsuario = $usuario->buscarDadosUsuario($id_usuario);
	$retorno = $midia->listarTipoMidia($_POST);
	$minhasMidias = $ponto->listarminhasMidiasPendentes($id_usuario);

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
		<div class="mb-8 ">
			<h1 class="h1-titulo">Financeiro</h1>
		</div>
		<div class="row">
			<div class="col-6">
				<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white p-10">
					<div class="my-6">
						<h4 class="titulo-div">Suas finanças</h4>
					</div>
					<div>
						<div id="chart"></div>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white p-10">
					<div class="my-6">
						<h4 class="titulo-div">Métodos de pagamento</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white p-10"  >
					<div class="my-6">
						<h4 class="titulo-div">Pagamentos Pendentes</h4>
					</div>
					<div class="card-body d-flex">
						<div class="d-flex py-5 flex-column align-items-start flex-grow-1">
							<div class="row m-0 col-12" >											
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Mídias contratadas</th>
											<th>Data inicial</th>
											<th>Data final</th>
											<th>Valor contratado</th>
											<th></th>
										</tr>
									</thead> 
									<tbody>
										<?php
											
											while($dados = $minhasMidias->fetch()){
												$dataInicial = date('d/m/Y', strtotime($dados["dt_inicial"]));
												$dataFinal = date('d/m/Y', strtotime($dados["dt_final"]));
												echo "<tr>
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
															<td class='py-8'>".$dataInicial."</td> 
															<td class='py-8'>".$dataFinal."</td>
															<td class='py-8'>".$dados["nu_valor_alugado"]."</td> 
															<td class='py-8'><a href='appCliente/ver_minha_midia.php?id_ponto=".$dados["id_ponto"]."&id_alugado=".$dados["id_alugado"]."'>
																<svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
																	<path d='M5 12H19' stroke='#B721FF' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
																	<path d='M12 5L19 12L12 19' stroke='#B721FF' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
																</svg>
															</a></td>
														</tr>";
											}
											
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#8950FC", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#EEE5FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<script src="assets/js/scripts.bundle2.min.js"></script>
		<script src="assets/js/appUsuario/perfil.js"></script>
		<script type="text/javascript">
			

			
			jQuery(document).ready(function () {
				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);
				function drawChart() {

					var data = google.visualization.arrayToDataTable([
						['Tipo', 'Total em R$']
						<?php 
							while($dados = $retorno->fetch()){
								$retornoFinanca = $ponto->buscarFinancasPonto($id_usuario, $dados['id_midia']);
								$valorTotal = 0;
								while($dadosRetorno = $retornoFinanca->fetch()){
									$valorTotal += $dadosRetorno['nu_valor_alugado'];
								}
								echo ",['".$dados['ds_tipo']."', ".$valorTotal."]";
							}	
						?>
					]);

					var options = {
						title: 'Quantidade investida em R$'
					};

					var chart = new google.visualization.PieChart(document.getElementById('chart'));

					chart.draw(data, options);
				}
			});
			
			

		</script>
		<!--end::Global Theme Bundle-->
	</body>
	<!--end::Body-->
</html>