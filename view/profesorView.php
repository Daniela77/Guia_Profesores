<?php
include_once 'view/view.php';

class ProfesorView extends View{

  function mostrarAdminProfesores($materias,$profesores){
    $this->smarty->assign('materias', $materias);
    $this->smarty->assign('profesores', $profesores);
    $this->smarty->display('adminProfesores.tpl');
  }

  function mostrarProfesor($profesor){
    // $this->smarty->assign('materia', $materia);
    $this->smarty->assign('profesor', $profesor);
    $this->smarty->display('profesor.tpl');
  }

  // function mostrarProfesoresMat($profesores,$mensaje,$materias){
  //   $this->smarty->assign('mensaje', $mensaje);
  //   $this->smarty->assign('materias', $materias);
  //   $this->smarty->assign('profesores', $profesores);
  //   $this->smarty->display("profesoresPorMateria.tpl");
  // }

  function mostrarProfesores($profesores, $materias){
    $this->smarty->assign('materias', $materias);
    $this->smarty->assign('profesores', $profesores);
    $this->smarty->display('profesores.tpl');
  }

  function mostrarListaProfesores($profesores, $materias){
    $this->smarty->assign('materias', $materias);
    $this->smarty->assign('profesores', $profesores);
    $this->smarty->display('listaProfesores.tpl');
  }

  // function mostrarAdminLista($profesores){
  //   $this->smarty->assign('profesores', $profesores);
  //   $this->smarty->display('profesores.tpl');
  // }

  // function mostrarProfesor($profesor){
  //   $this->smarty->assign('profesor', $profesor);
  //   $this->smarty->display('profesor.tpl');
  // }

  // function getprofesoresLista($profesores){//ver que funcione ,sino cambiar tpl a mostrar
  //   $this->smarty->assign('profesores',$profesores);
  //   $this->smarty->display('admin.tpl');
  // }

  function mostrarMensaje($mensaje, $tipo){
    $this->smarty->assign('mensaje',$mensaje);
    $this->smarty->assign('tipoMensaje',$tipo);
  }

}


 ?>
