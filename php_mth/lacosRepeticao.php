<?php 

    echo"Laços/Estruturas de Repetição <br><br>";

    // comandos while, do while, for -> Recomendado dominar o laço for
    // laço for -> Repetir um código x vezes onde x é baseado em um condição, que quando ultrapassa essa condição se satisfaz.

    //for(INCREMENTADOR; CONDICAO; INCREMENTO) {//}
    for ($i = 0; $i <= 10; $i++) {
        echo "Progressão: $i <br>";
    }

    for ($j = 20; $j > 10; $j--) {
        echo "Regressão: $j <br>";
    }

    //while

    $contador = 1;

    while ($contador <= 10) {
        echo "número $contador <br>";
        $contador++; //loop infinito -> define errado um a condição de finalização de loop.
    }

    // for each -> Cada item do array

    $frutas = ["Maça", "Banana", "Pera"];

    foreach ($frutas as $fruta) {// "fruta" é o nome para cada item dentro do array
        echo "Fruta $fruta <br>";
    }

    //Chave e valr (objeto)

    $pessoas = [
        "Nicolas" => 2500,
        "Matheus" => 2200,
        "Ana Julia" => 5200
    ]; 

    echo "-> " . $pessoas['Nicolas'] . "<br>"; // Vai retornar o valor da pessoa, o valor da chave. No caso 2500.

    foreach ($pessoas as $pessoa => $salario) { // Aqui posso usar "=>" para dar nome a chave como salário
        echo "Dados: $pessoa ganha R$ $salario <br>";

    }


?>