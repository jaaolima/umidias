<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL); 
require_once("../Classes/Categoria.php");
require_once("../Classes/Material.php");
require_once("../Classes/Parceiro.php");
require_once("../Classes/Bairro.php");
require_once("../Classes/Bisemana.php");
session_start();

$Categoria = new Categoria(); 
$Parceiro = new Parceiro(); 
$Bairro = new Bairro(); 
$Material = new Material(); 
$Bisemana = new Bisemana(); 

$id_perfil = $_SESSION['id_perfil'];

if($id_perfil == 2){
    $id_midia = $_GET["id_midia"];
    $id_parceiro = $_SESSION['id_parceiro'];
}

$optionsUF = $Parceiro->listaroptionsUF(null); 
$optionscategoria = $Categoria->listaroptionscategoria(null);
$optionsmaterial = $Material->listaroptionsmaterial(null);
$optionsparceiro = $Parceiro->listaroptionsparceiro(null);
$optionsBairro = $Bairro->listaroptionsBairro(null);
$optionsbisemana = $Bisemana->listarTodasBisemanaPonto();
$optionsMes = $Bisemana->listarTodosMesPonto();
?>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<style>
    #map {
        width: 100%;
        height: 300px;
    }
    
</style>
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
    
    <form id="form_usuario" enctype="multipart/form-data">
        <input type="hidden" id="id_perfil" name="id_perfil" value="<?php echo $id_perfil; ?>">
        <div class="card-body">
            <div class="form-group row">
                <?php if($id_perfil == 3  ) :   ?> 
                <div class="form-group col-6">
                    <label>Parceiro <span class="text-danger">*</span></label>
                    <select class="form-control" id="id_parceiro" name="id_parceiro">
                        <option value="">Selecione...</option>
                        <?php 
                            echo $optionsparceiro;
                        ?>
                    </select>
                </div> 
                <?php endif ; ?>
                <?php if($id_perfil == 2  ) :   ?>
                  <input type="hidden" name="id_parceiro" id="id_parceiro" value="<?php echo $id_parceiro;?>">
                <?php endif ; ?>
            </div>
            <div class="form-group row">
                <div class="form-group col-3">
                    <label>UF<span class="text-danger">*</span></label>
                    <select class="form-control" id="id_estado" name="id_estado">
                        <option value="">Selecione...</option>
                        <?php 
                            echo $optionsUF; 
                        ?>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label>Município<span class="text-danger">*</span></label>
                    <select class="form-control" id="id_cidade" name="id_cidade">
                        <option value="">Selecione...</option>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label>Bairro <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_bairro" name="ds_bairro" />
                    <!-- <select class="form-control" id="ds_bairro" name="ds_bairro"> 
                        <option value="">Selecione...</option>
                        <?php
                            echo $optionsBairro; 
                        ?>
                    </select> -->
                </div>
                <div class="form-group col-3">
                    <label>Sentido <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_sentido" name="ds_sentido" />
                    <!-- <select class="form-control" id="ds_sentido" name="ds_sentido">
                        <option value="">Selecione...</option>
                        <?php
                            echo $optionsBairro; 
                        ?>
                    </select> -->
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-6">
                    <label>Selecione os arquivos da Foto</label>
                    <input type="file" class="form-control" id="fotos" name="fotos[]" multiple />  
                </div>
            </div>  
            <div class="form-group row">
                <!--<div class="form-group col-4">
                    <label class="">Fotos da Mídia<span class="text-danger">*</span></label>
                    <div class="dropzone dropzone-default dropzone-primary" id="dropzone" style="height: 90%;">
                        <div class="dropzone-msg dz-message needsclick">
                            <h3 class="dropzone-msg-title">Escolha boas fotos</h3>
                            <span class="dropzone-msg-desc">Faça upload de até 5 arquivos</span>
                        </div>
                        <div class="fallback">
                            <input name="foto[]" id="foto" type="file" multiple />
                        </div>
                    </div>
                </div>-->
                <div class="form-group col-6"> 
                    <div class="form-group">
                        <p>Clique duas vezes no mapa para marcar a localização do ponto<span class="text-danger">*</span></p>
                        <div id="map"></div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label >Latitude<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="ds_latitude" name="ds_latitude" />
                        </div> 
                        <div class="form-group col-6">
                            <label >Longitude<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="ds_longitude" name="ds_longitude" />
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Descrição <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="ds_descricao" name="ds_descricao"/>
                        </div> 
                    </div>
                </div>
            </div>
 
            <div class="form-group row">
                <?php if($id_perfil == 3) :  ?>
                <div class="form-group col-4">
                    <label >Tipo de Mídia <span class="text-danger">*</span></label>
                    <select class="form-control" id="id_midia" name="id_midia">
                        <option>Selecione..</option>
                        <?php 
                            echo $optionscategoria;
                        ?>
                    </select>
                </div>
                <?php endif; ?>
                <?php if($id_perfil == 2) :  ?>
                <input type="hidden" id="id_midia" name="id_midia" value="<?php echo $id_midia ?>">
                <?php endif; ?>
                <div class="form-group col-4">
                    <label >Valor<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_valor" name="nu_valor"/>
                </div>
                <div class="form-group col-4" id="tamanho">
                    <label>Tamanho<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_tamanho" name="ds_tamanho"/>
                    <!-- <select class="form-control" id="ds_tamanho" name="ds_tamanho">
                        <option value="">Selecione...</option>
                        <option value="9,0 x 3,60">9,0 x 3,60</option> 
                        <option value="6,0 x 3,0">6,0 x 3,00</option>
                        <option value="outro">Outro</option>
                    </select> -->
                </div> 
                <!-- <div class="form-group col-2" id="outro_tamanho" style="display: none;">
                    <label >Outro tamanho<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_outro_tamanho" name="ds_outro_tamanho"/>
                </div>  -->
            </div>
            <div class="row">
                <div class="form-group col-4" id="material">
                    <label>Material acessível<span class="text-danger">*</span></label>
                    <div class="form-group">
                        <?php 
                            echo $optionsmaterial;
                        ?>
                    </div>
                </div> 
                <div class="form-group col-4" id="periodo">
                    <label>Período<span class="text-danger">*</span></label>
                    <select class="form-control"name="id_periodo" id="id_periodo">
                      <option value="">Selecione...</option>
                      <option value="1">Bisemana</option>
                      <option value="2">Mensal</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <!-- <div class="form-group col-6">
                    <label>Descrição <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_descricao" name="ds_descricao"/>
                </div> -->
                <!-- <div class="form-group col-4">
                    <label>Observações <span class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" id="ds_observacao" name="ds_observacao"></textarea>
                </div> -->
            </div> 
            <?php if($id_perfil == 3) : ?>
                <div class="form-group row" id="bisemanas_indisponiveis" style="display:none;">
                    <div class="col-6">
                        <label>Bisemanas Indiponíveis (Opcional)</label>
                        <table  class="table table-hover" id="table_bisemana">
                            <thead>
                                <tr>
                                    <th>ID bisemanas</th>
                                    <th>Data Inicial</th>
                                    <th>Data Final</th>
                                    <th>Bisemanas Disponiveis</th>
                                    <th>Selecione</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while ($dadosBisemana = $optionsbisemana->fetch())
                                    {

                                        $dt_inicial = date('d/m/Y', strtotime($dadosBisemana["dt_inicial"]));
                                        $dt_final = date('d/m/Y', strtotime($dadosBisemana["dt_final"]));


                                        echo "<tr>
                                                <td>".$dadosBisemana['id_bisemana']."</td>
                                                <td>".$dt_inicial."</td>
                                                <td>".$dt_final."</td>
                                                <td>".$dadosBisemana['ds_bisemana']."</td>
                                                <td><input name='bisemana[]' id='".$dadosBisemana["id_bisemana"]."' value='".$dadosBisemana['id_bisemana']."' type='checkbox'></td>
                                            </tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                <div class="form-group row" id="meses_indisponiveis" style="display:none;">
                    <div class="col-6">
                        <label>Meses Indiponíveis (Opcional)</label>
                        <table  class="table table-hover" id="table_mes">
                            <thead>
                                <tr>
                                    <th>ID mes</th>
                                    <th>Data Inicial</th>
                                    <th>Data Final</th>
                                    <th>Meses Disponiveis</th>
                                    <th>Selecione</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while ($dadosMes = $optionsMes->fetch())
                                    {

                                        $dt_inicial = date('d/m/Y', strtotime($dadosMes["dt_inicial"]));
                                        $dt_final = date('d/m/Y', strtotime($dadosMes["dt_final"]));


                                        echo "<tr>
                                                <td>".$dadosMes['id_mes']."</td>
                                                <td>".$dt_inicial."</td>
                                                <td>".$dt_final."</td>
                                                <td>".$dadosMes['ds_mes']."</td>
                                                <td><input name='mes[]' id='".$dadosMes["id_mes"]."' value='".$dadosMes['id_mes']."' type='checkbox'></td>
                                            </tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            <?php endif; ?>
            <?php if($id_perfil == 2) : ?>
                <?php if($id_midia == 1) : ?>
                    <div class="form-group row" id="bisemanas_indisponiveis" style="display:none;">
                        <div class="col-6">
                            <label>Bisemanas Indiponíveis (Opcional)</label>
                            <table  class="table table-hover" id="table_bisemana">
                                <thead>
                                    <tr>
                                        <th>ID bisemanas</th>
                                        <th>Data Inicial</th>
                                        <th>Data Final</th>
                                        <th>Bisemanas Disponiveis</th>
                                        <th>Selecione</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($dadosBisemana = $optionsbisemana->fetch())
                                        {

                                            $dt_inicial = date('d/m/Y', strtotime($dadosBisemana["dt_inicial"]));
                                            $dt_final = date('d/m/Y', strtotime($dadosBisemana["dt_final"]));


                                            echo "<tr>
                                                    <td>".$dadosBisemana['id_bisemana']."</td>
                                                    <td>".$dt_inicial."</td>
                                                    <td>".$dt_final."</td>
                                                    <td>".$dadosBisemana['ds_bisemana']."</td>
                                                    <td><input name='bisemana[]' id='".$dadosBisemana["id_bisemana"]."' value='".$dadosBisemana['id_bisemana']."' type='checkbox'></td>
                                                </tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                    <div class="form-group row" id="meses_indisponiveis" style="display:none;">
                        <div class="col-6">
                            <label>Meses Indiponíveis (Opcional)</label>
                            <table  class="table table-hover" id="table_mes">
                                <thead>
                                    <tr>
                                        <th>ID mes</th>
                                        <th>Data Inicial</th>
                                        <th>Data Final</th>
                                        <th>Meses Disponiveis</th>
                                        <th>Selecione</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($dadosMes = $optionsMes->fetch())
                                        {

                                            $dt_inicial = date('d/m/Y', strtotime($dadosMes["dt_inicial"]));
                                            $dt_final = date('d/m/Y', strtotime($dadosMes["dt_final"]));


                                            echo "<tr>
                                                    <td>".$dadosMes['id_mes']."</td>
                                                    <td>".$dt_inicial."</td>
                                                    <td>".$dt_final."</td>
                                                    <td>".$dadosMes['ds_mes']."</td>
                                                    <td><input name='mes[]' id='".$dadosMes["id_mes"]."' value='".$dadosMes['id_mes']."' type='checkbox'></td>
                                                </tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                <?php endif; ?>
                <?php if($id_midia == 2) : ?>
                    <div class="form-group row" id="meses_indisponiveis">
                        <div class="col-6">
                            <label>Meses Indiponíveis (Opcional)</label>
                            <table  class="table table-hover" id="table_mes">
                                <thead>
                                    <tr>
                                        <th>ID mes</th>
                                        <th>Data Inicial</th>
                                        <th>Data Final</th>
                                        <th>Meses Disponiveis</th>
                                        <th>Selecione</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($dadosMes = $optionsMes->fetch())
                                        {

                                            $dt_inicial = date('d/m/Y', strtotime($dadosMes["dt_inicial"]));
                                            $dt_final = date('d/m/Y', strtotime($dadosMes["dt_final"]));


                                            echo "<tr>
                                                    <td>".$dadosMes['id_mes']."</td>
                                                    <td>".$dt_inicial."</td>
                                                    <td>".$dt_final."</td>
                                                    <td>".$dadosMes['ds_mes']."</td>
                                                    <td><input name='mes[]' id='".$dadosMes["id_mes"]."' value='".$dadosMes['id_mes']."' type='checkbox'></td>
                                                </tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary mr-2" id="salvar">Enviar</button>
            <button type="reset" class="btn btn-secondary" id="cancelar">Cancelar</button>
        </div>
    </form>
    <!--end::Form-->
</div>
<script src="./assets/js/appPonto/cadastro.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0sGOoifQgDLzR_xYQbaGiiqXRHaJN2tM&v=beta&callback=initMap"></script>
<script>
map = new google.maps.Map(document.getElementById('map'), {
  center: {lat: -15.7750656, lng: -48.0773014},
  zoom: 16,
  heading: 320,
  tilt: 47.5
  mapId: 'MAP_ID'
});
// jQuery(document).ready(function() {
//     demo3(-15.7750656, -48.0773014);
// });
// var demo3 = function(latitude, longitude) { 
// 	var map = new GMaps({
// 		div: '#map',
//         lat: latitude,
//         lng: longitude,
//         zoom: 12,
// 		dblclick: function(e) {
// 			map.removeMarkers();
// 			map.addMarker({
// 				lat: e.latLng.lat(),
// 				lng: e.latLng.lng(),
// 				title: 'Seu ponto',
//                 icon: '../assets/media/localizacao.png',
// 				infoWindow: {
// 					content: '<span style="color:#000">Aqui está o seu ponto!</span>'
// 				}

// 			});	

//             // Geocoding(e.latLng.lat(), e.latLng.lng());
// 			map.setZoom(5);
// 			$("#ds_latitude").val(e.latLng.lat());
// 			$("#ds_longitude").val(e.latLng.lng());
// 		},
// 	}); 

// }


</script>