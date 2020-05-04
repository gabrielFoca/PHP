<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zahard</title>
</head>
<body>

<?php
    $nome = "Gabriel";
    $idade = 19;

    echo "olá, meu nome é $nome <br>";
    echo "tenho $idade";
    echo "<hr>";

    $carro = "BMW";
    echo $carro;

    echo "<hr>";

    //validação de variaveis
    $nome = "carro";
    var_dump($nome);
    if(is_string($nome)){
        echo "é uma string";
    } else {
        echo "não é uma string";
    }

    echo "<hr>";

    // Variaveis Globais
    $a = 4; $b = 5;
    function soma(){
        echo $GLOBALS["a"] + $GLOBALS["b"];
    }
    echo soma();
    echo "<hr>";

    //constantes
    define("NOME", "Gabriel De Oliveira");
    define("IDADE", 19);
    define("ALTURA", 1.87);

    echo 'Meu nome é '.NOME.', tenho '.IDADE.' anos e a minha altura é de '.ALTURA;
?>

    
</body>
</html>
