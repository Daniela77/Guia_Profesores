<?php
	// include_once 'view/view.php';
	include_once(dirname(__DIR__).'/view/view.php');

	class GuiaView extends View{

		function mostrarDefault($usuario){
    	$this->smarty->assign('usuario',$usuario);
			$this->smarty->display('index.tpl');
		}

		function mostrarHome($usuario){
			$this->smarty->assign('usuario',$usuario);
			$this->smarty->display('inicio.tpl');
		}

		function mostrarContacto($usuario){
			$this->smarty->display('contacto.tpl');
		  $this->smarty->assign('usuario',$usuario);
		}

		function mostrarAdministrador($usuario){
			$this->smarty->assign('usuario',$usuario);
			$this->smarty->assign('admin',$usuario['rol_usuario']);
			$this->smarty->display('admin.tpl');
		}

	}

?>
