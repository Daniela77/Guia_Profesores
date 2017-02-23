<?php
	// include_once 'controller/controller.php';
	// include_once 'controller/loginController.php';
	// require_once 'view/guiaView.php';
	// define ("usuario",0);
	include_once(dirname(__DIR__).'/controller/controller.php');
  require_once(dirname(__DIR__).'/controller/loginController.php');
  include_once(dirname(__DIR__).'/view/guiaView.php');


	class GuiaController extends Controller {
		private $usuario;
		private $loginController;
		function __construct(){
			// parent::__construct();
			$this->view = new GuiaView();
			$this->loginController = new LoginController();
	// 		$this->usuario['rol_usuario']=usuario;
	// 		if($loginController->checkLogin()){
			$this->usuario=$this->loginController->usuarioLogueado();
	// }
		}

		function mostrarDefault(){
			$this->view->mostrarDefault($usuario);
		}

		function mostrarHome(){
			$this->view->mostrarHome($usuario);
		}

		function mostrarContacto(){
			$this->view->mostrarContacto($usuario);
		}

		function mostrarAdministrador(){
			if($this->loginController->checkLogin()||$this->loginController->login())
				$this->view->mostrarAdministrador($this->usuario);
		}

	}

?>
