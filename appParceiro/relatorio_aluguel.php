<?php 

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
session_start();

require_once("../Classes/Ponto.php");
require_once '../assets/plugins/dompdf/autoload.inc.php';

$id_parceiro = $_SESSION['id_parceiro'];

$ponto = new Ponto();

$dadosAlugado = $ponto->BuscarAlugado($id_parceiro); 

use Dompdf\Dompdf;

use Dompdf\Options;

$options = new Options();
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);

$dompdf = new Dompdf($options); 

$pagina = '
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Relatório de alugueis</title>
        <link href="https://app.unimidias.com.br/assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
    </head>
    <style>
        body{
            font-size: 8px;
            font-family:Verdana, Arial, Helvetica, sans-serif;
        }
        table, td, th {
            border: 1px solid black;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        .titulo{
            font-weight: 700;
        }
                  
        @page { margin: 5px; }
        .symbol {
            display: inline-block;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            position: relative;
            border-radius: 0.42rem; }
            .symbol.symbol-lg-50 > img {
                width: 100%;
                max-width: 50px;
                height: 50px; }
            .symbol.symbol-lg-50.symbol-circle .symbol-badge {
                top: -1.75px;
                right: -1.75px; }
            .symbol.symbol-lg-50.symbol-circle .symbol-badge.symbol-badge-bottom {
                top: auto;
                bottom: -1.75px; }
            .symbol.symbol-light-success .symbol-label {
                background-color: #C9F7F5;
                color: #1bc55f; }
            .d-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important; }
            .table td {
                padding: 0.75rem;
                vertical-align: top;
                border-top: 1px solid #EBEDF3; }
            .table thead th {
                vertical-align: bottom;
                border-bottom: 2px solid #EBEDF3; }
            .table tbody + tbody {
                border-top: 2px solid #EBEDF3; }
            .ml-3,
            .mx-3 {
                margin-left: 0.75rem !important; }
            .mt-2,
            .my-2 {
                  margin-top: 0.5rem !important; }
            .symbol .symbol-label {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            font-weight: 500;
            line-height: 0;
            color: #3F4254;
            background-color: #F3F6F9;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            border-radius: 0.42rem; }
            .symbol .symbol-badge {
            position: absolute;
            border: 2px solid #ffffff;
            border-radius: 100%;
            top: 0;
            right: 0; }
            .symbol > img {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            border-radius: 0.42rem; }
            .symbol.symbol-circle {
            border-radius: 50%; }
            .symbol.symbol-circle > img {
                border-radius: 50%; }
            .symbol.symbol-circle .symbol-label {
                border-radius: 50%; }
            .symbol.symbol-primary .symbol-label {
            background-color: #B721FF;
            color: #FFFFFF; }
            .symbol.symbol-light-primary .symbol-label {
            background-color: #EEE5FF;
            color: #B721FF; }
            .symbol.symbol-secondary .symbol-label {
            background-color: #E4E6EF;
            color: #3F4254; }
            .symbol.symbol-light-secondary .symbol-label {
            background-color: #EBEDF3;
            color: #E4E6EF; }
            .symbol.symbol-success .symbol-label {
            background-color: #1bc55f;
            color: #ffffff; }
            .symbol.symbol-light-success .symbol-label {
            background-color: #C9F7F5;
            color: #1bc55f; }
            .symbol.symbol-info .symbol-label {
            background-color: #6993FF;
            color: #FFFFFF; }
            .symbol.symbol-light-info .symbol-label {
            background-color: #E1E9FF;
            color: #6993FF; }
            .symbol.symbol-warning .symbol-label {
            background-color: #FFA800;
            color: #ffffff; }
            .symbol.symbol-light-warning .symbol-label {
            background-color: #FFF4DE;
            color: #FFA800; }
            .symbol.symbol-danger .symbol-label {
            background-color: #F64E60;
            color: #ffffff; }
            .symbol.symbol-light-danger .symbol-label {
            background-color: #FFE2E5;
            color: #F64E60; }
            .symbol.symbol-light .symbol-label {
            background-color: #F3F6F9;
            color: #7E8299; }
            .symbol.symbol-light-light .symbol-label {
            background-color: #F3F6F9;
            color: #F3F6F9; }
            .symbol.symbol-dark .symbol-label {
            background-color: #181C32;
            color: #ffffff; }
            .symbol.symbol-light-dark .symbol-label {
            background-color: #D1D3E0;
            color: #181C32; }
            .symbol.symbol-white .symbol-label {
            background-color: #ffffff;
            color: #3F4254; }
            .symbol.symbol-light-white .symbol-label {

    </style>
    <body>
        <div style="display:flex; align-items: center; margin-bottom: 10px;">
            <div style=" text-align: center;margin-bottom: -40px;">
                <h1>Relatório de alugueis</h1>
            </div>
            <div style="text-align: right; ">
                <img src="https://app.unimidias.com.br/assets/media/Uni_midia_logo.png" width="70px">
            </div>
        </div>
        <table class="table table-striped- table-bordered table-hover table-checkable">
            <tbody> 
                <tr>
                    <th>Mídia</th>
                    <th>Data inicial</th>
                    <th>Data Final</th>
                    <th>Status</th>
                </tr>
                ';



                while($dados = $dadosAlugado->fetch()){
                    $dataInicial = date('d/m/Y', strtotime($dados["dt_inicial"]));
                    $dataFinal = date('d/m/Y', strtotime($dados["dt_final"]));
                    $corStatus = "label-warning";
                    if($dados["id_status_midia"] == 7){ $corStatus =  "label-success"; }
                    $pagina .= "<tr>
                            <td>
                                <div class='d-flex'>
                                    <div>
                                        <span>".$dados['ds_descricao']."</span>	
                                    </div>
                                </div>
                            </td>
                            <td>".$dataInicial."</td>
                            <td>".$dataFinal."</td>
                            <td><span class='label ".$corStatus." label-pill label-inline mr-2 py-6'>".$dados['ds_status']."</span></td>
                        </tr>";
                }

$pagina .= '
            </tbody>
        </table>
    </body>
';

$dompdf->loadHtml($pagina);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

header('Content-type: application/pdf; charset=utf-8');
echo $dompdf->output();

// enviar documento destino para download
// $dompdf->stream("dompdf_out.pdf");

// exit(0);




// $pdf = $dompdf->output();
// $dompdf->stream();
// header('Content-type: application/pdf; charset=utf-8');
// echo $pdf;




// $dompdf->stream(
//     "saida.pdf", /* Nome do arquivo de saída */
//     array(
//         "Attachment" => false /* Para download, altere para true */
//     )
// );



// $filename = 'relatorio_neonatal.pdf';
// $str = $dompdf->output();
// $length = mb_strlen($str, '8bit');
// return $res->withHeader('Cache-Control', 'private')->withHeader('Content-type', 'application/pdf')->withHeader('Content-Length', $length)->withHeader('Content-Disposition', 'attachment;  filename=' . $filename)->withHeader('Accept-Ranges', $length)->write($str);




// $out = $dompdf->output();
// echo $out;



// $dompdf->stream("relatorio.pdf", array(true));




// $dompdf->stream("",array("Attachment" => false));




// var_dump(get_loaded_extensions());

?>