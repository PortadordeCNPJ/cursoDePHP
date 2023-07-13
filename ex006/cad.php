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
    <main>
        <?php
        $nome = $_POST["nome"] ?? "Digite algo";
        $sobnome = $_POST["sobrenome"] ?? "Sobre nome";

        echo "<center><p>É um prazer te conhecer, $nome $sobnome! Este é o meu humilde site!<p></center>";
        ?>
    </main>

</body>

</html>