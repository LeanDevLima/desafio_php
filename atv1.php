<?php
echo("Digite seu nome: ");
$nome = fgets(STDIN);

echo("Digite seu produto: ");
$produto = fgets(STDIN);

echo("Digite a quantidade: ");
$quantidade = fgets(STDIN);

echo("Digite o valor R$: ");
$valor = fgets(STDIN);

$valorfinal = $quantidade * $valor;

echo "Olá Sr(a) " . $nome . ". Seu produto é " . $produto . " E irá levar " . $quantidade . " Portanto você tem R$" . $valorfinal . " a pagar.";