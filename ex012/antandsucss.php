<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Resultado do Form</title>
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <div class="OII">
        <div class="center">
            <?php

            //mostra o dia inicial da conversao (todos os dias)
            $inicio = date("m-d-Y", strtotime("-7 days"));

            //fim da conversao, ao final do dia
            $fim = date("m-d-Y");
            

            //URL em (JSON) para pode receber a cotação do Dólar todos os dias atualizados
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';


            //recebe o valor da cotação da URL
            $dados = json_decode(file_get_contents($url), true);

            //Mostra os valores da cotação para de forma limpa
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            //recebe o resultado em real que o usuario digitou
            $real = $_POST["numero"] ?? 0;
            
            //Recebe o valor em real e divide pela cotação do dia, para que possa receber o valor em Dólar.
            $dolar = $real / $cotacao;

            echo "<center><p>Seus $real, equivalem a US$" . number_format($dolar, 2)
                . "<p></center>";
            ?>


        </div>
        <a href="index.html"> <button class="btn-submit"> Voltar </button> </a>
    </div>
</body>

</html>