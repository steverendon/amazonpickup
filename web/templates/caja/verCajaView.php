<?php require_once 'web/over/header.php'?>

<body style="text-align: center">

 <!-- menu -->

<?php require_once 'web/over/menuUsuario.php' ?>

<!-- pagina -->

</body>


<div class="jumbotron" style="height: 500px">
    <div class="row justify-content-center">
        <div class="col-lg-10">
        <center><img src="web/img/logo_2.png" style="width: 200px;margin: 10px"></center>
        <!-- formulario -->

            <div class="card" style="height:400px">
              <div class="card-body">
                <h4 class="card-title">Ver caja <?php echo $_GET['cod_caja'] ?></h4>
                <?php echo $v = (estado($conexion,$_GET['cod_caja']) ? '<p class="text-info">Ingresado a bodega Bogotá.</p>':'<p class="text-danger">En transito</p>') ?>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Descripcion</th>
                      <th scope="col">Cliente</th>
                      <th scope="col">Peso</th>
                      <th scope="col">Fecha</th>
                      <th scope="col">Envia</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php verCaja($conexion,$_GET['cod_caja']) ?>

                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
</html>
