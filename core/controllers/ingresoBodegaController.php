<?php

session_start();

if(isset($_SESSION['id']) )
{
    if($_SESSION['rol'] != 2 && $_SESSION['rol'] != 4)
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
    require_once 'web/templates/ubicacion/ingresoBodegaView.php';
}

if(isset($_POST['btn-ingreso']))
{
    require_once '../models/envio.php';
    require_once '../models/ubicacion.php';
    require_once '../conexion.php';

    $ubicacion = $_POST['ubicacion'];
    $num_paquete = $_POST['num_paquete'];
    $operador = $_SESSION['nombre'];
    $guia = 'N/A';
    $telefono = telefonoCliente($conexion,$num_paquete);
    $msj = 'Tu pedido ya se encuentra en nuestras bodegas de colombia AmazonPrime.com.co';
    #enviarMsj($telefono,$msj);
    $insert = ubicacion($conexion,$num_paquete,$ubicacion,$operador,$guia);

    if($insert)
    {
        header("location:../../index.php?view=ingresoBodega&num_paquete=$num_paquete");
    }
    else
    {
        echo 'error';
    }
}

 ?>
