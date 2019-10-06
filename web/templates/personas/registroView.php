<?php require_once 'web/over/header.php'?>

<body style="text-align: center">

 <!-- menu -->

<?php require_once 'web/over/menu.php' ?>

<!-- pagina -->

<div style="background: #fff;padding: 10px">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <center>
            <img src="web/img/logo_2.png" style="width: 250px">
            <div class="card border-secondary mb-3">
              <div class="card-body">
                <h4 class="card-title" style="font-weight: 900">Crear Cuenta</h4>

                  <!-- inicio formulario -->
                <form action="core/controllers/registroController.php" method="post">
                  <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group"  style="text-align: left">
                          <label class="col-form-label col-form-label-sm" for="inputDefault">Nombre Completo</label>
                          <input type="text" class="form-control form-control-sm" id="inputDefault" name="nombre" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group"  style="text-align: left">
                          <label class="col-form-label col-form-label-sm" for="inputDefault">Cédula</label>
                          <input type="text" class="form-control form-control-sm" id="inputDefault" name="num_doc" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group"  style="text-align: left">
                          <label class="col-form-label col-form-label-sm" for="inputDefault">Correo Electrónico</label>
                          <input type="email" class="form-control form-control-sm" id="inputDefault" name="correo" required>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group"  style="text-align: left">
                          <label class="col-form-label col-form-label-sm" for="inputDefault">Contraseña</label>
                          <input type="password" class="form-control form-control-sm" id="inputDefault" name="contrasena" required>
                        </div>
                    </div>
                    <!--<div class="col-lg-4">
                        <div class="form-group"  style="text-align: left">
                          <label class="col-form-label col-form-label-sm" for="inputDefault">Confirmar Contraseña</label>
                          <input type="password" class="form-control form-control-sm" id="inputDefault" name="re_contra" required>
                        </div>
                    </div>-->
                    <div class="col-lg-8">
                        <div class="form-group"  style="text-align: left">
                          <label class="col-form-label col-form-label-sm" for="inputDefault">Dirección</label>
                          <input type="text" class="form-control form-control-sm" id="inputDefault" name="direccion" required>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group"  style="text-align: left">
                          <label class="col-form-label col-form-label-sm" for="inputDefault">Departamento</label>
                          <input type="text" class="form-control form-control-sm" id="inputDefault" name="departamento" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group"  style="text-align: left">
                          <label class="col-form-label col-form-label-sm" for="inputDefault">Ciudad</label>
                          <input type="text" class="form-control form-control-sm" id="inputDefault" name="ciudad" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group"  style="text-align: left">
                          <label class="col-form-label col-form-label-sm" for="inputDefault">Celular</label>
                          <input type="text" class="form-control form-control-sm" id="inputDefault" name="telefono" required>
                        </div>
                    </div>
                  </div>
                  <center>
                      <p>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                            <label class="custom-control-label" for="customCheck1"><small>Acepto las <a href="" data-toggle="modal" data-target="#tra-datos" >condiciones de uso</a> y <a href="" data-toggle="modal" data-target="#avi-privacidad">privacidad</a></small></label>
                          </div>
                    </p>
                    <p>¿Ya tienes cuenta? <a href="index.php?view=login">Inicia sesión</a></p>
                  </center>
                  <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="form-group"  style="text-align: left">
                            <button type="submit" class="boton btn-lg btn-block" name="btn-registro">Crear Cuenta</button>
                        </div>
                    </div>
                  </div>
             </form>

                  <!-- fin formulario -->

            <p class="text-danger"><?php echo $v = (isset($_GET['mensaje'])) ? $_GET['mensaje'] : ''?></p>

              </div>
            </div>
            </center>
        </div>
    </div>
</div>

<?php require_once 'web/over/footer.php' ?>

</body>
</html>
