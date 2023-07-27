<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Digite dois valores</h1>
    </header>

    <section>

        <?php
        //Capturando os dados do formulario retroalimentado
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;

        ?>
        <form class="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <div class="container-form">
                <div class="form-group">
                    <label for="v1">Valor 1:</label>
                    <input type="number" name="v1" class="input-form" id="v1" value="<?= $valor1 ?>">
                </div>
                <div class="form-group">
                    <label for="v2">Valor 2:</label>
                    <input type="number" name="v2" class="input-form" id="v2" value="<?= $valor2 ?>">
                </div>
                <input type="submit" class="btn-submit" value="Entrar">
            </div>
        </form>
    </section>

    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php
        $soma = $valor1 + $valor2;
        echo "<br><p>O VALOR TOTAL É: " . $soma . "</p>";
        ?>

    </section>
</body>

</html>