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
			$("#mostrarForm").toggle();
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
       verDetalleProfesor(this);
    });

  $("body").on("click","a.borrar", function(event){
      event.preventDefault();
      var comentario = $(this).parents(".comentario");
      borrarComentario(this.getAttribute("idcomentario"),comentario);
  });

  $('body').on('click','#agregarComentario', function(event){
    event.preventDefault();
    var comentario= {
      texto:$("#texto").val(),
  		puntaje: $("#puntaje").val(),
  		id_profesor:$("#id_profesor").val(),
  		id_usuario:$("#id_usuario").val()
    };
  	$("#texto").val('');
  	$("#puntaje").val('');
    agregarComentario(comentario);
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

  function verDetalleProfesor(id_prof){
      $.get("index.php?page=profesor",{ id_profesor: $(id_prof).attr("data-idprofesor") }, function(data) {
        var id_profesor=$(id_prof).attr("data-idprofesor");
        $('#contenido').html(data);
        getComentarios(id_profesor);
      });
  }

    var template;
    var repetidor;
    function getComentarios(id_profesor){
      $.ajax({ url: 'js/templates/comentario.mst',
      success: function(templateReceived) {
        template = templateReceived;
      }
    });
    clearInterval(repetidor);
    function get() {
      url="api/comentario/"+id_profesor;
      $.get( url, function(data) {
        var rendered = Mustache.render(template,{comentario:data});
        $("#listaComentarios").html(rendered);
      });
    }
    get();
    repetidor = setInterval(get, 2000);
  }

  function cargarComentarios(){
   $.ajax(
       {
         method:"GET",
         dataType: "JSON",
         url: "api/comentario",
         success: crearComentario
       }
     )
  };

 function crearComentario(comentario){
       var rendered = Mustache.render(template,{comentario});
       $('#listaComentarios').html(rendered);
  };

	function agregarComentario(comentario){
	  $.ajax({
	    method: 'POST',
	    url:'api/comentario',
	    datatype: 'JSON',
	    data: comentario,
	    success: function(comentario){
				$("#listaComentarios").append(comentario);
	    },
	    error: function () {
	      alert('Error al agregar comentario');
	    }
	  });
	}

	function borrarComentario(idcomentario,comentario){
	  $.ajax({
	    method: 'DELETE',
	    url:'api/comentario/'+ idcomentario,
	    datatype: 'JSON',
	    success: function(data){
				comentario.hide("slow", function(){ comentario.remove(); });
	    },
	    error: function () {
	      alert('Error al borrar comentario');
	    }
	  });
	}
