<section>
  <div class="container">
    <form class="form-signin" id = "loginForm" method="POST" action="index.php?page=login" enctype="multipart/form-data">
      <h2 class="form-signin-heading">Please sign in</h2>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="txtUser" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="txtPass" class="form-control" placeholder="Password" required>
      <div>
        <button class="btn btn-lg btn-primary btn-block" type="submit"id="iniciarSesion" name="iniciarSesion" href="#">Iniciar Sesion</button>
        <a class="btn btn-default" href="index.php?page=mostrarRegistrar" id="irregistrar" name="irregistrar">Registrese</a>
      </div>

        {if isset($error)}
          <div class="panel panel-filled panel-c-danger">
              <div class="panel-heading">{$error}</div>
          </div>
        {/if}
    </form>
  </div> <!-- /container -->
</section>
