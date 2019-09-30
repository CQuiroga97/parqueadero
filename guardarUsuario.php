<?php

include("conexion.php");
extract($_POST);
$pass = md5($pass);
print $sql = "insert into usuario (id, nombre, apellido, pass, rol) values ($id, '$nombre', '$apellido', '$pass', 1)";
$st = $con->prepare($sql);
$st->execute();
header("location:inicio.php")
?>