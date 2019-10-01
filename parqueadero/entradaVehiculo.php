<?php
include("../plantilla.php");
include("../conexion.php");
extract($_GET);
$sql = "select * from parqueadero where id = $parqueadero";
$st = $con->query($sql);
extract($st->fetch());
print "<h1 style='display: inline-block;'>$nombre</h1> ($direccion)<h3>Cupos:</h3>";
print "<div id ='slots'>";


print "</div><script>mostrarSlots('$parqueadero')</script>";
?>

<div class='slot' onClick="nuevoSlot('<?php print $parqueadero; ?>')">Nuevo Slot</div>
<div class="ocuparSlot">
<div class="textSlot">
Buscar por:<br>
Vehiculo: <input type="radio" name = "buscar" value="vehiculo">
Usuario: <input type="radio" name = "buscar" value="vehiculo">
<br>
<input type="text" name = "id">
</div>
</div>