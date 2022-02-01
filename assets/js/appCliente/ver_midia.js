var DatatablesBasicBasic = function() {

	var initTable1 = function() {
		var table = $('#table_bisemana');

		// begin first table
		table.DataTable({
			responsive: true,
			retrieve: true,
			

			//== DOM Layout settings
			dom: `f<'row'<'col-sm-12'tr>> 
			<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'p>>`,

			lengthMenu: [5, 10, 25, 50],

			pageLength: 5,

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
			order: [[0, 'asc']],


			columnDefs: [

				{
					targets: 0,
					visible: false
				},
				
				
			],
		});
	

		
	};

	var initTable2 = function() {
		var table = $('#table_mes');

		// begin first table
		table.DataTable({
			responsive: true,
			retrieve: true,
			

			//== DOM Layout settings
			dom: `f<'row'<'col-sm-12'tr>> 
			<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'p>>`,

			lengthMenu: [5, 10, 25, 50],

			pageLength: 5,

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
			order: [[0, 'asc']],


			columnDefs: [

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
			initTable2();
		},

	};

}();


jQuery(document).ready(function() {
	DatatablesBasicBasic.init();
});

$(document).ready(function() {
	    

    $("#ver_foto").on("click", function(){
		$('#carrossel').removeClass("d-none");
		$('#map').addClass("d-none");
		$(this).addClass("btn-mapa-active");
		$(this).removeClass("btn-mapa");
		$('#ver_mapa').removeClass("btn-mapa-active"); 
		$('#ver_mapa').addClass("btn-mapa");
    }); 

	$("#ver_mapa").on("click", function(){
		$('#map').removeClass("d-none");
		$('#carrossel').addClass("d-none");
		$(this).addClass("btn-mapa-active");
		$(this).removeClass("btn-mapa");
		$('#ver_foto').removeClass("btn-mapa-active");
		$('#ver_foto').addClass("btn-mapa");
    }); 

	$("#alugar").on("click", function(e){
		var id_midia = $("#id_midia").val();
		if(validarAlugar(id_midia)){
			$('#alugar_midia').show();
			$('#ver_midia').hide(); 
		}
		
	});

	$("#voltar").on("click", function(e){

		$('#ver_midia').show();
		$('#alugar_midia').hide();
			
	});
	
	$("#carrinho").on("click", function(e){
		var id_midia = $("#id_midia").val();
		if(validarDetalhe(id_midia))
		{
			if(id_midia == 2){
				form = $("#form_alugar").get(0);
				$.ajax({
					url: 'appCliente/gravar_carrinho.php'
					, type: 'post'
					, data: new FormData(form)
					, mimeType: 'multipart/form-data'  
					, processData: false
					, contentType: false
					, success: function() {
						redirectTo("appCliente/carrinho.php");
					}
					, error: function (data) {
						swal.fire("Erro", data.responseText, "error"); 
					}
				});	
				
			}
			if(id_midia == 1){
				form = $("#form_alugar").get(0);
				$.ajax({
					url: 'appCliente/gravar_carrinho.php'
					, type: 'post'
					, data: new FormData(form)
					, mimeType: 'multipart/form-data'  
					, processData: false
					, contentType: false
					, success: function() {
						redirectTo("appCliente/carrinho.php");
					}
					, error: function (data) {
						swal.fire("Erro", data.responseText, "error"); 
					}
				});	
				
			}
			
		}	
	});

	$("#pagamento").on("click", function(e){
		var id_midia = $("#id_midia").val();
		if(validarDetalhe(id_midia))
		{
			// if(id_midia == 2){
			// 	var id_ponto = $("#id_ponto").val();
			// 	var dt_inicial = $("#dt_inicial").val();
			// 	var mes = $("#mes").val();
			// 	var id_material = $("#id_material").val();
			// 	var ds_arte = $('input[type=file]')[0].files
			// 	redirectTo("appCliente/pagamento.php?id_ponto="+id_ponto+"&dt_inicial="+dt_inicial+"&ds_arte="+ds_arte+"&mes="+mes+"&id_material="+id_material);	
			// }
			if(id_midia == 2){
				var id_ponto = $("#id_ponto").val();
				var mes = new Array();
				$("input[name='mes[]']:checked").each(function ()
				{
					mes.push( $(this).val());
				});
				var id_material = $("#id_material").val();
				var ds_arte = $('input[type=file]')[0].files
				redirectTo("appCliente/pagamento.php?id_ponto="+id_ponto+"&mes="+mes+"&ds_arte="+ds_arte+"&id_material="+id_material);
			}
			if(id_midia == 1){
				var id_ponto = $("#id_ponto").val();
				var bisemana = new Array();
				$("input[name='bisemana[]']:checked").each(function ()
				{
					bisemana.push( $(this).val());
				});
				var id_material = $("#id_material").val();
				var ds_arte = $('input[type=file]')[0].files
				redirectTo("appCliente/pagamento.php?id_ponto="+id_ponto+"&bisemana="+bisemana+"&ds_arte="+ds_arte+"&id_material="+id_material);
			}
			
		}	
	});

});






function validarAlugar(id_midia){
	if(id_midia == 2){
		// if($("#dt_inicial_final").val() == "")
		// {
		// 	$("#dt_inicial_final").focus();
		// 	swal.fire("Erro", "Adicione uma data", "error");
		// 	$("#dt_inicial_final").addClass("is-invalid");
		// 	return false;	
		// }
		// else
		// {
		// 	$("#dt_inicial_final").removeClass("is-invalid");	
		// 	$("#dt_inicial_final").addClass("is-valid");
		// }
		if ($('input[name="mes[]"]:checked').length == 0)
		{
			$("input[name='mes[]']").focus();
			swal.fire("Aviso", "Selecione pelo menos um mês", "warning");      
			return false;	
		}
	}
	if(id_midia == 1){
		if ($('input[name="bisemana[]"]:checked').length == 0)
		{
			$("input[name='bisemana[]']").focus();
			swal.fire("Aviso", "Selecione pelo menos uma bisemana", "warning");      
			return false;	
		}
		
	}
	if($("#id_material option:selected").val() == "")
	{
		$("#id_material").focus();
		swal.fire("Erro", "Selecione um material", "error");
		$("#id_material").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#id_material").removeClass("is-invalid");	
		$("#id_material").addClass("is-valid");
	}
	return true;	
}
function validarDetalhe(){

	if($("#ds_arte").val() == "")
	{
		$("#ds_arte").focus();
		swal.fire("Erro", "Adicione uma arte", "error");
		$("#ds_arte").addClass("is-invalid");
		return false;	
	}
	else
	{
		$("#ds_arte").removeClass("is-invalid");	
		$("#ds_arte").addClass("is-valid");
	}
	return true;
}