<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor convertido</title>
</head>
<body>
    <header><h2>Conversão de Real para Dólar</h2></header>
    <main>
        <?php 
        
            $valor = floatval($_GET['valor']);
            //echo "$valor";
            //var_dump($valor);
            $conversao = $valor / 5.47;
            //echo "$conversao";
            $conversao = number_format($conversao,2,'.','');
            echo "<p> O valor de R$ $valor em Dólar é: $$conversao</p>";
        ?>
        <a href="index.php">Voltar</a>
    </main>
</body>
</html>