<?php
	
	$mysqli = new mysqli('BasedeDatos', 'BasedeDatos', 'BasedeDatos', 'BasedeDatos');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>
