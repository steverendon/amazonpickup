<?php require_once 'web/over/header.php'?>

<body style="text-align: center">

 <!-- menu -->

<?php require_once 'web/over/menuCliente.php' ?>

    <!-- cuerpo pagina -->

    <div class="row">
        <div class="col-lg-4">
            <img class="img-fluid" src="web/img/mis-membresias/titulo.png" style="width: 1200px;height:120px">
        </div>
    </div>
    <div class="jumbotron">

        <div class="row">

            <?php verMembresia($conexion,$id) ?>

        </div>

    </div>

<?php require_once 'web/over/footer.php' ?>

   </body>
</html>
