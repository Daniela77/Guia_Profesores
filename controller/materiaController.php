<?php
include_once 'controller/controller.php';
require_once 'view/materiaView.php';
include_once 'model/materiaModel.php';

class MateriaController extends Controller{

  function __construct() {
     $this->model = new MateriaModel();
     $this->view = new MateriaView();
   }

   function mostrarMaterias(){
     $this->view->mostrarMaterias($this->model->getMaterias());
   }

   function mostrarMateria(){
  			if(isset($_REQUEST['nro'])) {$this->view->mostrarMateria($this->model->getMateria($_REQUEST['nro']));
        }
  			else echo "";
  		}

   function adminMaterias(){
     $this->view->mostrarAdminMaterias();
   }

   function agregarMateria(){
     if(isset($_POST['id_materia']) && ($_POST['id_materia'] != '')&&(isset($_POST['nombre']) && ($_POST['nombre'] != ''))){
       $this->modificarMateria();
     }
     else{
       if(isset($_POST['nombre'])){
         $nombre= $_POST['nombre'];
         $this->model->crearMateria($nombre);
         $this->mostrarMaterias();
       }
     }
   }

    function modificarMateria(){
      $id_materia = $_POST['id_materia'];
      $nombre=$_POST['nombre'];
      $this->model->toogleMateria($id_materia,$nombre);
      $this->mostrarMaterias();
    }



     function eliminarMateria(){
        $key = $_GET['id_materia'];
        $this->model->eliminarMateria($key);
        $materias = $this->model->getMaterias();
        $this->mostrarMaterias();
      }
}
