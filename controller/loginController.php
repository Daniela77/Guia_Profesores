<?php
include_once 'controller/controller.php';
include_once 'view/loginView.php';
include_once 'model/usuarioModel.php';

class LoginController extends Controller {

  function __construct() {
    $this->model = new UsuarioModel();
    $this->view = new LoginView();
  }

  function logout(){
    session_start();
    session_destroy();
    // header("Location: login"); ver como se realiza!!!
    header("Location: index.php");
    die();
  }

  function login(){
    if(isset($_REQUEST["txtEmail"]) && isset($_REQUEST["txtPassword"]))
    {
      $email = $_REQUEST["txtEmail"];
      $pass = $_REQUEST["txtPassword"];

      $usuario = $this->model->getUsuario($email);

      if(password_verify($pass, $usuario["password"]))
      {
        session_start();
        $_SESSION["email"] = $email;
        header("Location: index.php");
        die();
      }
      else {
        $this->view->mostrarError("Usuario y password invalidos");
      }
    }

    $this->view->mostrarLogin();
  }
}

?>
