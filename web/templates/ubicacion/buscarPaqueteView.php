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
        <h4><center>Buscar paquete</center></h4>

        <!-- formulario -->

         <form action="index.php" method="get">

            <div class="form-group">
              <label class="col-form-label" for="inputDefault">No Paquete</label>
              <input type="search" class="form-control" placeholder="Ingrese numero del paquete" name="num_paquete" autofocus required>
              <input type="hidden" name="view" value="ubicacion">
            </div>
            <button type="submit" class="btn btn-primary" name="btn-buscar">Buscar</button>

            </form>

        </div>
    </div>
</div>
</html>
