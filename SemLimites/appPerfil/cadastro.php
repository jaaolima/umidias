

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
                    <input type="text" class="form-control" id="ds_perfil" name="ds_perfil" />
                </div>
                <div class="form-group col-md-3">
                    <label>Status<span class="text-danger">*</span></label>
                    <select class="form-control" id="st_status" name="st_status">
                        <option>Selecione..</option>
                        <option value="A">Ativo</option>
                        <option value="I">Inativo</option>
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
<script src="./assets/js/appPerfil/cadastro.js" type="text/javascript"></script> 

