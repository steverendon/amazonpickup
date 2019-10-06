<?php

session_start();

if(isset($_GET['view']))
{
    require_once 'core/conexion.php';
    require_once 'core/models/ubicacion.php';
    $num_paquete = $_GET['num_paquete'];
    require_once 'web/templates/ubicacion/ingresarUbicacionView.php';
}

 ?>
