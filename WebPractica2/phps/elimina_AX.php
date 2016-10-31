<?php
	sleep(3);
	include("configBD.php");

	$boleta = $_POST["numBoleta"];
		
	
	$sql = "DELETE FROM estudiante WHERE boleta='$boleta'";
	
	$res = mysqli_query($conexion, $sql);
	
	$numFilasAff = mysqli_affected_rows($conexion);
	
	$msj_AX = "";
	if($numFilasAff == 1){
		$msj_AX .= "<h3 class='center'>Se elimin&oacute; el registro correctamente. Gracias :)</h3>";
	}else{
		$msj_AX .= "<h3 class='center'>Se present&oacute; un problema. Favor de intentarlo nuevamente</h3>";
	}
	
	echo $msj_AX;
?>