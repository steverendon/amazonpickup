<?php require_once 'web/over/header.php'?>

<body style="text-align: center">

 <!-- menu -->

<?php require_once 'web/over/menuCliente.php' ?>

    <!-- Contenedor -->
<div class="col-lg-4">
    <img class="img-fluid" src="web/img/ubicacion/ubicacion.png" style="width: 1200px">
</div>
<div class="jumbotron">
<div class="card">
  <div class="card-body">
      <div class="container mt-5 mb-5">
      	<div class="row">
      		<div class="col-md-6 offset-md-3">
      			<h4>Ubicacion</h4>
      			<ul class="timeline">
                      <?php echo verLinea($conexion,$id_envio) ?>
      			</ul>
      		</div>
      	</div>
      </div>
  </div>
</div>
</div>

<?php require_once 'web/over/footer.php' ?>

</body>
</html>


</body>
</html>
