$(document).ready(function() {
	    

        $("#cancelar").on("click", function(){
            $('#form_exercicio').trigger("reset");
            redirectTo("appProfessor/listar_exercicio.php");
        }); 
    
        $("#salvar").on("click", function(e){ 
            if(validar())
            { 
                $.ajax({
                    url: 'appProfessor/gravar_exercicio.php'
                    , data: $("#form_exercicio").serialize()
                    , type: 'post'
                    , success: function(html) {
                        swal.fire({
                            position: 'top-right',
                            type: 'success',
                            title: html,
                            showConfirmButton: true
                        });
                        
                        redirectTo("appUsuario/listar_exercicio.php");
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
            swal.fire("Erro", "Selecione um exercício de mídia", "error");
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