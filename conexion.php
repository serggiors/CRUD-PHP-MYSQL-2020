<?php
	
	$mysqli = new mysqli('localhost', 'UsuarioBase', 'PasswordBase', 'personal');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>