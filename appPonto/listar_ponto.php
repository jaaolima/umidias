<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
    
    require_once("../Classes/Ponto.php");
    $ponto = new Ponto();
    $retorno = $ponto->listarPonto($_POST);
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
					<!--<div class="dropdown dropdown-inline">
						<button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="la la-download"></i> Exportar Relatório
						</button>
						<div class="dropdown-menu dropdown-menu-right">
							<ul class="kt-nav">
								<li class="kt-nav__section kt-nav__section--first">
									<span class="kt-nav__section-text">Selecione uma opção</span>
								</li>
								<li class="kt-nav__item">
									<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-print"></i>
										<span class="kt-nav__link-text">Imprimir</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-copy"></i>
										<span class="kt-nav__link-text">Copiar</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-file-excel-o"></i>
										<span class="kt-nav__link-text">Excel</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-file-text-o"></i>
										<span class="kt-nav__link-text">CSV</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-file-pdf-o"></i>
										<span class="kt-nav__link-text">PDF</span>
									</a>
								</li>
							</ul>
						</div>
					</div>-->
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
					<th>Status</th>
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
								<td>".$dados['st_status']."</td>
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
