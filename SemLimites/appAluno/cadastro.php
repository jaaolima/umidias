

<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Cadastro de Aluno
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
                    <label>Nome<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_usuario" name="ds_usuario" />
                </div>
                <div class="form-group col-md-3">
                    <label>CPF<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_cpf" name="nu_cpf" />
                </div>
                <div class="form-group col-md-3">
                    <label>E-mail<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_email" name="ds_email" />
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-3">
                    <label>Data de nascimento<span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento" />
                </div>
                <div class="form-group col-md-3">
                    <label>Sexo<span class="text-danger">*</span></label>
                    <input type="radio" class="form-control" id="st_sexo_m" name="st_sexo" />
                    <input type="radio" class="form-control" id="st_sexo_f" name="st_sexo" />
                </div>
                <div class="form-group col-md-3">
                    <label>Endereço<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_endereco" name="ds_endereco" />
                </div>
                <div class="form-group col-md-3">
                    <label>CEP<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_cep" name="nu_cep" />
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
<script src="./assets/js/appAluno/cadastro.js" type="text/javascript"></script> 

