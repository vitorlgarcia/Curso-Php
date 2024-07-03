<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $AnoAtual = date("Y");
        $AnoNascimento = $_GET["nascimento"] ?? 2000;
        $AnoCalcular = $_GET["ano"] ?? $AnoAtual;

        $resultado = $AnoCalcular - $AnoNascimento;
    ?>


    <main>
        <h1>Calculando a sua idade</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="AnoNascimento">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="idnascimento" min="1900" value="<?= $AnoNascimento ?>">
            <label for="AnoAtual">Quer saber sua idade em que ano? Atualmente estamos em <strong><?= $AnoAtual ?></strong> </label>
            <input type="number" name="ano" id="ididade" min="1900" value="<?= $AnoCalcular ?>">
            <input type="submit" value="Qual será minha idade?">

        </form>
    </main>

        <section>
            <h2>Resultado</h2>
            <?php 
            
            if ($resultado > 0) {
                echo "<p> Quem nasceu em $AnoNascimento vai ter <strong> $resultado anos </strong> em $AnoCalcular</p>";
            } else {
                echo "Ano Inválido. O ano de nascimento precisa ser menor que o ano a calcular.";
            }
            ?>

        </section>

    
</body>
</html>