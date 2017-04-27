<?php
    include_once "model/model.php";

    class ProfesorModel extends Model{

     function getProfesor($id_profesor){
        $consulta = $this->db->prepare( "SELECT * from profesor where id_profesor=?");
        $consulta->execute(array($id_profesor));
        return $consulta->fetch(PDO::FETCH_ASSOC);
      }

      function getProfesores(){
        $profesores = array();
        $consulta = $this->db->prepare("SELECT * FROM profesor");
        $consulta->execute();
        //Todos los profesores
        while($profesor = $consulta->fetch()) {
            $profesor['materia'] = $profesor['id_materia'];
            $profesores[]=$profesor;
            foreach ($profesores as $key => $profesor) {
              $profesores[$key]['imagenes']=$this->getImagenes($profesor['id_profesor']);
            }
          }
          return $profesores;
        }


      function getImagenes($id_profesor){
        $consulta = $this->db->prepare( "select * from imagen where fk_id_profesor=?");
        $consulta->execute(array($id_profesor));
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
      }

      function eliminarImagen ($imgruta) {
        $consulta = $this->db->prepare("delete from imagen where ruta=?");
        $consulta->execute(array($imgruta));
      }

      function crearProfesor($nombreCompleto, $email, $telefono, $id_materia, $precio, $tipoDeClase,$imagenes){
        try{
          $consulta = $this->db->prepare("INSERT INTO profesor(nombreCompleto,email,telefono,id_materia,precio,tipoDeClase) VALUES(?,?,?,?,?,?)");
          $consulta->execute(array($nombreCompleto, $email, $telefono, $id_materia, $precio, $tipoDeClase));
          $id_profesor = $this->db->lastInsertId();

          foreach ($imagenes as $key => $imagen) {
            $ruta="images/".uniqid()."_".$imagen["name"];
            move_uploaded_file($imagen["tmp_name"], $ruta);
            $insertarImagen = $this->db->prepare("INSERT INTO imagen(ruta,fk_id_profesor) VALUES(?,?)");
            $insertarImagen->execute(array($ruta,$id_profesor));
          }
          return $id_profesor;
        }
        catch (PDOException $e){
          echo ("Ya existe el profesor a agregar, elija otro nombre");
        }
      }

      function eliminarProfesor($id_profesor){
        $consulta = $this->db->prepare("DELETE from profesor where id_profesor=?");
        $consulta->execute(array($id_profesor));
      }

      function actualizarProfesor($id_profesor,$nombreCompleto,$email, $telefono,$materia, $precio, $tipoDeClase,$imagenes){//CONSULTAR!!!
        $profesor = $this->getProfesor($id_profesor);
        $consulta = $this->db->prepare("UPDATE profesor set nombreCompleto= ?, email= ?, telefono= ?, id_materia= ?, precio= ?, tipoDeClase= ? WHERE id_profesor=?");
        $consulta->execute(array($nombreCompleto, $email, $telefono, $materia, $precio, $tipoDeClase,$id_profesor));
        foreach ($imagenes as $key => $imagen) {
          $ruta="images/".uniqid()."_".$imagen["name"];
          move_uploaded_file($imagen["tmp_name"], $ruta);
          if($imagenes==" "){
             $actualizarImagen = $this->db->prepare("INSERT INTO imagen(ruta,fk_id_profesor) VALUES(?,?)");
             $actualizarImagen->execute(array($ruta,$id_profesor));
          }else{
            $actualizarImagen = $this->db->prepare("UPDATE imagen set ruta=? where fk_id_profesor=?");
            $actualizarImagen->execute(array($ruta,$id_profesor));
          }

        }
        if($consulta->rowCount() > 0){
          return 'Profesor actualizado con exito';
        }
        else{
          return 'No se pudo actualizar el profesor';
        }
      }

      function buscarProfesoresMat($id_materia){
        $consulta = $this->db->prepare("SELECT * from profesor where id_materia=?");
        $consulta->execute(array($id_materia));
        $profesoresPorMateria = $consulta->fetchAll(PDO::FETCH_ASSOC);
        foreach ($profesoresPorMateria as $key => $profesor) {
            $profesoresPorMateria[$key]['imagenes']=$this->getImagenes($profesor['id_profesor']);
        }
        return($profesoresPorMateria);
      }

    }
?>
