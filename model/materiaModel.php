<?php
include_once 'model/model.php';

class MateriaModel extends Model{

  public function getMaterias(){
    $materias = array();
    $consulta = $this->db->prepare("SELECT * FROM materia");
    $consulta->execute();
    while($materia = $consulta->fetch()) {
      $materia['nombre'] = $materia['nombre'];
      $materias[]=$materia;
    }
  return $materias;
  }

  public function getMateria($id_materia){
    $sentencia = $this->db->prepare( "SELECT * from materia where id_materia=?");
    $sentencia->execute(array($id_materia));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  // public function getMateriaById($id_materia){
  //     $materia=document.getElementById('id_materia');
  //     return $materia;
  //   }


  public function crearMateria($nombre){
    try{
      $consulta = $this->db->prepare("INSERT INTO materia(nombre) VALUES(?)");
      $consulta->execute(array($nombre));
    }
    catch (PDOException $e){
      echo ("Ya existe la materia a agregar, elija otro nombre");
    }
  }

  public function eliminarMateria($id_materia){
    $sentencia = $this->db->prepare("DELETE from materia where id_materia=?");
    $sentencia->execute(array($id_materia));
  }

  public function actualizarMateria($id_materia,$nombre){//CONSULTAR!!!
    $materia = $this->getMateria($id_materia);
    $sentencia = $this->db->prepare("update materia set nombre= ? WHERE id_materia=?");
    $sentencia->execute(array($nombre,$id_materia));
    if($sentencia->rowCount() > 0){
      return 'Materia borrada con exito';
    }
    else{
      return 'No se pudo borrar la materia';
    }
  }

}

 ?>
