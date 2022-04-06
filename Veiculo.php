<?php

class Veiculo{
    private $marca;
    private $placa;

    public function getMarca(){
        return $this->marca;
    } 

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getPlaca(){
        return $this->placa;
    } 

    public function setPlaca($placa){
        $this->placa = $placa;
    }
}

?>