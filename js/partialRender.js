$(document).ready(function(){
    "use strict";
    $("nav ul li").on("click",CargarContenido);
    $(document).on("click", "#adminAgregarProfesor",CargarContenido);
    $(document).on("click","#adminAgregarMateria",CargarContenido);
    $(document).on("click","#adminListaP",CargarContenido);
    $(document).on("click","#adminListaM",CargarContenido);
    $(document).on("click", "#adminListaU",CargarContenido);
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
