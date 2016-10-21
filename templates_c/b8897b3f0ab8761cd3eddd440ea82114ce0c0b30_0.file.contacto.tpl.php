<?php
/* Smarty version 3.1.30, created on 2016-10-21 00:53:42
  from "C:\xampp\htdocs\Guia_Profesores\templates\contacto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58094af61dbb91_82437000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8897b3f0ab8761cd3eddd440ea82114ce0c0b30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Guia_Profesores\\templates\\contacto.tpl',
      1 => 1476931890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58094af61dbb91_82437000 (Smarty_Internal_Template $_smarty_tpl) {
?>

  <section>
      <div class="container">
        <div class="fluid_container">
          <div class="row">
            <div class="row">
              <div class="col-md-8">
               <h2>Contacto</h2>
               <p>Si desea contactase con nosotros,complete el siguiente formulario.
                  En breve estaremos respondiendo a su consulta.
                  Muchas gracias</p>
                <form>
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Juan">
                  </div>
                  <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" class="form-control" id="apellido" placeholder="Pérez">
                  </div>
                  <div class="form-group">
                    <label>Teléfono</label>
                    <input type="password" class="form-control" id="telefono" placeholder="Ej: (0123) 1234-5678">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label>Consulta</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                <button type="submit" class="btn btn-default">Enviar</button>
              </form>
            </div>
           </div>
         </div>
       </div>
     </div>
  </div>
</section>
<?php }
}
