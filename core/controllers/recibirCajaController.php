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
    require_once 'web/templates/caja/recibirCajaView.php';
}

if(isset($_POST['btn-recibir']))
{
    require_once '../conexion.php';
    require_once '../models/caja.php';
    $operador = $_SESSION['id'];
    $cod_caja = $_POST['cod_caja'];
    if(recibirCaja($conexion,$operador,$cod_caja))
    {
        header("location:../../index.php?view=recibirCaja&mensaje=$cod_caja");
    }
}

 ?>
