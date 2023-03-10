var DatatablesBasicBasic = function() {

	var initTable1 = function() {
		var table = $('#table_ponto');

		// begin first table
		table.DataTable({
			responsive: true,
			retrieve: true,
			

			//== DOM Layout settings
			dom: `f<'row'<'col-sm-12'tr>> 
			<'row'<'col-sm-12 col-md-5'><'col-sm-12 col-md-7 dataTables_pager'p>>`,

			pageLength: 10,

			language: {
				'lengthMenu': 'Mostrar _MENU_',
			},
			"oLanguage": {
			    "sSearch": "<span>Pesquisar:</span> _INPUT_",
			    "sLengthMenu": "<span>Mostrar:</span> _MENU_",
			    "sZeroRecords": "Não existem dados cadastrados",
			    "oPaginate": { "sFirst": "Primeira", "sLast": "Última", "sNext": ">", "sPrevious": "<" }
		    },

			//== Order settings
			order: [[1, 'asc']],


			columnDefs: [

				{
					targets: -1,
					orderable: false
				},
				{
					targets: 0,
					visible: false
				},
				
				
			],
		});
		 

		// table.on('click', '#ver_midia', function() {
		// 	var id_ponto = $(this).data("ponto");
		// 	redirectTo("appParceiro/ver_minha_midia.php?id_ponto="+id_ponto);	
			
		// }); 
	

		table.on('change', 'tbody tr .m-checkbox', function() {
			$(this).parents('tr').toggleClass('active');
		});	

		/*table.on('click', '#btn-frequencia', function() {
			
			var id_aula = $(this).data("aula");

			redirectTo("appDiario/cadastro_frequencia.php?id_aula="+id_aula);
			
		});*/

		table.on('click', '#btn-editar', function() {

			redirectTo("appUsuario/alterar_cadastro");
			
		});

		/*table.on('click', '#btn-excluir', function() {
			var id_aula = $(this).data("aula");

			swal({
	            title: 'Tem certeza?',
	            text: "Desejar excluir a aula e todas as frequências associadas?",
	            type: 'warning',
	            showCancelButton: true,
	            confirmButtonText: 'Sim, posseguir!',
				cancelButtonText: 'Cancelar'
	        }).then(function(result) {
	            if (result.value) {
					$.ajax({
				        url: 'appDiario/excluir_aula.php'
				        , type: 'post'
				        , data: {id_aula : id_aula}
				        , success: function(html) {
							swal('Pronto!',html,'success');
							$.ajax({
						        url: 'appDiario/listar_aula.php'
						        , type: 'post'
						        , data: $("#busca_aula").serialize()
						        , success: function(html) {
						        	$("#lista").html(html);
						        }
						        , error: function(xhr, status, error) {
								  	swal("Erro", xhr.responseText, "error");
								}
						    });						
				        }
				    });
	                
	            }
	        });
			
		}); */
		
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