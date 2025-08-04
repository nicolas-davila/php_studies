<?php 

    // Funções = blocos de código que serão reutilizados

    function boasVindas() {
        echo "Seja bem-vindo! <br>";
    }

    boasVindas();

    function boasVindas2($nome) {
        
        echo "Seja bem-vindo $nome! <br>";
    }

    boasVindas2("Nicolas");

    function soma($a, $b) {
        return $a + $b;
        //echo $a + $b;
    }

    $resultado = soma(4, 4);
    echo "O resultado foi: $resultado";

?>