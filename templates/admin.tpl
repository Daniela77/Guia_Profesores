
<article>
	<section>
		<div class="pull-right">
			{if isset($usuario)}
				Hola!<strong>{$usuario['email']}:{if $admin=='Administrador'}Administrador{else}Usuario{/if}</strong>
				<a href="index.php?page=logout" id="cerrarSesion" name="cerrarSesion" class="btn btn-info btn-md">Salir!</a>
			{/if}
		</div>
		</section>
		<div class="">
			{if $usuario['rol_usuario']=='Administrador'}
			<p><h2>Administrador</h2></p>



			{include file="opciones.tpl"}

		 {else}
		 <h1>BIENVENIDO A PARTICULARTE!</h1>
		  {/if}
		</div>

</article>
