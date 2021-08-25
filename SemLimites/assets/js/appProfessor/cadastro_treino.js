$(document).ready(function() {
	    

        $("#cancelar").on("click", function(){
            $('#form_usuario').trigger("reset");
            redirectTo("appUsuario/listar_usuario.php");
        }); 
    
        $("#salvar").on("click", function(e){ 
            if(validar())
            { 
                $.ajax({
                    url: 'appUsuario/gravar_usuario.php'
                    , data: $("#form_usuario").serialize()
                    , type: 'post'
                    , success: function(html) {
                        swal.fire({
                            position: 'top-right',
                            type: 'success',
                            title: html,
                            showConfirmButton: true
                        });
                        
                        redirectTo("appUsuario/listar_usuario.php");
                    }
                    , error: function (data) {
                        swal.fire("Erro", data.responseText, "error");
                    }
                });		
            }	
        });
    });

    $("#nu_serie").inputmask({
		"mask": "99",
		numericInput: true,
	});

    $("#nu_repeticao").inputmask({
		"mask": "999",
		numericInput: true,
	});

    $("#nu_carga").inputmask({
		"mask": "9999",
		numericInput: true,
	});
    
    function validar()
    {
        if($("#ds_nome").val() == "")
        {
            $("#ds_nome").focus();
            swal.fire("Erro", "Preencha o nome ", "error");
            $("#ds_nome").addClass("is-invalid");
            return false;	
        }
        else
        {
            $("#ds_nome").removeClass("is-invalid");	
            $("#ds_nome").addClass("is-valid");
        }
    
        if($("#ds_email").val() == "")
        {
            $("#ds_email").focus();
            swal.fire("Erro", "Preencha o Email", "error");
            $("#ds_email").addClass("is-invalid");
            return false;	
        }
        else
        {
            $("#ds_email").removeClass("is-invalid");	
            $("#ds_email").addClass("is-valid");
        }
    
        if($("#ds_usuario").val() == "")
        {
            $("#ds_usuario").focus();
            swal.fire("Erro", "Preencha o usuario", "error");
            $("#ds_usuario").addClass("is-invalid");
            return false;	
        }
        else
        {
            $("#ds_usuario").removeClass("is-invalid");	
            $("#ds_usuario").addClass("is-valid");
        }
    
        if($("#id_perfil").val() == "")
        {
            $("#id_perfil").focus();
            swal.fire("Erro", "Preencha a senha", "error");
            $("#id_perfil").addClass("is-invalid");
            return false;		
        }
        else
        {
            $("#id_perfil").removeClass("is-invalid");	
            $("#id_perfil").addClass("is-valid");
        }
    
    
    
        
    
        return true;
    }