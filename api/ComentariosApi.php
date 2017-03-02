<?php
require 'api.php';

include_once("../model/comentarioModel.php");
include_once("../model/usuarioModel.php");
include_once ("../controller/loginController.php");

define('ADMIN', 'admin');
define('USER', 'user');
define('ERROR', 'Usuario no autorizado para realizar esta accion');


class ComentariosApi extends Api{
  private $model;
  private $Autenticacion;
  private $loginController;

  public function __construct($request){
    parent::__construct($request);
    $this->model = new ComentarioModel();
    $this->loginController = new LoginController();
    $this->Autenticacion=[ADMIN,USER];
  }

  protected function comentario($argumentos){

    switch ($this->method) {
      case 'GET':
          if(count($argumentos)>0){

            $comentario = $this->model->getComentariosProfesor($argumentos[0],$this->loginController->getRol());
            // $comentario = $this->model->getComentariosProfesor($argumentos[0]);
            $error['Error'] = "Ese profesor no tiene comentarios";
            return ($comentario) ? $comentario : $error;
         }
            else{
            return $this->model->getComentarios();
          }
        break;

      case 'DELETE':
          if($this->loginController->getRol()==ADMIN && count($argumentos)>0){
            $error['Error'] = "El comentario no existe";
            $success['Success'] = "El comentario se borro exitosamente";
            $filasAfectadas = $this->model->eliminarComentario($argumentos[0]);
            return ($filasAfectadas == 1) ? $success : $error;
          }
        break;

        case 'POST':
          // var_dump($this->loginController->checkLogin());
          //    var_dump($this->Autenticacion);
          if(in_array($this->loginController->checkLogin(),$this->Autenticacion) && count($argumentos)==0){
          // if(count($argumentos)==0){
                 if (isset($_POST["texto"]) && (!empty($_POST["texto"]))
                 && isset($_POST["id_profesor"]) && (!empty($_POST["id_profesor"]))
                 && isset($_POST["id_usuario"]) && (!empty($_POST["id_usuario"]))
                 && isset($_POST["puntaje"]) && (!empty($_POST["puntaje"]))) {

                    $profesor=$_POST["id_profesor"];
                    $usuario=$_POST["id_usuario"];
                    $comentario=$_POST["texto"];
                    $puntaje=$_POST["puntaje"];
                    $id_comentario = $this->model->crearComentario($profesor,$usuario,$comentario,$puntaje);
                    $error['Error'] = "El comentario no se creo";
                      // $success['Success'] = "El comentario se creo";
                      // return($id_comentario==1) ? $success : $error;
                     return ($id_comentario > 0) ? $this->model->getComentario($id_comentario) : $error;

                   }
            }
              return ERROR;
          // }
          break;

      default:
           return "Verbo no soportado";
        break;
    }
   }



}


 ?>
