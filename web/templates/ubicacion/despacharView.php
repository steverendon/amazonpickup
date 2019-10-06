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
        <h4><center>Despacho por transportadora</center></h4>
        <br>
        <!-- formulario -->

         <form action="core/controllers/despacharController.php" method="post">

            <div class="form-group">
              <input type="text" class="form-control" placeholder="Ingrese numero del paquete" name="num_paquete" autofocus required>
              <input type="hidden" name="ubicacion" value="Despachado por transportadora">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Numero de guia" name="num_guia" autofocus required>
            </div>
            <button type="submit" class="btn btn-primary" name="btn-ingreso">Guardar</button>
            </form>
            <br>
            <?php echo $v = (isset($_GET['mensaje'])) ? $_GET['mensaje'] : ''?>

        </div>
    </div>
</div>
</html>
