<?php
/* Smarty version 3.1.30, created on 2016-10-19 17:51:24
  from "C:\xampp\htdocs\Guia_Profesores\templates\profesor.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807967c17fbe3_82543048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '405904edd85095adcc84258951fb2c3ac8116fa8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Guia_Profesores\\templates\\profesor.tpl',
      1 => 1476892276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807967c17fbe3_82543048 (Smarty_Internal_Template $_smarty_tpl) {
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

<!-- <?php echo '<script'; ?>
>
	$(function(){
	  $(".slides").slidesjs({
	    play: {
	      active: true,
	        // [boolean] Generate the play and stop buttons.
	        // You cannot use your own buttons. Sorry.
	      effect: "slide",
	        // [string] Can be either "slide" or "fade".
	      interval: 3000,
	        // [number] Time spent on each slide in milliseconds.
	      auto: true,
	        // [boolean] Start playing the slideshow on load.
	      swap: true,
	        // [boolean] show/hide stop and play buttons
	      pauseOnHover: false,
	        // [boolean] pause a playing slideshow on hover
	      restartDelay: 2500
	        // [number] restart delay on inactive slideshow
	    }
	  });
	});
<?php echo '</script'; ?>
> -->
<?php }
}
