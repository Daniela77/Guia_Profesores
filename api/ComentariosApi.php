<?php
require 'api.php';

include_once("../model/comentarioModel.php");

class ComentariosApi extends Api{
  private $model;

  public function __construct($request){
    parent::__construct($request);
    $this->model = new ComentarioModel();
  }

  protected function comentario($argumentos){

    switch ($this->method) {
      case 'GET':
          if(count($argumentos)>0){
            $comentario = $this->model->getComentariosProfesor($argumentos[0]);
            $error['Error'] = "Ese profesor no tiene comentarios";
            return ($comentario) ? $comentario : $error;
         }
            else{
            return $this->model->getComentarios();
          }
        break;

      case 'DELETE':
          if(count($argumentos)>0){
            $error['Error'] = "El comentario no existe";
            $success['Success'] = "El comentario se borro exitosamente";
            $filasAfectadas = $this->model->eliminarComentario($argumentos[0]);
            return ($filasAfectadas == 1) ? $success : $error;
          }
        break;
        case 'POST':
          if(count($argumentos)==0){
                 if (isset($_POST["texto"]) && (!empty($_POST["texto"]))) {//falta verificar que todos los campos no esten vacios

                   $profesor=$_POST["id_profesor"];
                    $usuario=2;//cambiar por $_POST["email"];
                    $comentario=$_POST["texto"];
                    $puntaje=$_POST["puntaje"];
                    $id_comentario = $this->model->crearComentario($profesor,$usuario,$comentario,$puntaje);
                    $error['Error'] = "El comentario no se creo";
                      // $success['Success'] = "El comentario se creo";
                      // return($id_comentario==1) ? $success : $error;
                     return ($id_comentario > 0) ? $this->model->getComentario($id_comentario) : $error;

                   }
            }
          break;
      default:
           return "Verbo no soportado";
        break;
    }
   }



}


 ?>
