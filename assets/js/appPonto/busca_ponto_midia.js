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
		var busca = $("#busca").val();

        $.ajax({
            url: 'appPonto/listar_ponto_midia.php'
            , data: {tp_busca: "regiao", busca: busca, id_midia: id_midia}
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

    $("#aplicar").on("click", function(e){
		var valor_inicial = $("#valor_inicial").val();
        var valor_final = $("#valor_final").val();

        $.ajax({
            url: 'appPonto/listar_ponto_midia.php'
            , data: {tp_busca: "valor", valor_inicial: valor_inicial, valor_final: valor_final, id_midia: id_midia}
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

    $("#valor_inicial").inputmask({
		"mask": "9,999",
		numericInput: true,
	});

    $("#valor_final").inputmask({
		"mask": "9,999", 
		numericInput: true,
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