$(document).ready(function() {
	    

    $("#cancelar").on("click", function(){
		$('#form_usuario').trigger("reset");
        redirectTo("appParceiro/listar_parceiro.php");
    }); 

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

	$('[name="id_estado"]').change(function(){
        if($(this).val() == "CPF"){
            $('#nu_cpf').show();
			$('#nu_cnpj').hide();
            return;
        }

        $('#nu_cpf').hide();
		$('[name="nu_cpf"]').prop('checked', false);
	});

	/*if($("#id_regime option:selected").val() == "CPF"){
		$("#nu_cnpj_cpf").inputmask({
			"mask": "999.999.999-99",
			autoUnmask: true,
		});
	}
	else{
		$("#nu_cnpj_cpf").inputmask({
			"mask": "99.999.999/9999-99",
			autoUnmask: true,
		});
	}*/
	

	$("#nu_cep").inputmask({
        "mask": "99.999-999",
		autoUnmask: true,
	});

	$("#nu_telefone").inputmask({
        "mask": "(99)99999-9999",
		autoUnmask: true,
	});
	$("#nu_aliquota").inputmask({
		"mask": "999.99",
		numericInput: true,
	});
});

function validar()
{
	if($("#ds_nomeempresa").val() == "")
	{
		$("#ds_nomeempresa").focus();
		swal.fire("Erro", "Preencha o nome da empresa", "error");
		$("#ds_nomeempresa").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_nomeempresa").removeClass("is-invalid");	
		$("#ds_nomeempresa").addClass("is-valid");
	}

	if($("#nu_cnpj").val() == "")
	{
		$("#nu_cnpj").focus();
		swal.fire("Erro", "Preencha o CNPJ", "error");
		$("#nu_cnpj").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#nu_cnpj").removeClass("is-invalid");	
		$("#nu_cnpj").addClass("is-valid");
	}

	if($("#ds_logradouro").val() == "")
	{
		$("#ds_logradouro").focus();
		swal.fire("Erro", "Preencha o lougradoro", "error");
		$("#ds_logradouro").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_logradouro").removeClass("is-invalid");	
		$("#ds_logradouro").addClass("is-valid");
	}

	if($("#nu_numerolog").val() == "")
	{
		$("#nu_numerolog").focus();
		swal.fire("Erro", "Preencha o numero do logradouro", "error");
		$("#nu_numerolog").addClass("is-invalid");
		return false;		
	}
	else
	{
		$("#nu_numerolog").removeClass("is-invalid");	
		$("#nu_numerolog").addClass("is-valid");
	}

	if($("#nu_cep ").val() == "")
	{
		$("#nu_cep").focus();
		swal.fire("Erro", "Preencha o numero de CEP", "error");
		$("#nu_cep").addClass("is-invalid");
		return false;		
	}
	else
	{
		$("#nu_cep").removeClass("is-invalid");	
		$("#nu_cep").addClass("is-valid");
	}

	if($("#id_uf option:selected").val() == "")
	{
		$("#id_uf").focus();
		swal.fire("Erro", "Selecione a UF", "error");
		$("#id_uf").addClass("is-invalid");
		return false;		
	}
	else
	{
		$("#id_uf").removeClass("is-invalid");	
		$("#id_uf").addClass("is-valid");
	}
	
	if($("#id_municipio option:selected").val() == "")
	{
		$("#id_municipio").focus();
		swal.fire("Erro", "Selecione o Municipio", "error");
		$("#id_municipio").addClass("is-invalid");
		return false;		
	}
	else
	{
		$("#id_municipio").removeClass("is-invalid");	
		$("#id_municipio").addClass("is-valid");
	}
	
	if($("#ds_bairro").val() == "")
	{
		$("#ds_bairro").focus();
		swal.fire("Erro", "Preencha o bairro", "error");
		$("#ds_bairro").addClass("is-invalid");
		return false;		
	}
	else
	{
		$("#ds_bairro").removeClass("is-invalid");	
		$("#ds_bairro").addClass("is-valid");
	}
	
	if($("#ds_responsavel ").val() == "")
	{
		$("#ds_responsavel").focus();
		swal.fire("Erro", "Preencha o nome do Responsável", "error");
		$("#ds_responsavel").addClass("is-invalid");
		return false;		
	}
	else
	{
		$("#ds_responsavel").removeClass("is-invalid");	
		$("#ds_responsavel").addClass("is-valid");
	}
	
	if($("#ds_email").val() == "")
	{
		$("#ds_email").focus();
		swal.fire("Erro", "Preencha o email", "error");
		$("#ds_email").addClass("is-invalid");
		return false;		
	}
	else
	{
		$("#ds_email").removeClass("is-invalid");	
		$("#ds_email").addClass("is-valid");
	}

	if($("#nu_telefone").val() == "")
	{
		$("#nu_telefone").focus();
		swal.fire("Erro", "Preencha o número de telefone", "error");
		$("#nu_telefone").addClass("is-invalid");
		return false;		
	}
	else
	{
		$("#nu_telefone").removeClass("is-invalid");	
		$("#nu_telefone").addClass("is-valid");
	}

	if($("#id_regime").val() == "")
	{
		$("#id_regime").focus();
		swal.fire("Erro", "Selecione o regime fiscal", "error");
		$("#id_regime").addClass("is-invalid");
		return false;		
	}
	else
	{
		$("#id_regime").removeClass("is-invalid");	
		$("#id_regime").addClass("is-valid");
	}
	
	

	return true;
}