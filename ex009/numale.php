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
      
        echo "<center><p>O número gerado é: ". rand(1,100) . ", " . rand(1,100) . ", " .  rand(1,100) ."<p></center>";
        
        ?>

        <a href="index.html"> <button>Voltar</button></a>
    </main>

</body>

</html>