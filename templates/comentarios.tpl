  <section>
    <div class="container">
      {if isset($mensaje)}
          <div class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
        {/if}
          <button id="refresh" type="button" class="btn btn-default btn-xs pull-right" aria-label="Refresh">
              <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
           </button>
          <h1>Comentarios</h1>
          <div class="row">
            <div id="listaComentarios">

            </div>
          </div>
          <form id="formComentario" href="api/comentarios" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <input type="hidden" class="form-control" name="id_profesor" value="{$profesor['id_profesor']}">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" name="email" value="{$usuario['email']}">
            </div>
            <div class="form-group">
              <label for="comentario">Comentario</label>
              <textarea class="form-control" id="comentario"  name="comentario"  placeholder="Dejá tu comentario..." required="required"></textarea>
            </div>
            <div class="form-group">
              <select id="puntaje" name="puntaje" class="custom-select" required="">
                <option selected>Puntaje</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            <button type="submit" name="agregarComentario" id="agregarComentario"class="btn btn-default">Comentar</button>
          </form>
    </div>
  </section>
