<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>Projeto</title>
    <link rel="stylesheet" href="view/css/projeto.css">
</head>

<body>
    <header>
        <h1>Cadastro</h1>
        
            <form id="register" action="registro.php" method="post">
                <label>Username</label>
                <input type="text" placeholder="Username" name="username" required>
                <label>Password </label>
                <input type="password" placeholder="Password" name="password" required>
                <input type="submit" name="registro" value="Registrar">
            </form>
            <p>Ja possui uma conta? <a href="login.php">Entre</a></p>
            </header>

</body></html>
