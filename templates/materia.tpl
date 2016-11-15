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
                {include file="listaProfesores.tpl"}
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
