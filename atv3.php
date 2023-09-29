<?php
echo("Digite seu nome: ");
$nome = fgets(STDIN);

echo("Digite seu produto: ");
$produto = fgets(STDIN);

echo("Digite a quantidade: ");
$quantidade = fgets(STDIN);

echo("Digite o valor unitário R$: ");
$valor = fgets(STDIN);

$valorfinal = $quantidade * $valor;

echo "Olá Sr(a) $nome \nSeu produto é $produto \nE irá levar $quantidade \nPortanto você tem R$ $valorfinal a pagar \n";

echo("Digite o valor pago pelo cliente R$: ");
$valor_pago = fgets(STDIN);


if ($valor_pago > $valorfinal) {
    $troco = $valor_pago - $valorfinal;
    echo "Aqui está o seu troco de R$ $troco.";
} elseif ($valor_pago < $valorfinal) {
    $falta = $valorfinal - $valor_pago;
    echo "Está faltando dinheiro. Falta R$ $falta.";
} else {
    echo "Tudo certo por aqui. Volte sempre!";
}
