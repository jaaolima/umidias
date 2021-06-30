
<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	session_start();
	require_once("../Classes/Ponto.php");

	$id_ponto = $_REQUEST["id_ponto"]; 
	
	$ponto = new Ponto();
	$dadosFoto = $ponto->BuscarFotoPonto($id_ponto); 
    $dadosAlugado = $ponto->BuscarAlugadoPonto($id_ponto);  


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
			#carrossel {
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
				<div class="d-flex flex-column flex-row-fluid wrapper " id="kt_wrapper">
					<div class="form-group row"> 
						<div class="form-group col-md-12">
							<div id="map" class="rounded"></div>
							<div id="carrossel"  class="carousel slide d-none"  data-ride="carousel"  >
								<div class="carousel-inner">
									<?php
										$total = 0;
										while($fotos = $dadosFoto->fetch()){
											$total .= 1;
											if($total == 1){
												echo "<div class='carousel-item active'>
														<img class='d-block w-100 img-fluid' style='height:500px;'  src='".$fotos["ds_foto"]."' >
													</div>"; 
											}
											else{
												echo "<div class='carousel-item'>
														<img class='d-block w-100 img-fluid'  style='height:500px;' src='".$fotos["ds_foto"]."' >
													</div>";
											}

										}
										
									?>
								</div>
								<a class="carousel-control-prev" role="button" data-target="#carrossel" data-slide="prev" style="width:5%;">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Anterior</span>
								</a>
								<a class="carousel-control-next" role="button" data-target="#carrossel" data-slide="next" style="width:5%;">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Próximo</span>
								</a>
							</div>
							<button class="btn btn-mapa position-absolute" style="top: 10px;right: 220px;" id="ver_foto">ver fotos</button>
							<button class="btn btn-mapa-active position-absolute" style="top: 10px;right: 80px;" id="ver_mapa">ver localização</button>
						</div>
					</div>
					<div class="d-flex flex-row flex-column-fluid" style="margin:0 !important;">
						<!--begin::Content Wrapper-->
						<div class="main d-flex flex-column flex-row-fluid">
                            <div class="font-weight-bold p-0 my-2 font-size-sm pl-13">								
								<a href="appParceiro/listar_minhas_midias.php" class="texto-chumbo">Minhas mídias</a>
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9 18L15 12L9 6" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
								<a class="texto-chumbo">Detalhes da mídia</a>
							</div>
							<div class="content flex-column-fluid pt-0" id="kt_content">
								<div class="row">
                                    <div class="col-6">
                                        <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white"  >
                                            <div class="card-body">											
                                                <table class="table table-hover" id="table_ponto">
                                                    <thead>
                                                        <tr>
                                                            <th>ID alugado</th>
                                                            <th>Data inicial</th>
                                                            <th>Data Final</th>
															<th>Status</th>
															<th>Ações</th>
                                                        </tr>
                                                    </thead> 
                                                    <tbody>
                                                        <?php
                                                            
                                                            while($dados = $dadosAlugado->fetch()){
																$dataInicial = date('d/m/Y', strtotime($dados["dt_inicial"]));
																$dataFinal = date('d/m/Y', strtotime($dados["dt_final"]));
                                                                echo "<tr>
                                                                            <td>".$dados['id_alugado']."</td>
                                                                            <td>".$dataInicial."</td>
																			<td>".$dataFinal."</td>
                                                                            <td>PENDENTE</td>
																			<td nowrap></td>
                                                                        </tr>";
                                                            }
                                                            
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-6">
										<div id="timeline"></div>
									</div>
                                </div>
								
							</div>
							<!--end::Content-->
						</div>
						<!--begin::Content Wrapper-->
					</div>
					<!--end::Container-->
					<!--begin::Footer-->
					
					<!--end::Footer-->
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
		<script src="./assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
		<script src="assets/js/appParceiro/ver_minha_midia.js"></script>
		<script>
			// The following example creates complex markers to indicate beaches near
		// Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
		// to the base of the flagpole.
		jQuery(document).ready(function() {
			demo3();
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