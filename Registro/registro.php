<!DOCTYPE html>
<html lang="en">
<head>
    
    
  	<meta charset="utf-8">
 	<meta class="viewport" content="width=device-width, user-scalable=no,
 	initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 	<title>Registro</title>
 	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
 	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
 	<header>
 		<div class="contenedor">
 			<nav class="menu">
 				<a href="/Avance2/index.html">Home</a>
 			</nav>

 			<div class="contenedor-texto">
 				<div class="texto">
 					<h1 class="nombre">Home Coffe</h1>
 					<h2 class="profesion">Registro</h2>
 				</div>
 			</div>
 		</div>
 	</header>
 	<section class="main">
 		<section class="acerca-de">
 			<div class="contenedor">
 				<div class="foto">
 					<img src="img/foto1.png" width="180" alt="Cafetería">
 				</div>

 				<div class="texto">
 					<h3 class="titulo">Has completado tu registro, puedes continuar</h3>
 					<p> 
</p>
 				</div>
 			</div>
 	</section>
</body>
</html>

<?php
//validamos datos del servidor
$user = "root";
$pass = "123456";
$host = "localhost";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
$Nombre = $_POST["Nombre"] ;
$Correo = $_POST["Correo"] ;
$Contraseña = $_POST["Contraseña"] ;

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "" . mysql_error();
        }
  else
        {
            echo "" ;
        }
        //indicamos el nombre de la base datos
        $datab = "db_form";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "";
        }
        else
        {
        echo "" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO tabla_form (nombre, usuario, contraseña)
                             VALUES ('$Nombre','$Correo','$Contraseña')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM tabla_form ";
        
mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="/Avance2"><h3 class="titulo"> Continuar </h3></a>';


?>

<footer>
 			<section class="redes-sociales">
 				<div class="contenedor">
 					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
 					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
 					<a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a>
 					<a class="github" href="#"><i class="fa fa-github"></i></a>
 					<a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
 				</div>
 			</section>
 		</footer>
