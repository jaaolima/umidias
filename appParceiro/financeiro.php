<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	session_start();
	require_once("../Classes/Usuario.php");
	require_once("../Classes/Ponto.php");
	require_once("../Classes/Midia.php");
	
	$id_usuario = $_SESSION['id_usuario'];
    $id_parceiro = $_SESSION['id_parceiro'];
	$usuario = new Usuario();
	$midia = new Midia();
	$ponto = new Ponto();

	$dadosUsuario = $usuario->buscarDadosUsuario($id_usuario);
	$retorno = $midia->listarTipoMidia($_POST); 

?>
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
		</div>
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#8950FC", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#EEE5FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<script src="assets/js/scripts.bundle2.min.js"></script>
		<script src="assets/js/appUsuario/perfil.js"></script>
		<script src="assets/js/pages/features/charts/amcharts/charts.js"></script>
		<script type="text/javascript">
			

			
			var KTamChartsChartsDemo = function() {


				var demo3 = function() {
					var chart = AmCharts.makeChart("kt_amcharts_3", {
						"theme": "light",
						"type": "serial",
						"dataProvider": [{
							"country": "USA",
							"year2004": 3.5,
							"year2005": 4.2
						}, {
							"country": "UK",
							"year2004": 1.7,
							"year2005": 3.1
						}, {
							"country": "Canada",
							"year2004": 2.8,
							"year2005": 2.9
						}, {
							"country": "Japan",
							"year2004": 2.6,
							"year2005": 2.3
						}, {
							"country": "France",
							"year2004": 1.4,
							"year2005": 2.1
						}, {
							"country": "Brazil",
							"year2004": 2.6,
							"year2005": 4.9
						}],
						"valueAxes": [{
							"unit": "%",
							"position": "left",
							"title": "GDP growth rate",
						}],
						"startDuration": 1,
						"graphs": [{
							"balloonText": "GDP grow in [[category]] (2004): <b>[[value]]</b>",
							"fillAlphas": 0.9,
							"lineAlpha": 0.2,
							"title": "2004",
							"type": "column",
							"valueField": "year2004"
						}, {
							"balloonText": "GDP grow in [[category]] (2005): <b>[[value]]</b>",
							"fillAlphas": 0.9,
							"lineAlpha": 0.2,
							"title": "2005",
							"type": "column",
							"clustered": false,
							"columnWidth": 0.5,
							"valueField": "year2005"
						}],
						"plotAreaFillAlphas": 0.1,
						"categoryField": "country",
						"categoryAxis": {
							"gridPosition": "start"
						},
						"export": {
							"enabled": true
						}

					});
				}
				return {
					// public functions
					init: function() {
						demo3();
					}
				};
				}();

				jQuery(document).ready(function() {
					KTamChartsChartsDemo.init();
				});
			});
			
			

		</script>
		<!--end::Global Theme Bundle-->
	</body>
	<!--end::Body-->
</html>