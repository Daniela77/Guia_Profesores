<?php
  include_once 'view/view.php';

  class MateriaView extends View{

    function mostrarMaterias($materias){
      $this->smarty->assign('materias', $materias);
      $this->smarty->display('materias.tpl');
    }

    function mostrarMateria($materia){
      $this->smarty->assign('materia', $materia);
      $this->smarty->display('materia.tpl');
    }


    function getmateriasLista($materias){//ver que funcione ,sino cambiar tpl a mostrar
      $this->smarty->assign('materias',$materias);
      $this->smarty->display('admin.tpl');
    }

    function mostrarAdminMaterias(){
      $this->smarty->display('adminMaterias.tpl');
    }
}
