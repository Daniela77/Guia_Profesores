<?php
	include_once 'view/view.php';

	class ComentarioView extends View{

		function mostrarComentarios(){
			$this->$smarty->display('comentarios.tpl');
		}

		// function mostrarComentario(){
    //   $this->$smarty->assign('comentarioNuevo',$comentarioNuevo);
  	// 	$this->$smarty->display('comentario_simple.tpl');
		// }

	}

?>
