
<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once("../Classes/Aluno.php");

$id_usuario = $_REQUEST['id_usuario'];

$usuario = new Aluno();
$dados = $usuario->buscarDadosAluno($id_usuario);


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
    <form id="form_usuario">
    <div class="card-body"> 
            <div class="form-group row">
                <div class="form-group col-md-3">
                    <label>Usuário<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_usuario" name="ds_usuario" value="<?php echo $dados["ds_usuario"] ?>"/>
                </div>
                <div class="form-group col-md-3">
                    <label>Nome<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_nome" name="ds_nome" value="<?php echo $dados["ds_nome"] ?>"/>
                </div>
                <div class="form-group col-md-3">
                    <label>CPF<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_cpf" name="nu_cpf"  value="<?php echo $dados["nu_cpf"] ?>"/>
                </div>
                <div class="form-group col-md-3">
                    <label>E-mail<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="ds_email" name="ds_email" value="<?php echo $dados["ds_email"] ?>"/>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-3">
                    <label>Data de nascimento<span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento" value="<?php echo $dados["dt_nascimento"] ?>"/>
                </div>
                <div class="form-group col-md-3">
                    <label>Sexo<span class="text-danger">*</span></label>
                    <div class="col-9 col-form-label">
                        <div class="radio-inline">
                            <label class="radio">
                                <input type="radio" id="st_sexo_m" value="M" name="st_sexo" <?php echo ($dados["st_sexo"] === "M" ? "checked" : ""); ?>/>
                                <span></span>
                                Masculino
                            </label>
                            <label class="radio">
                                <input type="radio" id="st_sexo_f" value="F" name="st_sexo" <?php echo ($dados["st_sexo"] === "F" ? "checked" : ""); ?>/>
                                <span></span>
                                Feminino
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label>Endereço<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_endereco" name="ds_endereco" value="<?php echo $dados["ds_endereco"] ?>"/>
                </div>
                <div class="form-group col-md-3">
                    <label>CEP<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_cep" name="nu_cep" value="<?php echo $dados["nu_cep"] ?>"/>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary mr-2" id="salvar">Enviar</button>
            <button type="reset" class="btn btn-secondary" id="cancelar">Cancelar</button>
        </div>
        <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario; ?>">
    </form>
    <!--end::Form-->
</div>
<script src="./assets/js/appAluno/alterar_cadastro.js" type="text/javascript"></script> 

