<?php
/* Smarty version 3.1.30, created on 2016-11-23 05:15:09
  from "C:\xampp\htdocs\Guia_Profesores\templates\adminMaterias.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583517cde2b996_84528293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d5b5058d988d1ce535d8efd33705d7c9596c530' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Guia_Profesores\\templates\\adminMaterias.tpl',
      1 => 1476849982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583517cde2b996_84528293 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
<?php }
}
