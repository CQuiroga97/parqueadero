<?php
include("../conexion.php");
extract($_REQUEST);
$sql = "select * from slot where parqueadero = $id AND estado = 0";
$st = $con->query($sql);
while($datos = $st->fetch()){
    extract($datos);
    print "<div class='slot'>$id</div>";
}
?>