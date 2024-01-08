<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>Projeto</title>
    <link rel="stylesheet" href="view/css/projeto.css">
</head>

<body>
    <header>
        <h1>Login</h1>
        
            <form id="getUsername" action="login.php" method="post">
                <label>Username </label>
                <input type="text" placeholder="Username" name="username" required>
                <label>Password </label>
                <input type="password" placeholder="Password" name="password" required>
                <input type="submit" name="login" value="Login">
            </form>
            <p>Não tem uma conta? <a href="registro.php">Registre-se</a></p>
            </header>

</body></html>
