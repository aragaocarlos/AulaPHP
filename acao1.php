<?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $genero = $_POST["genero"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <h2>Cadastro</h2>
    <p>Nome: <?php echo $nome ?></p>
    <p>Idade <?php echo $idade ?></p>
    <p>Genero <?php echo $genero ?></p>
</body>
</html>