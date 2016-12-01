<?php
/* Smarty version 3.1.30, created on 2016-12-01 18:55:40
  from "C:\xampp\htdocs\Guia_Profesores\templates\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5840641c3a9e11_19204918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1690ce7c16bf5838859898d1700abaf41c1b1f29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Guia_Profesores\\templates\\nav.tpl',
      1 => 1480006452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5840641c3a9e11_19204918 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only"><!--sr=ScreenReader..como ven los disminuidos visuales-->Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="inicio.html">
              <img src="images/logoparticularte.png" alt="Particularte">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav pull-right mainNav">
            <li href="index.php?page=inicio"><a href="#"><strong>Inicio</strong></a></li>
            <li href="index.php?page=listaProfesores"><a href="#"><strong>Profesores</strong></a></li>
            <li href="index.php?page=listaMaterias"><a href="#"><strong>Materias</strong></a></li>
            <li href="index.php?page=contacto"><a href="#"><strong>Contacto</strong></a></li>
            <li href="index.php?page=login"><a href="#"><strong>Administrador</strong></a></li>

            <!-- <?php if ($_smarty_tpl->tpl_vars['usuario']->value['rol_usuario'] == 'usuario') {?>
                  <li href="index.php?page=login"><a href=# id="login">Ingresar</a></li>
                <?php } else { ?>
                  <li href="index.php?page=logout"><a href=# id="logout">Logout</a><span class="glyphicon glyphicon-user"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</span></li>
                <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['usuario']->value['rol_usuario'] == 'administrador') {?>
                    <li href="index.php?page=login"><a href="#"><strong>Administrador</strong></a></li>
                  <?php }?> -->
          </ul>
        </li>
      </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    <!-- /.navbar -->
  </nav>
<?php }
}
