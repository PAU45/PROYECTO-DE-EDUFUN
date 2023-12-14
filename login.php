<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles2.css">
    <title>Iniciar Sesión</title>
</head>
<?php
        include("validar.php");
    ?>
<body>
    <form method="post">
    <h1>Hola</h1>
    <h2>Iniciar Sesión</h2>

    <div class="imput-wrapper">
        <input type="text" name="username" placeholder="Nombre de usuario">
        <img class="imput-icon" src="images/user.svg" alt=""> 
    </div>
    <div class="imput-wrapper">
        <input type="password" name="password" placeholder="Contraseña">
        <img class="imput-icon" src="images/password.svg" alt=""> 
    </div>
    <input class="btn" type="submit" name="login" value="Iniciar Sesión">
    <br>
    <a href="registro.php" class="btn-small">Registrarse</a>
    </form>
</body>
</html>