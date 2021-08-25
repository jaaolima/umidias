$(document).ready(function() {
	    

        $("#cancelar").on("click", function(){
            $('#form_usuario').trigger("reset");
            redirectTo("appProfessor/listar_treino.php");
        }); 
    
        $("#salvar").on("click", function(e){ 
            if(validar())
            { 
                $.ajax({
                    url: 'appProfessor/gravar_treino.php'
                    , data: $("#form_treino").serialize()
                    , type: 'post'
                    , success: function(html) {
                        swal.fire({
                            position: 'top-right',
                            type: 'success',
                            title: html,
                            showConfirmButton: true
                        });
                        
                        redirectTo("appUsuario/listar_treino.php");
                    }
                    , error: function (data) {
                        swal.fire("Erro", data.responseText, "error");
                    }
                });		
            }	
        });
    });

    
    function validar()
    {
        if($("#ds_area").val() == "")
        {
            $("#ds_area").focus();
            swal.fire("Erro", "Preencha a área", "error");
            $("#ds_area").addClass("is-invalid");
            return false;	
        }
        else
        {
            $("#ds_area").removeClass("is-invalid");	
            $("#ds_area").addClass("is-valid");
        }
    
        if($("#st_status option:selected").val() == "")
        {
            $("#st_status").focus();
            swal.fire("Erro", "Selecione os Status", "error");
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