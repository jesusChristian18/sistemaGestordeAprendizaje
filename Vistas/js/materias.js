$(".T").on("click", ".EliminarMateria", function(){
	var Mid = $(this).attr("Mid");
	var Cid = $(this).attr("Cid");
	window.location = "http://localhost/universidad/index.php?url=Crear-Materias/"+Cid+"&Mid="+Mid+"&Cid="+Cid;
})