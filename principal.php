<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	session_start();

	if ( $_SESSION['autenticado'] !=='validado') {
		header("location: index.php");
		 exit();
   }
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
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto menu-overlay" id="kt_aside">
					<!--begin::Brand-->
					<div class="brand flex-column-auto ml-7 mt-10 " id="kt_brand" kt-hidden-height="65" style="">
						<!--begin::Logo-->
						<a href="/metronic/demo1/index.html" class="brand-logo">
							<img alt="Logo" src="assets/media/logo.png" class="logo-default max-h-25px"  />
						</a>
						<!--end::Logo-->
						<!--begin::Toggle-->
						<button class="brand-toggle btn btn-sm px-0 ml-25 menu-close" id="kt_aside_toggle">
							<i class="fas fa-chevron-circle-left text-primary icon-2x"></i>
						</button>
						<!--end::Toolbar-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside Menu-->
					<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu my-4 scroll ps ps--active-y" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500" style="height: 825px; overflow: hidden;">
							<!--begin::Menu Nav-->
							<ul class="menu-nav nav-pills">
								<li class="menu-item my-4 botao-menu botao-menu-active mr-20 btn ml-5"  aria-haspopup="true">
									<a href="principal.php" class="btn rounded ml-2 text-left">
										<i class="fas fa-home texto-menu"></i>
										<span class="menu-text texto-menu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dashboard</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4  mr-20 btn ml-5 botao-menu" aria-haspopup="true">
									<a href="appCliente/listar_tipo.php" class="btn rounded ml-2 text-left ">
										<i class="fas fa-book texto-menu"></i>
										<span class="menu-text texto-menu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alugar mídia</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4 botao-menu mr-20 btn ml-5" aria-haspopup="true">
									<a href="appCliente/listar_minhas_midias.php" class="btn rounded ml-2 text-left">
										<i class="fas fa-book texto-menu"></i>
										<span class="menu-text texto-menu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mídias alugadas</font></font></span>
									</a>
								</li>
								<li class="menu-item my-4 botao-menu mr-20 btn ml-5" aria-haspopup="true">
									<a href="/metronic/demo1/index.html" class="btn rounded ml-2 text-left">
										<i class="fas fa-dollar-sign texto-menu"></i>
										<span class="menu-text texto-menu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Financeiro</font></font></span>
									</a>
								</li>
							</ul>
							<div href="/metronic/demo1/index.html" class="btn rounded ml-2 text-left">
								<i class="fas fa-phone-alt texto-menu text-primary"></i>
								<a href="" class="menu-text tExt-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fale conosco</font></font></a href="">
							</div>
						</div>
					</div>
					<!--end::Aside Menu-->
				</div>
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					
					<!--begin::Container-->
					<div class="d-flex flex-row flex-column-fluid ">
						<!--begin::Content Wrapper-->
						<div class="main d-flex flex-column flex-row-fluid">
							<div class="container-fluid d-flex align-items-stretch justify-content-between mt-10" style="padding-right: 30px;">
								<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
									<!--begin::Header Menu-->
									<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
										<a href="#" class="btn btn-light-primary btn-sm font-weight-bold mr-2" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="" data-placement="left" data-original-title="Select dashboard daterange">
											<span class="opacity-60 font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Today</span>
											<span class="font-weight-bold" id="kt_dashboard_daterangepicker_date">Aug 16</span>
										</a>
									</div>
									<!--end::Header Menu-->
								</div>
								<div class="topbar">
									<div class="topbar-item">
										<div class=" w-auto btn-clean d-flex align-items-center px-2" id="kt_quick_user_toggle">
											<span class="text-dark font-weight-bold font-size-base d-none d-md-inline mr-1">Olá,</span>
											<span class="text-dark font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>
											<span class="symbol symbol-lg-35 symbol-circle symbol-25 symbol-light-success">
												<span class="symbol-label font-size-h5 font-weight-bold">S</span>
											</span>
											<a href="" class="ml-3">
												<i class="fas fa-angle-down text-primary"></i>
											</a>
										</div>
									</div>
									
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
											<?php /* if($_SESSION['id_perfil'] == 2 || $_SESSION['id_perfil'] == 3 ) :  ?>
												<div class="col-xl-6">
													<!--begin::Tiles Widget 21-->
													<div class="card card-custom wave wave-animate-slow wave-primary gutter-b" style="height: 300px">
														<!--begin::Body-->
														<div class="card-body d-flex flex-column p-0">
															<!--begin::Stats-->
															<div class="flex-grow-1 card-spacer pb-0">	
																<div class="font-weight-boldest font-size-h1 pt-2">10.000</div>
																<div class="font-size-h4 font-weight-bolder">Alcance</div>
																<div class="text-muted font-weight-bold">Semanal</div>
																
															</div>
														</div>
														<!--end::Body-->
													</div>
													<!--end::Tiles Widget 21-->
												</div>
											<?php endif; */?>	
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
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2">
																			<img class="h-30px" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDI0IDI0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIiBjbGFzcz0iIj48Zz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMi41IDE4aC0yMWMtLjgyNyAwLTEuNS0uNjczLTEuNS0xLjV2LTEyYzAtLjgyNy42NzMtMS41IDEuNS0xLjVoMjFjLjgyNyAwIDEuNS42NzMgMS41IDEuNXYxMmMwIC44MjctLjY3MyAxLjUtMS41IDEuNXptLTIxLTE0Yy0uMjc2IDAtLjUuMjI0LS41LjV2MTJjMCAuMjc2LjIyNC41LjUuNWgyMWMuMjc2IDAgLjUtLjIyNC41LS41di0xMmMwLS4yNzYtLjIyNC0uNS0uNS0uNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMy41IDI0Yy0uMjc2IDAtLjUtLjIyNC0uNS0uNXYtNmMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXY2YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtNS41IDI0Yy0uMjc2IDAtLjUtLjIyNC0uNS0uNXYtNmMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXY2YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMTguNSAyNGMtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTZjMC0uMjc2LjIyNC0uNS41LS41cy41LjIyNC41LjV2NmMwIC4yNzYtLjIyNC41LS41LjV6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTIwLjUgMjRjLS4yNzYgMC0uNS0uMjI0LS41LS41di02YzAtLjI3Ni4yMjQtLjUuNS0uNXMuNS4yMjQuNS41djZjMCAuMjc2LS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im01IDMuNWMtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTIuNWMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXYyLjVjMCAuMjc2LS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im02LjUgMWgtM2MtLjI3NiAwLS41LS4yMjQtLjUtLjVzLjIyNC0uNS41LS41aDNjLjI3NiAwIC41LjIyNC41LjVzLS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0xMiAzLjVjLS4yNzYgMC0uNS0uMjI0LS41LS41di0yLjVjMC0uMjc2LjIyNC0uNS41LS41cy41LjIyNC41LjV2Mi41YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMTMuNSAxaC0zYy0uMjc2IDAtLjUtLjIyNC0uNS0uNXMuMjI0LS41LjUtLjVoM2MuMjc2IDAgLjUuMjI0LjUuNXMtLjIyNC41LS41LjV6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTE5IDMuNWMtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTIuNWMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXYyLjVjMCAuMjc2LS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMC41IDFoLTNjLS4yNzYgMC0uNS0uMjI0LS41LS41cy4yMjQtLjUuNS0uNWgzYy4yNzYgMCAuNS4yMjQuNS41cy0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg==" />
																		</span>
																		<p  class="titulo-midia d-block ">Outdoor</p>
																		<a href="appParceiro/appOutdoor/add_midia.php" class="btn btn-primary" type="button" >Adicionar mídia</a>
																	</div>
																	<div class="col-3 bg-white pl-20 py-6 mb-10 mt-7 border-right pr-20" style="text-align: center;">
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2">
																			<img class="h-30px"src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMi4wMDEgNTEyLjAwMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNNDcxLjUxNCwzMTcuMDgxSDQwLjQ4N2MtNC4xNDMsMC03LjUsMy4zNTctNy41LDcuNXMzLjM1OCw3LjUsNy41LDcuNWg0MzEuMDI2YzQuMTQzLDAsNy41LTMuMzU3LDcuNS03LjUgICAgUzQ3NS42NTcsMzE3LjA4MSw0NzEuNTE0LDMxNy4wODF6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+Cgk8L2c+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik00OTEuODg5LDYxLjM0MmgtODguNzMyVjQ2LjM5OGgyMi4yMDZjNS41ODUsMCwxMC4xMy00LjU0NCwxMC4xMy0xMC4xM1YxOS41MDFDNDM1LjQ5Miw4Ljc0OSw0MjYuNzQ0LDAsNDE1Ljk5MSwwICAgIGgtNDAuNjY5Yy0xMC43NTMsMC0xOS41MDEsOC43NDktMTkuNTAxLDE5LjUwMXYxNi44MThjMCw1LjU1Nyw0LjUyMSwxMC4wNzgsMTAuMDc4LDEwLjA3OGgyMi4yNTd2MTQuOTQ0SDI2My41MDFWNDYuMzk4aDIyLjIwNSAgICBjNS41ODUsMCwxMC4xMy00LjU0NCwxMC4xMy0xMC4xM1YxOS41MDFDMjk1LjgzNiw4Ljc0OSwyODcuMDg3LDAsMjc2LjMzNSwwaC00MC42NjljLTEwLjc1MywwLTE5LjUwMSw4Ljc0OS0xOS41MDEsMTkuNTAxdjE2LjgxOCAgICBjMCw1LjU1Nyw0LjUyMSwxMC4wNzgsMTAuMDc4LDEwLjA3OEgyNDguNXYxNC45NDRIMTIzLjg0NVY0Ni4zOThoMjIuMjA1YzUuNTg1LDAsMTAuMTMtNC41NDQsMTAuMTMtMTAuMTNWMTkuNTAxICAgIEMxNTYuMTgsOC43NDksMTQ3LjQzMiwwLDEzNi42NzksMEg5Ni4wMUM4NS4yNTcsMCw3Ni41MDksOC43NDksNzYuNTA5LDE5LjUwMXYxNi44MThjMCw1LjU1Nyw0LjUyMSwxMC4wNzgsMTAuMDc4LDEwLjA3OGgyMi4yNTggICAgdjE0Ljk0NEgyMC4xMTJDOS4wMjMsNjEuMzQyLDAuMDAxLDcwLjM2MywwLjAwMSw4MS40NTN2MzUuNDgxYzAsNC4xNDMsMy4zNTcsNy41LDcuNSw3LjVzNy41LTMuMzU3LDcuNS03LjVWODEuNDUzICAgIGMwLTIuNzcxLDIuMzQtNS4xMSw1LjExLTUuMTFoNDcxLjc3N2MyLjc3MSwwLDUuMTEsMi4zNCw1LjExLDUuMTF2MjA4LjYyNUgxNS4wMDJ2LTEzOC4xNGMwLTQuMTQzLTMuMzU3LTcuNS03LjUtNy41ICAgIGMtNC4xNDIsMC03LjUsMy4zNTctNy41LDcuNXYxNDUuNjQydjQxLjM5NmMwLDExLjA5LDkuMDIyLDIwLjExMSwyMC4xMTEsMjAuMTExaDIwMS4zODR2ODMuOTI1ICAgIGMtMTAuNTk1LDAuMTg0LTE5LjE2LDguODQ2LTE5LjE2LDE5LjQ4NHY3LjUwMWgtMzEuMDkxYy0xMS42OTYsMC0yMS4wMDEsOS41NTctMjEuMDAxLDIxLjAwMiAgICBjMCwxMS41ODEsOS40MjIsMjEuMDAyLDIxLjAwMSwyMS4wMDJoNDAuMjVjNC4xNDMsMCw3LjUtMy4zNTcsNy41LTcuNWMwLTQuMTQzLTMuMzU3LTcuNS03LjUtNy41aC00MC4yNSAgICBjLTMuMjU4LDAtNS45MTctMi42MS01Ljk5OC01Ljg1YzAuMDE4LTAuMzQ4LDAuMDA5LTAuNTI1LDAuMDU5LTAuOTE5YzAuMDU5LTAuNDY5LDAuMTMyLTAuNjcyLDAuMTUzLTAuNzcyICAgIGMwLjY5NS0yLjYyNiwzLjA3NS00LjQ2MSw1Ljc4Ni00LjQ2MWMxOC4yNywwLDE1MC41NzMsMCwxNjkuNTEsMGMyLjcxMSwwLDUuMDksMS44MzQsNS43OTcsNC41MDIgICAgYzAuOTQ4LDQuMDg2LTIuMDY1LDcuNS01Ljc5Nyw3LjVoLTk0LjI1OGMtNC4xNDMsMC03LjUsMy4zNTctNy41LDcuNWMwLDQuMTQzLDMuMzU3LDcuNSw3LjUsNy41aDk0LjI1OCAgICBjMTMuMjcyLDAsMjMuOTg5LTEyLjU3MywyMC4yODYtMjYuMzg2Yy0yLjQzNy05LjE5Ni0xMC43NzktMTUuNjE5LTIwLjI4Ni0xNS42MTloLTMxLjA5MXYtNy41MDEgICAgYzAtMTAuNjM4LTguNTY1LTE5LjI5OS0xOS4xNi0xOS40ODRWNDE4LjU0YzAtNC4xNDMtMy4zNTctNy41LTcuNS03LjVzLTcuNSwzLjM1Ny03LjUsNy41djI0LjQ1M2gtMzkuMDA2di04My45MDdoMzkuMDA2djI0LjQ1MiAgICBjMCw0LjE0MywzLjM1Nyw3LjUsNy41LDcuNXM3LjUtMy4zNTcsNy41LTcuNXYtMjQuNDUyaDIwMS4zODRjMTEuMDksMCwyMC4xMTEtOS4wMjIsMjAuMTExLTIwLjExMWMwLTEyLjA3NSwwLTI0NS4yMDYsMC0yNTcuNTIxICAgIEM1MTIuMDAxLDcwLjM2Myw1MDIuOTc4LDYxLjM0Miw0OTEuODg5LDYxLjM0MnogTTkxLjUxLDMxLjM5NlYxOS41MDFjMC0yLjQ0LDIuMDYxLTQuNSw0LjUtNC41aDQwLjY2OWMyLjQzOSwwLDQuNSwyLjA2MSw0LjUsNC41ICAgIHYxMS44OTVIOTEuNTF6IE0yMzEuMTY1LDMxLjM5NlYxOS41MDFjMC0yLjQ0LDIuMDYxLTQuNSw0LjUtNC41aDQwLjY2OWMyLjQ0LDAsNC41LDIuMDYxLDQuNSw0LjV2MTEuODk1SDIzMS4xNjV6ICAgICBNMzcwLjgyMiwzMS4zOTZWMTkuNTAxYzAtMi40NCwyLjA2MS00LjUsNC41LTQuNWg0MC42NjljMi40MzksMCw0LjUsMi4wNjEsNC41LDQuNXYxMS44OTVIMzcwLjgyMnogTTI5MC4xNjUsNDU3Ljk5NCAgICBjMi40MzksMCw0LjUsMi4wNjEsNC41LDQuNXY3LjUwMWgtNzcuMzI3di03LjUwMWMwLTIuNDM5LDIuMDYxLTQuNSw0LjUtNC41QzIzNS43MjcsNDU3Ljk5NCwyNzYuMTY3LDQ1Ny45OTQsMjkwLjE2NSw0NTcuOTk0eiAgICAgTTQ5Ny4wMDEsMzM4Ljk3NEg0OTdjMCwyLjc3MS0yLjM0LDUuMTEtNS4xMSw1LjExYy0xNS4zNjQsMC00NTUuMTIxLDAtNDcxLjc3NywwYy0yLjc3MSwwLTUuMTEtMi4zNC01LjExLTUuMTF2LTMzLjg5NWg0ODEuOTk4ICAgIFYzMzguOTc0eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
																		</span>
																		<p  class="titulo-midia d-block ">Front-Light</p>
																		<a href="appParceiro/appOutdoor/add_midia.php" class="btn btn-primary" type="button" >Adicionar mídia</a>
																	</div>
																	<div class="col-3 bg-white pl-20 py-6 mb-10 mt-7 border-right pr-20" style="text-align: center;">
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2">
																			<img class="h-30px"src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ4MC4zMiA0ODAuMzIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTQ4MCAyNzIuMDcxdjk5LjMyM2MwIDQuNDE4LTMuNTgyIDgtOCA4aC0xOWMtNC40MTggMC04LTMuNTgyLTgtOHMzLjU4Mi04IDgtOGgxMXYtOTEuMzIzYzAtMTIuNzY5LTYuMTU3LTI0Ljg2My0xNi40Ny0zMi4zNS0zMC42MjQtMjIuMjMyLTg5LjQ2MS01NS42NDktMTYyLjUwMy01MS44NDVsNS4yMDkgNDAuMTA5Yy41NjkgNC4zODEtMi41MjIgOC4zOTUtNi45MDMgOC45NjQtNC4zODMuNTY5LTguMzk1LTIuNTIzLTguOTY0LTYuOTAzbC01LjI5My00MC43NTVjLTQ3LjE4MSA1LjkxMy05MS4zMyAyNi41OTYtMTI4LjE0IDYwLjE5OWgyMDIuMTI1YzEyLjE0OCAwIDIzLjQ5My01LjQyMSAzMS4xMjQtMTQuODc0IDIuNzc1LTMuNDM4IDcuODEyLTMuOTc1IDExLjI1LTEuMnMzLjk3NSA3LjgxMiAxLjIgMTEuMjVjLTEwLjY4MyAxMy4yMzQtMjYuNTY1IDIwLjgyNC00My41NzMgMjAuODI0aC0yMjAuNDg2bC04OC45OTkgMjQuNzIyYy0xMC4zNDkgMi44NzUtMTcuNTc3IDEyLjM4NC0xNy41NzcgMjMuMTI1djQ3Ljk1OGgxMmM0LjQxOCAwIDggMy41ODIgOCA4cy0zLjU4MiA4LTggOGgtMjBjLTQuNDE4IDAtOC0zLjU4Mi04LTh2LTU1Ljk1OGMwLTE3LjkwMSAxMi4wNDYtMzMuNzUgMjkuMjk0LTM4LjU0MWw4Ny44MDYtMjQuMzkxYzg3LjE0NS05MS4wMTQgMjIyLjQzMy0xMDguODYgMzM5LjgyOS0yMy42MzIgMTQuNDQ2IDEwLjQ4OCAyMy4wNzEgMjcuNDIxIDIzLjA3MSA0NS4yOTh6bS0zMTUgOTcuNDE5YzAgMzAuODc4LTI1LjEyMiA1Ni01NiA1NnMtNTYtMjUuMTIyLTU2LTU2IDI1LjEyMi01NiA1Ni01NiA1NiAyNS4xMjIgNTYgNTZ6bS0xNiAwYzAtMjIuMDU2LTE3Ljk0NC00MC00MC00MHMtNDAgMTcuOTQ0LTQwIDQwIDE3Ljk0NCA0MCA0MCA0MCA0MC0xNy45NDMgNDAtNDB6bTI3OCAwYzAgMzAuODc4LTI1LjEyMiA1Ni01NiA1NnMtNTYtMjUuMTIyLTU2LTU2IDI1LjEyMi01NiA1Ni01NiA1NiAyNS4xMjIgNTYgNTZ6bS0xNiAwYzAtMjIuMDU2LTE3Ljk0NC00MC00MC00MHMtNDAgMTcuOTQ0LTQwIDQwIDE3Ljk0NCA0MCA0MCA0MCA0MC0xNy45NDMgNDAtNDB6bS0xMTgtNmgtMTAzYy00LjQxOCAwLTggMy41ODItOCA4czMuNTgyIDggOCA4aDEwM2M0LjQxOCAwIDgtMy41ODIgOC04cy0zLjU4Mi04LTgtOHptMTI5LjEwNy0yMjUuMjQ1YzkuMzU3IDkuMzU3IDIuODExIDI1LjYwNi0xMC42MDcgMjUuNjA2LTEzLjI2MiAwLTIwLjA2Mi0xNi4xNTEtMTAuNjA3LTI1LjYwNiAyLjgzNC0yLjgzMyA2LjYwMS00LjM5NCAxMC42MDctNC4zOTQgNi43MzguMDAxIDEwLjYwNyA0LjM5NCAxMC42MDcgNC4zOTR6bTI2LjE2My0xNC44NDljMy4xMjUtMy4xMjQgMy4xMjUtOC4xOSAwLTExLjMxNC0yMC4zMjMtMjAuMzIzLTUzLjIxNS0yMC4zMjQtNzMuNTM5IDAtMy4xMjUgMy4xMjQtMy4xMjUgOC4xODkgMCAxMS4zMTQgMy4xMjQgMy4xMjQgOC4xODkgMy4xMjQgMTEuMzEzIDAgMTQuMDctMTQuMDcgMzYuODQtMTQuMDcxIDUwLjkxMiAwIDMuMTI0IDMuMTI0IDguMTg5IDMuMTI0IDExLjMxNCAwem0tOTEuOTI0LTI5LjY5OWMzMC40ODQtMzAuNDg0IDc5LjgyMi0zMC40ODYgMTEwLjMwOSAwIDEuNTYyIDEuNTYyIDMuNjA5IDIuMzQzIDUuNjU3IDIuMzQzIDcuMDYzIDAgMTAuNzExLTguNjAzIDUuNjU3LTEzLjY1Ny0zNi43MzctMzYuNzM2LTk2LjE5Ny0zNi43NC0xMzIuOTM2IDAtMy4xMjUgMy4xMjQtMy4xMjUgOC4xODkgMCAxMS4zMTQgMy4xMjMgMy4xMjUgOC4xODkgMy4xMjUgMTEuMzEzIDB6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PC9nPjwvc3ZnPg==" />
																		</span>
																		<p  class="titulo-midia d-block ">Carro de Som</p>
																		<a href="appParceiro/appOutdoor/add_midia.php" class="btn btn-primary" type="button" >Adicionar mídia</a>
																	</div>
																	<div class="col-3 bg-white pl-20 py-6 mb-10 mt-7 pr-20" style="text-align: center;" >
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2" >
																			<img class="h-30px" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPGc+CgkJCTxwYXRoIGQ9Ik00NzguOTY4LDI4MC43NzRoLTc0LjMyM3YtNDkuNTQ4aDkwLjgzOVY4Mi41ODFoLTgyLjU4MVY0OS41NDhoNDkuNTQ4VjMwLjUzTDQ0Mi4wOTYsMGgtNzQuOTAxTDM0Ni44NCwzMC41M3YxOS4wMTggICAgIGg0OS41NDh2MzMuMDMySDI2NC4yNThWNDkuNTQ4aDQ5LjU0OFYzMC41M0wyOTMuNDUxLDBIMjE4LjU1bC0yMC4zNTcsMzAuNTN2MTkuMDE4aDQ5LjU0OHYzMy4wMzJIMTE1LjYxM1Y0OS41NDhoNDkuNTQ4VjMwLjUzICAgICBMMTQ0LjgwNSwwaC03NC45TDQ5LjU0OCwzMC41M3YxOS4wMThoNDkuNTQ4djMzLjAzMkgxNi41MTZ2MTQ4LjY0NWg5MC44Mzl2NDkuNTQ4SDMzLjAzMkMxNC44MTUsMjgwLjc3NCwwLDI5NS41ODksMCwzMTMuODA2ICAgICBzMTQuODE1LDMzLjAzMiwzMy4wMzIsMzMuMDMyVjUxMmg0NDUuOTM1VjM0Ni44MzljMTguMjE3LDAsMzMuMDMyLTE0LjgxNSwzMy4wMzItMzMuMDMyUzQ5Ny4xODUsMjgwLjc3NCw0NzguOTY4LDI4MC43NzR6ICAgICAgTTM2NS4wMTYsMzMuMDMybDExLjAxNi0xNi41MTZoNTcuMjI4bDExLjAwOCwxNi41MTZIMzY1LjAxNnogTTIxNi4zNywzMy4wMzJsMTEuMDE2LTE2LjUxNmg1Ny4yMjhsMTEuMDA4LDE2LjUxNkgyMTYuMzd6ICAgICAgTTY3LjczMywzMy4wMzJMNzguNzQsMTYuNTE2aDU3LjIyOWwxMS4wMDgsMTYuNTE2SDY3LjczM3ogTTMzLjAzMiwyMTQuNzFWOTkuMDk3aDQ0NS45MzVWMjE0LjcxSDMzLjAzMnogTTM4OC4xMjksMjMxLjIyNiAgICAgdjQ5LjU0OGgtMzMuMDMydi00OS41NDhIMzg4LjEyOXogTTMzOC41ODEsMjMxLjIyNnY0OS41NDhIMTczLjQydi00OS41NDhIMzM4LjU4MXogTTE1Ni45MDQsMjMxLjIyNnY0OS41NDhoLTMzLjAzMnYtNDkuNTQ4ICAgICBIMTU2LjkwNHogTTI0Ny43NDIsNDk1LjQ4NGgtNDkuNTQ4di01Ny44MDdjMC0yOS4wNiwyMS41NzgtNTMuMTE2LDQ5LjU0OC01Ny4xNDZWNDk1LjQ4NHogTTMxMy44MDYsNDk1LjQ4NGgtNDkuNTQ4VjM4MC41MzIgICAgIGMyNy45NzEsNC4wMyw0OS41NDgsMjguMDg2LDQ5LjU0OCw1Ny4xNDZWNDk1LjQ4NHogTTQ2Mi40NTIsNDk1LjQ4NEgzMzAuMzIzdi01Ny44MDdjMC00MC45ODUtMzMuMzQ2LTc0LjMyMy03NC4zMjMtNzQuMzIzICAgICBzLTc0LjMyMywzMy4zMzgtNzQuMzIzLDc0LjMyM3Y1Ny44MDdINDkuNTQ4VjM0Ni44MzloNDEyLjkwNFY0OTUuNDg0eiBNNDc4Ljk2OCwzMzAuMzIzSDMzLjAzMiAgICAgYy05LjEwOCwwLTE2LjUxNi03LjQwNy0xNi41MTYtMTYuNTE2czcuNDA4LTE2LjUxNiwxNi41MTYtMTYuNTE2aDQ0NS45MzVjOS4xMDksMCwxNi41MTYsNy40MDcsMTYuNTE2LDE2LjUxNiAgICAgUzQ4OC4wNzcsMzMwLjMyMyw0NzguOTY4LDMzMC4zMjN6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+CgkJCTxwYXRoIGQ9Ik02Ni4wNjUsMTk4LjE5NGg5OS4wOTd2LTgyLjU4MUg2Ni4wNjVWMTk4LjE5NHogTTgyLjU4MSwxMzIuMTI5aDY2LjA2NXY0OS41NDhIODIuNTgxVjEzMi4xMjl6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+CgkJCTxyZWN0IHg9IjIxNC43MDUiIHk9IjExNS42MDkiIHdpZHRoPSIyMzEuMjI2IiBoZWlnaHQ9IjE2LjUxMiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9yZWN0PgoJCQk8cmVjdCB4PSIxODEuNjczIiB5PSIxMTUuNjA5IiB3aWR0aD0iMTYuNTEyIiBoZWlnaHQ9IjE2LjUxMiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9yZWN0PgoJCQk8cmVjdCB4PSIxODEuNjczIiB5PSIxNDguNjQxIiB3aWR0aD0iMjY0LjI1OCIgaGVpZ2h0PSIxNi41MTIiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcmVjdD4KCQkJPHJlY3QgeD0iMTgxLjY3MyIgeT0iMTgxLjY3MyIgd2lkdGg9IjIzMS4yMjYiIGhlaWdodD0iMTYuNTEyIiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3JlY3Q+CgkJCTxyZWN0IHg9IjQyOS40MTkiIHk9IjE4MS42NzMiIHdpZHRoPSIxNi41MTIiIGhlaWdodD0iMTYuNTEyIiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3JlY3Q+CgkJCTxwYXRoIGQ9Ik00NDUuOTM1LDM2My4zNTVoLTk5LjA5N3Y4Mi41ODFoOTkuMDk3VjM2My4zNTV6IE0zODguMTI5LDQyOS40MTloLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NVY0MjkuNDE5eiBNMzg4LjEyOSwzOTYuMzg3ICAgICBoLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NVYzOTYuMzg3eiBNNDA0LjY0NSwzNzkuODcxaDI0Ljc3NXYxNi41MTZoLTI0Ljc3NVYzNzkuODcxeiBNNDI5LjQyLDQyOS40MTloLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NSAgICAgVjQyOS40MTl6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+CgkJCTxwYXRoIGQ9Ik0xNjUuMTYxLDM2My4zNTVINjYuMDY1djgyLjU4MWg5OS4wOTdWMzYzLjM1NXogTTEwNy4zNTUsNDI5LjQxOUg4Mi41ODF2LTE2LjUxNmgyNC43NzVWNDI5LjQxOXogTTEwNy4zNTUsMzk2LjM4NyAgICAgSDgyLjU4MXYtMTYuNTE2aDI0Ljc3NVYzOTYuMzg3eiBNMTIzLjg3MSwzNzkuODcxaDI0Ljc3NXYxNi41MTZoLTI0Ljc3NVYzNzkuODcxeiBNMTQ4LjY0Niw0MjkuNDE5aC0yNC43NzV2LTE2LjUxNmgyNC43NzUgICAgIFY0MjkuNDE5eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJCTwvZz4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
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
																<div class="row m-0 col-12" >
																	<div class="col-3 bg-white pl-20 py-6 mb-10 mt-7 border-right pr-20" style="text-align: center;">
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2">
																			<img class="h-30px" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDI0IDI0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIiBjbGFzcz0iIj48Zz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMi41IDE4aC0yMWMtLjgyNyAwLTEuNS0uNjczLTEuNS0xLjV2LTEyYzAtLjgyNy42NzMtMS41IDEuNS0xLjVoMjFjLjgyNyAwIDEuNS42NzMgMS41IDEuNXYxMmMwIC44MjctLjY3MyAxLjUtMS41IDEuNXptLTIxLTE0Yy0uMjc2IDAtLjUuMjI0LS41LjV2MTJjMCAuMjc2LjIyNC41LjUuNWgyMWMuMjc2IDAgLjUtLjIyNC41LS41di0xMmMwLS4yNzYtLjIyNC0uNS0uNS0uNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMy41IDI0Yy0uMjc2IDAtLjUtLjIyNC0uNS0uNXYtNmMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXY2YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtNS41IDI0Yy0uMjc2IDAtLjUtLjIyNC0uNS0uNXYtNmMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXY2YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMTguNSAyNGMtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTZjMC0uMjc2LjIyNC0uNS41LS41cy41LjIyNC41LjV2NmMwIC4yNzYtLjIyNC41LS41LjV6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTIwLjUgMjRjLS4yNzYgMC0uNS0uMjI0LS41LS41di02YzAtLjI3Ni4yMjQtLjUuNS0uNXMuNS4yMjQuNS41djZjMCAuMjc2LS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im01IDMuNWMtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTIuNWMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXYyLjVjMCAuMjc2LS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im02LjUgMWgtM2MtLjI3NiAwLS41LS4yMjQtLjUtLjVzLjIyNC0uNS41LS41aDNjLjI3NiAwIC41LjIyNC41LjVzLS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0xMiAzLjVjLS4yNzYgMC0uNS0uMjI0LS41LS41di0yLjVjMC0uMjc2LjIyNC0uNS41LS41cy41LjIyNC41LjV2Mi41YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMTMuNSAxaC0zYy0uMjc2IDAtLjUtLjIyNC0uNS0uNXMuMjI0LS41LjUtLjVoM2MuMjc2IDAgLjUuMjI0LjUuNXMtLjIyNC41LS41LjV6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTE5IDMuNWMtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTIuNWMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXYyLjVjMCAuMjc2LS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMC41IDFoLTNjLS4yNzYgMC0uNS0uMjI0LS41LS41cy4yMjQtLjUuNS0uNWgzYy4yNzYgMCAuNS4yMjQuNS41cy0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg==" />
																		</span>
																		<p  class="titulo-midia d-block ">Outdoor</p>
																		<a href="appCliente/appOutdoor/listar_midia.php" class="btn btn-primary" type="button" >Alugar mídia</a>
																	</div>
																	<div  class="col-3 bg-white pl-20 py-6 mb-10 mt-7 border-right pr-20" style="text-align: center;">
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2">
																			<img class="h-30px"src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMi4wMDEgNTEyLjAwMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNNDcxLjUxNCwzMTcuMDgxSDQwLjQ4N2MtNC4xNDMsMC03LjUsMy4zNTctNy41LDcuNXMzLjM1OCw3LjUsNy41LDcuNWg0MzEuMDI2YzQuMTQzLDAsNy41LTMuMzU3LDcuNS03LjUgICAgUzQ3NS42NTcsMzE3LjA4MSw0NzEuNTE0LDMxNy4wODF6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+Cgk8L2c+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik00OTEuODg5LDYxLjM0MmgtODguNzMyVjQ2LjM5OGgyMi4yMDZjNS41ODUsMCwxMC4xMy00LjU0NCwxMC4xMy0xMC4xM1YxOS41MDFDNDM1LjQ5Miw4Ljc0OSw0MjYuNzQ0LDAsNDE1Ljk5MSwwICAgIGgtNDAuNjY5Yy0xMC43NTMsMC0xOS41MDEsOC43NDktMTkuNTAxLDE5LjUwMXYxNi44MThjMCw1LjU1Nyw0LjUyMSwxMC4wNzgsMTAuMDc4LDEwLjA3OGgyMi4yNTd2MTQuOTQ0SDI2My41MDFWNDYuMzk4aDIyLjIwNSAgICBjNS41ODUsMCwxMC4xMy00LjU0NCwxMC4xMy0xMC4xM1YxOS41MDFDMjk1LjgzNiw4Ljc0OSwyODcuMDg3LDAsMjc2LjMzNSwwaC00MC42NjljLTEwLjc1MywwLTE5LjUwMSw4Ljc0OS0xOS41MDEsMTkuNTAxdjE2LjgxOCAgICBjMCw1LjU1Nyw0LjUyMSwxMC4wNzgsMTAuMDc4LDEwLjA3OEgyNDguNXYxNC45NDRIMTIzLjg0NVY0Ni4zOThoMjIuMjA1YzUuNTg1LDAsMTAuMTMtNC41NDQsMTAuMTMtMTAuMTNWMTkuNTAxICAgIEMxNTYuMTgsOC43NDksMTQ3LjQzMiwwLDEzNi42NzksMEg5Ni4wMUM4NS4yNTcsMCw3Ni41MDksOC43NDksNzYuNTA5LDE5LjUwMXYxNi44MThjMCw1LjU1Nyw0LjUyMSwxMC4wNzgsMTAuMDc4LDEwLjA3OGgyMi4yNTggICAgdjE0Ljk0NEgyMC4xMTJDOS4wMjMsNjEuMzQyLDAuMDAxLDcwLjM2MywwLjAwMSw4MS40NTN2MzUuNDgxYzAsNC4xNDMsMy4zNTcsNy41LDcuNSw3LjVzNy41LTMuMzU3LDcuNS03LjVWODEuNDUzICAgIGMwLTIuNzcxLDIuMzQtNS4xMSw1LjExLTUuMTFoNDcxLjc3N2MyLjc3MSwwLDUuMTEsMi4zNCw1LjExLDUuMTF2MjA4LjYyNUgxNS4wMDJ2LTEzOC4xNGMwLTQuMTQzLTMuMzU3LTcuNS03LjUtNy41ICAgIGMtNC4xNDIsMC03LjUsMy4zNTctNy41LDcuNXYxNDUuNjQydjQxLjM5NmMwLDExLjA5LDkuMDIyLDIwLjExMSwyMC4xMTEsMjAuMTExaDIwMS4zODR2ODMuOTI1ICAgIGMtMTAuNTk1LDAuMTg0LTE5LjE2LDguODQ2LTE5LjE2LDE5LjQ4NHY3LjUwMWgtMzEuMDkxYy0xMS42OTYsMC0yMS4wMDEsOS41NTctMjEuMDAxLDIxLjAwMiAgICBjMCwxMS41ODEsOS40MjIsMjEuMDAyLDIxLjAwMSwyMS4wMDJoNDAuMjVjNC4xNDMsMCw3LjUtMy4zNTcsNy41LTcuNWMwLTQuMTQzLTMuMzU3LTcuNS03LjUtNy41aC00MC4yNSAgICBjLTMuMjU4LDAtNS45MTctMi42MS01Ljk5OC01Ljg1YzAuMDE4LTAuMzQ4LDAuMDA5LTAuNTI1LDAuMDU5LTAuOTE5YzAuMDU5LTAuNDY5LDAuMTMyLTAuNjcyLDAuMTUzLTAuNzcyICAgIGMwLjY5NS0yLjYyNiwzLjA3NS00LjQ2MSw1Ljc4Ni00LjQ2MWMxOC4yNywwLDE1MC41NzMsMCwxNjkuNTEsMGMyLjcxMSwwLDUuMDksMS44MzQsNS43OTcsNC41MDIgICAgYzAuOTQ4LDQuMDg2LTIuMDY1LDcuNS01Ljc5Nyw3LjVoLTk0LjI1OGMtNC4xNDMsMC03LjUsMy4zNTctNy41LDcuNWMwLDQuMTQzLDMuMzU3LDcuNSw3LjUsNy41aDk0LjI1OCAgICBjMTMuMjcyLDAsMjMuOTg5LTEyLjU3MywyMC4yODYtMjYuMzg2Yy0yLjQzNy05LjE5Ni0xMC43NzktMTUuNjE5LTIwLjI4Ni0xNS42MTloLTMxLjA5MXYtNy41MDEgICAgYzAtMTAuNjM4LTguNTY1LTE5LjI5OS0xOS4xNi0xOS40ODRWNDE4LjU0YzAtNC4xNDMtMy4zNTctNy41LTcuNS03LjVzLTcuNSwzLjM1Ny03LjUsNy41djI0LjQ1M2gtMzkuMDA2di04My45MDdoMzkuMDA2djI0LjQ1MiAgICBjMCw0LjE0MywzLjM1Nyw3LjUsNy41LDcuNXM3LjUtMy4zNTcsNy41LTcuNXYtMjQuNDUyaDIwMS4zODRjMTEuMDksMCwyMC4xMTEtOS4wMjIsMjAuMTExLTIwLjExMWMwLTEyLjA3NSwwLTI0NS4yMDYsMC0yNTcuNTIxICAgIEM1MTIuMDAxLDcwLjM2Myw1MDIuOTc4LDYxLjM0Miw0OTEuODg5LDYxLjM0MnogTTkxLjUxLDMxLjM5NlYxOS41MDFjMC0yLjQ0LDIuMDYxLTQuNSw0LjUtNC41aDQwLjY2OWMyLjQzOSwwLDQuNSwyLjA2MSw0LjUsNC41ICAgIHYxMS44OTVIOTEuNTF6IE0yMzEuMTY1LDMxLjM5NlYxOS41MDFjMC0yLjQ0LDIuMDYxLTQuNSw0LjUtNC41aDQwLjY2OWMyLjQ0LDAsNC41LDIuMDYxLDQuNSw0LjV2MTEuODk1SDIzMS4xNjV6ICAgICBNMzcwLjgyMiwzMS4zOTZWMTkuNTAxYzAtMi40NCwyLjA2MS00LjUsNC41LTQuNWg0MC42NjljMi40MzksMCw0LjUsMi4wNjEsNC41LDQuNXYxMS44OTVIMzcwLjgyMnogTTI5MC4xNjUsNDU3Ljk5NCAgICBjMi40MzksMCw0LjUsMi4wNjEsNC41LDQuNXY3LjUwMWgtNzcuMzI3di03LjUwMWMwLTIuNDM5LDIuMDYxLTQuNSw0LjUtNC41QzIzNS43MjcsNDU3Ljk5NCwyNzYuMTY3LDQ1Ny45OTQsMjkwLjE2NSw0NTcuOTk0eiAgICAgTTQ5Ny4wMDEsMzM4Ljk3NEg0OTdjMCwyLjc3MS0yLjM0LDUuMTEtNS4xMSw1LjExYy0xNS4zNjQsMC00NTUuMTIxLDAtNDcxLjc3NywwYy0yLjc3MSwwLTUuMTEtMi4zNC01LjExLTUuMTF2LTMzLjg5NWg0ODEuOTk4ICAgIFYzMzguOTc0eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
																		</span>
																		<p  class="titulo-midia d-block ">Front-Light</p>
																		<a href="appCliente/appOutdoor/listar_midia.php" class="btn btn-primary" type="button" >Alugar mídia</a>
																	</div>
																	<div  class="col-3 bg-white pl-20 py-6 mb-10 mt-7 border-right pr-20" style="text-align: center;">
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2">
																			<img class="h-30px"src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ4MC4zMiA0ODAuMzIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTQ4MCAyNzIuMDcxdjk5LjMyM2MwIDQuNDE4LTMuNTgyIDgtOCA4aC0xOWMtNC40MTggMC04LTMuNTgyLTgtOHMzLjU4Mi04IDgtOGgxMXYtOTEuMzIzYzAtMTIuNzY5LTYuMTU3LTI0Ljg2My0xNi40Ny0zMi4zNS0zMC42MjQtMjIuMjMyLTg5LjQ2MS01NS42NDktMTYyLjUwMy01MS44NDVsNS4yMDkgNDAuMTA5Yy41NjkgNC4zODEtMi41MjIgOC4zOTUtNi45MDMgOC45NjQtNC4zODMuNTY5LTguMzk1LTIuNTIzLTguOTY0LTYuOTAzbC01LjI5My00MC43NTVjLTQ3LjE4MSA1LjkxMy05MS4zMyAyNi41OTYtMTI4LjE0IDYwLjE5OWgyMDIuMTI1YzEyLjE0OCAwIDIzLjQ5My01LjQyMSAzMS4xMjQtMTQuODc0IDIuNzc1LTMuNDM4IDcuODEyLTMuOTc1IDExLjI1LTEuMnMzLjk3NSA3LjgxMiAxLjIgMTEuMjVjLTEwLjY4MyAxMy4yMzQtMjYuNTY1IDIwLjgyNC00My41NzMgMjAuODI0aC0yMjAuNDg2bC04OC45OTkgMjQuNzIyYy0xMC4zNDkgMi44NzUtMTcuNTc3IDEyLjM4NC0xNy41NzcgMjMuMTI1djQ3Ljk1OGgxMmM0LjQxOCAwIDggMy41ODIgOCA4cy0zLjU4MiA4LTggOGgtMjBjLTQuNDE4IDAtOC0zLjU4Mi04LTh2LTU1Ljk1OGMwLTE3LjkwMSAxMi4wNDYtMzMuNzUgMjkuMjk0LTM4LjU0MWw4Ny44MDYtMjQuMzkxYzg3LjE0NS05MS4wMTQgMjIyLjQzMy0xMDguODYgMzM5LjgyOS0yMy42MzIgMTQuNDQ2IDEwLjQ4OCAyMy4wNzEgMjcuNDIxIDIzLjA3MSA0NS4yOTh6bS0zMTUgOTcuNDE5YzAgMzAuODc4LTI1LjEyMiA1Ni01NiA1NnMtNTYtMjUuMTIyLTU2LTU2IDI1LjEyMi01NiA1Ni01NiA1NiAyNS4xMjIgNTYgNTZ6bS0xNiAwYzAtMjIuMDU2LTE3Ljk0NC00MC00MC00MHMtNDAgMTcuOTQ0LTQwIDQwIDE3Ljk0NCA0MCA0MCA0MCA0MC0xNy45NDMgNDAtNDB6bTI3OCAwYzAgMzAuODc4LTI1LjEyMiA1Ni01NiA1NnMtNTYtMjUuMTIyLTU2LTU2IDI1LjEyMi01NiA1Ni01NiA1NiAyNS4xMjIgNTYgNTZ6bS0xNiAwYzAtMjIuMDU2LTE3Ljk0NC00MC00MC00MHMtNDAgMTcuOTQ0LTQwIDQwIDE3Ljk0NCA0MCA0MCA0MCA0MC0xNy45NDMgNDAtNDB6bS0xMTgtNmgtMTAzYy00LjQxOCAwLTggMy41ODItOCA4czMuNTgyIDggOCA4aDEwM2M0LjQxOCAwIDgtMy41ODIgOC04cy0zLjU4Mi04LTgtOHptMTI5LjEwNy0yMjUuMjQ1YzkuMzU3IDkuMzU3IDIuODExIDI1LjYwNi0xMC42MDcgMjUuNjA2LTEzLjI2MiAwLTIwLjA2Mi0xNi4xNTEtMTAuNjA3LTI1LjYwNiAyLjgzNC0yLjgzMyA2LjYwMS00LjM5NCAxMC42MDctNC4zOTQgNi43MzguMDAxIDEwLjYwNyA0LjM5NCAxMC42MDcgNC4zOTR6bTI2LjE2My0xNC44NDljMy4xMjUtMy4xMjQgMy4xMjUtOC4xOSAwLTExLjMxNC0yMC4zMjMtMjAuMzIzLTUzLjIxNS0yMC4zMjQtNzMuNTM5IDAtMy4xMjUgMy4xMjQtMy4xMjUgOC4xODkgMCAxMS4zMTQgMy4xMjQgMy4xMjQgOC4xODkgMy4xMjQgMTEuMzEzIDAgMTQuMDctMTQuMDcgMzYuODQtMTQuMDcxIDUwLjkxMiAwIDMuMTI0IDMuMTI0IDguMTg5IDMuMTI0IDExLjMxNCAwem0tOTEuOTI0LTI5LjY5OWMzMC40ODQtMzAuNDg0IDc5LjgyMi0zMC40ODYgMTEwLjMwOSAwIDEuNTYyIDEuNTYyIDMuNjA5IDIuMzQzIDUuNjU3IDIuMzQzIDcuMDYzIDAgMTAuNzExLTguNjAzIDUuNjU3LTEzLjY1Ny0zNi43MzctMzYuNzM2LTk2LjE5Ny0zNi43NC0xMzIuOTM2IDAtMy4xMjUgMy4xMjQtMy4xMjUgOC4xODkgMCAxMS4zMTQgMy4xMjMgMy4xMjUgOC4xODkgMy4xMjUgMTEuMzEzIDB6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PC9nPjwvc3ZnPg==" />
																		</span>
																		<p  class="titulo-midia d-block ">Carro de Som</p>
																		<a href="appCliente/appOutdoor/listar_midia.php" class="btn btn-primary" type="button" >Alugar mídia</a>
																	</div>
																	<div  class="col-3 bg-white pl-20 py-6 mb-10 mt-7" style="text-align: center;" >
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2" >
																			<img class="h-30px"src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPGc+CgkJCTxwYXRoIGQ9Ik00NzguOTY4LDI4MC43NzRoLTc0LjMyM3YtNDkuNTQ4aDkwLjgzOVY4Mi41ODFoLTgyLjU4MVY0OS41NDhoNDkuNTQ4VjMwLjUzTDQ0Mi4wOTYsMGgtNzQuOTAxTDM0Ni44NCwzMC41M3YxOS4wMTggICAgIGg0OS41NDh2MzMuMDMySDI2NC4yNThWNDkuNTQ4aDQ5LjU0OFYzMC41M0wyOTMuNDUxLDBIMjE4LjU1bC0yMC4zNTcsMzAuNTN2MTkuMDE4aDQ5LjU0OHYzMy4wMzJIMTE1LjYxM1Y0OS41NDhoNDkuNTQ4VjMwLjUzICAgICBMMTQ0LjgwNSwwaC03NC45TDQ5LjU0OCwzMC41M3YxOS4wMThoNDkuNTQ4djMzLjAzMkgxNi41MTZ2MTQ4LjY0NWg5MC44Mzl2NDkuNTQ4SDMzLjAzMkMxNC44MTUsMjgwLjc3NCwwLDI5NS41ODksMCwzMTMuODA2ICAgICBzMTQuODE1LDMzLjAzMiwzMy4wMzIsMzMuMDMyVjUxMmg0NDUuOTM1VjM0Ni44MzljMTguMjE3LDAsMzMuMDMyLTE0LjgxNSwzMy4wMzItMzMuMDMyUzQ5Ny4xODUsMjgwLjc3NCw0NzguOTY4LDI4MC43NzR6ICAgICAgTTM2NS4wMTYsMzMuMDMybDExLjAxNi0xNi41MTZoNTcuMjI4bDExLjAwOCwxNi41MTZIMzY1LjAxNnogTTIxNi4zNywzMy4wMzJsMTEuMDE2LTE2LjUxNmg1Ny4yMjhsMTEuMDA4LDE2LjUxNkgyMTYuMzd6ICAgICAgTTY3LjczMywzMy4wMzJMNzguNzQsMTYuNTE2aDU3LjIyOWwxMS4wMDgsMTYuNTE2SDY3LjczM3ogTTMzLjAzMiwyMTQuNzFWOTkuMDk3aDQ0NS45MzVWMjE0LjcxSDMzLjAzMnogTTM4OC4xMjksMjMxLjIyNiAgICAgdjQ5LjU0OGgtMzMuMDMydi00OS41NDhIMzg4LjEyOXogTTMzOC41ODEsMjMxLjIyNnY0OS41NDhIMTczLjQydi00OS41NDhIMzM4LjU4MXogTTE1Ni45MDQsMjMxLjIyNnY0OS41NDhoLTMzLjAzMnYtNDkuNTQ4ICAgICBIMTU2LjkwNHogTTI0Ny43NDIsNDk1LjQ4NGgtNDkuNTQ4di01Ny44MDdjMC0yOS4wNiwyMS41NzgtNTMuMTE2LDQ5LjU0OC01Ny4xNDZWNDk1LjQ4NHogTTMxMy44MDYsNDk1LjQ4NGgtNDkuNTQ4VjM4MC41MzIgICAgIGMyNy45NzEsNC4wMyw0OS41NDgsMjguMDg2LDQ5LjU0OCw1Ny4xNDZWNDk1LjQ4NHogTTQ2Mi40NTIsNDk1LjQ4NEgzMzAuMzIzdi01Ny44MDdjMC00MC45ODUtMzMuMzQ2LTc0LjMyMy03NC4zMjMtNzQuMzIzICAgICBzLTc0LjMyMywzMy4zMzgtNzQuMzIzLDc0LjMyM3Y1Ny44MDdINDkuNTQ4VjM0Ni44MzloNDEyLjkwNFY0OTUuNDg0eiBNNDc4Ljk2OCwzMzAuMzIzSDMzLjAzMiAgICAgYy05LjEwOCwwLTE2LjUxNi03LjQwNy0xNi41MTYtMTYuNTE2czcuNDA4LTE2LjUxNiwxNi41MTYtMTYuNTE2aDQ0NS45MzVjOS4xMDksMCwxNi41MTYsNy40MDcsMTYuNTE2LDE2LjUxNiAgICAgUzQ4OC4wNzcsMzMwLjMyMyw0NzguOTY4LDMzMC4zMjN6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+CgkJCTxwYXRoIGQ9Ik02Ni4wNjUsMTk4LjE5NGg5OS4wOTd2LTgyLjU4MUg2Ni4wNjVWMTk4LjE5NHogTTgyLjU4MSwxMzIuMTI5aDY2LjA2NXY0OS41NDhIODIuNTgxVjEzMi4xMjl6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+CgkJCTxyZWN0IHg9IjIxNC43MDUiIHk9IjExNS42MDkiIHdpZHRoPSIyMzEuMjI2IiBoZWlnaHQ9IjE2LjUxMiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9yZWN0PgoJCQk8cmVjdCB4PSIxODEuNjczIiB5PSIxMTUuNjA5IiB3aWR0aD0iMTYuNTEyIiBoZWlnaHQ9IjE2LjUxMiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9yZWN0PgoJCQk8cmVjdCB4PSIxODEuNjczIiB5PSIxNDguNjQxIiB3aWR0aD0iMjY0LjI1OCIgaGVpZ2h0PSIxNi41MTIiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcmVjdD4KCQkJPHJlY3QgeD0iMTgxLjY3MyIgeT0iMTgxLjY3MyIgd2lkdGg9IjIzMS4yMjYiIGhlaWdodD0iMTYuNTEyIiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3JlY3Q+CgkJCTxyZWN0IHg9IjQyOS40MTkiIHk9IjE4MS42NzMiIHdpZHRoPSIxNi41MTIiIGhlaWdodD0iMTYuNTEyIiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3JlY3Q+CgkJCTxwYXRoIGQ9Ik00NDUuOTM1LDM2My4zNTVoLTk5LjA5N3Y4Mi41ODFoOTkuMDk3VjM2My4zNTV6IE0zODguMTI5LDQyOS40MTloLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NVY0MjkuNDE5eiBNMzg4LjEyOSwzOTYuMzg3ICAgICBoLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NVYzOTYuMzg3eiBNNDA0LjY0NSwzNzkuODcxaDI0Ljc3NXYxNi41MTZoLTI0Ljc3NVYzNzkuODcxeiBNNDI5LjQyLDQyOS40MTloLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NSAgICAgVjQyOS40MTl6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+CgkJCTxwYXRoIGQ9Ik0xNjUuMTYxLDM2My4zNTVINjYuMDY1djgyLjU4MWg5OS4wOTdWMzYzLjM1NXogTTEwNy4zNTUsNDI5LjQxOUg4Mi41ODF2LTE2LjUxNmgyNC43NzVWNDI5LjQxOXogTTEwNy4zNTUsMzk2LjM4NyAgICAgSDgyLjU4MXYtMTYuNTE2aDI0Ljc3NVYzOTYuMzg3eiBNMTIzLjg3MSwzNzkuODcxaDI0Ljc3NXYxNi41MTZoLTI0Ljc3NVYzNzkuODcxeiBNMTQ4LjY0Niw0MjkuNDE5aC0yNC43NzV2LTE2LjUxNmgyNC43NzUgICAgIFY0MjkuNDE5eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJCTwvZz4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
																		</span>
																		<p  class="titulo-midia d-block  ">Empena</p>
																		<a href="appCliente/appOutdoor/listar_midia.php" class="btn btn-primary" type="button" >Alugar mídia</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!--end::Tiles Widget 25-->
												</div>
											<?php endif; ?>
											<?php /* if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 3 || $_SESSION['id_perfil'] == 2 || $_SESSION['id_perfil'] == 4) :  ?>	
												<div class="col-xl-6">
													<!--begin::Stats Widget 27-->
													<div class="card card-custom bg-white card-stretch gutter-b h-300px">
														<!--begin::Body-->
														<div class="card-body">	
															<span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">$50,000</span>
															<span class="font-wight-bold text-muted font-size-sm d-block">Investido</span>
														</div>
														<input class="btn btn-primary btn-lg w-100" type="button" value="Acompanhar"/>
														<!--end::Body-->
													</div>
													<!--end::Stats Widget 27-->
												</div>
											<?php endif; */ ?>	
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
																		<td>Universo Painéis</td>
																		<td>21/01/2021</td>
																		<td>21/01/2021</td>
																		<td>00,00 RS</td>
																		<td><a href="">
																			<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-02-01-052524/theme/html/demo8/dist/../src/media/svg/icons/Navigation/Right-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24"/>
																				<rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000) " x="7.5" y="7.5" width="2" height="9" rx="1"/>
																				<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>
																			</g>
																			</svg><!--end::Svg Icon--></span>
																		</a></td>
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