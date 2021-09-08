
<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once("../Classes/Usuario.php");
require_once("../Classes/Perfil.php");

$id_usuario = $_REQUEST['id_usuario'];

$usuario = new Usuario();
$exercicio = new Perfil();
$dados = $usuario->buscarDadosUsuario($id_usuario);    
$optionsPerfil = $exercicio->OptionsPerfil($dados["id_perfil"]);

?>
<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Alterar cadastro
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
        <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id_usuario?>">
            <div class="form-group row">
                <div class="form-group col-md-3">
                    <label>Nome <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_nome" name="ds_nome" value="<?php echo $dados['ds_nome']?>"/>
                </div>
                <div class="form-group col-md-3">
                    <label >Email <span class="text-danger">*</span></label>
                    <input type="mail" class="form-control" id="ds_email" name="ds_email" value="<?php echo $dados['ds_email']?>"/>
                </div>
            </div>
            <div class="form-group row"> 
                <div class="form-group col-md-3">
                    <label >Usuario<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_usuario" name="ds_usuario" value="<?php echo $dados['ds_usuario']?>"/>
                </div>  
                <div class="form-group col-md-3">
                    <label >Perfil<span class="text-danger">*</span></label>
                    <select class="form-control" id="id_perfil" name="id_perfil">
                        <?php 
                            echo $optionsPerfil;
                        ?>
                    </select>
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
<script src="./assets/js/appUsuario/alterar_cadastro.js" type="text/javascript"></script>

