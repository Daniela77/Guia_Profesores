<?php
	include_once 'controller/controller.php';
	include_once 'controller/loginController.php';
	require_once 'view/guiaView.php';

	class GuiaController extends loginController{

		function __construct(){
			parent::__construct();
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
			if($this->login())
				$this->view->mostrarAdministrador();
		}

	}

?>
