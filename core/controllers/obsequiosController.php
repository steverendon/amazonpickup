<?php

session_start();

if(isset($_SESSION['id']) )
{
    if($_SESSION['rol'] != 4)
    {
        echo 'Sin permisos';
        die();
    }
}
else
{
    echo 'Sin permisos';
    session_destroy();
    die();
}

if(isset($_GET['view']))
{
    require_once 'web/templates/membresias/obsequiosView.php';
}

if(isset($_POST['btn-ingreso']))
{

    require_once '../conexion.php';
    require_once '../models/membresia.php';
    require_once '../models/envio.php';
    require_once '../models/persona.php';

    $envios = 3;
    $id = $_POST['id'];
    $membresia = $_POST['membresia'];

    if($membresia == 'PRIME')
    {
        $envios = 3;
    }
    elseif ($membresia == 'PLUS')
    {
        $envios = 7;
    }
    elseif ($membresia == 'EMPRESARIAL')
    {
        $envios = 72;
    }

    $datos = infoCliente($conexion,$id);

    $intervalo = 1;
    $correo = $datos[4];
    $telefono = $datos[3];

    comprarMembresia($conexion,$id,$membresia,$envios,$intervalo);

    /*$mensaje = "Confirmamos la carga de tu membresía ".$membresia." de obsequio. en el siguiente enlace puedes ver los pasos necesarios para empezar a disfrutar tu membresía.<br><br>
    <a href='http://www.amazonprime.com.co/infografia.php'>Como usar nuestras membresías, click aquí.</a>";*/

    $mensaje = "<body>
                    <img src='https://www.amazonprime.com.co/web/img/logo_email.png'>
                    <hr>
                    <p>Confirmamos la carga de tu membresía ".$membresia." de obsequio, en el siguiente<br> enlace puedes ver los pasos necesarios para empezar a usar tu membresía.</p>
                    <a href='http://www.amazonprime.com.co/infografia.php'>Como usar nuestras membresías</a>
                    <p>Gracias por ser parte de amazonprime.com.co</p>
                </body>";

    $txt = "Confirmamos la carga de tu membresía ".$membresia." de obsequio, en el siguiente enlace puedes ver los pasos necesarios para empezar a usar tu membresía.
    www.amazonprime.com.co/infografia.php'";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    mail($correo, 'Como usar amazonprime.com.co', $mensaje,$headers);

    enviarMsj($telefono,$txt);

    header("location:../../index.php?view=obsequios&mensaje=Membresia cargada");
}

?>
