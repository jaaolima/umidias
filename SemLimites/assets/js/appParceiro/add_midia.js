$(document).ready(function() {
	    
	$("#salvar").on("click", function(e){ 
		if(validar())
		{ 
			$.ajax({
		        url: 'appParceiro/gravar_parceiro.php'
				, data: $("#kt_projects_add_form").serialize()
		        , type: 'post'
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

	$("#ds_latitude").inputmask({
        "mask": "999.9999999",
		autoUnmask: true,
	});

	$("#ds_longitude").inputmask({
        "mask": "999.9999999",
		autoUnmask: true,
	});

    $("#nu_valor").inputmask({
        "mask": "R$999",
		autoUnmask: true,
	});

});

function validar()
{
	if($("#ds_local").val() == "")
	{
		$("#ds_local").focus();
		swal.fire("Erro", "Preencha o local", "error");
		$("#ds_local").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_local").removeClass("is-invalid");	
		$("#ds_local").addClass("is-valid");
	}

    if($("#ds_foto").val() == "")
	{
		$("#ds_foto").focus();
		swal.fire("Erro", "Preencha a Foto", "error");
		$("#ds_foto").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_foto").removeClass("is-invalid");	
		$("#ds_foto").addClass("is-valid");
	}

    if($("#ds_descricao").val() == "")
	{
		$("#ds_descricao").focus();
		swal.fire("Erro", "Preencha a descricao", "error");
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
		swal.fire("Erro", "Preencha o latitude", "error");
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
		swal.fire("Erro", "Preencha o longitude", "error");
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
		swal.fire("Erro", "Preencha o valor", "error");
		$("#nu_valor").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#nu_valor").removeClass("is-invalid");	
		$("#nu_valor").addClass("is-valid");
	}
}
