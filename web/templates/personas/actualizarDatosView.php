<?php require_once 'web/over/header.php'?>

<body style="text-align: center">

 <!-- menu -->

<?php require_once 'web/over/menuCliente.php' ?>

    <!-- cuerpo pagina -->

    <div class="row">
        <div class="col-lg-4">
            <img class="img-fluid" src="web/img/misDatos/misdatos-13.png" style="width: 1200px;height:120px">
        </div>
    </div>
    <div class="jumbotron">

        <div class="row justify-content-center">

                <div class="col-lg-10">
                    <div class="card margen">
                      <div class="card-body">
                                            <!-- inicio formulario -->
                <form action="core/controllers/actualizarDatosController.php" method="post">
                  <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group"  style="text-align: left">
                          <label class="col-form-label col-form-label-sm" for="inputDefault">Nombre Completo</label>
                          <input type="text" class="form-control form-control-sm" id="inputDefault" name="nombre" value="<?php echo $r[2] ?>">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group"  style="text-align: left">
                          <label class="col-form-label col-form-label-sm" for="inputDefault">Cedula</label>
                          <input type="text" class="form-control form-control-sm" id="inputDefault" name="num_doc" value="<?php echo $r[1] ?>">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group"  style="text-align: left">
                          <label class="col-form-label col-form-label-sm" for="inputDefault">Correo Electronico</label>
                          <input type="text" class="form-control form-control-sm" id="inputDefault" name="correo" value="<?php echo $r[4] ?>">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group"  style="text-align: left">
                          <label class="col-form-label col-form-label-sm" for="inputDefault">Departamento</label>
                          <input type="text" class="form-control form-control-sm" id="inputDefault" name="departamento" value="<?php echo $r[6] ?>">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group"  style="text-align: left">
                          <label class="col-form-label col-form-label-sm" for="inputDefault">Ciudad</label>
                          <input type="text" class="form-control form-control-sm" id="inputDefault" name="ciudad" value="<?php echo $r[7] ?>">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group"  style="text-align: left">
                          <label class="col-form-label col-form-label-sm" for="inputDefault">Celular</label>
                          <input type="text" class="form-control form-control-sm" id="inputDefault" name="telefono" value="<?php echo $r[3] ?>">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group"  style="text-align: left">
                          <label class="col-form-label col-form-label-sm" for="inputDefault">Direccion</label>
                          <input type="text" class="form-control form-control-sm" id="inputDefault" name="direccion" value="<?php echo $r[8] ?>">
                        </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="form-group"  style="text-align: left">
                            <button type="submit" class="boton btn-lg btn-block" name="btn-actualizar">Actualizar</button>
                        </div>
                    </div>
                  </div>
             </form>
                      </div>
                    </div>
                </div>

        </div>

    </div>

<?php require_once 'web/over/footer.php' ?>

   </body>
</html>
