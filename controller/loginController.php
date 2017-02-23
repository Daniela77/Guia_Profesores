<?php
  // include_once 'controller/controller.php';
  // include_once 'controller/guiaController.php';
  // include_once 'view/loginView.php';
  // include_once 'model/usuarioModel.php';
  include_once(dirname(__DIR__).'/model/usuarioModel.php');
  include_once(dirname(__DIR__).'/controller/controller.php');
  include_once(dirname(__DIR__).'/controller/guiaController.php');
  include_once(dirname(__DIR__).'/view/loginView.php');

  class LoginController extends Controller {
    protected $loginView;
    protected $Autenticacion;

    function __construct() {
      $this->model = new UsuarioModel();
      $this->loginView = new LoginView();
      error_reporting(E_ALL ^ E_NOTICE);
    }

    function checkLogin(){

      session_start();
      //  print_r($_SESSION);
      if(!isset($_SESSION['USER'])){
        return false;
      }
      return true;
    }

//     public function checkLogin(){
//   session_start();
//     print_r($_SESSION);
//   if(!isset($_SESSION['USER'])){
//     header("Location: index.php");
//     die();
//   }
//   else{
//     if($_SESSION['ADMIN']){
//       $this->Autenticacion=ADMIN;
//       return $this->Autenticacion;
//     }
//     else{
//       $this->Autenticacion=USER;
//       return $this->Autenticacion;}
//   }
// }

     function usuarioLogueado(){
      session_start();
      if(isset($_SESSION['USER'])) {
        $usuario = $this->model->getUsuario($_SESSION['USER']);
      // print($usuario);
            return $usuario;
        }
      }


    function login(){
      if(isset($_POST["email"]) && isset($_POST["password"])){
        $user = $_POST["email"];
        $password = $_POST["password"];
        $usuarioRegistrado = $this->model->getUsuario($user);
        $passwordRegistrada = $usuarioRegistrado["password"];
        if (password_verify($password, $passwordRegistrada)){
          // session_start();
          $_SESSION["USER"] = $user;
          $_SESSION['ADMIN'] = $usuarioRegistrado["rol_usuario"];
          return true;
        }
        else $this->loginView->MostrarError("Usuario o contraseña incorrectos");
      }
      $this->loginView->mostrarLogin();
      return false;
    }

    function logout(){
      session_start();
      // $_SESSION=array();
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
          $this->loginView->mostrarLogin();
        }
      }
      else {
        $this->loginView->MostrarError("Campos incompletos¡¡¡¡");
      }
    }

   function getRol(){
        session_start();
        if(!isset($_SESSION['USER']) && !empty($_SESSION['USER'])){
          var_dump($_SESSION['USER']);
          return "visitante";
        }

        if($_SESSION['ADMIN']==Administrador){
          $this->Autenticacion=ADMIN;
          return $this->Autenticacion;
        }
        else {
          $this->Autenticacion=USER;
          return $this->Autenticacion;
        }

      }

  }
?>
