<?php

    $nome = $_POST["name"];
    $nota1 = $_POST["n1"];
    $nota2 = $_POST["n2"];

    $media = ($nota1 + $nota2)/2;

    if ($media >= 7){
        echo $nome . " foi aprovado com nota igual a " . $media;
    } else if($media < 7){
        echo $nome . " foi reprovado com nota igual a " . $media;
    }


?>