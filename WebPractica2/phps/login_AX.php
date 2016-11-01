<?php
	session_start();
	$usuario = $_POST["usuario"];
	$contrasena = $_POST["contrasena"];
	$conexion = mysqli_connect("127.0.0.1","web2016","sem20171","sem20171");
	
	$cifrado = md5($contrasena);
	$sql ="SELECT * FROM administrador WHERE noEmpleado = '$usuario' AND password like '$cifrado%'";
	$res = mysqli_query($conexion, $sql);
	$numRows = mysqli_num_rows($res);
	if($numRows == 1){
		$_SESSION["admin"] = $res->fetch_object();
		$_SESSION["acceso"] = "escom";
		$_SESSION["x"] = "x";
		$_SESSION["y"] = "y";
	}
	echo $numRows;	
?>