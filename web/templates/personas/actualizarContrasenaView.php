<?php require_once 'web/over/header.php'?>

<body style="text-align: center">

 <!-- menu -->

<?php require_once 'web/over/menuCliente.php' ?>

<!-- pagina -->

<div style="background: #fff;padding: 30px">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <center>
            <img src="web/img/logo_2.png" style="width: 250px">
            <div class="card border-secondary mb-3" style="max-width: 20rem;">
              <div class="card-body">
                <h4 class="card-title" style="font-weight: 900">Cambiar contraseña</h4>

                <!-- inicio formulario -->
                <form action="core/controllers/actualizarContrasenaController.php" method="post">

                <div class="form-group"  style="text-align: left">
                  <label class="col-form-label" for="inputDefault">Antigua contraseña</label>
                  <input type="password" class="form-control" id="" name="ant_pass" required>
                </div>
                <div class="form-group"  style="text-align: left">
                  <label class="col-form-label" for="inputDefault">Nueva Contraseña</label>
                  <input type="password" class="form-control" id="" name="pass">
                </div>
                <button type="submit" class="btn btn-info btn-lg btn-block" name="btn-actualizar">Cambiar</button>

                </form>
                <!-- fin fromulario -->
              </div>
            </div>

            <p class="text-info"><?php echo $v = (isset($_GET['mensaje'])) ? $_GET['mensaje'] : ''?></p>

            </center>
        </div>
    </div>
</div>

<?php require_once 'web/over/footer.php' ?>

</body>
</html>
