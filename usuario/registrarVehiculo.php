<?php
include("../conexion.php");
include("../plantilla.php");
?>
<h1>Registrar vehiculo</h1>
<div class="nuevoUsuario">
    <form action="guardarVehiculo.php" method="POST">
<input type="text" name="placa" id="placa" placeholder="Placa" required><br><br>
<input type="text" name="Marca" id="Marca" placeholder="Marca" required><br><br>
<input type="text" name="modelo" id="modelo" placeholder="Modelo" required><br><br>
<select name="tipo">
    <?php

    print $sql = "select * from tipo";
    $st = $con->query($sql);
    while($datos = $st->fetch()){
        extract($datos);
        print "<option value='$id'>$nombre</option>";
    }

?>
</select><br><br>
<input type="submit" value="Registrar">
</form>
</div>