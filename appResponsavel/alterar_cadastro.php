<?php 
    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
    require_once("../Classes/Responsavel.php");

    $id_responsavel = $_REQUEST['id_responsavel'];

    $responsavel = new Responsavel();
    $dados = $responsavel->buscarDadosResponsavel($id_responsavel);

?>
<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Alterar Cadastro de Responsaveis
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
        <input type="hidden" name="id_responsavel" id="id_responsavel" value="<?php echo $id_responsavel?>">
            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label>Descrição <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_descricao" name="ds_descricao" value="<?php echo $dados['ds_descricao']?>"/>
                </div>
            </div>       
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary mr-2" id="salvar">Enviar</button>
            <button type="reset" class="btn btn-secondary" id="cancelar">Cancelar</button>
        </div>
    </form>
    <!--end::Form-->
</div>
<script src="./assets/js/appResponsavel/alterar_cadastro.js" type="text/javascript"></script>

