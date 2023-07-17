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
        $num_php = $_POST["numero"];
        
        echo "<center><p>O número escolhido foi, $num_php<p></center>";
        echo "<center><p>O seu antecessor é , " . $num_php - 1 . "!<p></center>";
        echo "<center><p>O seu sucessor é, " . $num_php + 1 . "!<p></center>";
        
        ?>
    </main>

</body>

</html>