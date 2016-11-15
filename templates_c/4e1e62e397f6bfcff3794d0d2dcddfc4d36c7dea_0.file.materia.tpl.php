<?php
/* Smarty version 3.1.30, created on 2016-11-11 18:23:29
  from "C:\xampp\htdocs\Guia_Profesores\templates\materia.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5825fe91946095_51738721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e1e62e397f6bfcff3794d0d2dcddfc4d36c7dea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Guia_Profesores\\templates\\materia.tpl',
      1 => 1478884999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:listaProfesores.tpl' => 1,
  ),
),false)) {
function content_5825fe91946095_51738721 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
  <div class="container">
    <div class="fluid_container">
      <div class="row">
          <div class="col-xs-6" >
            <h2>Materia</h2>
              <ul>
                <li><?php echo $_smarty_tpl->tpl_vars['materia']->value['nombre'];?>
</li>
              </ul>
              <div class="profesoresPorMateria">
                <?php $_smarty_tpl->_subTemplateRender("file:listaProfesores.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php }
}
