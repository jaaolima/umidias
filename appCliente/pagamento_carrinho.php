<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	session_start();
    require_once("../Classes/Cliente.php");

    $id_usuario = $_SESSION["id_usuario"];

	$cliente = new Cliente();

	$retorno = $cliente->BuscarCarrinho($id_usuario);

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
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Tipo de Mídia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        
                                            while($dados = $retorno->fetch()){
                                                echo "<tr>
                                                        <td>
                                                            <div class='d-flex'>
                                                                <span class='symbol symbol-lg-50 symbol-circle symbol-40 symbol-light-success'>
                                                                    <span class='symbol-label font-size-h5 font-weight-bold'>P</span>
                                                                </span>
                                                                <div class='ml-3 mt-2'>
                                                                    <span class='texto-negrito'>".$dados["ds_tipo"]."</span><br>																				
                                                                    <svg class='mr-1' width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                                        <g clip-path='url(#clip0)'>
                                                                        <path d='M14 6.66675C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66675C2 5.07545 2.63214 3.54933 3.75736 2.42411C4.88258 1.29889 6.4087 0.666748 8 0.666748C9.5913 0.666748 11.1174 1.29889 12.2426 2.42411C13.3679 3.54933 14 5.07545 14 6.66675Z' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                                                        <path d='M8 8.66675C9.10457 8.66675 10 7.77132 10 6.66675C10 5.56218 9.10457 4.66675 8 4.66675C6.89543 4.66675 6 5.56218 6 6.66675C6 7.77132 6.89543 8.66675 8 8.66675Z' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                                                        </g>
                                                                        <defs>
                                                                        <clipPath id='clip0'>
                                                                        <rect width='16' height='16' fill='white'/>
                                                                        </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                    <span>".$dados["ds_local"]."</span>	
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>";
                                            }
                                            
                                        ?>
                                        </tbody>
                                    </table>
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
		<script src="assets/js/appCliente/pagamento_carrinho.js"></script>
		<!--end::Global Theme Bundle-->
        <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario;?>">
	</body>
	<!--end::Body-->
</html>