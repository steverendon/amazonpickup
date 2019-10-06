<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
    <body onload="imprimir();">
        <center><img src="web/img/logo_2.png" style="width: 150px"></center>
          <br>
               <h4><center>Ficha de envio <i class="fas fa-print" style="color: silver"></i></center></h4>
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
              <center><?php generarCodigoBarras($_GET['paquete'])?></center>
    </body>
</html>
