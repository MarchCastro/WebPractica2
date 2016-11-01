<?php
	session_start();
	//if($_SESSION["acceso"] == "escom"){
	if(1==1){
	include("phps/index_AX.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>A-Co AJAX</title>
<link rel="stylesheet" type="text/css" href="materialize097/css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="fontawesome463/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="jscripts/form-validator/theme-default.min.css">
<link rel="stylesheet" type="text/css" href="jscripts/lobibox/css/lobibox.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<script language="javascript" type="text/javascript" src="jscripts/jquery-3.1.0.min.js"></script>
<script language="javascript" type="text/javascript" src="materialize097/js/materialize.min.js"></script>
<script language="javascript" type="text/javascript" src="jscripts/form-validator/jquery.form-validator.min.js"></script>
<script language="javascript" type="text/javascript" src="jscripts/lobibox/js/lobibox.min.js"></script>
<script language="javascript" type="text/javascript" src="jscripts/index.js"></script>
<script>
	$(document).ready(function(e) {
        $("#cerrarSesion").on("click",function(){
			$.ajax({
				method:"post",
				url:"phps/cerrarSesion_AX.php",
				data:{sesion:"acceso"},
				success:function(resp){
					/*if(resp == 1)
						window.location = "login.php";*/
					$("#resp_AX").html(resp);
				}
			});
		});
    });
</script>
</head>

<body>
<section id="encabezado">
	<div class="container">
    	<div class="row">
        	<div class="col s12">
            	<h2 class="center purple-text">PHP-MySQL-AJAX / ABCC</h2>
            </div>
        </div>
    </div> <!-- /container -->
</section>
<section id="formularioInsertar">
	<div class="container">
    	<h2 class="blue-text">Insertar</h2>
        <form id="formIns">
        	<div class="row">
                <div class="input-field col s12 m6">
                	<i class="fa fa-info prefix"></i>
                    <input type="text" id="boleta" name="boleta" 
                    data-validation="required number length"
                    data-validation-length="8-10">
                    <label for="boleta">Boleta:</label>
                </div>
                <div class="input-field col s12 m6">
                	<i class="fa fa-group prefix"></i>
                	<input type="text" id="nombre" name="nombre"
                    data-validation="required alphanumeric">
                	<label for="nombre">Nombre:</label>
                </div>
            </div>
            <div class="row">
            	<div class="input-field col s12 m6">
                	<i class="fa fa-group prefix"></i>
                	<input type="text" id="apellidos" name="apellidos"
                    data-validation="required alphanumeric">
					<label for="apellidos">Apellidos:</label>
                </div>
                <div class="input-field col s12 m6">
                	<i class="fa fa-mail-reply prefix"></i>
                	<input type="text" id="correo" name="correo"
                    data-validation="required email">
                	<label for="correo">Correo:</label>
                </div>
            </div>
            <div class="row">
                 <div class="input-field col s12 m6">
                 	<i class="fa fa-pencil prefix"></i>
                	<input type="text" id="curp" name="curp" 
                    data-validation="required custom"
                    data-validation-regexp="[A-Z]{4}[0-9]{6}[H,M][A-Z]{5}[0-9]{2}$">
                	<label for="curp">CURP:</label>
                </div>
                <div class="input-field col s12 m6">
                	<input type="submit" class="btn ancho100 orange" value="Insertar">
                </div>
            </div>
        </form>
    </div> <!-- /container -->
</section>
<hr>
<section id="formularioEliminar">
	<div class="container">
    	<h2 class="blue-text">Eliminar</h2>
    	<div class="row">
        	<div class="input-field col s12 m6">
            	<select id="boletaDel" name="boletaDel">
					<?php echo $htmlEstudiante; ?>
                </select>
                <label for="boletaDel">Estudiante:</label>
            </div>
            <div class="col s12 m6">
            	<input type="button" id="btnElimina" class="btn ancho100 orange" value="Eliminar">
            </div>
       	</div>
    </div><!-- /container -->
</section>
<hr>
<section id="formularioConsultar">
	<div class="container">
    	<h2 class="blue-text">Consultar</h2>
    	<div class="row">
        	<div class="input-field col s12">
            	<input type="button" id="btnConsulta" class="btn ancho100 orange" value="Consultar Estudiantes">
            </div>
        </div>
    </div>
</section>
<section id="auxiliar">
	<div class="container">
    	<div class="row">
        	<div class="col s12">
            	<div id="gifAnim" class="center">
            		<img src="imgs/gears_64.gif">
        		</div>
                <div id="resp_AX" class="center">
                </div>  
            </div>
     	</div>
        <div class="row">
        	<button id="cerrarSesion" value="Cerrar Sesion">Cerrar Sesi&oacute;n</button>
        </div>
	</div> <!-- /container -->
</section>
</body>
</html>
<?php
	}else{
		header("location:login.php");
	}
?>