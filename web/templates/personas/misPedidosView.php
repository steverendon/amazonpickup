<?php require_once 'web/over/header.php'?>

<body style="text-align: center">

 <!-- menu -->

<?php require_once 'web/over/menuCliente.php' ?>

<div class="col-lg-4">
    <img class="img-fluid" src="web/img/pedidos/pedidos-16.png" style="width: 1200px;height:120px">
</div>
<div class="jumbotron">
<div class="row justify-content-center">
    <div class="col-lg-8">
    <div class="card border-light mb-3">
      <div class="card-header">Mis pedidos</div>
      <div class="card-body">
          <?php verEnvios($conexion,$id) ?>
      </div>

      </div>
   </div>
</div>
</div>

<?php require_once 'web/over/footer.php' ?>

</body>
</html>
