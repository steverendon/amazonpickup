<?php

session_start();

if(isset($_SESSION['id']) )
{
    if($_SESSION['rol'] != 1 && $_SESSION['rol'] != 4)
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
    if(isset($_GET['accion']) && $_GET['accion']=='crear')
    {
        require_once 'core/conexion.php';
        require_once 'core/models/caja.php';
        require_once 'core/models/envio.php';
        $cod_caja = generarCodigo(10);
        $remite = $_SESSION['id'];
        if(insertarCaja($conexion,$cod_caja,$remite) != 0)
        {
            require_once 'web/templates/caja/cajaView.php';
        }
    }
    else
    {
        require_once 'web/templates/caja/crearCajaView.php';
    }
}
