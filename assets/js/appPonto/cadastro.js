$(document).ready(function() {
	    

    $("#cancelar").on("click", function(){
		$('#form_usuario').trigger("reset");
        redirectTo("appPonto/listar_ponto.php");
    }); 

	$("#salvar").on("click", function(e){
		
		if(/*validar()*/ true)
		{ 	var form = $("#form_usuario").get(0); 
			$.ajax({
		        url: 'appPonto/gravar_ponto.php'
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
$('[name="id_midia"]').change(function(){
	if($(this).val() == 1){
		$('#material').show();
		return;
	}

	$('#material').hide();
	$('[name="id_material"]').prop('checked', false);


	
});
$('[name="id_midia"]').change(function(){
	if($(this).val() == 1){
		$('#tamanho').show();
		return;
	}

	$('#tamanho').hide();
	$('[name="ds_tamanho"]').prop('checked', false);


	
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
		if($("#periodo").val() == "")
		{
			$("#periodo").focus();
			swal.fire("Erro", "Escolha o período", "error");
			$("#periodo").addClass("is-invalid");
			return false;	
		}
		else
		{
			$("#periodo").removeClass("is-invalid");	
			$("#periodo").addClass("is-valid");
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

	if($("#ds_foto").val() == "")
	{
		$("#ds_foto").focus();
		swal.fire("Erro", "adicione uma foto", "error");
		$("#ds_foto").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_foto").removeClass("is-invalid");	
		$("#ds_foto").addClass("is-valid");
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
var KTDropzoneDemo = function () {
    // Private functions
    var demo1 = function () {


        // multiple file upload
        $('#kt_dropzone_2').dropzone({
            paramName: "foto[]", // The name that will be used to transfer the file
            maxFiles: 5,
            addRemoveLinks: true,
            accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        });


    }

    return {
        // public functions
        init: function() {
            demo1();
        }
    };
}();

KTUtil.ready(function() {
    KTDropzoneDemo.init();
});
