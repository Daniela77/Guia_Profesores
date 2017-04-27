<?php
include_once ('model.php');

class UsuarioModel extends Model {

  function getUsuario($email){
    $consulta = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
    $consulta->execute(array($email));
    return $consulta->fetch();
  }

  function getUsuarios(){
    $consulta = $this->db->prepare('SELECT * FROM  usuario');
    $consulta->execute(array());
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
  }

  function getUsuarioId($id_usuario){
    $consulta = $this->db->prepare("SELECT * FROM usuario where id_usuario=?");
    $consulta->execute(array($id_usuario));
    return $consulta->fetch(PDO::FETCH_ASSOC);
  }

  function crearUsuario($user,$password,$rol){
    $consulta = $this->db->prepare("INSERT INTO usuario(email,password,rol_usuario) VALUES(?,?,?)");
    $consulta->execute(array($user,$password,$rol));
    $id_usuario = $this->db->lastInsertId();

  return $id_usuario;
  }

  function actualizarUsuario($id_usuario){
    $usuario = $this->getUsuarioId($id_usuario);
    $consulta = $this->db->prepare("UPDATE usuario SET rol_usuario=? WHERE id_usuario=?");
    if ($usuario['rol_usuario']=="Administrador") {
      $consulta->execute(array(Usuario,$id_usuario));
    }
    else {
      $consulta->execute(array(Administrador,$id_usuario));
    }
  }

}
?>
