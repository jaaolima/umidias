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

	// if ( $_SESSION['autenticado'] !=='validado') {
	// 	header("location: login.php");
	// 	exit();
	// }
	// if(!isset($_SESSION['id_usuario'])){
	// 	header("location: login.php");
	// 	exit();
	// }

	if(!isset($_SESSION['id_usuario'])){
		header("location: principal.php");
		exit();
	}
	
	$id_usuario = $_SESSION["id_usuario"]; 

	if($_SESSION["id_perfil"] != 2){
		$id_parceiro = NULL;
	}else{
		$id_parceiro = $_SESSION["id_parceiro"];
	}

	$_SESSION["deslogado"] = 'não';  

	$midia = new Midia();
	$usuario = new Usuario();
	$ponto = new Ponto();
	$parceiro = new Parceiro();
	$cliente = new Cliente(); 

	$retorno = $midia->listarTipoMidia($_POST);
	$dadosUsuario = $usuario->buscarDadosUsuario($id_usuario);
	$meusPontos = $ponto->listarMeusPontos($id_usuario);
	$dadosTotalMidias = $ponto->dadosTotalMidias();
	$meusPontosAlugadosParceiro = $ponto->listarMeusPontosAlugadosParceiro($id_parceiro);


	$dadosTotalInativos = $ponto->dadosTotalInativos();
	$dadosTotalAtivos = $ponto->dadosTotalAtivos();
	$dadosTotalParceiros = $parceiro->dadosTotalParceiros();
	$dadosTotalCliente = $cliente->dadosTotalCliente();
	$dadosTodasMidias = $ponto->listarTodasMidias();
	$totalCarrinho = $cliente->BuscarQuantidadeCarrinho($id_usuario);

	$graficoPontoParceiroAlugados= $ponto->graficoPontoParceiroAlugados($id_parceiro);

	if($dadosUsuario["nu_cpf"] == "" && $dadosUsuario["ds_endereco"] == "" && $dadosUsuario["id_perfil"] == 1){
		header("location: cadastro_pessoal.php?id_usuario=".$id_usuario);
		exit();
	}
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
					<?php if($_SESSION['id_perfil'] == 1) :   ?>
						<a href="appCliente/carrinho.php" class="mr-4">
							<i class="flaticon-shopping-basket icon-xl svg-shop"></i>
							<?php if($totalCarrinho > 0 ) : ?>
								<span class="label label-sm label-success mb-2" style="margin-left:-4px;"><?php echo $totalCarrinho; ?></span>
							<?php endif; ?>
						</a>
						<?php endif; ?>
						<div><p class="mb-0 mt-1 ml-2 texto-chumbo">Olá, <?php echo $dadosUsuario['ds_nome'];?>!</p></div>
						<div class="dropdown">
							<div  class="mr-2" data-toggle="dropdown" aria-expanded="false">
								<a href="#" class="btn-dropdown">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6 9L12 15L18 9" stroke="#B721FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</a>	 
							</div>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="appUsuario/perfil.php">Minha conta</a>
								<div class="dropdown-divider mx-5"></div>
								<a class="dropdown-item texto-vermelho" href="appUsuario/logout.php">Sair</a>
							</div>	
						</div>
						<?php if($dadosUsuario['ds_foto'] === null) :  ?>	
						<div class="symbol symbol-lg-35 symbol-circle symbol-25 symbol-light-success">
							<span class="symbol-label"><?php echo $dadosUsuario['ds_nome'][0]; ?></span>
						</div>			
						<?php else : ?>
						<span class="symbol symbol-lg-35 symbol-circle symbol-25 symbol-light-success">
							<img src="<?php echo $dadosUsuario["ds_foto"]; ?>" class="symbol-label"alt="">
						</span>		
					<?php endif; ?>										
				</div>
			</div>	
		</header>	
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
							
			<div class="d-flex flex-row flex-column-fluid page">
				
				<!--incio do sidebar-->				
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto border-right" id="navbar" style="margin-top:56px; transition:0.5s !important;">
					<!--begin::Aside Menu-->
					<div class="aside-menu-wrapper flex-column-fluid position-relative" id="kt_aside_menu_wrapper">
						<div class="position-absolute mt-8">
							<button class="kt-aside__brand-aside-toggler btn btn-sm px-0  position-relative" id="nav_toggle" style="margin-left:246px; z-index:1;">
								<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="16" cy="16" r="16" fill="#B721FF"/>
									<path d="M18 10L12 16L18 22" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</button>
							<button class="kt-aside__brand-aside-toggler btn btn-sm px-0  position-relative d-none" id="nav_toggle_open" style="margin-left:102px; z-index:1;">
								<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="16" cy="16" r="16" fill="#B721FF"/>
									<path d="M7 16H25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M7 10H25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M7 22H25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</button>
						</div>
						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu mb-4 scroll ps ps--active-y" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500" style="height: 825px; overflow: hidden;">
							<!--begin::Menu Nav-->	
							
							<ul class="menu-nav nav-pills" style="overflow: auto;">
								<li class="menu-item my-4 botao-menu botao-menu-dashboard botao-menu-active btn ml-5" style="width:max-content;"  aria-haspopup="true">
									<a href="index.php" class="btn rounded mx-2 text-left  ">
										<i class="flaticon-home-2 icon-xl svg-hover svg-painel svg-active"></i>

										<span class="menu-text texto-menu-active texto-menu texto-menu-dashboard"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Painel de Controle</font></font></span>
									</a>
								</li>
								<?php if($_SESSION['id_perfil'] == 1) :   ?>
								<li class="menu-item my-4  btn ml-5 botao-menu botao-menu-alugar" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="appCliente/listar_tipo.php" class="btn rounded mx-2 text-left  ">
										<i class="flaticon-web icon-xl svg-hover svg-alugar "></i>
										<span class="menu-text texto-menu texto-menu-alugar"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alugar mídia</font></font></span>
									</a>
								</li>
									<?php if($id_usuario != 0) :  ?>
									<li class="menu-item my-4 botao-menu botao-menu-alugadas btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
										<a href="appCliente/listar_minhas_midias.php" class="btn rounded mx-2 text-left  ">
											<i class="flaticon-list-3 icon-xl svg-hover svg-alugadas"></i>
											<span class="menu-text texto-menu texto-menu-alugadas"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mídias alugadas</font></font></span>
										</a>
									</li>
									<li class="menu-item my-4 botao-menu botao-menu-financeiro btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
										<a href="appCliente/financeiro.php" class="btn rounded mx-2 text-left ">
										<i class="flaticon-coins icon-xl svg-hover svg-financeiro"></i>
	
											<span class="menu-text texto-menu texto-menu-financeiro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Financeiro</font></font></span>
										</a>
									</li>
									<?php endif ;?>
								<?php endif ;?>
								<?php if($_SESSION['id_perfil'] == 2) :   ?>
								<li class="menu-item my-4  btn ml-5 botao-menu botao-menu-alugar" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="appParceiro/listar_tipo.php" class="btn rounded mx-2 text-left  ">
										<i class="flaticon-web icon-xl svg-hover svg-alugar "></i>
										<span class="menu-text texto-menu texto-menu-alugar"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adicionar Mídia</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4 botao-menu botao-menu-gestor btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="appParceiro/gerenciar_aluguel.php" class="btn rounded mx-2 text-left  ">
										<i class="flaticon-list icon-xl svg-hover svg-gestor"></i>
										<span class="menu-text texto-menu texto-menu-gestor"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gestor de alugueis</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4 botao-menu botao-menu-alugadas btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="appParceiro/listar_minhas_midias.php" class="btn rounded mx-2 text-left  ">
										<i class="flaticon-list-3 icon-xl svg-hover svg-alugadas"></i>
										<span class="menu-text texto-menu texto-menu-alugadas"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Minhas mídias</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4 botao-menu botao-menu-financeiro btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="appParceiro/financeiro.php" class="btn rounded mx-2 text-left ">
									<i class="flaticon-coins icon-xl svg-hover svg-financeiro"></i>
 
										<span class="menu-text texto-menu texto-menu-financeiro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Financeiro</font></font></span>
									</a>
								</li>
								<?php endif ;?>
								<?php if($_SESSION['id_perfil'] == 3  ) :   ?>
								
								<li class="menu-item my-4 botao-menu botao-menu-categoria btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="/appCategoria/listar_categoria.php" class="btn rounded mx-2 text-left ">	
										<i class="flaticon-cogwheel-2 icon-xl svg-hover svg-categoria"></i>
										<span class="menu-text texto-menu texto-menu-categoria"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Categorias</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4 botao-menu botao-menu-financeiro btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="appParceiro/financeiro.php" class="btn rounded mx-2 text-left ">
										<i class="flaticon-coins icon-xl svg-hover svg-financeiro"></i>
 
										<span class="menu-text texto-menu texto-menu-financeiro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Financeiro</font></font></span>
									</a>
								</li>

								<li class="menu-item my-4 botao-menu botao-menu-parceiro btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="/appParceiro/listar_parceiro.php" class="btn rounded mx-2 text-left ">
									<i class="flaticon-map icon-xl svg-hover svg-parceiro"></i>
 
										<span class="menu-text texto-menu texto-menu-parceiro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Parceiros</font></font></span>
									</a>
								</li>

								<li class="menu-item my-4 botao-menu botao-menu-ponto btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="/appPonto/listar_ponto.php" class="btn rounded mx-2 text-left ">
									<i class="flaticon-placeholder icon-xl svg-hover svg-ponto"></i>
 
										<span class="menu-text texto-menu texto-menu-ponto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pontos</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4 botao-menu botao-menu-relatorio btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="#" class="btn rounded mx-2 text-left ">
									<i class="flaticon-line-graph icon-xl svg-hover svg-relatorio"></i>
 
										<span class="menu-text texto-menu texto-menu-relatorio"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Relatórios</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4 botao-menu botao-menu-usuario btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="/appUsuario/listar_usuario.php" class="btn rounded mx-2 text-left ">
										<i class="flaticon-users icon-xl svg-hover svg-usuario"></i>
										<span class="menu-text texto-menu texto-menu-usuario"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usuários</font></font></span>
									</a>
								</li> 
								<li class="menu-item my-4 botao-menu botao-menu-material btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="/appMaterial/listar_material.php" class="btn rounded mx-2 text-left ">
										<i class="flaticon-folder icon-xl svg-hover svg-material"></i>
										<span class="menu-text texto-menu texto-menu-material"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Materiais</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4 botao-menu botao-menu-bisemana btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="/appBisemana/listar_bisemana.php" class="btn rounded mx-2 text-left ">
										<i class="flaticon-calendar-1 icon-xl svg-hover svg-bisemana"></i>
										<span class="menu-text texto-menu texto-menu-bisemana"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bisemana</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4 botao-menu botao-menu-grafica btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="/appGrafica/listar_grafica.php" class="btn rounded mx-2 text-left ">
										<i class="flaticon-users icon-xl svg-hover svg-grafica"></i>
										<span class="menu-text texto-menu texto-menu-grafica"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gráficas</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4 botao-menu botao-menu-pendente btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="/appPagamento/listar_pagamento_pendente.php" class="btn rounded mx-2 text-left ">
										<i class="flaticon-time-1 icon-xl svg-hover svg-pendente"></i>
										<span class="menu-text texto-menu texto-menu-pendente"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pendentes</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4 botao-menu botao-menu-cupom btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="/appCupom/listar_cupom.php" class="btn rounded mx-2 text-left ">
										<i class="flaticon-notes icon-xl svg-hover svg-cupom"></i>
										<span class="menu-text texto-menu texto-menu-cupom"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cupom</font></font></span>
									</a>
								</li> 
								
								<?php endif ;?> 
							</ul>
							<div class="position-fixed bottom-0 ml-8 mb-6">
								<a  href="appCliente/fale_conosco.php" class="btn ml-2 text-left d-flex">
									<i class="flaticon-chat-1 icon-xl text-primary"></i>
									<p class="menu-text texto-menu text-primary ml-2">Fale conosco</p>
								</a>
							</div>							
						</div>
					</div>
					
					<!--end::Aside Menu-->
				</div>
				
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper" style="margin-left: 265px; margin-top: 56px; transition:0.5s !important;">
					
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
								<div class="mb-8 ">
									<h1 class="h1-titulo">Painel de Controle</h1>
								</div>
								<!--begin::Row-->
								<?php if($_SESSION['id_perfil'] == 2  ) :  ?>
								<div class="row">
									<div class="col-4">
										<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white"  >
											<div class="card-body d-flex ">
												<div class="d-flex py-5 flex-column align-items-start flex-grow-1">
													<div class="flex-grow-1" style="display: inherit;">
														<h3 class="card-title titulo-div">Locações Mensais:</h3>
													</div>
													<div class="position-relative w-100">
														<div id="grafico_parceiro_midia"></div>
													</div>
												</div>
											</div> 
										</div>
									</div>
									<div class="col-8">
										<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white"  >
											<div class="card-body">
												<div class="flex-grow-1" style="display: inherit;">
													<h3  class="titulo-div">Próximas Mídias Contratadas</h3> 
												</div>										
												<table class="table table-hover" id="table_ponto">
													<thead>
														<tr>
															<th>Mídias</th>
															<th>Descrição</th>
															<th>Data Inicial</th>
															<th>Data Final</th>
															<th>Status</th>
														</tr>
													</thead> 
													<tbody>
														<?php
															
															while($dados = $meusPontosAlugadosParceiro->fetch()){
																$dataInicial = date('d/m/Y', strtotime($dados["dt_inicial"]));
																$dataFinal = date('d/m/Y', strtotime($dados["dt_final"]));
																$corStatus = "label-warning";
																if($dados["id_status_midia"] == 7){ $corStatus =  "label-success"; }
																echo "<tr>
																		<td>
																			<div class='d-flex'>
																				<div class='d-flex'>
																					<span class='symbol symbol-lg-50 symbol-circle symbol-40 symbol-light-success'>
																						<img class='symbol-label img-fluid' src='".$dados["ds_foto"]."'>
																					</span> 
																					<div class='ml-3 mt-2'>
																						<div style='text-overflow: ellipsis;-webkit-box-orient: vertical;display: -webkit-box;-webkit-line-clamp: 1;overflow: hidden;'>
																							<span class='texto-negrito'>".$dados["ds_tipo"]."</span><br>
																						</div>	
																						<div style='text-overflow: ellipsis;-webkit-box-orient: vertical;display: -webkit-box;-webkit-line-clamp: 1;overflow: hidden;'>
																							<svg class='' width='14' height='14' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'>
																								<g clip-path='url(#clip0)'>
																								<path d='M14 6.66675C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66675C2 5.07545 2.63214 3.54933 3.75736 2.42411C4.88258 1.29889 6.4087 0.666748 8 0.666748C9.5913 0.666748 11.1174 1.29889 12.2426 2.42411C13.3679 3.54933 14 5.07545 14 6.66675Z' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
																								<path d='M8 8.66675C9.10457 8.66675 10 7.77132 10 6.66675C10 5.56218 9.10457 4.66675 8 4.66675C6.89543 4.66675 6 5.56218 6 6.66675C6 7.77132 6.89543 8.66675 8 8.66675Z' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
																								</g>
																								<defs>
																								<clipPath id='clip0'>
																								<rect width='14' height='14' fill='white'/>
																								</clipPath>
																								</defs>
																							</svg>
																							<span>".$dados["ds_bairro"]."</span>
																						</div>																				
																					</div>
																				</div>
																			</div>
																		</td>
																		<td>".$dados['ds_descricao']."</td>
																		<td>".$dataInicial."</td>
																		<td>".$dataFinal."</td>
																		<td><span  class='label ".$corStatus." label-pill label-inline mr-2 py-6'>".$dados['ds_status']."</span></td>
																	</tr>";
															}
															
														?>
													</tbody>
												</table>
												<div class="w-100 mt-6">
													<a href="appParceiro/gerenciar_aluguel.php" class="text-primary float-right">Ver todas as mídias</a>
												</div>
											</div>
										</div>
									</div>
								</div>	 
								<?php endif; ?>
								<div class="row">
									<div class="col-xl-12">
										<div class="row">
											<?php if($_SESSION['id_perfil'] == 2  ) :  ?>
												<div class="col-xl-12">
													<!--begin::Tiles Widget 25-->
													<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white text-center"  >
														<div class="card-body d-flex">
															<div class="d-flex py-5 flex-column align-items-start flex-grow-1 justify-content-center">
																<div class="flex-grow-1" style="display: inherit;">
																	<h3  class="titulo-div">Adicione sua mídia</h3>
																</div>
																<div class="row m-0 col-12 justify-content-center" >
																	<?php
																		while($dados = $retorno->fetch())
																		{ 
																			$valor = count($dados) -1;
																			$tamanho = 100/ $valor;
																			if($dados["id_midia"] == $valor){ 
																				echo '<div class="bg-white pl-20 py-6   pr-20" style="text-align: center; width:'.$tamanho.'%  ;">
																							<img height="46px" width="50px" src="assets/media/display.png"></img>
																							<p  class="titulo-midia d-block ">'.$dados["ds_tipo"].'</p>
																							<a href="appPonto/cadastro.php?id_midia='.$dados["id_midia"].'" class="btn btn-primary" type="button" >Adicionar mídia</a>
																						</div>';
																			}
																			else{
																				echo '<div class="bg-white pl-20 py-6  border-right  pr-20" style="text-align: center; width:'.$tamanho.'% ;">
																							<span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
																								<svg width="50" height="46" viewBox="0 0 50 46" fill="none" xmlns="http://www.w3.org/2000/svg">
																									<path d="M44.2 1H5.8C3.14903 1 1 3.14903 1 5.8V29.8C1 32.451 3.14903 34.6 5.8 34.6H44.2C46.851 34.6 49 32.451 49 29.8V5.8C49 3.14903 46.851 1 44.2 1Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																									<path d="M20.2 44.2H29.8" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																									<path d="M25 34.6001V44.2001" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																								</svg>
																							</span>
																							<p  class="titulo-midia d-block ">'.$dados["ds_tipo"].'</p>
																							<a href="appPonto/cadastro.php?id_midia='.$dados["id_midia"].'" class="btn btn-primary" type="button" >Adicionar mídia</a>
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
											<?php endif; ?>
											<?php if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 4 ) :  ?>	
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
												<div class="col-xl-12">
													<!--begin::Tiles Widget 25-->
													<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white text-center"  >
														<div class="card-body">
															<div class="d-flex py-5 flex-column align-items-start flex-grow-1">
																<div class="flex-grow-1" style="display: inherit;">
																	<h3 id="titulo_midias_proximas" class="titulo-div">Mídias próximas à Você</h3>
																</div>
																<div class="row col-12 mt-4 " id="midias_proximas">
																	<div class="row col-12 my-4 text-center justify-content-center">
																		<div class="spinner spinner-primary spinner-lg"></div>
																	</div>
																</div>
																<div class="row col-12 mt-4 justify-content-center text-center d-none" id="aceitar_localizacao">
																	<h3>Precisamos da sua localização para procurar as mídias próximas à você!</h3><br>	
																	<!-- <button class="btn btn-primary" type="button" id="button_aceitar_localizacao">Aceitar</button> -->
																</div>
															</div>
														</div>
													</div>
													<!--end::Tiles Widget 25-->
												</div>
											<?php endif; ?>	
										</div>	
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<?php if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 4) :  ?>
									<?php if($id_usuario != 0) :  ?>
										<div class="row">
											<div class="col-xl-12">
												<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white"  >
													<div class="card-body d-flex">
														<div class="d-flex py-5 flex-column align-items-start flex-grow-1">
															<div class="flex-grow-1" style="display: inherit;">
																<h3 class="card-title titulo-div">Mídias contratadas</h3>
															</div>
															<div class="row m-0 col-12" >											
																<table class="table table-hover">
																	<thead>
																		<tr> 
																			<th>Tipo de Mídia</th> 
																			<th>Data inicial</th>
																			<th>Data final</th>
																			<th>Status</th>
																			<th>Valor contratado</th>
																			<th></th>
																		</tr>
																	</thead>
																	<tbody>
																	<?php
																	
																		while($dados = $meusPontos->fetch()){
																			$dataInicial = date('d/m/Y', strtotime($dados["dt_inicial"]));
																			$dataFinal = date('d/m/Y', strtotime($dados["dt_final"]));
																			$corStatus = "";
																			$status = "";
																			switch ($dados["id_status_midia"]) {
																				case 1:
																					$status = "Aguardando pagamento!";
																					$corStatus = "label-danger";
																					break;
																				
																				case 2:
																					$status = "Aguardando confirmação!";
																					$corStatus = "label-warning";
																					break;
																				case 3:
																				case 4:
																				case 5:
																					$status = "Mídia sendo preparada!";
																					$corStatus = "label-warning";
																					break;
																				case 6:
																					$status = "Saiu pra colagem!";
																					$corStatus = "label-warning";
																					break;
																				case 7:
																					$status = "Mídia veiculada!";
																					$corStatus = "label-success";
																					break;
																					
																			}

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
																					<td class='py-8'><span class='label ".$corStatus." label-pill label-inline mr-2 py-6'>".$status."</span></td>
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
																<div class="w-100 mt-6">
																	<a href="appCliente/listar_minhas_midias.php" class="text-primary float-right">Ver todas as mídias</a>
																</div>															
															</div>
														</div>
													</div>
												</div>
											</div>
												
										
										
										</div>
									<?php endif; ?>
								<?php endif; ?>
								<?php if($_SESSION['id_perfil'] == 3 ) :  ?>
									<div class="row">
										<div class="col-4">
											<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white"  >
												<div class="card-body d-flex">
													<div class="d-flex py-5 flex-column align-items-start flex-grow-1">
														<div class="flex-grow-1" style="display: inherit;">
															<h3 class="card-title titulo-div">Total de Midias: <?php echo $dadosTotalMidias["id_ponto"]; ?></h3>
														</div>
														<div class="position-relative w-100">
															<div id="grafico_midia"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-4">
											<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white"  >
												<div class="card-body d-flex ">
													<div class="d-flex py-5 flex-column align-items-start flex-grow-1">
														<div class="flex-grow-1" style="display: inherit;">
															<h3 class="card-title titulo-div">Total de Parceiros: <?php echo $dadosTotalParceiros[2]["id_parceiro"]; ?></h3>
														</div>
														<div class="position-relative w-100">
															<div id="grafico_parceiro"></div>
														</div>
													</div>
												</div> 
											</div>
										</div>	
										<div class="col-4">
											<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white"  >
												<div class="card-body d-flex ">
													<div class="d-flex py-5 flex-column align-items-start flex-grow-1">
														<div class="flex-grow-1" style="display: inherit;">
															<h3 class="card-title titulo-div">Total de Clientes: <?php echo $dadosTotalCliente[2]["id_usuario"]; ?></h3>
														</div>
														<div class="position-relative w-100">
															<div id="grafico_cliente"></div>
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>
									<div class="row">
										<div class="col-xl-12">
											<!--begin::Tiles Widget 25-->
											<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white text-center"  >
												<div class="card-body d-flex">
													<div class="d-flex py-5 flex-column align-items-start flex-grow-1 justify-content-center">
														<div class="flex-grow-1" style="display: inherit;">
															<h3  class="titulo-div">Relatório de mídias Contratadas</h3>
														</div>
														<div class="row m-0 col-12 justify-content-center" >
															<?php
																while($dados = $retorno->fetch())
																{ 
																	$valor = count($dados) -1;
																	$tamanho = 100/ $valor;
																	if($dados["id_midia"] == $valor){ 
																		echo '<div class="bg-white pl-20 py-6 mb-10 mt-7  pr-20" style="text-align: center; width:'.$tamanho.'%  ;">
																					<img height="46px" width="50px" src="assets/media/display.png"></img>
																					<p  class="titulo-midia d-block ">'.$dados["ds_tipo"].'</p>
																					<a href="appPonto/busca_ponto_midia.php?id_midia='.$dados["id_midia"].'" class="btn btn-primary" type="button" >Listar</a>
																				</div>';
																	}
																	else{
																		echo '<div class="bg-white pl-20 py-6 mb-10 mt-7 border-right  pr-20" style="text-align: center; width:'.$tamanho.'% ;">
																					<span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
																						<svg width="50" height="46" viewBox="0 0 50 46" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M44.2 1H5.8C3.14903 1 1 3.14903 1 5.8V29.8C1 32.451 3.14903 34.6 5.8 34.6H44.2C46.851 34.6 49 32.451 49 29.8V5.8C49 3.14903 46.851 1 44.2 1Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																							<path d="M20.2 44.2H29.8" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																							<path d="M25 34.6001V44.2001" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																						</svg>
																					</span>
																					<p  class="titulo-midia d-block ">'.$dados["ds_tipo"].'</p>
																					<a href="appPonto/busca_ponto_midia.php?id_midia='.$dados["id_midia"].'" class="btn btn-primary" type="button" >Listar</a>
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
								<?php endif; ?>
								<!--end::Row-->
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

			const primary = '#6993FF';
			const success = '#1BC5BD';
			const danger = '#F64E60';
			const warning = '#FFA800';
			var KTApexChartsDemo = function () {
				var midia = function () {
					const apexChart = "#grafico_midia";
					var options = {
						series: [ {
							name: 'Inativos',
							data: [<?php echo $dadosTotalInativos[0]["id_ponto"]; ?>,<?php echo $dadosTotalInativos[1]["id_ponto"]; ?>, <?php echo $dadosTotalInativos[2]["id_ponto"]; ?>]
						},
						{
							name: 'Ativos',
							data: [<?php echo $dadosTotalAtivos[0]["id_ponto"]; ?>,<?php echo $dadosTotalAtivos[1]["id_ponto"]; ?>, <?php echo $dadosTotalAtivos[2]["id_ponto"]; ?>]
						}],
						chart: {
							height: 350,
							type: 'line',
							zoom: {
								enabled: false
							}
						},
						dataLabels: {
							enabled: false
						},
						stroke: {
							curve: 'smooth'
						},
						xaxis: {
							categories: ["1 mes atrás", "1 semana atrás", "Atual"]
						},
	
						colors: [primary, success, danger]
					};

					var chart = new ApexCharts(document.querySelector(apexChart), options);
					chart.render();
				}
				var parceiro = function () {
					const apexChart = "#grafico_parceiro";
					var options = {
						series: [{
							name: 'Total',
							data: [<?php echo $dadosTotalParceiros[0]["id_parceiro"]; ?>,<?php echo $dadosTotalParceiros[1]["id_parceiro"]; ?>, <?php echo $dadosTotalParceiros[2]["id_parceiro"]; ?>]
						}],
						chart: {
							height: 350,
							type: 'line',
							zoom: {
								enabled: false
							}
						},
						dataLabels: {
							enabled: false
						},
						stroke: {
							curve: 'smooth'
						},
						xaxis: {
							categories: ["1 mes atrás", "1 semana atrás", "Atual"]
						},
	
						colors: [primary]
					};

					var chart = new ApexCharts(document.querySelector(apexChart), options);
					chart.render();
				}
				var cliente = function () {
					const apexChart = "#grafico_cliente";
					var options = {
						series: [{
							name: 'total',
							data: [<?php echo $dadosTotalCliente[0]["id_usuario"]; ?>,<?php echo $dadosTotalCliente[1]["id_usuario"]; ?>, <?php echo $dadosTotalCliente[2]["id_usuario"]; ?>]
						}],
						chart: {
							height: 350,
							type: 'line',
							zoom: {
								enabled: false
							}
						},
						dataLabels: {
							enabled: false
						},
						stroke: {
							curve: 'smooth'
						},
						xaxis: {
							categories: ["1 mes atrás", "1 semana atrás", "Atual"]
						},
	
						colors: [primary]
					};

					var chart = new ApexCharts(document.querySelector(apexChart), options);
					chart.render();
				}
				var parceiroMidia = function () {
					const apexChart = "#grafico_parceiro_midia"; 
					var options = {
						series: [{
							name: "Locações",
							data: [<?php echo $graficoPontoParceiroAlugados[0]["id_alugado"]; ?>, <?php echo $graficoPontoParceiroAlugados[1]["id_alugado"]; ?>, <?php echo $graficoPontoParceiroAlugados[2]["id_alugado"]; ?>, <?php echo $graficoPontoParceiroAlugados[3]["id_alugado"]; ?>, <?php echo $graficoPontoParceiroAlugados[4]["id_alugado"]; ?>, <?php echo $graficoPontoParceiroAlugados[5]["id_alugado"]; ?>, <?php echo $graficoPontoParceiroAlugados[6]["id_alugado"]; ?>, <?php echo $graficoPontoParceiroAlugados[7]["id_alugado"]; ?>, <?php echo $graficoPontoParceiroAlugados[8]["id_alugado"]; ?>, <?php echo $graficoPontoParceiroAlugados[9]["id_alugado"]; ?>,<?php echo $graficoPontoParceiroAlugados[10]["id_alugado"]; ?>, <?php echo $graficoPontoParceiroAlugados[11]["id_alugado"]; ?>]
						}],
						chart: {
							height: 300,
							type: 'line',
							zoom: {
								enabled: false
							}
						},
						dataLabels: { 	
							enabled: false
						},
						stroke: {
							curve: 'straight'
						},
						grid: {
							row: {
								colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
								opacity: 0.5
							},
						},
						xaxis: {
							categories: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Out', 'Nov', 'Dec'],
						},
						colors: [primary]
					};

					var chart = new ApexCharts(document.querySelector(apexChart), options);
					chart.render();
				}

				return {
					// public functions
					init: function () {
						midia();
						parceiro();
						cliente();
						parceiroMidia();
					}
				};
			}();
			jQuery(document).ready(function () {
				<?php if(isset($_REQUEST['id_ponto'])) : ?>
					<?php if($_SESSION["id_perfil"] != 2) : ?>
						redirectTo("appCliente/ver_midia.php?id_ponto=<?php echo $_REQUEST["id_ponto"]; ?>&id_midia=<?php echo $_REQUEST["id_midia"]; ?>");
					<?php endif; ?>
				<?php endif; ?>
				KTApexChartsDemo.init();
				geolocalizacao();

			});

		</script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>