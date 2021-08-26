<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
    
    require_once("../Classes/Exercicio.php");

    $id_exercicio = $_REQUEST['id_exercicio'];

    $exercicio = new Exercicio();
    $dados = $exercicio->buscarDadosExercicio($id_exercicio);
    $optionsTipo = $exercicio->OptionsTipo($dados["id_tipo"]);
    $optionsArea = $exercicio->OptionsArea($dados["id_tipo"], $dados["id_area"]);
?>

<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Cadastro de exercício
        </h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form id="form_exercicio">
        <div class="card-body">
            <div class="form-group row">
                <div class="form-group col-md-3">
                    <label>Tipo<span class="text-danger">*</span></label>
                    <select class="form-control" id="id_tipo" name="id_tipo">
                        <option>Selecione..</option>
                        <?php 
                            echo $optionsTipo;
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label>Área<span class="text-danger">*</span></label>
                    <select class="form-control" id="id_area" name="id_area">
                        <option>Selecione..</option>
                        <?php 
                            echo $optionsArea;
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label>Exercício<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_exercicio" name="ds_exercicio" value="<?php echo $dados["ds_exercicio"]; ?>" />
                </div>
                <div class="form-group col-md-3">
                    <label>Status<span class="text-danger">*</span></label>
                    <select class="form-control" id="st_status" name="st_status">
                        <option>Selecione..</option>
                        <option value="A" <?php if($dados["st_status"] === "A") echo "selected"; ?>>Ativo</option> 
                        <option value="I" <?php if($dados["st_status"] === "I") echo "selected"; ?>>Inativo</option>
                    </select>
                </div>
            </div>
        </div>
        <input type="hidden" value="<?php echo $id_exercicio; ?>" name="id_exercicio" id="id_exercicio">
        <div class="card-footer">
            <button type="button" class="btn btn-primary mr-2" id="salvar">Enviar</button>
            <button type="reset" class="btn btn-secondary" id="cancelar">Cancelar</button>
        </div>
    </form>
    <!--end::Form-->
</div>
<script src="./assets/js/appExercicio/alterar_cadastro.js" type="text/javascript"></script>

