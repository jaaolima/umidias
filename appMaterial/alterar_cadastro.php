<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once("../Classes/Material.php");

$id_material = $_REQUEST['id_material'];

$material = new Material();
$dados = $material->buscarDadosMaterial($id_material);

?>
<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Alterar Cadastro de Materiais
        </h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form id="form_usuario">
        <div class="card-body">
            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label>Nome <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_material" name="ds_material" value="<?php echo $dados['ds_material']?>"/>
                    <label>Valor <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_valor" name="nu_valor" value="<?php echo $dados['nu_valor']?>"/>
                </div>
            </div>       
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary mr-2" id="salvar">Enviar</button>
            <button type="reset" class="btn btn-secondary" id="cancelar">Cancelar</button>
        </div>
        <input type="hidden" class="form-control" id="id_material" name="id_material" value="<?php echo $id_material?>"/>
    </form>
    <!--end::Form-->
</div>
<script src="./assets/js/appMaterial/alterar_cadastro.js" type="text/javascript"></script>

