$(document).ready(function(){

   $(document).on("click","#cerrarSesion",function(e){
        e.preventDefault();
        cerrarSesion() ;
   });

});

	  function cerrarSesion() {
		    $.ajax({
			       method: 'POST',
			       url:'index.php?page=logout',
			       success: function(data){
			           $("body").html(data);
			       },
		         error: function () {
				         alert('Error al cerrar sesion');
			       },
		    });
	  }
