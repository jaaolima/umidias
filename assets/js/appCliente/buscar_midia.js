$(document).ready(function() {
	$("#aplicar").on("click", function(e){ 
        var date = $("#calendario").datepicker({ dateFormat: 'yyyy,MM,dd' }).val();
        var id_midia = $("#id_midia").val();
        $.ajax({
            url: 'appCliente/listar_midia.php'
            , data: {date: date, id_midia: id_midia, id_busca: 'data'}
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

    $("#aplicar").keypress(function(e){ 
        if(e.which == 13){
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
        }
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