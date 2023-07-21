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

            $cotacao = 5.17;

            $real = 1000;

            $dolar = $real / $cotacao;

            //Mostrar o reusltado

            echo "Seus R$" . number_format($real, 2, ",", ".") . " equivalem a US$" . number_format($dolar, 2, ",",);


            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "Seus R$" . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a US$" . numfmt_format_currency($padrao, $dolar, "USD");
            ?>

        </div>
        <a href="index.html"> <button class="btn-submit"> Voltar </button> </a>
    </div>
</body>

</html>