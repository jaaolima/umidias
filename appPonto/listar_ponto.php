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
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 61.391 61.391" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
				<path style="" d="M42.367,32.559c2.604-3.559,4.078-8.17,4.078-13.059C46.445,8.748,39.38,0,30.695,0   s-15.75,8.748-15.75,19.5c0,4.889,1.475,9.5,4.078,13.059C11.721,36.723,7.12,44.489,7.12,53.022c0,4.615,3.754,8.369,8.368,8.369   h30.415c4.614,0,8.368-3.754,8.368-8.369C54.272,44.487,49.67,36.723,42.367,32.559z M30.695,4.001c6.479,0,11.75,6.953,11.75,15.5   c0,4.842-1.69,9.324-4.639,12.299c-2.072,2.096-4.532,3.201-7.111,3.201c-0.967,0-1.918-0.154-2.837-0.461   c-1.532-0.508-2.979-1.43-4.274-2.74c-0.001,0-0.002,0-0.002,0c-2.947-2.977-4.637-7.457-4.637-12.299   C18.945,10.954,24.217,4.001,30.695,4.001z M45.903,57.391H15.488c-2.408,0-4.368-1.961-4.368-4.369   c0-7.391,4.149-14.1,10.674-17.434c0.004,0.004,0.009,0.008,0.013,0.01c0.068,0.059,0.141,0.107,0.21,0.164   c0.285,0.232,0.573,0.459,0.87,0.668c0.135,0.096,0.273,0.18,0.41,0.27c0.237,0.156,0.476,0.311,0.719,0.451   c0.154,0.09,0.313,0.17,0.47,0.254c0.233,0.123,0.468,0.244,0.705,0.354c0.164,0.076,0.329,0.146,0.496,0.215   c0.238,0.1,0.479,0.191,0.722,0.275c0.166,0.059,0.333,0.117,0.502,0.168c0.252,0.078,0.506,0.145,0.761,0.207   c0.161,0.039,0.322,0.08,0.485,0.113c0.281,0.059,0.564,0.1,0.848,0.137c0.139,0.02,0.276,0.045,0.416,0.059   c0.423,0.043,0.849,0.068,1.275,0.068s0.853-0.025,1.275-0.068c0.14-0.014,0.277-0.039,0.416-0.059   c0.283-0.037,0.567-0.078,0.849-0.137c0.162-0.033,0.323-0.074,0.484-0.113c0.255-0.063,0.509-0.129,0.761-0.207   c0.169-0.051,0.336-0.107,0.502-0.166c0.243-0.086,0.483-0.178,0.723-0.277c0.166-0.068,0.33-0.139,0.495-0.215   c0.238-0.109,0.473-0.23,0.706-0.354c0.157-0.084,0.313-0.164,0.468-0.254c0.245-0.143,0.484-0.297,0.724-0.455   c0.135-0.088,0.272-0.172,0.405-0.266c0.303-0.213,0.597-0.443,0.888-0.682c0.063-0.051,0.129-0.096,0.191-0.148   c0.005-0.004,0.01-0.008,0.015-0.012c6.525,3.332,10.675,10.041,10.675,17.434C50.272,55.43,48.313,57.391,45.903,57.391z" fill="#57616a" data-original="#010002"/>
			</svg>&nbsp;
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
								<td>".$dados['id_midia']."</td>
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
