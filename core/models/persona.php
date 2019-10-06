<?php

#require_once 'envio.php';

function ingresarRegistro($mysql,$v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8)
{
    $consulta = "INSERT INTO personas(num_doc,nombre,telefono,correo,contrasena,departamento,
    ciudad,direccion) VALUES (?,?,?,?,?,?,?,?)";
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param("ssssssss", $num_doc,$nombre,$telefono,$correo,$contrasena,$departamento,$ciudad,$direccion);
    $num_doc = $mysql->real_escape_string($v1);
    $nombre = $mysql->real_escape_string($v2);
    $telefono = $mysql->real_escape_string($v3);
    $correo = $mysql->real_escape_string($v4);
    $contrasena = $mysql->real_escape_string($v5);
    $departamento = $mysql->real_escape_string($v6);
    $ciudad = $mysql->real_escape_string($v7);
    $direccion = $mysql->real_escape_string($v8);

    $sentencia->execute();
    $sentencia->close();
}

function actualizarRegistro($mysql,$v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8)
{
    $consulta = "UPDATE personas SET num_doc = ?,nombre = ?,telefono = ?,correo = ?,departamento = ?,
    ciudad = ?,direccion = ? WHERE id = ?";
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param("ssssssss", $num_doc,$nombre,$telefono,$correo,$departamento,$ciudad,$direccion,$id);
    $num_doc = $mysql->real_escape_string($v1);
    $nombre = $mysql->real_escape_string($v2);
    $telefono = $mysql->real_escape_string($v3);
    $correo = $mysql->real_escape_string($v4);
    $departamento = $mysql->real_escape_string($v5);
    $ciudad = $mysql->real_escape_string($v6);
    $direccion = $mysql->real_escape_string($v7);
    $id = $mysql->real_escape_string($v8);

    $sentencia->execute();
    $sentencia->close();
}

