<?php
 	ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
    session_start();
	require_once("../Classes/Material.php");
	
	$material = new material();
    $optionsMaterial = $material->listarOptionsMaterial();
    $id_midia = $_POST["id_midia"];

?>
<div class="card card-custom card-stretch gutter-b box-shadow" id="alugar_midia">
    <div class="my-6 mx-6">
        <h3 class="font-weight-bolder">Detalhes adicionais:</h3>
    </div>
    <div class="separator separator-solid"></div>
    <div class="my-6 mx-6">
        <?php if($id_midia == 1) : ?>
        <div class="form-group row"> 
            <div class="col-6">
                <label>Tipo de material</label>
                <select name="id_material" id="id_material" class="form-control">
                    <option value="">Selecione...</option>
                    <?php 
                        echo $optionsMaterial;
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row"> 
            <div class="col-6">
                <label>Adicione sua Arte</label>
                <input type="file" class="form-control">
                <span class="texto-chumbo">A arte deve ter escala de 9,0 x 3,60</span>
            </div>
        </div>
        <?php endif ;?>
        <?php if($id_midia == 2) : ?>
        <div class="form-group row"> 
            <div class="col-6">
                <label>Adicione sua Arte</label>
                <input type="file" class="form-control">
                <span class="texto-chumbo">A arte deve ter escala de 9,0 x 3,60</span>
            </div>
        </div>
        <?php endif ;?>
    </div>
    <div class="separator separator-solid"></div>
    <div class="my-6 mx-6">
        <button class="btn btn-primary w-100">Ir para método de Pagamento</button>
    </div>
</div>