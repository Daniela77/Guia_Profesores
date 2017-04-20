<section>
  <div class="container">
    <form class="form-signin" id ="registrarForm" method="POST" action="index.php?page=registrar" enctype="multipart/form-data">
      <h2 class="form-signin-heading">Registrarse</h2>
      <p>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="txtUser" class="form-control" placeholder="Email address" required autofocus>
      </p>
      <p>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="txtPass" class="form-control" placeholder="Password" required>
      </p>
      <p>
       <label for="inputRol" class="sr-only">Rol</label>
       <select id="inputRol"  name="txtRol" class="form-control">
         <option>Seleccione un rol</option>
         <option>Administrador</option>
         <option>Usuario</option>
       </select>
     </p>
      <button class="btn btn-lg btn-primary btn-block" type="submit" id="registrar" name="registrar" href="index.php?page=registrar">Registrar</button>
      {if isset($error)}
        <div class="panel panel-filled panel-c-danger">
          <div class="panel-heading">{$error}</div>
        </div>
      {/if}
    </form>
  </div> <!-- /container -->
</section>
