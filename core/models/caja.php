<?php

/*
function insertarCaja2($mysql,$v1,$v2){
    $consulta = "INSERT INTO cajas(cod_caja,remite)VALUES(?,?)";
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param("si",$cod_caja,$remite);
    $cod_caja = $mysql->real_escape_string($v1);
    $remite = $mysql->real_escape_string($v2);
    if($sentencia->execute())
    {
        return true;
    }
    else
    {
        return false;
    }
    $sentencia->close();
}
*/
function insertarCaja($mysql,$v1,$v2){
    $consulta = "INSERT INTO cajas(cod_caja,remite)VALUES(?,?)";
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param("si",$cod_caja,$remite);
    $cod_caja = $mysql->real_escape_string($v1);
    $remite = $mysql->real_escape_string($v2);
    if($sentencia->execute())
    {
        $con = $mysql->query("SELECT MAX(id) FROM cajas");
        $result = $con->fetch_array();
        return $result[0];
    }
    else
    {
        return 0;
    }
    $sentencia->close();
}

function verCaja($mysql,$v1){
    $consulta = "SELECT envios.descripcion,envios.id_cliente,envios.num_libras,envios.fecha,usuarios.nombre FROM envios,usuarios WHERE envios.cod_caja = ? AND usuarios.id = envios.operador";
    $sentencia = $mysql->stmt_init();
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param("s",$cod_caja);
    $cod_caja = $mysql->real_escape_string($v1);
    $x=1;
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    while($reg = $resultado->fetch_array(MYSQLI_NUM))
    {
        echo '<tr>';
        echo '<td>'.$x++.'</td>';
        echo '<td>'.$reg[0].'</td>';
        echo '<td>'.$reg[1].'</td>';
        echo '<td>'.$reg[2].' Lbs</td>';
        echo '<td>'.$reg[3].'</td>';
        echo '<td>'.$reg[4].'</td>';
        echo '</tr>';
    }
}

function estado($mysql,$v1){
    $consulta = "SELECT receptor FROM cajas WHERE cod_caja = ?";
    $sentencia = $mysql->stmt_init();
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param("s",$cod_caja);
    $cod_caja = $mysql->real_escape_string($v1);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $num = $resultado->fetch_array(MYSQLI_NUM);
    if($num[0]!=0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function recibirCaja($mysql,$v1,$v2){
    $consulta = "UPDATE cajas set fecha_recibido = CURRENT_TIMESTAMP, receptor = ? WHERE cod_caja = ?";
    $sentencia = $mysql->prepare($consulta);
    $id=$mysql->real_escape_string($v1);
    $cod_caja=$mysql->real_escape_string($v2);
    $sentencia->bind_param("is",$id,$cod_caja);
    if($sentencia->execute())
    {
        return true;
    }
    else
    {
        return false;
    }
}

function listarCajas($mysql){
    $consulta = "SELECT * FROM cajas ORDER BY id DESC";
    $sentencia = $mysql->stmt_init();
    $sentencia = $mysql->prepare($consulta);
    $x=1;
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    while($reg = $resultado->fetch_array(MYSQLI_NUM))
    {
        echo '<tr>';
        echo '<td>'.$x++.'</td>';
        echo '<td><a href="index.php?view=verCaja&cod_caja='.$reg[1].'">'.$reg[1].'</a></td>';
        echo '<td><a href="index.php?view=imprimirCaja&codigo='.$reg[1].'">'.$reg[2].'</a></td>';
        echo '<td>'.$v = ($reg[5] ? '<p class="text-info">Ingresado a bodega Bogotá.</p>':'<p class="text-danger">En transito</p>').'</td>';
        echo '<td width="25%" align="center">
                <form class="form-inline" action="core/controllers/verCajaController.php" method="post">
                  <input type="text" class="form-control mr-sm-2" name="guia" placeholder="" value="'.$reg[6].'">
                  <input type="hidden" class="form-control mr-sm-2" name="paquete" placeholder="" value="'.$reg[1].'">
                  <button type="submit" class="btn btn-primary" name="btn-guia">Guardar</button>
                </form>';
        echo '</tr></td>';
    }
}

function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}

function ingresarNumGuia($mysql,$v1,$v2)
{
    $consulta = "UPDATE cajas set guia = ? WHERE cod_caja = ?";
    $sentencia = $mysql->prepare($consulta);
    $guia=$mysql->real_escape_string($v1);
    $cod_caja=$mysql->real_escape_string($v2);
    $sentencia->bind_param("ss",$guia,$cod_caja);
    if($sentencia->execute())
    {
        return true;
    }
    else
    {
        return false;
    }
}

 ?>
