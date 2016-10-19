<?php
    include_once "model/model.php";

    class ProfesorModel extends Model{

     function getProfesor($id_profesor){
        $sentencia = $this->db->prepare( "SELECT * from profesor where id_profesor=?");
        $sentencia->execute(array($id_profesor));
        return $sentencia->fetch(PDO::FETCH_ASSOC);
      }

      function getProfesores(){
          $profesores = array();
          $consulta = $this->db->prepare("SELECT * FROM profesor");
          $consulta->execute();
          //Todos los profesores
          while($profesor = $consulta->fetch()) {
              $profesor['nombreCompleto'] = $profesor['nombreCompleto'];
              $profesor['email'] = $profesor['email'];
              $profesor['telefono'] = $profesor['telefono'];
              $profesor['precio'] =$profesor['precio'];
              $profesor['tipoDeClase'] = $profesor['tipoDeClase'];
              $profesor['materia'] = $profesor['id_materia'];
              $profesores[]=$profesor;

              foreach ($profesores as $key => $profesor) {
                $profesores[$key]['imagenes']=$this->getImagenes($profesor['id_profesor']);
              }
          }
          return $profesores;
        }


        function getImagenes($id_profesor){
            $sentencia = $this->db->prepare( "select * from imagen where fk_id_profesor=?");
            $sentencia->execute(array($id_profesor));
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }

        public function crearProfesor($nombreCompleto, $email, $telefono, $id_materia, $precio, $tipoDeClase,$imagenes){
            try{
              $consulta = $this->db->prepare("INSERT INTO profesor(nombreCompleto,email,telefono,id_materia,precio,tipoDeClase) VALUES(?,?,?,?,?,?)");
              $consulta->execute(array($nombreCompleto, $email, $telefono, $id_materia, $precio, $tipoDeClase));
              $id_profesor = $this->db->lastInsertId();

              foreach ($imagenes as $key => $imagen) {
                $ruta="images/".uniqid()."_".$imagen["name"];
                move_uploaded_file($imagen["tmp_name"], $ruta);
                $insertImagen = $this->db->prepare("INSERT INTO imagen(ruta,fk_id_profesor) VALUES(?,?)");
                $insertImagen->execute(array($ruta,$id_profesor));
              }
              return $id_profesor;
            }
            catch (PDOException $e){
              echo ("Ya existe el profes a agregar, elija otro nombre");
            }
        }

        function eliminarProfesor($id_profesor){
            $sentencia = $this->db->prepare("DELETE from profesor where id_profesor=?");
            $sentencia->execute(array($id_profesor));
        }
          //ver como modificar las imagenes
        // public function toogleProfesor($id_profesor,$nombreCompleto,$email, $telefono,$id_materia, $precio, $tipoDeClase,$imagenes){//CONSULTAR!!!
        //
        //   $profesor = $this->getProfesor($id_profesor);
        //   $sentencia = $this->db->prepare("update profesor set nombreCompleto= ? email= ? telefono= ? id_materia= ? precio= ? tipoDeClase= ? WHERE id_profesor=?");
        //   $sentencia->execute(array($nombreCompleto, $email, $telefono, $id_materia, $precio, $tipoDeClase,$id_profesor));
        //   if($sentencia->rowCount() > 0){
        //     return 'Profesor actualizado con exito';
        //   }
        //   else{
        //     return 'No se pudo actualizar el profesor';
        //   }
        // }
    }
?>