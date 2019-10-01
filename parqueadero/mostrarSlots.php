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
        $sql = "select * from ticketEntrada where slot = $id AND estado = 1";
        $st2 = $con->query($sql);
$placa = $st2->fetch()['vehiculo'];
        ?>
        onclick="despejarSlot('<?php print $placa?>', <?php print $id?>, <?php print $id2?>); "
        <?php
        print ">Ocupado";
        
        print "<br>Vehiculo: $placa";
    }else{
        print "onclick='ocuparLugar($id, $id2)'> Disponible";
        $sql = "select * from tipo where id = $tipo";
        $st2 = $con->query($sql);
        print "<br>Tipo: ".$st2->fetch()[1];
    }
    print "</div>";

}
?>