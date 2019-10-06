<?php

if(isset($_GET['view']))
{
    switch ($_GET['v']) {
        case 'ayuda':
            require_once 'web/templates/visitante/ayudaView.php';
            break;
        case 'devoluciones':
            require_once 'web/templates/visitante/devolucionesView.php';
            break;
        case 'contacto':
            require_once 'web/templates/visitante/contactoView.php';
            break;
        case 'planes':
            require_once 'web/templates/visitante/preciosView.php';
            break;
        default:
            require_once 'web/templates/personas/inicioView.php';
            break;
    }
}

 ?>
