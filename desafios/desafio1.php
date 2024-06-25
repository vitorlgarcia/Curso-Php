<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucessor e Antecessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <header>
            <h1>Resultado Final</h1>
        </header>
        
        <main>
        <section>
        <?php
            $numero = $_GET["numero"];

            echo "O numero escolhido foi <strong>$numero</strong> ";
            echo "<br> O seu <em>sucessor</em> é " . ($numero + 1);
            echo "<br> Já o seu <em>antecessor</em> é o " . ($numero - 1);
            
        ?>

        <button onclick="Javascript:history.go(-1)">&#x2B05; Voltar</button>

        </section>


    </main>
    
</body>
</html>