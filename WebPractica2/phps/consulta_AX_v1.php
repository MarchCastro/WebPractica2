<?php
	sleep(3);
	include("configBD.php");
	$sql = "SELECT * FROM estudiante";
	$res = mysqli_query($conexion, $sql);
	
	$estudiantes = "<table width='100%'>";
	$estudiantes .= "<tr><th>Boleta</th><th>Nombre</th><th>Apellidos</th><th>Correo</th><th>CURP</th></tr>";
	while($estudiante = mysqli_fetch_array($res, MYSQLI_BOTH)){
		$estudiantes .= "<tr>";
		$estudiantes .= "<td>$estudiante[0]</td><td>$estudiante[1]</td><td>$estudiante[2]</td><td>$estudiante[3]</td><td>$estudiante[4]</td>";
		$estudiantes .= "</tr>";
	}
	$estudiantes .= "</table>";
	
	echo $estudiantes;
?>