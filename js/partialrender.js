$(document).ready(function(){
	"use strict";

	function MostrarContenido(data){
		$("#contenido").html(data);
	}

	function MostrarError(){
		$("#contenido").html("SE CAYO LA RED.");
	}

	function InicializarEvt() {
		$("nav ul li").on("click",CargarAjax);
		$(".simplenav a").on("click",CargarAjax);
		cargarEventos();
	}

	function InicializarABMEvt(){
		$("aside  nav ul li #adminAgregarProfesor").on("click",CargarAjax);
		$("aside  nav ul li #adminAgregarMateria").on("click",CargarAjax);
		$("aside nav ul li #adminListaP").on("click",CargarAjax);
		$("aside nav ul li #adminListaM").on("click",CargarAjax);
		cargarEventos();
	}

	function CargarAjax(e){
		var myUrl = $(this).attr("href");
		$("nav ul li").removeClass("active");
		$(".simplenav a").removeClass("active");
		$(this).addClass("active");
		$.ajax({
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

		// $(document).on("click", "#adminListaP", CargarAjax);
		// $(document).on("click", "#adminListaM", CargarAjax);
		// $(document).on("click", "#adminAgregarProfesor", CargarAjax);
		// $(document).on("click", "#adminAgregarMateria", CargarAjax);
		// 	$(document).on("click", "#adminListaU", CargarAjax);

		$('#agregarMateria').off().click(function(event){
			event.preventDefault();
			agregarMateria();
			cargarEventos();
		 });


		$('.eliminarMateria').click(function(event){
			event.preventDefault();
			$.get( "index.php?page=adminEliminarMateria",{ id_materia: $(this).attr("data-idmateria") }, function(data) {
			$('#contenido').html(data);
			cargarEventos();
			});

		});

		$('.modificarMateria').click(function(event){
			$("#mostrarForm").toggle('slow');
			event.preventDefault();
			$('#id_materia').val($(this).attr("data-idmateria"));
			$('#nombre').val($(this).attr("data-nombre"));
			cargarEventos();
		});


		$('#formProfesor').on("submit", function(){
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
					cargarEventos();
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

		//ver detalle de materia
		$(".detallesMateria").each(function(i,obj){
			$(this).off().on("click", function(ev){
				$.get("index.php?page=materia&nro="+$(obj).data('idmateria'), function(data){
					$("#contenido").html(data);
					cargarEventos();
				});
				// .fail(function(){
				// 	alert("Error");
				// });
				ev.preventDefault();
			});

		});

		//ver detalle de profesor
		$(".detalles").each(function(i,obj){
			$(this).off().on("click", function(ev){
				$.get("index.php?page=profesor&nro="+$(obj).data('idprofesor'), function(data){
					var id_profesor = $(obj).data('idprofesor');
					$("#contenido").html(data);
					cargarEventos();
						crearComentarios(id_profesor);
					// var temporizador = setInterval(function() {crearComentarios(id_profesor)}, 2000);
					// $.ajaxSetup({ cache: false });

				});
				ev.preventDefault();
			});
		});


		$('.eliminarProfesor').click(function(){
			event.preventDefault();
			$.get( "index.php?page=adminEliminarProfesor",{ id_profesor: $(this).attr("data-idprofesor") }, function(data) {
				$('#contenido').html(data);
			});
		});


		$('.modificarProfesor').click(function(event){
			$("#mostrarForm").toggle('slow');
			event.preventDefault();
			$('#id_profesor').val($(this).attr("data-idprofesor"));
			$('#nombreCompleto').val($(this).attr("data-nombreCompleto"));
			$('#email').val($(this).attr("data-email"));
			$('#telefono').val($(this).attr("data-telefono"));
			$('#materia').val($(this).attr("data-idmateria")).change();
			$('#precio').val($(this).attr("data-precio"));
			$('#tipoDeClase').val($(this).attr("data-tipoDeClase"));
			cargarEventos();
		});


		$('#buscarProfesores').click(function(){
			event.preventDefault();
			BuscarProfesorPorMateria();
			cargarEventos();
		});

		$("#iniciarSesion").click(function(){
			loguearse();
			event.preventDefault();
			cargarEventos();
		 });


		 $('#cerrarSesion').on('click', function(){
		 	event.preventDefault();
			cerrarSesion() ;
			// cargarEventos();
			 });

			$('#irregistrar').on('click', function(event){
			event.preventDefault();
			$.ajax({
				method: 'POST',
				url:'index.php?page=mostrarRegistrar',
				success: function(data){
					$("#contenido").html(data);
					cargarEventos();
				},
				error: function () {
					alert('Error al ir registrar');
				},
			});
		});

		$('.eliminarImagen').click(function(){
			event.preventDefault();
			$.post( "index.php?page=eliminarImagen&imgruta",{imgruta: $(this).attr("data-imgruta")}, function(data) {
				$('#contenido').html(data);
				cargarEventos();
			});
		});

	
		$("#registrar").on("click",function(event){
		registrar();
	});


		$(document).on("click",'.modifRol', function(event){
			event.preventDefault();
			var rol=$(this).attr("data-rol");
					console.log(rol);
				$.post( "modificarRol",{id_usuario: $(this).attr("data-idusuario")}, function(data) {
				$('#contenido').html(data);
				// cargarEventos();
				});
			});

			$("#adminListaU").click(function(e){
				 e.preventDefault();
				listarUsuarios();
				 });


	}//cierra el cargar eventos



	////////////////////////////////////Agregar Materia /////////////////////////////////

	function agregarMateria() {
		$.post("index.php?page=adminAgregarMateria",$("#formMateria").serialize(), function(data) {
			$('#contenido').html(data);
			cargarEventos();
			$('#nombre').val('');
		});
	}

	//////////////////////////////Filtra profesores segun materia ////////////////////////

	function BuscarProfesorPorMateria() {
		$.get( "index.php?page=buscarProfesoresMat&id_materia",{ id_materia: $(this).attr("data-idmateria") }, function(data)  {
			$('#contenido').html(data);
			cargarEventos();
			$('#materia').val('');
		});
	}

////////////////////////////////////////////Logout//////////////////////////////////

	function cerrarSesion() {
		$.ajax({
			method: 'POST',
			url:'index.php?page=logout',
			success: function(data){
			 $("body").html(data);
				cargarEventos();
			},
			error: function () {
				alert('Error al cerrar sesion');
			},
		});
	}

////////////////////////////////////////Login /////////////////////////////////////

	function loguearse(){
		var data = {'email':$('#inputEmail').val(),'password':$('#inputPassword').val()};
		$('#inputEmail').val('');
		$('#inputPassword').val('');
		$.ajax({
			type:"POST",
			datatype: "JSON",
			url:"index.php?page=admin",
			data: data,
			success:function(data){
				$("#contenido").html(data);
				cargarEventos();
			},
			error: function(){
				alert("error al iniciar sesion");
			},
		});
	}

//////////////////////////Lista los usuarios///////////////////////////////////////////////

		function listarUsuarios(){
		 $.get( "index.php?page=adminUsuarios", function(data) {
				 $('#contenido').html(data);
					cargarEventos();
		 });
		}

//////////////////////////Registra usuarios nuevos//////////////////////////////////////////////

	function registrar(){
		$('#registrarForm').on("submit", function(event){
			event.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				method:'POST',
				url: "index.php?page=registrar",
				data: formData,
				contentType: false,
				cache: false,
				processData:false,
				success: function(data){ // Si la solicitud tuvo exito, mostrará el contenido en la pagina y
					$("#contenido").html(data);
					cargarEventos();
					$('#inputEmail').val('');
					$('#inputPassword').val('');
					$('#inputRol').val('');
				},
				error: MostrarError,
			});
		});
	}

///////////Crea la porcion htm del comentario para luego ser mostrada//////////////////////

	function crearComentarioHTML(comentario) {
			$.ajax({ url: 'js/templates/comentario.mst',
			 success: function(template) {
				 var rendered = Mustache.render(template,comentario);
				 $('#listaComentarios').append(rendered);
				 	 cargarEventos();

			 }
		 });
		}

//////////////////////////////Genera todos los comentarios ////////////////////////////////
function crearComentarios(id_profesor){
			$.ajax({
				method: 'GET',
				url:'api/comentario/'+id_profesor,
				datatype: 'JSON',
				success: function(comentario){
					comentario.forEach(function(comentario){
					 var html = crearComentarioHTML(comentario);
					 $('#listaComentarios').append(html);
					  // cargarEventos();
				 });
				},
				error: function () {
					alert('Error al crear comentario');
				}
			});
		}

		var template;
		$.ajax({ url: 'js/templates/comentario.mst',
		 success: function(templateReceived) {
			 template = templateReceived;
		 }
		});

//////////////////////////////Agrega el nuevo comentario ////////////////////////////////

		function agregarComentario(comentario){
			console.log(comentario);
		  $.ajax({
		    method: 'POST',
		    url:'api/comentario',
		    datatype: 'JSON',
		    data: comentario,
		    success: function(comentario){

					$("#listaComentarios").append(crearComentarioHTML(comentario));
					  // cargarEventos();
		    },
		    error: function () {
		      alert('Error al agregar comentario');
		    }
		  });
		}

//////////////////////////////Borra un comentario dado ////////////////////////////////////

		function borrarComentario(idcomentario,comentario){
		  $.ajax({
		    method: 'DELETE',
		    url:'api/comentario/'+ idcomentario,
		    datatype: 'JSON',
		    success: function(data){
					comentario.hide("slow", function(){ comentario.remove(); });
		    },
		    error: function () {
		      alert('Error');
		    }
		  });
		}


$("body").on("click","a.borrar", function(event){
event.preventDefault();
var comentario = $(this).parents(".comentario");
console.log(comentario);
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
	console.log(comentario);
	$("#texto").val('');
	$("#puntaje").val('');
  agregarComentario(comentario);
});

});
