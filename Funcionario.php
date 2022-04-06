<?php

class Funcionario{
    public $nome;
    public $cargo;
}


    public function getNome(){
        return $this->nome;
    }

    public function setNome($n){
        $this->nome = $n;
    }

    public function getCargo(){
        return $this->cargo;
    }

    public function setCargo($c){
        $this->cargo = $c;
    }

// Construtor
public function __construct($nome, $cargo){
	$this->nome = $nome;
    $this->cargo = $cargo;
}

?>