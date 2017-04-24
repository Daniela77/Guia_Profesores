$(document).ready(function(){
		"use strict";

	$(document).on("click","#irregistrar",function(event){
		  event.preventDefault();
		  mostrarRegistrar();
	});

 $(document).on("submit","#registrarForm", function(event){
			 event.preventDefault();
			 var formData = new FormData(this);
			 $.ajax({
				 method:'POST',
				 url: "index.php?page=registrar",
				 dataType: "HTML",
				 data: formData,
				 contentType: false,
				 cache: false,
				 processData:false,
				 success: function(data){ // Si la solicitud tuvo exito, mostrará el contenido en la pagina y
					 $('#contenido').html(data);
					 $('#inputEmail').val('');
					 $('#inputPassword').val('');
					 $('#inputRol').val('');
				 },
				 error: function () {
					 alert('Error al ir cargar datos');
				 },
			 });
		 });
});

	function mostrarRegistrar(){
			$.ajax({
				method: 'POST',
				url:'index.php?page=mostrarRegistrar',
				success: function(data){
					$("#contenido").html(data);
				},
				error: function () {
					alert('Error al ir a registrar');
				},
			});
		}
