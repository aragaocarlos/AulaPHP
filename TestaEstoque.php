<?php

include('Produto.php');

$meuproduto = new Produto();
$meuproduto->setNome("Luminária");
$meuproduto->setQuantEstoque(46);
$meuproduto->setValorVenda("R$" . 56.00);

echo "Produto: " . $meuproduto->getNome()
. "<br>Quantidade em Estoque: " . $meuproduto->getQuantEstoque()
. "<br>Valor: " . $meuproduto->getValorVenda();

?>