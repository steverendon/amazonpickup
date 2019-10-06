<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><img src="web/img/logo.png" style="width: 150px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php?view=crearCaja" class="enlace">Crear Caja</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?view=verCaja" class="enlace">Ver caja</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?view=recibirCaja" class="enlace">Recibir caja</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?view=ingresarPaquete" class="enlace">Ingresar paquete</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?view=buscarPaquete" class="enlace">Buscar paquete</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?view=verUsuario" class="enlace">Buscar cliente</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?view=ingresoBodega" class="enlace">Ingreso bodega</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?view=despachar" class="enlace">Despachar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?view=obsequios" class="enlace">Obsequios</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pqr</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="index.php?view=pqr">Ingresar pqr</a>
          <a class="dropdown-item" href="index.php?view=pqr&accion=buscar">Buscar pqr</a>
        </div>
      </li>
    </ul>
    <span class="navbar-text"><i class="fas fa-user"></i> <?php echo $_SESSION['nombre'] ?>
      <a href="core/cerrarSessionUsuario.php" class="enlace"><b>Salir</b></a>
    </span>
  </div>

</nav>
