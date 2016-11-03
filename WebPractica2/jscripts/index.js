function inserta(){
	//$("#gifAnim img").show();
	Lobibox.notify("info",{
					title:"Se está insertando el alumno",
					msg:"Se está realizando el registro del alumno, espera unos segundos.",
					position:"center top",
					delay:2000,
					width:960,
					iconSource:"fontAwesome"
	});
	$.ajax({
		method:"post",
		url:"phps/inserta_AX.php",
		data:$("#formIns").serialize(),
		success: function(resp){
			$("#gifAnim img").hide();
			if(resp == 1){
					Lobibox.notify("success",{
					title:"Inserción exitosa.",
					msg:"Se realizó correctamente el registro del alumno, en un momento se actualizará la tabla de alumnos.",
					position:"center top",
					delay:3000,
					width:960,
					iconSource:"fontAwesome"
				});
				actualiza_registros();
			}else{
				Lobibox.notify("error",{
					title:"Ocurrió algo inesperado.",
					msg:"No se ha podido realizar el registro del alumno.",
					position:"center top",
					delay:1000,
					width:960,
					iconSource:"fontAwesome"
				});

			}

			//$("#resp_AX").html(resp);
		}
	});
	return false;
}

function elimina(){
	Lobibox.confirm({
		title:"Eliminar Estudiante",
		msg:"¿Desea eliminar el regstro del estudiante seleccionado?",
		iconSource:"fontAwesome",
		callback: function($this, type, ev){
			if(type === "yes"){
 				//$("#gifAnim img").show();
				 Lobibox.notify("info",{
						title:"Se está eliminando el alumno",
						msg:"Se está realizando la eliminación del alumno, espera unos segundos.",
						position:"center top",
						delay:2000,
						width:960,
						iconSource:"fontAwesome"
					});
				$.ajax({
					method:"post",
					url:"phps/elimina_AX.php",
					data:{numBoleta:$("#boletaDel option:selected").val()},
					success:function(resp){
						$("#gifAnim img").hide();
						//$("#resp_AX").html(resp);
						Lobibox.notify("success",{
							title:"Eliminación exitosa.",
							msg:"Se realizó correctamente el la eliminación del alumno, en un momento se actualizará la tabla de alumnos.",
							position:"center top",
							delay:3000,
							width:960,
							iconSource:"fontAwesome"
						});
						actualiza_registros();
					}
				});
			}else
				return false;
		}
	});

	return false;
}

function consulta(){
	$("#gifAnim img").show();
	$.ajax({
		method:"post",
		url:"phps/consulta_AX.php",
		success:function(resp){
			Lobibox.notify("success",{
				title:"Respuesta del Servidor",
				msg:"Se muestran correctamete los registros de la tabla 'estudiante'",
				position:"center top",
				delay:1000,
				width:960,
				iconSource:"fontAwesome"
			});
			$("#gifAnim img").hide();
			var tmp = $.parseJSON(resp);
			displayEstudiantes(tmp);
		}
	});
	actualiza_registros();
	return false;
}
function actualiza_registros(){
	$("#gifAnim img").show();
	$.ajax({
		method:"post",
		url:"phps/consulta_AX.php",
		success:function(resp){
			$("#gifAnim img").hide();
			var tmp = $.parseJSON(resp);
			displayEstudiantes(tmp);
		}
	});
	$.ajax({
		method:"get",
		url:"phps/get_select_data.php",
		success:function(resp){
			//$("#gifAnim img").hide();
			//var tmp = $.parseJSON(resp);
			//displayEstudiantes(tmp);
			$("#boletaDel").html(resp);
			//$("#div1").html("<select> <option value=1> probando </option> </select>" );
			$("select").material_select();
		}
	});


	return false;
}


// funcion de update
function update(){

$.ajax({
	method:"post",
	url:"phps/updateGetData.php",
	data:{numBoleta:$("#numBoleta option:selected").val()},
	success:function(resp){
	var elegido = $.parseJSON(resp);
	var nombre = document.getElementById("nombreUpd");
	var boleta = document.getElementById("boletaUpd");
	var apellidos = document.getElementById("apellidosUpd");
	var correo = document.getElementById("correoUpd");
	var curp = document.getElementById("curpUpd");
	nombre.value=elegido.nombre;
	boleta.value=elegido.boleta;
	apellidos.value=elegido.apellidos;
	correo.value=elegido.correo;
	curp.value=elegido.curp;

	var formU = document.getElementById("formUpd");
	formU.setAttribute("style", "visibility:visible;");

	}
});

}
// fin funcion update


//insert update

function insertaUpd(){
	//$("#gifAnim img").show();
	Lobibox.notify("info",{
					title:"Se está actualizando el alumno",
					msg:"Se está realizando la actualizacion del alumno, espera unos segundos.",
					position:"center top",
					delay:2000,
					width:960,
					iconSource:"fontAwesome"
	});
	$.ajax({
		method:"post",
		url:"phps/insertaUpd_AX.php",
		data:$("#formUpd").serialize(),
		success: function(resp){
			$("#gifAnim img").hide();
			if(resp == 1){
					Lobibox.notify("success",{
					title:"actualizacion exitosa.",
					msg:"Se realizó correctamente la actualizacion del alumno, en un momento se actualizará la tabla de alumnos.",
					position:"center top",
					delay:3000,
					width:960,
					iconSource:"fontAwesome"
				});
				actualiza_registros();
			}else{
				Lobibox.notify("error",{
					title:"Ocurrió algo inesperado.",
					msg:"No se ha podido realizar la actualizacion del alumno.",
					position:"center top",
					delay:1000,
					width:960,
					iconSource:"fontAwesome"
				});

			}

			//$("#resp_AX").html(resp);
		}
	});
	return false;
}


//fin insert update

function displayEstudiantes(estudiantes){
	var lngArray = estudiantes.length;
	var tabla = "<table class='striped centered responsive-table'><thead><tr><th>Boleta</th><th>Nombre</th><th>Apellidos</th><th>Correo</th><th>CURP</th></tr></thead><tbody>";
	for(i=0; i<lngArray; i++){
		tabla += "<tr><td>"+estudiantes[i].boleta+"</td><td>"+estudiantes[i].nombre+"</td><td>"+estudiantes[i].apellidos+"</td><td>"+estudiantes[i].correo+"</td><td>"+estudiantes[i].curp+"</td></tr>";
	}
	tabla += "</tbody></table>";
	$("#resp_AX").html(tabla);
}


$(document).ready(function(e) {
	$("select").material_select();
	$("#btnElimina").on("click", elimina);
	$("#btnConsulta").on("click", consulta);
	$("#boletaDelSelect").attr("readonly", false);

	$("#gifAnim img").hide();
	    $.validate({
		form:"#formIns",
		lang:"es",
		onSuccess:inserta
	});

			$.validate({
		form:"#formUpd",
		lang:"es",
		onSuccess:insertaUpd
		});

});
