<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once("../Classes/Categoria.php");

$id_midia = $_REQUEST['id_midia'];

$categoria = new Categoria();
$dados = $categoria->buscarDadosCategoria($id_midia);

?>
<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Alterar Cadastro de Categorias
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
        <input type="hidden" name="id_categoria" id="id_categoria" value="<?php echo $id_midia?>">
            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label>Nome <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_tipo" name="ds_tipo" value="<?php echo $dados['ds_tipo']?>"/>
                </div>
            </div>       
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary mr-2" id="salvar">Enviar</button>
            <button type="reset" class="btn btn-secondary" id="cancelar">Cancelar</button>
        </div>
        <input type="hidden" class="form-control" id="id_midia" name="id_midia" value="<?php echo $id_midia?>"/>
    </form>
    <!--end::Form-->
</div>
<script src="./assets/js/appCategoria/alterar_cadastro.js" type="text/javascript"></script>

