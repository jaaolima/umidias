<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once("../Classes/Categoria.php");
require_once("../Classes/Material.php");
require_once("../Classes/Parceiro.php");
require_once("../Classes/Bairro.php");
require_once("../Classes/Ponto.php");
session_start();
$id_ponto = $_REQUEST['id_ponto'];
$id_perfil = $_SESSION['id_perfil'];
$id_usuario = $_SESSION['id_usuario']; 

$Categoria = new Categoria(); 
$Parceiro = new Parceiro(); 
$Material = new Material();
$Categoria = new Categoria(); 
$Bairro = new Bairro(); 
$ponto = new Ponto();

$dados = $ponto->buscarDadosPonto($id_ponto);
$dadosFoto = $ponto->BuscarFotoPonto($id_ponto); 
$dadosFotoExcluir = $ponto->BuscarFotoPonto($id_ponto);
$id_categoria = $dados["id_midia"];
$id_material = $dados["id_material"]; 
$id_parceiro = $dados["id_parceiro"];
$ds_bairro = $dados["ds_bairro"];
$ds_sentido = $dados["ds_sentido"];

$optionsUF = $Parceiro->listaroptionsUF($dados['id_estado']);
$optionsCidade = $Parceiro->listarOptionsCidade($dados['id_estado'], $dados['id_cidade']);
$optionscategoria = $Categoria->listaroptionscategoria($id_categoria);
$optionsmaterial = $Material->listaroptionsmaterial($id_material);
$optionsparceiro = $Parceiro->listaroptionsparceiro($id_parceiro);
$optionsBairro = $Bairro->listaroptionsBairro($ds_bairro);
$optionsSentido = $Bairro->listaroptionsBairro($ds_sentido);



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
    <form id="form_usuario">
        <input type="hidden" id="id_perfil" name="id_perfil" value="<?php echo $id_perfil; ?>">
        <input type="hidden" name="id_ponto" id="id_ponto" value="<?php echo $id_ponto?>"> 
        <div class="card-body">
            <div class="form-group row">
                <?php if($id_perfil == 3  ) :   ?>
                <div class="form-group col-4">
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
                  <input type="hidden" name="id_parceiro" id="id_parceiro" value="<?php echo $dados['id_parceiro'];?>">
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
                        <?php 
                            echo $optionsCidade;
                        ?>
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
                            echo $optionsSentido; 
                        ?>
                    </select> -->
                </div>
            </div>
            <div class="form-group row">
                <div id="carrossel" style='height:300px;' class="carousel slide col-6" data-ride="carousel">
                    <label >Fotos:</label>
                    <div class="carousel-inner"> 
                        <?php
                            $total = 0;
                            while($fotos = $dadosFotoExcluir->fetch()){
                                $total .= 1;
                                if($total == 1){
                                    echo "<div class='carousel-item active'>
                                            <button class='btn btn-outline-primary bg-white  position-absolute' style='top: 10px;right: 40px;' type='button' id='excluirFoto".$fotos["id_ponto_foto"]."'>Excluir Foto</button>
                                            <img class='d-block w-100 img-fluid' style='height:300px;'  src='".$fotos["ds_foto"]."' >
                                        </div>";
                                        
                                }
                                else{
                                    echo "<div class='carousel-item'>
                                        <button class='btn btn-outline-primary bg-white  position-absolute' style='top: 10px;right: 40px;' type='button' id='excluirFoto".$fotos["id_ponto_foto"]."'>Excluir Foto</button>
                                        <img class='d-block w-100 img-fluid' style='height:300px;'  src='".$fotos["ds_foto"]."' >
                                    </div>";
                                }

                            }
                            
                        ?>
                    </div>
                    <a class="carousel-control-prev" role="button" data-target="#carrossel" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" role="button" data-target="#carrossel" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                    <label>Adicione mais:</label>
                    <input type="file" class="form-control" id="fotos" name="fotos[]" multiple />
                </div>
                <div class="form-group col-6">
                    <p>Clique duas vezes no mapa para marcar a localização do ponto</p>
                    <div id="map"></div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label >Latitude<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="ds_latitude" name="ds_latitude" value="<?php echo $dados['ds_latitude']?> " readonly/>
                        </div> 
                        <div class="form-group col-6">
                            <label >Longitude<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="ds_longitude" name="ds_longitude" value="<?php echo $dados['ds_longitude']?>" readonly/>
                        </div> 
                         
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Descrição <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="ds_descricao" name="ds_descricao" value="<?php echo $dados['ds_descricao']?>"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-4">
                    <label >Tipo de Mídia <span class="text-danger">*</span></label>
                    <select class="form-control" id="id_midia" name="id_midia">
                        <?php 
                            echo $optionscategoria;
                        ?>
                    </select>
                </div>
                <div class="form-group col-4">
                    <label >Valor<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nu_valor" name="nu_valor" value="<?php echo $dados['nu_valor']?>"/>
                </div>
                <div class="form-group col-4" id="tamanho">
                    <label>Tamanho<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_tamanho" name="ds_tamanho" value="<?php echo $dados["ds_tamanho"]; ?>"/>
                    <!-- <select class="form-control" id="ds_tamanho" name="ds_tamanho">
                        <option value="">Selecione...</option>
                        <option value="9,0 x 3,60" <?php if ($dados['ds_tamanho'] === '9,0 x 3,60') echo "selected" ?>>9,0 x 3,60</option> 
                        <option value="6,0 x 3,0" <?php if ($dados['ds_tamanho'] === '6,0 x 3,0') echo "selected" ?>>6,0 x 3,00</option>
                        <option value="outro" <?php if ($dados['ds_tamanho'] === 'outro') echo "selected" ?>>Outro</option>
                    </select> -->
                </div>
                <!-- <div class="form-group col-2" id="outro_tamanho" style="display: none;">
                    <label >Outro tamanho<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_outro_tamanho" name="ds_outro_tamanho"/>
                </div>  -->
            </div>
            <div class="row">
                <div class="form-group col-3" id="material">
                    <label>Material acessível<span class="text-danger">*</span></label>
                    <div class="form-group">
                        <?php 
                            echo $optionsmaterial;
                        ?>
                    </div>
                </div> 
                <div class="form-group col-3" id="periodo">
                    <label>Período<span class="text-danger">*</span></label>
                    <select class="form-control"name="id_periodo" id="id_periodo">
                      <option value="">Selecione...</option>
                      <option value="1" <?php if ($dados['id_periodo'] == '1') echo "selected" ?>>Bisemana</option>
                      <option value="2" <?php if ($dados['id_periodo'] == '2') echo "selected" ?>>Mensal</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <!-- <div class="form-group col-6">
                    <label>Descrição <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_descricao" name="ds_descricao" value="<?php echo $dados['ds_descricao']?>"/>
                </div> -->
                <!-- <div class="form-group col-4">
                    <label>Observações <span class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" id="ds_observacao" name="ds_observacao" value="<?php echo $dados['ds_observacao']?>"></textarea>
                </div>   -->
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
<script type="text/javascript">

