$(document).ready(function() {
	    

        $("#cancelar").on("click", function(){
            $('#form_usuario').trigger("reset");
            redirectTo("appAluno/listar_aluno.php");
        }); 
    
        $("#salvar").on("click", function(e){ 
            var cpf = $("#nu_cpf").val();
            if(validar() && validarCPF(cpf))
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

    $("#nu_cpf").inputmask({
		"mask": "999.999.999-99",
		autoUnmask: true,
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

        if($("#dt_nascimento").val() == "")
        {
            $("#dt_nascimento").focus();
            swal.fire("Erro", "Preencha a Data de nascimento", "error");
            $("#dt_nascimento").addClass("is-invalid");
            return false;	
        }
        else
        {
            $("#dt_nascimento").removeClass("is-invalid");	
            $("#dt_nascimento").addClass("is-valid");
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

    function validarCPF(cpf) {	

        cpf = cpf.replace(/[^\d]+/g,'');
        // Elimina CPFs invalidos conhecidos	
        if (cpf.length != 11 || 
            cpf == "00000000000" || 
            cpf == "11111111111" || 
            cpf == "22222222222" || 
            cpf == "33333333333" || 
            cpf == "44444444444" || 
            cpf == "55555555555" || 
            cpf == "66666666666" || 
            cpf == "77777777777" || 
            cpf == "88888888888" || 
            cpf == "99999999999")
        {
            $("#nu_cpf").focus();
            swal.fire("Erro", "CPF inválido", "error");
            $("#nu_cpf").addClass("is-invalid");
            return false;		
        }	
        // Valida 1o digito	
        add = 0;	
        for (i=0; i < 9; i ++)		
            add += parseInt(cpf.charAt(i)) * (10 - i);	
            rev = 11 - (add % 11);	
            if (rev == 10 || rev == 11)		
                rev = 0;	
            if (rev != parseInt(cpf.charAt(9)))		
            {
                $("#nu_cpf").focus();
                swal.fire("Erro", "CPF inválido", "error");
                $("#nu_cpf").addClass("is-invalid");
                return false;		
            }			
        // Valida 2o digito	
        add = 0;	
        for (i = 0; i < 10; i ++)		
            add += parseInt(cpf.charAt(i)) * (11 - i);	
        rev = 11 - (add % 11);	
        if (rev == 10 || rev == 11)	
            rev = 0;	
        if (rev != parseInt(cpf.charAt(10)))
        {
            $("#nu_cpf").focus();
            swal.fire("Erro", "CPF inválido", "error");
            $("#nu_cpf").addClass("is-invalid");
            return false;		
        }	
        return true;		  
    }