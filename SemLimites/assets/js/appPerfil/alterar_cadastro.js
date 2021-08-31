$(document).ready(function() {
	    

        $("#cancelar").on("click", function(){
            $('#form_perfil').trigger("reset");
            redirectTo("appPerfil/listar_perfil.php");
        }); 
    
        $("#salvar").on("click", function(e){ 
            if(validar())
            { 
                $.ajax({
                    url: 'appPerfil/gravar_alterar_perfil.php'
                    , data: $("#form_perfil").serialize()
                    , type: 'post'
                    , success: function(html) {
                        swal.fire({
                            position: 'top-right',
                            type: 'success',
                            title: html,
                            showConfirmButton: true 
                        });
                        
                        redirectTo("appPerfil/listar_perfil.php");
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
        if($("#ds_perfil").val() == "")
        {
            $("#ds_perfil").focus();
            swal.fire("Erro", "Preencha a área", "error");
            $("#ds_perfil").addClass("is-invalid");
            return false;	
        }
        else
        {
            $("#ds_perfil").removeClass("is-invalid");	
            $("#ds_perfil").addClass("is-valid");
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