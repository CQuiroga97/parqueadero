<?php
include("../conexion.php");
extract($_REQUEST);
$sql = "select * from ticketEntrada where vehiculo = '$placa' AND estado = '0'";
$st = $con->query($sql);
if($st->rowCount()<1){
    $sql = "select * from vehiculo where placa = '$placa'";
    $st = $con->query($sql);
    $propeidario = $st->fetch()['propietario'];
    print $sql = "insert into ticketEntrada (usuario, slot, vehiculo, horaInicial, estado) values ($propeidario, $slot, '$placa', '12:00AM', '1'); update slot set estado = 1 where id = $slot";
    $st = $con->prepare($sql);
    if($st->execute())print "Dato almacenado!";
    else print "Algo salio mal :(";
}



?>