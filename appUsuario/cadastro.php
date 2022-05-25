

<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Cadastro de Usuários
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
                    <label>Nome <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_nome" name="ds_nome" />
                </div>
                <div class="form-group col-md-3">
                    <label >Email <span class="text-danger">*</span></label>
                    <input type="mail" class="form-control" id="ds_email" name="ds_email" />
                </div>
                
            </div>  
            <div class="form-group row"> 
                <div class="form-group col-md-3">
                    <label >Usuario<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_usuario" name="ds_usuario" />
                </div> 
                <div class="form-group col-md-3">
                    <label >Perfil<span class="text-danger">*</span></label>
                    <select class="form-control" id="id_perfil" name="id_perfil">
                        <option>Selecione..</option>
                        <option value="3">Administrador</option>
                        <option value="1">Cliente</option>
                        <option value="4">Agência</option>
                    </select>
                </div>
            </div>
            <div id="cliente" style="display:none;">
                <div class="form-group row">
                    <div class="form-group col-md-3">
                        <label >CPF<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nu_cpf" name="nu_cpf" />
                    </div> 
                    <div class="form-group col-md-3">
                        <label >Endereço<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="ds_endereco" name="ds_endereco" />
                    </div>  
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-3">
                        <label >Senha<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nu_senha" name="nu_senha" />
                    </div>  
                    <div class="form-group col-md-3">
                        <label >Confirmar senha<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nu_senhaconfirmada" name="nu_senhaconfirmada" />
                    </div>  
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
<script src="./assets/js/appUsuario/cadastro.js" type="text/javascript"></script>

