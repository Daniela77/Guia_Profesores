
	<section>
		<div class="container">
		  <div class="fluid_container">
		    <div class="row">
		      <div class="col-md-1"></div>
		        <div class="col-md-10" >
							<div class="slide">
							{foreach from=$profesor['imagenes'] key=index item=imagen}
								<img src="{$imagen['ruta']}" alt="profesor" class="img-responsive center-block">
							{/foreach}
							</div>
							<div class="T_container">
								<table class="table">
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
									</div>
								</div>
							<div class="col-md-1"></div>
			 	</div>
			</div>
		</div>
	</section>
		{include file="comentarios.tpl"}
