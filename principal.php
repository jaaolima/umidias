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

	if ( $_SESSION['autenticado'] !=='validado') {
		header("location: index.php");
		exit();
	}
   	$id_usuario = $_SESSION['id_usuario'];

	$midia = new Midia();
	$usuario = new Usuario();
	$ponto = new Ponto();

	$retorno = $midia->listarTipoMidia($_POST);
	$dadosUsuario = $usuario->buscarDadosUsuario($id_usuario);
	$meusPontos = $ponto->listarMeusPontos($id_usuario);
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
				<a href="/metronic/demo1/index.html" class="brand-logo ml-8">
					<img alt="Logo" src="assets/media/logo.png" class="logo-default max-h-25px"  />
				</a>
				<!--end::Logo-->
				<div class=" w-auto btn-clean d-flex align-items-center px-2" id="kt_quick_user_toggle">
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
					<span class="symbol symbol-lg-35 symbol-circle symbol-25 symbol-light-success">
						<img src="assets/media/maria.jpg" class="symbol-label"alt="">
					</span>		
																
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
							
							<ul class="menu-nav nav-pills">
								<li class="menu-item my-4 botao-menu botao-menu-dashboard botao-menu-active btn ml-5" style="width:max-content;"  aria-haspopup="true">
									<a href="principal.php" class="btn rounded mx-2 text-left  ">
										<i class="flaticon-home-2 icon-xl svg-hover svg-painel svg-active"></i>

										<span class="menu-text texto-menu-active texto-menu texto-menu-dashboard"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Painel de Controle</font></font></span>
									</a>
								</li>
								<?php if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 2) :   ?>
								<li class="menu-item my-4  btn ml-5 botao-menu botao-menu-alugar" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="appCliente/listar_tipo.php" class="btn rounded mx-2 text-left  ">
										<i class="flaticon-web icon-xl"></i>
										<span class="menu-text texto-menu texto-menu-alugar"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alugar mídia</font></font></span>
									</a>
								</li>
								<?php endif ;?>
								
								<?php if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 2 ) :   ?>
								<li class="menu-item my-4 botao-menu botao-menu-alugadas btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="appCliente/listar_minhas_midias.php" class="btn rounded mx-2 text-left  ">
										<i class="flaticon-list-3 icon-xl"></i>
										<span class="menu-text texto-menu texto-menu-alugadas"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mídias alugadas</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4 botao-menu botao-menu-financeiro btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="#" class="btn rounded mx-2 text-left ">
									<i class="flaticon-coins icon-xl"></i>
 
										<span class="menu-text texto-menu texto-menu-financeiro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Financeiro</font></font></span>
									</a>
								</li>
								<?php endif ;?>
								<?php if($_SESSION['id_perfil'] == 3  ) :   ?>
								
								<li class="menu-item my-4 botao-menu botao-menu-categoria btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="/appCategoria/listar_categoria.php" class="btn rounded mx-2 text-left ">	
										<i class="flaticon-cogwheel-2 icon-xl svg-hover svg-categorias"></i>
										<span class="menu-text texto-menu texto-menu-categoria"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Categorias</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4 botao-menu botao-menu-ponto btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="#" class="btn rounded mx-2 text-left ">
									<i class="flaticon-coins icon-xl"></i>
 
										<span class="menu-text texto-menu texto-menu-ponto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Financeiro</font></font></span>
									</a>
								</li>

								<li class="menu-item my-4 botao-menu botao-menu-ponto btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="/appParceiro/listar_parceiro.php" class="btn rounded mx-2 text-left ">
									<i class="flaticon-map icon-xl"></i>
 
										<span class="menu-text texto-menu texto-menu-ponto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Parceiros</font></font></span>
									</a>
								</li>

								<li class="menu-item my-4 botao-menu botao-menu-ponto btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="/appPonto/listar_ponto.php" class="btn rounded mx-2 text-left ">
									<i class="flaticon-placeholder icon-xl"></i>
 
										<span class="menu-text texto-menu texto-menu-ponto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pontos</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4 botao-menu botao-menu-ponto btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="#" class="btn rounded mx-2 text-left ">
									<i class="flaticon-line-graph icon-xl"></i>
 
										<span class="menu-text texto-menu texto-menu-ponto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Relatórios</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4 botao-menu botao-menu-usuario btn ml-5" aria-haspopup="true" style="width:max-content;" data-menu-toggle="hover">
									<a href="/appUsuario/listar_usuario.php" class="btn rounded mx-2 text-left ">
										<i class="flaticon-users icon-xl"></i>
										<span class="menu-text texto-menu texto-menu-usuario"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usuários</font></font></span>
									</a>
								</li>
								
								<?php endif ;?>
							</ul>
							<div class="position-fixed bottom-0 ml-8 mb-6">
								<a  href="principal.php" class="btn ml-2 text-left d-flex">
								<i class="flaticon-chat-1 icon-xl"></i>
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
																				echo '<div class="bg-white pl-20 py-6 mb-10 mt-7  pr-20" style="text-align: center; width:'.$tamanho.'%  ;">
																							<span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
																								<svg width="50" height="46" viewBox="0 0 50 46" fill="none" xmlns="http://www.w3.org/2000/svg">
																									<path d="M44.2 1H5.8C3.14903 1 1 3.14903 1 5.8V29.8C1 32.451 3.14903 34.6 5.8 34.6H44.2C46.851 34.6 49 32.451 49 29.8V5.8C49 3.14903 46.851 1 44.2 1Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																									<path d="M20.2 44.2H29.8" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																									<path d="M25 34.6001V44.2001" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																								</svg>
																							</span>
																							<p  class="titulo-midia d-block ">'.$dados["ds_nome"].'</p>
																							<a href="appParceiro/add_midia.php" class="btn btn-primary" type="button" >Adicionar mídia</a>
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
																							<p  class="titulo-midia d-block ">'.$dados["ds_nome"].'</p>
																							<a href="appParceiro/add_midia.php" class="btn btn-primary" type="button" >Adicionar mídia</a>
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
																				echo '<div class="bg-white pl-20 py-6 mb-10 mt-7  pr-20" style="text-align: center; width:'.$tamanho.'%  ;">
																							<span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
																								<svg width="50" height="46" viewBox="0 0 50 46" fill="none" xmlns="http://www.w3.org/2000/svg">
																									<path d="M44.2 1H5.8C3.14903 1 1 3.14903 1 5.8V29.8C1 32.451 3.14903 34.6 5.8 34.6H44.2C46.851 34.6 49 32.451 49 29.8V5.8C49 3.14903 46.851 1 44.2 1Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																									<path d="M20.2 44.2H29.8" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																									<path d="M25 34.6001V44.2001" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																								</svg>
																							</span>
																							<p  class="titulo-midia d-block ">'.$dados["ds_nome"].'</p>
																							<a href="appCliente/listar_midia.php" class="btn btn-primary" type="button" >Alugar mídia</a>
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
																							<p  class="titulo-midia d-block ">'.$dados["ds_nome"].'</p>
																							<a href="appCliente/listar_midia.php" class="btn btn-primary" type="button" >Alugar mídia</a>
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
										</div>	
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row">
									<?php if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 3 || $_SESSION['id_perfil'] == 4 ) :  ?>
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
																		<th>Valor contratado</th>
																		<th></th>
																	</tr>
																</thead>
																<tbody>
																<?php
																
																	while($dados = $meusPontos->fetch()){
																		echo "<tr>
																				<td>
																					<div class='d-flex'>
																						<span class='symbol symbol-lg-50 symbol-circle symbol-40 symbol-light-success'>
																							<span class='symbol-label font-size-h5 font-weight-bold'>P</span>
																						</span>
																						<div class='ml-3 mt-2'>
																							<span class='texto-negrito'>".$dados["ds_nome"]."</span><br>																				
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
																							<span>".$dados["ds_local"]."</span>	
																						</div>
																					</div>
																				</td>
																				<td class='py-8'>21/01/2021</td>
																				<td class='py-8'>21/01/2021</td>
																				<td class='py-8'>".$dados["nu_valor"]."</td>
																				<td class='py-8'><a href='appCliente/ver_minha_midia.php?id_ponto=".$dados["id_ponto"]."'>
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
											
									<?php endif; ?>
									
								</div>
								<div class="row">	
									<?php if($_SESSION['id_perfil'] == 2  ) :  ?>
										<div class="col-xl-12">
											<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white"  >
												<div class="card-body d-flex">
													<div class="d-flex py-5 flex-column align-items-start flex-grow-1">
														<div class="flex-grow-1" style="display: inherit;">
															<h3 class="card-title titulo-div">Minhas mídias</h3>
														</div>
														<div class="row m-0 col-12" >											
															<table class="table table-hover">
																<thead>
																	<tr>
																		<th>Mídias contratadas</th>
																		<th>Data inicial</th>
																		<th>Data final</th>
																		<th>Valor contratado</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Universo Painéis</td>
																		<td>21/01/2021</td>
																		<td>21/01/2021</td>
																		<td>00,00 RS</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
								</div>
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
		<script src="assets/js/scripts.bundle2.min.js"></script>
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
		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM&callback=initialize"></script>
		<script src="assets/plugins/custom/gmaps/gmaps.js"></script>
		<script src="assets/js/pages/crud/file-upload/dropzonejs.js"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>