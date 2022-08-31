
<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Cadastro de Cupons
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
                <div class="form-group col-md-6">
                    <label>Código<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_codigo" name="ds_codigo" />
                </div>
                <div class="form-group col-md-3">
                    <label>Porcentagem<span class="text-danger">*</span></label>
                    <input type="number" min="1" max="100" class="form-control" id="nu_porcentagem" name="nu_porcentagem" />
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
<script src="./assets/js/appCupom/cadastro.js" type="text/javascript"></script>

