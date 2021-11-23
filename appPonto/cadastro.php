<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once("../Classes/Categoria.php");
require_once("../Classes/Material.php");
require_once("../Classes/Parceiro.php");
require_once("../Classes/Bisemana.php");
session_start();

$Categoria = new Categoria(); 
$Parceiro = new Parceiro(); 
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
$optionsbisemana = $Bisemana->listarTodasBisemanaPonto();
?>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<!--<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9HytuCsyClhgU7vNNo8QHYsGtWiVPBuw&callback=initMap&libraries=&v=weekly"
      defer
    ></script>-->
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
                    <input type="text" class="form-control" id="ds_bairro" name="ds_bairro"/>
                </div>
                <div class="form-group col-3">
                    <label>Sentido <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_sentido" name="ds_sentido" placeholder="Ex. Ceilândia"/>
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
                    <div class="form-group ">
                        <p>Clique duas vezes no mapa para marcar a localização do ponto<span class="text-danger">*</span></p>
                        <div id="map"></div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label >Latitude<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="ds_latitude" name="ds_latitude" readonly/>
                        </div> 
                        <div class="form-group col-6">
                            <label >Longitude<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="ds_longitude" name="ds_longitude" readonly/>
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
                <div class="form-group col-6">
                    <label>Descrição <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_descricao" name="ds_descricao"/>
                </div>
                <div class="form-group col-4">
                    <label>Observações <span class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" id="ds_observacao" name="ds_observacao"></textarea>
                </div>
            </div>   
            <div class="form-group row">
                <div class="col-6">
                    <label>Bisemanas disponíveis<span class="text-danger">*</span></label>
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
                                            <td><input name='bisemana[]' id='".$dadosBisemana["id_bisemana"]."' value='".$dadosBisemana['id_bisemana']."' type='checkbox' checked></td>
                                        </tr>";
                                }
                            ?>
                        </tbody>
                    </table>
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

<script src="./assets/js/appPonto/cadastro.js" type="text/javascript"></script>
<script>
    // The following example creates complex markers to indicate beaches near
// Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
// to the base of the flagpole.
jQuery(document).ready(function() {
	if('geolocation' in navigator){
        navigator.geolocation.getCurrentPosition(function(position){
            console.log(position);
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            demo3(latitude, longitude);
        })
    }
    else{
        x.innerHTML="Seu browser não suporta Geolocalização.";
        var latitude = -15.7750656;
        var longitude = -48.0773014;
        demo3(latitude, longitude);
    }
});
var demo3 = function(latitude, longitude) {
	var map = new GMaps({
		div: '#map',
        lat: latitude,
        lng: longitude,
        zoom: 14,
		dblclick: function(e) {
			map.removeMarkers();
			map.addMarker({
				lat: e.latLng.lat(),
				lng: e.latLng.lng(),
				title: 'Seu ponto',
                icon: '../assets/media/localizacao.png',
				infoWindow: {
					content: '<span style="color:#000">Aqui está o seu ponto!</span>'
				}
			});	
			map.setZoom(5);
			$("#ds_latitude").val(e.latLng.lat());
			$("#ds_longitude").val(e.latLng.lng());
		},
	}); 

}



//let marcas = [];
function initMap() {
  
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 15,
    center: { lat: -15.849511, lng: -48.022440 },
  });
  
  google.maps.event.addListener(map, 'dblclick', function(event) {
    clearMarkers();
	//placeMarker(event.latLng, map);
	addMarker(event.latLng);
 });
  //setMarkers(map);
  console.log(map);
}

function setMapOnAll(map) {
  for (let i = 0; i < marcas.length; i++) {
    marcas[i].setMap(map);
  }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setMapOnAll(null);
}

// Data for the markers consisting of a name, a LatLng and a zIndex for the
// order in which these markers should display on top of each other.
/*const beaches = [
  ["Bondi Beach", -33.890542, 151.274856, 4],
  ["Coogee Beach", -33.923036, 151.259052, 5],
  ["Cronulla Beach", -34.028249, 151.157507, 3],
  ["Manly Beach", -33.80010128657071, 151.28747820854187, 2],
  ["Maroubra Beach", -33.950198, 151.259302, 1],
];*/

function setMarkers(map) {
  // Adds markers to the map.
  // Marker sizes are expressed as a Size of X,Y where the origin of the image
  // (0,0) is located in the top left of the image.
  // Origins, anchor positions and coordinates of the marker increase in the X
  // direction to the right and in the Y direction down.
  const image = {
    url:
      "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
    // This marker is 20 pixels wide by 32 pixels high.
    size: new google.maps.Size(20, 32),
    // The origin for this image is (0, 0).
    origin: new google.maps.Point(0, 0),
    // The anchor for this image is the base of the flagpole at (0, 32).
    anchor: new google.maps.Point(0, 32),
  };
  // Shapes define the clickable region of the icon. The type defines an HTML
  // <area> element 'poly' which traces out a polygon as a series of X,Y points.
  // The final coordinate closes the poly by connecting to the first coordinate.
  const shape = {
    coords: [1, 1, 1, 20, 18, 20, 18, 1],
    type: "poly",
  };

  /*for (let i = 0; i < beaches.length; i++) {
    const beach = beaches[i];
    new google.maps.Marker({
      position: { lat: beach[1], lng: beach[2] },
      map,
      icon: image,
      shape: shape,
      title: beach[0],
      zIndex: beach[3],
    });
  }*/
}

function addMarker(location) {
  const marker = new google.maps.Marker({
    position: location,
    map: map,
  });
  marcas.push(marker);
}
function placeMarker(location, map) {
	
	var marker = new google.maps.Marker({
		position: location, 
		map: map,
		title: 'Aqui está localizado o seu ponto :'+location.lat()+' '+location.lng()
	});
	marker.setMap(map);
  	map.setCenter(location);
	$("#ds_latitude").val(location.lat());
	$("#ds_longitude").val(location.lng());
	console.log('Latitude: '+location.lat()+' Longitude: '+location.lng());
}


</script>