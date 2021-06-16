$(document).ready(function() {
    var id_midia = $("#id_midia").val();

    $.ajax({
        url: 'appPonto/listar_ponto_midia.php'
        , data: {tp_busca: "", id_midia: id_midia}
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


	$("#busca").on("keyup", function(e){
		var tp_busca = $("input[name='tp_busca']:checked"). val();
		var busca = $("#busca").val();

        $.ajax({
            url: 'appPonto/listar_ponto_midia.php'
            , data: {tp_busca: tp_busca, busca: busca, id_midia: id_midia}
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
    $("#buscar_regiao").on('click', function(){

        $("#regiao").show(); 
        $("#valor").hide();

    });

    $("#buscar_valor").on('click', function(){

        $("#regiao").hide();
        $("#valor").show();
    });

    
});