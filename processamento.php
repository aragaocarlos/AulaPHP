
<?php
    $nome = $_POST["nome"];
    $salario = $_POST["salario"];
    $cargo = $_POST["cargo"];
?>

<html>
<html lang="en">
<head>
    <title>Processamento</title>
</head>
<body>
    <h2>Cadastro realizado com sucesso</h2>
    <p>Nome: <?php echo $nome ?></p>
    <p>Salário: <?php echo $salario ?></p>
    <p>Cargo: <?php echo $cargo ?></p>
</body>
</html>