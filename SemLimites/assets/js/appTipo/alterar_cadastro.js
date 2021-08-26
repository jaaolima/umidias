$(document).ready(function() {
	    

        $("#cancelar").on("click", function(){
            $('#form_tipo').trigger("reset");
            redirectTo("appTipo/listar_tipo.php");
        }); 
    
        $("#salvar").on("click", function(e){ 
            if(validar())
            { 
                $.ajax({
                    url: 'appTipo/gravar_alterar_tipo.php'
                    , data: $("#form_tipo").serialize()
                    , type: 'post'
                    , success: function(html) {
                        swal.fire({
                            position: 'top-right',
                            type: 'success',
                            title: html,
                            showConfirmButton: true 
                        });
                        
                        redirectTo("appTipo/listar_tipo.php");
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
        if($("#ds_tipo").val() == "")
        {
            $("#ds_tipo").focus();
            swal.fire("Erro", "Preencha a área", "error");
            $("#ds_tipo").addClass("is-invalid");
            return false;	
        }
        else
        {
            $("#ds_tipo").removeClass("is-invalid");	
            $("#ds_tipo").addClass("is-valid");
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