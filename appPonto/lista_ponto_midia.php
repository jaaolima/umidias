<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
    
    require_once("../Classes/Ponto.php");
    $ponto = new Ponto();
    $id_midia = $_REQUEST["id_midia"];
    $retorno = $ponto->listarPontoMidia($id_midia);
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
					while($dados = $retorno->fetch()){
                        $dataInicial = date('d/m/Y', strtotime($dados["dt_inicial"]));
                        $dataFinal = date('d/m/Y', strtotime($dados["dt_final"]));
                        echo "<tr>
                                <td>
                                    <div class='d-flex'>
                                        <div class='d-flex'>
                                            <span class='symbol symbol-lg-50 symbol-circle symbol-40 symbol-light-success'>
                                                <img class='symbol-label img-fluid' src='".$dados["ds_foto"]."'>
                                            </span>
                                            <div class='ml-3 mt-2'>
                                                <span class='texto-negrito'>".$dados["ds_tipo"]."</span><br>																				
                                                <svg class='mr-1' width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                    <g clip-path='url(#clip0)'>
                                                    <path d='M14 6.66675C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66675C2 5.07545 2.63214 3.54933 3.75736 2.42411C4.88258 1.29889 6.4087 0.666748 8 0.666748C9.5913 0.666748 11.1174 1.29889 12.2426 2.42411C13.3679 3.54933 14 5.07545 14 6.66675Z' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                                    <path d='M8 8.66675C9.10457 8.66675 10 7.77132 10 6.66675C10 5.56218 9.10457 4.66675 8 4.66675C6.89543 4.66675 6 5.56218 6 6.66675C6 7.77132 6.89543 8.66675 8 8.66675Z' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id='clip0'>
                                                    <rect width='16' height='16' fill='white'/>
                                                    </clipPath>
                                                    </defs>
                                                </svg>
                                                <span>".$dados["ds_local"]."</span>	
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class='py-8'>".$dataInicial."</td> 
                                <td class='py-8'>".$dataFinal."</td>
                                <td class='py-8'>".$dados["nu_valor"]."</td>
                                <td class='py-8'><a href='appCliente/ver_minha_midia.php?id_ponto=".$dados["id_ponto"]."'>
                                    <svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path d='M5 12H19' stroke='#B721FF' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                        <path d='M12 5L19 12L12 19' stroke='#B721FF' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                    </svg>
                                </a></td>
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
