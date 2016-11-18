$(document).ready(function(){
  function createComentarios(comentarios){
      for (var i = 0; i < comentarios.length; i++) {
        comentarios[i].finalizada = comentarios[i].finalizada ==0 ? false: true;
      }
       var rendered = Mustache.render(template,{titulo : "Comentario Extra", paquete:comentarios});
       $('#listaComenentarios').html(rendered);

  }
  var template;
  $.ajax({ url: 'js/templates/comentario.mst',
   success: function(templateReceived) {
     template = templateReceived;
   }
 });

$('#refresh').click(function(event){
  event.preventDefault();
  $.ajax(
    {
      method:"GET",
      dataType: "JSON",
      url: "api/comentario",
      success: createcomentarios
    }
  )
});
// $('#agregarTareaBtn').click(function(){
//   event.preventDefault();
//   $.post( "index.php?action=guardar_tarea",$("#formTarea").serialize(), function(data) {
//     $('#listaTareas').html(data);
//     $('#tarea').val('');
// });
// });

$('.eliminarComentario').click(function(){
event.preventDefault();
$.get( "index.php?page=eliminarComentario",{ id_tarea: $(this).attr("data-idcomentario") }, function(data) {
  $('#listaComentarios').html(data);
  $('#comentario').val('');
});

});
});
