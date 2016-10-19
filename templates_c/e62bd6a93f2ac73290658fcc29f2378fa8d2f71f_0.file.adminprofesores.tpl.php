<?php
/* Smarty version 3.1.30, created on 2016-10-19 17:47:29
  from "C:\xampp\htdocs\Guia_Profesores\templates\adminprofesores.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58079591d70cc2_12777581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e62bd6a93f2ac73290658fcc29f2378fa8d2f71f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Guia_Profesores\\templates\\adminprofesores.tpl',
      1 => 1476849955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58079591d70cc2_12777581 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
    <div class="container">
      <div class="fluid_container">
        <div class="row">
          <div class="col-md-6">
            <form id="formProfesor" action="index.php?page=adminAgregarProfesor" method="POST" enctype="multipart/form-data">
              <!-- <input type="hidden" name="id_profesor" id="id_profesor" value=""> -->
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
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['materias']->value, 'materia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['materia']->value) {
?>
                    <option value='<?php echo $_smarty_tpl->tpl_vars['materia']->value["id_materia"];?>
'>'<?php echo $_smarty_tpl->tpl_vars['materia']->value["nombre"];?>
'</option>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
              <button id="agregarProfesor" type="submit" class="btn btn-default">Agregar Profesor</button>
            </form>
            </div>
         </div>
      </div>
   </div>
  </section>
<?php }
}