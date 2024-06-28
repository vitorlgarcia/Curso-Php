<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $dividendo = $_GET["numero1"] ?? 0; // A variável global $_GET recebe os números do formulário. Dessa vez não é necessário uma página HTML, pois a variável global $_SERVER "captura" os dados fornecidos e aponta para essa mesma página.
        $divisor = $_GET["numero2"] ?? 1;
        $resultado = (int)($dividendo / $divisor);
        $resto = $dividendo % $divisor;
    ?>
    <main>
        
        <h1>Anatomia de uma Divisão</h1>

        <form action="<?php $_SERVER['PHP_SELF']?>" method="get">  <!-- A varíavel global $_SERVER apresenta um vetor com vários parâmetros que dão informações sobre o servidor. Dentre os parâmetros está o PHP_SELF que indica os dados obtidos atraves da variavel global $_GET -->
            <label for="Div">Dividendo</label>
            <input type="number" name="numero1" id="idnumero1" min="0" value="<?=$dividendo ?>"> <!-- e espressão em colchetes e com ?= é uma SHORT TAG PHP. Ou seja, é uma forma abreviada de chamar um script PHP. É muita usada para chamar o PHP em apenas uma linha  -->
            <label for="divisor">Divisor</label>
            <input type="number" name="numero2" id="idnumero2" min="1" value="<?=$divisor ?>">
            <input type="submit" value="Analisar">

        </form>

    </main>

        <section>
        <h2>Resultado da Divisão</h2>
        <table class="divisao">
            <tr>
                <td> <?=$dividendo ?> </td> <!--Repare que as varíveis do PHP criadas anteriormente funcionam normalmente quando um script PHP é reaberto. Todas as variáveis sempre serem reconhecidas dentro do mesmo documento. -->
                <td> <?=$divisor ?> </td>
            </tr>

            <tr>
                <td> <?=$resto ?> </td>
                <td> <?=$resultado ?> </td>
            </tr>

        </table>

        </section>
    

</body>
</html>