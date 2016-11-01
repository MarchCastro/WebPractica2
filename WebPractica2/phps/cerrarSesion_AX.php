<?php
	session_start();
	$varSesion = $_POST["sesion"];
	//session_destroy();
	unset($_SESSION[$varSesion]);
	echo $_SESSION["acceso"];
	echo $_SESSION["x"];
	echo $_SESSION["y"];
?>