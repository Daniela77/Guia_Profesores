
<article>
		<div class="pull-right">
			{if isset($usuario)}
				<h5><strong>Hola!{$usuario['email']}:{if $admin=='Administrador'}Administrador{else}Usuario{/if}</strong></h5>
			{/if}
		</div>
			{if $usuario['rol_usuario'] == "Administrador"}
				<p><h2>Administrador</h2></p>
				<br>
				{include file="opciones.tpl"}
			{else}
			{include file="inicio.tpl"}
			{/if}
</article>
