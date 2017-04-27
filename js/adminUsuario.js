$(document).ready(function(){
    "use strict";

		$("body").on("click",".modifRol", function(event){
			event.preventDefault();
				var btn = $(this);
				var id_usuario=$(this).attr("data-idusuario");
				var rol=$('#rol'+id_usuario).html();
				var toRol = rol == "Administrador" ? "Usuario" : "Administrador";
				$.post( "modificarRol",{id_usuario: $(this).attr("data-idusuario")}, function() {
				      $(btn).toggleClass("btn-info");
				      $('#rol'+id_usuario).html(toRol);
				});
	 });
});
