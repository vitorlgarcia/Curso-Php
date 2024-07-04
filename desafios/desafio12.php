<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $total = $_GET['segundos'] ?? 0;
        $sobra = $total;
        $semanas = (int)($sobra / 604800);  // uma semana equivale a 604.800 segundos
        $sobra = $sobra % 604800;
        $dias = (int)($sobra / 86400);    // um dia equivale a 86.400 segundos
        $sobra = $sobra % 86400;
        $horas = (int)($sobra / 3600);    // uma hora equivale a 3.600 segundos
        $sobra = $sobra % 3600;
        $minutos = (int)($sobra / 60);   // um minuto equivale a 60 segundos
        $sobra = $sobra % 60;
        $segundos = $sobra;


    ?>

    <main>
        <h1>Calculadora de Tempo</h1>

        <form action="<?php $_GET['PHP_SELF'] ?>" method="get">
            <label for="tempo">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="idsegundos" min="0" value="<?= $total ?>">
            <input type="submit" value="Calcular">

        </form>

    </main>

    <section>
        <h2>Totalizando tudo</h2>

        <?php
            echo "<p>Analisando o valor que você digitou, <strong> " . number_format($total, 0, ",", ".") . " segundos </strong> equivalem a um total de: <ul>";
            echo "<li> " . number_format($semanas, 0, ",",".") . " semanas </li>";
            echo "<li> " . number_format($dias, 0, ",",".") . " dias </li>";
            echo "<li>" . number_format($horas, 0, ",",".") . " horas </li>";
            echo "<li>" . number_format($minutos, 0, ",",".") . " minutos </li>";
            echo "<li>". number_format($segundos, 0, ",","."). " segundos </li></ul></p>";


        ?>

    </section>


    
</body>
</html>