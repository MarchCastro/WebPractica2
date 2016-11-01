<?php
	include("configBD.php");

	$boleta = $_POST["numBoleta"];
		
	$sql = "SELECT * FROM estudiante WHERE boleta = '$boleta'";
	$res = mysqli_query($conexion, $sql);
	$estudiante = mysqli_fetch_assoc($res);
	echo json_encode($estudiante);
?>