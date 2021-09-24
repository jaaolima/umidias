<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	
	require_once("../Classes/Ponto.php");
	$ponto = new Ponto();
	$retorno = $ponto->listarPonto($_REQUEST);
    $retornoTotal = $ponto->listarPonto($_REQUEST);
    $id_midia = $_REQUEST["id_midia"];  
	
?>
<div class="d-flex flex-row flex-column-fluid" style="margin:0 !important;">
    <!--begin::Content Wrapper-->
    <div class="main d-flex flex-column flex-row-fluid">
        <div class="font-weight-bold p-0 my-2 font-size-sm pl-13">								
            <a href="appCliente/listar_tipo.php" class="texto-chumbo">Alugar mídia</a>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 18L15 12L9 6" stroke="#57616A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <a class="texto-chumbo">Encontrar mídia</a>
        </div>
        <div class="content flex-column-fluid" id="kt_content"> 
            <div class="mb-8">
                <h1 class="h1-titulo">Encontre seu outdoor</h1>
                <p class="texto-fraco">
                    <?php 
                        $total = 0;
                        while($retornoTotal->fetch()){
                            $total++;
                        } 
                        echo $total . ' resultados';
                    ?>
                </p> 
            </div>
            <!--begin::Row-->
            <div class="row">
                <!--begin::Column-->
                <?php 
                    while($dados = $retorno->fetch()){
                        echo "<div class='col-4 mb-8' >
                                <div class='card card-custom'>
                                    <!--begin::Body-->
                                    <div class='card-body text-center' style='padding: 0px !important'>
                                        <!--begin::User-->
                                        <div class='position-relative' >
                                            <img class='img-fluid w-100 rounded-top' src='".$dados["ds_foto"]."' alt='image' style='height:200px;' />
                                            <!--<div class='position-absolute' style='top: 16px; right: 16px;'>
                                                <svg width='64' height='64' viewBox='0 0 64 64' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                    <g filter='url(#filter0_d)'>
                                                        <circle cx='32' cy='28' r='28' fill='white'/>
                                                    </g>
                                                    <g clip-path='url(#clip0)'>
                                                        <path d='M43.9316 30.7356C43.5651 25.9631 41.3431 22.9724 39.3828 20.3333C37.5677 17.8901 36 15.7802 36 12.6678C36 12.4178 35.86 12.1893 35.638 12.0747C35.4153 11.9595 35.1477 11.9784 34.9453 12.1255C32.0013 14.2321 29.5449 17.7827 28.6869 21.1704C28.0912 23.529 28.0124 26.1805 28.0013 27.9317C25.2826 27.351 24.6667 23.2842 24.6602 23.2399C24.6296 23.029 24.5007 22.8454 24.3132 22.7452C24.1238 22.6462 23.9011 22.6391 23.709 22.7341C23.5664 22.8031 20.2096 24.5087 20.0143 31.3188C20.0006 31.5454 20 31.7726 20 31.9998C20 38.6159 25.3834 43.999 32 43.999C32.0091 43.9996 32.0189 44.0009 32.0267 43.999C32.0293 43.999 32.0319 43.999 32.0351 43.999C38.6354 43.9801 44 38.6042 44 31.9998C44 31.6671 43.9316 30.7356 43.9316 30.7356ZM32 42.6657C29.7943 42.6657 28 40.7544 28 38.405C28 38.3249 27.9994 38.2442 28.0052 38.1452C28.0319 37.1544 28.2201 36.4781 28.4264 36.0282C28.8132 36.8589 29.5046 37.6225 30.6276 37.6225C30.9961 37.6225 31.2943 37.3243 31.2943 36.9559C31.2943 36.0067 31.3139 34.9117 31.5502 33.9235C31.7605 33.0472 32.2631 32.115 32.8998 31.3677C33.183 32.3377 33.7351 33.1227 34.2742 33.889C35.0457 34.9852 35.8432 36.1187 35.9832 38.0515C35.9916 38.1661 36.0001 38.2813 36.0001 38.405C36 40.7544 34.2057 42.6657 32 42.6657Z' fill='url(#paint0_linear)'/>
                                                    </g>
                                                    <defs>
                                                        <filter id='filter0_d' x='0' y='0' width='64' height='64' filterUnits='userSpaceOnUse' color-interpolation-filters='sRGB'>
                                                            <feFlood flood-opacity='0' result='BackgroundImageFix'/>
                                                            <feColorMatrix in='SourceAlpha' type='matrix' values='0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0'/>
                                                            <feOffset dy='4'/>
                                                            <feGaussianBlur stdDeviation='2'/>
                                                            <feColorMatrix type='matrix' values='0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0'/>
                                                            <feBlend mode='normal' in2='BackgroundImageFix' result='effect1_dropShadow'/>
                                                            <feBlend mode='normal' in='SourceGraphic' in2='effect1_dropShadow' result='shape'/>
                                                        </filter>
                                                        <linearGradient id='paint0_linear' x1='20' y1='28.1154' x2='43.9951' y2='28.1154' gradientUnits='userSpaceOnUse'>
                                                            <stop stop-color='#FF5C00'/>
                                                            <stop offset='1' stop-color='#FFD600'/>
                                                        </linearGradient>
                                                        <clipPath id='clip0'>
                                                            <rect width='32' height='32' fill='white' transform='translate(16 12)'/>
                                                        </clipPath> 
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div class='position-absolute ' style='bottom: 13px; right: 27px;'>
                                                <span class='text-white font-weight-bold'>Alugadas 345 vezes </span>
                                            </div>-->
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
                                                <div class='ml-2'  style='text-overflow: ellipsis;-webkit-box-orient: vertical;display: -webkit-box;-webkit-line-clamp: 1;overflow: hidden;'>
                                                    <a href='appCliente/ver_midia.php?id_ponto=".$dados['id_ponto']."&id_midia=".$id_midia."'class='m-0 text-dark font-weight-bold text-dark font-size-h4'>".$dados['ds_bairro']."</a>
                                                </div>	
                                            </div>																								
                                            <div class='my-6' style='text-overflow: ellipsis;-webkit-box-orient: vertical;display: -webkit-box;-webkit-line-clamp: 1;overflow: hidden;'>
                                                <p class='texto-chumbo font-size-h6 m-0'>".$dados['ds_descricao']."</p>
                                            </div>													
                                        </div>
                                        <div class='my-8 mx-15 text-left'>
                                            <div class='d-flex ml-n8'>
                                                <div class='mt-1'>
                                                    <svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                        <path d='M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                                        <path d='M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                                        <path d='M23 20.9999V18.9999C22.9993 18.1136 22.7044 17.2527 22.1614 16.5522C21.6184 15.8517 20.8581 15.3515 20 15.1299' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                                        <path d='M16 3.12988C16.8604 3.35018 17.623 3.85058 18.1676 4.55219C18.7122 5.2538 19.0078 6.11671 19.0078 7.00488C19.0078 7.89305 18.7122 8.75596 18.1676 9.45757C17.623 10.1592 16.8604 10.6596 16 10.8799' stroke='#57616A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                                                    </svg>
                                                </div>
                                                <div class='ml-2'>
                                                    <span class='text-dark font-weight-bold text-dark font-size-h4'>Alcance</span><br>
                                                    <span class=' texto-fraco font-size-h6'>15.456 pessoas</span>
                                                </div>													
                                            </div>
                                            
                                        </div> 
                                        <div class='separator separator-solid'></div>
                                        <div class='my-8 mx-4 text-right'>
                                            <a href='appCliente/ver_midia.php?id_ponto=".$dados['id_ponto']."&id_midia=".$id_midia."' class='text-primary'>Ver detalhes
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
                <!--end::Column-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content-->
    </div>
    <!--begin::Content Wrapper-->
</div>
