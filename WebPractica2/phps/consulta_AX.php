<?php
	sleep(1);
	include("configBD.php");
	$sql = "SELECT * FROM estudiante";
	$res = mysqli_query($conexion, $sql);
	
	$arrayEstudiantes = array();
	while($estudiante = mysqli_fetch_assoc($res)){
		$arrayEstudiantes[] = $estudiante;
	}

	echo json_encode($arrayEstudiantes);
?>