$(document).ready(function() {
	    <?php 
           while($excluirFoto = $dadosFoto->fetch()){
                echo "
                $('#excluirFoto".$excluirFoto['id_ponto_foto']."').on('click', function(e){   
                    swal.fire({
                        title: 'Tem certeza?',
                        text: 'Desejar excluir essa Foto?',
                        type: 'warning',
                        showCancelButton: true,
                        cancelButtonColor: '#fd397a',
                        confirmButtonText: 'Sim, posseguir!',
                        cancelButtonText: 'Cancelar'
                    }).then(function(result) {
                        if (result.value) {
                            $.ajax({
                                url: 'appPonto/excluir_foto_ponto.php'
                                , data: {
                                    id_ponto_foto: ".$excluirFoto["id_ponto_foto"].",
                                    id_ponto : ".$id_ponto.",
                                }
                                , type: 'post'
                                , success: function(html) { 
                                    swal.fire({ 
                                        position: 'top-right',
                                        type: 'success',
                                        title: html,
                                        showConfirmButton: true
                                    });
                                    
                                    redirectTo('appPonto/alterar_cadastro.php?id_ponto=".$id_ponto."');
                                }
                                , error: function () {
                                    swal.fire('O seu ponto não pode ficar sem foto. ', 'Adicione uma e depois exclua essa!','error');
                                }
                            });
                            
                        }
                    });
                    		
                });";
            }
        ?>
        
    });
    // The following example creates complex markers to indicate beaches near
// Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
// to the base of the flagpole.
jQuery(document).ready(function() {
	demo3();
});

var demo3 = function() {
	var map = new GMaps({
		div: '#map',
		lat: <?php echo $dados["ds_latitude"] ?>,
		lng: <?php echo $dados["ds_longitude"] ?>,
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
            Geocoding(e.latLng.lat(), e.latLng.lng());
			map.setZoom(5);
			$("#ds_latitude").val(e.latLng.lat());
			$("#ds_longitude").val(e.latLng.lng());
		},
	});

    map.addMarker({
        lat: <?php echo $dados["ds_latitude"]; ?>,
        lng: <?php echo $dados["ds_longitude"]; ?>,
        title: '<?php echo $dados["ds_bairro"]; ?>',
        icon: '../assets/media/localizacao.png',
        details: {
            database_id: 42,
            author: 'HPNeo'
        },
        infoWindow: {
            content: '<span style="color:#000"><?php echo $dados["ds_bairro"]; ?></span>'
        }
    });


}
function Geocoding(lat, long){
    latlgn = lat + "," + long;
    console.log(latlgn);
    $.ajax({
        url: 'https://maps.googleapis.com/maps/api/geocode/json'
        , type: 'get'
        , data: {latlng : latlgn, key: 'AIzaSyB0sGOoifQgDLzR_xYQbaGiiqXRHaJN2tM'}
        , success: function(data) {
            $("#ds_descricao").val(data['results'][0]['formatted_address']);
        }
    });
    
}


//let marcas = [];
function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: { lat: <?php echo $dados["ds_latitude"] ?>, lng: <?php echo $dados["ds_longitude"] ?> },
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