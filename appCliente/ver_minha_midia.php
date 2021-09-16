
<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	session_start();
	require_once("../Classes/Ponto.php");

	$id_ponto = $_REQUEST["id_ponto"]; 
	$id_alugado = $_REQUEST["id_alugado"]; 
	
	$ponto = new Ponto();
	$dados = $ponto->BuscarDadosPontoAlugado($id_alugado);
	$dadosFoto = $ponto->BuscarFotoPonto($id_ponto); 


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
								<a href="appCliente/listar_minhas_midias.php" class="texto-chumbo">Mídias alugadas</a>
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9 18L15 12L9 6" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
								<a class="texto-chumbo">Detalhes da mídia</a>
							</div>
							<div class="content flex-column-fluid pt-0" id="kt_content">
								
								<!--begin::Row-->
								<div class="row justify-content-center">
									<?php if($dados["id_status_midia"] == 1) : ?>
									<div class="text-center" style="font-size:20px;">
										<span class="font-weight-bolder"><?php echo $dados["ds_status"]; ?></span>
										<div class='progress progress-xs mt-2 mb-2 flex-shrink-0 w-150px w-xl-250px'>
											<div class='progress-bar bg-danger' role='Progresso' style='width: 10%;' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
										</div>
									</div>
									<?php endif; ?>
									<?php if($dados["id_status_midia"] == 2) : ?>
									<div class="text-center" style="font-size:20px;">
										<span class="font-weight-bolder">><?php echo $dados["ds_status"]; ?></span>
										<div class='progress progress-xs mt-2 mb-2 flex-shrink-0 w-150px w-xl-250px'>
											<div class='progress-bar bg-danger' role='Progresso' style='width: 25%;' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
										</div> 
									</div>
									<?php endif; ?>
									<?php if($dados["id_status_midia"] == 3) : ?>
									<div class="text-center" style="font-size:20px;">
										<span class="font-weight-bolder">><?php echo $dados["ds_status"]; ?></span>
										<div class='progress progress-xs mt-2 mb-2 flex-shrink-0 w-150px w-xl-250px'>
											<div class='progress-bar bg-danger' role='Progresso' style='width: 50%;' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
										</div>
									</div>
									<?php endif; ?>
									<?php if($dados["id_status_midia"] == 4) : ?>
									<div class="text-center" style="font-size:20px;">
										<span class="font-weight-bolder">><?php echo $dados["ds_status"]; ?></span>
										<div class='progress progress-xs mt-2 mb-2 flex-shrink-0 w-150px w-xl-250px'>
											<div class='progress-bar bg-danger' role='Progresso' style='width: 75%;' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
										</div>
									</div>
									<?php endif; ?>
									<?php if($dados["id_status_midia"] == 5) : ?>
									<div class="text-center" style="font-size:20px;">
										<span class="font-weight-bolder">><?php echo $dados["ds_status"]; ?></span>
										<div class='progress progress-xs mt-2 mb-2 flex-shrink-0 w-150px w-xl-250px'>
											<div class='progress-bar bg-success' role='Progresso' style='width: 100%;' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
										</div>
									</div>
									<?php endif; ?>
								</div>
								<div class="row"> 
									<div class="col-8">
                                        <div class="my-12">
                                            <h1 class="h1-titulo"><?php echo $dados["ds_sentido"] .' - '. $dados['ds_bairro']; ?></h1>
                                            <span><?php echo $dados["ds_sentido"] .' - '. $dados['ds_bairro'] .', '. $dados['ds_nome'] . ' - '. $dados['ds_uf']; ?></span>
                                        </div>
                                        <div class="my-12">
                                            <h3 class="texto-negrito">Descrição </h3>
                                            <span><?php echo $dados["ds_descricao"]; ?></span>
                                        </div>
                                        <div class="my-12">
                                            <h3 class="texto-negrito">Tamanho</h3>
                                            <span><?php echo $dados["ds_tamanho"]; ?></span>
                                        </div>
                                        <div class="my-12">
                                            <h3 class="texto-negrito">Latitude e Longitude</h3>
                                            <span><?php echo $dados["ds_latitude"] . ' ' . $dados["ds_longitude"] ; ?></span>
                                        </div>
                                        <div class="my-12">
                                            <h3 class="texto-negrito">Alugada:</h3>
                                            <span><?php echo date('d/m/Y', strtotime($dados["dt_inicial"])) . ' até ' . date('d/m/Y', strtotime($dados["dt_final"])) ; ?></span>
                                        </div>	
                                        <div class="my-12">
                                            <h3 class="texto-negrito">Contrato</h3>
                                            <span class="">Valor: <?php echo "R$ ".$dados["nu_valor_alugado"].",00" ; ?></span><br>
                                            <div class="mt-8">
                                                <a class="text-primary ">Baixar segunda via da nota fiscal</a>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 15V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V15" stroke="#B721FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7 10L12 15L17 10" stroke="#B721FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12 15V3" stroke="#B721FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>                                                                                        
                                        </div>	
                                        <div class="my-12">
                                            <h3 class="texto-negrito">Arte</h3>
                                            <a target="_blank" href="../<?php echo $dados["ds_arte"];?>" class="text-primary">Visualizar arte da mídia</a>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21 15V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V15" stroke="#B721FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M7 10L12 15L17 10" stroke="#B721FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12 15V3" stroke="#B721FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>												
									</div>
                                    <div class="col-4">
                                        <div class="mt-12">
                                            <button class="align-items-end btn btn-primary float-right">Exportar relatório</button>
                                        </div>                                       
                                    </div>

								</div>
								<!--end::Row-->
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
		<script src="assets/js/appCliente/ver_minha_midia.js"></script>
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
				lat: <?php echo $dados["ds_latitude"]; ?>,
				lng: <?php echo $dados["ds_longitude"]; ?>,
			});

			map.addMarker({
				lat: <?php echo $dados["ds_latitude"]; ?>,
				lng: <?php echo $dados["ds_longitude"]; ?>,
				title: '<?php echo $dados["ds_sentido"] .' - '. $dados['ds_bairro']; ?>',
				icon: '../assets/media/localizacao.png',
				details: {
					database_id: 42,
					author: 'HPNeo'
				},
				infoWindow: {
					content: '<span style="color:#000"><?php echo $dados["ds_sentido"] .' - '. $dados['ds_bairro']; ?></span>'
				}
			});


		}

		</script>
		<!--end::Global Theme Bundle-->
	</body>
	<!--end::Body-->
</html>