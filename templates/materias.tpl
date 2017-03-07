<section>
<div class="container">
  <div class="fluid_container">
    <div class="row">
        <div class="col-xs-6" >
          <h2>Lista de Materias</h2>
            {foreach $materias as $materia}
            <div class="btn-toolbar" role="toolbar">
                <div class="btn-toolbar " role="toolbar">
                  <ul>
                    <li class="list-group-item active-custom">{$materia['nombre']}
                      {if $admin=='Administrador'}
                        <button type="button" class="btn btn-default"><a class="eliminarMateria" href="index.php?page=adminEliminarMateria&id_materia={$materia['id_materia']}" data-idmateria="{$materia['id_materia']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></button>
                        <button type="button" class="btn btn-default"><a class="modificarMateria" data-nombre="{$materia['nombre']}" data-idmateria="{$materia['id_materia']}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></button>
                      {/if}
                      <button type="button" class="btn btn-default"><a href="index.php?page=materia" data-idmateria="{$materia['id_materia']}" class="detallesMateria" id="{$materia['id_materia']}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></button>
                    </li>
                  </ul>
                </div>
            </div>
            {/foreach}
            <div id="listaMaterias">
              <div id="mostrarForm">
                {include file="adminMaterias.tpl"}
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
