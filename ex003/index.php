<?php 
    $nome = "Nicolas";
    $sobrenome = "Dávila";
    //$nome = "Gabriel";
    //$sobrenome = "Silva";

    //Teste de constantes
    const PAIS = "Brasil"; // Constantes não se usa "$"

    //Exemplos usando camelCase e SNAKE_CASE
    $minhaProfissao = "Analista de Sistemas";
    $meu_salario = 2800.75;

    const CURSO_REALIZADO = "Curso em Video de PHP moderno";
    
    echo "Olá! Meu nome é $nome $sobrenome e moro no ". PAIS; //Maneira correta de colocar uma constante no "echo".
    echo "Minha profissão é $minhaProfissao, recebo R$$meu_salario e fiz o curso de " . CURSO_REALIZADO;
?>