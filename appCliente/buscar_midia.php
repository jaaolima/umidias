
<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);

	require_once("../Classes/Ponto.php");
	require_once("../Classes/Bisemana.php");

	$ponto = new Ponto();
	$bisemana = new Bisemana();

	$id_midia = $_REQUEST["id_midia"];

	$retornoBusca = $ponto->listarPontoTipo($id_midia);
	$optionsLocal = $ponto->listarOptionsLocal($id_midia);
	$retorno = $bisemana->listarBisemana();
	
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
		<title>List Option - 2 | Keenthemes</title>
		<meta name="description" content="List option - 2 example" />
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
		<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
		<style>
			#map {
				width: 100%;
				height: 500px;
			}
			
		</style>
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
					<div class="form-group row"> 
						<div class="form-group col-md-12 position-relative">
							<div id="map" class="rounded"></div>
							<div style="top:10px;left:80px;" class="position-absolute col-4">
								<input type="text" id="busca" class="form-control" placeholder="Pesquise a região" style="border: 0;border-radius: 16px;" list="datalist">
								<datalist id="datalist">
									<?php echo $optionsLocal; ?>
								</datalist>
							</div>
							<div class="dropdown position-absolute" style="top: 10px;right: 260px;">						
								<button data-toggle="dropdown" aria-expanded="false" class="btn btn-mapa" id="filtro">Filtros</button>
								<div class="dropdown-menu">
									<a class="dropdown-item mr-2" id="busca_quentes">Pontos quentes <div class="ml-2" data-toggle="tooltip" data-placement="right" title="Pontos mais Alugados"><i class="flaticon-questions-circular-button"></i></div></a>
									<div class="dropdown-divider mx-5"></div>
									<a class="dropdown-item" id="busca_disponiveis">disponiveis</a>
								</div>
							</div>
							<div class="dropdown position-absolute" style="top: 10px;right: 80px;">
								<?php if($id_midia == 2) :  ?>
									<button data-toggle="dropdown" aria-expanded="false" class="btn btn-mapa " id="filtro_mapa">Buscar por datas</button>
									<div class="dropdown-menu dropdown-menu-right" style="padding:30px;">
										<?php if($id_midia == 2) :  ?>
											<div class="row">
												<h4 class="texto-negrito mb-4">Selecione a data inicial</h4>
											</div>
											<div class="row">
												<div id="calendario"></div>
											</div>
											<div class="row float-right mt-4">
												<button id="aplicar" class="btn btn-primary">Aplicar</button>
											</div>
										<?php endif;?>
										
									</div>
								<?php endif;?> 
								<?php if($id_midia == 1) :  ?> 
									<button data-toggle="dropdown" aria-expanded="false" class="btn btn-mapa " id="filtro_mapa">Buscar por Bisemanas </button>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="filtro_mapa" style="padding:30px;"> 
										<div class="row">
											<h4 class="texto-negrito mb-4 mr-2">Selecione as bisemanas</h4>
											<a href="javascript:;" data-toggle="tooltip" data-placement="right" title="Duas semanas(14 dias de exibição)"><i class="flaticon-questions-circular-button"></i></a>
										</div>
										<table  class="table table-hover" id="table_bisemana"> 
											<thead>
												<tr>
													<th>ID bisemanas</th>
													<th>Data Inicial</th>
													<th>Data Final</th>
													<th>Bisemanas Disponiveis</th>
													<th>Selecione</th>
												</tr>
											</thead>
											<tbody>
												<?php
													while ($dadosBisemana = $retorno->fetch())
													{

														$dt_inicial = date('d/m/Y', strtotime($dadosBisemana["dt_inicial"]));
														$dt_final = date('d/m/Y', strtotime($dadosBisemana["dt_final"]));


														echo "<tr>
																<td>".$dadosBisemana['id_bisemana']."</td>
																<td>".$dt_inicial."</td>
																<td>".$dt_final."</td>
																<td>".$dadosBisemana['ds_bisemana']."</td>
																<td><input name='bisemana[]' id='".$dadosBisemana["id_bisemana"]."' value='".$dadosBisemana['id_bisemana']."' type='checkbox'></td>
															</tr>";
													}
												?>
											</tbody>
										</table>
										<div class="row float-right mt-4">
											<button id="aplicarBisemana" class="btn btn-primary">Aplicar</button>
										</div>
									</div>
								<?php endif;?>
								
							</div>				
						</div>
					</div>
					<div id="lista"></div>
					<!--end::Container-->
					<!--begin::Footer-->
					
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div> 
			<!--end::Page-->
		</div>
		<input type="hidden" value="<?php echo $id_midia?>" id="id_midia"> 
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#8950FC", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#EEE5FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<script src="./assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
		<script src="assets/js/appCliente/buscar_midia.js"></script>
		<script>
			// The following example creates complex markers to indicate beaches near
		// Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
		// to the base of the flagpole.
		jQuery(document).ready(function() { 
			
			if('geolocation' in navigator){
				navigator.geolocation.getCurrentPosition(function(position){
					console.log(position);
					var latitude = position.coords.latitude;
					var longitude = position.coords.longitude;
					demo3(latitude, longitude);
				})
			}
			else{
				x.innerHTML="Seu browser não suporta Geolocalização.";
				var latitude = -15.7750656;
				var longitude = -48.0773014;
				demo3(latitude, longitude);
			}
			
		});

		$(function() {
			$( "#calendario" ).datepicker({
				numberOfMonths: 2,
				dateFormat: 'dd/mm/yy',
				dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
				dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
				dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
				monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
				monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
			});
		});

		var demo3 = function(latitude, longitude) {
			var map = new GMaps({
				div: '#map',
				lat: latitude,
				lng: longitude,
				zoom: 14
			});

			/*google.maps.event.addListener(map, 'dblclick', function(event) {
				map.addMarker({
					lat: event.latLng.lat(),
					lng: event.latLng.lng(),
					title: 'Seu ponto',
					infoWindow: {
						content: '<span style="color:#000">Aqui está o seu ponto</span>'
					}
				});	
				map.setZoom(5);
			});*/

			<?php while($dados = $retornoBusca->fetch()){ ?>
			var contentString = 
				"<div class='card card-custom'>"+
					"<div class='card-body text-center' style='padding: 0px !important'>"+
						"<div class='position-relative' >"+
							"<img class='img-fluid w-100 rounded-top' src='<?php echo $dados["ds_foto"]; ?>' style='height:60px;' alt='image'/>"+
						"</div>"+
						"<div class='my-8 mx-15 text-left'>"+
							"<div class='d-flex ml-n8'>"+
								"<div class='mt-1'>"+
									"<svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>"+
										"<path d='M19.7273 10.3636C19.7273 16.0909 12.3636 21 12.3636 21C12.3636 21 5 16.0909 5 10.3636C5 8.41068 5.77581 6.53771 7.15676 5.15676C8.53771 3.77581 10.4107 3 12.3636 3C14.3166 3 16.1896 3.77581 17.5705 5.15676C18.9515 6.53771 19.7273 8.41068 19.7273 10.3636Z' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>"+
										"<path d='M12.3636 12.8183C13.7192 12.8183 14.8181 11.7193 14.8181 10.3637C14.8181 9.00812 13.7192 7.90918 12.3636 7.90918C11.008 7.90918 9.90906 9.00812 9.90906 10.3637C9.90906 11.7193 11.008 12.8183 12.3636 12.8183Z' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>"+
									"</svg>"+
								"</div>"+
								"<div class='ml-2'  style='text-overflow: ellipsis;-webkit-box-orient: vertical;display: -webkit-box;-webkit-line-clamp: 1;overflow: hidden;'>"+
									"<a href='appCliente/ver_midia.php?id_ponto='<?php echo $dados['id_ponto'];?>'&id_midia='<?php echo $id_midia;?>'class='m-0 text-dark font-weight-bold text-dark font-size-h4'>'<?php echo $dados['ds_bairro'];?></a>"+
								"</div>"+
							"</div>"+
							"<div class='my-6' style='text-overflow: ellipsis;-webkit-box-orient: vertical;display: -webkit-box;-webkit-line-clamp: 1;overflow: hidden;'>"+
								"<p class='texto-chumbo font-size-h6 m-0'>'<?php echo $dados['ds_descricao'];?></p>"+
							"</div>"+
						"</div>"+
					"</div>"+
				"</div>";
			
			map.addMarker({
				lat: <?php echo $dados["ds_latitude"]; ?>,
				lng: <?php echo $dados["ds_longitude"]; ?>,
				title: '<?php echo $dados['ds_bairro']; ?>',
				icon: '../assets/media/localizacao.png',
				details: {
					database_id: 42,
					author: 'HPNeo' 
				},
				infoWindow: {
					content: contentString
					maxWidth: 200,
				}
			});
			<?php } ?>
		} 

		</script>
		<!--end::Global Theme Bundle-->
	</body>
	<!--end::Body-->
</html>