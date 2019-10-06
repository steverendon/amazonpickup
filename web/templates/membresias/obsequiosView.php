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
        <h4><center>Cargar membresias</center></h4>
        <br>
        <!-- formulario -->

         <form action="core/controllers/obsequiosController.php" method="post" style="text-align:left">

            <div class="form-group">
              <input type="text" class="form-control" placeholder="Id cliente" name="id" autofocus required>
            </div>
            <div class="form-group">
              <select class="form-control" name="membresia">
                <option value="PRIME">PRIME</option>
                <option value="PLUS">PLUS</option>
                <option value="EMPRESARIAL">EMPRESARIAL</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary" name="btn-ingreso">Cargar</button>
            </form>
            <br>
            <?php echo $v = (isset($_GET['mensaje'])) ? $_GET['mensaje'] : ''?>

        </div>
    </div>
</div>
</html>
