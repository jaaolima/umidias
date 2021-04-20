$(document).ready(function(){
    $("#botao_editar").on("click", function(){

        $("#perfil").addClass("d-none");
        $("#editar").removeClass("d-none");
    });

    $("#botao_voltar").on("click", function(){

        $("#editar").addClass("d-none");
        $("#perfil").removeClass("d-none");
    })


})