<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Teste de tipo Primitivos</h1>

    <?php 
    // 0x = hexadecimal, 0b = binário, 0 = Octal.
    $num = 300;
    echo "O valor da variável é $num ";

    //Joga resultados sobre a variavel selecionada na tela.
    $v = 34;
    var_dump($v);

    $num_1 = 3e2; //3 x 10(2)
    echo " O valor é $num_1 ";
    var_dump($num_1);

    $num_2 = (int) " 950 ";
    var_dump($num_2);

    $casado = true;
    echo "O valor para casado é $casado.";

    //Struct em PHP
    $vet = [6, 2, 5, "Maria", 3, false];
    var_dump($vet);

    class Pessoa {
        private string $nome;
    }
        $p = new Pessoa;
        var_dump($p);
    
    ?>
</body>
</html>