
<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once("../Classes/Aluno.php");

$id_aluno = $_REQUEST['id_aluno'];

$aluno = new Aluno();
$dados = $aluno->buscarDadosAluno($id_aluno);


?>
<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Cadastro de Tipo
        </h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form id="form_aluno">
        <div class="card-body">
            <div class="form-group row">
                <div class="form-group col-md-3">
                    <label>Tipo<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_aluno" name="ds_aluno" value="<?php echo $dados["ds_aluno"]; ?>" />
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary mr-2" id="salvar">Enviar</button>
            <button type="reset" class="btn btn-secondary" id="cancelar">Cancelar</button>
        </div>
        <input type="hidden" id="id_aluno" name="id_aluno" value="<?php echo $id_aluno; ?>">
    </form>
    <!--end::Form-->
</div>
<script src="./assets/js/appAluno/alterar_cadastro.js" type="text/javascript"></script> 

