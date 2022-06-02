<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once("../Classes/Grafica.php");

$id_grafica = $_REQUEST['id_grafica'];

$grafica = new Grafica();
$dados = $grafica->buscarDadosGrafica($id_grafica);

?>
<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Alterar Cadastro de Gráficas
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
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label>Gráfica<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="ds_grafica" name="ds_grafica" value="<?php echo $dados['ds_grafica']?>"/>
                    </div>
                    <div class="col-md-6">
                        <label>Email<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="ds_email" name="ds_email" value="<?php echo $dados['ds_email']?>"/>
                    </div>
                </div>
            </div>       
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary mr-2" id="salvar">Enviar</button>
            <button type="reset" class="btn btn-secondary" id="cancelar">Cancelar</button>
        </div>
        <input type="hidden" class="form-control" id="id_grafica" name="id_grafica" value="<?php echo $id_grafica?>"/>
    </form>
    <!--end::Form-->
</div>
<script src="./assets/js/appGrafica/alterar_cadastro.js" type="text/javascript"></script>

