<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once("../Classes/Parceiro.php");

$id_parceiro = $_REQUEST['id_parceiro'];

$parceiro = new Parceiro();
$dados = $parceiro->buscarDadosParceiro($id_parceiro);
$optionsUF = $parceiro->listaroptionsUF($dados['id_estado']);
$optionsCidade = $parceiro->listarOptionsCidade($dados['id_estado'], $dados['id_cidade']);
 
?>

<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Cadastro de Parceiros
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
        <input type="hidden" name="id_parceiro" id="id_parceiro" value="<?php echo $id_parceiro?>">
            <div class="form-group row">
                <div class="form-group col-md-4">
                    <label >Regime Fiscal<span class="text-danger">*</span></label>
                    <select class="form-control" id="id_regime" name="id_regime">  
                    
                        <option value="SN" <?php if($dados['id_regime'] == "SN") echo "selected"; ?>>Simples Nacional</option>
                        <option value="LR" <?php if($dados['id_regime'] == "LR") echo "selected"; ?>>Lucro Real</option>
                        <option value="LP" <?php if($dados['id_regime'] == "LP") echo "selected"; ?>>Lucro Presumido</option>
                        <option value="MEI" <?php if($dados['id_regime'] == "MEI") echo "selected"; ?>>MEI</option> 
                        <option value="CPF" <?php if($dados['id_regime'] == "CPF") echo "selected"; ?>>Pessoa Física</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label>Alíquota padrão</label>
                    <input type="text" class="form-control" id="nu_aliquota" name="nu_aliquota" value="<?php echo $dados['nu_aliquota']; ?>" />
                </div>
            </div>  
            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label>Nome da Empresa <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_nomeempresa" name="ds_nomeempresa" value="<?php echo $dados['ds_nomeempresa']?>"/>
                </div>


                <div class="form-group col-md-3" id="cnpj">
                    <label >CNPJ <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_cnpj" name="nu_cnpj" value="<?php echo $dados['nu_cnpj']?>"/>
                </div>
                <div class="form-group col-md-3" id="cpf">
                    <label >CPF<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_cpf" name="nu_cpf" value="<?php echo $dados['nu_cpf']?>"/>
                </div>

                <?php /* if($dados["id_regime"] != "CPF") : ?>
                <div class="form-group col-md-3 d-none" id="cpf">
                    <label >CPF<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_cpf" name="nu_cpf" value="<?php echo $dados['nu_cpf']?>"/>
                </div>
                <div class="form-group col-md-3 " id="cnpj">
                    <label >CNPJ <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_cnpj" name="nu_cnpj" value="<?php echo $dados['nu_cnpj']?>"/>
                </div>
                <?php endif; */?>
                
            </div>
            <div class="form-group row"> 
                <div class="form-group col-md-6">
                    <label >Logradouro<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_logradouro" name="ds_logradouro" value="<?php echo $dados['ds_logradouro']?>"/>
                </div> 
                <div class="form-group col-md-2">
                    <label >Número<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_numerolog" name="nu_numerolog" value="<?php echo $dados['nu_numerolog']?>"/>
                </div>
                <div class="form-group col-md-2">
                    <label >CEP<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_cep" name="nu_cep" value="<?php echo $dados['nu_cep']?>"/>
                </div>                 
            </div>
            <div class="form-group row">    
                <div class="form-group col-md-4">
                    <label >UF<span class="text-danger">*</span></label>
                    <select class="form-control" id="id_estado" name="id_estado">
                        <option>Selecione..</option>
                        <?php 
							echo $optionsUF;
						?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label >Município<span class="text-danger">*</span></label>
                    <select class="form-control" id="id_cidade" name="id_cidade">
                        <option>Selecione..</option>
                        <?php 
							echo $optionsCidade;
						?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label >Bairro<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_bairro" name="ds_bairro" value="<?php echo $dados['ds_bairro']?>"/>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-4">
                    <label >Responsável<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_responsavel" name="ds_responsavel" value="<?php echo $dados['ds_responsavel']?>"/>
                </div>
                <div class="form-group col-md-4">
                    <label >E-mail<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="ds_email" name="ds_email" value="<?php echo $dados['ds_email']?>"/>
                </div>
                <div class="form-group col-md-3">
                    <label >Telefone<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_telefone" name="nu_telefone" value="<?php echo $dados['nu_telefone']?>"/>
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
<script src="./assets/js/appParceiro/alterar_cadastro.js" type="text/javascript"></script>

