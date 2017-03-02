<?php

include_once ("../model/model.php");

class ComentarioModel extends Model{


function getComentarios(){
  $comentarios = $this->db->prepare("SELECT * FROM comentario" );
  $comentarios->execute();
  return $comentarios->fetchAll(PDO::FETCH_ASSOC);
}


function getComentario($id_comentario){
  $comentario = $this->db->prepare("SELECT * FROM comentario where id_comentario = ?" );
  $comentario->execute(array($id_comentario));
  return $comentario->fetch(PDO::FETCH_ASSOC);
}

function getComentariosProfesor($id_profesor){
  $comentarios = $this->db->prepare("SELECT * FROM comentario where fk_id_profesor = ?" );
  $comentarios->execute(array($id_profesor));
  return $comentarios->fetchAll(PDO::FETCH_ASSOC);
}

// public function getComentariosProfesor($id_profesor,$lvlAuth)
//   {
//     $comentarios=$this->db->prepare("SELECT
//                                       id_comentario,
//                                       fk_id_profesor,
//                                       fk_id_usuario,
//                                       comentario,
//                                       puntaje,
//                                       usuario.email AS usuario
//                                       FROM comentario, usuario
//                                       WHERE comentario.fk_id_usuario = usuario.id_usuario AND fk_id_profesor=?");
//     $comentarios->execute(array($id_profesor));
//     $arrComentarios= $comentarios->fetchAll(PDO::FETCH_ASSOC);
//     var_dump($arrComentarios);
//     var_dump($lvlAuth);
//     foreach ($arrComentarios as $key=>$comentario){
//       if($lvlAuth==ADMIN){
//         $arrComentarios[$key]['rol_usuario'] = true;
//       }
//       else{
//         $arrComentarios[$key]['rol_usuario'] = false;
//       }
//     }
//     return $arrComentarios;
//   }

function eliminarComentario($id_comentario){
  $sentencia = $this->db->prepare("DELETE from comentario where id_comentario=?");
  $sentencia->execute(array($id_comentario));
  return $sentencia->rowCount();
}

function crearComentario($id_profesor,$id_usuario,$comentario,$puntaje){
  $sentencia = $this->db->prepare("INSERT INTO comentario(fk_id_profesor,fk_id_usuario,comentario,puntaje) values(?,?,?,?)");
  $sentencia->execute(array($id_profesor,$id_usuario,$comentario,$puntaje));
  $id_comentario = $this->db->lastInsertId();
  return $id_comentario;
}

// function editarComentario($id_comentario,$comentario){
//      $sentencia = $this->db->prepare("UPDATE comentario set comentario  =? where id_comentario=?");
//      $sentencia->execute(array($comentario,$id_comentario));
//      return $sentencia->rowCount();
// }

}
?>
