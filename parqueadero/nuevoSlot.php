<?php
include("../conexion.php");
extract($_REQUEST);
print $sql ="insert into slot (estado, tipo, parqueadero) values (0, 1, $parquadero)";
$st = $con->prepare($sql);
$st->execute();

?>