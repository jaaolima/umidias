<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	session_start();
    require_once("../Classes/Ponto.php");
    require_once("../Classes/Material.php");
    require_once("../Classes/Bisemana.php");

    $id_ponto = $_REQUEST["id_ponto"];
    $id_usuario = $_SESSION["id_usuario"];
    

	$ponto = new Ponto();
    $material = new Material();
    $bisemana = new Bisemana();

	$dados = $ponto->BuscarDadosPonto($id_ponto);
    $id_midia = $dados["id_midia"];
    $id_material = $_REQUEST["id_material"];
    $dadosMaterial = $material->BuscarDadosMaterial($id_material);

    if($id_midia == 1){
        $id_bisemana = $_REQUEST["bisemana"];
        $bisemanaTotal = explode(',', $id_bisemana);
        $listarBisemana = $bisemana->listarBisemanaID($id_bisemana);
    }
    if($id_midia == 2){
        $dt_inicial	= date('Y-m-d',strtotime($_REQUEST["dt_inicial"]));
        $mes = $_REQUEST["mes"];
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
                                        <i class="fas fa-barcode icon-lg"></i>  
                                    </div>
                                    <div class="separator separator-solid"></div>
                                    <div class="my-6">
                                        <input type="radio" id="boleto" name="metodo">
                                        <label for="boleto">Boleto</label>    
                                        <i class="fas fa-barcode icon-lg"></i>                                      
                                    </div >
                                    <div class="separator separator-solid"></div>
                                    <div class="my-6">
                                        <input type="radio" id="credito" name="metodo">
                                        <label for="credito">Cartão de crédito</label>    
                                        <i class="far fa-credit-card icon-lg"></i>                              
                                    </div>
                                    <div class="separator separator-solid"></div>
                                    <div class="my-6">
                                        <input type="radio" id="pix" name="metodo">
                                        <label for="pix">Pix</label>
                                        <svg viewBox="0 0 512 512" height="17px" width="17px" xmlns="http://www.w3.org/2000/svg">
                                            <defs/>
                                            <g fill="#4BB8A9" fill-rule="evenodd">
                                                <path d="M393.072 391.897c-20.082 0-38.969-7.81-53.176-22.02l-77.069-77.067c-5.375-5.375-14.773-5.395-20.17 0l-76.784 76.786c-14.209 14.207-33.095 22.019-53.179 22.019h-9.247l97.521 97.52c30.375 30.375 79.614 30.375 109.988 0l97.239-97.238h-15.123zm-105.049 74.327c-8.55 8.53-19.93 13.25-32.05 13.25h-.02c-12.12 0-23.522-4.721-32.05-13.25l-56.855-56.855c7.875-4.613 15.165-10.248 21.758-16.84l63.948-63.948 64.23 64.23c7.637 7.66 16.188 14.013 25.478 18.952l-54.439 54.46zM310.958 22.78c-30.374-30.374-79.613-30.374-109.988 0l-97.52 97.52h9.247c20.082 0 38.97 7.834 53.178 22.02l76.784 76.785c5.57 5.592 14.622 5.57 20.17 0l77.069-77.068c14.207-14.187 33.094-22.02 53.176-22.02h15.123l-97.239-97.237zm6.028 96.346l-64.23 64.23-63.97-63.97c-6.593-6.592-13.86-12.206-21.736-16.818l56.853-56.877c17.69-17.645 46.476-17.668 64.121 0l54.44 54.461c-9.292 4.961-17.842 11.315-25.479 18.974h.001z"/>
                                                <path d="M489.149 200.97l-58.379-58.377h-37.706c-13.838 0-27.394 5.635-37.185 15.426l-77.068 77.069c-7.202 7.18-16.623 10.77-26.067 10.77-9.443 0-18.885-3.59-26.066-10.77l-76.785-76.785c-9.792-9.814-23.346-15.427-37.207-15.427h-31.81L22.78 200.97c-30.374 30.375-30.374 79.614 0 109.988l58.095 58.074 31.81.021c13.86 0 27.416-5.635 37.208-15.426l76.784-76.764c13.925-13.947 38.208-13.924 52.133-.02l77.068 77.066c9.791 9.792 23.346 15.405 37.185 15.405h37.706l58.379-58.356c30.374-30.374 30.374-79.613 0-109.988zm-362.19 129.724c-3.763 3.786-8.942 5.917-14.273 5.917H94.302l-48.59-48.564c-17.689-17.69-17.689-46.476 0-64.143L94.3 175.296h18.385c5.331 0 10.51 2.154 14.295 5.918l74.74 74.74-74.761 74.74zm339.257-42.647l-48.848 48.87h-24.305c-5.309 0-10.508-2.155-14.251-5.92l-75.023-75.043 75.023-75.023c3.743-3.764 8.942-5.918 14.252-5.918h24.304l48.847 48.891c8.573 8.551 13.273 19.93 13.273 32.05 0 12.141-4.7 23.52-13.273 32.093z"/>
                                            </g>
                                        </svg>                         
                                    </div>
                                </div>
                            </div> 
                            <div class="card card-custom card-stretch gutter-b box-shadow h-auto card-metodo" id="card_boleto_parcelado" style="display: none;">
                                <div class="my-6 mx-6">
                                    <div class="d-flex">
                                        <i class="fas fa-barcode icon-lg mr-2"></i>  
                                        <h3>Pagamento em boleto parcelado:</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-custom card-stretch gutter-b box-shadow h-auto card-metodo" id="card_boleto" style="display: none;">
                                <div class="my-6 mx-6">
                                    <div class="d-flex">
                                        <i class="fas fa-barcode icon-lg mr-2"></i>  
                                        <h3>Pagamento em boleto:</h3>
                                    </div>
                                    <div class="separator separator-solid"></div>
                                    <button class="btn btn-primary mt-4" id="gerar_boleto">Gerar boleto</button>
                                </div>
                            </div>
                            <div class="card card-custom card-stretch gutter-b box-shadow h-auto card-metodo" id="card_credito" style="display: none;">
                                <div class="my-6 mx-6">
                                    <div class="d-flex">
                                        <i class="far fa-credit-card icon-lg mr-2"></i>
                                        <h3>Pagamento em cartão de credito:</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-custom card-stretch gutter-b box-shadow h-auto card-metodo" id="card_pix" style="display: none;">
                                <div class="my-6 mx-6">
                                    <div class="d-flex">
                                        <svg viewBox="0 0 512 512" height="25px" width="25px" xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                            <defs/>
                                            <g fill="#4BB8A9" fill-rule="evenodd">
                                                <path d="M393.072 391.897c-20.082 0-38.969-7.81-53.176-22.02l-77.069-77.067c-5.375-5.375-14.773-5.395-20.17 0l-76.784 76.786c-14.209 14.207-33.095 22.019-53.179 22.019h-9.247l97.521 97.52c30.375 30.375 79.614 30.375 109.988 0l97.239-97.238h-15.123zm-105.049 74.327c-8.55 8.53-19.93 13.25-32.05 13.25h-.02c-12.12 0-23.522-4.721-32.05-13.25l-56.855-56.855c7.875-4.613 15.165-10.248 21.758-16.84l63.948-63.948 64.23 64.23c7.637 7.66 16.188 14.013 25.478 18.952l-54.439 54.46zM310.958 22.78c-30.374-30.374-79.613-30.374-109.988 0l-97.52 97.52h9.247c20.082 0 38.97 7.834 53.178 22.02l76.784 76.785c5.57 5.592 14.622 5.57 20.17 0l77.069-77.068c14.207-14.187 33.094-22.02 53.176-22.02h15.123l-97.239-97.237zm6.028 96.346l-64.23 64.23-63.97-63.97c-6.593-6.592-13.86-12.206-21.736-16.818l56.853-56.877c17.69-17.645 46.476-17.668 64.121 0l54.44 54.461c-9.292 4.961-17.842 11.315-25.479 18.974h.001z"/>
                                                <path d="M489.149 200.97l-58.379-58.377h-37.706c-13.838 0-27.394 5.635-37.185 15.426l-77.068 77.069c-7.202 7.18-16.623 10.77-26.067 10.77-9.443 0-18.885-3.59-26.066-10.77l-76.785-76.785c-9.792-9.814-23.346-15.427-37.207-15.427h-31.81L22.78 200.97c-30.374 30.375-30.374 79.614 0 109.988l58.095 58.074 31.81.021c13.86 0 27.416-5.635 37.208-15.426l76.784-76.764c13.925-13.947 38.208-13.924 52.133-.02l77.068 77.066c9.791 9.792 23.346 15.405 37.185 15.405h37.706l58.379-58.356c30.374-30.374 30.374-79.613 0-109.988zm-362.19 129.724c-3.763 3.786-8.942 5.917-14.273 5.917H94.302l-48.59-48.564c-17.689-17.69-17.689-46.476 0-64.143L94.3 175.296h18.385c5.331 0 10.51 2.154 14.295 5.918l74.74 74.74-74.761 74.74zm339.257-42.647l-48.848 48.87h-24.305c-5.309 0-10.508-2.155-14.251-5.92l-75.023-75.043 75.023-75.023c3.743-3.764 8.942-5.918 14.252-5.918h24.304l48.847 48.891c8.573 8.551 13.273 19.93 13.273 32.05 0 12.141-4.7 23.52-13.273 32.093z"/>
                                            </g>
                                        </svg>   
                                        <h3>Pagamento em pix:</h3> 
                                    </div>
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
                                        <h4 class="texto-negrito">Bisemanas</h4>
                                        <table  class="table table-hover" id="table_bisemana">
                                            <thead>
                                                <tr>
                                                    <th>Data Inicial</th>
                                                    <th>Data Final</th>
                                                    <th>Bisemanas</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    while ($dadosBisemana = $listarBisemana->fetch())
                                                    {
                                                        $dt_inicial = date('d/m/Y', strtotime($dadosBisemana["dt_inicial"]));
                                                        $dt_final = date('d/m/Y', strtotime($dadosBisemana["dt_final"]));
                                                        echo "<tr>
                                                                <td>".$dt_inicial."</td>
                                                                <td>".$dt_final."</td>
                                                                <td>".$dadosBisemana['ds_bisemana']."</td>
                                                            </tr>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
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
                                        echo date('d/m/Y', strtotime($dt_inicial))." até ". date('d/m/Y', strtotime($dt_final));
                                        ?> 

                                        </span>
                                    </div>
                                    <?php endif; ?>
                                    <div class="my-12">
                                        <h4 class="texto-negrito">Material </h4>
                                        <span><?php echo $dadosMaterial["ds_material"]; ?></span>
                                    </div>
                                    <?php if($id_midia == 2) : ?>
                                    <div class="my-12">
                                        <h4 class="texto-negrito">Valor Total </h4>
                                            <?php
                                                $Rvirgula = str_replace(",", "", $dados["nu_valor"]); 
                                                $Rrs = str_replace("R$ ", "", $Rvirgula);
                                                $valor = $Rrs; 

                                                $RvirgulaMaterial = str_replace(",", "", $dadosMaterial["nu_valor"]);
                                                $RrsMaterial = str_replace("R$ ", "", $RvirgulaMaterial);
                                                $valorMaterial = $RrsMaterial; 

                                            ?>
                                        <h4 style="color: green;"><?php echo "R$ ".$nu_valor_alugado = ($valor * $mes) + $valorMaterial;?></h4>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($id_midia == 1) : ?>
                                    <div class="my-12">
                                        <?php
                                            $Rvirgula = str_replace(",", "", $dados["nu_valor"]); 
                                            $valor = str_replace("R$ ", "", $Rvirgula); 

                                            $RvirgulaMaterial = str_replace(",", "", $dadosMaterial["nu_valor"]);
                                            $RrsMaterial = str_replace("R$ ", "", $RvirgulaMaterial);
                                            $valorMaterial = $RrsMaterial; 

                                        ?>
                                        <h4 class="texto-negrito">Valor Total </h4>
                                        <h4 style="color: green;"><?php echo "R$ ".$nu_valor_alugado = (($valor * count($bisemanaTotal)) + $valorMaterial);?></h4>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($id_midia == 2) : ?>
                                    <form id="form_alugar" class="d-none">
                                        <input type="text" value="<?php echo $dt_inicial; ?>" name="dt_inicial" id="dt_inicial">
                                        <input type="text" value="<?php echo $dt_final; ?>" name="dt_final" id="dt_final">
                                        <input type="text" value="<?php echo $_GET["ds_arte"]; ?>" name="ds_arte" id="ds_arte">
                                        <input type="text" value="<?php echo $id_ponto; ?>" name="id_ponto" id="id_ponto">
                                        <input type="text" value="<?php echo $id_usuario; ?>" name="id_usuario" id="id_usuario">
                                        <input type="text" value="<?php echo $id_midia; ?>" name="id_midia" id="id_midia">
                                        <input type="text" value="<?php echo $nu_valor_alugado; ?>" name="nu_valor_alugado" id="nu_valor_alugado">
                                    </form>
                                    <?php endif; ?>
                                    <?php if($id_midia == 1) : ?>
                                    <form id="form_alugar" class="d-none">
                                        <input type="text" value="<?php echo $_GET["ds_arte"]; ?>" name="ds_arte" id="ds_arte">
                                        <input type="text" value="<?php echo $id_ponto; ?>" name="id_ponto" id="id_ponto">
                                        <input type="text" value="<?php echo $id_usuario; ?>" name="id_usuario" id="id_usuario">
                                        <input type="text" value="<?php echo $id_bisemana; ?>" name="bisemana" id="bisemana">
                                        <input type="text" value="<?php echo $id_material; ?>" name="id_material" id="id_material">
                                        <input type="text" value="<?php echo $id_midia; ?>" name="id_midia" id="id_midia"> 
                                        <input type="text" value="<?php echo $nu_valor_alugado; ?>" name="nu_valor_alugado" id="nu_valor_alugado">
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