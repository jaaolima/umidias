$(document).ready(function() {
	$("#aplicar").on("click", function(e){ 
        var date = $("#calendario").datepicker('getDate');
        dataUS = date.toLocaleDateString('pt-br');
        dataFinal = dateToEN(dataUS);
        console.log(dataFinal);
        var id_midia = $("#id_midia").val();
        $.ajax({
            url: 'appCliente/listar_midia.php' 
            , data: {data: dataFinal, id_midia: id_midia, id_busca: 'data'}
            , type: 'post'
            , success: function(html) {
                $("#lista").html(html);
                $("#lista").slideDown();  
            }
            , error: function (data) {
                $("#lista").slideUp();
                swal("Erro", data.responseText, "error");
            }
        });	

	});

    $("#aplicarBisemana").on("click", function(e){ 
        if(validarAplicarBisemana()){
            var bisemana = new Array();
            $("input[name='bisemana[]']:checked").each(function ()
            {
                bisemana.push( $(this).val());
            });
            console.log(bisemana);
            var id_midia = $("#id_midia").val();
            $.ajax({
                url: 'appCliente/listar_midia.php'
                , data: {bisemana: bisemana, id_midia: id_midia, id_busca: 'bisemana'}
                , type: 'post'
                , success: function(html) {
                    $("#lista").html(html);
                    $("#lista").slideDown(); 
                }
                , error: function (data) {
                    $("#lista").slideUp();
                    swal("Erro", data.responseText, "error");
                }
            });	
        }

	});

    $("#busca").on("keyup", function(e){  
        var id_midia = $("#id_midia").val();
        var busca = $("#busca").val();
        $.ajax({
            url: 'appCliente/listar_midia.php'
            , data: {busca: busca, id_midia: id_midia, id_busca: 'busca'}
            , type: 'post'
            , success: function(html) {
                $("#lista").html(html);
                $("#lista").slideDown();  
            }
            , error: function (data) {
                $("#lista").slideUp();
                swal("Erro", data.responseText, "error"); 
            }
        });	

	});


    $("#filtro_mapa").on("click", function(e){ 
        $(this).addClass("btn-mapa-active");
		$(this).removeClass("btn-mapa");
		$('#filtro').removeClass("btn-mapa-active");
		$('#filtro').addClass("btn-mapa");	

	});

    $("#filtro").on("click", function(e){ 
        $(this).addClass("btn-mapa-active");
		$(this).removeClass("btn-mapa");
		$('#filtro_mapa').removeClass("btn-mapa-active");
		$('#filtro_mapa').addClass("btn-mapa");	

	});

    $("#busca_quentes").on("click", function(e){ 
        var id_midia = $("#id_midia").val();
        $.ajax({
            url: 'appCliente/listar_midia.php'
            , data: {id_midia: id_midia, id_busca: 'quente'}
            , type: 'post'
            , success: function(html) {
                $("#lista").html(html);
                $("#lista").slideDown(); 
            }
            , error: function (data) {
                $("#lista").slideUp();
                swal("Erro", data.responseText, "error");
            }
        });		

	});

    $("#busca_disponiveis").on("click", function(e){ 
        var id_midia = $("#id_midia").val();
        $.ajax({
            url: 'appCliente/listar_midia.php'
            , data: {id_midia: id_midia, id_busca: 'disponivel'}
            , type: 'post'
            , success: function(html) {
                $("#lista").html(html);
                $("#lista").slideDown(); 
            }
            , error: function (data) {
                $("#lista").slideUp(); 
                swal("Erro", data.responseText, "error");
            }
        });		

	});

    var id_midia = $("#id_midia").val();
    $.ajax({
        url: 'appCliente/listar_midia.php'
        , data: {id_midia: id_midia, id_busca: ''}
        , type: 'post'
        , success: function(html) {
            $("#lista").html(html);
            $("#lista").slideDown(); 
        }
        , error: function (data) {
            $("#lista").slideUp();
            swal("Erro", data.responseText, "error");
        }
    });	
}); 

function dateToEN(date)
{	
	return date.split('/').reverse().join('-');
}

function validarAplicarBisemana()
{

    if($("input[name='bisemana[]']:checked").length == 0) 
    {
        swal.fire("Erro", "Escolha uma Bisemana", "error");
        return false;	
    }


	return true;
}

var DatatablesBasicBasic = function() {

	var initTable1 = function() {
		var table = $('#table_bisemana'); 

		// begin first table
		table.DataTable({
			responsive: true,
			retrieve: true,
			

			//== DOM Layout settings
			dom: `f<'row'<'col-sm-12'tr>>
			<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,

			lengthMenu: [5, 10, 25, 50],

			pageLength: 5,

			language: {
				'lengthMenu': 'Mostrar _MENU_',
			},
			"oLanguage": {
			    "sSearch": "<span>Pesquisar:</span> _INPUT_",
			    "sLengthMenu": "<span>Mostrar:</span> _MENU_",
			    "sInfo": "<span>Mostrando </span>_START_ at?? _END_ de _TOTAL_",
			    "sZeroRecords": "N??o existem dados cadastrados",
			    "sInfoEmpty": "<span>Mostrando </span>0 at?? 0 de 0",
			    "oPaginate": { "sFirst": "Primeira", "sLast": "??ltima", "sNext": ">", "sPrevious": "<" }
		    },

			//== Order settings
			order: [[0, 'asc']],  


			columnDefs: [

				{
					targets: 0,
					visible: false
				},
				
				
			],
		});
	

		
	};

	return {

		//main function to initiate the module
		init: function() {
			initTable1();
		},

	};

}();

jQuery(document).ready(function() {
	DatatablesBasicBasic.init();
});