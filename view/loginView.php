<?php
// include_once 'view/View.php';
include_once(dirname(__DIR__).'/view/view.php');

class LoginView extends View{

  function mostrarLogin(){
    $this->smarty->display('login.tpl');
  }

  function mostrarRegistrar(){
    $this->smarty->display('registrar.tpl');
  }

  function MostrarError($error){
    $this->smarty->assign("error", $error);
  }

  // function IrAdminConfig($usuarios,$admin){  //Nos lleva a la plantilla de editar Usuarios.
  //   $this->smarty->assign('usuarios', $usuarios);
  //   $this->smarty->assign('admin', $admin);
  //   $this->smarty->display('adminConfig.tpl');
  // }

}

?>
