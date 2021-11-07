<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>Título de la WEB</title>    
    <meta charset="UTF-8">
    <meta name="title" content="Título de la WEB">
    <meta name="description" content="Descripción de la WEB">    
  </head>  
  <body>  

  
<h1>TRABAJO DE ENCUESTAS - SE TRABAJA CON LA TABLA EMPLEADO</h1>





  
  
  <?php
  
  include("conexion.php");
  $con=conectar();
  echo "Se realizó la conexión con la base de datos"
  ?>
  
  
  
  <h3>Insertar empleado</h3>
  
  <form action="crud.php" method=POST>
  
  NOMBRES: <input type=text name="nombre" required></input><br><br>
    apellidos: <input type=text name="apellidos" required></input><br><br>
	  dirección: <input type=text name="direccion" required></input><br><br>
	    teléfono: <input type=number name="telefono" required></input><br><br>
		  cédula: <input type=number name="cedula" required></input><br><br>
		  
	<input type=submit value="AGREGAR EMPLEADO"></input>
  
  </form>
  
  
  <?php
 
  ?>






</body>
</html>