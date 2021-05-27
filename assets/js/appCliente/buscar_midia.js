$(document).ready(function() {
	$("#aplicar").on("click", function(e){ 
        var date = $("#calendario").datepicker({ dateFormat: 'dd,MM,yyyy' }).val();
        var id_midia = $("#id_midia").val();
        $.ajax({
            url: 'appCliente/listar_midia.php'
            , data: {date: date, id_midia: id_midia}
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
});