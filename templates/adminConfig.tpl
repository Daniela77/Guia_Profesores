<h1>Administrar Usuarios</h1>

<section>
<div class="container">
  <div class="fluid_container">
    <div class="row">
        <div class="col-xs-6" >
          {if isset($mensaje)}
          <div class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
          {/if}
          <h2>Lista de usuarios</h2>

          <div class="table-responsive">
            <table class="table table-hover">
              <thead class= "head-table">
                <tr>
                  <th>EMAIL</th>
                  <th>ROL</th>
                  <th>ES ADMIN</th>
                </tr>
              </thead>
              <tbody >
              {foreach from=$usuarios key=index item=usuario}
              <tr>
                  <td>{$usuario['email']}</td>
                  <td>{$usuario['rol_usuario']}</td>
                  {if $admin=='Administrador'}
                    {if $usuario['rol_usuario']=='Administrador'}
                      <td><button type="button" class="btn btn-info"><a class="modificarRol" data-rol="{$usuario['rol_usuario']}" data-idusuario="{$usuario['id_usuario']}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></button></td>
                      {else}
                      <td><button type="button" class="btn btn-default"><a class="modificarRol" data-rol="{$usuario['rol_usuario']}" data-idusuario="{$usuario['id_usuario']}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></button></td>
                    {/if}
                  {/if}
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
</section>
