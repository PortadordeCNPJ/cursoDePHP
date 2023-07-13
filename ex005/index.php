<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    const ESTADO = "PR";
    $nome = "Guilherme";
    $snome = "de Souza Muller";

    //As aspas duplas "" são definidas para interpretar o que tem dentro delas.
    echo "\n Olá $nome! ";

    //As aspas simples para String '' são definidas quando o resultado da String não tem que ser interpretado, deixando assim de maneira simples o resultado da String.
    echo ' Olá $nome! ';

    //Constantes são apenas concatenadas para que expressem seu resultado.
    echo "\n Moro no estado \n" . ESTADO;

    //A contra barra auxilia no uso de escritas que envolvao o uso de mais de uma vez do mesmo tipo de aspas na escrita. Ex:
    echo "\n Ola $nome \"Calistenico\" $snome\n";

    // \n = nova linha
    // \t Tubulação horizontal 
    // \\ barra nvertida
    // \$ Sinal de cifrão
    // \u{} Codepoint Unicode
    ?>
</body>
</html>