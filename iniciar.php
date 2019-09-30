<?php
session_start();
require("conexion.php");
extract($_POST);
$pass = md5($pass);
$sql = "select * from usuario where id = $id AND pass='$pass'";
$st = $con->query($sql);
if($st->rowCount()>0){
    extract($st->fetch());
    $_SESSION['id']=$id;
    $_SESSION['nombre']=$nombre;
    $_SESSION['apellido']=$apellido;
    $_SESSION['rol']=$rol;
    header("location:usuario/index.php");
    print "Correcto!";
}else{
    header("iniciarSesion.php");
    print "Incorrecto";
}

?>