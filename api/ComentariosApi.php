<?php
require 'api.php';
include_once(dirname(__DIR__)."/model/comentarioModel.php");

// include_once '../dataBase/credencial.ini';

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
            $comentario = $this->model->getComentario($argumentos[0]);
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
        // if(isset($_POST['id_profesor']) && isset($_POST['email']) && isset($_POST['comentario']))
        //  $id_comentario = $this->model->crearComentario($id_profesor,$usuario,$comentario,$puntaje);
        //  return ($id_comentario > 0) ? $this->model->getComentario($id_comentario) : $error;
        // break;
          // if(count($argumentos)==0){
          //   if(isset($_POST['id_profesor']) && isset($_POST['comentario'])) {
          //
          //     $id_profesor = $_POST['id_profesor'];
          //       print_r($id_profesor);
          //     $usuario ="daniela@admin";
          //       print_r($usuario);
          //     $comentario = $_POST['comentario'];
          //     print_r($comentario);
          //
          //       if(isset($_POST['puntaje'])) {
          //         $puntaje = $_POST['puntaje'];
          //       }
          //       else $puntaje = 0;
          //       $error['Error'] = "El comentario no se creo";
          //       $id_comentario = $this->modelo->crearComentario($id_profesor,$usuario,$comentario,$puntaje);
          //       return ($id_comentario > 0) ? $this->model->getComentario($id_comentario) : $error;
          //   }
          // }
          if(count($argumentos)==0){
                if (isset($_POST["texto"]) && ($_POST["texto"] != "")) {
                        $error['Error'] = "El comentario no se creo";
                        $usuario=2;
                        $comentario=$_POST["texto"];
                        $id_comentario = $this->model->crearComentario($_POST["id_profesor"],$usuario,$comentario,$_POST["puntaje"]);
                  }
            }

            return ($id_comentario > 0) ? $this->model->getComentario($id_comentario) : $error;


          break;
      default:
           return "Only accepts GET";
        break;
    }
   }



}


 ?>
