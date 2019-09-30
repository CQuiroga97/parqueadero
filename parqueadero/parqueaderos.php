<?php
include("../plantilla.php");
include("../conexion.php");
?>
<h1>Parqueaderos:</h1>
<?php

$sql = "select * from parqueadero";
$st = $con->query($sql);
while($datos = $st->fetch()){
    extract($datos);
    print "<a href='entradaVehiculo.php?parqueadero=$id'>$nombre</a>";
    $sql = "select * from slot where parqueadero = $id";
    $st2 = $con->query($sql);
    $sql = "select * from slot where parqueadero = $id AND estado = 0";
    $st3 = $con->query($sql);
    print " Espacios disponibles: ";
    print $st3->rowCount();
    print "/";
    print $st2->rowCount();
}

?>