<section>
    <div class="container">
      <div class="fluid_container">
        <div class="row">
          <div class="col-md-6">
            <form id="formProfesor" action="index.php?page=adminAgregarProfesor" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id_profesor" id="id_profesor" value="">
              <div class="form-group">
                <label for="nombreCompleto">Nombre Completo</label>
                <input type="text" name="nombreCompleto" class="form-control" id="nombreCompleto" placeholder="Nombre">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Telefono">
              </div>
              <div class="form-group">
                <label for="materia">Materia</label>
                <select id="materia" name="materia"class="form-control">
                  {foreach $materias as $materia}
                    <option value="{$materia["id_materia"]}" > {$materia["nombre"]} </option>
                  {/foreach}
                </select>
              </div>
              <div class="form-group">
                <label class="sr-only" for="precio">Precio</label>
                <div class="input-group">
                  <div class="input-group-addon">$</div>
                  <input type="text" name="precio" class="form-control" id="precio" placeholder="Precio">
                  <div class="input-group-addon"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="imagenes[]" required value="" multiple>
              </div>
              <div class="form-group">
                  <label for="tipoDeClase">Tipo de clase</label>
                  <select id="tipoDeClase"  name="tipoDeClase" class="form-control">
                    <option>Grupal</option>
                    <option>Individual</option>
                    <option>Domicilio</option>
                  </select>
                </div>
              <button id="agregarProfesor" type="submit" class="btn btn-default">Aplicar</button>
            </form>
            </div>
         </div>
      </div>
   </div>
 </section>
