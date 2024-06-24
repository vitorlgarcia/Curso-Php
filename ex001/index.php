<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código PHP</title>
</head>

<body>
    <h1> <?php
        echo"Hello World \u{1F30e}";
    ?>
    </h1>

<p>aqui vou me livrar da maldição de todo programador</p>

<?php
    date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje é dia " . date("d/M/Y");
    echo " e a hora atual é " . date("G:i:s T");
?>

</body>
</html>