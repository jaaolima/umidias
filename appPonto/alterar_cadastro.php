<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once("../Classes/Ponto.php");

$id_ponto = $_REQUEST['id_ponto'];

$ponto = new Ponto();
$dados = $ponto->buscarDadosPonto($id_ponto);

?>

<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Cadastro de Pontos 
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
        <input type="hidden" name="id_ponto" id="id_ponto" value="<?php echo $id_ponto?>">
            <div class="form-group row">
                <div class="form-group col-md-4">
                    <label>Descrição <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_descricao" name="ds_descricao" value="<?php echo $dados['ds_descricao']?>"/>
                </div>
                <div class="form-group col-md-4">
                    <label >Foto <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="ds_foto" name="ds_foto" value="<?php echo $dados['ds_foto']?>"/>
                </div> 
            </div>
            <div class="form-group row"> 
                <div id="map"></div>
                <div class="form-group col-md-4">
                    <label >Latitude<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_latitude" name="ds_latitude" value="<?php echo $dados['ds_latitude']?>"/>
                </div> 
                <div class="form-group col-md-4">
                    <label >Longitude<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_longitude" name="ds_longitude"value="<?php echo $dados['ds_longitude']?>"/>
                </div> 
            </div>
            <div class="form-group row">    
                <div class="form-group col-md-4">
                    <label >Valor<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="nu_valor" name="nu_valor" value="<?php echo $dados['nu_valor']?>"/>
                </div>
                <div class="form-group col-md-2">
                    <label >Valor Sugerido</label>
                    <input type="text" class="form-control" value="50R$" id="nu_valorsugerido" name="nu_valorsugerido"readonly/>
                </div>
                <div class="form-group col-md-4">
                    <label >Tipo de Mídia <span class="text-danger">*</span></label>
                    <select class="form-control" id="id_midia" name="id_midia">
                        <option>Selecione..</option>
                        <option value="1" <?php if ($dados['id_midia'] == '1') echo "selected" ?>>Teste</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-4">
                    <label >Status<span class="text-danger">*</span></label>
                    <select class="form-control" id="st_status" name="st_status">
                        <option value="">Selecione..</option>
                        <option value="1" <?php if ($dados['st_status'] == '1') echo "selected" ?>>Disponível</option>
                        <option value="2" <?php if ($dados['st_status'] == '2') echo "selected" ?>>Pré-reservado</option>
                        <option value="3" <?php if ($dados['st_status'] == '3') echo "selected" ?>>Reservado</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label>Observações <span class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" id="ds_observacao" name="ds_observacao" value="<?php echo $dados['ds_observacao']?>"></textarea>
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

<script src="./assets/js/appPonto/alterar_cadastro.js" type="text/javascript"></script>