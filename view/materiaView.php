<?php
  include_once 'view/view.php';

  class MateriaView extends View{

    function mostrarMaterias($materias,$usuarioLogueado){
      $this->smarty->assign('materias', $materias);
      $this->smarty->assign('usuario',$usuarioLogueado);
      $this->smarty->assign('admin',$usuarioLogueado['rol_usuario']);
      $this->smarty->display('materias.tpl');
    }

    function mostrarMateria($materia,$profesores){
      $this->smarty->assign('profesores', $profesores);
      $this->smarty->assign('materia', $materia);
      $this->smarty->display('materia.tpl');
    }

    function mostrarAdminMaterias(){
      $this->smarty->display('adminMaterias.tpl');
    }
}
