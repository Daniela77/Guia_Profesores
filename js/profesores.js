$(document).ready(function(){
    "use strict";

    $(document).on("submit","#formProfesor", function(event){
        event.preventDefault();
  			if( $("#id_profesor").val() != ''){
  				var	page="adminModificarProfesor";
  			}
  			else {
  				page="adminAgregarProfesor";
  			}
  			var formData = new FormData(this);
  			$.ajax({
  				method: "POST",
  				url: "index.php?page="+page,
  				data: formData,
  				contentType: false,
  				cache: false,
  				processData:false,
  				success: function(data){ // Si la solicitud tuvo exito, mostrará el contenido en la pagina y
  					$("#contenido").html(data);
  					$("#id_profesor").val('');
  					$('#nombreCompleto').val('');
  					$('#email').val('');
  					$('#telefono').val('');
  					$('#materia').val('');
  					$('#precio').val('');
  					$('#tipoDeClase').val('');
   		        },
   		    	error: MostrarError,
   		  });
  	});

    $(document).on('click','.eliminarProfesor',function(event){
	     event.preventDefault();
		 eliminarProfesor(this);
	});

    $(document).on('click','.eliminarImagen',function(event){
      event.preventDefault();
      eliminarImagen(this);
    });

    $(document).on('click','.modificarProfesor',function(event){
			$("#mostrarForm").toggle('slow');
			event.preventDefault();
			$('#id_profesor').val($(this).attr("data-idprofesor"));
			$('#nombreCompleto').val($(this).attr("data-nombreCompleto"));
			$('#email').val($(this).attr("data-email"));
			$('#telefono').val($(this).attr("data-telefono"));
			$('#materia').val($(this).attr("data-idmateria")).change();
			$('#precio').val($(this).attr("data-precio"));
			$('#tipoDeClase').val($(this).attr("data-tipoDeClase"));
		});



  $(document).on('click','.detalles',function(e){
      e.preventDefault();
      verDetalleProfesor();
  });

});

function eliminarProfesor(id_prof) {
  $.get( "index.php?page=adminEliminarProfesor",{ id_profesor: $(id_prof).attr("data-idprofesor") }, function(data) {
    $('#contenido').html(data);
  });
}

function eliminarImagen(id_img) {
  $.post( "index.php?page=eliminarImagen&imgruta",{imgruta: $(id_img).attr("data-imgruta")}, function(data) {
    $('#contenido').html(data);
  });
}

function verDetalleProfesor(){
 $(".detalles").each(function(i,obj){
   $(this).on("click", function(ev){
     $.get("index.php?page=profesor&nro="+$(obj).data('idprofesor'), function(data){
       var id_profesor = $(obj).data('idprofesor');
        //  crearComentarios(id_profesor);
         $("#contenido").html(data);
       // var temporizador = setInterval(function() {crearComentarios(id_profesor)}, 2000);
     });
     ev.preventDefault();
   });
 });
}
