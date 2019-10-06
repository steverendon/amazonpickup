<?php require_once 'web/over/header.php'?>

<body style="text-align: center">

 <!-- menu -->

<?php require_once 'web/over/menuUsuario.php' ?>

<!-- pagina -->

</body>


<div class="jumbotron" style="height: 500px">
    <div class="row justify-content-center">
        <div class="col-lg-4">
        <center><img src="web/img/logo_2.png" style="width: 200px;margin: 10px"></center>
        <h4><center>Ver contenido de caja</center></h4>

        <!-- formulario -->

         <form action="index.php" method="get">

            <div class="form-group">
              <label class="col-form-label" for="inputDefault">Código caja</label>
              <input type="search" class="form-control" placeholder="Ingrese numero del paquete" name="cod_caja" autofocus required>
              <input type="hidden" name="view" value="verCaja">
            </div>
            <button type="submit" class="btn btn-primary" name="btn-buscar">Buscar</button>

            </form>

        </div>
    </div>
    <br>
    <div class="card">
      <div class="card-body" style="height:400px;overflow:auto">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Cod. caja</th>
                <th scope="col">fecha de creacion</th>
                <th scope="col">estado</th>
                <th scope="col">Ingresar numero de guia</th>
              </tr>
            </thead>
            <tbody>

              <?php listarCajas($conexion) ?>

            </tbody>
          </table>
      </div>
  </div>
</div>
</html>
