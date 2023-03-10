var DatatablesBasicBasic = function() {

	var initTable1 = function() {
		var table = $('#table_usuario');

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

			// //== Order settings
			// order: [[1, 'asc']],


			columnDefs: [

				{
					targets: -1,
					title: 'Ações',
					orderable: false,
					render: function(data, type, full, meta) {
						return `
                        
                         <a id="excluir"class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Deletar" data-bisemana="`+full[0]+`" >
                          <i class="la la-remove"></i>
                        </a> 
                        `;
					},
				},
				{
					targets: 0,
					visible: false
				},
				
				
			],
		});
		table.on('click', '#excluir', function() {
			var id_bisemana = $(this).data("bisemana");
			swal.fire({
	            title: 'Tem certeza?',
	            text: "Desejar excluir a Bisemana?",
	            type: 'warning',
	            showCancelButton: true,
	            cancelButtonColor: '#fd397a',
	            confirmButtonText: 'Sim, posseguir!',
				cancelButtonText: 'Cancelar'
	        }).then(function(result) {
	            if (result.value) {
					$.ajax({
				        url: 'appBisemana/excluir_bisemana.php'
				        , type: 'post'
				        , data: {id_bisemana : id_bisemana}
				        , success: function(html) {
							swal.fire('Pronto!',html,'success');
							redirectTo("appBisemana/listar_bisemana.php");				
				        }
				    });
	                
	            }
	        });
			
		}); 

		table.on('change', 'tbody tr .m-checkbox', function() {
			$(this).parents('tr').toggleClass('active');
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