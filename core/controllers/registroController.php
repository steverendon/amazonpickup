<?php

if(isset($_GET['view']))
{
    require_once 'web/templates/personas/registroView.php';
}

if(isset($_POST['btn-registro']) && $_POST['nombre'] != '' && $_POST['contrasena'] != '')
{
    require '../conexion.php';
    require '../models/persona.php';
    require '../models/envio.php';

    if(verCorreo($conexion,$_POST['correo'],$_POST['num_doc'],$_POST['telefono']))
    {
        $num_doc = $_POST['num_doc'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $contrasena = md5($_POST['contrasena']);
        $departamento = $_POST['departamento'];
        $ciudad = $_POST['ciudad'];
        $direccion = $_POST['direccion'];

        ingresarRegistro($conexion,$num_doc,$nombre,$telefono,$correo,$contrasena,$departamento,$ciudad,$direccion);

        $e = IdCliente($conexion,$correo);

        /*$mensaje = "Bienvenido a amazonprime.com.co, en el siguiente enlace puedes ver los pasos necesarios para empezar a usar tus membresías. tu código es: ".$e."<br><br>
        <a href='http://www.amazonprime.com.co/infografia.php'>Como usar nuestras membresías click aquí.</a>";*/

        $mensaje = "<body>
                        <img src='https://www.amazonprime.com.co/web/img/logo_email.png'>
                        <hr>
                        <p>Bienvenido a amazonprime.com.co, en el siguiente enlace puedes ver los pasos<br> necesarios para empezar a disfrutar tus membresías.</p>
                        <p>Tu número de usuario es:</p>
                        <p><b>".$e."</b></p>
                        <a href='http://www.amazonprime.com.co/infografia.php'>Como usar nuestras membresías click aquí.</a>
                        <p>Gracias por ser parte de amazonprime.com.co</p>
                    </body>";

        $titulo = 'amazonprime.com.co';

        $txt = "Tu registro fue exitoso, tu número de usuario amazonprime.com.co es ".$e;

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

        mail($correo,$titulo, 'Como usar amazonprime.com.co', $mensaje,$headers);

        enviarMsj($telefono,$txt);

        if(login($conexion,$correo,$contrasena))
        {
            #header("location:../../index.php?view=inicio");
            echo "<script LANGUAGE='JavaScript'>
                    window.alert('Registro exitoso. Puedes consultar tu número de usuario en tu correo electrónico');
                    window.location.href='../../index.php?view=inicio';
                  </script>";
        }else{
            echo 'error';
        }
    }
    else
    {
        header("location:../../index.php?view=registro&mensaje=El usuario ya está existe");
    }
}
else
{
    header("location:../../index.php?view=index");
}

 ?>
