function inserta(){
	$("#gifAnim img").show();
	$.ajax({
		method:"post",
		url:"phps/inserta_AX.php",
		data:$("#formIns").serialize(),
		success: function(resp){
			$("#gifAnim img").hide();
			$("#resp_AX").html(resp);
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
 				$("#gifAnim img").show();
				$.ajax({
					method:"post",
					url:"phps/elimina_AX.php",
					data:{numBoleta:$("#boletaDel option:selected").val()},
					success:function(resp){
						$("#gifAnim img").hide();
						$("#resp_AX").html(resp);
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
			$("#gifAnim img").hide();
			var tmp = $.parseJSON(resp);
			displayEstudiantes(tmp);
			Lobibox.notify("success",{
				title:"Respuesta del Servidor",
				msg:"Se muestran correctamete los registros de la tala 'estudiante'",
				position:"center top",
				delay:3000,
				width:960,
				iconSource:"fontAwesome"
			});
		}
	});
	return false;
}

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
	
	$("#gifAnim img").hide();
	    $.validate({
		form:"#formIns",
		lang:"es",
		onSuccess:inserta
	});
});