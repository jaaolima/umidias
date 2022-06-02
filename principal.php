<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	session_start();
	setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Sao_Paulo'); 

	require_once("Classes/Midia.php");
	require_once("Classes/Usuario.php");
	require_once("Classes/Ponto.php");
	require_once("Classes/Parceiro.php");
	require_once("Classes/Cliente.php");

	if(isset($_SESSION['id_usuario'])){
		header("location: index.php");
		exit();
	}

	$midia = new Midia();
	$usuario = new Usuario();
	$ponto = new Ponto();
	$parceiro = new Parceiro();
	$cliente = new Cliente();
    $_SESSION["deslogado"] = 'sim';  

    $retorno = $midia->listarTipoMidia($_POST);
?>
<!DOCTYPE html> 

<html lang="en">
	<!--begin::Head-->
	<head><base href=""> 
		<meta charset="utf-8" />
		<title>UniMidias | Painel de Controle</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets\plugins\owlCarousel\dist\assets\owl.carousel.min.css" rel="stylesheet" type="text/css" />	
		<link href="assets\plugins\owlCarousel\dist\assets\owl.theme.default.css" rel="stylesheet" type="text/css" />	
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="assets/media/favicon.ico" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed subheader-enabled page-loading">
		<!--begin::Main-->
		<header class="position-fixed w-100 bg-white" style="z-index:2;">
			<div class="navbar py-3 border-bottom">
				<!--begin::Logo-->
				<a href="index.php" class="brand-logo ml-8">
					<img alt="Logo" src="assets/media/Uni_midia_logo.png" class="logo-default max-h-35px"  />
				</a>
				<!--end::Logo-->
				<div class=" w-auto btn-clean d-flex align-items-center px-2" id="kt_quick_user_toggle">
                    <a href="login.php" class="btn btn-primary">
                        Entrar
                    </a>										
				</div>
			</div>	
		</header>	
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
							
			<div class="d-flex flex-row flex-column-fluid page">
				
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper" style=" margin-top: 56px; transition:0.5s !important;">
					
					<!--begin::Container-->
					<div class="d-flex flex-row flex-column-fluid ">
						<!--begin::Content Wrapper-->
						<div class="main d-flex flex-column flex-row-fluid">
							<div class="content flex-column-fluid" id="conteudo"> 
								<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
									<!--begin::Header Menu-->
									<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
				 						<div class=" d-flex">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M16 2V6" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M8 2V6" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M3 10H21" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
											<p class="mb-0 mt-1 ml-2 texto-chumbo"><?php echo strftime('%A, %d de %B de %Y', strtotime('today')); ?></p>
										</div>
									</div>
									<!--end::Header Menu-->
								</div>
								<!--begin::Row-->
								<div class="row">
									<div class="col-xl-12">
										<div class="row">
                                            <div class="col-xl-12">
                                                <!--begin::Tiles Widget 25-->
                                                <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white text-center"  >
													<img src="assets/media/imgs/BG_bsb.jpg" alt="" class="d-block w-100 img-fluid rounded" style="height:400px;">
                                                </div>
												<div class="position-absolute text-center"  style="top:15px;">
													<img src="assets/media/imgs/texto.png" alt="" class="position-absolute">
													<button class="position-absolute" style="background-color: Transparent;">
													</button>
												</div>
												
                                                <!--end::Tiles Widget 25-->
                                            </div>
                                            <div class="col-xl-12">
                                                <!--begin::Tiles Widget 25-->
                                                <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white text-center"  >
                                                    <div class="card-body">
                                                        <div class="d-flex py-5 flex-column align-items-start flex-grow-1">
                                                            <div class="flex-grow-1" style="display: inherit;">
                                                                <h3  id="titulo_midias_proximas" class="titulo-div">Mídias próximas à Você</h3>
                                                            </div>
                                                            <div class="row col-12 mt-4 " id="midias_proximas">
                                                                <div class="row col-12 my-4 text-center justify-content-center">
                                                                    <div class="spinner spinner-primary spinner-lg"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Tiles Widget 25-->
                                            </div>
                                            <div class="col-xl-12">
                                                <!--begin::Tiles Widget 25-->
                                                <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white text-center"  >
                                                    <div class="card-body d-flex">
                                                        <div class="d-flex py-5 flex-column align-items-start flex-grow-1 justify-content-center">
                                                            <div class="flex-grow-1" style="display: inherit;">
                                                                <h3  class="titulo-div">Alugue sua mídia</h3>
                                                            </div>
                                                            <div class="row m-0 col-12 justify-content-center" >
                                                                <?php
                                                                    while($dados = $retorno->fetch())
                                                                    { 
                                                                    $valor = count($dados) -1;
                                                                    $tamanho = 100/ $valor;
                                                                        if($dados["id_midia"] == $valor){ 
                                                                            echo '<div class="bg-white pl-20 py-6  pr-20" style="text-align: center; width:'.$tamanho.'%  ;">
                                                                                        <img height="46px" width="50px" src="assets/media/display.png"></img>
                                                                                        <p  class="titulo-midia d-block ">'.$dados["ds_tipo"].'</p>
                                                                                        <a href="appCliente/buscar_midia.php?id_midia='.$dados["id_midia"].'" class="btn btn-primary" type="button" >Alugar mídia</a>
                                                                                    </div>';
                                                                        }
                                                                        else{
                                                                            echo '<div class="bg-white pl-20 py-6 border-right  pr-20" style="text-align: center; width:'.$tamanho.'% ;">
                                                                                        <span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
                                                                                            <svg width="50" height="46" viewBox="0 0 50 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                <path d="M44.2 1H5.8C3.14903 1 1 3.14903 1 5.8V29.8C1 32.451 3.14903 34.6 5.8 34.6H44.2C46.851 34.6 49 32.451 49 29.8V5.8C49 3.14903 46.851 1 44.2 1Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                                <path d="M20.2 44.2H29.8" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                                <path d="M25 34.6001V44.2001" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                            </svg>
                                                                                        </span>
                                                                                        <p  class="titulo-midia d-block ">'.$dados["ds_tipo"].'</p>
                                                                                        <a href="appCliente/buscar_midia.php?id_midia='.$dados["id_midia"].'" class="btn btn-primary" type="button" >Alugar mídia</a>
                                                                                    </div>';
                                                                        }

                                                                    }																	
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Tiles Widget 25-->
                                            </div>
										</div>	
									</div>
								</div>
								<!--end::Dashboard-->
							</div>
							<!--end::Content-->
						</div>
						<!--begin::Content Wrapper-->
					</div> 
					<!--end::Container-->
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
		<!--begin::Page Vendors(used by this page)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/crud/datatables/basic/basic.js"></script> 
		<!--end::Page Scripts-->
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/widgets.js"></script>
		<script src="assets/js/custom.js"></script>
		<script src="//maps.google.com/maps/api/js?key=AIzaSyB0sGOoifQgDLzR_xYQbaGiiqXRHaJN2tM&callback=initialize"></script>
		<script src="assets/plugins/custom/gmaps/gmaps.js"></script>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		
		

		<!-- <script src="assets/js/scripts.bundle2.min.js"></script> -->
		<script>
			function geolocalizacao(){
				if('geolocation' in navigator){
					navigator.geolocation.getCurrentPosition(function(position){
						latitude = position.coords.latitude;
						longitude = position.coords.longitude;


						$.ajax({
							url: 'appCliente/listar_midias_proximas.php'
							, data: {latitude, longitude}
							, type: 'post'
							, success: function(html) {
								$("#midias_proximas").html(html);
								$("#midias_proximas").slideDown(); 
								$("#aceitar_localizacao").addClass("d-none");
							}
							, error: function (data) {
								swal.fire("Erro", data.responseText, "error"); 
							}
						});	
					}, function(error){
						if(error['code'] == 1){
                            $("#titulo_midias_proximas").html("Mídias interessantes para Você");
							$.ajax({
                                url: 'appCliente/listar_midias_quentes.php'
                                , type: 'post'
                                , success: function(html) {
                                    $("#midias_proximas").html(html);
                                    $("#midias_proximas").slideDown(); 
                                    $("#aceitar_localizacao").addClass("d-none");
                                }
                                , error: function (data) {
                                    swal.fire("Erro", data.responseText, "error"); 
                                }
                            });	
						} 
					}) 
				}
			}
            jQuery(document).ready(function () {
				geolocalizacao();

			});

		</script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>