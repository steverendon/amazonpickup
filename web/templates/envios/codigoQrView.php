<?php require_once 'web/over/header.php'?>

<body style="text-align: center">

 <!-- menu -->

<?php require_once 'web/over/menuUsuario.php' ?>

<!-- pagina -->

</body>


<div class="jumbotron" style="height-min:500px">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card">
              <div class="card-body">
                  <center><img src="web/img/logo_2.png" style="width: 150px"></center>
                  <br>
                  <div class="row justify-content-center">
                    <div class="col-lg-12">
                       <h4><center>Ficha de envio <a href="index.php?view=imprimirFicha&codigo=<?php echo $_GET['codigo']?>&paquete=<?php echo $_GET['paquete'] ?>"><i class="fas fa-print" style="color: silver"></i></a></center></h4>
                       <center>
                       <table>
                            <tr>
                                <td>
                                    <b>Amazon Prime</b><br>
                                    502 palm st ste 1<br>
                                    west palm beach fl 33401 - 7044
                                </td>
                            </tr>
                            <tr>
                                <?php datosCliente($conexion,$_GET['paquete']) ?>
                            </tr>
                       </table>
                   </center>
                      <!--<center><img src="codigos/<?php #echo $_GET['codigo'] ?>" style="width: 300px"></center>-->
                      <?php generarCodigoBarras($_GET['paquete'])?>
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>
</html>
