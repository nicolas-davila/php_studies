<?php 

    // Desafio 02 - Sortear um número entre 1 e 100
    // rand() Versão antiga e não recomendada para uso em aplicações críticas, por não trazertanta segurança quanto outras funções de geração de números aleatórios.
    //outros tipos de random
    //mt_rand() - Melhor performance e qualidade. Mais moderno e recomendada.
    // random_int() - Gera um número aleatório de forma criptograficamente segura, recomendado para aplicações que necessitam de alta segurança. Mais lento que mt_rand, mas mais seguro.

    //$numero_sorteado = rand(1, 100);
    $numero_sorteado = mt_rand(0, 100);
    //$numero_sorteado = random_int(1,100);
    echo "O número sorteado é: $numero_sorteado";
?>