$(document).ready(function(){
	"use strict";

	function MostrarContenido(data){
		$("#contenido").html(data);
	}

	function MostrarError(){
		$("#contenido").html("SE CAYO LA RED.");
	}

	//prueba
	function InicializarEvt() {
	  $("nav ul li").on("click",CargarAjax);
	  $(".simplenav a").on("click",CargarAjax);
		cargarEventos();

	}

	function InicializarABMEvt(){
	  $("aside  nav ul li #adminAgregarProfesor").on("click",CargarAjax);
		$("aside  nav ul li #adminAgregarMateria").on("click",CargarAjax);
	  $("aside ul li #adminListaP").on("click",CargarAjax);
		$("aside ul li #adminListaM").on("click",CargarAjax);
		$("article #admin_cont").on("click",CargarAjax);
	}

	function CargarAjax(e){
		var myUrl = $(this).attr("href");
		$("nav ul li").removeClass("active");
		$(".simplenav a").removeClass("active");
		$(this).addClass("active");
		$.ajax(
		  {
		    url: myUrl,
		    dataType: "html",
		    success: function(data){ // Si la solicitud tuvo exito, mostrará el contenido en la pagina y
		        $("#contenido").html(data);
		        InicializarABMEvt();
						InicializarEvt();
		        },
		    error: MostrarError,
		  });
		  e.preventDefault();

				InicializarEvt();
				InicializarABMEvt();
				  return false;
	}

	 InicializarEvt();
	 InicializarABMEvt();

	function cargarEventos(){
		$('#agregarMateria').off().click(function(){
			event.preventDefault();
			$.post("index.php?page=adminAgregarMateria",$("#formMateria").serialize(), function(data) {
				 $('#listaMaterias').html(data);
					$('#nombre').val('');
			});
		});

		$('.eliminarMateria').click(function(){
			event.preventDefault();
			$.get( "index.php?page=adminEliminarMateria",{ id_materia: $(this).attr("data-idmateria") }, function(data) {
			$('#listaMaterias').html(data);
			});
		});

		$('.modificarMateria').click(function(){
			$("#mostrarForm").toggle('slow');
			event.preventDefault();
			$('#id_materia').val($(this).attr("data-idmateria"));
			$('#nombre').val($(this).attr("data-nombre"));
		});

		// $("#formTasks").on("submit", function(){
		// 	event.preventDefault();
		// 	formData = new FormData(this);


		$('#formProfesor').on("submit", function(){
			event.preventDefault();
			var formData = new FormData(this);
			alert(56);
			$.ajax({
			   method: "POST",
			   url: "index.php?page=adminAgregarProfesor",
			   data: formData,
			   contentType: false,
			   cache: false,
			   processData:false,
				 success: function(data){ // Si la solicitud tuvo exito, mostrará el contenido en la pagina y
					 $("#contenido").html(data);
 		       //  $("#listaProfesores").html(data);
 		        },
 		    error: MostrarError,
 		  });
		});

		//ver que ande elver detalle
		$(".detallesMateria").each(function(i,obj){
			$(this).off().on("click", function(ev){
				$.get("index.php?page=materia&nro="+$(obj).attr('materia'), function(data){
					$("#contenido").html(data);
				})
					.fail(function(){
						alert("Error");
					});
				ev.preventDefault();
			});
		});


		$(".detalles").each(function(i,obj){
			$(this).off().on("click", function(ev){
				$.get("index.php?page=profesor&nro="+$(obj).attr('id_profesor'), function(data){
					$("#contenido").html(data);
				})
					.fail(function(){
						alert("Error");
					});
				ev.preventDefault();
			});
		});

		$('.eliminarProfesor').click(function(){
			event.preventDefault();
			$.get( "index.php?page=adminEliminarProfesor",{ id_profesor: $(this).attr("data-idprofesor") }, function(data) {
			$('#listaProfesores').html(data);
			});
		});

		// $('.modificarProfesor').click(function(){
		// 	event.preventDefault();
		// 	alert(45);
		// 	$('#id_profesor').val($(this).attr("data-idprofesor"));
		// 	$('#nombreCompleto').val($(this).attr("data-nombreCompleto"));
		//
		// 	// $.put("index.php?page=adminModificarMateria",{ id_materia: $(this).attr("data-idmateria") }, function(data) {
		// 	// $('#listaTareas').html(data);
		// 	// $('#tarea').val('');
		// 	// });
		// });
		$('#buscarProfesores').click(function(){
			event.preventDefault();
			$.get( "index.php?page=buscarProfesoresMat",$("#porMateria").serialize(), function(data)  {
			$('#listaProfesores').html(data);
			});
		});
	}



	});
