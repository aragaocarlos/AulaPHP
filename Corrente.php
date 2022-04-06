<?php

include('Conta.php');

class Corrente extends Conta{
        private $cartaoCredito;

    public function getCartaoCredito(){
        return $this->cartaoCredito;
    }

    public function setCartaoCredito($cartaoCredito){
        $this->cartaoCredito = $cartaoCredito;
    }
}

?>