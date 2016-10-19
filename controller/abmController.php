<?php
include_once 'controller/controller.php';
include_once 'view/abmView.php';
require_once 'view/profesorView.php';
include_once 'model/profesorModel.php';
require_once 'view/materiaView.php';
include_once 'model/MateriaModel.php';

class AbmController extends Controller {

 function __construct() {
    $this->view = new AbmView();
    $this->modelm = new MateriaModel();
    $this->viewm = new MateriaView();
    $this->modelp = new ProfesorModel();
    $this->viewp = new ProfesorView();
  }

  function adminProfesores(){
    $this->view->mostrarAdminProfesores($this->modelm->getMaterias(),$this->modelp->getProfesores());
  }

  function mostrarProfesor(){
			if(isset($_REQUEST['nro'])) $this->view->mostrarProfesor($this->modelp->getProfesor($_REQUEST['nro']));
			else echo "";
		}
  //   $this->view->mostrarProfesor($this->modelp->getProfesor($id_profesor));
  // }

}
?>
