<?php
	session_start();
	$usuario = $_POST["usuario"];
	$contrasena = $_POST["contrasena"];
	$conexion = mysqli_connect("localhost","root","","sem20171");
	
	$sql ="SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
	$res = mysqli_query($conexion, $sql);
	$numRows = mysqli_num_rows($res);
	if($numRows == 1){
		$_SESSION["acceso"] = "escom";
		$_SESSION["x"] = "x";
		$_SESSION["y"] = "y";
	}
	echo $numRows;	
?>