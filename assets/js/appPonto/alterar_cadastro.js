$(document).ready(function() {
	    

    $("#cancelar").on("click", function(){
		$('#form_usuario').trigger("reset");
        redirectTo("appPonto/listar_ponto.php");
    }); 

	$("#salvar").on("click", function(e){
		
		if(validar())
		{ 	var form = $("#form_usuario").get(0);
			$.ajax({
		        url: 'appPonto/gravar_alterar_ponto.php'
				, data: $("#form_usuario").serialize()
				, type: 'post'
				, data: new FormData(form)
				, mimeType: 'multipart/form-data'
				, processData: false
				, contentType: false
		        , success: function(html) {
		        	swal.fire({
		                position: 'top-right',
		                type: 'success',
		                title: html,
		                showConfirmButton: true
		            });
		            
                    redirectTo("appPonto/listar_ponto.php");
		        }
				, error: function (data) {
					swal.fire("Erro", data.responseText, "error");
				}
		    });		
		}	
	});
	
});

function validar()
{	if($("#ds_descricao").val() == "")
	{
		$("#ds_descricao").focus();
		swal.fire("Erro", "Preencha a Descrição", "error");
		$("#ds_descricao").addClass("is-invalid");
		return false;	
	}
	else
	{
	$("#ds_descricao").removeClass("is-invalid");	
	$("#ds_descricao").addClass("is-valid");
	}

	if($("#ds_latitude").val() == "")
	{
		$("#ds_latitude").focus();
		swal.fire("Erro", "Preencha a Latitude", "error");
		$("#ds_latitude").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_latitude").removeClass("is-invalid");	
		$("#ds_latitude").addClass("is-valid");
	}

	if($("#ds_longitude").val() == "")
	{
		$("#ds_longitude").focus();
		swal.fire("Erro", "Preencha a Longitude", "error");
		$("#ds_longitude").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_longitude").removeClass("is-invalid");	
		$("#ds_longitude").addClass("is-valid");
	}


	if($("#nu_valor").val() == "")
	{
		$("#nu_valor").focus();
		swal.fire("Erro", "Preencha  o valor", "error");
		$("#nu_valor").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#nu_valor").removeClass("is-invalid");	
		$("#nu_valor").addClass("is-valid");
	}

	if($("#id_midia option:selected").val() == "")
	{
		$("#id_midia").focus();
		swal.fire("Erro", "Selecione um tipo de mídia", "error");
		$("#id_midia").addClass("is-invalid");
		return false;		
	}
	else
	{
		$("#id_midia").removeClass("is-invalid");	
		$("#id_midia").addClass("is-valid");
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

