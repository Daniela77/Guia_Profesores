// <?php
//   include_once 'controller/controller.php';
//   require_once 'view/profesorView.php';
//   include_once 'model/profesorModel.php';
//
//   class ProfesorController extends Controller{
//
//     function __construct() {
//       $this->model = new ProfesorModel();
//       $this->view = new ProfesorView();
//      }
//
//     function mostrarProfesores(){
//       $this->view->mostrarProfesores($this->model->getProfesores());
//     }
//
//     function eliminarProfesor(){
//         $key = $_GET['id_profesor'];
//         $this->model->eliminarProfesor($key);
//         $profesores = $this->model->getProfesores();
//         $this->mostrarProfesores();
//       }
//
//   function getImagenesVerificadas($imagenes){
//     $imagenesVerificadas = [];
//     for ($i=0; $i < count($imagenes['size']); $i++) {
//       if($imagenes['size'][$i]>0 && $imagenes['type'][$i]=="image/jpeg"){
//           $imagen_aux = [];
//           $imagen_aux['tmp_name']=$imagenes['tmp_name'][$i];
//           $imagen_aux['name']=$imagenes['name'][$i];
//           $imagenesVerificadas[]=$imagen_aux;
//       }
//     }
//
//     return $imagenesVerificadas;
//   }
//
//   function agregarProfesor(){//ver que ande!!!
//     // if(isset($_POST['nombreCompleto'])&&($_POST['nombreCompleto'] != '')&&
//     //   (isset($_POST['email']) && ($_POST['email'] != ''))&&
//     //   (isset($_POST['telefono']) && ($_POST['telefono'] != ''))&&
//     //   (isset($_POST['materia']) && ($_POST['materia'] != ''))&&
//     //   (isset($_POST['precio'])&&($_POST['precio'] != ''))&&
//     //   (isset($_POST['tipoDeClase'])&&($_POST['tipoDeClase'] != ''))){
//       $nombreCompleto= $_POST['nombreCompleto'];
//       $email= $_POST['email'];
//       $telefono= $_POST['telefono'];
//       $materia= $_POST['materia'];
//       $precio= $_POST['precio'];
//       $tipoDeClase= $_POST['tipoDeClase'];
//         if(isset($_FILES['imagenes'])){
//           $imagenesVerificadas = $this->getImagenesVerificadas($_FILES['imagenes']);
//           if(count($imagenesVerificadas)>0){
//
//             $this->model->crearProfesor($nombreCompleto, $email, $telefono, $materia, $precio, $tipoDeClase,$imagenesVerificadas);
//             $this->view->mostrarMensaje("La tarea se creo con imagen y todo!", "success");
//           }
//           else{
//             $this->view->mostrarMensaje("Error con las imagenes", "danger");
//           }
//         }
//         else{
//             $this->view->mostrarMensaje("La imagen es requerida","danger");
//         }
//       // }
//     $this->mostrarProfesores();
//     }
//
//     public function modificarMateria(){
//       $id_profesor = $_POST['id_profesor'];
//       $nombre=$_POST['nombre'];
//       $this->model->toogleMateria($id_materia,$nombre);
//       $this->mostrarMaterias();
//     }
//
//   }
?>
