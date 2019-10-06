<?php

function comprarMembresia($mysql,$v1,$v2,$v3,$v4)
{
    $id_cliente = $v1;
    $membresia = $v2;
    $num_envios = $v3;
    $n = $v4;
    $sql = "INSERT INTO membresias (id_cliente,membresia,inicio,fin,num_envios,envios)VALUES('$id_cliente','$membresia',
    current_date,date_add(current_date, interval $n month),$num_envios,$num_envios)";
    $mysql->query($sql);
}

?>
