<?php
	include_once 'controller/controller.php';
	include_once 'controller/loginController.php';
	require_once 'view/guiaView.php';
	// define ("usuario",0);

	class GuiaController extends loginController{
		// private $usuario;
		function __construct(){
			parent::__construct();
			$this->view = new GuiaView();
	// 		$this->usuario['rol_usuario']=usuario;
	// 		if($loginController->checkLogin()){
	// 			$this->usuario=$loginController->getUsuario();
	// }
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
			if($this->checkLogin()||$this->login())
				$this->view->mostrarAdministrador();
		}

	}

?>
