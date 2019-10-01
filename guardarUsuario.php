<?php
include("conexion.php");
extract($_POST);
$sql = "select * from usuario where id = $id";
$st = $con->query($sql);
if($st->rowCount()>0){
    print "<script>alert('El usuario ya existe!'); window.location.href='crearUsuario.php'</script>";
}else{

    $pass = md5($pass);
    print $sql = "insert into usuario (id, nombre, apellido, pass, rol) values ($id, '$nombre', '$apellido', '$pass', 1)";
    $st = $con->prepare($sql);
    $st->execute();
    header("location:inicio.php");
}
?>