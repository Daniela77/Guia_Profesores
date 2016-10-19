<?php
	include_once 'view/view.php';

	class GuiaView extends View{

		function mostrarDefault(){
			$this->smarty->display('index.tpl');
		}

		function mostrarHome(){
			$this->smarty->display('inicio.tpl');
		}

		function mostrarContacto(){
			$this->smarty->display('contacto.tpl');
		}

		function mostrarAdministrador(){
			$this->smarty->display('admin.tpl');
		}

	}

?>
