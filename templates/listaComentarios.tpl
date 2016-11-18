<ul id="listaComentarios">
  {foreach from=$comentarios key=index item=comentario}
  <li>
      {$comentario['comentario']}
      {$comentario['puntaje']}
      <a class="eliminarComentario" href="#" data-idcomentario="{$comentario['id_comentario']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
  </li>
  {/foreach}
</ul>
