$(document).ready(function() {
	    

        $("#cancelar").on("click", function(){
            $('#form_usuario').trigger("reset");
            redirectTo("appTreino/listar_aluno.php");
        }); 
    
        $("#salvar").on("click", function(e){ 
            if(validar())
            { 
                $.ajax({
                    url: 'appTreino/gravar_treino.php'
                    , data: $("#form_treino").serialize()
                    , type: 'post'
                    , success: function(html) {
                        swal.fire({
                            position: 'top-right',
                            type: 'success',
                            title: html,
                            showConfirmButton: true
                        });
                        
                        redirectTo("appUsuario/listar_aluno.php");
                    }
                    , error: function (data) {
                        swal.fire("Erro", data.responseText, "error");
                    }
                });		
            }	
        });
    });

    $("#id_tipo").on("change", function() {
		var id_tipo = $("#id_tipo option:selected").val();
		$.ajax({
	        url: 'appArea/listar_options_area.php'
	        , type: 'post'
	        , data: {id_tipo : id_tipo}
	        , success: function(html) {
	        	$("#id_area").empty();
	        	$("#id_area").append(html);     
	        }
	    }); 
	}); 

    $("#id_area").on("change", function() {
		var id_area = $("#id_area option:selected").val();
		$.ajax({
	        url: 'appExercicio/listar_options_exercicio.php'
	        , type: 'post'
	        , data: {id_area : id_area}
	        , success: function(html) {
	        	$("#id_exercicio").empty();
	        	$("#id_exercicio").append(html);     
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