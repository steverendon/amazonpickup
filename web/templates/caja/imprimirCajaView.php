<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript">
            function imprimir() {
                if (window.print) {
                    window.print();
                } else {
                    alert("La función de impresion no esta soportada por su navegador.");
                }
            }
        </script>
    </head>
    <body onload="imprimir()">
        <center>
            <div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Codigo Caja</h4>
                            <?php generarCodigoBarras($_GET['codigo']) ?>
                            <center><a href="index.php?view=crearCaja"><img src="web/img/logo_2.png" style="width: 150px"></a></center>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
    </body>
</html>

<!-- pagina -->

</body>
</html>
