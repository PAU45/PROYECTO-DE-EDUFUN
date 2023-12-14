<?php
    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
        header("Location: login.php");
        exit;
    }

    $username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles4.css">
    <title>Bienvenida</title>
</head>
<body>
    <header>
    <h1>Bienvenido, <?php echo $username; ?></h1>
    </header>
    <nav>
	<ul>
		<a href="salida.php" target="_blank"><li>Cerrar Sesión</li></a>
	</ul>
    </nav>
    
    <h2 id="recomendación">Te invito a ver los siguientes temas:</h2>

<div class="container">
	
   <a  href="primerverbo.html" target="_blank"><div class="btn">Verbos regulares e irregulares</div></a>
   <a  href="adjetivos.html" target="_blank"><div class="btn">Adjetivos comparativos y superlativos</div></a>
   <a  href="pasado.html" target="_blank"><div class="btn">Verbos en pasado</div></a>
   <a  href="presente.html" target="_blank"><div class="btn">Verbos en presente</div></a>
   <a  href="futuro.html" target="_blank"><div class="btn">Verbos en futuro</div></a>
   <a  href="irregular.html" target="_blank"><div class="btn">Verbos irregulares y sus tiempos</div></a>
</div>
<footer>

	<ul>
		<a href="https://www.facebook.com/KFCperu" target="_blank"><li>Facebook</li></a>
		<a href="https://www.instagram.com/kfc.peru/" target="_blank"><li>Instagram</li></a>
		<a href="https://www.youtube.com/user/kfcperuoficial" target="_blank"><li>Youtube</li></a>
	</ul>

	<p>Copyright © 2023 EduFun - juegos educativos. Todos los derechos reservados.</p>
	<p>--- TECSUP ---</p>

</footer>
</body>
</html>