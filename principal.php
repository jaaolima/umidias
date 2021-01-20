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
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Brand-->
					<div class="brand flex-column-auto" id="kt_brand" kt-hidden-height="65" style="">
						<!--begin::Logo-->
						<a href="/metronic/demo1/index.html" class="brand-logo">
							<img alt="Logo" src="assets/media/logos/logo-default.png" class="max-h-30px " />
						</a>
						<!--end::Logo-->
						<!--begin::Toggle-->
						<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
							<span class="svg-icon svg-icon svg-icon-xl">
								<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-left.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24"></polygon>
										<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)"></path>
										<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)"></path>
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</button>
						<!--end::Toolbar-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside Menu-->
					<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu my-4 scroll ps ps--active-y" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500" style="height: 825px; overflow: hidden;">
							<!--begin::Menu Nav-->
							<ul class="menu-nav">
								<li class="menu-item menu-item-active" aria-haspopup="true">
									<a href="/metronic/demo1/index.html" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24"></polygon>
													<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
													<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">painel de controle</font></font></span>
									</a>
								</li>
								<li class="menu-section">
									<h4 class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">personalizadas</font></font></h4>
									<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
													<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulários</font></font></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulários</font></font></span>
												</span>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comercial</font></font></span>
													<span class="menu-label">
														<span class="label label-rounded label-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span>
													</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/user/list-default.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lista - Padrão</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/user/list-datatable.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lista - Tabela de Dados</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/user/list-columns-1.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lista - Colunas 1</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/user/list-columns-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lista - Colunas 2</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/user/add-user.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adicionar usuário</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/user/edit-user.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Editar usuário</font></font></span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfil</font></font></span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
															<a href="javascript:;" class="menu-link menu-toggle">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfil 1</font></font></span>
																<i class="menu-arrow"></i>
															</a>
															<div class="menu-submenu">
																<i class="menu-arrow"></i>
																<ul class="menu-subnav">
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/apps/profile/profile-1/overview.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Visão geral</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/apps/profile/profile-1/personal-information.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informação pessoal</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/apps/profile/profile-1/account-information.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informação da conta</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/apps/profile/profile-1/change-password.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mudar senha</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/apps/profile/profile-1/email-settings.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Configurações de e-mail</font></font></span>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/profile/profile-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfil 2</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/profile/profile-3.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfil 3</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/profile/profile-4.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfil 4</font></font></span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contatos</font></font></span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/contacts/list-columns.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lista - Colunas</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/contacts/list-datatable.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lista - Tabela de Dados</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/contacts/view-contact.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ver contato</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/contacts/add-contact.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adicionar contato</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/contacts/edit-contact.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Editar Contato</font></font></span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Projetos</font></font></span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/projects/list-columns-1.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lista - Colunas 1</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/projects/list-columns-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lista - Colunas 2</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/projects/list-columns-3.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lista - Colunas 3</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/projects/list-columns-4.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lista - Colunas 4</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/projects/list-datatable.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lista - Tabela de Dados</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/projects/view-project.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ver Projeto</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/projects/add-project.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adicionar Projeto</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/projects/edit-project.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Editar Projeto</font></font></span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Centro de Apoio</font></font></span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/support-center/home-1.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Casa 1</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/support-center/home-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Casa 2</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/support-center/faq-1.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">FAQ 1</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/support-center/faq-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">FAQ 2</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/support-center/faq-3.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">FAQ 3</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/support-center/feedback.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comentários</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/support-center/license.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Licença</font></font></span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bate-papo</font></font></span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/chat/private.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Privado</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/chat/group.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Grupo</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/chat/popup.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aparecer</font></font></span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Façam</font></font></span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/todo/tasks.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tarefas</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/todo/docs.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Docs</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/todo/files.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">arquivos</font></font></span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Educação</font></font></span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
															<a href="javascript:;" class="menu-link menu-toggle">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Escola</font></font></span>
																<i class="menu-arrow"></i>
															</a>
															<div class="menu-submenu">
																<i class="menu-arrow"></i>
																<ul class="menu-subnav">
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/apps/education/school/dashboard.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">painel de controle</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/apps/education/school/statistics.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estatisticas</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/apps/education/school/calendar.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Calendário</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/apps/education/school/library.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biblioteca</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/apps/education/school/teachers.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Professores</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/apps/education/school/students.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alunos</font></font></span>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
															<a href="javascript:;" class="menu-link menu-toggle">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aluna</font></font></span>
																<i class="menu-arrow"></i>
															</a>
															<div class="menu-submenu">
																<i class="menu-arrow"></i>
																<ul class="menu-subnav">
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/apps/education/student/dashboard.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">painel de controle</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/apps/education/student/profile.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfil</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/apps/education/student/calendar.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Calendário</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/apps/education/student/classmates.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Colegas de classe</font></font></span>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/education/class/dashboard.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Classe</font></font></span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">comércio eletrônico</font></font></span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/ecommerce/dashboard.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Painel 1</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/ecommerce/dashboard-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dashboard 2</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/ecommerce/dashboard-3.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dashboard 3</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/ecommerce/product-1.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produto 1</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/ecommerce/product-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produto 2</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/ecommerce/product-3.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produto 3</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/ecommerce/product-3.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">minhas ordens</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/ecommerce/order-details.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">detalhes do pedido</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/ecommerce/shopping-cart.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Carrinho de compras</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/apps/ecommerce/checkout.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Verificação de saída</font></font></span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/custom/apps/inbox.html" class="menu-link">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Caixa de entrada</font></font></span>
													<span class="menu-label">
														<span class="label label-danger label-inline"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Novo</font></font></span>
													</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Shopping/Barcode-read.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<rect fill="#000000" opacity="0.3" x="4" y="4" width="8" height="16"></rect>
													<path d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z" fill="#000000" fill-rule="nonzero"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Páginas</font></font></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu" kt-hidden-height="200" style="display: none; overflow: hidden;">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Páginas</font></font></span>
												</span>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Conecte-se</font></font></span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/login/login-1.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Login 1</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/login/login-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Login 2</font></font></span>
															</a>
														</li>
														<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
															<a href="javascript:;" class="menu-link menu-toggle">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Login 3</font></font></span>
																<span class="menu-label">
																	<span class="label label-inline label-info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mago</font></font></span>
																</span>
																<i class="menu-arrow"></i>
															</a>
															<div class="menu-submenu">
																<i class="menu-arrow"></i>
																<ul class="menu-subnav">
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/pages/login/login-3/signup.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inscrever-se</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/pages/login/login-3/signin.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Assinar em</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/pages/login/login-3/forgot.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Esqueceu a senha</font></font></span>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
															<a href="javascript:;" class="menu-link menu-toggle">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Login 4</font></font></span>
																<span class="menu-label">
																	<span class="label label-inline label-info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mago</font></font></span>
																</span>
																<i class="menu-arrow"></i>
															</a>
															<div class="menu-submenu">
																<i class="menu-arrow"></i>
																<ul class="menu-subnav">
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/pages/login/login-4/signup.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inscrever-se</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/pages/login/login-4/signin.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Assinar em</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/pages/login/login-4/forgot.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Esqueceu a senha</font></font></span>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
															<a href="javascript:;" class="menu-link menu-toggle">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clássico</font></font></span>
																<i class="menu-arrow"></i>
															</a>
															<div class="menu-submenu">
																<i class="menu-arrow"></i>
																<ul class="menu-subnav">
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/pages/login/classic/login-1.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Login 1</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/pages/login/classic/login-2.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Login 2</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/pages/login/classic/login-3.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Login 3</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/pages/login/classic/login-4.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Login 4</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/pages/login/classic/login-5.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Login 5</font></font></span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/custom/pages/login/classic/login-6.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Login 6</font></font></span>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mago</font></font></span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/wizard/wizard-1.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wizard 1</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/wizard/wizard-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wizard 2</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/wizard/wizard-3.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wizard 3</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/wizard/wizard-4.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wizard 4</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/wizard/wizard-5.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wizard 5</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/wizard/wizard-6.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wizard 6</font></font></span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tabelas de preços</font></font></span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/pricing/pricing-1.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tabelas de preços 1</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/pricing/pricing-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tabelas de preços 2</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/pricing/pricing-3.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tabelas de preços 3</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/pricing/pricing-4.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tabelas de preços 4</font></font></span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Faturas</font></font></span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/invoices/invoice-1.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fatura 1</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/invoices/invoice-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fatura 2</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/invoices/invoice-3.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fatura 3</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/invoices/invoice-4.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fatura 4</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/invoices/invoice-5.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fatura 5</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/invoices/invoice-6.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fatura 6</font></font></span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Erro</font></font></span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/error/error-1.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Erro 1</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/error/error-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Erro 2</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/error/error-3.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Erro 3</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/error/error-4.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Erro 4</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/error/error-5.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Erro 5</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/custom/pages/error/error-6.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Erro 6</font></font></span>
															</a>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-section">
									<h4 class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Layout</font></font></h4>
									<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Bucket.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z" fill="#000000" fill-rule="nonzero" transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000)"></path>
													<path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z" fill="#000000" opacity="0.3"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Temas</font></font></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu" kt-hidden-height="80" style="display: none; overflow: hidden;">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Temas</font></font></span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/layout/themes/aside-light.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Light Aside</font></font></span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/layout/themes/header-dark.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dark Header</font></font></span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
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
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Subcabeçalhos</font></font></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Subcabeçalhos</font></font></span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/layout/subheader/toolbar.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nav da barra de ferramentas</font></font></span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/layout/subheader/actions.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Botões de ação</font></font></span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/layout/subheader/tabbed.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nav com guias</font></font></span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/layout/subheader/classic.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clássico</font></font></span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/layout/subheader/none.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nenhum</font></font></span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
													<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geral</font></font></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geral</font></font></span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/layout/general/fluid-content.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Conteúdo Fluido</font></font></span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/layout/general/minimized-aside.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Minimizado à parte</font></font></span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/layout/general/no-aside.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Não à parte</font></font></span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/layout/general/empty-page.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Página vazia</font></font></span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/layout/general/fixed-footer.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rodapé Fixo</font></font></span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/layout/general/no-header-menu.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nenhum menu de cabeçalho</font></font></span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="/metronic/demo1/builder.html" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
													<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Construtor</font></font></span>
									</a>
								</li>
								<li class="menu-section">
									<h4 class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CRUD</font></font></h4>
									<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"></path>
													<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulários</font></font></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulários</font></font></span>
												</span>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Controles de formulário</font></font></span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/controls/base.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entradas de base</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/controls/input-group.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Grupos de entrada</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/controls/checkbox.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Caixa de seleção</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/controls/radio.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rádio</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/controls/switch.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Interruptor</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/controls/option.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Opções Mega</font></font></span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Widgets de formulário</font></font></span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/bootstrap-datetimepicker.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Datetimepicker</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/bootstrap-datepicker.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Selecionador de Data</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/bootstrap-timepicker.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Timepicker</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/bootstrap-daterangepicker.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Daterangepicker</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/tagify.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tagify</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/bootstrap-touchspin.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Touchspin</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/bootstrap-maxlength.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprimento máximo</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/bootstrap-switch.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Interruptor</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/bootstrap-multipleselectsplitter.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Divisor de seleção múltipla</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/bootstrap-select.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seleção de bootstrap</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/select2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Select2</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/typeahead.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Typeahead</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/nouislider.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">noUiSlider</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/form-repeater.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Repetidor de Formulário</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/ion-range-slider.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ion Range Slider</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/input-mask.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Máscaras de entrada</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/jquery-mask.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Máscara jQuery</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/autosize.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tamanho automático</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/clipboard.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prancheta</font></font></span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/widgets/recaptcha.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Google reCaptcha</font></font></span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Editores de texto de formulário</font></font></span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/editors/tinymce.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TinyMCE</font></font></span>
															</a>
														</li>
														<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
															<a href="javascript:;" class="menu-link menu-toggle">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CKEditor</font></font></span>
																<i class="menu-arrow"></i>
															</a>
															<div class="menu-submenu">
																<i class="menu-arrow"></i>
																<ul class="menu-subnav">
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/crud/forms/editors/ckeditor-classic.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">CKEditor Classic</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/crud/forms/editors/ckeditor-inline.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">CKEditor Inline</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/crud/forms/editors/ckeditor-balloon.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">CKEditor Balloon</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/crud/forms/editors/ckeditor-balloon-block.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">CKEditor Balloon Block</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="/metronic/demo1/crud/forms/editors/ckeditor-document.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">CKEditor Document</span>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/editors/quill.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Quill Text Editor</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/editors/summernote.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Summernote WYSIWYG</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/editors/bootstrap-markdown.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Markdown Editor</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Form Layouts</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/layouts/default-forms.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Default Forms</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/layouts/multi-column-forms.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Multi Column Forms</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/layouts/action-bars.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Basic Action Bars</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/layouts/sticky-action-bar.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Sticky Action Bar</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Form Validation</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/validation/states.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Validation States</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/validation/form-controls.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Form Controls</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/forms/validation/form-widgets.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Form Widgets</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Layout/Layout-left-panel-2.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path d="M10,4 L21,4 C21.5522847,4 22,4.44771525 22,5 L22,7 C22,7.55228475 21.5522847,8 21,8 L10,8 C9.44771525,8 9,7.55228475 9,7 L9,5 C9,4.44771525 9.44771525,4 10,4 Z M10,10 L21,10 C21.5522847,10 22,10.4477153 22,11 L22,13 C22,13.5522847 21.5522847,14 21,14 L10,14 C9.44771525,14 9,13.5522847 9,13 L9,11 C9,10.4477153 9.44771525,10 10,10 Z M10,16 L21,16 C21.5522847,16 22,16.4477153 22,17 L22,19 C22,19.5522847 21.5522847,20 21,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,17 C9,16.4477153 9.44771525,16 10,16 Z" fill="#000000"></path>
													<rect fill="#000000" opacity="0.3" x="2" y="4" width="5" height="16" rx="1"></rect>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">KTDatatable</font></font></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">KTDatatable</span>
												</span>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Base</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/ktdatatable/base/data-local.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Local Data</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/ktdatatable/base/data-json.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">JSON Data</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/ktdatatable/base/data-ajax.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Ajax Data</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/ktdatatable/base/html-table.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">HTML Table</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/ktdatatable/base/local-sort.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Local Sort</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/ktdatatable/base/translation.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Translation</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Advanced</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/ktdatatable/advanced/record-selection.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Record Selection</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/ktdatatable/advanced/row-details.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Row Details</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/ktdatatable/advanced/modal.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Modal Examples</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/ktdatatable/advanced/column-rendering.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Column Rendering</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/ktdatatable/advanced/column-width.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Column Width</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/ktdatatable/advanced/vertical.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Vertical Scrolling</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Child Datatables</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/ktdatatable/child/data-local.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Local Data</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/ktdatatable/child/data-ajax.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Remote Data</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">API</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/ktdatatable/api/methods.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">API Methods</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/ktdatatable/api/events.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Events</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Layout/Layout-horizontal.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="6" rx="1.5"></rect>
													<rect fill="#000000" x="4" y="13" width="16" height="6" rx="1.5"></rect>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Datatables.net</font></font></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Datatables.net</span>
												</span>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Basic</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/basic/basic.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Basic Tables</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/basic/scrollable.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Scrollable Tables</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/basic/headers.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Complex Headers</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/basic/paginations.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Pagination Options</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Advanced</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/advanced/column-rendering.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Column Rendering</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/advanced/multiple-controls.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Multiple Controls</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/advanced/column-visibility.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Column Visibility</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/advanced/row-callback.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Row Callback</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/advanced/row-grouping.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Row Grouping</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/advanced/footer-callback.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Footer Callback</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Data sources</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/data-sources/html.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">HTML</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/data-sources/javascript.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Javascript</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/data-sources/ajax-client-side.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Ajax Client-side</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/data-sources/ajax-server-side.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Ajax Server-side</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Search Options</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/search-options/column-search.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Column Search</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/search-options/advanced-search.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Advanced Search</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Extensions</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/extensions/buttons.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Buttons</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/extensions/colreorder.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">ColReorder</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/extensions/keytable.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">KeyTable</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/extensions/responsive.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Responsive</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/extensions/rowgroup.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">RowGroup</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/extensions/rowreorder.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">RowReorder</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/extensions/scroller.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Scroller</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/crud/datatables/extensions/select.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Select</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Files/Upload.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
													<rect fill="#000000" opacity="0.3" x="11" y="2" width="2" height="14" rx="1"></rect>
													<path d="M12.0362375,3.37797611 L7.70710678,7.70710678 C7.31658249,8.09763107 6.68341751,8.09763107 6.29289322,7.70710678 C5.90236893,7.31658249 5.90236893,6.68341751 6.29289322,6.29289322 L11.2928932,1.29289322 C11.6689749,0.916811528 12.2736364,0.900910387 12.6689647,1.25670585 L17.6689647,5.75670585 C18.0794748,6.12616487 18.1127532,6.75845471 17.7432941,7.16896473 C17.3738351,7.57947475 16.7415453,7.61275317 16.3310353,7.24329415 L12.0362375,3.37797611 Z" fill="#000000" fill-rule="nonzero"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Upload de arquivo</font></font></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/crud/file-upload/image-input.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Image Input</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/crud/file-upload/dropzonejs.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">DropzoneJS</span>
													<span class="menu-label">
														<span class="label label-danger label-inline">new</span>
													</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/crud/file-upload/uppy.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Uppy</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-section">
									<h4 class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Características</font></font></h4>
									<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Shopping/Box2.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
													<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bootstrap</font></font></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Bootstrap</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/bootstrap/typography.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Typography</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/bootstrap/buttons.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Buttons</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/bootstrap/button-group.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Button Group</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/bootstrap/dropdown.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Dropdown</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/bootstrap/navs.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Navs</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/bootstrap/tables.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Tables</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/bootstrap/progress.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Progress</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/bootstrap/modal.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Modal</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/bootstrap/alerts.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Alerts</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/bootstrap/popover.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Popover</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/bootstrap/tooltip.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Tooltip</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Files/Pictures1.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"></path>
													<polygon fill="#000000" opacity="0.3" points="4 19 10 11 16 19"></polygon>
													<polygon fill="#000000" points="11 19 15 14 19 19"></polygon>
													<path d="M18,12 C18.8284271,12 19.5,11.3284271 19.5,10.5 C19.5,9.67157288 18.8284271,9 18,9 C17.1715729,9 16.5,9.67157288 16.5,10.5 C16.5,11.3284271 17.1715729,12 18,12 Z" fill="#000000" opacity="0.3"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">personalizadas</font></font></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Custom</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/custom/utilities.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Utilities</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/custom/label.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Labels</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/custom/pulse.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Pulse</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/custom/line-tabs.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Line Tabs</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/custom/advance-navs.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Advance Navs</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/custom/timeline.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Timeline</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/custom/pagination.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Pagination</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/custom/symbol.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Symbol</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/custom/overlay.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Overlay</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/custom/spinners.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Spinners</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/custom/iconbox.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Iconbox</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/custom/callout.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Callout</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/custom/ribbons.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Ribbons</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/custom/accordions.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Accordions</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Layout/Layout-arrange.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path d="M5.5,4 L9.5,4 C10.3284271,4 11,4.67157288 11,5.5 L11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,5.5 C4,4.67157288 4.67157288,4 5.5,4 Z M14.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,17.5 C13,16.6715729 13.6715729,16 14.5,16 Z" fill="#000000"></path>
													<path d="M5.5,10 L9.5,10 C10.3284271,10 11,10.6715729 11,11.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,12.5 C20,13.3284271 19.3284271,14 18.5,14 L14.5,14 C13.6715729,14 13,13.3284271 13,12.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z" fill="#000000" opacity="0.3"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cartas</font></font></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Cards</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/cards/general.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">General Cards</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/cards/stacked.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Stacked Cards</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/cards/tabbed.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Tabbed Cards</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/cards/draggable.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Draggable Cards</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/cards/tools.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Cards Tools</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/cards/sticky.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Sticky Cards</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/cards/stretched.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Stretched Cards</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Devices/Diagnostics.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<rect fill="#000000" opacity="0.3" x="2" y="3" width="20" height="18" rx="2"></rect>
													<path d="M9.9486833,13.3162278 C9.81256925,13.7245699 9.43043041,14 9,14 L5,14 C4.44771525,14 4,13.5522847 4,13 C4,12.4477153 4.44771525,12 5,12 L8.27924078,12 L10.0513167,6.68377223 C10.367686,5.73466443 11.7274983,5.78688777 11.9701425,6.75746437 L13.8145063,14.1349195 L14.6055728,12.5527864 C14.7749648,12.2140024 15.1212279,12 15.5,12 L19,12 C19.5522847,12 20,12.4477153 20,13 C20,13.5522847 19.5522847,14 19,14 L16.118034,14 L14.3944272,17.4472136 C13.9792313,18.2776054 12.7550291,18.143222 12.5298575,17.2425356 L10.8627389,10.5740611 L9.9486833,13.3162278 Z" fill="#000000" fill-rule="nonzero"></path>
													<circle fill="#000000" opacity="0.3" cx="19" cy="6" r="1"></circle>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Widgets</font></font></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Widgets</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/widgets/lists.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Lists</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/widgets/stats.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Stats</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/widgets/charts.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Charts</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/widgets/mixed.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Mixed</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/widgets/tiles.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Tiles</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/widgets/engage.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Engage</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/widgets/base-tables.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Base Tables</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/widgets/advance-tables.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Advance Tables</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/widgets/feeds.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Feeds</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/widgets/nav-panels.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Nav Panels</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Attachment2.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)"></path>
													<path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)"></path>
													<path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)"></path>
													<path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ícones</font></font></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/icons/svg.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">SVG Icons</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/icons/custom-icons.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Custom Icons</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/icons/flaticon.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Flaticon</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/icons/fontawesome5.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Fontawesome 5</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/icons/lineawesome.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Lineawesome</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/icons/socicons.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Socicons</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Select.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24"></polygon>
													<path d="M18.5,8 C17.1192881,8 16,6.88071187 16,5.5 C16,4.11928813 17.1192881,3 18.5,3 C19.8807119,3 21,4.11928813 21,5.5 C21,6.88071187 19.8807119,8 18.5,8 Z M18.5,21 C17.1192881,21 16,19.8807119 16,18.5 C16,17.1192881 17.1192881,16 18.5,16 C19.8807119,16 21,17.1192881 21,18.5 C21,19.8807119 19.8807119,21 18.5,21 Z M5.5,21 C4.11928813,21 3,19.8807119 3,18.5 C3,17.1192881 4.11928813,16 5.5,16 C6.88071187,16 8,17.1192881 8,18.5 C8,19.8807119 6.88071187,21 5.5,21 Z" fill="#000000" opacity="0.3"></path>
													<path d="M5.5,8 C4.11928813,8 3,6.88071187 3,5.5 C3,4.11928813 4.11928813,3 5.5,3 C6.88071187,3 8,4.11928813 8,5.5 C8,6.88071187 6.88071187,8 5.5,8 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 C14,5.55228475 13.5522847,6 13,6 L11,6 C10.4477153,6 10,5.55228475 10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,18 L13,18 C13.5522847,18 14,18.4477153 14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 C10,18.4477153 10.4477153,18 11,18 Z M5,10 C5.55228475,10 6,10.4477153 6,11 L6,13 C6,13.5522847 5.55228475,14 5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 C18.4477153,14 18,13.5522847 18,13 L18,11 C18,10.4477153 18.4477153,10 19,10 Z" fill="#000000"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Calendário</font></font></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Calendar</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/calendar/basic.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Basic Calendar</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/calendar/list-view.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">List Views</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/calendar/google.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Google Calendar</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/calendar/external-events.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">External Events</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/calendar/background-events.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Background Events</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Media/Equalizer.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
													<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
													<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
													<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gráficos</font></font></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Charts</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/charts/apexcharts.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Apexcharts</span>
												</a>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">amCharts</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/features/charts/amcharts/charts.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">amCharts Charts</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/features/charts/amcharts/stock-charts.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">amCharts Stock Charts</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/metronic/demo1/features/charts/amcharts/maps.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">amCharts Maps</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/charts/flotcharts.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Flot Charts</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/charts/google-charts.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Google Charts</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Home/Book-open.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"></path>
													<path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mapas</font></font></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Maps</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/maps/google-maps.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Google Maps</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/maps/leaflet.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Leaflet</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/maps/jqvmap.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">JQVMap</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Home/Mirror.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path d="M13,17.0484323 L13,18 L14,18 C15.1045695,18 16,18.8954305 16,20 L8,20 C8,18.8954305 8.8954305,18 10,18 L11,18 L11,17.0482312 C6.89844817,16.5925472 3.58685702,13.3691811 3.07555009,9.22038742 C3.00799634,8.67224972 3.3975866,8.17313318 3.94572429,8.10557943 C4.49386199,8.03802567 4.99297853,8.42761593 5.06053229,8.97575363 C5.4896663,12.4577884 8.46049164,15.1035129 12.0008191,15.1035129 C15.577644,15.1035129 18.5681939,12.4043008 18.9524872,8.87772126 C19.0123158,8.32868667 19.505897,7.93210686 20.0549316,7.99193546 C20.6039661,8.05176407 21.000546,8.54534521 20.9407173,9.09437981 C20.4824216,13.3000638 17.1471597,16.5885839 13,17.0484323 Z" fill="#000000" fill-rule="nonzero"></path>
													<path d="M12,14 C8.6862915,14 6,11.3137085 6,8 C6,4.6862915 8.6862915,2 12,2 C15.3137085,2 18,4.6862915 18,8 C18,11.3137085 15.3137085,14 12,14 Z M8.81595773,7.80077353 C8.79067542,7.43921955 8.47708263,7.16661749 8.11552864,7.19189981 C7.75397465,7.21718213 7.4813726,7.53077492 7.50665492,7.89232891 C7.62279197,9.55316612 8.39667037,10.8635466 9.79502238,11.7671393 C10.099435,11.9638458 10.5056723,11.8765328 10.7023788,11.5721203 C10.8990854,11.2677077 10.8117724,10.8614704 10.5073598,10.6647638 C9.4559885,9.98538454 8.90327706,9.04949813 8.81595773,7.80077353 Z" fill="#000000" opacity="0.3"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Diversos</font></font></span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Miscellaneous</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/miscellaneous/kanban-board.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Kanban Board</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/miscellaneous/sticky-panels.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Sticky Panels</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/miscellaneous/blockui.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Block UI</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/miscellaneous/perfect-scrollbar.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Perfect Scrollbar</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/miscellaneous/treeview.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Tree View</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/miscellaneous/bootstrap-notify.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Bootstrap Notify</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/miscellaneous/toastr.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Toastr</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/miscellaneous/sweetalert2.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">SweetAlert2</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/miscellaneous/dual-listbox.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Dual Listbox</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/miscellaneous/session-timeout.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Session Timeout</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/miscellaneous/idle-timer.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Idle Timer</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="/metronic/demo1/features/miscellaneous/cropper.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Cropper</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
							<!--end::Menu Nav-->
						<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 825px; right: 4px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 300px;"></div></div></div>
						<!--end::Menu Container-->
					</div>
					<!--end::Aside Menu-->
				</div>
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
									<?php /* if($_SESSION['id_perfil'] == 3 ) :  ?>
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
									<?php endif; */?>	
									<?php /* if($_SESSION['id_perfil'] == 3 ) :  ?>
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
															<span class="menu-text">Controle de Usuários</span>
														</a>
													</li>
													<li class="menu-item" aria-haspopup="true">
														<a href="appMidia/listar_midia.php" class="menu-link">
															<span class="fas fa-address-book">
																
															</span>&nbsp;
															<span class="menu-text">Controle de Mídias</span>
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
									<?php endif;*/ ?>	
									<?php /*if($_SESSION['id_perfil'] == 3 ) :  ?>
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
									<?php endif; */?>
									<?php if($_SESSION['id_perfil'] == 3 ) :  ?>
										<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
											<a href="appMidia/listar_midia.php" class="menu-link menu-toggle">
												<span class="menu-text">Mídias Cadastradas</span>
											</a>	
										</li>
									<?php endif; ?>
									
									<?php if($_SESSION['id_perfil'] == 3 ) :  ?>
										<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
											<a href="appUsuario/listar_usuario.php" class="menu-link menu-toggle">
												<span class="menu-text">Controle de Usuário</span>
											</a>	
										</li>
									<?php endif; ?>
									<?php if($_SESSION['id_perfil'] == 3 ) :  ?>
										<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
											<a href="listar_tipo.php" class="menu-link menu-toggle">
												<span class="menu-text">Financeiro</span>
											</a>	
										</li>
									<?php endif; ?>
									<?php if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 4) :  ?>
										<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
											<a href="appCliente/listar_tipo.php" class="menu-link menu-toggle">
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
								</ul>
								<!--end::Header Nav-->
							</div>
							<!--end::Header Menu-->
						</div>
					</div>
					<!--end::Header Menu Wrapper-->
					<!--begin::Container-->
					<div class="d-flex flex-row flex-column-fluid ">
						<!--begin::Content Wrapper-->
						<div class="main d-flex flex-column flex-row-fluid">
							<div class="content flex-column-fluid" id="conteudo">
								<!--begin::Dashboard-->
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
																			<img class="h-30px" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPGc+CgkJCTxwYXRoIGQ9Ik00NzguOTY4LDI4MC43NzRoLTc0LjMyM3YtNDkuNTQ4aDkwLjgzOVY4Mi41ODFoLTgyLjU4MVY0OS41NDhoNDkuNTQ4VjMwLjUzTDQ0Mi4wOTYsMGgtNzQuOTAxTDM0Ni44NCwzMC41M3YxOS4wMTggICAgIGg0OS41NDh2MzMuMDMySDI2NC4yNThWNDkuNTQ4aDQ5LjU0OFYzMC41M0wyOTMuNDUxLDBIMjE4LjU1bC0yMC4zNTcsMzAuNTN2MTkuMDE4aDQ5LjU0OHYzMy4wMzJIMTE1LjYxM1Y0OS41NDhoNDkuNTQ4VjMwLjUzICAgICBMMTQ0LjgwNSwwaC03NC45TDQ5LjU0OCwzMC41M3YxOS4wMThoNDkuNTQ4djMzLjAzMkgxNi41MTZ2MTQ4LjY0NWg5MC44Mzl2NDkuNTQ4SDMzLjAzMkMxNC44MTUsMjgwLjc3NCwwLDI5NS41ODksMCwzMTMuODA2ICAgICBzMTQuODE1LDMzLjAzMiwzMy4wMzIsMzMuMDMyVjUxMmg0NDUuOTM1VjM0Ni44MzljMTguMjE3LDAsMzMuMDMyLTE0LjgxNSwzMy4wMzItMzMuMDMyUzQ5Ny4xODUsMjgwLjc3NCw0NzguOTY4LDI4MC43NzR6ICAgICAgTTM2NS4wMTYsMzMuMDMybDExLjAxNi0xNi41MTZoNTcuMjI4bDExLjAwOCwxNi41MTZIMzY1LjAxNnogTTIxNi4zNywzMy4wMzJsMTEuMDE2LTE2LjUxNmg1Ny4yMjhsMTEuMDA4LDE2LjUxNkgyMTYuMzd6ICAgICAgTTY3LjczMywzMy4wMzJMNzguNzQsMTYuNTE2aDU3LjIyOWwxMS4wMDgsMTYuNTE2SDY3LjczM3ogTTMzLjAzMiwyMTQuNzFWOTkuMDk3aDQ0NS45MzVWMjE0LjcxSDMzLjAzMnogTTM4OC4xMjksMjMxLjIyNiAgICAgdjQ5LjU0OGgtMzMuMDMydi00OS41NDhIMzg4LjEyOXogTTMzOC41ODEsMjMxLjIyNnY0OS41NDhIMTczLjQydi00OS41NDhIMzM4LjU4MXogTTE1Ni45MDQsMjMxLjIyNnY0OS41NDhoLTMzLjAzMnYtNDkuNTQ4ICAgICBIMTU2LjkwNHogTTI0Ny43NDIsNDk1LjQ4NGgtNDkuNTQ4di01Ny44MDdjMC0yOS4wNiwyMS41NzgtNTMuMTE2LDQ5LjU0OC01Ny4xNDZWNDk1LjQ4NHogTTMxMy44MDYsNDk1LjQ4NGgtNDkuNTQ4VjM4MC41MzIgICAgIGMyNy45NzEsNC4wMyw0OS41NDgsMjguMDg2LDQ5LjU0OCw1Ny4xNDZWNDk1LjQ4NHogTTQ2Mi40NTIsNDk1LjQ4NEgzMzAuMzIzdi01Ny44MDdjMC00MC45ODUtMzMuMzQ2LTc0LjMyMy03NC4zMjMtNzQuMzIzICAgICBzLTc0LjMyMywzMy4zMzgtNzQuMzIzLDc0LjMyM3Y1Ny44MDdINDkuNTQ4VjM0Ni44MzloNDEyLjkwNFY0OTUuNDg0eiBNNDc4Ljk2OCwzMzAuMzIzSDMzLjAzMiAgICAgYy05LjEwOCwwLTE2LjUxNi03LjQwNy0xNi41MTYtMTYuNTE2czcuNDA4LTE2LjUxNiwxNi41MTYtMTYuNTE2aDQ0NS45MzVjOS4xMDksMCwxNi41MTYsNy40MDcsMTYuNTE2LDE2LjUxNiAgICAgUzQ4OC4wNzcsMzMwLjMyMyw0NzguOTY4LDMzMC4zMjN6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+CgkJCTxwYXRoIGQ9Ik02Ni4wNjUsMTk4LjE5NGg5OS4wOTd2LTgyLjU4MUg2Ni4wNjVWMTk4LjE5NHogTTgyLjU4MSwxMzIuMTI5aDY2LjA2NXY0OS41NDhIODIuNTgxVjEzMi4xMjl6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+CgkJCTxyZWN0IHg9IjIxNC43MDUiIHk9IjExNS42MDkiIHdpZHRoPSIyMzEuMjI2IiBoZWlnaHQ9IjE2LjUxMiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9yZWN0PgoJCQk8cmVjdCB4PSIxODEuNjczIiB5PSIxMTUuNjA5IiB3aWR0aD0iMTYuNTEyIiBoZWlnaHQ9IjE2LjUxMiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9yZWN0PgoJCQk8cmVjdCB4PSIxODEuNjczIiB5PSIxNDguNjQxIiB3aWR0aD0iMjY0LjI1OCIgaGVpZ2h0PSIxNi41MTIiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcmVjdD4KCQkJPHJlY3QgeD0iMTgxLjY3MyIgeT0iMTgxLjY3MyIgd2lkdGg9IjIzMS4yMjYiIGhlaWdodD0iMTYuNTEyIiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3JlY3Q+CgkJCTxyZWN0IHg9IjQyOS40MTkiIHk9IjE4MS42NzMiIHdpZHRoPSIxNi41MTIiIGhlaWdodD0iMTYuNTEyIiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3JlY3Q+CgkJCTxwYXRoIGQ9Ik00NDUuOTM1LDM2My4zNTVoLTk5LjA5N3Y4Mi41ODFoOTkuMDk3VjM2My4zNTV6IE0zODguMTI5LDQyOS40MTloLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NVY0MjkuNDE5eiBNMzg4LjEyOSwzOTYuMzg3ICAgICBoLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NVYzOTYuMzg3eiBNNDA0LjY0NSwzNzkuODcxaDI0Ljc3NXYxNi41MTZoLTI0Ljc3NVYzNzkuODcxeiBNNDI5LjQyLDQyOS40MTloLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NSAgICAgVjQyOS40MTl6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+CgkJCTxwYXRoIGQ9Ik0xNjUuMTYxLDM2My4zNTVINjYuMDY1djgyLjU4MWg5OS4wOTdWMzYzLjM1NXogTTEwNy4zNTUsNDI5LjQxOUg4Mi41ODF2LTE2LjUxNmgyNC43NzVWNDI5LjQxOXogTTEwNy4zNTUsMzk2LjM4NyAgICAgSDgyLjU4MXYtMTYuNTE2aDI0Ljc3NVYzOTYuMzg3eiBNMTIzLjg3MSwzNzkuODcxaDI0Ljc3NXYxNi41MTZoLTI0Ljc3NVYzNzkuODcxeiBNMTQ4LjY0Niw0MjkuNDE5aC0yNC43NzV2LTE2LjUxNmgyNC43NzUgICAgIFY0MjkuNDE5eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJCTwvZz4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
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
											<?php if($_SESSION['id_perfil'] == 1 || $_SESSION['id_perfil'] == 4 ) :  ?>	
												<div class="col-xl-12">
													<!--begin::Tiles Widget 25-->
													<div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white text-center" style="height: 300px; ">
														<div class="card-body d-flex">
															<div class="d-flex py-5 flex-column align-items-start flex-grow-1">
																<div class="flex-grow-1" style="display: inherit;">
																	<h3  class="text-gray font-weight-light font-size-h3">Alugue sua mídia</h3>
																</div>
																<div class="row m-0 ">
																	<div class="col bg-white pl-6 py-6 mx-20 mb-10 mt-7 border-right pr-20" style="text-align: center;">
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2">
																			<img class="h-30px" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDI0IDI0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIiBjbGFzcz0iIj48Zz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMi41IDE4aC0yMWMtLjgyNyAwLTEuNS0uNjczLTEuNS0xLjV2LTEyYzAtLjgyNy42NzMtMS41IDEuNS0xLjVoMjFjLjgyNyAwIDEuNS42NzMgMS41IDEuNXYxMmMwIC44MjctLjY3MyAxLjUtMS41IDEuNXptLTIxLTE0Yy0uMjc2IDAtLjUuMjI0LS41LjV2MTJjMCAuMjc2LjIyNC41LjUuNWgyMWMuMjc2IDAgLjUtLjIyNC41LS41di0xMmMwLS4yNzYtLjIyNC0uNS0uNS0uNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMy41IDI0Yy0uMjc2IDAtLjUtLjIyNC0uNS0uNXYtNmMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXY2YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtNS41IDI0Yy0uMjc2IDAtLjUtLjIyNC0uNS0uNXYtNmMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXY2YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMTguNSAyNGMtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTZjMC0uMjc2LjIyNC0uNS41LS41cy41LjIyNC41LjV2NmMwIC4yNzYtLjIyNC41LS41LjV6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTIwLjUgMjRjLS4yNzYgMC0uNS0uMjI0LS41LS41di02YzAtLjI3Ni4yMjQtLjUuNS0uNXMuNS4yMjQuNS41djZjMCAuMjc2LS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im01IDMuNWMtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTIuNWMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXYyLjVjMCAuMjc2LS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im02LjUgMWgtM2MtLjI3NiAwLS41LS4yMjQtLjUtLjVzLjIyNC0uNS41LS41aDNjLjI3NiAwIC41LjIyNC41LjVzLS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0xMiAzLjVjLS4yNzYgMC0uNS0uMjI0LS41LS41di0yLjVjMC0uMjc2LjIyNC0uNS41LS41cy41LjIyNC41LjV2Mi41YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMTMuNSAxaC0zYy0uMjc2IDAtLjUtLjIyNC0uNS0uNXMuMjI0LS41LjUtLjVoM2MuMjc2IDAgLjUuMjI0LjUuNXMtLjIyNC41LS41LjV6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTE5IDMuNWMtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTIuNWMwLS4yNzYuMjI0LS41LjUtLjVzLjUuMjI0LjUuNXYyLjVjMCAuMjc2LS4yMjQuNS0uNS41eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMC41IDFoLTNjLS4yNzYgMC0uNS0uMjI0LS41LS41cy4yMjQtLjUuNS0uNWgzYy4yNzYgMCAuNS4yMjQuNS41cy0uMjI0LjUtLjUuNXoiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg==" />
																		</span>
																		<p  class="text-gray font-weight-bold font-size-h6 d-block ">Outdoor</p>
																		<a href="appCliente/appOutdoor/listar_midia.php" class="btn btn-primary" type="button" >Alugar mídia</a>
																	</div>
																	<div  class="col bg-white pl-6 py-6 mx-20 mb-10 mt-7 border-right pr-20" style="text-align: center;">
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2">
																			<img class="h-30px"src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMi4wMDEgNTEyLjAwMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNNDcxLjUxNCwzMTcuMDgxSDQwLjQ4N2MtNC4xNDMsMC03LjUsMy4zNTctNy41LDcuNXMzLjM1OCw3LjUsNy41LDcuNWg0MzEuMDI2YzQuMTQzLDAsNy41LTMuMzU3LDcuNS03LjUgICAgUzQ3NS42NTcsMzE3LjA4MSw0NzEuNTE0LDMxNy4wODF6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+Cgk8L2c+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik00OTEuODg5LDYxLjM0MmgtODguNzMyVjQ2LjM5OGgyMi4yMDZjNS41ODUsMCwxMC4xMy00LjU0NCwxMC4xMy0xMC4xM1YxOS41MDFDNDM1LjQ5Miw4Ljc0OSw0MjYuNzQ0LDAsNDE1Ljk5MSwwICAgIGgtNDAuNjY5Yy0xMC43NTMsMC0xOS41MDEsOC43NDktMTkuNTAxLDE5LjUwMXYxNi44MThjMCw1LjU1Nyw0LjUyMSwxMC4wNzgsMTAuMDc4LDEwLjA3OGgyMi4yNTd2MTQuOTQ0SDI2My41MDFWNDYuMzk4aDIyLjIwNSAgICBjNS41ODUsMCwxMC4xMy00LjU0NCwxMC4xMy0xMC4xM1YxOS41MDFDMjk1LjgzNiw4Ljc0OSwyODcuMDg3LDAsMjc2LjMzNSwwaC00MC42NjljLTEwLjc1MywwLTE5LjUwMSw4Ljc0OS0xOS41MDEsMTkuNTAxdjE2LjgxOCAgICBjMCw1LjU1Nyw0LjUyMSwxMC4wNzgsMTAuMDc4LDEwLjA3OEgyNDguNXYxNC45NDRIMTIzLjg0NVY0Ni4zOThoMjIuMjA1YzUuNTg1LDAsMTAuMTMtNC41NDQsMTAuMTMtMTAuMTNWMTkuNTAxICAgIEMxNTYuMTgsOC43NDksMTQ3LjQzMiwwLDEzNi42NzksMEg5Ni4wMUM4NS4yNTcsMCw3Ni41MDksOC43NDksNzYuNTA5LDE5LjUwMXYxNi44MThjMCw1LjU1Nyw0LjUyMSwxMC4wNzgsMTAuMDc4LDEwLjA3OGgyMi4yNTggICAgdjE0Ljk0NEgyMC4xMTJDOS4wMjMsNjEuMzQyLDAuMDAxLDcwLjM2MywwLjAwMSw4MS40NTN2MzUuNDgxYzAsNC4xNDMsMy4zNTcsNy41LDcuNSw3LjVzNy41LTMuMzU3LDcuNS03LjVWODEuNDUzICAgIGMwLTIuNzcxLDIuMzQtNS4xMSw1LjExLTUuMTFoNDcxLjc3N2MyLjc3MSwwLDUuMTEsMi4zNCw1LjExLDUuMTF2MjA4LjYyNUgxNS4wMDJ2LTEzOC4xNGMwLTQuMTQzLTMuMzU3LTcuNS03LjUtNy41ICAgIGMtNC4xNDIsMC03LjUsMy4zNTctNy41LDcuNXYxNDUuNjQydjQxLjM5NmMwLDExLjA5LDkuMDIyLDIwLjExMSwyMC4xMTEsMjAuMTExaDIwMS4zODR2ODMuOTI1ICAgIGMtMTAuNTk1LDAuMTg0LTE5LjE2LDguODQ2LTE5LjE2LDE5LjQ4NHY3LjUwMWgtMzEuMDkxYy0xMS42OTYsMC0yMS4wMDEsOS41NTctMjEuMDAxLDIxLjAwMiAgICBjMCwxMS41ODEsOS40MjIsMjEuMDAyLDIxLjAwMSwyMS4wMDJoNDAuMjVjNC4xNDMsMCw3LjUtMy4zNTcsNy41LTcuNWMwLTQuMTQzLTMuMzU3LTcuNS03LjUtNy41aC00MC4yNSAgICBjLTMuMjU4LDAtNS45MTctMi42MS01Ljk5OC01Ljg1YzAuMDE4LTAuMzQ4LDAuMDA5LTAuNTI1LDAuMDU5LTAuOTE5YzAuMDU5LTAuNDY5LDAuMTMyLTAuNjcyLDAuMTUzLTAuNzcyICAgIGMwLjY5NS0yLjYyNiwzLjA3NS00LjQ2MSw1Ljc4Ni00LjQ2MWMxOC4yNywwLDE1MC41NzMsMCwxNjkuNTEsMGMyLjcxMSwwLDUuMDksMS44MzQsNS43OTcsNC41MDIgICAgYzAuOTQ4LDQuMDg2LTIuMDY1LDcuNS01Ljc5Nyw3LjVoLTk0LjI1OGMtNC4xNDMsMC03LjUsMy4zNTctNy41LDcuNWMwLDQuMTQzLDMuMzU3LDcuNSw3LjUsNy41aDk0LjI1OCAgICBjMTMuMjcyLDAsMjMuOTg5LTEyLjU3MywyMC4yODYtMjYuMzg2Yy0yLjQzNy05LjE5Ni0xMC43NzktMTUuNjE5LTIwLjI4Ni0xNS42MTloLTMxLjA5MXYtNy41MDEgICAgYzAtMTAuNjM4LTguNTY1LTE5LjI5OS0xOS4xNi0xOS40ODRWNDE4LjU0YzAtNC4xNDMtMy4zNTctNy41LTcuNS03LjVzLTcuNSwzLjM1Ny03LjUsNy41djI0LjQ1M2gtMzkuMDA2di04My45MDdoMzkuMDA2djI0LjQ1MiAgICBjMCw0LjE0MywzLjM1Nyw3LjUsNy41LDcuNXM3LjUtMy4zNTcsNy41LTcuNXYtMjQuNDUyaDIwMS4zODRjMTEuMDksMCwyMC4xMTEtOS4wMjIsMjAuMTExLTIwLjExMWMwLTEyLjA3NSwwLTI0NS4yMDYsMC0yNTcuNTIxICAgIEM1MTIuMDAxLDcwLjM2Myw1MDIuOTc4LDYxLjM0Miw0OTEuODg5LDYxLjM0MnogTTkxLjUxLDMxLjM5NlYxOS41MDFjMC0yLjQ0LDIuMDYxLTQuNSw0LjUtNC41aDQwLjY2OWMyLjQzOSwwLDQuNSwyLjA2MSw0LjUsNC41ICAgIHYxMS44OTVIOTEuNTF6IE0yMzEuMTY1LDMxLjM5NlYxOS41MDFjMC0yLjQ0LDIuMDYxLTQuNSw0LjUtNC41aDQwLjY2OWMyLjQ0LDAsNC41LDIuMDYxLDQuNSw0LjV2MTEuODk1SDIzMS4xNjV6ICAgICBNMzcwLjgyMiwzMS4zOTZWMTkuNTAxYzAtMi40NCwyLjA2MS00LjUsNC41LTQuNWg0MC42NjljMi40MzksMCw0LjUsMi4wNjEsNC41LDQuNXYxMS44OTVIMzcwLjgyMnogTTI5MC4xNjUsNDU3Ljk5NCAgICBjMi40MzksMCw0LjUsMi4wNjEsNC41LDQuNXY3LjUwMWgtNzcuMzI3di03LjUwMWMwLTIuNDM5LDIuMDYxLTQuNSw0LjUtNC41QzIzNS43MjcsNDU3Ljk5NCwyNzYuMTY3LDQ1Ny45OTQsMjkwLjE2NSw0NTcuOTk0eiAgICAgTTQ5Ny4wMDEsMzM4Ljk3NEg0OTdjMCwyLjc3MS0yLjM0LDUuMTEtNS4xMSw1LjExYy0xNS4zNjQsMC00NTUuMTIxLDAtNDcxLjc3NywwYy0yLjc3MSwwLTUuMTEtMi4zNC01LjExLTUuMTF2LTMzLjg5NWg0ODEuOTk4ICAgIFYzMzguOTc0eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
																		</span>
																		<p  class="text-gray font-weight-bold font-size-h6 mt-2 d-block ">Front-Light</p>
																		<a href="appCliente/appOutdoor/listar_midia.php" class="btn btn-primary" type="button" >Alugar mídia</a>
																	</div>
																	<div  class="col bg-white pl-6 py-6 mx-20 mb-10 mt-7 border-right pr-20" style="text-align: center;">
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2">
																			<img class="h-30px"src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ4MC4zMiA0ODAuMzIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTQ4MCAyNzIuMDcxdjk5LjMyM2MwIDQuNDE4LTMuNTgyIDgtOCA4aC0xOWMtNC40MTggMC04LTMuNTgyLTgtOHMzLjU4Mi04IDgtOGgxMXYtOTEuMzIzYzAtMTIuNzY5LTYuMTU3LTI0Ljg2My0xNi40Ny0zMi4zNS0zMC42MjQtMjIuMjMyLTg5LjQ2MS01NS42NDktMTYyLjUwMy01MS44NDVsNS4yMDkgNDAuMTA5Yy41NjkgNC4zODEtMi41MjIgOC4zOTUtNi45MDMgOC45NjQtNC4zODMuNTY5LTguMzk1LTIuNTIzLTguOTY0LTYuOTAzbC01LjI5My00MC43NTVjLTQ3LjE4MSA1LjkxMy05MS4zMyAyNi41OTYtMTI4LjE0IDYwLjE5OWgyMDIuMTI1YzEyLjE0OCAwIDIzLjQ5My01LjQyMSAzMS4xMjQtMTQuODc0IDIuNzc1LTMuNDM4IDcuODEyLTMuOTc1IDExLjI1LTEuMnMzLjk3NSA3LjgxMiAxLjIgMTEuMjVjLTEwLjY4MyAxMy4yMzQtMjYuNTY1IDIwLjgyNC00My41NzMgMjAuODI0aC0yMjAuNDg2bC04OC45OTkgMjQuNzIyYy0xMC4zNDkgMi44NzUtMTcuNTc3IDEyLjM4NC0xNy41NzcgMjMuMTI1djQ3Ljk1OGgxMmM0LjQxOCAwIDggMy41ODIgOCA4cy0zLjU4MiA4LTggOGgtMjBjLTQuNDE4IDAtOC0zLjU4Mi04LTh2LTU1Ljk1OGMwLTE3LjkwMSAxMi4wNDYtMzMuNzUgMjkuMjk0LTM4LjU0MWw4Ny44MDYtMjQuMzkxYzg3LjE0NS05MS4wMTQgMjIyLjQzMy0xMDguODYgMzM5LjgyOS0yMy42MzIgMTQuNDQ2IDEwLjQ4OCAyMy4wNzEgMjcuNDIxIDIzLjA3MSA0NS4yOTh6bS0zMTUgOTcuNDE5YzAgMzAuODc4LTI1LjEyMiA1Ni01NiA1NnMtNTYtMjUuMTIyLTU2LTU2IDI1LjEyMi01NiA1Ni01NiA1NiAyNS4xMjIgNTYgNTZ6bS0xNiAwYzAtMjIuMDU2LTE3Ljk0NC00MC00MC00MHMtNDAgMTcuOTQ0LTQwIDQwIDE3Ljk0NCA0MCA0MCA0MCA0MC0xNy45NDMgNDAtNDB6bTI3OCAwYzAgMzAuODc4LTI1LjEyMiA1Ni01NiA1NnMtNTYtMjUuMTIyLTU2LTU2IDI1LjEyMi01NiA1Ni01NiA1NiAyNS4xMjIgNTYgNTZ6bS0xNiAwYzAtMjIuMDU2LTE3Ljk0NC00MC00MC00MHMtNDAgMTcuOTQ0LTQwIDQwIDE3Ljk0NCA0MCA0MCA0MCA0MC0xNy45NDMgNDAtNDB6bS0xMTgtNmgtMTAzYy00LjQxOCAwLTggMy41ODItOCA4czMuNTgyIDggOCA4aDEwM2M0LjQxOCAwIDgtMy41ODIgOC04cy0zLjU4Mi04LTgtOHptMTI5LjEwNy0yMjUuMjQ1YzkuMzU3IDkuMzU3IDIuODExIDI1LjYwNi0xMC42MDcgMjUuNjA2LTEzLjI2MiAwLTIwLjA2Mi0xNi4xNTEtMTAuNjA3LTI1LjYwNiAyLjgzNC0yLjgzMyA2LjYwMS00LjM5NCAxMC42MDctNC4zOTQgNi43MzguMDAxIDEwLjYwNyA0LjM5NCAxMC42MDcgNC4zOTR6bTI2LjE2My0xNC44NDljMy4xMjUtMy4xMjQgMy4xMjUtOC4xOSAwLTExLjMxNC0yMC4zMjMtMjAuMzIzLTUzLjIxNS0yMC4zMjQtNzMuNTM5IDAtMy4xMjUgMy4xMjQtMy4xMjUgOC4xODkgMCAxMS4zMTQgMy4xMjQgMy4xMjQgOC4xODkgMy4xMjQgMTEuMzEzIDAgMTQuMDctMTQuMDcgMzYuODQtMTQuMDcxIDUwLjkxMiAwIDMuMTI0IDMuMTI0IDguMTg5IDMuMTI0IDExLjMxNCAwem0tOTEuOTI0LTI5LjY5OWMzMC40ODQtMzAuNDg0IDc5LjgyMi0zMC40ODYgMTEwLjMwOSAwIDEuNTYyIDEuNTYyIDMuNjA5IDIuMzQzIDUuNjU3IDIuMzQzIDcuMDYzIDAgMTAuNzExLTguNjAzIDUuNjU3LTEzLjY1Ny0zNi43MzctMzYuNzM2LTk2LjE5Ny0zNi43NC0xMzIuOTM2IDAtMy4xMjUgMy4xMjQtMy4xMjUgOC4xODkgMCAxMS4zMTQgMy4xMjMgMy4xMjUgOC4xODkgMy4xMjUgMTEuMzEzIDB6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PC9nPjwvc3ZnPg==" />
																		</span>
																		<p  class="text-gray font-weight-bold font-size-h6 mt-2 d-block ">Carro de Som</p>
																		<a href="appCliente/appOutdoor/listar_midia.php" class="btn btn-primary" type="button" >Alugar mídia</a>
																	</div>
																	<div  class="col bg-white pl-6 py-6 mx-20 mb-10 mt-7 pr-20" style="text-align: center;" >
																		<span class="svg-icon svg-icon-2x svg-icon-white d-block my-2" >
																			<img class="h-30px"src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPGc+CgkJCTxwYXRoIGQ9Ik00NzguOTY4LDI4MC43NzRoLTc0LjMyM3YtNDkuNTQ4aDkwLjgzOVY4Mi41ODFoLTgyLjU4MVY0OS41NDhoNDkuNTQ4VjMwLjUzTDQ0Mi4wOTYsMGgtNzQuOTAxTDM0Ni44NCwzMC41M3YxOS4wMTggICAgIGg0OS41NDh2MzMuMDMySDI2NC4yNThWNDkuNTQ4aDQ5LjU0OFYzMC41M0wyOTMuNDUxLDBIMjE4LjU1bC0yMC4zNTcsMzAuNTN2MTkuMDE4aDQ5LjU0OHYzMy4wMzJIMTE1LjYxM1Y0OS41NDhoNDkuNTQ4VjMwLjUzICAgICBMMTQ0LjgwNSwwaC03NC45TDQ5LjU0OCwzMC41M3YxOS4wMThoNDkuNTQ4djMzLjAzMkgxNi41MTZ2MTQ4LjY0NWg5MC44Mzl2NDkuNTQ4SDMzLjAzMkMxNC44MTUsMjgwLjc3NCwwLDI5NS41ODksMCwzMTMuODA2ICAgICBzMTQuODE1LDMzLjAzMiwzMy4wMzIsMzMuMDMyVjUxMmg0NDUuOTM1VjM0Ni44MzljMTguMjE3LDAsMzMuMDMyLTE0LjgxNSwzMy4wMzItMzMuMDMyUzQ5Ny4xODUsMjgwLjc3NCw0NzguOTY4LDI4MC43NzR6ICAgICAgTTM2NS4wMTYsMzMuMDMybDExLjAxNi0xNi41MTZoNTcuMjI4bDExLjAwOCwxNi41MTZIMzY1LjAxNnogTTIxNi4zNywzMy4wMzJsMTEuMDE2LTE2LjUxNmg1Ny4yMjhsMTEuMDA4LDE2LjUxNkgyMTYuMzd6ICAgICAgTTY3LjczMywzMy4wMzJMNzguNzQsMTYuNTE2aDU3LjIyOWwxMS4wMDgsMTYuNTE2SDY3LjczM3ogTTMzLjAzMiwyMTQuNzFWOTkuMDk3aDQ0NS45MzVWMjE0LjcxSDMzLjAzMnogTTM4OC4xMjksMjMxLjIyNiAgICAgdjQ5LjU0OGgtMzMuMDMydi00OS41NDhIMzg4LjEyOXogTTMzOC41ODEsMjMxLjIyNnY0OS41NDhIMTczLjQydi00OS41NDhIMzM4LjU4MXogTTE1Ni45MDQsMjMxLjIyNnY0OS41NDhoLTMzLjAzMnYtNDkuNTQ4ICAgICBIMTU2LjkwNHogTTI0Ny43NDIsNDk1LjQ4NGgtNDkuNTQ4di01Ny44MDdjMC0yOS4wNiwyMS41NzgtNTMuMTE2LDQ5LjU0OC01Ny4xNDZWNDk1LjQ4NHogTTMxMy44MDYsNDk1LjQ4NGgtNDkuNTQ4VjM4MC41MzIgICAgIGMyNy45NzEsNC4wMyw0OS41NDgsMjguMDg2LDQ5LjU0OCw1Ny4xNDZWNDk1LjQ4NHogTTQ2Mi40NTIsNDk1LjQ4NEgzMzAuMzIzdi01Ny44MDdjMC00MC45ODUtMzMuMzQ2LTc0LjMyMy03NC4zMjMtNzQuMzIzICAgICBzLTc0LjMyMywzMy4zMzgtNzQuMzIzLDc0LjMyM3Y1Ny44MDdINDkuNTQ4VjM0Ni44MzloNDEyLjkwNFY0OTUuNDg0eiBNNDc4Ljk2OCwzMzAuMzIzSDMzLjAzMiAgICAgYy05LjEwOCwwLTE2LjUxNi03LjQwNy0xNi41MTYtMTYuNTE2czcuNDA4LTE2LjUxNiwxNi41MTYtMTYuNTE2aDQ0NS45MzVjOS4xMDksMCwxNi41MTYsNy40MDcsMTYuNTE2LDE2LjUxNiAgICAgUzQ4OC4wNzcsMzMwLjMyMyw0NzguOTY4LDMzMC4zMjN6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+CgkJCTxwYXRoIGQ9Ik02Ni4wNjUsMTk4LjE5NGg5OS4wOTd2LTgyLjU4MUg2Ni4wNjVWMTk4LjE5NHogTTgyLjU4MSwxMzIuMTI5aDY2LjA2NXY0OS41NDhIODIuNTgxVjEzMi4xMjl6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+CgkJCTxyZWN0IHg9IjIxNC43MDUiIHk9IjExNS42MDkiIHdpZHRoPSIyMzEuMjI2IiBoZWlnaHQ9IjE2LjUxMiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9yZWN0PgoJCQk8cmVjdCB4PSIxODEuNjczIiB5PSIxMTUuNjA5IiB3aWR0aD0iMTYuNTEyIiBoZWlnaHQ9IjE2LjUxMiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9yZWN0PgoJCQk8cmVjdCB4PSIxODEuNjczIiB5PSIxNDguNjQxIiB3aWR0aD0iMjY0LjI1OCIgaGVpZ2h0PSIxNi41MTIiIGZpbGw9IiNhOGFiYWQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcmVjdD4KCQkJPHJlY3QgeD0iMTgxLjY3MyIgeT0iMTgxLjY3MyIgd2lkdGg9IjIzMS4yMjYiIGhlaWdodD0iMTYuNTEyIiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3JlY3Q+CgkJCTxyZWN0IHg9IjQyOS40MTkiIHk9IjE4MS42NzMiIHdpZHRoPSIxNi41MTIiIGhlaWdodD0iMTYuNTEyIiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3JlY3Q+CgkJCTxwYXRoIGQ9Ik00NDUuOTM1LDM2My4zNTVoLTk5LjA5N3Y4Mi41ODFoOTkuMDk3VjM2My4zNTV6IE0zODguMTI5LDQyOS40MTloLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NVY0MjkuNDE5eiBNMzg4LjEyOSwzOTYuMzg3ICAgICBoLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NVYzOTYuMzg3eiBNNDA0LjY0NSwzNzkuODcxaDI0Ljc3NXYxNi41MTZoLTI0Ljc3NVYzNzkuODcxeiBNNDI5LjQyLDQyOS40MTloLTI0Ljc3NXYtMTYuNTE2aDI0Ljc3NSAgICAgVjQyOS40MTl6IiBmaWxsPSIjYThhYmFkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+CgkJCTxwYXRoIGQ9Ik0xNjUuMTYxLDM2My4zNTVINjYuMDY1djgyLjU4MWg5OS4wOTdWMzYzLjM1NXogTTEwNy4zNTUsNDI5LjQxOUg4Mi41ODF2LTE2LjUxNmgyNC43NzVWNDI5LjQxOXogTTEwNy4zNTUsMzk2LjM4NyAgICAgSDgyLjU4MXYtMTYuNTE2aDI0Ljc3NVYzOTYuMzg3eiBNMTIzLjg3MSwzNzkuODcxaDI0Ljc3NXYxNi41MTZoLTI0Ljc3NVYzNzkuODcxeiBNMTQ4LjY0Niw0MjkuNDE5aC0yNC43NzV2LTE2LjUxNmgyNC43NzUgICAgIFY0MjkuNDE5eiIgZmlsbD0iI2E4YWJhZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJCTwvZz4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
																		</span>
																		<p  class="text-gray font-weight-bold font-size-h6 mt-2 d-block ">Empena</p>
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
											<!--begin::List Widget 13-->
											<div class="card card-custom card-stretch gutter-b">
												<!--begin::Header-->
												<div class="card-header border-0">
													<h3 class="card-title font-weight-bolder text-dark">Latest Media</h3>
													<div class="card-toolbar">
														<div class="dropdown dropdown-inline">
															<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<i class="ki ki-bold-more-ver"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
																<!--begin::Navigation-->
																<ul class="navi navi-hover">
																	<li class="navi-header font-weight-bold py-4">
																		<span class="font-size-lg">Choose Label:</span>
																		<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																	</li>
																	<li class="navi-separator mb-3 opacity-70"></li>
																	<li class="navi-item">
																		<a href="#" class="navi-link">
																			<span class="navi-text">
																				<span class="label label-xl label-inline label-light-success">Customer</span>
																			</span>
																		</a>
																	</li>
																	<li class="navi-item">
																		<a href="#" class="navi-link">
																			<span class="navi-text">
																				<span class="label label-xl label-inline label-light-danger">Partner</span>
																			</span>
																		</a>
																	</li>
																	<li class="navi-item">
																		<a href="#" class="navi-link">
																			<span class="navi-text">
																				<span class="label label-xl label-inline label-light-warning">Suplier</span>
																			</span>
																		</a>
																	</li>
																	<li class="navi-item">
																		<a href="#" class="navi-link">
																			<span class="navi-text">
																				<span class="label label-xl label-inline label-light-primary">Member</span>
																			</span>
																		</a>
																	</li>
																	<li class="navi-item">
																		<a href="#" class="navi-link">
																			<span class="navi-text">
																				<span class="label label-xl label-inline label-light-dark">Staff</span>
																			</span>
																		</a>
																	</li>
																	<li class="navi-separator mt-3 opacity-70"></li>
																	<li class="navi-footer py-4">
																		<a class="btn btn-clean font-weight-bold btn-sm" href="#">
																		<i class="ki ki-plus icon-sm"></i>Add new</a>
																	</li>
																</ul>
																<!--end::Navigation-->
															</div>
														</div>
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-2">
													<!--begin::Item-->
													<div class="d-flex flex-wrap align-items-center mb-10">
														<!--begin::Symbol-->
														<div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
															<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-17.jpg')"></div>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 mr-2">
															<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Cup &amp; Green</a>
															<span class="text-muted font-weight-bold">Visually stunning</span>
														</div>
														<!--end::Title-->
														<!--begin::Section-->
														<div class="d-flex align-items-center mt-lg-0 mt-3">
															<!--begin::Label-->
															<div class="mr-6">
																<i class="fa fa-star-half-alt mr-1 text-warning font-size-lg"></i>
																<span class="text-dark-75 font-weight-bolder">4.2</span>
															</div>
															<!--end::Label-->
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light btn-sm">
																<span class="svg-icon svg-icon-success">
																	<span class="svg-icon svg-icon-md">
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
																</span>
															</a>
															<!--end::Btn-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-wrap align-items-center mb-10">
														<!--begin::Symbol-->
														<div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
															<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-10.jpg')"></div>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 mr-2">
															<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Pink Patterns</a>
															<span class="text-muted font-weight-bold">Feminine all around</span>
														</div>
														<!--end::Title-->
														<!--begin::Section-->
														<div class="d-flex align-items-center mt-lg-0 mt-3">
															<!--begin::Label-->
															<div class="mr-6">
																<i class="fa fa-star mr-1 text-warning font-size-lg"></i>
																<span class="text-dark-75 font-weight-bolder">5.0</span>
															</div>
															<!--end::Label-->
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light btn-sm">
																<span class="svg-icon svg-icon-success">
																	<span class="svg-icon svg-icon-md">
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
																</span>
															</a>
															<!--end::Btn-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-wrap align-items-center mb-10">
														<!--begin::Symbol-->
														<div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
															<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-1.jpg')"></div>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 mr-2">
															<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Abstract Art</a>
															<span class="text-muted font-weight-bold">The will to capture readers</span>
														</div>
														<!--end::Title-->
														<!--begin::Section-->
														<div class="d-flex align-items-center mt-lg-0 mt-3">
															<!--begin::Label-->
															<div class="mr-6">
																<i class="fa fa-star-half-alt mr-1 text-warning font-size-lg"></i>
																<span class="text-dark-75 font-weight-bolder">5.7</span>
															</div>
															<!--end::Label-->
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light btn-sm">
																<span class="svg-icon svg-icon-success">
																	<span class="svg-icon svg-icon-md">
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
																</span>
															</a>
															<!--end::Btn-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin: Item-->
													<div class="d-flex flex-wrap align-items-center mb-1">
														<!--begin::Symbol-->
														<div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
															<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-9.jpg')"></div>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 mr-2">
															<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Desserts platter</a>
															<span class="text-muted font-weight-bold">Food trends &amp; inspirations</span>
														</div>
														<!--end::Title-->
														<!--begin::Section-->
														<div class="d-flex align-items-center mt-lg-0 mt-3">
															<!--begin::Label-->
															<div class="mr-6">
																<i class="fa fa-star mr-1 text-warning font-size-lg"></i>
																<span class="text-dark-75 font-weight-bolder">3.7</span>
															</div>
															<!--end::Label-->
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light btn-sm">
																<span class="svg-icon svg-icon-success">
																	<span class="svg-icon svg-icon-md">
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
																</span>
															</a>
															<!--end::Btn-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--end::Items-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::List Widget 13-->
										</div>
									<?php endif; ?>
									
								</div>
								<div class="row">	
									<?php if($_SESSION['id_perfil'] == 2  ) :  ?>
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
					<?php /* <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
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
					</div> */?>
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
		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM&callback=initialize"></script>
		<script src="assets/plugins/custom/gmaps/gmaps.js"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>