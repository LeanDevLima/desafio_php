<?php
$estoque = [];

function vermelho($texto){
    return "\033[31m{$texto}\033[0m[";
}

function verde($texto){
    return "\033[32m{$texto}\033[0m";
}

function amarelo($texto){
    return "\033[33m{$texto}\033[0m";
}

function azul($texto){
    return "\033[34m{$texto}\033[0m";
}

function adicionarProduto(&$estoque) {
    $codigo = readline(vermelho("Código do produto: "));
    $nome = readline(verde("Nome do produto: "));
    $descricao = readline(amarelo("Descrição do produto: "));
    $quantidade = readline(azul("Quantidade em estoque: "));
    $estoque[] = ['codigo' => $codigo, 'nome' => $nome, 'descricao' => $descricao, 'quantidade' => $quantidade];
    echo "Produto adicionado com sucesso!\n";
}

function realizarSaida(&$estoque) {
    $codigo = readline("Código do produto para saída: ");
    $quantidadeSaida = readline("Quantidade a ser retirada: ");
    foreach ($estoque as &$produto) {
        if ($produto['codigo'] == $codigo) {
            if ($produto['quantidade'] >= $quantidadeSaida) {
                $produto['quantidade'] -= $quantidadeSaida;
                echo "Saída realizada com sucesso.\n";
                return;
            } else {
                echo "Estoque insuficiente.\n";
                return;
            }
        }
    }
    echo "Produto não encontrado.\n";
}

function listarProdutos($estoque) {
    echo "Código | Nome              | Descrição           | Estoque\n";
    foreach ($estoque as $produto) {
        echo str_pad($produto['codigo'], 6) . ' | ' . str_pad($produto['nome'], 18) . ' | ' . str_pad($produto['descricao'], 20) . ' | ' . $produto['quantidade'] . "\n";
    }
}

while (true) {
    echo "Menu:\n";
    echo verde("1. Adicionar produto\n");
    echo amarelo("2. Realizar saída do estoque\n");
    echo azul("3. Listar produtos\n");
    echo vermelho("4. Sair\n");
    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            adicionarProduto($estoque);
            break;
        case 2:
            realizarSaida($estoque);
            break;
        case 3:
            listarProdutos($estoque);
            break;
        case 4:
            exit(0);
        default:
            echo "Opção inválida.\n";
    }
}
