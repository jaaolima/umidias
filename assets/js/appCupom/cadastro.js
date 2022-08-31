$(document).ready(function() {
	    

    $("#cancelar").on("click", function(){
		$('#form_usuario').trigger("reset");
        redirectTo("appBisemana/listar_bisemana.php");
    }); 

	$("#salvar").on("click", function(e){ 
		if(validar())
		{ 
			$.ajax({
		        url: 'appBisemana/gravar_bisemana.php'
				, data: $("#form_usuario").serialize()
		        , type: 'post'
		        , success: function(html) {
		        	swal.fire({
		                position: 'top-right',
		                type: 'success',
		                title: html,
		                showConfirmButton: true
		            });
		            
					redirectTo("appBisemana/listar_bisemana.php");
		        }
				, error: function (data) {
					swal.fire("Erro", data.responseText, "error");
				}
		    });		
		}	
	});
});

function validar()
{
	if($("#ds_bisemana").val() == "")
	{
		$("#ds_bisemana").focus();
		swal.fire("Erro", "Preencha a bisemana", "error");
		$("#ds_bisemana").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_bisemana").removeClass("is-invalid");	
		$("#ds_bisemana").addClass("is-valid");
	}
    if($("#dt_inicial").val() == "")
	{
		$("#dt_inicial").focus();
		swal.fire("Erro", "Preencha a Data Inicial", "error");
		$("#dt_inicial").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#dt_inicial").removeClass("is-invalid");	
		$("#dt_inicial").addClass("is-valid");
	}
    if($("#dt_final").val() == "")
	{
		$("#dt_final").focus();
		swal.fire("Erro", "Preencha a Data Final", "error");
		$("#dt_final").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#dt_final").removeClass("is-invalid");	
		$("#dt_final").addClass("is-valid");
	}

	
	
	

	return true;
}