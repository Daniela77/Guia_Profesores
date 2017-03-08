<?php
include_once 'controller/controller.php';
require_once 'view/materiaView.php';
include_once 'model/profesorModel.php';
include_once 'model/materiaModel.php';
include_once 'controller/loginController.php';

class MateriaController extends Controller{
  private $loginController;

  function __construct() {
     $this->model = new MateriaModel();
     $this->modelProfesor = new ProfesorModel();
     $this->view = new MateriaView();
     $this->loginController= new LoginController();
   }

   function mostrarMaterias(){
     $usuarioLogueado=$this->loginController->usuarioLogueado();
     $this->view->mostrarMaterias($this->model->getMaterias(),$usuarioLogueado);
   }

   function mostrarMateria(){
      $id_materia=$_GET['nro'];
      $materia=$this->model->getMateria($id_materia);
      $profesores=$this->modelProfesor->buscarProfesoresMat($id_materia);
      $this->view->mostrarMateria($materia,$profesores);
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
      $this->model->actualizarMateria($id_materia,$nombre);
      $this->mostrarMaterias();
    }

     function eliminarMateria(){
        $key = $_GET['id_materia'];
        $this->model->eliminarMateria($key);
        $materias = $this->model->getMaterias();
        $this->mostrarMaterias();
      }
}
