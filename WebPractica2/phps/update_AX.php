<?php
	sleep(3);
	include("configBD.php");

	$boleta = $_POST["numBoleta"];


	$sql = "SELECT * FROM estudiante WHERE boleta='$boleta'";

	$res = mysqli_query($conexion, $sql);


  if ($res->num_rows > 0) {
      // output data of each row
      while($row = $res->fetch_assoc()) {
          echo "boleta: " . $row["boleta"]. " - Nombre: " . $row["nombre"]. " " . $row["apellidos"]."correo:".$row["apellidos"] ."curp:".$row["curp"] ."<br>";
      }
  } else {
      echo "0 results";
  }

?>
