<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once("../Classes/Ponto.php");

$id_alugado = $_REQUEST["id_alugado"];
$id_status = $_REQUEST["id_status"]; 
$ponto = new Ponto();

$dadosAlugado = $ponto->BuscarDadosAlugado($id_alugado);
?>
<div class="row">
    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white w-100"  >
        <div class="card-body">	
            <div class="flex-grow-1" style="display: inherit;">
                <h3  class="titulo-div">Status</h3> 
            </div>							
            <div class="timeline timeline-6 mt-3">
                <!--begin::Item-->
                <?php if($id_status == 1 || $id_status == 2 || $id_status == 3 || $id_status == 4 || $id_status == 5|| $id_status == 6|| $id_status == 7) : ?>
                <div class="timeline-item align-items-start">
                    <!--begin::Label-->
                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">...</div>
                    <!--end::Label-->

                    <!--begin::Badge-->
                    <div class="timeline-badge">
                        <i class="fa fa-genderless text-warning icon-xl"></i>
                    </div>
                    <!--end::Badge-->

                    <!--begin::Content-->
                    <div class="timeline-content d-flex">
                        <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">Aguardando Pagamento</span>
                    </div>
                    <!--end::Content-->
                </div>
                <?php endif; ?>
                <!--end::Item-->

                <!--begin::Item-->
                <?php if($id_status == 2 || $id_status == 3 || $id_status == 4 || $id_status == 5|| $id_status == 6|| $id_status == 7) : ?>
                <div class="timeline-item align-items-start">
                    <!--begin::Label-->
                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">...</div>
                    <!--end::Label-->

                    <!--begin::Badge-->
                    <div class="timeline-badge">
                        <i class="fa fa-genderless text-warning icon-xl"></i>
                    </div>
                    <!--end::Badge-->

                    <!--begin::Content-->
                    <div class="timeline-content d-flex">
                        <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">Confirme essa locação!</span>
                        <?php if($id_status == 2) : ?>
                            <button class="btn-sm ml-2 btn btn-primary">Confirmar</button>
                        <?php endif; ?>
                    </div>
                    <!--end::Content-->
                </div>
                <?php endif; ?>
                <!--end::Item-->

                <!--begin::Item-->
                <?php if($id_status == 3 || $id_status == 4 || $id_status == 5|| $id_status == 6|| $id_status == 7) : ?>
                <div class="timeline-item align-items-start">
                    <!--begin::Label-->
                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">...</div>
                    <!--end::Label-->

                    <!--begin::Badge-->
                    <div class="timeline-badge">
                        <i class="fa fa-genderless text-warning icon-xl"></i>
                    </div>
                    <!--end::Badge-->

                    <!--begin::Content-->
                    <div class="timeline-content d-flex">
                        <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">Material enviado para gráfica</span>
                    </div>
                    <!--end::Content-->
                </div>
                <?php endif; ?>
                <!--end::Item-->

                <!--begin::Item-->
                <?php if($id_status == 4 || $id_status == 5|| $id_status == 6|| $id_status == 7) : ?>
                <div class="timeline-item align-items-start">
                    <!--begin::Label-->
                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">...</div>
                    <!--end::Label-->

                    <!--begin::Badge-->
                    <div class="timeline-badge">
                        <i class="fa fa-genderless text-warning icon-xl"></i>
                    </div>
                    <!--end::Badge-->

                    <!--begin::Content-->
                    <div class="timeline-content d-flex">
                        <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">Material indo até você!</span>
                    </div>
                    <!--end::Content-->
                </div>
                <?php endif; ?>
                <!--begin::Item-->
                <?php if( $id_status == 5|| $id_status == 6|| $id_status == 7) : ?>
                <div class="timeline-item align-items-start">
                    <!--begin::Label-->
                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">...</div>
                    <!--end::Label-->

                    <!--begin::Badge-->
                    <div class="timeline-badge">
                        <i class="fa fa-genderless text-warning icon-xl"></i>
                    </div>
                    <!--end::Badge-->

                    <!--begin::Content-->
                    <div class="timeline-content d-flex">
                        <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">Material chegou! Avise quando sair pra colagem.</span>
                        <?php if($id_status == 5) : ?>
                            <button class="btn-sm ml-2 btn btn-primary">Saiu!</button>
                        <?php endif; ?>
                    </div>
                    <!--end::Content-->
                </div>
                <?php endif; ?>
                <?php if( $id_status == 6|| $id_status == 7) : ?>
                <div class="timeline-item align-items-start">
                    <!--begin::Label-->
                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">...</div>
                    <!--end::Label-->

                    <!--begin::Badge-->
                    <div class="timeline-badge">
                        <i class="fa fa-genderless text-warning icon-xl"></i>
                    </div>
                    <!--end::Badge-->

                    <!--begin::Content-->
                    <div class="timeline-content d-flex">
                        <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">Saiu pra colagem! Avise quando estiver veiculada.</span>
                        <?php if($id_status == 6) : ?>
                            <button class="btn-sm ml-2 btn btn-primary">Mídia veiculada!</button>
                        <?php endif; ?>
                    </div>
                    <!--end::Content-->
                </div>
                <?php endif; ?>
                <?php if( $id_status == 7) : ?>
                <div class="timeline-item align-items-start">
                    <!--begin::Label-->
                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">...</div>
                    <!--end::Label-->

                    <!--begin::Badge-->
                    <div class="timeline-badge">
                        <i class="fa fa-genderless text-warning icon-xl"></i>
                    </div>
                    <!--end::Badge-->

                    <!--begin::Content-->
                    <div class="timeline-content d-flex">
                        <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">Mídia veiculada</span>
                    </div>
                    <!--end::Content-->
                </div>
                <?php endif; ?>
                <!--end::Item-->
                <!--end::Item-->
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white w-100"  >
        <div class="card-body ">
            <div class="flex-grow-1" style="display: inherit;">
                <h3  class="titulo-div">Detalhes</h3> 
            </div>
            <div class="row">
                <div class="col-6">
                    <label>Valor</label>
                    <input class="ml-2 form-control" readonly="readonly" value="R$ <?php echo $dadosAlugado["nu_valor_alugado"] ?>">
                </div>
                <div class="col-6">
                    <label>Material</label>
                    <input class="ml-2 form-control" readonly="readonly" value="<?php echo $dadosAlugado["ds_material"] ?>">
                </div>
            </div>
        </div>
    </div>														
</div>

