<?php require_once 'web/over/header.php'?>

<body style="text-align: center">

 <!-- menu -->

<?php require_once 'web/over/menu.php' ?>

<!-- pagina -->

<div style="background: #fff;padding: 30px">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <center>
            <img src="web/img/logo_2.png" style="width: 250px">
            <div class="card border-secondary mb-3" style="max-width: 20rem;">
              <div class="card-body">
                <h4 class="card-title" style="font-weight: 900">Iniciar Sesión</h4>

                <!-- inicio formulario -->
                <form action="core/controllers/loginController.php" method="post">

                <div class="form-group"  style="text-align: left">
                  <label class="col-form-label" for="inputDefault">Correo electrónico</label>
                  <input type="text" class="form-control" id="inputDefault" name="correo" required>
                </div>
                <div class="form-group"  style="text-align: left">
                  <label class="col-form-label" for="inputDefault">Contraseña</label>
                  <input type="password" class="form-control" id="inputDefault" name="contrasena">
                </div>
                <button type="submit" class="btn btn-info btn-lg btn-block" name="btn-login">Iniciar Sesión</button>

                </form>
                <!-- fin fromulario -->

                <a href="index.php?view=restablecerPass&v=v">¿He olvidado mi contraseña?</a>
                
                <p style="margin: 15px 0px 0px 0px">Eres nuevo en amazonprime.com.co</p>
                <a href="index.php?view=registro"><button type="button" class="btn btn-secondary btn-lg btn-block">Crear cuenta</button></a>
              </div>
            </div>

            <p class="text-danger"><?php echo $v = (isset($_GET['mensaje'])) ? $_GET['mensaje'] : ''?></p>

            </center>
        </div>
    </div>
</div>

<?php require_once 'web/over/footer.php' ?>

</body>
</html>
