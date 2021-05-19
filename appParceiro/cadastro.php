<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
    require_once("../Classes/Parceiro.php");

    $parceiro = new Parceiro();
  

	$optionsUF = $parceiro->listaroptionsUF(null);
	

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
            <div class="form-group row">
                <div class="form-group col-md-4">
                    <label >Regime Fiscal<span class="text-danger">*</span></label>
                    <select class="form-control" id="id_regime" name="id_regime">  
                        <option value="">Selecione..</option>
                        <option value="SN">Simples Nacional</option>
                        <option value="LR">Lucro Real</option>
                        <option value="LP">Lucro Presumido</option>
                        <option value="MEI">MEI</option>
                        <option value="CPF">CPF</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label>Alíquota padrão</label>
                    <input type="text" class="form-control" id="nu_aliquota" name="nu_aliquota" />
                </div>
            </div>      
            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label>Nome da Empresa <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_nomeempresa" name="ds_nomeempresa" />
                </div>
                <div class="form-group col-md-3">
                    <label >CNPJ <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_cnpj" name="nu_cnpj" />
                </div>
                <div class="form-group col-md-3">
                    <label >CPF<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_cpf" name="nu_cpf" />
                </div>
            </div>
            
            <div class="form-group row"> 
                <div class="form-group col-md-6">
                    <label >Logradouro<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_logradouro" name="ds_logradouro" />
                </div> 
                <div class="form-group col-md-2">
                    <label >Número<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_numerolog" name="nu_numerolog" />
                </div>
                <div class="form-group col-md-2">
                    <label >CEP<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_cep" name="nu_cep" />
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
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label >Bairro<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_bairro" name="ds_bairro" />
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-4">
                    <label >Responsável<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_responsavel" name="ds_responsavel" />
                </div>
                <div class="form-group col-md-4">
                    <label >E-mail<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="ds_email" name="ds_email" />
                </div>
                <div class="form-group col-md-3">
                    <label >Telefone<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_telefone" name="nu_telefone" />
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

<script src="./assets/js/appParceiro/cadastro.js" type="text/javascript"></script>

