<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
    
    require_once("../Classes/Usuario.php");
    $usuario = new Usuario();
    $retorno = $usuario->listarUsuario($_POST);
?>
 
<div class="card card-custom gutter-b">
	<div class="card-header flex-wrap py-3">
		<div class="card-title">
			<svg width="20" height="20" viewBox="0 0 50 46" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M44.2 1H5.8C3.14903 1 1 3.14903 1 5.8V29.8C1 32.451 3.14903 34.6 5.8 34.6H44.2C46.851 34.6 49 32.451 49 29.8V5.8C49 3.14903 46.851 1 44.2 1Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
				<path d="M20.2 44.2H29.8" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
				<path d="M25 34.6001V44.2001" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
			</svg>&nbsp;
			<h3 class="card-label">
				Usuarios Cadastrados
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
					<a href="appUsuario/cadastro.php" class="btn btn-light-primary font-weight-bolder dropdown-toggle">
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
                    <th>ID</th>
					<th>Nome</th>
					<th>Email</th>
                    <th>Usuario</th>
                    <th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($dados = $retorno->fetch())
					{
                        echo "<tr>
                                <td>".$dados['id_usuario']."</td>
                                <td>".$dados['ds_nome']."</td>
								<td>".$dados['ds_email']."</td>
								<td>".$dados['ds_usuario']."</td>
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
<script src="./assets/js/datatables/appUsuario/lista_usuario.js" type="text/javascript"></script>
