<?php 

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Real para Dolar</title>
</head>
<body>
    <header><h2>Conversor de moeda</h2></header>

    <section>
        <form action="conversor.php" method="get">
            <label for="Valor">Valor em R$</label>
            <input type="number" name="valor" id="valor" step="0.01" placeholder="Digite o valor em R$" required>
            <input type="submit" value="Converter">
        </form>
    </section>
</body>
</html>