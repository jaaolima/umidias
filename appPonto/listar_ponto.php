<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
    
    require_once("../Classes/Ponto.php");
    $ponto = new Ponto();
    $retorno = $ponto->listarTodosPonto();
?>
<div class="card card-custom gutter-b">
	<div class="card-header flex-wrap py-3">
		<div class="card-title"> 
			<i class="flaticon-placeholder icon-xl"></i>&nbsp;
			<h3 class="card-label">
				Pontos Cadastrados
			</h3> 
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="kt-portlet__head-wrapper">
				<div class="kt-portlet__head-actions">
					&nbsp;
					<a href="appPonto/cadastro.php" class="btn btn-light-primary font-weight-bolder">
						<i class="la la-plus"></i>
						Cadastrar novo
					</a>
				</div>
			</div> 
		</div>
	</div>
	<div class="card-body">

		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" id="table_usuario">
			<thead>
				<tr>
					<th>Id Ponto</th>
					<th>Descrição</th>
					<th>Valor</th>
					<th>Tipo de Mídia</th>
					<th>Observações</th>
					<th>Ações</th>          
				</tr>
			</thead>
			<tbody>
				<?php
					while ($dados = $retorno->fetch())
					{
						echo "<tr>
								<td>".$dados['id_ponto']."</td>
								<td>".$dados['ds_descricao']."</td>
								<td>".$dados['nu_valor']."</td>
								<td>".$dados['ds_tipo']."</td>
								<td>".$dados['ds_observacao']."</td>
								<td nowrap></td>
							</tr>";
					}
				?>
			</tbody>
		</table>

		<!--end: Datatable -->
	</div> 
</div>

<script src="./assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
<script src="./assets/js/datatables/appPonto/lista_ponto.js" type="text/javascript"></script> 
