$(document).ready(function() {
	    

    $("#cancelar").on("click", function(){
		$('#form_usuario').trigger("reset");
        redirectTo("appParceiro/listar_parceiro.php");
    }); 

	$("#salvar").on("click", function(e){ 
		var cnpj = $("#nu_cnpj").val();
		var cpf = $("#nu_cpf").val();
		var regime = $("#id_regime").val();
		if(validar() && validarCNPJ(cnpj, regime) && validarCPF(cpf, regime))
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
		            
					redirectTo("appParceiro/listar_parceiro.php");
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

	$('#cpf').hide();
	$('[name="id_regime"]').change(function(){
        if($(this).val() === "CPF"){
            $('#cpf').show();
			$('#cnpj').hide();
			$("#nu_cnpj").val("");
            return;
        }
		else{
			$('#cnpj').show();
			$('#cpf').hide();
			$("#nu_cpf").val("");
			$('[name="nu_cpf"]').prop('checked', false);
		}

        
	});

	$("#nu_cnpj").inputmask({
		"mask": "99.999.999/9999-99",
		autoUnmask: true,
	});
	$("#nu_cpf").inputmask({
		"mask": "999.999.999-99",
		autoUnmask: true,
	});

	$("#nu_cep").inputmask({
        "mask": "99.999-999",
		autoUnmask: true,
	});

	$("#nu_telefone").inputmask({
        "mask": "(99)99999-9999",
		autoUnmask: true, 
	});
	$("#nu_aliquota").inputmask({
		"mask": "99.99%",
		numericInput: true,
	});
});

function validar()
{
	if($("#ds_usuario").val() == "")
	{
		$("#ds_usuario").focus();
		swal.fire("Erro", "Preencha o nome da empresa", "error");
		$("#ds_usuario").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_usuario").removeClass("is-invalid");	
		$("#ds_usuario").addClass("is-valid");
	}
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
	if($("#id_regime").val() === "CPF"){
		if($("#nu_cpf").val() == "")
		{
			$("#nu_cpf").focus();
			swal.fire("Erro", "Preencha o CPF", "error");
			$("#nu_cpf").addClass("is-invalid");
			return false;	
		}
		else
		{
			$("#nu_cpf").removeClass("is-invalid");	
			$("#nu_cpf").addClass("is-valid");
		}

	}
	else{
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
function validarCNPJ(cnpj, regime) {

	if (regime === "CPF")
	{
		return true;		
	}
	else{

		cnpj = cnpj.replace(/[^\d]+/g,'');
		if (cnpj.length != 14)
		{
			$("#nu_cnpj").focus();
			swal.fire("Erro", "CNPJ inválido", "error");
			$("#nu_cnpj").addClass("is-invalid");
			return false;		
		}
	
		// Elimina CNPJs invalidos conhecidos
		if (cnpj == "00000000000000" || 
			cnpj == "11111111111111" || 
			cnpj == "22222222222222" || 
			cnpj == "33333333333333" || 
			cnpj == "44444444444444" || 
			cnpj == "55555555555555" || 
			cnpj == "66666666666666" || 
			cnpj == "77777777777777" || 
			cnpj == "88888888888888" || 
			cnpj == "99999999999999")
		{
			$("#nu_cnpj").focus();
			swal.fire("Erro", "CNPJ inválido", "error");
			$("#nu_cnpj").addClass("is-invalid");
			return false;		
		}
			
		// Valida DVs
		tamanho = cnpj.length - 2
		numeros = cnpj.substring(0,tamanho);
		digitos = cnpj.substring(tamanho);
		soma = 0;
		pos = tamanho - 7;
		for (i = tamanho; i >= 1; i--) {
		soma += numeros.charAt(tamanho - i) * pos--;
		if (pos < 2)
				pos = 9;
		}
		resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
		if (resultado != digitos.charAt(0))
		{
			$("#nu_cnpj").focus();
			swal.fire("Erro", "CNPJ inválido", "error");
			$("#nu_cnpj").addClass("is-invalid");
			return false;		
		}
			


		tamanho = tamanho + 1;
		numeros = cnpj.substring(0,tamanho);
		soma = 0;
		pos = tamanho - 7;
		for (i = tamanho; i >= 1; i--) {
		soma += numeros.charAt(tamanho - i) * pos--;
		if (pos < 2)
				pos = 9;
		}
		resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
		if (resultado != digitos.charAt(1))
		{
			$("#nu_cnpj").focus();
			swal.fire("Erro", "CNPJ inválido", "error");
			$("#nu_cnpj").addClass("is-invalid");
			return false;		
		}
			
		return true;
	}	
}
function validarCPF(cpf, regime) {	

	cpf = cpf.replace(/[^\d]+/g,'');
	if (regime === "CPF"){
		// Elimina CPFs invalidos conhecidos	
		if (cpf.length != 11 || 
			cpf == "00000000000" || 
			cpf == "11111111111" || 
			cpf == "22222222222" || 
			cpf == "33333333333" || 
			cpf == "44444444444" || 
			cpf == "55555555555" || 
			cpf == "66666666666" || 
			cpf == "77777777777" || 
			cpf == "88888888888" || 
			cpf == "99999999999")
		{
			$("#nu_cpf").focus();
			swal.fire("Erro", "CPF inválido", "error");
			$("#nu_cpf").addClass("is-invalid");
			return false;		
		}	
		// Valida 1o digito	
		add = 0;	
		for (i=0; i < 9; i ++)		
			add += parseInt(cpf.charAt(i)) * (10 - i);	
			rev = 11 - (add % 11);	
			if (rev == 10 || rev == 11)		
				rev = 0;	
			if (rev != parseInt(cpf.charAt(9)))		
			{
				$("#nu_cpf").focus();
				swal.fire("Erro", "CPF inválido", "error");
				$("#nu_cpf").addClass("is-invalid");
				return false;		
			}			
		// Valida 2o digito	
		add = 0;	
		for (i = 0; i < 10; i ++)		
			add += parseInt(cpf.charAt(i)) * (11 - i);	
		rev = 11 - (add % 11);	
		if (rev == 10 || rev == 11)	
			rev = 0;	
		if (rev != parseInt(cpf.charAt(10)))
		{
			$("#nu_cpf").focus();
			swal.fire("Erro", "CPF inválido", "error");
			$("#nu_cpf").addClass("is-invalid");
			return false;		
		}			
		return true;   
	}
	else{
		return true;
	}
}