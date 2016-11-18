<?php
/* Smarty version 3.1.30, created on 2016-11-18 03:19:48
  from "C:\xampp\htdocs\Guia_Profesores\templates\profesor.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582e65449cac27_73668766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '405904edd85095adcc84258951fb2c3ac8116fa8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Guia_Profesores\\templates\\profesor.tpl',
      1 => 1479435575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comentarios.tpl' => 1,
  ),
),false)) {
function content_582e65449cac27_73668766 (Smarty_Internal_Template $_smarty_tpl) {
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
							<td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['materia']['nombre'];?>
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
					<tfoot>
						<th></th>
						<td>
							<?php $_smarty_tpl->_subTemplateRender("file:comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

						</td>

					</tfoot>
					<!-- <tfoot id="listaComentarios">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentarios']->value, 'comentario', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['comentario']->value) {
?>
							<th>Comentarios:</th>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['comentario']->value['comentario'];?>

								<?php echo $_smarty_tpl->tpl_vars['comentario']->value['puntaje'];?>

								<a class="eliminarComentario" href="#" data-idcomentario="<?php echo $_smarty_tpl->tpl_vars['comentario']->value['id_comentario'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
							</td>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</tfoot> -->
			</table>
		</div>
	</section>
</article>
<?php }
}
