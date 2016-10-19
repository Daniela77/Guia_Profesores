<?php
/* Smarty version 3.1.30, created on 2016-10-19 19:21:17
  from "C:\xampp\htdocs\Guia_Profesores\templates\contacto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807ab8d56eff5_12753807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8897b3f0ab8761cd3eddd440ea82114ce0c0b30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Guia_Profesores\\templates\\contacto.tpl',
      1 => 1476849925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807ab8d56eff5_12753807 (Smarty_Internal_Template $_smarty_tpl) {
?>

  <section>
      <div class="container">
        <div class="fluid_container">
          <div class="row">
            <div class="row">
              <div class="col-md-8">
               <h2>Contacto</h2>
               <h4>Si desea contactase con nosotros,complete el siguiente formulario.
                  En breve estaremos respondiendo a su consulta.
                  Muchas gracias</h4>
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
