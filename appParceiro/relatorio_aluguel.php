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
        <title>Relatório Liberação Nutricão</title>
        <link href="./assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
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
    </style>
    <body>
        <div style="display:flex; align-items: center;">
            <div style=" text-align: center;margin-bottom: -40px;">
                <h1>Relatório de alugueis</h1>
            </div>
            <div style="text-align: right; ">
                <img src="../assets/media/Uni_midia_logo.png" width="70px">
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
                                    <div class='d-flex'>
                                        <span class='symbol symbol-lg-50 symbol-circle symbol-40 symbol-light-success'>
                                            <img class='symbol-label img-fluid' src='".$dados["ds_foto"]."'>
                                        </span>
                                        <div class='ml-3 mt-2'>
                                            <span>".$dados['ds_descricao']."</span>	
                                        </div>
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
$dompdf->setPaper('A4', 'landscape');
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