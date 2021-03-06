    <div class="container">
      <div class="page-header">
        <h1>Información sobre el profesor</h1>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label class="control-label" for="nombre">Opiniones sobre el profesor</label>
          <ul id="listaComentarios" class="list-group">
          </ul>
        </div>

        {if $usuario['rol_usuario']=='Administrador'|| $usuario['rol_usuario']=='Usuario'}
      <div class="row coment">
        <div class="col-md-6">
          <form id="formComentario" method="POST" enctype="multipart/form-data">
            <input type="hidden" id="id_profesor" name="id_profesor" value="{$profesor['id_profesor']}">
            <input type="hidden" id="id_usuario" name="id_usuario" value="{$usuario['id_usuario']}">
            <div class="form-group">
              <label for="texto">Dejá tu opinion</label>
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
            <button id="agregarComentario" name="agregarComentario" type="submit" class="btn btn-info">Enviar</button>
          </form>
        </div>
        </div>
      </div>
    {/if}
    </div>
