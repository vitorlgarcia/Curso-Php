<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="style.css">

    <style>
        img.nota {
            height: 50px;
            margin: 5px
        }

    </style>

</head>
<body>

    <?php
        $dinheiro = $_GET['valor'] ?? 0;
        $sobra = $dinheiro;

        //$cem = floor($sobra / 100)        a função floor arredonta um valor quebrado para baixo. Por exemplo, o valor de "2,7" seria arredondado para "2". Essa função poderia muito bem substituir o (int) nessa aplicação.
        $cem = (int)($sobra / 100);
        $sobra = $sobra % 100;
        $cinquenta = (int)($sobra / 50);
        $sobra = $sobra % 50;
        $vinte = (int)($sobra / 20);
        $sobra = $sobra % 20;
        $dez = (int)($sobra / 10);
        $sobra = $sobra % 10;
        $cinco = (int)($sobra / 5);
        $sobra = $sobra % 5;
        $dois = (int)($sobra / 2);
        $sobra = $sobra %2;
        $um = $sobra;

    ?>

    <main>
        <h1>Caixa Eletrônico</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ValorSaque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="valor" id="idvalor" min="0" value="<?=$dinheiro?>">
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$20, R$10, R$5, R$2 e R$1</p>
            <input type="submit" value="Sacar">

        </form>

    </main>

    <section>
        <h2>Saque de R$ <?=number_format($dinheiro, 2, ",", ".") ?> realizado</h2>

        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>

        <ul>
            <li><img src="100-reais.jpg" alt="100 reais" class="nota"> x <?=$cem?></li>
            <li><img src="50-reais.jpg" alt="50 reais" class="nota"> x <?=$cinquenta?></li>
            <li><img src="20-reais.jpg" alt="20 reais" class="nota"> x <?=$vinte?></li>
            <li><img src="10-reais.jpg" alt="10 reais" class="nota"> x <?=$dez?></li>
            <li><img src="5-reais.jpg" alt="5 reais" class="nota"> x <?=$cinco?></li>
            <li><img src="2-reais.jpg" alt="2 reais" class="nota"> x <?=$dois?></li>
            <li><img src="1-real.jpg" alt="1 real" class="nota"> x <?=$um?></li>
        

        </ul>


    </section>


</body>
</html>