$(document).ready(function() {
	    

    
	var id_perfil = $("#id_perfil").val();
	if(id_perfil == 3){
		$("#salvar").on("click", function(e){
			var form = $("#form_usuario").get(0);  
			
			if(validar() )
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
						
						// redirectTo("appPonto/listar_ponto.php");
					}
					, error: function (data) {
						swal.fire("Erro", data.responseText, "error");
					}
				});		
			}
		});
		$("#cancelar").on("click", function(){
			$('#form_usuario').trigger("reset");
			redirectTo("appPonto/listar_ponto.php");
		}); 
	}

	$("#id_estado").on("change", function() {
		var id_estado = $("#id_estado option:selected").val(); 
		$.ajax({
	        url: 'appParceiro/listar_options_cidade.php'
	        , type: 'post'
	        , data: {id_estado : id_estado}
	        , success: function(html) {
	        	$("#id_cidade").empty();
	        	$("#id_cidade").append(html);     
	        }
	    }); 
	}); 

	if(id_perfil == 2){
		$("#salvar").on("click", function(e){
			var form = $("#form_usuario").get(0); 
			
			if(validar() )
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
						
						// redirectTo("appParceiro/listar_minhas_midias.php");
					}
					, error: function (data) {
						swal.fire("Erro", data.responseText, "error");
					}
				});		
			}
		});
		$("#cancelar").on("click", function(){
			$('#form_usuario').trigger("reset");
			redirectTo("appParceiro/listar_tipo.php");
		}); 
	}
	id_midia = $("#id_midia").val();
	if(id_midia == 2){
		$('#material').hide(); 
		$('#periodo').hide();
	}
	
	$("#ds_outro_tamanho").inputmask({
		"mask": "9,99 x 9,99",
		numericInput: true,
	});
	$("#ds_tamanho").inputmask({
		"mask": "9,99 x 9,99",
		numericInput: true,
	});
	$("#nu_valor").inputmask({  
		'alias': 'numeric',
		'groupSeparator': '.',
		'autoGroup': true,
		'prefix': 'R$ ',
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

	if($("#id_estado option:selected").val() == "")
	{
		$("#id_estado").focus();
		swal.fire("Erro", "Selecione a UF", "error");
		$("#id_estado").addClass("is-invalid");
		return false;		
	}
	else
	{
		$("#id_estado").removeClass("is-invalid");	
		$("#id_estado").addClass("is-valid");
	}
	
	if($("#id_cidade option:selected").val() == "")
	{
		$("#id_cidade").focus();
		swal.fire("Erro", "Selecione o Municipio", "error");
		$("#id_cidade").addClass("is-invalid");
		return false;		
	}
	else
	{
		$("#id_cidade").removeClass("is-invalid");	
		$("#id_cidade").addClass("is-valid");
	}
	
	if($("#ds_bairro").val() == "")
	{
		$("#ds_bairro").focus();
		swal.fire("Erro", "Preencha o local", "error");
		$("#ds_bairro").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_bairro").removeClass("is-invalid");	
		$("#ds_bairro").addClass("is-valid");
	}

	if($("#ds_sentido").val() == "")
	{
		$("#ds_sentido").focus();
		swal.fire("Erro", "Preencha o sentido", "error");
		$("#ds_sentido").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_sentido").removeClass("is-invalid");	
		$("#ds_sentido").addClass("is-valid");
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

var DatatablesBasicBasic = function() {

	var initTable1 = function() {
		var table = $('#table_bisemana');

		// begin first table
		table.DataTable({
			responsive: true,
			retrieve: true, 
			

			//== DOM Layout settings
			dom: `f<'row'<'col-sm-12'tr>>
			<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,

			lengthMenu: [5, 10, 25, 50],

			pageLength: 10,

			language: {
				'lengthMenu': 'Mostrar _MENU_',
			},
			"oLanguage": {
			    "sSearch": "<span>Pesquisar:</span> _INPUT_",
			    "sLengthMenu": "<span>Mostrar:</span> _MENU_",
			    "sInfo": "<span>Mostrando </span>_START_ até _END_ de _TOTAL_",
			    "sZeroRecords": "Não existem dados cadastrados",
			    "sInfoEmpty": "<span>Mostrando </span>0 até 0 de 0",
			    "oPaginate": { "sFirst": "Primeira", "sLast": "Última", "sNext": ">", "sPrevious": "<" }
		    },

			//== Order settings
			order: [[1, 'asc']],


			columnDefs: [

				{
					targets: -1,
					title: 'Ações',
					orderable: false,
				},
				{
					targets: 0,
					visible: false
				},
				
				
			],
		});

		
	};

	return {

		//main function to initiate the module
		init: function() {
			initTable1();
		},

	};

}();

jQuery(document).ready(function() {
	DatatablesBasicBasic.init();
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
