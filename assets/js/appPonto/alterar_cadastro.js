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
	$("#ds_outro_tamanho").inputmask({
		"mask": "9,99 x 9,99",
		numericInput: true,
	});
	$("#nu_valor").inputmask({
		"mask": "9.999,99"
	});
	
});
$('[name="id_midia"]').change(function(){
	if($(this).val() == 1){
		$('#material').show();
		return;
	}

	$('#material').hide();
	$('[name="id_material"]').prop('checked', false);


	
});
$('[name="ds_tamanho"]').change(function(){
	if($(this).val() === "outro"){
		$('#outro_tamanho').show();
		return;
	}

	$('#outro_tamanho').hide();
	$('[name="ds_outro_tamanho"]').prop('checked', false);


	
});
$('[name="id_midia"]').change(function(){
	if($(this).val() == 1){
		$('#periodo').show();
		return;
	}

	$('#periodo').hide();
	$('[name="id_periodo"]').prop('checked', false);


	
});
function validar()
{ 
	if($("#id_parceiro").val() == "")
	{
		$("#id_parceiro").focus();
		swal.fire("Erro", "Selecione o parceiro", "error");
		$("#id_parceiro").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#id_parceiro").removeClass("is-invalid");	
		$("#id_parceiro").addClass("is-valid");
	}
	
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
	
	if($("#fotos").val() == "")
	{
		$("#fotos").focus();
		swal.fire("Erro", "adicione uma foto", "error");
		$("#fotos").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#fotos").removeClass("is-invalid");	
		$("#fotos").addClass("is-valid");
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


	if($("#id_midia option:selected").val() == 1){
		if($("#id_material").val() == "")
		{
			$("#id_material").focus();
			swal.fire("Erro", "Escolha o material", "error");
			$("#id_material").addClass("is-invalid");
			return false;	
		}
		else
		{
			$("#id_material").removeClass("is-invalid");	
			$("#id_material").addClass("is-valid");
		}
		if($("#ds_tamanho").val() == "")
		{
			$("#ds_tamanho").focus();
			swal.fire("Erro", "Escolha o tamanho", "error");
			$("#ds_tamanho").addClass("is-invalid");
			return false;	
		}
		else
		{
			$("#ds_tamanho").removeClass("is-invalid");	
			$("#ds_tamanho").addClass("is-valid");
		}
		if($("#id_periodo option:selected").val() == "")
		{
			$("#id_periodo").focus();
			swal.fire("Erro", "Escolha o período", "error");
			$("#id_periodo").addClass("is-invalid");
			return false;	
		}
		else
		{
			$("#id_periodo").removeClass("is-invalid");	
			$("#id_periodo").addClass("is-valid");
		}

	}

	

	if($("#ds_descricao").val() == "")
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

	return true;
}

