<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>
    <form method="post" action="aula20.php">
        <p>Nome: <input type="text" name="nome"></p>
        <p>CPF: <input type="text" name="cpf"></p>
        <p>Sexo:<select name="sexo">
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
                <option value="NB">Não Binário</option>
            </select></p>
        <p><input type="submit" value="Cadastrar"></p>
    </form>
</body>
</html>