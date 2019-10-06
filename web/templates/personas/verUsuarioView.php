<?php require_once 'web/over/header.php'?>

<body style="text-align: center">

 <!-- menu -->

<?php require_once 'web/over/menuUsuario.php' ?>

<!-- pagina -->

</body>


<div class="jumbotron" style="height: 500px">
    <div class="row justify-content-center">
        <div class="col-lg-12">
        <!--<center><img src="web/img/logo_2.png" style="width: 200px;margin: 10px"></center>-->
        <h4><center>Usuarios registrados: <?php echo $num_usuarios ?></center></h4>

        <!-- formulario -->
                <form action="index.php" method="get">
                    <table>
                    <tr>
                    <td>
                        <div class="form-group">
                          <input class="form-control form-control" type="text" placeholder="Codigo cliente" name="id" required>
                          <input class="form-control form-control" type="hidden" name="accion" value="tabla">
                          <input type="hidden" name="view" value="verUsuario">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </div>
                    </td>
                    </tr>
                    </table>
                </form>

        <div class="card" style="height:500px">
          <div class="card-body">
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Numero de documento</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Telefon</th>
                      <th scope="col">E-mail</th>
                      <th scope="col">Departamento</th>
                      <th scope="col">Ciudad</th>
                      <th scope="col">Direccion</th>
                      <th scope="col">Ver</th>
                    </tr>
                  </thead>

                 <?php if(isset($_GET['id'])){ ?>

                  <tbody>
                    <tr class="table-active">

                        <?php mostrarUsuarios($conexion,$id) ?>

                    </tr>
                  </tbody>

                <?php } ?>

                </table>
          </div>
        </div>

        </div>
    </div>
</div>
</html>
