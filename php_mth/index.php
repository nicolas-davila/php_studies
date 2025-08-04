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

    echo "A nova fruta adicionada é: $frutas[3] <br>";
    
    // Tirar elementos

    unset($frutas[1]);

    // Operadores "==", "===", "!="

    $outraIdade = 20;

    echo "Igualdade de idades: " . ($idade == $outraIdade) . "<br>"; /* Aqui compara se os valores das variáveis são iguais. No caso vai retornar 1 porque tem que trazer uma string (no caso 1) e vira boolean */

    echo "Igualdade das idades (v ou f): " . ($idade == $outraIdade ? "Verdadeiro" : "Falso") . "<br>"; // Neste caso cria um "if" com o "?", sendo verdadeiro ou falso, separado pelo ":"

    echo "Idêntico: " . ($idade === $nome? "verdadeiro" : "Falso") . "<br>"; // O "===" Verifica se é idêntico, no caso se possuem as mesmas "tipagens".

    echo "Diferente: " . ($idade != $outraIdade ? "Verdadeiro" : "Falso") . "<br>"; // O "!=" Verifica se são diferentes

    // Operadores lógicos

    //&& -> AND -> Se duas condições são verdadeiras
    //|| -> OR -> Se uma das das condições for verdadeira
    // ! -> NOT -> Inverte o boolean

    $temCarteira = false;

    //true E !false -> true
    echo "Deve tirar carteira? " . (($idade > 18 && !$temCarteira ? "Sim" : "Não")) . "<br>";

    //true OU false
    echo "É maior de idade? " . (($idade > 18 || !$temCarteira ? "Sim": "Não")) . "<br>";
?>