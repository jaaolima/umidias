<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	session_start();
	require_once("../Classes/Ponto.php");
	require_once("../Classes/Bisemana.php");
	require_once("../Classes/Material.php");

	$id_ponto = $_REQUEST["id_ponto"]; 
	$id_midia = $_REQUEST["id_midia"]; 
	if($_SESSION['deslogado'] != 'sim'){ 
		$id_usuario = $_SESSION['id_usuario'];
	}
	

	$material = new material(); 
	$bisemana = new Bisemana();
	$ponto = new Ponto();
	$dados = $ponto->BuscarDadosPonto($id_ponto);
	$ProximosAlugados = $ponto->BuscarProximosAlugados($id_ponto);
	$dadosFoto = $ponto->BuscarFotoPonto($id_ponto);
    $retorno = $bisemana->listarBisemanaDisponiveis($id_ponto);
	$retornoMes = $bisemana->listarMesDisponiveis($id_ponto);
    $optionsMaterial = $material->listarOptionsMaterialMidia($dados["id_material"]);    


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
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
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
						<div class="form-group col-md-12 position-relative">
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
								<a href="appCliente/appOutdoor/listar_midia.php" class="texto-chumbo">Mídias alugadas</a>
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9 18L15 12L9 6" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
								<a class="texto-chumbo">Detalhes da mídia</a>
							</div>
							<div class="content flex-column-fluid pt-0" id="kt_content"> 
								
								<!--begin::Row-->
								
								<div class="row">
									<div class="col-7 col-sm-6">
										<div class="mb-8">
											<div class="mb-12">
												<h1 class="h1-titulo"><?php echo $dados['ds_bairro']; ?></h1>
												<span><?php echo $dados['ds_bairro'] .', '. $dados['ds_nome'] . ' - '. $dados['ds_uf']; ?></span>
											</div>
											<div class="my-12">
												<h4 class="texto-negrito">Descrição </h4>
												<span><?php echo $dados["ds_descricao"]; ?></span>
											</div>
											<div class="my-12">
												<h4 class="texto-negrito">Tamanho</h4>
												<span><?php echo $dados["ds_tamanho"]; ?></span>
											</div>
											<div class="my-12">
												<h4 class="texto-negrito">Latitude e Longitude</h4>
												<span><?php echo $dados["ds_latitude"] . " " . $dados["ds_longitude"];?></span>
											</div>
											
										</div>
									</div>
									<div class="col-5 col-sm-6">	 
										<form id="form_alugar">	
											<?php if($id_midia == 1) : ?>							
                                                <div class="card card-custom card-stretch gutter-b box-shadow" id="ver_midia">
                                                    <div class="my-6 mx-6 d-flex">	
                                                        <div>
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M24.9487 18.0517C24.6738 14.4723 23.0073 12.2293 21.5371 10.25C20.1758 8.41754 19 6.83514 19 4.50086C19 4.31336 18.895 4.14198 18.7285 4.05606C18.5615 3.96962 18.3608 3.98378 18.209 4.09412C16.001 5.67409 14.1587 8.33701 13.5152 10.8778C13.0684 12.6467 13.0093 14.6354 13.001 15.9488C10.9619 15.5132 10.5 12.4632 10.4951 12.4299C10.4722 12.2717 10.3755 12.1341 10.2349 12.0589C10.0928 11.9847 9.9258 11.9793 9.78175 12.0506C9.67483 12.1023 7.15722 13.3816 7.01073 18.4891C7.00047 18.659 7 18.8295 7 18.9999C7 23.9619 11.0376 27.9992 16 27.9992C16.0068 27.9997 16.0142 28.0007 16.02 27.9992C16.022 27.9992 16.0239 27.9992 16.0263 27.9992C20.9766 27.985 25 23.9531 25 18.9999C25 18.7503 24.9487 18.0517 24.9487 18.0517ZM16 26.9993C14.3457 26.9993 13 25.5658 13 23.8037C13 23.7437 12.9995 23.6831 13.0039 23.6089C13.0239 22.8658 13.165 22.3585 13.3198 22.0211C13.6099 22.6441 14.1284 23.2169 14.9707 23.2169C15.2471 23.2169 15.4707 22.9932 15.4707 22.7169C15.4707 22.0051 15.4854 21.1838 15.6626 20.4426C15.8204 19.7854 16.1973 19.0862 16.6749 18.5258C16.8872 19.2533 17.3013 19.8421 17.7056 20.4167C18.2843 21.2389 18.8824 22.089 18.9874 23.5386C18.9937 23.6245 19.0001 23.711 19.0001 23.8037C19 25.5658 17.6543 26.9993 16 26.9993Z" fill="url(#paint0_linear)"/>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear" x1="7" y1="16.0866" x2="24.9963" y2="16.0866" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#FF5C00"/>
                                                                        <stop offset="1" stop-color="#FFD600"/>
                                                                    </linearGradient>
                                                                </defs>
                                                            </svg>
                                                            <p class="font-weight-bolder" style="margin-bottom: -3px;">Ponto quente</p>
                                                            <span>Alcance de 12.456 pessoas por dia </span>
                                                        </div>
                                                        <div style="content-visibility:hidden;">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4.73569 10.3599C1.84981 13.2457 0 17.2301 0 21.6242C0 22.1424 0.419312 22.5617 0.9375 22.5617C2.97294 22.5617 4.58956 22.5617 6.625 22.5617C7.14319 22.5617 7.5625 22.1424 7.5625 21.6242C7.5625 19.2978 8.50869 17.1884 10.0365 15.6607L9.45912 13.2083L7.88894 11.6381L4.73569 10.3599Z" fill="#67C82B"/>
                                                                <path d="M16 5.68701C16 5.99376 15.0625 6.29232 15.0625 6.58451C15.0625 8.57207 15.0625 10.266 15.0625 12.2497C15.0625 12.5546 16 12.8663 16 13.187C18.3264 13.187 20.4357 14.1332 21.9635 15.661L22.8164 15.7456L26.7421 11.8199L27.2643 10.3602C24.3784 7.47432 20.3941 5.68701 16 5.68701Z" fill="#FF5C00"/>
                                                                <path d="M4.73535 10.3602L10.0362 15.661C11.564 14.1332 13.6734 13.187 15.9997 13.187C15.9997 10.4731 15.9997 8.40095 15.9997 5.68701C11.6056 5.68701 7.62123 7.47432 4.73535 10.3602Z" fill="#FEDB41"/>
                                                                <path d="M27.2647 10.3599L21.9639 15.6607C23.4917 17.1884 24.4379 19.2978 24.4379 21.6242C24.4379 22.1424 24.8572 22.5617 25.3754 22.5617C27.4108 22.5617 29.0275 22.5617 31.0629 22.5617C31.5811 22.5617 32.0004 22.1424 32.0004 21.6242C32.0004 17.2301 30.1506 13.2457 27.2647 10.3599Z" fill="#D1111D"/>
                                                                <path d="M11.1652 12.1751C10.7992 12.3623 10.6054 12.7908 10.6967 13.2021C11.4837 16.6128 12.0706 19.1944 12.84 22.5988C12.9914 23.2309 13.2805 23.8129 13.697 24.2614C14.7833 25.5083 16.5773 25.8938 18.0947 25.1637C19.6952 24.4238 20.5424 22.676 20.1672 20.9473C19.9931 20.2672 19.6462 19.6246 19.1299 19.1204C16.6485 16.6552 14.7702 14.785 12.2888 12.3197C11.9929 12.034 11.5377 11.9701 11.1652 12.1751Z" fill="#495A79"/>
                                                                <path d="M12.2883 12.3198C14.7698 14.7851 16.6481 16.6552 19.1295 19.1205C19.6457 19.6247 19.9926 20.2673 20.1667 20.9474C20.5419 22.6761 19.6948 24.4239 18.0942 25.1638L11.1648 12.1752C11.5373 11.9703 11.9925 12.0342 12.2883 12.3198Z" fill="#42516D"/>
                                                            </svg>
                                                            <p class="font-weight-bolder" style="margin-bottom: -3px;">Alcance:</p>
                                                            <p class="font-weight-bolder" style="margin-bottom: -3px;">Médio</p>
                                                            <span>Alcance de 12.456 pessoas por dia </span>
                                                        </div>
                                                    </div>
                                                    <div class="separator separator-solid"></div>
                                                    <div class="my-6 mx-6">
                                                        <h3 class="font-weight-bolder">Datas Disponíveis</h3>
                                                    </div>
                                                    <div class=" my-6 mx-6">
                                                        <table  class="table table-hover w-100" id="table_bisemana">
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
                                                    </div>
                                                    <div class="separator separator-solid"></div>
													<div class="my-6 mx-6">
                                                        <h3 class="font-weight-bolder">Material</h3> 
                                                    </div>
                                                    <div class="my-6 mx-6">
														
														<div class="form-group">
                                                            <label>Tipo de material</label>
                                                            <select name="id_material" id="id_material" class="form-control">
                                                                <option valor="0" value="">Selecione...</option>
                                                                <?php 
                                                                    echo $optionsMaterial;
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="separator separator-solid"></div>
                                                    <div class="my-6 mx-6">
                                                        <div class="d-flex">
                                                            <div class="ml-n4 col-10">
                                                                <span>Valor da bisemana da mídia</span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M9.08984 9.00008C9.32495 8.33175 9.789 7.76819 10.3998 7.40921C11.0106 7.05024 11.7287 6.91902 12.427 7.03879C13.1253 7.15857 13.7587 7.52161 14.2149 8.06361C14.6712 8.60561 14.9209 9.2916 14.9198 10.0001C14.9198 12.0001 11.9198 13.0001 11.9198 13.0001" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M12 17H12.01" stroke="#BDBDBD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg> 
                                                            </div>													
                                                            <div class="text-right w-100">
                                                                <span class="font-weight-bolder text-right"><?php echo $dados["nu_valor"]; ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="ml-n4 col-10">
                                                                <span>Valor do material</span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M9.08984 9.00008C9.32495 8.33175 9.789 7.76819 10.3998 7.40921C11.0106 7.05024 11.7287 6.91902 12.427 7.03879C13.1253 7.15857 13.7587 7.52161 14.2149 8.06361C14.6712 8.60561 14.9209 9.2916 14.9198 10.0001C14.9198 12.0001 11.9198 13.0001 11.9198 13.0001" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M12 17H12.01" stroke="#BDBDBD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </div>													
                                                            <div class="text-right w-100">
                                                                <span class="font-weight-bolder text-right"><div id="valor_material">R$ 0,00</div><div id="qtdMaterial"></div></span>
                                                            </div>
                                                        </div>										
                                                    </div>
                                                    <div class="separator separator-solid"></div>
                                                    <div class="my-6 mx-6 text-right">
                                                        <h3 class="font-weight-bolder">Total</h3>
                                                        <div id="valor_alugado"><h2>R$ 0,00</h2></div>
                                                    </div>
													<?php if($_SESSION['deslogado'] != 'sim') : ?>
                                                    <div class="my-6 mx-6">
                                                        <button id="alugar" type="button"class="btn btn-primary w-100">Prosseguir</button>
                                                    </div>
													<?php else : ?>
													<div class="my-6 mx-6">
                                                        <a href="login.php?id_ponto=<?php echo $id_ponto; ?>&id_midia=<?php echo $id_midia;?>" class="btn btn-primary w-100">Prosseguir</a>
                                                    </div>
													<?php endif ;?>	
                                                </div>
                                            <?php endif ;?>							
											<?php if($id_midia == 2) : ?>							
                                                <div class="card card-custom card-stretch gutter-b box-shadow" id="ver_midia">
                                                    <div class="my-6 mx-6 d-flex">	
                                                        <div style="display:none;">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M24.9487 18.0517C24.6738 14.4723 23.0073 12.2293 21.5371 10.25C20.1758 8.41754 19 6.83514 19 4.50086C19 4.31336 18.895 4.14198 18.7285 4.05606C18.5615 3.96962 18.3608 3.98378 18.209 4.09412C16.001 5.67409 14.1587 8.33701 13.5152 10.8778C13.0684 12.6467 13.0093 14.6354 13.001 15.9488C10.9619 15.5132 10.5 12.4632 10.4951 12.4299C10.4722 12.2717 10.3755 12.1341 10.2349 12.0589C10.0928 11.9847 9.9258 11.9793 9.78175 12.0506C9.67483 12.1023 7.15722 13.3816 7.01073 18.4891C7.00047 18.659 7 18.8295 7 18.9999C7 23.9619 11.0376 27.9992 16 27.9992C16.0068 27.9997 16.0142 28.0007 16.02 27.9992C16.022 27.9992 16.0239 27.9992 16.0263 27.9992C20.9766 27.985 25 23.9531 25 18.9999C25 18.7503 24.9487 18.0517 24.9487 18.0517ZM16 26.9993C14.3457 26.9993 13 25.5658 13 23.8037C13 23.7437 12.9995 23.6831 13.0039 23.6089C13.0239 22.8658 13.165 22.3585 13.3198 22.0211C13.6099 22.6441 14.1284 23.2169 14.9707 23.2169C15.2471 23.2169 15.4707 22.9932 15.4707 22.7169C15.4707 22.0051 15.4854 21.1838 15.6626 20.4426C15.8204 19.7854 16.1973 19.0862 16.6749 18.5258C16.8872 19.2533 17.3013 19.8421 17.7056 20.4167C18.2843 21.2389 18.8824 22.089 18.9874 23.5386C18.9937 23.6245 19.0001 23.711 19.0001 23.8037C19 25.5658 17.6543 26.9993 16 26.9993Z" fill="url(#paint0_linear)"/>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear" x1="7" y1="16.0866" x2="24.9963" y2="16.0866" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#FF5C00"/>
                                                                        <stop offset="1" stop-color="#FFD600"/>
                                                                    </linearGradient>
                                                                </defs>
                                                            </svg>
                                                            <p class="font-weight-bolder" style="margin-bottom: -3px;">Ponto quente</p>
                                                            <span>Alcance de 12.456 pessoas por dia </span>
                                                        </div>
                                                        <div>
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4.73569 10.3599C1.84981 13.2457 0 17.2301 0 21.6242C0 22.1424 0.419312 22.5617 0.9375 22.5617C2.97294 22.5617 4.58956 22.5617 6.625 22.5617C7.14319 22.5617 7.5625 22.1424 7.5625 21.6242C7.5625 19.2978 8.50869 17.1884 10.0365 15.6607L9.45912 13.2083L7.88894 11.6381L4.73569 10.3599Z" fill="#67C82B"/>
                                                                <path d="M16 5.68701C16 5.99376 15.0625 6.29232 15.0625 6.58451C15.0625 8.57207 15.0625 10.266 15.0625 12.2497C15.0625 12.5546 16 12.8663 16 13.187C18.3264 13.187 20.4357 14.1332 21.9635 15.661L22.8164 15.7456L26.7421 11.8199L27.2643 10.3602C24.3784 7.47432 20.3941 5.68701 16 5.68701Z" fill="#FF5C00"/>
                                                                <path d="M4.73535 10.3602L10.0362 15.661C11.564 14.1332 13.6734 13.187 15.9997 13.187C15.9997 10.4731 15.9997 8.40095 15.9997 5.68701C11.6056 5.68701 7.62123 7.47432 4.73535 10.3602Z" fill="#FEDB41"/>
                                                                <path d="M27.2647 10.3599L21.9639 15.6607C23.4917 17.1884 24.4379 19.2978 24.4379 21.6242C24.4379 22.1424 24.8572 22.5617 25.3754 22.5617C27.4108 22.5617 29.0275 22.5617 31.0629 22.5617C31.5811 22.5617 32.0004 22.1424 32.0004 21.6242C32.0004 17.2301 30.1506 13.2457 27.2647 10.3599Z" fill="#D1111D"/>
                                                                <path d="M11.1652 12.1751C10.7992 12.3623 10.6054 12.7908 10.6967 13.2021C11.4837 16.6128 12.0706 19.1944 12.84 22.5988C12.9914 23.2309 13.2805 23.8129 13.697 24.2614C14.7833 25.5083 16.5773 25.8938 18.0947 25.1637C19.6952 24.4238 20.5424 22.676 20.1672 20.9473C19.9931 20.2672 19.6462 19.6246 19.1299 19.1204C16.6485 16.6552 14.7702 14.785 12.2888 12.3197C11.9929 12.034 11.5377 11.9701 11.1652 12.1751Z" fill="#495A79"/>
                                                                <path d="M12.2883 12.3198C14.7698 14.7851 16.6481 16.6552 19.1295 19.1205C19.6457 19.6247 19.9926 20.2673 20.1667 20.9474C20.5419 22.6761 19.6948 24.4239 18.0942 25.1638L11.1648 12.1752C11.5373 11.9703 11.9925 12.0342 12.2883 12.3198Z" fill="#42516D"/>
                                                            </svg>
                                                            <p class="font-weight-bolder" style="margin-bottom: -3px;">Alcance:</p>
                                                            <p class="font-weight-bolder" style="margin-bottom: -3px;">Médio</p>
                                                            <span>Alcance de 12.456 pessoas por dia </span>
                                                        </div>
                                                    </div>
                                                    <div class="separator separator-solid"></div>
                                                    <div class="my-6 mx-6">
                                                        <h3 class="font-weight-bolder">Datas Disponíveis</h3>
                                                    </div>
                                                    <div class="my-6 mx-6" >
														<table  class="table table-hover w-100" id="table_mes">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID mes</th>
                                                                    <th>Data Inicial</th>
                                                                    <th>Data Final</th> 
                                                                    <th>Mês</th>
                                                                    <th>Selecione</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                    while ($dadosMes = $retornoMes->fetch())
                                                                    {

                                                                        $dt_inicial = date('d/m/Y', strtotime($dadosMes["dt_inicial"]));
                                                                        $dt_final = date('d/m/Y', strtotime($dadosMes["dt_final"]));


                                                                        echo "<tr>
                                                                                <td>".$dadosMes['id_mes']."</td>
                                                                                <td>".$dt_inicial."</td>
                                                                                <td>".$dt_final."</td>
                                                                                <td>".$dadosMes['ds_mes']."</td>
                                                                                <td><input name='mes[]' id='".$dadosMes["id_mes"]."' value='".$dadosMes['id_mes']."' type='checkbox'></td>
                                                                            </tr>";
                                                                    }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                
                                                    </div>
                                                    <div class="separator separator-solid"></div>
													<div class="my-6 mx-6">
                                                        <h3 class="font-weight-bolder">Material</h3>
                                                    </div>
                                                    <div class="my-6 mx-6" >
														<div class="form-group">
                                                            <label>Tipo de material</label>
                                                            <select name="id_material" id="id_material" class="form-control">
                                                                <option valor="0" value="">Selecione...</option>
                                                                <?php 
                                                                    echo $optionsMaterial;
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="separator separator-solid"></div>
                                                    <div class="my-6 mx-6">
                                                        <div class="d-flex">
                                                            <div class="ml-n4 col-10">
                                                                <span>Valor Mensal da mídia</span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M9.08984 9.00008C9.32495 8.33175 9.789 7.76819 10.3998 7.40921C11.0106 7.05024 11.7287 6.91902 12.427 7.03879C13.1253 7.15857 13.7587 7.52161 14.2149 8.06361C14.6712 8.60561 14.9209 9.2916 14.9198 10.0001C14.9198 12.0001 11.9198 13.0001 11.9198 13.0001" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M12 17H12.01" stroke="#BDBDBD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </div>													
                                                            <div class="text-right w-100">
                                                                <span class="font-weight-bolder text-right"><?php echo $dados["nu_valor"];?></span>
                                                            </div>
                                                        </div>	
                                                        <div class="d-flex">
                                                            <div class="ml-n4 col-10">
                                                                <span>Valor do material</span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M9.08984 9.00008C9.32495 8.33175 9.789 7.76819 10.3998 7.40921C11.0106 7.05024 11.7287 6.91902 12.427 7.03879C13.1253 7.15857 13.7587 7.52161 14.2149 8.06361C14.6712 8.60561 14.9209 9.2916 14.9198 10.0001C14.9198 12.0001 11.9198 13.0001 11.9198 13.0001" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M12 17H12.01" stroke="#BDBDBD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </div>													
                                                            <div class="text-right w-100">
																<span class="font-weight-bolder text-right"><div id="valor_material">R$ 0,00</div></span>
                                                            </div>
                                                        </div>										
                                                    </div>
                                                    <div class="separator separator-solid"></div>
                                                    <div class="my-6 mx-6 text-right">
                                                        <h3 class="font-weight-bolder">Total</h3>
                                                        <div id="valor_alugado"><h2>R$ 0,00</h2></div>
                                                    </div>
                                                    <?php if($_SESSION['deslogado'] != 'sim') : ?>
                                                    <div class="my-6 mx-6">
                                                        <button id="alugar" type="button"class="btn btn-primary w-100">Prosseguir</button>
                                                    </div>
													<?php else : ?>
													<div class="my-6 mx-6">
                                                        <a href="login.php?id_ponto=<?php echo $id_ponto; ?>&id_midia=<?php echo $id_midia;?>" class="btn btn-primary w-100">Prosseguir</a>
                                                    </div>
													<?php endif ;?>	
                                                </div>
                                            <?php endif ;?>
											<div class="card card-custom card-stretch gutter-b box-shadow" id="alugar_midia" style="display: none;">
												<div class="my-6 mx-6">
													<h3 class="font-weight-bolder">Detalhes adicionais:</h3>  
												</div>
												<div class="separator separator-solid"></div>
												<div class="my-6 mx-6" >
													<div class="form-group"> 
														<div class="form-group">
															<label>Adicione sua Arte</label>
															<input type="file" class="form-control" name="arte[]" id="ds_arte" accept="application/pdf,application/vnd.ms-excel" >
															<div class="card card-custom card-stretch gutter-b box-shadow bg-warning-o-80 my-4 p-2 col-12">
																<p class=" m-0" style="font-size:11px;">O arquivo da arte deve ser enviado seguindo as especificações da mídia escolhida e sendo um PDF, CMYK, 300DPI.</p>
															</div>
														</div>
													</div>
													<input type="hidden" name="id_midia" id="id_midia" value="<?php echo $id_midia; ?>">
													<input type="hidden" name="id_ponto" id="id_ponto" value="<?php echo $id_ponto; ?>">
													<input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id_usuario; ?>"> 
												</div>
												<div class="separator separator-solid"></div>
												<div class="my-6 mx-6 d-flex">
													<button class="btn btn-outline-primary w-100 mr-4" type="button" id="voltar">Voltar</button>
													<button class="btn btn-primary w-100 mr-4" type="button" id="carrinho">Adicionar ao carrinho</button>
													<button class="btn btn-primary w-100 d-none" type="button" id="pagamento">Ir para método de Pagamento</button>
												</div>
											</div>
											
										</form>
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
		<script src="assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<script src="./assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
		<script src="assets/js/appCliente/ver_midia.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
		
		<script>
			// The following example creates complex markers to indicate beaches near
		// Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond 
		// to the base of the flagpole.
		jQuery(document).ready(function() {
			demo3();

			//calculo outdoor
			<?php if($id_midia == 1) : ?>
				
			$("input[name='bisemana[]']").on("click", function(){
				<?php
					$Rvirgula = str_replace(".", "", $dados["nu_valor"]); 
					$Rzero = str_replace(",00", "", $Rvirgula); 
					$Rrs = str_replace("R$ ", "", $Rzero);
					$valor = $Rrs; 
				?>
				var totalBisemana = $("input[name='bisemana[]']:checked").length;
				var local = document.getElementById("valor_alugado");
				let valor = <?php echo $valor; ?> * totalBisemana;
				let total = parseInt(valor, 10);
				local.innerHTML = "<h2>"+ total.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' }) +"</h2>";

				$("#id_material").val('').change();
			});
			<?php endif; ?>
			//calculo front
			<?php if($id_midia == 2) : ?>
				
			$("input[name='mes[]']").on("click", function(){
				<?php
					$Rvirgula = str_replace(".", "", $dados["nu_valor"]); 
					$Rzero = str_replace(",00", "", $Rvirgula); 
					$Rrs = str_replace("R$ ", "", $Rzero);
					$valor = $Rrs; 
				?>
				var totalmes = $("input[name='mes[]']:checked").length;
				var local = document.getElementById("valor_alugado");
				let valor = <?php echo $valor; ?> * totalmes;
				let total = parseInt(valor, 10);
				local.innerHTML = "<h2>"+ total.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' }) +"</h2>";

				$("#id_material").val('').change();

				
			});

			
			<?php endif; ?>
			

			//calculo material
			var Totalmaterial = document.getElementById("valor_material");
			$("#id_material").on("change", function(){
				<?php if($id_midia == 1) : ?>

					let anterior = 0;
					let qtdMaterial = 1;
					$.each($("input[name='bisemana[]']:checked"), function(i){
						if(i == 0){
							anterior = $(this).val();
						}else{
							if(anterior + 1 != $(this).val()){
								qtdMaterial++;
							}
							anterior = $(this).val();
						}
						console.log(anterior);
						
					});

					$("#qtdMaterial").html("(x"+qtdMaterial+")");





					// if($("input[name='bisemana[]']:checked").length > 1){
					// 	if($("input[name='st_material_para_todos']:checked").val() === "sim"){
					// 		//adicionar na div material
					// 		let valorMaterial = $(this).find(':selected').attr('valor')
					// 		let valorTotalMaterial =  parseInt(valorMaterial, 10);
					// 		Totalmaterial.innerHTML = valorTotalMaterial.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });


					// 		//adicionar na div total
							
					// 		<?php
					// 			$Rvirgula = str_replace(".", "", $dados["nu_valor"]); 
					// 			$Rzero = str_replace(",00", "", $Rvirgula); 
					// 			$Rrs = str_replace("R$ ", "", $Rzero);;
					// 			$valor = $Rrs;  
					// 		?>
					// 		var totalBisemana = $("input[name='bisemana[]']:checked").length;
					// 		let valor = <?php echo $valor; ?> * totalBisemana;
					// 		let total = parseInt(valor, 10);
					// 		valor_alugado = total + valorTotalMaterial

					// 		var local = document.getElementById("valor_alugado");
					// 		local.innerHTML = "<h2>"+ valor_alugado.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' }) +"</h2>";

					// 	}else{
					// 		//adicionar na div material
					// 		let valorMaterial = $(this).find(':selected').attr('valor')
					// 		let valorTotalMaterial =  parseInt(valorMaterial, 10);
					// 		Totalmaterial.innerHTML = valorTotalMaterial.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });


					// 		//adicionar na div total
					// 		//mutiplicando o valor material pela quantidade de bisemanas
					// 		valorTotalMaterial = valorTotalMaterial * parseInt($("input[name='bisemana[]']:checked").length, 10);
					// 		<?php
					// 			$Rvirgula = str_replace(".", "", $dados["nu_valor"]); 
					// 			$Rzero = str_replace(",00", "", $Rvirgula); 
					// 			$Rrs = str_replace("R$ ", "", $Rzero);;
					// 			$valor = $Rrs;  
					// 		?>
					// 		var totalBisemana = $("input[name='bisemana[]']:checked").length;
					// 		let valor = <?php echo $valor; ?> * totalBisemana;
					// 		let total = parseInt(valor, 10);
					// 		valor_alugado = total + valorTotalMaterial

					// 		var local = document.getElementById("valor_alugado");
					// 		local.innerHTML = "<h2>"+ valor_alugado.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' }) +"</h2>";
					// 	}
					// }else{
					// 	//adicionar na div material
					// 	let valorMaterial = $(this).find(':selected').attr('valor')
					// 	let valorTotalMaterial =  parseInt(valorMaterial, 10);
					// 	Totalmaterial.innerHTML = valorTotalMaterial.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });


					// 	//adicionar na div total
					// 	<?php
					// 		$Rvirgula = str_replace(".", "", $dados["nu_valor"]); 
					// 		$Rzero = str_replace(",00", "", $Rvirgula); 
					// 		$Rrs = str_replace("R$ ", "", $Rzero);;
					// 		$valor = $Rrs;  
					// 	?>
					// 	var totalBisemana = $("input[name='bisemana[]']:checked").length;
					// 	let valor = <?php echo $valor; ?> * totalBisemana;
					// 	let total = parseInt(valor, 10);
					// 	valor_alugado = total + valorTotalMaterial

					// 	var local = document.getElementById("valor_alugado");
					// 	local.innerHTML = "<h2>"+ valor_alugado.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' }) +"</h2>";

					// }
				<?php endif; ?>
				<?php if($id_midia == 2) : ?>
					if($("input[name='mes[]']:checked").length > 1){
						if($("input[name='st_material_para_todos']:checked").val() === "sim"){
							//adicionar na div material
							let valorMaterial = $(this).find(':selected').attr('valor')
							let valorTotalMaterial =  parseInt(valorMaterial, 10);
							Totalmaterial.innerHTML = valorTotalMaterial.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });

							<?php
								$Rvirgula = str_replace(".", "", $dados["nu_valor"]); 
								$Rzero = str_replace(",00", "", $Rvirgula); 
								$Rrs = str_replace("R$ ", "", $Rzero);;
								$valor = $Rrs;  
							?>
							var totalmes = $("input[name='mes[]']:checked").length;
							let valor = <?php echo $valor; ?> * totalmes;
							let total = parseInt(valor, 10);
							valor_alugado = total + valorTotalMaterial

							var local = document.getElementById("valor_alugado");
							local.innerHTML = "<h2>"+ valor_alugado.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' }) +"</h2>";
						}else{
							//adicionar na div material
							let valorMaterial = $(this).find(':selected').attr('valor')
							let valorTotalMaterial =  parseInt(valorMaterial, 10);
							Totalmaterial.innerHTML = valorTotalMaterial.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });


							//adicionar na div total
							//mutiplicando o valor material pela quantidade de mes
							valorTotalMaterial = valorTotalMaterial * parseInt($("input[name='mes[]']:checked").length, 10);
							<?php
								$Rvirgula = str_replace(".", "", $dados["nu_valor"]); 
								$Rzero = str_replace(",00", "", $Rvirgula); 
								$Rrs = str_replace("R$ ", "", $Rzero);;
								$valor = $Rrs;  
							?>
							var totalmes = $("input[name='mes[]']:checked").length;
							let valor = <?php echo $valor; ?> * totalmes;
							let total = parseInt(valor, 10);
							valor_alugado = total + valorTotalMaterial

							var local = document.getElementById("valor_alugado");
							local.innerHTML = "<h2>"+ valor_alugado.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' }) +"</h2>";
						}
					}else{
						//adicionar na div material
						let valorMaterial = $(this).find(':selected').attr('valor')
						let valorTotalMaterial =  parseInt(valorMaterial, 10);
						Totalmaterial.innerHTML = valorTotalMaterial.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });


						//adicionar na div total
						<?php
							$Rvirgula = str_replace(".", "", $dados["nu_valor"]); 
							$Rzero = str_replace(",00", "", $Rvirgula); 
							$Rrs = str_replace("R$ ", "", $Rzero);;
							$valor = $Rrs;  
						?>
						var totalmes = $("input[name='mes[]']:checked").length;
						let valor = <?php echo $valor; ?> * totalmes;
						let total = parseInt(valor, 10);
						valor_alugado = total + valorTotalMaterial

						var local = document.getElementById("valor_alugado");
						local.innerHTML = "<h2>"+ valor_alugado.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' }) +"</h2>";

					}
				<?php endif; ?>
				
				

				
			});

		})

		var KTBootstrapDatepicker = function () {

			var arrows;
			if (KTUtil.isRTL()) {
				arrows = {
					leftArrow: '<i class="la la-angle-right"></i>',
					rightArrow: '<i class="la la-angle-left"></i>'
				}
			} else {
				arrows = {
					leftArrow: '<i class="la la-angle-left"></i>',
					rightArrow: '<i class="la la-angle-right"></i>'
				}
			}

			// Private functions
			var demos = function () {
				$('#dt_inicial').datepicker({
					format: 'dd/mm/yyyy',
					rtl: KTUtil.isRTL(),
					startDate: 'd',
					todayHighlight: true,
					orientation: "bottom left",
					templates: arrows,
					dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
					dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
					dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
					monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
					monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
					nextText: 'Próximo',
					prevText: 'Anterior'
				});
			}

			return {
				// public functions
				init: function() {
					demos();
				}
			};
		}();

		jQuery(document).ready(function() {
			KTBootstrapDatepicker.init();
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
				title: '<?php echo $dados['ds_bairro']; ?>',
				icon: '../assets/media/localizacao.png',
				details: {
					database_id: 42,
					author: 'HPNeo'
				},
			});


		}


		</script>
		<!--end::Global Theme Bundle-->
	</body>
	<!--end::Body-->
</html>