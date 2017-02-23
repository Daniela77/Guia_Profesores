<?php
include_once 'view/view.php';

class ProfesorView extends View{

  function mostrarAdminProfesores($materias,$profesores){
    $this->smarty->assign('materias', $materias);
    $this->smarty->assign('profesores', $profesores);
    $this->smarty->display('adminProfesores.tpl');
  }
  function mostrarProfesor($profesor,$usuarioLogueado){
    $this->smarty->assign('profesor', $profesor);
    $this->smarty->assign('usuario',$usuarioLogueado);
    $this->smarty->assign('admin',$usuarioLogueado['rol_usuario']);
    $this->smarty->display('profesor.tpl');
  }

  function mostrarProfesores($profesores, $materias,$usuarioLogueado){
    $this->smarty->assign('materias', $materias);
    $this->smarty->assign('profesores', $profesores);
    $this->smarty->assign('usuario',$usuarioLogueado);
    $this->smarty->assign('admin',$usuarioLogueado['rol_usuario']);
    $this->smarty->display('profesores.tpl');
  }

  function mostrarMensaje($mensaje, $tipo){
    $this->smarty->assign('mensaje',$mensaje);
    $this->smarty->assign('tipoMensaje',$tipo);
  }

}


 ?>
