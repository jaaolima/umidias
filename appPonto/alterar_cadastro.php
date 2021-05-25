<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once("../Classes/Categoria.php");
require_once("../Classes/Material.php");
require_once("../Classes/Parceiro.php");
require_once("../Classes/Ponto.php");
session_start();
$id_ponto = $_REQUEST['id_ponto'];

$Categoria = new Categoria(); 
$Parceiro = new Parceiro(); 
$Material = new Material();
$Categoria = new Categoria(); 
$ponto = new Ponto();

$dados = $ponto->buscarDadosPonto($id_ponto);
$dadosFoto = $ponto->BuscarFotoPonto($id_ponto);
$id_categoria = $dados["id_midia"];
$id_material = $dados["id_material"];
$id_parceiro = $dados["id_parceiro"];


$optionscategoria = $Categoria->listaroptionscategoria($id_categoria);
$optionsmaterial = $Material->listaroptionsmaterial($id_material);
$optionsparceiro = $Parceiro->listaroptionsparceiro($id_parceiro);



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
        <div class="card-body">
        <input type="hidden" name="id_ponto" id="id_ponto" value="<?php echo $id_ponto?>">
            <div class="form-group row">
                <?php if($_SESSION['id_perfil'] == 3  ) :   ?>
                <div class="form-group col-md-3">
                    <label>Parceiro <span class="text-danger">*</span></label>
                    <select class="form-control" id="id_parceiro" name="id_parceiro">
                        <option value="">Selecione...</option>
                        <?php 
                            echo $optionsparceiro;
                        ?>
                    </select>
                </div> 
                <?php endif ; ?>
                <?php if($_SESSION['id_perfil'] == 2  ) :   ?>
                  <input type="text" name="id_parceiro" id="id_parceiro" value="<?php echo $id_parceiro;?>">
                <?php endif ; ?>
                <div class="form-group col-md-3">
                    <label>Local <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_local" name="ds_local" value="<?php echo $dados['ds_local']?>"/>
                </div>
                <div class="form-group col-md-3">
                    <label>Descrição <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_descricao" name="ds_descricao" value="<?php echo $dados['ds_descricao']?>"/>
                </div>
                
            </div>
            <div class="form-group row">
                <div id="carrossel" style='max-height:300px;' class="carousel slide col-md-4" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                            while($fotos = $dadosFoto->fetch()){
                                if($dadosFoto['ds_foto'](0) == $dadosFoto["ds_foto"]){
                                    echo "<div class='carousel-item active'>
                                            <img class='d-block w-100' style='max-height:300px;'  src='".$fotos["ds_foto"]."' >
                                        </div>";
                                }else{
                                    echo "<div class='carousel-item'>
                                            <img class='d-block w-100' style='max-height:300px;'  src='".$fotos["ds_foto"]."' >
                                        </div>";
                                }
                                    
                            }
                            
                        ?>
                    </div>
                    <a class="carousel-control-prev" role="button" id="carrossel" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" role="button" id="carrossel" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
                <div class="form-group col-md-4">
                    <p>Clique duas vezes no mapa para marcar a localização do ponto</p>
                    <div id="map"></div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label >Latitude<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="ds_latitude" name="ds_latitude" value="<?php echo $dados['ds_latitude']?> " readonly/>
                        </div> 
                        <div class="form-group col-md-6">
                            <label >Longitude<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="ds_longitude" name="ds_longitude" value="<?php echo $dados['ds_longitude']?>" readonly/>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-2">
                    <label >Tipo de Mídia <span class="text-danger">*</span></label>
                    <select class="form-control" id="id_midia" name="id_midia">
                        <?php 
                            echo $optionscategoria;
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label >Valor<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="nu_valor" name="nu_valor" value="<?php echo $dados['nu_valor']?>"/>
                </div>
                <div class="form-group col-md-2" id="tamanho">
                    <label>Tamanho<span class="text-danger">*</span></label>
                    <select class="form-control" id="ds_tamanho" name="ds_tamanho">
                        <option value="">Selecione...</option>
                        <option value="9,0 x 3,60" <?php if ($dados['ds_tamanho'] === '9,0 x 3,60') echo "selected" ?>>9,0 x 3,60</option> 
                        <option value="6,0 x 3,0" <?php if ($dados['ds_tamanho'] === '6,0 x 3,0') echo "selected" ?>>6,0 x 3,00</option>
                        <option value="outro" <?php if ($dados['ds_tamanho'] === 'outro') echo "selected" ?>>Outro</option>
                    </select>
                </div>
                <div class="form-group col-md-2" id="outro_tamanho" style="display: none;">
                    <label >Outro tamanho<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_outro_tamanho" name="ds_outro_tamanho"/>
                </div> 
            </div>
            <div class="row">
                <div class="form-group col-md-2" id="material">
                    <label>Material acessível<span class="text-danger">*</span></label>
                    <select class="form-control" id="id_material" name="id_material">
                        <?php 
                            echo $optionsmaterial;
                        ?>
                    </select>
                </div> 
                <div class="form-group col-2" id="periodo">
                    <label>Período<span class="text-danger">*</span></label>
                    <select class="form-control"name="id_periodo" id="id_periodo">
                      <option value="">Selecione...</option>
                      <option value="1" <?php if ($dados['id_periodo'] == '1') echo "selected" ?>>Bisemana</option>
                      <option value="2" <?php if ($dados['id_periodo'] == '2') echo "selected" ?>>Mensal</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-4">
                    <label>Descrição <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ds_descricao" name="ds_descricao" value="<?php echo $dados['ds_descricao']?>"/>
                </div>
                <div class="form-group col-md-2">
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
<script>
//alterar foto

var alterarfoto = document.getElementById('alterar_foto');
var file = document.getElementById('ds_foto');
var foto = document.getElementById('foto');

alterarfoto.addEventListener('click', () => {
    file.click();
});

file.addEventListener('change', (event) => {
    if(file.files.lenght <= 0){
        return
    }


    var reader = new FileReader();

    reader.onload = () => {
        foto.src = reader.result;
    }

    reader.readAsDataURL(file.files[0]);
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
				infoWindow: {
					content: '<span style="color:#000">Aqui está o seu ponto!</span>'
				}
			});	
			map.setZoom(5);
			$("#ds_latitude").val(e.latLng.lat());
			$("#ds_longitude").val(e.latLng.lng());
		},
	});

	/*google.maps.event.addListener(map, 'dblclick', function(event) {
		map.addMarker({
			lat: event.latLng.lat(),
			lng: event.latLng.lng(),
			title: 'Seu ponto',
			infoWindow: {
				content: '<span style="color:#000">Aqui está o seu ponto</span>'
			}
		});	
		map.setZoom(5);
 	});*/


	/*
	map.addMarker({
		lat: -51.38739,
		lng: -6.187181,
		title: 'Lima',
		details: {
			database_id: 42,
			author: 'HPNeo'
		},
		click: function(e) {
			if (console.log) console.log(e);
			alert('You clicked in this marker');
		}
	});
	map.addMarker({
		lat: -12.042,
		lng: -77.028333,
		title: 'Marker with InfoWindow',
		infoWindow: {
			content: '<span style="color:#000">HTML Content!</span>'
		}
	});
	map.setZoom(5);

	console.log(map);*/
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