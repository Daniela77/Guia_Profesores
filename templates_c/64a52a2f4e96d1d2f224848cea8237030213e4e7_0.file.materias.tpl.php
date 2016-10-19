<?php
/* Smarty version 3.1.30, created on 2016-10-19 19:39:08
  from "C:\xampp\htdocs\Guia_Profesores\templates\materias.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807afbc4bfe54_67141549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64a52a2f4e96d1d2f224848cea8237030213e4e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Guia_Profesores\\templates\\materias.tpl',
      1 => 1476898727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminMaterias.tpl' => 1,
  ),
),false)) {
function content_5807afbc4bfe54_67141549 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
  <div class="container">
    <div class="fluid_container">
      <div class="row">
          <div class="col-xs-6" >
            <h2>Lista de Materias</h2>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['materias']->value, 'materia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['materia']->value) {
?>
                <ul>
                  <li><?php echo $_smarty_tpl->tpl_vars['materia']->value['nombre'];?>

                    <a class="eliminarMateria" href="index.php?page=adminEliminarMateria&id_materia=<?php echo $_smarty_tpl->tpl_vars['materia']->value['id_materia'];?>
" data-idmateria="<?php echo $_smarty_tpl->tpl_vars['materia']->value['id_materia'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                    <a class="modificarMateria" data-nombre="<?php echo $_smarty_tpl->tpl_vars['materia']->value['nombre'];?>
" data-idmateria="<?php echo $_smarty_tpl->tpl_vars['materia']->value['id_materia'];?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    <div> <a href="index.php?page=materia&nro" class="detallesMateria" id="<?php echo $_smarty_tpl->tpl_vars['materia']->value['id_materia'];?>
">Ver m&aacutes...</a></div>
                  </li>
                </ul>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              <div id="listaMaterias">
                <?php $_smarty_tpl->_subTemplateRender("file:adminMaterias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php }
}
