<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro de usuarios</h2>
    <form action="process_register.php" method="POST">
    <label>nome: </label>
    <input type="text" name="nome" required><br><br>
    <label>email: </label>
    <input type="email" name="email" required><br><br>
    <label>senha: </label>
    <input type="password" name="password" required><br><br>
    <label>repetir senha: </label>
    <input type="password" name="password" required><br><br>

    <button type="submit">Cadastrar</button>
    </form>
</body>
</html>