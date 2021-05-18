
<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Cadastro de Bisemanas
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
                    <label>Bisemana<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_bisemana" name="ds_bisemana" />
                </div>
                
            </div> 
            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label>Data Inicial<span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="dt_inicial" name="dt_inicial" />
                </div>  
                <div class="form-group col-md-6">
                    <label>Data Final<span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="dt_final" name="dt_final" />
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
<script src="./assets/js/appBisemana/cadastro.js" type="text/javascript"></script>

