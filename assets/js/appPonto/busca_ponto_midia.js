$(document).ready(function() {
	var tp_busca = $("input[name='tp_busca']:checked"). val();
	var busca = $("#busca").val();
    var id_midia = $("#id_midia").val();

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
    if(tp_busca == 1){
        $("#regiao").show();
        $("#valor").hide();
    }
    if(tp_busca == 2){
        $("#regiao").hide();
        $("#valor").show();
    }
});