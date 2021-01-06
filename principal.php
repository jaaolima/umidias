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
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header Mobile-->
					<div id="kt_header_mobile" class="header-mobile">
						<!--begin::Logo-->
						<a href="principal.php">
							<img alt="Logo" src="assets/media/logos/logo-default.png" class="max-h-30px " />
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
					<div id="kt_header" class="header ">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Left-->
							<div class="d-none d-lg-flex align-items-center mr-3">
								<!--begin::Logo-->
								<a href="principal.php" class="mr-20">
									<img alt="Logo" src="assets/media/logo.png" class="logo-default max-h-55px" style="height: 40px;" />
								</a>
								<!--end::Logo-->
							</div>
							<!--end::Left-->
							<!--begin::Topbar-->
							<?php  /*?><div class="topbar topbar-minimize">
								<!--begin::Search-->
								<div class="topbar-item mr-3 w-100 w-lg-auto justify-content-start">
									<div class="quick-search quick-search-inline w-auto w-lg-200px" id="kt_quick_search_inline">
										<!--begin::Form-->
										<form method="get" class="quick-search-form">
											<div class="input-group rounded bg-light">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<span class="svg-icon svg-icon-lg">
															<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
												</div>
												<input type="text" class="form-control h-40px" placeholder="Buscar..." />
												<div class="input-group-append">
													<span class="input-group-text">
														<i class="quick-search-close ki ki-close icon-sm"></i>
													</span>
												</div>
											</div>
										</form>
										<!--end::Form-->
										<!--begin::Search Toggle-->
										<div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,1px"></div>
										<!--end::Search Toggle-->
										<!--begin::Dropdown-->
										<div class="dropdown-menu dropdown-menu-left dropdown-menu-lg dropdown-menu-anim-up">
											<div class="quick-search-wrapper scroll" data-scroll="true" data-height="350" data-mobile-height="200"></div>
										</div>
										<!--end::Dropdown-->
									</div>
								</div>
								<!--end::Search-->
								<!--begin::Notifications-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item mr-3" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn btn-icon btn-clean h-40px w-40px btn-dropdown pulse pulse-white">
											<span class="svg-icon-{secondary} svg-icon-lg">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
														<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
											<span class="pulse-ring"></span>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
										<form>
											<!--begin::Header-->
											<div class="d-flex flex-column pt-12 bg-dark-o-5 rounded-top">
												<!--begin::Title-->
												<h4 class="d-flex flex-center">
													<span class="text-dark">User Notifications</span>
													<span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23 new</span>
												</h4>
												<!--end::Title-->
												<!--begin::Tabs-->
												<ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary mt-3 px-8" role="tablist">
													<li class="nav-item">
														<a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications">Alerts</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#topbar_notifications_events">Events</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs">Logs</a>
													</li>
												</ul>
												<!--end::Tabs-->
											</div>
											<!--end::Header-->
											<!--begin::Content-->
											<div class="tab-content">
												<!--begin::Tabpane-->
												<div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
													<!--begin::Scroll-->
													<div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-primary mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-primary">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																				<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Cool App</a>
																<span class="text-muted">Marketing campaign planning</span>
															</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-warning mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-warning">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Awesome SAAS</a>
																<span class="text-muted">Project status update meeting</span>
															</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-success mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-success">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
																				<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Claudy Sys</a>
																<span class="text-muted">Project Deployment &amp; Launch</span>
															</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-danger mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-danger">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
																				<path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
																				<path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
																				<path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Trilo Service</a>
																<span class="text-muted">Analytics &amp; Requirement Study</span>
															</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-info mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-info">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
																				<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />
																				<path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Bravia SAAS</a>
																<span class="text-muted">Reporting Application</span>
															</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-danger mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-danger">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
																				<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Express Wind</a>
																<span class="text-muted">Software Analytics &amp; Design</span>
															</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-success mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-success">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z" fill="#000000" fill-rule="nonzero" transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000)" />
																				<path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Bruk Fitness</a>
																<span class="text-muted">Web Design &amp; Development</span>
															</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Scroll-->
													<!--begin::Action-->
													<div class="d-flex flex-center pt-7">
														<a href="#" class="btn btn-light-primary font-weight-bold text-center">See All</a>
													</div>
													<!--end::Action-->
												</div>
												<!--end::Tabpane-->
												<!--begin::Tabpane-->
												<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
													<!--begin::Nav-->
													<div class="navi navi-hover scroll my-4" data-scroll="true" data-height="300" data-mobile-height="200">
														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-line-chart text-success"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">New report has been received</div>
																	<div class="text-muted">23 hrs ago</div>
																</div>
															</div>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-paper-plane text-danger"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">Finance report has been generated</div>
																	<div class="text-muted">25 hrs ago</div>
																</div>
															</div>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-user flaticon2-line- text-success"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">New order has been received</div>
																	<div class="text-muted">2 hrs ago</div>
																</div>
															</div>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-pin text-primary"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">New customer is registered</div>
																	<div class="text-muted">3 hrs ago</div>
																</div>
															</div>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-sms text-danger"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">Application has been approved</div>
																	<div class="text-muted">3 hrs ago</div>
																</div>
															</div>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-pie-chart-3 text-warning"></i>
																</div>
																<div class="navinavinavi-text">
																	<div class="font-weight-bold">New file has been uploaded</div>
																	<div class="text-muted">5 hrs ago</div>
																</div>
															</div>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon-pie-chart-1 text-info"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">New user feedback received</div>
																	<div class="text-muted">8 hrs ago</div>
																</div>
															</div>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-settings text-success"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">System reboot has been successfully completed</div>
																	<div class="text-muted">12 hrs ago</div>
																</div>
															</div>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon-safe-shield-protection text-primary"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">New order has been placed</div>
																	<div class="text-muted">15 hrs ago</div>
																</div>
															</div>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-notification text-primary"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">Company meeting canceled</div>
																	<div class="text-muted">19 hrs ago</div>
																</div>
															</div>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-fax text-success"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">New report has been received</div>
																	<div class="text-muted">23 hrs ago</div>
																</div>
															</div>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon-download-1 text-danger"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">Finance report has been generated</div>
																	<div class="text-muted">25 hrs ago</div>
																</div>
															</div>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon-security text-warning"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">New customer comment recieved</div>
																	<div class="text-muted">2 days ago</div>
																</div>
															</div>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-analytics-1 text-success"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">New customer is registered</div>
																	<div class="text-muted">3 days ago</div>
																</div>
															</div>
														</a>
														<!--end::Item-->
													</div>
													<!--end::Nav-->
												</div>
												<!--end::Tabpane-->
												<!--begin::Tabpane-->
												<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
													<!--begin::Nav-->
													<div class="d-flex flex-center text-center text-muted min-h-200px">All caught up!
													<br />No new notifications.</div>
													<!--end::Nav-->
												</div>
												<!--end::Tabpane-->
											</div>
											<!--end::Content-->
										</form>
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Notifications-->
								<!--begin::Quick Actions-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item mr-3" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn btn-icon btn-clean h-40px w-40px btn-dropdown">
											<span class="svg-icon-{dark-50}  svg-icon-lg">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
														<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
														<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
														<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
										<!--begin:Header-->
										<div class="d-flex flex-column flex-center py-10 bg-dark-o-5 rounded-top bg-light">
											<h4 class="text-dark font-weight-bold">Quick Actions</h4>
											<span class="btn btn-success btn-sm font-weight-bold font-size-sm mt-2">23 tasks pending</span>
										</div>
										<!--end:Header-->
										<!--begin:Nav-->
										<div class="row row-paddingless">
											<!--begin:Item-->
											<div class="col-6">
												<a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-right border-bottom">
													<span class="svg-icon svg-icon-3x svg-icon-success">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Euro.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z" fill="#000000" opacity="0.3" />
																<path d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z" fill="#000000" />
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
													<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Accounting</span>
													<span class="d-block text-dark-50 font-size-lg">eCommerce</span>
												</a>
											</div>
											<!--end:Item-->
											<!--begin:Item-->
											<div class="col-6">
												<a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-bottom">
													<span class="svg-icon svg-icon-3x svg-icon-success">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-attachment.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z" fill="#000000" opacity="0.3" />
																<path d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z" fill="#000000" />
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
													<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Administration</span>
													<span class="d-block text-dark-50 font-size-lg">Console</span>
												</a>
											</div>
											<!--end:Item-->
											<!--begin:Item-->
											<div class="col-6">
												<a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-right">
													<span class="svg-icon svg-icon-3x svg-icon-success">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
																<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
													<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Projects</span>
													<span class="d-block text-dark-50 font-size-lg">Pending Tasks</span>
												</a>
											</div>
											<!--end:Item-->
											<!--begin:Item-->
											<div class="col-6">
												<a href="#" class="d-block py-10 px-5 text-center bg-hover-light">
													<span class="svg-icon svg-icon-3x svg-icon-success">
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
													<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Customers</span>
													<span class="d-block text-dark-50 font-size-lg">Latest cases</span>
												</a>
											</div>
											<!--end:Item-->
										</div>
										<!--end:Nav-->
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Quick Actions-->
								<!--begin::My Cart-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item mr-3" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn btn-icon btn-clean h-40px w-40px btn-dropdown">
											<span class="svg-icon-{dark-50}  svg-icon-lg">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-xl dropdown-menu-anim-up">
										<form>
											<!--begin::Header-->
											<div class="d-flex align-items-center py-10 px-8 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(assets/media/misc/bg-1.jpg)">
												<span class="btn btn-md btn-icon bg-white-o-15 mr-4">
													<i class="flaticon2-shopping-cart-1 text-success"></i>
												</span>
												<h4 class="text-white m-0 flex-grow-1 mr-3">My Cart</h4>
												<button type="button" class="btn btn-success btn-sm">2 Items</button>
											</div>
											<!--end::Header-->
											<!--begin::Scroll-->
											<div class="scroll scroll-push" data-scroll="true" data-height="250" data-mobile-height="200">
												<!--begin::Item-->
												<div class="d-flex align-items-center justify-content-between p-8">
													<div class="d-flex flex-column mr-2">
														<a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">iBlender</a>
														<span class="text-muted">Best kichen gadget in 2020</span>
														<div class="d-flex align-items-center mt-2">
															<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 350</span>
															<span class="text-muted mr-1">for</span>
															<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">5</span>
															<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
																<i class="ki ki-minus icon-xs"></i>
															</a>
															<a href="#" class="btn btn-xs btn-light-success btn-icon">
																<i class="ki ki-plus icon-xs"></i>
															</a>
														</div>
													</div>
													<a href="#" class="symbol symbol-70 flex-shrink-0">
														<img src="assets/media/stock-600x400/img-1.jpg" title="" alt="" />
													</a>
												</div>
												<!--end::Item-->
												<!--begin::Separator-->
												<div class="separator separator-solid"></div>
												<!--end::Separator-->
												<!--begin::Item-->
												<div class="d-flex align-items-center justify-content-between p-8">
													<div class="d-flex flex-column mr-2">
														<a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">SmartCleaner</a>
														<span class="text-muted">Smart tool for cooking</span>
														<div class="d-flex align-items-center mt-2">
															<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
															<span class="text-muted mr-1">for</span>
															<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">4</span>
															<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
																<i class="ki ki-minus icon-xs"></i>
															</a>
															<a href="#" class="btn btn-xs btn-light-success btn-icon">
																<i class="ki ki-plus icon-xs"></i>
															</a>
														</div>
													</div>
													<a href="#" class="symbol symbol-70 flex-shrink-0">
														<img src="assets/media/stock-600x400/img-2.jpg" title="" alt="" />
													</a>
												</div>
												<!--end::Item-->
												<!--begin::Separator-->
												<div class="separator separator-solid"></div>
												<!--end::Separator-->
												<!--begin::Item-->
												<div class="d-flex align-items-center justify-content-between p-8">
													<div class="d-flex flex-column mr-2">
														<a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">CameraMax</a>
														<span class="text-muted">Professional camera for edge cutting shots</span>
														<div class="d-flex align-items-center mt-2">
															<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 150</span>
															<span class="text-muted mr-1">for</span>
															<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">3</span>
															<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
																<i class="ki ki-minus icon-xs"></i>
															</a>
															<a href="#" class="btn btn-xs btn-light-success btn-icon">
																<i class="ki ki-plus icon-xs"></i>
															</a>
														</div>
													</div>
													<a href="#" class="symbol symbol-70 flex-shrink-0">
														<img src="assets/media/stock-600x400/img-3.jpg" title="" alt="" />
													</a>
												</div>
												<!--end::Item-->
												<!--begin::Separator-->
												<div class="separator separator-solid"></div>
												<!--end::Separator-->
												<!--begin::Item-->
												<div class="d-flex align-items-center justify-content-between p-8">
													<div class="d-flex flex-column mr-2">
														<a href="#" class="font-weight-bold text-dark text-hover-primary">4DPrinter</a>
														<span class="text-muted">Manufactoring unique objects</span>
														<div class="d-flex align-items-center mt-2">
															<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 1450</span>
															<span class="text-muted mr-1">for</span>
															<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
															<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
																<i class="ki ki-minus icon-xs"></i>
															</a>
															<a href="#" class="btn btn-xs btn-light-success btn-icon">
																<i class="ki ki-plus icon-xs"></i>
															</a>
														</div>
													</div>
													<a href="#" class="symbol symbol-70 flex-shrink-0">
														<img src="assets/media/stock-600x400/img-4.jpg" title="" alt="" />
													</a>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Scroll-->
											<!--begin::Summary-->
											<div class="p-8">
												<div class="d-flex align-items-center justify-content-between mb-4">
													<span class="font-weight-bold text-muted font-size-sm mr-2">Total</span>
													<span class="font-weight-bolder text-dark-50 text-right">$1840.00</span>
												</div>
												<div class="d-flex align-items-center justify-content-between mb-7">
													<span class="font-weight-bold text-muted font-size-sm mr-2">Sub total</span>
													<span class="font-weight-bolder text-primary text-right">$5640.00</span>
												</div>
												<div class="text-right">
													<button type="button" class="btn btn-primary text-weight-bold">Place Order</button>
												</div>
											</div>
											<!--end::Summary-->
										</form>
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::My Cart-->
								<!--begin::Quick panel-->
								<div class="topbar-item mr-3">
									<div class="btn btn-icon btn-clean h-40px w-40px" id="kt_quick_panel_toggle">
										<span class="svg-icon-{dark-50}  svg-icon-lg">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
													<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</div>
								</div>
								<!--end::Quick panel-->
								<!--begin::User-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
										<div class="btn btn-icon btn-clean h-40px w-40px btn-dropdown">
											<span class="svg-icon-{dark-50}  svg-icon-lg">
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
										<!--begin::Header-->
										<div class="d-flex align-items-center p-8 rounded-top">
											<!--begin::Symbol-->
											<div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
												<img src="assets/media/users/300_21.jpg" alt="" />
											</div>
											<!--end::Symbol-->
											<!--begin::Text-->
											<div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5"><?php echo $_SESSION['ds_usuario'];?></div>
											<span class="label label-light-success label-lg font-weight-bold label-inline">3 messages</span>
											<!--end::Text-->
										</div>
										<div class="separator separator-solid"></div>
										<!--end::Header-->
										<!--begin::Nav-->
										<div class="navi navi-spacer-x-0 pt-5">
											<!--begin::Item-->
											<a href="custom/apps/user/profile-1/personal-information.html" class="navi-item px-8">
												<div class="navi-link">
													<div class="navi-icon mr-2">
														<i class="flaticon2-calendar-3 text-success"></i>
													</div>
													<div class="navi-text">
														<div class="font-weight-bold">My Profile</div>
														<div class="text-muted">Account settings and more
														<span class="label label-light-danger label-inline font-weight-bold">update</span></div>
													</div>
												</div>
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="custom/apps/user/profile-3.html" class="navi-item px-8">
												<div class="navi-link">
													<div class="navi-icon mr-2">
														<i class="flaticon2-mail text-warning"></i>
													</div>
													<div class="navi-text">
														<div class="font-weight-bold">My Messages</div>
														<div class="text-muted">Inbox and tasks</div>
													</div>
												</div>
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="custom/apps/user/profile-2.html" class="navi-item px-8">
												<div class="navi-link">
													<div class="navi-icon mr-2">
														<i class="flaticon2-rocket-1 text-danger"></i>
													</div>
													<div class="navi-text">
														<div class="font-weight-bold">My Activities</div>
														<div class="text-muted">Logs and notifications</div>
													</div>
												</div>
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="custom/apps/userprofile-1/overview.html" class="navi-item px-8">
												<div class="navi-link">
													<div class="navi-icon mr-2">
														<i class="flaticon2-hourglass text-primary"></i>
													</div>
													<div class="navi-text">
														<div class="font-weight-bold">My Tasks</div>
														<div class="text-muted">latest tasks and projects</div>
													</div>
												</div>
											</a>
											<!--end::Item-->
											<!--begin::Footer-->
											<div class="navi-separator mt-3"></div>
											<div class="navi-footer px-8 py-5">
												<a href="appUsuario/logout.php" class="btn btn-light-primary font-weight-bold">Sair</a>
												<a href="custom/user/login-v2.html" target="_blank" class="btn btn-clean font-weight-bold">Upgrade Plan</a>
											</div>
											<!--end::Footer-->
										</div>
										<!--end::Nav-->
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::User-->
							</div><?php */?>
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
									<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
										<a href="principal.php" class="menu-link menu-toggle">
											<span class="menu-text">Painel de Controle</span>
										</a>	
									</li>
									<?php if($_SESSION['id_perfil'] == 3 ) :  ?>
										<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
											<a href="javascript:;" class="menu-link menu-toggle">
												<span class="menu-text">Cadastros</span>
												<span class="menu-desc"></span>
												<i class="menu-arrow"></i>
											</a>
											<div class="menu-submenu menu-submenu-classic menu-submenu-left">
												<ul class="menu-subnav">
													<li class="menu-item" aria-haspopup="true">
														<a href="appParceiro/listar_parceiro.php" class="menu-link">
															<span class="fas fa-address-book">&nbsp;
														
															</span>
															<span class="menu-text">Cadastro de Parceiros</span>
														</a>
													</li>
													<li class="menu-item" aria-haspopup="true">
														<a  href="appCategoria/listar_categoria.php" class="menu-link">
															<span class="far fa-list-alt">&nbsp;
																
															</span>
															<span class="menu-text">Cadastro de Categoria de Mídia </span>
														</a>
													</li>
													<li class="menu-item" aria-haspopup="true">
														<a  href="appCliente/listar_cliente.php" class="menu-link">
															<span class="far fa-handshake">&nbsp;
																
															</span>
															<span class="menu-text">Cadastro de Tipo de Clientes</span>
														</a>
													</li>
													<li class="menu-item" aria-haspopup="true">
														<a  href="appResponsavel/listar_responsavel.php" class="menu-link">
															<span class="far fa-user">&nbsp;
																
															</span>
															<span class="menu-text">Cadastro de Responsável da agencia</span>
														</a>
													</li>
													<li class="menu-item" aria-haspopup="true">
														<a href="appPonto/listar_ponto.php" class="menu-link">
															<span class="fab fa-discourse">&nbsp;
																
															</span>
															<span class="menu-text">Cadastro dos Pontos</span>
														</a>
													</li>												
												</ul>
											</div>
										</li>
									<?php endif; ?>	
									<?php if($_SESSION['id_perfil'] == 3 ) :  ?>
										<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
											<a href="javascript:;" class="menu-link menu-toggle">
												<span class="menu-text">Administração</span>
												<span class="menu-desc"></span>
												<i class="menu-arrow"></i>
											</a>
											<div class="menu-submenu menu-submenu-classic menu-submenu-left">
												<ul class="menu-subnav">
													<li class="menu-item" aria-haspopup="true">
														<a href="appUsuario/listar_usuario.php" class="menu-link">
															<span class="fas fa-address-book">
																
															</span>&nbsp;
															<span class="menu-text">Cadastro de Usuários</span>
														</a>
													</li>
													<li class="menu-item" aria-haspopup="true">
														<a target="_blank" href="https://preview.keenthemes.com/metronic/demo8/builder.html" class="menu-link">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">Permissões</span>
														</a>
													</li>
												</ul>
											</div>
										</li>
									<?php endif; ?>	
									<?php if($_SESSION['id_perfil'] == 3 ) :  ?>
										<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
											<a href="javascript:;" class="menu-link menu-toggle">
												<span class="menu-text">Relatórios</span>
												<span class="menu-desc"></span>
												<i class="menu-arrow"></i>
											</a>
											<div class="menu-submenu menu-submenu-classic menu-submenu-left">
												<ul class="menu-subnav">
													<li class="menu-item" aria-haspopup="true">
														<a target="_blank" href="https://preview.keenthemes.com/metronic/demo8/builder.html" class="menu-link">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">Relatório de Parceiros</span>
														</a>
													</li>
													<li class="menu-item" aria-haspopup="true">
														<a target="_blank" href="https://preview.keenthemes.com/metronic/demo8/builder.html" class="menu-link">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">Relatório de Categoria de Mídia</span>
														</a>
													</li>
													<li class="menu-item" aria-haspopup="true">
														<a target="_blank" href="https://preview.keenthemes.com/metronic/demo8/builder.html" class="menu-link">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">Relatório de Tipo de Cliente</span>
														</a>
													</li>
													<li class="menu-item" aria-haspopup="true">
														<a target="_blank" href="https://preview.keenthemes.com/metronic/demo8/builder.html" class="menu-link">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">Relatório de Responsáveis de Agencias</span>
														</a>
													</li>
													<li class="menu-item" aria-haspopup="true">
														<a target="_blank" href="https://preview.keenthemes.com/metronic/demo8/builder.html" class="menu-link">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">Relatório de Pontos</span>
														</a>
													</li>
													<li class="menu-item" aria-haspopup="true">
														<a target="_blank" href="https://preview.keenthemes.com/metronic/demo8/builder.html" class="menu-link">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">Relatório de Usuários</span>
														</a>
													</li>
													<li class="menu-item" aria-haspopup="true">
														<a target="_blank" href="https://preview.keenthemes.com/metronic/demo8/builder.html" class="menu-link">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">Relatório de Categoria de Mídia</span>
														</a>
													</li>
													
												</ul>
											</div>
										</li>
									<?php endif; ?>
									<?php if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 4) :  ?>
										<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
											<a href="listar_tipo.php" class="menu-link menu-toggle">
												<span class="menu-text">Escolha sua mídia</span>
											</a>	
										</li>
									<?php endif; ?>
									<?php if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 4 ) :  ?>
										<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
											<a href="appCliente/listar_minhas_midias.php" class="menu-link menu-toggle">
												<span class="menu-text">Minhas Mídias</span>
											</a>	
										</li>
									<?php endif; ?>
									<?php if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 4) :  ?>
										<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
											<a href="principal.php" class="menu-link menu-toggle">
												<span class="menu-text">Financeiro</span>
											</a>	
										</li>
									<?php endif; ?>
									<?php if($_SESSION['id_perfil'] == 2 ) :  ?>
										<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
											<a href="appParceiro/listar_tipo.php" class="menu-link menu-toggle">
												<span class="menu-text">Cadastrar Mídia</span>
											</a>	
										</li>
									<?php endif; ?>
									<?php if($_SESSION['id_perfil'] == 2 ) :  ?>
										<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
											<a href="appParceiro/listar_minhas_midias.php" class="menu-link menu-toggle">
												<span class="menu-text">Minhas Mídias</span>
											</a>	
										</li>
									<?php endif; ?>
									<?php if($_SESSION['id_perfil'] == 2 ) :  ?>
										<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
											<a href="principal.php" class="menu-link menu-toggle">
												<span class="menu-text">Financeiro</span>
											</a>	
										</li>
									<?php endif; ?>
						

                                <!--<li class="menu-item menu-item-submenu" data-menu-toggle="click" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="menu-text">Pages</span>
											<span class="menu-desc"></span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-fixed menu-submenu-center" style="width:1150px">
											<div class="menu-subnav">
												<ul class="menu-content">
													<li class="menu-item">
														<h3 class="menu-heading menu-toggle">
															<span class="menu-text">Pricing Tables</span>
															<i class="menu-arrow"></i>
														</h3>
														<ul class="menu-inner">
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/pricing/pricing-1.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Pricing Tables 1</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/pricing/pricing-2.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Pricing Tables 2</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/pricing/pricing-3.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Pricing Tables 3</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/pricing/pricing-4.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Pricing Tables 4</span>
																</a>
															</li>
														</ul>
													</li>
													<li class="menu-item">
														<h3 class="menu-heading menu-toggle">
															<span class="menu-text">Wizards</span>
															<i class="menu-arrow"></i>
														</h3>
														<ul class="menu-inner">
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/wizard/wizard-1.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Wizard 1</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/wizard/wizard-2.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Wizard 2</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/wizard/wizard-3.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Wizard 3</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/wizard/wizard-4.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Wizard 4</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/wizard/wizard-5.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Wizard 5</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/wizard/wizard-6.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Wizard 6</span>
																</a>
															</li>
														</ul>
													</li>
													<li class="menu-item">
														<h3 class="menu-heading menu-toggle">
															<i class="menu-bullet menu-bullet-dot">
																<span></span>
															</i>
															<span class="menu-text">Invoices</span>
															<i class="menu-arrow"></i>
														</h3>
														<ul class="menu-inner">
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/invoices/invoice-1.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Invoice 1</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/invoices/invoice-2.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Invoice 2</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/invoices/invoice-3.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Invoice 3</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/invoices/invoice-4.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Invoice 4</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/invoices/invoice-5.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Invoice 5</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/invoices/invoice-6.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Invoice 6</span>
																</a>
															</li>
														</ul>
													</li>
													<li class="menu-item">
														<h3 class="menu-heading menu-toggle">
															<i class="menu-bullet menu-bullet-dot">
																<span></span>
															</i>
															<span class="menu-text">Login</span>
															<i class="menu-arrow"></i>
														</h3>
														<ul class="menu-inner">
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/login/login-1.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Login 1</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/login/login-2.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Login 2</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/login/login-3/signup.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Login 3</span>
																	<span class="menu-label">
																		<span class="label label-inline label-info">Wizard</span>
																	</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/login/login-4/signup.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Login 4</span>
																	<span class="menu-label">
																		<span class="label label-inline label-info">Wizard</span>
																	</span>
																</a>
															</li>
														</ul>
													</li>
													<li class="menu-item">
														<h3 class="menu-heading menu-toggle">
															<i class="menu-bullet menu-bullet-dot">
																<span></span>
															</i>
															<span class="menu-text">Classic Login</span>
															<i class="menu-arrow"></i>
														</h3>
														<ul class="menu-inner">
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/login/classic/login-1.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Login 1</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/login/classic/login-2.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Login 2</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/login/classic/login-3.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Login 3</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/login/classic/login-4.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Login 4</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/login/classic/login-5.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Login 5</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/login/classic/login-6.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Login 6</span>
																</a>
															</li>
														</ul>
													</li>
													<li class="menu-item">
														<h3 class="menu-heading menu-toggle">
															<i class="menu-bullet menu-bullet-dot">
																<span></span>
															</i>
															<span class="menu-text">Error Pages</span>
															<i class="menu-arrow"></i>
														</h3>
														<ul class="menu-inner">
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/error/error-1.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Error 1</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/error/error-2.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Error 2</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/error/error-3.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Error 3</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/error/error-4.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Error 4</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/error/error-5.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Error 5</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/pages/error/error-6.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Error 6</span>
																</a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</li>-->
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
							<!--begin::Subheader-->
							<div class="subheader py-2 py-lg-6" id="kt_subheader">
								<div class="w-100 d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
									<!--begin::Info-->
									<div class="d-flex align-items-center flex-wrap mr-1">
										<!--begin::Page Heading-->
										<div class="d-flex align-items-baseline flex-wrap mr-5">
											<!--begin::Page Title-->
											<h5 class="text-dark font-weight-bold my-1 mr-5">Relatórios</h5>
											<!--end::Page Title-->
											<!--begin::Breadcrumb-->
											<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
												<li class="breadcrumb-item">
													<a href="" class="text-muted">Painel de Controle</a>
												</li>
												<li class="breadcrumb-item">
													<a href="" class="text-muted">Principal</a>
												</li>
											</ul>
											<!--end::Breadcrumb-->
										</div>
										<!--end::Page Heading-->
									</div>
									<!--end::Info-->
								</div>
							</div>
							<!--end::Subheader-->
							<div class="content flex-column-fluid" id="conteudo">
								<!--begin::Dashboard-->
								<!--begin::Row-->
								
								<div class="row">
									<?php /* if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 3 ) : ?>
										<div class="col-xl-4">
											<!--begin::Mixed Widget 4-->
											<div class="card card-custom bg-radial-gradient-danger gutter-b card-stretch">
												<!--begin::Header-->
												
												<div class="card-header border-0 py-5">
													<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-11-19-154210/theme/html/demo8/dist/../src/media/svg/icons/General/Fire.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M14,7 C13.6666667,10.3333333 12.6666667,12.1167764 11,12.3503292 C11,12.3503292 12.5,6.5 10.5,3.5 C10.5,3.5 10.287918,6.71444735 8.14498739,10.5717225 C7.14049032,12.3798172 6,13.5986793 6,16 C6,19.428689 9.51143904,21.2006583 12.0057195,21.2006583 C14.5,21.2006583 18,20.0006172 18,15.8004732 C18,14.0733981 16.6666667,11.1399071 14,7 Z" fill="#000000"/>
														</g>
													</svg><!--end::Svg Icon--></span>
													<h3 class="card-title font-weight-bolder text-white">Pontos quentes</h3>
													<div class="card-toolbar">
														<div class="dropdown dropdown-inline">
															<a href="#" class="btn btn-text-white btn-hover-white btn-sm btn-icon border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<i class="ki ki-bold-more-hor"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
																<!--begin::Navigation-->
																<ul class="navi navi-hover">
																	<li class="navi-header pb-1">
																		<span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
																	</li>
																	<li class="navi-item">
																		<a href="#" class="navi-link">
																			<span class="navi-icon">
																				<i class="flaticon2-shopping-cart-1"></i>
																			</span>
																			<span class="navi-text">Order</span>
																		</a>
																	</li>
																	<li class="navi-item">
																		<a href="#" class="navi-link">
																			<span class="navi-icon">
																				<i class="flaticon2-calendar-8"></i>
																			</span>
																			<span class="navi-text">Event</span>
																		</a>
																	</li>
																	<li class="navi-item">
																		<a href="#" class="navi-link">
																			<span class="navi-icon">
																				<i class="flaticon2-graph-1"></i>
																			</span>
																			<span class="navi-text">Report</span>
																		</a>
																	</li>
																	<li class="navi-item">
																		<a href="#" class="navi-link">
																			<span class="navi-icon">
																				<i class="flaticon2-rocket-1"></i>
																			</span>
																			<span class="navi-text">Post</span>
																		</a>
																	</li>
																	<li class="navi-item">
																		<a href="#" class="navi-link">
																			<span class="navi-icon">
																				<i class="flaticon2-writing"></i>
																			</span>
																			<span class="navi-text">File</span>
																		</a>
																	</li>
																</ul>
																<!--end::Navigation-->
															</div>
														</div>
													</div>
												</div>
												
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body d-flex flex-column p-0">
													<!--begin::Chart-->
													<div id="kt_mixed_widget_6_chart" style="height: 200px"></div>
													<!--end::Chart-->
													<!--begin::Stats-->
													<div class="card-spacer bg-white card-rounded flex-grow-1">
														<!--begin::Row-->
														<div class="row m-0">
															<div class="col px-8 py-6 mr-8">
																<div class="font-size-sm text-muted font-weight-bold">Pontos locados</div>
																<div class="font-size-h4 font-weight-bolder">$650</div>
															</div>
															<div class="col px-8 py-6">
																<div class="font-size-sm text-muted font-weight-bold">Pontos disponiveis</div>
																<div class="font-size-h4 font-weight-bolder">$233,600</div>
															</div>
														</div>
														<!--end::Row-->
														
													</div>
													<!--end::Stats-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Mixed Widget 4-->
										</div>
									<?php endif; */?>	
									
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
											<?php if($_SESSION['id_perfil'] == 2 || $_SESSION['id_perfil'] == 3 ) :  ?>
												<div class="col-xl-6">
													<!--begin::Tiles Widget 25-->
													<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white" style="height: 300px; ">
														<div class="card-body d-flex">
															<div class="d-flex py-5 flex-column align-items-start flex-grow-1">
																<div class="flex-grow-1" style="display: inherit; ">
																	<span class="svg-icon svg-icon-gray svg-icon-1,5x font-weight-bolder font-size-h3" style="margin-right: 5px; margin-top: -4px;"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-11-19-154210/theme/html/demo8/dist/../src/media/svg/icons/Navigation/Plus.svg--><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill bg-gray" fill="currentColor" xmlns="http://www.w3.org/2000/svg"  >
																		<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
																		</svg><!--end::Svg Icon--></span>
																	<h3 class="text-gray font-weight-bolder font-size-h3">Adicione suas mídias</h3>
																</div>
																<div class="row m-0">
																	<div  class="col bg-white px-6 py-6 rounded-xl mr-7 mb-10 mt-7 card-2" :hover style="text-align: center;">
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2">
																			<img class="h-30px" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDI0IDI0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIiBjbGFzcz0iIj48Zz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMi41IDE4aC0yMWMtLjgyNyAwLTEuNS0uNjczLTEuNS0xLjV2LTEyYzAtLjgyNy42NzMtMS41IDEuNS0xLjVoMjFjLjgyNyAwIDEuNS42NzMgMS41IDEuNXYxMmMwIC44MjctLjY3MyAxLjUtMS41IDEuNXptLTIxLTE0Yy0uMjc2IDAtLjUuMjI0LS41LjV2MTJjMCAuMjc2LjIyNC41LjUuNWgyMWMuMjc2IDAgLjUtLjIyNC41LS41di0xMmMwLS4yNzYtLjIyNC0uNS0uNS0uNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMy41IDI0Yy0uMjc2IDAtLjUtLjIyNC0uNS0uNXYtNmMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXY2YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtNS41IDI0Yy0uMjc2IDAtLjUtLjIyNC0uNS0uNXYtNmMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXY2YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMTguNSAyNGMtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTZjMC0uMjc2LjIyNC0uNS41LS41cy41LjIyNC41LjV2NmMwIC4yNzYtLjIyNC41LS41LjV6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTIwLjUgMjRjLS4yNzYgMC0uNS0uMjI0LS41LS41di02YzAtLjI3Ni4yMjQtLjUuNS0uNXMuNS4yMjQuNS41djZjMCAuMjc2LS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im01IDMuNWMtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTIuNWMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXYyLjVjMCAuMjc2LS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im02LjUgMWgtM2MtLjI3NiAwLS41LS4yMjQtLjUtLjVzLjIyNC0uNS41LS41aDNjLjI3NiAwIC41LjIyNC41LjVzLS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0xMiAzLjVjLS4yNzYgMC0uNS0uMjI0LS41LS41di0yLjVjMC0uMjc2LjIyNC0uNS41LS41cy41LjIyNC41LjV2Mi41YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMTMuNSAxaC0zYy0uMjc2IDAtLjUtLjIyNC0uNS0uNXMuMjI0LS41LjUtLjVoM2MuMjc2IDAgLjUuMjI0LjUuNXMtLjIyNC41LS41LjV6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTE5IDMuNWMtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTIuNWMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXYyLjVjMCAuMjc2LS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMC41IDFoLTNjLS4yNzYgMC0uNS0uMjI0LS41LS41cy4yMjQtLjUuNS0uNWgzYy4yNzYgMCAuNS4yMjQuNS41cy0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg==" />
																		</span>
																		<p  class="text-gray font-weight-bold font-size-h6 d-block">Outdoor</p>
																		<a href="appParceiro/appOutdoor/add_midia.php" class="btn btn-secondary" type="button" >Ver</a>
																	</div>
																	<div class="col bg-white px-6 py-6 rounded-xl mr-7 mb-10 mt-7 card-2" style="text-align: center;">
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2">
																			<img class="h-30px"src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMi4wMDEgNTEyLjAwMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNNDcxLjUxNCwzMTcuMDgxSDQwLjQ4N2MtNC4xNDMsMC03LjUsMy4zNTctNy41LDcuNXMzLjM1OCw3LjUsNy41LDcuNWg0MzEuMDI2YzQuMTQzLDAsNy41LTMuMzU3LDcuNS03LjUgICAgUzQ3NS42NTcsMzE3LjA4MSw0NzEuNTE0LDMxNy4wODF6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+Cgk8L2c+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik00OTEuODg5LDYxLjM0MmgtODguNzMyVjQ2LjM5OGgyMi4yMDZjNS41ODUsMCwxMC4xMy00LjU0NCwxMC4xMy0xMC4xM1YxOS41MDFDNDM1LjQ5Miw4Ljc0OSw0MjYuNzQ0LDAsNDE1Ljk5MSwwICAgIGgtNDAuNjY5Yy0xMC43NTMsMC0xOS41MDEsOC43NDktMTkuNTAxLDE5LjUwMXYxNi44MThjMCw1LjU1Nyw0LjUyMSwxMC4wNzgsMTAuMDc4LDEwLjA3OGgyMi4yNTd2MTQuOTQ0SDI2My41MDFWNDYuMzk4aDIyLjIwNSAgICBjNS41ODUsMCwxMC4xMy00LjU0NCwxMC4xMy0xMC4xM1YxOS41MDFDMjk1LjgzNiw4Ljc0OSwyODcuMDg3LDAsMjc2LjMzNSwwaC00MC42NjljLTEwLjc1MywwLTE5LjUwMSw4Ljc0OS0xOS41MDEsMTkuNTAxdjE2LjgxOCAgICBjMCw1LjU1Nyw0LjUyMSwxMC4wNzgsMTAuMDc4LDEwLjA3OEgyNDguNXYxNC45NDRIMTIzLjg0NVY0Ni4zOThoMjIuMjA1YzUuNTg1LDAsMTAuMTMtNC41NDQsMTAuMTMtMTAuMTNWMTkuNTAxICAgIEMxNTYuMTgsOC43NDksMTQ3LjQzMiwwLDEzNi42NzksMEg5Ni4wMUM4NS4yNTcsMCw3Ni41MDksOC43NDksNzYuNTA5LDE5LjUwMXYxNi44MThjMCw1LjU1Nyw0LjUyMSwxMC4wNzgsMTAuMDc4LDEwLjA3OGgyMi4yNTggICAgdjE0Ljk0NEgyMC4xMTJDOS4wMjMsNjEuMzQyLDAuMDAxLDcwLjM2MywwLjAwMSw4MS40NTN2MzUuNDgxYzAsNC4xNDMsMy4zNTcsNy41LDcuNSw3LjVzNy41LTMuMzU3LDcuNS03LjVWODEuNDUzICAgIGMwLTIuNzcxLDIuMzQtNS4xMSw1LjExLTUuMTFoNDcxLjc3N2MyLjc3MSwwLDUuMTEsMi4zNCw1LjExLDUuMTF2MjA4LjYyNUgxNS4wMDJ2LTEzOC4xNGMwLTQuMTQzLTMuMzU3LTcuNS03LjUtNy41ICAgIGMtNC4xNDIsMC03LjUsMy4zNTctNy41LDcuNXYxNDUuNjQydjQxLjM5NmMwLDExLjA5LDkuMDIyLDIwLjExMSwyMC4xMTEsMjAuMTExaDIwMS4zODR2ODMuOTI1ICAgIGMtMTAuNTk1LDAuMTg0LTE5LjE2LDguODQ2LTE5LjE2LDE5LjQ4NHY3LjUwMWgtMzEuMDkxYy0xMS42OTYsMC0yMS4wMDEsOS41NTctMjEuMDAxLDIxLjAwMiAgICBjMCwxMS41ODEsOS40MjIsMjEuMDAyLDIxLjAwMSwyMS4wMDJoNDAuMjVjNC4xNDMsMCw3LjUtMy4zNTcsNy41LTcuNWMwLTQuMTQzLTMuMzU3LTcuNS03LjUtNy41aC00MC4yNSAgICBjLTMuMjU4LDAtNS45MTctMi42MS01Ljk5OC01Ljg1YzAuMDE4LTAuMzQ4LDAuMDA5LTAuNTI1LDAuMDU5LTAuOTE5YzAuMDU5LTAuNDY5LDAuMTMyLTAuNjcyLDAuMTUzLTAuNzcyICAgIGMwLjY5NS0yLjYyNiwzLjA3NS00LjQ2MSw1Ljc4Ni00LjQ2MWMxOC4yNywwLDE1MC41NzMsMCwxNjkuNTEsMGMyLjcxMSwwLDUuMDksMS44MzQsNS43OTcsNC41MDIgICAgYzAuOTQ4LDQuMDg2LTIuMDY1LDcuNS01Ljc5Nyw3LjVoLTk0LjI1OGMtNC4xNDMsMC03LjUsMy4zNTctNy41LDcuNWMwLDQuMTQzLDMuMzU3LDcuNSw3LjUsNy41aDk0LjI1OCAgICBjMTMuMjcyLDAsMjMuOTg5LTEyLjU3MywyMC4yODYtMjYuMzg2Yy0yLjQzNy05LjE5Ni0xMC43NzktMTUuNjE5LTIwLjI4Ni0xNS42MTloLTMxLjA5MXYtNy41MDEgICAgYzAtMTAuNjM4LTguNTY1LTE5LjI5OS0xOS4xNi0xOS40ODRWNDE4LjU0YzAtNC4xNDMtMy4zNTctNy41LTcuNS03LjVzLTcuNSwzLjM1Ny03LjUsNy41djI0LjQ1M2gtMzkuMDA2di04My45MDdoMzkuMDA2djI0LjQ1MiAgICBjMCw0LjE0MywzLjM1Nyw3LjUsNy41LDcuNXM3LjUtMy4zNTcsNy41LTcuNXYtMjQuNDUyaDIwMS4zODRjMTEuMDksMCwyMC4xMTEtOS4wMjIsMjAuMTExLTIwLjExMWMwLTEyLjA3NSwwLTI0NS4yMDYsMC0yNTcuNTIxICAgIEM1MTIuMDAxLDcwLjM2Myw1MDIuOTc4LDYxLjM0Miw0OTEuODg5LDYxLjM0MnogTTkxLjUxLDMxLjM5NlYxOS41MDFjMC0yLjQ0LDIuMDYxLTQuNSw0LjUtNC41aDQwLjY2OWMyLjQzOSwwLDQuNSwyLjA2MSw0LjUsNC41ICAgIHYxMS44OTVIOTEuNTF6IE0yMzEuMTY1LDMxLjM5NlYxOS41MDFjMC0yLjQ0LDIuMDYxLTQuNSw0LjUtNC41aDQwLjY2OWMyLjQ0LDAsNC41LDIuMDYxLDQuNSw0LjV2MTEuODk1SDIzMS4xNjV6ICAgICBNMzcwLjgyMiwzMS4zOTZWMTkuNTAxYzAtMi40NCwyLjA2MS00LjUsNC41LTQuNWg0MC42NjljMi40MzksMCw0LjUsMi4wNjEsNC41LDQuNXYxMS44OTVIMzcwLjgyMnogTTI5MC4xNjUsNDU3Ljk5NCAgICBjMi40MzksMCw0LjUsMi4wNjEsNC41LDQuNXY3LjUwMWgtNzcuMzI3di03LjUwMWMwLTIuNDM5LDIuMDYxLTQuNSw0LjUtNC41QzIzNS43MjcsNDU3Ljk5NCwyNzYuMTY3LDQ1Ny45OTQsMjkwLjE2NSw0NTcuOTk0eiAgICAgTTQ5Ny4wMDEsMzM4Ljk3NEg0OTdjMCwyLjc3MS0yLjM0LDUuMTEtNS4xMSw1LjExYy0xNS4zNjQsMC00NTUuMTIxLDAtNDcxLjc3NywwYy0yLjc3MSwwLTUuMTEtMi4zNC01LjExLTUuMTF2LTMzLjg5NWg0ODEuOTk4ICAgIFYzMzguOTc0eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
																		</span>
																		<p  class="text-gray font-weight-bold font-size-h6 mt-2 d-block">Front-Light</p>
																		<a href="appParceiro/appOutdoor/add_midia.php" class="btn btn-secondary" type="button" >Ver</a>
																	</div>
																	<div class="col bg-white px-6 py-6 rounded-xl mr-7 mb-10 mt-7 card-2" style="text-align: center;">
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2">
																			<img class="h-30px"src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ4MC4zMiA0ODAuMzIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTQ4MCAyNzIuMDcxdjk5LjMyM2MwIDQuNDE4LTMuNTgyIDgtOCA4aC0xOWMtNC40MTggMC04LTMuNTgyLTgtOHMzLjU4Mi04IDgtOGgxMXYtOTEuMzIzYzAtMTIuNzY5LTYuMTU3LTI0Ljg2My0xNi40Ny0zMi4zNS0zMC42MjQtMjIuMjMyLTg5LjQ2MS01NS42NDktMTYyLjUwMy01MS44NDVsNS4yMDkgNDAuMTA5Yy41NjkgNC4zODEtMi41MjIgOC4zOTUtNi45MDMgOC45NjQtNC4zODMuNTY5LTguMzk1LTIuNTIzLTguOTY0LTYuOTAzbC01LjI5My00MC43NTVjLTQ3LjE4MSA1LjkxMy05MS4zMyAyNi41OTYtMTI4LjE0IDYwLjE5OWgyMDIuMTI1YzEyLjE0OCAwIDIzLjQ5My01LjQyMSAzMS4xMjQtMTQuODc0IDIuNzc1LTMuNDM4IDcuODEyLTMuOTc1IDExLjI1LTEuMnMzLjk3NSA3LjgxMiAxLjIgMTEuMjVjLTEwLjY4MyAxMy4yMzQtMjYuNTY1IDIwLjgyNC00My41NzMgMjAuODI0aC0yMjAuNDg2bC04OC45OTkgMjQuNzIyYy0xMC4zNDkgMi44NzUtMTcuNTc3IDEyLjM4NC0xNy41NzcgMjMuMTI1djQ3Ljk1OGgxMmM0LjQxOCAwIDggMy41ODIgOCA4cy0zLjU4MiA4LTggOGgtMjBjLTQuNDE4IDAtOC0zLjU4Mi04LTh2LTU1Ljk1OGMwLTE3LjkwMSAxMi4wNDYtMzMuNzUgMjkuMjk0LTM4LjU0MWw4Ny44MDYtMjQuMzkxYzg3LjE0NS05MS4wMTQgMjIyLjQzMy0xMDguODYgMzM5LjgyOS0yMy42MzIgMTQuNDQ2IDEwLjQ4OCAyMy4wNzEgMjcuNDIxIDIzLjA3MSA0NS4yOTh6bS0zMTUgOTcuNDE5YzAgMzAuODc4LTI1LjEyMiA1Ni01NiA1NnMtNTYtMjUuMTIyLTU2LTU2IDI1LjEyMi01NiA1Ni01NiA1NiAyNS4xMjIgNTYgNTZ6bS0xNiAwYzAtMjIuMDU2LTE3Ljk0NC00MC00MC00MHMtNDAgMTcuOTQ0LTQwIDQwIDE3Ljk0NCA0MCA0MCA0MCA0MC0xNy45NDMgNDAtNDB6bTI3OCAwYzAgMzAuODc4LTI1LjEyMiA1Ni01NiA1NnMtNTYtMjUuMTIyLTU2LTU2IDI1LjEyMi01NiA1Ni01NiA1NiAyNS4xMjIgNTYgNTZ6bS0xNiAwYzAtMjIuMDU2LTE3Ljk0NC00MC00MC00MHMtNDAgMTcuOTQ0LTQwIDQwIDE3Ljk0NCA0MCA0MCA0MCA0MC0xNy45NDMgNDAtNDB6bS0xMTgtNmgtMTAzYy00LjQxOCAwLTggMy41ODItOCA4czMuNTgyIDggOCA4aDEwM2M0LjQxOCAwIDgtMy41ODIgOC04cy0zLjU4Mi04LTgtOHptMTI5LjEwNy0yMjUuMjQ1YzkuMzU3IDkuMzU3IDIuODExIDI1LjYwNi0xMC42MDcgMjUuNjA2LTEzLjI2MiAwLTIwLjA2Mi0xNi4xNTEtMTAuNjA3LTI1LjYwNiAyLjgzNC0yLjgzMyA2LjYwMS00LjM5NCAxMC42MDctNC4zOTQgNi43MzguMDAxIDEwLjYwNyA0LjM5NCAxMC42MDcgNC4zOTR6bTI2LjE2My0xNC44NDljMy4xMjUtMy4xMjQgMy4xMjUtOC4xOSAwLTExLjMxNC0yMC4zMjMtMjAuMzIzLTUzLjIxNS0yMC4zMjQtNzMuNTM5IDAtMy4xMjUgMy4xMjQtMy4xMjUgOC4xODkgMCAxMS4zMTQgMy4xMjQgMy4xMjQgOC4xODkgMy4xMjQgMTEuMzEzIDAgMTQuMDctMTQuMDcgMzYuODQtMTQuMDcxIDUwLjkxMiAwIDMuMTI0IDMuMTI0IDguMTg5IDMuMTI0IDExLjMxNCAwem0tOTEuOTI0LTI5LjY5OWMzMC40ODQtMzAuNDg0IDc5LjgyMi0zMC40ODYgMTEwLjMwOSAwIDEuNTYyIDEuNTYyIDMuNjA5IDIuMzQzIDUuNjU3IDIuMzQzIDcuMDYzIDAgMTAuNzExLTguNjAzIDUuNjU3LTEzLjY1Ny0zNi43MzctMzYuNzM2LTk2LjE5Ny0zNi43NC0xMzIuOTM2IDAtMy4xMjUgMy4xMjQtMy4xMjUgOC4xODkgMCAxMS4zMTQgMy4xMjMgMy4xMjUgOC4xODkgMy4xMjUgMTEuMzEzIDB6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PC9nPjwvc3ZnPg==" />
																		</span>
																		<p  class="text-gray font-weight-bold font-size-h6 mt-2 d-block">Carro de Som</p>
																		<a  href="appParceiro/appOutdoor/add_midia.php" class="btn btn-secondary" type="button" >Ver</a>
																	</div>
																	<div class="col bg-white px-6 py-6 rounded-xl mr-7 mb-10 mt-7 card-2" style="text-align: center;" >
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2" >
																			<img  style="height: 30px;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPGc+CgkJCTxwYXRoIGQ9Ik00NzguOTY4LDI4MC43NzRoLTc0LjMyM3YtNDkuNTQ4aDkwLjgzOVY4Mi41ODFoLTgyLjU4MVY0OS41NDhoNDkuNTQ4VjMwLjUzTDQ0Mi4wOTYsMGgtNzQuOTAxTDM0Ni44NCwzMC41M3YxOS4wMTggICAgIGg0OS41NDh2MzMuMDMySDI2NC4yNThWNDkuNTQ4aDQ5LjU0OFYzMC41M0wyOTMuNDUxLDBIMjE4LjU1bC0yMC4zNTcsMzAuNTN2MTkuMDE4aDQ5LjU0OHYzMy4wMzJIMTE1LjYxM1Y0OS41NDhoNDkuNTQ4VjMwLjUzICAgICBMMTQ0LjgwNSwwaC03NC45TDQ5LjU0OCwzMC41M3YxOS4wMThoNDkuNTQ4djMzLjAzMkgxNi41MTZ2MTQ4LjY0NWg5MC44Mzl2NDkuNTQ4SDMzLjAzMkMxNC44MTUsMjgwLjc3NCwwLDI5NS41ODksMCwzMTMuODA2ICAgICBzMTQuODE1LDMzLjAzMiwzMy4wMzIsMzMuMDMyVjUxMmg0NDUuOTM1VjM0Ni44MzljMTguMjE3LDAsMzMuMDMyLTE0LjgxNSwzMy4wMzItMzMuMDMyUzQ5Ny4xODUsMjgwLjc3NCw0NzguOTY4LDI4MC43NzR6ICAgICAgTTM2NS4wMTYsMzMuMDMybDExLjAxNi0xNi41MTZoNTcuMjI4bDExLjAwOCwxNi41MTZIMzY1LjAxNnogTTIxNi4zNywzMy4wMzJsMTEuMDE2LTE2LjUxNmg1Ny4yMjhsMTEuMDA4LDE2LjUxNkgyMTYuMzd6ICAgICAgTTY3LjczMywzMy4wMzJMNzguNzQsMTYuNTE2aDU3LjIyOWwxMS4wMDgsMTYuNTE2SDY3LjczM3ogTTMzLjAzMiwyMTQuNzFWOTkuMDk3aDQ0NS45MzVWMjE0LjcxSDMzLjAzMnogTTM4OC4xMjksMjMxLjIyNiAgICAgdjQ5LjU0OGgtMzMuMDMydi00OS41NDhIMzg4LjEyOXogTTMzOC41ODEsMjMxLjIyNnY0OS41NDhIMTczLjQydi00OS41NDhIMzM4LjU4MXogTTE1Ni45MDQsMjMxLjIyNnY0OS41NDhoLTMzLjAzMnYtNDkuNTQ4ICAgICBIMTU2LjkwNHogTTI0Ny43NDIsNDk1LjQ4NGgtNDkuNTQ4di01Ny44MDdjMC0yOS4wNiwyMS41NzgtNTMuMTE2LDQ5LjU0OC01Ny4xNDZWNDk1LjQ4NHogTTMxMy44MDYsNDk1LjQ4NGgtNDkuNTQ4VjM4MC41MzIgICAgIGMyNy45NzEsNC4wMyw0OS41NDgsMjguMDg2LDQ5LjU0OCw1Ny4xNDZWNDk1LjQ4NHogTTQ2Mi40NTIsNDk1LjQ4NEgzMzAuMzIzdi01Ny44MDdjMC00MC45ODUtMzMuMzQ2LTc0LjMyMy03NC4zMjMtNzQuMzIzICAgICBzLTc0LjMyMywzMy4zMzgtNzQuMzIzLDc0LjMyM3Y1Ny44MDdINDkuNTQ4VjM0Ni44MzloNDEyLjkwNFY0OTUuNDg0eiBNNDc4Ljk2OCwzMzAuMzIzSDMzLjAzMiAgICAgYy05LjEwOCwwLTE2LjUxNi03LjQwNy0xNi41MTYtMTYuNTE2czcuNDA4LTE2LjUxNiwxNi41MTYtMTYuNTE2aDQ0NS45MzVjOS4xMDksMCwxNi41MTYsNy40MDcsMTYuNTE2LDE2LjUxNiAgICAgUzQ4OC4wNzcsMzMwLjMyMyw0NzguOTY4LDMzMC4zMjN6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+CgkJCTxwYXRoIGQ9Ik02Ni4wNjUsMTk4LjE5NGg5OS4wOTd2LTgyLjU4MUg2Ni4wNjVWMTk4LjE5NHogTTgyLjU4MSwxMzIuMTI5aDY2LjA2NXY0OS41NDhIODIuNTgxVjEzMi4xMjl6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+CgkJCTxyZWN0IHg9IjIxNC43MDUiIHk9IjExNS42MDkiIHdpZHRoPSIyMzEuMjI2IiBoZWlnaHQ9IjE2LjUxMiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9yZWN0PgoJCQk8cmVjdCB4PSIxODEuNjczIiB5PSIxMTUuNjA5IiB3aWR0aD0iMTYuNTEyIiBoZWlnaHQ9IjE2LjUxMiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9yZWN0PgoJCQk8cmVjdCB4PSIxODEuNjczIiB5PSIxNDguNjQxIiB3aWR0aD0iMjY0LjI1OCIgaGVpZ2h0PSIxNi41MTIiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcmVjdD4KCQkJPHJlY3QgeD0iMTgxLjY3MyIgeT0iMTgxLjY3MyIgd2lkdGg9IjIzMS4yMjYiIGhlaWdodD0iMTYuNTEyIiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3JlY3Q+CgkJCTxyZWN0IHg9IjQyOS40MTkiIHk9IjE4MS42NzMiIHdpZHRoPSIxNi41MTIiIGhlaWdodD0iMTYuNTEyIiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3JlY3Q+CgkJCTxwYXRoIGQ9Ik00NDUuOTM1LDM2My4zNTVoLTk5LjA5N3Y4Mi41ODFoOTkuMDk3VjM2My4zNTV6IE0zODguMTI5LDQyOS40MTloLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NVY0MjkuNDE5eiBNMzg4LjEyOSwzOTYuMzg3ICAgICBoLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NVYzOTYuMzg3eiBNNDA0LjY0NSwzNzkuODcxaDI0Ljc3NXYxNi41MTZoLTI0Ljc3NVYzNzkuODcxeiBNNDI5LjQyLDQyOS40MTloLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NSAgICAgVjQyOS40MTl6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+CgkJCTxwYXRoIGQ9Ik0xNjUuMTYxLDM2My4zNTVINjYuMDY1djgyLjU4MWg5OS4wOTdWMzYzLjM1NXogTTEwNy4zNTUsNDI5LjQxOUg4Mi41ODF2LTE2LjUxNmgyNC43NzVWNDI5LjQxOXogTTEwNy4zNTUsMzk2LjM4NyAgICAgSDgyLjU4MXYtMTYuNTE2aDI0Ljc3NVYzOTYuMzg3eiBNMTIzLjg3MSwzNzkuODcxaDI0Ljc3NXYxNi41MTZoLTI0Ljc3NVYzNzkuODcxeiBNMTQ4LjY0Niw0MjkuNDE5aC0yNC43NzV2LTE2LjUxNmgyNC43NzUgICAgIFY0MjkuNDE5eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJCTwvZz4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
																		</span>
																		<p  class="text-gray font-weight-bold font-size-h6 mt-2  d-block">Empena</p>
																		<a href="appParceiro/appOutdoor/add_midia.php" class="btn btn-secondary" type="button" >Ver</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!--end::Tiles Widget 25-->
												</div>
											<?php endif; ?>
											<?php if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 3 || $_SESSION['id_perfil'] == 4 ) :  ?>	
												<div class="col-xl-6">
													<!--begin::Tiles Widget 25-->
													<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white" style="height: 300px; ">
														<div class="card-body d-flex">
															<div class="d-flex py-5 flex-column align-items-start flex-grow-1">
																<div class="flex-grow-1" style="display: inherit;">
																	<span class="svg-icon svg-icon-gray svg-icon-1,5x font-weight-bolder font-size-h3" style="margin-right: 5px; margin-top: -4px;"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-11-19-154210/theme/html/demo8/dist/../src/media/svg/icons/Navigation/Plus.svg--><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill svg-icon-gray" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																		<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
																		</svg><!--end::Svg Icon--></span>
																	<h3  class="text-gray font-weight-bolder font-size-h3">Escolha sua mídia</h3>
																</div>
																<div class="row m-0">
																	<div class="col bg-white px-6 py-6 rounded-xl mr-7 mb-10 mt-7 card-2" style="text-align: center;">
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2">
																			<img class="h-30px" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDI0IDI0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIiBjbGFzcz0iIj48Zz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMi41IDE4aC0yMWMtLjgyNyAwLTEuNS0uNjczLTEuNS0xLjV2LTEyYzAtLjgyNy42NzMtMS41IDEuNS0xLjVoMjFjLjgyNyAwIDEuNS42NzMgMS41IDEuNXYxMmMwIC44MjctLjY3MyAxLjUtMS41IDEuNXptLTIxLTE0Yy0uMjc2IDAtLjUuMjI0LS41LjV2MTJjMCAuMjc2LjIyNC41LjUuNWgyMWMuMjc2IDAgLjUtLjIyNC41LS41di0xMmMwLS4yNzYtLjIyNC0uNS0uNS0uNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMy41IDI0Yy0uMjc2IDAtLjUtLjIyNC0uNS0uNXYtNmMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXY2YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtNS41IDI0Yy0uMjc2IDAtLjUtLjIyNC0uNS0uNXYtNmMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXY2YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMTguNSAyNGMtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTZjMC0uMjc2LjIyNC0uNS41LS41cy41LjIyNC41LjV2NmMwIC4yNzYtLjIyNC41LS41LjV6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTIwLjUgMjRjLS4yNzYgMC0uNS0uMjI0LS41LS41di02YzAtLjI3Ni4yMjQtLjUuNS0uNXMuNS4yMjQuNS41djZjMCAuMjc2LS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im01IDMuNWMtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTIuNWMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXYyLjVjMCAuMjc2LS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im02LjUgMWgtM2MtLjI3NiAwLS41LS4yMjQtLjUtLjVzLjIyNC0uNS41LS41aDNjLjI3NiAwIC41LjIyNC41LjVzLS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0xMiAzLjVjLS4yNzYgMC0uNS0uMjI0LS41LS41di0yLjVjMC0uMjc2LjIyNC0uNS41LS41cy41LjIyNC41LjV2Mi41YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMTMuNSAxaC0zYy0uMjc2IDAtLjUtLjIyNC0uNS0uNXMuMjI0LS41LjUtLjVoM2MuMjc2IDAgLjUuMjI0LjUuNXMtLjIyNC41LS41LjV6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTE5IDMuNWMtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTIuNWMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXYyLjVjMCAuMjc2LS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMC41IDFoLTNjLS4yNzYgMC0uNS0uMjI0LS41LS41cy4yMjQtLjUuNS0uNWgzYy4yNzYgMCAuNS4yMjQuNS41cy0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg==" />
																		</span>
																		<p  class="text-gray font-weight-bold font-size-h6 d-block">Outdoor</p>
																		<a href="appCliente/appOutdoor/listar_midia.php" class="btn btn-secondary" type="button" >Ver</a>
																	</div>
																	<div  class="col bg-white px-6 py-6 rounded-xl mr-7 mb-10 mt-7 card-2" style="text-align: center;">
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2">
																			<img class="h-30px"src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMi4wMDEgNTEyLjAwMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNNDcxLjUxNCwzMTcuMDgxSDQwLjQ4N2MtNC4xNDMsMC03LjUsMy4zNTctNy41LDcuNXMzLjM1OCw3LjUsNy41LDcuNWg0MzEuMDI2YzQuMTQzLDAsNy41LTMuMzU3LDcuNS03LjUgICAgUzQ3NS42NTcsMzE3LjA4MSw0NzEuNTE0LDMxNy4wODF6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+Cgk8L2c+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik00OTEuODg5LDYxLjM0MmgtODguNzMyVjQ2LjM5OGgyMi4yMDZjNS41ODUsMCwxMC4xMy00LjU0NCwxMC4xMy0xMC4xM1YxOS41MDFDNDM1LjQ5Miw4Ljc0OSw0MjYuNzQ0LDAsNDE1Ljk5MSwwICAgIGgtNDAuNjY5Yy0xMC43NTMsMC0xOS41MDEsOC43NDktMTkuNTAxLDE5LjUwMXYxNi44MThjMCw1LjU1Nyw0LjUyMSwxMC4wNzgsMTAuMDc4LDEwLjA3OGgyMi4yNTd2MTQuOTQ0SDI2My41MDFWNDYuMzk4aDIyLjIwNSAgICBjNS41ODUsMCwxMC4xMy00LjU0NCwxMC4xMy0xMC4xM1YxOS41MDFDMjk1LjgzNiw4Ljc0OSwyODcuMDg3LDAsMjc2LjMzNSwwaC00MC42NjljLTEwLjc1MywwLTE5LjUwMSw4Ljc0OS0xOS41MDEsMTkuNTAxdjE2LjgxOCAgICBjMCw1LjU1Nyw0LjUyMSwxMC4wNzgsMTAuMDc4LDEwLjA3OEgyNDguNXYxNC45NDRIMTIzLjg0NVY0Ni4zOThoMjIuMjA1YzUuNTg1LDAsMTAuMTMtNC41NDQsMTAuMTMtMTAuMTNWMTkuNTAxICAgIEMxNTYuMTgsOC43NDksMTQ3LjQzMiwwLDEzNi42NzksMEg5Ni4wMUM4NS4yNTcsMCw3Ni41MDksOC43NDksNzYuNTA5LDE5LjUwMXYxNi44MThjMCw1LjU1Nyw0LjUyMSwxMC4wNzgsMTAuMDc4LDEwLjA3OGgyMi4yNTggICAgdjE0Ljk0NEgyMC4xMTJDOS4wMjMsNjEuMzQyLDAuMDAxLDcwLjM2MywwLjAwMSw4MS40NTN2MzUuNDgxYzAsNC4xNDMsMy4zNTcsNy41LDcuNSw3LjVzNy41LTMuMzU3LDcuNS03LjVWODEuNDUzICAgIGMwLTIuNzcxLDIuMzQtNS4xMSw1LjExLTUuMTFoNDcxLjc3N2MyLjc3MSwwLDUuMTEsMi4zNCw1LjExLDUuMTF2MjA4LjYyNUgxNS4wMDJ2LTEzOC4xNGMwLTQuMTQzLTMuMzU3LTcuNS03LjUtNy41ICAgIGMtNC4xNDIsMC03LjUsMy4zNTctNy41LDcuNXYxNDUuNjQydjQxLjM5NmMwLDExLjA5LDkuMDIyLDIwLjExMSwyMC4xMTEsMjAuMTExaDIwMS4zODR2ODMuOTI1ICAgIGMtMTAuNTk1LDAuMTg0LTE5LjE2LDguODQ2LTE5LjE2LDE5LjQ4NHY3LjUwMWgtMzEuMDkxYy0xMS42OTYsMC0yMS4wMDEsOS41NTctMjEuMDAxLDIxLjAwMiAgICBjMCwxMS41ODEsOS40MjIsMjEuMDAyLDIxLjAwMSwyMS4wMDJoNDAuMjVjNC4xNDMsMCw3LjUtMy4zNTcsNy41LTcuNWMwLTQuMTQzLTMuMzU3LTcuNS03LjUtNy41aC00MC4yNSAgICBjLTMuMjU4LDAtNS45MTctMi42MS01Ljk5OC01Ljg1YzAuMDE4LTAuMzQ4LDAuMDA5LTAuNTI1LDAuMDU5LTAuOTE5YzAuMDU5LTAuNDY5LDAuMTMyLTAuNjcyLDAuMTUzLTAuNzcyICAgIGMwLjY5NS0yLjYyNiwzLjA3NS00LjQ2MSw1Ljc4Ni00LjQ2MWMxOC4yNywwLDE1MC41NzMsMCwxNjkuNTEsMGMyLjcxMSwwLDUuMDksMS44MzQsNS43OTcsNC41MDIgICAgYzAuOTQ4LDQuMDg2LTIuMDY1LDcuNS01Ljc5Nyw3LjVoLTk0LjI1OGMtNC4xNDMsMC03LjUsMy4zNTctNy41LDcuNWMwLDQuMTQzLDMuMzU3LDcuNSw3LjUsNy41aDk0LjI1OCAgICBjMTMuMjcyLDAsMjMuOTg5LTEyLjU3MywyMC4yODYtMjYuMzg2Yy0yLjQzNy05LjE5Ni0xMC43NzktMTUuNjE5LTIwLjI4Ni0xNS42MTloLTMxLjA5MXYtNy41MDEgICAgYzAtMTAuNjM4LTguNTY1LTE5LjI5OS0xOS4xNi0xOS40ODRWNDE4LjU0YzAtNC4xNDMtMy4zNTctNy41LTcuNS03LjVzLTcuNSwzLjM1Ny03LjUsNy41djI0LjQ1M2gtMzkuMDA2di04My45MDdoMzkuMDA2djI0LjQ1MiAgICBjMCw0LjE0MywzLjM1Nyw3LjUsNy41LDcuNXM3LjUtMy4zNTcsNy41LTcuNXYtMjQuNDUyaDIwMS4zODRjMTEuMDksMCwyMC4xMTEtOS4wMjIsMjAuMTExLTIwLjExMWMwLTEyLjA3NSwwLTI0NS4yMDYsMC0yNTcuNTIxICAgIEM1MTIuMDAxLDcwLjM2Myw1MDIuOTc4LDYxLjM0Miw0OTEuODg5LDYxLjM0MnogTTkxLjUxLDMxLjM5NlYxOS41MDFjMC0yLjQ0LDIuMDYxLTQuNSw0LjUtNC41aDQwLjY2OWMyLjQzOSwwLDQuNSwyLjA2MSw0LjUsNC41ICAgIHYxMS44OTVIOTEuNTF6IE0yMzEuMTY1LDMxLjM5NlYxOS41MDFjMC0yLjQ0LDIuMDYxLTQuNSw0LjUtNC41aDQwLjY2OWMyLjQ0LDAsNC41LDIuMDYxLDQuNSw0LjV2MTEuODk1SDIzMS4xNjV6ICAgICBNMzcwLjgyMiwzMS4zOTZWMTkuNTAxYzAtMi40NCwyLjA2MS00LjUsNC41LTQuNWg0MC42NjljMi40MzksMCw0LjUsMi4wNjEsNC41LDQuNXYxMS44OTVIMzcwLjgyMnogTTI5MC4xNjUsNDU3Ljk5NCAgICBjMi40MzksMCw0LjUsMi4wNjEsNC41LDQuNXY3LjUwMWgtNzcuMzI3di03LjUwMWMwLTIuNDM5LDIuMDYxLTQuNSw0LjUtNC41QzIzNS43MjcsNDU3Ljk5NCwyNzYuMTY3LDQ1Ny45OTQsMjkwLjE2NSw0NTcuOTk0eiAgICAgTTQ5Ny4wMDEsMzM4Ljk3NEg0OTdjMCwyLjc3MS0yLjM0LDUuMTEtNS4xMSw1LjExYy0xNS4zNjQsMC00NTUuMTIxLDAtNDcxLjc3NywwYy0yLjc3MSwwLTUuMTEtMi4zNC01LjExLTUuMTF2LTMzLjg5NWg0ODEuOTk4ICAgIFYzMzguOTc0eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
																		</span>
																		<p  class="text-gray font-weight-bold font-size-h6 mt-2 d-block">Front-Light</p>
																		<input class="btn btn-secondary" type="button" value="Ver"/>
																	</div>
																	<div  class="col bg-white px-6 py-6 rounded-xl mr-7 mb-10 mt-7 card-2" style="text-align: center;">
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2">
																			<img class="h-30px"src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ4MC4zMiA0ODAuMzIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTQ4MCAyNzIuMDcxdjk5LjMyM2MwIDQuNDE4LTMuNTgyIDgtOCA4aC0xOWMtNC40MTggMC04LTMuNTgyLTgtOHMzLjU4Mi04IDgtOGgxMXYtOTEuMzIzYzAtMTIuNzY5LTYuMTU3LTI0Ljg2My0xNi40Ny0zMi4zNS0zMC42MjQtMjIuMjMyLTg5LjQ2MS01NS42NDktMTYyLjUwMy01MS44NDVsNS4yMDkgNDAuMTA5Yy41NjkgNC4zODEtMi41MjIgOC4zOTUtNi45MDMgOC45NjQtNC4zODMuNTY5LTguMzk1LTIuNTIzLTguOTY0LTYuOTAzbC01LjI5My00MC43NTVjLTQ3LjE4MSA1LjkxMy05MS4zMyAyNi41OTYtMTI4LjE0IDYwLjE5OWgyMDIuMTI1YzEyLjE0OCAwIDIzLjQ5My01LjQyMSAzMS4xMjQtMTQuODc0IDIuNzc1LTMuNDM4IDcuODEyLTMuOTc1IDExLjI1LTEuMnMzLjk3NSA3LjgxMiAxLjIgMTEuMjVjLTEwLjY4MyAxMy4yMzQtMjYuNTY1IDIwLjgyNC00My41NzMgMjAuODI0aC0yMjAuNDg2bC04OC45OTkgMjQuNzIyYy0xMC4zNDkgMi44NzUtMTcuNTc3IDEyLjM4NC0xNy41NzcgMjMuMTI1djQ3Ljk1OGgxMmM0LjQxOCAwIDggMy41ODIgOCA4cy0zLjU4MiA4LTggOGgtMjBjLTQuNDE4IDAtOC0zLjU4Mi04LTh2LTU1Ljk1OGMwLTE3LjkwMSAxMi4wNDYtMzMuNzUgMjkuMjk0LTM4LjU0MWw4Ny44MDYtMjQuMzkxYzg3LjE0NS05MS4wMTQgMjIyLjQzMy0xMDguODYgMzM5LjgyOS0yMy42MzIgMTQuNDQ2IDEwLjQ4OCAyMy4wNzEgMjcuNDIxIDIzLjA3MSA0NS4yOTh6bS0zMTUgOTcuNDE5YzAgMzAuODc4LTI1LjEyMiA1Ni01NiA1NnMtNTYtMjUuMTIyLTU2LTU2IDI1LjEyMi01NiA1Ni01NiA1NiAyNS4xMjIgNTYgNTZ6bS0xNiAwYzAtMjIuMDU2LTE3Ljk0NC00MC00MC00MHMtNDAgMTcuOTQ0LTQwIDQwIDE3Ljk0NCA0MCA0MCA0MCA0MC0xNy45NDMgNDAtNDB6bTI3OCAwYzAgMzAuODc4LTI1LjEyMiA1Ni01NiA1NnMtNTYtMjUuMTIyLTU2LTU2IDI1LjEyMi01NiA1Ni01NiA1NiAyNS4xMjIgNTYgNTZ6bS0xNiAwYzAtMjIuMDU2LTE3Ljk0NC00MC00MC00MHMtNDAgMTcuOTQ0LTQwIDQwIDE3Ljk0NCA0MCA0MCA0MCA0MC0xNy45NDMgNDAtNDB6bS0xMTgtNmgtMTAzYy00LjQxOCAwLTggMy41ODItOCA4czMuNTgyIDggOCA4aDEwM2M0LjQxOCAwIDgtMy41ODIgOC04cy0zLjU4Mi04LTgtOHptMTI5LjEwNy0yMjUuMjQ1YzkuMzU3IDkuMzU3IDIuODExIDI1LjYwNi0xMC42MDcgMjUuNjA2LTEzLjI2MiAwLTIwLjA2Mi0xNi4xNTEtMTAuNjA3LTI1LjYwNiAyLjgzNC0yLjgzMyA2LjYwMS00LjM5NCAxMC42MDctNC4zOTQgNi43MzguMDAxIDEwLjYwNyA0LjM5NCAxMC42MDcgNC4zOTR6bTI2LjE2My0xNC44NDljMy4xMjUtMy4xMjQgMy4xMjUtOC4xOSAwLTExLjMxNC0yMC4zMjMtMjAuMzIzLTUzLjIxNS0yMC4zMjQtNzMuNTM5IDAtMy4xMjUgMy4xMjQtMy4xMjUgOC4xODkgMCAxMS4zMTQgMy4xMjQgMy4xMjQgOC4xODkgMy4xMjQgMTEuMzEzIDAgMTQuMDctMTQuMDcgMzYuODQtMTQuMDcxIDUwLjkxMiAwIDMuMTI0IDMuMTI0IDguMTg5IDMuMTI0IDExLjMxNCAwem0tOTEuOTI0LTI5LjY5OWMzMC40ODQtMzAuNDg0IDc5LjgyMi0zMC40ODYgMTEwLjMwOSAwIDEuNTYyIDEuNTYyIDMuNjA5IDIuMzQzIDUuNjU3IDIuMzQzIDcuMDYzIDAgMTAuNzExLTguNjAzIDUuNjU3LTEzLjY1Ny0zNi43MzctMzYuNzM2LTk2LjE5Ny0zNi43NC0xMzIuOTM2IDAtMy4xMjUgMy4xMjQtMy4xMjUgOC4xODkgMCAxMS4zMTQgMy4xMjMgMy4xMjUgOC4xODkgMy4xMjUgMTEuMzEzIDB6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PC9nPjwvc3ZnPg==" />
																		</span>
																		<p  class="text-gray font-weight-bold font-size-h6 mt-2 d-block">Carro de Som</p>
																		<input class="btn btn-secondary" type="button" value="Ver"/>
																	</div>
																	<div  class="col bg-white px-6 py-6 rounded-xl mr-7 mb-10 mt-7 card-2" style="text-align: center;" >
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2" >
																			<img  style="height: 30px;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPGc+CgkJCTxwYXRoIGQ9Ik00NzguOTY4LDI4MC43NzRoLTc0LjMyM3YtNDkuNTQ4aDkwLjgzOVY4Mi41ODFoLTgyLjU4MVY0OS41NDhoNDkuNTQ4VjMwLjUzTDQ0Mi4wOTYsMGgtNzQuOTAxTDM0Ni44NCwzMC41M3YxOS4wMTggICAgIGg0OS41NDh2MzMuMDMySDI2NC4yNThWNDkuNTQ4aDQ5LjU0OFYzMC41M0wyOTMuNDUxLDBIMjE4LjU1bC0yMC4zNTcsMzAuNTN2MTkuMDE4aDQ5LjU0OHYzMy4wMzJIMTE1LjYxM1Y0OS41NDhoNDkuNTQ4VjMwLjUzICAgICBMMTQ0LjgwNSwwaC03NC45TDQ5LjU0OCwzMC41M3YxOS4wMThoNDkuNTQ4djMzLjAzMkgxNi41MTZ2MTQ4LjY0NWg5MC44Mzl2NDkuNTQ4SDMzLjAzMkMxNC44MTUsMjgwLjc3NCwwLDI5NS41ODksMCwzMTMuODA2ICAgICBzMTQuODE1LDMzLjAzMiwzMy4wMzIsMzMuMDMyVjUxMmg0NDUuOTM1VjM0Ni44MzljMTguMjE3LDAsMzMuMDMyLTE0LjgxNSwzMy4wMzItMzMuMDMyUzQ5Ny4xODUsMjgwLjc3NCw0NzguOTY4LDI4MC43NzR6ICAgICAgTTM2NS4wMTYsMzMuMDMybDExLjAxNi0xNi41MTZoNTcuMjI4bDExLjAwOCwxNi41MTZIMzY1LjAxNnogTTIxNi4zNywzMy4wMzJsMTEuMDE2LTE2LjUxNmg1Ny4yMjhsMTEuMDA4LDE2LjUxNkgyMTYuMzd6ICAgICAgTTY3LjczMywzMy4wMzJMNzguNzQsMTYuNTE2aDU3LjIyOWwxMS4wMDgsMTYuNTE2SDY3LjczM3ogTTMzLjAzMiwyMTQuNzFWOTkuMDk3aDQ0NS45MzVWMjE0LjcxSDMzLjAzMnogTTM4OC4xMjksMjMxLjIyNiAgICAgdjQ5LjU0OGgtMzMuMDMydi00OS41NDhIMzg4LjEyOXogTTMzOC41ODEsMjMxLjIyNnY0OS41NDhIMTczLjQydi00OS41NDhIMzM4LjU4MXogTTE1Ni45MDQsMjMxLjIyNnY0OS41NDhoLTMzLjAzMnYtNDkuNTQ4ICAgICBIMTU2LjkwNHogTTI0Ny43NDIsNDk1LjQ4NGgtNDkuNTQ4di01Ny44MDdjMC0yOS4wNiwyMS41NzgtNTMuMTE2LDQ5LjU0OC01Ny4xNDZWNDk1LjQ4NHogTTMxMy44MDYsNDk1LjQ4NGgtNDkuNTQ4VjM4MC41MzIgICAgIGMyNy45NzEsNC4wMyw0OS41NDgsMjguMDg2LDQ5LjU0OCw1Ny4xNDZWNDk1LjQ4NHogTTQ2Mi40NTIsNDk1LjQ4NEgzMzAuMzIzdi01Ny44MDdjMC00MC45ODUtMzMuMzQ2LTc0LjMyMy03NC4zMjMtNzQuMzIzICAgICBzLTc0LjMyMywzMy4zMzgtNzQuMzIzLDc0LjMyM3Y1Ny44MDdINDkuNTQ4VjM0Ni44MzloNDEyLjkwNFY0OTUuNDg0eiBNNDc4Ljk2OCwzMzAuMzIzSDMzLjAzMiAgICAgYy05LjEwOCwwLTE2LjUxNi03LjQwNy0xNi41MTYtMTYuNTE2czcuNDA4LTE2LjUxNiwxNi41MTYtMTYuNTE2aDQ0NS45MzVjOS4xMDksMCwxNi41MTYsNy40MDcsMTYuNTE2LDE2LjUxNiAgICAgUzQ4OC4wNzcsMzMwLjMyMyw0NzguOTY4LDMzMC4zMjN6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+CgkJCTxwYXRoIGQ9Ik02Ni4wNjUsMTk4LjE5NGg5OS4wOTd2LTgyLjU4MUg2Ni4wNjVWMTk4LjE5NHogTTgyLjU4MSwxMzIuMTI5aDY2LjA2NXY0OS41NDhIODIuNTgxVjEzMi4xMjl6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+CgkJCTxyZWN0IHg9IjIxNC43MDUiIHk9IjExNS42MDkiIHdpZHRoPSIyMzEuMjI2IiBoZWlnaHQ9IjE2LjUxMiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9yZWN0PgoJCQk8cmVjdCB4PSIxODEuNjczIiB5PSIxMTUuNjA5IiB3aWR0aD0iMTYuNTEyIiBoZWlnaHQ9IjE2LjUxMiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9yZWN0PgoJCQk8cmVjdCB4PSIxODEuNjczIiB5PSIxNDguNjQxIiB3aWR0aD0iMjY0LjI1OCIgaGVpZ2h0PSIxNi41MTIiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcmVjdD4KCQkJPHJlY3QgeD0iMTgxLjY3MyIgeT0iMTgxLjY3MyIgd2lkdGg9IjIzMS4yMjYiIGhlaWdodD0iMTYuNTEyIiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3JlY3Q+CgkJCTxyZWN0IHg9IjQyOS40MTkiIHk9IjE4MS42NzMiIHdpZHRoPSIxNi41MTIiIGhlaWdodD0iMTYuNTEyIiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3JlY3Q+CgkJCTxwYXRoIGQ9Ik00NDUuOTM1LDM2My4zNTVoLTk5LjA5N3Y4Mi41ODFoOTkuMDk3VjM2My4zNTV6IE0zODguMTI5LDQyOS40MTloLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NVY0MjkuNDE5eiBNMzg4LjEyOSwzOTYuMzg3ICAgICBoLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NVYzOTYuMzg3eiBNNDA0LjY0NSwzNzkuODcxaDI0Ljc3NXYxNi41MTZoLTI0Ljc3NVYzNzkuODcxeiBNNDI5LjQyLDQyOS40MTloLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NSAgICAgVjQyOS40MTl6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+CgkJCTxwYXRoIGQ9Ik0xNjUuMTYxLDM2My4zNTVINjYuMDY1djgyLjU4MWg5OS4wOTdWMzYzLjM1NXogTTEwNy4zNTUsNDI5LjQxOUg4Mi41ODF2LTE2LjUxNmgyNC43NzVWNDI5LjQxOXogTTEwNy4zNTUsMzk2LjM4NyAgICAgSDgyLjU4MXYtMTYuNTE2aDI0Ljc3NVYzOTYuMzg3eiBNMTIzLjg3MSwzNzkuODcxaDI0Ljc3NXYxNi41MTZoLTI0Ljc3NVYzNzkuODcxeiBNMTQ4LjY0Niw0MjkuNDE5aC0yNC43NzV2LTE2LjUxNmgyNC43NzUgICAgIFY0MjkuNDE5eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJCTwvZz4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
																		</span>
																		<p  class="text-gray font-weight-bold font-size-h6 mt-2 d-block">Empena</p>
																		<input class="btn btn-secondary" type="button" value="Ver"/>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!--end::Tiles Widget 25-->
												</div>
											<?php endif; ?>
											<?php if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 3 || $_SESSION['id_perfil'] == 2 || $_SESSION['id_perfil'] == 4) :  ?>	
												<div class="col-xl-6">
													<!--begin::Stats Widget 27-->
													<div class="card card-custom bg-white card-stretch gutter-b">
														<!--begin::Body-->
														<div class="card-body">
															
															<span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">$50,000</span>
															<span class="font-weight-bold text-muted font-size-sm d-block">Investido</span>
															<input class="btn btn-secondary" type="button" value="Acompanhar"/>
														</div>
														<!--end::Body-->
													</div>
													<!--end::Stats Widget 27-->
												</div>
											<?php endif; ?>
											
											<?php /* if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 3 ) :  ?>	
												<div class="col-xl-6">
													<!--begin::Tiles Widget 25-->
													<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white" style="height: 300px;">
														<div class="card-body d-flex">
															<div class="d-flex py-5 flex-column align-items-start flex-grow-1">
																<div class="flex-grow-1 " style="display: inherit;">
																	<span class="svg-icon svg-icon-gray svg-icon-2x font-weight-bolder font-size-h3" style=" margin-top: -5px;"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-11-19-154210/theme/html/demo8/dist/../src/media/svg/icons/General/Fire.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"/>
																			<path d="M14,7 C13.6666667,10.3333333 12.6666667,12.1167764 11,12.3503292 C11,12.3503292 12.5,6.5 10.5,3.5 C10.5,3.5 10.287918,6.71444735 8.14498739,10.5717225 C7.14049032,12.3798172 6,13.5986793 6,16 C6,19.428689 9.51143904,21.2006583 12.0057195,21.2006583 C14.5,21.2006583 18,20.0006172 18,15.8004732 C18,14.0733981 16.6666667,11.1399071 14,7 Z" fill="#000000"/>
																		</g>
																	</svg><!--end::Svg Icon--></span>
																	<h3 class="text-gray font-weight-bolder font-size-h3">Pontos quentes</h3>
																	
																</div>
																<div class="col-lg-8">
																	<div class="card-body">
																		<!--begin::Chart-->
																		<div id="kt_charts_widget_1_chart"></div>
																		<!--end::Chart-->
																	</div>
																</div>
																	
																<!--<span class="svg-icon svg-icon-lg svg-icon-white">
																	
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																			<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																		</g>
																	</svg>
																	
																</span></a>-->
															</div>
														</div>
													</div>
													<!--end::Tiles Widget 25-->
												</div>
											<?php endif; */?>	
												
										</div>
										<?php /*?><div class="row">
											<div class="col-xl-8">
												<!--begin::Tiles Widget 23-->
												<div class="card card-custom gutter-b" style="height: 250px">
													<!--begin::Body-->
													<div class="card-body d-flex flex-column p-0">
														<!--begin::Stats-->
														<div class="flex-grow-1 card-spacer pb-0">
															<div class="d-flex justify-content-between align-items-center flex-wrap">
																<div class="mr-2">
																	<a href="#" class="text-dark-75 text-hover-primary font-weight-bolder font-size-h2">Generate Reports</a>
																	<div class="text-muted font-size-lg font-weight-bold pt-2">Finance and accounting reports</div>
																</div>
																<div class="font-weight-bolder font-size-h3 text-success">$24,500</div>
															</div>
														</div>
														<!--end::Stats-->
														<!--begin::Chart-->
														<div id="kt_tiles_widget_23_chart" class="card-rounded-bottom" data-color="success" style="height: 100px"></div>
														<!--end::Chart-->
													</div>
													<!--end::Body-->
												</div>
												<!--end::Tiles Widget 23-->
											</div>
											<div class="col-xl-4">
												<!--begin::Tiles Widget 24-->
												<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b" style="height: 250px; background-image: url(assets/media/stock-600x400/img-28.jpg)">
													<!--begin::Body-->
													<div class="card-body">
														<a href='#' class="text-dark-75 text-hover-primary font-weight-bolder font-size-h3">Weekly Sales Stats</a>
														<div class="text-dark-50 font-weight-bold font-size-lg pt-2">890,344 Sales</div>
													</div>
													<!--end::Body-->
												</div>
												<!--end::Tiles Widget 24-->
											</div>
										</div><?php */ ?>
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<?php /* ?><div class="row">
									<div class="col-xl-4">
										<!--begin::Mixed Widget 10-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body d-flex flex-column">
												<div class="flex-grow-1 pb-5">
													<!--begin::white-->
													<div class="d-flex align-items-center pr-2 mb-6">
														<span class="text-muted font-weight-bold font-size-lg flex-grow-1">7 Hours Ago</span>
														<div class="symbol symbol-50">
															<span class="symbol-label bg-light-light">
																<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
															</span>
														</div>
													</div>
													<!--end::Info-->
													<!--begin::Link-->
													<a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">PitStop - Multiple Email
													<br />Generator</a>
													<!--end::Link-->
													<!--begin::Desc-->
													<p class="text-dark-50 font-weight-normal font-size-lg mt-6">Pitstop creates quick email campaigns.
													<br />We help to strengthen your brand
													<br />for your every purpose.</p>
													<!--end::Desc-->
												</div>
												<!--begin::Team-->
												<div class="d-flex align-items-center">
													<!--begin::Pic-->
													<a href="#" class="symbol symbol-45 symbol-light mr-3">
														<div class="symbol-label">
															<img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
														</div>
													</a>
													<!--end::Pic-->
													<!--begin::Pic-->
													<a href="#" class="symbol symbol-45 symbol-light mr-3">
														<div class="symbol-label">
															<img src="assets/media/svg/avatars/028-girl-16.svg" class="h-75 align-self-end" alt="" />
														</div>
													</a>
													<!--end::Pic-->
													<!--begin::Pic-->
													<a href="#" class="symbol symbol-45 symbol-light">
														<div class="symbol-label">
															<img src="assets/media/svg/avatars/024-boy-9.svg" class="h-75 align-self-end" alt="" />
														</div>
													</a>
													<!--end::Pic-->
												</div>
												<!--end::Team-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 10-->
									</div>
									<div class="col-xl-4">
										<!--begin::Mixed Widget 11-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body d-flex flex-column">
												<div class="flex-grow-1 pb-5">
													<!--begin::Info-->
													<div class="d-flex align-items-center pr-2 mb-6">
														<span class="text-muted font-weight-bold font-size-lg flex-grow-1">2 Days Ago</span>
														<div class="symbol symbol-50">
															<span class="symbol-label bg-light-light">
																<img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
															</span>
														</div>
													</div>
													<!--end::Info-->
													<a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">Craft - ReactJS Admin
													<br />Theme</a>
													<!--begin::Desc-->
													<p class="text-dark-50 font-weight-normal font-size-lg mt-6">Craft uses the latest and greatest frameworks
													<br />with ReactJS for complete modernization and
													<br />future proofing your business operations
													<br />and sales opportunities</p>
													<!--end::Desc-->
												</div>
												<!--begin::Team-->
												<div class="d-flex align-items-center">
													<!--begin::Pic-->
													<a href="#" class="symbol symbol-45 symbol-light mr-3">
														<div class="symbol-label">
															<img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
														</div>
													</a>
													<!--end::Pic-->
													<!--begin::Pic-->
													<a href="#" class="symbol symbol-45 symbol-light mr-3">
														<div class="symbol-label">
															<img src="assets/media/svg/avatars/028-girl-16.svg" class="h-75 align-self-end" alt="" />
														</div>
													</a>
													<!--end::Pic-->
													<!--begin: Pic-->
													<a href="#" class="symbol symbol-45 symbol-light mr-3">
														<div class="symbol-label">
															<img src="assets/media/svg/avatars/024-boy-9.svg" class="h-75 align-self-end" alt="" />
														</div>
													</a>
													<!--end::Pic-->
													<!--begin::Pic-->
													<a href="#" class="symbol symbol-45 symbol-light">
														<div class="symbol-label">
															<img src="assets/media/svg/avatars/005-girl-2.svg" class="h-75 align-self-end" alt="" />
														</div>
													</a>
													<!--end::Pic-->
												</div>
												<!--end::Team-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 11-->
									</div>
									<div class="col-xl-4">
										<!--begin::Mixed Widget 12-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body d-flex flex-column">
												<div class="flex-grow-1 pb-5">
													<!--begin::Info-->
													<div class="d-flex align-items-center pr-2 mb-6">
														<span class="text-muted font-weight-bold font-size-lg flex-grow-1">5 Weeks Ago</span>
														<div class="symbol symbol-50">
															<span class="symbol-label bg-light-light">
																<img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
															</span>
														</div>
													</div>
													<!--end::Info-->
													<a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">KT.com - High Quality
													<br />Templates</a>
													<!--begin::Desc-->
													<p class="text-dark-50 font-weight-normal font-size-lg mt-6">Easy to use, incredibly flexible and secure
													<br />with in-depth documentation that outlines
													<br />everything for you</p>
													<!--end::Desc-->
												</div>
												<!--begin::Team-->
												<div class="d-flex align-items-center">
													<!--begin::Pic-->
													<a href="#" class="symbol symbol-45 symbol-light mr-3">
														<div class="symbol-label">
															<img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
														</div>
													</a>
													<!--end::Pic-->
													<!--begin::Pic-->
													<a href="#" class="symbol symbol-45 symbol-light mr-3">
														<div class="symbol-label">
															<img src="assets/media/svg/avatars/028-girl-16.svg" class="h-75 align-self-end" alt="" />
														</div>
													</a>
													<!--end::Pic-->
													<!--begin::Pic-->
													<a href="#" class="symbol symbol-45 symbol-light">
														<div class="symbol-label">
															<img src="assets/media/svg/avatars/024-boy-9.svg" class="h-75 align-self-end" alt="" />
														</div>
													</a>
													<!--end::Pic-->
												</div>
												<!--end::Team-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 12-->
									</div>
								</div><?php */ ?>

								<!--end::Row-->
								<!--begin::Row-->
								
								<div class="row">
									<?php if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 3 || $_SESSION['id_perfil'] == 4 ) :  ?>
										<div class="col-xl-12">
											<!--begin::List Widget 7-->
											<div class="card card-custom gutter-b card-stretch">
												<div class="card-header border-0">
													<h3 class="card-title font-weight-bolder text-dark">Minhas Mídias</h3>
													
												</div>
												<!--begin::Body-->
												<div class="card-body pt-0">
													<!--begin::Item-->
													<div class="d-flex align-items-center flex-wrap mb-10">
														<!--begin::Symbol-->
														<div class="symbol symbol-50 symbol-light mr-5">
															<span class="symbol-label">
																<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Text-->
														<div class="d-flex flex-column flex-grow-1 mr-2">
															<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Top Authors</a>
															<span class="text-muted font-weight-bold">Mark, Rowling, Esther</span>
														</div>
														<!--end::Text-->
														<span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+82$</span>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center flex-wrap mb-10">
														<!--begin::Symbol-->
														<div class="symbol symbol-50 symbol-light mr-5">
															<span class="symbol-label">
																<img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Text-->
														<div class="d-flex flex-column flex-grow-1 mr-2">
															<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Popular Authors</a>
															<span class="text-muted font-weight-bold">Randy, Steve, Mike</span>
														</div>
														<!--end::Text-->
														<span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+280$</span>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center flex-wrap mb-10">
														<!--begin::Symbol-->
														<div class="symbol symbol-50 symbol-light mr-5">
															<span class="symbol-label">
																<img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Text-->
														<div class="d-flex flex-column flex-grow-1 mr-2">
															<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">New Users</a>
															<span class="text-muted font-weight-bold">John, Pat, Jimmy</span>
														</div>
														<!--end::Text-->
														<span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+4500$</span>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center flex-wrap mb-10">
														<!--begin::Symbol-->
														<div class="symbol symbol-50 symbol-light mr-5">
															<span class="symbol-label">
																<img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Text-->
														<div class="d-flex flex-column flex-grow-1 mr-2">
															<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Active Customers</a>
															<span class="text-muted font-weight-bold">Sandra, Tim, Louis</span>
														</div>
														<!--end::Text-->
														<span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+4500$</span>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center flex-wrap">
														<!--begin::Symbol-->
														<div class="symbol symbol-50 symbol-light mr-5">
															<span class="symbol-label">
																<img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Text-->
														<div class="d-flex flex-column flex-grow-1 mr-2">
															<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Bestseller Theme</a>
															<span class="text-muted font-weight-bold">Disco, Retro, Sports</span>
														</div>
														<!--end::Text-->
														<span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+4500$</span>
													</div>
													<!--end::Item-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::List Widget 7-->
										</div>
									<?php endif; ?>
									
								</div>
								<div class="row">	
									<?php if($_SESSION['id_perfil'] == 2 || $_SESSION['id_perfil'] == 3 ) :  ?>
										<div class="col-xl-12">
											<!--begin::List Widget 7-->
											<div class="card card-custom gutter-b card-stretch">
												<!--begin::Header-->
												<div class="card-header border-0">
													<h3 class="card-title font-weight-bolder text-dark">Minhas Mídias</h3>
													
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-0">
													<!--begin::Item-->
													<div class="d-flex align-items-center flex-wrap mb-10">
														<!--begin::Symbol-->
														<div class="symbol symbol-50 symbol-light mr-5">
															<span class="symbol-label">
																<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Text-->
														<div class="d-flex flex-column flex-grow-1 mr-2">
															<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Top Authors</a>
															<span class="text-muted font-weight-bold">Mark, Rowling, Esther</span>
														</div>
														<!--end::Text-->
														<span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+82$</span>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center flex-wrap mb-10">
														<!--begin::Symbol-->
														<div class="symbol symbol-50 symbol-light mr-5">
															<span class="symbol-label">
																<img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Text-->
														<div class="d-flex flex-column flex-grow-1 mr-2">
															<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Popular Authors</a>
															<span class="text-muted font-weight-bold">Randy, Steve, Mike</span>
														</div>
														<!--end::Text-->
														<span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+280$</span>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center flex-wrap mb-10">
														<!--begin::Symbol-->
														<div class="symbol symbol-50 symbol-light mr-5">
															<span class="symbol-label">
																<img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Text-->
														<div class="d-flex flex-column flex-grow-1 mr-2">
															<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">New Users</a>
															<span class="text-muted font-weight-bold">John, Pat, Jimmy</span>
														</div>
														<!--end::Text-->
														<span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+4500$</span>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center flex-wrap mb-10">
														<!--begin::Symbol-->
														<div class="symbol symbol-50 symbol-light mr-5">
															<span class="symbol-label">
																<img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Text-->
														<div class="d-flex flex-column flex-grow-1 mr-2">
															<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Active Customers</a>
															<span class="text-muted font-weight-bold">Sandra, Tim, Louis</span>
														</div>
														<!--end::Text-->
														<span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+4500$</span>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center flex-wrap">
														<!--begin::Symbol-->
														<div class="symbol symbol-50 symbol-light mr-5">
															<span class="symbol-label">
																<img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Text-->
														<div class="d-flex flex-column flex-grow-1 mr-2">
															<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Bestseller Theme</a>
															<span class="text-muted font-weight-bold">Disco, Retro, Sports</span>
														</div>
														<!--end::Text-->
														<span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+4500$</span>
													</div>
													<!--end::Item-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::List Widget 7-->
										</div>
									<?php endif; ?>
									
									<?php /*?><div class="col-xl-6">
										<!--begin::Base Table Widget 5-->
										<div class="card card-custom gutter-b card-stretch">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">New Arrivals</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
												</h3>
												<div class="card-toolbar">
													<ul class="nav nav-pills nav-pills-sm nav-dark-75">
														<li class="nav-item">
															<a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_5_1">Month</a>
														</li>
														<li class="nav-item">
															<a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_5_2">Week</a>
														</li>
														<li class="nav-item">
															<a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_5_3">Day</a>
														</li>
													</ul>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
												<div class="tab-content mt-5" id="myTabTables5">
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_tab_pane_5_1" role="tabpanel" aria-labelledby="kt_tab_pane_5_1">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless table-vertical-center">
																<thead>
																	<tr>
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-140px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular Authors</a>
																			<span class="text-muted font-weight-bold d-block">Most Successful</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">Python, MySQL</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-warning label-inline">In Progress</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New Users</a>
																			<span class="text-muted font-weight-bold d-block">Awesome Users</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">Laravel,Metronic</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-success label-inline">Success</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active Customers</a>
																			<span class="text-muted font-weight-bold d-block">Best Customers</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">AngularJS, C#</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-danger label-inline">Rejected</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top Authors</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">ReactJs, HTML</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-primary label-inline">Approved</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller Theme</a>
																			<span class="text-muted font-weight-bold d-block">Amazing Templates</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">ReactJS, Ruby</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-warning label-inline">In Progress</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_tab_pane_5_2" role="tabpanel" aria-labelledby="kt_tab_pane_5_2">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless table-vertical-center">
																<thead>
																	<tr>
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-140px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active Customers</a>
																			<span class="text-muted font-weight-bold d-block">Best Customers</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">AngularJS, C#</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-danger label-inline">Rejected</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller Theme</a>
																			<span class="text-muted font-weight-bold d-block">Amazing Templates</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">ReactJS, Ruby</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-warning label-inline">In Progress</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top Authors</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">ReactJs, HTML</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-primary label-inline">Approved</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular Authors</a>
																			<span class="text-muted font-weight-bold d-block">Most Successful</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">Python, MySQL</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-warning label-inline">In Progress</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New Users</a>
																			<span class="text-muted font-weight-bold d-block">Awesome Users</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">Laravel,Metronic</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-success label-inline">Success</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_tab_pane_5_3" role="tabpanel" aria-labelledby="kt_tab_pane_5_3">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless table-vertical-center">
																<thead>
																	<tr>
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-140px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top Authors</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">ReactJs, HTML</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-primary label-inline">Approved</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular Authors</a>
																			<span class="text-muted font-weight-bold d-block">Most Successful</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">Python, MySQL</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-warning label-inline">In Progress</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New Users</a>
																			<span class="text-muted font-weight-bold d-block">Awesome Users</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">Laravel,Metronic</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-success label-inline">Success</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active Customers</a>
																			<span class="text-muted font-weight-bold d-block">Best Customers</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">AngularJS, C#</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-danger label-inline">Rejected</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller Theme</a>
																			<span class="text-muted font-weight-bold d-block">Amazing Templates</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">ReactJS, Ruby</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-warning label-inline">In Progress</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Base Table Widget 5-->
									</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row">
									<div class="col-xl-12">
										<!--begin::Advance Table Widget 6-->
										<div class="card card-custom gutter-b card-stretch">
											<!--begin::Header-->
											<div class="card-header border-0 py-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Agents Stats</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
												</h3>
												<div class="card-toolbar">
													<a href="#" class="btn btn-success font-weight-bolder font-size-sm">
													<span class="svg-icon svg-icon-md svg-icon-white">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<polygon points="0 0 24 0 24 24 0 24" />
																<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>Add New Member</a>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body py-0">
												<!--begin::Table-->
												<div class="table-responsive">
													<table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_3">
														<thead>
															<tr class="text-left text-uppercase">
																<th class="pl-0" style="width: 20px">
																	<label class="checkbox checkbox-lg checkbox-inline mr-2">
																		<input type="checkbox" value="1" />
																		<span></span>
																	</label>
																</th>
																<th class="px-0" style="width: 50px">authors</th>
																<th style="min-width: 120px"></th>
																<th style="min-width: 120px">country</th>
																<th class="text-info" style="min-width: 150px">company</th>
																<th style="min-width: 150px">status</th>
																<th class="pr-0" style="min-width: 160px">action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td class="pl-0 py-7">
																	<label class="checkbox checkbox-lg checkbox-inline">
																		<input type="checkbox" value="1" />
																		<span></span>
																	</label>
																</td>
																<td class="pl-0">
																	<div class="symbol symbol-50 symbol-light mt-1">
																		<span class="symbol-label">
																			<img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
																		</span>
																	</div>
																</td>
																<td class="pl-0">
																	<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad Simmons</a>
																	<span class="text-muted font-weight-bold text-muted d-block">HTML, JS, ReactJS</span>
																</td>
																<td>
																	<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Brasil</span>
																	<span class="text-muted font-weight-bold">Code: BR</span>
																</td>
																<td>
																	<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Intertico</span>
																	<span class="text-muted font-weight-bold">Web, UI/UX Design</span>
																</td>
																<td>
																	<div class="d-flex flex-column w-100 mr-2">
																		<div class="d-flex align-items-center justify-content-between mb-2">
																			<span class="text-muted mr-2 font-size-sm font-weight-bold">65%</span>
																			<span class="text-muted font-size-sm font-weight-bold">Progress</span>
																		</div>
																		<div class="progress progress-xs w-100">
																			<div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																	</div>
																</td>
																<td class="text-right pr-0">
																	<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																					<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="pl-0 py-7">
																	<label class="checkbox checkbox-lg checkbox-inline">
																		<input type="checkbox" value="1" />
																		<span></span>
																	</label>
																</td>
																<td class="pl-0">
																	<div class="symbol symbol-50 symbol-light mt-1">
																		<span class="symbol-label">
																			<img src="assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end" alt="" />
																		</span>
																	</div>
																</td>
																<td class="pl-0">
																	<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Jessie Clarcson</a>
																	<span class="text-muted font-weight-bold text-muted d-block">C#, ASP.NET, MS SQL</span>
																</td>
																<td>
																	<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Brasil</span>
																	<span class="text-muted font-weight-bold">Code: BY</span>
																</td>
																<td>
																	<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Agoda</span>
																	<span class="text-muted font-weight-bold">Houses &amp; Hotels</span>
																</td>
																<td>
																	<div class="d-flex flex-column w-100 mr-2">
																		<div class="d-flex align-items-center justify-content-between mb-2">
																			<span class="text-muted mr-2 font-size-sm font-weight-bold">83%</span>
																			<span class="text-muted font-size-sm font-weight-bold">Progress</span>
																		</div>
																		<div class="progress progress-xs w-100">
																			<div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																	</div>
																</td>
																<td class="text-right pr-0">
																	<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																					<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="pl-0 py-7">
																	<label class="checkbox checkbox-lg checkbox-inline">
																		<input type="checkbox" value="1" />
																		<span></span>
																	</label>
																</td>
																<td class="pl-0">
																	<div class="symbol symbol-50 symbol-light mt-1">
																		<span class="symbol-label">
																			<img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end" alt="" />
																		</span>
																	</div>
																</td>
																<td class="pl-0">
																	<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Lebron Wayde</a>
																	<span class="text-muted font-weight-bold text-muted d-block">PHP, Laravel, VueJS</span>
																</td>
																<td>
																	<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Phillipines</span>
																	<span class="text-muted font-weight-bold">Code: PH</span>
																</td>
																<td>
																	<span class="text-dark-75 font-weight-bolder d-block font-size-lg">RoadGee</span>
																	<span class="text-muted font-weight-bold">Transportation</span>
																</td>
																<td>
																	<div class="d-flex flex-column w-100 mr-2">
																		<div class="d-flex align-items-center justify-content-between mb-2">
																			<span class="text-muted mr-2 font-size-sm font-weight-bold">47%</span>
																			<span class="text-muted font-size-sm font-weight-bold">Progress</span>
																		</div>
																		<div class="progress progress-xs w-100">
																			<div class="progress-bar bg-primary" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																	</div>
																</td>
																<td class="text-right pr-0">
																	<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																					<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="pl-0 py-7">
																	<label class="checkbox checkbox-lg checkbox-inline">
																		<input type="checkbox" value="1" />
																		<span></span>
																	</label>
																</td>
																<td class="pl-0">
																	<div class="symbol symbol-50 symbol-light mt-1">
																		<span class="symbol-label">
																			<img src="assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="" />
																		</span>
																	</div>
																</td>
																<td class="pl-0">
																	<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Natali Trump</a>
																	<span class="text-muted font-weight-bold text-muted d-block">Python, PostgreSQL, ReactJS</span>
																</td>
																<td>
																	<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Argentina</span>
																	<span class="text-muted font-weight-bold">Code: AR</span>
																</td>
																<td>
																	<span class="text-dark-75 font-weight-bolder d-block font-size-lg">The Hill</span>
																	<span class="text-muted font-weight-bold">Insurance</span>
																</td>
																<td>
																	<div class="d-flex flex-column w-100 mr-2">
																		<div class="d-flex align-items-center justify-content-between mb-2">
																			<span class="text-muted mr-2 font-size-sm font-weight-bold">71%</span>
																			<span class="text-muted font-size-sm font-weight-bold">Progress</span>
																		</div>
																		<div class="progress progress-xs w-100">
																			<div class="progress-bar bg-danger" role="progressbar" style="width: 71%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																	</div>
																</td>
																<td class="text-right pr-0">
																	<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																					<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
												<!--end::Table-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Advance Table Widget 6-->
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row">
									<div class="col-lg-4">
										<!--begin::Mixed Widget 15-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title font-weight-bolder">Trends</h3>
												<div class="card-toolbar">
													<div class="dropdown dropdown-inline">
														<a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
															<!--begin::Naviigation-->
															<ul class="navi">
																<li class="navi-header font-weight-bold py-5">
																	<span class="font-size-lg">Add New:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-shopping-cart-1"></i>
																		</span>
																		<span class="navi-text">Order</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="navi-icon flaticon2-calendar-8"></i>
																		</span>
																		<span class="navi-text">Members</span>
																		<span class="navi-label">
																			<span class="label label-light-danger label-rounded font-weight-bold">3</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="navi-icon flaticon2-telegram-logo"></i>
																		</span>
																		<span class="navi-text">Project</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="navi-icon flaticon2-new-email"></i>
																		</span>
																		<span class="navi-text">Record</span>
																		<span class="navi-label">
																			<span class="label label-light-success label-rounded font-weight-bold">5</span>
																		</span>
																	</a>
																</li>
																<li class="navi-separator mt-3 opacity-70"></li>
																<li class="navi-footer pt-5 pb-4">
																	<a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More options</a>
																	<a class="btn btn-clean font-weight-bold btn-sm d-none" href="#" data-toggle="tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
																</li>
															</ul>
															<!--end::Naviigation-->
														</div>
													</div>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body d-flex flex-column">
												<!--begin::Chart-->
												<div class="flex-grow-1">
													<div id="kt_mixed_widget_15_chart" style="height: 150px"></div>
												</div>
												<!--end::Chart-->
												<!--begin::Items-->
												<div class="mt-5">
													<!--begin::Item-->
													<div class="d-flex align-items-center justify-content-between mb-5">
														<!--begin::Section-->
														<div class="d-flex align-items-center mr-2">
															<!--begin::Symbol-->
															<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
																<div class="symbol-label">
																	<img src="assets/media/svg/misc/006-plurk.svg" class="h-50" alt="" />
																</div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div>
																<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Top Authors</a>
																<div class="font-size-sm text-muted font-weight-bold mt-1">Ricky Hunt, Sandra Trepp</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">+82$</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Widget Item-->
													<div class="d-flex align-items-center justify-content-between mb-5">
														<!--begin::Section-->
														<div class="d-flex align-items-center mr-2">
															<!--begin::Symbol-->
															<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
																<div class="symbol-label">
																	<img src="assets/media/svg/misc/015-telegram.svg" class="h-50" alt="" />
																</div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div>
																<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Top Sales</a>
																<div class="font-size-sm text-muted font-weight-bold mt-1">PitStop Emails</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">+82$</div>
														<!--end::Label-->
													</div>
													<!--end::Widget Item-->
													<!--begin::Widget Item-->
													<div class="d-flex align-items-center justify-content-between">
														<!--begin::Section-->
														<div class="d-flex align-items-center mr-2">
															<!--begin::Symbol-->
															<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
																<div class="symbol-label">
																	<img src="assets/media/svg/misc/003-puzzle.svg" class="h-50" alt="" />
																</div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div>
																<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Top Engagement</a>
																<div class="font-size-sm text-muted font-weight-bold mt-1">KT.com</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">+82$</div>
														<!--end::Label-->
													</div>
													<!--end::Widget Item-->
												</div>
												<!--end::Widget Items-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 15-->
									</div>
									<div class="col-lg-8">
										<!--begin::Base Table Widget 2-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">New Arrivals</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
												</h3>
												<div class="card-toolbar">
													<ul class="nav nav-pills nav-pills-sm nav-dark-75">
														<li class="nav-item">
															<a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_2_1">Month</a>
														</li>
														<li class="nav-item">
															<a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_2_2">Week</a>
														</li>
														<li class="nav-item">
															<a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_2_3">Day</a>
														</li>
													</ul>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
												<div class="tab-content mt-5" id="myTabTables2">
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_tab_pane_2_1" role="tabpanel" aria-labelledby="kt_tab_pane_2_1">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless table-vertical-center">
																<thead>
																	<tr>
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-140px"></th>
																		<th class="p-0 min-w-120px"></th>
																		<th class="p-0 min-w-40px"></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top Authors</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">ReactJs, HTML</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">4600 Users</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller Theme</a>
																			<span class="text-muted font-weight-bold d-block">Amazing Templates</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">ReactJS, Ruby</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">354 Users</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular Authors</a>
																			<span class="text-muted font-weight-bold d-block">Most Successful</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">Python, MySQL</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">7200 Users</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New Users</a>
																			<span class="text-muted font-weight-bold d-block">Awesome Users</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">Laravel, Metronic</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">890 Users</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active Customers</a>
																			<span class="text-muted font-weight-bold d-block">Best Customers</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">AngularJS, C#</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">6370 Users</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_tab_pane_2_2" role="tabpanel" aria-labelledby="kt_tab_pane_2_2">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless table-vertical-center">
																<thead>
																	<tr>
																		<th class="p-0" style="width: 50px"></th>
																		<th class="p-0" style="min-width: 150px"></th>
																		<th class="p-0" style="min-width: 140px"></th>
																		<th class="p-0" style="min-width: 120px"></th>
																		<th class="p-0" style="min-width: 40px"></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular Authors</a>
																			<span class="text-muted font-weight-bold d-block">Most Successful</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">Python, MySQL</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">7200 Users</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New Users</a>
																			<span class="text-muted font-weight-bold d-block">Awesome Users</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">Laravel, Metronic</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">890 Users</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active Customers</a>
																			<span class="text-muted font-weight-bold d-block">Best Customers</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">AngularJS, C#</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">6370 Users</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top Authors</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">ReactJs, HTML</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">4600 Users</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller Theme</a>
																			<span class="text-muted font-weight-bold d-block">Amazing Templates</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">ReactJS, Ruby</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">354 Users</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_tab_pane_2_3" role="tabpanel" aria-labelledby="kt_tab_pane_2_3">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless table-vertical-center">
																<thead>
																	<tr>
																		<th class="p-0" style="width: 50px"></th>
																		<th class="p-0" style="min-width: 150px"></th>
																		<th class="p-0" style="min-width: 140px"></th>
																		<th class="p-0" style="min-width: 120px"></th>
																		<th class="p-0" style="min-width: 40px"></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top Authors</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">ReactJs, HTML</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">4600 Users</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular Authors</a>
																			<span class="text-muted font-weight-bold d-block">Most Successful</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">Python, MySQL</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">7200 Users</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New Users</a>
																			<span class="text-muted font-weight-bold d-block">Awesome Users</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">Laravel, Metronic</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">890 Users</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active Customers</a>
																			<span class="text-muted font-weight-bold d-block">Best Customers</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">AngularJS, C#</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">6370 Users</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller Theme</a>
																			<span class="text-muted font-weight-bold d-block">Amazing Templates</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">ReactJS, Ruby</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold">354 Users</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Base Table Widget 2-->
									</div>
								</div><?php */ ?>
								</div>
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
								<span class="text-muted font-weight-bold mr-2">2020©</span>
								<a href="#" target="_blank" class="text-white text-hover-primary">UniMidias</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<div class="nav nav-dark order-1 order-md-2">
								<a href="#" target="_blank" class="nav-link pr-3 pl-0 text-muted text-hover-primary">Sobre</a>
								<a href="#" target="_blank" class="nav-link px-3 text-muted text-hover-primary">Parceiros</a>
								<a href="#" target="_blank" class="nav-link pl-3 pr-0 text-muted text-hover-primary">Contato</a>
							</div>
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
		<!--begin::Quick Cart-->
		<div id="kt_quick_cart" class="offcanvas offcanvas-right p-10">
			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
				<h4 class="font-weight-bold m-0">Shopping Cart</h4>
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_cart_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content">
				<!--begin::Wrapper-->
				<div class="offcanvas-wrapper mb-5 scroll-pull">
					<!--begin::Item-->
					<div class="d-flex align-items-center justify-content-between py-8">
						<div class="d-flex flex-column mr-2">
							<a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">iBlender</a>
							<span class="text-muted">The best kitchen gadget in 2020</span>
							<div class="d-flex align-items-center mt-2">
								<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 350</span>
								<span class="text-muted mr-1">for</span>
								<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">5</span>
								<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
									<i class="ki ki-minus icon-xs"></i>
								</a>
								<a href="#" class="btn btn-xs btn-light-success btn-icon">
									<i class="ki ki-plus icon-xs"></i>
								</a>
							</div>
						</div>
						<a href="#" class="symbol symbol-70 flex-shrink-0">
							<img src="assets/media/stock-600x400/img-1.jpg" title="" alt="" />
						</a>
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-solid"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex align-items-center justify-content-between py-8">
						<div class="d-flex flex-column mr-2">
							<a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">SmartCleaner</a>
							<span class="text-muted">Smart tool for cooking</span>
							<div class="d-flex align-items-center mt-2">
								<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
								<span class="text-muted mr-1">for</span>
								<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">4</span>
								<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
									<i class="ki ki-minus icon-xs"></i>
								</a>
								<a href="#" class="btn btn-xs btn-light-success btn-icon">
									<i class="ki ki-plus icon-xs"></i>
								</a>
							</div>
						</div>
						<a href="#" class="symbol symbol-70 flex-shrink-0">
							<img src="assets/media/stock-600x400/img-2.jpg" title="" alt="" />
						</a>
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-solid"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex align-items-center justify-content-between py-8">
						<div class="d-flex flex-column mr-2">
							<a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">CameraMax</a>
							<span class="text-muted">Professional camera for edge cutting shots</span>
							<div class="d-flex align-items-center mt-2">
								<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 150</span>
								<span class="text-muted mr-1">for</span>
								<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">3</span>
								<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
									<i class="ki ki-minus icon-xs"></i>
								</a>
								<a href="#" class="btn btn-xs btn-light-success btn-icon">
									<i class="ki ki-plus icon-xs"></i>
								</a>
							</div>
						</div>
						<a href="#" class="symbol symbol-70 flex-shrink-0">
							<img src="assets/media/stock-600x400/img-3.jpg" title="" alt="" />
						</a>
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-solid"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex align-items-center justify-content-between py-8">
						<div class="d-flex flex-column mr-2">
							<a href="#" class="font-weight-bold text-dark text-hover-primary">4D Printer</a>
							<span class="text-muted">Manufactoring unique objects</span>
							<div class="d-flex align-items-center mt-2">
								<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 1450</span>
								<span class="text-muted mr-1">for</span>
								<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
								<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
									<i class="ki ki-minus icon-xs"></i>
								</a>
								<a href="#" class="btn btn-xs btn-light-success btn-icon">
									<i class="ki ki-plus icon-xs"></i>
								</a>
							</div>
						</div>
						<a href="#" class="symbol symbol-70 flex-shrink-0">
							<img src="assets/media/stock-600x400/img-4.jpg" title="" alt="" />
						</a>
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-solid"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex align-items-center justify-content-between py-8">
						<div class="d-flex flex-column mr-2">
							<a href="#" class="font-weight-bold text-dark text-hover-primary">MotionWire</a>
							<span class="text-muted">Perfect animation tool</span>
							<div class="d-flex align-items-center mt-2">
								<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
								<span class="text-muted mr-1">for</span>
								<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
								<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
									<i class="ki ki-minus icon-xs"></i>
								</a>
								<a href="#" class="btn btn-xs btn-light-success btn-icon">
									<i class="ki ki-plus icon-xs"></i>
								</a>
							</div>
						</div>
						<a href="#" class="symbol symbol-70 flex-shrink-0">
							<img src="assets/media/stock-600x400/img-8.jpg" title="" alt="" />
						</a>
					</div>
					<!--end::Item-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Purchase-->
				<div class="offcanvas-footer">
					<div class="d-flex align-items-center justify-content-between mb-4">
						<span class="font-weight-bold text-muted font-size-sm mr-2">Total</span>
						<span class="font-weight-bolder text-dark-50 text-right">$1840.00</span>
					</div>
					<div class="d-flex align-items-center justify-content-between mb-7">
						<span class="font-weight-bold text-muted font-size-sm mr-2">Sub total</span>
						<span class="font-weight-bolder text-primary text-right">$5640.00</span>
					</div>
					<div class="text-right">
						<button type="button" class="btn btn-primary text-weight-bold">Place Order</button>
					</div>
				</div>
				<!--end::Purchase-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Quick Cart-->
		<!--begin::Quick Panel-->
		<div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">
			<!--begin::Header-->
			<div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
				<ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs">Audit Logs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_notifications">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_settings">Settings</a>
					</li>
				</ul>
				<div class="offcanvas-close mt-n1 pr-5">
					<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
						<i class="ki ki-close icon-xs text-muted"></i>
					</a>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content px-10">
				<div class="tab-content">
					<!--begin::Tabpane-->
					<div class="tab-pane fade show pt-3 pr-5 mr-n5 active" id="kt_quick_panel_logs" role="tabpanel">
						<!--begin::Section-->
						<div class="mb-15">
							<h5 class="font-weight-bold mb-5">System Messages</h5>
							<!--begin: Item-->
							<div class="d-flex align-items-center flex-wrap mb-5">
								<div class="symbol symbol-50 symbol-light mr-5">
									<span class="symbol-label">
										<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
									</span>
								</div>
								<div class="d-flex flex-column flex-grow-1 mr-2">
									<a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Top Authors</a>
									<span class="text-muted font-weight-bold">Most Successful Fellas</span>
								</div>
								<span class="btn btn-sm btn-light font-weight-bolder py-1 my-lg-0 my-2 text-dark-50">+82$</span>
							</div>
							<!--end: Item-->
							<!--begin: Item-->
							<div class="d-flex align-items-center flex-wrap mb-5">
								<div class="symbol symbol-50 symbol-light mr-5">
									<span class="symbol-label">
										<img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
									</span>
								</div>
								<div class="d-flex flex-column flex-grow-1 mr-2">
									<a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Popular Authors</a>
									<span class="text-muted font-weight-bold">Most Successful Fellas</span>
								</div>
								<span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+280$</span>
							</div>
							<!--end: Item-->
							<!--begin: Item-->
							<div class="d-flex align-items-center flex-wrap mb-5">
								<div class="symbol symbol-50 symbol-light mr-5">
									<span class="symbol-label">
										<img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
									</span>
								</div>
								<div class="d-flex flex-column flex-grow-1 mr-2">
									<a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">New Users</a>
									<span class="text-muted font-weight-bold">Most Successful Fellas</span>
								</div>
								<span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
							</div>
							<!--end: Item-->
							<!--begin: Item-->
							<div class="d-flex align-items-center flex-wrap mb-5">
								<div class="symbol symbol-50 symbol-light mr-5">
									<span class="symbol-label">
										<img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
									</span>
								</div>
								<div class="d-flex flex-column flex-grow-1 mr-2">
									<a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Active Customers</a>
									<span class="text-muted font-weight-bold">Most Successful Fellas</span>
								</div>
								<span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
							</div>
							<!--end: Item-->
							<!--begin: Item-->
							<div class="d-flex align-items-center flex-wrap">
								<div class="symbol symbol-50 symbol-light mr-5">
									<span class="symbol-label">
										<img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
									</span>
								</div>
								<div class="d-flex flex-column flex-grow-1 mr-2">
									<a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Bestseller Theme</a>
									<span class="text-muted font-weight-bold">Most Successful Fellas</span>
								</div>
								<span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
							</div>
							<!--end: Item-->
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="mb-5">
							<h5 class="font-weight-bold mb-5">Notifications</h5>
							<!--begin: Item-->
							<div class="d-flex align-items-center bg-light-warning rounded p-5 mb-5">
								<span class="svg-icon svg-icon-warning mr-5">
									<span class="svg-icon svg-icon-lg">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
												<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</span>
								<div class="d-flex flex-column flex-grow-1 mr-2">
									<a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another purpose persuade</a>
									<span class="text-muted font-size-sm">Due in 2 Days</span>
								</div>
								<span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
							</div>
							<!--end: Item-->
							<!--begin: Item-->
							<div class="d-flex align-items-center bg-light-success rounded p-5 mb-5">
								<span class="svg-icon svg-icon-success mr-5">
									<span class="svg-icon svg-icon-lg">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
												<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</span>
								<div class="d-flex flex-column flex-grow-1 mr-2">
									<a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would be to people</a>
									<span class="text-muted font-size-sm">Due in 2 Days</span>
								</div>
								<span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
							</div>
							<!--end: Item-->
							<!--begin: Item-->
							<div class="d-flex align-items-center bg-light-danger rounded p-5 mb-5">
								<span class="svg-icon svg-icon-danger mr-5">
									<span class="svg-icon svg-icon-lg">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
												<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</span>
								<div class="d-flex flex-column flex-grow-1 mr-2">
									<a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose would be to persuade</a>
									<span class="text-muted font-size-sm">Due in 2 Days</span>
								</div>
								<span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
							</div>
							<!--end: Item-->
							<!--begin: Item-->
							<div class="d-flex align-items-center bg-light-info rounded p-5">
								<span class="svg-icon svg-icon-info mr-5">
									<span class="svg-icon svg-icon-lg">
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
												<path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
												<path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
												<path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</span>
								<div class="d-flex flex-column flex-grow-1 mr-2">
									<a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The best product</a>
									<span class="text-muted font-size-sm">Due in 2 Days</span>
								</div>
								<span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
							</div>
							<!--end: Item-->
						</div>
						<!--end::Section-->
					</div>
					<!--end::Tabpane-->
					<!--begin::Tabpane-->
					<div class="tab-pane fade pt-2 pr-5 mr-n5" id="kt_quick_panel_notifications" role="tabpanel">
						<!--begin::Nav-->
						<div class="navi navi-icon-circle navi-spacer-x-0">
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon-bell text-success icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">5 new user generated report</div>
										<div class="text-muted">Reports based on sales</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon2-box text-danger icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">2 new items submited</div>
										<div class="text-muted">by Grog John</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon-psd text-primary icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">79 PSD files generated</div>
										<div class="text-muted">Reports based on sales</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon2-supermarket text-warning icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
										<div class="text-muted">Total 234 items</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon-paper-plane-1 text-success icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
										<div class="text-muted">Fostest is Barry</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon-safe-shield-protection text-danger icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">3 Defence alerts</div>
										<div class="text-muted">40% less alerts thar last week</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon-notepad text-primary icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">Avarage 4 blog posts per author</div>
										<div class="text-muted">Most posted 12 time</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon-users-1 text-warning icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">16 authors joined last week</div>
										<div class="text-muted">9 photodrapehrs, 7 designer</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon2-box text-info icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">2 new items have been submited</div>
										<div class="text-muted">by Grog John</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon2-download text-success icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">2.8 GB-total downloads size</div>
										<div class="text-muted">Mostly PSD end AL concepts</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon2-supermarket text-danger icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
										<div class="text-muted">Total 234 items</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon-bell text-primary icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">7 new user generated report</div>
										<div class="text-muted">Reports based on sales</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon-paper-plane-1 text-success icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
										<div class="text-muted">Fostest is Barry</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
						</div>
						<!--end::Nav-->
					</div>
					<!--end::Tabpane-->
					<!--begin::Tabpane-->
					<div class="tab-pane fade pt-3 pr-5 mr-n5" id="kt_quick_panel_settings" role="tabpanel">
						<form class="form">
							<!--begin::Section-->
							<div>
								<h5 class="font-weight-bold mb-3">Customer Care</h5>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Enable Notifications:</label>
									<div class="col-4 d-flex justify-content-end">
										<span class="switch switch-success switch-sm">
											<label>
												<input type="checkbox" checked="checked" name="select" />
												<span></span>
											</label>
										</span>
									</div>
								</div>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Enable Case Tracking:</label>
									<div class="col-4 d-flex justify-content-end">
										<span class="switch switch-success switch-sm">
											<label>
												<input type="checkbox" name="quick_panel_notifications_2" />
												<span></span>
											</label>
										</span>
									</div>
								</div>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Support Portal:</label>
									<div class="col-4 d-flex justify-content-end">
										<span class="switch switch-success switch-sm">
											<label>
												<input type="checkbox" checked="checked" name="select" />
												<span></span>
											</label>
										</span>
									</div>
								</div>
							</div>
							<!--end::Section-->
							<div class="separator separator-dashed my-6"></div>
							<!--begin::Section-->
							<div class="pt-2">
								<h5 class="font-weight-bold mb-3">Reports</h5>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Generate Reports:</label>
									<div class="col-4 d-flex justify-content-end">
										<span class="switch switch-sm switch-danger">
											<label>
												<input type="checkbox" checked="checked" name="select" />
												<span></span>
											</label>
										</span>
									</div>
								</div>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Enable Report Export:</label>
									<div class="col-4 d-flex justify-content-end">
										<span class="switch switch-sm switch-danger">
											<label>
												<input type="checkbox" name="select" />
												<span></span>
											</label>
										</span>
									</div>
								</div>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Allow Data Collection:</label>
									<div class="col-4 d-flex justify-content-end">
										<span class="switch switch-sm switch-danger">
											<label>
												<input type="checkbox" checked="checked" name="select" />
												<span></span>
											</label>
										</span>
									</div>
								</div>
							</div>
							<!--end::Section-->
							<div class="separator separator-dashed my-6"></div>
							<!--begin::Section-->
							<div class="pt-2">
								<h5 class="font-weight-bold mb-3">Memebers</h5>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Enable Member singup:</label>
									<div class="col-4 d-flex justify-content-end">
										<span class="switch switch-sm switch-primary">
											<label>
												<input type="checkbox" checked="checked" name="select" />
												<span></span>
											</label>
										</span>
									</div>
								</div>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Allow User Feedbacks:</label>
									<div class="col-4 d-flex justify-content-end">
										<span class="switch switch-sm switch-primary">
											<label>
												<input type="checkbox" name="select" />
												<span></span>
											</label>
										</span>
									</div>
								</div>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Enable Customer Portal:</label>
									<div class="col-4 d-flex justify-content-end">
										<span class="switch switch-sm switch-primary">
											<label>
												<input type="checkbox" checked="checked" name="select" />
												<span></span>
											</label>
										</span>
									</div>
								</div>
							</div>
							<!--end::Section-->
						</form>
					</div>
					<!--end::Tabpane-->
				</div>
			</div>
			<!--end::Content-->
		</div>
		<!--end::Quick Panel-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->
		<!--begin::Sticky Toolbar-->
		<!--<ul class="sticky-toolbar nav flex-column pl-2 pr-2 pt-3 pb-3 mt-4">
			<li class="nav-item mb-2" id="kt_demo_panel_toggle" data-toggle="tooltip" title="Check out more demos" data-placement="right">
				<a class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success" href="#">
					<i class="flaticon2-drop"></i>
				</a>
			</li>
			<li class="nav-item mb-2" data-toggle="tooltip" title="Layout Builder" data-placement="left">
				<a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="https://preview.keenthemes.com/metronic/demo8/builder.html" target="_blank">
					<i class="flaticon2-gear"></i>
				</a>
			</li>
			<li class="nav-item mb-2" data-toggle="tooltip" title="Documentation" data-placement="left">
				<a class="btn btn-sm btn-icon btn-bg-light btn-icon-warning btn-hover-warning" href="https://keenthemes.com/metronic/?page=docs" target="_blank">
					<i class="flaticon2-telegram-logo"></i>
				</a>
			</li>
		</ul>-->
		<!--end::Sticky Toolbar-->
		<!--begin::Demo Panel-->
		<div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
				<h4 class="font-weight-bold m-0">Select A Demo</h4>
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content">
				<!--begin::Wrapper-->
				<div class="offcanvas-wrapper mb-5 scroll-pull">
					<h5 class="font-weight-bold mb-4 text-center">Demo 1</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo1.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo1/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo1/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 2</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo2.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo2/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo2/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 3</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo3.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo3/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo3/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 4</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo4.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo4/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo4/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 5</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo5.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo5/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo5/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 6</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo6.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo6/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo6/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 7</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo7.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo7/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo7/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 8</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo offcanvas-demo-active">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo8.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo8/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo8/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 9</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo9.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo9/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo9/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 10</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo10.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo10/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo10/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 11</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo11.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo11/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo11/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 12</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo12.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo12/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo12/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 13</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo13.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo13/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo13/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 14</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo14.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 15</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo15.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 16</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo16.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 17</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo17.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 18</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo18.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 19</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo19.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 20</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo20.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 21</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo21.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 22</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo22.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 23</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo23.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 24</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo24.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 25</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo25.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 26</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo26.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 27</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo27.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 28</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo28.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 29</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo29.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 30</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo30.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
				</div>
				<!--end::Wrapper-->
				<!--begin::Purchase-->
				<div class="offcanvas-footer">
					<a href="https://1.envato.market/EA4JP" target="_blank" class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">Buy Metronic Now!</a>
				</div>
				<!--end::Purchase-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Demo Panel-->
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
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>