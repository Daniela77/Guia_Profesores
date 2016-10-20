<?php

	include_once 'config/configApp.php';
	include_once 'controller/guiaController.php';
	include_once 'controller/controller.php';
	include_once 'controller/profesorController.php';
	include_once 'controller/materiaController.php';
	include_once 'controller/abmController.php';

	if(!array_key_exists(ConfigApp::$PAGE, $_REQUEST) || $_REQUEST[ConfigApp::$PAGE] == ConfigApp::$PAGE_DEFAULT){
		$guiaController = new GuiaController();
		$guiaController->mostrarDefault();
	}
	else
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
			$profesorController = new ProfesorController;
			$profesorController->mostrarProfesores();
			break;
		case ConfigApp::$PAGE_PROFESOR:
			$abmController = new AbmController;
			$abmController->mostrarProfesor();
			break;
		case ConfigApp::$PAGE_MATERIAS:
		  $materiaController = new MateriaController;
			$materiaController->mostrarMaterias();
			break;
		case ConfigApp::$PAGE_MATERIA:
		  $materiaController = new MateriaController;
			$materiaController->mostrarMateria();
			break;
		case ConfigApp:: $PAGE_ADMIN:
			$guiaController = new GuiaController;
			$guiaController->mostrarAdministrador();
			break;
		case ConfigApp::$PAGE_ADMIN_PROFESORES:
		  $abmController = new AbmController;
			$abmController->adminProfesores();
			break;
		case ConfigApp::$PAGE_ADMIN_MATERIAS:
			$materiaController = new MateriaController;
			$materiaController->adminMaterias();
			break;
		case ConfigApp::$PAGE_ADMIN_LISTA_PROFESORES:
			$profesorController = new ProfesorController;
			$profesorController->mostrarProfesores();
			break;
		case ConfigApp::$PAGE_ADMIN_AGREGAR_PROFESOR:
			$ProfesorController = new ProfesorController;
			$ProfesorController->agregarProfesor();
			break;
		case ConfigApp::$PAGE_ADMIN_ELIMINAR_PROFESOR:
			$ProfesorController = new ProfesorController;
			$ProfesorController->eliminarProfesor();
			break;
		case ConfigApp::$PAGE_ADMIN_MODIFICAR_PROFESOR:
			$ProfesorController = new ProfesorController;
			$ProfesorController->editarProfesor();
			break;
		case ConfigApp::$PAGE_ADMIN_BUSCAR_PROFESORES:
			$abmController = new AbmController;
			$abmController->buscarProfesoresMat();
			break;
		case ConfigApp::$PAGE_ADMIN_LISTA_MATERIAS:
			$materiaController = new MateriaController;
			$materiaController->mostrarMaterias();
			break;
		case ConfigApp::$PAGE_ADMIN_AGREGAR_MATERIA:
			$materiaController = new materiaController;
			$materiaController->agregarMateria();
			break;
		case ConfigApp::$PAGE_ADMIN_ELIMINAR_MATERIA:
			$materiaController = new materiaController;
			$materiaController->eliminarMateria();
			break;
		case ConfigApp::$PAGE_ADMIN_MODIFICAR_MATERIA:
			$materiaController = new materiaController;
			$materiaController->modificarMateria();
			break;
		default:
			echo 'Pagina no encontrada';
			break;
		}

?>
