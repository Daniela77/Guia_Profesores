<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only"><!--sr=ScreenReader..como ven los disminuidos visuales-->Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="inicio.html">
              <img src="images/logoparticularte.png" alt="Particularte">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav pull-right mainNav">
            <li href="index.php?page=inicio"><a href="#"><strong>Inicio</strong></a></li>
            <li href="index.php?page=listaProfesores"><a href="#"><strong>Profesores</strong></a></li>
            <li href="index.php?page=listaMaterias"><a href="#"><strong>Materias</strong></a></li>
            <li href="index.php?page=contacto"><a href="#"><strong>Contacto</strong></a></li>
            <li href="index.php?page=login"><a href="#"><strong>Administrador</strong></a></li>

            <!-- {if $usuario['rol_usuario']==usuario}
                  <li href="index.php?page=login"><a href=# id="login">Ingresar</a></li>
                {else}
                  <li href="index.php?page=logout"><a href=# id="logout">Logout</a><span class="glyphicon glyphicon-user">{$usuario['email']}</span></li>
                {/if}
                  {if $usuario['rol_usuario']==administrador}
                    <li href="index.php?page=login"><a href="#"><strong>Administrador</strong></a></li>
                  {/if} -->
          </ul>
        </li>
      </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    <!-- /.navbar -->
  </nav>
