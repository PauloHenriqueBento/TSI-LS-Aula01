<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>
    <form method="post" action="recebe.php">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" 
            placeholder="E-mail" autocomplete="off">

        <label for="password">Senha</label>
        <input type="password" id="password" 
            name="password" autocomplete="off">
        <input type="submit" value="Entrar">
    </form>
    <br><br>

    <a href="disciplina.html">App Disciplina (outro formulário)</a>
</body>
</html>