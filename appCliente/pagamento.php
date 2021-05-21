<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	session_start();


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
	<body id="kt_body" class="header-fixed subheader-enabled page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper " id="kt_wrapper">
					<div class="row">
                        <div class="col-8">
                            <div class="card card-custom card-stretch gutter-b box-shadow h-auto">
                                <div class="my-6 mx-6">
                                    <h3>Método de pagamento:</h3>
                                </div>
                                <div class="separator separator-solid"></div>
                                <div class="my-6 mx-6">
                                    <div class="my-6">
                                        <input type="radio" id="boleto_parcelado" name="metodo">
                                        <label for="boleto_parcelado">Boleto Parcelado</label>
                                    </div>
                                    <div class="separator separator-solid"></div>
                                    <div class="my-6">
                                        <input type="radio" id="boleto" name="metodo">
                                        <label for="boleto">Boleto</label>                                      
                                    </div >
                                    <div class="separator separator-solid"></div>
                                    <div class="my-6">
                                        <input type="radio" id="credito" name="metodo">
                                        <label for="credito">Cartão de crédito</label>                                     
                                    </div>
                                    <div class="separator separator-solid"></div>
                                    <div class="my-6">
                                        <input type="radio" id="pix" name="metodo">
                                        <label for="pix">Pix</label>                         
                                    </div>
                                </div>
                            </div> 
                            <div class="card card-custom card-stretch gutter-b box-shadow h-auto" id="card_boleto_parcelado" style="display: none;">
                                <div class="my-6 mx-6">
                                    <h3>Pagamento em boleto parcelado:</h3>
                                </div>
                            </div>
                            <div class="card card-custom card-stretch gutter-b box-shadow h-auto" id="card_boleto" style="display: none;">
                                <div class="my-6 mx-6">
                                    <h3>Pagamento em boleto:</h3>
                                </div>
                            </div>
                            <div class="card card-custom card-stretch gutter-b box-shadow h-auto" id="card_credito" style="display: none;">
                                <div class="my-6 mx-6">
                                    <h3>Pagamento em cartão de credito:</h3>
                                </div>
                            </div>
                            <div class="card card-custom card-stretch gutter-b box-shadow h-auto" id="card_pix" style="display: none;">
                                <div class="my-6 mx-6">
                                    <h3>Pagamento em pix</h3>
                                </div>
                            </div>

                        </div>
                        <div class="col-4">
                            <div class="card card-custom card-stretch gutter-b box-shadow">
                                <div class="my-6 mx-6">
                                    <h3>Revisão:</h3>
                                </div>
                                <div class="separator separator-solid"></div>
                                <div class="my-6 mx-6 ">
                                    <div class="mb-12">
                                        <h4 class="texto-negrito">Local </h4>
                                        <span>Teste</span>
                                    </div>
                                    <div class="my-12">
                                        <h4 class="texto-negrito">Latitude Longitude</h4>
                                        <span>Teste</span>
                                    </div>
                                    <div class="my-12">
                                        <h4 class="texto-negrito">Tipo</h4>
                                        <span>Teste</span>
                                    </div>
                                    <div class="my-12">
                                        <h4 class="texto-negrito">Período</h4>
                                        <span>01/01/1970 até 01/01/1970</span>
                                    </div>
                                    <div class="my-12">
                                        <h4 class="texto-negrito">Material </h4>
                                        <span>Teste</span>
                                    </div>
                                    <div class="my-12">
                                        <h4 class="texto-negrito">Valor Total </h4>
                                        <span style="color: green;">R$ 00.00</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                    </div>
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<script src="assets/js/scripts.bundle.js"></script>
		<script src="assets/js/appCliente/pagamento.js"></script>
		<!--end::Global Theme Bundle-->
	</body>
	<!--end::Body-->
</html>