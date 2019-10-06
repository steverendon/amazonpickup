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
    if(isset($_GET['id']) && $_GET['accion'] == 'tabla')
    {
        require_once 'core/models/persona.php';
        require_once 'core/conexion.php';
        $id = $_GET['id'];
        $num_usuarios = num_usuarios($conexion);
        require_once 'web/templates/personas/verUsuarioView.php';
    }
    else if(isset($_GET['id']) && $_GET['accion']=='descripcion')
    {
        require_once 'core/models/persona.php';
        require_once 'core/conexion.php';
        $id = $_GET['id'];
        $num_usuarios = num_usuarios($conexion);
        require_once 'web/templates/personas/descripcionUsuarioView.php';
    }
    else
    {
        require_once 'core/models/persona.php';
        require_once 'core/conexion.php';
        $num_usuarios = num_usuarios($conexion);
        require_once 'web/templates/personas/verUsuarioView.php';
    }
}

 ?>
