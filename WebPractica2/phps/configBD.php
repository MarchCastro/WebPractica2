<?php
	$servidorBD = "localhost";
	$usrBD = "root";
	$passBD = "";
	$nombreBD = "sem20171";
	
	$conexion = mysqli_connect($servidorBD, $usrBD, $passBD, $nombreBD);
	mysqli_query($conexion,"SET NAMES 'utf8'");
?>