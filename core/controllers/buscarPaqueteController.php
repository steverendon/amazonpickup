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
    require_once 'web/templates/ubicacion/buscarPaqueteView.php';
}

 ?>
