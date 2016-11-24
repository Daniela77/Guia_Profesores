<section>
  <div class="container">
    <div class="fluid_container">
      <div class="row">
        <div class="col-xs-6" >
          <h2>Materia</h2>
          <ul>
            <li>{$materia['nombre']}</li>
          </ul>
          <div class="profesoresPorMateria">
            <h2>Lista de profesores</h2>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead class= "head-table">
                    <tr>
                      <th>IMAGEN</th>
                      <th>PROFESORES</th>
                      <th>EMAIL</th>
                      <th>TELEFONO</th>
                      <th>PRECIO</th>
                      <th>CLASE</th>
                    </tr>
                  </thead>
                  <tbody >
                    {foreach from=$profesores key=index item=profesor}
                      <tr>
                        <td>
                          <div class="slides">
                            {foreach from=$profesor['imagenes'] key=index item=imagen}
                              <img src="{$imagen['ruta']}" alt="ProfesorImagen_{$profeso['nombre']}_{$imagen['fk_id_profesor']}"  class="img-thumbnail">
                            {/foreach}
                          </div>
                        </td>
                        <td>{$profesor['nombreCompleto']}</td>
                        <td>{$profesor['email']}</td>
                        <td>{$profesor['telefono']}</td>
                        <td>${$profesor['precio']}</td>
                        <td>{$profesor['tipoDeClase']}</td>
                        <td><a href="index.php?page=profesor" data-idprofesor="{$profesor['id_profesor']}"class="detalles" id="profesor"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
                      </tr>
                    {/foreach}
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
