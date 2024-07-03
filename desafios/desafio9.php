<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9 - Média Aritmética</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $numero1 = $_GET["numero1"] ?? 1;
        $numero2 = $_GET["numero2"] ?? 1;
        $peso1 = $_GET["peso1"] ?? 1;
        $peso2 = $_GET["peso2"] ?? 1;

        $resultado_simples = ($numero1 + $numero2)/2;

        $soma_pesos = $peso1 + $peso2;
        $resultado_ponderado = ($numero1 * $peso1 + $numero2 * $peso2)/$soma_pesos;

    ?>

    <main>

        <h1>Médias Aritméticas</h1>

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">Valor 1:</label>
            <input type="number" name="numero1" id="idnumero1" min="0" value="<?=$numero1?>">
            <label for="peso1">Peso 1:</label>
            <input type="number" name="peso1" id="idpeso1" min="1" value="<?=$peso1?>">
            <label for="valor2">Valor 2:</label>
            <input type="number" name="numero2" id="idpeso2" min="0" value="<?=$numero2?>">
            <label for="peso2">Peso 2:</label>
            <input type="number" name="peso2" id="idpeso2" min="1" value="<?=$peso2?>">
            <input type="submit" value="Calcular as Médias">

        </form>

        <section>
            <h2>Cálculo das Médias</h2>
            
            <?php
                echo "<p>A média simples é: <strong>" . number_format($resultado_simples, 2, ",", ".") . "</strong></p>";
                echo "<p>A média ponderada com pesos $peso1 e $peso2 é: <strong>". number_format($resultado_ponderado, 2, ",", ".") . "</strong></p>";

            ?>
        </section>


    </main>    



</body>
</html>