<?php

if(isset($_GET['view']))
{
    require_once 'web/templates/personas/loginView.php';
}

if(isset($_POST['btn-login']))
{
    require '../conexion.php';
    require '../models/persona.php';

    $correo = $_POST['correo'];
    $contrasena = md5($_POST['contrasena']);

    if(login($conexion,$correo,$contrasena))
    {
        #session_start();
        #$_SESSION['correo'] = $correo;
        header("location:../../index.php?view=inicio");
    }
    else
    {
        header("location:../../index.php?view=login&mensaje=Error, verifique sus credenciales");
    }
}

?>
