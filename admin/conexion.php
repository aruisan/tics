<?php
	
	$mysqli = new mysqli('localhost', 'root', '2014oskr', 'personal');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>