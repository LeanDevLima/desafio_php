<?php

// $matriz = [
//     [1, 2, 3],
//     [4, 5, 6],
//     [7, 8, 9]
// ];

// foreach ($matriz as $linha) {
//     foreach ($linha as $elemento) {
//         echo $elemento . " "; 
//     }
//     echo "\n"; 
// }

$dados = array(
    array(
        "nome" => "João",
        "idade" => 30,
        "cidade" => "São Paulo"
    ),
    array(
        "nome" => "Maria",
        "idade" => 25,
        "cidade" => "Rio de Janeiro"
    ),
    array(
        "nome" => "Carlos",
        "idade" => 35,
        "cidade" => "Belo Horizonte"
    )
);

echo "Nome da primeira pessoa: " . $dados[0]["nome"];

echo "\n";

echo "Idade da segunda pessoa: " . $dados[1]["idade"];



foreach ($dados as $pessoa) {
    foreach ($pessoa as $chave => $valor) {
        echo $chave . ": " . $valor . " | ";
    }
    echo "\n"; 
}



?>