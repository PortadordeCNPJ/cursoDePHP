<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $r = base_convert(254, 10, 2);
    echo "O resultado disso é $r";

    // O % serve para concseguir o resultado sobre o resto de um calculo
    $c = 5%2; 
    echo "\n O resultado disso é $c";

    $e = intdiv(5,2); 
    echo "\n O resultado disso é $e";
    ?>
</body>
</html>