<?php
  include_once(dirname(__DIR__).'/view/view.php');
  include_once(dirname(__DIR__).'/libs/Smarty.class.php');

  class View{
      protected $smarty;
      protected $errores;

      function __construct(){
        $this->smarty = new Smarty();
        $this->errores = array();
      }


      function mostrarError($error){
        array_push($this->errores, $error);
      }

  }
?>
