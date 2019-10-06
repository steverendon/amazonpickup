<?php

function consultarEnviosDisponibles($mysql,$v1){
    $id = $mysql->real_escape_string($v1);
    #consultamos la fecha mas antigua de una membresia activa
    $query1 = $mysql->query("SELECT MIN(inicio) FROM membresias WHERE fin >  CURRENT_DATE AND id_cliente = '$id'");
    $resultado = $query1->fetch_array();
    $mem_act = $resultado[0];
    #consultamos el numero de envios utilizados
    $query2 = $mysql->query("SELECT SUM(num_libras) as util FROM envios WHERE fecha >= '$mem_act' AND id_cliente = '$id'");
    $r1 = $query2->fetch_array();
    $utilizados = $r1['util'];
    #consultamos el numero de envios disponibles
    $query3 = $mysql->query("SELECT SUM(num_envios) as disp FROM membresias WHERE inicio <=  '$mem_act' AND fin >= CURRENT_DATE AND id_cliente = '$id'");
    $r2 = $query3->fetch_array();
    $disponibles = $r2['disp'];
    #restamos los resultados para obtener los envios disponibles reales
    $total = $disponibles - $utilizados;

    return $total;
}

function buscarMembresia($mysql,$v1,$v2)
{
    $num_libras = $mysql->real_escape_string($v1);
    $id_cliente = $mysql->real_escape_string($v2);
    $consulta = "SELECT id FROM membresias WHERE fin >= CURRENT_DATE AND num_envios >= ? AND id_cliente = ? ORDER BY inicio ASC limit 1";
    $sentencia = $mysql->stmt_init();
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param("ii",$num_libras,$id_cliente);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $reg = $resultado->fetch_array(MYSQLI_NUM);
    $num = $resultado->num_rows;
    $sentencia->close();
    if($num>0)
    {
        return $reg[0];
    }
    else
    {
        return 0;
    }
}

function cobrarEnvio($mysql,$v1,$v2)
{
    $id_membresia = $mysql->real_escape_string($v1);
    $cantidad = $mysql->real_escape_string($v2);
    $consulta = "UPDATE membresias SET num_envios= num_envios - ? WHERE id = ?";
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param("ii",$cantidad,$id_membresia);
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

function generarCodigoQr($id){
    require "../libs/phpqrcode/qrlib.php";

    $dir = '../../codigos/';
    if(!file_exists($dir))
       mkdir($dir);

    $filename = $dir . $id;
    $img = $filename;

    $tamaño = 10; //Tamaño de Pixel
	$level = 'H'; //Precisión Alta
	$framSize = 3; //Tamaño en blanco //Texto

    if(!file_exists($filename))
    {
        QRcode::png($id, $filename, $level, $tamaño, $framSize);
        $img = basename($filename);
        return $id;
    }
    else
    {
        return $id;
    }
}

function generarCodigoBarras($id)
{
     $barcodeText = trim($id);
     $barcodeType='code128';
     $barcodeDisplay='vertical';
     $barcodeSize=200;
     if($barcodeText != '')
     {
        echo '<img alt="'.$barcodeText.'"
        src="core/libs/barcode/barcode.php?text='.$barcodeText.'&codetype='.$barcodeType.'&orientation='
        .$barcodeDisplay.'&size='.$barcodeSize.'&print=true&sizefactor=2"/>';
    }else
    {
        echo '<div class="alert alert-danger">Introduzca el nombre del producto para
        generar el código</div>';
    }
}


function enviarProducto($mysql,$v1,$v2,$v3,$v4,$v5){
    $consulta = "INSERT INTO envios(id_cliente,num_libras,operador,descripcion,cod_caja)VALUES(?,?,?,?,?)";
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param("iiiss",$id_cliente,$num_libras,$operador,$descripcion,$caja);
    $id_cliente = $mysql->real_escape_string($v1);
    $num_libras = $mysql->real_escape_string($v2);
    $operador = $mysql->real_escape_string($v3);
    $descripcion = $mysql->real_escape_string($v4);
    $caja = $mysql->real_escape_string($v5);
    if(!$sentencia->execute())
    {
        return false;
    }
    else
    {
        return true;
    }
    $sentencia->close();
}

function verId($mysql,$i)
{
    $id = $mysql->real_escape_string($i);
    $consulta = "SELECT * FROM personas WHERE id = ?";
    $sentencia = $mysql->prepare($consulta);
    $sentencia->bind_param('i',$id);
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
    $sentencia->close();
}

function maxId($mysql)
{
    $consulta = $mysql->query("SELECT max(id) FROM envios");
    $resultado = $consulta->fetch_array();
    $id = $resultado[0];
    return $id;
}

function datosCliente($mysql,$id)
{
    $consulta = $mysql->query("SELECT envios.id_cliente, personas.nombre,personas.direccion, personas.ciudad, personas.departamento,personas.id FROM envios,personas WHERE envios.id = '$id' and personas.id = envios.id_cliente");
    $reg = $consulta->fetch_array();
    echo '<td>
            Enviar a: <br>
            <b>'.$reg[1].' ('.$reg[5].')</b><br>'.$reg[2].'<br>'.$reg[3].', '.$reg[4].', Colombia.<br>
          </td>';

}

function telefonoCliente($mysql,$id)
{
  $consulta = $mysql->query("SELECT envios.id_cliente, personas.telefono FROM envios,personas WHERE envios.id = '$id' and personas.id = envios.id_cliente");
  $reg = $consulta->fetch_array();
  $telefono = $reg[1];
  return $telefono;
}

function enviarMsj($num_telefono,$msj)
{
  $curl = curl_init();

  $query = http_build_query(array(
   'key' => '29c9f52a25401f09a3f4925e5790a2425e45d1465be5eab33286f',
   'client' => '85',
   'phone' => $num_telefono,
   'sms' => $msj,
   'country-code' => 'CO'
  ));

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://www.onurix.com/api/v1/send-sms",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    /*CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,*/
    CURLOPT_POST  => 1,
    CURLOPT_POSTFIELDS => $query,
    CURLOPT_HTTPHEADER => array(
      "content-type: application/x-www-form-urlencoded"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);
/*
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
  }
  */
}

?>
