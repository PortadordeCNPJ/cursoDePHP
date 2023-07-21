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
      
        echo "<center><p>O número gerado é: ". mt_rand(1,100) . ", " . random_int(1,100) . ", " . mt_rand(1,100) ."<p></center>";
        
        ?>

        <a href="index.html"> <button>Voltar</button></a>

        <button onclick="javascript:document.location.reload()">Rerar mais</button>
    </main>

</body>

</html>