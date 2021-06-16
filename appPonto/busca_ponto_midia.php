<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
    error_reporting(E_ALL);

    $id_midia = $_REQUEST["id_midia"];
?>
<div class="card card-custom gutter-b">
	
	<div class="card-body">
        <div class="form-group col-md-12">
            <label>Tipo de busca</label>
            <div class="radio-inline">
                <label class="radio">
                    <input type="radio" id="buscar_regiao" name="tp_busca" value="1" checked="checked"> Região
                    <span></span>
                </label>
                <label class="radio">
                    <input type="radio" id="buscar_valor" name="tp_busca" value="2"> Preço
                    <span></span>
                </label>
            </div>
            <span class="form-text text-muted">Selecione o tipo de busca e digite algo para buscar</span>
        </div>
        <div class="form-group col-md-6" id="regiao"> 
            <input type="text" id="busca" class="form-control" aria-describedby="buscaHelp" placeholder="Pesquisar" >
            <span class="form-text text-muted">Digite o parâmetro para busca</span>
        </div>
        <div class="form-group col-md-6" id="valor" style="display:none;">
            <div id="kt_price_slider" class="nouislider nouislider-light nouislider-handle-primary nouislider-bg-light-primary nouislider-shadowless nouislider-borderless"></div>
            <span class="form-text text-muted">Selecione o valor</span>
        </div>
        
		<!--begin: Datatable -->
		
		<!--end: Datatable -->
	</div>
</div>
<div id="lista"></div>
<input type="hidden" name="id_midia" id="id_midia" value="<?php echo $id_midia; ?>">

<script src="./assets/js/appPonto/busca_ponto_midia.js" type="text/javascript"></script> 
