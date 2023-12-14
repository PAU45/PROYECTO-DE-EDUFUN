<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles3.css">
    <title>Registro</title>
</head>
<body>
    <form method="post">
    <h1>Hola</h1>
    <p>Registrese</p>

    <div class="imput-wrapper">
        <input type="text" name="name" placeholder="Nombre">
        <img class="imput-icon" src="images/name.svg" alt=""> 
    </div>

    <div class="imput-wrapper">
        <input type="email" name="email" placeholder="email">
        <img class="imput-icon" src="images/email.svg" alt=""> 
    </div>

    <div class="imput-wrapper">
        <input type="password" name="password" placeholder="contraseña">
        <img class="imput-icon" src="images/password.svg" alt=""> 
    </div>
    <input class="btn" type="submit" name="register" value="Enviar">
    <br>
    <a href="login.php" class="btn-small">Iniciar Sesión</a>
    </form>
    <?php
        include("registrar.php");
    ?>
    
</body>
</html>