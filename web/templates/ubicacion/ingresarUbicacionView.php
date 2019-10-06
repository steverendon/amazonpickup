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

        <!-- <form action="core/controllers/ubicacionController.php" method="post">
         <div class="row">
             <div class="col-lg-4">
            <div class="form-group">
              <label for="exampleSelect1"># de paquete</label>
              <input type="text" class="form-control" placeholder="Ingrese numero del paquete" name="num_paquete" value="<?php echo $_GET['num_paquete'] ?>">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
              <label for="exampleSelect1">Ubicacion</label>
              <select class="form-control" name="ubicacion">
                <option>Seleccione ubicacion</option>
                <option value="Despachado de Miami(Amazon Prime)">Despachado de Miami(Amazon Prime)</option>
                <option value="Ingresado a bodega Bogota(Amazon Prime)">Ingresado a bodega Bogota(Amazon Prime)</option>
                <option value="Enviado a ciudad de destino Colombia">Enviado a ciudad de destino Colombia</option>
              </select>
            </div>
         </div>
                <div class="col-lg-4">
                <div class="form-group">
                  <label for="exampleSelect1">Numero de guia</label>
                  <input type="text" class="form-control" placeholder="" name="num_guia" required>
                </div>
               </div>
        </div>
        <button type="submit" class="btn btn-primary" name="btn-ubicacion">Guardar</button>
        </form>
-->


        <br>
        <div class="card" style="height: 300px">
          <div class="card-body">
            <h4 class="card-title">Historial</h4>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col"># paquete</th>
                      <th scope="col">Ubicacion</th>
                      <th scope="col">Tramitado por</th>
                      <th scope="col"># Guia</th>
                      <th scope="col">Fecha</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table-active">

                        <?php verUbicacion($conexion,$num_paquete) ?>

                    </tr>
                  </tbody>
                </table>
          </div>
        </div>

        </div>
    </div>
</div>
</html>
