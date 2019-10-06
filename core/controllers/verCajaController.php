<?php

session_start();

if(isset($_SESSION['id']))
{
    if(!isset($_SESSION['rol']))
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
    if(isset($_GET['view']) && isset($_GET['cod_caja']))
    {
        require_once 'core/models/caja.php';
        require_once 'core/conexion.php';
        require_once 'web/templates/caja/verCajaView.php';
    }
    else
    {
        require_once 'core/models/caja.php';
        require_once 'core/conexion.php';
        require_once 'web/templates/caja/buscarCajaView.php';
    }
}

if(isset($_POST['btn-guia']))
{
    require_once '../models/caja.php';
    require_once '../conexion.php';

    $guia = $_POST['guia'];
    $paquete = $_POST['paquete'];

    ingresarNumGuia($conexion,$guia,$paquete);

    header("location:../../index.php?view=verCaja");
}

?>
