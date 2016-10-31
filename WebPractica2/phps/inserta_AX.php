<?php
	sleep(3);
	
	include("configBD.php");

	$boleta = $_POST["boleta"];
	$nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$correo = $_POST["correo"];
	$curp = $_POST["curp"];	
	
	$sql = "INSERT INTO estudiante VALUES('$boleta','$nombre','$apellidos','$correo','$curp')";
	$res = mysqli_query($conexion, $sql);
	
	$numFilasAff = mysqli_affected_rows($conexion);
	
	$msj_AX = "";
	if($numFilasAff == 1){
		$msj_AX .= "<h4>Se realiz&oacute; el registro correctamente. Gracias :)</h4>";
	}else{
		$msj_AX .= "<h4>Se present&oacute; un problema. Favor de intentarlo nuevamente</h4>";
	}
	
	echo $msj_AX;
?>