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

    //Serve para determinar o número que vai ficar na chave de uma divisão por exemplo;
    $e = intdiv(5,2); 
    echo "\n O resultado disso é $e";
    
    //Serve para mostrar o menor número entre varios resultados.
    $p = min(2, 3, 4, 1, 9, 11);
    echo "A resposta para está questão é: $p";

    //Serve para mostrar o maior número entre varios resultados.
    $o = max(2, 3, 4, 1, 9, 11);
    echo "A resposta para está questão é: $p";
    ?>
    
   
</body>
</html>