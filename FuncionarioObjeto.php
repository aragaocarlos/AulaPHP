<?php

include("Funcionario.php");

$func = new Funcionario(); // variável $func para criar o objeto Funcionario()
$func->nome = "João";
$func->cargo = "Faz tudo"; //não é permitido pois cargo é privado


#definindo os valores dos objetos
$func->setNome("João");
$func->setCargo("Faz tudo");

//acessando os valores dos objetos
echo $func->getNome;
echo $func->getCargo;

?>