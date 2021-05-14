<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
    
    require_once("../Classes/Categoria.php");
    $categoria = new Categoria();
    $retorno = $categoria->listarCategoria($_POST);
?>

<div class="card card-custom gutter-b">
	<div class="card-header flex-wrap py-3">
		<div class="card-title">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 573.33331 573" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m475 101.585938h-182.875c-14 .003906-26.832031-7.808594-33.25-20.25l-25.75-49.625c-10.722656-20.738282-32.15625-33.71875-55.5-33.628907h-115.125c-34.511719.015625-62.484375 27.988281-62.5 62.5v349.503907c.015625 34.511718 27.988281 62.484374 62.5 62.5h412.5c34.511719-.015626 62.484375-27.988282 62.5-62.5v-246c-.015625-34.511719-27.988281-62.492188-62.5-62.5zm-412.5-78.375h115.125c14-.011719 26.832031 7.808593 33.25 20.25l25.75 49.621093c1.597656 2.996094 3.394531 5.875 5.375 8.628907h-217v-40.878907c.003906-20.726562 16.773438-37.546875 37.5-37.621093zm450 386.996093c-.058594 20.6875-16.816406 37.441407-37.5 37.5h-412.5c-20.683594-.058593-37.441406-16.8125-37.5-37.5v-283.621093h254.875c1.226562.023437 2.449219-.144532 3.625-.5 2.902344.394531 5.820312.605468 8.75.625h182.75c20.683594.058593 37.441406 16.8125 37.5 37.5zm0 0" fill="#57616a" data-original="#000000" style="" /></g></svg>&nbsp;
			<h3 class="card-label">
				Categorias Cadastrados
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
					<a href="appCategoria/cadastro.php" class="btn btn-light-primary font-weight-bolder dropdown-toggle">
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
					<th>Id</th>
					<th>Nome</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($dados = $retorno->fetch())
					{
						echo "<tr>
								<td>".$dados['id_midia']."</td>
								<td>".$dados['ds_nome']."</td>
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
<script src="./assets/js/datatables/appCategoria/lista_categoria.js" type="text/javascript"></script>
