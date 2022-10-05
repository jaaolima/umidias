$(document).ready(function() {
	    
	$("#adicionar").on("click", function(e){ 
        var cpf = $("#nu_cpf").val();
		if(validar() && validarCPF(cpf))
		{ 
			$.ajax({
		        url: 'appCliente/gravar_dados_pessoais_cliente.php'
				, data: $("#kt_login_signin_form").serialize() 
		        , type: 'post'
		        , success: function(html) {
		        	swal.fire({
		                position: 'top-right',
		                type: 'success',
		                title: html,
		                showConfirmButton: true 
		            });
		            
					redirectTo("../principal.php");
		        }
				, error: function (data) {
					swal.fire("Erro", data.responseText, "error");
				}
		    });		 
		}	
	});
    $("#nu_cpf").inputmask({
		"mask": "999.999.999-99",
		autoUnmask: true,
	});
});

function validar()
{
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

    if($("#ds_endereco").val() == "")
	{
		$("#ds_endereco").focus();
		swal.fire("Erro", "Preencha o endereço", "error");
		$("#ds_endereco").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_endereco").removeClass("is-invalid");	
		$("#ds_endereco").addClass("is-valid");
	}

	
	
	

	return true;
}
function validarCPF(cpf) {	

	cpf = cpf.replace(/[^\d]+/g,'');

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