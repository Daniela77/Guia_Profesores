<?php
/* Smarty version 3.1.30, created on 2016-10-28 17:35:51
  from "C:\xampp\htdocs\Guia_Profesores\templates\profesor.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58137057ac8720_97439942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '405904edd85095adcc84258951fb2c3ac8116fa8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Guia_Profesores\\templates\\profesor.tpl',
      1 => 1477668934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58137057ac8720_97439942 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\xampp\\htdocs\\Guia_Profesores\\libs\\plugins\\modifier.capitalize.php';
?>
<article class="main">
	<section>
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
		<div class="T_container">
			<table class="table">
				<caption>Detalles</caption>
					<tbody>
						<?php $_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
?>
						<tr>
							<th>Profesor:</th>
							<td><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['profesor']->value['nombreCompleto']);?>
</td>
						</tr>
						<tr>
							<th>Email:</th>
							<td><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['profesor']->value['email']);?>
</td>
						</tr>
						<tr>
							<th>Telefono:</th>
							<td><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['profesor']->value['telefono']);?>
</td>
						</tr>
						<tr>
							<th>Materia:</th>
							<td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['id_materia'];?>
</td>
						</tr>
						<tr>
							<th>Precio:</th>
							<td><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['profesor']->value['precio']);?>
</td>
						</tr>
						<tr>
							<th>tipoDeClase:</th>
							<td><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['profesor']->value['tipoDeClase']);?>
</td>
						</tr>
					</tbody>
			</table>
		</div>
	</section>
</article>
<?php }
}
