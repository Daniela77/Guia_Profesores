<?php
	include_once 'controller/controller.php';
	require_once 'view/guiaView.php';

	class GuiaController extends Controller{

		function __construct(){
			$this->view = new GuiaView();
		}

		function mostrarDefault(){
			$this->view->mostrarDefault();
		}

		function mostrarHome(){
			$this->view->mostrarHome();
		}

		function mostrarContacto(){
			$this->view->mostrarContacto();
		}

		function mostrarAdministrador(){
			$this->view->mostrarAdministrador();
		}

	}

?>
