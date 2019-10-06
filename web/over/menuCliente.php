<a name="inicio">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="index.php?view=inicio"><img src="web/img/logo.png" class="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php?view=pagina&v=planes"><button type="submit" class="boton">Membresias Prime</button> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item" style="margin-top:5px">
            <a class="nav-link" href="index.php?view=pagina&v=planes">Membresías</a>
          </li>
          <li class="nav-item" style="margin-top:5px">
            <a class="nav-link" href="https://www.amazon.com/" target="_blank">Tu amazon</a>
          </li>
          <li class="nav-item" style="margin-top:5px">
            <a class="nav-link" href="index.php?view=pagina&v=contacto">Contacto</a>
          </li>
          <li class="nav-item" style="margin-top:5px">
            <a class="nav-link" href="index.php?view=pagina&v=ayuda">Ayuda</a>
          </li>
          <li class="nav-item" style="margin-top:5px">
            <a class="nav-link" href="index.php?view=pagina&v=devoluciones">Devoluciones</a>
          </li>
        </ul>
        <span class="navbar-text">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <button type="button" class="btn btn-primary"><?php echo $_SESSION['nombre'] ?>
                (<?php echo $_SESSION['id'] ?>)</button>
                <div class="btn-group" role="group">
                  <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                  <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="margin-left:-150px;background:silver">
                    <a class="dropdown-item" href="index.php?view=misMembresias">Mis Membresías</a>
                    <a class="dropdown-item" href="index.php?view=misPedidos">Mis Pedidos</a>
                    <a class="dropdown-item" href="index.php?view=actualizarDatos">Mis Datos</a>
                    <a class="dropdown-item" href="index.php?view=actualizarContrasena">Cambiar contraseña</a>
                    <a class="dropdown-item" href="core/cerrarSession.php">Salir</a>
                  </div>
                </div>
              </div>
        </span>
      </div>
    </nav>
</a>
