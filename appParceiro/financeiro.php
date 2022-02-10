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
	$dadosMes = $ponto->buscarDadosDesseMes($id_parceiro);
	$dadosMesPassado = $ponto->buscarDadosMesPassado($id_parceiro);

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
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
			

			
			jQuery(document).ready(function () {
				google.charts.load('current', {'packages':['bar']})
				google.charts.setOnLoadCallback(drawMaterial);
				function drawMaterial() {
					var data = google.visualization.arrayToDataTable([
						['', 'Outdoor', 'Front-light'],
						['Mês passado', <?php echo $dadosMesPassado[0]; ?>, <?php echo $dadosMesPassado[1]; ?>],
						['Esse mês',<?php echo $dadosMes[0]; ?>, <?php echo $dadosMes[1]; ?>]
					]);

					var options = {
					chart: {
						subtitle: 'Quantidade de locações',
					}
					};

					var chart = new google.charts.Bar(document.getElementById('chart'));

					chart.draw(data, google.charts.Bar.convertOptions(options));
				}
			});
			
			

		</script>
		<!--end::Global Theme Bundle-->
	</body>
	<!--end::Body-->
</html>