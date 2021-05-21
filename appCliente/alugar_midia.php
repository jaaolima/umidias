<?php
 	ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
    session_start();
	require_once("../Classes/Material.php");
	
	$material = new material();
    $optionsMaterial = $material->listarOptionsMaterial();
    $id_midia = $_POST["id_midia"];
    $id_ponto = $_POST["id_ponto"];
    $dt_inicial = $_POST["dt_inicial"];
    $mes = $_POST["mes"];

?>
<div class="card card-custom card-stretch gutter-b box-shadow" >
    <div class="my-6 mx-6">
        <h3 class="font-weight-bolder">Detalhes adicionais:</h3>
    </div>
    <div class="separator separator-solid"></div>
    <form class="my-6 mx-6" id="form_detalhe">
        <div class="form-group row"> 
            <?php if($id_midia == 1) : ?>
            <div class="col-12">
                <label>Tipo de material</label>
                <select name="id_material" id="id_material" class="form-control">
                    <option value="">Selecione...</option>
                    <?php 
                        echo $optionsMaterial;
                    ?>
                </select>
            </div>
            <?php endif ;?>
            <div class="col-12">
                <label>Adicione sua Arte</label>
                <input type="file" class="form-control" name="ds_arte" id="ds_arte">
                <span class="texto-chumbo">A arte deve ter escala de 9,0 x 3,60</span>
            </div>
        </div>
        <input type="hidden" name="id_midia" id="id_midia" value="<?php echo $id_midia; ?>">
        <input type="hidden" name="id_ponto" id="id_ponto" value="<?php echo $id_ponto; ?>">
    </form>
    <div class="separator separator-solid"></div>
    <div class="my-6 mx-6 d-flex">
        <button class="btn btn-outline-primary w-100 mr-4" id="voltar">Voltar</button>
        <button class="btn btn-primary w-100" id="pagamento">Ir para método de Pagamento</button>
    </div>
</div>
<script src="assets/js/appCliente/alugar_midia.js"></script>