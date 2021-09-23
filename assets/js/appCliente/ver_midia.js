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

	

	// $("#dt_inicial").on("change", function(e){
	// 	$("#div_dt_final").show();

	// 	var arrows;
	// 	if (KTUtil.isRTL()) {
	// 		arrows = {
	// 			leftArrow: '<i class="la la-angle-right"></i>',
	// 			rightArrow: '<i class="la la-angle-left"></i>'
	// 		}
	// 	} else {
	// 		arrows = {
	// 			leftArrow: '<i class="la la-angle-left"></i>',
	// 			rightArrow: '<i class="la la-angle-right"></i>'
	// 		}
	// 	}



	// 	$('.datepicker').datepicker({
	// 		startDate: "d",
	// 		language: "pt-BR",
	// 		autoclose: true,
	// 		beforeShowDay: function(date){
	// 			  if (date.getMonth() == (new Date()).getMonth())
	// 				switch (date.getDate()){
	// 				  case 4:
	// 					return {
	// 					  tooltip: 'Example tooltip',
	// 					  classes: 'active'
	// 					};
	// 				  case 8:
	// 					return false;
	// 				  case 12:
	// 					return "green";
	// 			  }
	// 			},
	// 		beforeShowMonth: function(date){
	// 			  if (date.getMonth() == 8) {
	// 				return false;
	// 			  }
	// 			},
	// 		beforeShowYear: function(date){
	// 			  if (date.getFullYear() == 2007) {
	// 				return false;
	// 			  }
	// 			},
	// 		datesDisabled: ['09/06/2021', '09/21/2021'],
	// 		toggleActive: true
	// 	});
		
	// 	dt_inicial = $("#dt_inicial").val().split('/').reverse().join(',');
	// 	console.log(dt_inicial);
	// 	$('#dt_final').datepicker({
	// 		format: 'dd/mm/yyyy',
	// 		startDate: new Date(dt_inicial),
	// 		rtl: KTUtil.isRTL(),
	// 		todayHighlight: true,
	// 		orientation: "bottom left",
	// 		templates: arrows,
	// 		dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
	// 		dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
	// 		dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
	// 		monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
	// 		monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
	// 		nextText: 'Próximo',
	// 		prevText: 'Anterior'
	// 	});
	// });

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
			if(id_midia == 2){
				var id_ponto = $("#id_ponto").val();
				var dt_inicial = $("#dt_inicial").val();
				var mes = $("#mes").val();
				var id_material = $("#id_material").val();
				var ds_arte = $('input[type=file]')[0].files
				redirectTo("appCliente/pagamento.php?id_ponto="+id_ponto+"&dt_inicial="+dt_inicial+"&ds_arte="+ds_arte+"&mes="+mes+"&id_material="+id_material);	
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
		if($("#dt_inicial").val() == "")
		{
			$("#dt_inicial").focus();
			swal.fire("Erro", "Adicione uma data Inicial", "error");
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
			swal.fire("Erro", "Adicione a data Final", "error");
			$("#dt_final").addClass("is-invalid");
			return false;	
		}
		else
		{
			$("#dt_final").removeClass("is-invalid");	
			$("#dt_final").addClass("is-valid");
		}
		// if($("#mes option:selected").val() == "")
		// {
		// 	$("#mes").focus();
		// 	swal.fire("Erro", "Selecione a quantidade de meses", "error");
		// 	$("#mes").addClass("is-invalid"); 
		// 	return false;	
		// }
		// else
		// {
		// 	$("#mes").removeClass("is-invalid");	
		// 	$("#mes").addClass("is-valid");
		// }
	}
	if(id_midia == 1){
		if ($('input[name="bisemana[]"]:checked').length == 0)
	{
		$("input[name='bisemana[]']").focus();
		swal.fire("Aviso", "Selecione uma das opções", "warning");      
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