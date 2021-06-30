<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once("../Classes/Ponto.php");
$ponto = new Ponto();
?>
<div class="row">
    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white"  >
        <div class="card-body">	
            <div class="flex-grow-1" style="display: inherit;">
                <h3  class="titulo-div">Status</h3> 
            </div>							
            <div class="timeline timeline-6 mt-3">
                <!--begin::Item-->
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
                <!--end::Item-->

                <!--begin::Item-->
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
                        <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">Aguardando Confirmação</span>
                        <button class="btn btn-primary">Confirmar</button>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Item-->

                <!--begin::Item-->
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
                        <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">Material sendo preparado</span>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Item-->

                <!--begin::Item-->
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
                        <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">Colocando na Rua!</span>
                    </div>
                    <!--end::Content-->
                </div>
                <!--begin::Item-->
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
                        <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">Ativo</span>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Item-->
                <!--end::Item-->
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-white"  >
        <div class="card-body">
            <div class="flex-grow-1" style="display: inherit;">
                <h3  class="titulo-div">Detalhes</h3> 
            </div>	

        </div>
    </div>														
</div>

