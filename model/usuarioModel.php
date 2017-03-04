<?php
// include_once "model/model.php";
// include_once ("model/model.php");
include_once ('model.php');

class UsuarioModel extends Model {

  function getUsuario($email){
    $consulta = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
    $consulta->execute(array($email));
    return $consulta->fetch();
  }

  // function getUsuarios(){
  //   $consulta = $this->db->prepare('SELECT * FROM  usuario');
  //   $consulta->execute(array());
  //   return $consulta->fetchAll(PDO::FETCH_ASSOC);
  // }

  function crearUsuario($user,$password,$rol){
    $consulta = $this->db->prepare("INSERT INTO usuario(email,password,rol_usuario) VALUES(?,?,?)");
    $consulta->execute(array($user,$password,$rol));
    $id_usuario = $this->db->lastInsertId();

  return $id_usuario;
  }

//   function getAdministradores(){
//   $sentencia = $this->db->prepare("SELECT email FROM  usuario WHERE rol_usuario=Administrador");
//   $sentencia->execute(array());
//   return $sentencia->fetchAll(PDO::FETCH_ASSOC);
// }
//
//   function editarUsuario($email){
//     $usuario = $this->getUsuario($email);
//     $sentencia = $this->db->prepare("UPDATE usuario SET rol_usuario=? WHERE email=?");
//     $sentencia->execute(array(!$usuario["admin"],$email));
//   }

}
?>
