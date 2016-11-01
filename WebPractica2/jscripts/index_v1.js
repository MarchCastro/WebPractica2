function elimina(){
	$("#gifAnim img").show();
	$.ajax({
		method:"post",
		url:"phps/elimina_AX.php",
		data:{numBoleta:$("#boletaDel").val()},
		success: function(resp){
			$("#gifAnim img").hide();
			$("#resp_AX").html(resp);
		}
	});
	return false;
}

$(document).ready(function(e) {
	$("#gifAnim img").hide();
	$("#formUpdate").hide();
	
	$.validate({
		lang:"es",
		form:"#formDel",
		onSuccess:elimina
	});
	
    $("#consulta").on("click", function(){
		$("#gifAnim img").show();
		$.ajax({
			method:"post",
			url:"phps/consulta_AX.php",
			success:function(resp){
				$("#gifAnim img").hide();
				$("#resp_AX").html(resp);
			}
		});
		return false;
	});
	
	$("#inserta").on("click", function(){
		$.ajax({
			method:"post",
			url:"phps/inserta_AX.php",
			data:$("#formInsert").serialize(),
			success: function(resp){
				$("#resp_AX").html(resp);
			}
		});
		return false;
	});
		
	$("#actualiza").on("click", function(){
		$.ajax({
			method:"post",
			url:"phps/actualiza_AX.php",
			data:{numBoleta:$("#boletaUpd").val()},
			success: function(resp){
				var infoEstudiante = $.parseJSON(resp);
				$("#formUpdate #boletaUpd").val(infoEstudiante.boleta);
				$("#formUpdate #nombreUpd").val(infoEstudiante.nombre);
				$("#formUpdate #apellidosUpd").val(infoEstudiante.apellidos);
				$("#formUpdate #correoUpd").val(infoEstudiante.correo);
				$("#formUpdate #curpUpd").val(infoEstudiante.curp);
				$("#formUpdate").show();
			}
		});
		return false;
	});
	
	$("#actualizaUpd").on("click", function(){
		$.ajax({
			method:"post",
			url:"phps/actualizaUpd_AX.php",
			data:$("#formUpdate").serialize(),
			success: function(resp){
				$("#resp_AX").html(resp);
			}
		});
		return false;
	});
});