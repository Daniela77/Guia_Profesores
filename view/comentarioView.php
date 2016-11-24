<?php
	include_once 'view/view.php';

	class ComentarioView extends View{

		function mostrarComentarios(){
			$this->$smarty->display('comentarios.tpl');
			// $this->$smarty->assign('error',$errores);
		}

	}

?>
