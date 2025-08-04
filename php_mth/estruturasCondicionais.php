<?php 
    echo "Estrutura Condicionais <br><br>";

    // Estruturas que usam operadores e comparações para atingir resultados diferentes no programa.

    //i, else, else if

    $idade = 20;

    //If -> Comparação -> Verifica se é verdadeiro ou falso e {//Executa algo}
    if($idade >= 18) {
        echo "Vc é maior de idade! <br>";
    }

    //Quando o if for falso

    $salario = 1000;

    if($salario > 2000)  {
        echo "O seu salário é bom! <br>";
    } else {
        echo "Seu salário é baixo! <br>";
    }

    //else if -> Condição intermediária

    $nota = 7.5;

    if($nota >= 9) {
        echo "Parabéns! Nota alta.<br>";
    } else if ($nota > 7) {
        echo "Prabéns! Nota boa. <br>";
    } else {
        echo "Nota ruim. <br>";
    }


    //Exercicio de if Else -> velocidade > 100 muito rápido; > 80 acima do limite; > 60 Aceitável; < 60 muito lento

    $velocidade = 40;

    if($velocidade > 100) {
        echo "Velocidade muito rápida";
    } else if ($velocidade > 80) {
        echo "Velocidade acima do limite";
    } else if ($velocidade > 60) {
        echo "Velociadade aceitável";
    } else {
        echo "Velocidade muito lenta";
    }

?>