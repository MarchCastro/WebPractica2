<?php
	sleep(1);

	include("configBD.php");

	$boleta = $_POST["boleta"];
	$nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$correo = $_POST["correo"];
	$curp = $_POST["curp"];

	$sql = "UPDATE estudiante
  SET nombre = '$nombre',apellidos = '$apellidos',
  correo='$correo',curp='$curp'
  WHERE boleta = '$boleta'";
	$res = mysqli_query($conexion, $sql);

	$numFilasAff = mysqli_affected_rows($conexion);

	$msj_AX = "";
	if($numFilasAff == 1){
		$msj_AX .= "1";
	}else{
		$msj_AX .= "0";
	}

	echo $msj_AX;
?>
