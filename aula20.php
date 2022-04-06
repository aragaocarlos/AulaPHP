<?php

$nome1 = $_POST["nome"];
$cpf1 = $_POST["cpf"];
$sexo1 = $_POST["sexo"];

function validar($cpf, $nome, $sexo){
    if($cpf == ""){
        echo "CPF inválido";
    } if($nome == ""){
        echo "Nome inválido";
    } if($sexo == ""){
        echo "Sexo inválido";
    } else{
        echo "Tudo certo";
    }
}

validar($cpf1, $nome1, $sexo1);

function validar($cpf, $nome, $sexo){
    if($cpf == ""){
        echo "CPF inválido";
    } if($nome == ""){
        echo "Nome inválido";
    }
}


?>