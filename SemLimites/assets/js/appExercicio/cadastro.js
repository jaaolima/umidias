$(document).ready(function() {
	    

        $("#cancelar").on("click", function(){
            $('#form_exercicio').trigger("reset");
            redirectTo("appExercicio/listar_exercicio.php");
        }); 
    
        $("#salvar").on("click", function(e){ 
            if(validar())
            { 
                $.ajax({
                    url: 'appExercicio/gravar_exercicio.php'
                    , data: $("#form_exercicio").serialize()
                    , type: 'post'
                    , success: function(html) {
                        swal.fire({
                            position: 'top-right',
                            type: 'success',
                            title: html,
                            showConfirmButton: true 
                        });
                        
                        redirectTo("appExercicio/listar_exercicio.php");
                    }
                    , error: function (data) {
                        swal.fire("Erro", data.responseText, "error");
                    }
                });		
            }	
        });
    });

    $("#id_tipo").on("change", function() {
		var id_tipo = $("#id_tipo option:selected").val();
		$.ajax({
	        url: 'appArea/listar_options_area.php'
	        , type: 'post'
	        , data: {id_tipo : id_tipo}
	        , success: function(html) {
	        	$("#id_area").empty();
	        	$("#id_area").append(html);     
	        }
	    }); 
	}); 

    
    function validar()
    {

        if($("#id_tipo option:selected").val() === "")
        {
            $("#id_tipo").focus();
            swal.fire("Erro", "Selecione o Tipo", "error");
            $("#id_tipo").addClass("is-invalid");
            return false;		
        }
        else
        {
            $("#id_tipo").removeClass("is-invalid");	
            $("#id_tipo").addClass("is-valid");
        }

        if($("#id_area option:selected").val() === "")
        {
            $("#id_area").focus();
            swal.fire("Erro", "Selecione a área", "error");
            $("#id_area").addClass("is-invalid");
            return false;		
        }
        else
        {
            $("#id_area").removeClass("is-invalid");	
            $("#id_area").addClass("is-valid");
        }

        if($("#ds_exercicio").val() == "")
        {
            $("#ds_exercicio").focus();
            swal.fire("Erro", "Preencha a área", "error");
            $("#ds_exercicio").addClass("is-invalid"); 
            return false;	
        }
        else
        {
            $("#ds_exercicio").removeClass("is-invalid");	
            $("#ds_exercicio").addClass("is-valid");
        }
    
        if($("#st_status option:selected").val() == "")
        {
            $("#st_status").focus();
            swal.fire("Erro", "Selecione um status", "error");
            $("#st_status").addClass("is-invalid");
            return false;		
        }
        else
        {
            $("#st_status").removeClass("is-invalid");	
            $("#st_status").addClass("is-valid");
        }
    
        return true;
    }