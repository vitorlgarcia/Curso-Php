<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11 - Porcentagem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $range = $_GET['range'] ?? 0;
        $valor = $_GET['valor'] ?? 0;
        $ajuste = $valor * $range / 100;
        $valor_final = $valor + $ajuste;


    ?>

    <main>
        <h1>Reajustador de Preço</h1>

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="valor" id="idvalor" value="<?=$valor?>">
            <label for="porcentagem">Qual será o percentual de reajuste? (<strong><span id="porcent">?</span>%</strong>) </label>
            <input type="range" name="range" id="idrange" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$range?>">
            <input type="submit" value="Reajustar">

        </form>

    </main>

    <section>
        <h2>Resultado do Reajuste</h2>

        <?php
            echo "O produto que custava R$ " . number_format($valor, 2,",",".") . ", com " . number_format($range, 2, ",", ".") . "% de aumento vai passar a custar R$" . number_format($valor_final,2,",",".") . " a partir de agora."

        ?>

    </section>

    <script>
        mudaValor()

        function mudaValor() {
            porcent.innerText = idrange.value;
        }

    </script>

    
</body>
</html>