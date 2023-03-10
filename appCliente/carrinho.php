<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	session_start();
    require_once("../Classes/Cliente.php");

    $id_usuario = $_SESSION['id_usuario'];

	$cliente = new Cliente();
	$retorno = $cliente->BuscarCarrinho($id_usuario);
    $retornoTotal = $cliente->BuscarCarrinho($id_usuario);
    /*$id_midia = $dados["id_midia"];
    if($id_midia == 1){
        $bisemana = $_GET["bisemana"];
        $id_material = $_GET["id_material"];
    }
    if($id_midia == 2){
        $dt_inicial = $_GET["dt_inicial"];
        $mes = $_GET["mes"]; 
    }*/
    $totalCarrinho = $cliente->BuscarCarrinho($id_usuario); 
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
                        <div class="col-9">
                            <div class="card card-custom card-stretch gutter-b box-shadow h-auto">
                                <div class="my-6 mx-6 d-flex">
                                    <div class="col-6">
                                        <h3>Carrinho:</h3>
                                    </div>
                                </div>
                                <div class="separator separator-solid"></div>
                                <input type="hidden" id="id_usuario" value="<?php echo $id_usuario; ?>">
                                <div class="my-6 mx-6 d-flex row">
                                 
                                    <?php
                                        while($dados = $retorno->fetch()){ 
                                            echo "<div class='col-4' >
                                                <div class='card card-custom card-stretch gutter-b'>
                                                    <!--begin::Body-->
                                                    <div class='card-body text-center' style='padding: 0px !important'>
                                                        <!--begin::User-->
                                                        <div class='position-relative' >
                                                            <img class='img-fluid w-100 rounded-top' src='".$dados["ds_foto"]."' alt='image' style='height:200px;' />
                                                            <div class='position-absolute'  style='top: -14px; right: -14px;'>
                                                                <a id='".$dados["id_carrinho"]."' class='excluir btn btn-md btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow' data-action='change' data-toggle='tooltip' title='' data-original-title='excluir'>
                                                                    <i class='far fa-trash-alt icon-md texto-vermelho'></i> 
                                                                </a>
                                                            </div>
                                                            <div class='position-absolute p-1 bg-white rounded-bottom-right'  style='top: 0px; left: 0px;'>
                                                                <h4>".$dados["nu_valor_alugado"]."</h4>
                                                            </div>
                                                        </div>
                                                        <!--end::User--> 
                                                        <!--begin::Name-->
                                                        <div class='my-8 mx-15 text-left'> 
                                                            <div class='d-flex ml-n8'>
                                                                <div class='mt-1'>
                                                                    <svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                                        <path d='M19.7273 10.3636C19.7273 16.0909 12.3636 21 12.3636 21C12.3636 21 5 16.0909 5 10.3636C5 8.41068 5.77581 6.53771 7.15676 5.15676C8.53771 3.77581 10.4107 3 12.3636 3C14.3166 3 16.1896 3.77581 17.5705 5.15676C18.9515 6.53771 19.7273 8.41068 19.7273 10.3636Z' stroke='#B5B5C3' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                                                        <path d='M12.3636 12.8183C13.7192 12.8183 14.8181 11.7193 14.8181 10.3637C14.8181 9.00812 13.7192 7.90918 12.3636 7.90918C11.008 7.90918 9.90906 9.00812 9.90906 10.3637C9.90906 11.7193 11.008 12.8183 12.3636 12.8183Z' stroke='#B5B5C3' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                                                    </svg>
                                                                </div>
                                                                <div class='ml-2'>
                                                                    <a class='text-dark font-weight-bold text-dark font-size-h4'>".$dados['ds_bairro']."</a>
                                                                </div>	
                                                            </div>																																			
                                                        </div>
                                                        <div class='my-4 mx-15 text-left'>
                                                            <div class='d-flex ml-n8'>
                                                                <div class='mt-1'>
                                                                <svg width='24' height='24' viewBox='0 0 50 46' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                                    <path d='M44.2 1H5.8C3.14903 1 1 3.14903 1 5.8V29.8C1 32.451 3.14903 34.6 5.8 34.6H44.2C46.851 34.6 49 32.451 49 29.8V5.8C49 3.14903 46.851 1 44.2 1Z' stroke='#B5B5C3' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                                                                    <path d='M20.2 44.2H29.8' stroke='#B5B5C3' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                                                                    <path d='M25 34.6001V44.2001' stroke='#B5B5C3' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                                                                </svg>
                                                                </div>
                                                                <div class='ml-2'>
                                                                    <span class='text-dark font-weight-bold text-dark font-size-h4'>Tipo</span><br>
                                                                    <p class='texto-chumbo font-size-h6'>".$dados['ds_tipo']."</p>
                                                                </div>													
                                                            </div>
                                                            
                                                        </div>
                                                        <div class='my-4 mx-15 text-left'>
                                                            <div class='d-flex ml-n8'>
                                                                <div class='mt-1'>
                                                                    <i class='flaticon-web icon-xl'></i> 
                                                                </div>
                                                                <div class='ml-2'>
                                                                    <span class='text-dark font-weight-bold text-dark font-size-h4'>Material</span><br>
                                                                    <p class='texto-chumbo font-size-h6'>".$dados['ds_material']."</p>
                                                                </div>													
                                                            </div>
                                                            
                                                        </div>
                                                        <div class='my-4 mx-15 text-left'>
                                                            <div class='d-flex ml-n8'>
                                                                <div class='mt-1'>
                                                                    <i class='flaticon-calendar-1 icon-xl'></i>
                                                                </div>
                                                                <div class='ml-2'>
                                                                    <span class='text-dark font-weight-bold text-dark font-size-h4'>Data</span><br>
                                                                    <p class='texto-chumbo font-size-h6'>".date('d/m/Y', strtotime($dados["dt_inicial"]))." at?? ".date('d/m/Y', strtotime($dados["dt_final"]))."</p>
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
                        <div class="col-3">
                            <div class="card card-custom card-stretch gutter-b box-shadow">
                                <div class="my-6 mx-6">
                                    <?php 
                                        $total = 0;
                                        while($dados = $totalCarrinho->fetch()){
                                            $Rvirgula = str_replace(".", "", $dados["nu_valor_alugado"]); 
                                            $Rzero = str_replace(",00", "", $Rvirgula); 
                                            $Rrs = str_replace("R$ ", "", $Rzero);
                                            $valor = $Rrs; 
                                            $total += $valor;
                                        }
                                    ?>
                                    <div class="d-flex">
                                        <h3>Total:</h3> 
                                        <div id="local_valor"><h3><?php echo 'R$ '. number_format($total,2,",","."); ?></h3></div>

                                    </div>
                                    <div>
                                        <label>Cupom de desconto?</label>
                                        <div class="d-flex">
                                            <input type="text" class="form-control mr-2" id="ds_codigo" name="ds_codigo" />
                                            <button class="btn btn-primary" id="aplicar_cupom">Aplicar</button>
                                        </div>
                                        <div id="texto_cupom"></div>
                                       <input type="hidden" name="valor_alugado" id="valor_alugado" value="<?php echo $total; ?>">
                                    </div>
                                </div>
                                <div class="separator separator-solid"></div>
                                <div class="my-6 mx-6 ">
                                    <div class="mb-12">
                                        <a href="appCliente/listar_tipo.php" class="btn btn-primary w-100">Adicionar mais m??dias</a>
                                    </div>
                                    <?php 
                                        $total = 0;
                                        while($retornoTotal->fetch()){
                                            $total++;
                                        } 
                                        if($total > 0) :
                                    ?>
                                    <div class="mb-12">
                                        <a class="btn btn-primary w-100" id="pagamento">Ir para m??todo de pagamento</a>
                                    </div>
                                    <div class="mb-12">
                                        <button class="btn btn-outline-primary w-100 mr-4" type="button" id="esvaziar">Esvaziar carrinho</button>
                                    </div>
                                    <?php endif; ?>
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
		<script src="assets/js/appCliente/carrinho.js"></script>
		<!--end::Global Theme Bundle-->
	</body>
	<!--end::Body-->
</html>  