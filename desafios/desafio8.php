<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $numero = $_GET["numero"] ?? 0;
        $raiz_quadrada = pow($numero, 1/2);
        $raiz_cubica = pow($numero, 1/3);

    ?>

    <main>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="Number">Número</label>
            <input type="number" name="numero" id="idnumero" min="0" value="<?= $numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>

    </main>

    <section>
        <h2>Resultado Final</h2>

        <?php
            echo "<p> Analisando o <strong> número ". number_format($numero, 3, ",", ".") . "</strong>, temos:</p>";
            echo "<ul> <li>A sua raiz quadrada é <strong>" . number_format($raiz_quadrada, 3, ",", ".") . "</strong></li>";
            echo "<li> A sua raiz cúbica é <strong>" . number_format($raiz_cubica, 3, ",", ".") . "</strong></li> </ul>";
        ?>

    </section>



    
</body>
</html>