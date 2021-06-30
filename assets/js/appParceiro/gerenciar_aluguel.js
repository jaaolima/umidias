var DatatablesBasicBasic = function() {

	var initTable1 = function() {
		var table = $('#table_ponto');

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
					targets: -1,
					title: 'Ações',
					orderable: false,
					render: function(data, type, full, meta) {
						return `
                        <a id="visualizar" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-alugado=`+full[0]+` title="Visualizar Mídia">
                          <i class="la la-chart-bar"></i>
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

        table.on('click', '#visualizar', function() {
			var id_alugado = $(this).data("alugado");
			$.ajax({
                url: 'appParceiro/ver_aluguel.php'
                , data: {id_alugado: id_alugado}
                , type: 'post'
                , success: function(html) {
                    $("#timeline").html(html);
                    $("#timeline").slideDown(); 
                }
                , error: function (data) {
                    $("#timeline").slideUp();
                    swal("Erro", data.responseText, "error"); 
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