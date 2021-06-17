
<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);

	require_once("../Classes/Ponto.php");
	require_once("../Classes/Bisemana.php");

	$ponto = new Ponto();
	$bisemana = new Bisemana();

	$id_midia = $_REQUEST["id_midia"];

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
		<script src="assets/js/scripts.bundle.js"></script>
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
									<div class="dropdown-menu dropdown-menu-right" style="padding:30px;">
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
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<script src="./assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
		<script src="assets/js/appCliente/buscar_midia.js"></script>
		<script>
			// The following example creates complex markers to indicate beaches near
		// Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
		// to the base of the flagpole.
		jQuery(document).ready(function() {  
			demo3();
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

		var demo3 = function() {
			var map = new GMaps({
				div: '#map',
				lat: -15.849511,
				lng: -48.022440,
				dblclick: function(e) {
					map.removeMarkers();
					map.addMarker({
						lat: e.latLng.lat(),
						lng: e.latLng.lng(),
						title: 'Seu ponto',
						infoWindow: {
							content: '<span style="color:#000">Aqui está o seu ponto!</span>'
						}
					});	
					map.setZoom(5);
					$("#ds_latitude").val(e.latLng.lat());
					$("#ds_longitude").val(e.latLng.lng());
				},
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


			/*
			map.addMarker({
				lat: -51.38739,
				lng: -6.187181,
				title: 'Lima',
				details: {
					database_id: 42,
					author: 'HPNeo'
				},
				click: function(e) {
					if (console.log) console.log(e);
					alert('You clicked in this marker');
				}
			});
			map.addMarker({
				lat: -12.042,
				lng: -77.028333,
				title: 'Marker with InfoWindow',
				infoWindow: {
					content: '<span style="color:#000">HTML Content!</span>'
				}
			});
			map.setZoom(5);

			console.log(map);*/
		}



		//let marcas = [];
		function initMap() {
		
		const map = new google.maps.Map(document.getElementById("map"), {
			zoom: 15,
			center: { lat: -15.849511, lng: -48.022440 },
		});
		
		google.maps.event.addListener(map, 'dblclick', function(event) {
			clearMarkers();
			//placeMarker(event.latLng, map);
			addMarker(event.latLng);
		});
		//setMarkers(map);
		console.log(map);
		}

		function setMapOnAll(map) {
		for (let i = 0; i < marcas.length; i++) {
			marcas[i].setMap(map);
		}
		}

		// Removes the markers from the map, but keeps them in the array.
		function clearMarkers() {
		setMapOnAll(null);
		}

		// Data for the markers consisting of a name, a LatLng and a zIndex for the
		// order in which these markers should display on top of each other.
		/*const beaches = [
		["Bondi Beach", -33.890542, 151.274856, 4],
		["Coogee Beach", -33.923036, 151.259052, 5],
		["Cronulla Beach", -34.028249, 151.157507, 3],
		["Manly Beach", -33.80010128657071, 151.28747820854187, 2],
		["Maroubra Beach", -33.950198, 151.259302, 1],
		];*/

		function setMarkers(map) {
		// Adds markers to the map.
		// Marker sizes are expressed as a Size of X,Y where the origin of the image
		// (0,0) is located in the top left of the image.
		// Origins, anchor positions and coordinates of the marker increase in the X
		// direction to the right and in the Y direction down.
		const image = {
			url:
			"https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
			// This marker is 20 pixels wide by 32 pixels high.
			size: new google.maps.Size(20, 32),
			// The origin for this image is (0, 0).
			origin: new google.maps.Point(0, 0),
			// The anchor for this image is the base of the flagpole at (0, 32).
			anchor: new google.maps.Point(0, 32),
		};
		// Shapes define the clickable region of the icon. The type defines an HTML
		// <area> element 'poly' which traces out a polygon as a series of X,Y points.
		// The final coordinate closes the poly by connecting to the first coordinate.
		const shape = {
			coords: [1, 1, 1, 20, 18, 20, 18, 1],
			type: "poly",
		};

		/*for (let i = 0; i < beaches.length; i++) {
			const beach = beaches[i];
			new google.maps.Marker({
			position: { lat: beach[1], lng: beach[2] },
			map,
			icon: image,
			shape: shape,
			title: beach[0],
			zIndex: beach[3],
			});
		}*/
		}

		function addMarker(location) {
		const marker = new google.maps.Marker({
			position: location,
			map: map,
		});
		marcas.push(marker);
		}
		function placeMarker(location, map) {
			
			var marker = new google.maps.Marker({
				position: location, 
				map: map,
				title: 'Aqui está localizado o seu ponto :'+location.lat()+' '+location.lng()
			});
			marker.setMap(map);
			map.setCenter(location);
			$("#ds_latitude").val(location.lat());
			$("#ds_longitude").val(location.lng());
			console.log('Latitude: '+location.lat()+' Longitude: '+location.lng());
		}


		</script>
		<!--end::Global Theme Bundle-->
	</body>
	<!--end::Body-->
</html>