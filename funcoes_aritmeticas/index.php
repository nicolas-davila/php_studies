<?php 

    //função abs retorna o valor absoluto de um número
    $resultado = abs(500); //Sempre vai retornar um número positivo (sem o sinal)
    
    echo "O valor absoluto é: $resultado <br>";

    //base_convert muda a base de um número
    $resultado_convertido = base_convert(254, 10, 2);
    echo "O número 254 na base 2 é: $resultado_convertido <br>";

    
?>