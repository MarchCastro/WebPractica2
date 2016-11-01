<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link type="text/css" rel="stylesheet" href="jscripts/form-validator/theme-default.min.css">
<link rel="stylesheet" type="text/css" href="materialize097/css/materialize.min.css">
<script language="javascript" type="text/javascript" src="jscripts/jquery-3.1.0.min.js"></script>
<script language="javascript" type="text/javascript" src="materialize097/js/materialize.min.js"></script>
<script language="javascript" type="text/javascript" src="jscripts/form-validator/jquery.form-validator.min.js"></script>
<script>
	function validar(){
			$.ajax({
				method:"post",
				url:"phps/login_AX.php",
				data:$("#formLogin").serialize(),
				success:function(resp){
					if(resp == 1){
						window.location = "index.php";
					}else{
						window.location = "login.php";
					}
				}
			});
			return false;
	}
	
	$(document).ready(function(e) {
		$.validate({
			form:"#formLogin",
			lang:"es",
			onSuccess:validar
		});
    });
</script>
</head>

<body>
<section>
	<div class="container">
    	<div class="row">
		<form id="formLogin">
        	<div class="col s12 m4 input-field">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" data-validation="required">
           	</div>
            <div class="col s12 m4 input-field">
                <label for="contrasena">Contrase&ntilde;a:</label>
                <input type="password" id="contrasena" name="contrasena" data-validation="required">
            </div>    
            <div class="col s12 m4 input-field">
            	<input type="submit" class="btn blue" id="btnLogin" value="Entrar">
          	</div>
    	</form>
        </div>
 	</div>
    <div id="resp_AX">
    </div>
</section>
</body>
</html>