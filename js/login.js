$(document).ready(function (){
	"use strict";

   $(document).on("click", "#iniciarSesion", function (e) {
      	e.preventDefault();
      	loguearse();
   });

});

   function loguearse() {
			var data = {'email': $('#inputEmail').val(), 'password': $('#inputPassword').val()};
			  $('#inputEmail').val('');
			  $('#inputPassword').val('');
			  $.ajax({
				     type: "POST",
						 datatype: "JSON",
						 url: "index.php?page=admin",
						 data: data,
						 success: function (data) {
							      $("#contenido").html(data);
				     },
						 error: function() {
					        alert("error al iniciar sesion");
				     },
			  });
	  }
