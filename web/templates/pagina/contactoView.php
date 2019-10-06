<?php require_once 'web/over/header.php'?>

<body style="text-align: center">

 <!-- menu -->

<?php require_once 'web/over/menuCliente.php' ?>

    <!-- Contenedor -->
<div class="col-lg-4">
    <img class="img-fluid" src="web/img/contacto/contacto-13.png" style="width: 1200px">
</div>

<div class="fondo-preguntas">

<div class="card">
    <div class="card-body">

    <p class="text-info" style="margin:10px"><?php echo $v = (isset($_GET['mensaje'])) ? $_GET['mensaje'] : ''?></p>

    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card mb-3">
              <div class="card-body" style="text-align:left">
                <center><p style="font-weight:700">¿Tienes alguna duda o quieres más información? Escríbenos, podemos ayudarte.</p></center>
             </div>
         </div>
     </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card mb-3">
              <div class="card-body" style="text-align:left">

                  <!-- inicio formulario -->
                  <form action="core/controllers/enviarCorreoController.php" method="post">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombres y apellidos</label>
                        <input type="text" class="form-control" id="inputEmail4" name="nombre">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Correo electrónico</label>
                        <input type="email" class="form-control" id="inputPassword4" name="correo">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Teléfono</label>
                        <input type="text" class="form-control" id="inputEmail4" name="telefono">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Ciudad</label>
                        <input type="text" class="form-control" id="inputPassword4" name="ciudad">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Comentarios</label>
                        <textarea class="form-control" id="inputAddress" name="mensaje"></textarea>
                    </div>
                    <button type="submit" class="boton" name="p">Enviar</button>
                  </form>

                  <!-- fin formulario -->

              </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card mb-3">
              <div class="card-body" style="text-align:left">
                  <center><p style="font-weight:700">¿Quieres que te llamemos?</p></center>
             </div>
         </div>
     </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card mb-3">
              <div class="card-body" style="text-align:left">

                  <!-- inicio formulario -->
                  <form action="core/controllers/enviarCorreoController.php" method="post">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputEmail4">Asunto</label>
                        <input type="text" class="form-control" id="" name="asunto">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputEmail4">Ciudad</label>
                        <input type="text" class="form-control" id="" name="ciudad">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputPassword4">Teléfono</label>
                        <input type="text" class="form-control" id="" name="telefono">
                      </div>
                    </div>
                    <button type="submit" class="boton" name="p1">Llámame</button>
                    <br>
                    <br>
                    <p style="margin:5px">Da click al botón ¨Llámame¨ y nos comunicaremos contigo inmediatamente.<br>
                    O llámanos a nuestro número de contacto.<br>
                    Preferimos llamarte; pero si lo deseas, puedes comunicarte con nosotros. Ten en cuenta que<br> si nos llamas tendremos que realizar  una serie de preguntas para acreditar tu identidad.<br>Línea gratuita: 01-800-518-5196</p>
                  </form>

                  <!-- fin formulario -->

              </div>
            </div>
        </div>
    </div>

</div>

</div>
</div>

<?php require_once 'web/over/footerCliente.php' ?>


</body>
</html>
