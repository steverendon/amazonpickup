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

         <form action="core/controllers/recibirCajaController.php" method="post">

            <div class="form-group">
              <label class="col-form-label" for="inputDefault">Escanear código caja recibida</label>
              <input type="search" class="form-control" placeholder="Escanear codigo" name="cod_caja" autofocus required>
            </div>
            <button type="submit" class="btn btn-primary" name="btn-recibir">Buscar</button>

            </form>
            <br>
            Codigo: <?php echo $v = (isset($_GET['mensaje'])) ? $_GET['mensaje'] : ''?>
        </div>
    </div>
</div>
</html>
