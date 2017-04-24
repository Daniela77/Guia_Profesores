<section>
<div class="container">
  <div class="fluid_container">
    <div class="row">
        <div class="col-md-6" >
          {if isset($mensaje)}
          <div class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
          {/if}
          <h2>Lista de profesores</h2>

          <div class="table-responsive">
            <table class="table table-hover">
              <thead class= "head-table">
                <tr>
                  <th>IMAGEN</th>
                  <th>PROFESORES</th>
                  <th>EMAIL</th>
                  <th>TELEFONO</th>
                  <th>MATERIA</th>
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
                      <img src="{$imagen['ruta']}" alt=""  class="img-thumbnail">
                      {if $admin=='Administrador'}
                        <button class="btn btn-danger btn-xs eliminarImagen" type="button" data-imgruta="{$imagen['ruta']}">Eliminar</button>
                      {/if}
                    {/foreach}
                    </div>
                  </td>
                  <td>{$profesor['nombreCompleto']}</td>
                  <td>{$profesor['email']}</td>
                  <td>{$profesor['telefono']}</td>
                  <td>{$profesor['materia']['nombre']}</td>
                  <td>${$profesor['precio']}</td>
                  <td>{$profesor['tipoDeClase']}</td>
                {if $admin=='Administrador'}
                      <td><a class="eliminarProfesor" href="index.php?page=adminEliminarProfesor&id_profesor={$profesor['id_profesor']}" data-idprofesor="{$profesor['id_profesor']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                      <td><a class="modificarProfesor" data-nombreCompleto="{$profesor['nombreCompleto']}" data-idprofesor="{$profesor['id_profesor']}" data-email="{$profesor['email']}"data-telefono="{$profesor['telefono']}" data-idmateria="{$profesor['id_materia']}" data-precio="{$profesor['precio']}"  data-tipoDeClase="{$profesor['tipoDeClase']}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                  {/if}
                  <td><a href="index.php?page=profesor" data-idprofesor="{$profesor['id_profesor']}"class="detalles" id="profesor"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
                </tr>
      			  {/foreach}
              </tbody>
              <tfoot>
            </tfoot>
          </table>
         </div>
       </div>
       <div id="listaProfesores">
         <div id="mostrarForm">
           {include file="adminprofesores.tpl"}
         </div>
       </div>
      </div>
    </div>
  </div>
</section>
