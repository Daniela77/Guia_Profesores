<?php
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

    public function checkLogin(){
      session_start();
      if(!isset($_SESSION['USER'])){
        return false;
      }
      else{
        if($_SESSION['ADMIN']){
          $this->Autenticacion=ADMIN;
          return $this->Autenticacion;
        }
        else{
          $this->Autenticacion=USER;
          return $this->Autenticacion;}
      }
    }

     function usuarioLogueado(){
      session_start();
      if(isset($_SESSION['USER'])) {
        $usuario = $this->model->getUsuario($_SESSION['USER']);
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
      session_destroy();
      header("Location: index");
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
          $this->Login();

        }
      }
      else {
        $this->loginView->MostrarError("Campos incompletos¡¡¡¡");
      }
    }

   function getRol(){
      session_start();
      if(!isset($_SESSION['USER']) && !empty($_SESSION['USER'])){
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

    function administrarUsuarios(){
      $usuarios = $this->model->getUsuarios();
      $usuarioLogueado=$this->usuarioLogueado();
      $this->loginView->mostrarUsuarios($usuarios,$usuarioLogueado);
    }

    function modificarRol(){
      $id_usuario = $_POST['id_usuario'];
      $this->model->actualizarUsuario($id_usuario);
      $this->mostrarUsuarios();
    }

    function mostrarUsuarios () {
      $usuarios = $this->model->getUsuarios();
      $usuarioLogueado=$this->usuarioLogueado();
      $this->loginView->mostrarUsuarios($usuarios,$usuarioLogueado);
    }
  }
?>
