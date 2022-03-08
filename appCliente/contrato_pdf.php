<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
session_start();

require_once("../Classes/Ponto.php");
require_once("../Classes/Usuario.php");
require_once '../assets/plugins/dompdf/autoload.inc.php';

$id_usuario = $_SESSION['id_usuario'];

$ponto = new Ponto();
$Usuario = new Usuario();

$dadosUsuario = $Usuario->BuscarDadosUsuario($id_usuario); 

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
            font-size: 12px;
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
                <h1>CONTRATO PARTICULAR DE PRESTAÇÃO DE SERVIÇOS PUBLICIDADE E PROPAGANDA</h1>
            </div>
            <div style="text-align: right; ">
                <img src="https://app.unimidias.com.br/assets/media/Uni_midia_logo.png" width="70px">
            </div>
        </div>
        <div>
                <p>CONTRATADA: UNIMÍDIA: UNIMÍDIA XXXXX Pessoa Jurídica de Direito Privado, Inscrita no CNPJ sob o nº XXXXXXXX, Instalada sito à: XXXXXX, que tem como Sócio Administrador XXXXXXX, brasileiro, empresário do ramo de publicidade, residente e domiciliado nesta capital, portador do R.G. nº XXXXXX e do CPF/MF nº XXXXXXXXXXX.</p>
                <p>CONTRATANTE: XXXXXXXX Pessoa Jurídica de Direito Privado, Inscrita no CNPJ sob o nº XXXXXXXX, Instalada sito à: XXXXXX, que tem como Sócio Administrador XXXXXXX, brasileiro, empresário do ramo de publicidade, residente e domiciliado nesta capital, portador do R.G. nº XXXXXX e do CPF/MF nº '.$dadosUsuario["nu_cpf"].'.</p>
                
                <h5>PREÂMBULO:</h5>
                
                <p>O presente contrato foi gerado por meio eletrônico, mediante acesso e comunicação no ambiente virtual, que pode ser encontrado no seguinte endereço: www.unimidia XXXXXXX.com.br, cujas disposições refletem a vontade das partes contratantes com as devidas autorizações e aceites inseridas em campos específicos e todas as demais exigências necessárias à existência e validade deste CONTRATO DE PRESTAÇÃO DE SERVIÇOS, conforme a seguir convencionado.</p>
                
                <p>Pelo presente instrumento particular as partes acima mencionadas e qualificadas como CONTRATANTE e CONTRATADA, têm entre si justo e acertada a Prestação de Serviços de Publicidade e Propaganda – por intermédio de Engenhos Publicitários, nos termos e cláusulas a seguir elencadas.</p>
                
                <h5>CLÁUSULA 1ª - OBJETO DO CONTRATO</h5>
                
                <p>1.1 - O objeto deste contrato refere-se a Prestação de Serviços de Publicidade e Propaganda – por intermédio de Engenhos Publicitários, no qual a CONTRATADA disponibilizará, em seu site, engenhos publicitários para locação, em local, valores e período que ficarão a escolha da CONTRATANTE, conforme as demais especificações contidas no presente contrato.</p>
                
                <h5>CLÁUSULA 2ª – DAS OBRIGAÇÕES DA CONTRATANTE</h5>
                
                <p>2.1 - Cabe a CONTRATANTE, fornecer a CONTRATADA, as informações precisas sobre o material que deseja ver divulgado, escolher o local, informar a data de início e fim da divulgação, o tipo de material que deseja utilizar, dentre os que estarão disponibilizados no site, quais sejam, lona, papel ou adesivo, contendo todos os detalhes indispensáveis à perfeita consecução do serviço contratado, devendo ainda, juntar a mídia contendo o design e demais especificações do que deverá ser impresso, em formato PDF, para que o material confeccionado possa ser entregue dentro do prazo acordado.</p>
                
                <p>2.2 - Cabe ainda a CONTRATANTE, a obrigação de efetuar o pagamento dos serviços contratados, no ato da contratação, cujas condições estão descritas no campo próprio desde contrato.</p>
                
                <h5>CLÁUSULA 3ª – DAS OBRIGAÇÕES DA CONTRATADA</h5>
                
                <p>3.1 - A CONTRATADA, oferecerá à CONTRATANTE, informações sobre a data de entrega do serviço, que poderá incluir, a montagem e instalação, ou apenas a confecção.</p>
                
                <p>3.2 - A CONTRATADA deverá fornecer Nota Fiscal ou recibo de prestação de serviço, referente ao pagamento efetuado pela CONTRATANTE.</p>
                
                <h5>CLÁUSULA 4ª – DAS CONDIÇÕES DE PAGAMENTO E PREÇO</h5>
                
                <p>4.1 – O serviço contratado será cobrado por m² e o seu pagamento será feito no ato da contratação, podendo a CONTRATANTE utilizar as seguintes formas: Poderá o pagamento ser feito via boleto bancário, pix ou cartão, nas formas de débito ou de crédito. <p>
                
                <h5>PARÁGRAFO ÚNICO: DO VALOR DO M²</h5>
                
                <p>4.2 – O m² do serviço executado em lona terá o valor de R$ XXXXXX</p>
                
                <p>4.3 - O m² do serviço executado em papel terá o valor de R$ XXXXXX</p>
                
                <p>4.4 - O m² do serviço executado em adesivo terá o valor de R$ XXXXX</p>
                
                <h5>CLÁUSULA 5ª - DO PRAZO PARA ENTREGA DO SERVIÇO</h5>
                
                <p>5.1 - A CONTRATADA deverá entregar o serviço, pronto, em até 05 (cinco) dias úteis. A contagem do prazo para a entrega retro mencionada iniciará no primeiro dia útil subsequente ao dia da conclusão da contratação, que somente ocorrerá, com a comprovação do pagamento e do envio da mídia contendo as informações que serão impressas no material;</p>
                
                <h5>CLÁUSULA 6ª - DA POSSIBILIDADE DE RESCISÃO</h5>
                
                <p>6.1 - A rescisão do presente contrato poderá ocorrer por iniciativa de qualquer uma das partes, com devolução do  valor pago ao CONTRATANTE, com retenção de 5% deste, para cobertura de taxas administrativas, devendo a comunicação ser previamente feita, com a observação do prazo 01 (um) dia útil, a contar do primeiro dia útil a partir da contratação. (o prazo de apenas 01 (um) dia, se justifica, considerando que o prazo total para a confecção e entrega do material, é de 05 (cinco) dias).</p>
                
                <h5>CLÁUSULA 7ª - DA LEI GERAL DE PROTEÇÃO DE DADOS - LGPD</h5>
                
                <p>7.1 - A CONTRATANTE declara estar ciente de que seus dados serão utilizados dentro da estrita necessidade do presente contrato, sendo certo que autoriza e manifesta o seu consentimento de forma expressa, no que se refere ao tratamento dos seus dados pessoais sendo estes sensíveis ou não, obedecendo o que determina a Lei 13.709/2018, e as alterações trazidas pela Lei 13.853/2019. </p>
                
                <p>7.2 – O dados que serão coletados neste contrato, sua necessidade, prazo, uso legal, são de conhecimento da CONTRATANTE, os quais serão conservados pela CONTRATADA pelos período necessários para dar cumprimento a este contrato e a obrigações assumidas pelas partes, podendo se estender a depender da necessidade, como caso de proteção ao crédito ou para exercer direitos em processo judicial, administrativo ou arbitral, ou, ainda, para atender interesse legítimo da CONTRATADA.</p>
                
                <p>7.3 – Poderá a CONTRATANTE autorizar, o CONTRATADA, a divulgar o seu nome e logotipo, juntamente com as empresas parceiras, para utilização exclusiva em serviços vinculados ao objeto do presente contrato.</p>
                
                <h5>CLÁUSULA 8ª - DO FORO</h5>
                
                <p>8.1 - Caso surjam questões controvertidas no presente CONTRATO, estas, primeiramente devem passar por uma tentativa de solução amigável entre as partes, e, caso não alcancem a solução, ficará eleito, como competente, para dirimir quaisquer controvérsias, o Fórum da Circunscrição Judiciária de Águas Claras-DF, com renúncia de qualquer outro por mais privilegiado possa ser.</p>
                
                <h5>CLÁUSULA 9ª - ASSUNTOS GERAIS</h5>
                
                <p>9.2 - Está vedado a CONTRATADA a transferência ou a subcontratação dos serviços previstos neste instrumento, sob o risco de ocorrer a rescisão imediata, salvo se houver autorização expressa da CONTRATANTE.</p>
                
                <p>9.3 - Este contrato ficará disponível em plataforma virtual, e suas regras obedecerão a legislação civil e a específica.</p>
                
                <p>E, por estarem assim justos e contratados, ao finalizar a contratação em ambiente virtual, terão aceito todas as condições ora apresentadas.</p>
                
                
                
                <h5>Brasília-DF., XXXX , XXXXXX de 2022</h5>
            
            </p>
        </div>
    </body>
';

$dompdf->loadHtml($pagina);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$output = $dompdf->output();

$code = uniqid();

file_put_contents("/var/www/app.unimidias.com.br/docs_contratos/contrato" . $code . ".pdf", $output);
return $code;
?>