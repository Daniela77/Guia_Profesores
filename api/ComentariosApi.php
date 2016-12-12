<?php
require 'api.php';

include_once("../model/comentarioModel.php");

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
        // var_dump($argumentos);
          if(count($argumentos)>0){
            $comentario = $this->model->getComentario($argumentos[0]);
            // echo "hola.$comentario";
            $error['Error'] = "Ese contacto no existe";
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
                 if (isset($_POST["texto"]) && ($_POST["texto"] != "")) {

                   $profesor=$_POST["id_profesor"];
                    $usuario=2;
                    $comentario=$_POST["texto"];
                    $puntaje=$_POST["puntaje"];
                    $id_comentario = $this->model->crearComentario($profesor,$usuario,$comentario,$puntaje);
                    $error['Error'] = "El comentario no se creo";
                      // $success['Success'] = "El comentario se creo";
                      // return($id_comentario==1) ? $success : $error;
                     return ($id_comentario > 0) ? $this->model->getComentario($id_comentario) : $error;

                   }
            }
            else {
              echo "no hay argumentos";
            }
          break;
      default:
           return "Verbo no soportado";
        break;
    }
   }



}


 ?>
