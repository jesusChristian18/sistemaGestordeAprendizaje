$(".T").on("click", ".EditarUsuario", function(){

	var Uid = $(this).attr("Uid");

	var datos = new FormData();
	datos.append("Uid", Uid);

	$.ajax({
		url: "Ajax/usuariosA.php",
		method: "POST",
		data: datos,
		dataType: "json",
		cache: false,
		contentType: false,
		processData:false,

		success: function(resultado){
			$("#apellidoEU").val(resultado["apellido"]);
			$("#nombreEU").val(resultado["nombre"]);
			$("#usuariosEU").val(resultado["libreta"]);
			$("#claveEU").val(resultado["clave"]);

			if(resultado["rol"] == "Administrador"){

				$("#carrera").hide();
			}else{
				$("#carrera").show(); 
			}
			$("#rolActual").html("Rol Actual: " +resultado["rol"]);
		}
	})
})