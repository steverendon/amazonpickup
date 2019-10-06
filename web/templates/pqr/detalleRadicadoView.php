<?php require_once 'web/over/header.php'?>

<body>

 <!-- menu -->

<?php require_once 'web/over/menuUsuario.php' ?>

<!-- pagina -->

<div class="jumbotron" style="height: 600px">
    <div class="row justify-content-center">


        <div class="col-lg-10">
        <div class="card" style="height:600px;overflow:auto">
          <div class="card-body">

              <!-- formulario -->

            <form action="core/controllers/pqrController.php" method="post">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="form-group">
                        <label class="col-form-label" for="radicado">Respuesta</label>
                        <textarea class="form-control" id="exampleTextarea" id="radicado" name="txt" rows="3"></textarea>
                        <input type="hidden" class="form-control form-control-sm" placeholder="" name="radicado" value="<?php echo $_GET['radicado'] ?>">
                      </div>
                  </div>
              </div>
              <button type="submit" class="btn btn-primary" name="btn-actualizar">Guardar</button>
            </form>

            <br>
            <br>

            <?php visualizarTexto($conexion,$_GET['radicado']) ?>

          </div>
        </div>


        </div>
    </div>
</div>
</body>
</html>
