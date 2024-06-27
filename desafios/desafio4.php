<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Numero Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Analisador de Numero Real</h1>
    </header>
    <main>
    <?php
        $num = $_GET["numero"] ?? 0;
        echo "<p>Analisando o numero <strong>" .number_format($num, 3, ",", "."). " </strong>digitado</p>";

        $inteiro = (int)$num;
        $fracao = $num - $inteiro;
 
        echo "<ul><li>A parte inteira do numero é <strong> " . number_format($inteiro, 0, ",", ".") . " </strong></li> 
             <li> A parte fracionária do numero é <strong> " . number_format($fracao, 3, ",", "."). " </strong></li></ul>"
    ?>

    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>
</html>