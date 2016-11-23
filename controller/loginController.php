<?php
  include_once 'controller/controller.php';
  include_once 'controller/guiaController.php';
  include_once 'view/loginView.php';
  include_once 'model/usuarioModel.php';

  class LoginController extends Controller {
    protected $loginView;
    
    function __construct() {
      $this->model = new UsuarioModel();
      $this->loginView = new LoginView();
    }

    // function checkLogin(){
    //   session_start();
    //   if(!isset($_SESSION['USER'])){
    //     header("Location: index.php");
    //     die();
    //   }
    // }

    function checkLogin(){
      session_start();
      if(!isset($_SESSION['USER'])){
        return false;
      }
      return true;
    }

    function login(){
      if(isset($_POST["email"]) && isset($_POST["password"])){
        $user = $_POST["email"];
        $password = $_POST["password"];
        $usuarioRegistrado = $this->model->getUsuario($user);
        $passwordRegistrada = $usuarioRegistrado["password"];
        if (password_verify($password, $passwordRegistrada)){
          session_start();
          $_SESSION["USER"] = $user;
          // $_SESSION["expire"] = time();
          return true;
        }
        else $this->loginView->MostrarError("Usuario o contraseña incorrectos");
      }
      $this->loginView->mostrarLogin();
      return false;
    }

    function logout(){
      session_start();
      session_destroy();
      header("Location: index.php");
      die();
    }

    function mostrarRegistrar(){
      $this->loginView->mostrarRegistrar();
    }

    function registrar(){

        if(isset($_POST['txtUser'])&&($_POST['txtUser'] != '')&&
        (isset($_POST['txtPass'])&&($_POST['txtPass'] != '')&&
        (isset($_POST['txtRol'])&&($_POST['txtRol'] != '')))){
        $user = $_POST["txtUser"];
        $password = password_hash($_POST["txtPass"], PASSWORD_DEFAULT);
        $rol=$_POST["txtRol"];
        $usuarioARegistrar = $this->model->getUsuario($user);
        if ($usuarioARegistrar) {
          $this->loginView->MostrarError("El usuario ya existe");
        }
        else{
          $this->model->crearUsuario($user,$password,$rol);
          $this->loginView->mostrarLogin([]);
        }
      }
      else {
        $this->loginView->MostrarError("Campos incompletos¡¡¡¡");
      }
    }
  }
?>
