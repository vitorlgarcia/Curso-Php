<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas</h1>
    </header>    

    <section>
        <?php


        // funcao apresentado no curso em video de php moderno
        function cotacao_tempo_real()
        {
            $inicio = date("m-d-Y", strtotime("-7 days")); // variavel usado para delimitar o dia inicial para ver a cotacao do dolar. Será sempre 7 dias antes da data que o site estiver rodando. Data é recebida na ordem Mes - Dia - Ano com 4 digitos
            $fim = date("m-d-Y"); // funcao para pegar a data que o sistema está rodando
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao'; // URL gerada pelo banco central onde é fornecido um código em formato JSON que dá a cotação do dólar desde 7 dias atrás ($inicio) até a data atual ($fim)

            $dados = json_decode(file_get_contents($url), true); // função PHP que extrai os dados em JSON. O parametro "True" indica que os dados sejam ordenados em vetores. Caso o parametro fosse false, os dados viriam em Objetos. (POO)
            $cotacao_atual = $dados["value"][0]["cotacaoCompra"]; // estrai a cotação atual que está dando do vetor 0 que, por sua vez, está dentro do vetor Value.
            return $cotacao_atual; // retorna a cotação atual.
        }



            $real = $_GET["numero"] ?? 0;
            $cotacao = cotacao_tempo_real();
            $dolar = $real / $cotacao;

            // Formatação convencional

           echo"O valor de  R$" . number_format($real, 2, ",", ".") . " convertido em dolar é igual a US$" . number_format($dolar, 2 ,",",".");



           // Formatacao de moedas com internacionalização!
           // Biblioteca intl (Internallization PHP)
           // Atualmente essa biblioteca não está funcionando no apache instalado em Linux ou Mac OS. Apenas está funcionando no Windows.

       //    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

       //    echo"Seus " . numfmt_format_currency($padrao, $real, "BRL") . "equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");


        ?>
        <button onclick="javascript:window.history.back()">&#x23CE; Voltar</button>


    </section>



</body>
</html>