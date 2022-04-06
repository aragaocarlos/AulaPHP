<?php

class Produto{
    private $nome;
    private $quantEstoque;
    private $valorVenda;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getQuantEstoque(){
        return $this->quantEstoque;
    }

    public function setQuantEstoque($quantEstoque){
        $this->quantEstoque = $quantEstoque;
    }

    public function getValorVenda(){
        return $this->valorVenda;
    }

    public function setValorVenda($valorVenda){
        $this->valorVenda = $valorVenda;
    }
}

?>