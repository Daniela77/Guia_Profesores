<?php
include_once "view/view.php";
include_once "view/materiaView.php";
include_once "view/profesorView.php";
class AbmView extends View{

  function mostrarAdminProfesores($materias,$profesores){
    $this->smarty->assign('materias', $materias);
    $this->smarty->assign('profesores', $profesores);
    $this->smarty->display('adminProfesores.tpl');
  }

  function mostrarProfesor($profesor){
    $this->smarty->assign('profesor', $profesor);
    $this->smarty->display('profesor.tpl');
  }

  function mostrarProfesoresMat($profesores,$mensaje,$materias){
    $this->smarty->assign('lista', true);
    $this->smarty->assign('mensaje', $mensaje);
    $this->smarty->assign('materias', $materias);
    $this->smarty->assign('profesores', $profesores);
    $this->smarty->display("profesoresPorMateria.tpl");
  }
}
?>
