<?php require_once 'web/over/header.php'?>

<body style="text-align: center">

 <!-- menu -->

<?php require_once 'web/over/menuUsuario.php' ?>

<!-- pagina -->

<div style="padding:150px">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                   <h4><center>COD. Caja <a href="index.php?view=imprimirCaja&codigo=<?php echo $cod_caja ?>"><i class="fas fa-print" style="color: silver"></i></a></center></h4>
                    <?php generarCodigoBarras($cod_caja)?>
              </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
