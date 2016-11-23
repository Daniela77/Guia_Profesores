<?php
	include_once 'view/view.php';

	class GuiaView extends View{

		function mostrarDefault(){
    	// $this->smarty->assign('usuario',$usuario);
			$this->smarty->display('index.tpl');
		}

		function mostrarHome(){
			// $this->smarty->assign('usuario',$usuario);
			$this->smarty->display('inicio.tpl');
		}

		function mostrarContacto(){
			$this->smarty->display('contacto.tpl');
			// $this->smarty->assign('usuario',$usuario);
		}

		function mostrarAdministrador(){
			$this->smarty->display('admin.tpl');
			// $this->smarty->assign('usuario',$usuario);
		}

	}

?>
