<?php
include("plantilla.php");
print "hola mundo!";


?>
<div class="nuevoUsuario">
    <form action="guardarUsuario.php" method="POST">
<input type="id" name="id" id="id" placeholder="Identificacion" required><br><br>
<input type="text" name="nombre" id="nombre" placeholder="Nombre" required><br><br>
<input type="text" name="apellido" id="apellido" placeholder="Apellido" required><br><br>
<input type="password" name="pass" id="pass" placeholder="Password" required><br><br>
<input type="submit" value="Guardar">
</form>
</div>