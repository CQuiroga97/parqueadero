<?php
session_start();
extract($_SESSION);
?>
<html>
<head>
<link href="/parqueadero-1/css/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="menu">
<h2>Sistema de parqueadero!</h2>
<?php
if(isset($_SESSION['id'])){
    ?>
    <div style="right: 10; position: absolute; top: 25px;">
    <?php
        print "Bienvenido $nombre $apellido | <a href='/parqueadero-1/usuario/index.php'>Inicio</a><a href='/parqueadero-1/cerrarSesion.php'>Cerrar Sesion</a>";
    ?>
    </div>
    <?php
}else{
    ?>
    <div style="right: 0; position: absolute; top: 25px;">
    <button onclick="window.location.href='iniciarSesion.php'">Iniciar Sesion</button>
    <button onclick="window.location.href='crearUsuario.php'">Registrar cuenta</button>
    </div>
    <?php
}

?>

</div>