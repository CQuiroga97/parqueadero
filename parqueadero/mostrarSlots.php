<?php
include("../conexion.php");
extract($_REQUEST);
$id2 = $id;
$sql = "select * from slot where parqueadero = $id ";
$st = $con->query($sql);
while($datos = $st->fetch()){
    extract($datos);
    print "<div class='slot'";
    
    if($estado == 1){
        print ">Ocupado";
        $sql = "select * from ticketEntrada where slot = $id AND estado = 1";
        $st2 = $con->query($sql);
        print "<br>Vehiculo: ".$st2->fetch()['vehiculo'];
    }else{
        print "onclick='ocuparLugar($id, $id2)'> Disponible";
        $sql = "select * from tipo where id = $tipo";
        $st2 = $con->query($sql);
        print "<br>Tipo: ".$st2->fetch()[1];
    }
    print "</div>";

}
?>