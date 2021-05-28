<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	session_start();
    require_once("../Classes/Usuario.php");

    $id_usuario = $_SESSION['id_usuario'];

	$usuario = new Usuario();
	$retorno = $usuario->BuscarCarrinho($id_usuario);
    /*$id_midia = $dados["id_midia"];
    if($id_midia == 1){
        $bisemana = $_GET["bisemana"];
        $id_material = $_GET["id_material"];
    }
    if($id_midia == 2){
        $dt_inicial = $_GET["dt_inicial"];
        $mes = $_GET["mes"];
    }*/
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
                                <div class="my-6 mx-6 d-flex row">
                                
                                    <?php
                                        while($dados = $retorno->fetch()){

                                            echo "<div class='col-4' >
                                                <div class='card card-custom card-stretch gutter-b'>
                                                    <!--begin::Body-->
                                                    <div class='card-body text-center' style='padding: 0px !important'>
                                                        <!--begin::User-->
                                                        <div class='position-relative' >
                                                            <img class='img-fluid w-100 rounded-top' src='".$dados["ds_foto"]."' alt='image' style='max-height:300px;' />
                                                            <div class='position-absolute ' style='bottom: 13px; right: 27px;'>
                                                                <span class='text-white font-weight-bold'>Alugadas 345 vezes </span>
                                                            </div>
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Name-->
                                                        <div class='my-8 mx-15 text-left'>
                                                            <div class='d-flex ml-n8'>
                                                                <div class='mt-1'>
                                                                    <svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                                        <path d='M19.7273 10.3636C19.7273 16.0909 12.3636 21 12.3636 21C12.3636 21 5 16.0909 5 10.3636C5 8.41068 5.77581 6.53771 7.15676 5.15676C8.53771 3.77581 10.4107 3 12.3636 3C14.3166 3 16.1896 3.77581 17.5705 5.15676C18.9515 6.53771 19.7273 8.41068 19.7273 10.3636Z' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                                                        <path d='M12.3636 12.8183C13.7192 12.8183 14.8181 11.7193 14.8181 10.3637C14.8181 9.00812 13.7192 7.90918 12.3636 7.90918C11.008 7.90918 9.90906 9.00812 9.90906 10.3637C9.90906 11.7193 11.008 12.8183 12.3636 12.8183Z' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                                                    </svg>
                                                                </div>
                                                                <div class='ml-2'>
                                                                    <a href='appCliente/ver_midia.php?id_ponto=".$dados['id_ponto']."'class='text-dark font-weight-bold text-dark font-size-h4'>".$dados['ds_local']."</a>
                                                                </div>	
                                                            </div>																								
                                                            <div class='my-6'>
                                                                <p class='texto-chumbo font-size-h6'>".$dados['ds_descricao']."</p>
                                                            </div>													
                                                        </div>
                                                        <div class='my-8 mx-15 text-left'>
                                                            <div class='d-flex ml-n8'>
                                                                <div class='mt-1'>
                                                                    <svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                                        <path d='M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                                                        <path d='M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                                                        <path d='M23 20.9999V18.9999C22.9993 18.1136 22.7044 17.2527 22.1614 16.5522C21.6184 15.8517 20.8581 15.3515 20 15.1299' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                                                        <path d='M16 3.12988C16.8604 3.35018 17.623 3.85058 18.1676 4.55219C18.7122 5.2538 19.0078 6.11671 19.0078 7.00488C19.0078 7.89305 18.7122 8.75596 18.1676 9.45757C17.623 10.1592 16.8604 10.6596 16 10.8799' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                                                    </svg>
                                                                </div>
                                                                <div class='ml-2'>
                                                                    <span class='text-dark font-weight-bold text-dark font-size-h4'>Alcance</span><br>
                                                                    <span class=' texto-fraco font-size-h6'>15.456 pessoas</span>
                                                                </div>													
                                                            </div>
                                                            
                                                        </div>
                                                        <!--end::Name-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                            </div> ";
                                        }

                                    ?>
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
                                        <button class="btn btn-primary w-100">Adicionar mais mídias</button>
                                    </div>
                                    <div class="mb-12">
                                    <button class="btn btn-primary w-100">Ir para método de pagamento</button>
                                    </div>
                                    <div class="mb-12">
                                        <button class="btn btn-outline-primary w-100 mr-4" type="button" id="voltar">Esvaziar carrinho</button>
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