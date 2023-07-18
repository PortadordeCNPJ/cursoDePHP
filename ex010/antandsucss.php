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

            if ($_POST["numero"] == NULL) {
                echo "<center><p> ERRO POR FAVOR DIGITE UM VALOR VALIDO";
            } else {
                $num_php = $_POST["numero"];
                $num_doll = $_POST["numero"] / 4.82;

                echo "<center><p>Seus $num_php, equivalem a US$" . number_format($num_doll, 2)
                    . "<p></center>";
            }

            ?>

        </div>
        <a href="index.html"> <button class="btn-submit"> Voltar </button> </a>
    </div>
</body>

</html>