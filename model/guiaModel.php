<?php
class GuiaModel{
		private $db;

		function __construct(){
    		$this->db = new PDO('mysql:host=localhost;dbname=cartilla;charset=utf8', 'root', '');
    		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		
		function getProfesor($id_profesor){
			$consulta1 = $this->db->prepare('SELECT * FROM profesor');
			$consulta1->execute();
			$nombreCompleto = $consulta1->fetchAll();

			$consulta1 = $this->db->prepare('SELECT * FROM email');
			$consulta1->execute();
			$email = $consulta1->fetchAll();

			$consulta1 = $this->db->prepare('SELECT * FROM telefono');
			$consulta1->execute();
			$telefono = $consulta1->fetchAll();

      $consulta1 = $this->db->prepare('SELECT * FROM precio');
			$consulta1->execute();
			$precio = $consulta1->fetchAll();

      $consulta1 = $this->db->prepare('SELECT * FROM tipoDeClase');
      $consulta1->execute();
      $tipoDeClase = $consulta1->fetchAll();

			$consulta = $this->db->prepare('SELECT * FROM profesor WHERE id_materia=?');
			$consulta->execute(array($id_materia));
			$materia=$consulta->fetch();

			$consulta1 = $this->db->prepare('SELECT * FROM imagen WHERE fk_id_profesor=?');
			$consulta1->execute(array($propiedad['id_profesor']));
			$imagenes = $consulta1->fetchAll();

			$profesor['nombreCompleto'] = $nombreCompleto[$profesor['nombreCompleto']-1]['nombre'];
			$profesor['email'] = $email[$profesor['email']-1]['nombre'];
			$profesor['telefono'] = $telefono[$profesor['telefono']-1]['nombre'];
			$profesor['precio'] = $precio[$profesor['precio']-1]['nombre'];
			$profesor['tipoDeClase'] = $telefono[$profesor['tipoDeClase']-1]['nombre'];
			$profesor['materia'] = $materia[$profesor['materia']-1]['nombre'];
			$profesor['imagen'] = $imagenes;

			return 	$profesor;
		}

		function borrarProfesor($id_profesor){
			$consulta = $this->db->prepare('DELETE FROM profesor WHERE id=?');
			$consulta->execute(array($id_profesor));

			if($consulta->rowCount() > 0)
				return 'profesor Eliminado';
			else
				return 'No se Elimino';
		}

  private function subirArchivos($archivos){
    $destinos = array();
    foreach ($archivos['tmp_name'] as $key => $value) {
      $destino = 'uploaded/img/'.uniqid().$archivos['name'][$key];
      move_uploaded_file($archivos['tmp_name'][$key], $destino);
      $destinos[]=$destino;
    }
    return $destinos;
  }

		function agregarProfesor(){
				$carga = $this->db->prepare("INSERT INTO profesor(nombreCompleto,email,telefono,precio,tipoDeClase,materia) VALUES (?,?,?,?,?,?)");
	      $arreglo = array($_REQUEST['nombreCompleto'],$_REQUEST['email'],$_REQUEST['telefono'],$_REQUEST['precio'],$_REQUEST['tipoDeClase'],$_REQUEST['materia']);
	      $carga->execute($arreglo);

	      $id_profesor= $this->db->lastInsertId();

	      $archivos = $_FILES['imagesToUpload'];
	      $rutas = $this->subirArchivos($archivos);

	      foreach($rutas as $ruta){
		      $imagenes = $this->db->prepare('INSERT INTO imagen(fk_id_profesor,ruta) VALUES(?,?)');
		      $imagenes->execute(array($id_profesor, $ruta));
	    	}

		}

	}
?>
