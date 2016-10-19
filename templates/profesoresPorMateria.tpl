<div class="panel">
  <div class="col-md-offset-5">
    <label for="porMateria">Buscar profesores segun materia</label>
    <form class="porMateria" href="index.php?page=buscarProfesoresMat"  method="post">
      <div class="form-group col-xs-3">
        <select class="form-control" name="id_materia">
          {foreach from=$materias item=materia}
          <option value="{$materia['nombre']}">{$materia['nombre']}</option>
          {/foreach}
        </select>
      </div>
      <button id="buscarProfesores"class="btn btn-primary" type="submit" name="">Buscar</button>
    </form>
  </div>
</div>
{if isset($lista) && $lista }
  <div class="panel">
    {foreach from=$profesores item=profesor}
    <div class="panel">
      <p>
        <a class="nav-link-cabania" href="cabania" data-idcabania="{$cabania['id_cabania']}"><h3>Cabaña {$cabania["nombre"]}</h3></a>
        <div class="panel">
          <p>
            Pertenece a la Materia {$profesor["id_materia"]}.
          </p>
        </p>
      </div>
    </div>
    {/foreach}
    <div class="panel">
      <h4>{$mensaje}</h4>
    </div>
  </div>
  {/if}
