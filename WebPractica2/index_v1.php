<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ABC con AJAX</title>
<link rel="stylesheet" type="text/css" href="jscripts/form-validator/theme-default.min.css">
<script language="javascript" type="text/javascript" src="jscripts/jquery-3.1.0.min.js"></script>
<script language="javascript" type="text/javascript" src="jscripts/form-validator/jquery.form-validator.min.js"></script>
<script language="javascript" type="text/javascript" src="jscripts/index.js"></script>
</head>

<body>
	<h2>Operaciones ABCC a una BD MySQL con PHP-AJAX</h2>
    <div id="opciones">
    	<input type="button" id="consulta" value="Consulta la tabla 'estudiante'">
        <hr>
        <form id="formInsert">
        	<label>Boleta:</label>
            <input type="text" id="boleta" name="boleta"><br>
            <label>Nombre</label>
            <input type="text" id="nombre" name="nombre"><br>
            <label>Apellidos</label>
            <input type="apellidos" id="apellidos" name="apellidos"><br>
            <label>Correo</label>
            <input type="text" id="correo" name="correo"><br>
            <label>CURP</label>
            <input type="text" id="curp" name="curp"><br>
        	<input type="button" id="inserta" value="Insertar a la tabla 'Estudiante'">    
        </form>
        <hr>
        <form id="formDel">
            <label>N&uacute;m. de Boleta:</label>
            <input type="text" id="boletaDel" name="boletaDel" data-validation="required,number,length" data-validation-length="8-10"><br>
            <input type="submit" id="elimina" value="Elimina registro con N&uacute;m. de Boleta">
        </form>
        <hr>
        <label>N&uacute;m. de Boleta:</label>
        <input type="text" id="boletaUpd" name="boletaUpd"><br>
        <input type="button" id="actualiza" value="Obtener info del N&uacute;m. de Boleta a actualizar">
        <form id="formUpdate">
        	<label>Boleta:</label>
            <input type="text" id="boletaUpd" name="boletaUpd" readonly><br>
            <label>Nombre</label>
            <input type="text" id="nombreUpd" name="nombreUpd"><br>
            <label>Apellidos</label>
            <input type="apellidos" id="apellidosUpd" name="apellidosUpd"><br>
            <label>Correo</label>
            <input type="text" id="correoUpd" name="correoUpd"><br>
            <label>CURP</label>
            <input type="text" id="curpUpd" name="curpUpd"><br>
        	<input type="button" id="actualizaUpd" value="Actualizar la tabla 'Estudiante'">    
        </form>
    </div>
    <hr>
    <div id="gifAnim">
    	<img src="imgs/gears_64.gif">
    </div>
    <div id="resp_AX">
    </div>
</body>
</html>