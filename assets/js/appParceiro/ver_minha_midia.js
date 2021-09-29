
$(document).ready(function() {
	$("#desativar").on('click', function() {
		var id_ponto = $("#id_ponto");
		swal.fire({
			title: 'Tem certeza?',
			text: "Desejar Desativar o Ponto?",
			type: 'warning',
			showCancelButton: true,
			cancelButtonColor: '#fd397a',
			confirmButtonText: 'Sim, posseguir!',
			cancelButtonText: 'Cancelar'
		}).then(function(result) { 
			console.log(result.value);  
			if (result.value == true) {
				$.ajax({
					url: 'appPonto/desativar_ponto.php'
					, type: 'post'
					, data: {id_ponto: id_ponto}
					, success: function(html) {
						swal.fire('Pronto!',html,'success');
						redirectTo('appParceiro/ver_minha_midia.php?id_ponto='+id_ponto);				
					}
				});
				
			}
		});
		
	});    
	
	$("#ativar").on('click', function() {
		var id_ponto = $("#id_ponto");
		swal.fire({
			title: 'Tem certeza?',
			text: "Desejar Ativar o Ponto?",
			type: 'warning',
			showCancelButton: true,
			cancelButtonColor: '#fd397a',
			confirmButtonText: 'Sim, posseguir!',
			cancelButtonText: 'Cancelar'
		}).then(function(result) { 
			if (result.value) {
				$.ajax({
					url: 'appPonto/ativar_ponto.php'
					, type: 'post'
					, data: {id_ponto : id_ponto}
					, success: function(html) {
						swal.fire('Pronto!',html,'success');
						redirectTo('appParceiro/ver_minha_midia.php?id_ponto='+id_ponto);				
					}
				});
				
			}
		});
		
	}); 

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

});
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
						<a id="visualizar" class="btn btn-sm btn-clean btn-icon btn-icon-md"  data-status=`+full[0]+` data-alugado=`+full[1]+` title="Visualizar Mídia">
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

		table.on('change', 'tbody tr .m-checkbox', function() {
			$(this).parents('tr').toggleClass('active');
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





