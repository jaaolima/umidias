$(document).ready(function() {
	    

        $("#cancelar").on("click", function(){
            $('#form_usuario').trigger("reset");
            redirectTo("appAluno/listar_aluno.php");
        }); 
    
        $("#salvar").on("click", function(e){ 
            if(validar())
            { 
                $.ajax({
                    url: 'appAluno/gravar_aluno.php'
                    , data: $("#form_usuario").serialize()
                    , type: 'post'
                    , success: function(html) {
                        swal.fire({
                            position: 'top-right',
                            type: 'success',
                            title: html,
                            showConfirmButton: true 
                        });
                        
                        redirectTo("appAluno/listar_aluno.php");
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
        if($("#ds_usuario").val() == "")
        {
            $("#ds_usuario").focus();
            swal.fire("Erro", "Preencha o Nome", "error");
            $("#ds_usuario").addClass("is-invalid");
            return false;	
        }
        else
        {
            $("#ds_usuario").removeClass("is-invalid");	
            $("#ds_usuario").addClass("is-valid");
        }
    
        return true;
    }