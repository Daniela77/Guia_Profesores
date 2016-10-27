<?php
  include_once 'controller/controller.php';
  require_once 'view/profesorView.php';
  include_once 'model/profesorModel.php';
  include_once 'model/materiaModel.php';

  class ProfesorController extends Controller{

    function __construct() {
      $this->model = new ProfesorModel();
      $this->view = new ProfesorView();
      $this->modelMaterias = new MateriaModel();
     }

     function adminProfesores(){
       $this->view->mostrarAdminProfesores($this->modelMaterias->getMaterias(),$this->model->getProfesores());
     }

     function mostrarProfesor(){
         // $profesor=$this->modelp->getProfesor($id_profesor);
   			if(isset($_REQUEST['id_profesor'])) $this->model->getProfesorById($profesor['id_profesor']);
   			else echo "";
   		}
       // $this->view->mostrarProfesor($this->model->getProfesor($id_profesor));
     // }

     function buscarProfesoresMat(){
       $id_materia = $_POST["id_materia"];
       //llega
       $profesores = $this->model->buscarProfesoresMat($id_materia);
       $materias = $this->modelMaterias->getMaterias();
       // if (count($profesores)>0) {
       //   $mensaje = "Su busqueda fue exitosa!";
       // }else {
       //   $mensaje = "No hay profesores para esa materia";
       // }

       $this->view->mostrarProfesoresMat($profesores,$mensaje,$materias);
     }
//terminar!!!
    function mostrarProfesores(){
      $profesores=$this->model->getProfesores();
      $materias=$this->modelMaterias->getMaterias();
      // foreach  ($profesores as $profesor){
      //   $profesor['materia'] = $this->modelMaterias->getMateriaById($profesor['id_materia']);
      // }
      $this->view->mostrarProfesores($profesores,$materias);
    }

    // function mostrarProfesor(){
    //   $this->view->mostrarProfesor($this->model->getProfesor());
    // }

    function agregarProfesor(){//ver que ande!!!
      if(isset($_POST['nombreCompleto'])&&($_POST['nombreCompleto'] != '')&&
        (isset($_POST['email']) && ($_POST['email'] != ''))&&
        (isset($_POST['telefono']) && ($_POST['telefono'] != ''))&&
        (isset($_POST['materia']) && ($_POST['materia'] != ''))&&
        (isset($_POST['precio'])&&($_POST['precio'] != ''))&&
        (isset($_POST['tipoDeClase'])&&($_POST['tipoDeClase'] != ''))){
        $nombreCompleto= $_POST['nombreCompleto'];
        $email= $_POST['email'];
        $telefono= $_POST['telefono'];
        $materia= $_POST['materia'];
        $precio= $_POST['precio'];
        $tipoDeClase= $_POST['tipoDeClase'];
          if(isset($_FILES['imagenes'])){
            $imagenesVerificadas = $this->getImagenesVerificadas($_FILES['imagenes']);
            if(count($imagenesVerificadas)>0){

              $this->model->crearProfesor($nombreCompleto, $email, $telefono, $materia, $precio, $tipoDeClase,$imagenesVerificadas);
              $this->view->mostrarMensaje("La tarea se creo con imagen y todo!", "success");
            }
            else{
              $this->view->mostrarMensaje("Error con las imagenes", "danger");
            }
          }
          else{
              $this->view->mostrarMensaje("La imagen es requerida","danger");
          }
         }
      $this->mostrarProfesores();
      }

    function eliminarProfesor(){
        $key = $_GET['id_profesor'];
        $this->model->eliminarProfesor($key);
        $profesores = $this->model->getProfesores();
        $this->mostrarProfesores();
      }

    function getImagenesVerificadas($imagenes){
      $imagenesVerificadas = [];
      for ($i=0; $i < count($imagenes['size']); $i++) {
        if($imagenes['size'][$i]>0 && $imagenes['type'][$i]=="image/jpeg"){
            $imagen_aux = [];
            $imagen_aux['tmp_name']=$imagenes['tmp_name'][$i];
            $imagen_aux['name']=$imagenes['name'][$i];
            $imagenesVerificadas[]=$imagen_aux;
        }
      }
      return $imagenesVerificadas;
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

    function editarProfesor(){
       if(isset($_POST['id_profesor']) && ($_POST['id_profesor'] != '')&&
         (isset($_POST['nombreCompleto'])&&($_POST['nombreCompleto'] != '')&&
         (isset($_POST['email']) && ($_POST['email'] != ''))&&
         (isset($_POST['telefono']) && ($_POST['telefono'] != ''))&&
         (isset($_POST['materia']) && ($_POST['materia'] != ''))&&
         (isset($_POST['precio'])&&($_POST['precio'] != ''))&&
         (isset($_POST['tipoDeClase'])&&($_POST['tipoDeClase'] != '')))){
         $this->modificarProfesor();
       }
     }

   function modificarProfesor(){
       $id_profesor = $_POST['id_profesor'];
       $nombreCompleto= $_POST['nombreCompleto'];
       $email= $_POST['email'];
       $telefono= $_POST['telefono'];
       $materia= $_POST['materia'];
       $precio= $_POST['precio'];
       $tipoDeClase= $_POST['tipoDeClase'];
       //FALTA IMAGENES
       $this->model->actualizarProfesor($id_profesor,$nombreCompleto,$email,$telefono,$materia,$precio,$tipoDeClase);
       $this->mostrarProfesores();
     }
  }
?>
