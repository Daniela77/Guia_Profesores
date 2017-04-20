$(document).ready(function(){
    "use strict";
     $("nav ul li").on("click",CargarContenido);
});

function MostrarError(){
    $("#contenido").html("SE CAYO LA RED.");
}

function CargarContenido(e) {
    var myUrl = $(this).attr("href");
  	 $("nav ul li").removeClass("active");
     $(this).addClass("active");
     $.ajax({
        url: myUrl,
        dataType: "html",
        success: function(data){ // Si la solicitud tuvo exito, mostrará el contenido en la pagina y
            $("#contenido").html(data);
        },
        error: MostrarError,
    });
    e.preventDefault();
}
