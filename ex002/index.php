<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste com datas</title>
</head>

<body>

    <?php
    date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje é dia eheheh " . date("d/M/Y");
    echo " e a hora atual é " . date("G:i:s");
    ?>

</body>

</html>