<?php
include("../conexion.php");
extract($_REQUEST);
$sql = "select * from ticketEntrada where vehiculo = '$placa' AND estado = '1'";
$st = $con->query($sql);
if($st->rowCount()>0){
    $te = $st->fetch();
    $te = $te['id'];
    $sql = "select * from vehiculo where placa = '$placa'";
    $st = $con->query($sql);
    $propeidario = $st->fetch()['propietario'];
     $sql = "insert into ticket (ticketEntrada, horaFinal, total) values ($te, '01:00PM', '20002'); update ticketEntrada set estado = 1 where id = $te; update slot set estado = 0 where id = $slot";
    $st = $con->prepare($sql);
    if($st->execute())print "Dato almacenado!";
    else print "Algo salio mal :(";
}



?>