<?php
session_start();
include("../conexion.php");
extract($_POST);
$pass = md5($pass);
print $sql = "insert into vehiculo (placa, marca, modelo, propietario, tipo) values ('$placa', '$Marca', '$modelo', '".$_SESSION['id']."', $tipo)";
$st = $con->prepare($sql);
$st->execute();
header("location:index.php");
?>