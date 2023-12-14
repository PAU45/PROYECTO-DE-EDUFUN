<?php
    include("conexion.php");

    if (isset($_POST['login'])) {
        if(
            strlen($_POST['username']) >=1 &&
            strlen($_POST['password']) >=1
        ){
            $username=trim($_POST['username']);
            $password=trim($_POST['password']);

            $consulta="SELECT * FROM datos WHERE nombre='$username' AND contraseña='$password'";
            $resultado=mysqli_query($conex,$consulta);

            if (mysqli_num_rows($resultado) > 0) {
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['loggedin'] = true;
                header("Location: inicio.php");
                exit;
            } else {
                ?>
                    <h3 class="error"> Nombre de usuario o contraseña incorrectos</h3>
                <?php
            }
        } else {
            ?>
                <h3 class="error"> Llene todos los campos</h3>
            <?php
        }
    }
?>