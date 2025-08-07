<?php 

    //função abs retorna o valor absoluto de um número
    $resultado = abs(500); //Sempre vai retornar um número positivo (sem o sinal)
    
    echo "O valor absoluto é: $resultado <br>";

    //base_convert muda a base de um número
    $resultado_convertido = base_convert(254, 10, 2);
    echo "O número 254 na base 2 é: $resultado_convertido <br>";

    //ceil arredonda um número para cima

    //floor arredonda um número para baixo

    //round arredonda um número para o inteiro mais próximo

    //hypot calcula a hipotenusa de um triângulo retângulo

    //intdiv divide dois números inteiros e retorna o quociente
    $resultao_divisao = intdiv(5,2);
    echo "A divisão inteira de 5 por 2 é: $resultao_divisao <br>";

    //min retorna o menor valor entre os números fornecidos. max retorna o maior valor
    $menor = min(10,5,20,15,25);
    $maior = max(10,5,20,15,25);

    echo "Maior valor é: $maior <br>";
    echo "Menor valor é: $menor <br>";
?>