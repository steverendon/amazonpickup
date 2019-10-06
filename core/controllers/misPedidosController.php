<?php

session_start();

if(!isset($_SESSION['id']))
{
  session_destroy();
  header("location:index.php");
}

if(isset($_GET['view']))
{
    require 'core/conexion.php';
    require 'core/models/persona.php';
    $id = $_SESSION['id'];
    if(isset($_GET['id']))
    {
        $id_envio = $_GET['id'];
        require_once 'web/templates/personas/lineaTiempoView.php';
    }else{
        require_once 'web/templates/personas/misPedidosView.php';
    }
}

?>
