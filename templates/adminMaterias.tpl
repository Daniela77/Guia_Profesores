<section>
  <div class="container">
    <div class="fluid_container">
      <div class="row">
        <div class="col-md-6">
          <form id="formMateria" action="index.php?page=adminAgregarMateria" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_materia" id="id_materia" value="">
              <div class="form-group">
                <label for="materia">Materia</label>
                <input type="text"  name="nombre" class="form-control" id="nombre" placeholder="Nombre">
              </div>
            <button id="agregarMateria" type="submit" class="btn btn-default">Aplicar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
