<article class="main">
	<section>
		<div class="slides">
		{foreach from=$profesor['imagenes'] key=index item=imagen}
			<img src="{$imagen['ruta']}" alt="ProfesorImagen_{$profeso['nombre']}_{$imagen['fk_id_profesor']}"  class="img-thumbnail">
		{/foreach}
		</div>
		<div class="T_container">
			<table class="table">
				<caption>Detalles</caption>
					<tbody>
						<tr>
							<th>Profesor:</th>
							<td>{$profesor['nombreCompleto']|capitalize}</td>
						</tr>
						<tr>
							<th>Email:</th>
							<td>{$profesor['email']|capitalize}</td>
						</tr>
						<tr>
							<th>Telefono:</th>
							<td>{$profesor['telefono']|capitalize}</td>
						</tr>
						<tr>
							<th>Materia:</th>
							<td>{$profesor['id_materia']}</td>
						</tr>
						<tr>
							<th>Precio:</th>
							<td>{$profesor['precio']|capitalize}</td>
						</tr>
						<tr>
							<th>tipoDeClase:</th>
							<td>{$profesor['tipoDeClase']|capitalize}</td>
						</tr>
					</tbody>
			</table>
		</div>
	</section>
</article>

<!-- <script>
	$(function(){
	  $(".slides").slidesjs({
	    play: {
	      active: true,
	        // [boolean] Generate the play and stop buttons.
	        // You cannot use your own buttons. Sorry.
	      effect: "slide",
	        // [string] Can be either "slide" or "fade".
	      interval: 3000,
	        // [number] Time spent on each slide in milliseconds.
	      auto: true,
	        // [boolean] Start playing the slideshow on load.
	      swap: true,
	        // [boolean] show/hide stop and play buttons
	      pauseOnHover: false,
	        // [boolean] pause a playing slideshow on hover
	      restartDelay: 2500
	        // [number] restart delay on inactive slideshow
	    }
	  });
	});
</script> -->
