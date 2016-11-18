<?php
/* Smarty version 3.1.30, created on 2016-11-18 04:08:03
  from "C:\xampp\htdocs\Guia_Profesores\templates\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582e7093232024_57248815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3186559fd85855b849a2dc48c770f2421229cfb9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Guia_Profesores\\templates\\admin.tpl',
      1 => 1479438472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:opciones.tpl' => 1,
  ),
),false)) {
function content_582e7093232024_57248815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:opciones.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<article>
	<div id="admin_cont">
		<section>
			<!-- Hola <strong><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</strong>!  -->
			<a href="index.php?page=logout" id="cerrarSesion" name="cerrarSesion" class="btn btn-info btn-lg"><span class="pull-right" class="glyphicon glyphicon-log-out"></span>Salir!</a>
			<p><h2>Administrador</h2></p>
		</section>
	</div>
</article>
<?php }
}
