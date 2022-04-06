<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastro</title>
</head>
<body>
    <form method="post" action="acao1.php">
        <p>Nome: <input type="text" name="nome"></p>
        <p>Idade: <input type="number" name="idade"></p>
        <p><select name="genero">
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
        </p>
        <p><input type="submit" value="Cadastrar"></p>
    </form>
</body>
</html>