<?php
require 'api.php';
include_once(dirname(__DIR__)."/model/comentarioModel.php");

class ComentariosApi extends Api
{
  private $model;


  public function __construct($request)
 {
    parent::__construct($request);
    $this->model = new ComentarioModel();
  }

  protected function comentario($argumentos){
    switch ($this->method) {
      case 'GET':
          if(count($argumentos)>0){
            $comentario = $this->model->getComentariosProfesor($argumentos[0]);
            $error['Error'] = "Ese contacto no existe";
            return ($comentario) ? $comentario : $error;
          }else{
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
                if (isset($_POST["texto"]) && ($_POST["texto"] != "")) {
                    $error['Error'] = "El comentario no se creo";
                    $usuario=2;
                    $comentario=$_POST["texto"];
                    $id_comentario = $this->model->crearComentario($_POST["id_profesor"],$usuario,$comentario,$_POST["puntaje"]);
                    return ($id_comentario > 0) ? $this->model->getComentario($id_comentario) : $error;
                  }
            }
          break;
      default:
           return "Only accepts GET";
        break;
    }
   }



}


 ?>
