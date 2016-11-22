<section>
  <div class="container">
    <div class="fluid_container">
      <div class="row">
        <div class="col-xs-6" >
          <h2>Lista de Materias</h2>
          {foreach $materias as $materia}
            <ul>
              <li>{$materia['nombre']}
                <a href="index.php?page=materia" data-idMateria="{$materia['id_materia']}" class="detallesMateria" id="{$materia['id_materia']}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
              </li>
            </ul>
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