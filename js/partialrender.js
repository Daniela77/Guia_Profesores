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

		// $("article #admin_cont").on("click",CargarAjax);
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
		$('#agregarMateria').off().click(function(){
			event.preventDefault();
			$.post("index.php?page=adminAgregarMateria",$("#formMateria").serialize(), function(data) {
				$('#contenido').html(data);
				$('#nombre').val('');
			});
		});

		$('.eliminarMateria').click(function(){
			event.preventDefault();
			$.get( "index.php?page=adminEliminarMateria",{ id_materia: $(this).attr("data-idmateria") }, function(data) {
			$('#contenido').html(data);
			});
		});

		$('.modificarMateria').click(function(){
			$("#mostrarForm").toggle('slow');
			event.preventDefault();
			$('#id_materia').val($(this).attr("data-idmateria"));
			$('#nombre').val($(this).attr("data-nombre"));
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
					$("#contenido").html(data);
					crearComentarios();
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

		$('.modificarProfesor').off().click(function(){
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

		$('#buscarProfesores').click(function(){
			event.preventDefault();
			$.get( "index.php?page=buscarProfesoresMat&id_materia",{ id_materia: $(this).attr("data-idmateria") }, function(data)  {
				$('#contenido').html(data);
				$('#materia').val('');
			});
		});

		$("#iniciarSesion").click(function(){
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
				},
				error: function(){
					alert("error al iniciar sesion");
				},
			});
			event.preventDefault();
		});

		$('#cerrarSesion').on('click', function(event){
			event.preventDefault();
			$.ajax({
				method: 'POST',
				url:'index.php?page=logout',
				success: function(data){
					$("#contenido").html(data);
				},
				error: function () {
					alert('Error al cerrar sesion');
				},
			});
		});

		$(document).on("click", "#adminListaP", CargarAjax);
		$(document).on("click", "#adminListaM", CargarAjax);
		$(document).on("click", "#adminAgregarProfesor", CargarAjax);
		$(document).on("click", "#adminAgregarMateria", CargarAjax);
		// $(document).on("click", "#registrar", registrar);

		$('#irregistrar').on('click', function(event){
			event.preventDefault();
			$.ajax({
				method: 'POST',
				url:'index.php?page=mostrarRegistrar',
				success: function(data){
					$("#contenido").html(data);
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
			});
		});

		$("#registrar").on("click",function(event){
			registrar();
		});

	}//cierra el cargar eventos

		function registrar(){
			$('#registrarForm').on("submit", function(event){
				event.preventDefault();
				var formData = new FormData(this);
				$.ajax({
					method:'POST',
					url: "index.php?page=mostrarRegistrar",
					data: formData,
					contentType: false,
					cache: false,
					processData:false,
					success: function(data){ // Si la solicitud tuvo exito, mostrará el contenido en la pagina y
						$("#contenido").html(data);
						$('#inputEmail').val('');
						$('#inputPassword').val('');
						$('#inputRol').val('');
					},
					error: MostrarError,
				});
			});
		}

	function crearComentarioHTML(comentario) {
			$.ajax({ url: 'js/templates/comentario.mst',
			 success: function(template) {
				 var rendered = Mustache.render(template,comentario);
				 $('#listaComentarios').append(rendered);
			 }
		 });
		}

		function crearComentarios(){
			$.ajax({
				method: 'GET',
				url:'api/comentario',
				datatype: 'JSON',
				success: function(comentario){
					comentario.forEach(function(comentario){
					 var html = crearComentarioHTML(comentario);
					 $('#listaComentarios').append(html);
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


		function agregarComentario(comentario){
		  $.ajax({
		    method: 'POST',
		    url:'api/comentario',
		    datatype: 'JSON',
		    data: comentario,
		    success: function(comentario){

					$("#listaComentarios").append(crearComentarioHTML(comentario));
		    },
		    error: function () {
		      alert('Error al agregar comentario');
		    }
		  });
		}



		function borrarComentario(idcomentario){
		  $.ajax({
		    method: 'DELETE',
		    url:'api/comentario/'+ idcomentario,
		    datatype: 'JSON',
		    success: function(idcomentario){
					console.log(idcomentario);
					// $('#contenido').html(data);
					// $('#comentario ').remove("li .list-group-item ");

		      $('#comentario').remove();
		    },
		    error: function () {
		      alert('Error');
		    }
		  });
		}


$('body').on('click','a.borrar', function(event){
event.preventDefault();
borrarComentario(this.getAttribute('idcomentario'));
console.log(this.getAttribute('idcomentario'));
});
 // $(document).ready(function(){
 $('#refresh').on('click', function(event){
  event.preventDefault();
  crearComentarios();
	// setInterval(function() {crearComentarios()}, 2000);
});

$('body').on('click','#agregarComentario', function(event){
  event.preventDefault();
  var comentario= {
    texto:$("#texto").val(),
		puntaje: $("#puntaje").val(),
		id_profesor:$("#id_profesor").val()
  };
	console.log(comentario);
	$("#texto").val('');
	$("#puntaje").val('');
  agregarComentario(comentario);
});
  // crearComentarios();
 // });

});
