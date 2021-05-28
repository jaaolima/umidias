<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	session_start();
    require_once("../Classes/Ponto.php");

    $id_ponto = $_GET["id_ponto"];
    $id_usuario = $_SESSION["id_usuario"];
	$ponto = new Ponto();
	$dados = $ponto->BuscarDadosPonto($id_ponto);
    $id_midia = $dados["id_midia"];
    if($id_midia == 1){
        $bisemana = $_GET["bisemana"];
        $id_material = $_GET["id_material"];
    }
    if($id_midia == 2){
        $dt_inicial	= date('Y-m-d',strtotime($_GET["dt_inicial"]));
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
                            <div class="card card-custom card-stretch gutter-b box-shadow h-auto card-metodo" id="card_boleto_parcelado" style="display: none;">
                                <div class="my-6 mx-6">
                                    <h3>Pagamento em boleto parcelado:</h3>
                                </div>
                            </div>
                            <div class="card card-custom card-stretch gutter-b box-shadow h-auto card-metodo" id="card_boleto" style="display: none;">
                                <div class="my-6 mx-6">
                                    <h3>Pagamento em boleto:</h3>
                                    <div class="separator separator-solid"></div>
                                    <button class="btn btn-primary mt-4" id="gerar_boleto">Gerar boleto</button>
                                </div>
                            </div>
                            <div class="card card-custom card-stretch gutter-b box-shadow h-auto card-metodo" id="card_credito" style="display: none;">
                                <div class="my-6 mx-6">
                                    <h3>Pagamento em cartão de credito:</h3>
                                </div>
                            </div>
                            <div class="card card-custom card-stretch gutter-b box-shadow h-auto card-metodo" id="card_pix" style="display: none;">
                                <div class="my-6 mx-6">
                                    <h3>Pagamento em pix:</h3>
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
                                        <span><?php echo $dados["ds_local"]; ?></span>
                                    </div>
                                    <div class="my-12">
                                        <h4 class="texto-negrito">Latitude Longitude</h4>
                                        <span><?php echo $dados["ds_latitude"]." ".$dados["ds_longitude"]; ?></span>
                                    </div>
                                    <div class="my-12">
                                        <h4 class="texto-negrito">Tipo</h4>
                                        <span><?php echo $dados["ds_tipo"]?></span>
                                    </div>
                                    <?php if($id_midia == 1) : ?>
                                    <div class="my-12">
                                        <h4 class="texto-negrito">Período</h4>
                                        <?php 
                                            for($i=0; $i < count($bisemana) ; $i++) { 
                                                echo "<span>".$bisemana[$i]."</span>";
                                            }
                                        ?> 
                                    </div>
                                    <?php endif; ?>
                                    <?php if($id_midia == 2) : ?>
                                    <div class="my-12">
                                        <h4 class="texto-negrito">Período</h4>
                                        <span>
                                        <?php 
                                        $date = new DateTime($dt_inicial);
                                        $date->modify('+'.$mes.'months');
                                        $dt_final = $date->format('Y-m-d');
                                        echo $dt_inicial." até ". $dt_final;
                                        ?> 

                                        </span>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($id_midia == 2) : ?>
                                    <div class="my-12">
                                        <h4 class="texto-negrito">Material </h4>
                                        <span>Lona</span>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($id_midia == 1) : ?>
                                    <div class="my-12">
                                        <h4 class="texto-negrito">Material </h4>
                                        <span><?php echo $id_material; ?></span>
                                    </div>
                                    <?php endif; ?>
                                    <div class="my-12">
                                        <h4 class="texto-negrito">Valor Total </h4>
                                        <h4 style="color: green;"><?php echo ($dados["nu_valor"] * $mes) + (($dados["nu_valor"] * $mes) * 0.2);?></h4>
                                    </div>
                                    <?php if($id_midia == 2) : ?>
                                    <form id="form_alugar" class="d-none">
                                        <input type="text" value="<?php echo $dt_inicial; ?>" name="dt_inicial" id="dt_inicial">
                                        <input type="text" value="<?php echo $dt_final; ?>" name="dt_final" id="dt_final">
                                        <input type="text" value="<?php echo $_GET["ds_arte"]; ?>" name="ds_arte" id="ds_arte">
                                        <input type="text" value="<?php echo $id_ponto; ?>" name="id_ponto" id="id_ponto">
                                        <input type="text" value="<?php echo $id_usuario; ?>" name="id_usuario" id="id_usuario">
                                    </form>
                                    <?php endif; ?>
                                    <?php if($id_midia == 2) : ?>
                                    <form id="form_alugar" class="d-none">
                                        <input type="text" value="<?php echo $_GET["ds_arte"]; ?>" name="ds_arte" id="ds_arte">
                                        <input type="text" value="<?php echo $id_ponto; ?>" name="id_ponto" id="id_ponto">
                                        <input type="text" value="<?php echo $id_usuario; ?>" name="id_usuario" id="id_usuario">
                                        <input type="text" value="<?php echo $bisemana; ?>" name="bisemana" id="bisemana">
                                        <input type="text" value="<?php echo $id_material; ?>" name="id_material" id="id_material">
                                    </form>
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
		<script src="assets/js/appCliente/pagamento.js"></script>
		<!--end::Global Theme Bundle-->
	</body>
	<!--end::Body-->
</html>