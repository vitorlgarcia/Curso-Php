<!DOCTYPE html>
<html lang="pt-b">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Gerando um número aleatório entre 0 e 100</h1>
        <?php
            $min = 0;
            $max = 100;   
            $num_alea = random_int($min, $max);

            echo"Exibindo números aleatórios entre $min e $max ";

            echo "<br> O número sorteado é o <strong>$num_alea</strong> ";


        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Recarregar</button>


    </main>
    
</body>
</html>