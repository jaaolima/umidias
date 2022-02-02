<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once("../Classes/Ponto.php");

$ponto = new Ponto();

$retornoMidias = $ponto->listarPontoProximos($_REQUEST['latitude'], $_REQUEST['longitude']);
?>
<div id="loading" style="margin:20px;">
    <div class="spinner spinner-primary mr-15"></div>
</div>
<div id="carrossel" style="display:none;">
    <div class="owl-carousel owl-theme">
    <?php
    while($dados = $retornoMidias->fetch()){ 
    echo "<div class='item' >
            <div class='card card-custom card-2'>
                <!--begin::Body-->
                <div class='card-body text-center' style='padding: 0px !important'>
                    <!--begin::User-->
                    <div class='position-relative' >
                        <img class='img-fluid w-100 rounded-top' src='".$dados["ds_foto"]."' alt='image' style='height:200px;' />
                    </div>
                    <!--end::User-->
                    <!--begin::Name-->
                    <div class='my-8 mx-15 text-left'>
                        <div class='d-flex ml-n8'>
                            <div class='mt-1'>
                                <svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                    <path d='M19.7273 10.3636C19.7273 16.0909 12.3636 21 12.3636 21C12.3636 21 5 16.0909 5 10.3636C5 8.41068 5.77581 6.53771 7.15676 5.15676C8.53771 3.77581 10.4107 3 12.3636 3C14.3166 3 16.1896 3.77581 17.5705 5.15676C18.9515 6.53771 19.7273 8.41068 19.7273 10.3636Z' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                    <path d='M12.3636 12.8183C13.7192 12.8183 14.8181 11.7193 14.8181 10.3637C14.8181 9.00812 13.7192 7.90918 12.3636 7.90918C11.008 7.90918 9.90906 9.00812 9.90906 10.3637C9.90906 11.7193 11.008 12.8183 12.3636 12.8183Z' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                </svg>
                            </div>
                            <div class='ml-2' style='text-overflow: ellipsis;-webkit-box-orient: vertical;display: -webkit-box;-webkit-line-clamp: 1;overflow: hidden;'> 
                                <a title='".$dados['ds_bairro']."'  href='appCliente/ver_midia.php?id_ponto=".$dados['id_ponto']."&id_midia=".$dados['id_midia']."'class='text-dark font-weight-bold text-dark font-size-h4 m-0'>".$dados['ds_bairro']."</a>
                            </div>	
                        </div>																								
                        <div class='my-3' style='text-overflow: ellipsis;-webkit-box-orient: vertical;display: -webkit-box;-webkit-line-clamp: 1;overflow: hidden;'>
                            <p class='texto-chumbo font-size-h6 m-0' title='".$dados['ds_descricao']."'>".$dados['ds_descricao']."</p>
                        </div>													
                    </div>
                    <div class='my-4 mx-15 text-left'>
                        <div class='d-flex ml-n8'>
                            <div class='mt-1'>
                            <svg width='24' height='24' viewBox='0 0 50 46' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                <path d='M44.2 1H5.8C3.14903 1 1 3.14903 1 5.8V29.8C1 32.451 3.14903 34.6 5.8 34.6H44.2C46.851 34.6 49 32.451 49 29.8V5.8C49 3.14903 46.851 1 44.2 1Z' stroke='#333333' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                                <path d='M20.2 44.2H29.8' stroke='#333333' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                                <path d='M25 34.6001V44.2001' stroke='#333333' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                            </svg>
                            </div>
                            <div class='ml-2' >
                                <span class='text-dark font-weight-bold text-dark font-size-h4'>Tipo</span><br>
                                <p class='texto-chumbo font-size-h6'>".$dados['ds_tipo']."</p>
                            </div>													
                        </div>
                        
                    </div>
                    <div class='separator separator-solid'></div>
                    <div class='my-8 mx-4 text-right'>
                        <a href='appCliente/ver_midia.php?id_ponto=".$dados['id_ponto']."&id_midia=".$dados['id_midia']."' class='text-primary'>Ver detalhes
                            <svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                <path d='M5 12H19' stroke='#B721FF' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                <path d='M12 5L19 12L12 19' stroke='#B721FF' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                            </svg>
                        </a>
                    </div>
                    <!--end::Name-->
                </div>
                <!--end::Body-->
            </div>
        </div> ";
    }																	
    ?>
    </div>
</div>

<script>
    $(document).ready(function(){
        $(window).on( 'load', function() {
            $('#loading').hide();
            $('#carrossel').show();
            console.log("foi");
        });

        //carousel
        $(".owl-carousel").owlCarousel({
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            stagePadding: 50,
            items:4,
            center:true,
            loop:true,
            dots:false,
            margin:30,
            responsive: {
            	0:{
            		items:1
            	},
            	360:{
            		items:3
            	},
            	1500:{
            		items:4
            	}
            }

        });
    })
    
</script>

<script src="../assets\plugins\owlCarousel\dist\owl.carousel.min.js"></script>
