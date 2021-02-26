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
										<!--begin::Header Nav-->
										<ul class="menu-nav">
											<li class="menu-item menu-item-submenu menu-item-rel menu-item-active" data-menu-toggle="click" aria-haspopup="true">
												<a href="javascript:;" class="menu-link menu-toggle">
													<span class="menu-text">Pages</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu menu-submenu-classic menu-submenu-left">
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/index.html" class="menu-link">
																<span class="svg-icon menu-icon">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Clothes/Briefcase.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<path d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z" fill="#000000"></path>
																			<path d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
																<span class="menu-text">My Account</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="javascript:;" class="menu-link">
																<span class="svg-icon menu-icon">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Code/Compiling.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3"></path>
																			<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000"></path>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
																<span class="menu-text">Task Manager</span>
																<span class="menu-label">
																	<span class="label label-success label-rounded">2</span>
																</span>
															</a>
														</li>
														<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
															<a href="javascript:;" class="menu-link menu-toggle">
																<span class="svg-icon menu-icon">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Code/CMD.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<path d="M9,15 L7.5,15 C6.67157288,15 6,15.6715729 6,16.5 C6,17.3284271 6.67157288,18 7.5,18 C8.32842712,18 9,17.3284271 9,16.5 L9,15 Z M9,15 L9,9 L15,9 L15,15 L9,15 Z M15,16.5 C15,17.3284271 15.6715729,18 16.5,18 C17.3284271,18 18,17.3284271 18,16.5 C18,15.6715729 17.3284271,15 16.5,15 L15,15 L15,16.5 Z M16.5,9 C17.3284271,9 18,8.32842712 18,7.5 C18,6.67157288 17.3284271,6 16.5,6 C15.6715729,6 15,6.67157288 15,7.5 L15,9 L16.5,9 Z M9,7.5 C9,6.67157288 8.32842712,6 7.5,6 C6.67157288,6 6,6.67157288 6,7.5 C6,8.32842712 6.67157288,9 7.5,9 L9,9 L9,7.5 Z M11,13 L13,13 L13,11 L11,11 L11,13 Z M13,11 L13,7.5 C13,5.56700338 14.5670034,4 16.5,4 C18.4329966,4 20,5.56700338 20,7.5 C20,9.43299662 18.4329966,11 16.5,11 L13,11 Z M16.5,13 C18.4329966,13 20,14.5670034 20,16.5 C20,18.4329966 18.4329966,20 16.5,20 C14.5670034,20 13,18.4329966 13,16.5 L13,13 L16.5,13 Z M11,16.5 C11,18.4329966 9.43299662,20 7.5,20 C5.56700338,20 4,18.4329966 4,16.5 C4,14.5670034 5.56700338,13 7.5,13 L11,13 L11,16.5 Z M7.5,11 C5.56700338,11 4,9.43299662 4,7.5 C4,5.56700338 5.56700338,4 7.5,4 C9.43299662,4 11,5.56700338 11,7.5 L11,11 L7.5,11 Z" fill="#000000" fill-rule="nonzero"></path>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
																<span class="menu-text">Team Manager</span>
																<i class="menu-arrow"></i>
															</a>
															<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																<ul class="menu-subnav">
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Add Team Member</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Edit Team Member</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Delete Team Member</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Team Member Reports</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Assign Tasks</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Promote Team Member</span>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
															<a href="/metronic/demo1/#.html" class="menu-link menu-toggle">
																<span class="svg-icon menu-icon">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-box.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<path d="M22,15 L22,19 C22,20.1045695 21.1045695,21 20,21 L4,21 C2.8954305,21 2,20.1045695 2,19 L2,15 L6.27924078,15 L6.82339262,16.6324555 C7.09562072,17.4491398 7.8598984,18 8.72075922,18 L15.381966,18 C16.1395101,18 16.8320364,17.5719952 17.1708204,16.8944272 L18.118034,15 L22,15 Z" fill="#000000"></path>
																			<path d="M2.5625,13 L5.92654389,7.01947752 C6.2807805,6.38972356 6.94714834,6 7.66969497,6 L16.330305,6 C17.0528517,6 17.7192195,6.38972356 18.0734561,7.01947752 L21.4375,13 L18.118034,13 C17.3604899,13 16.6679636,13.4280048 16.3291796,14.1055728 L15.381966,16 L8.72075922,16 L8.17660738,14.3675445 C7.90437928,13.5508602 7.1401016,13 6.27924078,13 L2.5625,13 Z" fill="#000000" opacity="0.3"></path>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
																<span class="menu-text">Projects Manager</span>
																<i class="menu-arrow"></i>
															</a>
															<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																<ul class="menu-subnav">
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Latest Projects</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Ongoing Projects</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Urgent Projects</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Completed Projects</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Dropped Projects</span>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="javascript:;" class="menu-link">
																<span class="svg-icon menu-icon">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Spam.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z M10.5857864,14 L9.17157288,15.4142136 C8.78104858,15.8047379 8.78104858,16.4379028 9.17157288,16.8284271 C9.56209717,17.2189514 10.1952621,17.2189514 10.5857864,16.8284271 L12,15.4142136 L13.4142136,16.8284271 C13.8047379,17.2189514 14.4379028,17.2189514 14.8284271,16.8284271 C15.2189514,16.4379028 15.2189514,15.8047379 14.8284271,15.4142136 L13.4142136,14 L14.8284271,12.5857864 C15.2189514,12.1952621 15.2189514,11.5620972 14.8284271,11.1715729 C14.4379028,10.7810486 13.8047379,10.7810486 13.4142136,11.1715729 L12,12.5857864 L10.5857864,11.1715729 C10.1952621,10.7810486 9.56209717,10.7810486 9.17157288,11.1715729 C8.78104858,11.5620972 8.78104858,12.1952621 9.17157288,12.5857864 L10.5857864,14 Z" fill="#000000"></path>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
																<span class="menu-text">Create New Project</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" data-menu-toggle="click" aria-haspopup="true">
												<a href="javascript:;" class="menu-link menu-toggle">
													<span class="menu-text">Features</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu menu-submenu-fixed menu-submenu-left" style="width:1000px">
													<div class="menu-subnav">
														<ul class="menu-content">
															<li class="menu-item">
																<h3 class="menu-heading menu-toggle">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Task Reports</span>
																	<i class="menu-arrow"></i>
																</h3>
																<ul class="menu-inner">
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<span class="svg-icon menu-icon">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Clothes/Briefcase.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z" fill="#000000"></path>
																						<path d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																			<span class="menu-text">Latest Tasks</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<span class="svg-icon menu-icon">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Clothes/Crown.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24"></polygon>
																						<path d="M11.2600599,5.81393408 L2,16 L22,16 L12.7399401,5.81393408 C12.3684331,5.40527646 11.7359848,5.37515988 11.3273272,5.7466668 C11.3038503,5.7680094 11.2814025,5.79045722 11.2600599,5.81393408 Z" fill="#000000" opacity="0.3"></path>
																						<path d="M12.0056789,15.7116802 L20.2805786,6.85290308 C20.6575758,6.44930487 21.2903735,6.42774054 21.6939717,6.8047378 C21.8964274,6.9938498 22.0113578,7.25847607 22.0113578,7.535517 L22.0113578,20 L16.0113578,20 L2,20 L2,7.535517 C2,7.25847607 2.11493033,6.9938498 2.31738608,6.8047378 C2.72098429,6.42774054 3.35378194,6.44930487 3.7307792,6.85290308 L12.0056789,15.7116802 Z" fill="#000000"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																			<span class="menu-text">Pending Tasks</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<span class="svg-icon menu-icon">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Code/Lock-overturning.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#000000" opacity="0.3"></path>
																						<path d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z" fill="#000000"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																			<span class="menu-text">Urgent Tasks</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<span class="svg-icon menu-icon">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Thumbtack.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M11.6734943,8.3307728 L14.9993074,6.09979492 L14.1213255,5.22181303 C13.7308012,4.83128874 13.7308012,4.19812376 14.1213255,3.80759947 L15.535539,2.39338591 C15.9260633,2.00286161 16.5592283,2.00286161 16.9497526,2.39338591 L22.6066068,8.05024016 C22.9971311,8.44076445 22.9971311,9.07392943 22.6066068,9.46445372 L21.1923933,10.8786673 C20.801869,11.2691916 20.168704,11.2691916 19.7781797,10.8786673 L18.9002333,10.0007208 L16.6692373,13.3265608 C16.9264145,14.2523264 16.9984943,15.2320236 16.8664372,16.2092466 L16.4344698,19.4058049 C16.360509,19.9531149 15.8568695,20.3368403 15.3095595,20.2628795 C15.0925691,20.2335564 14.8912006,20.1338238 14.7363706,19.9789938 L5.02099894,10.2636221 C4.63047465,9.87309784 4.63047465,9.23993286 5.02099894,8.84940857 C5.17582897,8.69457854 5.37719743,8.59484594 5.59418783,8.56552292 L8.79074617,8.13355557 C9.76799113,8.00149544 10.7477104,8.0735815 11.6734943,8.3307728 Z" fill="#000000"></path>
																						<polygon fill="#000000" opacity="0.3" transform="translate(7.050253, 17.949747) rotate(-315.000000) translate(-7.050253, -17.949747)" points="5.55025253 13.9497475 5.55025253 19.6640332 7.05025253 21.9497475 8.55025253 19.6640332 8.55025253 13.9497475"></polygon>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																			<span class="menu-text">Completed Tasks</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<span class="svg-icon menu-icon">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Outgoing-box.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M22,17 L22,21 C22,22.1045695 21.1045695,23 20,23 L4,23 C2.8954305,23 2,22.1045695 2,21 L2,17 L6.27924078,17 L6.82339262,18.6324555 C7.09562072,19.4491398 7.8598984,20 8.72075922,20 L15.381966,20 C16.1395101,20 16.8320364,19.5719952 17.1708204,18.8944272 L18.118034,17 L22,17 Z" fill="#000000"></path>
																						<path d="M2.5625,15 L5.92654389,9.01947752 C6.2807805,8.38972356 6.94714834,8 7.66969497,8 L16.330305,8 C17.0528517,8 17.7192195,8.38972356 18.0734561,9.01947752 L21.4375,15 L18.118034,15 C17.3604899,15 16.6679636,15.4280048 16.3291796,16.1055728 L15.381966,18 L8.72075922,18 L8.17660738,16.3675445 C7.90437928,15.5508602 7.1401016,15 6.27924078,15 L2.5625,15 Z" fill="#000000" opacity="0.3"></path>
																						<path d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.959697, 3.661508) rotate(-90.000000) translate(-11.959697, -3.661508)"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																			<span class="menu-text">Failed Tasks</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<h3 class="menu-heading menu-toggle">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Profit Margins</span>
																	<i class="menu-arrow"></i>
																</h3>
																<ul class="menu-inner">
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Overall Profits</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Gross Profits</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Nett Profits</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Year to Date Reports</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Quarterly Profits</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Monthly Profits</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<h3 class="menu-heading menu-toggle">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Staff Management</span>
																	<i class="menu-arrow"></i>
																</h3>
																<ul class="menu-inner">
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Top Management</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Project Managers</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Development Staff</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Customer Service</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Sales and Marketing</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Executives</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<h3 class="menu-heading menu-toggle">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Tools</span>
																	<i class="menu-arrow"></i>
																</h3>
																<ul class="menu-inner">
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<span class="menu-text">Analytical Reports</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<span class="menu-text">Customer CRM</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<span class="menu-text">Operational Growth</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<span class="menu-text">Social Media Presence</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<span class="menu-text">Files and Directories</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<span class="menu-text">Audit &amp; Logs</span>
																		</a>
																	</li>
																</ul>
															</li>
														</ul>
													</div>
												</div>
											</li>
											<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
												<a href="javascript:;" class="menu-link menu-toggle">
													<span class="menu-text">Apps</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu menu-submenu-classic menu-submenu-left">
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="javascript:;" class="menu-link">
																<span class="svg-icon menu-icon">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Safe-chat.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<path d="M8,17 C8.55228475,17 9,17.4477153 9,18 L9,21 C9,21.5522847 8.55228475,22 8,22 L3,22 C2.44771525,22 2,21.5522847 2,21 L2,18 C2,17.4477153 2.44771525,17 3,17 L3,16.5 C3,15.1192881 4.11928813,14 5.5,14 C6.88071187,14 8,15.1192881 8,16.5 L8,17 Z M5.5,15 C4.67157288,15 4,15.6715729 4,16.5 L4,17 L7,17 L7,16.5 C7,15.6715729 6.32842712,15 5.5,15 Z" fill="#000000" opacity="0.3"></path>
																			<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000"></path>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
																<span class="menu-text">Reporting</span>
															</a>
														</li>
														<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
															<a href="javascript:;" class="menu-link menu-toggle">
																<span class="svg-icon menu-icon">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Send.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<path d="M3,13.5 L19,12 L3,10.5 L3,3.7732928 C3,3.70255344 3.01501031,3.63261921 3.04403925,3.56811047 C3.15735832,3.3162903 3.45336217,3.20401298 3.70518234,3.31733205 L21.9867539,11.5440392 C22.098181,11.5941815 22.1873901,11.6833905 22.2375323,11.7948177 C22.3508514,12.0466378 22.2385741,12.3426417 21.9867539,12.4559608 L3.70518234,20.6826679 C3.64067359,20.7116969 3.57073936,20.7267072 3.5,20.7267072 C3.22385763,20.7267072 3,20.5028496 3,20.2267072 L3,13.5 Z" fill="#000000"></path>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
																<span class="menu-text">Social Presence</span>
																<i class="menu-arrow"></i>
															</a>
															<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																<ul class="menu-subnav">
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Reached Users</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">SEO Ranking</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">User Dropout Points</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Market Segments</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Opportunity Growth</span>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="javascript:;" class="menu-link">
																<span class="svg-icon menu-icon">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-at.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<path d="M11.575,21.2 C6.175,21.2 2.85,17.4 2.85,12.575 C2.85,6.875 7.375,3.05 12.525,3.05 C17.45,3.05 21.125,6.075 21.125,10.85 C21.125,15.2 18.825,16.925 16.525,16.925 C15.4,16.925 14.475,16.4 14.075,15.65 C13.3,16.4 12.125,16.875 11,16.875 C8.25,16.875 6.85,14.925 6.85,12.575 C6.85,9.55 9.05,7.1 12.275,7.1 C13.2,7.1 13.95,7.35 14.525,7.775 L14.625,7.35 L17,7.35 L15.825,12.85 C15.6,13.95 15.85,14.825 16.925,14.825 C18.25,14.825 19.025,13.725 19.025,10.8 C19.025,6.9 15.95,5.075 12.5,5.075 C8.625,5.075 5.05,7.75 5.05,12.575 C5.05,16.525 7.575,19.1 11.575,19.1 C13.075,19.1 14.625,18.775 15.975,18.075 L16.8,20.1 C15.25,20.8 13.2,21.2 11.575,21.2 Z M11.4,14.525 C12.05,14.525 12.7,14.35 13.225,13.825 L14.025,10.125 C13.575,9.65 12.925,9.425 12.3,9.425 C10.65,9.425 9.45,10.7 9.45,12.375 C9.45,13.675 10.075,14.525 11.4,14.525 Z" fill="#000000"></path>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
																<span class="menu-text">Sales &amp; Marketing</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="javascript:;" class="menu-link">
																<span class="svg-icon menu-icon">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Chat-locked.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<polygon fill="#000000" opacity="0.3" points="5 15 3 21.5 9.5 19.5"></polygon>
																			<path d="M16,10 L16,9.5 C16,8.11928813 14.8807119,7 13.5,7 C12.1192881,7 11,8.11928813 11,9.5 L11,10 C10.4477153,10 10,10.4477153 10,11 L10,14 C10,14.5522847 10.4477153,15 11,15 L16,15 C16.5522847,15 17,14.5522847 17,14 L17,11 C17,10.4477153 16.5522847,10 16,10 Z M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M13.5,8 L13.5,8 C14.3284271,8 15,8.67157288 15,9.5 L15,10 L12,10 L12,9.5 C12,8.67157288 12.6715729,8 13.5,8 Z" fill="#000000"></path>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
																<span class="menu-text">Campaigns</span>
																<span class="menu-label">
																	<span class="label label-success label-rounded">3</span>
																</span>
															</a>
														</li>
														<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
															<a href="javascript:;" class="menu-link menu-toggle">
																<span class="svg-icon menu-icon">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
																			<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
																<span class="menu-text">Deployment Center</span>
																<i class="menu-arrow"></i>
															</a>
															<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																<ul class="menu-subnav">
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Merge Branch</span>
																			<span class="menu-label">
																				<span class="label label-danger label-rounded">3</span>
																			</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Version Controls</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Database Manager</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">System Settings</span>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</li>
										</ul>
										<!--end::Header Nav-->
									</div>
									<!--end::Header Menu-->
								</div>
								<div class="topbar">
									<div class="topbar-item">
										<div class=" w-auto btn-clean d-flex align-items-center px-2" id="kt_quick_user_toggle">
											<span class="text-dark font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
											<span class="text-dark font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>
											<span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
												<span class="symbol-label font-size-h5 font-weight-bold">S</span>
											</span>
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