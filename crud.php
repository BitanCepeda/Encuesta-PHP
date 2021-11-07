<?php

$user="root";
	$pass="";
	$server="localhost";
	$db="encuesta";
	
	$mysqli = new mysqli($server, $user, $pass, $db);
	$mysqli->set_charset("utf8");
	
	if($mysqli->connect_error){
		 die("Connection failed: " . $conn->connect_error);
		 
	}
	
	
//mandar a la base de datos

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$cedula=$_POST['cedula'];



$sql = "INSERT INTO empleados (nombres, apellidos, direccion, telefono, cédula) VALUES ('".$nombre."', '".$apellidos."', '".$direccion."','".$telefono."','".$cedula."')";


if (mysqli_query($mysqli, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}


?>