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

			pageLength: 5,

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


			columnDefs: [

				{
					targets: -1,
					title: 'Ações',
					orderable: false,
					render: function(data, type, full, meta) {
						return `
                        <a id="visualizar" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-status=`+full[0]+` data-alugado=`+full[1]+` title="Visualizar Mídia">
                          <i class="la la-chart-bar"></i>
                        </a>
						
                        `;
					},
				},
				{
					targets: 0,
					visible: false
				},
				{
					targets: 1,
					visible: false
				},
				
				
			],
		}); 

        table.on('click', '#visualizar', function() {
			var id_status = $(this).data("status");
			var id_alugado = $(this).data("alugado");
			$.ajax({
                url: 'appParceiro/ver_aluguel.php'
                , data: {id_status: id_status, id_alugado: id_alugado}
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