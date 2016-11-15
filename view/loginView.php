<?php
include_once 'view/View.php';

class LoginView extends View{

  function mostrarLogin(){
    $this->smarty->assign('errores', $this->errores);
    $this->smarty->display('login.tpl');
  }

}


?>
