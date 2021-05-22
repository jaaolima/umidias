$(document).ready(function() {
	    

    $("#cancelar").on("click", function(){
		$('#form_usuario').trigger("reset");
        redirectTo("appPonto/listar_ponto.php");
    }); 

	$("#salvar").on("click", function(e){
		var form = $("#form_usuario").get(0); 
		console.log(form);
		/*if(validar() )
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
		}	*/
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
    
    var demo2 = function () {
        // set the dropzone container id
        var id = '#kt_dropzone_4';

        // set the preview element template
        var previewNode = $(id + " .dropzone-item");
        previewNode.id = "";
        var previewTemplate = previewNode.parent('.dropzone-items').html();
        previewNode.remove();

        var myDropzone4 = new Dropzone(id, { // Make the whole body a dropzone
            url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
            parallelUploads: 5,
            previewTemplate: previewTemplate,
            maxFilesize: 10, // Max filesize in MB
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: id + " .dropzone-items", // Define the container to display the previews
            clickable: id + " .dropzone-select" // Define the element that should be used as click trigger to select files.
        });

        myDropzone4.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(id + " .dropzone-start").onclick = function() { myDropzone4.enqueueFile(file); };
            $(document).find( id + ' .dropzone-item').css('display', '');
            $( id + " .dropzone-upload, " + id + " .dropzone-remove-all").css('display', 'inline-block');
        });

        // Update the total progress bar
        myDropzone4.on("totaluploadprogress", function(progress) {
            $(this).find( id + " .progress-bar").css('width', progress + "%");
        });

        myDropzone4.on("sending", function(file) {
            // Show the total progress bar when upload starts
            $( id + " .progress-bar").css('opacity', '1');
            // And disable the start button
            file.previewElement.querySelector(id + " .dropzone-start").setAttribute("disabled", "disabled");
        });

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone4.on("complete", function(progress) {
            var thisProgressBar = id + " .dz-complete";
            setTimeout(function(){
                $( thisProgressBar + " .progress-bar, " + thisProgressBar + " .progress, " + thisProgressBar + " .dropzone-start").css('opacity', '0');
            }, 300)

        });

        // Setup the buttons for all transfers
        document.querySelector( id + " .dropzone-upload").onclick = function() {
            myDropzone4.enqueueFiles(myDropzone4.getFilesWithStatus(Dropzone.ADDED));
        };

        // Setup the button for remove all files
        document.querySelector(id + " .dropzone-remove-all").onclick = function() {
            $( id + " .dropzone-upload, " + id + " .dropzone-remove-all").css('display', 'none');
            myDropzone4.removeAllFiles(true);
        };

        // On all files completed upload
        myDropzone4.on("queuecomplete", function(progress){
            $( id + " .dropzone-upload").css('display', 'none');
        });

        // On all files removed
        myDropzone4.on("removedfile", function(file){
            if(myDropzone4.files.length < 1){
                $( id + " .dropzone-upload, " + id + " .dropzone-remove-all").css('display', 'none');
            }
        });
    }

    

    return {
        // public functions
        init: function() {
            demo2();
        }
    };
}();


KTUtil.ready(function() {
    KTDropzoneDemo.init();
});
/*
var KTDropzoneDemo = function () {
    // Private functions
    var demo1 = function () {


        // multiple file upload
        $('#dropzone').dropzone({
			url: 'appPonto/gravar_foto_ponto.php',
            paramName: "foto[]", // The name that will be used to transfer the file
            maxFiles: 5,
			autoProcessQueue: false,
            addRemoveLinks: true,
            accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            },
			init: function(){
				$("#salvar").on("click", function(e){
					if(validar())
					{ 	var form = $("#form_usuario").get(0); 
						console.log(form);
						$.ajax({
							url: 'appPonto/gravar_ponto.php'
							, data: $(form).serialize()
							, type: 'post'
							, data: new FormData(form)
							, encType: 'multipart/form-data'
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
});*/
