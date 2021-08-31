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
            swal.fire("Erro", "Preencha o Usuário", "error");
            $("#ds_usuario").addClass("is-invalid");
            return false;	
        }
        else
        {
            $("#ds_usuario").removeClass("is-invalid");	
            $("#ds_usuario").addClass("is-valid");
        }

        if($("#ds_nome").val() == "")
        {
            $("#ds_nome").focus();
            swal.fire("Erro", "Preencha o Nome", "error");
            $("#ds_nome").addClass("is-invalid");
            return false;	
        }
        else
        {
            $("#ds_nome").removeClass("is-invalid");	
            $("#ds_nome").addClass("is-valid");
        }

        if($("#nu_cpf").val() == "")
        {
            $("#nu_cpf").focus();
            swal.fire("Erro", "Preencha o CPF", "error");
            $("#nu_cpf").addClass("is-invalid");
            return false;	
        }
        else
        {
            $("#nu_cpf").removeClass("is-invalid");	
            $("#nu_cpf").addClass("is-valid");
        }

        if($("#ds_email").val() == "")
        {
            $("#ds_email").focus();
            swal.fire("Erro", "Preencha o E-mail", "error");
            $("#ds_email").addClass("is-invalid");
            return false;	
        }
        else
        {
            $("#ds_email").removeClass("is-invalid");	
            $("#ds_email").addClass("is-valid");
        }

        if($("#st_nascimento").val() == "")
        {
            $("#st_nascimento").focus();
            swal.fire("Erro", "Preencha a Data de nascimento", "error");
            $("#st_nascimento").addClass("is-invalid");
            return false;	
        }
        else
        {
            $("#st_nascimento").removeClass("is-invalid");	
            $("#st_nascimento").addClass("is-valid");
        }

        var st_sexo = $("input[name='st_sexo']:checked").val();
 
        if(!st_sexo) 
        {
            $("#st_sexo").focus();
            swal.fire("Erro", "Preencha o sexo", "error");
            $("#st_sexo").addClass("is-invalid");
            return false;	
        }
        else
        {
            $("#st_sexo").removeClass("is-invalid");	 
            $("#st_sexo").addClass("is-valid");
        } 

        if($("#ds_endereco").val() == "")
        {
            $("#ds_endereco").focus();
            swal.fire("Erro", "Preencha o Endereco", "error");
            $("#ds_endereco").addClass("is-invalid");
            return false;	
        }
        else
        {
            $("#ds_endereco").removeClass("is-invalid");	
            $("#ds_endereco").addClass("is-valid");
        }
        if($("#nu_cep").val() == "")
        {
            $("#nu_cep").focus();
            swal.fire("Erro", "Preencha o CEP", "error");
            $("#nu_cep").addClass("is-invalid");
            return false;	
        }
        else
        {
            $("#nu_cep").removeClass("is-invalid");	
            $("#nu_cep").addClass("is-valid");
        }
    
        return true;
    }