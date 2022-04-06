<?php

include('Conta.php');

class Poupanca extends Conta{
    private $taxa;

    public function getTaxa(){
        return $this->taxa;
    }

    public function setTaxa($taxa){
        $this->taxa = $taxa;
    }
}


?>