function login2($mysql,$v1,$v2)
{
    $correo = $mysql->real_escape_string($v1);
    $contrasena = $mysql->real_escape_string($v2);
    $consulta = $mysql->query("SELECT * FROM personas WHERE correo = '$correo' AND contrasena = '$contrasena'");
    $result = $consulta->num_rows;
    if($result>0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function login($mysql,$v1,$v2)
{
    $correo = $mysql->real_escape_string($v1);
    $contrasena = $mysql->real_escape_string($v2);
    $consulta = "SELECT * FROM personas WHERE correo = ? AND contrasena = ?";
    $sentencia = $mysql->stmt_init();
    $sentencia->prepare($consulta);
    $sentencia->bind_param("ss",$correo,$contrasena);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $num = $resultado->num_rows;

    if($num>0)
    {
        session_start();
        $d = $resultado->fetch_array(MYSQLI_NUM);
        $_SESSION['id'] = $d[0];
        $_SESSION['num_doc'] = $d[1];
        $_SESSION['nombre'] = $d[2];
        $_SESSION['telefono'] = $d[3];
        $_SESSION['correo'] = $d[4];
        $_SESSION['departamento'] = $d[6];
        $_SESSION['ciudad'] = $d[7];
        $_SESSION['direccion'] = $d[8];
        return true;
    }
    else
    {
        return false;
    }
}

function preActualizar($mysql,$v1,$v2)
{
    $id = $mysql->real_escape_string($v1);
    $contrasena = $mysql->real_escape_string($v2);
    $consulta = "SELECT * FROM personas WHERE id = ? AND contrasena = ?";
    $sentencia = $mysql->stmt_init();
    $sentencia->prepare($consulta);
    $sentencia->bind_param("is",$id,$contrasena);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $num = $resultado->num_rows;

    if($num>0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function verCorreo($mysql,$c,$d,$t)
{
    $correo = $mysql->real_escape_string($c);
    $num_doc = $mysql->real_escape_string($d);
    $telefono = $mysql->real_escape_string($t);
    $consulta = "SELECT * FROM personas WHERE correo = ? OR num_doc = ? OR telefono = ?";
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param('sss',$correo, $num_doc, $telefono);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $num = $resultado->num_rows;
    if($num>0)
    {
        return false;
    }
    else
    {
        return true;
    }
    $sentencia->close();
    $mysql->close();

}

function infoCliente($mysql,$v1){
    $correo = $mysql->real_escape_string($v1);
    $consulta = "SELECT * FROM personas WHERE id = ?";
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param('s',$correo);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $r = $resultado->fetch_array(MYSQLI_NUM);
    return $r;
}

function IdCliente($mysql,$v1){
    $correo = $mysql->real_escape_string($v1);
    $consulta = "SELECT id FROM personas WHERE correo = ?";
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param('s',$correo);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $r = $resultado->fetch_array(MYSQLI_NUM);
    return $r[0];
}

function dataId($mysql,$v1){
    $correo = $mysql->real_escape_string($v1);
    $consulta = "SELECT * FROM personas WHERE correo = ?";
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param('s',$correo);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $r = $resultado->fetch_array(MYSQLI_NUM);
    return $r;
}

function verMembresia($mysql,$id){
    $consulta = "SELECT * FROM membresias WHERE id_cliente = ? AND fin > CURRENT_DATE";
    $sentencia = $mysql->stmt_init();
    $sentencia->prepare($consulta);
    $sentencia->bind_param("i",$id);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    if($resultado->num_rows!=0)
    {
        while($r = $resultado->fetch_array(MYSQLI_NUM))
        {
            echo '
                    <div class="col-lg-4">
                    <div class="card margen">
                    <div class="card-body">
                    <h4>'.$r[2].'</h4>
                    <div class="row justify-content-center">
                    <div class="col-lg-4">
                    <img src="web/img/preguntas-frecuentes/tarjeta-17.png" class="img-preguntas">
                    </div>
                    <div class="col-lg-8 contenido">
                    <p style="margin: 15px"><b>Fecha Ven:</b>' .$r[4].'</p>
                    <p style="margin: 15px"><b>Envios:</b> '.$r[5].'/'.$r[6].'</p>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                ';
        }
    }
    else
    {
        echo '
                <div class="col-lg-4">
                <div class="card margen">
                <div class="card-body">
                <h4>(0) Membresías</h4>
                <div class="row justify-content-center">
                </div>
                </div>
                </div>
                </div>
            ';
    }
}
function verEnvios($mysql,$id){
    $consulta = "SELECT * FROM envios WHERE id_cliente = ?";
    $sentencia = $mysql->stmt_init();
    $sentencia->prepare($consulta);
    $sentencia->bind_param("i",$id);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    if($resultado->num_rows!=0)
    {
        while($r = $resultado->fetch_array(MYSQLI_NUM))
        {
            echo '
                    <p class="card-text"><b>Codigo: </b>'.$r[0].'<b> Creado: </b>'.$r[6]. '<b> Descripcion: </b>'.$r[4]. ' <a href="index.php?view=misPedidos&id='.$r[0].'"> <button class="boton">Ver</button></a></p>
                ';
        }
    }
    else
    {
        echo '
                <p class="card-text">Sin pedidos</p>
            ';
    }

}

function verLinea($mysql,$v1){
    $id_envio = $mysql->real_escape_string($v1);
    $consulta = "SELECT * FROM ubicacion WHERE id_envio = ?";
    $sentencia = $mysql->stmt_init();
    $sentencia->prepare($consulta);
    $sentencia->bind_param("i",$id_envio);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $r = $resultado->fetch_array(MYSQLI_NUM);

    echo '
            <li>'.$r[2].' - '.$r[5].'</li>
         ';
    if($r[4] != 'N/A')
    {
        echo 'Numero de Guia: '.$r[4];
    }
}

function resultSet($mysql,$id){
    $consulta = "SELECT * FROM personas WHERE id = ?";
    $sentencia = $mysql->stmt_init();
    $sentencia->prepare($consulta);
    $sentencia->bind_param("i",$id);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $r = $resultado->fetch_array(MYSQLI_NUM);
    return $r;
}

function mostrarUsuarios($mysql,$id){
    $consulta = "SELECT * FROM personas WHERE id = ? OR num_doc = ?";
    $sentencia = $mysql->stmt_init();
    $sentencia->prepare($consulta);
    $sentencia->bind_param("ss",$id,$id);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $r = $resultado->fetch_array(MYSQLI_NUM);
    echo '
        <td>'.$r[0].'</td>
        <td>'.$r[1].'</td>
        <td>'.$r[2].'</td>
        <td>'.$r[3].'</td>
        <td>'.$r[4].'</td>
        <td>'.$r[6].'</td>
        <td>'.$r[7].'</td>
        <td>'.$r[8].'</td>
        <td><a href="index.php?view=verUsuario&accion=descripcion&id='.$r[0].'">Ver</td>
    ';
}

function num_usuarios($mysql){
    $consulta = $mysql->query("SELECT COUNT(id) FROM personas");
    $r = $consulta->fetch_array();
    return $r[0];
}

function recuperar_pass($mysql,$v1,$v2)
{
    $consulta = "UPDATE personas SET res = ? WHERE correo = ?";
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param("ss", $cod,$correo);
    $cod = $mysql->real_escape_string($v1);
    $correo = $mysql->real_escape_string($v2);
    if($sentencia->execute())
    {
        $mensaje = "<body>
                    <img src='https://www.amazonprime.com.co/web/img/logo_email.png'>
                    <hr>
                    <p>Hola, has solicitado actualizar tu clave, haz click en el siguiente enlace para restablecer tu clave.</p>
                    <a href='www.amazonprime.com.co/index.php?view=restablecerPass&cod=".$cod."&correo=".$correo."'>Restablecer contraseña</a>
                    <p>O copia y pega el siguiente link en tu navegador:</p>
                    <p>www.amazonprime.com.co/index.php?view=restablecerPass&cod=".$cod."&correo=".$correo."</p>
                    <p>Si ignoras este mensaje no pasará nada y podras usar tu clave actual, si no fuiste tu quien solicito el cambio de clave comunicate con nosotros</p>
                    </body>";


        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

        mail($correo, 'Restablecer password', $mensaje, $headers);

        $data = dataId($mysql,$correo);

        $txt = "Hola, has solicitado actualizar tu clave de amazon prime Colombia, haz click en el siguiente enlace para restablecer tu clave.
        www.amazonprime.com.co/index.php?view=restablecerPass&cod=".$cod."&correo=".$correo;

        enviarMsj($data[3],$txt);
        return true;
    }
    else
    {
        return false;
    }
    $sentencia->close();
}

function restablecer_pass($mysql,$v1,$v2){
    $consulta = "UPDATE personas SET contrasena = ? WHERE res = ?";
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param("ss", $pass,$cod);
    $pass = $mysql->real_escape_string($v1);
    $cod = $mysql->real_escape_string($v2);
    if($sentencia->execute())
    {
        return true;
    }
    else
    {
        return false;
    }
}

function actualizar_pass($mysql,$v1,$v2){
    $consulta = "UPDATE personas SET contrasena = ? WHERE id = ?";
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param("ss", $pass,$id);
    $pass = $mysql->real_escape_string($v1);
    $id = $mysql->real_escape_string($v2);
    if($sentencia->execute())
    {
        return true;
    }
    else
    {
        return false;
    }
}

function verPedidosUsuario($mysql,$id){
    $consulta = "SELECT *, date(fecha) FROM envios WHERE id_cliente = ? ORDER BY fecha DESC";
    $sentencia = $mysql->stmt_init();
    $sentencia->prepare($consulta);
    $sentencia->bind_param("i",$id);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    if($resultado->num_rows!=0)
    {
        while($r = $resultado->fetch_array(MYSQLI_NUM))
        {
            echo
            '<tr>
                <td><a href="index.php?view=ingresarPaquete&accion=guia&paquete='.$r[0].'">'.$r[0].'</a></td>
                <td>'.$r[2].' Lbs</td>
                <td>'.$r[3].'</td>
                <td>'.$r[4].'</td>
                <td>'.$r[5].'</td>
                <td>'.$r[7].'</td>
            </tr>';
        }
    }
    else
    {
        echo '

                <h4>Sin envios</h4>

            ';
    }
}

?>
