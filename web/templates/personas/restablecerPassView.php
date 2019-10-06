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
                <h4 class="card-title" style="font-weight: 900">Restablecer contraseña</h4>

                <!-- inicio formulario -->
                <form action="core/controllers/restablecerPassController.php" method="post">

                <div class="form-group"  style="text-align: left">
                  <label class="col-form-label" for="inputDefault">Nueva contraseña</label>
                  <input type="password" class="form-control" id="" name="pass" required>
                </div>
                <div class="form-group"  style="text-align: left">
                  <input type="hidden" class="form-control" id="" name="correo" value="<?php echo $_GET['correo'] ?>">
                  <input type="hidden" class="form-control" id="" name="cod" value="<?php echo $_GET['cod'] ?>">
                </div>
                <button type="submit" class="btn btn-info btn-lg btn-block" name="btn-res">Cambiar contraseña</button>

                </form>
                <!-- fin fromulario -->

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
