$(document).ready(function() {
	    
	$("#salvar").on("click", function(e){ 
		if(validar())
		{ 
			$.ajax({
		        url: 'appParceiro/gravar_parceiro.php'
				, data: $("#form_usuario").serialize()
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
        "mask": "9999999",
		autoUnmask: true,
	});

    $("#nu_valor").inputmask({
        "mask": "R$999",
		autoUnmask: true,
	});

});
