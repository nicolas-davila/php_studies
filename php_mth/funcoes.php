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
    echo "O resultado foi: $resultado <br>";

    // funcões da linguagem

    $tamanho = strlen("Nicolas"); // Conta o tamanho da string, contando os caracteres
    echo "O tamanho da string é: $tamanho <br>";

    //print_r() = imprime o conteúdo de uma variável, array ou objeto de forma legível

    $cores = array("vermelho", "azul", "verde");
    array_push($cores, "amarelo"); // Adiciona um elemento ao final do array
    print_r($cores); // Imprime o array de forma legível
?>