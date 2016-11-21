<?php
  include_once 'view/view.php';


  class DbView extends View{

    function newCredentials() {

      $this->smarty->display('newCredentials.tpl');
    }

  }
?>
