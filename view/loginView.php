<?php
include_once 'view/View.php';

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

}

?>
