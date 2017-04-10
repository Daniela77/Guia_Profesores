<section>
    <div class="container">
    <form class="form-signin" id = "loginForm" method="POST" action="index.php?page=login" enctype="multipart/form-data">
      <h2 class="form-signin-heading text-center" >Acceder</h2>
        <label for="inputEmail" class="sr-only">direccion de email</label>
        <input type="email" id="inputEmail" name="txtUser" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" name="txtPass" class="form-control" placeholder="Password" required>
      <div>
        <button class="btn btn-lg btn-primary btn-block" type="submit"id="iniciarSesion" name="iniciarSesion" href="#" > Iniciar Sesion </button>
        <p class="text-center">Todavia no tienes una cuenta?</p>
        <a class="btn btn-success btn-block" href="index.php?page=mostrarRegistrar" id="irregistrar" name="irregistrar">Registrese</a>
      </div>
        {if isset($error)}
          <div class="panel panel-filled panel-c-danger">
              <div class="panel-heading">{$error}</div>
          </div>
        {/if}
    </form>
  </div> <!-- /container -->
</section>
