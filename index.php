<?php
include_once 'db/config.php';
	include_once 'config/configApp.php';
	include_once 'controller/guiaController.php';
	include_once 'controller/controller.php';
	include_once 'controller/profesorController.php';
	include_once 'controller/materiaController.php';
	include_once 'controller/loginController.php';


	$loginController = new LoginController();
	if(!array_key_exists(ConfigApp::$PAGE, $_REQUEST) ||
		$_REQUEST[ConfigApp::$PAGE] == ConfigApp::$PAGE_DEFAULT){

		$guiaController = new GuiaController();
		$guiaController->mostrarDefault();
	}
	else{
		switch ($_REQUEST[ConfigApp::$PAGE]){
		case ConfigApp::$PAGE_HOME:
			$guiaController = new GuiaController;
			$guiaController->mostrarHome();
			break;
		case ConfigApp::$PAGE_CONTACTO:
			$guiaController = new GuiaController;
			$guiaController->mostrarContacto();
			break;
		case ConfigApp::$PAGE_PROFESORES:
			$profesorController = new ProfesorController();
			$profesorController->mostrarProfesores();
			break;
		case ConfigApp::$PAGE_PROFESOR:
			$profesorController = new ProfesorController;
			$profesorController->mostrarProfesor();
			break;
		case ConfigApp::$PAGE_MATERIAS:
		  $materiaController = new MateriaController;
			$materiaController->mostrarMaterias();
			break;
		case ConfigApp::$PAGE_MATERIA:
		  	$materiaController = new MateriaController;
			$materiaController->mostrarMateria();
			break;
		case ConfigApp::$PAGE_ADMIN:
			$guiaController = new GuiaController;
			$guiaController->mostrarAdministrador($loginController);
			break;
		case ConfigApp::$PAGE_ADMIN_PROFESORES:
			$profesorController = new ProfesorController;
			$profesorController->adminProfesores();
			break;
		case ConfigApp::$PAGE_ADMIN_MATERIAS:
			$materiaController = new MateriaController;
			$materiaController->adminMaterias();
			break;
			//ver para optimizar las listas
		case ConfigApp::$PAGE_ADMIN_LISTA_PROFESORES:
			$profesorController = new ProfesorController;
			$profesorController->mostrarProfesores();
			break;
		case ConfigApp::$PAGE_ADMIN_AGREGAR_PROFESOR:
			$profesorController = new ProfesorController;
			$profesorController->agregarProfesor();
			break;
		case ConfigApp::$PAGE_ADMIN_ELIMINAR_PROFESOR:
			$profesorController = new ProfesorController;
			$profesorController->eliminarProfesor();
			break;
		case ConfigApp::$PAGE_ADMIN_MODIFICAR_PROFESOR:
			$profesorController = new ProfesorController;
			$profesorController->editarProfesor();
			break;
		case ConfigApp::$PAGE_ADMIN_BUSCAR_PROFESORES:
			$profesorController = new ProfesorController;
			$profesorController->buscarProfesoresMat();
			break;
		case ConfigApp::$PAGE_ADMIN_LISTA_MATERIAS:
			$materiaController = new MateriaController;
			$materiaController->mostrarMaterias();
			break;
		case ConfigApp::$PAGE_ADMIN_AGREGAR_MATERIA:
			$materiaController = new MateriaController;
			$materiaController->agregarMateria();
			break;
		case ConfigApp::$PAGE_ADMIN_ELIMINAR_MATERIA:
			$materiaController = new MateriaController;
			$materiaController->eliminarMateria();
			break;
		case ConfigApp::$PAGE_ADMIN_MODIFICAR_MATERIA:
			$materiaController = new MateriaController;
			$materiaController->modificarMateria();
			break;
		case ConfigApp::$PAGE_LOGIN:
			$loginController = new LoginController;
			$loginController->login();
			break;
		case ConfigApp::$PAGE_LOGOUT:
			$loginController = new LoginController;
			$loginController->logout();
			break;
		case ConfigApp::$PAGE_REGISTRAR:
			$loginController = new LoginController;
			$loginController->registrar();
			break;
		case ConfigApp::$PAGE_MOSTRAR_REGISTRAR:
			$loginController = new LoginController;
			$loginController->mostrarRegistrar();
			break;
		case ConfigApp::$PAGE_ELIMINAR_IMAGEN:
			// $adminController = new AdminController($usuariosController);
			$profesorController = new ProfesorController;
			$profesorController->eliminarImagen();
			break;
		default:
			$guiaController = new GuiaController();
			$guiaController->mostrarDefault();
			break;
			echo 'Pagina no encontrada';

		}
	}
?>
