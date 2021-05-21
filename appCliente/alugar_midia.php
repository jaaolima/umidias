<?php
 	ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
    session_start();
	require_once("../Classes/material.php");
	
	$material = new material();
    $optionsMaterial = $material->listarOptionsMaterial();
    $id_midia = $_POST["id_midia"];

?>
<div class="card card-custom card-stretch gutter-b box-shadow" id="alugar_midia">
    <div class="my-6 mx-6">
        <h3 class="font-weight-bolder">Detalhes adicionais</h3>
    </div>
    <div class="separator separator-solid"></div>
    
    <div class="my-6 mx-6">
        <?php if($id_midia == 2) : ?>
        <div class="form-group"> 
            <div class="col-6">
                <label>Data Inicial</label>
                <input type="date" value="" class="form-control">
            </div>
            <div class="col-6">
                <label>Data Final</label>
                <input type="date" value="" class="form-control">
            </div>
        </div>
        <div class="form-group"> 
            <div class="col-6">
                <label>Tipo de material</label>
                <select name="" id="" class="form-control">
                    <?php 
                        echo $optionsMaterial;
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group"> 
            <div class="col-6">
                <label>Adicione sua Arte</label>
                <input type="file" class="form-control">

            </div>
        </div>
        <?php endif ; ?>
    </div>
    <div class="separator separator-solid"></div>
    <div class="my-6 mx-6">
        <button class="btn btn-primary w-100">Ir para método de Pagamento</button>
    </div>
</div>