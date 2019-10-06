<?php require_once 'web/over/header.php'?>

<body style="text-align: center">

 <!-- menu -->

<?php require_once 'web/over/menuUsuario.php' ?>

<!-- pagina -->

</body>


<div class="jumbotron" style="height: 500px">
    <div class="row justify-content-center">
        <div class="col-lg-12">

        <div class="card" style="height: 300px;overflow:auto">
          <div class="card-body">
              <h4>Paquetes ingresados</h4>
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Num paquete</th>
                      <th scope="col">Peso</th>
                      <th scope="col">Operador</th>
                      <th scope="col">Descripcion</th>
                      <th scope="col">Codigo caja</th>
                      <th scope="col">fecha</th>
                    </tr>
                  </thead>
                  <tbody>


                      <?php verPedidosUsuario($conexion,$_GET['id']) ?>


                  </tbody>
                </table>

          </div>
        </div>
        <br>
        <div class="card" style="height: 350px;overflow:auto">
          <div class="card-body">
            <h4>Membresias</h4>
                <?php verMembresia($conexion,$id) ?>

          </div>
        </div>

        </div>
    </div>
</div>
</html>
