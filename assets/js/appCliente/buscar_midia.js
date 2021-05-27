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