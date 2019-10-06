<?php

session_start();

if(!isset($_SESSION['id']))
{
  session_destroy();
  header("location:index.php");
}

if(isset($_GET['view']))
{
    switch ($_GET['v']) {
        case 'planes':
            require_once 'web/templates/pagina/preciosView.php';
            break;
        case 'ayuda':
            require_once 'web/templates/pagina/ayudaView.php';
            break;
        case 'devoluciones':
            require_once 'web/templates/pagina/devolucionesView.php';
            break;
        case 'contacto':
            require_once 'web/templates/pagina/contactoView.php';
            break;
        default:
            require_once 'web/templates/personas/inicioView.php';
            break;
    }
}


 ?>
