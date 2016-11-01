<?php
	include("configBD.php");

	$boleta = $_POST["boletaUpd"];
	$nombre = $_POST["nombreUpd"];
	$apellidos = $_POST["apellidosUpd"];
	$correo = $_POST["correoUpd"];
	$curp = $_POST["curpUpd"];
		
	$sql = "UPDATE estudiante SET nombre = '$nombre', apellidos = '$apellidos', correo = '$correo', curp = '$curp' WHERE boleta = '$boleta'";
	$res = mysqli_query($conexion, $sql);
	$numFilasAff = mysqli_affected_rows($conexion);
	
	$msj_AX = "";
	if($numFilasAff == 1){
		$msj_AX .= "<h3>Se actualiz&oacute; el registro correctamente. Gracias :)</h3>";
	}else{
		$msj_AX .= "<h3>Se present&oacute; un problema. Favor de intentarlo nuevamente</h3>";
	}
	
	echo $msj_AX;
?>