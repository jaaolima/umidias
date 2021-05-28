<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	session_start();
    require_once("../Classes/Ponto.php");

    $id_ponto = $_GET["id_ponto"];

	$ponto = new Ponto();
	$dados = $ponto->BuscarDadosPonto($id_ponto);
    $id_midia = $dados["id_midia"];
    if($id_midia == 1){
        $bisemana = $_GET["bisemana"];
        $id_material = $_GET["id_material"];
    }
    if($id_midia == 2){
        $dt_inicial = $_GET["dt_inicial"];
        $mes = $_GET["mes"];
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
                                    <h3>Carrinho:</h3>
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
                        </div>
                        <div class="col-4">
                            <div class="card card-custom card-stretch gutter-b box-shadow">
                                <div class="my-6 mx-6">
                                    <h3>Pagamento:</h3>
                                </div>
                                <div class="separator separator-solid"></div>
                                <div class="my-6 mx-6 ">
                                    <div class="mb-12">
                                        <button class="btn btn-outline-primary w-100 mr-4" type="button" id="voltar">Esvaziar carrinho</button>
                                        <button class="btn btn-primary">Ir para método de pagamento</button>
                                    </div>
                                    <div class="mb-12">
                                        <button class="btn btn-primary">Adicionar mais mídias</button>
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