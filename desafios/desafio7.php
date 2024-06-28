<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $salario_base = 1380;
        $salario = $_GET["salario"] ?? 0;
        $quantidade_salario = (int) ($salario / $salario_base);
        $resto_salario = $salario - $quantidade_salario * $salario_base;

    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action=" <?php $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="Salario">Salário</label>
            <input type="number" name="salario" id="idsalario" min="0" value="<?=$salario ?>">
            <?="<p>Considerando o salário mínimo de <strong>". number_format($salario_base, 2, ",", ".") ."</strong></p>" ?>
            <input type="submit" value="Calcular">
        </form>

        <section>
            <h1>Resultado Final</h1>

            <?php
                echo "<p> Quem recebe um salário de " . number_format($salario, 2, ",", ".") . " ganha <strong> $quantidade_salario salários mínimos </strong> + " . number_format($resto_salario, 2, ",", ".") . ".";
            ?>


        </section>



    </main>




</body>
</html>