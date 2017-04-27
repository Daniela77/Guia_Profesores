

$(document).ready(function(){
    "use strict";

   $(document).on("click",'#agregarMateria',function(event){
	     event.preventDefault();
		   agregarMateria();
	});

   $(document).on("click",'.eliminarMateria',function(event){
       event.preventDefault();
       borrarMateria(this);
   });

   $(document).on("click",'.modificarMateria',function(event){
 		   event.preventDefault();
       $("#mostrarForm").toggle('slow');
       $('#id_materia').val($(this).attr("data-idmateria"));
		   $('#nombre').val($(this).attr("data-nombre"));
 	 });

   $(document).on('click','.detallesMateria',function(event){
       event.preventDefault();
       verDetalleMateria();
  });

});

function borrarMateria(id_mat) {
  $.get("index.php?page=adminEliminarMateria",{ id_materia: $(id_mat).attr("data-idmateria")}, function(data) {
    $("#contenido").html(data);
  });
}

function agregarMateria() {
  $.post("index.php?page=adminAgregarMateria",$("#formMateria").serialize(), function(data) {
     $('#contenido').html(data);
     $('#nombre').val('');
  });
}

function verDetalleMateria(){
    $(".detallesMateria").each(function(i,obj){
    var id_mat=$(obj).data('idmateria');
    $(this).on("click", function(ev){
        $.get("index.php?page=materia&nro="+ id_mat, function(data){
          $("#contenido").html(data);
        });
      });
    });
  }
