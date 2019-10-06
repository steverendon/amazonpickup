<?php require_once 'web/over/header.php'?>

<body>

 <!-- menu -->

<?php require_once 'web/over/menuUsuario.php' ?>

<!-- pagina -->

<div class="jumbotron" style="height: 600px">
    <div class="row justify-content-center">


        <div class="col-lg-10">
        <div class="card" style="height:400px;overflow:auto">
          <div class="card-body">

              <!-- formulario -->

            <form action="index.php" method="get">

              <div class="row">
                  <div class="col-lg-4">
                      <div class="form-group">
                        <label class="col-form-label" for="radicado">Numero de radicado o documento</label>
                        <input type="text" class="form-control form-control-sm" placeholder="" id="radicado" name="radicado">
                        <input type="hidden" class="form-control form-control-sm" placeholder="" name="accion" value="buscar">
                        <input type="hidden" class="form-control form-control-sm" placeholder="" name="view" value="pqr">
                      </div>
                  </div>
              </div>
              <button type="submit" class="btn btn-primary" name="btn-buscar">Buscar</button>
            </form>
            <br>
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Radicado</th>
                      <th scope="col">Tipo</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Cedula</th>
                      <th scope="col">Titulo</th>
                    </tr>
                  </thead>
                  <tbody>

                      <?php

                      if(isset($_GET['btn-buscar']))
                        mostrarPqr($conexion,$_GET['radicado'])

                      ?>

                  </tbody>
                </table>

          </div>
        </div>


        </div>
    </div>
</div>
</body>
</html>
