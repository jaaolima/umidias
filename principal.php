<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	session_start();
	require_once("Classes/Midia.php");
	require_once("Classes/Usuario.php");

	if ( $_SESSION['autenticado'] !=='validado') {
		header("location: index.php");
		 exit();
   }
   $id_usuario = $_SESSION['id_usuario'];
	$midia = new Midia();
	$usuario = new Usuario();
	$retorno = $midia->listarTipoMidia($_POST);
	$dadosUsuario = $usuario->buscarDadosUsuario($id_usuario);
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
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed subheader-enabled page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->			
			<div class="d-flex flex-row flex-column-fluid page">
				
				<!--incio do sidebar-->				
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto border-right" id="kt_aside" style="margin-top:56px;">
					<!--begin::Aside Menu-->
					<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
						<button class="kt-aside__brand-aside-toggler btn btn-sm px-0 ml-32 position-relative" id="kt_aside_toggle">
							<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="16" cy="16" r="16" fill="#B721FF"/>
								<path d="M18 10L12 16L18 22" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu my-4 scroll ps ps--active-y" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500" style="height: 825px; overflow: hidden;">
							<!--begin::Menu Nav-->
							<ul class="menu-nav nav-pills">
								<li class="menu-item my-4 botao-menu botao-menu-active mr-20 btn ml-5"  aria-haspopup="true">
									<a href="principal.php" class="btn rounded ml-2 text-left  ">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M4 9.3L12.1 3L20.2 9.3V19.2C20.2 19.6774 20.0104 20.1352 19.6728 20.4728C19.3352 20.8104 18.8774 21 18.4 21H5.8C5.32261 21 4.86477 20.8104 4.52721 20.4728C4.18964 20.1352 4 19.6774 4 19.2V9.3Z" fill="none" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="svg-hover svg-active"/>
										</svg>

										<span class="menu-text texto-menu-active texto-menu "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dashboard</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4  mr-20 btn ml-5 botao-menu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="appCliente/listar_tipo.php" class="btn rounded ml-2 text-left  ">
										<svg  width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M17.2 1H2.8C1.80589 1 1 1.80589 1 2.8V11.8C1 12.7941 1.80589 13.6 2.8 13.6H17.2C18.1941 13.6 19 12.7941 19 11.8V2.8C19 1.80589 18.1941 1 17.2 1Z" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="svg-hover"/>
											<path d="M8.20001 17.2H11.8" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="svg-hover"/>
											<path d="M10 13.6V17.2" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="svg-hover"/>
										</svg>
										<span class="menu-text texto-menu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alugar mídia</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4 botao-menu mr-20 btn ml-5" aria-haspopup="true" data-menu-toggle="hover">
									<a href="appCliente/listar_minhas_midias.php" class="btn rounded ml-2 text-left  ">
										<svg  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" >
											<path d="M8 11L11 14L21 4" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="svg-hover"/>
											<path d="M20 12V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21H4C3.46957 21 2.96086 20.7893 2.58579 20.4142C2.21071 20.0391 2 19.5304 2 19V5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H15" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="svg-hover"/>
										</svg>
										<span class="menu-text texto-menu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mídias alugadas</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4 botao-menu mr-20 btn ml-5" aria-haspopup="true" data-menu-toggle="hover">
									<a href="/metronic/demo1/index.html" class="btn rounded ml-2 text-left ">
										<svg  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.9091 3V21" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="svg-hover"/>
											<path d="M16 6.27271H9.86364C9.10415 6.27271 8.37578 6.57441 7.83874 7.11144C7.3017 7.64848 7 8.37686 7 9.13634C7 9.89582 7.3017 10.6242 7.83874 11.1612C8.37578 11.6983 9.10415 12 9.86364 12H13.9545C14.714 12 15.4424 12.3017 15.9794 12.8387C16.5165 13.3758 16.8182 14.1041 16.8182 14.8636C16.8182 15.6231 16.5165 16.3515 15.9794 16.8885C15.4424 17.4255 14.714 17.7273 13.9545 17.7273H7" class="svg-hover" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
 
										<span class="menu-text texto-menu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Financeiro</font></font></span>
									</a>
								</li>
							</ul>
							<div class="position-fixed bottom-0 ml-8 mb-6">
								<div class="ml-2 text-left">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21 11.5C21.0034 12.8199 20.6951 14.1219 20.1 15.3C19.3944 16.7118 18.3098 17.8992 16.9674 18.7293C15.6251 19.5594 14.0782 19.9994 12.5 20C11.1801 20.0035 9.87812 19.6951 8.7 19.1L3 21L4.9 15.3C4.30493 14.1219 3.99656 12.8199 4 11.5C4.00061 9.92179 4.44061 8.37488 5.27072 7.03258C6.10083 5.69028 7.28825 4.6056 8.7 3.90003C9.87812 3.30496 11.1801 2.99659 12.5 3.00003H13C15.0843 3.11502 17.053 3.99479 18.5291 5.47089C20.0052 6.94699 20.885 8.91568 21 11V11.5Z" stroke="#B721FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
									<a href="principal.php" class="menu-text text-primary"><font style="vertical-align: inherit;">Fale conosco</font></a>
								</div>
							</div>							
						</div>
					</div>
					
					<!--end::Aside Menu-->
				</div>
				<div class="navbar py-3 border-bottom">
						<!--begin::Logo-->
						<a href="/metronic/demo1/index.html" class="brand-logo ml-8">
							<img alt="Logo" src="assets/media/logo.png" class="logo-default max-h-25px"  />
						</a>
						<!--end::Logo-->
						<div class=" w-auto btn-clean d-flex align-items-center px-2" id="kt_quick_user_toggle">
							<!--<div class="text-right">
								<span class="text-dark font-weight-bolder font-size-base d-none d-md-inline mr-3">Olá, <?php echo $dadosUsuario['ds_nome'] ?></span><br>
								<span class="text-dark font-weight-bold font-size-base d-flex d-md-inline mr-1"><?php echo $dadosUsuario['ds_email'] ?></span>
							</div>-->
							<a href="javascript:;" class="mr-2 dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M6 9L12 15L18 9" stroke="#B721FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</a>				
							<span class="symbol symbol-lg-35 symbol-circle symbol-25 symbol-light-success">
								<img src="assets/media/maria.jpg" class="symbol-label"alt="">
							</span>		
							<div class="dropdown-menu">
								<a class="dropdown-item" href="appCliente/perfil.php">Minha conta</a>
								<div class="dropdown-divider mx-5"></div>
								<a class="dropdown-item texto-vermelho" href="appUsuario/logout.php">Sair</a>
							</div>												
						</div>
					</div>
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper" style="margin-left: 265px;">
					
					<!--begin::Container-->
					<div class="d-flex flex-row flex-column-fluid ">
						<!--begin::Content Wrapper-->
						<div class="main d-flex flex-column flex-row-fluid">
							<div class="container-fluid d-flex align-items-stretch justify-content-between mt-10" style="padding-right: 30px; padding-left: 40px;">
								<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
									<!--begin::Header Menu-->
									<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
				 						<div class="my-3 d-flex">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M16 2V6" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M8 2V6" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M3 10H21" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
											<p class="mb-0 mt-1 ml-2 texto-chumbo"><?php echo date('d') .' de '.date('F').' de '.date('Y');?></p>
										</div>
									</div>
									<!--end::Header Menu-->
								</div>
								
								
							</div>
							<div class="content flex-column-fluid" id="conteudo">
								<div class="mb-8 ">
									<h1 class="h1-titulo">Dashboard</h1>
								</div>
								<!--begin::Row-->	
								<div class="row">
									<div class="col-xl-12">
										<div class="row">
											<?php if($_SESSION['id_perfil'] == 2  ) :  ?>
												<div class="col-xl-12">
													<!--begin::Tiles Widget 25-->
													<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white" >
														<div class="card-body d-flex">
															<div class="d-flex py-5 flex-column align-items-start flex-grow-1">
																<div class="flex-grow-1" style="display: inherit; ">
																	<span class="svg-icon svg-icon-gray svg-icon-1,5x font-weight-bolder font-size-h3" style="margin-right: 5px; margin-top: -4px;"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-11-19-154210/theme/html/demo8/dist/../src/media/svg/icons/Navigation/Plus.svg--><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill bg-gray" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  >
																		<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
																		</svg><!--end::Svg Icon--></span>
																	<h3 class="titulo-div">Adicione suas mídias</h3>
																</div>
																<div class="row m-0 col-12">
																	<div  class="col-3 bg-white pl-20 py-6 mb-10 mt-7 border-right pr-20" :hover style="text-align: center;">
																		<span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
																			<img class="h-40px" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDI0IDI0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIiBjbGFzcz0iIj48Zz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMi41IDE4aC0yMWMtLjgyNyAwLTEuNS0uNjczLTEuNS0xLjV2LTEyYzAtLjgyNy42NzMtMS41IDEuNS0xLjVoMjFjLjgyNyAwIDEuNS42NzMgMS41IDEuNXYxMmMwIC44MjctLjY3MyAxLjUtMS41IDEuNXptLTIxLTE0Yy0uMjc2IDAtLjUuMjI0LS41LjV2MTJjMCAuMjc2LjIyNC41LjUuNWgyMWMuMjc2IDAgLjUtLjIyNC41LS41di0xMmMwLS4yNzYtLjIyNC0uNS0uNS0uNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMy41IDI0Yy0uMjc2IDAtLjUtLjIyNC0uNS0uNXYtNmMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXY2YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtNS41IDI0Yy0uMjc2IDAtLjUtLjIyNC0uNS0uNXYtNmMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXY2YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMTguNSAyNGMtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTZjMC0uMjc2LjIyNC0uNS41LS41cy41LjIyNC41LjV2NmMwIC4yNzYtLjIyNC41LS41LjV6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTIwLjUgMjRjLS4yNzYgMC0uNS0uMjI0LS41LS41di02YzAtLjI3Ni4yMjQtLjUuNS0uNXMuNS4yMjQuNS41djZjMCAuMjc2LS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im01IDMuNWMtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTIuNWMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXYyLjVjMCAuMjc2LS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im02LjUgMWgtM2MtLjI3NiAwLS41LS4yMjQtLjUtLjVzLjIyNC0uNS41LS41aDNjLjI3NiAwIC41LjIyNC41LjVzLS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0xMiAzLjVjLS4yNzYgMC0uNS0uMjI0LS41LS41di0yLjVjMC0uMjc2LjIyNC0uNS41LS41cy41LjIyNC41LjV2Mi41YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMTMuNSAxaC0zYy0uMjc2IDAtLjUtLjIyNC0uNS0uNXMuMjI0LS41LjUtLjVoM2MuMjc2IDAgLjUuMjI0LjUuNXMtLjIyNC41LS41LjV6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTE5IDMuNWMtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTIuNWMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXYyLjVjMCAuMjc2LS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMC41IDFoLTNjLS4yNzYgMC0uNS0uMjI0LS41LS41cy4yMjQtLjUuNS0uNWgzYy4yNzYgMCAuNS4yMjQuNS41cy0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg==" />
																		</span>
																		<p  class="titulo-midia d-block ">Outdoor</p>
																		<a href="appParceiro/appOutdoor/add_midia.php" class="btn btn-primary" type="button" >Adicionar mídia</a>
																	</div>
																	<div class="col-3 bg-white pl-20 py-6 mb-10 mt-7 border-right pr-20" style="text-align: center;">
																		<span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
																			<img class="h-40px"src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMi4wMDEgNTEyLjAwMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNNDcxLjUxNCwzMTcuMDgxSDQwLjQ4N2MtNC4xNDMsMC03LjUsMy4zNTctNy41LDcuNXMzLjM1OCw3LjUsNy41LDcuNWg0MzEuMDI2YzQuMTQzLDAsNy41LTMuMzU3LDcuNS03LjUgICAgUzQ3NS42NTcsMzE3LjA4MSw0NzEuNTE0LDMxNy4wODF6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+Cgk8L2c+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik00OTEuODg5LDYxLjM0MmgtODguNzMyVjQ2LjM5OGgyMi4yMDZjNS41ODUsMCwxMC4xMy00LjU0NCwxMC4xMy0xMC4xM1YxOS41MDFDNDM1LjQ5Miw4Ljc0OSw0MjYuNzQ0LDAsNDE1Ljk5MSwwICAgIGgtNDAuNjY5Yy0xMC43NTMsMC0xOS41MDEsOC43NDktMTkuNTAxLDE5LjUwMXYxNi44MThjMCw1LjU1Nyw0LjUyMSwxMC4wNzgsMTAuMDc4LDEwLjA3OGgyMi4yNTd2MTQuOTQ0SDI2My41MDFWNDYuMzk4aDIyLjIwNSAgICBjNS41ODUsMCwxMC4xMy00LjU0NCwxMC4xMy0xMC4xM1YxOS41MDFDMjk1LjgzNiw4Ljc0OSwyODcuMDg3LDAsMjc2LjMzNSwwaC00MC42NjljLTEwLjc1MywwLTE5LjUwMSw4Ljc0OS0xOS41MDEsMTkuNTAxdjE2LjgxOCAgICBjMCw1LjU1Nyw0LjUyMSwxMC4wNzgsMTAuMDc4LDEwLjA3OEgyNDguNXYxNC45NDRIMTIzLjg0NVY0Ni4zOThoMjIuMjA1YzUuNTg1LDAsMTAuMTMtNC41NDQsMTAuMTMtMTAuMTNWMTkuNTAxICAgIEMxNTYuMTgsOC43NDksMTQ3LjQzMiwwLDEzNi42NzksMEg5Ni4wMUM4NS4yNTcsMCw3Ni41MDksOC43NDksNzYuNTA5LDE5LjUwMXYxNi44MThjMCw1LjU1Nyw0LjUyMSwxMC4wNzgsMTAuMDc4LDEwLjA3OGgyMi4yNTggICAgdjE0Ljk0NEgyMC4xMTJDOS4wMjMsNjEuMzQyLDAuMDAxLDcwLjM2MywwLjAwMSw4MS40NTN2MzUuNDgxYzAsNC4xNDMsMy4zNTcsNy41LDcuNSw3LjVzNy41LTMuMzU3LDcuNS03LjVWODEuNDUzICAgIGMwLTIuNzcxLDIuMzQtNS4xMSw1LjExLTUuMTFoNDcxLjc3N2MyLjc3MSwwLDUuMTEsMi4zNCw1LjExLDUuMTF2MjA4LjYyNUgxNS4wMDJ2LTEzOC4xNGMwLTQuMTQzLTMuMzU3LTcuNS03LjUtNy41ICAgIGMtNC4xNDIsMC03LjUsMy4zNTctNy41LDcuNXYxNDUuNjQydjQxLjM5NmMwLDExLjA5LDkuMDIyLDIwLjExMSwyMC4xMTEsMjAuMTExaDIwMS4zODR2ODMuOTI1ICAgIGMtMTAuNTk1LDAuMTg0LTE5LjE2LDguODQ2LTE5LjE2LDE5LjQ4NHY3LjUwMWgtMzEuMDkxYy0xMS42OTYsMC0yMS4wMDEsOS41NTctMjEuMDAxLDIxLjAwMiAgICBjMCwxMS41ODEsOS40MjIsMjEuMDAyLDIxLjAwMSwyMS4wMDJoNDAuMjVjNC4xNDMsMCw3LjUtMy4zNTcsNy41LTcuNWMwLTQuMTQzLTMuMzU3LTcuNS03LjUtNy41aC00MC4yNSAgICBjLTMuMjU4LDAtNS45MTctMi42MS01Ljk5OC01Ljg1YzAuMDE4LTAuMzQ4LDAuMDA5LTAuNTI1LDAuMDU5LTAuOTE5YzAuMDU5LTAuNDY5LDAuMTMyLTAuNjcyLDAuMTUzLTAuNzcyICAgIGMwLjY5NS0yLjYyNiwzLjA3NS00LjQ2MSw1Ljc4Ni00LjQ2MWMxOC4yNywwLDE1MC41NzMsMCwxNjkuNTEsMGMyLjcxMSwwLDUuMDksMS44MzQsNS43OTcsNC41MDIgICAgYzAuOTQ4LDQuMDg2LTIuMDY1LDcuNS01Ljc5Nyw3LjVoLTk0LjI1OGMtNC4xNDMsMC03LjUsMy4zNTctNy41LDcuNWMwLDQuMTQzLDMuMzU3LDcuNSw3LjUsNy41aDk0LjI1OCAgICBjMTMuMjcyLDAsMjMuOTg5LTEyLjU3MywyMC4yODYtMjYuMzg2Yy0yLjQzNy05LjE5Ni0xMC43NzktMTUuNjE5LTIwLjI4Ni0xNS42MTloLTMxLjA5MXYtNy41MDEgICAgYzAtMTAuNjM4LTguNTY1LTE5LjI5OS0xOS4xNi0xOS40ODRWNDE4LjU0YzAtNC4xNDMtMy4zNTctNy41LTcuNS03LjVzLTcuNSwzLjM1Ny03LjUsNy41djI0LjQ1M2gtMzkuMDA2di04My45MDdoMzkuMDA2djI0LjQ1MiAgICBjMCw0LjE0MywzLjM1Nyw3LjUsNy41LDcuNXM3LjUtMy4zNTcsNy41LTcuNXYtMjQuNDUyaDIwMS4zODRjMTEuMDksMCwyMC4xMTEtOS4wMjIsMjAuMTExLTIwLjExMWMwLTEyLjA3NSwwLTI0NS4yMDYsMC0yNTcuNTIxICAgIEM1MTIuMDAxLDcwLjM2Myw1MDIuOTc4LDYxLjM0Miw0OTEuODg5LDYxLjM0MnogTTkxLjUxLDMxLjM5NlYxOS41MDFjMC0yLjQ0LDIuMDYxLTQuNSw0LjUtNC41aDQwLjY2OWMyLjQzOSwwLDQuNSwyLjA2MSw0LjUsNC41ICAgIHYxMS44OTVIOTEuNTF6IE0yMzEuMTY1LDMxLjM5NlYxOS41MDFjMC0yLjQ0LDIuMDYxLTQuNSw0LjUtNC41aDQwLjY2OWMyLjQ0LDAsNC41LDIuMDYxLDQuNSw0LjV2MTEuODk1SDIzMS4xNjV6ICAgICBNMzcwLjgyMiwzMS4zOTZWMTkuNTAxYzAtMi40NCwyLjA2MS00LjUsNC41LTQuNWg0MC42NjljMi40MzksMCw0LjUsMi4wNjEsNC41LDQuNXYxMS44OTVIMzcwLjgyMnogTTI5MC4xNjUsNDU3Ljk5NCAgICBjMi40MzksMCw0LjUsMi4wNjEsNC41LDQuNXY3LjUwMWgtNzcuMzI3di03LjUwMWMwLTIuNDM5LDIuMDYxLTQuNSw0LjUtNC41QzIzNS43MjcsNDU3Ljk5NCwyNzYuMTY3LDQ1Ny45OTQsMjkwLjE2NSw0NTcuOTk0eiAgICAgTTQ5Ny4wMDEsMzM4Ljk3NEg0OTdjMCwyLjc3MS0yLjM0LDUuMTEtNS4xMSw1LjExYy0xNS4zNjQsMC00NTUuMTIxLDAtNDcxLjc3NywwYy0yLjc3MSwwLTUuMTEtMi4zNC01LjExLTUuMTF2LTMzLjg5NWg0ODEuOTk4ICAgIFYzMzguOTc0eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
																		</span>
																		<p  class="titulo-midia d-block ">Front-Light</p>
																		<a href="appParceiro/appOutdoor/add_midia.php" class="btn btn-primary" type="button" >Adicionar mídia</a>
																	</div>
																	<div class="col-3 bg-white pl-20 py-6 mb-10 mt-7 border-right pr-20" style="text-align: center;">
																		<span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
																			<img class="h-40px"src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ4MC4zMiA0ODAuMzIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTQ4MCAyNzIuMDcxdjk5LjMyM2MwIDQuNDE4LTMuNTgyIDgtOCA4aC0xOWMtNC40MTggMC04LTMuNTgyLTgtOHMzLjU4Mi04IDgtOGgxMXYtOTEuMzIzYzAtMTIuNzY5LTYuMTU3LTI0Ljg2My0xNi40Ny0zMi4zNS0zMC42MjQtMjIuMjMyLTg5LjQ2MS01NS42NDktMTYyLjUwMy01MS44NDVsNS4yMDkgNDAuMTA5Yy41NjkgNC4zODEtMi41MjIgOC4zOTUtNi45MDMgOC45NjQtNC4zODMuNTY5LTguMzk1LTIuNTIzLTguOTY0LTYuOTAzbC01LjI5My00MC43NTVjLTQ3LjE4MSA1LjkxMy05MS4zMyAyNi41OTYtMTI4LjE0IDYwLjE5OWgyMDIuMTI1YzEyLjE0OCAwIDIzLjQ5My01LjQyMSAzMS4xMjQtMTQuODc0IDIuNzc1LTMuNDM4IDcuODEyLTMuOTc1IDExLjI1LTEuMnMzLjk3NSA3LjgxMiAxLjIgMTEuMjVjLTEwLjY4MyAxMy4yMzQtMjYuNTY1IDIwLjgyNC00My41NzMgMjAuODI0aC0yMjAuNDg2bC04OC45OTkgMjQuNzIyYy0xMC4zNDkgMi44NzUtMTcuNTc3IDEyLjM4NC0xNy41NzcgMjMuMTI1djQ3Ljk1OGgxMmM0LjQxOCAwIDggMy41ODIgOCA4cy0zLjU4MiA4LTggOGgtMjBjLTQuNDE4IDAtOC0zLjU4Mi04LTh2LTU1Ljk1OGMwLTE3LjkwMSAxMi4wNDYtMzMuNzUgMjkuMjk0LTM4LjU0MWw4Ny44MDYtMjQuMzkxYzg3LjE0NS05MS4wMTQgMjIyLjQzMy0xMDguODYgMzM5LjgyOS0yMy42MzIgMTQuNDQ2IDEwLjQ4OCAyMy4wNzEgMjcuNDIxIDIzLjA3MSA0NS4yOTh6bS0zMTUgOTcuNDE5YzAgMzAuODc4LTI1LjEyMiA1Ni01NiA1NnMtNTYtMjUuMTIyLTU2LTU2IDI1LjEyMi01NiA1Ni01NiA1NiAyNS4xMjIgNTYgNTZ6bS0xNiAwYzAtMjIuMDU2LTE3Ljk0NC00MC00MC00MHMtNDAgMTcuOTQ0LTQwIDQwIDE3Ljk0NCA0MCA0MCA0MCA0MC0xNy45NDMgNDAtNDB6bTI3OCAwYzAgMzAuODc4LTI1LjEyMiA1Ni01NiA1NnMtNTYtMjUuMTIyLTU2LTU2IDI1LjEyMi01NiA1Ni01NiA1NiAyNS4xMjIgNTYgNTZ6bS0xNiAwYzAtMjIuMDU2LTE3Ljk0NC00MC00MC00MHMtNDAgMTcuOTQ0LTQwIDQwIDE3Ljk0NCA0MCA0MCA0MCA0MC0xNy45NDMgNDAtNDB6bS0xMTgtNmgtMTAzYy00LjQxOCAwLTggMy41ODItOCA4czMuNTgyIDggOCA4aDEwM2M0LjQxOCAwIDgtMy41ODIgOC04cy0zLjU4Mi04LTgtOHptMTI5LjEwNy0yMjUuMjQ1YzkuMzU3IDkuMzU3IDIuODExIDI1LjYwNi0xMC42MDcgMjUuNjA2LTEzLjI2MiAwLTIwLjA2Mi0xNi4xNTEtMTAuNjA3LTI1LjYwNiAyLjgzNC0yLjgzMyA2LjYwMS00LjM5NCAxMC42MDctNC4zOTQgNi43MzguMDAxIDEwLjYwNyA0LjM5NCAxMC42MDcgNC4zOTR6bTI2LjE2My0xNC44NDljMy4xMjUtMy4xMjQgMy4xMjUtOC4xOSAwLTExLjMxNC0yMC4zMjMtMjAuMzIzLTUzLjIxNS0yMC4zMjQtNzMuNTM5IDAtMy4xMjUgMy4xMjQtMy4xMjUgOC4xODkgMCAxMS4zMTQgMy4xMjQgMy4xMjQgOC4xODkgMy4xMjQgMTEuMzEzIDAgMTQuMDctMTQuMDcgMzYuODQtMTQuMDcxIDUwLjkxMiAwIDMuMTI0IDMuMTI0IDguMTg5IDMuMTI0IDExLjMxNCAwem0tOTEuOTI0LTI5LjY5OWMzMC40ODQtMzAuNDg0IDc5LjgyMi0zMC40ODYgMTEwLjMwOSAwIDEuNTYyIDEuNTYyIDMuNjA5IDIuMzQzIDUuNjU3IDIuMzQzIDcuMDYzIDAgMTAuNzExLTguNjAzIDUuNjU3LTEzLjY1Ny0zNi43MzctMzYuNzM2LTk2LjE5Ny0zNi43NC0xMzIuOTM2IDAtMy4xMjUgMy4xMjQtMy4xMjUgOC4xODkgMCAxMS4zMTQgMy4xMjMgMy4xMjUgOC4xODkgMy4xMjUgMTEuMzEzIDB6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PC9nPjwvc3ZnPg==" />
																		</span>
																		<p  class="titulo-midia d-block ">Carro de Som</p>
																		<a href="appParceiro/appOutdoor/add_midia.php" class="btn btn-primary" type="button" >Adicionar mídia</a>
																	</div>
																	<div class="col-3 bg-white pl-20 py-6 mb-10 mt-7 pr-20" style="text-align: center;" >
																		<span class="svg-icon svg-icon-3x svg-icon-white d-block my-2" >
																			<img class="h-40px" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPGc+CgkJCTxwYXRoIGQ9Ik00NzguOTY4LDI4MC43NzRoLTc0LjMyM3YtNDkuNTQ4aDkwLjgzOVY4Mi41ODFoLTgyLjU4MVY0OS41NDhoNDkuNTQ4VjMwLjUzTDQ0Mi4wOTYsMGgtNzQuOTAxTDM0Ni44NCwzMC41M3YxOS4wMTggICAgIGg0OS41NDh2MzMuMDMySDI2NC4yNThWNDkuNTQ4aDQ5LjU0OFYzMC41M0wyOTMuNDUxLDBIMjE4LjU1bC0yMC4zNTcsMzAuNTN2MTkuMDE4aDQ5LjU0OHYzMy4wMzJIMTE1LjYxM1Y0OS41NDhoNDkuNTQ4VjMwLjUzICAgICBMMTQ0LjgwNSwwaC03NC45TDQ5LjU0OCwzMC41M3YxOS4wMThoNDkuNTQ4djMzLjAzMkgxNi41MTZ2MTQ4LjY0NWg5MC44Mzl2NDkuNTQ4SDMzLjAzMkMxNC44MTUsMjgwLjc3NCwwLDI5NS41ODksMCwzMTMuODA2ICAgICBzMTQuODE1LDMzLjAzMiwzMy4wMzIsMzMuMDMyVjUxMmg0NDUuOTM1VjM0Ni44MzljMTguMjE3LDAsMzMuMDMyLTE0LjgxNSwzMy4wMzItMzMuMDMyUzQ5Ny4xODUsMjgwLjc3NCw0NzguOTY4LDI4MC43NzR6ICAgICAgTTM2NS4wMTYsMzMuMDMybDExLjAxNi0xNi41MTZoNTcuMjI4bDExLjAwOCwxNi41MTZIMzY1LjAxNnogTTIxNi4zNywzMy4wMzJsMTEuMDE2LTE2LjUxNmg1Ny4yMjhsMTEuMDA4LDE2LjUxNkgyMTYuMzd6ICAgICAgTTY3LjczMywzMy4wMzJMNzguNzQsMTYuNTE2aDU3LjIyOWwxMS4wMDgsMTYuNTE2SDY3LjczM3ogTTMzLjAzMiwyMTQuNzFWOTkuMDk3aDQ0NS45MzVWMjE0LjcxSDMzLjAzMnogTTM4OC4xMjksMjMxLjIyNiAgICAgdjQ5LjU0OGgtMzMuMDMydi00OS41NDhIMzg4LjEyOXogTTMzOC41ODEsMjMxLjIyNnY0OS41NDhIMTczLjQydi00OS41NDhIMzM4LjU4MXogTTE1Ni45MDQsMjMxLjIyNnY0OS41NDhoLTMzLjAzMnYtNDkuNTQ4ICAgICBIMTU2LjkwNHogTTI0Ny43NDIsNDk1LjQ4NGgtNDkuNTQ4di01Ny44MDdjMC0yOS4wNiwyMS41NzgtNTMuMTE2LDQ5LjU0OC01Ny4xNDZWNDk1LjQ4NHogTTMxMy44MDYsNDk1LjQ4NGgtNDkuNTQ4VjM4MC41MzIgICAgIGMyNy45NzEsNC4wMyw0OS41NDgsMjguMDg2LDQ5LjU0OCw1Ny4xNDZWNDk1LjQ4NHogTTQ2Mi40NTIsNDk1LjQ4NEgzMzAuMzIzdi01Ny44MDdjMC00MC45ODUtMzMuMzQ2LTc0LjMyMy03NC4zMjMtNzQuMzIzICAgICBzLTc0LjMyMywzMy4zMzgtNzQuMzIzLDc0LjMyM3Y1Ny44MDdINDkuNTQ4VjM0Ni44MzloNDEyLjkwNFY0OTUuNDg0eiBNNDc4Ljk2OCwzMzAuMzIzSDMzLjAzMiAgICAgYy05LjEwOCwwLTE2LjUxNi03LjQwNy0xNi41MTYtMTYuNTE2czcuNDA4LTE2LjUxNiwxNi41MTYtMTYuNTE2aDQ0NS45MzVjOS4xMDksMCwxNi41MTYsNy40MDcsMTYuNTE2LDE2LjUxNiAgICAgUzQ4OC4wNzcsMzMwLjMyMyw0NzguOTY4LDMzMC4zMjN6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+CgkJCTxwYXRoIGQ9Ik02Ni4wNjUsMTk4LjE5NGg5OS4wOTd2LTgyLjU4MUg2Ni4wNjVWMTk4LjE5NHogTTgyLjU4MSwxMzIuMTI5aDY2LjA2NXY0OS41NDhIODIuNTgxVjEzMi4xMjl6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+CgkJCTxyZWN0IHg9IjIxNC43MDUiIHk9IjExNS42MDkiIHdpZHRoPSIyMzEuMjI2IiBoZWlnaHQ9IjE2LjUxMiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9yZWN0PgoJCQk8cmVjdCB4PSIxODEuNjczIiB5PSIxMTUuNjA5IiB3aWR0aD0iMTYuNTEyIiBoZWlnaHQ9IjE2LjUxMiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9yZWN0PgoJCQk8cmVjdCB4PSIxODEuNjczIiB5PSIxNDguNjQxIiB3aWR0aD0iMjY0LjI1OCIgaGVpZ2h0PSIxNi41MTIiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcmVjdD4KCQkJPHJlY3QgeD0iMTgxLjY3MyIgeT0iMTgxLjY3MyIgd2lkdGg9IjIzMS4yMjYiIGhlaWdodD0iMTYuNTEyIiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3JlY3Q+CgkJCTxyZWN0IHg9IjQyOS40MTkiIHk9IjE4MS42NzMiIHdpZHRoPSIxNi41MTIiIGhlaWdodD0iMTYuNTEyIiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3JlY3Q+CgkJCTxwYXRoIGQ9Ik00NDUuOTM1LDM2My4zNTVoLTk5LjA5N3Y4Mi41ODFoOTkuMDk3VjM2My4zNTV6IE0zODguMTI5LDQyOS40MTloLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NVY0MjkuNDE5eiBNMzg4LjEyOSwzOTYuMzg3ICAgICBoLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NVYzOTYuMzg3eiBNNDA0LjY0NSwzNzkuODcxaDI0Ljc3NXYxNi41MTZoLTI0Ljc3NVYzNzkuODcxeiBNNDI5LjQyLDQyOS40MTloLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NSAgICAgVjQyOS40MTl6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+CgkJCTxwYXRoIGQ9Ik0xNjUuMTYxLDM2My4zNTVINjYuMDY1djgyLjU4MWg5OS4wOTdWMzYzLjM1NXogTTEwNy4zNTUsNDI5LjQxOUg4Mi41ODF2LTE2LjUxNmgyNC43NzVWNDI5LjQxOXogTTEwNy4zNTUsMzk2LjM4NyAgICAgSDgyLjU4MXYtMTYuNTE2aDI0Ljc3NVYzOTYuMzg3eiBNMTIzLjg3MSwzNzkuODcxaDI0Ljc3NXYxNi41MTZoLTI0Ljc3NVYzNzkuODcxeiBNMTQ4LjY0Niw0MjkuNDE5aC0yNC43NzV2LTE2LjUxNmgyNC43NzUgICAgIFY0MjkuNDE5eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJCTwvZz4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
																		</span>
																		<p  class="titulo-midia d-block ">Empena</p>
																		<a href="appParceiro/appOutdoor/add_midia.php" class="btn btn-primary" type="button" >Adicionar mídia</a>
																	</div>
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
																		/*$penultimo = $dados[ count($dados) - 2  ];								
																		$borda = if($penultimo = $dados){echo 'border-right'};*/
																		$tamanho = 100/ $valor;
																		
																			echo '<div class="bg-white pl-20 py-6 mb-10 mt-7  pr-20" style="text-align: center; width:'.$tamanho.'% ;">
																						<span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
																							<svg width="50" height="46" viewBox="0 0 50 46" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M44.2 1H5.8C3.14903 1 1 3.14903 1 5.8V29.8C1 32.451 3.14903 34.6 5.8 34.6H44.2C46.851 34.6 49 32.451 49 29.8V5.8C49 3.14903 46.851 1 44.2 1Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																								<path d="M20.2 44.2H29.8" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																								<path d="M25 34.6001V44.2001" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																							</svg>
																						</span>
																						<p  class="titulo-midia d-block ">'.$dados["ds_nome"].'</p>
																						<a href="appCliente/appOutdoor/listar_midia.php" class="btn btn-primary" type="button" >Alugar mídia</a>
																					</div>';

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
																		<th></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<div class="d-flex">
																				<span class="symbol symbol-lg-50 symbol-circle symbol-40 symbol-light-success">
																					<span class="symbol-label font-size-h5 font-weight-bold">P</span>
																				</span>
																				<div class="ml-3 mt-2">
																					<span class="texto-negrito">Outdoor</span><br>																				
																					<svg class="mr-1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<g clip-path="url(#clip0)">
																						<path d="M14 6.66675C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66675C2 5.07545 2.63214 3.54933 3.75736 2.42411C4.88258 1.29889 6.4087 0.666748 8 0.666748C9.5913 0.666748 11.1174 1.29889 12.2426 2.42411C13.3679 3.54933 14 5.07545 14 6.66675Z" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																						<path d="M8 8.66675C9.10457 8.66675 10 7.77132 10 6.66675C10 5.56218 9.10457 4.66675 8 4.66675C6.89543 4.66675 6 5.56218 6 6.66675C6 7.77132 6.89543 8.66675 8 8.66675Z" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																						</g>
																						<defs>
																						<clipPath id="clip0">
																						<rect width="16" height="16" fill="white"/>
																						</clipPath>
																						</defs>
																					</svg>
																					<span>Taguatinga Centro</span>	
																				</div>
																			</div>
																		</td>
																		<td class="py-8">21/01/2021</td>
																		<td class="py-8">21/01/2021</td>
																		<td class="py-8">00,00 RS</td>
																		<td class="py-8"><a href="appCliente/ver_minha_midia.php">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M5 12H19" stroke="#B721FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																				<path d="M12 5L19 12L12 19" stroke="#B721FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																			</svg>
																		</a></td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex">
																				<span class="symbol symbol-lg-50 symbol-circle symbol-40 symbol-light-success">
																					<span class="symbol-label font-size-h5 font-weight-bold">P</span>
																				</span>
																				<div class="ml-3 mt-2">
																					<span class="texto-negrito">Outdoor</span><br>																				
																					<svg class="mr-1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<g clip-path="url(#clip0)">
																						<path d="M14 6.66675C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66675C2 5.07545 2.63214 3.54933 3.75736 2.42411C4.88258 1.29889 6.4087 0.666748 8 0.666748C9.5913 0.666748 11.1174 1.29889 12.2426 2.42411C13.3679 3.54933 14 5.07545 14 6.66675Z" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																						<path d="M8 8.66675C9.10457 8.66675 10 7.77132 10 6.66675C10 5.56218 9.10457 4.66675 8 4.66675C6.89543 4.66675 6 5.56218 6 6.66675C6 7.77132 6.89543 8.66675 8 8.66675Z" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																						</g>
																						<defs>
																						<clipPath id="clip0">
																						<rect width="16" height="16" fill="white"/>
																						</clipPath>
																						</defs>
																					</svg>
																					<span>Taguatinga Centro</span>	
																				</div>
																			</div>
																		</td>
																		<td class="py-8">21/01/2021</td>
																		<td class="py-8">21/01/2021</td>
																		<td class="py-8">00,00 RS</td>
																		<td class="py-8"><a href="appCliente/ver_minha_midia.php">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M5 12H19" stroke="#B721FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																				<path d="M12 5L19 12L12 19" stroke="#B721FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																			</svg>
																		</a></td>
																	</tr>
																	
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
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>