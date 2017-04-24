$(document).ready(function(){
    "use strict";
    $("nav ul li").on("click",CargarContenido);
     $("nav ul li span").on("click",CargarContenido);

});

function InicializarABMEvt(){
    $("aside nav ul li #adminAgregarProfesor").on("click",CargarContenido);
    $("aside nav ul li #adminAgregarMateria").on("click",CargarContenido);
    $("aside nav ul li #adminListaP").on("click",CargarContenido);
    $("aside nav ul li #adminListaM").on("click",CargarContenido);
    $("aside nav ul li #adminListaU").on("click",CargarContenido);

}

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
            InicializarABMEvt();
        },
        error: MostrarError,
    });
    e.preventDefault();
    // InicializarABMEvt();
}
// InicializarABMEvt();
