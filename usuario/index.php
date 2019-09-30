<?php
include("../plantilla.php");
include("../conexion.php");
?>

<div class="menuUsuario">
<button  style="background-image: url(../src/img/vehiculo.png)" onclick="window.location.href='registrarVehiculo.php'"></button>
<?php
if($rol == 2){
    ?>
    <button  style="background-image: url(../src/img/admin.png)" onclick="window.location.href='../admin/admin.php'"></button>
    <?php
}
if($rol == 2 || $rol == 3){
    ?>
    <button  style="background-image: url(../src/img/parqueadero.png)" onclick="window.location.href='../parqueadero/parqueaderos.php'"></button>
    <?php
}
?>
</div>

<h1>Mis vehiculos</h1>
<?php

$sql = "select * from vehiculo where propietario = $id";
$st = $con->query($sql);
while($datos = $st->fetch()){
    extract($datos);
    print "$marca $modelo $placa<br>";
}

?>