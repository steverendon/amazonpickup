<?php

if(isset($_GET['view']))
{
    if(isset($_GET['v']))
    {
        require_once 'web/templates/personas/formularioRestablecerView.php';
    }
    else
    {
        require_once 'web/templates/personas/restablecerPassView.php';
    }
}

if(isset($_POST['btn-res']))
{
    require_once '../conexion.php';
    require_once '../models/persona.php';

    $cod = $_POST['cod'];
    $pass = md5($_POST['pass']);
    $correo = $_POST['correo'];

    if(restablecer_pass($conexion,$pass,$cod))
    {
        if(login($conexion,$correo,$pass))
        {

            header("location:../../index.php?view=inicio");

        }else{

            header("location:../../index.php?view=restablecerPass&mensaje=Error intentalo nuevamente");
        }
    }
}


if(isset($_POST['btn-restablecer']))
{
    require '../conexion.php';
    require '../models/envio.php';
    require '../models/persona.php';

    $correo = $_POST['correo'];
    $cod = md5(date("YmdHis"));

    $s = recuperar_pass($conexion,$cod,$correo);

    if($s)
    {
        header("location:../../index.php?view=restablecerPass&v=v&mensaje=Hemos enviado a ".$correo." un link para restablcer tu contraseña");
    }
    else
    {
        header("location:../../index.php?view=login");
    }
}

?>
