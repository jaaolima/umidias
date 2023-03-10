<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	session_start();
	setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Sao_Paulo');

	if ( $_SESSION['autenticado'] !=='validado') {
		header("location: index.php");
		exit();
	}
   	$id_usuario = $_SESSION['id_usuario'];
	$id_perfil = $_SESSION['id_perfil'];

	require_once("Classes/Usuario.php");
	$usuario = new Usuario();
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
		<title>100 Limites - Dashboard</title>
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
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="assets/media/Logo-Vertical-01-alterada.png" />
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
					<!--begin::Header Mobile-->
					<div id="kt_header_mobile" class="header-mobile">
						<!--begin::Logo-->
						<a href="index.html">
							<img alt="Logo" src="assets/media/Logo-Vertical-01-alterada.png" class="max-h-30px" /> 
						</a>
						<!--end::Logo-->
						<!--begin::Toolbar-->
						<div class="d-flex align-items-center">
							<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
								<span></span>
							</button>
							<button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
								<span class="svg-icon svg-icon-xl">
									<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon points="0 0 24 0 24 24 0 24" />
											<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
											<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
										</g>
									</svg>
									<!--end::Svg Icon-->
								</span>
							</button>
						</div>
						<!--end::Toolbar-->
					</div>
					<!--end::Header Mobile-->
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Left-->
							<div class="d-none d-lg-flex align-items-center mr-3">
								<!--begin::Logo-->
								<a href="index.html">
                                    <img alt="Logo" src="assets/media/Logo-Vertical-01-alterada.png" class="max-h-100px" /> 
                                </a>
								<!--end::Logo-->
							</div>
							<!--end::Left-->
							<!--begin::Topbar-->
							<div class="topbar topbar-minimize">
								<!--begin::User-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
										<div class="btn btn-icon btn-clean h-40px w-40px btn-dropdown">
											<span class="svg-icon svg-icon-lg">
												<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
										<div class="d-flex align-items-center p-8 rounded-top">
											<!--begin::Text-->
											<div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5"><?php echo $dadosUsuario["ds_nome"]; ?></div>
											<!--end::Text-->
										</div>
										<div class="navi navi-spacer-x-0 pt-5">
											<!--begin::Item-->
											<?php if($id_perfil == 1 || $id_perfil == 3) : ?>
											<a href="custom/apps/userprofile-1/overview.html" class="navi-item px-8">
												<div class="navi-link">
													<div class="navi-icon mr-2">
														<i class="fas fa-dollar-sign text-primary"></i>
													</div>
													<div class="navi-text">
														<div class="font-weight-bold">Pagamento</div>
														<div class="text-muted">Pagamento do Plano</div>
													</div>
												</div>
											</a>
											<?php endif; ?>
											<!--end::Item-->
											<!--begin::Footer-->
											<div class="navi-separator mt-3"></div>
											<div class="navi-footer px-8 py-5">
												<a href="appUsuario/logout.php" class="btn btn-primary font-weight-bold">Sair</a>
											</div>
											<!--end::Footer-->
										</div>
										<!--end::Nav-->
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::User-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Header Menu Wrapper-->
					<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
						<div class="container">
							<!--begin::Header Menu-->
							<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default header-menu-root-arrow">
								<!--begin::Header Nav-->
								<ul class="menu-nav">
									<li class="menu-item menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
										<a href="principal.php" class="menu-link menu-toggle">
											<span class="menu-text">Dashboard</span>
										</a>
									</li>
									<?php if($id_perfil == 1 || $id_perfil == 3) : ?>
									<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="menu-text">Meus Treinos</span>
											<span class="menu-desc"></span>
										</a>
									</li>
									<?php endif; ?>
									<?php if($id_perfil == 1 || $id_perfil == 2) : ?>
									<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
										<a href="appTreino/listar_aluno.php" class="menu-link menu-toggle">
											<span class="menu-text">Prescrever treinos</span>
											<span class="menu-desc"></span>
										</a>
									</li>
									<?php endif; ?>
									<?php if($id_perfil == 1 || $id_perfil == 2) : ?>
									<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="menu-text">Cadastros</span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-left">
											<ul class="menu-subnav">
												
												<li class="menu-item menu-item-submenu"  data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<span class="menu-text">Treino</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="appTipo/listar_tipo.php" class="menu-link">
																	<span class="menu-text">Tipo</span>
																	<span class="menu-desc"></span> 
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="appArea/listar_area.php" class="menu-link">
																	<span class="menu-text">??rea</span>
																	<span class="menu-desc"></span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="appExercicio/listar_exercicio.php" class="menu-link">
																	<span class="menu-text">Exerc??cio</span>
																	<span class="menu-desc"></span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<span class="menu-text">Usu??rios</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="appUsuario/listar_usuario.php" class="menu-link">
																	<span class="menu-text">Usu??rios</span>
																	<span class="menu-desc"></span> 
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="appAluno/listar_aluno.php" class="menu-link">
																	<span class="menu-text">Alunos</span>
																	<span class="menu-desc"></span> 
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="appPerfil/listar_perfil.php" class="menu-link">
																	<span class="menu-text">Perfil</span>
																	<span class="menu-desc"></span> 
																</a>
															</li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</li>
									<?php endif; ?>
									
								</ul>
								<!--end::Header Nav-->
							</div>
							<!--end::Header Menu-->
						</div>
					</div>
					<!--end::Header Menu Wrapper-->
					<!--begin::Container-->
					<div class="d-flex flex-row flex-column-fluid container">
						<!--begin::Content Wrapper-->
						<div class="main d-flex flex-column flex-row-fluid">
							<div class="content flex-column-fluid" id="conteudo">
								<!--begin::Dashboard-->
								<?php if($id_perfil == 1 || $id_perfil == 2) : ?>
								<div class="row">
									<div class="col-lg-12">
										<div class="card card-custom w-100 bg-white p-8" >
											<div class="card-header border-0 py-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Treino</span>
												</h3>
											</div>
											<div class="card-body">
												<div class="col-4">
													<div class="card card-custom gutter-b" style="height: 250px">
														<!--begin::Body-->
														<div class="card-body d-flex flex-column p-0">
															<!--begin::Stats-->
															<div class="flex-grow-1 card-spacer pb-0">
																<span class="svg-icon svg-icon-2x svg-icon-info">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
																<div class="font-weight-boldest font-size-h3 pt-2">875</div>
																<div class="text-muted font-weight-bold">New Customers</div>
															</div>
															<!--end::Stats-->
														</div>
														<!--end::Body-->
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								<?php endif; ?>
								<?php if($id_perfil == 1 || $id_perfil == 3) : ?>
								<div class="row">
									<div class="col-lg-12">
										<div class="card card-custom w-100 bgi-no-repeat bgi-size-cover gutter-b bg-white p-8" >
											<div class="card-header border-0 py-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Calend??rio</span>
												</h3>
											</div>
											<div class="card-body">
												<div id="calendario"></div>
											</div>
										</div>
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
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2021??</span>
								<a href="principal.php" class="text-white text-hover-primary">100Limites</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<!-- <div class="nav nav-dark order-1 order-md-2">
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0 text-muted text-hover-primary">About</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3 text-muted text-hover-primary">Team</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-3 pr-0 text-muted text-hover-primary">Contact</a>
							</div> -->
							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
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
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/widgets.js"></script> 
		<script src="assets/js/custom.js"></script>
		<script src="assets\plugins\owlCarousel\dist\owl.carousel.min.js"></script>
		<!--end::Page Scripts-->
		<script>
			//carousel
			$(document).ready(function(){
				$(".owl-carousel").owlCarousel({
					items:4,
					nav:false,
					center:true,
					loop:false,
					dots:false,
					margin:30,
					// responsive: {
					// 	0:{
					// 		items:1
					// 	},
					// 	360:{
					// 		items:3
					// 	},
					// 	2000:{
					// 		items:4
					// 	}
					// }

				});

			});

			var KTCalendarBackgroundEvents = function() {

				return {
					//main function to initiate the module
					init: function() {
						var todayDate = moment().startOf('day');
						var YM = todayDate.format('YYYY-MM');
						var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
						var TODAY = todayDate.format('YYYY-MM-DD');
						var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

						var calendarEl = document.getElementById('calendario');
						var calendar = new FullCalendar.Calendar(calendarEl, {
							locale: 'pt-br',
							plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],

							isRTL: KTUtil.isRTL(),
							header: {
								left: '',
								right: 'prev,next today',
								center: 'title',
							},

							height: 800,
							contentHeight: 780,
							aspectRatio: 3,  // see: https://fullcalendar.io/docs/aspectRatio

							nowIndicator: true,
							now: TODAY + 'T09:25:00', // just for demo

							views: {
								dayGridMonth: { buttonText: 'month' },
								timeGridWeek: { buttonText: 'week' },
								timeGridDay: { buttonText: 'day' }
							},

							defaultView: 'dayGridMonth',
							defaultDate: TODAY,
							eventLimit: true, // allow "more" link when too many events
							businessHours: true, // display business hours
							events: [
								
							],
							/*eventBackgroundColor: '#46454565' ,
							eventTextColor: 'white' ,*/
							eventBorderColor: 'black',
							

							eventRender: function(info) {
								var element = $(info.el);
								var elementV = info.el;

							if (info.event.extendedProps && info.event.extendedProps.description) {
									if (element.hasClass('fc-day-grid-event')) {
										element.data('content', info.event.extendedProps.description);
										element.data('placement', 'top');
										KTApp.initPopover(element);
									} else if (element.hasClass('fc-time-grid-event')) {
										element.find('.fc-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
									} else if (element.find('.fc-list-item-title').lenght !== 0) {
										element.find('.fc-list-item-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
									}
								}
								var event = info.event;
								if (event.rendering == "background") {
									elementV.append(event.title);
								}
							},
						});

						calendar.render();
					}
				};
				}();

				jQuery(document).ready(function() {
				KTCalendarBackgroundEvents.init();
				});

				// Class definition
				var KTLeaflet = function () {

					// Private functions
					/*var demo1 = function () {
						// define leaflet
						var leaflet = L.map('mapa', {
							center: [-37.8179793, 144.9671293],
							zoom: 11
						});

						// set leaflet tile layer
						L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
							attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
						}).addTo(leaflet);

						// set custom SVG icon marker
						var leafletIcon = L.divIcon({
							html: `<span class="svg-icon svg-icon-danger svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>`,
							bgPos: [10, 10],
							iconAnchor: [20, 37],
							popupAnchor: [0, -37],
							className: 'leaflet-marker'
						});

						// bind marker with popup
						var marker = L.marker([-37.8179793, 144.9671293], { icon: leafletIcon }).addTo(leaflet);
						marker.bindPopup("<b>Flinder's Station</b><br/>Melbourne, Victoria").openPopup();
					}

					return {
						// public functions
						init: function () {
							// default charts
							demo1();
						}
					};*/
				}();

				jQuery(document).ready(function () {
					KTLeaflet.init();
				});

		</script>
	</body>
	<!--end::Body-->
</html>