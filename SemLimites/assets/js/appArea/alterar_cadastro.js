$(document).ready(function() {
	    

        $("#cancelar").on("click", function(){
            $('#form_area').trigger("reset");
            redirectTo("appArea/listar_area.php");
        }); 
    
        $("#salvar").on("click", function(e){ 
            if(validar())
            { 
                $.ajax({
                    url: 'appArea/gravar_alterar_area.php'
                    , data: $("#form_area").serialize()
                    , type: 'post'
                    , success: function(html) {
                        swal.fire({
                            position: 'top-right',
                            type: 'success',
                            title: html,
                            showConfirmButton: true 
                        });
                        
                        redirectTo("appArea/listar_area.php");
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

        if($("#id_tipo option:selected").val() == "")
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