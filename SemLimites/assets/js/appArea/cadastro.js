$(document).ready(function() {
	    

        $("#cancelar").on("click", function(){
            $('#form_Area').trigger("reset");
            redirectTo("appArea/listar_Area.php");
        }); 
    
        $("#salvar").on("click", function(e){ 
            if(validar())
            { 
                $.ajax({
                    url: 'appArea/gravar_Area.php'
                    , data: $("#form_Area").serialize()
                    , type: 'post'
                    , success: function(html) {
                        swal.fire({
                            position: 'top-right',
                            type: 'success',
                            title: html,
                            showConfirmButton: true 
                        });
                        
                        redirectTo("appArea/listar_Area.php");
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
        if($("#ds_Area").val() == "")
        {
            $("#ds_Area").focus();
            swal.fire("Erro", "Preencha a área", "error");
            $("#ds_Area").addClass("is-invalid");
            return false;	
        }
        else
        {
            $("#ds_Area").removeClass("is-invalid");	
            $("#ds_Area").addClass("is-valid");
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