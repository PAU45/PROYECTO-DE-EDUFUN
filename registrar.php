<?php
    include("conexion.php");

    if (isset($_POST['register'])) {
        if(
            strlen($_POST['name']) >=1 &&
            strlen($_POST['email']) >=1 &&
            strlen($_POST['password']) >=1
        ){
            $name=trim($_POST['name']);
            $email=trim($_POST['email']);
            $password=trim($_POST['password']);

            $consulta="INSERT INTO datos(nombre,email,contraseña)
                VALUES('$name','$email','$password')";
            $resultado=mysqli_query($conex,$consulta);
            if ($resultado) {
                ?>
                    <h3 class="sucess"> Tu registro se ha completado</h3>
                <?php
            } else{
                ?>
                    <h3 class="error"> Ocurrio un error</h3>
                <?php
            }
        }else{
            ?>
                <h3 class="error"> Llene todo los campos</h3>
            <?php
        }
    }
?>