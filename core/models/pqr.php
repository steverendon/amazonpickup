<?php

function ingresarPqr($mysql,$v1,$v2,$v3,$v4,$v5,$v6,$v7)
{
    $consulta = "INSERT INTO pqr (tipo,nombre,titulo,cedula,celular,correo)VALUES(?,?,?,?,?,?)";
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param("ssssss",$tipo,$nombre,$titulo,$cedula,$celular,$correo);
    $tipo = $mysql->real_escape_string($v1);
    $nombre = $mysql->real_escape_string($v2);
    $titulo = $mysql->real_escape_string($v3);
    $texto = $mysql->real_escape_string($v4);
    $cedula = $mysql->real_escape_string($v5);
    $celular = $mysql->real_escape_string($v6);
    $correo = $mysql->real_escape_string($v7);
    $radicado = mostrarRadicado($mysql)+1;
    if($sentencia->execute()){
        responderPqr($mysql,$radicado,$texto,$_SESSION['nombre']);
        return $radicado;
    }else{
        return 0;
    }
}

function mostrarRadicado($mysql)
{
    $consulta = $mysql->query("SELECT MAX(id) FROM pqr");
    $r = $consulta->fetch_array();
    $radicado = $r[0];
    return $radicado;
}

function imprimirPqr($mysql,$id)
{
    $consulta = "SELECT pqr.tipo, pqr.destinatario, pqr.titulo, pqr.texto, pqr.cliente,
    pqr.cedula, pqr.celular, pqr.correo, usuarios.nombre FROM pqr,usuarios
    WHERE pqr.destinatario= ? AND usuarios.id = pqr.remitente";
    $sentencia = $mysql->stmt_init();
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param("i",$id);
    $sentencia->get_result();
    $resultado = $sentencia->fetch_array(MYSQLI_NUM);
    echo '<p>'.$resultado[0].'</p>';
    echo '<p>'.$resultado[1].'</p>';
    echo '<p>'.$resultado[2].'</p>';
    echo '<p>'.$resultado[3].'</p>';
    echo '<p>'.$resultado[4].'</p>';
    echo '<p>'.$resultado[5].'</p>';
    echo '<p>'.$resultado[6].'</p>';
}

function mostrarPqr($mysql,$v1)
{
    $id = $mysql->real_escape_string($v1);
    $consulta = "SELECT * FROM pqr WHERE id = ? OR cedula = ?";
    $sentencia = $mysql->stmt_init();
    $sentencia->prepare($consulta);
    $sentencia->bind_param("ii",$id,$id);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    while($reg = $resultado->fetch_array(MYSQLI_NUM)){
        echo '
                <tr>
                  <td><a href="index.php?view=pqr&accion=detalle&radicado='.$reg[0].'">'.$reg[0].'</a></td>
                  <td>'.$reg[1].'</td>
                  <td>'.$reg[2].'</td>
                  <td>'.$reg[4].'</td>
                  <td>'.$reg[3].'</td>
                </tr>
            ';
    }

}

function responderPqr($mysql,$v1,$v2,$v3)
{
    $consulta = "INSERT INTO txt_pqr (radicado,txt,usuario)VALUES(?,?,?)";
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param("iss",$radicado,$txt,$usuario);
    $radicado = $mysql->real_escape_string($v1);
    $txt = $mysql->real_escape_string($v2);
    $usuario = $mysql->real_escape_string($v3);
    if($sentencia->execute()){
        return true;
    }else{
        return false;
    }
}

function cerrarPqr($mysql,$v1,$v2)
{
    $consulta = "UPDATE pqr SET estado = ? WHERE id = ?";
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param("ii", $estado,$id);
    $estado = $mysql->real_escape_string($v1);
    $id = $mysql->real_escape_string($v2);

    $sentencia->execute();
    $sentencia->close();
}

function visualizarTexto($mysql,$v1)
{
    $radicado = $mysql->real_escape_string($v1);
    $consulta = "SELECT *, date(fecha),hour(fecha)-5,minute(fecha) FROM txt_pqr WHERE radicado = ? ORDER BY fecha DESC";
    $sentencia = $mysql->stmt_init();
    $sentencia->prepare($consulta);
    $sentencia->bind_param("i",$radicado);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    while($reg = $resultado->fetch_array(MYSQLI_NUM))
    {
        echo '<div class="card"><div class="card-body">
        <p class="text-info">'.$reg[5].' '.$reg[6].':'.$reg[7].'</p>
        <p><b> Generado por: '.$reg[3].'</b></p>
        <p>'.$reg[2].'</p></div></div>';
    }
}
