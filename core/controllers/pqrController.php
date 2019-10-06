<?php
session_start();

if(isset($_GET['view']))
{
    if(isset($_GET['accion']) && $_GET['accion'] == 'buscar')
    {
        require_once 'core/conexion.php';
        require_once 'core/models/pqr.php';
        require_once 'web/templates/pqr/buscarPqrView.php';
    }
    else if(isset($_GET['accion']) && $_GET['accion'] == 'detalle')
    {
        require_once 'core/conexion.php';
        require_once 'core/models/pqr.php';
        require_once 'web/templates/pqr/detalleRadicadoView.php';
    }
    else
    {
        require_once 'core/conexion.php';
        require_once 'core/models/pqr.php';
        require_once 'web/templates/pqr/pqrView.php';
    }

}

if(isset($_POST['btn-ingresar']))
{
    require_once '../conexion.php';
    require '../models/pqr.php';

    $tipo = $_POST['tipo'];
    $nombre = $_POST['nombre'];
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $cedula = $_POST['cedula'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];

    $s = ingresarPqr($conexion,$tipo,$nombre,$titulo,$texto,$cedula,$celular,$correo);
    if($s != 0){
        header("location:../../index.php?view=pqr&radicado=NUMERO DE RADICADO: $s");
    }else{
        header("location:../../index.php?view=pqr&radicado='ERROR AL GUARDAR LA INFORMACION'");
    }
}

if(isset($_POST['btn-actualizar']))
{
    require_once '../conexion.php';
    require '../models/pqr.php';

    $radicado = $_POST['radicado'];
    $txt = $_POST['txt'];


    $s = responderPqr($conexion,$radicado,$txt,$_SESSION['nombre']);
    if($s){
        header("location:../../index.php?view=pqr&accion=detalle&radicado=$radicado");
    }else{
        echo 'error';
    }
}

?>
