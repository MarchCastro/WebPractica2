<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link type="text/css" rel="stylesheet" href="jscripts/form-validator/theme-default.min.css">
<link rel="stylesheet" type="text/css" href="materialize097/css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="jscripts/lobibox/css/lobibox.min.css">
<script language="javascript" type="text/javascript" src="jscripts/jquery-3.1.0.min.js"></script>
<script language="javascript" type="text/javascript" src="materialize097/js/materialize.min.js"></script>
<script language="javascript" type="text/javascript" src="jscripts/form-validator/jquery.form-validator.min.js"></script>
<script language="javascript" type="text/javascript" src="jscripts/lobibox/js/lobibox.min.js"></script>
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
							Lobibox.notify("error",{
							title:"Error!",
							msg:"El usuario o la contraseña son incorrectos",
							position:"center top",
							delay:2000,
							width:500,
							iconSource:"fontAwesome"
						});
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

<body style="background-image: url('imgs/fondo.jpg'); background-repeat: no-repeat; -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
<section>
	<div class="container">
    	<div class="row" >
			<form id="formLogin" class="col s12" style="padding-top:150px;">
				<div class="row">
					<div class="input-field col s6 offset-s3" >
						<label for="usuario" style="color:white;">Usuario</label>
						<input type="text" id="usuario" name="usuario" style="color:white;" data-validation="required">
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6 offset-s3">
						<label for="contrasena" style="color:white;">Contrase&ntilde;a</label>
						<input type="password" id="contrasena" name="contrasena" data-validation="required" style="color:white;">
					</div>
				</div>    
				<div class="row">
					<div class="input-field col s5 offset-s7">
						<input class="btn waves-effect waves-light" type="submit" class="btn blue" id="btnLogin" value="Iniciar Sesión">
					</div>
				</div>
			</form>
        </div>
 	</div>
    <div id="resp_AX">
    </div>
</section>
</body>
</html>