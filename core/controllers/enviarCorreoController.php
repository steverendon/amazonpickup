<?php

$destinatario = '';

if(isset($_POST['p']))
{
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];
    $mensaje = $_POST['mensaje'];

    $mensaje = "Nombre:".$nombre."\r\nCorreo:".$correo."\r\nTelefono:".$telefono."\r\nCiudad:".$ciudad."\r\nMensaje:".$mensaje."";

    // Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
    $mensaje = wordwrap($mensaje, 70, "\r\n");

    // Enviarlo
    mail($destinatario, 'Mensaje de pagina web', $mensaje);

    header("location:../../index.php?view=pagina&v=contacto&mensaje=Tu mensaje ha sido enviado");
}

if(isset($_POST['v']))
{
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];
    $msj = $_POST['mensaje'];

    $mensaje = "Nombre:".$nombre."\r\nCorreo:".$correo."\r\nTelefono:".$telefono."\r\nCiudad:".$ciudad."\r\nMensaje:".$msj."";

    // Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
    $mensaje = wordwrap($mensaje, 70, "\r\n");

    // Enviarlo
    mail($destinatario, 'Mensaje de pagina web', $mensaje);

    header("location:../../index.php?view=web&v=contacto&mensaje=Tu mensaje ha sido enviado");
}

if(isset($_POST['p1']))
{
    $asunto = $_POST['asunto'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];

    $mensaje = "CLIENTE SOLICITA LLAMADA.\r\n Asunto: ".$asunto."\r\nTelefono:".$telefono."\r\nCiudad:".$ciudad;

    mail($destinatario, 'SOLICITUD DE LLAMADA', $mensaje);

    header("location:../../index.php?view=pagina&v=contacto&mensaje=Tu mensaje ha sido enviado");
}

if(isset($_POST['v1']))
{
    $asunto = $_POST['asunto'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];

    $mensaje = "CLIENTE SOLICITA LLAMADA.\r\n Asunto: ".$asunto."\r\nTelefono:".$telefono."\r\nCiudad:".$ciudad;

    mail($destinatario, 'SOLICITUD DE LLAMADA', $mensaje);

    header("location:../../index.php?view=web&v=contacto&mensaje=Tu mensaje ha sido enviado");
}

 ?>
