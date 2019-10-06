<?php require_once 'web/over/header.php'?>

<body style="text-align: center">

 <!-- menu -->

<?php require_once 'web/over/menuUsuario.php' ?>

<!-- pagina -->

</body>


<div class="jumbotron" style="height: 500px">
    <div class="row justify-content-center">
        <div class="col-lg-3">
        <center><img src="web/img/logo_2.png" style="width: 200px;margin: 10px"></center>
        <h4><center>Ingresar paquete</center></h4>
        <br>
        <!-- formulario -->

         <form action="core/controllers/ingresoBodegaController.php" method="post">

            <div class="form-group">
              <input type="text" class="form-control" placeholder="Ingrese numero del paquete" name="num_paquete" autofocus required>
              <input type="hidden" name="ubicacion" value="ingresado a bodega colombia">
            </div>
            <button type="submit" class="btn btn-primary" name="btn-ingreso">Guardar</button>
            </form>
            <br>
            Codigo: <?php echo $v = (isset($_GET['num_paquete'])) ? $_GET['num_paquete'] : ''?>

        </div>
    </div>
</div>
</html>
