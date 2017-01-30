    <div class="container">

      <div class="page-header">
        <h1>Lista de Comentarios</h1>
      </div>
      <div class="row">

        <div class="col-md-6">
          <h3>Comentarios:</h3>
          <label class="control-label" for="nombre">Comentario</label>
          <ul id="listaComentarios" class="list-group">
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <form id="formComentario" method="POST" enctype="multipart/form-data">
            <input type="hidden" id="id_profesor" name="id_profesor" value="{$profesor['id_profesor']}">
            <input type="hidden" id="id_usuario" name="id_usuario" value="2">
            <div class="form-group">
              <label for="texto">Comentario</label>
              <input type="text" class="form-control" id="texto" name="texto" value="" placeholder="Deje su comentario">
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
            <button id='agregarComentario' name="agregarComentario" type="submit" class="btn btn-info">Enviar</button>
          </form>
        </div>
      </div>
    </div>
