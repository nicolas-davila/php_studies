<?php 

    if (isset($_GET["nome"]) && isset($_GET["idade"])) {
        //$nome = $_GET["nome"];
        $nome = htmlspecialchars($_GET["nome"]); // Protege contra XSS (Cross-Site Scripting)
        $idade = htmlspecialchars($_GET["idade"]); // Protege contra XSS (Cross-Site Scripting)
        echo "Seja bem vindo $nome! Você tem $idade anos. <br>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu formulário</title>
</head>
<body>

    <h2>Exemplo de formulario</h2>
    <form action="formularios.php" method="GET">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        <input type="text" id="idade" name="idade">
        <br><br>
        <input type="submit" value="Enviar">
    
</body>
</html>