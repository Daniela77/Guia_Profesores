$(document).ready(function(){


  var template;
  $.ajax({ url: 'js/templates/comentario.mst',
   success: function(templateReceived) {
     template = templateReceived;
   }
 });

$('#refresh').click(function(event){
  console.console.log(refresh);
  event.preventDefault();
  $.ajax(
    {
      method:"GET",
      dataType: "JSON",
      url: "api/comentarios",
      success: crearComentarios
    }
  )
});


  function agregarComentario(){
    $('#formComentario').on("submit", function(event){
      event.preventDefault();
      var formData = new FormData(this);
      console.log(formData);
      $.ajax({
        method:'POST',
        url: "api/comentarios",
        data: formData,
        contentType: false,
        cache: false,
        processData:false,
        success: function(data){ // Si la solicitud tuvo exito, mostrará el contenido en la pagina y
          crearComentarios();
          $("#contenido").html(data);
          $('#email').val('');
          $('#comentario').val('');
          $('#puntaje').val('');
        },
        error: MostrarError,
      });
    });
  }



$('.eliminarComentario').click(function(){
event.preventDefault();
$.get( "index.php?page=eliminarComentario",{ id_comentario: $(this).attr("data-idcomentario") }, function(data) {
  $('#listaComentarios').html(data);
  $('#comentario').val('');
});
});


});
