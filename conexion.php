<?php

function conectar(){
	$user="root";
	$pass="";
	$server="localhost";
	$db="encuesta";
	
	$mysqli = new mysqli($server, $user, $pass, $db);
	$mysqli->set_charset("utf8");
	
	if($mysqli->connect_error){
		 die("Connection failed: " . $conn->connect_error);
	}
	echo "éxito";
	return 0;
}









?>