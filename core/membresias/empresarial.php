<?php

require_once '../conexion.php';
require_once '../models/membresia.php';
require_once '../models/envio.php';

session_start();
$id = $_SESSION['id'];
$membresia = 'PRIME EMPRESARIAL';
$envios = 72;
$intervalo =  1;
$correo = $_SESSION['correo'];
$telefono = $_SESSION['telefono'];

comprarMembresia($conexion,$id,$membresia,$envios,$intervalo);

/*$mensaje = "Confirmamos la compra de tu membresía ".$membresia.", en el siguiente enlace puedes ver los pasos necesarios para empezar a usar tu membresía.<br><br>
<a href='http://www.amazonprime.com.co/infografia.php'>Como usar nuestras membresías, click aquí.</a>";*/

$mensaje = "<body>
                <img src='https://www.amazonprime.com.co/web/img/logo_email.png'>
                <hr>
                <p>Confirmamos la compra de tu membresía ".$membresia.", en el siguiente<br> enlace puedes ver los pasos necesarios para empezar a disfrutar tu membresía.</p>
                <a href='http://www.amazonprime.com.co/infografia.php'>Como usar nuestras membresías</a>
                <p>Gracias por ser parte de amazonprime.com.co</p>
            </body>";

$txt = "Confirmamos la compra de tu membresía ".$membresia.", en el siguiente enlace puedes ver los pasos necesarios para empezar a usar tu membresía.
www.amazonprime.com.co/infografia.php'";

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

mail($correo, 'Como usar amazonprime.com.co', $mensaje,$headers);

enviarMsj($telefono,$txt);

header("location:../../index.php?view=misMembresias");

?>
