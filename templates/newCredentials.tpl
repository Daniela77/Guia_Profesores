<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ingreso a la base de datos</title>
  </head>
  <body>

    <form class="form-control" id="newCredentials">
      <h2>Introdusca el host</h2>
      <input type="text" name="host" required="true">
      <h2>Nombre de la base de datos</h2>
      <input type="text" name="dbName" required="true">
      <h2>Nombre de usuario</h2>
      <input type="text" name="user" required="true">
      <h2>Contraseña</h2>
      <input type="text" name="password">
      <input type="submit">
    </form>

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/dbCredentials.js"></script>

  </body>
</html>
