<div class="login">
  <div class="container">
    <form class="form-signin" method="POST" action="index.php?page=login">
      <h3 class="form-signin-heading">Acceso</h3>
      <label for="txtEmail" class="sr-only">Email</label>
      <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email" required autofocus>
      <label for="txtPassword" class="sr-only">Password</label>
      <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password" required>
      {if count($errores) gt 0}
        <div class="alert alert-danger" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only">Error:</span>
          {foreach $errores as $error}
            {$error}
          {/foreach}
        </div>
      {/if}
      <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
    </form>
  </div> <!-- /container -->
</div>
