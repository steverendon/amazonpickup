<?php require_once 'web/over/header.php' ?>

<body style="text-align: center">

<!-- pagina -->

<div style="background: #fff;padding: 30px">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <center>
            <img src="web/img/logo_2.png" style="width: 250px">
            <div class="card border-secondary mb-3" style="max-width: 20rem;">
              <div class="card-body">
                <h4 class="card-title" style="font-weight: 900">Logistica</h4>

                <!-- inicio formulario -->
                <form action="core/controllers/loginUsuarioController.php" method="post">

                <div class="form-group"  style="text-align: left">
                  <label class="col-form-label" for="inputDefault">Numero de identificación</label>
                  <input type="text" class="form-control" id="inputDefault" name="documento">
                </div>
                <div class="form-group"  style="text-align: left">
                  <label class="col-form-label" for="inputDefault">Contraseña</label>
                  <input type="password" class="form-control" id="inputDefault" name="contrasena">
                </div>
                <button type="submit" class="btn btn-info btn-lg btn-block" name="btn-login">Iniciar sesión</button>

                </form>
                <!-- fin fromulario -->

              </div>
            </div>
            </center>
        </div>
    </div>
</div>

</body>
</html>
