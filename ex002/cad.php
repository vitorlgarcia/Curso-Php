<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php
            $nome = $_GET["nome"] ?? "sem nome";  // $_GET, $_POST e $_COOKIES são variáveis globais (váriaveis nativas da linguagem de programação) que tratam do envio de dados entre formulários html e php. ainda existe a variável $_REQUEST que engloba todas essas variáveis juntas.

            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";

            echo "É um prazer te conhecer, <strong>$nome $sobrenome!</strong> Esse é o meu site."
        ?>
        <br>
        <p><a href="index.html">Voltar</a></p>
    </main>
</body>
</html>