<?php 
    echo "Hello world! <br>"; // Para quebrar linha colocar a tag <br>
    echo "Teste <br><br>";

    //Para concatenar variáveis

    $nome = "Nicolas";
    $sobrenome = "Dávila";
    $nomeCompleto = $nome . " " . $sobrenome; // Para concatenar utiliza-se o "." e as aspas "", para dar um espaçamento 
    echo "Olá, meu nome é $nome! <br>";
    echo "Meu nome completo é $nomeCompleto!";

    //Somar e subtrair

    $idade = 20;
    $idadeSomada = $idade + 5;

    echo "Minha idade é $idade <br>";
    echo "minha idade somada é $idadeSomada <br><br>";

    // Criando arrays

    $frutas = ["Maça", "Banana", "Uva"];

    echo "Primeira fruta da minha array é: $frutas[0]<br>";

    //Adicionando frutas no array

    $frutas[] = "Abacaxi"; // adcionar elemento

    echo "A nova fruta adicionada é: $frutas[3]";
?>