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
    require_once 'web/templates/personas/misMembresiasView.php';
}

 ?>
