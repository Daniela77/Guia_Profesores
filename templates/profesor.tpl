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
							<td>{$profesor['materia']['nombre']}</td>
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
					<tfoot>
						<th></th>
						<td>
							{include file="comentarios.tpl"}
						</td>

					</tfoot>
					<!-- <tfoot id="listaComentarios">
					{foreach from=$comentarios key=index item=comentario}
							<th>Comentarios:</th>
							<td>
								{$comentario['comentario']}
								{$comentario['puntaje']}
								<a class="eliminarComentario" href="#" data-idcomentario="{$comentario['id_comentario']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
							</td>
					{/foreach}
					</tfoot> -->
			</table>
		</div>
	</section>
</article>
