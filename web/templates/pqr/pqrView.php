<?php require_once 'web/over/header.php'?>

<body>

 <!-- menu -->

<?php require_once 'web/over/menuUsuario.php' ?>

<!-- pagina -->

<div class="jumbotron" style="height: 600px">
    <div class="row justify-content-center">
        <div class="col-lg-10">
        <div class="card">
                <h4 class="text-warning"><?php echo $v = (isset($_GET['radicado'])) ? $_GET['radicado'] : ''?></h4>
          <div class="card-body">

              <!-- formulario -->

            <form action="core/controllers/pqrController.php" method="post">

              <div class="row">
                  <div class="col-lg-6">
                        <div class="form-group">
                        <label class="col-form-label" for="tipo">Tipo</label>
                          <select class="form-control form-control-sm" id="tipo" name="tipo">
                            <option value="Peticion">Petición</option>
                            <option value="Queja o reclamo">Queja o reclamo</option>
                          </select>
                        </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-3">
                      <div class="form-group">
                        <label class="col-form-label" for="nombre">Nombre*</label>
                        <input type="text" class="form-control form-control-sm" placeholder="" id="nombre" name="nombre" required>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="form-group">
                        <label class="col-form-label" for="cedula">Cedula</label>
                        <input type="text" class="form-control form-control-sm" placeholder="" id="cedula" name="cedula">
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="form-group">
                        <label class="col-form-label" for="celular">Celular*</label>
                        <input type="text" class="form-control form-control-sm" placeholder="" id="celular" name="celular" required>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="form-group">
                        <label class="col-form-label" for="correo">Correo*</label>
                        <input type="text" class="form-control form-control-sm" placeholder="" id="correo" name="correo" required>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                        <div class="form-group">
                          <label class="col-form-label" for="titulo ">Titulo*</label>
                          <input type="text" class="form-control form-control-sm" placeholder="" id="titulo" name="titulo" required>
                        </div>
                  </div>
                  <div class="col-lg-12">
                        <div class="form-group">
                          <label for="exampleTextarea">Comentarios</label>
                          <textarea class="form-control" id="exampleTextarea" rows="3" name="texto"></textarea>
                        </div>
                  </div>
              </div>
              <button type="submit" class="btn btn-primary" name="btn-ingresar">Enviar</button>

          </form>

          </div>
        </div>


        </div>

    </div>
</div>
</body>
</html>
