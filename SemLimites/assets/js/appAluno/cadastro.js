$(document).ready(function() {
	    

        $("#cancelar").on("click", function(){
            $('#form_aluno').trigger("reset");
            redirectTo("appAluno/listar_aluno.php");
        }); 
    
        $("#salvar").on("click", function(e){ 
            if(validar())
            { 
                $.ajax({
                    url: 'appAluno/gravar_aluno.php'
                    , data: $("#form_aluno").serialize()
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
        if($("#ds_aluno").val() == "")
        {
            $("#ds_aluno").focus();
            swal.fire("Erro", "Preencha a área", "error");
            $("#ds_aluno").addClass("is-invalid");
            return false;	
        }
        else
        {
            $("#ds_aluno").removeClass("is-invalid");	
            $("#ds_aluno").addClass("is-valid");
        }
    
        return true;
    }