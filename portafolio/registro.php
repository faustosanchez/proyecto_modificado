<!DOCTYPE html>
<html lang="en">
<head>
    
    
  	<meta charset="utf-8">
 	<meta class="viewport" content="width=device-width, user-scalable=no,
 	initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 	<title>Comentarios</title>
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
 					<h2 class="profesion">Comentarios</h2>
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
 					<h3 class="titulo">Estos son los comentarios mas recientes</h3>
 					<p> 
<style type="text/css">
      table {
	width: 100%;
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #666C8C;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }


    </style>
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
$nombre = $_POST["nombre"] ;
$cafe = $_POST["cafe"] ;
$correo = $_POST["correo"] ;
$mensaje = $_POST["mensaje"] ;

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
        $datab = "coffee";
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
        $instruccion_SQL = "INSERT INTO tabla (nombre, cafe, correo, mensaje)
                             VALUES ('$nombre','$cafe','$correo','$mensaje')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

                //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
                $consulta = "SELECT * FROM tabla ";
        
                $result = mysqli_query($connection,$consulta);

        
        
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>id</th></h1>";
echo "<th><h1>Nombre</th></h1>";
echo "<th><h1>Cafeteria</th></h1>";
echo "<th><h1>Correo</th></h1>";
echo "<th><h1>Mensaje</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['id']. "</td></h2>";
    echo "<td><h2>" . $colum['nombre']. "</td></h2>";
    echo "<td><h2>" . $colum['cafe']. "</td></h2>";
    echo "<td><h2>" . $colum['correo'] . "</td></h2>";
    echo "<td><h2>" . $colum['mensaje'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );
   //echo "Fuera " ;
   echo'<a href="index.html"> Volver Atrás</a>';
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