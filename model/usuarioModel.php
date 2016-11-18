<?php
include_once "model/model.php";

class UsuarioModel extends Model {

  function getUsuario($email){
    $consulta = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
    $consulta->execute(array($email));
    return $consulta->fetch();
  }

  function crearUsuario($user,$password,$rol){
    $consulta = $this->db->prepare("INSERT INTO usuario(email,password,rol_usuario) VALUES(?,?,?)");
    $consulta->execute(array($user,$password,$rol));
    $id_usuario = $this->db->lastInsertId();

  return $id_usuario;
  }
}
?>
