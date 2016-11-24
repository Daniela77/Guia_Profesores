<?php
require_once "model.php";

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

function getComentarioProfesor($id_profesor){
  $comentario = $this->db->prepare("SELECT * FROM comentario where fk_id_profesor = ?" );
  $comentario->execute(array($id_profesor));
  return $comentario->fetch(PDO::FETCH_ASSOC);
}

function eliminarComentario($id_comentario){
  $sentencia = $this->db->prepare("delete from comentario where id_comentario=?");
  $sentencia->execute(array($id_comentario));
  return $sentencia->rowCount();
}
function crearComentario($id_profesor, $id_usuario,$comentario,$puntaje){
  $sentencia = $this->db->prepare("INSERT INTO comentario(fk_id_profesor,fk_id_usuario,comentario,puntaje) values(?,?,?,?)");
  $sentencia->execute(array($id_profesor, $id_usuario,$comentario,$puntaje));
    return $this->db->lastInsertId();
}

}
?>
