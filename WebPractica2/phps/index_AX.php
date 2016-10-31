<?php
	include("configBD.php");
	
	$sqlEstudiante = "SELECT * FROM estudiante ORDER BY nombre";
	$resEstudiante = mysqli_query($conexion,$sqlEstudiante);
	$htmlEstudiante = "";
	while($estudiantes = mysqli_fetch_array($resEstudiante, MYSQLI_BOTH)){
		$htmlEstudiante .= "<option value='$estudiantes[0]'>$estudiantes[0] - $estudiantes[1]</option>";
	}
?>