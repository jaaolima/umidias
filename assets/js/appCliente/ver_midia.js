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
			order: [[1, 'asc']],


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
		$('#foto').removeClass("d-none");
		$('#map').addClass("d-none");
		$(this).addClass("btn-mapa-active");
		$(this).removeClass("btn-mapa");
		$('#ver_mapa').removeClass("btn-mapa-active");
		$('#ver_mapa').addClass("btn-mapa");
    }); 

	$("#ver_mapa").on("click", function(){
		$('#map').removeClass("d-none");
		$('#foto').addClass("d-none");
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
	
	$("#pagamento").on("click", function(e){
			
		if(validarDetalhe() )
		{
			redirectTo("appCliente/pagamento.php");	
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
		if($("#mes option:selected").val() == "")
		{
			$("#mes").focus();
			swal.fire("Erro", "Selecione a quantidade de meses", "error");
			$("#mes").addClass("is-invalid");
			return false;	
		}
		else
		{
			$("#mes").removeClass("is-invalid");	
			$("#mes").addClass("is-valid");
		}
	}
	if(id_midia == 1){
		if($("#bisemana :checked").val() == "")
		{
			$("#bisemana").focus();
			swal.fire("Erro", "Selecione um bisemana", "error");
			$("#bisemana").addClass("is-invalid");
			return false;	
		}
		else
		{
			$("#bisemana").removeClass("is-invalid");	
			$("#bisemana").addClass("is-valid");
		}
		
	}
	return true;	
}
function validarDetalhe(){
	if(id_midia == 1){
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
		
	}
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