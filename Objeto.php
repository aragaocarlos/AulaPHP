<?php

include('Corrente.php');

$minhaconta = new Corrente(); //criação de objeto
$minhaconta->setTitular("João");
$minhaconta->setSaldo(100);
$minhaconta->setCartaoCredito("1234.5678.9101");

echo "Titular: " . $minhaconta->getTitular()
. "<br>Saldo: " . $minhaconta->getSaldo()
. "<br>Cartão: " . $minhaconta->getCartaoCredito();


?>