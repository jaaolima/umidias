<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
    
    require_once("../Classes/Aluno.php");
    $aluno = new Aluno();
    $retorno = $aluno->listarAluno($_POST);
?>
 
<div class="card card-custom gutter-b">
	<div class="card-header flex-wrap py-3">
		<div class="card-title">
			<i class="flaticon-users icon-xl"></i>&nbsp;
			<h3 class="card-label">
				Alunos Cadastrados
			</h3>
		</div>
	</div>
	<div class="card-body">

		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" id="table_usuario">
			<thead>
				<tr>
                    <th>ID</th>
                    <th>Aluno</th>
                    <th></th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($dados = $retorno->fetch())
					{
                        echo "<tr>
                                <td>".$dados['id_usuario']."</td>
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
<script src="./assets/js/datatables/appTreino/lista_aluno.js" type="text/javascript"></script>
