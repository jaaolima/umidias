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

			//== Order settings
			order: [[1, 'asc']],


			columnDefs: [

				{
					targets: -1,
					title: 'Ações',
					orderable: false,
					render: function(data, type, full, meta) {
						return `
                        
                         <a href="appTreino/cadastro.php?id_aluno=`+full[0]+`"" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Visualizar Cadastro">
                          <i class="la la-edit"></i>
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
	

		table.on('change', 'tbody tr .m-checkbox', function() {
			$(this).parents('tr').toggleClass('active');
		});	

		table.on('click', '#excluir', function() {
			var id_aluno = $(this).data("aluno");
			swal.fire({
	            title: 'Tem certeza?',
	            text: "Desejar excluir o Aluno?",
	            type: 'warning',
	            showCancelButton: true,
	            cancelButtonColor: '#fd397a',
	            confirmButtonText: 'Sim, posseguir!',
				cancelButtonText: 'Cancelar'
	        }).then(function(result) {
	            if (result.value) {
					$.ajax({
				        url: 'appAluno/excluir_aluno.php'
				        , type: 'post'
				        , data: {id_aluno : id_aluno}
				        , success: function(html) {
							swal.fire('Pronto!',html,'success');
							redirectTo("appAluno/listar_aluno.php");				
				        }
				    });
	                
	            }
	        });
			
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