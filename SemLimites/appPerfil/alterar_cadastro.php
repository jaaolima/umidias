
<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once("../Classes/Perfil.php");

$id_perfil = $_REQUEST['id_perfil'];

$exercicio = new Perfil();
$dados = $exercicio->buscarDadosPerfil($id_perfil);


?>
<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Cadastro de Perfil
        </h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form id="form_perfil">
        <div class="card-body">
            <div class="form-group row">
                <div class="form-group col-md-3">
                    <label>Perfil<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_perfil" name="ds_perfil" value="<?php echo $dados["ds_perfil"]; ?>" />
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
        <div class="card-footer">
            <button type="button" class="btn btn-primary mr-2" id="salvar">Enviar</button>
            <button type="reset" class="btn btn-secondary" id="cancelar">Cancelar</button>
        </div>
        <input type="hidden" id="id_perfil" name="id_perfil" value="<?php echo $id_perfil; ?>">
    </form>
    <!--end::Form-->
</div>
<script src="./assets/js/appPerfil/alterar_cadastro.js" type="text/javascript"></script> 

