<?php
	$servidorBD = "127.0.0.1";
	$usrBD = "web2016";
	$passBD = "sem20171";
	$nombreBD = "sem20171";
	
	$conexion = mysqli_connect($servidorBD, $usrBD, $passBD, $nombreBD);
	mysqli_query($conexion,"SET NAMES 'utf8'");
?>