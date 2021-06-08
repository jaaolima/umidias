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
            <div class="kt-radio-inline">
                <label class="kt-radio">
                    <input type="radio" name="tp_busca" value="1" checked="checked"> Nome
                    <span></span>
                </label>
                <label class="kt-radio">
                    <input type="radio" name="tp_busca" value="2"> Atendimento
                    <span></span>
                </label>
                <label class="kt-radio">
                    <input type="radio" name="tp_busca" value="3"> CPF
                    <span></span>
                </label>
                <label class="kt-radio">
                    <input type="radio" name="tp_busca" value="4"> Unidade 
                    <span></span>
                </label>
            </div>
            <span class="form-text text-muted">Selecione o tipo de busca e digite algo para buscar</span>
        </div>
        <div class="form-group col-md-6">
            <input type="text" id="busca" class="form-control" aria-describedby="buscaHelp" placeholder="Pesquisar" >
            <span class="form-text text-muted">Digite o parâmetro para busca</span>
        </div>
		<!--begin: Datatable -->
		
		<!--end: Datatable -->
	</div>
</div>
<div id="lista"></div>
<input type="hidden" name="id_midia" id="id_midia" value="<?php echo $id_midia; ?>">

<script src="./assets/js/appPonto/busca_ponto_midia.js" type="text/javascript"></script> 
