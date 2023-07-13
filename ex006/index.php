<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Interação com Formulário</title>
</head>

<body>
    <header>
        <h1>Bom dia! Cadastro na liha de baixo, cuidado!!</h1>
    </header>

    <section>
        <form class="form" action="cad.php" method="post">
            <div class="container-form">
                <div class="title">
                    <h1>CADASTRO</h1>
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="input-form" name="nome" placeholder="Insira seu nome" id="idnome">
                </div>

                <div class="form-group">
                    <label for="Sobrenomenome">Sobrenome:</label>
                    <input type="text" class="input-form" name="Sobrenome" placeholder="Insira seu Sobrenome" id="idSobnome">
                </div>
                <input type="submit" class="btn-submit" value="Enviar">
            </div>
        </form>
    </section>


</body>

</html>