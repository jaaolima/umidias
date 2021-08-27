
<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once("../Classes/Exercicio.php");
$exercicio = new Exercicio();

$id_aluno = $_REQUEST["id_aluno"]; 
$optionsTipo = $exercicio->OptionsTipo(null);

?>
<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Cadastro de Treinos
        </h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form id="form_treino">
        <div class="card-body">
            <div class="form-group row">
                <div class="form-group col-md-3">
                    <label>Tipo<span class="text-danger">*</span></label>
                    <select class="form-control" id="id_tipo" name="id_tipo">
                        <option>Selecione..</option>
                        <?php 
                            echo $optionsTipo;
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label>Área<span class="text-danger">*</span></label>
                    <select class="form-control" id="id_area" name="id_area">
                        <option>Selecione..</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label>Exercício<span class="text-danger">*</span></label>
                    <select class="form-control" id="id_exercicio" name="id_exercicio">
                        <option>Selecione..</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label >Séries <span class="text-danger">*</span></label>
                    <input type="number" max="20" min="1" class="form-control" id="nu_serie" name="nu_serie" />
                </div>
                <div class="form-group col-md-3">
                    <label >Repetições<span class="text-danger">*</span></label>
                    <input type="number" max="100" min="1" class="form-control" id="nu_repeticao" name="nu_repeticao" />
                </div> 
            </div> 
            <div class="form-group row"> 
                <div class="form-group col-md-3">
                    <label >Carga<span class="text-danger">*</span></label>
                    <input type="number" max="1000" min="1" class="form-control" id="nu_carga" name="nu_carga" />
                </div> 
                <div class="form-group col-md-3">
                    <label >Cadência<span class="text-danger">*</span></label>
                    <input type="number"  class="form-control" id="nu_cadencia" name="nu_cadencia" />
                </div> 
                <div class="form-group col-md-3">
                    <label >Intervalo<span class="text-danger">*</span></label>
                    <input type="time" class="form-control" id="nu_intervalo" name="nu_intervalo" value="00:00" />
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
<script src="./assets/js/appTreino/cadastro.js" type="text/javascript"></script>

