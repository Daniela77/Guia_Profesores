<h1>Administrar Usuarios</h1>

<form method="POST" action="index.php?page=adminUsuarios" class="administrar_usuarios" enctype="multipart/form-data" >
    {foreach from=$usuarios key=index item=usuario}
        {if $usuario['email']!="dani@gmail.com"}
            <input type="checkbox" name="admin[]" value="{$usuario['email']}" {if in_array($usuario['email'],$admin)}checked{/if}>
            {$usuario['email']}
            <br>
        {/if}
    {/foreach}
    <input data-idusuario="{$usuario['id_usuario']}"  type="submit" class="btn btn-default" name="Agregar" id="agregarAdministrador">
</form>
