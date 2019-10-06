<?php require_once 'web/over/header.php'?>

<body style="text-align: center">

 <!-- menu -->

<?php require_once 'web/over/menuUsuario.php' ?>

<!-- pagina -->

</body>


<div class="jumbotron" style="height: 500px">
    <div class="row justify-content-center">
        <div class="col-lg-3">
        <!--<center><img src="web/img/logo_2.png" style="width: 200px;margin: 10px"></center>-->
        <h4><center>Ingresar paquete</center></h4>

        <!-- formulario -->

         <form action="core/controllers/ingresarPaqueteController.php" method="post">

            <div class="form-group">
              <label class="col-form-label" for="inputDefault">Código cliente</label>
              <input type="text" class="form-control" placeholder="Ej: 001" id="inputDefault" name="id" required>
            </div>
            <div class="form-group">
              <label for="exampleSelect1">Peso</label>
              <select class="form-control" id="exampleSelect1" name="libras" required>
                <option disabled>Peso</option>
                <option value="1">1 libra</option>
                <option value="2">2 libra</option>
                <option value="3">3 libra</option>
                <option value="4">4 libra</option>
                <option value="5">5 libra</option>
                <option value="6">6 libra</option>
                <option value="7">7 libra</option>
                <option value="8">8 libra</option>
                <option value="9">9 libra</option>
                <option value="10">10 libra</option>
              </select>
            </div>
            <div class="form-group">
              <label class="col-form-label" for="inputDefault">Descripción (Maximo 100 caracteres)</label>
              <input type="text" class="form-control" placeholder="Descripción del producto" id="inputDefault" name="descripcion" maxlength="100" required>
            </div>
            <div class="form-group">
              <label class="col-form-label" for="inputDefault">Código de caja</label>
              <input type="text" class="form-control" placeholder="Código de caja" id="inputDefault" name="caja" required>
            </div>
            <button type="submit" class="btn btn-primary" name="btn-ingresarPaquete">Continuar</button>

            </form>

        </div>
    </div>
</div>
</html>
