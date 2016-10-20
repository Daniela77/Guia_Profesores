<?php
/* Smarty version 3.1.30, created on 2016-10-20 01:45:06
  from "C:\xampp\htdocs\Guia_Profesores\templates\profesores.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580805823d5753_71584888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89cb8874c710fbe96d2de278d40d9d2a2b6f610f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Guia_Profesores\\templates\\profesores.tpl',
      1 => 1476920680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminprofesores.tpl' => 1,
  ),
),false)) {
function content_580805823d5753_71584888 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <section>
    <div class="container">
      <div class="fluid_container">
        <div class="row">
            <div class="col-xs-6" >
              <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
              <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['tipoMensaje']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
              <?php }?>
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
                      <th>PRECIO POR HORA</th>
                      <th>TIPO DE CLASE</th>
                    </tr>
                  </thead>
                  <tbody >
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profesores']->value, 'profesor', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['profesor']->value) {
?>
                    <tr>
          			  	  <td>
                        <div class="slides">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profesor']->value['imagenes'], 'imagen', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['imagen']->value) {
?>
                          <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['ruta'];?>
" alt="ProfesorImagen_<?php echo $_smarty_tpl->tpl_vars['profeso']->value['nombre'];?>
_<?php echo $_smarty_tpl->tpl_vars['imagen']->value['fk_id_profesor'];?>
"  class="img-thumbnail">
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                      </div>
                      </td>
                      <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['nombreCompleto'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['email'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['telefono'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['id_materia'];?>
</td>
                      <td>$<?php echo $_smarty_tpl->tpl_vars['profesor']->value['precio'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['tipoDeClase'];?>
</td>
                      <td><a class="eliminarProfesor" href="index.php?page=adminEliminarProfesor&id_profesor=<?php echo $_smarty_tpl->tpl_vars['profesor']->value['id_profesor'];?>
" data-idprofesor="<?php echo $_smarty_tpl->tpl_vars['profesor']->value['id_profesor'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                          <a class="modificarProfesor" data-nombreCompleto="<?php echo $_smarty_tpl->tpl_vars['profesor']->value['nombreCompleto'];?>
" data-idprofesor="<?php echo $_smarty_tpl->tpl_vars['profesor']->value['id_profesor'];?>
" data-email="<?php echo $_smarty_tpl->tpl_vars['profesor']->value['email'];?>
"data-telefono="<?php echo $_smarty_tpl->tpl_vars['profesor']->value['telefono'];?>
" data-idmateria="<?php echo $_smarty_tpl->tpl_vars['profesor']->value['id_materia'];?>
" data-precio="<?php echo $_smarty_tpl->tpl_vars['profesor']->value['precio'];?>
"  data-tipoDeClase="<?php echo $_smarty_tpl->tpl_vars['profesor']->value['tipoDeClase'];?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                      </td>
                      <td>
                        <div> <a href="index.php?page=profesor" class="detalles" id="profesor">Ver m&aacutes...</a></div>
                      </td>
                    </tr>

          			  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                  </tbody>
                  <tfoot>
                </tfoot>
              </table>
             </div>
           </div>
           <div id="listaProfesores">
             <div id="mostrarForm">
               <?php $_smarty_tpl->_subTemplateRender("file:adminprofesores.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

             </div>
           </div>
          </div>
        </div>
      </div>
    </section>
<?php }
}
